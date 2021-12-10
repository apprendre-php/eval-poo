<?php
namespace App;
/*----------------------------

Classe abstraite Vehicule

----------------------------*/

abstract class Vehicule
{
    public string $name;
    protected float $price;
    protected int $age = 0;

    public function __construct($name, $price, $age) {
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }
    public abstract function getAge(): int;
}