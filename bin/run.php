<?php

require __DIR__ . '/../src/Article.php';
require __DIR__ . '/../src/Vehicule.php';
require __DIR__ . '/../src/Character.php';
require __DIR__ . '/../src/Bus.php';
require __DIR__ . '/../src/Car.php';
require __DIR__ . '/../src/Customer.php';
require __DIR__ . '/../src/Owner.php';
require __DIR__ . '/../src/Shop.php';

$customer = new Customer('Jeanne et Serge', 5400);


$robert = new Owner('Robert');

$renault = new Car('Renault Clio', 1, 'fuel', 12000);
$peugeot = new Car('Peugeot 205', 25, 'fuel', 8000);
$dacia = new Car('Dacia Sandero', 5, 'fuel', 9000);
$scania = new Bus('Scania', 12, 19500);

$listVehiculesRobert = [
  $renault,
  $peugeot,
  $dacia,
  $scania
];

$garage = new Shop('Le meilleur garage', $robert, $listVehiculesRobert);


$elon = new Owner('Elon');

$model3 = new Car('Model 3', 0, 'electric', 43800);
$modelY = new Car('Model Y', 0, 'electric', 59990);
$modelS = new Car('Model S', 0, 'electric', 104990);
$model3_2 = new Car('Model 3', 4, 'electric', 43800);

$listVehiculesElon = [
  $model3,
  $modelY,
  $modelS,
  $model3_2
];

$tesla = new Shop('Tesla', $elon, $listVehiculesElon);

foreach($garage->listArticles($customer) as $article){
  echo $article;
}

foreach($tesla->listArticles($customer) as $article){
  echo $article;
}