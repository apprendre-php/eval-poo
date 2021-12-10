# Evaluation POO

## Livrable
+ Un diagramme de classes dans art/diagram.png
+ Une implémentation PHP du diagramme dans le dossier src/

## Critères d'évaluations
- **** Le respect des symboles sur le diagramme
- **** Le respect du typage dans le diagramme
- **** La cohérence entre le diagramme et le code
- *** Le typage dans le code
- *** Le respect de la logique demandé dans le code
- ** La qualité du code (respect de la PSR-12)

## Contexte
Nous sommes en 2030 dans une petite ville de l'ouest de France.

Deux concessionnaires se livrent à une lutte acharnée pour gagner des parts de marché.

La première appartient à Robert un patron à l'ancienne, très proche de ses sous et peu de ses employés, il vend des voitures au gasoile ou à l'essence et ne veut surtout pas entendre parler de l'électrique.

La seconde est toute récente, c'est Elon qui l'a fabriqué avec son armée de robot humanoide. Il se veut visionnaire et ne fait que de l'électrique.

Enfin, voici Jeanne et Serge, un couple de jeune adulte fraichement rentré dans la vie active, ils n'ont pas beaucoup de moyen mais ont besoin d'un véhicule. C'est avec un budget de 5400 € qu'ils vont rencontrer nos concessionnaires...

## Exercice
### Conception :
- Créer une classe abstraite Character dont les caractéristiques sont :
    - une propriété nom privée de type string
    - une méthode abstraite public getName() qui retourne une string
- Créer une classe Owner qui hérite de Character sans caractéristiques particulières
- Créer une classe Customer qui hérite de Character dont les caractéristiques sont :
    - une propriété publique budget de type float
- Créer une interface Article qui dispose d'une méthode getPrice() qui retourne un float
- Créer une classe abstraite Vehicule dont les caractéristiques sont :
    - une propriété nom publique de type string
    - un propriété price privée de type float
    - une propriété age privée de type int
- Créer une classe Car qui hérite de Vehicule et qui implémente Article dont les caractéristiques sont :
    - une propriété privée type de type string qui ne peut avoir pour valeur que electric gazoline ou fuel
    - le calcul de son prix vaut :
        - son prix de base avec une réduction de 2% par année d'ancienneté
        - plus une réduction de 20% si son type est electric
- Créer une classe Bus qui hérite de Vehicule et qui implémente Article dont les caractéristiques sont :
    - une propriété privée sitsCount de type int à 20 par défaut
    - le calcul de son prix vaut :
        - son prix de base avec une réduction de 2% par année d'ancienneté
        - plus une augmentation du prix de 1% par place
- Créer une classe Shop dont les caractéristiques sont :
    - une propriété public owner de type Owner
    - une propriété privée vehicules de type array qui ne peut contenir que des éléments de type Vehicule
    - une méthode publique qui :
        - a pour seul paramètre un Customer
        - qui retourne la liste des vehicules qui rentre dans le budget du client
        
### Instanciation:

- Un Customer qui :
    - se nomme Jeanne et Serge
    - a un budget de 5400€
- Un Owner qui se nomme Robert
- Un Shop qui se nomme "Le meilleur garage" qui :
    - a comme propriétaire Robert
    - la liste de véhicule :
        - Une Car qui se nomme Renault Clio qui a 1 ans, de type fuel et qui a un prix de base de 12 000€
        - Une Car qui se nomme Peugeot 205 qui a 25 ans, de type fuel et qui a un prix de base de 8 000€
        - Une Car qui se nomme Dacia Sandero, qui a 5 ans, de type fuel, a un prix de base de 9 000€
        - Un Bus qui se nomme Scania, qui a 12 ans, de type gasoline, a un prix de base de 19 500€
- Instancier un Owner qui se nomme Elon
- Un Shop qui se nomme "Tesla" qui :
    - a comme propriétaire Elon
    - la liste de véhicules:
        - Une Car qui se nomme Model 3, qui a 0 ans, de type electric, a un prix de base de 43 800€
        - Une Car qui se nomme Model Y, qui a 0 ans, de type electric, a un prix de base de 59 990€
        - Une Car qui se nomme Model S, qui a 0 ans, de type electric, a un prix de base de 104 990€
        - Une Car qui se nomme Model 3, qui a 4 ans, de type electric, a un prix de base de 43 800
        
### Résultat:
Fournir la liste des véhicules dans le budget de Jeanne et Serge.

