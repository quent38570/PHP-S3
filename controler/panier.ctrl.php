<?php

// Traitement des variables
$IdProduit = (isset($_POST['idEvenement'])) ? $_POST['idEvenement'] : 0 ;
if (isset($_SESSION)) {
  $IdUtilisateur = $_SESSION['ID'];
}else {
  session_start();
  $IdUtilisateur = $_SESSION['ID'];
}

// Demande de récupération des informations du panier
require_once("../model/DAO.class.php");
$dao = new BilletDAO();
$stocks = $dao->RecupListePanier($IdUtilisateur);

// Redirection
require_once("../view/panier.view.php");
 ?>
