<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 09:38:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\menu\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773854485b5828e5b7be46-26869639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3125fa1072c31988f8ec0b155aceca77b9da2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\menu\\edit.tpl',
      1 => 1511268404,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773854485b5828e5b7be46-26869639',
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
  'unifunc' => 'content_5b5828e5c4ed72_41332460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5828e5c4ed72_41332460')) {function content_5b5828e5c4ed72_41332460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>

	<small>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['menuId']) {?>
			Id:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['symbol']->value) {?>
			<a class="btn btn-link btn-sm tips" title="Symbol Information|Symbol: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['object'];?>
</strong><br>Profile Name: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['profile'];?>
</strong><br>Profile Source: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['domain'];?>
</strong>">
				<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

			</a>
		<?php }?>	
	</small>
</h4>
</div>
<div class="modal-body">
	
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'edit'),$_smarty_tpl);?>
" method="post" role="form" class="form">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<div class="form-group">
			<label for="menus_name" class="control-label">
				Name
			</label>
			<input type="text" name="name" id="menus_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="menus_desc" class="control-label">
				Description
			</label>
			<textarea name="description" id="menus_desc" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</textarea>
		</div>
		<div class="form-group">
			<label for="menus_type" class="control-label">
				Type
			</label>
			<select name="type" id="menus_type" class="form-control">
				<option value="d" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='d') {?>selected="selected"<?php }?>>dynamic collapsed (d)</option>
				<option value="e" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='e') {?>selected="selected"<?php }?>>dynamic extended (e)</option>
				<option value="f" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='f') {?>selected="selected"<?php }?>>fixed (f)</option>
			</select>
		</div>
		<div class="form-group">
			<label for="menus_parse">
				<input type="checkbox" name="parse" id="menus_parse"<?php if ($_smarty_tpl->tpl_vars['info']->value['parse']=='y') {?> checked="checked"<?php }?> value="1">
				Wiki Parse
			</label>
			<div class="help-block">Labels of all options will be wiki parsed.</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']=='y') {?>
			<div class="form-group">
				<label for="icon" class="control-label">
					Folder Icon
				</label>
				<input type="text" id="icon" name="icon" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['icon']);?>
" class="form-control">
				<div class="help-block">Path and filename of closed folder icon</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y') {?>
			<div class="form-group">
				<label for="use_items_icons">
					<input type="checkbox" id="use_items_icons" name="use_items_icons" <?php if ($_smarty_tpl->tpl_vars['info']->value['use_items_icons']=='y') {?> checked="checked"<?php }?> value="1">
					Configure icons for menu entries
				</label>
			</div>
		<?php }?>
		<div class="submit">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']!='y') {?>
				<input type="hidden" name="use_items_icons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['use_items_icons'];?>
">
			<?php }?>
			<input type="hidden" name="confirm" value="1">
			<input type="hidden" name="menuId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>
">
			<input type="submit" class="btn btn-primary" name="save" value="Save">
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
