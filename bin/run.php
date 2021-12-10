<?php

// A commenter si vous utilisez composer
//require __DIR__ . '/../vendor/autoload.php';
include(__DIR__ . '/../src/Hello.php');
include(__DIR__ . '/../src/Vehicule.php');
include(__DIR__ . '/../src/Article.php');
include(__DIR__ . '/../src/Character.php');
include(__DIR__ . '/../src/Owner.php');
include(__DIR__ . '/../src/Bus.php');
include(__DIR__ . '/../src/Car.php');
include(__DIR__ . '/../src/Costumer.php');
include(__DIR__ . '/../src/Shop.php');




$hello = new \App\Hello();

echo $hello->say() . "\n";

$ListVehicules1 = [
    $Renault = new Car('fuel', 'Renault Clio', 12000, 1),
    $Peugoet = new Car('fuel', 'Peugeot 205', 8000, 25),
    $DaciaSandero = new Car('fuel', 'Dacia Sandero', 9000, 5),
    $Renault = new Bus(20,'Scania', 19500, 12)
];

$ListVehicules2 = [
    $Model3 = new Car('electric', 'Model 3', 43800, 0),
    $ModelY = new Car('electric', 'Model Y', 59990, 0),
    $ModelS = new Car('electric', 'Model S', 104990, 0),
    $Model3_01 = new Car('electric', 'Model 3 bis', 43800, 4)
];


$JeanneSerge = new Costumer(5400, 'Jeanne et Serge');
$Robert = new Owner('Robert');
$Elon = new Owner('Elon');
$LeMeilleurGarage = new Shop('Le meilleur garage', $Robert, $ListVehicules1);
$Tesla = new Shop('Tesla', $Elon, $ListVehicules2);

echo $LeMeilleurGarage->getArticle($JeanneSerge);
echo $Tesla->getArticle($JeanneSerge);