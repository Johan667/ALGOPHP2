<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 9</title>
</head>

<body>
    <h1>EXO 9</h1>

    <p>       
        Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
        valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
        Exemple :
        afficherRadio($nomsRadio);

    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>
<?php

$tableau = ['Homme' => 'checked',
            'Femme' => '',
            'Autre' => '', ];

function afficherRadio($input)
{
    $affi = '';
    foreach ($input as $valeur => $cle) {
        $affi .= "<input type='radio' $cle id='$valeur' name='Sexe' value='$valeur'> 
                  <label for='$valeur'> $valeur</label><br>";
    }

    return $affi;
}

echo afficherRadio($tableau);
