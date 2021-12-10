<?php

// A commenter si vous utilisez composer
// require __DIR__ . '/../vendor/autoload.php';

$JeanneSerge = new \App\Customer('Jeanne et Serge');
$JeanneSerge->setBudget(5400);


$Renault_Clio = new \App\Car('Renault Clio', 12000, 1);
$Renault_Clio->setType('fuel');

$Peugeot_205 = new \App\Car('Peugeot 205', 8000, 25);
$Peugeot_205->setType('fuel');

$Dacia_Sandero = new \App\Car('Dacia Sandero', 9000, 5);
$Dacia_Sandero->setType('fuel');

$Scania = new \App\Bus('Scania', 19500, 12);

$vehicules_best_garage = [
    $Renault_Clio,
    $Peugeot_205,
    $Dacia_Sandero,
    $Scania
];

$Model_3 = new \App\Car('Model 3', 43800, 0);
$Model_3->setType('electric');

$Model_Y = new \App\Car('Model Y', 59990, 0);
$Model_Y->setType('electric');

$Model_S = new \App\Car('Model S', 104990, 0);
$Model_S->setType('electric');

$Old_Model_3 = new \App\Car('Model 3', 43800, 4);
$Old_Model_3->setType('electric');

$vehicules_Tesla = [
    $Model_3,
    $Model_Y,
    $Model_S,
    $Old_Model_3
];

$owners = [
    $Robert = new \App\Owner('Robert'),
    $Elon = new \App\Owner('Elon')
];

$shops = [
    $Best_garage = new \App\Shop('Le meilleur garage', $Robert, $vehicules_best_garage),
    $Elon = new \App\Shop('Tesla', $Elon, $vehicules_Tesla)
];


