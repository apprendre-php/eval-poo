<?php
abstract class Vehicle{

    public string $name;
    protected float $price;
    protected int $age;

    public function __construct(
        string $name,
        float $price,
        int $age
    ){
        $this->name=$name;
        $this->price=$price;
        $this->age=$age;
        
    }



}