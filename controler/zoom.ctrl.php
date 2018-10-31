
<!-- Demande à la base de données  -->
<?php
require_once("../model/DAO.class.php");
var_dump($_POST['ID']);
$dao = new BilletDAO();


// On récupère le paramètre ID
$idEvenement = $_POST['ID'];

$stocks = ($dao -> RecupInfoProduit($idEvenement));

var_dump($stocks);

require_once("../view/zoom.view.php");
?>
