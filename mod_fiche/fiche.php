<?php

Class Fiche{

private $parametre = array();
private $oControleur;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new FicheControleur($this->parametre);
    }

    public function choixAction(){


        if(isset($this->parametre['action'])){
            switch ($this->parametre['action']){

                case 'form_fiche_ajouter':
                    $this->oControleur->form_fiche_ajouter();
                    break;
                case 'fiche_ajouter':
                    $this->oControleur->fiche_ajouter();
                    break;
                case 'form_fiche_modifier':
                    $this->oControleur->form_fiche_modifier();
                    break;
                case 'fiche_modifier':
                    $this->oControleur->fiche_modifier();
                    break;
                case 'form_fiche_imprimer':
                    $this->oControleur->form_fiche_imprimer();
                    break;
            }

        }else{
            $this->oControleur->lister();
        }
    }

}