<?php

abstract class Character
{
    protected $name;

    abstract public function getName(): string;
}