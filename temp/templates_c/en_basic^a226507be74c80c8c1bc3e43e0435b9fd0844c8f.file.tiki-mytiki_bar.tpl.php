<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:34:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-mytiki_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11134680485b5158489a8b55-60912881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a226507be74c80c8c1bc3e43e0435b9fd0844c8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-mytiki_bar.tpl',
      1 => 1440850168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11134680485b5158489a8b55-60912881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_messages' => 0,
    'unread' => 0,
    'tiki_p_tasks' => 0,
    'tiki_p_create_bookmarks' => 0,
    'tiki_p_configure_modules' => 0,
    'tiki_p_use_webmail' => 0,
    'tiki_p_notepad' => 0,
    'tiki_p_userfiles' => 0,
    'tiki_p_minical' => 0,
    'user' => 0,
    'tiki_p_view_actionlog' => 0,
    'tiki_p_view_actionlog_owngroups' => 0,
    'tiki_p_socialnetworks' => 0,
    'tiki_p_admin_socialnetworks' => 0,
    'tiki_p_send_mailin' => 0,
    'tiki_p_admin_mailin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b515848a68202_63046248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b515848a68202_63046248')) {function content_5b515848a68202_63046248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><div class="t_navbar btn-block margin-bottom-md">

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
		<?php echo smarty_function_button(array('_icon_name'=>"home",'_type'=>"link",'_text'=>"My Account",'href'=>"tiki-my_tiki.php"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['change_password']=='y') {?>
		<?php echo smarty_function_button(array('_icon_name'=>"cog",'_type'=>"link",'_text'=>"Preferences",'href'=>"tiki-user_preferences.php"),$_smarty_tpl);?>

	<?php }?>

	<?php echo smarty_function_button(array('_icon_name'=>"information",'_type'=>"link",'_text'=>"My Info",'href'=>"tiki-user_information.php"),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
		<?php echo smarty_function_button(array('_icon_name'=>"watch",'_type'=>"link",'_text'=>"My Watches",'href'=>"tiki-user_watches.php"),$_smarty_tpl);?>

	<?php }?>

	<div class="btn-group">
		<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
				More <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['unread']->value) {?>
					<li><?php echo smarty_function_button(array('_icon_name'=>"admin_messages",'_type'=>"link",'_text'=>"Messages (".((string)$_smarty_tpl->tpl_vars['unread']->value).")",'href'=>"messu-mailbox.php"),$_smarty_tpl);?>
</li>
				<?php } else { ?>
					<li><?php echo smarty_function_button(array('_icon_name'=>"admin_messages",'_type'=>"link",'_text'=>"Messages",'href'=>"messu-mailbox.php"),$_smarty_tpl);?>
</li>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tasks']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"tasks",'_type'=>"link",'_text'=>"Tasks",'href'=>"tiki-user_tasks.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_bookmarks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"book",'_type'=>"link",'_text'=>"Bookmarks",'href'=>"tiki-user_bookmarks.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_configure_modules']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"admin_module",'_type'=>"link",'_text'=>"Modules",'href'=>"tiki-user_assigned_modules.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webmail']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_webmail']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"admin_webmail",'_type'=>"link",'_text'=>"Webmail",'href'=>"tiki-webmail.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contacts']=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"user",'_type'=>"link",'_text'=>"Contacts Preferences",'href'=>"tiki-user_contacts_prefs.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_notepad']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_notepad']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"notepad",'_type'=>"link",'_text'=>"Notepad",'href'=>"tiki-notepad_list.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userfiles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_userfiles']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"files",'_type'=>"link",'_text'=>"MyFiles",'href'=>"tiki-userfiles.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_minical']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_minical']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"calendar",'_type'=>"link",'_text'=>"Mini Calendar",'href'=>"tiki-minical.php"),$_smarty_tpl);?>
</li>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog']=='y'&&!empty($_smarty_tpl->tpl_vars['user']->value)&&($_smarty_tpl->tpl_vars['tiki_p_view_actionlog']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_view_actionlog_owngroups']->value=='y')) {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"calendar",'_type'=>"link",'_text'=>"Action Log",'href'=>"tiki-admin_actionlog.php?selectedUsers[]=".((string)$_smarty_tpl->tpl_vars['user']->value)),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_socialnetworks']=='y'&&!empty($_smarty_tpl->tpl_vars['user']->value)&&($_smarty_tpl->tpl_vars['tiki_p_socialnetworks']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_socialnetworks']->value=='y')) {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"admin_socialnetworks",'_type'=>"link",'_text'=>"Social networks",'href'=>"tiki-socialnetworks.php"),$_smarty_tpl);?>
</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_mailin']=='y'&&!empty($_smarty_tpl->tpl_vars['user']->value)&&($_smarty_tpl->tpl_vars['tiki_p_send_mailin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_mailin']->value=='y')) {?>
				<li><?php echo smarty_function_button(array('_icon_name'=>"mail-forward",'_type'=>"link",'_text'=>"Mail-in",'href'=>"tiki-user_mailin.php"),$_smarty_tpl);?>
</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php }} ?>
