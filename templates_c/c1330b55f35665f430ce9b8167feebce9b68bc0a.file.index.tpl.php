<?php /* Smarty version Smarty-3.1.15, created on 2014-01-08 12:08:15
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11027529df27b6bbf21-76452772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1389179291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11027529df27b6bbf21-76452772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529df27b768c44_48574307',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529df27b768c44_48574307')) {function content_529df27b768c44_48574307($_smarty_tpl) {?>
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
<p></p><li><a href="commentaire.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">Commenter l'article</a></li>
<p></p><li><a href="sup.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" onclick="return confirm('Etes-vous sûr ?');">Supprimer l'article</a></li>

<p style="text-align:justify;">
<?php } ?>                          <?php }} ?>
