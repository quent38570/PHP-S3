<?php include 'header.view.php';?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Style/master2.css">
    <title></title>
  </head>
  <body>

<?php
foreach ($stocks as $stock) {
  // code...
?>
<form action="../controler/zoom.ctrl.php" method="POST">
<div class="Element">
  <?php $stock['idEvenement']; ?>

    <!-- Image du produit -->
    <div class="image">
      <img src="../view/image/<?php echo $stock['image']; ?>" alt="image" width="250px" height="250px">
    </div>
    <!-- titre du produit -->
    <div class="produit">
      <h3><?php echo $stock['nomEvenement']; ?></h3>
    </div>

    <!-- Dans le même lieux -->
    <div class="lieux">
      <p><?php echo $stock['lieu']; ?></p>
    </div>

    <!-- Avec le même artiste -->
    <div class="nbBillet">
      <p><?php echo $stock['nbBillet']; ?> billets restants</p>
    </div>

    <!-- Prix Billet -->
    <div class="prix">
      <p><?php echo $stock['prix']; ?> euros</p>
    </div>

    <!-- ID de l'article -->
    <div class="prix">
      <p>ID de l'article: <?php echo $stock['idEvenement']; ?></p>
    </div>

    <input type="hidden" name="ID" value=<?php echo $stock['idEvenement'] ?> />

    <!-- Bouton En savoir plus -->
    <div class="savoir">
      <input class="button" type="submit" value="En savoir plus" style="width:130px"/>
    </div>
    <br>
    <br>
</div>
</form>
<?php
}
?>

<!---------------------------------------------------------------------------->
</body>
</html>
<?php include 'footer.view.html'; ?>
