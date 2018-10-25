<?php
require_once('DAO.class.php');

$dao = new BilletDAO();
$a = $dao->RecupIdMdp('visiteur','visiteur');
var_dump($a);
 ?>
