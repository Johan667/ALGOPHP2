<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 4</title>
</head>

<body>

    <h1>EXO 4</h1>

    <p>    
        A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme : XXX
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
            'Italie' => 'Rome',
            'Espagne' => 'Madrid', ];

function afficherTableHTML($tableau)
{
    asort($tableau);   // Alphabétique
    $return = '<table>
    <thead>
    <tr><th>Pays</th>
    <th>Capitale</th>
    <th>Lien</th></tr>
    </thead>
    <tbody>';

    foreach ($tableau as $pays => $capital) {
        $return .= "<tr><td> $pays </td>";
        $return .= "<td> $capital </td>";
        $return .= "<td> <a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>Capitales</a> </td></tr>";
    }
    $return .= '</tbody></table>';

    return $return;
}

echo afficherTableHTML($capitales);
