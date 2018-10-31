<?php
require_once('DAO.class.php');

$dao = new BilletDAO();
$a = $dao->RecupListePanier('visiteur');
var_dump($a);
 ?>
