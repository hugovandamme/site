<?php

include('includes/header.inc.php');

//On appelle le fichier de connexion
require('includes/co.inc.php');
echo '<div class="span8">';
 
//On remet le cookie à 0 
setcookie('sid','');
echo"Vous êtes déconnecté";
include ('includes/footer.inc.php');
	
?>