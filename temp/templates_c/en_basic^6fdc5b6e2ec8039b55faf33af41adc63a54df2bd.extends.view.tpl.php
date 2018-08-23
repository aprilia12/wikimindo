<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 04:09:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_todo\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5046514845b7b7465b45dd3-01443427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d01bca3482f75668d34458a192580169778ee63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_todo\\view.tpl',
      1 => 1438938572,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5046514845b7b7465b45dd3-01443427',
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
  'unifunc' => 'content_5b7b7465e37d04_69378640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b7465e37d04_69378640')) {function content_5b7b7465e37d04_69378640($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_duration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.duration.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_html_select_duration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_duration.php';
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
	
<div class="table-responsive">
<table class="table">
	<tr>
		<th>From</th>
		<th>To</th>
		<th>Delay</th>
		<th>After</th>
		<th>Notification</th>
		<th>Action</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['todo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['todo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['todos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['todo']->key => $_smarty_tpl->tpl_vars['todo']->value) {
$_smarty_tpl->tpl_vars['todo']->_loop = true;
?>
		<tr>
			<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['todo']->value['from']['status']);?>
</td>
			<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['todo']->value['to']['status']);?>
</td>
			<td><?php echo smarty_modifier_escape(smarty_modifier_duration($_smarty_tpl->tpl_vars['todo']->value['after']));?>
</td>
			<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['todo']->value['event']);?>
</td>
			<td>
				<?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['todo']->value['notifs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
					<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notif']->value['to']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
						<div>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['i']->value);?>
:
							<?php if ($_smarty_tpl->tpl_vars['i']->value=='before') {?>
								<?php echo smarty_modifier_escape(smarty_modifier_duration($_smarty_tpl->tpl_vars['j']->value));?>

							<?php } else { ?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['j']->value);?>

							<?php }?>
						</div>
					<?php } ?>
				<?php } ?>
			</td>
			<td><a class="confirm-prompt tips" data-confirm="Do you really want to remove the scheduled event?" href="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'delete','todoId'=>$_smarty_tpl->tpl_vars['todo']->value['todoId'],'trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" title=":Remove event"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
</a></td>
		</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['todo']->_loop) {
?>
		<tr>
			<td colspan="6">No events registered</td>
		</tr>
	<?php } ?>
</table>
</div>
<form class="add-event no-ajax" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'add','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
	<h4>New event</h4>
	<div class="form-group">
		<label for="from">From</label>
		<select name="from" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['st']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stdata']->value['label']);?>
</option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label for="to">To</label>
		<select name="to" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['st']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stdata']->value['label']);?>
</option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label for="event">Reference date</label>
		<select name="event" class="form-control">
			<option value="creation">After creation</option>
			<option value="modification">After last modification</option>
		</select>
	</div>
	<div class="form-group">
		<label>Delay</label>
		<div class="form-control">
			<?php echo smarty_function_html_select_duration(array('prefix'=>'after'),$_smarty_tpl);?>

		</div>
	</div>
	<fieldset>
		<legend>Notification</legend>

		<div class="form-group">
			<label>Delay prior to status change</label>
			<div class="form-control">
				<?php echo smarty_function_html_select_duration(array('prefix'=>'notif'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="form-group">
			<label for="subject">Mail subject text</label>
			<input type="text" name="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="body">Mail body ressource</label>
			<input type="text" name="body" class="form-control">
			<div class="help-block">
				wiki:pageName for a wiki page or tplName.tpl for a template
			</div>
		</div>
	</fieldset>
	<div class="submit">
		<input type="submit" class="btn btn-primary" value="Create">
	</div>
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('.add-event').removeClass('add-event').submit(function () {
	var form = this;
	$.ajax({
		type: 'post',
		url: $(form).attr('action'),
		dataType: 'json',
		data: $(form).serialize(),
		success: function () {
			$(form).parent().loadService({
				controller: 'tracker_todo',
				action: 'view',
				trackerId: <?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>

			}, {});
		}
	});
	return false;
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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
