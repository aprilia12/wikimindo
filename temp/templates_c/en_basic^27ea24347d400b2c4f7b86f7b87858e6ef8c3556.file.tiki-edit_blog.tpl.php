<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:13:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8927599975b5539d7d66360-45515719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ea24347d400b2c4f7b86f7b87858e6ef8c3556' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit_blog.tpl',
      1 => 1456117000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8927599975b5539d7d66360-45515719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogId' => 0,
    'title' => 0,
    'thisblogId' => 0,
    'category_needed' => 0,
    'individual' => 0,
    'description' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_blog_admin' => 0,
    'users' => 0,
    'u' => 0,
    'creator' => 0,
    'user' => 0,
    'public' => 0,
    'alwaysOwner' => 0,
    'use_find' => 0,
    'allow_comments' => 0,
    'prefs' => 0,
    'use_excerpt' => 0,
    'maxPosts' => 0,
    'use_title' => 0,
    'use_title_in_post' => 0,
    'use_description' => 0,
    'use_breadcrumbs' => 0,
    'use_author' => 0,
    'add_date' => 0,
    'show_avatar' => 0,
    'show_related' => 0,
    'related_max' => 0,
    'tiki_p_edit_templates' => 0,
    'heading' => 0,
    'show_blog_heading_preview' => 0,
    'post_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5539d7e3d123_46971498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5539d7e3d123_46971498')) {function content_5b5539d7e3d123_46971498($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
?><?php if ($_smarty_tpl->tpl_vars['blogId']->value>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Blogs",'url'=>"tiki-edit_blog.php?blogId=".((string)$_smarty_tpl->tpl_vars['blogId']->value),'admpage'=>"blogs")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Blogs",'url'=>"tiki-edit_blog.php?blogId=".((string)$_smarty_tpl->tpl_vars['blogId']->value),'admpage'=>"blogs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Blog: <?php echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Blogs",'url'=>"tiki-edit_blog.php?blogId=".((string)$_smarty_tpl->tpl_vars['blogId']->value),'admpage'=>"blogs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Blogs")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Blogs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create Blog<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Blogs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-list_blogs.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"List Blogs"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['blogId']->value>0) {?>
		<?php $_smarty_tpl->tpl_vars['thisblogId'] = new Smarty_variable(smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog'), null, 0);?>
		<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['thisblogId']->value,'class'=>"btn btn-default",'_text'=>"View Blog"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['category_needed']->value)&&$_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['individual']->value=='y') {?>
	<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>'blog','permType'=>'blogs','id'=>$_smarty_tpl->tpl_vars['blogId']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'label'=>"Individual permissions are set for this blog"),$_smarty_tpl);?>

<?php }?>

<form method="post" action="tiki-edit_blog.php" id="blog-edit-form" class="form-horizontal" role="form">
	<input type="hidden" name="blogId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blogId']->value);?>
">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editblog')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editblog'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>General Settings</h2>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="blog-title">Title</label>
				<div class="col-sm-9">
					<input type="text" maxlength="200" name="title" id="blog-title" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="blog-desc">Description</label>
				<div class="col-sm-9">
					<textarea class="wikiedit form-control" name="description" id="blog-desc" rows="10"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="creator">Creator</label>
				<div class="col-sm-9">
					<select name="creator" class="form-control">
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value=='y')&&!empty($_smarty_tpl->tpl_vars['users']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['userId']->value = $_smarty_tpl->tpl_vars['u']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['u']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['u']->value==$_smarty_tpl->tpl_vars['creator']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['u']->value);?>
</option>
							<?php } ?>
						<?php } else { ?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user']->value);?>
" selected="selected"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user']->value);?>
</option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
					<div class="checkbox">
						<label for="blogs-allow_others">
							<input type="checkbox" name="public" id="blogs-allow_others" <?php if ($_smarty_tpl->tpl_vars['public']->value=='y') {?>checked='checked'<?php }?>>
							Allow other users to post in this blog
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-always_owner">
							<input type="checkbox" name="alwaysOwner" id="blogs-always_owner" <?php if (isset($_smarty_tpl->tpl_vars['alwaysOwner']->value)&&$_smarty_tpl->tpl_vars['alwaysOwner']->value=='y') {?>checked='checked'<?php }?>>
							Even if others post to the blog, the author is always its administrator
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-search">
							<input type="checkbox" name="use_find" id="blogs-search" <?php if ($_smarty_tpl->tpl_vars['use_find']->value=='y') {?>checked='checked'<?php }?>>
							Allow search
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-comments">
							<input type="checkbox" name="allow_comments" id="blogs-comments" <?php if ($_smarty_tpl->tpl_vars['allow_comments']->value=='y'||$_smarty_tpl->tpl_vars['allow_comments']->value=='c') {?>checked='checked'<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogposts_comments']!='y') {?> disabled="disabled"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogposts_comments']!='y') {?>Global post-level comments is disabled.<?php }?>
							Allow comments
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-post-use-excerpt">
							<input type="checkbox" name="use_excerpt" id="blogs-post-use-excerpt" <?php if ($_smarty_tpl->tpl_vars['use_excerpt']->value=='y') {?>checked='checked'<?php }?>>
							Use post excerpt
						</label>
					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Display Options")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Display Options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Display Options</h2>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="blogs-number">Displayed posts</label>
				<div class="col-sm-2">
					<input type="text" name="maxPosts" id="blogs-number" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxPosts']->value);?>
">
				</div>
				<div class="help-block">Number of posts to show per page</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<div class="checkbox">
						<label for="blogs-title">
							<input type="checkbox" name="use_title" id="blogs-title" <?php if ($_smarty_tpl->tpl_vars['use_title']->value=='y') {?>checked='checked'<?php }?>>
							Display the blog title on the posts list page
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-title-post">
							<input type="checkbox" name="use_title_in_post" id="blogs-title-post" <?php if ($_smarty_tpl->tpl_vars['use_title_in_post']->value=='y') {?>checked='checked'<?php }?>>
							Display the blog title on the post page
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-description">
							<input type="checkbox" name="use_description" id="blogs-description" <?php if ($_smarty_tpl->tpl_vars['use_description']->value=='y') {?>checked='checked'<?php }?>>
							Display the blog description
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-breadcrumbs">
							<input type="checkbox" name="use_breadcrumbs" id="blogs-breadcrumbs" <?php if ($_smarty_tpl->tpl_vars['use_breadcrumbs']->value=='y') {?>checked='checked'<?php }?>>
							Display breadcrumbs
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-author">
							<input type="checkbox" name="use_author" id="blogs-author" <?php if ($_smarty_tpl->tpl_vars['use_author']->value=='y') {?>checked='checked'<?php }?>>
							Display the author in blog posts
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-date">
							<input type="checkbox" name="add_date" id="blogs-date" <?php if ($_smarty_tpl->tpl_vars['add_date']->value=='y') {?>checked='checked'<?php }?>>
							Display the publish date in blog posts
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-avatar">
							<input type="checkbox" name="show_avatar" id="blogs-avatar" <?php if ($_smarty_tpl->tpl_vars['show_avatar']->value=='y') {?>checked='checked'<?php }?>>
							Show user profile picture
						</label>
					</div>
					<div class="checkbox">
						<label for="blogs-post-related">
							<input type="checkbox" name="show_related" id="blogs-post-related" <?php if ($_smarty_tpl->tpl_vars['show_related']->value=='y') {?>checked='checked'<?php }?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']!='y') {?>disabled="disabled"<?php }?>>
							Show the post's related content
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']!='y') {?>
								<span class="help-block">The checkbox is disabled because the tags feature is disabled globally.</span>
							<?php }?>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="blogs-post-max-related">Related posts</label>
				<div class="col-sm-2">
					<input type="text" name="related_max" id="blogs-post-max-related" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['related_max']->value);?>
">
				</div>
				<div class="help-block">Maximum number of related posts to display</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blog_heading']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_templates']->value=='y') {?>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="blogs-heading">Blog heading</label>
					<div class="col-sm-9">
						<textarea name="heading" id="blogs-heading" rows='10' class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['heading']->value);?>
</textarea>
					</div>
				</div>
				<?php if (strlen($_smarty_tpl->tpl_vars['heading']->value)>0&&$_smarty_tpl->tpl_vars['show_blog_heading_preview']->value=='y') {?>
					<?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'blog_heading_preview','_class'=>'link','_text'=>"Heading preview",'_flip_default_open'=>'n'),$_smarty_tpl);?>

					<div id="blog_heading_preview" style="display: <?php if ($_smarty_tpl->tpl_vars['show_blog_heading_preview']->value=='y') {?>block<?php } else { ?>none<?php }?>;">
						<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['heading']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
					</div>
				<?php }?>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="blogs-post-heading">Blog post heading</label>
					<div class="col-sm-9">
						<textarea name="post_heading" id="blogs-post_heading" rows='10' class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['post_heading']->value);?>
</textarea>
					</div>
				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Display Options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editblog'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blog_heading']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_templates']->value=='y') {?>
		<input type="submit" class="wikiaction btn btn-default" name="preview" value="Heading preview">
	<?php }?>
	<div class="form-group text-center">
		<input type="submit" class="wikiaction btn btn-primary" name="save" value="Save">
	</div>
</form>
<?php }} ?>
