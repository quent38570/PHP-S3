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
  <a href="../controler/liste.ctrl.php">Tous les billets</a>
  <a href="#">Concert</a>
  <a href="#">Spectacles</a>
  <a href="#">Sports</a>
  <a href="#">Informations</a>

</nav>

<div>
  <?php
  session_start();
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
    echo($_SESSION['Identifiant']);
      ?>
  <form action="../controler/deconnexion.ctrl.php" method="post">
  <input type="submit" value="Deconnexion" /><br>
 </form>
  <?php } ?>

</div>
