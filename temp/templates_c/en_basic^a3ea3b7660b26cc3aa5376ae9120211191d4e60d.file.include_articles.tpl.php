<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:11:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20962009635b51991ebd1d45-47627839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ea3b7660b26cc3aa5376ae9120211191d4e60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_articles.tpl',
      1 => 1492634472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20962009635b51991ebd1d45-47627839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgs' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51991ec2f950_11737177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51991ec2f950_11737177')) {function content_5b51991ec2f950_11737177($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Look under "<a href="tiki-admin_rssmodules.php" target="_blank" class="alert-link">External Feeds</a>" on the application menu if you are searching for the <a href="https://doc.tiki.org/Article+generator" target="_blank" class="alert-link">"Article Generator" on RSS feeds</a>.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!empty($_smarty_tpl->tpl_vars['msgs']->value)) {?>
<?php }?>
<form role="form" class="form-horizontal" method="post" action="tiki-admin.php?page=articles" enctype="multipart/form-data">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<a role="link" class="btn btn-link tips" href="tiki-list_articles.php" title=":List of articles">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Articles
		</a>
		<a role="link" class="btn btn-link tips" href="tiki-article_types.php" title=":List of article types">
			<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Article Types
		</a>
		<a role="link" class="btn btn-link tips" href="tiki-admin_topics.php" title=":List of article topics">
			<?php echo smarty_function_icon(array('name'=>"flag"),$_smarty_tpl);?>
 Article Topics
		</a>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=="y") {?>
			<a role="link" class="btn btn-default btn-sm tips" href="tiki-list_submissions.php" title=":List">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Submissions
			</a>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_articles")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_articles','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset class="table">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_articles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_article'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'art_home_title'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'maxArticles'),$_smarty_tpl);?>

			<fieldset>
				<legend>
					Features<?php echo smarty_function_help(array('url'=>"Articles"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_submissions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_use_new_list_articles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_remembers_creator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_cms_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_user_rating'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="article_user_rating_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'article_user_rating_options'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_article_comments'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_article_comments_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'article_comments_per_page'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'article_comments_default_ordering'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_cms_templates'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_cms_templates_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'lock_content_templates'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_cms_emails'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_paginate'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_custom_attributes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'geo_locate_article'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_article'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_related_articles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_article_tracker'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="tracker_article_tracker_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'tracker_article_trackerId'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'article_feature_copyrights'),$_smarty_tpl);?>

			</fieldset>
			<legend>
				Custom (Article Own) images setting
			</legend>
				<?php echo smarty_function_preference(array('name'=>'article_image_file_size_max'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_image_size_x'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_image_size_y'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_default_list_image_size_x'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'article_default_list_image_size_y'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Sharing on social networks<?php echo smarty_function_help(array('url'=>"Social+Networks#Using+ShareThis"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_cms_sharethis'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_cms_sharethis_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'article_sharethis_publisher'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Import CSV file</legend>
				<div class="adminoptionbox">
					<label for="csvlist" class="control-label col-sm-4">Batch upload (CSV file)</label>
					<div class="col-sm-8">
						<input type="file" name="csvlist" id="csvlist">
						<span class="help-block">File format: title,authorName,heading,body,lang,user....</span>
						<div align="center">
							<input type="submit" class="btn btn-default btn-sm timeout" name="import" value="Import">
						</div>
					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Articles Listing and View")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Articles Listing and View"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>List articles</legend>
				<?php echo smarty_function_preference(array('name'=>'art_sort_mode'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_title'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="art_list_title_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'art_list_title_len'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'art_list_id'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_topic'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_date'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_expire'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_visible'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_lang'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_authorName'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_rating'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_usersRating'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_reads'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_size'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_img'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_list_ispublished'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gmap_article_list'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Article view</legend>
				<?php echo smarty_function_preference(array('name'=>'art_trailer_pos'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'art_header_text_pos'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Articles Listing and View"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php }} ?>
