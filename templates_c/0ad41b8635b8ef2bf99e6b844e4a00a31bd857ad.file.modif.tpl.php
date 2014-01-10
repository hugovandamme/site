<?php /* Smarty version Smarty-3.1.15, created on 2014-01-08 20:53:24
         compiled from "template\modif.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223425294c4556b5160-05338131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad41b8635b8ef2bf99e6b844e4a00a31bd857ad' => 
    array (
      0 => 'template\\modif.tpl',
      1 => 1389210798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223425294c4556b5160-05338131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294c4557d86b8_00408931',
  'variables' => 
  array (
    'smarty_id' => 0,
    'smarty_titre' => 0,
    'smarty_corps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294c4557d86b8_00408931')) {function content_5294c4557d86b8_00408931($_smarty_tpl) {?><div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
			
<FORM method="post" action="traitement/traitement_modif.php" enctype="multipart/form-data">
		<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['smarty_id']->value;?>
"/>
					<h2>Modifier un article</h2>
			<TABLE BORDER=0>
				<TR>
					<TD>Titre</TD>
						<TD>
							<INPUT type="text" name="titre" value="<?php echo $_smarty_tpl->tpl_vars['smarty_titre']->value;?>
"/>
						</TD>
				</TR>
				<TR>
					<TD>Contenu</TD>
						<TD>
							<INPUT type="text" name="Contenu" value="<?php echo $_smarty_tpl->tpl_vars['smarty_corps']->value;?>
"/>
						</TD>
				</TR>
				<TR>
					<TD>Image</TD>
						<TD>
							<INPUT type="file" name="image" id="image"/>
						</TD>
				</TR>
				<TR>
					<TD>Publication</TD>
						<TD>
							<INPUT type="checkbox" name="publication" value="1" checked="checked"/>
						</TD>
				</TR>
				
				<TR>
				
				<TD COLSPAN=2>
					<INPUT type="submit" name="modifier" value="modifier">
				</TD>
				</TR>
			</TABLE>
</FORM>
			<?php }} ?>
