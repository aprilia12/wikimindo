<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 10:47:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\upgrade_new_in_15.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7876579005b5839205e7170-24292820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f50291503b56f534936c30fcb7ee3027aaabbb6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\upgrade_new_in_15.tpl',
      1 => 1501916788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7876579005b5839205e7170-24292820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addonprefs' => 0,
    'addon' => 0,
    'prefs' => 0,
    'viewerjs_err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5839206a2997_52484323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5839206a2997_52484323')) {function content_5b5839206a2997_52484323($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
		<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Main new features and settings in Tiki 15.
	<a href="http://doc.tiki.org/Tiki15" target="tikihelp" class="tikihelp" title="Tiki15:
			Tiki15 is an LTS version.
			As it is a Long-Term Support (LTS) version, it will be supported for 5 years..
			The requirements are the same as in the previous version (IE9, PHP 5.5), plus php5-curl and php5-intl are now recommended.
			<br/><br/>
			Click to read more
		">
		<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

	</a>
	<br/><br/><br/>
	<div class="media-body">
		<fieldset class="table clearfix featurelist">
			<legend>Tiki Addons</legend>
			Addons allow a way for developers to add an even broader range of functionality
			<a href="https://doc.tiki.org/Addons" target="tikihelp" class="tikihelp" title="Addons:
				In Tiki 14, the Tiki Addons feature was added to allow a way for developers <br/>to add an even broader range of functionality that can be used with Tiki.
				<br/><br/>
				In Tiki 15, an addons repository was added.
				<br/><br/>
				Click to read more
			">
				<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

			</a>
			<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addonprefs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
?>
				<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['addon']->value);
$_tmp1=ob_get_clean();?><?php echo smarty_function_preference(array('name'=>$_tmp1),$_smarty_tpl);?>

			<?php } ?>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Remote Tiki Autologin</legend>
			<?php echo smarty_function_preference(array('name'=>'login_autologin'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="login_autologin_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'login_autologin_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_group'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_createnew'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_allowedgroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_syncgroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_logoutremote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_redirectlogin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_autologin_redirectlogin_url'),$_smarty_tpl);?>

				</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>New Wiki Plugins</legend>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_fullwidthtitle'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_googlechart'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_includetpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_like'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_piwik'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_tour'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_useringroup'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_xmlupdate'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Social Networks with Linkedin</legend>
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_login'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="socialnetworks_linkedin_login_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_client_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_client_secr'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_autocreateuser'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_names'),$_smarty_tpl);?>

					</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Temporary User Accounts</legend>
				<div class="adminoptionbox preference clearfix advanced pref-fake all modified">
					<div class="adminoption form-group">
						<label class="col-sm-4 control-label">
							Display more information here
						</label>
						<div class="col-sm-8">
							<input id="pref-fake" type="checkbox" name="pref-fake" data-tiki-admin-child-block="#pref-fake_childcontainer" data-tiki-admin-child-mode="normal"/>
						</div>
					</div>
				</div>
				<div class="adminoptionboxchild" id="pref-fake_childcontainer">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_token_access']!='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Token Access Feature Dependency")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					The token access feature is needed for Temporary Users to login.
						<a href="tiki-admin.php?page=security">Turn it on here.</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Token Access Feature Dependency"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Temporary Users")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p>You can use this feature through: <a href="tiki-admin.php?page=tiki-adminusers.php#contenttabs_adminusers-4">Admin Users > Temporary Users (tab)</a></p>
					<p>Temporary users cannot login the usual way but instead do so via an autologin URL that is associated with a token. An email will be sent out to invited users containing this URL. You will receive a copy of the email yourself.</p>
					<p>These temporary users will be deleted (but can be set to be preserved in Admin Tokens) once the validity period is over. Normally, these users should have read-only access. Nevertheless, if you are allowing these users to submit information, e.g. fill in a tracker form, make sure to ask for their information again in those forms.</p>
					<p>Please do not assign temporary users to Groups that can access any security sensitive information, since access to these accounts is relatively easy to obtain, for example by intercepting or otherwise getting access to these emails.</p>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Temporary Users"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Revoking Access")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				To revoke access before validity expires or to review who has access, please see: <a href="tiki-admin_tokens.php">Admin Tokens</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Revoking Access"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
		<legend>Statistics Control Panel</legend>
		This is a new control panel on Tiki and work is still in progress.
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tiki Statistics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tiki Statistics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<fieldset>
						<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

					</fieldset>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tiki Statistics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Google Analytics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Google Analytics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<fieldset>
						<?php echo smarty_function_preference(array('name'=>'site_google_analytics_account'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'site_google_credentials'),$_smarty_tpl);?>

					</fieldset>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Google Analytics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Piwik Analytics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Piwik Analytics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<fieldset>
						<?php echo smarty_function_preference(array('name'=>'site_piwik_analytics_server_url'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'site_piwik_site_id'),$_smarty_tpl);?>

					</fieldset>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Piwik Analytics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Other new features</legend>
				<?php echo smarty_function_preference(array('name'=>"header_custom_less",'syntax'=>"css"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_multilike_config'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_feature'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_viewerjs_feature_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_uri'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['viewerjs_err']->value) {?>
						<div class="col-sm-8 pull-right">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['viewerjs_err']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					<?php }?>
				</div>
				<?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_unique_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'recaptcha_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="recaptcha_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'recaptcha_pubkey'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'recaptcha_privkey'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'recaptcha_theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'recaptcha_version'),$_smarty_tpl);?>

				</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Improved and extended features</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_datachannel'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_list'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mediaplayer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'file_galleries_use_jquery_upload'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_batch'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_batch_childcontainer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You are highly recommended to use a file directory as the File Gallery storage, when using this feature
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<br/>
					<?php echo smarty_function_preference(array('name'=>'fgal_batch_dir'),$_smarty_tpl);?>

				</div>
				<b>Console</b>: 
				There is a console.php command to set a scheduled batch upload cron task.
				<a href="https://doc.tiki.org/Batch+Upload#Console_Command">More Information...</a>
				A couple of helper commands to manage multitikis.
List the sites in a tiki instance and move a site from one tiki to another to help with upgrades etc (using local file access only)
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Removed features</legend>
			Synchronize categories of user tracker item to user groups
		</fieldset>

		<i>See the full list of changes.</i>
		<a href="http://doc.tiki.org/Tiki15" target="tikihelp" class="tikihelp" title="Tiki15:
			Click to read more
		">
			<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

		</a>
	</div>
</div>
<?php }} ?>
