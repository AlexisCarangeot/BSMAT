<?php
session_start();
require_once('include/configuration.php');
require('public/tfpdf/tfpdf.php');

Autoloader::chargerClasses();

if (!isset($_SESSION['login'])){
    $_REQUEST['gestion'] = 'login';
}else if(!isset($_REQUEST['gestion'])){ // S'il n'existe pas la variable gestion
    $_REQUEST['gestion'] = 'accueil';
}

// Création d'une instance de classe (routeur)
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();