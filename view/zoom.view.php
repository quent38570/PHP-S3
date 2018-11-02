<?php include 'header.view.php'; ?>
<form action="../controler/achat.ctrl.php" method="post">

  <div class="Element">

      <!-- Image du produit -->
      <div class="image">
        <img src="../view/image/<?php echo $stocks[0]['image']; ?>.jpeg" alt="image">
      </div>
      <!-- titre du produit -->
      <div class="produit">
        <h3><?php echo $stocks[0]['nomEvenement']; ?></h3>
      </div>

      <div class="libelle">
        <p><?php echo $stocks[0]['libelle']; ?></p>
      </div>

      <!-- Dans le même lieux -->
      <div class="lieux">
        <p><?php echo $stocks[0]['lieu']; ?></p>
      </div>

      <!-- Avec le même artiste -->
      <div class="nbBillet">
        <p><?php echo $stocks[0]['nbBillet']; ?> billets restants</p>
      </div>

      <!-- Prix Billet -->
      <div class="prix">
        <p><?php echo $stocks[0]['prix']; ?> euros</p>
      </div>

      <!-- Bouton Achat -->
      <div class="achat">
         <input type="submit" value="Acheter" />
       </div>
      <input type="hidden" name="idEvenement" value=<?php echo $stocks[0]['idEvenement'] ?> />
  </div>

</form>
<?php include 'footer.view.html'; ?>
