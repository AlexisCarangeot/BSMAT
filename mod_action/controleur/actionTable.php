<?php
class ActionTable
{

    // 1/ Déclaration des propriétés
    private $idaction = "";
    private $intitule = "";
    private $idfiche = "";
    private $idtype_rep = "";

    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";

    // 2/ Importer la méthode hydrater

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

    // 3/ Le constructeur

    public function __construct($data = null)
    {
        if ($data != null) {
            $this->hydrater($data);
        }
    }

    /**
     * @return string
     */
    public function getIdaction()
    {
        return $this->idaction;
    }

    /**
     * @param string $idaction
     */
    public function setIdaction($idaction)
    {
        $this->idaction = $idaction;
    }

    /**
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param string $intitule
     */
    public function setIntitule($intitule)
    {
        if (ctype_space($intitule) || empty($intitule)){
            $this->setAutorisationBD(false);
            self::setMessageErreur('Veuillez saisir une action valide !<br>');
        }
        $this->intitule = $intitule;
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
    public function getIdtype_rep()
    {
        return $this->idtype_rep;
    }

    /**
     * @param string $idtype_rep
     */
    public function setIdtype_rep($idtype_rep)
    {
        if($idtype_rep == 0){
            $this->setAutorisationBD(false);
            self::setMessageErreur('Veuillez choisir un type de réparation valide !<br>');
        }
        $this->idtype_rep = $idtype_rep;
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
        self::$messageErreur = $messageErreur;
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
        self::$messageSucces = $messageSucces;
    }


}
