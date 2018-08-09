<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 03:29:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-view_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19489927515b6b98f8960d52-62176108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ddc8b18bf34f836c71216eb7d4f4b367ffbef5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-view_articles.tpl',
      1 => 1497148350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19489927515b6b98f8960d52-62176108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'prefs' => 0,
    'topic' => 0,
    'type' => 0,
    'headerLinks' => 0,
    'tiki_p_edit_article' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_cms' => 0,
    'tiki_p_edit_submission' => 0,
    'tiki_p_read_article' => 0,
    'tiki_p_articles_read_heading' => 0,
    'tiki_p_approve_submission' => 0,
    'tiki_p_remove_submission' => 0,
    'js' => 0,
    'user_watching_articles' => 0,
    'tiki_p_admin_users' => 0,
    'listpages' => 0,
    'urlparam' => 0,
    'useLinktoURL' => 0,
    'tiki_p_view_freetags' => 0,
    'taginfo' => 0,
    'container_class' => 0,
    'tiki_p_ratings_view_results' => 0,
    'author' => 0,
    'user' => 0,
    'preview' => 0,
    'tiki_p_rate_article' => 0,
    'largefirstimage' => 0,
    'style' => 0,
    'topics' => 0,
    'fullbody' => 0,
    'tiki_p_read_comments' => 0,
    'tiki_p_post_comments' => 0,
    'tiki_p_remove_article' => 0,
    'quiet' => 0,
    'topicId' => 0,
    'usePagination' => 0,
    'cant' => 0,
    'maxArticles' => 0,
    'offset' => 0,
    'urlnext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6b98f8af3332_88649532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b98f8af3332_88649532')) {function content_5b6b98f8af3332_88649532($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
if (!is_callable('smarty_function_rating')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating.php';
if (!is_callable('smarty_function_rating_result')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result.php';
if (!is_callable('smarty_block_repeat')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.repeat.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['actions']->value)||$_smarty_tpl->tpl_vars['actions']->value=="y") {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title']!='') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Articles",'admpage'=>"articles")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title']=='topic'&&!empty($_smarty_tpl->tpl_vars['topic']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topic']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title']=='type'&&!empty($_smarty_tpl->tpl_vars['type']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>Articles<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['headerLinks']->value=="y") {?>
		<div class="t_navbar margin-bottom-md">
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-edit_article.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Article"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value!='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-edit_submission.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Submission"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_articles_read_heading']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_articles.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"List Articles"),$_smarty_tpl);?>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_approve_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_remove_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y")) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_submissions.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"view",'_text'=>"View Submissions"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php }?>
			<div class="btn-group pull-right">
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
				<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
					<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li class="dropdown-title">
						Monitoring
					</li>
					<li class="divider"></li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['user_watching_articles']->value=='n') {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_text'=>"Monitor articles")); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_text'=>"Monitor articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_text'=>"Monitor articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_text'=>"Stop monitoring articles")); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_text'=>"Stop monitoring articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_text'=>"Stop monitoring articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y') {?>
							<a href="tiki-object_watches.php?watch_event=article_*&amp;objectId=*">
								<?php echo smarty_function_icon(array('name'=>'watch-group'),$_smarty_tpl);?>
 Group monitor
							</a>
						<?php }?>
					</li>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
			</div>
		</div>
	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<?php $_smarty_tpl->_capture_stack[0][] = array('href', null, null); ob_start();
if (empty($_smarty_tpl->tpl_vars['urlparam']->value)) {
if ($_smarty_tpl->tpl_vars['useLinktoURL']->value=='n'||empty($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['linkto'])) {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article');
} else {
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['linkto'];
}
} else {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article','with_next');
echo $_smarty_tpl->tpl_vars['urlparam']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['disp_article']=='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&count($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['freetags']['data'])>0) {?>
			<div class="freetaglist">
				<?php  $_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['freetags']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('tagurl', null, null); ob_start(); ?>
						<?php if ((strstr($_smarty_tpl->tpl_vars['taginfo']->value['tag'],' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];
}?>
					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<a class="freetag" href="tiki-browse_freetags.php?tag=<?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['tagurl'],'url');?>
">
						<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>

					</a>
				<?php } ?>
			</div>
		<?php }?>
		<article class="clearfix article media media-overflow-visible<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;
}?> article<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
">
			<?php if (($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_avatar']=='y')) {?>
				<div class="avatar">
					<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['author']);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_topline']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topline']) {?>
				<div class="articletopline">
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topline']);?>

				</div>
			<?php }?>

			<header class="articletitle clearfix">
				<h2>
					<?php echo smarty_function_object_link(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'url'=>Smarty::$_smarty_vars['capture']['href'],'title'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']),$_smarty_tpl);?>

				</h2>
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_subtitle']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['subtitle']) {?><div class="articlesubtitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['subtitle']);?>
</div><?php }?>
				<?php if (($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_author']=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_pubdate']=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_expdate']=='y')||($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_reads']=='y')) {?>
					<span class="titleb">
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_author']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['authorName']) {?>
								<span class="author">
									Author: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['authorName']);?>

								</span>
							<?php } else { ?>
								<span class="author">
									Author: <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['author']);?>

								</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_pubdate']=='y'||$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_expdate']=='y'||$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_reads']=='y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_pubdate']=='y') {?>
							<span class="pubdate">
								Published <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['publishDate']);?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_expdate']=='y'||$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_reads']=='y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_expdate']=='y') {?>
							<span class="expdate">
								Expires <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['expireDate']);?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_reads']=='y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_reads']=='y') {?>
							<span class="reads">
								(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['nbreads'];?>
 Reads)
							</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comment_can_rate_article']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
							- <span class="ratingResultAvg">
								Users rating: 
							</span><?php echo smarty_function_rating_result_avg(array('id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'type'=>'article'),$_smarty_tpl);?>

						<?php }?>
					</span><br>
				<?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['body'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['author']->value!=$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comment_can_rate_article']=='y'&&empty($_tmp1)&&!isset($_smarty_tpl->tpl_vars['preview']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_rate_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y')) {?>
					<div class="articleheading">
						<form method="post" action="">
							<?php echo smarty_function_rating(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId']),$_smarty_tpl);?>

						</form>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comment_can_rate_article']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
					<div class="articleheading">
						<?php echo smarty_function_rating_result(array('id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'type'=>'article'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</header>

			<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['use_ratings']=='y') {?>
				<div class="articleheading">
					Rating:
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rating'])); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rating']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo smarty_function_icon(array('name'=>'star'),$_smarty_tpl);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rating']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rating']>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['entrating']) {?>
						<?php echo smarty_function_icon(array('name'=>'star-half'),$_smarty_tpl);?>

					<?php }?>
					(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rating'];?>
/10)
				</div>
			<?php }?>

			<div class="articleheading">
				<div <?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isfloat']=='n') {?>class="media-left"<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_image']=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['useImage']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['hasImage']=='y') {?>
								<a
									href="<?php echo Smarty::$_smarty_vars['capture']['href'];?>
" <?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isfloat']=='y') {?> style="margin-right:20px; float:left;"<?php }?>
									title="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_image_caption']&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']);
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName']) {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>Read More<?php }?>">
									<?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable('', null, 0);?>
									<img class="img-thumbnail media-object article-image custom-image"
										alt="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_image_caption']&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']);
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName']) {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>"
										src="article_image.php?image_type=article&amp;id=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];
if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['list_image_x']>0&&($_smarty_tpl->tpl_vars['largefirstimage']->value!='y'||!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first'])) {?>&amp;width=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['list_image_x'];
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_x']>0) {?>&amp;width=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_x'];
}?>&amp;cache=y"<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['list_image_y']>0&&($_smarty_tpl->tpl_vars['largefirstimage']->value!='y'||!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first'])) {
$_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((($_smarty_tpl->tpl_vars['style']->value).("max-height:")).($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['list_image_y'])).("px;"), null, 0);
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_y']>0) {
$_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((($_smarty_tpl->tpl_vars['style']->value).("max-height:")).($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_y'])).("px;"), null, 0);
}?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
								</a>
							<?php } else { ?>
								
							<?php }?>
						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['topicId']]['image_size'])&&$_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId']]['image_size']>0) {?>
								<a href="<?php echo Smarty::$_smarty_vars['capture']['href'];?>
" <?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isfloat']=='y') {?> style="margin-right:20px; float:left;"<?php }?>
										title="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_image_caption']&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>">
									<img class="media-object img-thumbnail article-image topic-image"
											alt="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_image_caption']&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['image_caption']);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicName'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>"
											src="article_image.php?image_type=topic&amp;id=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId'];?>
">
								</a>
							<?php }?>
						<?php }?>
					<?php }?>
				</div>
				<div class="articleheadingtext<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isfloat']=='n') {?> media-body<?php }?>"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parsed_heading'];?>
</div>
			</div>
					<?php if (isset($_smarty_tpl->tpl_vars['fullbody']->value)&&$_smarty_tpl->tpl_vars['fullbody']->value=="y") {?>
			<div class="articlebody"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parsed_body'];?>
</div>
					<?php }?>

			<div class="articletrailer">
				<?php if (($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']>0)||(($_smarty_tpl->tpl_vars['prefs']->value['feature_article_comments']=='y')&&($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'))) {?>
				<ul class="list-inline pull-left">
					<?php if (($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['heading_only']!='y'&&(!isset($_smarty_tpl->tpl_vars['fullbody']->value)||$_smarty_tpl->tpl_vars['fullbody']->value!="y"))) {?>
						<?php if (($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']>0&&!empty($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['body']))) {?>

							<li class="status"> 
								<a href="<?php echo Smarty::$_smarty_vars['capture']['href'];?>
" class="more">Read More</a>
							</li>
							<?php if (($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['show_size']=='y')) {?>
								<li>
									(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size'];?>
 bytes)
								</li>
							<?php }?>
						<?php }?>
					<?php }?>
					<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_article_comments']=='y')&&($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y')&&($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['allow_comments']=='y')) {?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article','with_next');
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']!='y') {?>&amp;<?php }?>show_comzone=y<?php if (!empty($_smarty_tpl->tpl_vars['urlparam']->value)) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['urlparam']->value;
}?>#comments"<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comments_cant']>0) {?> class="highlight"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comments_cant']==0&&$_smarty_tpl->tpl_vars['tiki_p_post_comments']->value=='y') {?>
									<?php if (!isset($_smarty_tpl->tpl_vars['actions']->value)||$_smarty_tpl->tpl_vars['actions']->value=="y") {?>
										Add Comment
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y') {?>
									<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comments_cant']==1) {?>
										1 comment
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comments_cant'];?>
&nbsp;comments
									<?php }?>
								<?php }?>
							</a>
						</li>
					<?php }?>
					</ul>
				<?php }?>
				<?php if (!isset($_smarty_tpl->tpl_vars['actions']->value)||$_smarty_tpl->tpl_vars['actions']->value=="y") {?>
					<div class="btn-group actions pull-right dropup">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
							<?php echo $_smarty_tpl->getSubTemplate ('translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>'article','trads'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['translations'],'articleId'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId']), 0);?>

						<?php }?>
						<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
							<?php echo smarty_function_icon(array('name'=>"wrench"),$_smarty_tpl);?>

						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li class="dropdown-title">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions for %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</li>
							<li class="divider"></li>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||(!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['author']==$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['creator_edit']=='y')) {?>
								<li>
									<a href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
 Edit
									</a>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_print']=='y') {?>
								<li>
									<a href="tiki-print_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'print'),$_smarty_tpl);?>
 Print
									</a>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {?>
								<li>
									<a href="tiki-list_articles.php?remove=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
 Remove
									</a>
								</li>
							<?php }?>
						</ul>
					</div>
				<?php }?>
			</div>

		</article>
	<?php }?>
<?php endfor; else: ?>
	<?php if ($_smarty_tpl->tpl_vars['quiet']->value!='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>"No articles yet.",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>"No articles yet.",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>"No articles yet.",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php endif; ?>

<?php if (!isset($_smarty_tpl->tpl_vars['actions']->value)||$_smarty_tpl->tpl_vars['actions']->value=="y") {?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<br/><a href="tiki-edit_article.php<?php if ((isset($_smarty_tpl->tpl_vars['topicId']->value)&&!empty($_smarty_tpl->tpl_vars['topicId']->value))||(isset($_smarty_tpl->tpl_vars['type']->value)&&!empty($_smarty_tpl->tpl_vars['type']->value))) {?>?<?php }
if (isset($_smarty_tpl->tpl_vars['topicId']->value)&&!empty($_smarty_tpl->tpl_vars['topicId']->value)&&is_numeric($_smarty_tpl->tpl_vars['topicId']->value)) {?>topicId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topicId']->value);
}
if (isset($_smarty_tpl->tpl_vars['type']->value)&&!empty($_smarty_tpl->tpl_vars['type']->value)) {?>&type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);
}?>" class="alert-link">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 New article
		</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value!='y') {?>
		<br/><a href="tiki-edit_submission.php<?php if ((isset($_smarty_tpl->tpl_vars['topicId']->value)&&!empty($_smarty_tpl->tpl_vars['topicId']->value))||(isset($_smarty_tpl->tpl_vars['type']->value)&&!empty($_smarty_tpl->tpl_vars['type']->value))) {?>?<?php }
if (isset($_smarty_tpl->tpl_vars['topicId']->value)&&!empty($_smarty_tpl->tpl_vars['topicId']->value)&&is_numeric($_smarty_tpl->tpl_vars['topicId']->value)) {?>topicId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topicId']->value);
}
if (isset($_smarty_tpl->tpl_vars['type']->value)&&!empty($_smarty_tpl->tpl_vars['type']->value)) {?>&type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);
}?>" class="alert-link">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 New Submission
		</a>
	<?php }?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listpages']->value)&&(!isset($_smarty_tpl->tpl_vars['usePagination']->value)||$_smarty_tpl->tpl_vars['usePagination']->value!='n')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (isset($_smarty_tpl->tpl_vars['urlnext']->value)) {
echo $_smarty_tpl->tpl_vars['urlnext']->value;
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
