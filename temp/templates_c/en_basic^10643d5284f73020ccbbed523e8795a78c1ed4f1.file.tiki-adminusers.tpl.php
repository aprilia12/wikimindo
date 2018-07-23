<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:13:50
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-adminusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8873505815b51455eb24b76-34189486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10643d5284f73020ccbbed523e8795a78c1ed4f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-adminusers.tpl',
      1 => 1502206546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8873505815b51455eb24b76-34189486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'ts' => 0,
    'tiki_p_admin' => 0,
    'userinfo' => 0,
    'tiki_p_invite' => 0,
    'find' => 0,
    'numrows' => 0,
    'filterGroup' => 0,
    'filterEmail' => 0,
    'all_groups' => 0,
    'sort_mode' => 0,
    'cant' => 0,
    'initial' => 0,
    'js' => 0,
    'users' => 0,
    'offset' => 0,
    'username' => 0,
    'grs' => 0,
    'link_style' => 0,
    'what' => 0,
    'libeg' => 0,
    'liend' => 0,
    'user' => 0,
    'add_edit_user_tablabel' => 0,
    'thisloginescaped' => 0,
    'auth_ldap_permit_tiki_users' => 0,
    'userstrackerid' => 0,
    'usersitemid' => 0,
    'usersTrackerForced' => 0,
    'temp_users_enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51455ece20d3_83228883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51455ece20d3_83228883')) {function content_5b51455ece20d3_83228883($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_duration_short')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.duration_short.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Users Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="t_navbar margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?> 
			<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-default",'_type'=>"link",'_icon_name'=>"group",'_text'=>"Admin Groups"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
			<?php echo smarty_function_permission_link(array('mode'=>'button_link'),$_smarty_tpl);?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) {?>
			<?php echo smarty_function_button(array('href'=>"?add=1",'class'=>"btn btn-default",'_text'=>"Add a New User"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_invite']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'_type'=>"link",'_icon_name'=>"thumbs-up",'_text'=>"Invitation List"),$_smarty_tpl);?>

		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences']=='y')) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y') {?>Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences']=='y') {?>Since this Tiki site is in slave mode and imports preferences, the master user preferences will be automatically reimported at each login<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_adminusers')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_adminusers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Users")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Users"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
			<h2>Users</h2>
			<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
				<form method="get" class="form-horizontal small" action="tiki-adminusers.php">
					<div class="form-group">
						<label class="control-label col-sm-4" for="find">Find</label>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="find" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="numrows">Number of displayed rows</label>
						<div class="col-sm-8">
							<input class="form-control input-sm" type="number" id="numrows" name="numrows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['numrows']->value);?>
">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-4">
							<a href="javascript:toggleBlock('search')" class="link">
								<?php echo smarty_function_icon(array('name'=>'add','alt'=>"more"),$_smarty_tpl);?>
&nbsp;More Criteria
							</a>
						</div>
					</div>
					<?php echo smarty_function_autocomplete(array('element'=>'#find','type'=>'username'),$_smarty_tpl);?>

					<div class="col-sm-12" id="search" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value||$_smarty_tpl->tpl_vars['filterEmail']->value) {?>style="display:block;"<?php } else { ?>style="display:none;"<?php }?>>
						<div class="form-group">
							<label class="control-label col-sm-4" for="filterGroup">Group (direct)</label>
							<div class="col-sm-8">
								<select class="form-control input-sm" name="filterGroup" id="filterGroup">
									<option value=""></option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Registered'&&$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Anonymous') {?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value==$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]) {?>selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
</option>
										<?php }?>
									<?php endfor; endif; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<div class="checkbox">
									<label>
										<input id="filterEmailNotConfirmed" name="filterEmailNotConfirmed" type="checkbox"<?php if (!empty($_REQUEST['filterEmailNotConfirmed'])) {?> checked="checked"<?php }?>>Email not confirmed
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<div class="checkbox">
									<label>
										<input id="filterNeverLoggedIn" name="filterNeverLoggedIn" type="checkbox"<?php if (!empty($_REQUEST['filterNeverLoggedIn'])) {?> checked="checked"<?php }?>>Never logged in
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<div class="checkbox">
									<label>
										<input id="filterNotValidated" name="filterNotValidated" type="checkbox"<?php if (!empty($_REQUEST['filterNotValidated'])) {?> checked="checked"<?php }?>>User not validated
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-4">
							<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
							<input type="submit" class="btn btn-default btn-sm" value="Find" name="search">
						</div>
					</div>
				</form>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['cant']->value>$_smarty_tpl->tpl_vars['numrows']->value||!empty($_smarty_tpl->tpl_vars['initial']->value))&&!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
				<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

			<?php }?>
			<form class="form-horizontal" name="checkform" id="checkform" method="post">
				<div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>>
					<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?> user-table ts-wrapperdiv">
		<?php }?>
						
						<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant']->value);?>
">
							
							<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
								<thead>
									<tr>
										<th id="checkbox">
											<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
												<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

											<?php }?>
										</th>
										<th id="user"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'login')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
											<th id="email"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'email')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid') {?>
											<th id="openid"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'openID')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OpenID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
										<?php }?>
										<th id="lastlogin"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
										<th id="registered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
										<th id="groups">Groups</th>
										<th id="actions"></th>
									</tr>
								</thead>
							<?php }?>
							<tbody>
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
								<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editable']) {?>
									<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'username', null); ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
										<tr>
											<td class="checkbox-cell">
												<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!='admin') {?>
													<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
" <?php if (isset($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['checked'])&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['checked']=='y') {?>checked="checked" <?php }?>>
												<?php }?>
											</td>

											<td class="username">
												<?php $_smarty_tpl->_capture_stack[0][] = array('username', null, null); ob_start();
echo smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
												<a
													class="link tips"
													href="tiki-adminusers.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;numrows=<?php echo $_smarty_tpl->tpl_vars['numrows']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;user=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#2<?php }?>"
													title="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
:Edit account settings" <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']) {?>data-itemid="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
"<?php }?>">
														<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>

												</a>
												<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_show_realnames']=='y'&&Smarty::$_smarty_vars['capture']['username']!=$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']) {?>
													<div class="subcomment">
														<?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['username']);?>

													</div>
												<?php }?>
											</td>

											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
												<td class="email"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'];?>
</td>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid') {?>
												<td class="text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['openid_url'])===null||$tmp==='' ? "N" : $tmp);?>
</td>
											<?php }?>
											<td class="text">
												<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['currentLogin']=='') {?>
													<?php $_smarty_tpl->_capture_stack[0][] = array('when', null, null); ob_start();
echo smarty_modifier_duration_short($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['age']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
													Never <em>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>Smarty::$_smarty_vars['capture']['when'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>Smarty::$_smarty_vars['capture']['when']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered %0 ago<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>Smarty::$_smarty_vars['capture']['when']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</em>
												<?php } else { ?>
													<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['currentLogin']);?>

												<?php }?>

												<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='u') {?>
													<br>
													Need to validate email
												<?php }?>
											</td>
											<td class="text">
												<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['registrationDate']);?>

											</td>

											<td class="text">
												<?php  $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['what']->_loop = false;
 $_smarty_tpl->tpl_vars['grs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['what']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['what']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['what']->key => $_smarty_tpl->tpl_vars['what']->value) {
$_smarty_tpl->tpl_vars['what']->_loop = true;
 $_smarty_tpl->tpl_vars['grs']->value = $_smarty_tpl->tpl_vars['what']->key;
 $_smarty_tpl->tpl_vars['what']->iteration++;
 $_smarty_tpl->tpl_vars['what']->last = $_smarty_tpl->tpl_vars['what']->iteration === $_smarty_tpl->tpl_vars['what']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gr']['last'] = $_smarty_tpl->tpl_vars['what']->last;
?>
													<div style="white-space:nowrap">
														<?php if ($_smarty_tpl->tpl_vars['grs']->value!="Anonymous"&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||in_array($_smarty_tpl->tpl_vars['grs']->value,$_smarty_tpl->tpl_vars['all_groups']->value))) {?>
															<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
																<a
																	class="link tips" <?php if (isset($_smarty_tpl->tpl_vars['link_style']->value)) {
echo $_smarty_tpl->tpl_vars['link_style']->value;
}?>
																	href="tiki-admingroups.php?group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grs']->value,"url");?>
"
																	title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grs']->value);?>
:<?php if ($_smarty_tpl->tpl_vars['what']->value=='included') {?>Edit this included group"<?php } else { ?>Edit group"<?php }?>>
																		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grs']->value);?>

																</a>
															<?php } else { ?>
																<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grs']->value);?>

															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['what']->value=='included') {?><span class="label label-info">Included</span><?php }?>
															<?php if ($_smarty_tpl->tpl_vars['grs']->value==$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['default_group']) {?><small>(default)</small><?php }?>
															<?php if ($_smarty_tpl->tpl_vars['what']->value!='included'&&$_smarty_tpl->tpl_vars['grs']->value!="Registered") {?>
																
																<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['username']->value,'groupremove'=>$_smarty_tpl->tpl_vars['grs']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
</a>
															<?php }?>
															<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['gr']['last']) {?><br><?php }?>
														<?php }?>
													</div>
												<?php } ?>
											</td>

											<td class="action">
												<?php $_smarty_tpl->_capture_stack[0][] = array('user_actions', null, null); ob_start(); ?>
													<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['username']->value,'all_groups'=>$_smarty_tpl->tpl_vars['all_groups']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"group",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Add or remove from a group"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="link" href="tiki-assignuser.php?assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'url');?>
" title="Edit group expiry"><?php echo smarty_function_icon(array('name'=>'time','_menu_text'=>'y','_menu_icon'=>'y','alt'=>'Edit group expiry'),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_query(array('_type'=>'relative','user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit account settings"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y'||$_smarty_tpl->tpl_vars['user']->value=='admin') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-user_preferences.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];?>
"><?php echo smarty_function_icon(array('name'=>"settings",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Change user preferences"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_information']!='private'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-user_information.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];?>
"<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_information']=='private') {?>style="opacity:0.5;"<?php }?>><?php echo smarty_function_icon(array('name'=>"help",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"User information"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!='admin'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!=$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href='#' onClick="$('#login-switchuser_1').val('<?php echo smarty_modifier_escape(smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']),'javascript');?>
'); $('#form_switch_user').submit(); return false;"><?php echo smarty_function_icon(array('name'=>"user",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Switch to this user"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!='admin') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'remove_users','checked'=>$_smarty_tpl->tpl_vars['username']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'sort_mode'=>$_smarty_tpl->tpl_vars['sort_mode']->value,'numrows'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='a') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-login_validate.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'url');?>
&amp;pass=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['valid'],'url');?>
"><?php echo smarty_function_icon(array('name'=>"ok",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Validate user"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='u') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-confirm_user_email.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'url');?>
&amp;pass=<?php echo smarty_modifier_escape(md5($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['provpass']),'url');?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm user email: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_function_icon(array('name'=>"envelope",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Confirm user email"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['email_due']>0&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']!='u'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']!='a') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-adminusers.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'url');?>
&amp;action=email_due"><?php echo smarty_function_icon(array('name'=>"trash",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Invalidate email"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if (!empty($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['openid_url'])) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_menu_text'=>'y','_menu_icon'=>'y','userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_icon_name'=>"trash")); $_block_repeat=true; echo smarty_block_self_link(array('_menu_text'=>'y','_menu_icon'=>'y','userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_icon_name'=>"trash"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove link with OpenID account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_menu_text'=>'y','_menu_icon'=>'y','userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_icon_name'=>"trash"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="link" href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_tag'=>"n")); $_block_repeat=true; echo smarty_block_self_link(array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_tag'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_tag'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:"><?php echo smarty_function_icon(array('name'=>"link",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove link with OpenID account"),$_smarty_tpl);?>
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
													title="Actions" href="#"
													<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['user_actions']),$_smarty_tpl);
}?>
													style="padding:0; margin:0; border:0"
												>
													<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

												</a>
												<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
													<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['user_actions'];?>
</ul></li></ul>
												<?php }?>
											</td>
										</tr>
									<?php }?>
								<?php endfor; else: ?>
									<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']||($_smarty_tpl->tpl_vars['ts']->value['enabled']&&$_smarty_tpl->tpl_vars['ts']->value['ajax'])) {?>
										<?php echo smarty_function_norecords(array('_colspan'=>8,'_text'=>"No user records found"),$_smarty_tpl);?>

									<?php } else { ?>
										<?php echo smarty_function_norecords(array('_colspan'=>8,'_text'=>"Retrieving user records..."),$_smarty_tpl);?>

									<?php }?>
								<?php endif; ?>
							</tbody>
						</table>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							$document.on("show.bs.popover", function ( e ) {
								var itemId = $(e.target).data("itemid");
								if (itemId) {
									$.get($.service("tracker", "view", {id: itemId}), function (data) {
										data = data.replace(/<h[\s\S]*?<\/h.*<?php echo '?>'; ?>
/mgi, "");	// remove headings
										$(".popover-content", ".popover.in").empty().append(data);
									});
								}
							});
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
						<div class="input-group col-sm-6">
							<select class="form-control" name="action">
								<option value="no_action" selected="selected">
									Select action to perform with checked...
								</option>
								<option value="remove_users">
									Remove users...
								</option>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning']=='y') {?>
									<option value="ban_ips">
										Ban IPs
									</option>
								<?php }?>
								<option value="manage_groups">
									Change group assignments
								</option>
								<option value="default_groups">
									Set default groups
								</option>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
									<option value="email_wikipage">
										Send wiki page content by email
									</option>
								<?php }?>
							</select>
							<span class="input-group-btn">
								<button
									type="submit"
									form="checkform"
									formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user'),$_smarty_tpl);?>
"
									class="btn btn-primary confirm-submit"
								>
									OK
								</button>
							</span>
						</div>
					<?php }?>
				</div>
				<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
				<input type="hidden" name="numrows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['numrows']->value);?>
">
				<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
			</form>

			<form id='form_switch_user' action='tiki-login.php' method='post'>
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input type="hidden" name="su" value="1" class="form-control" />
				<input type="hidden" name="username" id="login-switchuser_1" value="" class="form-control" />
			</form>


		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Users"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>

		
		<a id="tab2" ></a>
		<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])&&$_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'add_edit_user_tablabel', null); ob_start(); ?>Edit user <i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</i><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['add_edit_user_tablabel'] = new Smarty_variable("Add a New User", null, 0);?>
		<?php }?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value))); $_block_repeat=true; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_encryption']=='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning: User Encryption is Active")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning: User Encryption is Active"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				The feature User Encryption stores encrypted user information, such as password used to connect to externalsystems.
					If the password is changed, it will destroy the user's decryption key, and make the data unreadable.
					The user will be forced to re-enter the passwords and other data that may be encrypted.</a>.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning: User Encryption is Active"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])&&$_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
				<h2>Edit user <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</h2>
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['userinfo']->value['editable']) {?>
					<?php $_smarty_tpl->tpl_vars['thisloginescaped'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login'],'url'), null, 0);?>
					<?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisloginescaped']->value),'_text'=>"Assign user to Groups",'_icon_name'=>'group'),$_smarty_tpl);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['waiting']=='a') {?>
					<?php echo smarty_function_button(array('href'=>((('tiki-login_validate.php?user=').($_smarty_tpl->tpl_vars['thisloginescaped']->value)).('&pass=')).($_smarty_tpl->tpl_vars['userinfo']->value['valid']),'_text'=>"Validate user",'_icon_name'=>'ok'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h2>Add a New User</h2>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['editable']) {?>
				<form class="form form-horizontal" action="tiki-adminusers.php" method="post" enctype="multipart/form-data" name="RegForm" autocomplete="off">
					<div class="form-group">
						<label class="col-sm-3 col-md-2 control-label" for="login"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>Email<?php } else { ?>User<?php }?></label>
						<div class="col-sm-7 col-md-6">
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin') {?>
								<input type="text" id='login' class="form-control" name='login' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_server']=='y') {?> disabled="disabled"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>
									<br>
									<em>Use the email as username.</em>
								<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['lowercase_username']=='y') {?>
									<br>
									<em>Lowercase only</em>.
								<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate']=='y') {?>
									<br>

									<?php echo smarty_function_icon(array('name'=>'warning','alt'=>"Warning",'style'=>"vertical-align:middle"),$_smarty_tpl);?>

									<em>The username will be an autogenerated number based on the user ID if no actual username is provided when the user is created. Do not change these numeric usernames.</em>
								<?php }?>
								<?php if (!empty($_smarty_tpl->tpl_vars['userinfo']->value['userId'])&&$_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki']=='y') {?>
									<p>
										<?php echo smarty_function_icon(array('name'=>'warning','alt'=>"Warning",'style'=>"vertical-align:middle"),$_smarty_tpl);?>

										<em>Changing username is disabled for Intertiki sites</em>
									</p>
								<?php }?>
							<?php } else { ?>
								<input type="hidden" class="form-control" name='login' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

							<?php }?>
						</div>
					</div>

					
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='ldap'&&($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap']=='n'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['auth_ldap_permit_tiki_users']->value=='n') {?>
						<div class="form-group">
							<div class="col-sm-offset-2">
								<b>No password is required</b>
								<br>
								<i>Tiki is configured to delegate the password managment to LDAP.</i>
							</div>
						</div>
					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate ('password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ignorejq'=>'y'), 0);?>

						<div class="form-group">
							<label class="col-sm-3 col-md-2 control-label" for="pass1"><?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) {?>New password<?php } else { ?>Password<?php }?></label>
							<div class="col-sm-7 col-md-6">
								<input type="password" class="form-control" placeholder="Password" name="pass" id="pass1">
								<div style="margin-left:5px;">
									<div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
									<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
								</div>
								<div style="margin-top:5px">
									<?php echo $_smarty_tpl->getSubTemplate ('password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 col-md-2 control-label" for="pass2"><?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])) {?>Confirm new password<?php } else { ?>Confirm password<?php }?></label>
							<div class="col-sm-7 col-md-6">
								<input type="password" class="form-control" name="passAgain" id="pass2" placeholder="Password">
								<div id="mypassword2_text">
									<div id="match" style="display:none">
										<?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'color:#0ca908'),$_smarty_tpl);?>
 Passwords match
									</div>
									<div id="nomatch" style="display:none">
										<?php echo smarty_function_icon(array('name'=>'error','istyle'=>'color:#ff0000'),$_smarty_tpl);?>
 Passwords do not match
									</div>
								</div>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password']=='y'&&!($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='ldap'&&($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap']=='n')) {?>
							<div class="form-group">
								<div class="col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-2">
									<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
								</div>
								<div class="col-sm-3 col-md-3">
									<input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n') {?>
							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="pass_first_login"<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm'])&&$_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']=='0') {?> checked="checked"<?php }?>>
											User must change password at next login
										</label>
									</div>
								</div>
							</div>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
						<div class="form-group">
							<label class="col-sm-3 col-md-2 control-label" for="pass1">Email</label>
							<div class="col-sm-7 col-md-6">
								<input type="text" class="form-control" id="email" name="email" size="30" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
">
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&($_smarty_tpl->tpl_vars['prefs']->value['validateUsers']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['validateRegistration']=='y')) {?>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="need_email_validation" <?php if (($_smarty_tpl->tpl_vars['userinfo']->value['login']==''&&($_smarty_tpl->tpl_vars['prefs']->value['validateUsers']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['validateRegistration']=='y'))||$_smarty_tpl->tpl_vars['userinfo']->value['provpass']!=''||$_smarty_tpl->tpl_vars['userinfo']->value['valid']!='') {?>checked="checked"<?php }?>>
										Send an email to the user to enable him or her to validate their account.
									</label>
									<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['sender_email'])) {?>
										<div class="help-block"><span class="highlight">You need to set <a href="tiki-admin.php?page=general">Sender Email</a></span></div>
									<?php }?>
								</div>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']=='') {?>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="insert_user_tracker_item">
										Add a user tracker item for this user
									</label>
								</div>
							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'&&$_smarty_tpl->tpl_vars['userstrackerid']->value) {?>
						<div class="form-group">
							<label class="col-md-2 control-label">
								User tracker
							</label>

							<div class="col-md-10">
								<?php if ($_smarty_tpl->tpl_vars['usersitemid']->value) {?>
									<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'update_item','trackerId'=>$_smarty_tpl->tpl_vars['userstrackerid']->value,'itemId'=>$_smarty_tpl->tpl_vars['usersitemid']->value),$_smarty_tpl);?>
"
										onclick="$('[data-toggle=popover]').popover('hide');" class="btn btn-default edit-usertracker"
									>
										Edit Item
									</a>
									<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'view','id'=>$_smarty_tpl->tpl_vars['usersitemid']->value),$_smarty_tpl);?>
" class="btn btn-info">
										View item
									<a>
								<?php } else { ?>
									<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['userstrackerid']->value,'forced'=>$_smarty_tpl->tpl_vars['usersTrackerForced']->value),$_smarty_tpl);?>
"
										onclick="$('[data-toggle=popover]').popover('hide');" class="btn btn-default insert-usertracker"
									>
										Create Item
									</a>
								<?php }?>
							</div>
						</div>
					<?php }?>

					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
							<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])&&$_smarty_tpl->tpl_vars['userinfo']->value['userId']) {?>
								<input type="hidden" name="user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['userId']);?>
">
								<input type="hidden" name="edituser" value="1">
								<input type="submit" class="btn btn-primary" name="save" value="Save">
							<?php } else { ?>
								<input type="submit" class="btn btn-primary" name="newuser" value="Add">
							<?php }?>
						</div>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['userId'])&&$_smarty_tpl->tpl_vars['userinfo']->value['userId']!=0) {?>
						<table class="table table-striped table-condensed small">

							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['created']!=$_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']) {?>
								<tr>
									<td>Created</td>
									<td><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['created']);?>
</td>
								</tr>
							<?php }?>
							<tr>
								<td>Registered</td><td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']) {
echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']);
}?></td>
							</tr>
							<tr>
								<td>Pass confirmed</td><td><?php if (isset($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm'])&&$_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
							</tr>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['email_due']>0) {?>
								<tr>
									<td style="white-space: nowrap;">Email confirmed</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email_confirm']) {?>
											(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 days ago<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)
										<?php } else { ?>
											Never
										<?php }?>
									</td>
								</tr>
							<?php }?>
							<tr>
								<td>Current Login</td>
								<td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
							</tr>
							<tr>
								<td>Last Login</td>
								<td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']) {
echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']))===null||$tmp==='' ? 'Never' : $tmp);
}?></td>
							</tr>
						</table>
					<?php }?>

				</form>
			<?php } else { ?>
				You do not have permission to edit this user
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Import")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Import"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Batch upload (CSV file)</h2>

			<form class="form-horizontal" action="tiki-adminusers.php" method="post" enctype="multipart/form-data">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<div class="form-group">
					<label for="csvlist" class="control-label col-md-3">CSV File</label>
					<div class="col-md-9">
						<input type="file" id="csvlist" name="csvlist">
						<div class="help-block">
							CSV file layout login,password,email,groups,default_group,realName<br>user1,pass1,email1,group1,group1<br>user2,pass2,email2,"group1,group2",group1<br><br>Only login, password, email are mandatory.Use an empty password for automatic password generation. Use same login and email if the login use email. Groups are separated by comma. With group name with comma, double the comma.
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Existing Users</label>
					<div class="col-md-9">
						<label class="radio-inline">
							<input type="radio" name="overwrite" value="y">
							Overwrite
						</label>
						<label class="radio-inline">
							<input type="radio" name="overwrite" value="n" checked>
							Don't overwrite
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="overwriteGroup">
								Overwrite groups
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="createGroup">
								Create groups
							</label>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n') {?>
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="forcePasswordChange">
									The user must change his or her password the first time they log in
								</label>
							</div>
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="notification">
								Send an email to the user to enable him or her to validate their account.
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<input type="submit" class="btn btn-primary" name="batch" value="Add">
					</div>
				</div>
			</form>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?> 
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can export users of a group by clicking on that group at <a href="tiki-admingroups.php">admin->groups</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Import"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Temporary Users")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Temporary Users"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Invite new temporary user(s)</h2>
			<?php $_smarty_tpl->tpl_vars['temp_users_enabled'] = new Smarty_variable(true, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_token_access']!='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Token Access Feature Dependency")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					The token access feature is needed for Temporary Users to login.
					<a href="tiki-admin.php?page=security">Turn it on here.</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->tpl_vars['temp_users_enabled'] = new Smarty_variable(false, null, 0);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']==='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Feature Conflict")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					This feature currently is incompatible with the "Use email as username" feature
					<a href="tiki-admin.php?lm_criteria=login_is_email&exact">Turn it off here.</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->tpl_vars['temp_users_enabled'] = new Smarty_variable(false, null, 0);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_unique_email']==='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Feature Conflict")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					This feature currently is incompatible with the "User e-mails must be unique" feature
					<a href="tiki-admin.php?lm_criteria=user_unique_email&exact">Turn it off here.</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Feature Conflict"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->tpl_vars['temp_users_enabled'] = new Smarty_variable(false, null, 0);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['temp_users_enabled']->value) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Temporary Users")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p>Temporary users cannot login the usual way but instead do so via an autologin URL that is associated with a token. An email will be sent out to invited users containing this URL. You will receive a copy of the email yourself.</p>
					<p>These temporary users will be deleted (but can be set to be preserved in Admin Tokens) once the validity period is over. Normally, these users should have read-only access. Nevertheless, if you are allowing these users to submit information, e.g. fill in a tracker form, make sure to ask for their information again in those forms.</p>
					<p>Please do not assign temporary users to Groups that can access any security sensitive information, since access to these accounts is relatively easy to obtain, for example by intercepting or otherwise getting access to these emails.</p>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Revoking Access")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					To revoke access before validity expires or to review who has access, please see: <a href="tiki-admin_tokens.php">Admin Tokens</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<form class="form-horizontal" name="tempuser" id="tempuser" method="post">
					<div class="form-group">
						<label class="col-sm-4 col-md-4 control-label" for="tempuser_emails">Email addresses (comma-separated)</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="tempuser_emails" id="tempuser_emails" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-4 control-label" for="tempuser_groups">Groups (comma-separated)</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="tempuser_groups" id="tempuser_groups" />
							<?php echo smarty_function_autocomplete(array('element'=>'#tempuser_groups','type'=>'groupname'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-4 control-label" for="tempuser_expiry">Valid for days (use -1 for forever)</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="tempuser_expiry" id="tempuser_expiry" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-4 control-label" for="tempuser_prefix">Username prefix</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="tempuser_prefix" id="tempuser_prefix" placeholder="guest"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-4 control-label" for="tempuser_path">Autologin (non-SEFURL) path</label>
						<div class="col-sm-8 col-md-8">
							<input type="text" class="form-control" name="tempuser_path" id="tempuser_path" placeholder="index.php"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-4 col-md-10 col-md-offset-4">
							<input
								type="submit"
								class="btn btn-primary service-submit"
								form="tempuser"
								formaction="<?php echo smarty_function_service(array('controller'=>'user','action'=>'invite_tempuser'),$_smarty_tpl);?>
"
								value="Invite"
							>
						</div>
					</div>
				</form>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Temporary Users"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_adminusers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
