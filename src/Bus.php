<?php

namespace App;

class Bus extends Vehicule implements Article {

    private int $sitsCount = 20;

    public function __construct(
        int $sitsCount
    ) {
        $this->sitsCount = $sitsCount;
    }
   
    public function getPrice() :float {
        $price = $this->price - ($this->age * ($this->price * 0.02));
        $price =$this->price + ($this->price * ($sitsCount/100));
    }

    public function getType(string $type): void
    {
        switch ($type) {
            case 'electric':
                $price = $this->getPrice();
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