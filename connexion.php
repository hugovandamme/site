<?php


include('includes/header.inc.php');

//on va chercher le fichier de connexion
require('includes/co.inc.php');

//on va chercher la librairie smarty
require_once ('libs/Smarty.class.php');

//on inclut de fichier de verification
require('javascript/java_co.js');


//création d'un nouvel objet Smarty
$smarty = new Smarty();


          
/* Si un email et un mot de passe sont entrées dans le formualaire
* et qu'une correpondance est trouvée dans la bdd l'utilisateur est 
*connécté sinon il est redirigé sur la page de connexion */		   
			
if(isset($_POST['email']) && $_POST['mdp']) {

	//On recupere les valeurs du formulaire
	$e_mail=$_POST['email'];
	$mdp=$_POST['mdp'];
	
	//on selectione l'utilisateur qui a le mot de passe et l'email correspondant dans la bdd
	$sql_select="select * from `utilisateur` where mail='$e_mail' and mdp='$mdp'";
	
	//On execute la requete
	$exe_select=mysql_query($sql_select);
					
					
	//On stocke les valeurs dans un tableau et on met à jour le cookie				
	if($tab=mysql_fetch_array($exe_select)){
					
		$sid=md5($tab['mail'].time());
					
		//mise à jour du cookie dans la bdd			
		$sql_up= "UPDATE utilisateur SET `sid` = '$sid' where mail='$e_mail'";
		mysql_query($sql_up);
		setcookie('sid',$sid,time()+24*60*60);
					
					
		header('Location:index.php');
					
					
	}

}else {
	
//affichage de la page de connexion	
	
	$smarty-> display("template/connexion.tpl");
	
	}

	
	include ('includes/footer.inc.php');
?>         