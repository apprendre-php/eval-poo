<?php

class Shop{

    public string $name;
    public Owner $owner;
    private array $articles;

    public function __construct(string $name, Owner $owner, array $articles) {
        
        $this->name = $name;
        $this->owner = $owner;
        $this->setArticles($this->articles);
    }

    private function setArticles(array $articles): void
    {
        foreach ($articles as $article) {

            if (! $article instanceof Articles) {
                throw new Exception("Unexpected article type.");
            }
            
        }

        $this->articles = $articles;
    }

}