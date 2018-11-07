<?php include 'header.view.php'; ?>

    <form action="../controler/connexion.ctrl.php" method="post">
      <label for="Identifiant">Identifiant: </label>
      <input type="text" id="Identifiant" name="Identifiant"><br>

      <label for="MotDePasse">MotDePasse: </label>
      <input type="password" id="MotDePasse" name="MotDePasse"><br>

    	<input type="submit" value="Connexion" />
    </form>

<?php include 'footer.view.html'; ?>
