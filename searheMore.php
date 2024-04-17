<?php
/*
Les fonctions fléchées
 (arrow functions) sont une nouvelle
  fonctionnalité introduite dans 
  PHP 7.4. Elles offrent une syntaxe 
  plus concise pour définir des 
  fonctions anonymes.
 pour illustrer la différence entre
  une fonction traditionnelle 
  et une fonction fléchée :
  
  // Fonction traditionnelle
$addition = function($a, $b) {
    return $a + $b;
};

echo $addition(3, 4); // Affiche 7

// Fonction fléchée
$addition = fn($a, $b) => $a + $b;

echo $addition(3, 4); // Affiche 7

function createMultiplier($factor) {
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

// Créer une fonction de multiplication par 5
$multiplyBy5 = createMultiplier(5);

// Utiliser la fonction anonyme pour multiplier un nombre
echo $multiplyBy5(10); // Affiche 50

  
  */


   
    

