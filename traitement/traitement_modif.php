<?php

//appel du fichier de connexion
require('../includes/co.inc.php');



//on recupere les variables du formulaire
$titre = $_POST['titre'];
$corps = $_POST['Contenu'];
$id = $_POST['id'];
$publication = $_POST['publication'];
$image = $_POST['image'];


//on recupere la variable publication de la checkbox, si celle ci est cochée dans le formulaire elle égale à 1 sinon elle est égale à 0
if(isset($publication)) {
    $statut=1;
} else { 
	$statut=0;
}

	

//Requête SQL permettant de mettre à jour la table article en fonction des valeurs entrées dans le formulaire 	
$sql_update =  "UPDATE `articles` SET `titre` = '$titre', `corps` = '$corps', `statut` = '$statut'" 
			  ."WHERE `articles`.`id` = '$id'";
			  
			  

//Execution de la requête
mysql_query($sql_update);


//Chargement d'une nouvelle image
if (!empty($image)) {
	$erreur_image = $_FILES['image']['error'];
} else {
	$erreur_image ="";
}
		

move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) ."/img/$id.jpg");


//redirection vers la page index
header('location:../index.php');

?>