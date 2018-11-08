<?php include 'header.view.php'; ?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Style/master2.css">
    <title></title>
  </head>
  <body>

<h3>Mon panier</h3>

<table id="panier">
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
</body>
</html>
<?php include 'footer.view.html'; ?>
