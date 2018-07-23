<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:05:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_look.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16673924655b51515e71c7d2-79104054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9950991c9f782b841867d10ab838e1fd3b835587' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_look.tpl',
      1 => 1517200580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16673924655b51515e71c7d2-79104054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_create_css' => 0,
    'thumbfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51515e7cc480_79274934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51515e7cc480_79274934')) {function content_5b51515e7cc480_79274934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<form action="tiki-admin.php?page=look" id="look" name="look" class="form-horizontal labelColumns" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="clearfix margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control']=='y') {?>
			<?php echo smarty_function_button(array('_text'=>"Theme Control",'href'=>"tiki-theme_control.php",'_class'=>"btn-sm tikihelp"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_create_css']->value=='y') {?>
			<?php echo smarty_function_button(array('_text'=>"Edit CSS",'_class'=>"btn-sm",'href'=>"tiki-edit_css.php"),$_smarty_tpl);?>

		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_look")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_look"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Theme")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Theme"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<div class="row">
				<div class="col-md-2 col-md-push-10">
					<div class="thumbnail">
						<?php if ($_smarty_tpl->tpl_vars['thumbfile']->value) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['thumbfile']->value;?>
" alt="Theme Screenshot" id="theme_thumb">
						<?php } else { ?>
							<span><?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
				</div>
				<div class="col-md-9 col-md-pull-1 adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'theme_option'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'theme_option_includes_main'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="adminoptionbox theme_childcontainer custom_url">
				<?php echo smarty_function_preference(array('name'=>'theme_custom_url'),$_smarty_tpl);?>

			</div>
			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'theme_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'theme_option_admin'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'site_layout'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'site_layout_admin'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'site_layout_per_object'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'theme_iconset'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery']=='n') {?>
				<input type="submit" class="btn btn-default btn-sm timeout" name="changestyle" value="Go">
			<?php }?>
			<div class="adminoptionbox">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
					<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="change_theme_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'available_themes'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_fixed_width'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_fixed_width_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_fixed_width'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'useGroupTheme'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_theme_control'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_theme_control_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_savesession'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_parentcategory'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_autocategorize'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Theme"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Layout")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Layout"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<legend>Logo and Title</legend>
			<?php echo smarty_function_preference(array('name'=>'feature_sitelogo'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_sitelogo_childcontainer">
				<fieldset>
					<legend>Logo</legend>
					<?php echo smarty_function_preference(array('name'=>'sitelogo_src'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_icon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_bgcolor'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_title'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_alt'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Title</legend>
					<?php echo smarty_function_preference(array('name'=>'sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitesubtitle'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset>
					<legend>Module zone visibility</legend>
					<?php echo smarty_function_preference(array('name'=>'module_zones_top'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_topbar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_pagetop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_left_column'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_right_column'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_pagebottom'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_bottom'),$_smarty_tpl);?>

					<hr>
					<?php echo smarty_function_preference(array('name'=>'module_file'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zone_available_extra'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset>
					<legend>Site report bar</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_site_report'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_report_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_send_link'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Layout"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout']=='classic') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Shadow layer")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Shadow layer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<br>
				<?php echo smarty_function_preference(array('name'=>'feature_layoutshadows'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_layoutshadows_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'main_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'main_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'header_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'header_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'middle_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'middle_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'center_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'center_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'footer_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'footer_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'box_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'box_shadow_end'),$_smarty_tpl);?>

				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Shadow layer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Pagination")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Pagination"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'user_selector_threshold'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'maxRecords'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_object_selector_threshold'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'nextprev_pagination'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'direct_pagination'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="direct_pagination_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_middle_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_ending_links'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'pagination_firstlast'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_fastmove_links'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_hide_if_one_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_icons'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Pagination"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"UI Effects")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"UI Effects"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Standard UI effects</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Tab UI effects</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<fieldset>
				<legend>Other</legend>
				<div class="admin featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_shadowbox'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_shadowbox_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'jquery_colorbox_theme'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_jscalendar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_heading_links'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_equal_height_rows_js'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_conditional_formatting'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"UI Effects"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Customization")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Customization"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Custom codes</legend>
				<?php echo smarty_function_preference(array('name'=>"header_custom_css",'syntax'=>"css"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"header_custom_less",'syntax'=>"css"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_custom_html_head_content','syntax'=>"htmlmixed"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_endbody_code','syntax'=>"tiki"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_google_analytics_account'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"header_custom_js",'syntax'=>"javascript"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"layout_add_body_group_class"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'categories_add_class_to_body_tag'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Editing</legend>
				<?php echo smarty_function_preference(array('name'=>'theme_styleguide'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_editcss'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_view_tpl'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl']=='y') {?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"View Templates"),$_smarty_tpl);?>

					</div>
				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'feature_edit_templates'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates']=='y') {?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"Edit Templates"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Customization"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Miscellaneous")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Miscellaneous"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_tabs'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_tabs_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_tabs_optional'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'site_favicon_enable'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Context menus (<small>currently used in file galleries only</small>)</legend>
					<?php echo smarty_function_preference(array('name'=>'use_context_menu_icon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'use_context_menu_text'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<fieldset>
				<legend>Separators</legend>
				<?php echo smarty_function_preference(array('name'=>'site_crumb_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild clearfix">
					<span class="col-md-8 col-md-push-4 help-block">Examples: &nbsp; » &nbsp; / &nbsp; &gt; &nbsp; : &nbsp; -> &nbsp; →</span>
				</div>
				<?php echo smarty_function_preference(array('name'=>'site_nav_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild clearfix">
					<span class="col-md-8 col-md-push-4 help-block">Examples: &nbsp; | &nbsp; / &nbsp; ¦ &nbsp; :</span>
				</div>
			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_cache_perms'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_html_head_base_tag'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Miscellaneous"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_look"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
