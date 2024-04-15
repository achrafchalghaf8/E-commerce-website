<?php        
class Produit
{
/* attributs de la classe utilisateur*/
	
public $id;
public $nom;
public $descp;
public $prix;
public $imagep;
/* constructeur de la classe */


function insertProduit()
 {
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="INSERT INTO produit (nom,descp,prix,imagep) VALUES
('$this->nom','$this->descp','$this->prix','$this->imagep')";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function listeproduit()
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
          
$req="SELECT * FROM produit";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res; 
}


function getprod($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="SELECT * FROM produit where id=$id";
$res=$pdo->query($req) or print_r($pdo->errorInfo()); 	
return $res;
}

function modifierprod($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE produit SET  nom='$this->nom', descp='$this->descp', prix='$this->prix', imagep='$this->imagep' WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function modifierprodsimage($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req="UPDATE produit SET  nom='$this->nom', descp='$this->descp', prix='$this->prix'  WHERE id=$id";
$pdo->exec($req) or print_r($pdo->errorInfo());
}

function supprimerprod($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();

$req="DELETE FROM produit WHERE id='$id'"; 
$pdo->exec($req);
}

//fin de la classe
 } ?>
