<?php
require_once('utilisateur.class.php');
$us=new Utilisateur();
$us-> supprimeruser($_GET['id']);
header('location:users.php');
?>
