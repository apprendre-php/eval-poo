<?php

namespace App;

class Owner extends Character {

    public function getName(Character $name) :string {
        return $this->name;
    }

}