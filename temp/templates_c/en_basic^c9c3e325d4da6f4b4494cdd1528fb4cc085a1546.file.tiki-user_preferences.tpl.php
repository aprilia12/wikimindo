<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:32:26
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-user_preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5501742605b5157ca001605-00380501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c3e325d4da6f4b4494cdd1528fb4cc085a1546' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-user_preferences.tpl',
      1 => 1492251946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5501742605b5157ca001605-00380501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userwatch' => 0,
    'user' => 0,
    'tiki_p_admin_users' => 0,
    'userinfo' => 0,
    'prefs' => 0,
    'user_prefs' => 0,
    'avatar' => 0,
    'flags' => 0,
    'fval' => 0,
    'flag' => 0,
    'location' => 0,
    'userPageExists' => 0,
    'usertrackerId' => 0,
    'tiki_p_admin' => 0,
    'customfields' => 0,
    'scramblingMethods' => 0,
    'scramblingEmails' => 0,
    'mailCharsets' => 0,
    'group_theme' => 0,
    'userwatch_theme' => 0,
    'userwatch_themeOption' => 0,
    'available_themesandoptions' => 0,
    'theme' => 0,
    'userwatch_themeoption' => 0,
    'theme_name' => 0,
    'languages' => 0,
    'warning_site_timezone_set' => 0,
    'timezones' => 0,
    'tzinfo' => 0,
    'offset' => 0,
    'tz' => 0,
    'offset_min' => 0,
    'display_timezone' => 0,
    'show_mouseover_user_info' => 0,
    'tiki_p_messages' => 0,
    'tiki_p_tasks' => 0,
    'tiki_p_forum_read' => 0,
    'levn' => 0,
    'lev' => 0,
    'tiki_p_delete_account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5157ca178667_84370272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5157ca178667_84370272')) {function content_5b5157ca178667_84370272($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_modifier_stringfix')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.stringfix.php';
if (!is_callable('smarty_function_defaultmapcenter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.defaultmapcenter.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<?php if ($_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"User Preferences")); $_block_repeat=true; echo smarty_block_title(array('help'=>"User Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Preferences: <?php echo $_smarty_tpl->tpl_vars['userwatch']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"User Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"User Preferences")); $_block_repeat=true; echo smarty_block_title(array('help'=>"User Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"User Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['userwatch']->value=='') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y') {?>
	<div class="t_navbar btn-group form-group">
		<?php $_smarty_tpl->tpl_vars['thisuser'] = new Smarty_variable($_smarty_tpl->tpl_vars['userinfo']->value['login'], null, 0);?>
		<?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_type'=>"link",'_text'=>"Assign Group"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_type'=>"link",'_text'=>"User Information"),$_smarty_tpl);?>

	</div>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"mytiki_user_preference")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Personal Information")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Personal Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Personal Information</h2>
			<form role="form" action="tiki-user_preferences.php" method="post" class="form-horizontal">
				<input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
">
				<div class="form-group">
					<label class="control-label col-md-4" for="userIn">
						User
					</label>
					<div class="col-md-8">
						<input class="form-control" disabled value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
">
						<span class="help-block">
							Last login: <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']);?>

						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="realName">
						Real Name
					</label>
					<div class="col-md-8">
						<input class="form-control" type="text" name="realName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_prefs']->value['realName']);?>
"
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_ldap_nameattr']==''||$_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ldap') {
} else { ?>disabled<?php }?>>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">
						Profile picture
					</label>
					<div class="col-md-8">
						<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_use_gravatar']=='y') {?>
							<a class="link" href="http://www.gravatar.com" target="_blank">Pick user profile picture</a>
						<?php } else { ?>
							<a class="link" target="_blank" href="tiki-pick_avatar.php<?php if ($_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value) {?>?view_user=<?php echo $_smarty_tpl->tpl_vars['userwatch']->value;
}?>">Pick user profile picture</a>
						<?php }?>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_gender']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-4" for="gender">
							Gender
						</label>
						<div class="col-md-8">
							<label class="radio-inline">
								<input type="radio" name="gender" value="Male" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']=='Male') {?>checked="checked"<?php }?>> Male
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" value="Female" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']=='Female') {?>checked="checked"<?php }?>> Female
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" value="Hidden" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']=='Hidden') {?>checked="checked"<?php }?>> Hidden
							</label>
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label class="control-label col-md-4" for="country">
						Country
					</label>
					
						
					
					<div class="col-md-8">
						<select name="country" id="country" class="form-control">
							<option value="Other" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country']=="Other") {?>selected="selected"<?php }?>>
								Other
							</option>
							<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_smarty_tpl->tpl_vars['fval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
 $_smarty_tpl->tpl_vars['fval']->value = $_smarty_tpl->tpl_vars['flag']->key;
if ($_smarty_tpl->tpl_vars['fval']->value!="Other") {?><option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fval']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country']==$_smarty_tpl->tpl_vars['fval']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['flag']->value);?>
</option><?php }
} ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="location">
						Location
					</label>
					<div class="col-md-8 margin-bottom-lg" style="height: 250px;" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="location">
						<div class="map-container" style="height: 250px;" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="location"></div>
					</div>
					<input type="hidden" name="location" id="location" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['location']->value);?>
">
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="homePage">
						Homepage URL
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="homePage" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_prefs']->value['homePage']);?>
">
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-4">
							Your Personal Wiki Page
						</label>
						<div class="col-md-8">
							<?php if ($_smarty_tpl->tpl_vars['userPageExists']->value=='y') {?>
								<a class="link" href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
" title="View">
									<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>

								</a>
								(<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
									Edit
								</a>)
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>

								(<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
								Create
							</a>)
							<?php }?>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'&&$_smarty_tpl->tpl_vars['usertrackerId']->value) {?>
					<div class="form-group">
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&!empty($_smarty_tpl->tpl_vars['userwatch']->value)&&$_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value) {?>
							<label class="control-label col-md-4">User's personal tracker information</label>
							<div class="col-md-8">
								<a class="link" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['usertrackerId']->value;?>
&user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value,'url');?>
&view=+user">
									View extra information
								</a>
							</div>
						<?php } else { ?>
							<label class="control-label col-md-4">Your personal tracker information</label>
							<div class="col-md-8">
								<a class="link" href="tiki-view_tracker_item.php?view=+user">
									View extra information
								</a>
							</div>
						<?php }?>
					</div>
				<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['name'] = 'ir';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['show']) {?>
						<label><?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['label'];?>
:
						<input type="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['prefName'];?>
"
							value="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['value'];?>
" size="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['size'];?>
"></label>
					<?php }?>
				<?php endfor; endif; ?>
				<div class="form-group">
					<label class="control-label col-md-4" for="user_information">
						User Information
					</label>
					<div class="col-md-8">
						<select class="form-control" id="user_information" name="user_information">
							<option value='private' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information']=='private') {?>selected="selected"<?php }?>>
								Private
							</option>
							<option value='public' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information']=='public') {?>selected="selected"<?php }?>>
								Public
							</option>
						</select>
					</div>
				</div>
				<div class="submit text-center">
					<input type="submit" class="btn btn-primary" name="new_prefs" value="Save changes">
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Personal Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Preferences</h2>
			<legend>General settings</legend>
			<form role="form" action="tiki-user_preferences.php" method="post" class="form-horizontal">
				<input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
">
				<div class="form-group">
					<label class="control-label col-md-4" for="email_isPublic">
						Is email public?
					</label>
					<div class="col-md-8">
						<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email']) {?>
							<select id="email_isPublic" name="email_isPublic" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['scramblingMethods']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['scramblingMethods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['email_isPublic']==$_smarty_tpl->tpl_vars['scramblingMethods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]) {?>selected="selected"<?php }?>>
										<?php echo $_smarty_tpl->tpl_vars['scramblingEmails']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>

									</option>
								<?php endfor; endif; ?>
							</select>
							<span class="help-block">If email is public, select a scrambling method to prevent spam</span>
						<?php } else { ?>
							<p class="form-control-static">Unavailable - please set your email below</p>
						<?php }?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4" for="mailCharset">
						Email character set
					</label>
					<div class="col-md-8">
						<select id="mailCharset" name="mailCharset" class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mailCharsets']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mailCharset']==$_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]) {?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>

								</option>
							<?php endfor; endif; ?>
						</select>
						<span class="help-block">Special character set for your email application</span>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme']=='y'&&empty($_smarty_tpl->tpl_vars['group_theme']->value)) {?>
					<div class="form-group">
						<label class="control-label col-md-4" for="mytheme">
							Theme
						</label>
						<div class="col-md-8">
							<select id="mytheme" name="mytheme" class="form-control">
								<?php ob_start();
if ($_smarty_tpl->tpl_vars['userwatch_themeOption']->value) {?><?php echo "/";?><?php echo (string)$_smarty_tpl->tpl_vars['userwatch_themeOption']->value;?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["userwatch_themeoption"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['userwatch_theme']->value).$_tmp1, null, 0);?>
								<option value="" class="text-muted bg-info">Site theme (<?php echo $_smarty_tpl->tpl_vars['prefs']->value['theme'];
if (!empty($_smarty_tpl->tpl_vars['prefs']->value['theme_option'])) {?>/<?php echo $_smarty_tpl->tpl_vars['prefs']->value['theme_option'];
}?>)</option>
								<?php  $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme_name']->_loop = false;
 $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_themesandoptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->key => $_smarty_tpl->tpl_vars['theme_name']->value) {
$_smarty_tpl->tpl_vars['theme_name']->_loop = true;
 $_smarty_tpl->tpl_vars['theme']->value = $_smarty_tpl->tpl_vars['theme_name']->key;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theme']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['userwatch_themeoption']->value==$_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected"<?php }?>><?php echo ucwords($_smarty_tpl->tpl_vars['theme_name']->value);?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_language']=='y') {?>
					<div class="form-group clearfix">
						<label class="control-label col-md-4" for="language">
							Language
						</label>
						<div class="col-md-8">
							<select id="language" name="language" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['language']==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
										<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

									</option>
								<?php endfor; endif; ?>
								<option value='' <?php if (!$_smarty_tpl->tpl_vars['user_prefs']->value['language']) {?>selected="selected"<?php }?>>
									Site default
								</option>
							</select>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
					<?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['read_language']) {?>
						<div id="read-lang-div" class="form-group clearfix">
					<?php } else { ?>
						<div class="form-group clearfix">
							<div class="col-md-8 col-md-push-4">
								<a href="javascript:void(0)" onclick="document.getElementById('read-lang-div').style.display='block';this.style.display='none';">
									Can you read more languages?
								</a>
							</div>
						</div>
						<div id="read-lang-div" style="display: none" class="form-group clearfix">
					<?php }?>
					<label class="control-label col-md-4" for="read-language">Other languages you can read</label>
					<div class="col-md-8">
						<select class="form-control" id="read-language" name="_blank" onchange="document.getElementById('read-language-input').value+=' '+this.options[this.selectedIndex].value+' '">
							<option value="">Select language...</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
">
									<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</option>
							<?php endfor; endif; ?>
						</select>
						<div class="help-block">Select from the dropdown to add automatically to the list below</div>
					</div>
					<label for="read-language-input" class="col-md-8 col-md-push-4">
						<input class="form-control" id="read-language-input" type="text" name="read_language" value="<?php echo $_smarty_tpl->tpl_vars['user_prefs']->value['read_language'];?>
">
					</label>
					</div>
				<?php }?>
				<div class="form-group clearfix">
					<label class="control-label col-md-4" for="userbreadCrumb">
						Number of visited pages to remember
					</label>
					<div class="col-md-8">
						<select id="userbreadCrumb" name="userbreadCrumb" class="form-control">
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==1) {?>selected="selected"<?php }?>>1</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==2) {?>selected="selected"<?php }?>>2</option>
							<option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==3) {?>selected="selected"<?php }?>>3</option>
							<option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==4) {?>selected="selected"<?php }?>>4</option>
							<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==5) {?>selected="selected"<?php }?>>5</option>
							<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==10) {?>selected="selected"<?php }?>>10</option>
						</select>
					</div>
				</div>
				<div class="form-group clearfix">
					<label class="control-label col-md-4" for="display_timezone">
						Displayed timezone
					</label>
					<div class="col-md-8">
						<select name="display_timezone" class="form-control" id="display_timezone"<?php if ($_smarty_tpl->tpl_vars['warning_site_timezone_set']->value=='y') {?> disabled<?php }?>>
							<option value="" style="font-style:italic;">
								Detect user time zone if browser allows, otherwise site default
							</option>
							<option value="Site" style="font-style:italic;border-bottom:1px dashed #666;"
									<?php if (isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])&&$_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone']=='Site') {?> selected="selected"<?php }?>>
								Site default
							</option>
							<?php  $_smarty_tpl->tpl_vars['tzinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tzinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tzinfo']->key => $_smarty_tpl->tpl_vars['tzinfo']->value) {
$_smarty_tpl->tpl_vars['tzinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['tz']->value = $_smarty_tpl->tpl_vars['tzinfo']->key;
?>
								<?php echo smarty_function_math(array('equation'=>"floor(x / (3600000))",'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset'),$_smarty_tpl);?>

								<?php echo smarty_function_math(array('equation'=>"(x - (y*3600000)) / 60000",'y'=>$_smarty_tpl->tpl_vars['offset']->value,'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset_min','format'=>"%02d"),$_smarty_tpl);?>

								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tz']->value);?>
"<?php if (isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])&&$_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone']==$_smarty_tpl->tpl_vars['tz']->value) {?> selected="selected"<?php }?>>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tz']->value);?>
 (UTC<?php if ($_smarty_tpl->tpl_vars['offset']->value>=0) {?>+<?php }
echo $_smarty_tpl->tpl_vars['offset']->value;?>
h<?php if ($_smarty_tpl->tpl_vars['offset_min']->value>0) {
echo $_smarty_tpl->tpl_vars['offset_min']->value;
}?>)
								</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['warning_site_timezone_set']->value=='y') {?>
							<br/><strong>Warning:</strong> <i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site time zone <strong>%0</strong> is enforced and overrides user preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['display_timezone']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</i>
						<?php }?>
					</div>
				</div>
				<div class="form-group clearfix">
					<div class="checkbox col-md-8 col-md-push-4">
						<label>
							<input type="checkbox" name="display_12hr_clock" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['display_12hr_clock']=='y') {?>checked="checked"<?php }?>>Use 12-hour clock in time selectors
						</label>
					</div>
					<?php if (1==1||$_smarty_tpl->tpl_vars['prefs']->value['feature_community_mouseover']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="show_mouseover_user_info" <?php if ($_smarty_tpl->tpl_vars['show_mouseover_user_info']->value=='y') {?>checked="checked"<?php }?>>Display info tooltip on mouseover for every user who allows his/her information to be public
							</label>
						</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y') {?>
					<legend>User Messages</legend>
					<div class="form-group clearfix">
						<label class="control-label col-md-4" for="mess_maxRecords">
							Messages per page
						</label>
						<div class="col-md-8">
							<select id="mess_maxRecords" name="mess_maxRecords" class="form-control">
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==2) {?>selected="selected"<?php }?>>2</option>
								<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==5) {?>selected="selected"<?php }?>>5</option>
								<option value="10" <?php if (empty($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'])||$_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==10) {?>selected="selected"<?php }?>>10</option>
								<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==20) {?>selected="selected"<?php }?>>20</option>
								<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==30) {?>selected="selected"<?php }?>>30</option>
								<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==40) {?>selected="selected"<?php }?>>40</option>
								<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==50) {?>selected="selected"<?php }?>>50</option>
							</select>
						</div>
					</div>
					<div class="clearfix">
						<?php if (1==1||$_smarty_tpl->tpl_vars['prefs']->value['allowmsg_is_optional']=='y') {?>
							<div class="checkbox col-md-8 col-md-push-4 ">
								<label>
									<input type="checkbox" name="allowMsgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['allowMsgs']=='y') {?>checked="checked"<?php }?>>
									Allow messages from other users
								</label>
							</div>
						<?php }?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mess_sendReadStatus" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_sendReadStatus']=='y') {?>checked="checked"<?php }?>>
								Notify sender when reading his mail
							</label>
						</div>
					</div>
					<div class="form-group clearfix">
						<label class="control-label col-md-4" for="minPrio">
							Message priority notification
						</label>
						<div class="col-md-8">
							<select class="form-control" id="minPrio" name="minPrio">
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==1) {?>selected="selected"<?php }?>>1 -Lowest-</option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==2) {?>selected="selected"<?php }?>>2 -Low-</option>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==3) {?>selected="selected"<?php }?>>3 -Normal-</option>
								<option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==4) {?>selected="selected"<?php }?>>4 -High-</option>
								<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==5) {?>selected="selected"<?php }?>>5 -Very High-</option>
								<option value="6" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==6) {?>selected="selected"<?php }?>>none</option>
							</select>
							<span class="help-block">Send me an email for messages with priority equal to or greater than</span>
						</div>
					</div>
					<div class="form-group clearfix">
						<label class="control-label col-md-4" for="mess_archiveAfter" >
							Read message auto-archiving
						</label>
						<div class="col-md-8">
							<select id="mess_archiveAfter" name="mess_archiveAfter" class="form-control">
								<option value="0" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==0) {?>selected="selected"<?php }?>>never</option>
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==1) {?>selected="selected"<?php }?>>1</option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==2) {?>selected="selected"<?php }?>>2</option>
								<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==5) {?>selected="selected"<?php }?>>5</option>
								<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==10) {?>selected="selected"<?php }?>>10</option>
								<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==20) {?>selected="selected"<?php }?>>20</option>
								<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==30) {?>selected="selected"<?php }?>>30</option>
								<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==40) {?>selected="selected"<?php }?>>40</option>
								<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==50) {?>selected="selected"<?php }?>>50</option>
								<option value="60" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==60) {?>selected="selected"<?php }?>>60</option>
							</select>
							<span class="help-block">Auto-archive read messages after selected days</span>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tasks']->value=='y') {?>
					<legend>User Tasks</legend>
					<div class="form-group">
						<label class="control-label col-md-4" for="tasks_maxRecords">
							Tasks per page
						</label>
						<div class="col-md-8">
							<select class="form-control" id="tasks_maxRecords" name="tasks_maxRecords">
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==2) {?>selected="selected"<?php }?>>2</option>
								<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==5) {?>selected="selected"<?php }?>>5</option>
								<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==10) {?>selected="selected"<?php }?>>10</option>
								<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==20) {?>selected="selected"<?php }?>>20</option>
								<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==30) {?>selected="selected"<?php }?>>30</option>
								<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==40) {?>selected="selected"<?php }?>>40</option>
								<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==50) {?>selected="selected"<?php }?>>50</option>
							</select>
						</div>
					</div>
				<?php }?>
				<legend>My Account</legend>
				<div class="clearfix">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['xmpp_feature']=='y') {?>
						<div class="form-group">
							<label class="control-label col-md-4" for="xmpp_password">
								XMPP account password
							</label>
							<div class="col-md-8">
								<input type="password" name="xmpp_password" id="xmpp_password" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_prefs']->value['xmpp_password']);?>
">
							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_pages" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_pages']=='y') {?>checked="checked"<?php }?>>My pages
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_blogs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_blogs']=='y') {?>checked="checked"<?php }?>>My blogs
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_gals" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_gals']=='y') {?>checked="checked"<?php }?>>My galleries
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_msgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_msgs']=='y') {?>checked="checked"<?php }?>>My messages
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tasks']->value=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_tasks" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_tasks']=='y') {?>checked="checked"<?php }?>>My tasks
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_forum_topics" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_topics']=='y') {?>checked="checked"<?php }?>>My forum topics
							</label>
						</div>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_forum_replies" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_replies']=='y') {?>checked="checked"<?php }?>>My forum replies
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_items" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_items']=='y') {?>checked="checked"<?php }?>>My user items
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?>
						<div class="checkbox col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="mytiki_articles" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_articles']=='y') {?>checked="checked"<?php }?>>My articles
							</label>
						</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y') {?>
					<div class="form-group clearfix">
						<label class="control-label col-md-4" for="mylevel">
							My level
						</label>
						<div class="col-md-8">
							<select class="form-control" name="mylevel" id="mylevel">
								<?php  $_smarty_tpl->tpl_vars['lev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lev']->_loop = false;
 $_smarty_tpl->tpl_vars['levn'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['userlevels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lev']->key => $_smarty_tpl->tpl_vars['lev']->value) {
$_smarty_tpl->tpl_vars['lev']->_loop = true;
 $_smarty_tpl->tpl_vars['levn']->value = $_smarty_tpl->tpl_vars['lev']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mylevel']==$_smarty_tpl->tpl_vars['levn']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
				<?php }?>
				<div class="form-group">
						<label class="control-label col-md-4" for="remember_closed_rboxes">
							Keep closed remarksbox hidden
						</label>
						<div class="col-md-8">
							<input type="checkbox" name="remember_closed_rboxes" id="remember_closed_rboxes" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['remember_closed_rboxes']=='y') {?>checked="checked"<?php }?>>
							<p class="text-info">
								Remember which remarksbox (alert box) you have closed and don't show them again.<br>
							</p>
						</div>
					<label class="control-label col-md-4">
						Reset remark boxes visibility
					</label>
					<div class="col-md-8">
						<?php ob_start();
{
$_tmp2=ob_get_clean();?><?php ob_start();
}
$_tmp3=ob_get_clean();?><?php echo smarty_function_button(array('_text'=>"Reset",'_onclick'=>"if (confirm('This will reset the visibility of all the tips, notices and warning remarks boxes you have closed.')) ".$_tmp2."deleteCookie('rbox');".$_tmp3."return false;",'_class'=>'btn-sm'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="submit text-center">
					<input type="submit" class="btn btn-primary" name="new_prefs" value="Save changes">
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'||!($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin')) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Account Information")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Account Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Account Information</h2>
			<form action="tiki-user_preferences.php" method="post" class="form-horizontal">
				<input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas'||($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='admin')) {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'&&($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'||$_smarty_tpl->tpl_vars['userinfo']->value['login']=='admin')) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Information",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Leave "New password" and "Confirm new password" fields blank to keep current password
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin') {?>
						<input type="hidden" name="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
">
					<?php } else { ?>
						<div class="form-group">
							<label class="col-md-4 control-label" for="email">
								Email address:
							</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="email" id="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
">
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas'||($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='admin')) {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n') {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="pass1">
									New password:
								</label>
								<div class="col-md-8">
									<input class="form-control" type="password" name="pass1" id="pass1">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="pass2">
									Confirm new password:
								</label>
								<div class="col-md-8">
									<input class="form-control" type="password" name="pass2" id="pass2">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'||$_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="pass">
									Current password (required):
								</label>
								<div class="col-md-8">
									<input class="form-control" type="password" name="pass" id="pass">
								</div>
							</div>
						<?php }?>
					<?php }?>
					<div class="submit text-center">
						<input type="submit" class="btn btn-primary btn-sm" name="chgadmin" value="Save changes">
					</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Account Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_delete_account']->value=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Account Deletion")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Account Deletion"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="jumbotron text-center">
				<h2>Account Deletion</h2>
				<form role="form" class="form-horizontal" action="tiki-user_preferences.php" method="post" onsubmit='return confirm("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you really sure you want to delete the account %0?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
");'>
					<?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)) {?><input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
"><?php }?>
					<p>
						<div class="checkbox">
						<label for="deleteaccountconfirm">
							<input type='checkbox' name='deleteaccountconfirm' id="deleteaccountconfirm" value='1'> Check this box if you really want to delete the account
						</label>
						</div>
					</p>
					<p>
						<input type="submit" class="btn btn-danger btn-lg" name="deleteaccount" value="<?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)) {?>Delete the account: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);
} else { ?>Delete my account<?php }?>">
					</p>
				</form>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Account Deletion"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
