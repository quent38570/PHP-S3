<?php
class BilletDAO{
  private $db;

  function __construct(){
    $database = 'sqlite:../model/data/billet.db';
    $this->db = new PDO($database);

  }
//------------------------------------------------------------------------------
  function RecupIdMdp($ID, $MDP){
    // Récupère les couples d'ID/MDP valides

        // préparer la commande
        $sql = 'SELECT * FROM utilisateur WHERE identifiant = :id AND motDePasse = :mdp ;';
        $stmt = $this->db->prepare($sql);

        // Remplacement des variables
        $stmt->bindValue(':id', $ID);
        $stmt->bindValue(':mdp', $MDP);

        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
  }
//------------------------------------------------------------------------------
// function VerifIdMdp($ID, $MDP){
//   // Vérifie que le couple d'ID/MDP correspond à un couple valide
//
//       // $utilisateurs contient les ID et MDP valides
//       $utilisateurs=$this->RecupIdMdp();
//
//       // Parcour des ID et MDP valides
//       foreach($utilisateurs as $users){
//           // Si un couple d'ID/MDP correspondent, retourner VRAI
//           if ($ID == $users['identifiant'] && $MDP == $users['motDePasse']){
//             return true;
//           }
//       }
//       // si on arrive ici --> aucune correspondance --> retourner FAUX
//       return false;
//   }
}
 ?>
