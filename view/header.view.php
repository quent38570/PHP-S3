<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-Billet</title>
  </head>
  <body>
    <h1>E-Billet</h1>
    <h2>Grenoble</h2>

<!--Barre de navigation -->
<nav>
  <a href="../view/index.view.php">Accueil</a>
  <a href="../controler/liste.ctrl.php">Tous les billets</a>
  <a href="../controler/listeconcert.ctrl.php">Concert</a>
  <a href="../controler/listespectacle.ctrl.php">Spectacles</a>
  <a href="../controler/listesport.ctrl.php">Sports</a>
</nav>

<div>
  <?php
  if(!(isset($_SESSION))){
      session_start();
  }
  if(!isset($_SESSION['Identifiant'])){
     ?>
    <a href="../view/connexion.view.php">
    <label for="Connexion"></label>
    <input type="button" id="Connexion" name="Connexion" value="Connexion">
    </a>

    <a href="../view/inscription.view.php">
    <label for="Inscription"></label>
    <input type="button" id="Inscription" name="Inscription" value="Inscription"><br>
    </a>
    <br>
    <?php
  }  else{
   ?> <p> Connecté en tant que: <?php  echo($_SESSION['Identifiant']);  ?></p>
  <form action="../controler/deconnexion.ctrl.php" method="post">
  <input type="submit" value="Deconnexion" /><br>
 </form>
 <form action="../controler/profil.ctrl.php" method="post">
 <input type="submit" value="Mon profil" /><br>
</form>
<form action="../controler/panier.ctrl.php" method="post">
<input type="submit" value="Mon panier" /><br>
</form>
  <?php } ?>

</div>
