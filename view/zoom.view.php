<?php include 'header.view.php'; ?>
<form action="../controler/panier.ctrl.php" method="post">

  <div class="Element">
    <?php $stocks['idEvenement']; ?>

      <!-- Image du produit -->
      <div class="image">
        <img src="../view/image/<?php echo $stocks['image']; ?>.jpeg" alt="image">
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
      <div class="nbBillet">
        <p><?php echo $stocks['nbBillet']; ?> billets restants</p>
      </div>

      <!-- Prix Billet -->
      <div class="prix">
        <p><?php echo $stocks['prix']; ?> euros</p>
      </div>

      <!-- Bouton Achat -->
      <div class="achat">
         <input type="submit" value="Acheter" />
       </div>
  </div>

</form>
<?php include 'footer.view.html'; ?>
