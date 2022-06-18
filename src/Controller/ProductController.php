<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

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
      // $query->bindValue(':star', $_POST['star']);
      $query->execute();
      header('Location: /produtos');
    }
    parent::render('product/add', $categories);
  }
  public function removeAction(): void
  {
    parent::render('product/remove');
  }
  public function editAction(): void
  {
    parent::render('product/edit');
  }
}
