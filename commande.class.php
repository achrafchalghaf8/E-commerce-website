<?php

require_once('pdo.php');

class Commande {
    public $id;
    public $id_user;
    public $id_produit;
    public $quantite;
    public $prix_total;

    // Constructeur de la classe
   

    function insertCommande() {
        try {
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();

            $req = "INSERT INTO commande (id_user, id_produit, quantite, prix_total) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($req);
            $stmt->execute([$this->id_user, $this->id_produit, $this->quantite, $this->prix_total]);

            return true; // Return true if insertion is successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false if an error occurs during insertion
        }
    }

    function listecommande($id_user) {
        
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();

            $req = "SELECT * FROM commande WHERE id_user = $id_user";
            $res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
            return $res; 
}

public function listecommandeeee($id_user) {
    $cnx = new connexion();
            $pdo = $cnx->CNXbase();
    $sql = "SELECT c.*,p.*,c.id AS id
            FROM commande c , produit p 
            WHERE c.id_produit = p.id  and c.id_user = $id_user";

    $res=$pdo->query($sql) or print_r($pdo->errorInfo()); 	
            return $res; 
}
}