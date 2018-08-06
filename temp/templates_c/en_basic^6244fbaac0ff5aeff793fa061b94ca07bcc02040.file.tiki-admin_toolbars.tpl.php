<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 05:21:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_toolbars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8330770775b67becbe7c825-08486912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6244fbaac0ff5aeff793fa061b94ca07bcc02040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_toolbars.tpl',
      1 => 1460959220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8330770775b67becbe7c825-08486912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sections' => 0,
    'skey' => 0,
    'loaded' => 0,
    'name' => 0,
    'comments' => 0,
    'prefs' => 0,
    'view_mode' => 0,
    'autoreload' => 0,
    'not_global' => 0,
    'not_default' => 0,
    'current' => 0,
    'line' => 0,
    'bit' => 0,
    'tool' => 0,
    'qtelement' => 0,
    'rowCount' => 0,
    'total' => 0,
    'display_w' => 0,
    'display_p' => 0,
    'plugins' => 0,
    'plugin' => 0,
    'info' => 0,
    'display_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67becbef59c9_40679065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67becbef59c9_40679065')) {function content_5b67becbef59c9_40679065($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Toolbars")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Toolbars"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Toolbars<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Toolbars"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function toolbars_autoreload() {
		if (document.forms['toolbars'].elements['autoreload'].checked) {
			document.forms['toolbars'].submit();
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="toolbars-admin clearfix">
	<form class="form-horizontal" name="toolbars" method="post" action="tiki-admin_toolbars.php" onsubmit="return saveRows()">
		<div>
			<div class="adminoptionbox form-group">
				<div class="adminoptionlabel">
					<label for="section" class="control-label col-sm-4">
						Section
					</label>
				<div class="col-sm-8">
					<select id="section" name="section" onchange="toolbars_autoreload()" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['loaded']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</option>
						<?php } ?>
					</select>
				</div>
				</div>
			</div>
			<div class="adminoptionbox form-group">
				<label for="comments" class="control-label col-sm-4">
					Comments
				</label>
				<div class="col-sm-8">
					<input id="comments" name="comments" type="checkbox" onchange="toolbars_autoreload()" <?php if ($_smarty_tpl->tpl_vars['comments']->value=='on') {?>checked="checked" <?php }?>>
				</div>
			</div>
			<div class="adminoptionbox form-group">
				<label for="view_mode" class="control-label col-sm-4">
					View mode
				</label>
				<div class="col-sm-8">
					<select id="view_mode" name="view_mode" class="form-control">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y') {?>
							<option value="both"<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="both") {?> selected<?php }?>>
							Wiki and WYSIWYG
							</option>
						<?php }?>
						<option value="wiki"<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="wiki") {?> selected<?php }?>>
							Wiki only
						</option>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y') {?>
							<option value="wysiwyg"<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="wysiwyg") {?> selected<?php }?>>
								WYSIWYG (HTML mode)
							</option>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y') {?>
							<option value="wysiwyg_wiki"<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="wysiwyg_wiki") {?> selected<?php }?>>
								WYSIWYG (wiki mode)
							</option>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=='y') {?>
							<option value="sheet"<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="sheet") {?> selected<?php }?>>
								Spreadsheet
							</option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="autoreload" class="control-label col-sm-4">Auto Reloading</label>
				<div class="col-sm-8">
					<input id="autoreload" name="autoreload" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['autoreload']->value=='on') {?>checked="checked"<?php }?>>
				</div>
			</div>
			<div class="adminoptionbox form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<input name="load" type="submit" class="btn btn-default" value="Load">
					<input type="submit" class="btn btn-primary" name="save" value="Save">
					<?php if ($_smarty_tpl->tpl_vars['loaded']->value!='global'&&$_smarty_tpl->tpl_vars['not_global']->value) {?><input type="submit" class="btn btn-default" name="reset" value="Reset to Global"><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['loaded']->value=='global'&&$_smarty_tpl->tpl_vars['not_default']->value) {?><input type="submit" class="btn btn-default" name="reset_global" value="Reset to defaults"><?php }?>
				</div>
			</div>
			<input id="qt-form-field" type="hidden" name="pref" value="">
		</div>
	</form>
	<div class="rows">
		<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['current']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['line']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['line']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['line']['total'] = $_smarty_tpl->tpl_vars['line']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['line']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
 $_smarty_tpl->tpl_vars['line']->iteration++;
 $_smarty_tpl->tpl_vars['line']->last = $_smarty_tpl->tpl_vars['line']->iteration === $_smarty_tpl->tpl_vars['line']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['line']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['line']['last'] = $_smarty_tpl->tpl_vars['line']->last;
?>
			<label for="row-<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['foreach']['line']['iteration']);?>
">
				Row&nbsp;<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['line']['iteration'];?>

			</label>
			<ul id="row-<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['foreach']['line']['iteration']);?>
" class="row panel panel-default">
			<?php  $_smarty_tpl->tpl_vars['bit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['bit']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['bit']->key => $_smarty_tpl->tpl_vars['bit']->value) {
$_smarty_tpl->tpl_vars['bit']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['bit']['index']++;
?>
				<?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
					<?php if (!empty($_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['class'])) {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['class'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['bit']['index']==1) {?>style="float:right;"<?php }
if (!$_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['visible']) {?> style="display:none"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['html'];?>

						</li>
					<?php }?>
				<?php } ?>
			<?php } ?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['line']['last']&&$_smarty_tpl->tpl_vars['rowCount']->value>1) {?>
				<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['line']['total']+1, null, 0);?>
				</ul>
				<br>
				<label for="row-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['total']->value);?>
">Row&nbsp;<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</label>
				<ul id="row-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['total']->value);?>
" class="row panel panel-default">
			<?php }?>
			</ul>
			<br>
		<?php } ?>
	</div>
	<div class="lists">
		<label for="full-list-w">Formatting Tools</label>
		<ul id="full-list-w" class="full">
		<?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['display_w']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
			<li class="<?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['html'];?>
</li>
		<?php } ?>
		</ul>
	</div>
	<div class="lists">
		<label for="full-list-p">Plugin Tools</label>
		<ul id="full-list-p" class="full">
		<?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['display_p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
			<li class="<?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['html'];?>
</li>
		<?php } ?>
		</ul>
	</div>
	<div class="lists">
		<div id="toolbar_edit_div" style="display:none">
			<form name="toolbar_edit_form" method="post" action="tiki-admin_toolbars.php">
				<h2>Edit tool</h2>
				<fieldset>
					<label for="tool_name">Name:<small class="dialog_tips error">&nbsp;</small></label>
					<input type="text" name="tool_name" id="tool_name" class="text ui-widget-content ui-corner-all">
					<label for="tool_label">Label:<small class="dialog_tips error">&nbsp;</small></label><small class="dialog_tips error">&nbsp;</small>
					<input type="text" name="tool_label" id="tool_label" class="text ui-widget-content ui-corner-all">
					<label for="tool_icon">Icon:</label>
					<input type="text" name="tool_icon" id="tool_icon" class="text ui-widget-content ui-corner-all">
					<label for="tool_token">Wysiwyg Token:</label>
					<input type="text" name="tool_token" id="tool_token" class="text ui-widget-content ui-corner-all">
					<label for="tool_syntax">Syntax:</label>
					<input type="text" name="tool_syntax" id="tool_syntax" class="text ui-widget-content ui-corner-all">
					<label for="tool_type">Type:</label>
					<select name="tool_type" id="tool_type" class="select ui-widget-content ui-corner-all">
						<option value="Inline">Inline</option>
						<option value="Block">Block</option>
						<option value="LineBased">LineBased</option>
						<option value="Picker">Picker</option>
						<option value="Separator">Separator</option>
						<option value="FckOnly">FckOnly</option>
						<option value="Fullscreen">Fullscreen</option>
						<option value="TextareaResize">TextareaResize</option>
						<option value="Helptool">Helptool</option>
						<option value="FileGallery">FileGallery</option>
						<option value="Wikiplugin">Wikiplugin</option>
					</select>
					<label for="tool_plugin">Plugin name:</label>
					<select name="tool_plugin" id="tool_plugin" class="select ui-widget-content ui-corner-all" style="margin-bottom:0.5em">
						<option value="">None</option>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
</option>
						<?php } ?>
					</select>
					<input type="hidden" value="" name="save_tool" id="save_tool">
					<input type="hidden" value="" name="delete_tool" id="delete_tool">
					<input type="hidden" name="section" value="<?php echo $_smarty_tpl->tpl_vars['loaded']->value;?>
">
					<input type="hidden" name="comments" value="<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>on<?php }?>">
					<input type="hidden" name="autoreload" value="<?php if ($_smarty_tpl->tpl_vars['autoreload']->value) {?>on<?php }?>">
				</fieldset>
			</form>
			<?php echo smarty_function_autocomplete(array('element'=>'#tool_icon','type'=>'icon'),$_smarty_tpl);?>

		</div>
		<label for="full-list-c">Custom Tools</label><a href="#" id="toolbar_add_custom"><?php echo smarty_function_icon(array('name'=>"add",'ititle'=>":Add a new custom tool",'iclass'=>"tips"),$_smarty_tpl);?>

		<ul id="full-list-c" class="full">
		<?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['display_c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
			<li class="<?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['qtelement']->value[$_smarty_tpl->tpl_vars['tool']->value]['html'];?>
</li>
		<?php } ?>
		</ul>
	</div>
</div>
<div class="clearfix">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Tips")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Tips"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

To configure the toolbars on the various text editing areas select the section, and optionally check the comments checkbox, you want to edit and drag the icons from the left hand box to the toolbars on the right.<br>
Drag icons back from the toolbar rows onto the full list to remove them.<br>
Icons with <strong>bold</strong> labels are for wiki text areas, those that are <em>italic</em> are for WYSIWYG mode, and those that are <strong><em>bold and italic</em></strong> are for both.<br>
To save the current set use the dropdown (and optionally check the comments checkbox) at the bottom of the page to set where you want these toolbars to appear, and click Save.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Tips"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>'Note','type'=>'note')); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>'Note','type'=>'note'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	If you are experiencing problems with this page after upgrading from Tiki 4 please use this link to delete all your customised tools:
	<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('reset_all_custom_tools'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('reset_all_custom_tools'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete all custom tools<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('reset_all_custom_tools'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
	<em>Warning: There is no undo!</em>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>'Note','type'=>'note'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
