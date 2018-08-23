<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 06:50:54
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7613144735b7b9a2e38bbf8-61728986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18905ab6b4d588b0e165460375e0aded3f429005' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_login.tpl',
      1 => 1503603892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7613144735b7b9a2e38bbf8-61728986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gd_lib_found' => 0,
    'listgroups' => 0,
    'gr' => 0,
    'prefs' => 0,
    'num_indexed' => 0,
    'file_using' => 0,
    'limit' => 0,
    'length' => 0,
    'charnum' => 0,
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b9a2e4b4a37_12362595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b9a2e4b4a37_12362595')) {function content_5b7b9a2e4b4a37_12362595($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("#genPass").click(function () {
		var passcodeId = $("input[name=registerPasscode]").attr('id');
		genPass(passcodeId);
		return false
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form action="tiki-admin.php?page=login" class="admin form-horizontal" method="post" name="LogForm" enctype="multipart/form-data">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"group",'_text'=>"Groups",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"user",'_text'=>"Users",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('mode'=>'text','label'=>"Permissions"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_login")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'auth_method'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_intertiki'),$_smarty_tpl);?>

			<fieldset>
				<legend>Registration &amp; Log in</legend>
				<?php echo smarty_function_preference(array('name'=>'allowRegister'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="allowRegister_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'validateUsers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateEmail'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateRegistration'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="validateRegistration_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'validator_emails','size'=>"80"),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'useRegisterPasscode'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="useRegisterPasscode_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'registerPasscode'),$_smarty_tpl);?>

						<div class="col-sm-8 col-sm-offset-4">
							<span id="genPass">
								<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>'','_text'=>"Generate a passcode"),$_smarty_tpl);?>

							</span>
						</div>
						<?php echo smarty_function_preference(array('name'=>'showRegisterPasscode'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'registerKey'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['gd_lib_found']->value!='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Requires PHP GD library.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php echo smarty_function_preference(array('name'=>'generate_password'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'http_referer_registration_check'),$_smarty_tpl);?>

					<fieldset>
						<legend>CAPTCHA</legend>
						<?php echo smarty_function_preference(array('name'=>'feature_antibot'),$_smarty_tpl);?>

						<div class="adminoptionboxchild" id="feature_antibot_childcontainer">
							<?php echo smarty_function_preference(array('name'=>'captcha_wordLen'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'captcha_width'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'captcha_noise'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'recaptcha_enabled'),$_smarty_tpl);?>

							<div class="adminoptionboxchild" id="recaptcha_enabled_childcontainer">
								<?php echo smarty_function_preference(array('name'=>'recaptcha_pubkey'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'recaptcha_privkey'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'recaptcha_theme'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'recaptcha_version'),$_smarty_tpl);?>

							</div>
							<?php echo smarty_function_preference(array('name'=>'captcha_questions_active'),$_smarty_tpl);?>

							<div class="adminoptionboxchild" id="captcha_questions_active_childcontainer">
								<?php echo smarty_function_preference(array('name'=>'captcha_questions'),$_smarty_tpl);?>

							</div>
					</fieldset>
					<legend>Group and tracker login settings</legend>
					<div class="adminoptionbox form-group">
						<label for="registration_choices" class="col-sm-4 control-label">Users can select a group to join at registration:</label>
						<div class="col-sm-8 adminoptionlabel">
							<select id="registration_choices" name="registration_choices[]" multiple="multiple" size="5" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->value = $_smarty_tpl->tpl_vars['gr']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupName']!='Anonymous') {?>
										<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName']);?>
" <?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice']=='y') {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value['groupName'],"52"));?>
</option>
									<?php }?>
								<?php } ?>
							</select>
							<div class="help-block">By default, new users automatically join the Registered group.</div>
						</div>
					</div>
					<?php echo smarty_function_preference(array('name'=>'user_must_choose_group'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'userTracker'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="userTracker_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_userWizardDifferentUsersFieldIds'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_userWizardDifferentUsersFieldIds_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_userWizardUsersFieldIds'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="user_register_prettytracker_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_tpl'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_hide_mandatory'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_output'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="user_register_prettytracker_output_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_outputwiki'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_outputtowiki'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'user_trackersync_trackers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_trackersync_realname'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_trackersync_groups'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_trackersync_geo'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_trackersync_lang'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_tracker_auto_assign_item_field'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'user_force_avatar_upload'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_force_fill'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="tracker_force_fill_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'tracker_force_tracker_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'tracker_force_mandatory_field'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'tracker_force_tracker_fields'),$_smarty_tpl);?>

				</div>	
				<?php echo smarty_function_preference(array('name'=>'groupTracker'),$_smarty_tpl);?>

				<legend>Other login settings</legend>
				<?php echo smarty_function_preference(array('name'=>'email_due'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unsuccessful_logins'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unsuccessful_logins_invalid'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'eponymousGroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'desactive_login_autocomplete'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_multiple_forbidden'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_grab_session'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_protected'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'https_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_http_basic'),$_smarty_tpl);?>

				<div class="adminoptionboxchild https_login_childcontainer allowed encouraged force_nocheck required">
					<?php echo smarty_function_preference(array('name'=>'feature_show_stay_in_ssl_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_switch_ssl_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'http_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'https_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'https_external_links_for_users'),$_smarty_tpl);?>

				</div>
				<fieldset>
					<legend>Cookies</legend>
					<?php echo smarty_function_preference(array('name'=>'rememberme'),$_smarty_tpl);?>

					<div class="adminoptionboxchild rememberme_childcontainer all always">
						<?php echo smarty_function_preference(array('name'=>'remembertime'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_refresh_rememberme'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'cookie_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cookie_domain'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cookie_path'),$_smarty_tpl);?>

					<hr>
					<legend>Cookie consent</legend>
					<?php echo smarty_function_preference(array('name'=>'cookie_consent_feature'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="cookie_consent_feature_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'cookie_consent_name'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_expires'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_description'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_question'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_alert'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_button'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_mode'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_dom_id'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'cookie_consent_disable'),$_smarty_tpl);?>

					</div>
				</fieldset>
				<?php echo smarty_function_preference(array('name'=>'feature_banning'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Username</legend>
				<?php echo smarty_function_preference(array('name'=>'login_is_email','mode'=>'invert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_is_email_obscure'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_unique_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_allow_email'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="login_is_email_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'min_username_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'max_username_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'lowercase_username'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'username_pattern'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autogenerate'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Password</legend>
				<?php echo smarty_function_preference(array('name'=>'forgotPass'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'change_password'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_num'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_case'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_special'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_repetition'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_blacklist'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_diff_username'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'min_pass_length'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_due'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-4">
						<?php echo smarty_function_button(array('href'=>"?page=login&amp;refresh_email_group=y",'_class'=>"timeout",'_text'=>"Assign users to groups by matching email patterns"),$_smarty_tpl);?>

						<div class="help-block">An email pattern must be defined in the settings for at least one group for this to produce any results.</div>
					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Remote Tiki Autologin")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Remote Tiki Autologin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<?php echo smarty_function_preference(array('name'=>'login_autologin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_group'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_createnew'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_allowedgroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_syncgroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_logoutremote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_redirectlogin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_redirectlogin_url'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Remote Tiki Autologin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"LDAP")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"LDAP"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>LDAP <?php echo smarty_function_help(array('url'=>"Login+Authentication+Methods"),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ldap') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to LDAP for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'ldap_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ldap_create_user_ldap'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ldap_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_permit_tiki_users'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP bind settings<?php echo smarty_function_help(array('url'=>"LDAP+Authentication"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_port'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_debug'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_ssl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_starttls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_scope'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_version'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_basedn'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP user</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_userdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_useroc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_nameattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_countryattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_emailattr'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP admin</legend>
				<input type="password" style="display:none" name="auth_ldap_adminuser_autocomplete_off"> 
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_adminuser'),$_smarty_tpl);?>

				<input type="password" style="display:none" name="auth_ldap_adminpass_autocomplete_off"> 
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_adminpass'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"LDAP"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"LDAP external groups")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"LDAP external groups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>LDAP external groups</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_external'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP bind settings<?php echo smarty_function_help(array('url'=>"LDAP+Authentication"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_port'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_debug'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_ssl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_starttls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_scope'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_version'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_basedn'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP user</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_userdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_corr_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_useroc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'syncGroupsWithDirectory'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP group</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupdescattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupoc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'syncUsersWithDirectory'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP group member - if group membership can be found in group attributes</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_memberattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_memberisdn'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP user group - if group membership can be found in user attributes</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_usergroupattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupgroupattr'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>LDAP admin</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_adminuser'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_adminpass'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"LDAP external groups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"PAM")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"PAM"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>PAM <?php echo smarty_function_help(array('url'=>"AuthPAM",'desc'=>"PAM"),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='pam') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to PAM for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'pam_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pam_skip_admin'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"PAM"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Shibboleth")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Shibboleth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Shibboleth<?php echo smarty_function_help(array('url'=>"AuthShib",'desc'=>"Shibboleth Authentication "),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='shib') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to Shibboleth for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'shib_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shib_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shib_affiliation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shib_usegroup'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="shib_usegroup_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'shib_group'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Shibboleth"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"SAML2")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"SAML2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>SAML2<?php echo smarty_function_help(array('url'=>"SAML",'desc'=>"based on Onelogin's php-saml "),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='saml'&&$_smarty_tpl->tpl_vars['prefs']->value['saml_auth_enabled']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to SAML for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'saml_auth_enabled'),$_smarty_tpl);?>


				<fieldset>
					<legend>Identity provider settings</legend>
					<?php echo smarty_function_preference(array('name'=>'saml_idp_entityid'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'saml_idp_sso'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'saml_idp_slo'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'saml_idp_x509cert'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Options</legend>
						<?php echo smarty_function_preference(array('name'=>'saml_options_autocreate'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_options_sync_group'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_options_slo'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_options_skip_admin'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_option_account_matcher'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_option_default_group'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_option_login_link_text'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Attribute mapping</legend>
						<?php echo smarty_function_preference(array('name'=>'saml_attrmap_username'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_attrmap_mail'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_attrmap_group'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Group mapping</legend>
						<?php echo smarty_function_preference(array('name'=>'saml_groupmap_admins'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_groupmap_registered'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Advanced settings</legend>
						<?php echo smarty_function_preference(array('name'=>'saml_advanced_debug'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_strict'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_sp_entity_id'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_nameidformat'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_requestedauthncontext'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_nameid_encrypted'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_authn_request_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_logout_request_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_logout_response_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_metadata_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_want_message_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_want_assertion_signed'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_want_assertion_encrypted'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_retrieve_parameters_from_server'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_sp_x509cert'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_sp_privatekey'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'saml_advanced_sign_algorithm'),$_smarty_tpl);?>

				</fieldset>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"SAML2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"CAS")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"CAS"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>CAS (central authentication service)<?php echo smarty_function_help(array('url'=>"CAS+Authentication"),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to CAS for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'cas_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_autologin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_show_alternate_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_force_logout'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_version'),$_smarty_tpl);?>

				<fieldset>
					<legend>CAS server</legend>
					<?php echo smarty_function_preference(array('name'=>'cas_hostname','label'=>"CAS Server Name"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_port','label'=>"CAS Server Port"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_path','label'=>"CAS Server Path"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_extra_param','label'=>"CAS Extra Parameter"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_authentication_timeout'),$_smarty_tpl);?>

				</fieldset>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"CAS"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"phpBB")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"phpBB"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>phpBB<?php echo smarty_function_help(array('url'=>"phpBB+Authentication",'desc'=>"phpBB User Database Authentication "),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='phpbb') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to phpBB for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['allowRegister']!='n') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must turn Users can register off for phpBB Authentication to function properly
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_create_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_disable_tikionly'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_version'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					MySql only (for now)
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbhost'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbuser'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbpasswd'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_table_prefix'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"phpBB"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Web Server")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Web Server"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Web server<?php echo smarty_function_help(array('url'=>"External+Authentication#Web_Server_HTTP_",'desc'=>"Web Server Authentication "),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ws') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You must change the Authentication Method to Web Server for these changes to take effect
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'auth_ws_create_tiki'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Web Server"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Password Blacklist")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Password Blacklist"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<br>
			<fieldset>
				<legend>Password</legend>

				<?php echo smarty_function_preference(array('name'=>'pass_blacklist_file'),$_smarty_tpl);?>


				<legend>Password blacklist tools</legend>

				<div class="form-group">
					<h3>Upload Word List for Processing</h3>
					<p>Words currently indexed: <?php echo $_smarty_tpl->tpl_vars['num_indexed']->value;?>
</p>

					<p>You may create custom blacklists to better fit your needs. Start by uploading a word list.
						Then reduce that list to something that applies to your specific configuration and needs with the tools that appear below.</p>

					<p>Raw password files can be obtained from <a href="https://github.com/danielmiessler/SecLists/tree/master/Passwords" target="_blank">Daniel Miessler's Collection</a>.
						Tiki's defaut password blacklist files were generated from Missler's top 1 million password file.</p>

						<input type="file" name="passwordlist" accept="text/plain" />
						Use 'LOAD DATA INFILE': <input type="checkbox" name="loaddata" /> <?php echo smarty_function_help(array('desc'=>"Allows much larger files to be uploaded, but requires MySQL on localhost with extra permissions."),$_smarty_tpl);?>
<br>
						<input type="submit" value="Create or Replace Word Index" name="uploadIndex" class="btn btn-primary btn-sm timeout">
						<?php echo smarty_function_help(array('desc'=>"Text files with one word per line accepted.
						The word list will be converted to all lowe case. Duplicate entries will be removed.
						Typically passwords lists should be arranged with the most commonly used passwords first."),$_smarty_tpl);?>
<br>
						<input type="submit" value="Delete Temporary Index" name="deleteIndex" class="btn btn-primary btn-sm timeout">
						<?php echo smarty_function_help(array('desc'=>"It is recommended that you delete indexed passwords from your database after your done generating your password lists.
						They can take up quite a lot of space and serve no pourpose after processing is complete."),$_smarty_tpl);?>


						<p>Blacklist Currently Using: <?php echo $_smarty_tpl->tpl_vars['file_using']->value;?>
</p>
						<?php if ($_smarty_tpl->tpl_vars['num_indexed']->value) {?>
							<h3>Generate and Save a Password Blacklist<?php echo smarty_function_help(array('desc'=>"Saving places a text file with the generated passwords in your storage/pass_blacklists folder and enables it
							as an option for use. Fields default to the password standards set in tiki. You should not have to change these, unless you plan on changing your password
							requirements in the future."),$_smarty_tpl);?>
</h3>
							Number of passwords (limit): <input type="number" name="limit" value="<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" />
							<?php echo smarty_function_help(array('desc'=>"This sets the number of passwords that your blacklist will use. The words from the begining of of the file will be selected over the lower,
										so if you have a list of words arranged with the most common at the top, it will select only the most common works to blacklist.
										Typical usage ranges between 1,000 & 10,000, although many more could be used. Twitter blacklists 396."),$_smarty_tpl);?>
<br>
							Minmum Password Length: <input type="number" name="length" value="<?php echo $_smarty_tpl->tpl_vars['length']->value;?>
" />
							<?php echo smarty_function_help(array('desc'=>"The minimum password length for your password. This will filter out any password that has an illegal length."),$_smarty_tpl);?>
<br>
							Require Numbers &amp; Letters: <input type="checkbox" name="charnum" <?php if ($_smarty_tpl->tpl_vars['charnum']->value) {?>checked<?php }?> />
							<?php echo smarty_function_help(array('desc'=>"If checked, will filter out any password that does not have both upper and lower case letters."),$_smarty_tpl);?>
<br>
							Require Special Characters: <input type="checkbox" name="special" <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>checked<?php }?> />
							<?php echo smarty_function_help(array('desc'=>"If checked, will filter out any passwords that do not have special characters."),$_smarty_tpl);?>
<br>
							<input type="submit" value="Save & Set as Default" name="saveblacklist" class="btn btn-primary btn-sm timeout">
							<input type="submit" value="View Password List" name="viewblacklist" class="btn btn-primary btn-sm timeout" formtarget="_blank">
						<?php }?>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Password Blacklist"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>



<?php }} ?>
