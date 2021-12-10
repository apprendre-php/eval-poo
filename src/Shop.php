<?php

class Shop
{
  public string $name;
  public Owner $owner;
  private array $articles;

  public function __construct($name, $owner, $vehicule)
  {
    $this->name = $name;
    if($owner instanceof Owner){
      $this->owner = $owner;
    }
    $article = 0;
    foreach($vehicule as $vehi){
      if(!$vehi instanceof Article){
        $article = 1;
      }
    }
    if($article == 0){
      $this->articles = $vehicule;
    }
  }

  public function listArticles(Customer $customer): array
  {
    $listArticle = [];
    foreach($this->articles as $article){
      if($article->getprice() < $customer->budget){
        $listArticle[] = $article->name;
      }
    }

    return $listArticle;
  }
}