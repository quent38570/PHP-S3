
<?php include 'header.view.php';
?>
<form action="../controler/zoom.ctrl.php" method="post">
<?php
foreach ($stocks as $stock) {
  // code...
?>
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

    <!-- Bouton Achat -->
    <div class="achat">
      <input type="submit" value="Acheter" />
    </div>
</div>
<?php
}
?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
