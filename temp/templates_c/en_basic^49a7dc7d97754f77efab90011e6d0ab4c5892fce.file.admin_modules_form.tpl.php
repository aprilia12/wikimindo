<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:45:24
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin_modules_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10592730475b513eb4276bc9-95373174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a7dc7d97754f77efab90011e6d0ab4c5892fce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin_modules_form.tpl',
      1 => 1476293860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10592730475b513eb4276bc9-95373174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_modules_info' => 0,
    'info' => 0,
    'name' => 0,
    'assign_name' => 0,
    'assign_selected' => 0,
    'assign_info' => 0,
    'sect' => 0,
    'module_zone_list' => 0,
    'code' => 0,
    'assign_position' => 0,
    'zone' => 0,
    'orders' => 0,
    'assign_order' => 0,
    'assign_cache' => 0,
    'assign_rows' => 0,
    'groups' => 0,
    'prefs' => 0,
    'assign_type' => 0,
    'params' => 0,
    'param' => 0,
    'assign_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513eb42f09c3_72904670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513eb42f09c3_72904670')) {function content_5b513eb42f09c3_72904670($_smarty_tpl) {?><?php if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
?>


<div class="module_selector form-group">
	<label for="assign_name">Module Name</label>
	<select id="assign_name" name="assign_name" class="form-control">
		<option value=""></option>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_modules_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['enabled']) {?>
			<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['assign_name']->value==$_smarty_tpl->tpl_vars['name']->value||$_smarty_tpl->tpl_vars['assign_selected']->value==$_smarty_tpl->tpl_vars['name']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</option>
			<?php }?>
		<?php } ?>
	</select>
	<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value)) {?><div class="description help-block"><?php echo $_smarty_tpl->tpl_vars['assign_info']->value['description'];
if (isset($_smarty_tpl->tpl_vars['assign_info']->value['documentation'])) {?> <?php echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['assign_info']->value['documentation']),$_smarty_tpl);
}?></div><?php }?>
</div>
<div id="module_params">
	<?php if (!empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])&&$_smarty_tpl->tpl_vars['assign_info']->value['type']=='function') {?>
			<ul>
				<li><a href="#param_section_basic">Basic</a></li>
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assign_info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['sect']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
					<li><a href="#param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sect']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
				<?php } ?>
			</ul>
		<?php } else { ?>
		<?php }?>
		<fieldset id="param_section_basic">
			<div class="clearfix form-group">
				<label for="assign_position">Position</label>
				<select id="assign_position" name="assign_position" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['zone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zone']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_zone_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->key => $_smarty_tpl->tpl_vars['zone']->value) {
$_smarty_tpl->tpl_vars['zone']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['zone']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['code']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['assign_position']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['zone']->value['name']);?>
</option>
					<?php } ?>
				</select>
			</div>

			<div class="clearfix form-group">
				<label for="assign_order">Order</label>
				<select id="assign_order" name="assign_order" class="form-control">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
" <?php if ($_smarty_tpl->tpl_vars['assign_order']->value==$_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="clearfix form-group">
				<label for="assign_cache">Cache Time (secs)</label>
				<input type="text" id="assign_cache" name="assign_cache" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_cache']->value);?>
">
			</div>
			<?php if (!isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])||$_smarty_tpl->tpl_vars['assign_info']->value['type']!='function') {?>
				<div class="clearfix form-group">
					<label for="assign_rows">Rows</label>
					<input type="text" id="assign_rows" name="assign_rows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_rows']->value);?>
" class="form-control">
				</div>
			<?php }?>
			<div class="admin2cols adminoptionbox clearfix">
				<label for="groups">Groups</label>
				<select multiple="multiple" id="groups" name="groups[]" class="form-control margin-bottom-md">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['groupName']);?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['selected']=='y') {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['groupName']);?>
</option>
					<?php endfor; endif; ?>
				</select>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['modallgroups']=='y') {?>
					<div class="panel panel-default"><div class="panel-body">
						<?php echo smarty_function_icon(array('name'=>"information",'style'=>"vertical-align:middle;float:left"),$_smarty_tpl);?>
 The <a class="rbox-link" href="tiki-admin.php?page=module">Display Modules to All Groups</a> setting will override your selection of specific groups.
					</div></div>
					<br>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules']=='y') {?>
				<div class="admin2cols adminoptionbox clearfix">
					Visibility
						<select name="assign_type">
							<option value="D" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='D') {?>selected="selected"<?php }?>>
								Displayed now for all eligible users even with personal assigned modules
							</option>
							<option value="d" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='d') {?>selected="selected"<?php }?>>
								Displayed for the eligible users with no personal assigned modules
							</option>
							<option value="P" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='P') {?>selected="selected"<?php }?>>
								Displayed now, can't be unassigned
							</option>
							<option value="h" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='h') {?>selected="selected"<?php }?>>
								Not displayed until a user chooses it
							</option>
						</select>
						<div class="panel panel-default"><div class="panel-body">
							<?php echo smarty_function_icon(array('name'=>"information",'style'=>"vertical-align:middle;float:left;"),$_smarty_tpl);?>
Because <a class="rbox-link" href="tiki-admin.php?page=module">Users can Configure Modules</a>, select either &quot;Displayed now for all eligible users even with personal assigned modules&quot; or &quot;Displayed now, can't be unassigned&quot; to make sure users will notice any newly assigned modules.
						</div></div>
					</div>
				<?php }?>
			</fieldset>
			<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])&&$_smarty_tpl->tpl_vars['assign_info']->value['type']=='function') {?>
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assign_info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['sect']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
					<fieldset id="param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
">
						<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
							<div class="admin2cols adminoptionbox clearfix">
								<label for="assign_params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['name']);
if ($_smarty_tpl->tpl_vars['param']->value['required']) {?> <span class="attention">(required)</span><?php }?></label>
								<input type="text" id="assign_params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" name="assign_params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['value']);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['param']->value['filter'];?>
 form-control"<?php } else { ?> class="<?php echo $_smarty_tpl->tpl_vars['param']->value['filter'];?>
 form-control"<?php }?>>
								<div class="description margin-bottom-sm">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['description']);?>

									<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['default'])) {?> - Default: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['default']);
}?>
								</div>
							</div>
						<?php } ?>
					</fieldset>
				<?php } ?>
				<?php echo smarty_function_autocomplete(array('element'=>".pagename",'type'=>"pagename",'options'=>"multiple: true, multipleSeparator:';'"),$_smarty_tpl);?>

			<?php } else { ?>
				<div class="admin2cols adminoptionbox clearfix">
					<a title="Parameters" <?php echo smarty_function_popup(array('text'=>"Params: specific params to the module and/or general params ('lang', 'flip', 'title', 'decorations', 'section', 'overflow', 'page', 'nobox', 'bgcolor', 'color', 'theme', 'notitle', 'nopage'). Separator between params:'&amp;'. E.g. maxlen=15&amp;nonums=y.",'width'=>200,'center'=>true),$_smarty_tpl);?>
>
						<label for="assign_params">Parameters</label>
					</a>
					<textarea id="assign_params" name="assign_params" rows="1" cols="60" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_params']->value);?>
</textarea>
					<?php echo smarty_function_help(array('url'=>"Module+Parameters",'desc'=>"Enter the parameters in URL format, e.g. 'nobox=y&class=rbox-data'"),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate")); $_block_repeat=true; echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit custom module <?php echo smarty_function_icon(array('name'=>"next"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		<div class="form-group clearfix">
			<div class="pull-right">
				<input type="submit" class="btn btn-default btn-sm" name="preview" value="Preview" onclick="needToConfirm=false;">
				<input type="submit" class="btn btn-primary btn-sm" name="assign" value="Assign" onclick="needToConfirm=false;">
			</div>
		</div>
	<?php }?>
</div>
<?php }} ?>
