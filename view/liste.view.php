
<?php include 'header.view.php';
require_once();
foreach ($variable as $key => $value) {
  // code...
?>
<div class="Element">

    <!-- Image du produit -->
    <div class="image">
      <img src="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/image/ <?php echo $stocks['image']; ?>.jpeg" alt="image">
    </div>
    <!-- titre du produit -->
    <div class="produit">
      <h3><?php echo $stocks['nomEvenement']; ?></h3>
    </div>

    <!-- Dans le même lieux -->
    <div class="lieux">
      <p><?php echo $stocks['lieu']; ?></p>
    </div>

    <!-- Avec le même artiste -->
    <div class="artiste">
      <p><?php echo $stocks['nbBillet']; ?> billets restants</p>
    </div>

    <!-- Prix Billet -->
    <div class="prix">
      <p><?php echo $stocks['prix']; ?> euros</p>
    </div>

</div>
<?php}?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
