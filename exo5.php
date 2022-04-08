<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 5</title>
</head>

<body>
    <h1>EXO 5</h1>

    <p>       
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés.</p>
    Exemple :<br>
    $nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);

    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>

<?php

$input = ['Nom', 'Prénom', 'Ville'];      // On boucle le tableau pour afficher les X inputs.

function afficherInput($input)
{
    $affi = '';                          // Bien concat tout sinon marche pas.
    foreach ($input as $inp) {
        $affi .= "<label for='$inp'><p>$inp</p>";
        $affi .= "<input type='text' name='$inp'></label>";
    }

    return $affi;
}

echo afficherInput($input);
