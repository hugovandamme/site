
<?php

//On appelle le fichier de connexion
require('includes/co.inc.php');

include('includes/header.inc.php');

//on insere le fichier javascript permettant de verifier les champs
include('javascript/java.js');

//on inclut la classe smarty
require('libs/Smarty.class.php');

//on lance la session afin de pouvoir recupere l'id de l'article presnt dans la variable de session
session_start();

//On créé un nouvel objet smarty	
$smarty = new Smarty();

//on recupere l'id que l'on stocke dans une variable de session afin de pouvoir l'utiliser par la suite         
$_SESSION['id']=($_GET['id']);
$id=$_SESSION['id'];

//requete SQL pour selectionner tous les champs de l'article ayant l'id correspondant
$sql_select = "SELECT * from `articles`" 
			 ."WHERE `id`='$id'";
			 
//execution de la requete		
$exe_select = mysql_query($sql_select);

//creation d'un tableau 
$data_tab=array();

//on stocke les données dans le tableau	
while ($ligne = mysql_fetch_array($exe_select)) {
		$data_tab[]=$ligne;
}

$smarty->assign('data_tab', $data_tab);
$smarty-> display("template/commentaire.tpl");

/*requete SQL pour selectionner le champs 
*commentaire et pseudo de la table commentaire
* en fonction de l'id correspondant present 
dans la table article, il y a donc une jointure*/	

	
$sql_select2 = "SELECT c.pseudo, c.commentaire from articles as a, commentaire as c  WHERE a.id=c.id_art AND a.id=$id";

//execution de la requete		
$exe_select2 = mysql_query($sql_select2);

//Insertion des données dans un tableau puis on affiche les données
				
while ( $ligne2 = mysql_fetch_array($exe_select2) ) {
				
		echo "<H3>Pseudo: $ligne2[pseudo]</p></H3> ";
		echo "$ligne2[commentaire] ";
		echo"</p>";
}
		
include ('includes/footer.inc.php');



?>




