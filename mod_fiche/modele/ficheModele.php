<?php

class FicheModele extends Modele {

    private $parametre = array();

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getListeFiches(){

        $sql = 'SELECT fiche.idfiche, type_fiche.intitule as \'type_fiche\', fiche.vehicule, fiche.immatriculation, fiche.type_vehicule, 
        fiche.kilometrage, employe.nomPrenom, fiche.date_creation, fiche.iddiag, fiche.idrep, fiche.idcarrosserie, fiche.idcamgrue 
        FROM fiche, employe, type_fiche WHERE fiche.idemploye = employe.idemploye AND fiche.type_fiche = type_fiche.idtype';

        $resultat = $this->executeRequete($sql);


        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }

    public function addFiche(FicheTable $valeurs){

        $sql = 'INSERT INTO fiche (idemploye, iddiag, idrep, idcarrosserie, idcamgrue, date_creation, vehicule, immatriculation, kilometrage, type_vehicule, type_fiche)'.'VALUES (?,?,?,?,?,?,?,?,?,?,?)';

        $resultat = $this->executeRequete($sql, array(
            $_SESSION['idemploye'],
            $valeurs->getIddiag(),
            $valeurs->getIdrep(),
            $valeurs->getIdcarrosserie(),
            $valeurs->getIdcamgrue(),
            $valeurs->getDate_creation(),
            $valeurs->getVehicule(),
            $valeurs->getImmatriculation(),
            $valeurs->getKilometrage(),
            $valeurs->getType_vehicule(),
            $valeurs->getType_fiche(),
        ));

        if($resultat){
            FicheTable::setMessageSucces('Création de la fiche effectuée avec succès !');
        }
    }

    public function getUneFiche(){

        $sql = 'SELECT idfiche, fiche.idemploye, iddiag, idrep, idcarrosserie, idcamgrue, date_creation, vehicule, immatriculation, kilometrage, 
        type_vehicule, nomPrenom as \'operateur\', fiche.type_fiche FROM fiche, employe WHERE fiche.idemploye = employe.idemploye AND idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $uneFiche = new FicheTable($resultat->fetch(PDO::FETCH_ASSOC));
        $_SESSION['idficheEdit'] = $this->parametre['idfiche'];

        return $uneFiche;
    }

    public function editFiche(FicheTable $valeurs){

        $sql = 'UPDATE fiche SET iddiag = ?, idrep = ?, idcarrosserie = ?, idcamgrue = ?, vehicule = ?, immatriculation = ?, 
        kilometrage = ?, type_vehicule = ?, type_fiche = ? WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getIddiag(),
            $valeurs->getIdrep(),
            $valeurs->getIdcarrosserie(),
            $valeurs->getIdcamgrue(),
            $valeurs->getVehicule(),
            $valeurs->getImmatriculation(),
            $valeurs->getKilometrage(),
            $valeurs->getType_vehicule(),
            $valeurs->getType_fiche(),
            $valeurs->getIdfiche(),
        ));

        if ($resultat){
            FicheTable::setMessageSucces('Modification de la fiche effectuée avec succès !');
        }
    }

    public function getIdentification(){

        $sql = 'SELECT intitule FROM identification_fiche, fiche WHERE identification_fiche.idtype_fiche = fiche.type_fiche AND fiche.idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['intitule'];

    }

    public function getDate(){

        $sql = 'SELECT date_creation FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['date_creation'];
    }

    public function getOperateur(){

        $sql = 'SELECT nomPrenom FROM employe, fiche WHERE fiche.idemploye = employe.idemploye AND idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['nomPrenom'];
    }

    public function getVehicule(){

        $sql = 'SELECT vehicule FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['vehicule'];
    }

    public function getType(){

        $sql = 'SELECT type_vehicule FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['type_vehicule'];
    }

    public function getKilometrage(){

        $sql = 'SELECT kilometrage FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['kilometrage'];
    }

    public function getImmatriculation(){

        $sql = 'SELECT immatriculation FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['immatriculation'];
    }

    public function getDiag(){

        $sql = 'SELECT iddiag FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['iddiag'];
    }

    public function getRep(){

        $sql = 'SELECT idrep FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['idrep'];
    }

    public function getCarrosserie(){

        $sql = 'SELECT idcarrosserie FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['idcarrosserie'];
    }

    public function getGrue(){

        $sql = 'SELECT idcamgrue FROM fiche WHERE idfiche = ?';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetch(PDO::FETCH_ASSOC);

        return $row['idcamgrue'];
    }

    public function getActions(){

        $sql = 'SELECT type_reparation.intitule as \'type_rep\', action.intitule as \'intitule\' FROM action, type_reparation 
        WHERE action.idtype_rep = type_reparation.idtype_rep AND idfiche = ? ORDER BY type_rep';

        $resultat = $this->executeRequete($sql, array($this->parametre['idfiche']));

        $row = $resultat->fetchall(PDO::FETCH_ASSOC);

        return $row;
    }


}