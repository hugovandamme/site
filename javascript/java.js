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
	else	{
		document.formulaire.email.style.backgroundColor = "#F3C200";
		msg += "Veuillez saisir votre mail.\n";
	}
 
if (document.formulaire.pseudo.value == "")	{
		msg += "Veuillez saisir votre pseudo\n";
		document.formulaire.pseudo.style.backgroundColor = "#F3C200";
	}
	
if (document.formulaire.com.value == "")	{
		msg += "Veuillez ecrire un commentaire\n";
		document.formulaire.com.style.backgroundColor = "#F3C200";
	}
 
 
	if (msg == "") return(true);
	else	{
		alert(msg);
		return(false);
	}
}
//-->
</script>