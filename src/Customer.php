<?php

class Customer extends Character{

    const Name = 'Customer';

    public float $budget;

    public function __construct(
        float $budget
    ){
        $this->budget=$budget;
    }

    

    public function getName(Character $character): string
    {
        return $this->NAME;
    }

    public function getBudget(Character $character): string
    {
        return $this->budget;
    }

}