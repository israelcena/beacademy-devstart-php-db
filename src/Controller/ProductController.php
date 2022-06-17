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
    parent::render('product/add');
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
