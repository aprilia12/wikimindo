<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 05:01:35
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\fgal_listing_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13963240745b63c58fcca965-85323938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1479f1566a51f6df12077649daa93ba67f31ddc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\fgal_listing_conf.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13963240745b63c58fcca965-85323938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fgal_options' => 0,
    'key' => 0,
    'item' => 0,
    'fgal_ext' => 0,
    'edit_mode' => 0,
    'pref_name' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'fgal_listing_conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c58fcfd5f0_36954823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c58fcfd5f0_36954823')) {function content_5b63c58fcfd5f0_36954823($_smarty_tpl) {?>

<?php if (is_array($_smarty_tpl->tpl_vars['fgal_options']->value)&&count($_smarty_tpl->tpl_vars['fgal_options']->value)>0) {?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='default_view') {?>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='icon_fileId') {?>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

				</label>
				<div class="col-sm-8">
					<input
						type="text"
						id="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
						name="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
						value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"
						class="form-control"
						placeholder="File..."
					>
					<span class="help-block">
						Enter the ID of any file in any gallery to be used as the icon for this gallery in browse view
					</span>
				</div>
			</div>
		<?php } else { ?>
			<div class="checkbox col-sm-8 col-sm-offset-4">
				<label for="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;
if (isset($_smarty_tpl->tpl_vars['fgal_ext']->value)) {
echo $_smarty_tpl->tpl_vars['fgal_ext']->value;
}?>">
					<?php $_smarty_tpl->tpl_vars['pref_name'] = new Smarty_variable("fgal_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);?>
					<input
						type="checkbox"
						id="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
						name="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
						<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='y') {?>
							checked="checked"
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['edit_mode']->value)&&$_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['pref_name']->value]!='y') {?>
							disabled="disabled"
						<?php }?>
					>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

					<?php if (isset($_smarty_tpl->tpl_vars['edit_mode']->value)&&$_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['pref_name']->value]!='y') {?>
						<span class="help-block">
							The checkbox is disabled because this preference is disabled globally.
						</span>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y') {?>
							<span class="help-block">
								<a href="tiki-admin.php?page=fgal">
									Please enable the preference globally first.
								</a>
							</span>
						<?php } else { ?>
							<span class="help-block">
								Site administrators can enable the preference.
							</span>
						<?php }?>
					<?php }?>
				</label>
			</div>
		<?php }?>
	<?php } ?>
<?php }?>

<?php if (is_array($_smarty_tpl->tpl_vars['fgal_listing_conf']->value)&&count($_smarty_tpl->tpl_vars['fgal_listing_conf']->value)>0) {?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<div class="form-group">
			<label class="col-sm-4 control-label margin-bottom-md" for="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

			</label>
			<div class="col-sm-8 margin-bottom-md">
				<select id="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control">
					<?php if ($_smarty_tpl->tpl_vars['key']->value=='name'||$_smarty_tpl->tpl_vars['key']->value=='name_admin') {?>
						<option value="a"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='a') {?> selected="selected"<?php }?>>
							Name-filename
						</option>
						<option value="n"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='n') {?> selected="selected"<?php }?>>
							Name
						</option>
						<option value="f"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='f') {?> selected="selected"<?php }?>>
							Filename only
						</option>
					<?php } elseif ($_smarty_tpl->tpl_vars['key']->value!='deleteAfter') {?>
						<option value='n'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='n') {?> selected="selected"<?php }?>>
							Hide
						</option>
						<option value='y'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='y') {?> selected="selected"<?php }?>>
							Show as a column
						</option>
						<option value='o'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='o') {?> selected="selected"<?php }?>>
							Show in popup box
						</option>
						<option value='a'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='a') {?> selected="selected"<?php }?>>
							Both
						</option>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['key']->value=='lockedby'||$_smarty_tpl->tpl_vars['key']->value=='lockedby_admin') {?>
						<option value='i'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='i') {?> selected="selected"<?php }?>>
							Show an icon in a column
						</option>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['key']->value=='deleteAfter') {?>
						<option value='n'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='n') {?> selected="selected"<?php }?>>
							Hide
						</option>
						<option value='y'<?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'])&&$_smarty_tpl->tpl_vars['item']->value['value']=='y') {?> selected="selected"<?php }?>>
							Show as a column
						</option>
					<?php }?>
				</select>
			</div>
		</div>
	<?php } ?>
<?php }?>
<?php }} ?>
