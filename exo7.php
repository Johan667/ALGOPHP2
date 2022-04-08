<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 7</title>
</head>

<body>
    <h1>EXO 7</h1>

    <p>       
        Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
        dans le tableau associatif si la case est cochée ou non.
        Exemple :
        genererCheckbox($elements);
        //où $elements est un tableau associatif clé => valeur avec 3 entrées.

    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>


<?php

$choix = ['Oui' => 'checked', 'Non' => '', 'Peutètre' => 'checked'];  // 1 et 3 cochées.

function genererCheckbox($choix)     // on boucle les checkbox et leurs cle pour sortir les 3 avec parametre coché ou non
{
    $affi = '';
    foreach ($choix as $choi => $cle) {
        $affi .= "<input type='checkbox' $cle id='$choi' name='$choi' value='$choi'><label for='$choi'> $choi</label><br>";
    }

    return $affi;
}

echo genererCheckBox($choix);

?>