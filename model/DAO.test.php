<?php
require_once('DAO.class.php');

$dao = new BilletDAO();
$a = $dao->verifIDMDP('visiteur','visiteur');
var_dump($a);
 ?>
