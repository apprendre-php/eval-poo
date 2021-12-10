<?php

interface Article {

    public function getPrice(): float
    {
        return $this->getPrice() . ' € ' . static::NAME;
    }

}