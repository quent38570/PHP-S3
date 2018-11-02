
<!-- Demande à la base de données  -->
<?php
if(!(isset($_POST['ID']))){

  require_once("../view/index.view.php");
}else{

    require_once("../model/DAO.class.php");
    $dao = new BilletDAO();

    // On récupère le paramètre ID
    $idEvenement = $_POST['ID'];
    $stocks = ($dao -> RecupInfoProduit($idEvenement));

    require_once("../view/zoom.view.php");
}
?>
