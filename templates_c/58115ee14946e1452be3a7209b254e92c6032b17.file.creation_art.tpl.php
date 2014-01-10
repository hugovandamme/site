<?php /* Smarty version Smarty-3.1.15, created on 2014-01-08 20:35:54
         compiled from "template\creation_art.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732452cd3060700626-30016337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58115ee14946e1452be3a7209b254e92c6032b17' => 
    array (
      0 => 'template\\creation_art.tpl',
      1 => 1389209651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732452cd3060700626-30016337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cd3060794911_96870406',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cd3060794911_96870406')) {function content_52cd3060794911_96870406($_smarty_tpl) {?>         <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->

<form method="POST" action="traitement/traitement_form.php" enctype="multipart/form-data" name="formulaire" onSubmit="return check();">
	
    
	<p>
        <label for="title">Titre :</label></br>
        <input type="text" name="title" id="title"  />
    </p>
    <p>
       <label for="Contenu">Contenu</label></br>
       <textarea name="Contenu" id="Contenu" onKeyUp="javascript:couleur(this);" ></textarea>
    </p>
	
	<TR>
					<TD>Image</TD>
						<TD>
							<INPUT type="file" name="image" id="image"/>
						</TD>
				</TR>
				<TR>
				</p>
					<TD>Publication</TD>
						<TD>
							<INPUT type="checkbox" name="publication" value =1 checked="checked"/>
						</TD>
				</TR>
				</p>
				<TR>
				<TD COLSPAN=2>
					<INPUT type="submit" name="envoyer" value="Envoyer">
				</TD>
				</TR>
</form><?php }} ?>
