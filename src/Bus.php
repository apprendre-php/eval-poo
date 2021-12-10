<?php
namespace App;
/*----------------------------

Classe Bus

----------------------------*/

class Bus extends Vehicule implements Article
{
    private int $sitsCount = 20;

    public function getName(): string{
        return $this->name;
    }
    public function getAge(): int{
        return $this->age;
    }
    public function setSits(int $nbSits): void{
        if ($nbSits > 0) {
            $this->sitsCount = $nbSits;
        }else {
            throw new Exception("Le bus doit contenir au moins 1 place");
        }
    }
    public function getSits(): int{
        return $this->sitsCount;
    }

    public function getPrice(): float{
        $newprice = $this->price;
        if ($this->getAge() > 0) {
            for ($i=0; $i < $this->getAge(); $i++) { 
                $newprice = $newprice * 0.98;   
            }
        }

        if ($this->getSits() > 0) {
            for ($j=0; $j < $this->getSits(); $j++) { 
                $newprice = $newprice * 1.01;   
            }
        }
        return $newprice;
    }

    
}