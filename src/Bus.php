<?php

class Bus extends Vehicule implements Article
{
    private $sitsCount = 20;
    
    public function __construct(int $sitsCount, string $name, float $price, int $age)
    {
        $this->sitsCount = $sitsCount;
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

    public function getPrice() :float 
    {
        for($i == 0 ; $i <= ($this->age) ; $i++){

            $this->price = $this->price*(2/100); 

        }

        for($i == 0 ; $i <= $this->sitsCount ; $i++){

            $this->price = $this->price/(1/100); 

        }

        return $this->price;
    }
}