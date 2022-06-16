<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbsController
{
  public function render(string $viewName): void
  {
    include "/application/src/View/{$viewName}.php";
  }
}
