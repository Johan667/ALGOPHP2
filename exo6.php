<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 6</title>
</head>

<body>
    <h1>EXO 6</h1>

    <p>       
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
        de valeurs.
        Exemple :
        $elements = array("Monsieur","Madame","Mademoiselle");
        alimenterListeDeroulante($elements);
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>
<?php

$genre = ['Monsieur', 'Madame', 'Mademoiselle', 'Chat', 'Chien']; // On peux hydrater le tableau on boucle pour afficher dans le select

function alimenterListeDeroulante($input)
{
    $affi = '<select name="sexe">';
    foreach ($input as $inp) {
        $affi .= "<option value='$inp'>$inp</option>";
    }
    $affi .= '</select>';

    return $affi;
}

echo alimenterListeDeroulante($genre);
