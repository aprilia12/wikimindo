<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 07:14:50
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\menu\clone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5559777935b58074a6a31a6-81915692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaac77a1dc8f5ccccacf5dcd1c85c3893f502814' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\menu\\clone.tpl',
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
  'nocache_hash' => '5559777935b58074a6a31a6-81915692',
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
  'unifunc' => 'content_5b58074a73b743_85015460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b58074a73b743_85015460')) {function content_5b58074a73b743_85015460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
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
	
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'clone'),$_smarty_tpl);?>
" method="post" role="form">
		<div class="form-group">
			<label for="name" class="control-label">
				Name
			</label>
			<div class="">
				<input class="form-control" name="name" id="name" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 Copy<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
				<div class="small">
					<?php if ($_smarty_tpl->tpl_vars['info']->value['menuId']) {?>
						Clone of Menu Id: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['symbol']->value) {?>
						<a class="btn btn-link btn-sm tips" title="Symbol Information|Symbol: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['object'];?>
</strong><br>Profile Name: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['profile'];?>
</strong><br>Profile Source: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['domain'];?>
</strong>">
							<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

						</a>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="control-label">
				Description
			</label>
			<div class="">
				<textarea name="description" id="description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</textarea>
			</div>
		</div>

		<div class="submit">
			<input type="hidden" name="confirm" value="1">
			<input type="hidden" name="menuId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>
">
			<input type="submit" class="btn btn-primary" name="clone" value="Clone">
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
