<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:11
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-view_forum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387456515b67ef2bba1965-22109150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44c8d5656339dd60386d1ba09746893c21076d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-view_forum.tpl',
      1 => 1502453510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387456515b67ef2bba1965-22109150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'ts' => 0,
    'forum_info' => 0,
    'tiki_p_forum_post_topic' => 0,
    'forumId' => 0,
    'tiki_p_admin_forum' => 0,
    'comments_threadId' => 0,
    'all_forums' => 0,
    'js' => 0,
    'user' => 0,
    'user_watching_forum' => 0,
    'user_watching_forum_topic_and_thread' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_forum_lock' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'comment_preview' => 0,
    'comments_preview_title' => 0,
    'comments_preview_data' => 0,
    'openpost' => 0,
    'warning' => 0,
    'comment_title' => 0,
    'comments_threshold' => 0,
    'comments_offset' => 0,
    'thread_sort_mode' => 0,
    'comments_per_page' => 0,
    'comment_topictype' => 0,
    'comment_topicsmiley' => 0,
    'comment_topicsummary' => 0,
    'comment_data' => 0,
    'tiki_p_forum_attach' => 0,
    'tiki_p_freetags_tag' => 0,
    'comments_coms' => 0,
    'queued' => 0,
    'reported' => 0,
    'comments_cant' => 0,
    'cntcol' => 0,
    'tiki_p_ratings_view_results' => 0,
    'userinfo' => 0,
    'newtopic' => 0,
    'sep' => 0,
    'topics_find' => 0,
    'comments_find' => 0,
    'tiki_p_forum_post' => 0,
    'libeg' => 0,
    'liend' => 0,
    'last_comments' => 0,
    'idt' => 0,
    'show_archived' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef2bde3bf5_46386244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef2bde3bf5_46386244')) {function content_5b67ef2bde3bf5_46386244($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_addonnavbar')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.addonnavbar.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_modifier_addongroupname')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.addongroupname.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
if (!is_callable('smarty_function_rating_result')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result.php';
if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_categoryselector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.categoryselector.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
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
	<?php echo smarty_modifier_addonnavbar($_smarty_tpl->tpl_vars['forum_info']->value['name'],'forum');?>

	
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"forums",'admpage'=>"forums",'url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forum_info']->value['forumId'],'forum'))); $_block_repeat=true; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums",'url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forum_info']->value['forumId'],'forum')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['forum_info']->value['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums",'url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forum_info']->value['forumId'],'forum')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	

	<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['show_description']=='y') {?>
		<div class="description help-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['forum_info']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php }?>

	<div class="t_navbar margin-bottom-md">
		<?php $_smarty_tpl->tpl_vars['thisforum_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['forum_info']->value['forumId'], null, 0);?>
		<?php if (($_smarty_tpl->tpl_vars['tiki_p_forum_post_topic']->value=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss']!='y'||$_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['forumId']->value]!=$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id']))||$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
			<?php if (!isset($_smarty_tpl->tpl_vars['comments_threadId']->value)||$_smarty_tpl->tpl_vars['comments_threadId']->value==0) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-view_forum.php?openpost=1&amp;forumId=".((string)$_smarty_tpl->tpl_vars['thisforum_info']->value)."&amp;comments_threadId=0&amp;comments_threshold=".((string)$_smarty_tpl->tpl_vars['comments_threshold']->value)."&amp;comments_offset=".((string)$_smarty_tpl->tpl_vars['comments_offset']->value)."&amp;thread_sort_mode=".((string)$_smarty_tpl->tpl_vars['thread_sort_mode']->value)."&amp;comments_per_page=".((string)$_smarty_tpl->tpl_vars['comments_per_page']->value),'_onclick'=>"$"."('#forumpost').show();return false;",'_icon_name'=>"create",'_type'=>"default",'class'=>"btn btn-default",'_text'=>"New Topic"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>"tiki-view_forum.php?openpost=1&amp;forumId=".((string)$_smarty_tpl->tpl_vars['thisforum_info']->value)."&amp;comments_threadId=0&amp;comments_threshold=".((string)$_smarty_tpl->tpl_vars['comments_threshold']->value)."&amp;comments_offset=".((string)$_smarty_tpl->tpl_vars['comments_offset']->value)."&amp;thread_sort_mode=".((string)$_smarty_tpl->tpl_vars['thread_sort_mode']->value)."&amp;comments_per_page=".((string)$_smarty_tpl->tpl_vars['comments_per_page']->value),'_onclick'=>"$"."('#forumpost').show();return false;",'_icon_name'=>"create",'_type'=>"link",'class'=>"btn btn-link",'_text'=>"New Topic"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_forums.php?forumId=".((string)$_smarty_tpl->tpl_vars['thisforum_info']->value)."&amp;cookietab=2#content_admin_forums1-2",'_icon_name'=>"edit",'_type'=>"link",'class'=>"btn btn-link",'_text'=>"Edit Forum"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||!isset($_smarty_tpl->tpl_vars['all_forums']->value)||count($_smarty_tpl->tpl_vars['all_forums']->value)>1) {?>
			
			<?php echo smarty_function_button(array('href'=>"tiki-forums.php",'_icon_name'=>"list",'_type'=>"link",'class'=>"btn btn-link",'_text'=>"Forum List"),$_smarty_tpl);?>

		<?php }?>

		<div class="btn-group pull-right">
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
				<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li class="dropdown-title">
					Forum actions
				</li>
				<li class="divider"></li>
				<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['user_watching_forum']->value=='n') {?>
							<a href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_event=forum_post_topic&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_action=add">
								<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor topics
							</a>
						<?php } else { ?>
							<a href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_event=forum_post_topic&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_action=remove">
								<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring topics
							</a>
						<?php }?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['user_watching_forum_topic_and_thread']->value=='n') {?>
							<a href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_event=forum_post_topic_and_thread&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_action=add">
								<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor topics and threads
							</a>
						<?php } else { ?>
							<a class="pull-right tips" href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_event=forum_post_topic_and_thread&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&amp;watch_action=remove">
								<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring topics and threads
							</a>
						<?php }?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
					<li>
						<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value,"url");?>
&amp;watch_event=forum_post_topic&amp;objectType=forum&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_forum.php?forumId=').($_smarty_tpl->tpl_vars['forumId']->value),"url");?>
">
							<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor topics
						</a>
					</li>
					<li>
						<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value,"url");?>
&amp;watch_event=forum_post_topic_and_thread&amp;objectType=forum&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_forum.php?forumId=').($_smarty_tpl->tpl_vars['forumId']->value),"url");?>
">
							<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor topics and threads
						</a>
					</li>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value)&&$_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['is_locked']=='y') {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('lock'=>'n','_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('lock'=>'n','_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Unlock
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('lock'=>'n','_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('lock'=>'y','_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('lock'=>'y','_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Lock
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('lock'=>'y','_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_forum']=='y') {?>
					<li>
						<a href="tiki-forum_rss.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
">
							<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 RSS feed
						</a>
					</li>
				<?php }?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y') {?>
			<div class="categbar">
				Watched by categories:
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>
					&nbsp;
				<?php endfor; endif; ?>
			</div>
		<?php }?>
	</div>
	<div class="breadcrumb">
		<a class="link" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>forums<?php } else { ?>tiki-forums.php<?php }?>">Forums</a>
		<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>

		<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
"><?php echo smarty_modifier_escape(smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['forum_info']->value['name']));?>
</a>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_forum_post_topic']->value=='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['comment_preview']->value=='y') {?>
			<br><br>
			<b>Preview</b>
			<div class="commentscomment">
				<div class="commentheader">
					<table>
						<tr>
							<td>
								<div class="commentheader">
									<span class="commentstitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_preview_title']->value);?>
</span>
									<br>
									by <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>

								</div>
							</td>
							<td valign="top" align="right">
								<div class="commentheader">
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class="commenttext">
					<?php echo $_smarty_tpl->tpl_vars['comments_preview_data']->value;?>

					<br>
				</div>
			</div>
		<?php }?>


		<div id="forumpost" style="display:<?php if ($_smarty_tpl->tpl_vars['comments_threadId']->value>0||$_smarty_tpl->tpl_vars['openpost']->value=='y'||$_smarty_tpl->tpl_vars['warning']->value=='y'||!empty($_smarty_tpl->tpl_vars['comment_title']->value)||!empty($_REQUEST['comments_previewComment'])) {?>block<?php } else { ?>none<?php }?>;">
			<?php if ($_smarty_tpl->tpl_vars['comments_threadId']->value>0) {?>
				Editing: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_title']->value);?>
 (<a class="forumbutlink" href="tiki-view_forum.php?openpost=1&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
&amp;comments_threadId=0&amp;comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
&amp;thread_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
">Post New</a>)
			<?php }?>
			<form method="post" enctype="multipart/form-data" action="tiki-view_forum.php" id="editpageform">
				<input type="hidden" name="comments_offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_offset']->value);?>
">
				<input type="hidden" name="comments_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threadId']->value);?>
">
				<input type="hidden" name="comments_threshold" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threshold']->value);?>
">
				<input type="hidden" name="thread_sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_sort_mode']->value);?>
">
				<input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="comments_title">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="comments_title" id="comments_title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_title']->value);?>
">
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['forum_use_password']!='n') {?>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="comment_password">Password</label>
							<div class="col-sm-10">
								<input type="password" name="comment_password" id="comment_password" class="form-control">
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||$_smarty_tpl->tpl_vars['forum_info']->value['topic_smileys']=='y') {?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="comments_topictype">Type</label>
						<div class="col-sm-2">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
									<select name="comment_topictype" id="comment_topictype" class="form-control comment_topictype">
										<option value="n" <?php if ($_smarty_tpl->tpl_vars['comment_topictype']->value=='n') {?>selected="selected"<?php }?>>Normal</option>
										<option value="a" <?php if ($_smarty_tpl->tpl_vars['comment_topictype']->value=='a') {?>selected="selected"<?php }?>>Announce</option>
										<option value="h" <?php if ($_smarty_tpl->tpl_vars['comment_topictype']->value=='h') {?>selected="selected"<?php }?>>Hot</option>
										<option value="s" <?php if ($_smarty_tpl->tpl_vars['comment_topictype']->value=='s') {?>selected="selected"<?php }?>>Sticky</option>
										<option value="d" <?php if ($_smarty_tpl->tpl_vars['comment_topictype']->value=='d') {?>selected="selected"<?php }?>>Deliberation</option>
									</select>
								<?php }?>
							</div>
							<div class="col-sm-2">
								<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topic_smileys']=='y') {?>
									<select name="comment_topicsmiley" class="form-control comment_topicsmiley">
										<option value="" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='') {?>selected="selected"<?php }?>>no feeling</option>
										<option value="icon_frown.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_frown.gif') {?>selected="selected"<?php }?>>frown</option>
										<option value="icon_exclaim.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_exclaim.gif') {?>selected="selected"<?php }?>>exclaim</option>
										<option value="icon_idea.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_idea.gif') {?>selected="selected"<?php }?>>idea</option>
										<option value="icon_mad.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_mad.gif') {?>selected="selected"<?php }?>>mad</option>
										<option value="icon_neutral.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_neutral.gif') {?>selected="selected"<?php }?>>neutral</option>
										<option value="icon_question.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_question.gif') {?>selected="selected"<?php }?>>question</option>
										<option value="icon_sad.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_sad.gif') {?>selected="selected"<?php }?>>sad</option>
										<option value="icon_smile.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_smile.gif') {?>selected="selected"<?php }?>>happy</option>
										<option value="icon_wink.gif" <?php if ($_smarty_tpl->tpl_vars['comment_topicsmiley']->value=='icon_wink.gif') {?>selected="selected"<?php }?>>wink</option>
									</select>
								<?php }?>
							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topic_summary']=='y') {?>
						<div class="form-group">
							<label class="col-sm-2 control-label">Summary</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="comment_topicsummary" id="comment_topicsummary" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_topicsummary']->value);?>
" maxlength="240">
							</div>
						</div>
					<?php }?>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="editpost">Message</label>
						<div class="col-sm-10">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('id'=>"editpost",'class'=>"form-control",'name'=>"comments_data",'_simple'=>"y",'codemirror'=>"y",'syntax'=>"tiki",'_toolbars'=>$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_parse'])); $_block_repeat=true; echo smarty_block_textarea(array('id'=>"editpost",'class'=>"form-control",'name'=>"comments_data",'_simple'=>"y",'codemirror'=>"y",'syntax'=>"tiki",'_toolbars'=>$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_parse']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['comment_data']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('id'=>"editpost",'class'=>"form-control",'name'=>"comments_data",'_simple'=>"y",'codemirror'=>"y",'syntax'=>"tiki",'_toolbars'=>$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_parse']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
					<?php if (($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_all')||($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_admin'&&$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y')||($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_perm'&&$_smarty_tpl->tpl_vars['tiki_p_forum_attach']->value=='y')) {?>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="userfile1">Attach a file</label>
							<div class="col-sm-10">
								<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['att_max_size']);?>
">
								<input name="userfile1" id="userfile1" class="form-control" type="file">Maximum size: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['forum_info']->value['att_max_size']);?>

							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
						<?php echo $_smarty_tpl->getSubTemplate ('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
					<?php echo '<script'; ?>
>
						function showDeliberationItemRating(me, btn, input, ratings) {
							btn.find('.deliberationConfigureItemRating').remove();
							btn.append(me.find('div.deliberationConfigureItemRating[data-val="' + input.val() + '"]').clone());
						}

						function configureDeliberationItemRatings(me) {
							me = $(me);
							var btn = me.find('.deliberationConfigureItemRatings'),
								input = btn.next('input.deliberatioRatingOverrideSelector'),
								dialog = btn.prev('div.deliberationItemRatings').clone(),
								ratings = dialog.find('.deliberationConfigureItemRating');

							showDeliberationItemRating(me, btn, input, ratings);

							btn.click(function() {


								ratings
									.hover(function() {
										$(this).addClass('ui-statue-hover');
									},function() {
										$(this).removeClass('ui-statue-hover');
									})
									.click(function() {
										ratings.removeClass('ui-state-highlight');
											$(this).addClass('ui-state-highlight');
									});

								ratings.filter('[data-val="' + input.val() + '"]').addClass('ui-state-highlight');

								var btns = {};
								btns[tr('Ok')] = function() {
									input.val(dialog.find('div.deliberationConfigureItemRating.ui-state-highlight').data('val'));
									showDeliberationItemRating(me, btn, input, ratings);
									dialog.dialog('close');
								};

								btns[tr('Cancel')] = function() {
									dialog.dialog('close');
								};

								dialog.dialog({
									modal: true,
									title: tr('Configure Deliberation Item Ratings'),
									buttons: btns
								});

								return false;
							});
						}
					<?php echo '</script'; ?>
>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$('select.comment_topictype')
							.change(function() {
								if ($('select.comment_topictype').val() == 'd') {
									$('tr.forum_deliberation').show();
								} else {
									$('tr.forum_deliberation').hide();
								}
							})
							.change();

						var itemMaster;
						$('.forum_deliberation_add_item').click(function() {
							var thisItem;
							if (!itemMaster) {
								$.tikiModal(tr('Loading...'));
								$.get('tiki-ajax_services', {controller: 'comment', action: "deliberation_item"}, function(itemInput) {
									itemMaster = itemInput;
									thisItem = $(itemMaster).insertBefore('div.forum_deliberation_items_toolbar');
									configureDeliberationItemRatings(thisItem);
									$.tikiModal();
								});
							} else {
								thisItem = $(itemMaster).insertBefore('div.forum_deliberation_items_toolbar');
								configureDeliberationItemRatings(thisItem);
							}

							return false;
						});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<div class="form-group forum_deliberation" style="display: none;">
						<label class="col-sm-2 control-label">Deliberation</label>
						<div class="col-sm-10 forum_deliberation_items">
							<div class="forum_deliberation_items_toolbar">
								<?php echo smarty_function_button(array('href'=>"#",'_class'=>"forum_deliberation_add_item",'_text'=>"Add Deliberation Item"),$_smarty_tpl);?>

							</div>
						</div>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
						<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0);?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
						<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&(!isset($_smarty_tpl->tpl_vars['comments_threadId']->value)||$_smarty_tpl->tpl_vars['comments_threadId']->value==0)) {?>
						<div class="form-group">
							<label class="col-sm-2 control-label">Watch for replies</label>
							<div class="col-sm-10">
								<input type="radio" name="set_thread_watch" value="y" id="thread_watch_yes" checked="checked">
								<label for="thread_watch_yes">Send me an email when someone replies to my topic</label>
								<br>
								<input type="radio" name="set_thread_watch" value="n" id="thread_watch_no">
								<label for="thread_watch_no">Don't send me any emails</label>
							</div>
						</div>
					<?php }?>
					<?php if (empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
						<div class="form-group">
							<label for="anonymous_email" class="col-sm-2 control-label">If you would like to be notified when someone replies to this topic<br>please tell us your e-mail address:</label></td>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="anonymous_email" name="anonymous_email">
							</div>
						</div>
					<?php }?>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="anonymous_name">Post</label>
						<div class="col-sm-10">
							<?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>
								Enter your name:&nbsp;<input type="text" maxlength="50" id="anonymous_name" name="anonymous_name">
							<?php }?>
							<input type="submit" class="btn btn-primary btn-sm" name="comments_postComment" value="Post" <?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>onclick="setCookie('anonymous_name',document.getElementById('anonymous_name').value);needToConfirm=false;"<?php }?>>
							<input type="submit" class="btn btn-default btn-sm" name="comments_previewComment" value="Preview" <?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>onclick="setCookie('anonymous_name',document.getElementById('anonymous_name').value);needToConfirm=false;"<?php }?>>
							<input type="submit" class="btn btn-default btn-sm" name="comments_postCancel" value="Cancel" <?php if ($_smarty_tpl->tpl_vars['comment_preview']->value!='y') {?>onclick="hide('forumpost');window.location='#header';return false;"<?php }?>>
						</div>
					</div>
				</div>
			</form>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Editing posts")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Editing posts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Use wiki syntax when editing the content of posts - HTML is not allowed. Please click on the following link for documentation on wiki syntax: <?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[http://doc.tiki.org/Wiki+Syntax]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Editing posts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div> <!-- end forumpost -->
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_content_search']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {?>
		<div class="row margin-bottom-md">
		<div class="col-md-5 col-md-offset-7">
			<form id="search-form" class="form" role="form" method="get" action="tiki-search<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_local_tiki_search']=='y') {?>index<?php } else { ?>results<?php }?>.php">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

						</span>
						<input name="highlight" id="findinforums" type="text" class="form-control" placeholder="Find...">
						<div class="input-group-btn">
							<input type="hidden" name="where" value="forums">
							<input type="hidden" name="forumId" value="<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
">
							<input type="submit" class="wikiaction btn btn-default" name="search" value="Find">
						</div>
					</div>
				</div>
			</form>
		</div>
		</div>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'&&(count($_smarty_tpl->tpl_vars['comments_coms']->value)>0||$_smarty_tpl->tpl_vars['queued']->value>0||$_smarty_tpl->tpl_vars['reported']->value>0)) {?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Moderator actions on selected topics
		</div>
		<div class="panel-body">
			<div class="pull-left">
				<?php if (count($_smarty_tpl->tpl_vars['comments_coms']->value)>1) {?>
					<button
						type="submit"
						form="view_forum"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'merge_topic'),$_smarty_tpl);?>
"
						title=":Merge"
						class="btn btn-default btn-sm tips confirm-submit"
					>
						<?php echo smarty_function_icon(array('name'=>"merge"),$_smarty_tpl);?>

					</button>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['all_forums']->value)>1&&count($_smarty_tpl->tpl_vars['comments_coms']->value)>0) {?>
					<button
						type="submit"
						form="view_forum"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'move_topic'),$_smarty_tpl);?>
"
						title=":Move"
						class="btn btn-default btn-sm tips confirm-submit"
					>
						<?php echo smarty_function_icon(array('name'=>"move"),$_smarty_tpl);?>

					</button>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['comments_coms']->value)>0) {?>
					<button
						type="submit"
						form="view_forum"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'lock_topic'),$_smarty_tpl);?>
"
						title=":Lock"
						class="btn btn-default btn-sm tips confirm-submit"
					>
						<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>

					</button>
					<button
						type="submit"
						form="view_forum"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'unlock_topic'),$_smarty_tpl);?>
"
						title=":Unlock"
						class="btn btn-default btn-sm tips confirm-submit"
					>
						<?php echo smarty_function_icon(array('name'=>"unlock"),$_smarty_tpl);?>

					</button>
					<button
						type="submit"
						form="view_forum"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic'),$_smarty_tpl);?>
"
						title=":Delete"
						class="btn btn-default btn-sm tips confirm-submit"
					>
						<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

					</button>
				<?php }?>
			</div>
			<div class="pull-right">
				<?php if ($_smarty_tpl->tpl_vars['reported']->value>0) {?>
					<a class="btn btn-default btn-sm tips" href="tiki-forums_reported.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
" title=":Reported messages">Reported <span class="badge"><?php echo $_smarty_tpl->tpl_vars['reported']->value;?>
<span></a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['queued']->value>0) {?>
					<a class="btn btn-default btn-sm tips" href="tiki-forum_queue.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
" title=":Queued messages">Queued <span class="badge"><?php echo $_smarty_tpl->tpl_vars['queued']->value;?>
</span></a>
				<?php }?>
			</div>
		</div>
	</div>
<?php }?>
<form id="view_forum" method="post">
	<input type="hidden" name="comments_offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_offset']->value);?>
">
	<input type="hidden" name="comments_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threadId']->value);?>
">
	<input type="hidden" name="comments_threshold" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threshold']->value);?>
">
	<input type="hidden" name="thread_sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_sort_mode']->value);?>
">
	<input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
">
	
	<div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?> ts-wrapperdiv" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>>
		<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover table-forum" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_cant']->value);?>
">
			
			<thead>
				<tr>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable(0, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
						<th id="checkbox">
							<?php echo smarty_function_select_all(array('checkbox_names'=>'forumtopic[]'),$_smarty_tpl);?>

						</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<th id="type"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'type')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topic_smileys']=='y') {?>
						<th id="smiley"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'smiley')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'smiley'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Emot<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'smiley'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<th id="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'title')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_replies']=='y') {?>
						<th id="replies"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'replies')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'replies'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Replies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'replies'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_reads']=='y') {?>
						<th id="hits"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
						<th id="rating">Rating <br/>(avg/max)</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rating_results_detailed']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['rating_results_detailed_percent']!='y') {?>
							<th id="rating2">Detailed results <br/>(counts)</th>
							<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['rating_results_detailed']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['rating_results_detailed_percent']=='y') {?>
							<th id="rating3">Detailed results <br/>(counts/%)</th>
							<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_pts']=='y') {?>
						<th id="average"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'average')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'average'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
pts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'average'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost']=='y'||$_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost_avatar']=='y') {?>
						<th id="lastpost"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'lastPost')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'lastPost'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'lastPost'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_author']=='y'||$_smarty_tpl->tpl_vars['forum_info']->value['topics_list_author_avatar']=='y') {?>
						<th id="poster"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'userName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'userName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'thread_sort_mode','_sort_field'=>'userName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['att_list_nb']=='y') {?>
						<th id="atts">Files</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
						<th id="lang">Language</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_category_selector_in_list']=='y') {?>
						<th id="category">Category</th>
						<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<?php }?>
					<th id="actions"></th>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
				</tr>
			</thead>
			
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments_coms']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value&&$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPost']>$_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']) {?>
						<?php $_smarty_tpl->tpl_vars["newtopic"] = new Smarty_variable("_new", null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["newtopic"] = new Smarty_variable('', null, 0);?>
					<?php }?>
					
					<tr>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
							<td class="checkbox-cell">
								<input type="checkbox" name="forumtopic[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId']);?>
" <?php if (isset($_REQUEST['forumtopic'])&&in_array($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'],$_REQUEST['forumtopic'])) {?>checked="checked"<?php }?>>
							</td>
						<?php }?>
						<td class="icon">
							<?php if ($_smarty_tpl->tpl_vars['newtopic']->value!='') {?>
								<?php $_smarty_tpl->tpl_vars['nticon'] = new Smarty_variable($_smarty_tpl->tpl_vars['newtopic']->value, null, 0);?>
								<?php $_smarty_tpl->tpl_vars['ntalt'] = new Smarty_variable("-New", null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='n') {?>
								Normal
							<?php } elseif ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='a') {?>
								Announce
							<?php } elseif ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='h') {?>
								Hot
							<?php } elseif ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='s') {?>
								Sticky
							<?php } elseif ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='l') {?>
								Locked
							<?php } elseif ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=='d') {?>
								Deliberation
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['locked']=='y') {?>
								<?php echo smarty_function_icon(array('name'=>"lock",'title'=>":Topic locked",'class'=>"tips"),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['forum_info']->value['is_locked']=='y') {?>
								<?php echo smarty_function_icon(array('name'=>"lock",'title'=>":Forum locked",'class'=>"tips"),$_smarty_tpl);?>

							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topic_smileys']=='y') {?>
							<td class="icon">
								<?php if (strlen($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['smiley'])>0) {?>
									<img src='img/smiles/<?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['smiley'];?>
'>
								<?php } else { ?>
									&nbsp;<?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['smiley'];?>

								<?php }?>
							</td>
						<?php }?>

						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']==='y') {
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('?', null, 0);
} else {
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('&amp;', null, 0);
}?>
							<a <?php if ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['is_marked']) {?>class="forumnameread"<?php } else { ?>class="forumname"<?php }?> href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'],'forumthread');
echo $_smarty_tpl->tpl_vars['sep']->value;?>
topics_offset=<?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['comments_offset']->value,'y'=>$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['comments_threshold']->value) {?>&amp;topics_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;
}
if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value!=$_smarty_tpl->tpl_vars['forum_info']->value['topicOrdering']) {?>&amp;topics_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;
}
if (isset($_smarty_tpl->tpl_vars['topics_find']->value)&&$_smarty_tpl->tpl_vars['topics_find']->value) {?>&amp;topics_find=<?php echo $_smarty_tpl->tpl_vars['comments_find']->value;
}?>">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topic_summary']=='y') {?>
								<div class="subcomment">
									<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['summary'],240,"...",true));?>

								</div>
							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_replies']=='y') {?>
							<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['replies'];?>
</span></td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_reads']=='y') {?>
							<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['hits'];?>
</span></td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
							<td class="integer"><?php echo smarty_function_rating_result_avg(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId']),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rating_results_detailed']=='y') {?>
								<td class="text"><?php echo smarty_function_rating_result(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId']),$_smarty_tpl);?>
</td>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_pts']=='y') {?>
							<td class="integer"><span class="badge"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['average']);?>
</span></td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost']=='y') {?>
							<td class="text">
								<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost_avatar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
									<div style="float:left;padding-right:2px"><?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPostData']['userName']);?>
</div>
								<?php }?>
								<div style="float:left;">
									<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPost']);?>
 
									<?php if ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['replies']) {?>
										<br>
										<small><?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost_title']=='y') {?><i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPostData']['title']);?>
</i> <?php }?>by <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPostData']['userName']);?>
</small>
									<?php }?>
								</div>
							</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_lastpost_avatar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
							<td class="text">
								<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastPostData']['userName']);?>

							</td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_author']=='y') {?>
							<td class="text">
								<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_author_avatar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
									<div style="float:left;padding-right:2px">
										<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName']);?>

									</div>
								<?php }?>
								<div style="float:left">
									<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName']);?>
</td>
								</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['forum_info']->value['topics_list_author_avatar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
							<td class="text">
								<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName']);?>

							</td>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['att_list_nb']=='y') {?>
							<td style="text-align:center;">
								<?php if (!empty($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['nb_attachments'])) {?><a href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;view_atts=y#attachments" title="Attachments"><?php }?>
								<span>
									<?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['nb_attachments'];?>

								</span>
								<?php if (!empty($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['nb_attachments'])) {?></a><?php }?>
							</td>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumLanguage'];?>

							</td>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_category_selector_in_list']=='y') {?>
							<td><?php echo smarty_function_categoryselector(array('type'=>"forum post",'object'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'],'categories'=>$_smarty_tpl->tpl_vars['prefs']->value['forum_available_categories']),$_smarty_tpl);?>
</td>
						<?php }?>

						<td class="text" nowrap="nowrap">
							<?php $_smarty_tpl->_capture_stack[0][] = array('view_forum_actions', null, null); ob_start(); ?>
								<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName']==$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y'))&&$_smarty_tpl->tpl_vars['forum_info']->value['is_locked']!='y'&&$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['locked']!='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_forum.php?openpost=1&amp;comments_threadId=<?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
&amp;comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
&amp;thread_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_topics_archiving']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {
if ($_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['archived']=='y') {?><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'unarchive_topic','forumId'=>$_tmp1,'comments_parentId'=>$_tmp2,'comments_offset'=>$_tmp3,'thread_sort_mode'=>$_tmp4,'comments_per_page'=>$_tmp5),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'file-archive-open','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Unarchive"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else { ?><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp10=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'archive_topic','forumId'=>$_tmp6,'comments_parentId'=>$_tmp7,'comments_offset'=>$_tmp8,'thread_sort_mode'=>$_tmp9,'comments_per_page'=>$_tmp10),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'file-archive','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Archive"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp15=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic','forumId'=>$_tmp11,'forumtopic'=>$_tmp12,'comments_offset'=>$_tmp13,'thread_sort_mode'=>$_tmp14,'comments_per_page'=>$_tmp15),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['view_forum_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['view_forum_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
					
				<?php endfor; else: ?>
					<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']||($_smarty_tpl->tpl_vars['ts']->value['enabled']&&$_smarty_tpl->tpl_vars['ts']->value['ajax'])) {?>
						<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>"No topics found"),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>"Retrieving topics..."),$_smarty_tpl);?>

					<?php }?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</form>
<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['comments_cant']->value,'step'=>$_smarty_tpl->tpl_vars['comments_per_page']->value,'offset'=>$_smarty_tpl->tpl_vars['comments_offset']->value,'offset_arg'=>'comments_offset')); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['comments_cant']->value,'step'=>$_smarty_tpl->tpl_vars['comments_per_page']->value,'offset'=>$_smarty_tpl->tpl_vars['comments_offset']->value,'offset_arg'=>'comments_offset'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['comments_cant']->value,'step'=>$_smarty_tpl->tpl_vars['comments_per_page']->value,'offset'=>$_smarty_tpl->tpl_vars['comments_offset']->value,'offset_arg'=>'comments_offset'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['forum_last_n']>0&&count($_smarty_tpl->tpl_vars['last_comments']->value)) {?>
		
		<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Last <?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forum_last_n'];?>
 posts in this forum</th>
			</tr>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['last_comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<tr>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['last_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parentId']==0) {?>
							<?php $_smarty_tpl->tpl_vars["idt"] = new Smarty_variable($_smarty_tpl->tpl_vars['last_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'], null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars["idt"] = new Smarty_variable($_smarty_tpl->tpl_vars['last_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parentId'], null, 0);?>
						<?php }?>
						<a class="forumname" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['idt']->value;?>
&amp;topics_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;topics_offset=<?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['comments_offset']->value,'y'=>$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']),$_smarty_tpl);?>
&amp;topics_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
&amp;topics_find=<?php echo $_smarty_tpl->tpl_vars['comments_find']->value;?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['last_comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>
</a>
					</td>
				</tr>
			<?php endfor; endif; ?>
		</table>
		</div>
		<br>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
		<div class="col-md-8" styles="padding-top:15px">
			<div class="panel panel-default" id="filter-panel">
				<div class="panel-heading filter-panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#filterCollapse" class="collapsed">
							Filter Posts
						</a>
					</h4>
				</div>
				<div id="filterCollapse" class="panel-collapse collapse">
					<div class="panel-body">
						<form id='time_control' class="form-horizontal" method="post" action="tiki-view_forum.php">
							<?php if ($_smarty_tpl->tpl_vars['comments_offset']->value!=0) {?>
								<input type="hidden" name="comments_offset" value="0"><!--reset the offset when starting a new filtered search-->
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comments_threadId']->value!=0) {?>
								<input type="hidden" name="comments_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threadId']->value);?>
">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value!=0) {?>
								<input type="hidden" name="comments_threshold" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threshold']->value);?>
">
							<?php }?>
							<input type="hidden" name="thread_sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_sort_mode']->value);?>
">
							<input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
">
							<div class="form-group">
								<label class="col-md-4 control-label input-sm" for="filter_time">Last post date</label>
								<div class="col-md-8">
									<select id="filter_time" name="time_control" class="form-control input-sm">
										<option value="" <?php if ($_REQUEST['time_control']=='') {?>selected="selected"<?php }?>>All posts</option>
										<option value="3600" <?php if ($_REQUEST['time_control']==3600) {?>selected="selected"<?php }?>>Last hour</option>
										<option value="86400" <?php if ($_REQUEST['time_control']==86400) {?>selected="selected"<?php }?>>Last 24 hours</option>
										<option value="172800" <?php if ($_REQUEST['time_control']==172800) {?>selected="selected"<?php }?>>Last 48 hours</option>
									</select>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_topics_archiving']=='y') {?>
								<div class="form-group">
									<label class="col-md-4 control-label input-sm" for="show_archived">Show archived posts</label>
									<div class="col-md-8">
										<input type="checkbox" id="show_archived" name="show_archived" <?php if ($_smarty_tpl->tpl_vars['show_archived']->value=='y') {?>checked="checked"<?php }?>>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<div class="form-group">
									<label class="col-md-4 control-label input-sm" for="filter_poster">Containing posts by</label>
									<div class="col-md-8">
										<select id="filter_poster" class="form-control input-sm" name="poster">
											<option value=""<?php if (empty($_REQUEST['poster'])) {?> selected="selected"<?php }?>>
												All posts
											</option>
											<option value="_me" <?php if (isset($_REQUEST['poster'])&&$_REQUEST['poster']=='_me') {?> selected="selected"<?php }?>>
												Me
											</option>
										</select>
									</div>
								</div>
							<?php }?>
							<div class="form-group">
								<label class="col-md-4 control-label input-sm" for="filter_type">Type</label>
								<div class="col-md-8">
									<select id="filter_type" name="filter_type" class="form-control input-sm">
										<option value=""<?php if (empty($_REQUEST['filter_type'])) {?>selected="selected"<?php }?>>
											All posts
										</option>
										<option value="n" <?php if (isset($_REQUEST['filter_type'])&&$_REQUEST['filter_type']=='n') {?> selected="selected"<?php }?>>
											normal
										</option>
										<option value="a" <?php if (isset($_REQUEST['filter_type'])&&$_REQUEST['filter_type']=='a') {?> selected="selected"<?php }?>>
											announce
										</option>
										<option value="h"<?php if (isset($_REQUEST['filter_type'])&&$_REQUEST['filter_type']=='h') {?> selected="selected"<?php }?>>
											hot
										</option>
										<option value="s"<?php if (isset($_REQUEST['filter_type'])&&$_REQUEST['filter_type']=='s') {?> selected="selected"<?php }?>>
											sticky
										</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label input-sm" for="filter_replies">Replies</label>
								<div class="col-md-8">
									<select id="filter_replies" name="reply_state" class="form-control input-sm">
										<option value=""<?php if (empty($_REQUEST['reply_state'])) {?> selected="selected"<?php }?>>
											All posts
										</option>
										<option value="none"<?php if (isset($_REQUEST['reply_state'])&&$_REQUEST['reply_state']=='none') {?> selected="selected"<?php }?>>
											Posts with no replies
										</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-4">
									<input type="submit" class="btn btn-default btn-sm" id="filter_submit" value="Filter">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<?php if (empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var js_anonymous_name = getCookie('anonymous_name');
			if (js_anonymous_name) document.getElementById('anonymous_name').value = js_anonymous_name;
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var $forum = $("#editpageform");
		$forum.submit(function() {
			// prevent double submission
			if (!$forum.data("sub")) {
				$forum.tikiModal('Save in Progress...');
				$forum.data("sub", true);
				$forum.submit();
			}
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
