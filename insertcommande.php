<?php 
session_start();
require_once('produit.class.php');
require_once('commande.class.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les clés existent dans $_POST avant de les utiliser
    if (isset($_POST['quantite']) && isset($_POST['prix_total'])) {
        // Votre code de manipulation des données ici
    } else {
        // Gérer le cas où les clés sont manquantes dans $_POST
        echo "Les clés 'quantite' et/ou 'prix_total' sont manquantes dans \$_POST.";
    }
}
$uc = new Commande();
$id=$_GET['id'];
$idu=$_SESSION["id"];
$uc->id_produit=$id;
$uc->id_user = $_SESSION["id"];
$uc->quantite = $_POST['quantite'];
$uc->prix_total= $_POST['prix_total'];
$uc->insertCommande();
header("Location: shopUser.php?id=$idu");
exit();

?>