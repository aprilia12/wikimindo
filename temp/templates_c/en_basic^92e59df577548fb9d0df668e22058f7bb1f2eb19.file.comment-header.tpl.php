<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16888230125b67ef3c4a6619-49285794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e59df577548fb9d0df668e22058f7bb1f2eb19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-header.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16888230125b67ef3c4a6619-49285794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'comment' => 0,
    'thread_is_locked' => 0,
    'thread_style' => 0,
    'this_is_locked' => 0,
    'comments_parentId' => 0,
    'libeg' => 0,
    'liend' => 0,
    'tiki_p_admin_forum' => 0,
    'user' => 0,
    'tiki_p_forum_edit_own_posts' => 0,
    'first' => 0,
    'thread_sort_mode_param' => 0,
    'comments_find_param' => 0,
    'forum_info' => 0,
    'comments_per_page_param' => 0,
    'comments_complete_father' => 0,
    'comments_threshold' => 0,
    'comments_offset' => 0,
    'thread_sort_mode' => 0,
    'comments_per_page' => 0,
    'tiki_p_forums_report' => 0,
    'tiki_p_notepad' => 0,
    'forumId' => 0,
    'display' => 0,
    'user_watching_topic' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'js' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'page' => 0,
    'comments_coms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3c504222_58894354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3c504222_58894354')) {function content_5b67ef3c504222_58894354($_smarty_tpl) {?><?php if (!is_callable('smarty_function_monitor_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.monitor_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>
<header class="panel-heading clearfix postbody-title media-overflow-visible"> 
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_locking']!='y'||($_smarty_tpl->tpl_vars['comment']->value['locked']!='y'&&$_smarty_tpl->tpl_vars['thread_is_locked']->value!='y')) {?>
		<?php $_smarty_tpl->tpl_vars['this_is_locked'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['this_is_locked'] = new Smarty_variable('y', null, 0);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers'&&$_smarty_tpl->tpl_vars['this_is_locked']->value=='n'&&isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])&&$_smarty_tpl->tpl_vars['comment']->value['threadId']>0) {?>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>

		<div class="actions pull-right btn-group">
			<?php $_smarty_tpl->_capture_stack[0][] = array('comment_actions', null, null); ob_start(); ?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['threadId']==$_smarty_tpl->tpl_vars['comments_parentId']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<div><?php echo smarty_function_monitor_link(array('type'=>"forum post",'object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'class'=>'tips','linktext'=>"Notification"),$_smarty_tpl);?>
</div><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||($_smarty_tpl->tpl_vars['comment']->value['userName']==$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_forum_edit_own_posts']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a <?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?> href="tiki-view_forum.php?comments_offset=<?php echo $_REQUEST['topics_offset'];
if (isset($_smarty_tpl->tpl_vars['thread_sort_mode_param']->value)) {
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;
}?>&amp;comments_threshold=<?php echo $_REQUEST['topics_threshold'];
if (isset($_smarty_tpl->tpl_vars['comments_find_param']->value)) {
echo $_smarty_tpl->tpl_vars['comments_find_param']->value;
}?>&amp;comments_threadId=<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
&amp;openpost=1&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];
if (isset($_smarty_tpl->tpl_vars['comments_per_page_param']->value)) {
echo $_smarty_tpl->tpl_vars['comments_per_page_param']->value;
}?>"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
comments_threadId=<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
&amp;comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
&amp;thread_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
&amp;comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
&amp;thread_style=<?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
&amp;edit_reply=1#form"<?php }?>><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?><a <?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic','forumId'=>$_tmp1,'comments_threshold'=>$_tmp2,'forumtopic'=>$_tmp3,'comments_offset'=>$_tmp4,'thread_sort_mode'=>$_tmp5,'comments_find'=>$_tmp6,'comments_per_page'=>$_tmp7),$_smarty_tpl);?>
"<?php } else { ?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
<?php $_tmp15=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic','forumId'=>$_tmp8,'comments_threshold'=>$_tmp9,'forumtopic'=>$_tmp10,'comments_offset'=>$_tmp11,'thread_sort_mode'=>$_tmp12,'comments_per_page'=>$_tmp13,'comments_parentId'=>$_tmp14,'thread_style'=>$_tmp15),$_smarty_tpl);?>
"<?php }?>><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete post"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_forums_report']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report this post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_notepad']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_notepad']->value=='y'&&$_smarty_tpl->tpl_vars['forumId']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save to notepad<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['display']->value=='') {
if ($_smarty_tpl->tpl_vars['first']->value=='y') {
if ($_smarty_tpl->tpl_vars['user_watching_topic']->value=='n') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch')); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Monitor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching')); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stop monitoring<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_parentId']->value,"url");?>
&amp;watch_event=forum_post_thread&amp;objectType=forum&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['title'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(((('tiki-view_forum_thread.php?comments_parentId=').($_smarty_tpl->tpl_vars['comments_parentId']->value)).('&forumId=')).($_smarty_tpl->tpl_vars['forumId']->value),"url");?>
"><?php echo smarty_function_icon(array('name'=>"watch-group",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
}?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a
				class="tips pull-right"
				title="Actions"
				href="#"
				<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['comment_actions']),$_smarty_tpl);
}?>
				style="padding:0; margin:0; border:0"
			>
				<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
				<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['comment_actions'];?>
</ul></li></ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['category_watched']->value=='y') {?><br>
				<div class="categbar pull-right">
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
</a>&nbsp;
					<?php endfor; endif; ?>
				</div>
			<?php }?>
		</div>
	<?php }?>

	<?php if (!isset($_smarty_tpl->tpl_vars['first']->value)||$_smarty_tpl->tpl_vars['first']->value!='y') {?>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'&&isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])&&$_smarty_tpl->tpl_vars['comment']->value['threadId']>0) {?>
		<input type="checkbox" name="forumtopic[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['threadId']);?>
" <?php if ($_REQUEST['forumthread']&&in_array($_smarty_tpl->tpl_vars['comment']->value['threadId'],$_REQUEST['forumthread'])) {?>checked="checked"<?php }?>>
		<?php }?>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['comment']->value['title']!=''&&$_smarty_tpl->tpl_vars['comment']->value['title']!='Untitled'&&(!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['comment']->value['title']!=$_smarty_tpl->tpl_vars['page']->value)) {?>
	<!-- <div class="title"> -->
	<?php if (isset($_smarty_tpl->tpl_vars['first']->value)&&$_smarty_tpl->tpl_vars['first']->value=='y') {?>
	<h2 class=" panel-title">
		<span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['title']);?>
</span>
		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y')) {?>
		<a class="heading-link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forum post');
if (($_smarty_tpl->tpl_vars['comment']->value['threadId']!=$_smarty_tpl->tpl_vars['comments_parentId']->value)) {?>#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];
}?>"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
</a>
		<?php } else { ?>
		<a class="heading-link" href="?tiki-view_forum_thread.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
</a>
		<?php }?>
	</h2>
	<?php }?>

	<!-- </div> -->
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value=='commentStyle_headers') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('comment-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]), 0);?>

	<?php }?>
</header>
<?php }} ?>
