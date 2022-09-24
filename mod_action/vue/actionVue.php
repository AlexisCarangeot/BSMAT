<?php

class ActionVue
{

    private $parametre = array(); // tableau $_REQUEST
    private $tpl; // object

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }

    public function genererAffichageListe($valeurs)
    {
        switch ($this->parametre['action']){
            case 'ajouter':
            case 'form_ajouter':
            case 'supprimer' :

                $this->tpl->assign('titreHeader', 'Création fiche suiveuse');

                $this->tpl->assign('login', $_SESSION['prenomNom']);

                $this->tpl->assign('listeActions', $valeurs);

                $this->tpl->assign('succes', ActionTable::getMessageSucces());

                $this->tpl->assign('error', ActionTable::getMessageErreur());

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('supprimer', 'supprimer');

                if(isset($_POST['intitule'])){
                    $this->tpl->assign('post', $_POST['intitule']);
                }else{
                    $this->tpl->assign('post', "");

                }

                if(isset($_POST['idtype_rep']) && !empty(ActionTable::getMessageErreur())){
                    $this->tpl->assign('selected', $_POST['idtype_rep']);
                }else{
                    $this->tpl->assign('selected', 0);
                }

            break;

            case 'modifier' :
            case 'form_modifier' :
            case 'supprimerEdit' :

                $this->tpl->assign('titreHeader', 'Création fiche suiveuse');

                $this->tpl->assign('login', $_SESSION['prenomNom']);

                $this->tpl->assign('listeActions', $valeurs);

                $this->tpl->assign('succes', ActionTable::getMessageSucces());

                $this->tpl->assign('error', ActionTable::getMessageErreur());

                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('supprimer', 'supprimerEdit');

                if(isset($_POST['intitule'])){
                    $this->tpl->assign('post', $_POST['intitule']);
                }else{
                    $this->tpl->assign('post', "");

                }

                if(isset($_POST['idtype_rep']) && !empty(ActionTable::getMessageErreur())){
                    $this->tpl->assign('selected', $_POST['idtype_rep']);
                }else{
                    $this->tpl->assign('selected', 0);
                }

            break;
        }

        $this->tpl->assign('options', array(
            0 => 'Veuillez choisir un type',
            1 => 'APG',
            2 => 'Banc freinage',
            3 => 'Carrosserie',
            4 => 'Électricité',
            5 => 'Lavage GAP',
            6 => 'Mécanique',
            7 => 'Peinture',
            8 => 'Tôlerie',
            9 => 'RDC',
            10 => 'Sellerie',
            11 => 'Station',
            12 => 'Zone RDC'));

        $this->tpl->display('mod_action/vue/actionVue.tpl');


    }

}