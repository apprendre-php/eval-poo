<?php

class Bus extends Vehicule implements Article
{
    private int $sitsCount ;

    public function __construct(string $sitsCount) {
        
        $this->sitsCount = 20;
    }

    public function calcprice(): int
    {
        return count($this->members);
    }
   

    
}