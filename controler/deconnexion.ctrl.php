<?php

// Réinitialisation de la variable globale SESSION puis destruction
    session_start();
    $_SESSION = array();
    session_destroy();

// Redirection sur la bonne page
    header("Location: ../view/index.view.php");


 ?>
