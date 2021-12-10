<?php

namespace App;

class Shop
{
    public string $name;
    public Owner $owner;
    private array $articles;

    public function __construct($name, Owner $owner, $articles = [])
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->setArticles($articles);
    }

    public function getArticlesInCustomerBudget(Customer $customer): array
    {
        return array_filter($this->articles, function ($article) use ($customer) {
            if ($article->getPrice() < $customer->budget) {
                return $article;
            }
        });
    }

    public function setArticles($articles): void
    {
        if (is_array($articles)) {
            $this->articles = array_filter($articles, function ($article) {
                if ($article instanceof Vehicle) {
                    return $article;
                }
            });
        } elseif ($articles instanceof Vehicle) {
            $this->articles = $articles;
        }
    }
}
