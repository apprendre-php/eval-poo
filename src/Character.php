<?php

abstract class Character
{
    protected $name; 
   
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function getName() :string;
    
}