<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 1</title>
</head>

<body>
    <h1>EXO 1</h1>

    <p>       
        Créer une fonction personnalisée convertirMajRouge() permettant de transformer 
        une chaîne de caractère passée en argument en majuscules et en rouge.</p>
        <p>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>

<style>
    .rouge{
        color: red;
    }
</style>

<?php

function MajusculeRouge($texte)
{
    return '<div class="rouge">'.mb_strtoupper($texte).'</p>';
}

echo MajusculeRouge('Mon texte en paramètre');

?>