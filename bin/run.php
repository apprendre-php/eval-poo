<?php

// A commenter si vous utilisez composer
require __DIR__ . '/../src/hello.php';
require __DIR__ . '/../src/Charactere.php';
require __DIR__ . '/../src/Customer.php';
require __DIR__ . '/../src/Owner.php';
require __DIR__ . '/../src/Article.php';
require __DIR__ . '/../src/Vehicule.php';
require __DIR__ . '/../src/Car.php';
require __DIR__ . '/../src/Bus.php';

// Obselete
// $hello = new \App\Hello();
// echo $hello->say() . "\n <br> <br>";


//Customer
$nameCustomer = new \App\Customer(5400, "Jeanne et Serge");

echo "nom des customer : " . $nameCustomer->getName($nameCustomer) . "<br>";

//Owner
$nameOwner = new \App\Owner("Robert");
$nameOwner_2= new \App\Owner("Elon");

echo "nom du premier Owner : " . $nameOwner->getName($nameOwner) . "<br>";
echo "nom du second Owner : " . $nameOwner_2->getName($nameOwner_2) . "<br>";




