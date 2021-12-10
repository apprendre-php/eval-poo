<?php

include __DIR__ . '/../src/Article.php';
include __DIR__ . '/../src/Bus.php';
include __DIR__ . '/../src/Car.php';
include __DIR__ . '/../src/Character.php';
include __DIR__ . '/../src/Customer.php';
include __DIR__ . '/../src/Owner.php';
include __DIR__ . '/../src/Shop.php';
include __DIR__ . '/../src/Vehicule.php';

$customer_1 = new Customer ('Jeanne et Serge','5400');
$owner_1 = new Owner ('Robert');

$shop_1 = new Shop ('Le meilleur garage','Robert');
$Car_1 = new Car ('Renault Clio','1','12000');
$Car_2 = new Car ('Peugeot 205','25','8000');
