<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:47:40
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-user_mailin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14636279925b5541cc4cc977-32418085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b1a6189884613e7469aa029d62f02196d8b9450' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-user_mailin.tpl',
      1 => 1464717928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14636279925b5541cc4cc977-32418085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'userStructs' => 0,
    'ustruct' => 0,
    'structs' => 0,
    'struct' => 0,
    'addNewRoute' => 0,
    'struct2' => 0,
    'tiki_p_admin' => 0,
    'testing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5541cc53de09_35908998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5541cc53de09_35908998')) {function content_5b5541cc53de09_35908998($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Mail-in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">
	function structSelChanged(itemNr)
	{
		var elem = document.getElementById('changed_'+itemNr);
		if (elem != null) {
			elem.value='y';
		}
	}

	function confirm_delete()
	{
		if (confirm('Are you sure you want to delete the routing rule?')) {
			return true;
		} else {
			return false;
		}
	}
<?php echo '</script'; ?>
>

<p>Configure how your mailed-in wiki pages are to be linked / organized.</p>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"user_mailin")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"user_mailin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Structure Routing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Structure Routing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Structure Routing</h2>
		<p>
			Structure routing will link mailed-in pages as a child to the specified structure node. Only email matching the filters are linked.<br/>
			Only newly created pages, using the mail-in wiki-put function, are affected.
		</p>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y') {?>
			<form action="#" method="POST">
				<table id="table_user_mailin">
					<tr>
						<th>Subject pattern</th>
						<th>Body pattern</th>
						<th>Structure</th>
						<th>Parent page name</th>
						<th>Active</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['ustruct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ustruct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userStructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mstruct']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ustruct']->key => $_smarty_tpl->tpl_vars['ustruct']->value) {
$_smarty_tpl->tpl_vars['ustruct']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mstruct']['iteration']++;
?>
						<tr>
							<td><input type="text" name="mailinSubjPatt<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" size="25" value="<?php echo $_smarty_tpl->tpl_vars['ustruct']->value['subj_pattern'];?>
" onchange="structSelChanged(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
);"/></td>
							<td><input type="text" name="mailinBodyPatt<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" size="25" value="<?php echo $_smarty_tpl->tpl_vars['ustruct']->value['body_pattern'];?>
" onchange="structSelChanged(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
);"/></td>
							<td>
								<select name="mailinStruct<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" onchange="structSelChanged(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
);">
									<?php  $_smarty_tpl->tpl_vars['struct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['struct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['structs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['struct']->key => $_smarty_tpl->tpl_vars['struct']->value) {
$_smarty_tpl->tpl_vars['struct']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['struct']->value['structure_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['struct']->value['structure_id']==$_smarty_tpl->tpl_vars['ustruct']->value['structure_id']) {?>selected='selected'"<?php }?>"><?php echo $_smarty_tpl->tpl_vars['struct']->value['pageName'];?>
</option>
									<?php } ?>
								</select>
							</td>
							<td><input type="text" name="mailinPar<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['ustruct']->value['pageName'];?>
" onchange="structSelChanged(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
);" /></td>
							<td>
								<input type="checkbox" name="mailinAct<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" <?php if ($_smarty_tpl->tpl_vars['ustruct']->value['is_active']=='y') {?>checked="checked"<?php }?> onchange="structSelChanged(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
);" />
								&nbsp;
								<a href="?delete=y&mailin_struct_id=<?php echo $_smarty_tpl->tpl_vars['ustruct']->value['mailin_struct_id'];?>
" onclick="return confirm_delete();"><img src="img/icons/delete.gif" /></a>

								
								<input type="hidden" id="changed_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" name="changed_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" />
								
								<input type="hidden" name="mailin_struct_id_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mstruct']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['ustruct']->value['mailin_struct_id'];?>
" />
							</td>
						</tr>
					<?php } ?>
					<?php if (isset($_smarty_tpl->tpl_vars['addNewRoute']->value)) {?>
						<tr>
							<td><input type="text" name="mailinSubjPattNew" size="25" /></td>
							<td><input type="text" name="mailinBodyPattNew" size="25" /></td>
							<td>
								<select name="mailinNewStruct">
									<option value="0" selected></option>
									<?php  $_smarty_tpl->tpl_vars['struct2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['struct2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['structs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['struct2']->key => $_smarty_tpl->tpl_vars['struct2']->value) {
$_smarty_tpl->tpl_vars['struct2']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['struct2']->value['structure_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['struct2']->value['pageName'];?>
</option>
									<?php } ?>
								</select>
							</td>
							<td><input type="text" name="mailinParNew" /></td>
							<td><input type="checkbox" name="mailinActNew" /></td>
						</tr>
					<?php }?>
				</table>
				<input type="submit" class="btn btn-default btn-sm" value="Save" />
			</form>
		<?php } else { ?>
			<p>
				Wiki structures feature is not enabled
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<blockquote>
						<a href="tiki-admin.php?page=wiki&highlight=feature_wiki_structure&cookietab=2">
							Go to wiki structure setting <?php echo smarty_function_icon(array('name'=>'structure'),$_smarty_tpl);?>

						</a>
					</blockquote>
				<?php }?>
			</p>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Structure Routing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"user_mailin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['testing']->value;?>

<?php }} ?>
