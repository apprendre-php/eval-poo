<?php

namespace App;

abstract class Vehicule {

    /* VARS */
    public string $name;
    protected int $age;
    protected  float $price;
    public string $fonction;

    /* CONSTRUCT CLASS */
    public function __construct($name, $age, $price, $fonction)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setPrice($price);
        $this->fonction = $fonction;
    }

    /* Set price */
    public function setPrice($price){
        $this->price = $price;
    }

    /* Get sitsCount */
    


    /* FONCTION ABSTRACT */
    abstract public function getFonction(Vehicule $function) :string;
    abstract public function getPrice(Vehicule $price) ;

   
}