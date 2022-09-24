<?php

class ActionControleur
{

    private $parametre = array();
    private $oVue;
    private $oModele;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->oModele = new ActionModele($parametre);

        $this->oVue = new ActionVue($parametre);
    }

    public function form_ajouter()
    {
        $this->oModele->getLastFiche();
        $valeurs = $this->oModele->getListeActions();
        $this->oVue->genererAffichageListe($valeurs);

    }

    public function ajouter()
    {
        $controleAction = new ActionTable($this->parametre);

        if ($controleAction->getAutorisationBD() == false) {
            $this->form_ajouter();

        } else {
            $this->oModele->addAction($controleAction);
            $this->form_ajouter();
        }
    }

    public function form_modifier()
    {

        $valeurs = $this->oModele->getListeActionsEdit();
        $this->oVue->genererAffichageListe($valeurs);

    }

    public function modifier()
    {

        $controleAction = new ActionTable($this->parametre);

        if ($controleAction->getAutorisationBD() == false) {
            $this->form_modifier();

        } else {
            $this->oModele->editActionAdd($controleAction);
            $this->form_modifier();
        }
    }


    public function supprimer()
    {
        $this->oModele->deleteAction();
        $this->form_ajouter();
    }

    public function supprimerEdit()
    {
        $this->oModele->deleteAction();
        $this->form_modifier();
    }


}