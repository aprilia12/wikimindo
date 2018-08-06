<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2149276855b67b4e6413d97-90610619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5d5d82a19830447674aa98cf0e0dc9162b462f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_filter.tpl',
      1 => 1490205206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149276855b67b4e6413d97-90610619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trackerId' => 0,
    'status' => 0,
    'sort_mode' => 0,
    'tracker_info' => 0,
    'tiki_p_admin_trackers' => 0,
    'showstatus' => 0,
    'status_types' => 0,
    'stdata' => 0,
    'prefs' => 0,
    'sep' => 0,
    'filtervalue' => 0,
    'filtervalueencoded' => 0,
    'filterfield' => 0,
    'show_filters' => 0,
    'listfields' => 0,
    'field' => 0,
    'c' => 0,
    'fid' => 0,
    'dropdown_key' => 0,
    'dropdown_value' => 0,
    'gotit' => 0,
    'radio_key' => 0,
    'radio_value' => 0,
    'value' => 0,
    'label' => 0,
    'iu' => 0,
    'cnt' => 0,
    'filter_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b4e6498ab5_47440934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4e6498ab5_47440934')) {function content_5b67b4e6498ab5_47440934($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
?><form action="#" method="get" class="form-inline">
	<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
	<?php if ($_smarty_tpl->tpl_vars['status']->value) {?><input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value) {?><input type="hidden" name="sort_mode" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
"><?php }?>
	<div class="search_container margin-bottom-sm">
		<?php if (((($tmp = @$_smarty_tpl->tpl_vars['tracker_info']->value['showStatus'])===null||$tmp==='' ? null : $tmp)=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'))&&(($tmp = @$_smarty_tpl->tpl_vars['showstatus']->value)===null||$tmp==='' ? null : $tmp)!='n') {?>
			<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
				<div style="display:inline-block;">
					<div class="<?php echo $_smarty_tpl->tpl_vars['stdata']->value['class'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']==='y') {
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('?', null, 0);
} else {
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('&amp;', null, 0);
}?>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,'tracker');
echo $_smarty_tpl->tpl_vars['sep']->value;?>
status=<?php echo $_smarty_tpl->tpl_vars['stdata']->value['statuslink'];
if ($_smarty_tpl->tpl_vars['filtervalue']->value&&!is_array($_smarty_tpl->tpl_vars['filtervalue']->value)) {?>&amp;filtervalue=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filtervalue']->value,"url");
}
if (is_array($_smarty_tpl->tpl_vars['filtervalue']->value)) {
echo $_smarty_tpl->tpl_vars['filtervalueencoded']->value;
}
if ($_smarty_tpl->tpl_vars['filterfield']->value) {?>&amp;filterfield=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filterfield']->value,"url");
}
if ($_smarty_tpl->tpl_vars['sort_mode']->value) {?>&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;
}?>">
							<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['stdata']->value['iconname']),'ititle'=>":Toggle ".((string)$_smarty_tpl->tpl_vars['stdata']->value['label']),'iclass'=>'tips'),$_smarty_tpl);?>

						</a>
					</div>
				</div>
			<?php } ?>
		<?php }?>

		<div style="display:inline-block;padding: 4px 10px;">
			<?php if ($_smarty_tpl->tpl_vars['show_filters']->value=='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					fields = [];
					<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(0, null, 0);
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['field']->value['isSearchable']=='y'&&$_smarty_tpl->tpl_vars['field']->value['type']!='f'&&$_smarty_tpl->tpl_vars['field']->value['type']!='j'&&$_smarty_tpl->tpl_vars['field']->value['type']!='i') {?>
							fields[<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
] = '<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
';
							<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['c']->value+1, null, 0);?>
						<?php }?>
					<?php } ?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				
				<select name="filterfield" class="form-control" onchange="multitoggle(fields,this.options[selectedIndex].value); showit = 'show_filterbutton'; if(this.selectedIndex == 0){document.getElementById('filterbutton').style.display = 'none';setSessionVar(showit,'n');}else{ document.getElementById('filterbutton').style.display = 'block'; setSessionVar(showit,'y');}">
					
					<option value="">Choose a filter</option>
					<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['field']->value['isSearchable']=='y'&&$_smarty_tpl->tpl_vars['field']->value['type']!='f'&&$_smarty_tpl->tpl_vars['field']->value['type']!='j'&&$_smarty_tpl->tpl_vars['field']->value['type']!='i'&&($_smarty_tpl->tpl_vars['field']->value['isHidden']!='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['field']->value['name'],65));?>
</option>
							<?php $_smarty_tpl->tpl_vars['filter_button'] = new Smarty_variable('y', null, 0);?>
						<?php }?>
					<?php } ?>
				</select>
			<?php }?>
		</div>
		<div style="display:inline-block" class="form-group">
			<?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['field']->value['isSearchable']=='y'&&$_smarty_tpl->tpl_vars['field']->value['type']!='f'&&$_smarty_tpl->tpl_vars['field']->value['type']!='j'&&$_smarty_tpl->tpl_vars['field']->value['type']!='i') {?>
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='c') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<select name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
]" class="form-control">
								<option value="y"<?php if ($_smarty_tpl->tpl_vars['filtervalue']->value=='y') {?> selected="selected"<?php }?>>Yes</option>
								<option value="n"<?php if ($_smarty_tpl->tpl_vars['filtervalue']->value=='n') {?> selected="selected"<?php }?>>No</option>
							</select>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='d'||$_smarty_tpl->tpl_vars['field']->value['type']=='D') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<select name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
]" class="form-control">
								<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='D') {?><option value="" /><?php }?>
								<?php  $_smarty_tpl->tpl_vars['dropdown_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dropdown_value']->_loop = false;
 $_smarty_tpl->tpl_vars['dropdown_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dropdown_value']->key => $_smarty_tpl->tpl_vars['dropdown_value']->value) {
$_smarty_tpl->tpl_vars['dropdown_value']->_loop = true;
 $_smarty_tpl->tpl_vars['dropdown_key']->value = $_smarty_tpl->tpl_vars['dropdown_value']->key;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['dropdown_key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {
if ($_smarty_tpl->tpl_vars['filtervalue']->value==$_smarty_tpl->tpl_vars['dropdown_key']->value) {
$_smarty_tpl->tpl_vars['gotit'] = new Smarty_variable('y', null, 0);?>selected="selected"<?php }
}?>><?php echo smarty_modifier_tr_if($_smarty_tpl->tpl_vars['dropdown_value']->value);?>
</option>
								<?php } ?>
							</select>
							<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='D') {?>
								<input class="form-control" type="text" name="filtervalue_other"<?php if ($_smarty_tpl->tpl_vars['gotit']->value!='y') {?> value="<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {
echo $_smarty_tpl->tpl_vars['filtervalue']->value;
}?>"<?php }?>>
							<?php }?>
						</div>

					<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='R') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<?php  $_smarty_tpl->tpl_vars['radio_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['radio_value']->_loop = false;
 $_smarty_tpl->tpl_vars['radio_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['radio_value']->key => $_smarty_tpl->tpl_vars['radio_value']->value) {
$_smarty_tpl->tpl_vars['radio_value']->_loop = true;
 $_smarty_tpl->tpl_vars['radio_key']->value = $_smarty_tpl->tpl_vars['radio_value']->key;
?>
								<input type="radio" name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['radio_key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {
if ($_smarty_tpl->tpl_vars['filtervalue']->value==$_smarty_tpl->tpl_vars['radio_key']->value) {?>checked="checked"<?php }
}?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['radio_value']->value);?>

							<?php } ?>
						</div>

					<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='M') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<?php if (empty($_smarty_tpl->tpl_vars['field']->value['options_map']['inputtype'])) {?>
								<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
									<label class="checkbox-inline">
										<input type="checkbox" name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
][]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value&&is_array($_smarty_tpl->tpl_vars['filtervalue']->value)&&in_array($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['filtervalue']->value)) {?>checked="checked"<?php }?>>
										<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['label']->value));?>

									</label>
								<?php } ?>
							<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['options_map']['inputtype']=='m') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?><small>Hold "Ctrl" in order to select multiple values</small><br><?php }?>
								<select name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
][]" multiple="multiple" class="form-control">
									<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
										<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" <?php if (is_array($_smarty_tpl->tpl_vars['filtervalue']->value)&&in_array($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['filtervalue']->value)) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
									<?php } ?>
								</select>
							<?php }?>
						</div>

					<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='e') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" class="panel-body">
							<ul class="list-inline">
								<?php  $_smarty_tpl->tpl_vars['iu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iu']->_loop = false;
 $_smarty_tpl->tpl_vars['ku'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iu']->key => $_smarty_tpl->tpl_vars['iu']->value) {
$_smarty_tpl->tpl_vars['iu']->_loop = true;
 $_smarty_tpl->tpl_vars['ku']->value = $_smarty_tpl->tpl_vars['iu']->key;
?>
									<li>
										<input type="checkbox" name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['iu']->value['categId'];?>
" id="cat<?php echo $_smarty_tpl->tpl_vars['iu']->value['categId'];?>
"
											<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value&&is_array($_smarty_tpl->tpl_vars['filtervalue']->value)&&in_array($_smarty_tpl->tpl_vars['iu']->value['categId'],$_smarty_tpl->tpl_vars['filtervalue']->value)) {?> checked="checked"<?php }?>>
										<label for="cat<?php echo $_smarty_tpl->tpl_vars['iu']->value['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iu']->value['name']);?>
</label>
									</li>
								<?php } ?>
							</ul>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='u') {?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<input type="text" class="form-control" name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {
echo $_smarty_tpl->tpl_vars['filtervalue']->value;
}?>" id="filter-username">
						</div>
						<?php echo smarty_function_autocomplete(array('element'=>'#filter-username','type'=>'username'),$_smarty_tpl);?>

					<?php } else { ?>
						<div style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value==$_smarty_tpl->tpl_vars['fid']->value) {?>block<?php } else { ?>none<?php }?>;" id="fid<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
							<input type="text" class="form-control" name="filtervalue[<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['fid']->value==$_smarty_tpl->tpl_vars['filterfield']->value) {
echo $_smarty_tpl->tpl_vars['filtervalue']->value;
}?>">
						</div>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
				<?php }?>
			<?php } ?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['filter_button']->value)&&$_smarty_tpl->tpl_vars['filter_button']->value=='y') {?>
			<div style="display:inline-block" class="form-group">
				<input id="filterbutton" type="submit" class="btn btn-default" name="filter" value="Filter" style="display:<?php if ($_smarty_tpl->tpl_vars['filterfield']->value) {?>inline<?php } else { ?>none<?php }?>">
			</div>
		<?php }?>
	</div>
</form>
<?php }} ?>
