<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 09:09:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21379643095b67f43d028af6-01906688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79a050bdcb56becf55b412f6b96c7cf615f0463' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\confirm.tpl',
      1 => 1466369836,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    '4721eeec16c12bb40240c0bccf389166d1a6a0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_items.tpl',
      1 => 1494583678,
      2 => 'file',
    ),
    'f952e6101b9645932ee3f9d06c6e81b383dc92d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_hidden.tpl',
      1 => 1492547310,
      2 => 'file',
    ),
    'b2ee660cc89f40e2b7f35d9ac29536868597c2e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_footer.tpl',
      1 => 1466361260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21379643095b67f43d028af6-01906688',
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
  'unifunc' => 'content_5b67f43d0b1695_89688886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67f43d0b1695_89688886')) {function content_5b67f43d0b1695_89688886($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
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
	
	<form id="confirm-action" class='confirm-action' action="<?php echo smarty_function_service(array('controller'=>((string)$_smarty_tpl->tpl_vars['confirmController']->value),'action'=>((string)$_smarty_tpl->tpl_vars['confirmAction']->value)),$_smarty_tpl);?>
" method="post">
		<?php /*  Call merged included template "access/include_items.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21379643095b67f43d028af6-01906688');
content_5b67f43d07ab88_42020352($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_items.tpl" */?>
		<?php /*  Call merged included template "access/include_hidden.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21379643095b67f43d028af6-01906688');
content_5b67f43d08e404_08506654($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_hidden.tpl" */?>
	</form>
	<?php if (!empty($_smarty_tpl->tpl_vars['help']->value)) {?>
		<span class="help-block">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['help']->value);?>

		</span>
	<?php }?>
	<?php /*  Call merged included template "access/include_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21379643095b67f43d028af6-01906688');
content_5b67f43d099f97_03709102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_footer.tpl" */?>

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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 09:09:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_items.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67f43d07ab88_42020352')) {function content_5b67f43d07ab88_42020352($_smarty_tpl) {?><div class="form-group">
	<h5><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customMsg']->value);?>
</h5>
	<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&count($_smarty_tpl->tpl_vars['items']->value)>0) {?>
		<?php if (count($_smarty_tpl->tpl_vars['items']->value)<16) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
					<li>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>

					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
			<?php } ?>
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 09:09:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_hidden.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67f43d08e404_08506654')) {function content_5b67f43d08e404_08506654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
?><?php if (isset($_smarty_tpl->tpl_vars['items']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedItems'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
	<input type='hidden' name='items' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedItems']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['extra']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedExtra'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['extra']->value), null, 0);?>
	<input type='hidden' name='extra' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedExtra']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['toList']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedToList'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['toList']->value), null, 0);?>
	<input type='hidden' name='toList' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedToList']->value);?>
">
<?php }?>
<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 09:09:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67f43d099f97_03709102')) {function content_5b67f43d099f97_03709102($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<div class="modal-footer">
		<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['extra']->value['referer'];?>
">
			Back
		</a>
		<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
				<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

			<?php } else { ?>
				OK
			<?php }?>
		</button>
	</div>
<?php }?>

<?php }} ?>
