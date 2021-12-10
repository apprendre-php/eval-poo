<?php

class Shop{

    public string $nom;
    public Owner $owner;
    private array $articles;

    public function __construct($nom,$owner,$articles){
        $this->nom = $nom;
        if($owner instanceof Owner){
            $this->owner = $owner;
        }
        foreach($articles as $article){
            if($article instanceof Article){
                $this->articles[] = $article;
            }
        }
    }

    public function getVehiculeInCustomerBudget($customer):array{
        $vehiculesInCustomerBudget = [];
        foreach($this->articles as $article){
            if($article->getPrice() < $customer->budget){
                $vehiculesInCustomerBudget[] = $article;
            }
        }
        return $vehiculesInCustomerBudget;
    }

}