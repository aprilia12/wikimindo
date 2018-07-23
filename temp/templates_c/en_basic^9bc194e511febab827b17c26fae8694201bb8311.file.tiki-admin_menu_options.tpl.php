<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:02:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_menu_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19467416265b51970f31a489-20662550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc194e511febab827b17c26fae8694201bb8311' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_menu_options.tpl',
      1 => 1516192674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19467416265b51970f31a489-20662550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editable_menu_info' => 0,
    'tiki_p_edit_menu' => 0,
    'menuId' => 0,
    'cant_pages' => 0,
    'option' => 0,
    'find' => 0,
    'sort_mode' => 0,
    'offset' => 0,
    'options' => 0,
    'prefs' => 0,
    'it' => 0,
    'prevpos' => 0,
    'tooltip' => 0,
    'preview_type' => 0,
    'preview_bootstrap' => 0,
    'preview_css' => 0,
    'module_zone_list' => 0,
    'code' => 0,
    'zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51970f404ab2_97460060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51970f404ab2_97460060')) {function content_5b51970f404ab2_97460060($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Menu: <?php echo $_smarty_tpl->tpl_vars['editable_menu_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<a class="btn btn-link" href="tiki-admin_menus.php">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 List Menus
	</a>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {?>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create menu option
		</a>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit This Menu
		</a>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'export_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
" title="Export menu options">
			<?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export
		</a>
		<a class="btn btn-default no-ajax" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'import_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
" title="Import menu options">
			<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
		</a>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_menu_options")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_menu_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name']))); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div>
		<h2>Menu options <span class="badge"><?php echo $_smarty_tpl->tpl_vars['cant_pages']->value;?>
</span></h2>

		<div class="navbar margin-bottom-md clearfix">
			<?php echo smarty_function_button(array('_text'=>'Save Options','_class'=>'save_menu text-muted btn btn-sm disabled pull-left','_type'=>'primary','_ajax'=>'n','_auto_args'=>'save_menu,page_ref_id'),$_smarty_tpl);?>

			<ol class="new-option col-sm-5">
				<li id="node_new" class="clearfix new">
					<div class="col-sm-12">
						<div class="pull-left label-group">
							<div class="input-group input-group-sm" style="max-width: 100%">
								<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
								<input type="text" class="field-label form-control" value="" placeholder="New option" readonly="readonly">
								<span class="tips input-group-addon option-edit" title="|Check this if the option is an alternative to the previous one.">
									<input type="checkbox" class="samepos">
									<?php $_smarty_tpl->tpl_vars['prevpos'] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value['position'], null, 0);?>
								</span>
								<a href="#" class="tips input-group-addon text-muted" title="New option|Drag this on to the menu area below">
									<?php echo smarty_function_icon(array('name'=>'info'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
						<div class="pull-left url-group hidden">
							<div class="input-group input-group-sm">
								<a href="#" class="input-group-addon" onclick='return false;'>
									<?php echo smarty_function_icon(array('name'=>'link'),$_smarty_tpl);?>

								</a>
								<input type="text" class="field-url form-control" value="" placeholder="URL or ((page name))">
								<a href="#" class="input-group-addon text-muted option-edit">
									<?php echo smarty_function_icon(array('name'=>'edit','_menu_icon'=>'y','alt'=>"Details"),$_smarty_tpl);?>

								</a>
								<a href="#" class="input-group-addon text-danger option-remove" disabled="disabled">
									<?php echo smarty_function_icon(array('name'=>'remove','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</li>
			</ol>
		</div>
		<form method="get" action="tiki-admin_menu_options.php">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
			<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
			<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">

			<div class="options-container">
				<ol id="options">
					<?php $_smarty_tpl->tpl_vars['prevpos'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
						<li id="node_<?php echo $_smarty_tpl->tpl_vars['option']->value['optionId'];?>
" class="clearfix" data-position="<?php echo $_smarty_tpl->tpl_vars['option']->value['position'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['option']->value['parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['option']->value['type'];?>
">
							<div class="col-sm-12">
								<?php if ($_smarty_tpl->tpl_vars['option']->value['name']) {?>
									<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tooltip', null); ob_start();
if ($_smarty_tpl->tpl_vars['editable_menu_info']->value['parse']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['option']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['name']);
}?>|<dl><?php if ($_smarty_tpl->tpl_vars['option']->value['url']) {?><dt>URL:</dt><dd><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['option']->value['canonic'],40,' ...'));?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['section']) {?><dt>Sections:</dt><dd><?php echo $_smarty_tpl->tpl_vars['option']->value['section'];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['perm']) {?><dt>Permissions:</dt><dd><?php echo $_smarty_tpl->tpl_vars['option']->value['perm'];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['groupname']) {?><dt>Groups:</dt><dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['groupname']);?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['class']) {?><dt>Class:</dt><dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['class']);?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y'&&!empty($_smarty_tpl->tpl_vars['option']->value['userlevel'])) {
$_smarty_tpl->tpl_vars['it'] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value['userlevel'], null, 0);?><dt>User Level:</dt><dd><?php echo $_smarty_tpl->tpl_vars['prefs']->value['userlevels'][$_smarty_tpl->tpl_vars['it']->value];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['option']->value['icon']) {?><dt>Icon:</dt><dd><?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_iconset']=='legacy') {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['option']->value['icon'],'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
} else {
echo smarty_function_icon(array('name'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value['icon'],'48x48','')),$_smarty_tpl);
}?>&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['icon']);?>
</dd><?php }?></dl><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['tooltip'] = new Smarty_variable("|separator", null, 0);?>
								<?php }?>

								<div class="pull-left label-group">
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="field-label form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['name']);?>
" placeholder="Label">
										<span class="tips input-group-addon option-edit" title="|Check this if the option is an alternative to the previous one.">
											<input type="checkbox" class="samepos"<?php if ($_smarty_tpl->tpl_vars['option']->value['position']==$_smarty_tpl->tpl_vars['prevpos']->value) {?> checked="checked"<?php }?>>
											<?php $_smarty_tpl->tpl_vars['prevpos'] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value['position'], null, 0);?>
										</span>
										<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value,'optionId'=>$_smarty_tpl->tpl_vars['option']->value['optionId']),$_smarty_tpl);?>
" class="tips input-group-addon" title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tooltip']->value);?>
'>
											<?php echo smarty_function_icon(array('name'=>'info'),$_smarty_tpl);?>

										</a>
									</div>
								</div>
								<div class="pull-left url-group">
									<div class="input-group input-group-sm">
										<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['sefurl']);?>
" class="input-group-addon tips confirm" title="|Test URL">
											<?php echo smarty_function_icon(array('name'=>'link'),$_smarty_tpl);?>

										</a>
										<input type="text" class="field-url form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['canonic']);?>
" placeholder="URL or ((page name))">
										<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value,'optionId'=>$_smarty_tpl->tpl_vars['option']->value['optionId']),$_smarty_tpl);?>
" class="tips input-group-addon option-edit confirm" title="|Details">
											<?php echo smarty_function_icon(array('name'=>'edit','_menu_icon'=>'y','alt'=>"Details"),$_smarty_tpl);?>

										</a>
										<a href="#" class="tips input-group-addon text-danger option-remove" title="|Remove Option">
											<?php echo smarty_function_icon(array('name'=>'remove','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>

										</a>
									</div>
								</div>
							</div>
							<ol class="child-options"></ol>
						</li>
					<?php }
if (!$_smarty_tpl->tpl_vars['option']->_loop) {
?>

					<?php } ?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('options', null, null); ob_start(); ?>select:function(event,ui){ui.item.value='(('+ui.item.value+'))';}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo smarty_function_autocomplete(array('element'=>'.field-url','type'=>'pagename','options'=>Smarty::$_smarty_vars['capture']['options']),$_smarty_tpl);?>

				</ol>
			</div>

		</form>

		<?php echo smarty_function_button(array('_text'=>'Save Options','_class'=>'save_menu text-muted btn btn-sm disabled','_type'=>'primary','_ajax'=>'n','_auto_args'=>'save_menu,page_ref_id'),$_smarty_tpl);?>


	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Preview")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Preview"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<h2>Preview menu</h2>
	<div class="row">
		<div class="row">
			<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'preview'),$_smarty_tpl);?>
" class="form-inline preview">
				<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
				<div class="form-group col-sm-3">
					<label for="preview_type" class="control-label">Type:</label>
					<select id="preview_type" class="form-control" name="preview_type">
						<option value="vert"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value=='vert') {?> selected<?php }?>>Vertical</option>
						<option value="horiz"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value=='horiz') {?> selected<?php }?>>Horizontal</option>
					</select>
				</div>
				<div class="form-group col-sm-2">
					<label for="preview_bootstrap" class="control-label">
						Bootstrap
					</label>
					<br>
					<input type="checkbox" id="preview_bootstrap" name="preview_bootstrap" class="form-control"<?php if ($_smarty_tpl->tpl_vars['preview_bootstrap']->value=='y') {?> checked="checked"<?php }?>>
				</div>
				<div class="form-group col-sm-2">
					<label for="preview_css" class="control-label">
						CSS
					</label>
					<br>
					<input type="checkbox" id="preview_css" name="preview_css" class="form-control"<?php if ($_smarty_tpl->tpl_vars['preview_css']->value=='y') {?> checked="checked"<?php }?>>
				</div>
				<div class="form-group col-sm-3">
					<label for="preview_position" class="control-label">
						Position
					</label>
					<select id="preview_position" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['zone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zone']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_zone_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->key => $_smarty_tpl->tpl_vars['zone']->value) {
$_smarty_tpl->tpl_vars['zone']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['zone']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['code']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['zone']->value['name']);?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group col-sm-2">
					<br>
					<?php echo smarty_function_button(array('_text'=>'Deploy','_class'=>'deploy_menu btn btn-sm','_type'=>'default','_ajax'=>'n'),$_smarty_tpl);?>

				</div>
			</form>
		</div>
	</div>
	<div class="preview-menu">
		&nbsp;
	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Preview"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_menu_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
