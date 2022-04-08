<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 2</title>
</head>

<body>

    <h1>EXO 2</h1>

    <p>    
        Soit le tableau suivant :
        $capitales = array
        ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
        Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.
        Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>
</body>
<style>
    table,th,td{
        border: solid 1px black;
        padding:10px;
    }
</style>

<?php

$capitales = ['France' => 'Paris',
              'Allemagne' => 'Berlin',
              'USA' => 'NewYork',
              'Italie' => 'Rome', ];

function afficherTableHTML($tableau)
{
    ksort($tableau); // ksort = tableau ordre croissant
    $tab = '<table>
    <thead>
    <tr><th>Pays</th>
    <th>Capitale</th></tr>
    </thead><tbody>';

    foreach ($tableau as $pays => $capital) {
        $tab .= '<tr><td>';
        $tab .= mb_strtoupper($pays);
        $tab .= ' </td>';
        $tab .= " <td> $capital </td></tr>";
    }
    $tab .= '</tbody></table>';

    return $tab;
}

echo afficherTableHTML($capitales);
