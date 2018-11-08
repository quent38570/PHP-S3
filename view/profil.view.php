<?php include 'header.view.php'; ?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Style/master2.css">
    <title></title>
  </head>
  <body>

<h3>Mon profil</h3>

<p>Identifiant: <?php echo $result[0]['identifiant']; ?></p>
<p>Mot De Passe: <?php echo $result[0]['motDePasse']; ?></p>
<p>ID: <?php echo $result[0]['idUtilisateur']; ?></p>


</body>
</html>
<?php include 'footer.view.html'; ?>
