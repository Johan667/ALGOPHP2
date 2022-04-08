<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 3</title>
</head>

<body>

    <h1>EXO 3</h1>

    <p>    
    Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
    dans un nouvel onglet (_blank).
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>

<?php

$donnees = 'https://elan-formation.eu/accueil';
echo '<b><a href="'.$donnees.'" target="_blank" >Aller sur le site de ELAN</a></b>';
