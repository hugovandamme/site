<?php
//on inclut l'en tête
include('includes/header.inc.php');

//On appelle le fichier de connexion
require('includes/co.inc.php');

//appel de la librairie smarty
require_once ('libs/Smarty.class.php');

//Creation d'un nouvel objet
$smarty = new smarty();

//Cette variable stocke le nombre d'article que l'on veut par page
$nbartparpage = 2;

/*Si un titre est présent dans la barre de rechercher on effectue l'operation suivante*/
if( isset ($_GET['titre'])) {
	
	//on recupere le titre que l'on stocke dans une variable
	$titre=$_GET['titre'];
			
	$page= (isset($_GET['page'])) ? $_GET['page'] :1;
	
	//on compte dans la base de données le nombre de titre ou de contenu correspondant à la recherche		
	$sqlcount = "SELECT count(*) as nbarticle FROM `articles`" 
	           ."WHERE `statut`=1 and (titre LIKE '%$titre%' or corps LIKE '%$titre%')";
 
	//on execute la requete		
	$result1 = mysql_query($sqlcount);
		
	//on stocke les données dans un tableau	
	$data=mysql_fetch_array($result1);
	$total = $data['nbarticle'] ;

	//on compte le nombre total de page
	$nbtotalpage= ceil($total / $nbartparpage);
	
	$debut = ($page - 1 ) * $nbartparpage;
	
	
	//On selectionne l'id, le titre, le contenu, la date correspondant à la recherche	  
	$sql_select = ("SELECT `id`, `titre`, `corps`, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, `statut` FROM `articles` where articles.titre LIKE '%$titre%' OR articles.corps LIKE '%$titre%' ORDER BY date DESC LIMIT $debut, $nbartparpage");	 
		  
		
		  
	//si aucune correspondance n'est trouvée dans la barre de recherche le message s'affiche sinon nous avons le nombre de resultats	  
	if($total == 0) {
		echo " aucune correspondance trouve ";
	} else { 
		echo "il y a ".$total. " résultats";
	}
		  
		  
	
		  
		  
} else {
		  

	
	$page= (isset($_GET['page'])) ? $_GET['page'] :1;
	

	$sqlcount =("select count(*) as nbarticle from articles where statut=1");
 
	$result = mysql_query($sqlcount);
	$data=mysql_fetch_array($result);
	$total = $data['nbarticle'] ;

	$nbtotalpage= ceil($total / $nbartparpage);
	$debut = ($page - 1 ) * $nbartparpage;
	
    //On selectionne tout les articles qui ont le statut à 1     
	$sql_select = "SELECT `id`, `titre`, `corps`, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, `statut` FROM `articles` WHERE `statut`=1 ORDER BY date DESC LIMIT $debut, $nbartparpage";
          
	
	}
/*on execute la requete qui changera suivant la condition
* precedente c'est à dire si il y a une recherche ou non
Si une recherche est effectuée, la requete du if sera execute
* qinon la requete du else le sera ce qui affichera tout les articles	*/	   
$exe_select = mysql_query($sql_select);

//On declare un tableau
$data_tab=array();


while ( $ligne = mysql_fetch_array($exe_select) ) {
	
	//on stocke les données dans le tableau
	$data_tab[]= $ligne;
		   
}

//la variable data_tab est assignée une variable smarty 		   
$smarty->assign('data_tab', $data_tab);

//On affiche la page index
$smarty-> display("template/index.tpl");
		  

		  
if (isset($_GET['titre'])) {
	$titre=$_GET['titre'];
	
	/*Lien vers les differentes pages, la boucle for permet d'assigner 
	*un lien pour chaque page qui ont été compté précèdemment Par exemple ici,
	*lel lien commence à la page 1 jusqu'au nombre de page totale*/
	
	for ($i=1; $i<= $nbtotalpage; $i++) {
		echo "<a href=\"index.php?titre=".$titre."&page=" .$i."\"> $i</a>";
	}
} else {
	for ($i=1; $i<= $nbtotalpage; $i++) {
		echo "<a href=\"index.php?page=" .$i. "\"> $i</a>";
	}
}
		   
include ('includes/footer.inc.php');

?>         
