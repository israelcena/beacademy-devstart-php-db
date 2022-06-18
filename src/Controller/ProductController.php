<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;

class ProductController extends AbsController
{
  public function listAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('SELECT * FROM tb_product');
    $data->execute();
    parent::render('product/list', $data->fetchAll(\PDO::FETCH_ASSOC));
  }
  public function addAction(): void
  {
    $con = Connection::getConnetion();
    $categories = $con->prepare('SELECT * FROM tb_category');
    $categories->execute();
    if ($_POST) {
      $query = $con->prepare('INSERT INTO tb_product (name, description, value, photo, quantity, category_id, created_at ) VALUES (:name, :description, :value, :photo, :quantity, :category_id, :created_at)');
      $query->bindValue(':name', $_POST['name']);
      $query->bindValue(':description', $_POST['description']);
      $query->bindValue(':value', $_POST['value']);
      $query->bindValue(':photo', $_POST['photo']);
      $query->bindValue(':quantity', $_POST['quantity']);
      $query->bindValue(':category_id', $_POST['category']);
      $query->bindValue(':created_at', date('Y-m-d H:i:s'));
      $query->execute();
      header('Location: /produtos');
    }
    parent::render('product/add', $categories);
  }
  public function removeAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('DELETE FROM tb_product WHERE id = :id');
    $data->bindValue(':id', $_GET['id']);
    $data->execute();
    header('Location: /produtos');
  }
  public function editAction(): void
  {
    $id = $_GET['id'] ?? null;
    $con = Connection::getConnetion();
    $products = $con->prepare('SELECT * FROM tb_product WHERE id = :id');
    $products->bindValue(':id', $id);
    $products->execute();

    $categories = $con->prepare('SELECT * FROM tb_category');
    $categories->execute();

    parent::render('product/edit', [
      'product' => $products->fetch(\PDO::FETCH_ASSOC),
      'categories' => $categories->fetchAll(\PDO::FETCH_ASSOC),
    ]);

    if ($_POST) {
      $query = $con->prepare('UPDATE tb_product SET name = :name, description = :description, value = :value, photo = :photo, quantity = :quantity, category_id = :category_id WHERE id = :id');
      $query->bindValue(':name', $_POST['name']);
      $query->bindValue(':description', $_POST['description']);
      $query->bindValue(':value', $_POST['value']);
      $query->bindValue(':photo', $_POST['photo']);
      $query->bindValue(':quantity', $_POST['quantity']);
      $query->bindValue(':category_id', $_POST['category']);
      $query->bindValue(':id', $id);
      $query->execute();
      echo '<script> location.replace("/produtos"); </script>';
    }
  }

  public function reportAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('SELECT name, quantity FROM tb_product');
    $data->execute();
    $data = $data->fetchAll(\PDO::FETCH_ASSOC);

    $content = '';

    foreach ($data as $product) {
      $content .= "<tr>
        <td>{$product['name']}</td>
        <td>{$product['quantity']}</td>
      </tr>";
    }

    $html = "
    <h1>Relatório de Produtos </h1>
    <table border='1' width='100%' class='table table-striped'>
      <thead>
        <tr>
          <th scope='col'>Nome</th>
          <th scope='col'>Quantidade</th>
        </tr>
      </thead>
      <tbody>
        {$content}
      </tbody>
    ";
    $pdf = new Dompdf();
    $pdf->loadHtml($html);
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $pdf->stream();
  }
}
