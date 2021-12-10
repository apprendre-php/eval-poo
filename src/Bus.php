<?php 

class Bus extends Vehicule implements Article{

    private int $sitsCounts;

    public function __construct($name,$price,$age,$sitsCounts = 20){
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
        $this->sitsCounts = $sitsCounts;
    }

    public function getPrice() :float{
        $price = $this->price;
        $price = $price - (($price/100*2)*$this->age);
        $price = $price + (($price/100)*$this->sitsCounts);
        return $price;
    }

}