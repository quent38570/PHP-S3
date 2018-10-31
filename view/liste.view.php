<?php include 'header.view.php';?>

<?php
foreach ($stocks as $stock) {
  // code...
?>
<form action="../controler/zoom.ctrl.php" method="post">
<div class="Element">
  <?php $stock['idEvenement']; ?>

    <!-- Image du produit -->
    <div class="image">
      <img src="../view/image/<?php echo $stock['image']; ?>.jpeg" alt="image">
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
    
    <!-- Bouton En savoir plus -->
    <div class="savoir">
      <input type="submit" value="En savoir plus"/>
    </div>
</div>
</form>
<?php
}
?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
