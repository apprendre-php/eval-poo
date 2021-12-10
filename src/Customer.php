<?php

namespace App;

class Customer extends Charactere {

    /* VARS */
    public float $budget;
    protected string $name;


     /* CONSTRUCT CLASS */
    public function __construct($budget, $name)
    {
        $this->budget = $budget;
        $this->name = $name;
       
    }

    /* ENVOIE D'INFORMATION VIA L'ABSTRACT */
    public function getName(Charactere $name) :string {
        return $this->name;
    }

  

}


?>