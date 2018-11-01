<?php
// Récupperation de l'ID du produit
$IdProduit = (isset($_POST['idEvenement'])) ? $_POST['idEvenement'] : 0 ;
if (isset($_SESSION)) {
  $IdUtilisateur = $_SESSION['ID'];
}else {
  session_start();
  $IdUtilisateur = $_SESSION['ID'];
}


require_once("../model/DAO.class.php");
$dao = new BilletDAO();

// --- Pour la table SQL "Panier" ---
// Verification si un produit avec le meme id a déjà été acheté avant
$result = $dao->VerifAchat($IdProduit,$IdUtilisateur);

if ($result) {
// Si $result = vrai alors -> update la table (+1 au nbBilletAcheter)
    // Update du panier
    $dao->UpdatePanier($IdProduit,$IdUtilisateur);
} else {
// Si $result = faux alors -> ajoute a la table
    // Ajout au panier
    $dao->AjoutPanier($IdProduit,$IdUtilisateur);
}

// --- Pour la table SQL "Evenement" ---
// Verification du nombre de produit avec le meme id
$result = $dao->VerifNbBilletRestant($IdProduit);

if ($result > 1) {
// Si $result > 1 alors -> update la table (-1 au nbBillet)
    // Update de l'évènement (-1 au nbBillet)
    $dao->UpdateEvenement($IdProduit);
}else {
// Si $result = 1 alors -> Suppression de l'évènement
    // Suppression de l'événement
    $dao->DeleteEvenement($IdProduit);
}
// Redirection
require_once("../view/achat.view.php");
 ?>
