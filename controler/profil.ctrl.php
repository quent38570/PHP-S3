<?php
if (isset($_SESSION)) {
  $idUtilisateur = $_SESSION['ID'];
}else {
  session_start();
  if (isset($_SESSION['ID'])) {
    $idUtilisateur = $_SESSION['ID'];
  }else{
    $idUtilisateur = NULL;
  }
}
if ($idUtilisateur == NULL) {
  require_once("../view/connexion.view.php");
}else{


    // Demande de récupération des informations du profil
    require_once("../model/DAO.class.php");
    $dao = new BilletDAO();

    $result = $dao->RecupInfoProfil($idUtilisateur);

    // Redirection
    require_once("../view/profil.view.php");
}
 ?>
