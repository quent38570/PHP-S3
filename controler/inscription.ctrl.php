<?php

// Récupération des variables
$page = (isset($_POST['page'])) ? $_POST['page'] : "index" ;

// Si donnée(s) érronée(s) alors on redirige vers la page de Connexion
if (!empty($_POST['Identifiant']) || !empty($_POST['MotDePasse']) ) {
  $Identifiant = $_POST['Identifiant'] ;
  $MotDePasse = $_POST['MotDePasse'] ;

// Traitement des variables
            require_once("../model/DAO.class.php");
            $dao = new BilletDAO();
            if (!($dao->VerifId($Identifiant))){
              // Redirection sur le site en tant que connecté
                  $dao->InsertNewUtilisateur($Identifiant, $MotDePasse);


// Redirection sur la bonne page
                  require_once("../view/".$page.".view.php");
            }else {
              require_once("../view/inscription.view.php");
            }
}

 ?>
