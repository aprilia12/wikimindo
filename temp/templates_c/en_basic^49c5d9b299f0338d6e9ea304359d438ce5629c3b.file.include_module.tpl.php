<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 09:53:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11108946585b6bf2f856a194-41353597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49c5d9b299f0338d6e9ea304359d438ce5629c3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_module.tpl',
      1 => 1517200580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11108946585b6bf2f856a194-41353597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'crumb' => 0,
    'crumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6bf2f85e3330_92068399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6bf2f85e3330_92068399')) {function content_5b6bf2f85e3330_92068399($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	&quot;Modules&quot; are the items of content at the top &amp; bottom and in the right &amp; left columns of the site. Select
	<a class="alert-link" href="tiki-admin_modules.php">Admin &gt; Modules</a> from the menu to create and edit modules.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="form-horizontal" action="tiki-admin.php?page=module" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<input type="hidden" name="modulesetup" />

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="button" class="btn btn-link" href="tiki-admin_modules.php" title="List">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Modules
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->tpl_vars['crumb']->value]->description;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo smarty_function_help(array('crumb'=>$_smarty_tpl->tpl_vars['crumbs']->value[$_smarty_tpl->tpl_vars['crumb']->value]),$_smarty_tpl);?>
</legend>

		<?php echo smarty_function_preference(array('name'=>'feature_modulecontrols'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'user_assigned_modules'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'user_flip_modules'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'modallgroups'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'modseparateanon'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'modhideanonadmin'),$_smarty_tpl);?>


		<div class="adminoptionbox">
			<fieldset>
				<legend>Module zone visibility</legend>
				<?php echo smarty_function_preference(array('name'=>'module_zones_top'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'module_zones_topbar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'module_zones_pagetop'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_left_column'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_right_column'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'module_zones_pagebottom'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'module_zones_bottom'),$_smarty_tpl);?>

				<hr>
				<?php echo smarty_function_preference(array('name'=>'module_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'module_zone_available_extra'),$_smarty_tpl);?>

			</fieldset>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Hint")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Hint"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			If you lose your login module, use tiki-login_scr.php to be able to login!
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Hint"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
