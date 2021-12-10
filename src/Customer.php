<?php
namespace App;
/*----------------------------

Classe Customer

----------------------------*/

class Customer extends Character
{
    public float $budget;
    
    public function getName(): string{
        return $this->name;
    }
    public function setBudget(float $budget): void{
        $this->budget = $budget;
    }

    public function getBudget(): float{
        return $this->budget;
    }
}