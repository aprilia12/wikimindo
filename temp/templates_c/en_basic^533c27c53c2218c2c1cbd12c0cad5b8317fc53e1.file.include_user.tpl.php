<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 08:45:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8709807455b7128f9e93667-95874818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '533c27c53c2218c2c1cbd12c0cad5b8317fc53e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_user.tpl',
      1 => 1518757024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8709807455b7128f9e93667-95874818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monitor_command' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7128fa000f19_81331926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7128fa000f19_81331926')) {function content_5b7128fa000f19_81331926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=user" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"group",'_text'=>"Groups",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"user",'_text'=>"Users",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('mode'=>'text','label'=>"Permissions"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_user_setting")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_user_setting"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>
					Default user preferences
					<?php echo smarty_function_help(array('url'=>"UsersDefaultPrefs",'desc'=>"Users Default Preferences"),$_smarty_tpl);?>

				</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_mytiki_childcontainer">
						<legend>My Account Items</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_pages'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_blogs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_gals'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_msgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_tasks'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_topics'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_replies'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_items'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_userbreadCrumb'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_tasks_maxRecords'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_diff_versions'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_remember_closed_rboxes'),$_smarty_tpl);?>

				</div>
				</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>User Account Features</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_minical'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_tasks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_notepad'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_user_bookmarks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_favorites'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contacts'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_usermenu'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Info and Picture")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Info and Picture"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>User information display</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'highlight_group'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_display_my_to_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_tracker_infos'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_days'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_show_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_unified_user_details'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Profile picture</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_store_file_gallery_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_size'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_square_crop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_picture_gallery_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_default_picture_id'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Info and Picture"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Messaging and Notifications")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Messaging and Notifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Messages</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_messages_childcontainer">
						<legend>
							User messages
							<?php echo smarty_function_help(array('url'=>"Inter-User+Messages"),$_smarty_tpl);?>

						</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_maxRecords'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_sendReadStatus'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_minPrio'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_archiveAfter'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>User notifications</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'monitor_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="monitor_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'monitor_individual_clear'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_count_refresh_interval'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_reply_email_pattern'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_digest'),$_smarty_tpl);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						For the digest emails to be sent out, you will need to set-up a cron job.</br>
						Adjust the command parameters for your digest frequency. Default frequency is 7 days.</br>
							<strong>Sample command:</strong>
							<code>/usr/bin/php <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['monitor_command']->value);?>
</code>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Messaging and Notifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Files")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Files"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_userfiles','visible'=>"always"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userfiles_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files','mode'=>'invert'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_use_fgal_for_user_files_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'uf_use_db'),$_smarty_tpl);?>

						<div class="adminoptionboxchild uf_use_db_childcontainer n">
							<?php echo smarty_function_preference(array('name'=>'uf_use_dir'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Settings</legend>
				<?php echo smarty_function_preference(array('name'=>'userfiles_quota'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_private'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_hidden'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Files"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_user_setting"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
