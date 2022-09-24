<?php

class LoginTable{

    // Déclaration des propriétés :
    private $login ='';
    private $motDePasse = '';
    private $role = '';
    private $numero = '';
    private $autorisationSession = true;

    private static $messageErreur = '';

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

    public function __construct($data = null){
        if($data !=null){
            $this->hydrater($data);
        }
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        if(ctype_space($login) || empty($login)){
            self::setMessageErreur('Identifiant et/ou mot de passe invalide(s)');
            $this->setAutorisationSession(false);
        }
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param string $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        if(!ctype_space($motDePasse) && !empty($motDePasse)){

            $this->motDePasse = $motDePasse;

        }else {
            self::setMessageErreur('Identifiant et/ou mot de passe invalide(s)');
            $this->setAutorisationSession(false);
            $this->motDePasse = '';
        }
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    /**
     * @return bool
     */
    public function getAutorisationSession()
    {
        return $this->autorisationSession;
    }

    /**
     * @param bool $autorisationSession
     */
    public function setAutorisationSession($autorisationSession)
    {
        $this->autorisationSession = $autorisationSession;
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
}