<?php

// Traitement des variables
$ID = (isset($_SESSION)) ? $_SESSION['ID'] : session_start(); $_SESSION['ID'] ;


// Demande de récupération des informations du profil
require_once("../model/DAO.class.php");
$dao = new BilletDAO();
$result = $dao->RecupInfoProfil($ID);

// Redirection
require_once("../view/profil.view.php");
 ?>
