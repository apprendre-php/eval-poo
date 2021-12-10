<?php

namespace App;

 abstract class Charactere {

    protected string $name;


    /* CONSTRUCT CLASS */
    public function __construct ($name){

        $this->name = $name;
    }


    /* FONCTION ABSTRACT */
    abstract public function getName(Charactere $name) :string;
}

?>