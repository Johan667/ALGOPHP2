<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 10</title>
</head>

<body>
    <h1>EXO 10</h1>

    <p>       
            En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
        « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
        de validation (submit).
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>

</body>

<?php

$formi = ['Nom' => 'text',
'Prénom' => 'text',
'Email' => 'email',
'Ville' => 'text',
 ];

$genres = ['Homme'=>'','Femme'=>''];

$input = ['Développeur Logiciel', 'Designer Web', 'Integrateur', 'Chef de Projet'];

function afficherInput($formi)
{
    $affi = '';
    foreach ($formi as $form => $type) {
        $affi .= "<label for='$form'><p>$form</p>";
        $affi .= "<input type='$type' name='$form'></label><br>";
    }
    
    return $affi;
}
function AfficherCheckbox($genres)     // on boucle les checkbox et leurs cle pour sortir les 3 avec parametre coché ou non
{
    $affi = '';
    foreach ($genres as $genre => $cle) {
        $affi .= "<input type='radio' $cle id='$genre' name='Sexe' value='$genre' required='required'> 
        <label for='Genre'> $genre</label>";
    }

    return $affi;
}
function alimenterListeDeroulante($input)   // On peux hydrater le tableau on boucle pour afficher dans le select
{
    $affi = '<br><br><select name="metier">';
    foreach ($input as $inp) {
        $affi .= "<option value='$inp'>$inp</option>";
    }
    $affi .= '</select><br>';
    
    return $affi;
}

function formulaire($formi,$input,$genres) {
    echo "<form method='post' action=''>";
    echo AfficherCheckbox($genres);
    echo "<br>";
    echo afficherInput($formi);
    echo alimenterListeDeroulante($input);
    echo "<br>";
    echo "<input type='submit' value='Envoyer'></form>";
}

echo formulaire($formi,$input,$genres);


