<?php

class Login {

    private $parametre = array();
    private $oControleur;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oControleur = new LoginControleur($this->parametre);
    }

    public function choixAction(){
        if (isset($this->parametre['action'])){
            switch ($this->parametre['action']){
                case 'authentifier':
                    $this->oControleur->authentifier();
                    break;
                case 'deconnecter':
                    $this->oControleur->deconnecter();
                    break;
            }
        }else{
            $this->oControleur->form_authentifier();
        }
    }
}