<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:27:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21003778555b6d1416189678-96333994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dbe774e12e77c8b4eea1e6830873a16baa11865' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_category.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21003778555b6d1416189678-96333994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d14161c4000_30092927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d14161c4000_30092927')) {function content_5b6d14161c4000_30092927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=category" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-browse_categories.php" title=":Categories listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Browse Categories
			</a>
			<a role="link" class="btn btn-link tips" href="tiki-admin_categories.php" title=":Administration">
				<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Administer Categories
			</a>
			<a role="link" class="btn btn-link tips" href="tiki-edit_categories.php" title=":Organize objects">
				<?php echo smarty_function_icon(array('name'=>"sort"),$_smarty_tpl);?>
 Organize Objects
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_categories','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="table">
		<legend>Plugins <?php echo smarty_function_help(array('url'=>"Plugins"),$_smarty_tpl);?>
</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_catpath'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_catorphans'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>
			Features
		</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_categorypath'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_categorypath_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'categorypath_excluded'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'categorypath_format'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'category_sort_ascii'),$_smarty_tpl);?>

		<fieldset>
			<legend>
				Category objects
			</legend>
			<?php echo smarty_function_preference(array('name'=>'feature_categoryobjects'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_algorithm'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon_orless'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon_max'),$_smarty_tpl);?>

		</fieldset>

		<?php echo smarty_function_preference(array('name'=>'feature_category_transition'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_add_class_to_body_tag'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_cache_refresh_on_object_cat'),$_smarty_tpl);?>


		<div class="adminoptionboxchild" id="categories_used_in_tpl_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'areas_root'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'category_jail'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'category_defaults'),$_smarty_tpl);?>

		<div class="form-group">
			<div class="col-sm-8 col-sm-offset-4">
				<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['category_defaults'])) {?>
					<button type="submit" class="btn btn-default" name="assignWikiCategories" value="y">
						Re-apply last saved category defaults to wiki pages
					</button>
				<?php }?>
			</div>
		</div>
		<?php echo smarty_function_preference(array('name'=>'category_autogeocode_within'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="category_autogeocode_within_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'category_autogeocode_replace'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_autogeocode_fudge'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'category_i18n_sync'),$_smarty_tpl);?>

		<div class="adminoptionboxchild category_i18n_sync_childcontainer blacklist whitelist required">
			<?php echo smarty_function_preference(array('name'=>'category_i18n_synced'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_blog_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_image_gallery_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'unified_add_to_categ_search'),$_smarty_tpl);?>



	</fieldset>

	<fieldset>
		<legend>Performance</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'category_browse_count_objects'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
