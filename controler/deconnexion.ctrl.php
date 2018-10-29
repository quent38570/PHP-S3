<?php

// Sauvegarde de la deconnexion dans la variable globale SESSION
    session_start();
    $_SESSION['Identifiant'] = '';
    $_SESSION['MotDePasse'] = '';
    $_SESSION['ID'] = '';
    echo($_SESSION['Identifiant']);

// Redirection sur la bonne page
    require_once("../view/".$page.".view.php");
}

 ?>
