<?php
class BilletDAO{
  private $db;
  function __construct(){
    $database = 'sqlite:model/data/billet.db';
    $this->db = new PDO($database);
  }
//------------------------------------------------------------------------------
  function verifIDMDP(string $ID,string $MDP){
    // Création de la requête
    $req = "SELECT * FROM utilisateur WHERE identifiant = '$ID' AND motDePasse = '$MDP'";
    // Envoie de la requête
    $results = $db->query($req);
    // Récupération de la requête
    $row = $results->fetchArray();
  }
//------------------------------------------------------------------------------
}
 ?>
