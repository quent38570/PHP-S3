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
            $result = $dao->RecupIdMdp($Identifiant, $MotDePasse);
            if (!empty($result)){
              // Redirection sur le site en tant que connécté

                  // Sauvegarde de la connexion dans la variable globale SESSION
                  session_start();
                  $_SESSION['Identifiant'] = $Identifiant;
                  $_SESSION['MotDePasse'] = $MotDePasse;
                  $_SESSION['ID'] = $result[0]['idUtilisateur'];

// Redirection sur la bonne page
                  require_once("../view/".$page.".view.php");
            }else {
              require_once("../view/connexion.view.php");
              echo "Mauvais Mot de Passe";
            }
}

 ?>
