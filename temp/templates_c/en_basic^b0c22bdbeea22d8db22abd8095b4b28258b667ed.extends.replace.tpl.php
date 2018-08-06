<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\replace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19320545895b67b4d7da5715-27078857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d16bb1d6861a0924bff18038516685d99073c1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\replace.tpl',
      1 => 1501418294,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    'b2aac2fa0cd16fe9a2eadd4081dcfd6bd77f2fee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\categorize.tpl',
      1 => 1469963576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19320545895b67b4d7da5715-27078857',
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
  'unifunc' => 'content_5b67b4d7f3f9f8_08051318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4d7f3f9f8_08051318')) {function content_5b67b4d7f3f9f8_08051318($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_accordion')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion.php';
if (!is_callable('smarty_block_accordion_group')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion_group.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_object_selector_multi')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_selector_multi.php';
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
	

<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'replace'),$_smarty_tpl);?>
">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion', array()); $_block_repeat=true; echo smarty_block_accordion(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"General")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"General"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="name" id="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
" required="required">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control" name="description" id="description" rows="4" cols="40"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</textarea>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="descriptionIsParsed" <?php if ($_smarty_tpl->tpl_vars['info']->value['descriptionIsParsed']=='y') {?>checked="checked"<?php }?> value="1">
					Description is wiki-parsed
				</label>
			</div>
			<div class="form-group">
				<label for="fieldPrefix">Field Prefix</label>
				<input class="form-control" type="text" name="fieldPrefix" id="fieldPrefix" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['fieldPrefix']);?>
">
			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#name").change(function() {
	if ($("#name").val() && ! $("#fieldPrefix").val()) {
		$("#fieldPrefix").val($("#name").val().replace(/s$/, "").replace(/ /, "").toLowerCase());
	}
});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"General"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Features")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="useRatings" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['useRatings']=='y') {?> checked="checked"<?php }?>>
					Allow ratings (deprecated, use rating field)
				</label>
			</div>
			<div class="form-group depends" data-on="useRatings">
				<label for="ratingOptions">Rating options</label>
				<input class="form-controls" type="text" name="ratingOptions" id="ratingOptions" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['info']->value['ratingOptions'])===null||$tmp==='' ? '-2,-1,0,1,2' : $tmp));?>
">
			</div>
			<div class="checkbox depends" data-on="useRatings">
				<label>
					<input type="checkbox" name="showRatings" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showRatings']=='y') {?> checked="checked"<?php }?>>
					Show ratings in listing
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="useComments" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['useComments']=='y') {?> checked="checked"<?php }?>>
					Allow comments
				</label>
			</div>
			<div class="checkbox depends" data-on="useComments">
				<label>
					<input type="checkbox" name="showComments" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showComments']=='y') {?> checked="checked"<?php }?>>
					Show comments in listing
				</label>
			</div>
			<div class="checkbox depends" data-on="useComments">
				<label>
					<input type="checkbox" name="showLastComment" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showLastComment']=='y') {?> checked="checked"<?php }?>>
					Display last comment author and date
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="useAttachments" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['useAttachments']=='y') {?> checked="checked"<?php }?>>
					Allow attachments (deprecated, use files field)
				</label>
			</div>
			<div class="checkbox depends" data-on="useAttachments">
				<label>
					<input type="checkbox" name="showAttachments" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showAttachments']=='y') {?> checked="checked"<?php }?>>
					Display attachments in listing
				</label>
			</div>
			<fieldset class="depends sortable" data-on="useAttachments" data-selector="div.checkbox">
				<legend>Attachment attributes (sortable)</legend>
				<?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attachmentAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['att']->key;
?>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="orderAttachments[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['att']->value['selected']) {?> checked="checked"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att']->value['label']);?>

						</label>
					</div>
				<?php } ?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Display")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Display"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label class="control-label" for="logo">Logo</label>
				<input class="form-control" type="text" name="logo" id="logo" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['logo']);?>
">
				<div class="help-block">
					Recommended size: 64x64px.
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showStatus" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showStatus']=='y') {?> checked="checked"<?php }?>>
					Show status
				</label>
			</div>
			<div class="checkbox depends" data-on="showStatus">
				<label>
					<input type="checkbox" name="showStatusAdminOnly" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showStatusAdminOnly']=='y') {?> checked="checked"<?php }?>>
					Show status to tracker administrator only
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showCreated" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showCreated']=='y') {?> checked="checked"<?php }?>>
					Show creation date when listing items
				</label>
			</div>
			<div class="form-group depends" data-on="showCreated">
				<label for="showCreatedFormat">Creation date format</label>
				<input type="text" name="showCreatedFormat" id="showCreatedFormat" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['showCreatedFormat']);?>
">
				<div class="help-block">
					<a rel="external" class="link" target="strftime" href="http://www.php.net/manual/en/function.strftime.php">Date and Time Format Help</a>
				</div>
			</div>
			<div class="depends checkbox" data-on="showCreated">
				<label>
					<input type="checkbox" name="showCreatedBy" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showCreatedBy']=='y') {?> checked="checked"<?php }?>>
					Show item creator
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showCreatedView" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showCreatedView']=='y') {?> checked="checked"<?php }?>>
					Show creation date when viewing items
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showLastModif" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showLastModif']=='y') {?> checked="checked"<?php }?>>
					Show last modification date when listing items
				</label>
			</div>
			<div class="depends checkbox" data-on="showLastModif">
				<label>
					<input type="checkbox" name="showLastModifBy" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showLastModifBy']=='y') {?> checked="checked"<?php }?>>
					Show item last modifier
				</label>
			</div>
			<div class="form-group depends" data-on="showLastModif">
				<label for="showLastModifFormat">Modification date format</label>
				<input class="form-control" type="text" name="showLastModifFormat" id="showLastModifFormat" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['showLastModifFormat']);?>
">
				<div class="help-block">
					<a class="link" target="strftime" href="http://www.php.net/manual/en/function.strftime.php">Date and Time Format Help</a>
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showLastModifView" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['showLastModifView']=='y') {?> checked="checked"<?php }?>>
					Show last modification date when viewing items
				</label>
			</div>
			<div class="form-group">
				<label for="defaultOrderKey">Default sort order</label>
				<select name="defaultOrderKey" id="defaultOrderKey" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sortFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['info']->value['defaultOrderKey']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['label']->value,42,'...'));?>
</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="defaultOrderDir">Default sort direction</label>
				<select name="defaultOrderDir" id="defaultOrderDir" class="form-control">
					<option value="asc" <?php if ($_smarty_tpl->tpl_vars['info']->value['defaultOrderDir']=='asc') {?>selected="selected"<?php }?>>ascending</option>
					<option value="desc" <?php if ($_smarty_tpl->tpl_vars['info']->value['defaultOrderDir']=='desc') {?>selected="selected"<?php }?>>descending</option>
				</select>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="doNotShowEmptyField" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['doNotShowEmptyField']=='y') {?> checked="checked"<?php }?>>
					Hide empty fields from item view
				</label>
			</div>
			<div class="form-group">
				<label for="showPopup">List detail popup</label>
				<?php echo smarty_function_object_selector_multi(array('type'=>'trackerfield','tracker_id'=>$_smarty_tpl->tpl_vars['info']->value['trackerId'],'_simplevalue'=>$_smarty_tpl->tpl_vars['info']->value['showPopup'],'_separator'=>",",'_simplename'=>"showPopup"),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Display"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Section Format")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Section Format"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group">
					<label for="sectionFormat">Section format</label>
					<select name="sectionFormat" id="sectionFormat" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sectionFormats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['format']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['format']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['info']->value['sectionFormat']==$_smarty_tpl->tpl_vars['format']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
						<?php } ?>
					</select>
					<div class="help-block">
						<p>Determines how headers will be rendered when using header fields as form section dividers.</p>
						<p>Set to <em>Configured</em> to use the four following fields.</p>
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="useFormClasses" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['useFormClasses']=='y') {?> checked="checked"<?php }?>>
						Use Form Classes
					</label>
				</div>
				<div class="form-group">
					<label for="formClasses">Input Form Classes</label>
					<input class="form-control" type="text" name="formClasses" id="formClasses" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['formClasses']);?>
">
					<div class="help-block">
						<p>Sets classes for form to be used in Tracker Plugin (e.g. form-horizontal or col-md-9).</p>
					</div>
				</div>
				<div class="form-group">
					<label for="viewItemPretty">Template to display an item</label>
					<input class="form-control" type="text" name="viewItemPretty" id="viewItemPretty" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['viewItemPretty']);?>
">
					<div class="help-block">
						wiki:pageName for a wiki page or tpl:tplName for a template
					</div>
				</div>
				<div class="form-group">
					<label for="editItemPretty">Template to edit an item</label>
					<input class="form-control" type="text" name="editItemPretty" id="editItemPretty" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['editItemPretty']);?>
">
					<div class="help-block">
						wiki:pageName for a wiki page or tpl:tplName for a template
					</div>
				</div>
			</div>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Section Format"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Status")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="newItemStatus">New item status</label>
				<select name="newItemStatus" id="newItemStatus" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['st']->value);?>
"
							<?php if ($_smarty_tpl->tpl_vars['st']->value==$_smarty_tpl->tpl_vars['info']->value['newItemStatus']) {?> selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stdata']->value['label']);?>

						</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="modItemStatus">Modified item status</label>
				<select name="modItemStatus" id="modItemStatus" class="form-control">
					<option value="">No change</option>
					<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['st']->value);?>
"
							<?php if ($_smarty_tpl->tpl_vars['st']->value==$_smarty_tpl->tpl_vars['info']->value['modItemStatus']) {?> selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stdata']->value['label']);?>

						</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Default status displayed in list mode</label>
				<div>
					<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statusTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
						<label class="checkbox-inline">
							<input type="checkbox" name="defaultStatus[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['st']->value);?>
"<?php if (in_array($_smarty_tpl->tpl_vars['st']->value,$_smarty_tpl->tpl_vars['statusList']->value)) {?> checked="checked"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stdata']->value['label']);?>

						</label>
					<?php } ?>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Notifications")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Notifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="form-group">
				<label for="outboundEmail">Copy activity to email</label>
				<input name="outboundEmail" id="outboundEmail" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['outboundEmail']);?>
" class="email_multi form-control" size="60">
				<div class="help-block">
					You can add several email addresses by separating them with commas.
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="simpleEmail" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['simpleEmail']=='y') {?> checked="checked"<?php }?>>
					Use simplified email format
				</label>
				<div class="help-block">
					The tracker will use the text field named Subject if any as subject and will use the user email or for anonymous the email field if any as sender
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="publishRSS" value="1"
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']!='y') {?>disabled="disabled"<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['info']->value['publishRSS']=='y') {?>checked="checked"<?php }?>>
					Publish RSS feed for this tracker
				</label>
				<div class="help-block">
					Requires "RSS per tracker" to be set in Admin/RSS
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=='y') {?>
						(Currently set)
					<?php } else { ?>
						(Currently not set)
					<?php }?>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_groupalert']=='y') {?>
				<div class="form-group">
					<label for="groupforAlert">Group alerted on item modification</label>
					<select name="groupforAlert" id="groupforAlert">
						<option value=""></option>
						<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['g']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['g']->value==$_smarty_tpl->tpl_vars['groupforAlert']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['g']->value);?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="checkbox">
					<input type="checkbox" name="showeachuser" id="showeachuser" value="1"
						<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y') {?>checked="checked"<?php }?>>
					<label for="showeachuser">Allow user selection for small groups</label>
				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Notifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Permissions")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="checkbox">
				<label>
					<input type="checkbox" name="userCanSeeOwn" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['userCanSeeOwn']=='y') {?>checked="checked"<?php }?>>
					User can see his own items
				</label>
				<div class="description">
					The tracker needs a user field with the item-owner activated.
					No extra permission is needed at the tracker permissions level to allow a user to see just his own items through Plugin TrackerList with the param view=user
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="writerCanModify" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['writerCanModify']=='y') {?>checked="checked"<?php }?>>
					Item creator can modify his items
				</label>
				<div class="description help-block">
					The tracker needs a user field with the auto-assign activated
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="writerCanRemove" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['writerCanRemove']=='y') {?>checked="checked"<?php }?>>
					Item creator can remove his items
				</label>
				<div class="description help-block">
					The tracker needs a user field with the auto-assign activated
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="userCanTakeOwnership" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['userCanTakeOwnership']=='y') {?>checked="checked"<?php }?>>
					User can take ownership of item created by anonymous
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="oneUserItem" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['oneUserItem']=='y') {?>checked="checked"<?php }?>>
					Only one item per user or IP
				</label>
				<div class="description help-block">
					The tracker needs a user or IP address field with the auto-assign set to Creator
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="writerGroupCanModify" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['writerGroupCanModify']=='y') {?>checked="checked"<?php }?>>
					Members of the creator group can modify items
				</label>
				<div class="description help-block">
					The tracker needs a group field with the auto-assign activated
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="writerGroupCanRemove" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['writerGroupCanRemove']=='y') {?>checked="checked"<?php }?>>
					Members of the creator group can remove items
				</label>
				<div class="description help-block">
					The tracker needs a group field with the auto-assign activated
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="adminOnlyViewEditItem" value="1"
						<?php if ($_smarty_tpl->tpl_vars['info']->value['adminOnlyViewEditItem']=='y') {?> checked="checked"<?php }?>>
					Restrict non admins to wiki page access only
					<div class="description help-block">
						Only users with admin tracker permission (tiki_p_admin_trackers) can use the built-in tracker interfaces (tiki-view_tracker.php and tiki-view_tracker_item.php). This is useful if you want the users of these trackers to only access them via wiki pages, where you can use the various tracker plugins to embed forms and reports.
					</div>
				</label>
			</div>
			<fieldset>
				<legend>Creation date constraint</legend>
				<div class="description">
					The tracker will be <strong>open</strong> for non-admin users through wiki pages with PluginTracker <strong>only</strong> during the period 'After' the start date and/or 'Before' the end date set below.
				</div>
				<div class="form-group depends" data-on="start">
					<label for="startDate">Date</label>
					<input type="date" name="startDate" id="startDate" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['startDate']->value);?>
" class="form-control">
				</div>
				<div class="form-group depends" data-on="start">
					<label for="startTime">Time</label>
					<input type="time" name="startTime" id="startTime" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['startTime']->value)===null||$tmp==='' ? '00:00' : $tmp));?>
" class="form-control">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="end" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['end']) {?>checked="checked"<?php }?>>
						Before
					</label>
				</div>
				<div class="form-group depends" data-on="end">
					<label for="endDate">Date</label>
					<input type="date" name="endDate" id="endDate" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['endDate']->value);?>
" class="form-control">
				</div>
				<div class="form-group depends" data-on="end">
					<label for="endTime">Time</label>
					<input type="time" name="endTime" id="endTime" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['endTime']->value)===null||$tmp==='' ? '00:00' : $tmp));?>
" class="form-control">
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Categories")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="form-group">
					<?php /*  Call merged included template "categorize.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notable'=>'y','auto'=>'y'), 0, '19320545895b67b4d7da5715-27078857');
content_5b67b4d7ec6867_54797420($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categorize.tpl" */?>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="autoCreateCategories" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoCreateCategories']=='y') {?>checked="checked"<?php }?>>
						Auto-create corresponding categories
					</label>
				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Groups")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Groups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="autoCreateGroup" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoCreateGroup']=='y') {?> checked="checked"<?php }?>>
						Create a group for each item
					</label>
				</div>
				<div class="form-group depends" data-on="autoCreateGroup">
					<label for="autoCreateGroupInc">Groups will include</label>
					<select name="autoCreateGroupInc" id="autoCreateGroupInc" class="form-control">
						<option value=""></option>
						<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['g']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['g']->value==$_smarty_tpl->tpl_vars['info']->value['autoCreateGroupInc']) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['g']->value);?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="checkbox depends" data-on="autoCreateGroup">
					<label>
						<input type="checkbox" name="autoAssignCreatorGroup" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoAssignCreatorGroup']=='y') {?> checked="checked"<?php }?>>
						Creator is assigned to the group
					</label>
				</div>
				<div class="checkbox depends" data-on="autoCreateGroup">
					<label>
						<input type="checkbox" name="autoAssignCreatorGroupDefault" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoAssignCreatorGroupDefault']=='y') {?> checked="checked"<?php }?>>
						Will become the creator's default group
					</label>
				</div>
				<div class="checkbox depends" data-on="autoCreateGroup">
					<label>
						<input type="checkbox" name="autoAssignGroupItem" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoAssignGroupItem']=='y') {?> checked="checked"<?php }?>>
						Will become the new item's group creator
					</label>
				</div>
				<div class="checkbox depends" data-on="autoCreateGroup">
					<label>
						<input type="checkbox" name="autoCopyGroup" value="1"
							<?php if ($_smarty_tpl->tpl_vars['info']->value['autoCopyGroup']=='y') {?> checked="checked"<?php }?>>
						Copy the default group in the field ID before updating the group
					</label>
				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Groups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group submit">
		<input type="hidden" name="confirm" value="1">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Save">
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\categorize.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67b4d7ec6867_54797420')) {function content_5b67b4d7ec6867_54797420($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&(count($_smarty_tpl->tpl_vars['categories']->value)>0||$_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y')) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['labelcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['labelcol'] = new Smarty_variable('4', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['inputcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['inputcol'] = new Smarty_variable('8', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		<!-- div class="form-horizontal" -->
			<div class="form-group">
				<label class="col-sm-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
 control-label<?php if (!empty($_smarty_tpl->tpl_vars['labelclass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;
}?>">
					Categorize
				</label>
				<div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['colsCategorize']->value)) {?> colspan="<?php echo $_smarty_tpl->tpl_vars['colsCategorize']->value;?>
"<?php }?>
				</div>

		<!--/div-->
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mandatory_category']->value>=0||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'||(isset($_smarty_tpl->tpl_vars['auto']->value)&&$_smarty_tpl->tpl_vars['auto']->value=='y')) {?>
		<div id="categorizator"><div>
	<?php } else { ?>
		<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?> <div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;
if (isset($_smarty_tpl->tpl_vars['inputgroup']->value)&&$_smarty_tpl->tpl_vars['inputgroup']->value==='y') {?> input-group<?php }?>"><?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'categorizator','_class'=>'btn btn-default btn-sm tips','_text'=>"Select Categories",'_flip_default_open'=>'n'),$_smarty_tpl);?>
</div><?php }?>
		<div class="clearfix"><div id="categorizator" class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
 col-sm-offset-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
" style="display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_categorizator'])&&$_SESSION['tiki_cookie_jar']['show_categorizator']=='y'||(isset($_smarty_tpl->tpl_vars['notable']->value)&&$_smarty_tpl->tpl_vars['notable']->value=='y')) {?>block<?php } else { ?>none<?php }?>;">
	<?php }?>
	<div class="multiselect">
		<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
			<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

			<input type="hidden" name="cat_categorize" value="on">
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link btn-sm tips" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

			</div> 
		<?php } else { ?>
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
			</div> 
			No categories defined
		<?php }?>
	</div> 
		</div>
	</div>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		</div> 
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_autocategorize']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		if ('<?php echo $_SESSION['tc_theme_cat'];?>
') {
			if ($('.tree ul[data-id="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_parentcategory'];?>
"] input[type=checkbox]:checked').length == 0) {
				$('#categ-<?php echo $_SESSION['tc_theme_cat'];?>
').prop("checked", true);
			}
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
