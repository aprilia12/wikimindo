<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 05:50:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-assignuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7988698865b7b8bff12f7d4-23321844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eaadcf91248589cab320a4867ed731924cebdae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-assignuser.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7988698865b7b8bff12f7d4-23321844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assign_user' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_users' => 0,
    'prefs' => 0,
    'user_info' => 0,
    'what' => 0,
    'grp' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'name' => 0,
    'js' => 0,
    'users' => 0,
    'dates' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b8bff1f6b88_43121252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b8bff1f6b88_43121252')) {function content_5b7b8bff1f6b88_43121252($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>

<?php $_smarty_tpl->tpl_vars['escuser'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url'), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign User %0 to Groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar btn-group form-group">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-default",'_text'=>"Admin groups"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-default",'_text'=>"Admin users"),$_smarty_tpl);?>

	<?php }?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_preferences.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'class'=>"btn btn-default",'_text'=>"User Preferences"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'class'=>"btn btn-default",'_text'=>"User Information"),$_smarty_tpl);?>


</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>User Information</h2>
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-3 control-label">Login</label>
			<div class="col-sm-7">
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_info']->value['login']);?>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-7">
				<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Groups</label>
			<div class="col-sm-7">
				<?php  $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['what']->_loop = false;
 $_smarty_tpl->tpl_vars['grp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['what']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['what']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['what']->key => $_smarty_tpl->tpl_vars['what']->value) {
$_smarty_tpl->tpl_vars['what']->_loop = true;
 $_smarty_tpl->tpl_vars['grp']->value = $_smarty_tpl->tpl_vars['what']->key;
 $_smarty_tpl->tpl_vars['what']->iteration++;
 $_smarty_tpl->tpl_vars['what']->last = $_smarty_tpl->tpl_vars['what']->iteration === $_smarty_tpl->tpl_vars['what']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['groups']['last'] = $_smarty_tpl->tpl_vars['what']->last;
?>
					<?php if ($_smarty_tpl->tpl_vars['what']->value=='included') {?><i><?php }
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grp']->value);
if ($_smarty_tpl->tpl_vars['what']->value=='included') {?></i><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['grp']->value!="Anonymous"&&$_smarty_tpl->tpl_vars['grp']->value!="Registered"&&$_smarty_tpl->tpl_vars['what']->value!='included') {?>
						<a class="tips" href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;
if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>&amp;assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');
}?>&amp;action=removegroup&amp;group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grp']->value,'url');?>
" title=":Remove">
							<?php echo smarty_function_icon(array('name'=>'remove','style'=>"vertical-align:middle"),$_smarty_tpl);?>

						</a>
					<?php }
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['groups']['last']) {?>,<?php }?>&nbsp;&nbsp;
				<?php } ?>
			</div>
		</div>
	</form>
	<form method="post" action="tiki-assignuser.php<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>?assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');
}?>" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-3 control-label">Default Group</label>
			<div class="col-sm-6">
				<select name="defaultgroup" class="form-control">
					<option value=""></option>
					<?php  $_smarty_tpl->tpl_vars['included'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['included']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['included']->key => $_smarty_tpl->tpl_vars['included']->value) {
$_smarty_tpl->tpl_vars['included']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['included']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['name']->value==$_smarty_tpl->tpl_vars['user_info']->value['default_group']) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</option>
					<?php } ?>
				</select>
				<input type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_info']->value['login']);?>
" name="login">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
" name="maxRecords">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" name="offset">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
" name="sort_mode">
			</div>
			<div class="col-sm-1">
				<input type="submit" class="btn btn-default btn-sm" value="Set" name="set_default">
			</div>
		</div>
	</form>
<br>
<div align="left"><h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign User %0 to Groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2></div>

<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y'), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>

<form method="post" action="tiki-assignuser.php<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>?assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');
}?>">
	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
<table class="table table-striped table-hover">
	<tr>
		<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='groupName_desc') {?>groupName_asc<?php } else { ?>groupName_desc<?php }?>">Name</a></th>
		<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='groupDesc_desc') {?>groupDesc_asc<?php } else { ?>groupDesc_desc<?php }?>">Description</a></th>
		<th>Expiration</th>
		<th></th>
	</tr>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous') {?>
			<tr>
				<td class="text">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?> 
						<a class="link" href="tiki-admingroups.php?group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],"url");
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#2<?php }?>" title="Edit">
					<?php }?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>

					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
						</a>
					<?php }?>
				</td>
				<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupDesc']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td><?php if (isset($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['groupName']])&&!empty($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['groupName']]['expire'])) {?>
					<input type="text" name="new_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
" value="<?php echo smarty_modifier_escape(smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']]['expire'],'','n'));?>
" />
					<input type="hidden" name="old_<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
" value="<?php echo smarty_modifier_escape(smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']]['expire'],'','n'));?>
" />

				<?php }?></td>
				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('assign_user_actions', null, null); ob_start(); ?>
						<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['what']!='real') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;action=assign&amp;group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],'url');
if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>&amp;assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');
}?>"><?php echo smarty_function_icon(array('name'=>'add','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Assign"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} elseif ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!="Registered") {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;
if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>&amp;assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['assign_user']->value,'url');
}?>&amp;action=removegroup&amp;group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],'url');?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Unassign"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['assign_user_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['assign_user_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php }?>
	<?php endfor; endif; ?>
</table>
</div>
<input type="submit" class="btn btn-default btn-sm" name="save" value="Save" />
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
