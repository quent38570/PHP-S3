<?php include 'header.view.php'; ?>

  <br>
    <form action="../controler/inscription.ctrl.php" method="post">
      <label for="Identifiant">Identifiant: </label>
      <input type="text" id="Identifiant" name="Identifiant"><br>

      <label for="MotDePasse">MotDePasse: </label>
      <input type="text" id="MotDePasse" name="MotDePasse"><br>

    	<input type="submit" value="Inscription" />
    </form>

<?php include 'footer.view.html'; ?>
