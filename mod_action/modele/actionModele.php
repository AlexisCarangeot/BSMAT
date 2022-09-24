<?php
class ActionModele extends Modele
{

    private $parametre = array();

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getLastFiche(){
        $sql = 'SELECT MAX(idfiche) as idfiche FROM fiche WHERE idemploye = ?';

        $resultat = $this->executeRequete($sql, array($_SESSION['idemploye']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        $_SESSION['idfiche'] = $row['idfiche'];
    }

    public function getListeActions()
    {
        $sql = 'SELECT idaction, action.intitule AS \'action\', idfiche, type_reparation.intitule as \'type_rep\' 
        FROM action, type_reparation WHERE action.idtype_rep = type_reparation.idtype_rep AND idfiche = ? ORDER BY idaction DESC';

        $resultat = $this->executeRequete($sql, array($_SESSION['idfiche']));

        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }                                                                              

    public function addAction(ActionTable $valeurs){

        // Requête préparée
        $sql = 'INSERT INTO action (intitule, idfiche, idtype_rep) ' . 'VALUES(?,?,?)';
        $resultat = $this->executeRequete($sql, array(
            $valeurs->getIntitule(),
            $_SESSION['idfiche'],
            $valeurs->getIdtype_rep(),
        ));

    }

    public function getListeActionsEdit(){
        $sql ='SELECT idaction, action.intitule AS \'action\', idfiche, type_reparation.intitule as \'type_rep\' 
        FROM action, type_reparation WHERE action.idtype_rep = type_reparation.idtype_rep AND idfiche = ? ORDER BY idaction DESC';

        $resultat = $this->executeRequete($sql, array($_SESSION['idficheEdit']));

        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }

    public function editActionAdd(ActionTable $valeurs){

        $sql = 'INSERT INTO action (intitule, idfiche, idtype_rep) ' . 'VALUES(?,?,?)';
        $resultat = $this->executeRequete($sql, array(
            $valeurs->getIntitule(),
            $_SESSION['idficheEdit'],
            $valeurs->getIdtype_rep(),
        ));

    }

    public function deleteAction(){
        $sql = 'DELETE FROM action WHERE idaction=?';
        $resultat = $this->executeRequete($sql, array($this->parametre['idaction']));
    }


}