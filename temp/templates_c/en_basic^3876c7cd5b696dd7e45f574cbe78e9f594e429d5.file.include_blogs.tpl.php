<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:10:09
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11204877295b5198e19719b6-79551160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3876c7cd5b696dd7e45f574cbe78e9f594e429d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_blogs.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11204877295b5198e19719b6-79551160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5198e19b01c8_07357321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5198e19b01c8_07357321')) {function content_5b5198e19b01c8_07357321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<form role="form" class="form-horizontal" action="tiki-admin.php?page=blogs" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<a role="button" class="btn btn-link tips" href="tiki-list_blogs.php" title=":Blogs listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Blogs
		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_blogs")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_blogs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blogs','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bloglist'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

			<fieldset>
				<legend>
					Features<?php echo smarty_function_help(array('url'=>"Blog+Config"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blog_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_blog_heading'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_blog_edit_publish_date'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
					<?php echo smarty_function_preference(array('name'=>'feature_blog_mandatory_category'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'geo_locate_blogpost'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_blog'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_feature_copyrights'),$_smarty_tpl);?>

				</fieldset>
			<fieldset>
				<legend>Comments</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blogposts_comments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_comments_per_page'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_comments_default_ordering'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Sharing on social networks<?php echo smarty_function_help(array('url'=>"Social+Networks#Using+ShareThis"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blog_sharethis'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_blog_sharethis_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'blog_sharethis_publisher'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Blogs Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Blogs Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'blog_list_order'),$_smarty_tpl);?>

			<fieldset>
				<legend>Items to display</legend>
				<?php echo smarty_function_preference(array('name'=>'blog_list_title'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="blog_list_title_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'blog_list_title_len'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'blog_list_description'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_created'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_lastmodif'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_posts'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_visits'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_activity'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Blogs Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_blogs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
