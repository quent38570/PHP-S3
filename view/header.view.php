<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Style/master.css">
    <title>E-Billet</title>
  </head>
  <body>
    <h1>E-Billet</h1>
    <h2>Grenoble</h2>

<!--Barre de navigation -->
<nav>
  <ul>
    <li><a href="../view/index.view.php">Accueil</a></li>
    <li><a href="../controler/liste.ctrl.php">Tous les billets</a></li>
    <li><a href="../controler/listeconcert.ctrl.php">Concert</a></li>
    <li><a href="../controler/listespectacle.ctrl.php">Spectacles</a></li>
    <li><a href="../controler/listesport.ctrl.php">Sports</a></li>
  </ul>
</nav>

<div id="connexion">
  <?php
  if(!(isset($_SESSION))){
      session_start();
  }
  if(!isset($_SESSION['Identifiant'])){
     ?>
    <a href="../view/connexion.view.php">
    <label for="Connexion"></label>
    <input class="button" type="button" id="Connexion" name="Connexion" value="Connexion" style="width:130px">
    </a>

    <a href="../view/inscription.view.php">
    <label for="Inscription"></label>
    <input  class="button" type="button" id="Inscription" name="Inscription" value="Inscription" style="width:130px"><br>
    </a>
    <br>
    <?php
  }  else{
   ?> <p> Connecté en tant que: <?php  echo($_SESSION['Identifiant']);  ?></p>
  <form action="../controler/deconnexion.ctrl.php" method="post">
  <input  class="button" type="submit" value="Deconnexion" style="width:130px"/><br>
 </form>
 <form action="../controler/profil.ctrl.php" method="post">
 <input  class="button" type="submit" value="Mon profil" style="width:130px"/><br>
</form>
<form action="../controler/panier.ctrl.php" method="post">
<input class="button" type="submit" value="Mon panier" style="width:130px"/><br>
</form>
  <?php } ?>

</div>
