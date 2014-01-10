<?php /* Smarty version Smarty-3.1.15, created on 2014-01-09 18:17:34
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189745294a359961b05-27647937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1389287671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189745294a359961b05-27647937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294a3599d2da2_02549113',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294a3599d2da2_02549113')) {function content_5294a3599d2da2_02549113($_smarty_tpl) {?><script language="JavaScript">
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



<div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
			
			
<form method="POST" action="connexion.php" enctype="application/x-www-form-urlencoded" name="formulaire" onSubmit="return check();">
	
    

	<p>
        <label for="e-mail">E mail :</label>
        <input type="text" name="email" id="email" placeholder="Ex : toto@gmail.com" size="30"   />
    </p>
		<p>
        <label for="pseudo">Votre mot de passe :</label>
        <input type="password" name="mdp" id="mdp"  />
    </p>
	<TD COLSPAN=2>
					<INPUT type="submit" name="valider" value="valider">
				</TD>
</form>




<?php }} ?>
