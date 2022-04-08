<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 13</title>
</head>

<body>
    <h1>EXO 13</h1>

    <p>       
            Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
        vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
        des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
        instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
        véhicule.
        v1 ➔ "Peugeot","408",5
        v2 ➔ "Citroën","C4",3
        Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
        tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
        suivants :
    </p>
    <br>
    <hr>
    <h2><u>SOLUTION DES EXERCICES</u>:</h2>

</body>

<?php

class Voiture
{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etat;

    public function __construct($marque, $modele, $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_etat = false;
    }

    public function get_marque()
    {
        return $this->_marque;
    }

    public function set_marque($_marque)
    {
        $this->_marque = $_marque;

        return $this;
    }

    public function get_modele()
    {
        return  $this->_modele;
    }

    public function set_modele($_modele)
    {
        $this->_modele = $_modele;

        return 'Modèle'.$this;
    }

    public function get_nbPortes()
    {
        return 'La voiture à '.$this->_nbPortes.' portes';
    }

    public function set_nbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function get_vitesseActuelle()
    {
        return "Vitesse actuelle $this->_vitesseActuelle km /h";
    }

    public function set_vitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function set_accelere($_accelere)
    {
        $this->_accelere = $_accelere;

        return $this;
    }

    public function demarre()
    {
        $this->_etat = true;
        return  $this->get_marque().' '.$this->get_modele().' démarre';
    }
    public function accelere($vite)
    {
       if($this->_etat) {
           $this->_vitesseActuelle += $vite;
           echo "La voiture accèlere de $vite km/h";
       } else {
           echo "Attention le véhicule dois être alllumé pour fonctionner";
       }
    }
    public function frener($lent)
    {
        if($this->_etat && $this->_vitesseActuelle >= 0) {
            $this->_vitesseActuelle -= $lent;
            echo "La voiture ralentie de $lent km/h";
        }else{
            echo "Attention le véhicule dois être alllumé pour fonctionner";
       }
        }
    }


$Merco = new Voiture('Mercedes', 'GLE', 5);
$Audi = new Voiture('Audi', 'A7', 3);

echo $Audi->get_marque();
echo' ';
echo $Audi->get_modele();
echo' ';
echo $Audi->get_nbPortes();
echo'<br>';
echo $Audi->demarre();
echo' ';
echo'<br>';
echo $Audi->accelere(10);
echo'<br>';
echo $Audi->frener(5);
echo'<br>';
echo $Audi->get_vitesseActuelle();
echo'<br>';
echo $Merco->get_marque();
echo' ';
echo $Merco->get_modele();
echo' ';
echo $Merco->get_nbPortes();
echo'<br>';
echo $Merco->demarre();
echo' ';
echo'<br>';
echo $Merco->accelere(100);
echo'<br>';
echo $Merco->frener(5);
echo'<br>';
echo $Merco->get_vitesseActuelle();

?>