<?php /* Smarty version Smarty-3.1.15, created on 2014-01-08 17:02:30
         compiled from "template\commentaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060352cd316f7e50e3-35838714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0699481be0ab7106ed422603c1f474c072e910b3' => 
    array (
      0 => 'template\\commentaire.tpl',
      1 => 1389195699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2060352cd316f7e50e3-35838714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cd316f957336_61698002',
  'variables' => 
  array (
    'data_tab' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cd316f957336_61698002')) {function content_52cd316f957336_61698002($_smarty_tpl) {?>

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

<p><em>Publie le:<?php echo $_smarty_tpl->tpl_vars['data']->value['date'];?>
 </em>
<p><img src="traitement/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
.jpg" alt="image"/></p>


<p style="text-align:justify;">
<?php } ?>  
                         			
			
<form method="POST" action="traitement/traitement_com.php" enctype="application/x-www-form-urlencoded" name="formulaire" onSubmit="return check();">
	
    
	<p>
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Ex : pseudo" size="30" maxlength="10"  />
    </p>
	<p>
        <label for="email">E mail :</label>
        <input type="text" name="email" id="email" placeholder="Ex : toto@gmail.com" size="30"   />
    </p>
    <p>
       <label for="com">Commentaire</label><br />
       <textarea name="com" id="com" onKeyUp="javascript:couleur(this);" ></textarea>
    </p>
	<TD COLSPAN=2>
					<INPUT type="submit" name="deposer commentaire" value="commenter">
				</TD>
</form>

<H2> Commentaires </H2>


<?php }} ?>
