
<!-- Demande à la base de données  -->
<?php
require_once("../Model/DAO.php");
$dao = new BilletDAO();
$stocks = ($dao -> RecupListeProduit());
?>