<?php

namespace App;

abstract class Character
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Owner extends Character
{
}

class Customer extends Character
{
    public float $budget;

    public function __construct($name, $budget)
    {
        $this->name = $name;
        $this->budget = $budget;
    }
}
