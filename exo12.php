<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 12</title>
</head>

<body>
    <h1>EXO 12</h1>

    <p>       
            La fonction var_dump($variable) permet d’afficher les informations d’une variable.
        Soit le tableau suivant :
        $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
        A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>

</body>

<?php

$tableauValeurs = [true,
'texte',
10, 25.369,
['valeur1', 'valeur2'],
];

echo("La valeur des clées sont:\n");
foreach ($tableauValeurs as $key => $value)
{
    var_dump($value);
}


