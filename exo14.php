<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP PARTIE 2 : EXO 14</title>
</head>

<body>
    <h1>EXO 14</h1>

    <p>       
            Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
        qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
        Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
        suivantes :
        Peugeot 408 : $v1 = new Voiture("Peugeot","408");
        BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
        Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :

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

    public function __construct($marque, $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    /**
     * Get the value of _marque.
     */
    public function getMarque()
    {
        return $this->_marque;
    }

    /**
     * Set the value of _marque.
     *
     * @return self
     */
    public function setMarque($_marque)
    {
        $this->_marque = $_marque;

        return $this;
    }

    /**
     * Get the value of _modele.
     */
    public function getModele()
    {
        return $this->_modele;
    }

    /**
     * Set the value of _modele.
     *
     * @return self
     */
    public function setModele($_modele)
    {
        $this->_modele = $_modele;

        return $this;
    }

    public function getInformations()
    {
        return $this->getMarque().' '.$this->getModele();
    }
}

class VoitureElec extends Voiture
{
    private $_autonomie;

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie()
    {
        return $this->_autonomie;
    }

    public function setAutonomie($_autonomie)
    {
        $this->_autonomie = $_autonomie;

        return $this;
    }

    public function getInformations()
    {
        $parent = parent::getInformations();
        return $parent." avec une autonomie de ".$this->getAutonomie() ."km<br>";
    }
}

$v = new Voiture('Audi', 'A7');

$ve = new VoitureElec('BMW', 'I3', 100);

echo $v->getInformations().'<br>';
echo $ve->getInformations().'<br>';
