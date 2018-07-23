<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 09:49:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10114055865b519407ae2200-77564694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c576cb0801da3a9e5a941bba32a93472ce0c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_textarea.tpl',
      1 => 1519901428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10114055865b519407ae2200-77564694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disabled' => 0,
    'plugin' => 0,
    'prefs' => 0,
    'plugins' => 0,
    'info' => 0,
    'pref' => 0,
    'pref_inline' => 0,
    'plugin_admin' => 0,
    'plugins_alias' => 0,
    'name' => 0,
    'full' => 0,
    'plugins_real' => 0,
    'base' => 0,
    'val' => 0,
    'value' => 0,
    'token' => 0,
    'detail' => 0,
    'composed_args' => 0,
    't' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519407bff4c4_79069585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519407bff4c4_79069585')) {function content_5b519407bff4c4_79069585($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_listfilter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.listfilter.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Text area (that apply throughout many features)
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="form-horizontal" action="tiki-admin.php?page=textarea" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_textarea")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_textarea"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Features<?php echo smarty_function_help(array('url'=>"Text+Area"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_fullscreen'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_filegals_manager'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_dynamic_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_replace'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_syntax_highlighter_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter_theme'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Wiki syntax<?php echo smarty_function_help(array('url'=>"Wiki+Syntax"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_smileys'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_paragraph_formatting_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting_add_br'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'section_comments_parse'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_monosp'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_tables'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_argvariable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_dynvar_style'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_dynvar_multilingual'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_make_ordered_list_items_display_unique_numbers'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Typography</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_typo_enable'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_typo_enable_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_typo_quotes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_approximative_quotes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_dashes_and_ellipses'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_nobreak_spaces'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset class="margin-bottom-md featurelist">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showreference'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_addreference'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_alink'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_aname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_box'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_button'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_center'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_code'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_div'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_dl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fade'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fancylist'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fancytable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_font'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_footnote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_footnotearea'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_gauge'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_html'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_iframe'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_include'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mono'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mouseover'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mwtable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_quote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_remarksbox'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_scroll'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_slider'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sort'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_split'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sup'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sub'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tabs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tag'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_toc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_versions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showpref'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_casperjs'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Miscellaneous</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_purifier'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_autolinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_hotwords'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_hotwords_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_hotwords_nw'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_hotwords_sep'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_use_quoteplugin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_simplebox_delim'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_template_custom_text'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_plugindiv_approvable'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Default size</legend>
				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_wiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_comment'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_forumthread'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>External links and images</legend>
				<?php echo smarty_function_preference(array('name'=>'cachepages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cacheimages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_ext_icon'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_ext_rel_nofollow'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'popupLinks'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					External links will be identified with: <?php echo smarty_function_icon(array('name'=>"link-external"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"About plugins")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tiki plugins add functionality to wiki pages, articles, blogs, and so on. You can enable and disable them below.
			You can approve plugin use at <a href="tiki-plugins.php">tiki-plugins.php</a>.
			The edit-plugin icon is an easy way for users to edit the parameters of each plugin in wiki pages. It can be disabled for individual plugins below.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php if (!isset($_smarty_tpl->tpl_vars['disabled']->value)) {?>
				<?php echo smarty_function_button(array('_class'=>"timeout",'href'=>"?page=textarea&disabled=y",'_text'=>"Check disabled plugins used in wiki pages"),$_smarty_tpl);?>

				<br><br>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Disabled used plugins")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Disabled used plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if (empty($_smarty_tpl->tpl_vars['disabled']->value)) {?>
						None
					<?php } else { ?>
						<ul>
						<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = ((string)$_smarty_tpl->tpl_vars['disabled']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
							<li><?php echo smarty_modifier_escape(mb_strtolower($_smarty_tpl->tpl_vars['plugin']->value, 'UTF-8'));?>
</li>
						<?php } ?>
						</ul>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Disabled used plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

			<fieldset class="margin-bottom-lg">
				<legend>Plugin preferences</legend>
				<?php echo smarty_function_preference(array('name'=>'wikipluginprefs_pending_notification'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_maximum_passes'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="margin-bottom-lg">
				<legend>Edit plugin icons</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_edit_plugin_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_list_gui'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="margin-bottom-lg" id="plugins">
				<legend>Plugins</legend>
				<fieldset class="margin-bottom-lg donthide">
					<?php echo smarty_function_preference(array('name'=>'unified_search_textarea_admin'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin']=='y') {?>
						<label for="pluginfilter" class="col-sm-4 control-label">Filter:</label>
						<div class="col-sm-8">
							<input type="text" id="pluginfilter" class="form-control">
						</div>
					<?php } else { ?>
						<?php echo smarty_function_listfilter(array('selectors'=>'#plugins > fieldset','exclude'=>".donthide"),$_smarty_tpl);?>

					<?php }?>
				</fieldset>
				<div id="pluginlist">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>'Plugin List')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Plugin List'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						Use the filter input above to find plugins, or enter return to see the whole list
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
">Search Help <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Plugin List'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin']=='y') {?><noscript><?php }?>
					<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
						<fieldset class="margin-bottom-lg">
							<legend>
								<?php if ($_smarty_tpl->tpl_vars['info']->value['iconname']) {
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['info']->value['iconname']),$_smarty_tpl);
} else {
echo smarty_function_icon(array('name'=>'plugin'),$_smarty_tpl);
}?> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>

							</legend>
							<div class="adminoptionbox">
								<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value);?>
</strong>: <?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['info']->value['description'])===null||$tmp==='' ? '' : $tmp));?>

								<?php echo smarty_function_help(array('url'=>"Plugin".((string)$_smarty_tpl->tpl_vars['plugin']->value)),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->tpl_vars['pref'] = new Smarty_variable("wikiplugin_".((string)$_smarty_tpl->tpl_vars['plugin']->value), null, 0);?>
							<?php if (in_array($_smarty_tpl->tpl_vars['pref']->value,$_smarty_tpl->tpl_vars['info']->value['prefs'])) {?>
								<?php $_smarty_tpl->tpl_vars['pref'] = new Smarty_variable("wikiplugin_".((string)$_smarty_tpl->tpl_vars['plugin']->value), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['pref_inline'] = new Smarty_variable("wikiplugininline_".((string)$_smarty_tpl->tpl_vars['plugin']->value), null, 0);?>
								<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref']->value,'label'=>"Enable"),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref_inline']->value,'label'=>"Disable edit plugin icon (make plugin inline)"),$_smarty_tpl);?>

							<?php }?>
						</fieldset>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin']=='y') {?></noscript><?php }?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugin Aliases")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugin Aliases"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"About plugin aliases")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugin aliases"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Tiki plugin aliases allow you to define your own custom configurations of existing plugins.<br>
				Find out more here:<?php echo smarty_function_help(array('url'=>"Plugin+Alias"),$_smarty_tpl);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugin aliases"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery']!='y') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					This page is designed to work with JQuery <a href="tiki-admin.php?page=features"><?php echo smarty_function_icon(array('name'=>"next"),$_smarty_tpl);?>
</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

			
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('#contentadmin_textarea-3 legend > .toggle').click(function(event, hidefirst) {
					var legend = $(this).parent()[0];
					if ($(this).hasClass('collapsed')) {
						$(legend).find('.expanded.toggle').show();
						$(this).hide();
						if (hidefirst) {
							$(legend).nextAll(":not(.hidefirst)").show('fast')
						} else {
							$(legend).nextAll().show('fast')
						}
					} else {
						$(legend).find('.collapsed.toggle').show();
						$(this).hide();
						$(legend).nextAll(":not(.stayopen)").hide('fast')
					}
					return false;
				}).css("cursor", "pointer").nextAll(":not(.stayopen)").hide();
				<?php if ($_smarty_tpl->tpl_vars['plugin_admin']->value) {?>
				$('#pluginalias_general legend').trigger('click');
				$('#pluginalias_simple_args legend').trigger('click'<?php if (isset($_smarty_tpl->tpl_vars['plugin_admin']->value['params'])) {?>, true<?php }?>);
				$('#pluginalias_body legend').trigger('click'<?php if (isset($_smarty_tpl->tpl_vars['plugin_admin']->value['body']['params'])) {?>, true<?php }?>);
				$('#pluginalias_add').click(function() {
					window.location.href = window.location.href.replace(/plugin_alias=[^&]*/, 'plugin_alias_new=true');
				});
				<?php } elseif ($_smarty_tpl->tpl_vars['plugins_alias']->value) {?>
				$('#pluginalias_general').hide();
				$('#pluginalias_simple_args').hide();
				$('#pluginalias_doc').hide();
				$('#pluginalias_body').hide();
				$('#pluginalias_composed_args').hide();
				$('#pluginalias_add').click(function() {
					$('#pluginalias_general legend')[0].showing = false;
					$('#pluginalias_general legend').trigger('click');
					$('#pluginalias_simple_args legend')[0].showing = false;
					$('#pluginalias_simple_args legend').trigger('click');
					$('#pluginalias_body legend')[0].showing = false;
					$('#pluginalias_body legend').trigger('click');

					$('#pluginalias_general').show();
					$('#pluginalias_simple_args').show();
					$('#pluginalias_doc').show();
					$('#pluginalias_body').show();
					$('#pluginalias_composed_args').show();

					$('#pluginalias_available legend')[0].showing = true;
					$('#pluginalias_available legend').trigger('click');

					return false;
				});
				<?php } else { ?>
					$('#pluginalias_general legend').trigger('click');
					$('#pluginalias_simple_args legend').trigger('click');
					$('#pluginalias_body legend').trigger('click');
				<?php }?>
				if (window.location.href.indexOf('plugin_alias_new=true') > -1) {
					$('#pluginalias_add').trigger('click');
				}
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			
			<?php if (count($_smarty_tpl->tpl_vars['plugins_alias']->value)) {?>
				<fieldset id="pluginalias_available">
					<legend>
						<strong>Available alias</strong><?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'id'=>"pluginalias_add",'iclass'=>'stayopen'),$_smarty_tpl);?>

					</legend>
					<div class="input_submit_container">
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins_alias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['full'] = new Smarty_variable(('wikiplugin_').($_smarty_tpl->tpl_vars['name']->value), null, 0);?>
							<input type="checkbox" name="enabled[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['full']->value]=='y') {?>checked="checked"<?php }?>>
							<a href="tiki-admin.php?page=textarea&amp;plugin_alias=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</a>
						<?php } ?>
						<div align="center">
							<input type="submit" class="btn btn-default btn-sm timeout" name="enable" value="Enable Plugins">
							<input type="submit" class="btn btn-warning btn-sm timeout" name="delete" value="Delete Plugins">
						</div>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Click on the plugin name to edit it. Click on the + icon to add a new one.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</fieldset>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_available legend').trigger('click');<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

			<fieldset id="pluginalias_general">
				<legend>
					General information<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);?>

				</legend>

				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="plugin_alias">
							Plugin name
						</label>
						<div class="col-sm-8">
							<?php if ($_smarty_tpl->tpl_vars['plugin_admin']->value) {?>
								<input type="hidden" class="form-control" name="plugin_alias" id="plugin_alias" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_admin']->value['plugin_name']);?>
">
								<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_admin']->value['plugin_name']);?>
</strong>
							<?php } else { ?>
								<input type="text" class="form-control" name="plugin_alias" id="plugin_alias">
							<?php }?>
						</div>
					</div>
				</div><br><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="implementation">
							Base plugin
						</label>
						<div class="col-sm-8">
							<select class="form-control" name="implementation" id="implementation">
								<?php  $_smarty_tpl->tpl_vars['base'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['base']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins_real']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['base']->key => $_smarty_tpl->tpl_vars['base']->value) {
$_smarty_tpl->tpl_vars['base']->_loop = true;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base']->value);?>
" <?php if (isset($_smarty_tpl->tpl_vars['plugin_admin']->value['implementation'])&&$_smarty_tpl->tpl_vars['plugin_admin']->value['implementation']==$_smarty_tpl->tpl_vars['base']->value) {?>selected="selected"<?php }?>>
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base']->value);?>

									</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="plugin_name">
							Name
						</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="name" id="plugin_name" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['name'])===null||$tmp==='' ? '' : $tmp));?>
">
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="plugin_description">
							Description
						</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="description" id="plugin_description" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['description'])===null||$tmp==='' ? '' : $tmp));?>
" class="width_40em">
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="plugin_body">
							Body label
						</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="body" id="plugin_body" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['body'])===null||$tmp==='' ? '' : $tmp));?>
">
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="plugin_deps">
							Dependencies
						</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="prefs" id="plugin_deps" value="<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['prefs'])) {
echo implode(',',$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['prefs']);
}?>">
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="filter">
							Filter
						</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" id="filter" name="filter" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['filter'])===null||$tmp==='' ? 'xss' : $tmp));?>
">
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="validate">
							Validation
						</label>
						<div class="col-sm-8">
							<select class="form-control" name="validate" id="validate">
								<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = explode(',','none,all,body,arguments'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['validate'])&&$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['validate']==$_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>>
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>

									</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div><br>
				<div class="adminoptionbox form-group">
					<div class="adminoptionlabel">
						<label class="control-label col-sm-4" for="inline">Inline (no plugin edit UI)</label>
						<div class="col-sm-8">
							<input class="form-control" type="checkbox" id="inline" name="inline" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['inline'])) {?>checked="checked"<?php }?>>
						</div>
					</div>
				</div><br>
			</fieldset><br>

			<fieldset id="pluginalias_simple_args">
				<legend>
					Simple plugin arguments<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'iclass'=>'stayopen','id'=>"pluginalias_simple_add"),$_smarty_tpl);?>

				</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$('#pluginalias_simple_add').click(function() {
							var me = $('#pluginalias_simple_new'), clone = me.clone(), index = me.parent().children().size();
							clone.removeAttr('id');

							clone.find(':input').each(function () {
								$(this).attr('name', $(this).attr('name').replace('__NEW__', index));
								$(this).attr('id', $(this).attr('id').replace('__NEW__', index));
							}).val('');
							clone.find('label').each(function () {
								$(this).attr('for', $(this).attr('for').replace('__NEW__', index));
							});
							clone.show();
							me.parent().append(clone);

						return false;
					});
					<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['params'])) {?>
					$('#pluginalias_doc legend').trigger('click'<?php if (isset($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['params'])) {?>, true<?php }?>);
					$('#pluginalias_simple_new').hide();
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="adminoptionbox form-group">
					<label class="control-label col-sm-4 col-sm-offset-4 text-left">
						Argument
					</label>
					<label class="control-label col-sm-4 text-left">
						Default
					</label>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['params'])) {?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin_admin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							<?php if (!is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
								<div class="adminoptionbox form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<input class="form-control" type="text" name="sparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]" id="sparams_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
_token" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
">
									</div>
									<div class="col-sm-4">
										<input class="form-control" type="text" name="sparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][default]" id="sparams_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
_default" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
									</div>
								</div>
							<?php }?>
						<?php } ?>
				<?php }?>
				<div class="adminoptionbox hidefirst" id="pluginalias_simple_new">
					<div class="adminoptionlabel form-group">
						<div class="col-sm-4 col-sm-offset-4">
							<input class="form-control" type="text" name="sparams[__NEW__][token]" id="sparams__NEW__token" value="">
						</div>
						<div class="col-sm-4">
							<input class="form-control" type="text" name="sparams[__NEW__][default]" id="sparams__NEW__default" value="">
						</div>
					</div>
				</div>
			</fieldset><br>

			<fieldset id="pluginalias_doc">
				<legend>
					Plugin parameter documentation<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'id'=>"pluginalias_doc_add",'iclass'=>'stayopen'),$_smarty_tpl);?>

				</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_doc_add').click(function() { $('#pluginalias_doc_new').toggle(); return false; });<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['params'])) {?>
					<?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin_admin']->value['description']['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['detail']->key;
?>
						<div class="clearfix adminoptionbox<?php if ($_smarty_tpl->tpl_vars['token']->value=='__NEW__') {?> hidefirst" id="pluginalias_doc_new<?php }?>">
							<div class="adminnestedbox form-group">
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]">
										Parameter
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value!='__NEW__') {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);
}?>">
									</div>
								</div>
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][name]"
											>Name
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][name]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['name']);?>
">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][description]">
										Description
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][description]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['description']);?>
" class="width_30em">
									</div>
								</div>
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][required]">
										Required
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="checkbox" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][required]" value="y"<?php if ($_smarty_tpl->tpl_vars['detail']->value['required']) {?> checked="checked"<?php }?>>
									</div>
								</div>
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][safe]">
										Safe
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="checkbox" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][safe]" value="y"<?php if ($_smarty_tpl->tpl_vars['detail']->value['safe']) {?> checked="checked"<?php }?>>
									</div>
								</div>
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][filter]">
										Filter
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="input[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][filter]" value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['detail']->value['filter'])===null||$tmp==='' ? 'xss' : $tmp));?>
">
									</div>
								</div>
							</div>
						</div>
						<hr>
					<?php } ?>
				<?php }?>
			</fieldset><br>

			<div id="pluginalias_body">
				<fieldset>
					<legend>
						Plugin body<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);?>

					</legend>

					<div class="adminoptionbox">
						<div class="adminoptionlabel form-group">
							<label class="control-label col-sm-4" for="ignorebody">
								Ignore user input
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="checkbox" name="ignorebody" id="ignorebody" value="y" <?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['body']['input'])&&$_smarty_tpl->tpl_vars['plugin_admin']->value['body']['input']=='ignore') {?>checked="checked"<?php }?>/>
							</div>
						</div>
					</div>
					<div class="adminoptionbox form-group">
						<div class="adminoptionlabel form-group">
							<label class="control-label col-sm-4" for="defaultbody">Default content</label>
							<div class="col-sm-8">
								<textarea class="form-control" cols="60" rows="12" id="defaultbody" name="defaultbody"><?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['body']['default'])===null||$tmp==='' ? '' : $tmp));?>
</textarea>
							</div>
						</div>
					</div>
					<div style="clear:both; margin-left:60px">
						<fieldset class="stayopen">
							<legend style="font-size:125%">Parameters<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'id'=>"pluginalias_body_add",'iclass'=>'stayopen'),$_smarty_tpl);?>
</legend>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_body_add').click(function() { $('#pluginalias_body_new').toggle("fast"); return false; });<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


							<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['body']['params'])) {?>
								<?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin_admin']->value['body']['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['detail']->key;
?>
									<div class="clearfix adminoptionbox<?php if ($_smarty_tpl->tpl_vars['token']->value=='__NEW__') {?> hidefirst" id="pluginalias_body_new<?php }?>">
										<div class="adminoptionlabel form-group">
											<label class="control-label col-sm-6" for="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]">
												Parameter
											</label>
											<div class="col-sm-6">
												<input class="form-control" type="text" name="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value!='__NEW__') {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);
}?>">
											</div>
										</div>
										<div class="adminoptionlabel form-group">
											<label class="control-label col-sm-6" for="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][encoding]">
												Encoding
											</label>
											<div class="col-sm-6">
												<select class="form-control" name="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][encoding]">
													<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = explode(',','none,html,url'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
														<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['encoding']==$_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>>
															<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>

														</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="adminoptionlabel form-group">
											<label class="control-label col-sm-6" for="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][input]">
												Argument source (if different)
											</label>
											<div class="col-sm-6">
												<input class="form-control" type="text" name="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][input]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['input']);?>
">
											</div>
										</div>
										<div class="adminoptionlabel form-group">
											<label class="control-label col-sm-6" for="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][default]">
												Default value
											</label>
											<div class="col-sm-6">
												<input class="form-control" type="text" name="bodyparam[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][default]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['default']);?>
">
											</div>
										</div>
									</div>
								<?php } ?>
							<?php }?>
						</fieldset>
					</div>
				</fieldset>
			</div><br><br>

			<fieldset id="pluginalias_composed_args">
				<legend>
					Composed plugin arguments<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'id'=>"pluginalias_composed_add",'iclass'=>'stayopen'),$_smarty_tpl);?>

				</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_composed_add').click(function() { $('#pluginalias_composed_new').toggle("fast"); return false; });<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['params'])) {?>
					<?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin_admin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['detail']->key;
?>
						<?php if (is_array($_smarty_tpl->tpl_vars['detail']->value)) {?>
							<?php if (!isset($_smarty_tpl->tpl_vars['composed_args']->value)) {
$_smarty_tpl->tpl_vars['composed_args'] = new Smarty_variable(true, null, 0);
}?>
							<div class="clearfix adminoptionbox<?php if ($_smarty_tpl->tpl_vars['token']->value=='__NEW__') {?> hidefirst" id="pluginalias_composed_new<?php }?>">
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]">
										Parameter
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value!='__NEW__') {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);
}?>">
									</div>
								</div>
								<div class="adminoptionlabel form-group">
									<label class="control-label col-sm-4" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][pattern]">
										Pattern
									</label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][pattern]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['pattern']);?>
">
									</div>
								</div><br>
								<div style="clear:both; margin-left:60px">
									<fieldset class="stayopen">
										<legend style="font-size:125%">
											Parameters<?php echo smarty_function_icon(array('name'=>'expanded','iclass'=>'expanded toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'collapsed','iclass'=>'collapsed toggle'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>"add",'id'=>"pluginalias_composed_addparam",'iclass'=>'stayopen'),$_smarty_tpl);?>

										</legend>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_composed_addparam').click(function() { $('#pluginalias_composed_newparam').toggle("fast"); return false; });<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php if (!empty($_smarty_tpl->tpl_vars['detail']->value['params'])) {?>
											<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['t']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
												<div class="clearfix adminoptionbox<?php if ($_smarty_tpl->tpl_vars['t']->value=='__NEW__') {?> hidefirst" id="pluginalias_composed_newparam<?php }?>">
													<div class="adminoptionlabel form-group">
														<label class="control-label col-sm-6" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][token]">
															Parameter
														</label>
														<div class="col-sm-6">
															<input class="form-control" type="text" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['t']->value!='__NEW__') {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);
}?>">
														</div>
													</div>
													<div class="adminoptionlabel form-group">
														<label class="control-label col-sm-6" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][pattern]">
															Encoding
														</label>
														<div class="col-sm-6">
															<select class="form-control" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][encoding]">
																<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = explode(',','none,html,url'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
																	<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['encoding']==$_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
</option>
																<?php } ?>
															</select>
														</div>
													</div>
													<div class="adminoptionlabel form-group">
														<label class="control-label col-sm-6" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][input]">
															Argument source (if different):
														</label>
														<div class="col-sm-6">
															<input class="form-control" type="text" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][input]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['d']->value['input']);?>
"/>
														</div>
													</div>
													<div class="adminoptionlabel form-group">
														<label class="control-label col-sm-6" for="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][input]">
															Default value
														</label>
														<div class="col-sm-6">
															<input class="form-control" type="text" name="cparams[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
][params][<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
][default]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['d']->value['default']);?>
"/>
														</div>
													</div>
												</div>
											<?php } ?>
										<?php }?>
									</fieldset>
								</div><hr>
							</div>
						<?php }?>
					<?php } ?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['plugin_admin']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('#pluginalias_composed_args legend').trigger('click'<?php if (isset($_smarty_tpl->tpl_vars['composed_args']->value)) {?>, true<?php }?>);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugin Aliases"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_textarea"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>


<?php }} ?>
