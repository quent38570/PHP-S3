<?php

// Récupération des variables
$page = (isset($_POST['page'])) ? $_POST['page'] : "index" ;
$Identifiant = (isset($_POST['Identifiant'])) ? $_POST['Identifiant'] : 0 ;
$MotDePasse = (isset($_POST['MotDePasse'])) ? $_POST['MotDePasse'] : 0 ;

// Si donnée(s) érronée(s) alors on redirige vers la page de Connexion
if ($Identifiant == 0 || $MotDePasse == 0) {
    require_once("../view/connexion.view.php");
}

// Traitement des variables
// TO DO

// Redirection sur le site en tant que connécté

    // Sauvegarde de la connexion dans la variable globale SESSION
    session_start(['read_and_close' => true]);
    $_SESSION['Identifiant'] = $Identifiant;

    // Redirection sur la bonne page
    require_once("../view/".$page.".view.php");
 ?> 
