<?php

class Car extends Vehicule implements Article
{
  private string $type;

  const REDUC_ANNEE = 0.98;
  const REDUC = 0.80;

  public function __construct($name, $annee, $type, $price)
  {
    $this->name = $name;
    $this->age = $annee;
    if($type == 'electric' OR $type == 'fuel' OR $type == 'gasoline'){
      $this->type = $type;
    }
    $this->price = $price;
  }

  public function getPrice(): float
  {
    if($this->type == 'electric'){
      return $priceResult = $this->price * (self::REDUC_ANNEE * $this->age) * self::REDUC;
    }
    else{
      return $priceResult = $this->price * (self::REDUC_ANNEE * $this->age);
    }
  }
}