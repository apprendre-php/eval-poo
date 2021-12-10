<?php
require './src/default.php';
require './bin/run.php';

echo 'Budget de '. $JeanneSerge->getName() . ' est de ' . $JeanneSerge->getBudget() .' €' ;
echo '</br> </br>';

foreach ($shops as $shop) {
    echo 'Les voitures disponibles dans '. $shop->name . ' de ' . $shop->owner->getName() . ' sont : ' ;
    echo '</br>';

    foreach ($shop->getArticlesInCustomerBudget($JeanneSerge) as $vehicule) {
        echo '- ';
        echo $vehicule->getName();
        echo ' au prix de ';
        echo round($vehicule->getPrice(), 2) ;
        echo ' €';
        echo '</br>';
        echo '<i>Prix réel : ('. $vehicule->getPrice().' €)</i>';
    }
    echo '</br> </br>';
}

