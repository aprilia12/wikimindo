<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 09:18:18
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_wiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21333533155b518cba35d786-94044484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd2d19e60bd7d2a1d3d4e5c9b32113347a8a413' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_wiki.tpl',
      1 => 1518844728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21333533155b518cba35d786-94044484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_view' => 0,
    'tags' => 0,
    'isDump' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b518cba420cb3_05967260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b518cba420cb3_05967260')) {function content_5b518cba420cb3_05967260($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Use the 'Quick Edit' module to easily create or edit wiki pages. <a class="btn btn-default" href="tiki-admin_modules.php"><?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 Modules</a>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form class="form-horizontal" action="tiki-admin.php?page=wiki" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="heading input_submit_container text-right">
	</div>
	<div class="t_navbar margin-bottom-md clearfix">
		<?php echo smarty_function_button(array('_icon_name'=>'admin_wiki','_text'=>"Pages",'_type'=>"link",'_class'=>'btn btn-link','_script'=>'tiki-listpages.php','_title'=>"List wiki pages"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=="y") {?>
			<?php echo smarty_function_button(array('_icon_name'=>'structure','_text'=>"Structures",'_type'=>"link",'_class'=>'btn btn-link','_script'=>'tiki-admin_structures.php','_title'=>"List structures"),$_smarty_tpl);?>

		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_wiki")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_wiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki','visible'=>"always"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_url_scheme'),$_smarty_tpl);?>

			</fieldset>
			<fieldset class="table">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_include'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wikiplugin_include_childcontainer">
				  <?php echo smarty_function_preference(array('name'=>'wiki_plugin_include_link_original'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_transclude'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_randominclude'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_slideshow'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_attach'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_backlinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_listpages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showpages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_titlesearch'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_wantedpages'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

			<fieldset>
				<legend>Page display</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_description','label'=>"Description"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_page_title','label'=>"Display page name as page title"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_name_above','label'=>"Display page name above page"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_name_inside','label'=>"Display page name inside page content"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_pageid','label'=>"Page ID"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_show_version','label'=>"Page version"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_authors_style','label'=>"List authors"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_authors_style_by_page','label'=>"Allow override per page"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_show_hide_before'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_actions_bar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_navigation_bar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_topline_position'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'page_bar_position'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_encourage_contribution'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_hide_title'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_heading_links'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Automatic table of contents</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_auto_toc'),$_smarty_tpl);?>

				<div class="adminoptionbox clearfix" id="wiki_auto_toc_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_inline_auto_toc'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_toc_pos'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_toc_offset'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Page name</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_page_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_badchar_prevent'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Editing</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_templates'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_templates_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'lock_content_templates'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_warn_on_edit'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'warn_on_edit_time'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_undo'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_footnotes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_allowhtml'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_timeout_warning'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_section'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_edit_section_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_edit_section_level'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_minor'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_mandatory_category'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_actionlog_bytes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_mandatory_edit_summary'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_freetags_edit_position'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Sharing on social networks<?php echo smarty_function_help(array('url'=>"Social+Networks#Using+ShareThis"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_sharethis'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_sharethis_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'blog_sharethis_publisher'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_sharethis_encourage'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_sandbox'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_references'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_references_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_library_references'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_references_popover'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_references_style'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_pagination'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="wiki_pagination_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_page_separator'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_export'),$_smarty_tpl);?>

			<div class="adminoptionboxchild col-md-8 col-sm-offset-4" id="feature_wiki_export_childcontainer">
				<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'export','showDisabled'=>'y','label'=>"Export permissions"),$_smarty_tpl);?>

				<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'picture','showDisabled'=>'y','label'=>"Picture permissions"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"tiki-export_wiki_pages.php",'_text'=>"Export Wiki Pages"),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wikiwords'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_wikiwords_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_wikiwords_usedash'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_plurals'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_history'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_history_childcontainer">
				<div class="col-sm-offset-4 col-sm-8" style="margin-bottom:10px">
					<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'history','showDisabled'=>'y'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'maxVersions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'keep_versions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_history_ip'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_wiki_diff_style'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_history_full'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_page_contribution'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_discuss'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_wiki_discuss_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_forum_id'),$_smarty_tpl);?>

				<div class="col-sm-offset-4 col-sm-8" style="margin-bottom:10px">
					<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'forums'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wiki_discuss_visibility'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_source'),$_smarty_tpl);?>

			<div class="adminoptionboxchild col-md-8 col-sm-offset-4" id="feature_source_childcontainer">
				<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'source','showDisabled'=>'y'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_ratings'),$_smarty_tpl);?>

			<div class="adminoptionboxchild col-sm-offset-4 col-sm-8" id="feature_wiki_ratings_childcontainer">
				<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'ratings','showDisabled'=>'y'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="wiki_simple_ratings_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings_options'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_backlinks'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_backlinks_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_backlinks_name_len'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_forum_post'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_comment'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_post'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_article'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_trackeritem'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_tracker'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_trackerfield'),$_smarty_tpl);?>

                                <?php echo smarty_function_preference(array('name'=>'wiki_backlinks_show_calendar_event'),$_smarty_tpl);?>

				<div class="col-sm-offset-4 col-md-8">
					<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'backlinks','showDisabled'=>'y'),$_smarty_tpl);?>

				</div>
			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_semantic'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_prefixalias_tokens'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_likePages'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="wiki_likepages_samelang_only">
				<?php echo smarty_function_preference(array('name'=>'wiki_likepages_samelang_only'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_pagealias'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_pagealias_tokens'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_rankings'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_import_html'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_import_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_wiki_use_date_links">
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date_links'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_uses_slides'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_usrlock'),$_smarty_tpl);?>

			<div class="adminoptionboxchild col-sm-8 col-sm-offset-4" id="feature_wiki_usrlock_childcontainer">
				<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'lock','showDisabled'=>'y'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_creator_admin'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_mindmap'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_feature_copyrights'),$_smarty_tpl);?>

			<div class="adminoptionbox clearfix">
				<fieldset>
					<legend>Attachments</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_attachments'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_attachments_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'w_displayed_default'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'w_use_db'),$_smarty_tpl);?>

						<div class="adminoptionboxchild w_use_db_childcontainer n">
							<?php echo smarty_function_preference(array('name'=>'w_use_dir'),$_smarty_tpl);?>

						</div>
						<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['w_use_dir'])) {?>
							If you change storage, it is better to move all the files for easy backup...
							<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"tiki-admin.php?page=wikiatt&all2db=1",'_text'=>"Change all to db"),$_smarty_tpl);?>

							<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"tiki-admin.php?page=wikiatt&all2file=1",'_text'=>"Change all to file"),$_smarty_tpl);?>

						<?php }?>
					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_pictures'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_pictures_childcontainer">
						<div class="col-sm-offset-4 col-sm-8">
							<?php echo smarty_function_permission_link(array('addclass'=>"timeout",'mode'=>'button','permType'=>'wiki','textFilter'=>'picture','showDisabled'=>'y'),$_smarty_tpl);?>

						</div>
						<?php echo smarty_function_preference(array('name'=>'feature_filegals_manager'),$_smarty_tpl);?>

						<div class="col-sm-offset-4 col-sm-8">
							<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"tiki-admin.php?page=wiki&amp;rmvunusedpic=1",'_text'=>"Remove unused pictures"),$_smarty_tpl);?>

							<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"tiki-admin.php?page=wiki&amp;moveWikiUp=1",'_text'=>"Move images from wiki_up to the home file gallery"),$_smarty_tpl);?>

							<span class="help-block">
								If you use these buttons please make sure to have a backup of the database and the directory wiki_up
							</span>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="adminoptionbox clearfix">
				<fieldset>
					<legend>Comments</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_comments'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_comments_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'wiki_comments_displayed_default'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_comments_form_displayed_default'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_comments_per_page'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_comments_default_ordering'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_comments_allow_per_page'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

					</div>
				</fieldset>
			</div>
			<div class="adminoptionbox clearfix">
				<fieldset>
					<legend>Structures<?php echo smarty_function_help(array('url'=>"Structures"),$_smarty_tpl);?>
</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_structure_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_wiki_open_as_structure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_wiki_make_structure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_wiki_categorize_structure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'lock_wiki_structures'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_create_webhelp'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure_drilldownmenu'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'page_n_times_in_a_structure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_listorphanStructure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_wiki_no_inherit_perms_structure'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wiki_structure_bar_position'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'wikiplugin_toc'),$_smarty_tpl);?>

					</div>
				</fieldset>
			</div>
			<div class="adminoptionbox clearfix">
				<fieldset>
					<legend>Wiki watch<?php echo smarty_function_help(array('url'=>"Watch"),$_smarty_tpl);?>
</legend>
					<?php echo smarty_function_preference(array('name'=>'wiki_watch_author'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_editor'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_minor'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_keywords'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'geo_locate_wiki'),$_smarty_tpl);?>

			<fieldset>
				<legend>Namespaces<?php echo smarty_function_help(array('url'=>"Namespaces"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
					<div class="col-sm-offset-4 colsm-8">
						The namespace separator should not
						<ul>
							<li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&amp;+;=&lt;&gt;</li>
							<li>conflict with wiki syntax tagging</li>
						</ul>
					</div>
					<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_page_title'),$_smarty_tpl);?>

					<div class="col-sm-offset-4 colsm-8">
						<p><strong>Settings that may be affected by the namespace separator</strong></p>
						To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
						Note: a conversion of :: to ::: for existing pages must be done manually.<br/>
					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

					<div class="col-sm-offset-4 colsm-8">
						If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'namespace_force_links'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Flagged Revision")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Flagged Revision"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval'),$_smarty_tpl);?>

				<div id="flaggedrev_approval_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval_categories'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Flagged Revision"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Page Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Page Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_listPages'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_lastChanges'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_listorphanPages'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_listorphanStructure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'gmap_page_list'),$_smarty_tpl);?>

			<div class="adminoptionbox clearfix">
				<fieldset>
					<legend>Configuration</legend>
					<div class="adminoptionbox clearfix">
						Select which items to display when listing pages:
					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_list_sortorder'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<?php echo smarty_function_preference(array('name'=>'wiki_list_sortdirection'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_list_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_name'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="wiki_list_name_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'wiki_list_name_len'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_list_hits'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_lastmodif'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_creator'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_lastver'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_comment'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="wiki_list_comment_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'wiki_list_comment_len'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_list_description'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="wiki_list_description_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'wiki_list_description_len'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'wiki_list_status'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_versions'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_links'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_backlinks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_size'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_language'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_categories_path'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_list_rating'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Page Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tools")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

				<div>
					<h4>Database dumps & restores</h4>

					Create database archives of wiki pages for restoring at a later date.<br>
					<label for="tagname">Name for dump</label>
					<input maxlength="20" size="20" type="text" name="newtagname" id="newtagname">
					<input type="submit" class="btn btn-default btn-sm timeout" name="createtag" value="Create Database Dump"><br>

					<label for="databasetag">Wiki database</label>
					<select name="tagname" <?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0') {?> disabled="disabled"<?php }?>>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['name'] = 'sel';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']]);?>
"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']];?>
</option>
							<?php endfor; else: ?>
							<option value=''>None</option>
						<?php endif; ?>
					</select>
					<input type="submit" class="btn btn-default btn-sm timeout" name="restoretag" value="Restore"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0') {?> disabled="disabled"<?php }?>>
					<input type="submit" class="btn btn-default btn-sm timeout" name="removetag" value="Remove"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0') {?> disabled="disabled"<?php }?>>
					<h4>Dump files</h4>
					Dump files archive wiki pages for various usages such as off-line browsing or distribution on optical disks.
					<h5>Warnings</h5>
					<ul>
						<li>The HTML files generated may refer to files not included in the dump. Dumps do not include files attached to wiki pages.</li>
						<?php if ($_smarty_tpl->tpl_vars['isDump']->value) {?><li>Dumping will overwrite the preexisting dump.</li><?php }?>
					</ul>
					<br><br>

					<input type="submit" class="btn btn-default btn-sm timeout" name="createdump" value="Create Dump File">
					<input type="submit" class="btn btn-default btn-sm timeout" name="downloaddump" value="Download Dump File" <?php if (!$_smarty_tpl->tpl_vars['isDump']->value) {?> disabled="disabled"<?php }?>>
					<input type="submit" class="btn btn-default btn-sm timeout" name="removedump" data-target="_blank" value="Remove Dump File" <?php if (!$_smarty_tpl->tpl_vars['isDump']->value) {?> disabled="disabled"<?php }?>>
				</div>
			<br>
			<h4><a class="timeout" href="tiki-search_replace.php">Mass search and replace</a></h4>

			<h4><a class="timeout" href="tiki-report_direct_object_perms.php">Report wiki pages with direct object permissions</a></h4>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_wiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
