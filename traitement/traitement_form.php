<?php

//appel du fichier de connexion
require('../includes/co.inc.php');



//on recupere les variables du formulaire
$titre = $_POST['title'];
$contenu = $_POST['Contenu'];

 



// date du jour
$date = date("Y/m/d");
// extraction des jour, mois, an de la date
list($jour, $mois, $annee) = explode('/', $date);
// calcul du timestamp
$timestamp = mktime (0, 0, 0, $mois, $jour, $annee);



if(isset($titre) && ( $contenu  ) ) {
	
	//on recupere la variable publication de la checkbox, si celle ci est cochée dans le formulaire elle égale à 1 sinon elle est égale à 0	
	if(isset($_POST['publication'])) {
		$statut=1;
	} else { 
		$statut=0;
	}
	
	
	
	//Requête SQL permettant d'insérer des valeurs en fonction des valeurs entrées dans le formulaire
	
	$sql_insert = "INSERT INTO `articles` (`titre`, `corps`, `date` ,`statut`) values ( '$titre', '$contenu', '$date', '$statut' )";
				 

	//Execution de la requête
	$exe_insert = mysql_query($sql_insert);
		
		
	//Chargement d'une image 
	if (!empty($_POST['image'])){
		$erreur_image = $_FILES['image']['error'];
	} else {
		$erreur_image ="";
	}
	
	//Recuperation de l'identifiant
	$image = mysql_insert_id();
	
	move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) ."/img/$image.jpg");
	
	//redirection vers la page index
	header('location:../index.php');
}
?>