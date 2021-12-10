<?php

class Owner extends Character
{
    const NAME = 'Owner';

    public function getName(Character $character): string
    {
        return $this->NAME;
    }

}