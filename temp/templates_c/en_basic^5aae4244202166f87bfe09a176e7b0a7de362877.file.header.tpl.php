<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:44:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7827636335b513e89c92f87-99781172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aae4244202166f87bfe09a176e7b0a7de362877' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\header.tpl',
      1 => 1518838630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7827636335b513e89c92f87-99781172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_uri' => 0,
    'dir_level' => 0,
    'prefs' => 0,
    'base_url_canonical' => 0,
    'forum_info' => 0,
    'thread_info' => 0,
    'freetags' => 0,
    'taginfo' => 0,
    'galleryId' => 0,
    'title' => 0,
    'metatag_local_keywords' => 0,
    'section' => 0,
    'post_info' => 0,
    'blog_data' => 0,
    'heading' => 0,
    'parsed_heading' => 0,
    'body' => 0,
    'parsed_body' => 0,
    'gal_info' => 0,
    'description' => 0,
    'metatag_description' => 0,
    'metatag_robots' => 0,
    'sswindowtitle' => 0,
    'trail' => 0,
    'structure' => 0,
    'structure_path' => 0,
    'page_description_title' => 0,
    'tracker_item_main_value' => 0,
    'aliasname' => 0,
    'page' => 0,
    'arttitle' => 0,
    'categ_info' => 0,
    'userinfo' => 0,
    'tracker_info' => 0,
    'headtitle' => 0,
    'header_title' => 0,
    'mid' => 0,
    'header_featured_images' => 0,
    'header_featured_image' => 0,
    'hasImage' => 0,
    'articleId' => 0,
    'topicId' => 0,
    'editable' => 0,
    'tiki_p_edit' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_view' => 0,
    'tiki_p_read_blog' => 0,
    'tiki_p_read_article' => 0,
    'tiki_p_view_image_gallery' => 0,
    'tiki_p_view_file_gallery' => 0,
    'tiki_p_forum_read' => 0,
    'tiki_p_view_directory' => 0,
    'tiki_p_view_calendar' => 0,
    'rsslist_trackers' => 0,
    'tracker' => 0,
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513e89d4a920_72874631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513e89d4a920_72874631')) {function content_5b513e89d4a920_72874631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_function_breadcrumbs')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.breadcrumbs.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_stringfix')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.stringfix.php';
?>
<?php if ($_smarty_tpl->tpl_vars['base_uri']->value&&($_smarty_tpl->tpl_vars['dir_level']->value>0||$_smarty_tpl->tpl_vars['prefs']->value['feature_html_head_base_tag']=='y')) {?>
	<base href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_uri']->value);?>
">
<?php }?>
<!--Latest IE Compatibility-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="generator" content="Tiki Wiki CMS Groupware - https://tiki.org">

<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
" name="twitter:domain"> 

<?php echo $_smarty_tpl->getSubTemplate ("canonical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])&$_smarty_tpl->tpl_vars['prefs']->value['metatag_threadtitle']=='y') {?>
	<meta name="keywords" content="Forum <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['name']);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_info']->value['title']);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y') {
$_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
 <?php }
}?>">
<?php } elseif (isset($_smarty_tpl->tpl_vars['galleryId']->value)&&$_smarty_tpl->tpl_vars['galleryId']->value!=''&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_imagetitle']!='n') {?>
	<meta name="keywords" content="Images Galleries <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y') {
$_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
 <?php }
}?>">
<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords']!=''||!empty($_smarty_tpl->tpl_vars['metatag_local_keywords']->value)) {?>
	<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords']);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y') {
$_smarty_tpl->tpl_vars["taginfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["taginfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["taginfo"]->key => $_smarty_tpl->tpl_vars["taginfo"]->value) {
$_smarty_tpl->tpl_vars["taginfo"]->_loop = true;
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
 <?php }
}?> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['metatag_local_keywords']->value);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_author']!='') {?>
	<meta name="author" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_author']);?>
">
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['section']->value)&&$_smarty_tpl->tpl_vars['section']->value=="blogs") {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['post_info']->value['parsed_excerpt'])) {?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post_info']->value['parsed_excerpt']),200)), null, 0);?>
	<?php } elseif (!empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post_info']->value['parsed_data']))) {?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post_info']->value['parsed_data']),200)), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape((($_smarty_tpl->tpl_vars['post_info']->value['title']).(' - ')).($_smarty_tpl->tpl_vars['blog_data']->value['title'])), null, 0);?>
	<?php }?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['section']->value)&&$_smarty_tpl->tpl_vars['section']->value=="cms") {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['heading']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['parsed_heading']->value),200)), null, 0);?>
	<?php } elseif (!empty($_smarty_tpl->tpl_vars['body']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['parsed_body']->value),200)), null, 0);?>
	<?php }?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['section']->value)&&$_smarty_tpl->tpl_vars['section']->value=="file_galleries") {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['description'])) {?>
		<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['gal_info']->value['description']),200)), null, 0);?>
	<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y'&&!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value), null, 0);?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['metatag_description'])) {?>
	<?php $_smarty_tpl->tpl_vars['metatag_description'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_description']), null, 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['metatag_description']->value)&&!empty(trim($_smarty_tpl->tpl_vars['metatag_description']->value))) {?>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metatag_description']->value;?>
" property="og:description">
	<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['metatag_description']->value;?>
">
<?php } else { ?>
	<meta name="description" content="<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>" property="og:description">
	<meta name="twitter:description" content="<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition']!='') {?>
	<meta name="geo.position" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition']);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion']!='') {?>
	<meta name="geo.region" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion']);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename']!='') {?>
	<meta name="geo.placename" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename']);?>
">
<?php }?>
<?php if ((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']!='')&&(!isset($_smarty_tpl->tpl_vars['metatag_robots']->value)||$_smarty_tpl->tpl_vars['metatag_robots']->value=='')) {?>
	<meta name="robots" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']);?>
">
<?php }?>
<?php if ((!isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])||$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']=='')&&(isset($_smarty_tpl->tpl_vars['metatag_robots']->value)&&$_smarty_tpl->tpl_vars['metatag_robots']->value!='')) {?>
	<meta name="robots" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['metatag_robots']->value);?>
">
<?php }?>
<?php if ((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']!='')&&(isset($_smarty_tpl->tpl_vars['metatag_robots']->value)&&$_smarty_tpl->tpl_vars['metatag_robots']->value!='')) {?>
	<meta name="robots" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']);?>
, <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['metatag_robots']->value);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter']!='') {?>
	<meta name="revisit-after" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter']);?>
">
<?php }?>

<meta content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_name'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_name'];
} else {
echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
}?>" property="og:site_name">
<meta content="<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site'];
} else {
echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
}?>" name="twitter:site">

<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id'])) {?><meta content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id'];?>
" property="fb:app_id"><?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'header_title', null); ob_start();
if (!empty($_smarty_tpl->tpl_vars['sswindowtitle']->value)) {
if ($_smarty_tpl->tpl_vars['sswindowtitle']->value=='none') {?>&nbsp;<?php } else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sswindowtitle']->value);
}
} else {
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location']=='before') {
echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));?>
 <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php }
$_smarty_tpl->_capture_stack[0][] = array('default', "page_description_title", null); ob_start();
if (($_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb']=="desc")&&isset($_smarty_tpl->tpl_vars['trail']->value)) {
echo smarty_function_breadcrumbs(array('type'=>$_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb'],'loc'=>"head",'crumbs'=>$_smarty_tpl->tpl_vars['trail']->value),$_smarty_tpl);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (isset($_smarty_tpl->tpl_vars['structure']->value)&&$_smarty_tpl->tpl_vars['structure']->value=='y') {
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['structure_path']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
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
ob_start();?><?php echo $_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias'];?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["aliasname"] = new Smarty_variable($_tmp6, null, 0);
endfor; endif;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location']=='only') {
echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
} else {
if (!empty($_smarty_tpl->tpl_vars['page_description_title']->value)) {
echo $_smarty_tpl->tpl_vars['page_description_title']->value;
} else {
if (!empty($_smarty_tpl->tpl_vars['tracker_item_main_value']->value)) {
echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker_item_main_value']->value,255));
} elseif (!empty($_smarty_tpl->tpl_vars['title']->value)&&!is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
} elseif (!empty($_smarty_tpl->tpl_vars['aliasname']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['aliasname']->value);
} elseif (!empty($_smarty_tpl->tpl_vars['page']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
} elseif (!empty($_smarty_tpl->tpl_vars['arttitle']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['arttitle']->value);
} elseif (!empty($_smarty_tpl->tpl_vars['thread_info']->value['title'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_info']->value['title']);
} elseif (!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['name']);
} elseif (!empty($_smarty_tpl->tpl_vars['categ_info']->value['name'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categ_info']->value['name']);
} elseif (!empty($_smarty_tpl->tpl_vars['userinfo']->value['login'])) {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['userinfo']->value['login']);
} elseif (!empty($_smarty_tpl->tpl_vars['tracker_info']->value['pagetitle'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_info']->value['pagetitle']);
} elseif (!empty($_smarty_tpl->tpl_vars['tracker_info']->value['name'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_info']->value['name']);
} elseif (!empty($_smarty_tpl->tpl_vars['headtitle']->value)) {
echo smarty_modifier_escape(smarty_modifier_stringfix($_smarty_tpl->tpl_vars['headtitle']->value,"&nbsp;"));
} elseif (!empty($_smarty_tpl->tpl_vars['description']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);
}
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location']=='after') {?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']));
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<title><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</title>


<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
">

<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
">

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl') {?>
		<meta content="article" property="og:type">
	<?php } else { ?>
		<meta content="website" property="og:type">
	<?php }?>
<?php }?>


<meta name="twitter:card" content="summary">

<?php if (!empty($_smarty_tpl->tpl_vars['header_featured_images']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['header_featured_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header_featured_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['header_featured_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header_featured_image']->key => $_smarty_tpl->tpl_vars['header_featured_image']->value) {
$_smarty_tpl->tpl_vars['header_featured_image']->_loop = true;
?>
		<meta property="og:image" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['header_featured_image']->value);?>
">
		<meta name="twitter:image" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['header_featured_image']->value);?>
">
	<?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl') {?>
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl') {?>

	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl') {?>
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
if ($_smarty_tpl->tpl_vars['hasImage']->value=='y') {?>article_image.php?image_type=article&id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;
} else { ?>article_image.php?image_type=topic&id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;
}?>" property="og:image">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
if ($_smarty_tpl->tpl_vars['hasImage']->value=='y') {?>article_image.php?image_type=article&id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;
} else { ?>article_image.php?image_type=topic&id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;
}?>" name="twitter:image">
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_image']) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_site_image'];?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site_image']) {?><meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_site_image'];?>
"><?php }?>
	<?php }?>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
	<link rel="alternate" type="application/x-wiki" title="Edit this page!" href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_wiki']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_wiki_title']))===null||$tmp==='' ? "RSS Wiki" : $tmp);?>
' href="tiki-wiki_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_blogs']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_blog']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_blogs_title']))===null||$tmp==='' ? "RSS Blogs" : $tmp);?>
' href="tiki-blogs_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_articles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_articles_title']))===null||$tmp==='' ? "RSS Articles" : $tmp);?>
' href="tiki-articles_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_image_gallery']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries_title']))===null||$tmp==='' ? "RSS Image Galleries" : $tmp);?>
' href="tiki-image_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries_title']))===null||$tmp==='' ? "RSS File Galleries" : $tmp);?>
' href="tiki-file_galleries_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_forums_title']))===null||$tmp==='' ? "RSS Forums" : $tmp);?>
' href="tiki-forums_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_directories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_directory']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_directories_title']))===null||$tmp==='' ? "RSS Directories" : $tmp);?>
' href="tiki-directories_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_calendar']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value=='y') {?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_calendar_title']))===null||$tmp==='' ? "RSS Calendars" : $tmp);?>
' href="tiki-calendars_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=='y') {?>
	<?php  $_smarty_tpl->tpl_vars["tracker"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tracker"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsslist_trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tracker"]->key => $_smarty_tpl->tpl_vars["tracker"]->value) {
$_smarty_tpl->tpl_vars["tracker"]->_loop = true;
?>
		<link rel="alternate" type="application/rss+xml"
			title='<?php echo (($tmp = @smarty_modifier_escape((($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker_title']).(" - ")).($_smarty_tpl->tpl_vars['tracker']->value['name'])))===null||$tmp==='' ? "RSS Tracker" : $tmp);?>
'
			href="tiki-tracker_rss.php?ver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'],'url');?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
">
	<?php } ?>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_blog_sharethis']=='y')||($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_cms_sharethis']=='y')||($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis']=='y')) {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']!='') {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']=='') {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']==''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']!='') {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']==''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']=='') {?>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"><?php echo '</script'; ?>
>
	<?php }?>
<?php }?>
<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="vendor_bundled/vendor/afarkas/html5shiv/dist/html5shiv.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<![endif]-->
<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_headers();
}?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content']) {?>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php }?>

<?php }} ?>
