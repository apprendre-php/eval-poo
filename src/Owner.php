<?php
namespace App;
/*----------------------------

Classe Owner

----------------------------*/

class Owner extends Character
{
    public function getName(): string{
        return $this->name;
    }
}