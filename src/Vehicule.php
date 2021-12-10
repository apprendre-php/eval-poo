<?php

abstract class Vehicule{

    public string $name;
    private float $price;
    private int $age;

    public function __construct(string $name, float $price, int $age) {
        
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

}