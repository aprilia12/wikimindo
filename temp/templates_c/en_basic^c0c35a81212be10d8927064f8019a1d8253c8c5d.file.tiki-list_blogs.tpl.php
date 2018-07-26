<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 05:49:48
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12985239695b57f35cda0e42-55489770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c35a81212be10d8927064f8019a1d8253c8c5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_blogs.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12985239695b57f35cda0e42-55489770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_create_blogs' => 0,
    'tiki_p_blog_admin' => 0,
    'tiki_p_read_blog' => 0,
    'listpages' => 0,
    'find' => 0,
    'prefs' => 0,
    'js' => 0,
    'numbercol' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tiki_p_admin' => 0,
    'libeg' => 0,
    'liend' => 0,
    'user' => 0,
    'tiki_p_blog_post' => 0,
    'tiki_p_assign_perm_blog' => 0,
    'cant' => 0,
    'maxRecords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57f35ce7ba70_83530134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57f35ce7ba70_83530134')) {function content_5b57f35ce7ba70_83530134($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Blogs",'admpage'=>"blogs")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Blogs",'admpage'=>"blogs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blogs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Blogs",'admpage'=>"blogs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_blogs']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y') {?>
		<div class="pull-left">
			<?php echo smarty_function_button(array('href'=>"tiki-edit_blog.php",'_icon_name'=>"create",'_text'=>"Create Blog",'_type'=>"link",'class'=>"btn btn-link"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_blog']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_posts.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"List Posts"),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['listpages']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
		<div class="col-sm-5 pull-right">
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	<?php }?>
</div>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
	<table class="table table-striped normal">
		<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(0, null, 0);?>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['blog_list_description']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='title_desc') {?>title_asc<?php } else { ?>title_desc<?php }?>">Blog</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_created']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Created</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_lastmodif']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='lastModif_desc') {?>lastModif_asc<?php } else { ?>lastModif_desc<?php }?>">Last post</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user']!='disabled') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user_desc') {?>user_asc<?php } else { ?>user_desc<?php }?>">User</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_posts']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th class="text-right"><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='posts_desc') {?>posts_asc<?php } else { ?>posts_desc<?php }?>">Posts</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_visits']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th class="text-right"><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Visits</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_activity']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='activity_desc') {?>activity_asc<?php } else { ?>activity_desc<?php }?>">Activity</a></th>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th></th>
		</tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total']);
?>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['blog_list_description']=='y') {?>
					<td class="text">
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_read_blog']=='y')) {?>
							<a class="blogname" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'],'blog');?>
">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['title']) {?>
							<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['title'],$_smarty_tpl->tpl_vars['prefs']->value['blog_list_title_len'],"...",true));?>

						<?php } else { ?>
							&nbsp;
						<?php }?>
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_read_blog']=='y')) {?>
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_description']=='y') {?>
							<div class="help-block"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description']));?>
</div>
						<?php }?>
					</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_created']=='y') {?>
					<td class="date">&nbsp;<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['created']);?>
&nbsp;</td><!--tiki_date_format:"%b %d" -->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_lastmodif']=='y') {?>
					<td class="date">&nbsp;<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif']);?>
&nbsp;</td><!--tiki_date_format:"%d of %b [%H:%M]"-->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user']!='disabled') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user']=='link') {?>
						<td class="username">&nbsp;<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
&nbsp;</td>
					<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user']=='avatar') {?>
						<td>&nbsp;<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
&nbsp;<br>
						&nbsp;<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
&nbsp;</td>
					<?php } else { ?>
						<td class="username">&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
&nbsp;</td>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_posts']=='y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['posts'];?>
</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_visits']=='y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'];?>
</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_activity']=='y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['activity'];?>
</td>
				<?php }?>
				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('blog_actions', null, null); ob_start(); ?>
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_read_blog']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'],'blog');?>
"><?php echo smarty_function_icon(array('name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)||($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y')) {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_blog_create_blog']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-edit_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['tiki_p_blog_post']->value=='y') {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_blog_post']=='y')) {
if (($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)||($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['public']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-blog_post.php?blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"post",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Post"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
}
if ($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['allow_comments']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href='tiki-list_comments.php?types_section=blogs&amp;blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'];?>
'><?php echo smarty_function_icon(array('name'=>"comments",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Comments"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_blog']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>"blog",'permType'=>"blogs",'id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)||($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y')) {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['individual_tiki_p_blog_create_blog']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"delete",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
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
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['blog_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['blog_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php endfor; else: ?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value),$_smarty_tpl);?>

		<?php endif; ?>
	</table>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
