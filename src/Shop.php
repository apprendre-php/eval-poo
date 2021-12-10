<?php

class Shop
{
    public $name;
    public $owner;
    private $articles;

    public function __construct(string $name, Owner $owner, array $articles )
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->setArticle($articles);
    }

    private function setArticle(array $articles)
    {
        foreach ($articles as $article) {
            if (! $article instanceof Article) {
                throw new Exception("Unexpected article type.");
            }
        }

        $this->articles = $articles;
    }

    public function getArticle(Costumer $costumer)
    {
        $articles = $this->articles;

        foreach($articles as $article){
            $price = $article->getPrice();

            if($price < $costumer->getBudget()){
                return $article->getName();
            } else {
                return 'Aucun vehicule disonible dans le budget';
            }
        }
    }
}