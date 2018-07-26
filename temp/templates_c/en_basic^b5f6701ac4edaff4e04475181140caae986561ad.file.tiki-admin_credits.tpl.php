<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 06:18:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6075613655b57fa14ac3260-17130030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f6701ac4edaff4e04475181140caae986561ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_credits.tpl',
      1 => 1438938572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6075613655b57fa14ac3260-17130030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'userfilter' => 0,
    'new_month' => 0,
    'editing' => 0,
    'credits' => 0,
    'id' => 0,
    'data' => 0,
    'credit_types' => 0,
    'userPlans' => 0,
    'static_credit_types' => 0,
    'startDate' => 0,
    'prefs' => 0,
    'endDate' => 0,
    'act_type' => 0,
    'consumption_data' => 0,
    'con_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57fa14b40276_16676148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57fa14b40276_16676148')) {function content_5b57fa14b40276_16676148($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_html_select_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_date.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value);
}?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Credits")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Credits"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage Credits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Credits"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form method="get" action="tiki-admin_credits.php">
	<p>
		Username:
		<input type="text" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
">
		<input type="submit" value="Search">
	</p>
</form>

<?php if ($_smarty_tpl->tpl_vars['new_month']->value) {
echo $_smarty_tpl->tpl_vars['new_month']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['editing']->value) {?>
<form method="post" action="tiki-admin_credits.php">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<td></td>
				<td><b>Type</b></td>
				<td><b>Creation Date</b><br>(YYYY-MM-DD HH:MM:SS)</td>
				<td><b>Expiration Date</b><br>(YYYY-MM-DD HH:MM:SS)</td>
				<td><b>Used</b><br>(level credits always 0)</td>
				<td><b>Total</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['credits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<tr>
				<td><input type="checkbox" name="delete[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
"></td>
				<td><input type="text" name="credits[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][credit_type]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['credit_type']);?>
" size="8" readonly="readonly"></td>
				<td><input type="text" name="credits[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][creation_date]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['creation_date']);?>
" size="20"></td>
				<td><input type="text" name="credits[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][expiration_date]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['expiration_date']);?>
" size="20"></td>
				<td><input type="text" name="credits[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][used_amount]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['used_amount']);?>
" size="6"></td>
				<td><input type="text" name="credits[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][total_amount]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['total_amount']);?>
" size="6"></td>
			</tr>
			<?php } ?>
			<tr>
				<td><strong>New</strong></td>
				<td>
					<select name="credit_type">
						<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['credit_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
</option>
						<?php } ?>
					</select>
				</td>
				<td><input type="text" name="creation_date" value="" size="20"></td>
				<td><input type="text" name="expiration_date" value="" size="20"></td>
				<td><input type="text" name="used_amount" value="0" size="6" readonly="readonly"></td>
				<td><input type="text" name="total_amount" value="" size="6"></td>
			</tr>
			<tr>
				<td colspan="5"><input type="submit" name="save" value="Save" style="display:none;"><input type="submit" name="confirm" value="Delete Checked"></td>
				<td colspan="1"><input type="submit" name="save" value="Save"><input type="hidden" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
"></td>
			</tr>
		</table>
	</div>
</form>

<h2>User Credits Expiry Summary (Plans)</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>User Plan</th>
			<th>Start of Latest Plan</th>
			<th>Start of Next Plan</th>
			<th>Expiry</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userPlans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<tr>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['data']->value['currentbegin']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['currentbegin']);
} else { ?>-<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['data']->value['nextbegin']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['nextbegin']);
} else { ?>-<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['data']->value['expiry']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['expiry']);
} else { ?>-<?php }?></td>
			</tr>
		<?php } ?>
	</table>
</div>

<h2>Use User Credits</h2>
<form method="post" action="tiki-admin_credits.php">
	Use:
	<select name="use_credit_type">
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['credit_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
</option>
		<?php } ?>
	</select>
	<br>
	Amount: <input type="text" name="use_credit_amount" value="0" size="8">
	<input type="hidden" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
">
	<input type="submit" name="use_credit" value="Use">
</form>

<h2>Restore User Level Credits</h2>
<form method="post" action="tiki-admin_credits.php">
	Restore:
	<select name="restore_credit_type">
		<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['static_credit_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
</option>
		<?php } ?>
	</select>
	<br>
	Amount: <input type="text" name="restore_credit_amount" value="0" size="8">
	<input type="hidden" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
">
	<input type="submit" name="restore_credit" value="Restore">
</form>

<h2>Historical Usage Report</h2>
	<div>
		<form method="post" action="tiki-admin_credits.php">
			<input type="hidden" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
">
			<table class='normal'>
				<tr>
					<td>
						<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['startDate']->value,'prefix'=>"startDate_",'end_year'=>"-10",'day_value_format'=>"%02d",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

					<br>
						<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['endDate']->value,'prefix'=>"endDate_",'end_year'=>"-10",'day_value_format'=>"%02d",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

					</td>
					<td>
						<select name="action_type">
							<option value="">all types</option>
							<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['credit_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['act_type']->value=='{$id}') {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
</option>
							<?php } ?>
						</select>
					</td>

					<td>&nbsp;</td>
					<td><input type="submit" value="filter"><br/><br/></td>
				</tr>
				<tr>
					<th>Type</th>
					<th>Usage Date</th>
					<th colspan='2'>Amount Used</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['con_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['consumption_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con_data']->key => $_smarty_tpl->tpl_vars['con_data']->value) {
$_smarty_tpl->tpl_vars['con_data']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['con_data']->value['credit_type'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['con_data']->value['usage_date'],"%d-%m-%Y %H:%M:%S");?>
</td>
						<td colspan='2'><?php echo $_smarty_tpl->tpl_vars['con_data']->value['used_amount'];?>
</td>
					</tr>
				<?php } ?>
			</table>
		</form>
	</div>
<?php } else { ?>
	No such user
<?php }?>
<hr>

<h1>Manage Credit Types</h1>
<form method="post" action="tiki-admin_credits.php">
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<td></td>
				<td><b>Type</b></td>
				<td><b>Display Text</b></td>
				<td><b>Unit Text</b></td>
				<td><b>Is Static Level Credit</b></td>
				<td><b>Display Bar Length Scaling Divisor</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['credit_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
			<tr>
				<td>&nbsp;</td>
				<td><input type="text" name="credit_types[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][credit_type]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['credit_type']);?>
" size="8" readonly="readonly"></td>
				<td><input type="text" name="credit_types[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][display_text]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['display_text']);?>
" size="8"></td>
				<td><input type="text" name="credit_types[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][unit_text]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['unit_text']);?>
" size="8"></td>
				<td><select name="credit_types[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][is_static_level]">
				<option value='n'>No</option>
				<option value='y' <?php if ($_smarty_tpl->tpl_vars['data']->value['is_static_level']=='y') {?>selected="selected"<?php }?>>Yes</option>
				</select>
				<td><input type="text" name="credit_types[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
][scaling_divisor]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['scaling_divisor']);?>
" size="6"></td>
			</tr>
			<?php } ?>
			<tr>
				<td><strong>New</strong></td>
				<td><input type="text" name="new_credit_type" value="" size="8"></td>
				<td><input type="text" name="display_text" value="" size="8"></td>
				<td><input type="text" name="unit_text" value="" size="8"></td>
				<td>
					<select name="is_static_level">
					<option value='n'>No</option>
					<option value='y'>Yes</option>
					</select>
				</td>
				<td><input type="text" name="scaling_divisor" value="1" size="6"></td>
			</tr>
			<tr>
				<td colspan="6"><input type="submit" name="update_types" value="Save"><input type="hidden" name="userfilter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userfilter']->value);?>
"></td>
			</tr>
		</table>
	</div>
</form>

<h2>Purge Expired and Used Credits (All Users)</h2>
<form method="post" action="tiki-admin_credits.php">
	<input type="submit" name="purge_credits" value="Purge">
</form>
<?php }} ?>
