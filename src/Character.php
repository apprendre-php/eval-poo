<?php
namespace App;
/*----------------------------

Classe abstraite Character

----------------------------*/

abstract class Character
{
    protected string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public abstract function getName(): string;
}