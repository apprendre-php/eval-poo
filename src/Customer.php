<?php

class Customer extends Character
{
  public float $budget;

  public function __construct($name, $budget)
  {
    $this->name = $name;
    $this->budget = $budget;
  }

  public function getName(): string
  {
    return $this->name;
  }
}