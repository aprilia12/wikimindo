<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 06:53:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\menu\export_menu_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14698470285b5802596caef3-03655956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07075ea6ec8d7b73e296663be604c8f34feba5b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\menu\\export_menu_options.tpl',
      1 => 1417177926,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14698470285b5802596caef3-03655956',
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
  'unifunc' => 'content_5b580259720e10_31144777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b580259720e10_31144777')) {function content_5b580259720e10_31144777($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
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
	
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'export_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
" method="post" role="form" class="no-ajax form">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Export CSV",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Export CSV",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Menu: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuInfo']->value['name']);?>
 (Id: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuInfo']->value['menuId']);?>
)	
			<?php if ($_smarty_tpl->tpl_vars['menuSymbol']->value) {?>
				<span class="help-block">
					Symbol:<?php echo $_smarty_tpl->tpl_vars['menuSymbol']->value['object'];?>
 (Profile Name:<?php echo $_smarty_tpl->tpl_vars['menuSymbol']->value['profile'];?>
, Profile Source:<?php echo $_smarty_tpl->tpl_vars['menuSymbol']->value['domain'];?>
)
				</span>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Export CSV",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="form-group hidden" > 
			<label for="encoding" class="control-label">
				Encoding
			</label>
			<select name="encoding" class="form-control">
				<option value="UTF-8">UTF-8</option>
				<option value="ISO-8859-1">ISO-8859-1</option>
			</select>
		</div>
		<div class="submit">
			<input type="hidden" name="confirm" value="1">
			<button type="submit" class="btn btn-primary" name="export">Export</button>
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
