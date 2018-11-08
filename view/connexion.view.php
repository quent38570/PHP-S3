<?php include 'header.view.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Style/master2.css">
    <title></title>
  </head>
  <body>

    <form action="../controler/connexion.ctrl.php" method="post">
      <label for="Identifiant">Identifiant: </label>
      <input type="text" id="Identifiant" name="Identifiant"><br>

      <label for="MotDePasse">MotDePasse: </label>
      <input class="textfield" type="password" id="MotDePasse" name="MotDePasse"><br>

    	<input class="button" type="submit" value="Connexion"/>
    </form>

  </body>
</html>

<?php include 'footer.view.html'; ?>
