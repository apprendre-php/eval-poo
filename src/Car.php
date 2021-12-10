<?php

namespace App;

class Car extends Vehicule implements Article{


    /* VARS */
    private string $type;
    public string $fonction;

    /* CONSTRUCT CLASS */
    public function __construct($type, $fonction)
    {
        $this->setType($type);
        $this->fonction = $fonction;
    }

    /* Set type */
    public function setType($type){
        $this->type = $type;
    }

    /* Get sitsCount */
    public function getType(){
        return $this->type;
    }

    

    /* ENVOIE D'INFORMATION VIA L'ABSTRACT */
    public function getFonction(Vehicule $fonction) :string {
        return $this->fonction;
    }


    /* CALCUL PRIX */
    public function getPrice(Vehicule $price) {
        switch ($this->type){
            case "electric";
            
                $price = $price - $price * ($this->age*2);
                $price = $price -$price * 0.2;
                

            case "gazoline";
                $price = $price - $price * ($this->age*2);

    //         $temp =  $this->price - ( $this->price * 0.02) *  $this->age;
    //         $price->setPrice($temp);

            case "fuel";
                $price = $price - $price * ($this->age*2);
    //         $temp =  $this->price - ( $this->price * 0.02) *  $this->age;
    //         $price->setPrice($temp);
        }
    }

}

?>