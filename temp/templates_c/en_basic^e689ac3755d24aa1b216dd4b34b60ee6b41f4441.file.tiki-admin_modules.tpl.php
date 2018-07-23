<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:45:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10966981465b513ea6460a73-02916721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e689ac3755d24aa1b216dd4b34b60ee6b41f4441' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_modules.tpl',
      1 => 1519709452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10966981465b513ea6460a73-02916721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_edit_menu' => 0,
    'missing_params' => 0,
    'prefs' => 0,
    'module_zone_list' => 0,
    'zone_info' => 0,
    'js' => 0,
    'zone_initial' => 0,
    'assigned_modules' => 0,
    'module' => 0,
    'libeg' => 0,
    'liend' => 0,
    'preview' => 0,
    'assign_name' => 0,
    'preview_data' => 0,
    'info' => 0,
    'moduleId' => 0,
    'user_modules' => 0,
    'um_name' => 0,
    'um_title' => 0,
    'um_parse' => 0,
    'maximum' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'polls' => 0,
    'galleries' => 0,
    'contents' => 0,
    'rsss' => 0,
    'banners' => 0,
    'wikistructures' => 0,
    'um_data' => 0,
    'module_list_show_all' => 0,
    'all_modules_info' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513ea656a4b8_95007557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513ea656a4b8_95007557')) {function content_5b513ea656a4b8_95007557($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_function_listfilter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.listfilter.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Modules",'admpage'=>"module")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Modules<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<div class="t_navbar margin-bottom-md"><?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php?clear_cache=1",'_icon_name'=>"trash",'_text'=>"Clear Cache"),$_smarty_tpl);?>
&nbsp;<?php if (empty($_REQUEST['show_hidden_modules'])) {
echo smarty_function_button(array('show_hidden_modules'=>"y",'_icon_name'=>"ok",'_text'=>"Show hidden modules"),$_smarty_tpl);
} else {
echo smarty_function_button(array('show_hidden_modules'=>'','_icon_name'=>"disable",'_text'=>"Hide hidden modules"),$_smarty_tpl);
}
echo smarty_function_button(array('_text'=>"Save",'_type'=>"primary",'_icon_name'=>"floppy",'_id'=>"save_modules",'_ajax'=>"n"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {
echo smarty_function_button(array('href'=>"tiki-admin_menus.php",'_icon_name'=>"menu",'_type'=>"link",'_text'=>"Admin Menus"),$_smarty_tpl);
}
echo smarty_function_button(array('href'=>"./",'_icon_name'=>"disable",'_type'=>"link",'_text'=>"Exit Modules"),$_smarty_tpl);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['missing_params']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Modules Parameters")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following required parameters are missing:<br/><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['missing_params']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
echo $_smarty_tpl->tpl_vars['missing_params']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['last']) {?>,&nbsp;<?php }
endfor; endif;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Modules",'icon'=>"star")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<ul><li>Drag the modules around to re-order then click save when ready</li><li>Double click them to edit</li><li>Modules with "position: absolute" in their style can be dragged in to position</li><li>New modules can be dragged from the "All Modules" tab</li></ul><p><strong>Note:</strong> Links and buttons in modules, apart from the Application Menu, have been deliberately disabled on this page to make drag and drop more reliable. Click here to return <a href="./">HOME</a><br><strong><em>More info here</em></strong> <?php echo smarty_function_icon(array('name'=>"help",'href'=>"http://dev.tiki.org/Modules+Revamp",'class'=>''),$_smarty_tpl);?>
</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Assigned modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Assigned modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?><legend class="heading"><span>Assign/Edit modules</span></legend><?php }?><h2>Assigned Modules</h2><div class="margin-bottom-md"><?php echo smarty_function_button(array('edit_assign'=>0,'cookietab'=>2,'_auto_args'=>"edit_assign,cookietab",'_text'=>"Add module"),$_smarty_tpl);?>
</div><div id="assigned_modules"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars['zone_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zone_info']->_loop = false;
 $_smarty_tpl->tpl_vars['zone_initial'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_zone_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zone_info']->key => $_smarty_tpl->tpl_vars['zone_info']->value) {
$_smarty_tpl->tpl_vars['zone_info']->_loop = true;
 $_smarty_tpl->tpl_vars['zone_initial']->value = $_smarty_tpl->tpl_vars['zone_info']->key;
$_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name']))); $_block_repeat=true; echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {
$_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);
$_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);
$_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);
} else {
$_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);
$_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);
$_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);
}?><div id="<?php echo $_smarty_tpl->tpl_vars['zone_info']->value['id'];?>
_modules" class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"><div><table class="table table-striped table-hover" id="assigned_zone_<?php echo $_smarty_tpl->tpl_vars['zone_initial']->value;?>
"><tr><th>Name</th><th>Order</th><th>Cache</th><th>Rows</th><th>Parameters</th><th>Groups</th><th></th></tr><?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_modules']->value[$_smarty_tpl->tpl_vars['zone_initial']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?><tr><td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module']->value['name']);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['ord'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['cache_time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['rows'];?>
</td><td style="font-size:smaller;"><?php echo $_smarty_tpl->tpl_vars['module']->value['params_presentable'];?>
</td><td style="font-size:smaller;"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_groups'];?>
</td><td><?php $_smarty_tpl->_capture_stack[0][] = array('module_actions', null, null); ob_start();
if (!$_smarty_tpl->getVariable('smarty')->value['section']['user']['first']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?modup=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"><?php echo smarty_function_icon(array('name'=>"up",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Move up"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (!$_smarty_tpl->getVariable('smarty')->value['section']['user']['last']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?moddown=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"><?php echo smarty_function_icon(array('name'=>"down",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Move down"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?edit_assign=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
&cookietab=2#content_admin_modules1-2"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?unassign=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Unassign"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

												<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
												<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
												<a
													class="tips"
													title="Actions"
													href="#"
													<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['module_actions']),$_smarty_tpl);
}?>
													style="padding:0; margin:0; border:0"
												>
													<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

												</a>
												<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
													<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['module_actions'];?>
</ul></li></ul>
												<?php }?>
											</td>
										</tr>
									<?php }
if (!$_smarty_tpl->tpl_vars['module']->_loop) {
?>
										<?php echo smarty_function_norecords(array('_colspan'=>7),$_smarty_tpl);?>

									<?php } ?>
								</table>
							</div>
						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } ?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<form method="post" action="#">
			<input id="module-order" type="hidden" name="module-order" value="">
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Assigned modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (isset($_REQUEST['edit_assign'])||$_smarty_tpl->tpl_vars['preview']->value=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit module")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a id="assign"></a>
			<?php if ($_smarty_tpl->tpl_vars['assign_name']->value=='') {?>
				<h2>Assign new module</h2>
			<?php } else { ?>
				<h2>Edit this assigned module: <?php echo $_smarty_tpl->tpl_vars['assign_name']->value;?>
</h2>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['preview']->value=='y') {?>
				<h3>Preview</h3>
				<?php echo $_smarty_tpl->tpl_vars['preview_data']->value;?>

			<?php }?>
			<form method="post" action="tiki-admin_modules.php<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>?cookietab=2#assign<?php }?>">
				
				<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['moduleId'])) {?>
					<input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['moduleId'];?>
">
				<?php } elseif (!empty($_smarty_tpl->tpl_vars['moduleId']->value)) {?>
					<input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
">
				<?php }?>
				<fieldset>
						
						<?php echo $_smarty_tpl->getSubTemplate ('admin_modules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>
						<div class="input_submit_container">
							<input type="submit" class="btn btn-default btn-sm" name="preview" value="Module Options" onclick="needToConfirm=false;">
						</div>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#module_params").tabs();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</fieldset>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit module"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Custom Modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Custom Modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>
			<legend class="heading">
				<a href="#usertheme" name="usertheme"><span>Custom Modules</span></a>
			</legend>
		<?php }?>
		<h2>Custom Modules</h2>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Title</th>
					<th></th>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_modules']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
					<tr>
						<td class="text"><a class="tips" href="tiki-admin_modules.php?um_edit=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],'url');?>
&amp;cookietab=2#editcreate" title="Edit"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
</a></td>
						<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['title']);?>
</td>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('custom_module_actions', null, null); ob_start(); ?>
								<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?um_edit=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],'url');?>
&amp;cookietab=2#editcreate"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?edit_assign=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],'url');?>
&amp;cookietab=2#assign"><?php echo smarty_function_icon(array('name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Assign"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_modules.php?um_remove=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'],'url');?>
&amp;cookietab=2" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
:Delete"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
							<a
								class="tips"
								title="Actions"
								href="#"
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['custom_module_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['custom_module_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
				<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

				<?php endif; ?>
			</table>
		</div>
		<br>
		<?php if ($_smarty_tpl->tpl_vars['um_name']->value=='') {?>
			<h2>Create new custom module</h2>
		<?php } else { ?>
			<h2>Edit this custom module <?php echo $_smarty_tpl->tpl_vars['um_name']->value;?>
</h2>
		<?php }?>
		<div class="col-sm-10 col-sm-offset-1">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Create your new custom module below. Make sure to preview first and make sure all is OK before <a href="#assign">assigning it</a>. Using HTML, you will be fine. However, if you improperly use wiki syntax or Smarty code, you could lock yourself out of the site.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>

		<form name='editusr' method="post" action="tiki-admin_modules.php" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-4 control-label">Name</label>
				<div class="col-sm-6">
					<input type="text" id="um_name" name="um_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['um_name']->value);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Title</label>
				<div class="col-sm-6">
					<input type="text" id="um_title" name="um_title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['um_title']->value);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Parse using</label>
				<div class="col-sm-6">
					<select name="um_parse" id="um_parse" class="form-control margin-bottom-sm">
						<option value=""<?php if ($_smarty_tpl->tpl_vars['um_parse']->value=='') {?> selected="selected"<?php }?>>None</option>
						<option value="y"<?php if ($_smarty_tpl->tpl_vars['um_parse']->value=="y") {?> selected="selected"<?php }?>>Wiki Markup</option>
					</select>
				</div>
			</div>
			<h3>Objects that can be included</h3>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=="y") {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Available polls</label>
					<div class="col-sm-6">
						<select name="polls" id='list_polls' class="form-control">
							<option value="{poll}">--Random active poll--</option>
							<option value="{poll id=current}">--Random current poll--</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['polls']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{poll pollId=<?php echo $_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pollId'];?>
}"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_galleries', 'um_data');" title=":Use gallery"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= showgalleryname=1 hideimgname=1 hidelink=1",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['galleries']->value) {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Random image from</label>
					<div class="col-sm-6">
						<select name="galleries" id='list_galleries' class="form-control">
							<option value="{gallery id=-1}">All galleries</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{gallery id=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'];?>
}"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_galleries', 'um_data');" title=":Use gallery"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= showgalleryname=1 hideimgname=1 hidelink=1",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['contents']->value) {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Dynamic content blocks</label>
					<div class="col-sm-6">
						<select name="contents" id='list_contents' class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contents']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{content id=<?php echo $_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contentId'];?>
}"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description'],20,"...",true);?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_contents', 'um_data');" title=":Use dynamic content"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rsss']->value) {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">External feeds</label>
					<div class="col-sm-6">
						<select name="rsss" id='list_rsss' class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsss']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{rss id=<?php echo $_smarty_tpl->tpl_vars['rsss']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rssId'];?>
}"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rsss']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_rsss', 'um_data');" title=":Use RSS module"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= max= skip=x,y ",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Banner zones</label>
					<div class="col-sm-6">
						<select name="banners" id='list_banners' class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['banners']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{banner zone=<?php echo $_smarty_tpl->tpl_vars['banners']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['zone'];?>
}"><?php echo $_smarty_tpl->tpl_vars['banners']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['zone'];?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_banners', 'um_data');" title=":Use banner zone"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: zone= target=_blank|_self|",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['wikistructures']->value) {?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Wiki Structures</label>
					<div class="col-sm-6">
						<select name="structures" id='list_wikistructures' class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wikistructures']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="{wikistructure id=<?php echo $_smarty_tpl->tpl_vars['wikistructures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
}"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['wikistructures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']);?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_wikistructures', 'um_data');" title=":Use wiki structure"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="col-sm-10 col-sm-offset-1">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cssmenus']=='y') {?>
					To use a <a target="tikihelp" href="http://users.tpg.com.au/j_birch/plugins/superfish/">CSS (Superfish) menu</a>, use one of these syntaxes:
					<ul>
						<li>{menu id=X type=vert}</li>
						<li>{menu id=X type=horiz}</li>
					</ul>
				<?php }?>
				To use a default Tiki menu:
					<ul>
						<li>{menu id=X css=n}</li>
					</ul>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Data</label>
				<div class="col-sm-9">
					<a id="editcreate"></a>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>'um_data','id'=>'um_data','_class'=>'form'-'control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','_class'=>'form'-'control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['um_data']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','_class'=>'form'-'control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-sm-9">
					<input type="submit" class="btn btn-primary" name="um_update" value="<?php if (empty($_smarty_tpl->tpl_vars['um_name']->value)) {?>Create<?php } else { ?>Save<?php }?>" onclick="needToConfirm=false">
				</div>
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Custom Modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"All Modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"All Modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>All Modules</h2>
		<form method="post" action="tiki-admin_modules.php">
			<div style="height:400px;overflow:auto;">
				<div class="navbar">
					<?php echo smarty_function_listfilter(array('selectors'=>'#module_list li'),$_smarty_tpl);?>

					<input type="checkbox" name="module_list_show_all" id="module_list_show_all"<?php if ($_smarty_tpl->tpl_vars['module_list_show_all']->value) {?> checked="checked"<?php }?>>
					<label for="module_list_show_all">Show all modules</label>
				</div>
				<ul id="module_list">
					<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_modules_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['info']->value['enabled']) {?>enabled<?php } else { ?>disabled<?php }?> clearfix">
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
							<div class="q1 tips"
									title="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 &lt;em&gt;(<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)&lt;/em&gt;|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

									<?php if (!$_smarty_tpl->tpl_vars['info']->value['enabled']) {?>&lt;br /&gt;&lt;small&gt;&lt;em&gt;(Requires <?php echo implode(' &amp; ',$_smarty_tpl->tpl_vars['info']->value['prefs']);?>
)&lt;/em&gt;&lt;/small&gt;<?php }?>">
								<?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</strong> <em><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</em>
							</div>
							<div class="description q23">
								<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		</form>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#module_list_show_all").click(function(){
	$("#module_list li.disabled").toggle($(this).prop("checked"));
});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"All Modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
