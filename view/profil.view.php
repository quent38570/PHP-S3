<?php include 'header.view.php'; ?>

<h3>Mon profil</h3>

<p>Identifiant: <?php echo $result[0]['identifiant']; ?></p>
<p>Mot De Passe: <?php echo $result[0]['motDePasse']; ?></p>
<p>ID: <?php echo $result[0]['idUtilisateur']; ?></p>

<?php include 'footer.view.html'; ?>
