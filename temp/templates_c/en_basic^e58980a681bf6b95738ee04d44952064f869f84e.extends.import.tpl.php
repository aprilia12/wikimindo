<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20614568055b67b4cc0089a6-67373839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a296708e134618bfd16e6e07ed9761f97615a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\import.tpl',
      1 => 1395049810,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20614568055b67b4cc0089a6-67373839',
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
  'unifunc' => 'content_5b67b4cc0bc4d0_06314877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4cc0bc4d0_06314877')) {function content_5b67b4cc0bc4d0_06314877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
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
	
	<?php if (!$_smarty_tpl->tpl_vars['success']->value) {?>
		<form class="form" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import'),$_smarty_tpl);?>
" role=form">
			<div class="form-group">
				<label class="control-label">Raw data</label>
				<textarea name="raw" rows="20" class="form-control" required="required"></textarea>
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="preserve" value="1">
						Preserve tracker ID
					</label>
				</div>
			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('close'=>"y",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('close'=>"y",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use "Tracker -> Export -> Structure" to produce this data.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('close'=>"y",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="submit text-center">
				<input type="hidden" name="confirm" value="1">
				<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
					<a href="tiki-list_trackers.php" class="btn btn-link">Cancel</a>
				<?php }?>
				<button type="submit" class="btn btn-primary">Import</button>
			</div>
		</form>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"confirm",'close'=>"n",'title'=>"Success")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"confirm",'close'=>"n",'title'=>"Success"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tracker import completed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"confirm",'close'=>"n",'title'=>"Success"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="submit text-center">
			<a href="tiki-list_trackers.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value,'url');?>
" class="btn btn-default">Return to Trackers</a>
			<a href="tiki-admin_tracker_fields.php?trackerId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value,'url');?>
" class="btn btn-default">Import fields for this tracker</a>
		</div>
	<?php }?>

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
