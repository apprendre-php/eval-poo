<?php

class Bus extends Vehicule implements Article
{
  private int $sitsCount = 20;

  const REDUC_ANNEE = 0.98;
  const REDUC = 1.01;

  public function __construct($name, $annee, $price)
  {
    $this->name = $name;
    $this->age = $annee;
    $this->price = $price;
  }

  public function getPrice(): float
  {
    return $priceResult = $this->price * (self::REDUC_ANNEE * $this->age) * (self::REDUC * $this->sitsCount);
  }
}