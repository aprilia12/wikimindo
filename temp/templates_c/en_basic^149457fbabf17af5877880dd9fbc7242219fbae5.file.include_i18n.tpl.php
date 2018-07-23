<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:12:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_i18n.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17284323285b5547acc0a644-53410440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149457fbabf17af5877880dd9fbc7242219fbae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_i18n.tpl',
      1 => 1506598534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17284323285b5547acc0a644-53410440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_edit_languages' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5547acc8b4d4_11674317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5547acc8b4d4_11674317')) {function content_5b5547acc8b4d4_11674317($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function updateList( active )
	{
		if( ! active )
		{
			var optionList = document.getElementById( 'available_languages_select' ).options;
			for( i in optionList )
				optionList[i].selected = false;
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form role="form" class="form-horizontal" action="tiki-admin.php?page=i18n" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<input type="hidden" name="i18nsetup" />
	<div class="t_navbar margin-bottom-md clearfix">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_languages']->value=='y') {?>
			<a class="btn btn-link tips" href="<?php echo smarty_function_service(array('controller'=>'language','action'=>'manage_custom_translations','language'=>$_smarty_tpl->tpl_vars['prefs']->value["language"]),$_smarty_tpl);?>
" title="Custom Translations:Manage customized local string translations">
				<?php echo smarty_function_icon(array('name'=>"file-code-o"),$_smarty_tpl);?>
 Custom Translations
			</a>
			<a class="btn btn-link tips" href="<?php echo smarty_function_service(array('controller'=>'language','action'=>'upload','language'=>$_smarty_tpl->tpl_vars['prefs']->value["language"]),$_smarty_tpl);?>
" title="Upload Translations:Upload a file with translations for the selected language.">
				<?php echo smarty_function_icon(array('name'=>"upload"),$_smarty_tpl);?>
 Upload Translations
			</a>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db']=="y") {?>
				<?php echo smarty_function_button(array('_type'=>"link",'_class'=>"tips",'href'=>"tiki-edit_languages.php",'_icon_name'=>"edit",'_text'=>"Edit languages",'_title'=>"Edit languages:Edit, export and import languages"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['freetags_multilingual']=='y') {?>
				<?php echo smarty_function_button(array('_type'=>"link",'_class'=>"tips",'href'=>"tiki-freetag_translate.php",'_icon_name'=>"tags",'_text'=>"Translate Tags",'_title'=>":Translate tags"),$_smarty_tpl);?>

			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
	<?php echo smarty_function_preference(array('name'=>'language'),$_smarty_tpl);?>

	<?php echo smarty_function_preference(array('name'=>'wiki_page_regex'),$_smarty_tpl);?>

	<?php echo smarty_function_preference(array('name'=>'default_mail_charset'),$_smarty_tpl);?>

	<div class="adminoptionbox">
		<?php echo smarty_function_preference(array('name'=>'feature_multilingual','visible'=>"always"),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_multilingual_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_detect_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_best_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'change_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'restrict_language'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="restrict_language_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'available_languages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'language_inclusion_threshold'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'show_available_translations'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="show_available_translations_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'lang_available_translations_dropdown'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_sync_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_default_interface_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_translation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_urgent_translation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_translation_incomplete_notice'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_multilingual_one_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'quantify_changes'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_edit_minor'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_multilingual_structures'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'freetags_multilingual'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_i18n_sync'),$_smarty_tpl);?>

			<div class="adminoptionboxchild category_i18n_sync_childcontainer blacklist whitelist required">
				<?php echo smarty_function_preference(array('name'=>'category_i18n_synced'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wiki_dynvar_multilingual'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_tr'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_lang'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_translated'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'lang_use_db'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="lang_use_db_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'lang_control_contribution'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'record_untranslated'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_machine_translation'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_machine_translation_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'lang_machine_translate_implementation'),$_smarty_tpl);?>

			<div class="adminoptionboxchild lang_machine_translate_implementation_childcontainer google">
				<?php echo smarty_function_preference(array('name'=>'lang_google_api_key'),$_smarty_tpl);?>

			</div>
			<div class="adminoptionboxchild lang_machine_translate_implementation_childcontainer bing">
				<?php echo smarty_function_preference(array('name'=>'lang_bing_api_client_id'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'lang_bing_api_client_secret'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'lang_machine_translate_wiki'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_lang_nonswitchingpages'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_lang_nonswitchingpages_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_lang_nonswitchingpages_names'),$_smarty_tpl);?>

		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
