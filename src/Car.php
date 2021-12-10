<?php

class Car extends Vehicle implements Article{

    private string $type;



    public function __construct(
        string $type
 
    ){
        $this->type=$type;
    }

    public function getPrice():float{
        if($this->type=='electric'||$this->type=='gazoline'||$this->type=='fuel'){
            //On créé une nouvelle variable new_price qui prend la valeur du prix de base -2% par année d'ancienneté
            $new_price=($this->price)-((($this->price/100)*2)*$this->age);
            $this->new_price=$new_price;
            
        } else{
            return 'Wrong fuel, please choose btween electric, gazoline or fuel';
        }

        //Une fois les calculs précédents effectués, on veut appliquer une réduction de 20% au prix final uniquement si type=electric
        if($this->type=='electric'){
            $new_price=($new_price)-(($new_price/100)*20);
        }


    }
    
    
}