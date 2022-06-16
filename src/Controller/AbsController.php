<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

abstract class AbsController
{
  public function render(string $viewName): void
  {

    $con = Connection::getConnetion();

    $result = $con->prepare('SELECT * FROM tb_category');
    $result->execute();

    var_dump($result->fetchAll(\PDO::FETCH_ASSOC));
    include "/application/src/View/{$viewName}.php";
  }
}
