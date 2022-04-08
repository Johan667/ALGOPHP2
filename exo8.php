<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 8</title>
</head>

<body>

    <h1>EXO 8</h1>

    <p>    
    Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.Exemple:<br>
    repeterImage($url,4);
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>
<?php

$lien = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage($lien, $xfois)
{
    $affi = '';
    for ($i = 0; $i < $xfois; ++$i) {
        $affi .= "<img src='$lien' alt='Mobirise'>";
    }

    return $affi;
}

echo repeterImage($lien, 4);
