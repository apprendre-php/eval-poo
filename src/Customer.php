<?php

class Customer extends Character{

    public float $budget;

    public function __construct(float $budget) {
        
        $this->budget = $budget;
    }
}
