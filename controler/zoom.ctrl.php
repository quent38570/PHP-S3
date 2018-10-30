
<!-- Demande à la base de données  -->
<?php
require_once("../model/DAO.class.php");
$dao = new BilletDAO();

// On récupère le paramètre ID
$idElement = $_POST['idElement'];

$stocks = ($dao -> RecupInfoProduit($idElement));

require_once("../view/zoom.view.php");
?>
