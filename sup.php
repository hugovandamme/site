<?php

//on appelle le fichier de connexion 
require('includes/co.inc.php');

//on appelle la fonction d'identification
require('fonction.php');
include('includes/header.inc.php');

//on appelle la classe smarty
require_once ('libs/Smarty.class.php');

//creation d'un nouvel objet
$smarty = new smarty();

//on recupere l'identifiant que l'on stocke dans une variable
$id=$_GET['id'];

//si la personne est authentifiée
if (identification()==true) {

	//On supprime les commentaires associés à l'identifiant de l'article qu'on a recupéré dans la variable $id
	$sql_delete="DELETE FROM `commentaire`WHERE id_art=$id";
	$exe_delete=mysql_query($sql_delete);
	
	//On supprime l'article associé à l'identifiant
	$sql_delete_art="DELETE FROM `articles`WHERE id=$id";
	$exe_delete=mysql_query($sql_delete_art);
	header("Location: index.php"); 
}
//sinon ce message s'affiche
else {
	echo "Veuillez vous connecter";
	$smarty-> display("template/connexion.tpl");
}


?>