<?php

abstract class Character{

    protected string $name;

    public function __construct(string $name) {
        
        $this->name = $name;
    }

    public abstract function getName(): string
    {
        return $this->name . ' ' . static::NAME;
    }

}