<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:50:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\edit_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3421988845b67b792e0edb4-67712169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649dca2af3958cfc106978450b864e5516eea03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\edit_field.tpl',
      1 => 1510634696,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3421988845b67b792e0edb4-67712169',
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
  'unifunc' => 'content_5b67b792ef16e9_99668762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b792ef16e9_99668762')) {function content_5b67b792ef16e9_99668762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_accordion')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion.php';
if (!is_callable('smarty_block_accordion_group')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion_group.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_object_selector_multi')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_selector_multi.php';
if (!is_callable('smarty_function_object_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_selector.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
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
	
<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'edit_field'),$_smarty_tpl);?>
">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion', array()); $_block_repeat=true; echo smarty_block_accordion(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"General")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"General"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="form-group">
			<label for="name" class="control-label">Name</label>
			<input type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['name']);?>
" required="required" class="form-control">
		</div>
		<div class="form-group">
			<label name="description" class="control-label">Description</label>
			<textarea name="description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['description']);?>
</textarea>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="description_parse" value="1"
					<?php if ($_smarty_tpl->tpl_vars['field']->value['descriptionIsParsed']=='y') {?>checked="checked"<?php }?>
					>
				Description contains wiki syntax
			</label>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"General"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['name'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['name']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Options for %0";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['name']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>$_tmp1)); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</p>

			<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='t'||$_smarty_tpl->tpl_vars['field']->value['type']=='a') {?>
				
				<div class="checkbox">
					<label>
						<input type="checkbox" name="multilingual" value="1"
							<?php if ($_smarty_tpl->tpl_vars['field']->value['isMultilingual']=='y') {?>checked="checked"<?php }?>>
						Multilingual
					</label>
				</div>
			<?php }?>

			<?php  $_smarty_tpl->tpl_vars['def'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['def']->_loop = false;
 $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['def']->key => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->_loop = true;
 $_smarty_tpl->tpl_vars['param']->value = $_smarty_tpl->tpl_vars['def']->key;
?>
				<div class="form-group">
					<label for="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" class="control-label"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['def']->value['name']);?>
</label>
					<?php if ($_smarty_tpl->tpl_vars['def']->value['options']) {?>
						<select name="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['def']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['val']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
"
									<?php if ($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value]==$_smarty_tpl->tpl_vars['val']->value) {?> selected="selected"<?php }?>>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

								</option>
							<?php } ?>
						</select>
					<?php } elseif ($_smarty_tpl->tpl_vars['def']->value['selector_type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['def']->value['separator']) {?>
							<?php echo smarty_function_object_selector_multi(array('type'=>$_smarty_tpl->tpl_vars['def']->value['selector_type'],'_separator'=>$_smarty_tpl->tpl_vars['def']->value['separator'],'_simplename'=>"option~".((string)$_smarty_tpl->tpl_vars['param']->value),'_simplevalue'=>$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value],'_simpleid'=>"option-".((string)$_smarty_tpl->tpl_vars['param']->value),'_parent'=>$_smarty_tpl->tpl_vars['def']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['def']->value['parentkey'],'_sort'=>$_smarty_tpl->tpl_vars['def']->value['sort_order']),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_object_selector(array('type'=>$_smarty_tpl->tpl_vars['def']->value['selector_type'],'_simplename'=>"option~".((string)$_smarty_tpl->tpl_vars['param']->value),'_simplevalue'=>$_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value],'_simpleid'=>"option-".((string)$_smarty_tpl->tpl_vars['param']->value),'_parent'=>$_smarty_tpl->tpl_vars['def']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['def']->value['parentkey']),$_smarty_tpl);?>

						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['def']->value['separator']) {?>
						<input type="text" name="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" value="<?php echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value],$_smarty_tpl->tpl_vars['def']->value['separator']));?>
" class="form-control">
					<?php } elseif ($_smarty_tpl->tpl_vars['def']->value['count']=='*') {?>
						<input type="text" name="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" value="<?php echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value],','));?>
" class="form-control">
					<?php } elseif ($_smarty_tpl->tpl_vars['def']->value['type']=='textarea') {?>
						<textarea name="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value]);?>
</textarea>
					<?php } else { ?>
						<input type="text" name="option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['param']->value]);?>
" class="form-control">
					<?php }?>
					<div class="help-block"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['def']->value['description']);?>
</div>
					<?php if (!$_smarty_tpl->tpl_vars['def']->value['selector_type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['def']->value['count']=='*') {?>
							<div class="help-block">Separate multiple with commas.</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['def']->value['separator']) {?>
							<div class="help-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Separate multiple with &quot;<?php echo $_smarty_tpl->tpl_vars['def']->value['separator'];?>
&quot;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['def']->value['depends']) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$("input[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['def']->value['depends']['field']);?>
'],textarea[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['def']->value['depends']['field']);?>
'],select[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['def']->value['depends']['field']);?>
']")
						.change(function(){
							var val = $(this).val();
							var fg = $("input[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
'],textarea[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
'],select[name='option~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value);?>
']").closest('.form-group');
							if( val <?php if ($_smarty_tpl->tpl_vars['def']->value['depends']['op']) {
echo $_smarty_tpl->tpl_vars['def']->value['depends']['op'];
} else { ?>===<?php }
echo json_encode($_smarty_tpl->tpl_vars['def']->value['depends']['value']);?>
 || ( !<?php echo json_encode($_smarty_tpl->tpl_vars['def']->value['depends']['value']);?>
 && val ) ) {
								fg.show();
							} else {
								fg.hide();
							}
						}).change();
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			<?php } ?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Validation")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Validation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="validation_type" class="control-label">Type</label>
				<select name="validation_type" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['validation_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
"
							<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['field']->value['validation']) {?> selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

						</option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="validation_parameter" class="control-label">Parameters</label>
				<input type="text" name="validation_parameter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['validationParam']);?>
" class="form-control">
			</div>

			<div class="form-group">
				<label for="validation_message" class="control-label">Error Message</label>
				<input type="text" name="validation_message" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['validationMessage']);?>
" class="form-control">
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Validation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Permissions")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="visibility" class="control-label">Visibility</label>
				<select name="visibility" class="form-control">
					<option value="n"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='n') {?> selected="selected"<?php }?>>Visible by all</option>
					<option value="r"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='r') {?> selected="selected"<?php }?>>Visible by all but not in RSS feeds</option>
					<option value="y"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='y') {?> selected="selected"<?php }?>>Visible after creation by administrators only</option>
					<option value="p"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='p') {?> selected="selected"<?php }?>>Editable by administrators only</option>
					<option value="a"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='a') {?> selected="selected"<?php }?>>Editable after creation by administrators only</option>
					<option value="c"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='c') {?> selected="selected"<?php }?>>Editable by administrators and creator only</option>
					<option value="i"<?php if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='i') {?> selected="selected"<?php }?>>Immutable after creation</option>
				</select>
				<div class="help-block">
					Creator requires a user field with auto-assign to creator (1)
				</div>
			</div>

			<div class="form-group">
				<label for="visible_by" class="groupselector control-label">Visible by</label>
				<input type="text" name="visible_by" id="visible_by" value="<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['visibleBy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
, <?php } ?>" class="form-control">
				<?php echo smarty_function_autocomplete(array('element'=>'#visible_by','type'=>'groupname','options'=>"multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

				<div class="help-block">
					List of Group names with permission to see this field. Separated by comma (,)
				</div>
			</div>

			<div class="form-group">
				<label for="editable_by" class="groupselector control-label">Editable by</label>
				<input type="text" name="editable_by" id="editable_by" value="<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['editableBy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
, <?php } ?>" class="form-control">
				<?php echo smarty_function_autocomplete(array('element'=>'#editable_by','type'=>'groupname','options'=>"multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

				<div class="help-block">
					List of Group names with permission to edit this field. Separated by comma (,)
				</div>
			</div>

			<div class="form-group">
				<label for="error_message" class="control-label">Error Message</label>
				<input type="text" name="error_message" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['errorMsg']);?>
" class="form-control">
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Advanced")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Advanced"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="permName" class="control-label">Permanent name</label>
				<input type="text" name="permName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['permName']);?>
" pattern="[a-zA-Z0-9_]+" class="form-control">
				<div class="help-block">
					Changing the permanent name may have consequences in integrated systems.
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['types']->value) {?>
				<div class="form-group">
					<label for="type" class="control-label">Field Type</label>
					<select name="type" data-original="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
" class="confirm-prompt form-control">
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
"
								<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>>
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
						<div class="help-block field <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
">
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
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('select[name=type]').change(function () {
	var descriptions = $(this).closest('.form-group').
			find('.help-block.field').
			hide();

	if ($(this).val()) {
		descriptions
			.filter('.' + $(this).val())
			.show();
	}
}).change();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_change_field_type']=='y') {?>
						<div class="alert alert-danger">
							<?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>
 Changing the field type may cause irretrievable data loss - use with caution!
						</div>
					<?php }?>
					<div class="alert alert-info">
						<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>
 Make sure you rebuild the search index if you change field type.
					</div>
				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Advanced"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="submit">
		<input type="submit" class="btn btn-primary" name="submit" value="Save">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['trackerId']);?>
">
		<input type="hidden" name="fieldId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['fieldId']);?>
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
