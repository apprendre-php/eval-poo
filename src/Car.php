<?php

class Car extends Vehicule implements Article
{
    private $type = 'electric' || 'gazoline' || 'fuel';
    
    public function __construct(string $type, string $name, float $price, int $age)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

    public function getPrice() :float 
    {

        $price = $this->price - $this->price * (2 * $this->age) / 100; 
        

        if( $this->type == 'electric') {
            
           $price = $price - $price*(20/100);

        }

        return $price;
    }
}