<?php
require_once('produit.class.php');
$et=new Produit(); 
$id = $_POST['id'];

$et->nom = $_POST['nom'];
$et->descp= $_POST['descp'];
$et->prix = $_POST['prix'];
$et->imagep=$_FILES['imagep']['name'];

$imagep=$_FILES['imagep']['name'];
if ($imagep=="")
{
    $et->modifierprodsimage($id);
header('location:shopAdmin.php');
} else
{
   $fichierTemp=$_FILES['imagep']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$imagep );
$et->modifierprod($id);
  
header('location:shopAdmin.php');
}


?>
