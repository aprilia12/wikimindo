<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:26:18
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20323935515b6d13ea532883-59522653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a3e0abcf95db987cad35ca167ef3f104ebe645e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_comments.tpl',
      1 => 1515477450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20323935515b6d13ea532883-59522653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d13ea5c3121_84698109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d13ea5c3121_84698109')) {function content_5b6d13ea5c3121_84698109($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=comments" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12">
			<a role="link" href="tiki-list_comments.php" class="btn btn-link tips" title=":Comments listing"><?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Comments</a>
			<?php echo smarty_function_permission_link(array('mode'=>'link','addclass'=>"btn btn-link tips",'_iconname'=>"key",'textFilter'=>'comment','showDisabled'=>'y'),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<fieldset>
		<legend>Site-wide features</legend>
		<div class="admin featurelist">
			<?php echo smarty_function_preference(array('name'=>'feature_comments_moderation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_comments_locking'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_comments_post_as_anonymous'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_vote'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_archive'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_allow_correction'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_akismet_filter'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="comments_akismet_filter_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'comments_akismet_apikey'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'comments_akismet_check_users'),$_smarty_tpl);?>

			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Display options</legend>
		<div class="admin featurelist">
			<?php echo smarty_function_preference(array('name'=>'comments_notitle'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'section_comments_parse'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_field_email'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_field_website'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_comment'),$_smarty_tpl);?>

		</div>
	</fieldset>
	<fieldset>
		<legend>Annotations</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_inline_comments'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_inline_comments_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'comments_inline_annotator'),$_smarty_tpl);?>

		</div>
	</fieldset>
	<fieldset>
		<legend>Using comments in various features</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_article_comments'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_comments'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_comments_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_comments_displayed_default'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_comments_form_displayed_default'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_comments_per_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_comments_default_ordering'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_comments_allow_per_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_blogposts_comments'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_comments'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_file_galleries_comments_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'file_galleries_comments_per_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'file_galleries_comments_default_ordering'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_poll_comments'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_faq_comments'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackercomments'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form><?php }} ?>
