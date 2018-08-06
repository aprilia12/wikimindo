<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 06:14:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4822355335b67cb244a73b1-91811479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b7c2bd14972e506439e8fd5af2ea6f24c450bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-forums.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4822355335b67cb244a73b1-91811479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ts' => 0,
    'tiki_p_admin_forum' => 0,
    'tiki_p_forum_read' => 0,
    'prefs' => 0,
    'channels' => 0,
    'find' => 0,
    'sort_mode' => 0,
    'js' => 0,
    'cant' => 0,
    'numbercol' => 0,
    'section' => 0,
    'section_old' => 0,
    'tiki_p_admin' => 0,
    'libeg' => 0,
    'liend' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67cb245bc971_54337209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67cb245bc971_54337209')) {function content_5b67cb245bc971_54337209($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_addongroupname')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.addongroupname.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"forums",'admpage'=>"forums")); $_block_repeat=true; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forums<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<div class="t_navbar margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_forums.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"gear",'_text'=>"Admin"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_rankings']=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-forum_rankings.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"ranking",'_text'=>"Rankings"),$_smarty_tpl);?>

		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
		<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_search']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_forums_name_search']=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_name_search']=='y') {?>
					<form method="get" class="form" role="form" action="tiki-forums.php">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

								</span>
								<input type="text" name="find" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
" placeholder="Find...">
								<div class="input-group-btn">
									<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
									<input type="submit" class="btn btn-default" value="Search by name" name="search">
								</div>
							</div>
						</div>
					</form>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_search']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {?>
					<div class="row margin-bottom-md">
						<div class="col-md-5 col-md-offset-7">
						<form class="form" method="get" role="form" action="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']!='y') {?>tiki-searchindex.php<?php } else { ?>tiki-searchresults.php<?php }?>">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

									</span>
									<input name="highlight" type="text" class="form-control" placeholder="Find...">
									<div class="input-group-btn">
										<input type="hidden" name="where" value="forums">
										<input type="hidden" name="filter~type" value="forum post">
										<input type="submit" class="wikiaction btn btn-default" name="search" value="Search in content">
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				<?php }?>
			<?php }?>
		<?php }?>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?> ts-wrapperdiv" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>> 
	<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table table-striped table-hover table-forum normal" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant']->value);?>
">
		
		<thead>
			<tr>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(1, null, 0);?>
				<th id="name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_topics']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th id="threads" class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'threads')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_posts']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th id="comments" class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'comments')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_ppd']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th id="ppd">PPD</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_lastpost']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th id="lastPost"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_visits']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th id="hits" class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
				<th id="actions"></th>
			</tr>
		</thead>
		
		<tbody>
			<?php $_smarty_tpl->tpl_vars['section_old'] = new Smarty_variable('', null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
				<?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['section'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['section']->value!=$_smarty_tpl->tpl_vars['section_old']->value) {?>
					<?php $_smarty_tpl->tpl_vars['section_old'] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value, null, 0);?>
					<td class="third info" colspan="<?php echo $_smarty_tpl->tpl_vars['numbercol']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['section']->value);?>
</td>
				<?php }?>
				
				<tr>
					<td class="text">
						<?php if ((isset($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['individual'])&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual_tiki_p_forum_read']=='y')) {?>
							<a class="forumname" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],'forum');?>
"><?php echo smarty_modifier_escape(smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']));?>
</a>
						<?php } else { ?>
							<?php echo smarty_modifier_escape(smarty_modifier_addongroupname($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']));?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_desc']=='y') {?>
							<div class="help-block">
								<?php $_smarty_tpl->_capture_stack[0][] = array("parsedDesc", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if (strlen(Smarty::$_smarty_vars['capture']['parsedDesc'])<$_smarty_tpl->tpl_vars['prefs']->value['forum_list_description_len']) {?>
									<?php echo Smarty::$_smarty_vars['capture']['parsedDesc'];?>

								<?php } else { ?>
									<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', Smarty::$_smarty_vars['capture']['parsedDesc']),$_smarty_tpl->tpl_vars['prefs']->value['forum_list_description_len'],"...",true);?>

								<?php }?>
							</div>
						<?php }?>
					</td>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_topics']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['threads'];?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_posts']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comments'];?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_ppd']=='y') {?>
						<td class="integer"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['posts_per_day']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_lastpost']=='y') {?>
						<td class="text">
							<?php if (isset($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['lastPost'])) {?>
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPost']);?>
<br>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_reply_notitle']!='y') {?><small><i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPostData']['title']);?>
</i><?php }?>
								by <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPostData']['userName']);?>
</small>
							<?php }?>
						</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_visits']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hits'];?>
</td>
					<?php }?>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('forum_actions', null, null); ob_start(); ?>
							<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],'forum');?>
"><?php echo smarty_function_icon(array('name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||(($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual']=='n')&&($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'))||($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual_tiki_p_admin_forum']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_forums.php?forumId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'];?>
&amp;cookietab=2#content_admin_forums1-2"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['forum_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['forum_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
				
			<?php endfor; else: ?>
				<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']||($_smarty_tpl->tpl_vars['ts']->value['enabled']&&$_smarty_tpl->tpl_vars['ts']->value['ajax'])) {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value,'_text'=>"No forums found"),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value,'_text'=>"Loading..."),$_smarty_tpl);?>

				<?php }?>
			<?php endif; ?>
		</tbody>
	</table>
</div>
<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
