<?php

class Owner extends Character
{
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}