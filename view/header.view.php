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
  <a href="#">Concerts</a>
  <a href="#">Spectacles</a>
  <a href="#">Sports</a>
  <a href="#">Informations</a>

</nav>

<nav>
  <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/connexion.view.php">
  <label for="Connexion"></label>
  <input type="button" id="Connexion" name="Connexion" value="Connexion">
  </a>

  <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/inscription.view.php">
  <label for="Inscription"></label>
  <input type="button" id="Inscription" name="Inscription" value="Inscription"><br>
  </a>
  <br>
  <?php
require_once("../controler/connexion.ctrl.php");
session_start();
  echo($_SESSION['Identifiant']);
      ?>
  <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/index.view.php">
  <label for="Deconnexion"></label>
  <input type="button" id="Deconnexion" name="Deconnexion" value="Deconnexion"><br>
  </a>
</nav>
