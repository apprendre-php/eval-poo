<?php

use App\Owner;

class Shop {

    /* VARS */
    public string $name;
    public Owner $owner;
    private array $article;

    
    /* CONSTRUCT CLASS */
    public function __construct( $name, $owner, $article)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->setArticles($article);

    }

    /* Set article */
    public function setArticles($article){
        $this->articles = $article;
    }

    /* Get article */
    public function getArticles(){
        return $this->articles;
    }



}

?>