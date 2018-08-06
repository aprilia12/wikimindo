<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:50:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\add_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9908380825b67b7737f35c0-25223079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e700d538f3236c6ebbc8d233441345db069cf08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\add_field.tpl',
      1 => 1474182514,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9908380825b67b7737f35c0-25223079',
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
  'unifunc' => 'content_5b67b77388f9e5_77664470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b77388f9e5_77664470')) {function content_5b67b77388f9e5_77664470($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
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
	
<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'add_field'),$_smarty_tpl);?>
">
	<div class="form-group">
		<label for="name" class="control-label">Name</label>
		<input type="text" name="name" id="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" required="required" class="form-control">
	</div>
	<div class="form-group" style="display: none;">
		<label for="permName" class="control-label">Permanent name</label>
		<input type="text" name="permName" id="permName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" pattern="[a-zA-Z0-9_]+" class="form-control">
		<input type="hidden" id="fieldPrefix" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fieldPrefix']->value);?>
">
	</div>
	<div class="form-group">
		<label for="type" class="control-label">Type</label>
		<select name="type" id="type" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
"
					<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>

					<?php if ($_smarty_tpl->tpl_vars['info']->value['deprecated']) {?>- Deprecated<?php }?>
				</option>
			<?php } ?>
		</select>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<div class="help-block <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" style="display: none;">
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>

				<?php if ($_smarty_tpl->tpl_vars['info']->value['help']) {?>
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['helpurl']);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['help'],'url');?>
" target="tikihelp" class="tikihelp" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
">
						<?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>

					</a>
				<?php }?>
			</div>
		<?php } ?>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>"More types available")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>"More types available"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
			<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-admin.php?page=trackers&cookietab=3")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=trackers&cookietab=3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
More field types may be enabled from the <a href="%0">administration panel</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=trackers&cookietab=3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"https://doc.tiki.org/Tracker+Field+Type")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"https://doc.tiki.org/Tracker+Field+Type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contact your administrator to see if they can be enabled. The complete field type list is available in the <a rel="external" class="external" href="%0">documentation</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"https://doc.tiki.org/Tracker+Field+Type"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>"More types available"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="description" class="control-label">Description</label>
		<textarea name="description" id="description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="description_parse" value="1"
				<?php if ($_smarty_tpl->tpl_vars['descriptionIsParsed']->value) {?>checked="checked"<?php }?>
				>
			Description contains wiki syntax
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="adminOnly" value="1">
			Restrict visibility to administrators
			<div class="help-block">
				Useful if you are working on a live tracker.
			</div>
		</label>
	</div>
	<div class="submit">
		<input type="submit" class="btn btn-default" name="submit_and_edit" value="Add Field &amp; Edit Advanced Options">
		<input type="submit" class="btn btn-primary" name="submit" value="Add Field">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="hidden" name="next" value="close">
		<input type="hidden" name="modal" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modal']->value);?>
">
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
