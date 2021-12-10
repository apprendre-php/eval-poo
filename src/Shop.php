<?php
namespace App;
/*----------------------------

Classe Shop

----------------------------*/

class Shop
{
    public string $name;
    public Owner $owner;
    private array $articles = [];

    public function __construct($name, $owner,$articles) {
        $this->name = $name;
        $this->owner = $owner;
        $this->setArticles($articles);
    }

    
    public function setArticles(array $articles): void{
        foreach ($articles as $article) {
            if ($article instanceof Article) {
                array_push($this->articles, $article);
            }else {
                throw new Exception("L'élément ajouté n'est pas une instance de Véhicule");
            } 
        } 
    }
    public function getArticles(): array{
        return $this->articles;
    }

    public function getArticlesInCustomerBudget(Customer $customer): array{
        $articlesInBudget = [];
        foreach ($this->getArticles() as $article) {
            if ($article->getPrice() <= $customer->getBudget()) {
                array_push($articlesInBudget, $article);
            }
        } 

        return $articlesInBudget;
    }

}