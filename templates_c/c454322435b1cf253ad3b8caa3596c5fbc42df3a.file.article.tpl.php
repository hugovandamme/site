<?php /* Smarty version Smarty-3.1.15, created on 2014-01-08 11:56:42
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253435294abf4783599-41314080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1389178598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253435294abf4783599-41314080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294abf47fbf08_82735168',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294abf47fbf08_82735168')) {function content_5294abf47fbf08_82735168($_smarty_tpl) {?><div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
<FORM method="post" action="traitement/traitement_form.php" enctype="multipart/form-data">
		<input type="hidden" name="id" id="id" value="50"/>
					<h2>Ajouter un article</h2>
			<TABLE BORDER=0>
				<TR>
					<TD>Titre</TD>
						<TD>
							<INPUT type="text" name="title" id="title">
						</TD>
				</TR>
				<TR>
					<TD>Contenu</TD>
						<TD>
							<textarea name="Contenu" id="Contenu" ></textarea>
						</TD>
				</TR>
				<TR>
					<TD>Image</TD>
						<TD>
							<INPUT type="file" name="image" id="image">
						</TD>
				</TR>
				<TR>
					<TD>Publication</TD>
						<TD>
							<INPUT type="checkbox" name="publication" value ="1">
						</TD>
				</TR>
				<TR>
				<TD COLSPAN=2>
					<INPUT type="submit" name="envoyer" value="Envoyer">
				</TD>
				</TR>
			</TABLE><?php }} ?>
