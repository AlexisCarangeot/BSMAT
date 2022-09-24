<?php

class LoginVue{

    private $parametre = array();
    private $tpl;

    public function __construct($parametre){

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function genererAffichage($valeurs){

        $this->tpl->assign('error', LoginTable::getMessageErreur());

        $this->tpl->assign('titreHeader', 'Fiches suiveuses<br>Catalogue de commandes');

        $this->tpl->assign('action', 'authentifier');

        $this->tpl->assign('unEmploye', $valeurs);

        $this->tpl->assign('login', "");

        $this->tpl->display('mod_login/vue/loginVue.tpl');
    }
}