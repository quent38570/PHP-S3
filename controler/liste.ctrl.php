
<!-- Demande à la base de données  -->
<?php
require_once("../Model/DAO.class.php");
$dao = new BilletDAO();
$stocks = ($dao -> RecupListeProduit());

require_once("../view/liste.view.php");
?>
