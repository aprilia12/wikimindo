<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 09:05:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\user\manage_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8884554755b712da149d2b8-48095733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6fb8715e2c43e8d749205b6cce6c2887429c19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\user\\manage_groups.tpl',
      1 => 1490165436,
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
  'nocache_hash' => '8884554755b712da149d2b8-48095733',
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
  'unifunc' => 'content_5b712da1564667_47536554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b712da1564667_47536554')) {function content_5b712da1564667_47536554($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
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
	
	<?php /*  Call merged included template "access/include_items.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8884554755b712da149d2b8-48095733');
content_5b712da151a2d4_49170432($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_items.tpl" */?>
	<form method="post" id="confirm-action" class="confirm-action" action="<?php echo smarty_function_service(array('controller'=>$_smarty_tpl->tpl_vars['confirmController']->value,'action'=>$_smarty_tpl->tpl_vars['confirmAction']->value),$_smarty_tpl);?>
">
		<?php /*  Call merged included template "access/include_hidden.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8884554755b712da149d2b8-48095733');
content_5b712da15319d4_06904814($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_hidden.tpl" */?>
		<div class="form-group">
			<label for="add_remove" class="control-label">
				Add to or remove from:
			</label>
			<div class="radio">
				<label style="margin-right:20px">
					<input type="radio" name="add_remove" id="add" value="add" checked="">
					Add to
				</label>
				<label>
					<input type="radio" name="add_remove" id="remove" value="remove">
					Remove from
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="select_groups" class="control-label">
				These groups:
			</label>
			<select name="checked_groups[]" multiple="multiple" size="<?php echo $_smarty_tpl->tpl_vars['countgrps']->value;?>
" class="form-control" id="select_groups" data-usergroups='<?php echo $_smarty_tpl->tpl_vars['userGroups']->value;?>
'>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Anonymous'&&$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Registered') {?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
</option>
					<?php }?>
				<?php endfor; endif; ?>
			</select>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!=='y') {?>
				<div class="help-block">
					Use Ctrl+Click or Command+Click to select multiple options
				</div>
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("input[name=add_remove]").change(function () {
	var userGroups = $("#select_groups").data("usergroups"), mode = false;
	if ($(this).prop("checked") && userGroups) {
		if ($(this).val() === "add") {	// filter the group list to ones this user is not in
			mode = true;
		}
		$("option", "#select_groups").each(function () {
			if ($.inArray($(this).val(), userGroups) > -1) {
				$(this).prop("disabled", mode).css("opacity", mode ? .3 : 1);
			} else {
				$(this).prop("disabled", ! mode).css("opacity", ! mode ? .3 : 1);
			}
		});
		$("#select_groups").trigger("chosen:updated");
	}
}).change();
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="form-group">
			<label for="default_group" class="control-label">
				Set default group:
			</label>
			<select name="default_group" size="<?php echo $_smarty_tpl->tpl_vars['countgrps']->value;?>
" class="form-control" id="default_group">
				<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['group']->value!='Anonymous') {?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
</option>
					<?php }?>
				<?php } ?>
			</select>
		</div>
	</form>
	<?php /*  Call merged included template "access/include_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8884554755b712da149d2b8-48095733');
content_5b712da154cf69_04599999($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 09:05:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_items.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b712da151a2d4_49170432')) {function content_5b712da151a2d4_49170432($_smarty_tpl) {?><div class="form-group">
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 09:05:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_hidden.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b712da15319d4_06904814')) {function content_5b712da15319d4_06904814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 09:05:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b712da154cf69_04599999')) {function content_5b712da154cf69_04599999($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
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
