<?php

namespace App;

class Car extends Vehicule implements Article {

    private string $type;

    public function __construct(
        string $type,
    ) {
        $this->type = $type;
    }

    public function getPrice() :float {
        $price = $this->price - ($this->age * ($this->price * 0.02));
    }

    public function getType(string $type): void
    {
        switch ($type) {
            case 'electric':
                $price = $this->getPrice();
                $price = $price - ($price * 0.2);
                break;
            case 'gazoline':
                $price = $this->getPrice();
                break;
            case 'fuel':
                $price = $this->getPrice();
                break;
        }
    }  

}