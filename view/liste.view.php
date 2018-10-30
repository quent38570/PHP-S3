
<?php include 'header.view.php';

foreach ($stocks as $stock) {
  // code...
?>
<div class="Element">
  <?php $stock['idEvenement']; ?>

    <!-- Image du produit -->
    <div class="image">
      <img src="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/image/ <?php echo $stocks['image']; ?>.jpeg" alt="image">
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

</div>
<?php}?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
