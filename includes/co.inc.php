<?php
	//serveur
	$serveur="mysql.hostinger.fr";
	//nom bdd
	$bdd="u639802936_hugo";
	//mot de passe
	$mdp="Azertyuiop08";
	//nom utilisateur bdd
	$user="u639802936_hugo";
	//connexion au serveur
	$co= mysql_connect($serveur,$user,$mdp) or die ("erreur".mysql_error());
	//connection à la bdd
	$data=mysql_select_db($bdd);

?>