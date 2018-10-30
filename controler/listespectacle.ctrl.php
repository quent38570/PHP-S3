
<!-- Demande à la base de données  -->
<?php
require_once("../model/DAO.class.php");
$dao = new BilletDAO();
$stocks = ($dao -> RecupListeSpectacleProduit());

require_once("../view/liste.view.php");
?>
