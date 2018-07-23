<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:00:37
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16293240205b51505537e393-14455580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94bbffc567530c10a4d6c5bd8d3f11067d9dd4eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_general.tpl',
      1 => 1519033354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16293240205b51505537e393-14455580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lastup' => 0,
    'tiki_version' => 0,
    'svnrev' => 0,
    'db_engine_type' => 0,
    'prefs' => 0,
    'base_url' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b515055431ec2_10194443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b515055431ec2_10194443')) {function content_5b515055431ec2_10194443($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_svn_lastup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.svn_lastup.php';
if (!is_callable('smarty_function_svn_rev')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.svn_rev.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_modifier_tiki_long_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_time.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_time.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=general" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-install.php",'_icon_name'=>"database",'_text'=>"Tiki installer",'_title'=>":Reset or upgrade your database"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-admin_menus.php",'_icon_name'=>"menu",'_text'=>"Menus",'_title'=>":Create and edit menus"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-admin.php?page=general&amp;forcecheck=1",'_icon_name'=>"search",'_text'=>"Check for updates now",'_title'=>":Check for updates now"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-check.php",'_icon_name'=>"heartbeat",'_text'=>"Server Fitness",'_title'=>":Check if your server meets the requirements for running Tiki"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_general")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Release check</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Tiki version",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "lastup", null); ob_start();
echo smarty_function_svn_lastup(array(),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "svnrev", null); ob_start();
echo smarty_function_svn_rev(array(),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if (!empty($_smarty_tpl->tpl_vars['lastup']->value)) {?>
						Last update from SVN (<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
): <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastup']->value);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['svnrev']->value) {?>
						- REV <?php echo $_smarty_tpl->tpl_vars['svnrev']->value;?>

					<?php }?>
					(<?php echo $_smarty_tpl->tpl_vars['db_engine_type']->value;?>
)
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'tiki_release_cycle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_version_checks'),$_smarty_tpl);?>

					<div id="feature_version_checks_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'tiki_version_check_frequency'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Site identity</legend>
				<?php echo smarty_function_preference(array('name'=>'browsertitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fallbackBaseUrl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_breadcrumb'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Themes")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Go to the <a href="tiki-admin.php?page=look" class="alert-link">Look & Feel</a> section for additional site customization preferences.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</fieldset>
			<fieldset>
				<legend>Mail</legend>
				<?php echo smarty_function_preference(array('name'=>'sender_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_mail_charset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_crlf'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'zend_mail_handler'),$_smarty_tpl);?>

				<div class="adminoptionboxchild zend_mail_handler_childcontainer smtp">
					<input type="password" style="display:none" name="zend_mail_smtp_server_autocomplete_off"> 
					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_server'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_auth'),$_smarty_tpl);?>

					<div class="adminoptionboxchild zend_mail_smtp_auth_childcontainer login plain crammd5">
						<p>These values will be stored in plain text in the database:</p>
						<input type="password" style="display:none" name="zend_mail_smtp_user_autocomplete_off"> 
						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_user'),$_smarty_tpl);?>

						<input type="password" style="display:none" name="zend_mail_smtp_pass_autocomplete_off"> 
						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_pass'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_security'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_helo'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_queue'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionbox form-group clearfix">
					<label for="testMail" class="col-md-4 control-label">Email to send a test mail</label>
					<div class="col-md-8">
						<input type="text" name="testMail" id="testMail" class="form-control">
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'email_footer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_template_custom_text'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Newsletter</legend>
				<?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'newsletter_external_client'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Logging and reporting</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="log_sql_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Web Cron</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'webcron_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="webcron_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'webcron_type'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'webcron_run_interval'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'webcron_token'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['webcron_type']!='js') {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Call Web Cron URL")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Call Web Cron URL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cron.php?token=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['webcron_token'],'url');?>

							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Call Web Cron URL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Server</legend>
				<?php echo smarty_function_preference(array('name'=>'tmpDir'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'use_proxy'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_proxy_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'proxy_host'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_pass'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'http_skip_frameset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_loadbalancer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_port_rewriting'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'access_control_allow_origin'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Multi-domain</legend>
				<?php echo smarty_function_preference(array('name'=>'multidomain_active'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'multidomain_switchdomain'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="multidomain_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'multidomain_config'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Sessions</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Advanced configuration")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Note that storing session data in the database is an advanced systems administration option, and is for admins who have comprehensive access and understanding of the database, in order to deal with any unexpected effects.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Changing this feature will immediately log you out when you save this preference. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['forgotPass']!='y') {?>If there is a chance you have forgotten your password, enable "Forget password" feature.<a href="tiki-admin.php?page=features" title="Features" class="alert-link">Enable now</a>.<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'session_storage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_lifetime'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_cookie_name'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Site terminal</legend>
				<?php echo smarty_function_preference(array('name'=>'site_terminal_active'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_terminal_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_terminal_config'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Contact</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_contact'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_contact_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'contact_anon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_priority_onoff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_user'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Stats</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Terms and conditions</legend>
				<?php echo smarty_function_preference(array('name'=>'conditions_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="conditions_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'conditions_page_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'conditions_minimum_age'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Help</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_help'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_help_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'helpurl'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Navigation")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Navigation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Menus</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_cssmenus'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_jquery_superfish'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_featuredLinks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_menusfolderstyle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'menus_items_icons'),$_smarty_tpl);?>

					<div id="menus_items_icons_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'menus_items_icons_path'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'menus_edit_icon'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Home page</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'useGroupHome'),$_smarty_tpl);?>

					<div id="useGroupHome_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'limitedGoGroupHome'),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'tikiIndex','defaul'=>$_smarty_tpl->tpl_vars['prefs']->value['site_tikiIndex']),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'useUrlIndex'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="useUrlIndex_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'urlIndex'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'urlIndexBrowserTitle'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Redirects</legend>
				<?php echo smarty_function_preference(array('name'=>'tiki_domain_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_domain_redirects'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_redirect_on_error'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

				<hr>
				<?php echo smarty_function_preference(array('name'=>'permission_denied_login_box','mode'=>'invert'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="permission_denied_login_box_childcontainer">
					<div style="text-indent: 28%">
						<strong>or</strong>
					</div>
					<?php echo smarty_function_preference(array('name'=>'permission_denied_url'),$_smarty_tpl);?>

				</div>
				<hr>
				<?php echo smarty_function_preference(array('name'=>'url_anonymous_page_not_found'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_alternate_registration_page'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>User</legend>
				<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Sitemap protocol</legend>
				<?php echo smarty_function_preference(array('name'=>'sitemap_enable'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Site access</legend>
				<?php echo smarty_function_preference(array('name'=>'site_closed'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_closed_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_closed_msg'),$_smarty_tpl);?>

					<div class="col-sm-8 col-sm-offset-4">
						<?php echo smarty_function_button(array('_text'=>'Test site closed message','href'=>('tiki-error_simple.php?error=').($_smarty_tpl->tpl_vars['prefs']->value['site_closed_msg']),'_class'=>'btn-sm','_type'=>'info'),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'use_load_threshold'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_load_threshold_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'load_threshold'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'site_busy_msg'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend class="heading">Breadcrumbs</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_breadcrumbs'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_breadcrumbs_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_siteloclabel'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_siteloc'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitedesc'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend class="heading">Namespace</legend>
				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						The namespace separator should not
						<ul>
							<li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&amp;+;=&lt;&gt;</li>
							<li>conflict with wiki syntax tagging</li>
						</ul>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
						Note: a conversion of :: to ::: for existing pages must be done manually.<br/>
						If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Navigation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Date and Time")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Date and Time"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"php.net")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a class="alert-link" href="http://www.php.net/manual/en/function.strftime.php">
					Date and Time Format Help
				</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<fieldset>
				<legend>Time zone and format<?php echo smarty_function_help(array('url'=>"Date+and+Time"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

				<div class="clearfix">
					<?php echo smarty_function_preference(array('name'=>'long_date_format'),$_smarty_tpl);?>

					<span class="help-block col-md-8 col-md-push-4">
					Sample: <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
				</div>
				<div class="clearfix">
					<?php echo smarty_function_preference(array('name'=>'short_date_format'),$_smarty_tpl);?>

					<span class="help-block col-md-8 col-md-push-4">
					Sample: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
				</div>
				<div class="clearfix">
					<?php echo smarty_function_preference(array('name'=>'long_time_format'),$_smarty_tpl);?>

					<span class="help-block col-md-8 col-md-push-4">
					Sample: <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
				</div>
				<div class="clearfix">
					<?php echo smarty_function_preference(array('name'=>'short_time_format'),$_smarty_tpl);?>

					<span class="help-block col-md-8 col-md-push-4">
					Sample: <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
				</div>
				<?php echo smarty_function_preference(array('name'=>'short_date_format_js'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'short_time_format_js'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Date/time selectors</legend>
				<?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_start_year'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_end_year'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'tiki_same_day_time_only'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_timesheet'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_convene'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Date and Time"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
