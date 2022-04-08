<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 11</title>
</head>

<body>
    <h1>EXO 11</h1>

    <p>       
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>

<?php

function afficheDate(){
$date = new DateTime('2022-04-01');
    $fmt = new IntlDateFormatter(
        "fr_FR",
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN);

    echo $fmt->format($date);
};

afficheDate();



