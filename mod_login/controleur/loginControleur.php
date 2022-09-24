<?php

class LoginControleur{

    private $parametre = array();
    private $oVue; // Object
    private $oModele;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->oModele = new LoginModele($this->parametre);
        $this ->oVue = new LoginVue($this->parametre);
    }

    public function form_authentifier(){

        $prepareLogin = new LoginTable($this->parametre);

        $this->oVue->genererAffichage($prepareLogin);
    }

    public function authentifier(){


        $controleLogin = new LoginTable($this->parametre);

//        Vrai ou faux si login est/ou mot de passe absent(s)
//        Vrai ou faux si login inexistant dans la base et/ou mdp incorrect
        if($controleLogin->getAutorisationSession() == false || $this->oModele->rechercherEmploye($controleLogin) == false){
            $this->oVue->genererAffichage($controleLogin);
        }else{
            // Redirection vers index.php
            header('location:index.php');
        }

    }

    public function deconnecter(){
        session_destroy();
        $_SESSION = array();
        header('location:index.php');
    }
}