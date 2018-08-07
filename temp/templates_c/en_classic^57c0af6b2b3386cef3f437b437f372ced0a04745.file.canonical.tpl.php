<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:46
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\canonical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2263137535b691086bde832-33725930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c0af6b2b3386cef3f437b437f372ced0a04745' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\canonical.tpl',
      1 => 1518843222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263137535b691086bde832-33725930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mid' => 0,
    'base_url_canonical' => 0,
    'page' => 0,
    'canonical_ending' => 0,
    'itemId' => 0,
    'forumId' => 0,
    'comments_parentId' => 0,
    'blogId' => 0,
    'postId' => 0,
    'articleId' => 0,
    'parentId' => 0,
    'galleryId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691086c05930_31022324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691086c05930_31022324')) {function content_5b691086c05930_31022324($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-index_p.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page_raw.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-all_languages.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_content.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='extends:layouts/internal/layout_view.tpl|tiki-show_page.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url"> 
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_tracker_item.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum_thread.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-print_forum_thread.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">	
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-browse_categories.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-list_file_gallery.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
file<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
file<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
" property="og:url">
	<?php }?>
<?php }?>
<?php }} ?>
