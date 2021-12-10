<?php

require __DIR__ . '/../src/Character.php';
require __DIR__ . '/../src/Vehicule.php';
require __DIR__ . '/../src/Article.php';
require __DIR__ . '/../src/Bus.php';
require __DIR__ . '/../src/Car.php';
require __DIR__ . '/../src/Owner.php';
require __DIR__ . '/../src/Customer.php';
require __DIR__ . '/../src/Shop.php';

$customer = new Customer('Jeanne et Serge',5400);

$robert = new Owner('Robert');

$renaultClio = new Car('fuel','Renault Clio',12000,1);
$peugeot205 = new Car('fuel','Peugeot 205',8000,25);
$daciaSandero = new Car('fuel','Dacia Sandero',9000,5);
$Scania = new Bus('Scania',19500,12);

$articlesLeMeilleurGarage = [$renaultClio,$peugeot205,$daciaSandero,$Scania];

$leMeilleurGarage = new Shop('Le meilleur garage',$robert,$articlesLeMeilleurGarage);

$elon = new Owner('Elon');

$model3 = new Car('electric','Model 3',43800,0);
$modelY = new Car('electric','Model Y',59990,0);
$modelS = new Car('electric','Model S',104990,0);
$model_3 = new Car('electric','Model 3',43800,4);

$articlesTesla = [$model3,$modelY,$modelS,$model_3];

$tesla = new Shop('Tesla',$elon,$articlesTesla);

foreach($leMeilleurGarage->getVehiculeInCustomerBudget($customer) as $vehiculeInBudget){
    echo $vehiculeInBudget->name;
}
foreach($tesla->getVehiculeInCustomerBudget($customer) as $vehiculeInBudget){
    echo $vehiculeInBudget->name;
}

?></br></br></br><?php

echo "Je connais le PHP.";