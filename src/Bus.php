<?php

class Bus extends Vehicle implements Article{

    private int $sitsCount=20;

    public function __construct(
        int $sitsCount=20
    ){
    $this->sitCount=$sitsCount;
    }

    public function getPrice():float{
            
        //On créé une nouvelle variable new_price qui prend la valeur du prix de base -2% par année d'ancienneté
        $new_price=($this->price)-((($this->price/100)*2)*$this->age);
        //On augmente la valeur de New_price de 1% par place
        $new_price=($new_price)-(($new_price/100)*$this->sitsCount);

        return $new_price;
        }
}
