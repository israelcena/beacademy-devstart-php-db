<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController extends AbsController
{
  public function listAction(): void
  {
    parent::render('product/list');
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
