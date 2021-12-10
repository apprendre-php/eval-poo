<?php
require 'src/class/Article.php';
require 'src/class/Character.php';
require 'src/class/Shop.php';
require 'src/class/Vehicle.php';

$customer = new \App\Customer('Jeanne et Serge', 5400);

// Robert //

$clio = new \App\Car('Renault Clio', 1, 'fuel', 12000);
$p205 = new \App\Car('Peugeot 205', 25, 'fuel', 8000);
$dacia = new \App\Car('Dacia Sandero', 5, 'fuel', 9000);
$scania = new \App\Bus('Scania', 12, 19500);

$robert = new \App\Owner('Robert');

// Elon //

$model3 = new \App\Car('Model 3', 0, 'electric', 43800);
$modely = new \App\Car('Model Y', 0, 'electric', 59990);
$models = new \App\Car('Model S', 0, 'electric', 104990);
$model33 = new \App\Car('Model 3', 4, 'electric', 43800);

$elon = new \App\Owner('Elon');

$shops = [
    $robertShop = new \App\Shop('Le meilleur garage', $robert, [$clio, $p205, $dacia, $scania]),
    $elonShop = new \App\Shop('Tesla', $elon, [$model3, $modely, $models, $model33])
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche</title>
</head>

<body>
    <main>
        <h1>Résultats des recherches de véhicules pour <?= $customer->getName() ?> pour un budget de <?= $customer->budget ?> €</h1>
        <?php
        foreach ($shops as $shop) :
            $results = $shop->getArticlesInCustomerBudget($customer)
        ?>
            <h2><?= $shop->name ?></h2>
            <ul>
                <?php
                if (count($results) <= 0) : ?>
                    <li>Aucun véhicules</li>
                <?php endif;
                foreach ($results as $result) : ?>
                    <li><?= $result->name ?> — <?= round($result->getPrice(), 2) ?> €</li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>

    </main>
</body>

</html>