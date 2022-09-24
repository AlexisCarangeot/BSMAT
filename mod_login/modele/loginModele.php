<?php

class LoginModele extends Modele {

    private $parametre = array(); // Tableau ($_REQUEST)

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function rechercherEmploye(LoginTable $authEnCours){
        $sql = 'SELECT * FROM employe WHERE login = ?';

        $resultat = $this->executeRequete($sql, array($authEnCours->getLogin()));

        $authExistant = $resultat->fetch(PDO::FETCH_ASSOC);

        if($resultat->rowCount() == 1 && $authEnCours->getLogin() == $authExistant['login'] && $authEnCours->getMotDePasse() == $authExistant['motdepasse']){
            // Création de la session
            $_SESSION['login'] = $authExistant['login'];
            $_SESSION['prenomNom'] = $authExistant['nomPrenom'];
            $_SESSION['role'] = $authExistant['role'];
            $_SESSION['idemploye'] = $authExistant['idemploye'];

            return true;
        }

        LoginTable::setMessageErreur('Identifiant et/ou mot de passe invalide(s)');
        return false;
    }

}

