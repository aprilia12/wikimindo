<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:36:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_fgal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13135829545b554d5ae08491-74802680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc1571e3c9eef49256a69c1e0d7a5aaa598eb00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_fgal.tpl',
      1 => 1516689434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13135829545b554d5ae08491-74802680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usedSize' => 0,
    'prefs' => 0,
    'section' => 0,
    'missingHandlers' => 0,
    'mime' => 0,
    'vnd_ms_files_exist' => 0,
    'fgal_handlers' => 0,
    'cmd' => 0,
    'viewerjs_err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b554d5aedb3d7_02182069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554d5aedb3d7_02182069')) {function content_5b554d5aedb3d7_02182069($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_quotabar')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.quotabar.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	To create or remove file galleries, select <a class="rbox-link" href="tiki-list_file_gallery.php">File Galleries</a> from the application menu.
	<hr>
	If you decide to store files in a directory you must ensure that the user cannot access directly to the directory.
	You have two options to accomplish this:<br><ul><li>Use a directory outside your document root, make sure your php script can read and write to that directory</li><li>Use a directory inside the document root and use .htaccess to prevent the user from listing the directory contents</li></ul>
	To configure the directory path use UNIX like paths for example files/ or c:/foo/files or /www/files/
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="form-horizontal" action="tiki-admin.php?page=fgal" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-list_file_gallery.php" title="File galleries listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 File Galleries
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"fgal_admin")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"fgal_admin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>

			<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_use_db'),$_smarty_tpl);?>

			<div class="adminoptionboxchild fgal_use_db_childcontainer n">
				<?php echo smarty_function_preference(array('name'=>'fgal_use_dir'),$_smarty_tpl);?>

			</div>
			<div class="col-sm-8 col-sm-offset-4 margin-bottom-md">
				<button role="button" type="submit" class="btn btn-default timeout" name="move" value="to_fs">
					Move files from database to directory
				</button>
				<button role="button" type="submit" class="btn btn-default timeout" name="move" value="to_db">
					Move files from directory to database
				</button>
			</div>

			<?php echo smarty_function_preference(array('name'=>'fgal_podcast_dir'),$_smarty_tpl);?>


			<fieldset>
				<legend>Features<?php echo smarty_function_help(array('url'=>"File+Gallery+Config"),$_smarty_tpl);?>
</legend>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_comments'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_comments_childcontainer">
					<a class="link" href="tiki-admin.php?page=comments">Manage comment settings</a>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_display_zip_option'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_limit_hits_per_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_prevent_negative_score'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_allow_duplicates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'file_galleries_use_jquery_upload'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_batch'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_batch_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_batch_dir'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_delete_after'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_delete_after_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_delete_after_email'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_keep_fileId'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_save_draft'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_templates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_tracker_existing_search'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_fix_mime_type'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_fix_mime_type_childcontainer">
					<input type="submit" class="btn btn-default btn-sm timeout" name="updateMime" id="updateMime" value="Update mime of all non archived octet-stream files">
				</div>

				<?php echo smarty_function_preference(array('name'=>'fgal_clean_xml_always'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_allow_svg'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_upload_from_source'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_upload_from_source_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_source_refresh_frequency'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_source_show_refresh'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'tiki_check_file_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'file_galleries_redirect_from_image_gallery'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Quota<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Quota"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota'),$_smarty_tpl);?>
Used: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['usedSize']->value);?>

				<div class="adminoptionboxchild" id="fgal_quota_childcontainer">
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start();
echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y))",'x'=>$_smarty_tpl->tpl_vars['usedSize']->value,'y'=>$_smarty_tpl->tpl_vars['prefs']->value['fgal_quota']),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo smarty_function_quotabar(array('length'=>'100','value'=>'$smarty.capture.use'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota_per_fgal'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_quota_per_fgal_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_quota_default'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Upload Regex<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Filename_must_match:"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_match_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_nmatch_regex'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_img'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_carousel'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_galleriffic'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_colorbox'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_draw'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_annotation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_flash'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<span class="help-block">Configuration for gallery listings</span>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Changing these settings will <em>not</em> affect existing file galleries. These changes will apply <em>only</em> to new file galleries.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<?php echo smarty_function_preference(array('name'=>'fgal_default_view'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_sortField'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="fgal_sortField_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'fgal_sortDirection'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'fgal_quota_show'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search_in_content'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_thumbactions'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_thumb_max_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_browse_name_max_length'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_image_max_size_x'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_image_max_size_y'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_ratio_hits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_properties'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_replace'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_checked'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_icon_fileId'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_explorer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_path'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_slideshow'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_id'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_type'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_name'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_created'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lastModif'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_creator'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_author'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_last_user'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_comment'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_files'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_hits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lastDownload'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lockedby'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_backlinks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_deleteAfter'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_share'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_source'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if ($_smarty_tpl->tpl_vars['section']->value=='admin') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Admin Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Admin Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<br>
				<span class="help-block">Configuration for gallery administration listings</span>
				<fieldset>
					<?php echo smarty_function_preference(array('name'=>'fgal_list_id_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_type_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_name_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_size_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_created_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lastModif_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_creator_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_author_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_last_user_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_comment_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_files_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_hits_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lastDownload_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lockedby_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_backlinks_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_deleteAfter_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_share_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_source_admin'),$_smarty_tpl);?>

				</fieldset>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Admin Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Search Indexing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Search Indexing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'fgal_enable_auto_indexing'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_asynchronous_indexing'),$_smarty_tpl);?>

			<div class="adminoptionbox">
				<fieldset>
					<legend>Handlers<?php echo smarty_function_help(array('url'=>"Search-within-files",'desc'=>'If you want the content of the files which are in the File Gallery to be accessible by a search, and if you have a script that extracts the file content into a text, you can associate the script to the Mime type and the files content will be indexed.'),$_smarty_tpl);?>
</legend>
					<div class="adminoptionbox">
						<div class="adminoptionlabel">Add custom handlers to make your files &quot;searchable&quot; content.
							<ul>
								<li>
									Use <strong>%1</strong> as the internal file name. For example, use <strong>strings %1</strong> to convert the document to text, using the Unix <strong>strings</strong> command.
								</li>
								<li>
									To delete a handler, leave the <strong>System Command</strong> field blank.
								</li>
							</ul>
						</div>
					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['missingHandlers']->value)) {?>
						Tiki is pre-configured to handle many common types. If any of those are listed here, it is because the command line tool is unavailable.
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Missing Handlers")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php  $_smarty_tpl->tpl_vars['mime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['missingHandlers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mime']->key => $_smarty_tpl->tpl_vars['mime']->value) {
$_smarty_tpl->tpl_vars['mime']->_loop = true;
?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mime']->value);?>

								<br>
							<?php } ?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php if ($_smarty_tpl->tpl_vars['vnd_ms_files_exist']->value) {?>
							<div class="adminoptionbox">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>"Mime Types")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>"Mime Types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<p>
										Previous versions of Tiki may have assigned alternative mime-types to Microsoft Office files, such as "application/vnd.ms-word" and these need to be changed to be "application/msword" for the default file indexing to function properly.
									</p>
									<input type="submit" class="btn btn-default btn-sm" name="filegalfixvndmsfiles" value="Fix vnd.ms-* mime type files"/>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>"Mime Types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
						<?php }?>
					<?php }?>

					<div class="adminoptionbox">
						<div class="adminoptionlabel">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th>MIME Type</th>
										<th>System Command</th>
									</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['cmd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmd']->_loop = false;
 $_smarty_tpl->tpl_vars['mime'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_handlers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmd']->key => $_smarty_tpl->tpl_vars['cmd']->value) {
$_smarty_tpl->tpl_vars['cmd']->_loop = true;
 $_smarty_tpl->tpl_vars['mime']->value = $_smarty_tpl->tpl_vars['cmd']->key;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
</td>
										<td>
											<input name="mimes[<?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
]" class="form-control" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmd']->value,'html');?>
" />
										</td>
									</tr>
								<?php } ?>
								<tr>
									<td class="odd">
										<input name="newMime" type="text" size="30" />
									</td>
									<td class="odd">
										<input name="newCmd" type="text" size="30"/>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</fieldset>

				<div class="adminoptionbox">
					<div class="adminoptionlabel">
						<div align="center">
							<input type="submit" class="btn btn-default btn-sm timeout" name="filegalredosearch" value="Reindex all files for search">
						</div>
					</div>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Search Indexing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Enhancements")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Enhancements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<fieldset>
				<legend>Access</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_webdav'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_feature'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_viewerjs_feature_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_uri'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['viewerjs_err']->value) {?>
						<div class="col-sm-8 pull-right">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['viewerjs_err']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					<?php }?>
				</div>
			</fieldset>
			<fieldset>
				<legend>H5P</legend>
				<?php echo smarty_function_preference(array('name'=>'h5p_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="h5p_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'h5p_filegal_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_whitelist'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_dev_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_track_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_save_content_state'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="h5p_save_content_state_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'h5p_save_content_frequency'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'h5p_export'),$_smarty_tpl);?>


					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"H5P Info")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"H5P Info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						Service URL to purge unused libraries can be found here. Can be used in a cron task<br>
						<a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'cron','token'=>$_smarty_tpl->tpl_vars['prefs']->value['h5p_cron_token']),$_smarty_tpl);?>
" class="btn btn-link">
							<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'cron','token'=>$_smarty_tpl->tpl_vars['prefs']->value['h5p_cron_token']),$_smarty_tpl);?>

						</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"H5P Info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Draw</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_draw_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_draw_separate_base_image'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_draw_separate_base_image_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_draw_in_userfiles'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>SCORM<?php echo smarty_function_help(array('desc'=>"SCORM is a package format for Learning Management Systems. Tiki can create tracker items based on the SCORM metadata. This allows you to manage SCORM packages within Tiki."),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'scorm_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="scorm_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'scorm_tracker'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Vimeo</legend>
				<?php echo smarty_function_preference(array('name'=>'vimeo_upload'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'vimeo_delete'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="vimeo_upload_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'vimeo_default_gallery'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_consumer_key'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_consumer_secret'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_access_token'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_access_token_secret'),$_smarty_tpl);?>

				</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Enhancements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"fgal_admin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
