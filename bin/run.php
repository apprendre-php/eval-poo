<?php

require __DIR__ . '/../src/Character.php';
require __DIR__ . '/../src/Customer.php';
require __DIR__ . '/../src/Owner.php';
require __DIR__ . '/../src/Article.php';
require __DIR__ . '/../src/Vehicle.php';
require __DIR__ . '/../src/Car.php';
require __DIR__ . '/../src/Bus.php';
require __DIR__ . '/../src/Shop.php';

/*Shop 1*/

$Customer_1 = new Customer('5400','Jeanne et Jean');
$Owner_1 = new Owner ('Robert');

$Car_1 = new Car('fuel','Renault Clio','12000','1');
$Car_2 = new Car('fuel','Peugeot 205', '8000','25');
$Car_3 = new Car('fuel','Dacia Sandero','9000','5');
$Bus_1 = new Bus('20','Scania','19500');
$Vehicle_list_1=[$Car_1,$Car_2,$Car_3,$Bus_1];
$Shop_1 = new Shop ('Le meilleur garage',$Owner_1,$Vehicle_list_1);


/*Shop 2*/

$Owner_2 = new Owner('Elon');
$Car_4 = new Car ('electric','Model 3','43800','0');
$Car_5 = new Car ('electric','Model Y','59990','0');
$Car_6 = new Car ('electric','Model S','104990','4');
$Car_7 = new Car ('electric','Model 3','43800','4');
$Vehicle_list_2=[$Car_4,$Car_5,$Car_6,$Car_7];
$Shop_2 = new Shop ('Tesla',$Owner_2,$Vehicle_list_2);

echo "Voitures dans le budget pour le shop 1 : " . $Shop_1->Valid_articles($Customer_1) . "\n";

