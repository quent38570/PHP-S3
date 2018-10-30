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
function VerifId($ID){
  // Vérifie que l'ID est déjà pris

      // $utilisateurs contient les ID valides
      $utilisateurs=$this->RecupIdMdp();

      // Parcour des ID valides
      foreach($utilisateurs as $users){
          // Si un ID correspond, retourner VRAI
          if ($ID == $users['identifiant']{
            return true;
          }
      }
      // si on arrive ici --> aucune correspondance --> retourner FAUX
      return false;
  }
//------------------------------------------------------------------------------
  function InsertNewUtilisateur($ID, $MDP){
    // Insertion d'un nouveau utilisateur

        // préparer la commande
        $sql = 'INSERT INTO utilisateur VALUES (identifiant, motDePasse) VALUES (:id,:mdp) ;';
        $stmt = $this->db->prepare($sql);

        // Remplacement des variables
        $stmt->bindValue(':id', $ID);
        $stmt->bindValue(':mdp', $MDP);

        // éxécuter la commande
        $stmt->execute();

  }
//------------------------------------------------------------------------------
  function RecupListeProduit(){
    // Récupère les produits enregistrés

        // préparer la commande
        $sql = 'SELECT * FROM evenement;';
        $stmt = $this->db->prepare($sql);

        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
  }
//------------------------------------------------------------------------------
}
 ?>
