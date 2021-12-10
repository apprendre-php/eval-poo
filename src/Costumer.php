<?php

class Costumer extends Character
{
    public $budget;

    public function __construct(float $budget, string $name)
    {
        $this->budget = $budget;
        $this->name = $name;
    }

    public function getName() :string 
    {
        return $this->name;
    }

    public function getBudget() :int
    {
        return $this->budget;
    }
}