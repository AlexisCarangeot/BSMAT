<?php

class Autoloader{

    public static function chargerClasses(){

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($maClasse){
        // $maClasse = Nom de la classe recherchée

        // Mettre en miniscule la première lettre de la classe
        // pour rechercher le fichier correspondant

        $maClasse = lcfirst($maClasse);

        $repertoires = array(
            'mod_login/',
            'mod_login/controleur/',
            'mod_login/modele/',
            'mod_login/vue/',
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_fiche/',
            'mod_fiche/controleur/',
            'mod_fiche/modele/',
            'mod_fiche/vue/',
            'mod_action/',
            'mod_action/controleur/',
            'mod_action/modele/',
            'mod_action/vue/',
        );

        // Rechercher dans chaque répertoire du tableau...
        foreach ($repertoires as $repertoire){
            // Vérifier si un fichier .php existe
            if(file_exists($repertoire.$maClasse.'.php')){
                require_once ($repertoire.$maClasse.'.php');
                return;
            }
        }
    }

}