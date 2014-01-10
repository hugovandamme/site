<?php

//On appelle le fichier de connexion
require('includes/co.inc.php');

//On appelle le fichier d'identification
require('fonction.php');

include('includes/header.inc.php');

//on appelle la classe smarty
require('libs/Smarty.class.php');

//On créé un nouvel objet smarty
$smarty = new Smarty();

//On recupere l'id present dans l'url
$id = ($_GET['id']);



/*Si la personne est authentifiée et si un id est présent dans l'url,
*On selectionne tout les champs de la table article pour l'id concerné,
*avec une requête sql, qu'on insere dans un tableau nommé data, puis
*on recupere ces donnees pour les afficher dans le formulaire
*/


if (identification()==true) {
	if(isset($_GET['id'])) {
		

		//requete SQL pour selectionner tous les champs de l'article ayant l'id correspondant
		$sql_select = "SELECT * from `articles`" 
			         ."WHERE `id` = '$id'";
		
		//execution de la requete
		$exe_sql = mysql_query($sql_select);
		
		//insertion des données dans un tableau
		$data = mysql_fetch_array($exe_sql);
		
		//extraction des données de ce tableau
		extract($data);
		
		//On insere les valeurs de chaque champs dans une variable 
		$titre=$data['titre'];
		$smarty->assign("smarty_titre", $titre);
				
	    $corps=$data['corps'];
        $smarty->assign("smarty_corps", $corps);				
				
		$statut=$data['statut'];
		$smarty->assign("smarty_statut", $statut);
				
		$id=$data['id'];
		$smarty->assign("smarty_id", $id);
				
				

        //On affiche le formulaire
		$smarty-> display("template/modif.tpl");
		
	}
} else {
	echo "Vous n'avez pas les droits d'accés, veuillez vous connecter";
	$smarty-> display("template/connexion.tpl");
}

include ('includes/footer.inc.php');

?>    