<?php
namespace App;
/*----------------------------

Classe Car

----------------------------*/

class Car extends Vehicule implements Article
{
    private string $type;

    public function setType(string $type): void{
        if ($type == 'electric' || $type == 'gazoline' || $type == 'fuel'  ) {
            $this->type = $type;
        }else {
            throw new Exception("Le véhicule n'est pas de type electique / gazoline / fuel");
        }
    }

    public function getName(): string{
        return $this->name;
    }
    public function getAge(): int{
        return $this->age;
    }
    public function getType(): string{
        return $this->type;
    }

    public function getPrice(): float{
        $newprice = $this->price;
        if ($this->getAge() > 0) {
            for ($i=0; $i < $this->getAge(); $i++) { 
                $newprice = $newprice * 0.98;   
            }
        }
        if ($this->getType() == 'electric') {
            $newprice = $newprice * 0.8;
        }
        return $newprice;
    }
}