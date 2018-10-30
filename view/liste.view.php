
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
<<<<<<< HEAD
      <h3><?php echo $stock['nomEvenement']; ?></h3>
=======
      <h3><?php echo $stocks['nomEvenement']; ?></h3>
>>>>>>> 4e7c7de9abbe4c4c354c62f5b7e709d3c46c866b
    </div>

    <!-- Dans le même lieux -->
    <div class="lieux">
<<<<<<< HEAD
      <p><?php echo $stock['lieu']; ?></p>
    </div>

    <!-- Avec le même artiste -->
    <div class="nbBillet">
      <p><?php echo $stock['nbBillet']; ?> billets restants</p>
=======
      <p><?php echo $stocks['lieu']; ?></p>
    </div>

    <!-- Avec le même artiste -->
    <div class="artiste">
      <p><?php echo $stocks['nbBillet']; ?> billets restants</p>
>>>>>>> 4e7c7de9abbe4c4c354c62f5b7e709d3c46c866b
    </div>

    <!-- Prix Billet -->
    <div class="prix">
<<<<<<< HEAD
      <p><?php echo $stock['prix']; ?> euros</p>
=======
      <p><?php echo $stocks['prix']; ?> euros</p>
>>>>>>> 4e7c7de9abbe4c4c354c62f5b7e709d3c46c866b
    </div>

</div>
<?php}?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
