<?php include 'header.view.php'; ?>

<h3>Mon panier</h3>
<?php //var_dump($stocks); ?>
<table>
<tr>
  <td>nomEvenement</td>
  <td>idEvenement</td>
  <td>nbBilletAcheter</td>
  <td>prix</td>
</tr>
<?php
  foreach ($stocks as $stock) {
    echo "<tr><td>".$stock['nomEvenement']."</td>";
    echo "<td>".$stock['idEvenement']."</td>";
    echo "<td>".$stock['nbBilletAcheter']."</td>";
    echo "<td>".$stock['prix']."</td></tr>";
  }
 ?>
</table>

<?php include 'footer.view.html'; ?>
