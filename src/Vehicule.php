<?php

namespace App;

abstract class Vehicule {

    public string $name;
    protected float $price;
    protected int $age;

    public function __construct(
        string $name,
        float $price,
        int $age,
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }
}