<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-view_forum_thread.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18526689845b67ef3bd22282-98772372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dccc2797bb2b4a9ace99c407d70f011e2418326' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-view_forum_thread.tpl',
      1 => 1490329620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18526689845b67ef3bd22282-98772372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forum_info' => 0,
    'prefs' => 0,
    'thread_info' => 0,
    'tiki_p_admin_forum' => 0,
    'all_forums' => 0,
    'post_reported' => 0,
    'forumId' => 0,
    'topics_sort_mode_param' => 0,
    'topics_threshold_param' => 0,
    'topics_find_param' => 0,
    'prev_topic' => 0,
    'comments_parentId' => 0,
    'next_topic' => 0,
    'topics_prev_offset' => 0,
    'comments_per_page_param' => 0,
    'thread_style_param' => 0,
    'thread_sort_mode_param' => 0,
    'comments_threshold_param' => 0,
    'topics_next_offset' => 0,
    'js' => 0,
    'pdf_export' => 0,
    'tiki_p_forum_lock' => 0,
    'openpost' => 0,
    'tiki_p_view_freetags' => 0,
    'comments_threadId' => 0,
    'comments_threshold' => 0,
    'thread_sort_mode' => 0,
    'view_atts' => 0,
    'atts' => 0,
    'att' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3be627c6_61203401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3be627c6_61203401')) {function content_5b67ef3be627c6_61203401($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_addonnavbar')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.addonnavbar.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_modifier_addongroupname')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.addongroupname.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php echo smarty_modifier_addonnavbar($_smarty_tpl->tpl_vars['forum_info']->value['name'],'forum');?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"forums",'admpage'=>"forums")); $_block_repeat=true; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['forum_info']->value['name']);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_topics_archiving']=='y'&&$_smarty_tpl->tpl_vars['thread_info']->value['archived']=='y') {?>(Archived)<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=="y") {?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_forums.php?forumId=".((string)$_smarty_tpl->tpl_vars['forumId']->value),'_class'=>"btn btn-link",'_icon_name'=>"wrench",'_text'=>"Edit Forum"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||!isset($_smarty_tpl->tpl_vars['all_forums']->value)||count($_smarty_tpl->tpl_vars['all_forums']->value)>1) {?>
		<?php echo smarty_function_button(array('href'=>"tiki-forums.php",'_class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"Forum List"),$_smarty_tpl);?>

	<?php }?>
	<?php echo smarty_function_button(array('href'=>"tiki-view_forum.php?forumId=".((string)$_smarty_tpl->tpl_vars['forumId']->value),'_class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"Topic List"),$_smarty_tpl);?>

</div>
<?php if ($_smarty_tpl->tpl_vars['post_reported']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"The post has been reported and will be reviewed by a moderator.")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"The post has been reported and will be reviewed by a moderator."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"The post has been reported and will be reviewed by a moderator."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<br>
<div id="thread-breadcrumb" class="breadcrumb">
	<a class="link" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>forums<?php } else { ?>tiki-forums.php<?php }?>">
		Forums
	</a>
	<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>

	<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
">
		<?php echo smarty_modifier_escape(smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['forum_info']->value['name']));?>

	</a><?php if (isset($_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId'])&&$_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId']) {?>
		<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>

		<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId'],'forumthread');
if ($_REQUEST['topics_offset']) {?>&amp;topics_offset=<?php echo $_REQUEST['topics_offset'];
}
echo $_smarty_tpl->tpl_vars['topics_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['topics_threshold_param']->value;
echo $_smarty_tpl->tpl_vars['topics_find_param']->value;?>
">
			<?php echo $_smarty_tpl->tpl_vars['thread_info']->value['topic']['title'];?>

		</a>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>

	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_info']->value['title']);?>

</div>


	<div class="text-right margin-bottom-md">
		<?php if (empty($_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId'])) {?>
			<span>
				<?php if (($_smarty_tpl->tpl_vars['prev_topic']->value&&$_smarty_tpl->tpl_vars['prev_topic']->value!=$_smarty_tpl->tpl_vars['comments_parentId']->value)||$_smarty_tpl->tpl_vars['next_topic']->value) {?>[ <?php if ($_smarty_tpl->tpl_vars['prev_topic']->value&&$_smarty_tpl->tpl_vars['prev_topic']->value!=$_smarty_tpl->tpl_vars['comments_parentId']->value) {?><a href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['prev_topic']->value;?>
&amp;topics_offset=<?php echo $_smarty_tpl->tpl_vars['topics_prev_offset']->value;
echo $_smarty_tpl->tpl_vars['topics_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['topics_threshold_param']->value;
echo $_smarty_tpl->tpl_vars['topics_find_param']->value;
echo $_smarty_tpl->tpl_vars['comments_per_page_param']->value;
echo $_smarty_tpl->tpl_vars['thread_style_param']->value;
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['comments_threshold_param']->value;?>
" class="link">prev topic</a><?php if ($_smarty_tpl->tpl_vars['next_topic']->value) {?> | <?php }
}?>
				<?php if ($_smarty_tpl->tpl_vars['next_topic']->value) {?><a href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['next_topic']->value;?>
&amp;topics_offset=<?php echo $_smarty_tpl->tpl_vars['topics_next_offset']->value;
echo $_smarty_tpl->tpl_vars['topics_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['topics_threshold_param']->value;
echo $_smarty_tpl->tpl_vars['topics_find_param']->value;
echo $_smarty_tpl->tpl_vars['comments_per_page_param']->value;
echo $_smarty_tpl->tpl_vars['thread_style_param']->value;
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['comments_threshold_param']->value;?>
" class="link">next topic</a><?php }?> ]<?php }?>
			</span>
		<?php } else { ?>
			<span>
				You are viewing a reply to <a class="link" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId'];
if ($_REQUEST['topics_offset']) {?>&amp;topics_offset=<?php echo $_REQUEST['topics_offset'];
}
echo $_smarty_tpl->tpl_vars['topics_sort_mode_param']->value;
echo $_smarty_tpl->tpl_vars['topics_threshold_param']->value;
echo $_smarty_tpl->tpl_vars['topics_find_param']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['thread_info']->value['topic']['title'];?>
</a>
			</span>
		<?php }?>
		&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php }?>
		<div class="btn-group">
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
				<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li class="dropdown-title">
					Thread actions
				</li>
				<li class="divider"></li>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['pdf_export']->value=='y') {?>
						<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('display'=>'pdf'),$_smarty_tpl);?>
">
							<?php echo smarty_function_icon(array('name'=>"pdf"),$_smarty_tpl);?>
 PDF
						</a>
					<?php }?>
				</li>
				<li>
					<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('display'=>'print'),$_smarty_tpl);?>
">
						<?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print this page
					</a>
				</li>
				<li>
					<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('display'=>'print_all'),$_smarty_tpl);?>
">
						<?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print all pages
					</a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_topics_archiving']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['thread_info']->value['archived']=='y') {?>
							<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('archive'=>"n"),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"file-archive-open"),$_smarty_tpl);?>
 Unarchive
							</a>
						<?php } else { ?>
							<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('archive'=>'y'),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"file-archive"),$_smarty_tpl);?>
 Archive
							</a>
						<?php }?>
					</li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value)&&$_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['thread_info']->value['locked']=='y') {?>
							<a href="<?php echo smarty_function_query(array('_type'=>'relative','lock'=>'n'),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"unlock"),$_smarty_tpl);?>
 Unlock
							</a>
						<?php } else { ?>
							<a href="<?php echo smarty_function_query(array('_type'=>'relative','lock'=>'y'),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>
 Lock
							</a>
						<?php }?>
					</li>
				<?php }?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
		</div>

	</div>



<?php if ($_smarty_tpl->tpl_vars['openpost']->value=='y') {?>
	<?php $_smarty_tpl->tpl_vars["postclass"] = new Smarty_variable("forumpostopen", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["postclass"] = new Smarty_variable("forumpost", null, 0);?>
<?php }?>

<article class="top_post">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y'&&!$_smarty_tpl->tpl_vars['thread_info']->value['topic']['threadId']) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="text-right margin-bottom-sm">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"addfreetag",'object'=>"forum post:".((string)$_smarty_tpl->tpl_vars['comments_parentId']->value))); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"addfreetag",'object'=>"forum post:".((string)$_smarty_tpl->tpl_vars['comments_parentId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"addfreetag",'object'=>"forum post:".((string)$_smarty_tpl->tpl_vars['comments_parentId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ('comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('first'=>'y','comment'=>$_smarty_tpl->tpl_vars['thread_info']->value,'thread_style'=>'commentStyle_plain'), 0);?>

</article>

<?php echo $_smarty_tpl->getSubTemplate ('comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="form-group">
	<form class="form-horizontal" role="form" id='time_control' method="get" action="tiki-view_forum_thread.php">
		<input type="hidden" name="comments_offset" value="0"><!--Reset offset to 0 when applying a new filter -->
		<input type="hidden" name="comments_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threadId']->value);?>
">
		<input type="hidden" name="comments_parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_parentId']->value);?>
">
		<input type="hidden" name="comments_threshold" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threshold']->value);?>
" />
		<input type="hidden" name="thread_sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_sort_mode']->value);?>
">
		<input type="hidden" name="topics_offset" value="<?php echo smarty_modifier_escape($_REQUEST['topics_offset']);?>
">
		<input type="hidden" name="topics_find" value="<?php echo smarty_modifier_escape($_REQUEST['topics_find']);?>
">
		<input type="hidden" name="topics_sort_mode" value="<?php echo smarty_modifier_escape($_REQUEST['topics_sort_mode']);?>
">
		<input type="hidden" name="topics_threshold" value="<?php echo smarty_modifier_escape($_REQUEST['topics_threshold']);?>
">
		<input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
">

		<label class="col-sm-2 control-label" for="userfile1">Show posts:</label>
		<div class="col-sm-3">
			<select class="form-control" name="time_control" onchange="javascript:document.getElementById('time_control').submit();">
				<option value="" <?php if (empty($_REQUEST['time_control'])) {?>selected="selected"<?php }?>>
					All posts
				</option>
				<option value="3600" <?php if (isset($_REQUEST['time_control'])&&$_REQUEST['time_control']==3600) {?>selected="selected"<?php }?>>
					Last hour
				</option>
				<option value="86400" <?php if (isset($_REQUEST['time_control'])&&$_REQUEST['time_control']==86400) {?>selected="selected"<?php }?>>
					Last 24 hours
				</option>
				<option value="172800" <?php if (isset($_REQUEST['time_control'])&&$_REQUEST['time_control']==172800) {?>selected="selected"<?php }?>>
					Last 48 hours
				</option>
			</select>
		</div>
	</form>
</div>

<div class="form-group pull-right">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_quickjump']=='y'&&count($_smarty_tpl->tpl_vars['all_forums']->value)>1) {?>
		<form class="form-horizontal" role="form" id='quick' method="get" action="tiki-view_forum.php">
			<label class="col-sm-6 control-label" for="forumId">Jump to forum:</label>
			<div class="col-sm-6">
				<select id="forumId" class="form-control" name="forumId" onchange="javascript:document.getElementById('quick').submit();">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_forums']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['forumId']);?>
" <?php if ($_smarty_tpl->tpl_vars['all_forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['forumId']==$_smarty_tpl->tpl_vars['forumId']->value) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['all_forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

						</option>
					<?php endfor; endif; ?>
				</select>
			</div>
		</form>
	<?php } else { ?>
		&nbsp;
	<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['view_atts']->value)&&$_smarty_tpl->tpl_vars['view_atts']->value=='y') {?>
	<h2 id="attachments">Attachments</h2>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>Type</th>
				<th>Filename</th>
				<th>Size</th>
				<th>Created</th>
				<th>Action</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atts']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
?>
				<tr>
					<td class="icon">
						<?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['att']->value['filename']);?>

					</td>
					<td class="text">
						<a href="tiki-download_forum_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['att']->value['attId'];?>
" title="Download">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att']->value['filename']);?>

						</a>
					</td>
					<td class="integer">
						<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['att']->value['filesize']);?>

					</td>
					<td class="date">
						<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['att']->value['created']);?>

					</td>
					<td class="action">
						<a href="tiki-download_forum_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['att']->value['attId'];?>
" class="tips" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att']->value['filename']);?>
:Download">
							<?php echo smarty_function_icon(array('name'=>'floppy'),$_smarty_tpl);?>

						</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['atts']->value['cant'],'offset'=>$_smarty_tpl->tpl_vars['atts']->value['offset'],'offset_arg'=>'fa_offset','step'=>$_smarty_tpl->tpl_vars['atts']->value['maxRecords'],'_anchor'=>'attachments')); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['atts']->value['cant'],'offset'=>$_smarty_tpl->tpl_vars['atts']->value['offset'],'offset_arg'=>'fa_offset','step'=>$_smarty_tpl->tpl_vars['atts']->value['maxRecords'],'_anchor'=>'attachments'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['atts']->value['cant'],'offset'=>$_smarty_tpl->tpl_vars['atts']->value['offset'],'offset_arg'=>'fa_offset','step'=>$_smarty_tpl->tpl_vars['atts']->value['maxRecords'],'_anchor'=>'attachments'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
