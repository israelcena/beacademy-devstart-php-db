<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbsController
{
  public function indexAction(): void
  {
    parent::render("index");
  }
}
