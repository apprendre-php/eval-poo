<?php 

class Car extends Vehicule implements Article{

    private string $type;

    public function __construct($type,$name,$price,$age){
        if($type == 'electric' || $type == 'gasoline' || $type == 'fuel'){
            $this->type = $type;
        }
        $this->name = $name;
        $this->price = $price;
        $this->age = $age;
    }

    public function getPrice() :float{
        $price = $this->price;
        $price = $price - (($price/100*2)*$this->age);
        if($this->type == 'electric'){
            $price = $price - ($price/100*20);
        }
        return $price;
    }

}