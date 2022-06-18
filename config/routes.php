<?php

use App\Controller\HealthCheck;
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

function createRoute(string $controllerName, string $methodName)
{
  return [
    'controller' => $controllerName,
    'method' => $methodName
  ];
}

$routes = [
  '/' => createRoute(IndexController::class, 'indexAction'),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
  '/produtos/editar' => createRoute(ProductController::class, 'editAction'),
  '/produtos/deletar' => createRoute(ProductController::class, 'removeAction'),
  '/produtos/relatorio' => createRoute(ProductController::class, 'reportAction'),
  '/categorias' => createRoute(CategoryController::class, 'listAction'),
  '/categorias/novo' => createRoute(CategoryController::class, 'addAction'),
  '/categorias/editar' => createRoute(CategoryController::class, 'editAction'),
  '/categorias/deletar' => createRoute(CategoryController::class, 'removeAction'),
  '/healthcheck' => createRoute(HealthCheck::class, 'healthcheck')
];

return $routes;
