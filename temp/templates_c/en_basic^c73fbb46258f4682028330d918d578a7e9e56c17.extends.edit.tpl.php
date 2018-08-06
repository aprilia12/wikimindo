<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 05:26:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\h5p\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5883472015b63cb4b2b4049-31631323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c04e67f7e1ac66c60975150ea2c053285f96fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\h5p\\edit.tpl',
      1 => 1500730206,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5883472015b63cb4b2b4049-31631323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63cb4b32d1d6_79281966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63cb4b32d1d6_79281966')) {function content_5b63cb4b32d1d6_79281966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<form class="content-form no-ajax" enctype="multipart/form-data" action="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'edit','fileId'=>$_smarty_tpl->tpl_vars['fileId']->value),$_smarty_tpl);?>
" method="post" accept-charset="UTF-8">
		<input type="hidden" name="library" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['library']->value);?>
">
		<input type="hidden" name="parameters" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parameters']->value);?>
">
		<input type="hidden" name="index" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['index']->value);?>
">
		<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
		<input type="hidden" name="daconfirm" value="y">
		<input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
		<div>
			<div class="form-item form-type-textfield form-item-title">
				<label for="edit-title">Title
					<span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="edit-title" name="title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['h5p_title']->value);?>
" size="60" maxlength="128" class="form-control required">
			</div>
			<br>
			<div>
				<div class="h5p-create"><div class="h5p-editor"><?php echo $_smarty_tpl->tpl_vars['loading']->value;?>
</div></div>
			</div>
			<br>
			<div class="form-actions form-wrapper submit" id="edit-actions">
				<input type="submit" id="edit-submit" name="op" value="Save" class="btn btn-primary">
				<?php if ($_smarty_tpl->tpl_vars['fileId']->value) {?>
					<input type="submit" id="edit-delete" name="op" value="Delete" class="btn btn-default confrim">
				<?php }?>
			</div>
			<br>
		</div>
	</form>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
