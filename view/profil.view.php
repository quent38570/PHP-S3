<?php include 'header.view.php'; ?>

<!-- TO DO -->
<?php
require_once("../controler/connexion.ctrl.php");
session_start();
echo($_SESSION['Identifiant']);
    ?>
<?php include 'footer.view.html'; ?>
