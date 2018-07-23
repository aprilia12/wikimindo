<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:39
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-rsslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1114446635b51656f8214e1-01418219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5324f069520f0f38c06051a9fd315ed0d7e7f513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-rsslist.tpl',
      1 => 1454323528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114446635b51656f8214e1-01418219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'prefs' => 0,
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51656f8485f5_47086867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51656f8485f5_47086867')) {function content_5b51656f8485f5_47086867($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div id="rss">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_wiki']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=='y') {?>
			<a class="linkmodule tips" title=":Wiki feed" href="tiki-wiki_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Wiki
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_blogs']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_blog']->value=='y') {?>
			<a class="linkmodule tips" title=":Blogs feed" href="tiki-blogs_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Blogs
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_articles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y') {?>
			<a class="linkmodule tips" title=":Articles feed" href="tiki-articles_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Articles
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_image_gallery']->value=='y') {?>
			<a class="linkmodule tips" title=":Image Galleries feed" href="tiki-image_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Image Galleries
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value=='y') {?>
			<a class="linkmodule tips" title=":File Galleries feed" href="tiki-file_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 File Galleries
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y') {?>
			<a class="linkmodule tips" title=":Forums feed" href="tiki-forums_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Forums
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_directories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_directory']->value=='y') {?>
			<a class="linkmodule tips" title=":Directory feed" href="tiki-directories_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Directories
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_calendar']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value=='y') {?>
			<a class="linkmodule tips" title=":Calendar feed" href="tiki-calendars_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
">
				<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 Calendars
			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=='y') {?>
			<?php  $_smarty_tpl->tpl_vars["tracker"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tracker"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsslist_trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tracker"]->key => $_smarty_tpl->tpl_vars["tracker"]->value) {
$_smarty_tpl->tpl_vars["tracker"]->_loop = true;
?>
				<a class="linkmodule" href="tiki-tracker_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
">
					<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</a>
			<?php } ?>
		<?php }?>
	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
