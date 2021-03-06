<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbsController
{
  public function render(string $viewName, $data = null): void
  {
    include "/application/src/View/_partials/head.php";
    include "/application/src/View/_partials/navbar.php";
    include "/application/src/View/{$viewName}.php";
    include "/application/src/View/_partials/footer.php";
  }
}
