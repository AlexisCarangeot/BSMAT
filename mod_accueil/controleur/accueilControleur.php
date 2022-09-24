<?php
class AccueilControleur{

    private $parametre = array(); // Tableau
    private $oVue; // Object
    private $oModele;

    public function __construct($parametre){

        $this->parametre = $parametre;


        $this->oVue = new AccueilVue($parametre);
    }

    public function lister(){
        $this->oVue->genererAffichageListe();
    }


}