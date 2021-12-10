<?php

namespace App;

class Owner extends Charactere {

    protected string $name; 

    public function __construct($name)
    {
        $this->name = $name;
    }


    /* ENVOIE D'INFORMATION VIA L'ABSTRACT */
    public function getName(Charactere $name) :string {
        return $this->name;
    }

  

}


?>