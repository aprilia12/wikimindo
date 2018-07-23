<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-read_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16345593595b554fcda96725-74618810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9860efaba038ec27ff182f8b8e0c92d297c339' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-read_article.tpl',
      1 => 1461578566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16345593595b554fcda96725-74618810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_edit_article' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_cms' => 0,
    'prefs' => 0,
    'tiki_p_edit_submission' => 0,
    'tiki_p_read_article' => 0,
    'tiki_p_articles_read_heading' => 0,
    'tiki_p_approve_submission' => 0,
    'tiki_p_remove_submission' => 0,
    'ispublished' => 0,
    'is_categorized' => 0,
    'display_catpath' => 0,
    'tiki_p_view_freetags' => 0,
    'freetags' => 0,
    'type' => 0,
    'articleId' => 0,
    'tiki_p_read_comments' => 0,
    'tiki_p_post_comments' => 0,
    'tiki_p_edit_comments' => 0,
    'display_catobjects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b554fcdb0f8b2_26563052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554fcdb0f8b2_26563052')) {function content_5b554fcdb0f8b2_26563052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_custom_template')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.custom_template.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<div class="t_navbar">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-edit_article.php",'_type'=>"link",'_icon_name'=>"create",'_text'=>"New Article"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value!='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-edit_submission.php",'_type'=>"link",'_icon_name'=>"create",'_text'=>"New Submission"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_articles_read_heading']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
	<?php echo smarty_function_button(array('href'=>"tiki-view_articles.php",'_type'=>"link",'_icon_name'=>"articles",'_text'=>"View Articles"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_approve_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_remove_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y")) {?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_submissions.php",'_type'=>"link",'_icon_name'=>"view",'_text'=>"View Submissions"),$_smarty_tpl);?>

	<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['ispublished']->value=='n'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Not Published")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Not Published"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	This article is currently unpublished and visible only to editors.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Not Published"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categorypath']=='y') {?>
	<div align="right"><?php echo $_smarty_tpl->tpl_vars['display_catpath']->value;?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php ob_start();
echo smarty_function_custom_template(array('basetpl'=>'article.tpl','modifiers'=>array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['articleId']->value)),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_article_comments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_post_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value=='y')) {?>

	<div id="comment-container" data-target="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>'article','objectId'=>$_smarty_tpl->tpl_vars['articleId']->value),$_smarty_tpl);?>
"></div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var id = '#comment-container';
		$(id).comment_load($(id).data('target'));
		$(document).ajaxComplete(function(){$(id).tiki_popover();});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y') {?>
	<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!='') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
