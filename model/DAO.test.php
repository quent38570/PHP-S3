<?php
require_once('DAO.class.php');

$dao = new BilletDAO();
$a = $dao->RecupListePanier(1);
var_dump($a);
 ?>
