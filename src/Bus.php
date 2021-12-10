<?php

namespace App;

class Bus extends Vehicule implements Article{
    
    /* VARS */
    public string $fonction;
    private int $sitsCount = 20;


     /* CONSTRUCT CLASS */
    public function __construct($sitsCount, $fonction)
    {
        $this->setSitsCount($sitsCount);
        $this->fonction = $fonction;
    }


    /* Set sitsCount */
    public function setSitsCount($sitsCount){
        $this->sitsCount = $sitsCount;
    }

    /* Get sitsCount */
    public function getSitsCount(){
        return $this->sitsCount;
    }


   

    /* ENVOIE D'INFORMATION VIA L'ABSTRACT */
    public function getFonction(Vehicule $fonction) :string {
        return $this->fonction;
    }

    /* CALCUL PRIX */
    public function getPrice(Vehicule $price) {
        
       
    }
}

?>