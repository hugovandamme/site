<?php
//appel du fichier de connexion
require ('includes/co.inc.php');

//fonction d'identification	
function identification() {
	if(isset($_COOKIE['sid'])) {

		//on recupere la valeur du cookie
        $cookie = $_COOKIE['sid'];
		
		//on recupere le sid dans la bdd
		$sql_sid="select `sid` from utilisateur where sid='$cookie'";
		
		//on execute la requete
		$exe_sid=mysql_query($sql_sid);
					
		//on stocke la valeur 
		$sid=mysql_fetch_array($exe_sid);
					
		//si le cookie est egale a la valeur dans la bdd alors l'idenfication est bonne			
		if($cookie=$sid) {
			return true;
							
		} else { 
			return false;
		}
	} else { 
		return false;
		}
}	


	
?>