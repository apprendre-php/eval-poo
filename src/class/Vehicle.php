<?php

namespace App;

abstract class Vehicle
{
    public string $name;
    protected int $age;
    protected float $price;

    public function __construct($name, $age, $type, $price)
    {
        $this->name = $name;
        $this->age = $age;
        $this->price = $price;
    }
}

class Car extends Vehicle implements Article
{
    public string $type;

    public function __construct($name, $age, $type, $price)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setType($type);
        $this->price = $price;
    }

    private function setType($type): void
    {
        if ($type === 'electric' || $type === 'gazoline' || $type === 'fuel') {
            $this->type = $type;
        }
    }

    public function getPrice(): float
    {
        if ($this->type === 'electric') {
            return ($this->price * (0.98 ** $this->age)) * 0.80;
        } else {
            return $this->price * (0.98 ** $this->age);
        }
    }
}

class Bus extends Vehicle implements Article
{
    private int $sitsCount;

    public function __construct($name, $age, $price, $sitsCount = 20)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sitsCount = $sitsCount;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return ($this->price * (0.98 ** $this->age)) * (1.01 ** $this->sitsCount);
    }
}
