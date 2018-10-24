<?php
class BilletDAO{
  private $db;
  function __construct(){
    $database = 'sqlite:model/data/billet.db';
    $this->db = new PDO($database);
  }
//------------------------------------------------------------------------------
  function RecupIdMdp(){
    // Récupère les couples d'ID/MDP valides

        // préparer la commande
        $sql = "SELECT identifiant, motDePasse FROM utilisateur";
        $stmt = $this->$db->prepare($sql);

        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
  }
//------------------------------------------------------------------------------
function VerifIdMdp($ID, $MDP){
  // Vérifie que le couple d'ID/MDP correspond à un couple valide

      // $utilisateurs contient les ID et MDP valides
      $utilisateurs=$this->RecupIdMdp();

      // Parcour des ID et MDP valides
      foreach($utilisateurs as $users){
          // Si un couple d'ID/MDP correspondent, retourner VRAI
          if ($identifiant == $users['identifiant'] && $mdpasse == $users['motdepasse']){
            return true;
          }
      }
      // si on arrive ici --> aucune correspondance --> retourner FAUX
      return false;
  }
}
 ?>
