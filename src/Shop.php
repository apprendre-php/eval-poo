<?php

class Shop{
    public string $nom;
    public Owner $owner;
    private array $articles;

    public function __construct(
    string $nom,
    Owner $owner,
    array $articles
    ){
        $this->nom=$nom;
        $this->owner=$owner;
        $this->setArticles($articles);
    }

    public function Valid_articles(Customer $customer){
        foreach($this->articles as $article){
            if( $article->getPrice() <= $customer->budget){
                $Valid_articles[] = $article;
            }
        }
    }

    private function setArticles(array $articles): void
    {

        foreach ($articles as $article) {
            if (! $article instanceof Article) {
                throw new Exception("Unexpected member type.");
            } else{
            $this->articles[]= $article;
            }
        }
    }   
}