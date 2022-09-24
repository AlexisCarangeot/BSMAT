<?php

class AccueilVue{

    private $parametre = array();

    private $tpl;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }

    public function genererAffichageListe(){

        $this->tpl->assign('titreHeader', 'Fiches suiveuses<br>Catalogue de commandes');
        $this->tpl->assign('login', $_SESSION['prenomNom']);
        $this->tpl->assign('role', $_SESSION['role']);

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
    }


}