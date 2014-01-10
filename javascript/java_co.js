<script language="JavaScript">
<!--
function couleur(obj) {
     obj.style.backgroundColor = "#FFFFFF";
}
 
function check() {
	var msg = "";
 
		if (document.formulaire.email.value != "")	{
		indexAroba = document.formulaire.email.value.indexOf('@');
		indexPoint = document.formulaire.email.value.indexOf('.');
		if ((indexAroba < 0) || (indexPoint < 0))		{
		document.formulaire.email.style.backgroundColor = "#F3C200";
			msg += "Le mail est incorrect\n";
		}
	}
 
if (document.formulaire.mdp.value == "")	{
		msg += "Veuillez saisir votre mot de passe\n";
		document.formulaire.mdp.style.backgroundColor = "#F3C200";
	}
	

 
 
	if (msg == "") return(true);
	else	{
		alert(msg);
		return(false);
	}
}
//-->
</script>