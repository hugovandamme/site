<?php

//on appelle le fichier de connexion
require('../includes/co.inc.php');

//on lance la session
session_start(); 

//on recupere la variable de session que l'on stocke dans une variable
 $id=$_SESSION['id'];

 //on recupere les valeurs du formulaire
$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$commentaire=$_POST['com'];


//requete qui insere l'id de la variable de session, com, pseudo, mail dans la table commentaire
$sql_insert = "INSERT INTO `commentaire` (`id_art`,`commentaire`, `pseudo`, `mail`) values ( '$id','$commentaire', '$pseudo', '$email')";
$exe = mysql_query($sql_insert);

//redirection vers la page commentaire
header("Location: ../commentaire.php?id=$id"); 
				
			

?>