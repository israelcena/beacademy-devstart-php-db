<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbsController
{
  public function listAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('SELECT * FROM tb_category');
    $data->execute();
    parent::render('category/list', $data);
  }
  public function addAction(): void
  {
    if ($_POST) {
      $con = Connection::getConnetion();
      $data = $con->prepare('INSERT INTO tb_category (name, description) VALUES (:name, :description)');
      $data->bindValue(':name', $_POST['name']);
      $data->bindValue(':description', $_POST['description']);
      $data->execute();
      header('Location: /categorias');
    }
    parent::render('category/add');
  }
  public function removeAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('DELETE FROM tb_category WHERE id = :id');
    $data->bindValue(':id', $_GET['id']);
    $data->execute();
    header('Location: /categorias');
  }
  public function editAction(): void
  {
    $con = Connection::getConnetion();
    $data = $con->prepare('SELECT * FROM tb_category WHERE id = :id');
    $data->bindValue(':id', $_GET['id']);
    $data->execute();
    parent::render('category/edit', $data->fetch(\PDO::FETCH_ASSOC));
    if ($_POST) {
      $data = $con->prepare('UPDATE tb_category SET name = :name, description = :description WHERE id = :id');
      $data->bindValue(':name', $_POST['name']);
      $data->bindValue(':description', $_POST['description']);
      $data->bindValue(':id', $_GET['id']);
      $data->execute();
      header('Location: /categorias');
    }
  }
}
