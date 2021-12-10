<?php

class Car extends Vehicule implements Article
{
    private string $type;

    public function __construct(string $type) {
        
        $this->type = $type;
    }

    public function calcprice(): int
    {
        return count($this->members);
    }

    
}