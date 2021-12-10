<?php

abstract class Vehicule
{
    public $name;
    protected $price;
    protected $age;

    public function __construct(string $name, float $price, int $age)
    {
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }
}