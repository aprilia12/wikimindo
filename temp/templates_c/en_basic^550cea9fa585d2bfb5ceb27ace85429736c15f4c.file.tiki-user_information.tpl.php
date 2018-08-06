<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 10:02:22
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-user_information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7881495765b640c0e052c96-41308527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550cea9fa585d2bfb5ceb27ace85429736c15f4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-user_information.tpl',
      1 => 1487242018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7881495765b640c0e052c96-41308527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userwatch' => 0,
    'prefs' => 0,
    'user' => 0,
    'tiki_p_messages' => 0,
    'allowMsgs' => 0,
    'infoPublic' => 0,
    'userinfo' => 0,
    'tiki_p_admin' => 0,
    'avatar' => 0,
    'user_picture_id' => 0,
    'realName' => 0,
    'gender' => 0,
    'email_isPublic' => 0,
    'scrambledEmail' => 0,
    'country' => 0,
    'user_style' => 0,
    'user_language' => 0,
    'homePage' => 0,
    'userPage_exists' => 0,
    'customfields' => 0,
    'userItem' => 0,
    'itemField' => 0,
    'user_pages' => 0,
    'user_galleries' => 0,
    'user_blogs' => 0,
    'user_blog_posts' => 0,
    'user_articles' => 0,
    'user_forum_comments' => 0,
    'user_forum_topics' => 0,
    'user_items' => 0,
    'whoviewed' => 0,
    'sent' => 0,
    'message' => 0,
    'priority' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b640c0e2101f7_26256278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b640c0e2101f7_26256278')) {function content_5b640c0e2101f7_26256278($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_mailto')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php';
if (!is_callable('smarty_modifier_countryflag')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.countryflag.php';
if (!is_callable('smarty_modifier_stringfix')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.stringfix.php';
if (!is_callable('smarty_modifier_star')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.star.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_module')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.module.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_trackeroutput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "viewuser", null); ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value,"url");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value))); $_block_repeat=true; echo smarty_block_title(array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('url'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['viewuser']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (((string)$_smarty_tpl->tpl_vars['userwatch']->value)==((string)$_smarty_tpl->tpl_vars['user']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'&&$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y'&&$_smarty_tpl->tpl_vars['allowMsgs']->value=='y') {?>
	<div class="t_navbar">
		<?php echo smarty_function_button(array('href'=>"#message",'class'=>"btn btn-default",'_text'=>"Send me a message"),$_smarty_tpl);?>

	</div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"user_information")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"user_information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Basic Data")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Basic Data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['infoPublic']->value=='y') {?>
			<h2><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
</h2>
			<div class="pull-right">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['userinfo']->value['login']==$_smarty_tpl->tpl_vars['user']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
						<a class="link tips" href="tiki-assignuser.php?assign_user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login'],"url");?>
" title=":Assign group">
							<?php echo smarty_function_icon(array('name'=>'group','align'=>"right",'alt'=>"Assign Group"),$_smarty_tpl);?>

						</a>
					<?php }?>
					<a class="link tips" href="tiki-user_preferences.php?userId=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userId'];?>
" title=":Change user preferences">
						<?php echo smarty_function_icon(array('name'=>'wrench','align'=>"right",'alt'=>"Change user preferences"),$_smarty_tpl);?>

					</a>
				<?php }?>
			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-1">

					<div class="panel panel-default">
						<div class="panel-body">
							<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Profile picture (User Icon):</div>
									<div class="col-sm-8">
										<div class="col-sm-3">
											<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']==$_smarty_tpl->tpl_vars['user']->value) {?><a href="tiki-pick_avatar.php"><?php }?>
												<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

											<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']==$_smarty_tpl->tpl_vars['user']->value) {?></a><?php }?>
										</div>
										<div class="col-sm-9">
											<?php if (isset($_smarty_tpl->tpl_vars['user_picture_id']->value)) {?>
												<div class="userpicture">
													<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value))); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"img",'fileId'=>((string)$_smarty_tpl->tpl_vars['user_picture_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												</div>
											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['realName']->value) {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Real Name:</div>
									<div class="col-sm-8"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['realName']->value);?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_gender']=='y'&&$_smarty_tpl->tpl_vars['gender']->value!='Hidden'&&$_smarty_tpl->tpl_vars['gender']->value) {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Gender:</div>
									<div class="col-sm-8"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['gender']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['email_isPublic']->value!='n'&&$_smarty_tpl->tpl_vars['userinfo']->value['email']!='') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Email:</div>
									<div class="col-sm-8"><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['userinfo']->value['email'],'text'=>$_smarty_tpl->tpl_vars['scrambledEmail']->value,'encode'=>"javascript"),$_smarty_tpl);?>
</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['email_isPublic']->value=='n'&&$_smarty_tpl->tpl_vars['userinfo']->value['email']!=''&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Email:</div>
									<div class="col-sm-8">
										<?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['userinfo']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

										<i>(non public)</i>
									</div>
								</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['country']->value)&&$_smarty_tpl->tpl_vars['country']->value!='Other') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Country:</div>
									<div class="col-sm-8"><?php echo smarty_modifier_countryflag($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['country']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme']!='n') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Theme:</div>
									<div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_language']=='y') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Language:</div>
									<div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['user_language']->value;?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['homePage']->value) {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Homepage:</div>
									<div class="col-sm-8">
										<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['homePage']->value);?>
" class="link" title="User's homepage">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['homePage']->value);?>

										</a>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_score']=='y') {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Score:</div>
									<div class="col-sm-8"><?php echo smarty_modifier_star($_smarty_tpl->tpl_vars['userinfo']->value['score']);
echo $_smarty_tpl->tpl_vars['userinfo']->value['score'];?>
</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage']=='y'&&($_smarty_tpl->tpl_vars['userPage_exists']->value||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userinfo']->value['login'])) {?>
								<div class="row margin-bottom-sm">
									<div class="col-sm-4">Personal Wiki Page:</div>
									<div class="col-sm-8">
										<?php if ($_smarty_tpl->tpl_vars['userPage_exists']->value) {?>
											<a class="link" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'],'url');
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login'],'url');?>
">
												<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

											</a>
										<?php } elseif ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>
											<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];
echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

											<a class="link" href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'],'url');
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['login'],'url');?>
"
													title="Create Page">?</a>
										<?php } else { ?>&nbsp;<?php }?>
									</div>
								</div>
							<?php }?>

							<div class="row margin-bottom-sm">
								<div class="col-sm-4">Last login:</div>
								<div class="col-sm-8"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']);?>
</div>
							</div>

							
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
									<div class="row margin-bottom-sm">
										<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['label'];?>
:</div>
										<div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['value'];?>
</div>
									</div>
								<?php }?>
							<?php endfor; endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_friends']=='y') {?>
			<h3>Friendship Network</h3>
				<?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>
			<h4>Your relationship with other users</h4>
					<?php echo smarty_function_module(array('module'=>'friend_list','nobox'=>'y'),$_smarty_tpl);?>

				<?php } else { ?>
			<h4>Relationship of this user to you</h4>
			<div id="friendship"></div>
			<div id="addfriend"></div>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$('#friendship').load("tiki-user-info?username=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
 .friendship");
						$('#addfriend').load("tiki-user-info?username=<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
 .add-friend");
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>

		<?php } else { ?>
			<div>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Private")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Private"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The user has chosen to make his information private<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Private"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Basic Data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_tracker_infos']&&$_smarty_tpl->tpl_vars['infoPublic']->value=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Additional Information")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Additional Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Additional Information – <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
</h2>
			<div class="panel panel-default">
				<div class="panel-body">

					<div class="clearfix">
						<div class="col-sm-8">
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']==$_smarty_tpl->tpl_vars['user']->value) {?>
								<a class="link tips" href="tiki-view_tracker_item.php?view=+user&amp;cookietab=2" title=":Change user information">
									<?php echo smarty_function_icon(array('name'=>'wrench','align'=>"right",'alt'=>"Change user information"),$_smarty_tpl);?>

								</a>
							<?php }?>
						</div>
					</div>

					<?php  $_smarty_tpl->tpl_vars['itemField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userItem']->value['field_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemField']->key => $_smarty_tpl->tpl_vars['itemField']->value) {
$_smarty_tpl->tpl_vars['itemField']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['itemField']->value['value']!=''||!empty($_smarty_tpl->tpl_vars['itemField']->value['categs'])||!empty($_smarty_tpl->tpl_vars['itemField']->value['links'])) {?>
							<div class="row">
								<div class="col-sm-4" style="width: 25%"><?php echo $_smarty_tpl->tpl_vars['itemField']->value['name'];?>
:</div>
								<div class="col-sm-8" style="width: 75%"><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['itemField']->value,'item'=>$_smarty_tpl->tpl_vars['itemField']->value),$_smarty_tpl);?>
</div>
							</div>
						<?php }?>
					<?php } ?>

				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Additional Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_display_my_to_others']=='y'&&$_smarty_tpl->tpl_vars['infoPublic']->value=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Contribution")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Contribution"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="panel panel-default">
				<div class="panel-body">
					<?php if ((count($_smarty_tpl->tpl_vars['user_pages']->value)>0)||(count($_smarty_tpl->tpl_vars['user_galleries']->value)>0)||(count($_smarty_tpl->tpl_vars['user_blogs']->value)>0)||(count($_smarty_tpl->tpl_vars['user_blog_posts']->value)>0)||(count($_smarty_tpl->tpl_vars['user_articles']->value)>0)||(count($_smarty_tpl->tpl_vars['user_forum_comments']->value)>0)||(count($_smarty_tpl->tpl_vars['user_forum_topics']->value)>0)||(count($_smarty_tpl->tpl_vars['user_items']->value)>0)) {?>
						<h2 class="text-center">User <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</h2>
						<p><em>has contributed to the following content…</em></p>
					<?php } else { ?>
						<h2 class="text-center">User <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
</h2>
						<p><em>has not contributed to any content yet</em></p>
					<?php }?>

					<?php if (count($_smarty_tpl->tpl_vars['user_pages']->value)>0) {?>
						<h3>Wiki Pages</h3>
						<div class="table normal">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']);?>
" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],"url");?>
">
											<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],40,"(...)"));?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_galleries']->value)>0) {?>
						<h3>Image Galleries</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'],'gallery');?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_blogs']->value)>0) {?>
						<h3>Blogs</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_blogs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['blogId'],'blog');?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_blog_posts']->value)>0) {?>
						<h3>Blogs Posts</h3>

						<div class="table normal">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_blog_posts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blog_posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['postId'],'blogpost');?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_blog_posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_articles']->value)>0) {?>
						<h3>Articles</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_articles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article');?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_forum_comments']->value)>0) {?>
						<h3>Forum comments</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_forum_comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['user_forum_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'];?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_forum_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_forum_topics']->value)>0) {?>
						<h3>Forum topics</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_forum_topics']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'];?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['user_items']->value)>0) {?>
						<h3>User Items</h3>
						<div class="table normal">

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<div>
									<div>
										<a class="link" title="View" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['trackerId'];?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['itemId'];?>
">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
 : <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>

										</a>
									</div>
								</div>
							<?php endfor; endif; ?>
						</div>
					<?php }?>

				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Contribution"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_who_viewed_my_stuff']=='y'&&!empty($_smarty_tpl->tpl_vars['user']->value)&&($_smarty_tpl->tpl_vars['prefs']->value['user_who_viewed_my_stuff_show_others']=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userinfo']->value['login']||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y")&&$_smarty_tpl->tpl_vars['infoPublic']->value=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Who Looks at Items?")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Who Looks at Items?"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="text-center"><?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userinfo']->value['login']) {?>Who Looks at Your Items?<?php } else { ?>Who Looks at His or Her Items?<?php }?></h2>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['whoviewed']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<div class="row">
							<div class="form col-sm-4">
								<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['whoviewed']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['whoviewed']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastViewed']);?>

							</div>
							<div class="form col-sm-8">
								<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['whoviewed']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['link']);?>
">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['whoviewed']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['whoviewed']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['objectType']);?>
)
								</a>
							</div>
						</div>
					<?php endfor; endif; ?>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Who Looks at Items?"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y'&&$_smarty_tpl->tpl_vars['allowMsgs']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Send Me A Message")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Send Me A Message"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div id="message">
				<?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

				<?php } else { ?>
					<h2 class="text-center">Send me a message !</h2>
					<form method="post" action="tiki-user_information.php" name="f" class="form-horizontal">
						<input type="hidden" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
">
						<input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
">

						<p>The following message will be sent to user <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
…</p>



						<div class="form-group">
							<label class="col-sm-2 control-label" for="priority">Priority</label>
							<div class="col-sm-10">
								<select name="priority" id="priority" class="form-control">
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['priority']->value==1) {?>selected="selected"<?php }?>>1: Lowest</option>
									<option value="2" <?php if ($_smarty_tpl->tpl_vars['priority']->value==2) {?>selected="selected"<?php }?>>2: Low</option>
									<option value="3" <?php if ($_smarty_tpl->tpl_vars['priority']->value==3) {?>selected="selected"<?php }?>>3: Normal</option>
									<option value="4" <?php if ($_smarty_tpl->tpl_vars['priority']->value==4) {?>selected="selected"<?php }?>>4: High</option>
									<option value="5" <?php if ($_smarty_tpl->tpl_vars['priority']->value==5) {?>selected="selected"<?php }?>>5: Very High</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="subject">Subject</label>
							<div class="col-sm-10">
								<input type="text" name="subject" id="subject" value="" maxlength="255" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="message">Message Body</label>
							<div class="col-sm-10">
								<textarea rows="20" class="form-control" name="body" id="message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-push-2">
								<input type="submit" class="btn btn-primary" name="send" value="Send">
								<input type="checkbox" name="replytome" id="replytome">
								<label for="replytome">
									Reply-to my email
									<?php echo smarty_function_help(array('url'=>"User+Information",'desc'=>"Reply-to my email:The user will be able to reply to you directly via email."),$_smarty_tpl);?>

								</label>
								<input type="checkbox" name="bccme" id="bccme">
								<label for="bccme">
									Send me a copy
									<?php echo smarty_function_help(array('url'=>"User+Information",'desc'=>"Send me a copy:You will be sent a copy of this email."),$_smarty_tpl);?>

								</label>
							</div>
						</div>
					</form>
				<?php }?>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Send Me A Message"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"user_information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
