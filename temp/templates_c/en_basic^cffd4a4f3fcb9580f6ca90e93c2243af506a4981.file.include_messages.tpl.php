<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:10:39
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16314567815b5198ff7aef62-78816059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cffd4a4f3fcb9580f6ca90e93c2243af506a4981' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_messages.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16314567815b5198ff7aef62-78816059',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5198ff7d6075_97494571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5198ff7d6075_97494571')) {function content_5b5198ff7d6075_97494571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<form class="form-horizontal" action="tiki-admin.php?page=messages" method="post" name="messages">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_messages','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Settings</legend>

		<?php echo smarty_function_preference(array('name'=>'allowmsg_by_default'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'allowmsg_is_optional'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'messu_mailbox_size'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'messu_archive_size'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'messu_sent_size'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'user_selector_realnames_messu'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'messu_truncate_internal_message'),$_smarty_tpl);?>


	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
