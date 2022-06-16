<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';


$dbInfo = [
  'host' => '10.0.10.176',
  'port' => '8003',
  'dbname' => 'db_store',
  'username' => 'root',
  'password' => 'root'
];

$connection = new PDO("mysql:host={$dbInfo['host']};port={$dbInfo['port']};dbname={$dbInfo['dbname']}", $dbInfo['username'], $dbInfo['password']);

// queries test

$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);
$preparacao->execute();

var_dump($preparacao->fetchAll());

echo "########################################################";

$query2 = 'SELECT * FROM tb_product;';
$preparacao2 = $connection->prepare($query2);
$preparacao2->execute();

while ($registro = $preparacao2->fetch()) {
  var_dump($registro);
}
