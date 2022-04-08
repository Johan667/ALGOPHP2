<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 15</title>
</head>

<body>
    <h1>EXO 15</h1>

    <p>       
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>

<?php

// source https://www.php.net/manual/fr/filter.filters.validate.php

$elan = 'elan@elan-formation.fr';

function valider($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "L'Email '$email' valide. <br>";
    } else {
        return "L'Email '$email' invalide.<br>";
    }
}

echo valider($elan);
