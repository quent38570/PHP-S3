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
      // préparer la commande
      $sql = 'SELECT * FROM utilisateur WHERE identifiant = :id;';
      $stmt = $this->db->prepare($sql);

      // Remplacement des variables
      $stmt->bindValue(':id', $ID);

      // éxécuter la commande
      $stmt->execute();
      $utilisateurs=$stmt->fetchall();

      // Parcour des ID valides
      foreach($utilisateurs as $users){
          // Si un ID correspond, retourner VRAI
          if ($ID == $users['identifiant']){
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
        $sql = 'INSERT INTO utilisateur (identifiant, motDePasse) VALUES(:id,:mdp) ;';
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
        $sql = 'SELECT idEvenement, image, nomEvenement, lieu, nbBillet, prix FROM evenement;';
        $stmt = $this->db->prepare($sql);

        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
  }
//------------------------------------------------------------------------------
function RecupListeConcertProduit(){
  // Récupère les produits enregistrés

      // préparer la commande
      $sql = 'SELECT idEvenement, image, nomEvenement, lieu, nbBillet, prix FROM evenement WHERE type = "concert";';
      $stmt = $this->db->prepare($sql);

      // éxécuter la commande
      $stmt->execute();

      // récupération des résultats
      $resultats=$stmt->fetchall();

      // Renvoie des résultats dans une variable
      return $resultats;
}
//------------------------------------------------------------------------------
function RecupListeSpectacleProduit(){
  // Récupère les produits enregistrés

      // préparer la commande
      $sql = 'SELECT idEvenement, image, nomEvenement, lieu, nbBillet, prix FROM evenement WHERE type = "spectacle";';
      $stmt = $this->db->prepare($sql);

      // éxécuter la commande
      $stmt->execute();

      // récupération des résultats
      $resultats=$stmt->fetchall();

      // Renvoie des résultats dans une variable
      return $resultats;
}
//------------------------------------------------------------------------------
function RecupListeSportProduit(){
  // Récupère les produits enregistrés

      // préparer la commande
    $sql = 'SELECT idEvenement, image, nomEvenement, lieu, nbBillet, prix FROM evenement WHERE type = "sport";';
      $stmt = $this->db->prepare($sql);

      // éxécuter la commande
      $stmt->execute();

      // récupération des résultats
      $resultats=$stmt->fetchall();

      // Renvoie des résultats dans une variable
      return $resultats;
}
//------------------------------------------------------------------------------
  function RecupInfoProduit($idEvenement){
      // Récupère les infos d'un produit à l'aide de son identifiant

          // préparer la commande
          $sql = 'SELECT * FROM evenement WHERE idEvenement = :id;';
          $stmt = $this->db->prepare($sql);

          // Remplacement des variables
          $stmt->bindValue(':id', $idEvenement);

          // éxécuter la commande
          $stmt->execute();

          // récupération des résultats
          $resultats=$stmt->fetchall();

          // Renvoie des résultats dans une variable
          return $resultats;
  }
//------------------------------------------------------------------------------
  function RecupListePanier($ID){
    // Récupère les produits enregistrés

        // préparer la commande
        $sql = 'SELECT nomEvenement, panier.idEvenement, nbBilletAcheter, prix FROM evenement, panier, utilisateur WHERE panier.idUtilisateur = :id and panier.idEvenement = evenement.idEvenement;';
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':id', $ID);
        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
 }
//------------------------------------------------------------------------------
  function RecupInfoProfil($ID){
    // Récupère les informations du profil

        // préparer la commande
        $sql = 'SELECT * FROM utilisateur WHERE idUtilisateur = :id;';
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':id', $ID);
        // éxécuter la commande
        $stmt->execute();

        // récupération des résultats
        $resultats=$stmt->fetchall();

        // Renvoie des résultats dans une variable
        return $resultats;
  }
//------------------------------------------------------------------------------
function VerifAchat($idEvenement,$idUtilisateur){
  // Vérifie que l'ID est déjà présent dans le panier

  // préparer la commande
  $sql = 'SELECT idEvenement FROM panier WHERE idUtilisateur = :idUtilisateur;';
  $stmt = $this->db->prepare($sql);

  $stmt->bindValue(':idUtilisateur', $idUtilisateur);

      // éxécuter la commande
      $stmt->execute();
      $utilisateurs=$stmt->fetchall();

      // Parcour le panier du client
      foreach($utilisateurs as $users){
          // Si un ID correspond, retourner VRAI
          if ($users == $idEvenement){
            return true;
          }
      }
      // si on arrive ici --> aucune correspondance --> retourner FAUX
      return false;
}
//------------------------------------------------------------------------------
function UpdatePanier($idEvenement,$idUtilisateur){
  // Update le panier en cas d'achat

      // préparer la commande
      $sql = 'UPDATE panier SET nbBilletAcheter = nbBilletAcheter+1 WHERE idUtilisateur = :idUtilisateur and idEvenement = :idEvenement;';
      $stmt = $this->db->prepare($sql);

      $stmt->bindValue(':idUtilisateur', $idUtilisateur);
      $stmt->bindValue(':idEvenement', $idEvenement);

      // éxécuter la commande
      $stmt->execute();
}
//------------------------------------------------------------------------------
function AjoutPanier($idEvenement,$idUtilisateur){
  // Ajout au panier en cas d'achat

      // préparer la commande
      $sql = 'INSERT INTO panier VALUES(:idEvenement,:idUtilisateur,1);';
      $stmt = $this->db->prepare($sql);

      $stmt->bindValue(':idUtilisateur', $idUtilisateur);
      $stmt->bindValue(':idEvenement', $idEvenement);

      // éxécuter la commande
      $stmt->execute();
}
//------------------------------------------------------------------------------
function VerifNbBilletRestant($idEvenement){
  // Verification du nombre de produit avec le meme id

      // préparer la commande
      $sql = 'SELECT nbBillet FROM Evenement WHERE idEvenement = :idEvenement;';
      $stmt = $this->db->prepare($sql);

      $stmt->bindValue(':idEvenement', $idEvenement);

      // éxécuter la commande
      $stmt->execute();

      // récupération des résultats
      $resultats=$stmt->fetchall();

      // Renvoie des résultats dans une variable
      return $resultats;
}
//------------------------------------------------------------------------------
function UpdateEvenement($idEvenement){
  // Update la table evenement en cas d'achat

      // préparer la commande
      $sql = 'UPDATE evenement SET nbBillet = nbBillet-1 WHERE idEvenement = :idEvenement;';
      $stmt = $this->db->prepare($sql);

      $stmt->bindValue(':idEvenement', $idEvenement);

      // éxécuter la commande
      $stmt->execute();
}
//------------------------------------------------------------------------------
function DeleteEvenement($idEvenement){
  // Suppression dans la table evenement en cas d'achat

      // préparer la commande
      $sql = 'DELETE FROM evenement WHERE idEvenement = :idEvenement;';
      $stmt = $this->db->prepare($sql);

      $stmt->bindValue(':idEvenement', $idEvenement);

      // éxécuter la commande
      $stmt->execute();
}
//------------------------------------------------------------------------------
}
 ?>
