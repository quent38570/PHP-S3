
<!-- Demande à la base de données  -->
<?php
require_once("../model/DAO.class.php");
$dao = new BilletDAO();

// On récupère le paramètre ID
$idEvement = $_POST['idEvement'];

$stocks = ($dao -> RecupInfoProduit($idEvement));

require_once("../view/zoom.view.php");
?>
