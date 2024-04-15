<?php
session_start(); // Démarrage de la session

require_once('utilisateur.class.php');

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('location: 404.html');
    exit();
}

$et = new Utilisateur(); // Création d'une instance de la classe Utilisateur

$id = $_POST['id']; // Récupération de l'ID de l'utilisateur à partir du formulaire
$idconnecte = $_SESSION["id"]; // Récupération de l'ID de l'utilisateur connecté

// Récupération des données du formulaire
$et->nom = $_POST['nom'];
$et->prenom = $_POST['prenom'];
$et->email = $_POST['email'];
$et->pwd = $_POST['pwd'];
$et->role = $_POST['role'];

// Récupération du nom du fichier photo depuis le formulaire
$et->photo = $_FILES['photo']['name'];

// Vérification si l'ID correspond à l'utilisateur connecté
if ($id == $idconnecte) {
    $photo = $_FILES['photo']['name']; // Récupération du nom du fichier photo

    if ($photo == "") {
        // Si aucun fichier photo n'a été téléchargé, utilisez la méthode pour modifier uniquement la photo de l'utilisateur
        $et->modifierusersphoto($id);
        header('location: shopUser.php'); // Redirection vers une page après la modification
        exit(); // Arrêt du script après la redirection
    } else {
        // Si un fichier photo a été téléchargé, déplacez-le vers le dossier de destination et utilisez la méthode pour modifier l'utilisateur
        $fichierTemp = $_FILES['photo']['tmp_name'];
        move_uploaded_file($fichierTemp, 'images/' . $photo);
        $et->modifieruser($id);
        header('location: shopUser.php'); // Redirection vers une page après la modification
        exit(); // Arrêt du script après la redirection
    }
} else {
    header('location: 404.html'); // Redirection vers une page 404 si l'ID ne correspond pas à l'utilisateur connecté
    exit(); // Arrêt du script après la redirection
}
?>