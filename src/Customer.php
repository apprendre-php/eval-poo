<?php

namespace App;

class Customer extends Character {

    // protected string $name;
    public float $budget;

    public function __construct(
        // string $name,
        float $budget
    ) {
        // $this->name = $name;
        $this->budget = $budget;
    }

    public function getName(Character $name) :string {
        return $this->name;
    }

    public function getBudget() :float {
        return $this->budget;
    }
}