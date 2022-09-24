<?php

class Accueil{

    private $parametre = array();
    private $oControleur;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new AccueilControleur($this->parametre);
    }

    public function choixAction(){

        $this->oControleur->lister();
    }
}