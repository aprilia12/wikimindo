<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 06:07:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\menu\edit_option.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6336248875b6bbe1155de08-89763895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845a92abd3abe816e2a289f06d6ee413da4e64ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\menu\\edit_option.tpl',
      1 => 1511268404,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    'dc634cfdfacfeb492e972f44be2e1297d291babf' => 
    array (
      0 => 'templates\\menu\\quicklinks.tpl',
      1 => 1510573928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6336248875b6bbe1155de08-89763895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6bbe116b5a56_87682360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6bbe116b5a56_87682360')) {function content_5b6bbe116b5a56_87682360($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<?php /*  Call merged included template "templates/menu/quicklinks.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('templates/menu/quicklinks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6336248875b6bbe1155de08-89763895');
content_5b6bbe115f63a0_05225782($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "templates/menu/quicklinks.tpl" */?>
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'edit_option'),$_smarty_tpl);?>
" method="post" role="form" class="form">
		<div class="form form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_name">Name:</label>

				<div class="col-md-9">
					<input id="menu_name" class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_url">URL:</label>

				<div class="col-md-9">
					<?php $_smarty_tpl->_capture_stack[0][] = array('options', null, null); ob_start(); ?>select:function(event,ui){ui.item.value='(('+ui.item.value+'))';}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_url",'type'=>'pagename','options'=>Smarty::$_smarty_vars['capture']['options']),$_smarty_tpl);?>

					<input id="menu_url" type="text" name="url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['url']);?>
" class="form-control">

					<div class="help-block">For wiki page, use ((PageName)).</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="type">Type:</label>

				<div class="col-md-9">
					<select name="type" class="form-control">
						<option value="o" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='o') {?>selected="selected"<?php }?>>option</option>
						<option value="s" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='s') {?>selected="selected"<?php }?>>section level 0</option>
						<option value='1' <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='1') {?>selected="selected"<?php }?>>section level 1</option>
						<option value='2' <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='2') {?>selected="selected"<?php }?>>section level 2</option>
						<option value='3' <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='3') {?>selected="selected"<?php }?>>section level 3</option>
						<option value="r" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='r') {?>selected="selected"<?php }?>>sorted section level 0</option>
						<option value="-" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='-') {?>selected="selected"<?php }?>>separator</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="position">Position:</label>

				<div class="col-md-9">
					<input type="text" name="position" id="position" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['position']);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_groupname">Group:</label>

				<div class="col-md-9">
					<select id="menu_groupname" name="groupname[]" class="form-control margin-bottom-md" multiple="multiple">
						<option value="">&nbsp;</option>
						<?php  $_smarty_tpl->tpl_vars['selected'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['selected']->_loop = false;
 $_smarty_tpl->tpl_vars['groupname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['selected']->key => $_smarty_tpl->tpl_vars['selected']->value) {
$_smarty_tpl->tpl_vars['selected']->_loop = true;
 $_smarty_tpl->tpl_vars['groupname']->value = $_smarty_tpl->tpl_vars['selected']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</option>
						<?php } ?>
					</select>
					<?php if (count($_smarty_tpl->tpl_vars['option_groups']->value)>='2') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {
$_smarty_tpl->tpl_vars['ctrlMsg'] = new Smarty_variable("Use Ctrl+Click to select multiple options<br>", null, 0);
}?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['ctrlMsg']->value;?>
Selecting 2 groups means that the option will be seen if the user belongs to the 2 groups. If you want the 2 groups to see the option, create 2 options with one group each.
							<br>
						If the url is ((PageName)), you do not need to put the groups, the option will be displayed only if the page can be displayed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_section">Sections:</label>

				<div class="col-md-9">
					<input id="menu_section" type="text" name="section" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['section']);?>
" class="form-control"><br>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_section",'type'=>"array",'options'=>"source:prefNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

					<div class="help-block">Separate multiple feature/preferences with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_perm">Permissions:</label>

				<div class="col-md-9">
					<input id="menu_perm" type="text" name="perm" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['perm']);?>
" class="form-control"><br>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_perm",'type'=>"array",'options'=>"source:permNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

					<div class="help-block">Separate multiple permissions with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="menu_class">Class:</label>

				<div class="col-md-9">
					<input id="menu_class" type="text" name="class" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['class']);?>
" class="form-control"><br>

					<div class="help-block">Input an HTML class value for the menu option. Separate with a space for multiple classes.</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y') {?>
				<div class="form-group">
					<label class="control-label col-md-3" for="level">Level:</label>

					<div class="col-md-9">
						<select name="level" id="level">
							<option value="0"<?php if ($_smarty_tpl->tpl_vars['level']->value==0) {?> selected="selected"<?php }?>>All</option>
							<?php  $_smarty_tpl->tpl_vars['lev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lev']->_loop = false;
 $_smarty_tpl->tpl_vars['levn'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['userlevels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lev']->key => $_smarty_tpl->tpl_vars['lev']->value) {
$_smarty_tpl->tpl_vars['lev']->_loop = true;
 $_smarty_tpl->tpl_vars['levn']->value = $_smarty_tpl->tpl_vars['lev']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['info']->value['userlevel']==$_smarty_tpl->tpl_vars['levn']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y') {?>
				<div class="form-group">
					<label class="control-label col-md-3" for="icon">Icon:</label>

					<div class="col-md-9">
						<input type="text" name="icon" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['icon']);?>
" class="form-control">
					</div>
				</div>
			<?php }?>
			<div class="form-group text-center submit">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input type="hidden" name="optionId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['optionId']->value);?>
">
				<input type="hidden" name="menuId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuId']->value);?>
">
				<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
				<input type="hidden" name="confirm" value="1">
				<input type="submit" class="btn btn-primary" name="save" value="Save">
			</div>
		</div>

	</form>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 06:07:45
         compiled from "templates\menu\quicklinks.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6bbe115f63a0_05225782')) {function content_5b6bbe115f63a0_05225782($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?><div style="text-align:right;position:relative;">
	<div id="weburlslink">
		<a href="#" onclick="flip('weburls');return false;">Show Quick URLs</a>
	</div>
	<div id="weburls" style="display:none;position:absolute;right:-10px;top:-50px;z-index:1;"
			class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" id="urltop">Some useful URLs</h3>
			<div style="text-align: right;">
				<a href="#" class="hide_weburls" style="color:inherit; font-size: 85%" onclick="flip('weburls');return false;">Hide Quick URLs</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-5" for="wikilinks1">Home:</label>

					<div class="col-md-7">
						<select class="form-control" name="wikilinks" id="wikilinks1"
								onchange="setMenuCon(options[selectedIndex].value);return true;">
							<option value=",,,">Choose ...</option>
							<option value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'];?>
,Home Page">Home Page</option>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_blog']) {?>
								<option
								value="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_blog'],'blog');?>
,Home Blog,feature_blogs,tiki_p_view_blogs">Home Blog</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_gallery']) {?>
								<option
								value="tiki-browse_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_gallery'];?>
,Home Image Gal,feature_galleries,tiki_p_view_image_gallery">Home Image Gallery</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery']) {?>
							<option
							value="tiki-list_file_gallery?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'];?>
,Home File Gal,feature_file_galleries,tiki_p_view_file_gallery">Home File Gallery</option><?php }?>
							]
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-5" for="wikilinks2">General: </label>

					<div class="col-md-7">
						<select class="form-control" name="wikilinks" id="wikilinks2"
								onchange="setMenuCon(options[selectedIndex].value);return true;">
							<option value=",,,">Choose ...</option>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_stats']=='y') {?>
								<option
								value="tiki-stats.php,Stats,feature_stats,tiki_p_view_stats">Stats</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
								<option
								value="tiki-browse_categories.php,Categories,feature_categories,tiki_p_view_category">Categories</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
								<option
								value="tiki-user_preferences.php,User preferences">User prefs</option><?php }?>
						</select>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks3">Wiki: </label>

						<div class="col-md-7">
							<select class="form-control" name="wikilinks" id="wikilinks3"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-index.php,Wiki Home,feature_wiki,tiki_p_view">Wiki Home</option>
								<option value="tiki-lastchanges.php,Latest Changes,feature_lastChanges,tiki_p_view">Latest Changes</option>
								<option value="tiki-wiki_rankings.php,Rankings,feature_wiki_rankings,tiki_p_view">Rankings</option>
								<option value="tiki-listpages.php,List pages,feature_listPages,tiki_p_view">List pages</option>
								<option value="tiki-index.php?page=SandBox,Sandbox,feature_sandbox,tiki_p_view">Sandbox</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks4">Images: </label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks4" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-galleries.php,List galleries,feature_galleries,tiki_p_view_image_gallery">List image galleries</option>
								<option value="tiki-upload_image.php,Upload image,feature_galleries,tiki_p_upload_images">Upload</option>
								<option value="tiki-galleries_rankings.php,Gallery Rankings,feature_gal_rankings,tiki_p_view_image_gallery">Rankings</option>
								<option value="tiki-browse_gallery.php?galleryId=,Browse a gallery,feature_galleries,tiki_p_view_image_gallery">Browse a gallery</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks5">Articles: </label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks5" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-view_articles.php,Articles,feature_articles,tiki_p_read_article">Articles home</option>
								<option value="tiki-list_articles.php,All articles,feature_articles,tiki_p_read_article">List articles</option>
								<option value="tiki-cms_rankings.php,Rankings,feature_cms_rankings,tiki_p_read_article">Rankings</option>
								<option value="tiki-edit_submission.php,Submit,feature_submissions,tiki_p_submit_article">Submit</option>
								<option value="tiki-list_submissions.php,Submissions,feature_submissions,tiki_p_approve_submission">Submissions</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks6">Blogs:</label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks6" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_blogs.php,List Blogs,feature_blogs,tiki_p_read_blog">List Blogs</option>
								<option value="tiki-blog_rankings.php,Rankings,feature_blog_rankings,tiki_p_read_blog">Rankings</option>
								<option value="tiki-edit_blog.php,Create Blog,feature_blogs,tiki_p_create_blogs">Create Blog</option>
								<option value="tiki-blog_post.php,Post,feature_blogs,tiki_p_blog_post">Post</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks7">Files: </label>

						<div class="col-md-7">
							<select id="wikilinks7" class="form-control" name="wikilinks"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_file_gallery.php,File Galleries,feature_file_galleries,tiki_p_view_file_gallery">File Galleries</option>
								<option value="tiki-upload_file.php,Upload file,feature_file_galleries,tiki_p_upload_files">Upload file</option>
								<option value="tiki-file_galleries_rankings.php,Rankings,feature_file_galleries_rankings,tiki_p_view_file_gallery">Rankings</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks8">Forums: </label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks8" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-forums.php,Forums,feature_forums,tiki_p_forum_read">Forums</option>
								<option value="tiki-view_forum.php?forumId=,View a forum,feature_forums,tiki_p_forum_read">View a forum</option>
								<option value="tiki-view_forum_thread.php?forumId=&amp;comments_parentId=,View a thread,feature_forums,tiki_p_forum_read">View a thread</option>
								8
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks9">FAQs: </label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks9" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_faqs.php,FAQs,feature_faqs,tiki_p_view_faqs">FAQs</option>
								<option value="tiki-view_faq.php?faqId=,View a FAQ,feature_faqs,tiki_p_view_faqs">View a FAQ</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-5" for="wikilinks10">Quizzes: </label>

						<div class="col-md-7">
							<select name="wikilinks" id="wikilinks10" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_quizzes.php,Quizzes,feature_quizzes">Quizzes</option>
								<option value="tiki-take_quiz.php?quizId=,Take a quiz,feature_quizzes">Take a quiz</option>
								<option value="tiki-quiz_stats.php,Quiz stats,feature_quizzes,tiki_p_view_quiz_stats">Quiz stats</option>
								<option value="tiki-quiz_stats_quiz.php?quizId=,Stats for a Quiz,feature_quizzes,tiki_p_view_quiz_stats">Stats for a Quiz</option>
							</select>
						</div>
					</div>
				<?php }?>

			</div>
		</div>
	</div>
</div>
<?php }} ?>
