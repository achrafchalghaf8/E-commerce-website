<?php
require_once('utilisateur.class.php');
$et=new Utilisateur(); 
$id = $_POST['id'];

$et->nom = $_POST['nom'];
$et->prenom= $_POST['prenom'];
$et->email = $_POST['email'];
$et->pwd = $_POST['pwd'];
$et->role = $_POST['role'];

$et->photo=$_FILES['photo']['name'];

$photo=$_FILES['photo']['name'];
if ($photo=="")
{
    $et->modifierusersphoto($id);
header('location:users.php');
} else
{
   $fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$et->modifieruser($id);
  
header('location:users.php');
}


?>
