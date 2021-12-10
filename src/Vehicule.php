<?php 

abstract class Vehicule{

    public string $name;
    protected float $price;
    protected int $age;

    public function __construct($name,$price,$age){
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

}