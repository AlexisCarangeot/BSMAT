<?php

class FicheTable{

    private $idfiche = "";
    private $idemploye = "";
    private $operateur = "";
    private $vehicule = "";
    private $immatriculation = "";
    private $type_vehicule = "";
    private $kilometrage = "";
    private $date_creation = "";
    private $iddiag = "";
    private $idrep = "";
    private $idcarrosserie = "";
    private $idcamgrue = "";
    private $type_fiche = "";

    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";

    public function hydrater(array $row)
    {
        foreach ($row as $key => $valeur) {
            // Methode setter à appeler
            $setter = "set" . ucfirst($key);

            // Fonction prend 2 paramètres
            if (method_exists($this, $setter)) {
                // Invoquer la méthode
                $this->$setter($valeur);
            }
        }
    }

    public function __construct($data = null){
        if($data !=null){
            $this->hydrater($data);
        }
    }

    /**
     * @return string
     */
    public function getIdfiche()
    {
        return $this->idfiche;
    }

    /**
     * @param string $idfiche
     */
    public function setIdfiche($idfiche)
    {
        $this->idfiche = $idfiche;
    }

    /**
     * @return string
     */
    public function getIdemploye()
    {
        return $this->idemploye;
    }

    /**
     * @param string $idemploye
     */
    public function setIdemploye($idemploye)
    {
        $this->idemploye = $idemploye;
    }

    /**
     * @return string
     */
    public function getOperateur()
    {
        return $this->operateur;
    }

    /**
     * @param string $operateur
     */
    public function setOperateur($operateur)
    {
        $this->operateur = $operateur;
    }

    /**
     * @return string
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param string $vehicule
     */
    public function setVehicule($vehicule)
    {
        if(ctype_space($vehicule) || empty($vehicule)){
            $this->setAutorisationBD(false);
            self::setMessageErreur("Veuillez saisir un véhicule valide ! <br>");
        }

        $this->vehicule = $vehicule;
    }

    /**
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param string $immatriculation
     */
    public function setImmatriculation($immatriculation)
    {
        if(ctype_space($immatriculation) || empty($immatriculation)){
            $this->setAutorisationBD(false);
            self::setMessageErreur("Veuillez saisir une immatriculation valide ! <br>");
        }
        $this->immatriculation = $immatriculation;
    }

    /**
     * @return string
     */
    public function getType_vehicule()
    {
        return $this->type_vehicule;
    }

    /**
     * @param string $type_vehicule
     */
    public function setType_vehicule($type_vehicule)
    {
        $this->type_vehicule = $type_vehicule;
    }

    /**
     * @return string
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * @param string $kilometrage
     */
    public function setKilometrage($kilometrage)
    {
        if(!ctype_digit($kilometrage)){
            $this->setAutorisationBD(false);
            self::setMessageErreur(("Veuillez saisir un nombre de kilomètre valide !<br>"));
        }
        $this->kilometrage = $kilometrage;
    }

    /**
     * @return string
     */
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * @param string $date_creation
     */
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return string
     */
    public function getIddiag()
    {
        return $this->iddiag;
    }

    /**
     * @param string $iddiag
     */
    public function setIddiag($iddiag)
    {
        $this->iddiag = $iddiag;
    }

    /**
     * @return string
     */
    public function getIdrep()
    {
        return $this->idrep;
    }

    /**
     * @param string $idrep
     */
    public function setIdrep($idrep)
    {
        $this->idrep = $idrep;
    }

    /**
     * @return string
     */
    public function getIdcarrosserie()
    {
        return $this->idcarrosserie;
    }

    /**
     * @param string $idcarrosserie
     */
    public function setIdcarrosserie($idcarrosserie)
    {
        $this->idcarrosserie = $idcarrosserie;
    }

    /**
     * @return string
     */
    public function getIdcamgrue()
    {
        return $this->idcamgrue;
    }

    /**
     * @param string $idcamgrue
     */
    public function setIdcamgrue($idcamgrue)
    {
        $this->idcamgrue = $idcamgrue;
    }

    /**
     * @return string
     */
    public function getType_fiche()
    {
        return $this->type_fiche;
    }

    /**
     * @param string $type_fiche
     */
    public function setType_fiche($type_fiche)
    {
        if($type_fiche == 0){
            $this->setAutorisationBD(false);
            self::setMessageErreur('Veuillez choisir un type de fiche valide !<br>');
        }
        $this->type_fiche = $type_fiche;
    }

    /**
     * @return bool
     */
    public function getAutorisationBD()
    {
        return $this->autorisationBD;
    }

    /**
     * @param bool $autorisationBD
     */
    public function setAutorisationBD($autorisationBD)
    {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @return string
     */
    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur($messageErreur)
    {
        self::$messageErreur .= $messageErreur;
    }

    /**
     * @return string
     */
    public static function getMessageSucces()
    {
        return self::$messageSucces;
    }

    /**
     * @param string $messageSucces
     */
    public static function setMessageSucces($messageSucces)
    {
        self::$messageSucces .= $messageSucces;
    }




}