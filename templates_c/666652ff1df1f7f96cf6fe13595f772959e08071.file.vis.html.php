<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 22:35:13
         compiled from "template\vis.html" */ ?>
<?php /*%%SmartyHeaderCode:3196052cc6bcc1b7c53-23229032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666652ff1df1f7f96cf6fe13595f772959e08071' => 
    array (
      0 => 'template\\vis.html',
      1 => 1389130511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3196052cc6bcc1b7c53-23229032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cc6bcc336bf6_49934537',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc6bcc336bf6_49934537')) {function content_52cc6bcc336bf6_49934537($_smarty_tpl) {?><script language="JavaScript">
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

          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</h2>
<?php echo $_smarty_tpl->tpl_vars['data']->value['corps'];?>

<p><em>Publie le:<?php echo $_smarty_tpl->tpl_vars['data']->value['date_fr'];?>
 </em>
<p><img src="traitement/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
.jpg" alt="image"/></p>
</p><li><a href="modif.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">Modifier article</a></li>
<p></p><li><a href="sup.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">Supprimer article</a></li>
<p></p><li><a href="vis.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">Visualiser l'article</a></li>

<p style="text-align:justify;">
<?php } ?>  
                         			
			
<form method="POST" action="page.html" enctype="application/x-www-form-urlencoded" name="formulaire" onSubmit="return check();">
	
    
	<p>
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Ex : pseudo" size="30" maxlength="10"  />
    </p>
	<p>
        <label for="email">E mail :</label>
        <input type="text" name="email" id="email" placeholder="Ex : toto@gmail.com" size="30"   />
    </p>
    <p>
       <label for="ameliorer">Commentaire</label><br />
       <textarea name="com" id="com" onKeyUp="javascript:couleur(this);" ></textarea>
    </p>
	<TD COLSPAN=2>
					<INPUT type="submit" name="deposer commentaire" value="commenter">
				</TD>
</form>
<?php }} ?>
