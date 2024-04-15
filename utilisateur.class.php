<?php        
class Utilisateur
{
public $id;
public $nom;
public $prenom;
public $email;
public $pwd;
public $role;
public $photo;




function getUserid($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM user where id=$id";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}

function getUser()
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM user WHERE email='$this->email'and pwd='$this->pwd'";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}

function insertUser()
 {
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="INSERT INTO user (nom,prenom,email,pwd, photo,role) VALUES
('$this->nom','$this->prenom','$this->email',$this->pwd, '$this->photo','$this->role')";

$pdo->exec($req) or print_r($pdo->errorInfo());
}

function listeutilisateur()
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
          
$req="SELECT * FROM user";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res; 
}
function modifieruser($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE user SET  nom='$this->nom', prenom='$this->prenom', email='$this->email', pwd='$this->pwd', photo='$this->photo',role='$this->role' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function modifierusersphoto($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE user SET  nom='$this->nom', prenom='$this->prenom', email='$this->email', pwd='$this->pwd',role='$this->role' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function supprimeruser($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();

$req="DELETE FROM user WHERE id='$id'"; 
$pdo->exec($req);
}
 } ?>
