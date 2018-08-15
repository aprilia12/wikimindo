<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:18:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_mailin_routes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15282826855b6d1202a87a49-70554275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b628bdecd91e1ee8d156d1d0603b757523bcfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_mailin_routes.tpl',
      1 => 1426971260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15282826855b6d1202a87a49-70554275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'userStructs' => 0,
    'ustruct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d1202ac23d1_76245281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d1202ac23d1_76245281')) {function content_5b6d1202ac23d1_76245281($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Mail-in routes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"user_mailin")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"user_mailin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Structure Routing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Structure Routing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Structure Routing</h2>
		<p>
		Routes are edited in the user's: My Account / Mail-in panel
		</p>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y') {?>
			<table id="table_user_mailin_routing" class="table normal table-striped table-hover">
				<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Subject pattern</th>
				<th>Body pattern</th>
				<th>Structure</th>
				<th>Parent page name</th>
				<th>Active</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['ustruct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ustruct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userStructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ustruct']->key => $_smarty_tpl->tpl_vars['ustruct']->value) {
$_smarty_tpl->tpl_vars['ustruct']->_loop = true;
?>
					<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['subj_pattern'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['body_pattern'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['structName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ustruct']->value['pageName'];?>
</td>
					<td><input type="checkbox" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['ustruct']->value['is_active']=='y') {?>checked="checked"<?php }?> />
					</td>
					</tr>
				<?php } ?>
			</table>
		<?php } else { ?>
			<p>
				Wiki structures feature is not enabled
			</p>
			<a href="tiki-admin.php?page=wiki&highlighted='feature_wiki_structure'">Go to wiki structure setting</a>
		<?php }?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Structure Routing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"user_mailin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
