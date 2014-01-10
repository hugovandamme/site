<?php

//on va chercher le fichier de connexion
require('includes/co.inc.php');

//on va chercher le fichier permettant l'authentification
include('fonction.php');

include('includes/header.inc.php');

//on appelle la classe smarty
require_once ('libs/Smarty.class.php');

//appel du fichier de controle de saisie javascript
include('javascript/java_crea.js');

//création d'un nouvel objet
$smarty = new smarty();

//Si l'utilisateur est authentifié, la page pour céer un article s'ouvre sinon un message s'affiche
if (identification()==true)
	{	
		//affichage du formulaire de création
		$smarty-> display("template/creation_art.tpl");

	}

else
	{ 
		echo"Veuilez vous identifier";
		
	}

include ('includes/footer.inc.php');

?>    

          
		  
		  
				
          
        
