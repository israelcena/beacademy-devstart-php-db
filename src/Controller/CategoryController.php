<?php

declare(strict_types=1);

namespace App\Controller;

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
    parent::render('category/add');
  }
  public function removeAction(): void
  {
    parent::render('category/remove');
  }
  public function editAction(): void
  {
    parent::render('category/edit');
  }
}
