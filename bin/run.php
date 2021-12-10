<?php

// A commenter si vous utilisez composer
require __DIR__ . '/../src/Hello.php';
require __DIR__ . '/../src/Character.php';
require __DIR__ . '/../src/Owner.php';
require __DIR__ . '/../src/Customer.php';
require __DIR__ . '/../src/Article.php';
require __DIR__ . '/../src/Vehicule.php';
require __DIR__ . '/../src/Car.php';
require __DIR__ . '/../src/Bus.php';
require __DIR__ . '/../src/Shop.php';


$hello = new \App\Hello();
echo $hello->say() . "\n" . "<br>";

//Owner Robert
$nameOwnerRobert = new \App\Owner("Robert");
echo "nom du Owner du Le Garage de Morpheus : " . $nameOwnerRobert->getName($nameOwnerRobert) . "<br>";

//Owner Elon
$nameOwnerElon = new \App\Owner("Elon");
echo "nom du Owner du Tesla : " . $nameOwnerElon->getName($nameOwnerElon) . "<br>";


//Customer
$nameCustomer = new \App\Customer("Jeanne et Serge", 5400);
echo "nom du Customer : " . $nameCustomer->getName($nameCustomer) . " et ils ont un budget de  " . $nameCustomer->getBudget($nameCustomer) . " € " . "<br>";


//Shop Robert

$robertCar = [
    new \App\Shop("Renault Clio"),
    new \App\Shop("Peaugeot 205"),
];

$shopRobert = new \App\Shop("Le Garage de Morpheus", "Robert", $robertCar);

echo "Ce shop se nomme : " . $shopRobert->getName($shopRobert) . " et a pour propriétaire : " .  $shopRobert->getOwner($shopRobert) . $shopRobert->getArticle($shopRobert) . "<br>";

