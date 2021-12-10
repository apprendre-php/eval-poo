<?php

namespace App;

class Shop {
    public string $name;
    public string $owner;
    private array $v;

    public function __construct(
        string $name,
        string $owner,
        array $articles
    ) {
        $this->name = $name;
        $this->owner = $owner;
        $this->articles = $articles;
    }

    public function getName() :string {
        return $this->name;
    }

    public function getOwner() :string{
        return $this->owner;
    }

    public function getArticle(array $articles) :void {
        foreach($articles as $article){
            $this->articles = $articles;
            }
        }
}
