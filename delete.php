<?php
require_once('produit.class.php');
$us=new Produit();
$us-> supprimerprod($_GET['id']);
header('location:shopAdmin.php');
?>
