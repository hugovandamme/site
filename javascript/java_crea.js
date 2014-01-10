<script language="JavaScript">
<!--
function couleur(obj) {
     obj.style.backgroundColor = "#FFFFFF";
}
 
function check() {
	var msg = "";
 
if (document.formulaire.title.value == "")	{
		msg += "Veuillez saisir votre pseudo\n";
		document.formulaire.title.style.backgroundColor = "#F3C200";
	}
	
if (document.formulaire.Contenu.value == "")	{
		msg += "Veuillez ecrire un commentaire\n";
		document.formulaire.Contenu.style.backgroundColor = "#F3C200";
	}
 
 
	if (msg == "") return(true);
	else	{
		alert(msg);
		return(false);
	}
}
//-->
</script>