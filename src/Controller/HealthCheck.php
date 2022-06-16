<?php

declare(strict_types=1);

namespace App\Controller;

final class HealthCheck
{
  public function healthCheck(): void
  {
    echo 'Health Check!';
  }
}
