
<?php include 'header.view.php';
require_once();
foreach ($variable as $key => $value) {
  // code...
?>
<div class="Element">

    <!-- Image du produit -->
    <div class="image">
      <img src="http://www-etu-info.iut2.upmf-grenoble.fr/~sebags/ProgWeb/projet/view/image/IGottaFeeling.jpeg" alt="image">
    </div>
    <!-- titre du produit -->
    <div class="produit">
      <h3>I gotta feeling</h3>
    </div>

    <!-- Dans le même lieux -->
    <div class="lieux">
      <p>super showdown</p>
    </div>

    <!-- Avec le même artiste -->
    <div class="artiste">
      <p>The Black Eyed Peas</p>
    </div>

    <!-- Prix Billet -->
    <div class="prix">
      <p>20€</p>
    </div>

</div>
<?php}?>

<!---------------------------------------------------------------------------->

<?php include 'footer.view.html'; ?>
