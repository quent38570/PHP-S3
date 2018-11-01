<?php

// Traitement des variables
$ID = (isset($_SESSION)) ? $_SESSION['ID'] : session_start(); $_SESSION['ID'] ;

// Demande de récupération des informations du panier
require_once("../model/DAO.class.php");
$dao = new BilletDAO();
$stocks = $dao->RecupListePanier($ID);

// Redirection
require_once("../view/panier.view.php");
 ?>
