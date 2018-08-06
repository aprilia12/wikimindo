<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-editpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6684134105b63b81d10dac6-02995058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c98b416829d57fe105ebf3efd4f28d89da45e563' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-editpage.tpl',
      1 => 1510765428,
      2 => 'file',
    ),
    'b496e774078c2afc12df179be22b31ecb20b3503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_edit.tpl',
      1 => 1384245842,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
    '1fb04cb7d224494031e39d1fa23bb68e3d4b83cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit-page-included_by.tpl',
      1 => 1510984094,
      2 => 'file',
    ),
    '9059564efd2215c17a6bb1dd15155195ebfea8d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-preview.tpl',
      1 => 1485159726,
      2 => 'file',
    ),
    '45573b7ea443cd63762dacef5122afa63d00c9d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\pagehistory.tpl',
      1 => 1484602210,
      2 => 'file',
    ),
    'ee1478f58a50797c3f3562e9871f6477c45777cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit-page-include-prompt_for_edit_or_translate.tpl',
      1 => 1265857906,
      2 => 'file',
    ),
    '3ae3e14e7fd68a2d219cf2bbd2e03741fd866a04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki_edit_actions.tpl',
      1 => 1488883854,
      2 => 'file',
    ),
    '385011409e71120a6e1159dfcd9189ea90142b80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\freetag.tpl',
      1 => 1457818232,
      2 => 'file',
    ),
    '7340ab8c9937e56da31853e8601b383501c7054b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\contribution.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
    'b2aac2fa0cd16fe9a2eadd4081dcfd6bd77f2fee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\categorize.tpl',
      1 => 1469963576,
      2 => 'file',
    ),
    '7cd91184d8cdfb5fcfbe205f1f8f2619f5893ee4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\addreference.tpl',
      1 => 1518844728,
      2 => 'file',
    ),
    '914037e2628c47ccded63994d3ac984c2a08372b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\antibot.tpl',
      1 => 1516528532,
      2 => 'file',
    ),
    '1368484bb5384b172c575ca3d36e98676e64ea03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-discussion.tpl',
      1 => 1352958646,
      2 => 'file',
    ),
    '787ecd2e4cce49fb5449620c933a14b73a6a466e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\discussinforum.tpl',
      1 => 1406096548,
      2 => 'file',
    ),
    '1fa2ba617a9afbefe0da737170d2fa49c6ae61db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\attachments.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
    '9f4af08523aeacd92ee84e7915009c42f641247c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-page_bar.tpl',
      1 => 1491445044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6684134105b63b81d10dac6-02995058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
    'icon_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b81d7bcb58_31016461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b81d7bcb58_31016461')) {function content_5b63b81d7bcb58_31016461($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_time.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container<?php if (isset($_SESSION['fullscreen'])&&$_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<div class="page-header" id="page-header">
		<?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

		<div class="topbar row" id="topbar">
			<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

		</div>
	</div>
<?php }?>

	<div class="row row-middle" id="row-middle">
		<?php if ((zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n')&&(zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n')) {?>
			<div class="col-md-12 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
		<h1 class="pagetitle">
			<?php $_smarty_tpl->_capture_stack[0][] = array("pageDescription", null, null); ob_start(); ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
if ($_smarty_tpl->tpl_vars['pageAlias']->value!='') {?> (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageAlias']->value);?>
)<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y') {?>
				Edit Section: <?php echo Smarty::$_smarty_vars['capture']['pageDescription'];?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>'))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</h1>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

				
				
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['customTip']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTip']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<div class="pull-right">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(".previewBtn").click(function(){
			auto_save('editwiki', autoSaveId);
			if ($('#autosave_preview:visible').length === 0) {
				if (!ajaxPreviewWindow) {
					setCookie("preview_diff_style", "", "preview", "session");
					$("#preview_diff_style").val("").trigger("chosen:updated");
					$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
				}
			} else {
				ajax_preview( 'editwiki', autoSaveId, true );
			}
			return false;
		});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['draft'])) {?>
		Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']<$_smarty_tpl->tpl_vars['data']->value['lastModif']) {?>
			<b>Warning: new versions of this page have been made after this draft</b>
		<?php }?>
	<?php }?>
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			The Sandbox is a page where you can practice editing, etc. and use the preview feature to check the appearance of the page. No versions are stored for this page.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['included_by']->value)) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        The following item(s) include this one with Plugin Include and might be affected by these changes. Renaming sections can break related item(s).
		        <?php /*  Call merged included template "tiki-edit-page-included_by.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1c15e8_37446688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-included_by.tpl" */?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A contribution is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['summary_needed']->value)&&$_smarty_tpl->tpl_vars['summary_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>An edit summary is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['likepages']->value) {?>
		<div>
			Perhaps you are looking for:
			<?php if (count($_smarty_tpl->tpl_vars['likepages']->value)<0) {?>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			<?php } else { ?>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
								<td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a></td>
								<?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

							<?php endfor; endif; ?>
						</tr>
					</table>
				</div>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<?php /*  Call merged included template "tiki-preview.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1e4874_65150018($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-preview.tpl" */?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
		<div id="diff_outer">
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
				<div class="translation_message">
					<h2><?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate from: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
</h2>
					Changes that need to be translated are highlighted below.
				</div>
			<?php }?>
			<div id="diff_history">
				<?php /*  Call merged included template "pagehistory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cant'=>0), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1ffdf2_51400139($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pagehistory.tpl" */?>
				<?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value) {?>
					<div class="wikitext" id="diff_versions">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['diff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diff']->key => $_smarty_tpl->tpl_vars['diff']->value) {
$_smarty_tpl->tpl_vars['diff']->_loop = true;
?>
								<li>
									Version: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['version']);?>
 - <?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['comment']))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

									<?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value)>1) {?>
										<?php $_smarty_tpl->tpl_vars['diff_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value['version'], null, 0);?>
										<?php echo smarty_function_icon(array('name'=>"next",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'title'=>":View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

									<?php }?>
								</li>
							<?php } ?>
							<?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

						</ul>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value=='y') {?>
		<?php /*  Call merged included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d265719_41692242($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */?>
	<?php }?>
	<form enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
" class="form-horizontal" id='editpageform' name='editpageform'>
		<input type="hidden" name="no_bl" value="y">
		<?php if (!empty($_REQUEST['returnto'])) {?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
			<select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
				<option value="htmldiff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?> selected="selected"<?php }?>>html</option>
				<option value="inlinediff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff") {?> selected="selected"<?php }?> >text</option>
				<option value="inlinediff-full"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full") {?> selected="selected"<?php }?> >text full</option>
			</select>
			<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)) {?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cell']->value)) {?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['pos']->value)) {?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_page_id']->value) {?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['add_child']->value) {?><input type="hidden" name="add_child" value="true"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='both') {?>
			<div class='top_actions'>
				<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
			</div>
		<?php }?>
		<div class="form-group margin-side-0">
			<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
					<p>Page name: <input type="text" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="rename" value="Rename">
					</p>
			<?php } else { ?>
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
				
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
						<div class="translation_message">
							<h2>Translate to: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['target_page']->value);?>
</h2>
							Reproduce the changes highlighted on the left using the editor below.
						</div>
					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki')); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['pagedata']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='edit') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
								<fieldset>
									<legend>Tags</legend>
									<table>
										<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
									</table>
								</fieldset>
							<?php }?>
					<?php }?>
					<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
						<fieldset class="edit-zone-footer">
							<label for="comment">Describe the change you made <?php echo smarty_function_help(array('url'=>'Editing+Wiki+Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
							<input class="form-control wikiedit" type="text" id="comment" name="comment" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['commentdata']->value);?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['show_watch']->value)&&$_smarty_tpl->tpl_vars['show_watch']->value=='y') {?>
								<label for="watch">Monitor this page</label>
								<input type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value=='y') {?> checked="checked"<?php }?>>
							<?php }?>
						</fieldset>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<fieldset>
								<legend>Contributions</legend>
								<table>
									<?php /*  Call merged included template "contribution.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2c3320_43543456($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "contribution.tpl" */?>
								</table>
							</fieldset>
						<?php }?>
						<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager']!='y') {?>
							<fieldset>
								<legend>Upload picture</legend>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted" value="">
								<input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value) {
echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
								<input name="picfile1" type="file" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
								<div id="new_img_form"></div>
								<a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
							</fieldset>
						<?php }?>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['categIds']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<strong>Categorization has been preset for this edit</strong>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
								<input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
">
							<?php endfor; endif; ?>
							<input type="hidden" name="cat_categorize" value="on">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y') {?>
								Categories will be inherited from the structure top page
							<?php }?>
						<?php } else { ?>
							<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
								<?php /*  Call merged included template "categorize.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notable'=>'y'), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2ea435_23083985($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categorize.tpl" */?>
							<?php }?>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='freetagstab') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="t_navbar margin-bottom-md clearfix">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=="y") {?>
								<a href="tiki-admin.php?page=wiki" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Wiki Preferences
								</a>
								<?php echo smarty_function_permission_link(array('mode'=>'button_link','permType'=>'wiki'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=='y') {?>
								<a href="tiki-admin_content_templates.php" class="btn btn-link" onclick="needToConfirm = true;">
									<?php echo smarty_function_icon(array('name'=>"content-template"),$_smarty_tpl);?>
 Content Templates
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
								<a href="tiki-admin_structures.php" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Structures
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)) {?>
									<a href="copyrights.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"copyright"),$_smarty_tpl);?>
 Copyright notices</a>
								<?php }?>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"wiki"),$_smarty_tpl);?>
 Copyright page</a>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y') {?>
							<div class="form-group">
								<label for="templateId" class="col-md-4 control-label">Apply content template</label>
								<div class="col-md-8">
									<select class="form-control" id="templateId" name="templateId" onchange="needToConfirm=false;$('#editpageform').submit();">
										<option value="0">none</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']);?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
											<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
							<div class="form-group">
								<label for="lock_it" class="col-md-4 control-label">Lock this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='n') {?>
							<div class="form-group">
								<label for="comments_enabled" class="col-md-4 control-label">Allow comments on this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y'&&($_smarty_tpl->tpl_vars['wysiwyg']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y')) {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="allowhtml">Allow HTML</label>
								<div class="col-md-8">
									<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>checked="checked"<?php }?>>
									<span class="help-block">
										HTML tags are used to create elements of the wiki page, instead of being displayed as code.
									</span>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("input[name=allowhtml]").change(function() {
	auto_save( "editwiki", autoSaveId );
	});
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php } else { ?>
							<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html']=='y') {?>
							<div class="form-group">
								<label for="suck_url" class="col-md-4 control-label">Import HTML</label>
								<div class="col-md-8 form-inline">
									<input class="form-control wikiedit" type="text" id="suck_url" name="suck_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['suck_url']->value);?>
">
									<input type="submit" class="wikiaction btn btn-default" name="do_suck" value="Import" onclick="needToConfirm=false;">
									<label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value=='y') {?>checked="checked"<?php }?>>&nbsp;
									Try to convert HTML to wiki</label>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page']=='y') {?>
							<div class="form-group clearfix">
								<label for="userfile1" class="col-md-4 control-label">Import page</label>
								<div class="col-md-8 form-inline">
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input class="form-control" id="userfile1" name="userfile1" type="file">
									<input type="submit" class="wikiaction btn btn-default" name="attach" value="Import" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Export page</label>
								<div class="col-md-8">
									<a href="tiki-export_wiki_pages.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;all=1" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export all versions</a>
								</div>
							</div>
						<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')) {?>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted2" value="">
								<input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<div class="form-group clearfix">
									<label for="attach-upload" class="col-md-4 control-label">Attach file</label>
									<div class="col-md-8 form-inline">
										<input name="userfile2" type="file" id="attach-upload" class="form-control">
										<input type="text" name="attach_comment" class="form-control" maxlength="250" id="attach-comment" placeholder="Comment">
										<input type="submit" class="wikiaction btn btn-default" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
									</div>
								</div>
							<?php }?>
						<?php }?>
						
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Bibliography</label>
									<div class="col-md-8">
										<?php /*  Call merged included template "addreference.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d33c4c5_74793310($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "addreference.tpl" */?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='properties'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
									<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache']=='y') {?>
								<div class="form-group">
									<label for="wiki_cache" class="control-label col-md-4">Cache</label>
									<div class="col-md-8">
										<select id="wiki_cache" name="wiki_cache" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>selected="selected"<?php }?>>0 (no cache)</option>
											<option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==60) {?>selected="selected"<?php }?>>1 minute</option>
											<option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==300) {?>selected="selected"<?php }?>>5 minutes</option>
											<option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==600) {?>selected="selected"<?php }?>>10 minute</option>
											<option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==900) {?>selected="selected"<?php }?>>15 minutes</option>
											<option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==1800) {?>selected="selected"<?php }?>>30 minute</option>
											<option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==3600) {?>selected="selected"<?php }?>>1 hour</option>
											<option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==7200) {?>selected="selected"<?php }?>>2 hours</option>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y'&&count($_smarty_tpl->tpl_vars['showstructs']->value)>0) {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Structures</label>
									<div class="col-md-8" id="showstructs">
										<ul>
											<?php  $_smarty_tpl->tpl_vars['page_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showstructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->key => $_smarty_tpl->tpl_vars['page_info']->value) {
$_smarty_tpl->tpl_vars['page_info']->_loop = true;
?>
												<li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];
if (!empty($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['page_info']->value['outputType'])]->value['page_alias'])) {?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Copyright</label>
									<div class="col-md-8">
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightTitle">Title</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightTitle']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightYear">Year</label>
											<div class="col-md-8">
												<input size="4" class="form-control wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightYear']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightAuthors">Authors</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightAuthors']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightHolder">Copyright Holder</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightHolder']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice']!='') {?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Important:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page']=='y') {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Authors</label>
									<div class="col-md-8">
										<select name="wiki_authors_style" id="wiki_authors_style" class="form-control">
											<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style_site']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style_site']->value=='y') {?>
												<option value="" style="font-style:italic;border-bottom:1px dashed #666;"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='') {?> selected="selected"<?php }?>>Site default</option>
											<?php }?>
											<option value="classic"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='classic') {?> selected="selected"<?php }?>>as Creator &amp; Last Editor</option>
											<option value="business"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business') {?> selected="selected"<?php }?>>Business style</option>
											<option value="collaborative"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative') {?> selected="selected"<?php }?>>Collaborative style</option>
											<option value="lastmodif"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif') {?> selected="selected"<?php }?>>Page last modified on</option>
											<option value="none"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='none') {?> selected="selected"<?php }?>>no (disabled)</option>
										</select>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
							<div class="form-group">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
									<label for="" class="col-md-4 control-label">Description (used for metatags)</label>
								<?php } else { ?>
									<label for="" class="col-md-4 control-label">Description</label>
								<?php }?>
								<div class="col-md-8">
									<input class="form-control" type="text" id="description" name="description" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<div class="form-group">
									<label for="footnote" class="col-md-4 control-label">My Footnotes</label>
									<div class="col-md-8">
										<textarea id="footnote" name="footnote" class="form-control" rows="8"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['footnote']->value);?>
</textarea>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Rating</label>
								<div class="col-md-8">
									<?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_rated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
?>
										<div>
											<a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
											<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url"), null, 0);?>
											<?php $_smarty_tpl->tpl_vars['thispoll_rated'] = new Smarty_variable($_smarty_tpl->tpl_vars['rating']->value['info']['pollId'], null, 0);?>
											<?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

										</div>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value=='y') {?>
										<?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value)<=1||$_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object']=='y') {?>
										<div>
											<?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)) {?>
												Type
												<select name="poll_template">
													<option value="0">none</option>
													<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
														<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['pollId']);?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId']==$_smarty_tpl->tpl_vars['poll_template']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
													<?php } ?>
												</select>
												Title
												<input type="text" name="poll_title" size="22">
											<?php } else { ?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													There is no available poll template.
													<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value!='y') {?>
														Please ask an administrator to create one.
													<?php }?>
												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<fieldset>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Language</label>
									<div class="col-md-8">
										<select name="lang" id="lang" class="form-control margin-bottom-sm">
											<option value=""<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)) {?> selected="selected"<?php }?>>Unknown</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
											<?php endfor; endif; ?>
										</select>
										<span class="help-block">
											<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php if ($_smarty_tpl->tpl_vars['translationOf']->value) {?>
												<input type="hidden" name="translationOf" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translationOf']->value);?>
">
											<?php }?>
										</span>
									</div>
								</div>
							</fieldset>
							<?php if (count($_smarty_tpl->tpl_vars['trads']->value)>1&&$_smarty_tpl->tpl_vars['urgent_allowed']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Translation</label>
									<div class="col-md-8">
										<fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']!='y'||$_smarty_tpl->tpl_vars['diff_style']->value) {?> style="display:none;"<?php }?>>
											<legend>Translation request:</legend>
											<input type="hidden" name="lang" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lang']->value);?>
">
											<input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value) {?> checked="checked"<?php }?>>
											<label for="translation_critical">Send urgent translation request.</label>
											<?php if ($_smarty_tpl->tpl_vars['diff_style']->value) {?>
												<input type="hidden" name="oldver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_oldver']->value);?>
">
												<input type="hidden" name="newver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_newver']->value);?>
">
											<?php }?>
										</fieldset>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki']=='y') {?>
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

							<div class="form-group">
								<label for="" class="col-md-4 control-label">Geolocation</label>
								<div class="col-md-8">
									<div class="map-container form-control" data-geo-center="<?php echo $_smarty_tpl->tpl_vars['defaultmapcenter']->value;?>
" data-target-field="geolocation" style="height: 250px;"></div>
									<input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
								</div>
							</div>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_auto_toc']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y') {?>
							<div class="form-group clearfix">
								<label for="pageAutoToc" class="col-md-4 control-label">Automatic table of contents</label>
								<div class="col-md-8">
									<select name="pageAutoToc" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y')) {?>
							<div class="form-group clearfix">
								<label for="page_hide_title" class="col-md-4 control-label">Show page title</label>
								<div class="col-md-8">
									<select name="page_hide_title" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y') {?>
							<div class="form-group clearfix">
								<label for="explicit_namespace" class="col-md-4 control-label">Namespace</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="explicit_namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['explicit_namespace']->value);?>
" placeholder="Explicit Namespace">
									<span class="help-block">
										The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.
									</span>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout_per_object']=='y') {?>
							<fieldset>
								<div class="form-group">
									<label for="object_layout" class="col-md-4 control-label">Page layout</label>
									<div class="col-md-8">
										<select name="object_layout" class="form-control">
											<option value="">Site Default</option>
											<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['object_layout']->value['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['object_layout']->value['current']==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</fieldset>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value=='y') {?>
						<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
					<?php }?>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="form-group">
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&(isset($_smarty_tpl->tpl_vars['anon_user']->value)&&$_smarty_tpl->tpl_vars['anon_user']->value=='y')) {?>
					<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d3dc769_08705102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']!='top') {?>
				<div class="form-group">
					<div class="text-center">
						<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'page_info'=>$_smarty_tpl->tpl_vars['page_info']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
					</div>
				</div>
			<?php }?>
		</div>
	</form>
	<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d403875_87456794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-12 text-right side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>

			<div class="col-md-9 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
		<h1 class="pagetitle">
			<?php $_smarty_tpl->_capture_stack[0][] = array("pageDescription", null, null); ob_start(); ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
if ($_smarty_tpl->tpl_vars['pageAlias']->value!='') {?> (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageAlias']->value);?>
)<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y') {?>
				Edit Section: <?php echo Smarty::$_smarty_vars['capture']['pageDescription'];?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>'))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</h1>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

				
				
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['customTip']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTip']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<div class="pull-right">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(".previewBtn").click(function(){
			auto_save('editwiki', autoSaveId);
			if ($('#autosave_preview:visible').length === 0) {
				if (!ajaxPreviewWindow) {
					setCookie("preview_diff_style", "", "preview", "session");
					$("#preview_diff_style").val("").trigger("chosen:updated");
					$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
				}
			} else {
				ajax_preview( 'editwiki', autoSaveId, true );
			}
			return false;
		});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['draft'])) {?>
		Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']<$_smarty_tpl->tpl_vars['data']->value['lastModif']) {?>
			<b>Warning: new versions of this page have been made after this draft</b>
		<?php }?>
	<?php }?>
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			The Sandbox is a page where you can practice editing, etc. and use the preview feature to check the appearance of the page. No versions are stored for this page.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['included_by']->value)) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        The following item(s) include this one with Plugin Include and might be affected by these changes. Renaming sections can break related item(s).
		        <?php /*  Call merged included template "tiki-edit-page-included_by.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1c15e8_37446688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-included_by.tpl" */?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A contribution is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['summary_needed']->value)&&$_smarty_tpl->tpl_vars['summary_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>An edit summary is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['likepages']->value) {?>
		<div>
			Perhaps you are looking for:
			<?php if (count($_smarty_tpl->tpl_vars['likepages']->value)<0) {?>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			<?php } else { ?>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
								<td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a></td>
								<?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

							<?php endfor; endif; ?>
						</tr>
					</table>
				</div>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<?php /*  Call merged included template "tiki-preview.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1e4874_65150018($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-preview.tpl" */?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
		<div id="diff_outer">
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
				<div class="translation_message">
					<h2><?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate from: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
</h2>
					Changes that need to be translated are highlighted below.
				</div>
			<?php }?>
			<div id="diff_history">
				<?php /*  Call merged included template "pagehistory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cant'=>0), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1ffdf2_51400139($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pagehistory.tpl" */?>
				<?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value) {?>
					<div class="wikitext" id="diff_versions">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['diff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diff']->key => $_smarty_tpl->tpl_vars['diff']->value) {
$_smarty_tpl->tpl_vars['diff']->_loop = true;
?>
								<li>
									Version: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['version']);?>
 - <?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['comment']))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

									<?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value)>1) {?>
										<?php $_smarty_tpl->tpl_vars['diff_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value['version'], null, 0);?>
										<?php echo smarty_function_icon(array('name'=>"next",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'title'=>":View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

									<?php }?>
								</li>
							<?php } ?>
							<?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

						</ul>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value=='y') {?>
		<?php /*  Call merged included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d265719_41692242($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */?>
	<?php }?>
	<form enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
" class="form-horizontal" id='editpageform' name='editpageform'>
		<input type="hidden" name="no_bl" value="y">
		<?php if (!empty($_REQUEST['returnto'])) {?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
			<select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
				<option value="htmldiff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?> selected="selected"<?php }?>>html</option>
				<option value="inlinediff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff") {?> selected="selected"<?php }?> >text</option>
				<option value="inlinediff-full"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full") {?> selected="selected"<?php }?> >text full</option>
			</select>
			<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)) {?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cell']->value)) {?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['pos']->value)) {?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_page_id']->value) {?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['add_child']->value) {?><input type="hidden" name="add_child" value="true"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='both') {?>
			<div class='top_actions'>
				<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
			</div>
		<?php }?>
		<div class="form-group margin-side-0">
			<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
					<p>Page name: <input type="text" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="rename" value="Rename">
					</p>
			<?php } else { ?>
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
				
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
						<div class="translation_message">
							<h2>Translate to: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['target_page']->value);?>
</h2>
							Reproduce the changes highlighted on the left using the editor below.
						</div>
					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki')); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['pagedata']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='edit') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
								<fieldset>
									<legend>Tags</legend>
									<table>
										<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
									</table>
								</fieldset>
							<?php }?>
					<?php }?>
					<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
						<fieldset class="edit-zone-footer">
							<label for="comment">Describe the change you made <?php echo smarty_function_help(array('url'=>'Editing+Wiki+Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
							<input class="form-control wikiedit" type="text" id="comment" name="comment" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['commentdata']->value);?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['show_watch']->value)&&$_smarty_tpl->tpl_vars['show_watch']->value=='y') {?>
								<label for="watch">Monitor this page</label>
								<input type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value=='y') {?> checked="checked"<?php }?>>
							<?php }?>
						</fieldset>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<fieldset>
								<legend>Contributions</legend>
								<table>
									<?php /*  Call merged included template "contribution.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2c3320_43543456($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "contribution.tpl" */?>
								</table>
							</fieldset>
						<?php }?>
						<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager']!='y') {?>
							<fieldset>
								<legend>Upload picture</legend>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted" value="">
								<input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value) {
echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
								<input name="picfile1" type="file" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
								<div id="new_img_form"></div>
								<a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
							</fieldset>
						<?php }?>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['categIds']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<strong>Categorization has been preset for this edit</strong>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
								<input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
">
							<?php endfor; endif; ?>
							<input type="hidden" name="cat_categorize" value="on">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y') {?>
								Categories will be inherited from the structure top page
							<?php }?>
						<?php } else { ?>
							<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
								<?php /*  Call merged included template "categorize.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notable'=>'y'), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2ea435_23083985($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categorize.tpl" */?>
							<?php }?>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='freetagstab') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="t_navbar margin-bottom-md clearfix">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=="y") {?>
								<a href="tiki-admin.php?page=wiki" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Wiki Preferences
								</a>
								<?php echo smarty_function_permission_link(array('mode'=>'button_link','permType'=>'wiki'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=='y') {?>
								<a href="tiki-admin_content_templates.php" class="btn btn-link" onclick="needToConfirm = true;">
									<?php echo smarty_function_icon(array('name'=>"content-template"),$_smarty_tpl);?>
 Content Templates
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
								<a href="tiki-admin_structures.php" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Structures
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)) {?>
									<a href="copyrights.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"copyright"),$_smarty_tpl);?>
 Copyright notices</a>
								<?php }?>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"wiki"),$_smarty_tpl);?>
 Copyright page</a>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y') {?>
							<div class="form-group">
								<label for="templateId" class="col-md-4 control-label">Apply content template</label>
								<div class="col-md-8">
									<select class="form-control" id="templateId" name="templateId" onchange="needToConfirm=false;$('#editpageform').submit();">
										<option value="0">none</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']);?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
											<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
							<div class="form-group">
								<label for="lock_it" class="col-md-4 control-label">Lock this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='n') {?>
							<div class="form-group">
								<label for="comments_enabled" class="col-md-4 control-label">Allow comments on this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y'&&($_smarty_tpl->tpl_vars['wysiwyg']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y')) {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="allowhtml">Allow HTML</label>
								<div class="col-md-8">
									<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>checked="checked"<?php }?>>
									<span class="help-block">
										HTML tags are used to create elements of the wiki page, instead of being displayed as code.
									</span>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("input[name=allowhtml]").change(function() {
	auto_save( "editwiki", autoSaveId );
	});
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php } else { ?>
							<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html']=='y') {?>
							<div class="form-group">
								<label for="suck_url" class="col-md-4 control-label">Import HTML</label>
								<div class="col-md-8 form-inline">
									<input class="form-control wikiedit" type="text" id="suck_url" name="suck_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['suck_url']->value);?>
">
									<input type="submit" class="wikiaction btn btn-default" name="do_suck" value="Import" onclick="needToConfirm=false;">
									<label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value=='y') {?>checked="checked"<?php }?>>&nbsp;
									Try to convert HTML to wiki</label>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page']=='y') {?>
							<div class="form-group clearfix">
								<label for="userfile1" class="col-md-4 control-label">Import page</label>
								<div class="col-md-8 form-inline">
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input class="form-control" id="userfile1" name="userfile1" type="file">
									<input type="submit" class="wikiaction btn btn-default" name="attach" value="Import" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Export page</label>
								<div class="col-md-8">
									<a href="tiki-export_wiki_pages.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;all=1" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export all versions</a>
								</div>
							</div>
						<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')) {?>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted2" value="">
								<input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<div class="form-group clearfix">
									<label for="attach-upload" class="col-md-4 control-label">Attach file</label>
									<div class="col-md-8 form-inline">
										<input name="userfile2" type="file" id="attach-upload" class="form-control">
										<input type="text" name="attach_comment" class="form-control" maxlength="250" id="attach-comment" placeholder="Comment">
										<input type="submit" class="wikiaction btn btn-default" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
									</div>
								</div>
							<?php }?>
						<?php }?>
						
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Bibliography</label>
									<div class="col-md-8">
										<?php /*  Call merged included template "addreference.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d33c4c5_74793310($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "addreference.tpl" */?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='properties'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
									<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache']=='y') {?>
								<div class="form-group">
									<label for="wiki_cache" class="control-label col-md-4">Cache</label>
									<div class="col-md-8">
										<select id="wiki_cache" name="wiki_cache" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>selected="selected"<?php }?>>0 (no cache)</option>
											<option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==60) {?>selected="selected"<?php }?>>1 minute</option>
											<option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==300) {?>selected="selected"<?php }?>>5 minutes</option>
											<option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==600) {?>selected="selected"<?php }?>>10 minute</option>
											<option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==900) {?>selected="selected"<?php }?>>15 minutes</option>
											<option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==1800) {?>selected="selected"<?php }?>>30 minute</option>
											<option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==3600) {?>selected="selected"<?php }?>>1 hour</option>
											<option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==7200) {?>selected="selected"<?php }?>>2 hours</option>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y'&&count($_smarty_tpl->tpl_vars['showstructs']->value)>0) {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Structures</label>
									<div class="col-md-8" id="showstructs">
										<ul>
											<?php  $_smarty_tpl->tpl_vars['page_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showstructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->key => $_smarty_tpl->tpl_vars['page_info']->value) {
$_smarty_tpl->tpl_vars['page_info']->_loop = true;
?>
												<li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];
if (!empty($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['page_info']->value['outputType'])]->value['page_alias'])) {?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Copyright</label>
									<div class="col-md-8">
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightTitle">Title</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightTitle']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightYear">Year</label>
											<div class="col-md-8">
												<input size="4" class="form-control wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightYear']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightAuthors">Authors</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightAuthors']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightHolder">Copyright Holder</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightHolder']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice']!='') {?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Important:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page']=='y') {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Authors</label>
									<div class="col-md-8">
										<select name="wiki_authors_style" id="wiki_authors_style" class="form-control">
											<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style_site']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style_site']->value=='y') {?>
												<option value="" style="font-style:italic;border-bottom:1px dashed #666;"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='') {?> selected="selected"<?php }?>>Site default</option>
											<?php }?>
											<option value="classic"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='classic') {?> selected="selected"<?php }?>>as Creator &amp; Last Editor</option>
											<option value="business"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business') {?> selected="selected"<?php }?>>Business style</option>
											<option value="collaborative"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative') {?> selected="selected"<?php }?>>Collaborative style</option>
											<option value="lastmodif"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif') {?> selected="selected"<?php }?>>Page last modified on</option>
											<option value="none"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='none') {?> selected="selected"<?php }?>>no (disabled)</option>
										</select>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
							<div class="form-group">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
									<label for="" class="col-md-4 control-label">Description (used for metatags)</label>
								<?php } else { ?>
									<label for="" class="col-md-4 control-label">Description</label>
								<?php }?>
								<div class="col-md-8">
									<input class="form-control" type="text" id="description" name="description" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<div class="form-group">
									<label for="footnote" class="col-md-4 control-label">My Footnotes</label>
									<div class="col-md-8">
										<textarea id="footnote" name="footnote" class="form-control" rows="8"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['footnote']->value);?>
</textarea>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Rating</label>
								<div class="col-md-8">
									<?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_rated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
?>
										<div>
											<a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
											<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url"), null, 0);?>
											<?php $_smarty_tpl->tpl_vars['thispoll_rated'] = new Smarty_variable($_smarty_tpl->tpl_vars['rating']->value['info']['pollId'], null, 0);?>
											<?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

										</div>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value=='y') {?>
										<?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value)<=1||$_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object']=='y') {?>
										<div>
											<?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)) {?>
												Type
												<select name="poll_template">
													<option value="0">none</option>
													<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
														<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['pollId']);?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId']==$_smarty_tpl->tpl_vars['poll_template']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
													<?php } ?>
												</select>
												Title
												<input type="text" name="poll_title" size="22">
											<?php } else { ?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													There is no available poll template.
													<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value!='y') {?>
														Please ask an administrator to create one.
													<?php }?>
												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<fieldset>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Language</label>
									<div class="col-md-8">
										<select name="lang" id="lang" class="form-control margin-bottom-sm">
											<option value=""<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)) {?> selected="selected"<?php }?>>Unknown</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
											<?php endfor; endif; ?>
										</select>
										<span class="help-block">
											<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');
$_tmp7=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp7)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp7), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp7), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php if ($_smarty_tpl->tpl_vars['translationOf']->value) {?>
												<input type="hidden" name="translationOf" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translationOf']->value);?>
">
											<?php }?>
										</span>
									</div>
								</div>
							</fieldset>
							<?php if (count($_smarty_tpl->tpl_vars['trads']->value)>1&&$_smarty_tpl->tpl_vars['urgent_allowed']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Translation</label>
									<div class="col-md-8">
										<fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']!='y'||$_smarty_tpl->tpl_vars['diff_style']->value) {?> style="display:none;"<?php }?>>
											<legend>Translation request:</legend>
											<input type="hidden" name="lang" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lang']->value);?>
">
											<input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value) {?> checked="checked"<?php }?>>
											<label for="translation_critical">Send urgent translation request.</label>
											<?php if ($_smarty_tpl->tpl_vars['diff_style']->value) {?>
												<input type="hidden" name="oldver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_oldver']->value);?>
">
												<input type="hidden" name="newver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_newver']->value);?>
">
											<?php }?>
										</fieldset>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki']=='y') {?>
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

							<div class="form-group">
								<label for="" class="col-md-4 control-label">Geolocation</label>
								<div class="col-md-8">
									<div class="map-container form-control" data-geo-center="<?php echo $_smarty_tpl->tpl_vars['defaultmapcenter']->value;?>
" data-target-field="geolocation" style="height: 250px;"></div>
									<input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
								</div>
							</div>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_auto_toc']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y') {?>
							<div class="form-group clearfix">
								<label for="pageAutoToc" class="col-md-4 control-label">Automatic table of contents</label>
								<div class="col-md-8">
									<select name="pageAutoToc" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y')) {?>
							<div class="form-group clearfix">
								<label for="page_hide_title" class="col-md-4 control-label">Show page title</label>
								<div class="col-md-8">
									<select name="page_hide_title" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y') {?>
							<div class="form-group clearfix">
								<label for="explicit_namespace" class="col-md-4 control-label">Namespace</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="explicit_namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['explicit_namespace']->value);?>
" placeholder="Explicit Namespace">
									<span class="help-block">
										The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.
									</span>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout_per_object']=='y') {?>
							<fieldset>
								<div class="form-group">
									<label for="object_layout" class="col-md-4 control-label">Page layout</label>
									<div class="col-md-8">
										<select name="object_layout" class="form-control">
											<option value="">Site Default</option>
											<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['object_layout']->value['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['object_layout']->value['current']==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</fieldset>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value=='y') {?>
						<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
					<?php }?>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="form-group">
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&(isset($_smarty_tpl->tpl_vars['anon_user']->value)&&$_smarty_tpl->tpl_vars['anon_user']->value=='y')) {?>
					<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d3dc769_08705102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']!='top') {?>
				<div class="form-group">
					<div class="text-center">
						<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'page_info'=>$_smarty_tpl->tpl_vars['page_info']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
					</div>
				</div>
			<?php }?>
		</div>
	</form>
	<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d403875_87456794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php } elseif (zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-12 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-9 col-md-push-3 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
		<h1 class="pagetitle">
			<?php $_smarty_tpl->_capture_stack[0][] = array("pageDescription", null, null); ob_start(); ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
if ($_smarty_tpl->tpl_vars['pageAlias']->value!='') {?> (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageAlias']->value);?>
)<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y') {?>
				Edit Section: <?php echo Smarty::$_smarty_vars['capture']['pageDescription'];?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>'))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</h1>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

				
				
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['customTip']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTip']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<div class="pull-right">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(".previewBtn").click(function(){
			auto_save('editwiki', autoSaveId);
			if ($('#autosave_preview:visible').length === 0) {
				if (!ajaxPreviewWindow) {
					setCookie("preview_diff_style", "", "preview", "session");
					$("#preview_diff_style").val("").trigger("chosen:updated");
					$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
				}
			} else {
				ajax_preview( 'editwiki', autoSaveId, true );
			}
			return false;
		});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['draft'])) {?>
		Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']<$_smarty_tpl->tpl_vars['data']->value['lastModif']) {?>
			<b>Warning: new versions of this page have been made after this draft</b>
		<?php }?>
	<?php }?>
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			The Sandbox is a page where you can practice editing, etc. and use the preview feature to check the appearance of the page. No versions are stored for this page.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['included_by']->value)) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        The following item(s) include this one with Plugin Include and might be affected by these changes. Renaming sections can break related item(s).
		        <?php /*  Call merged included template "tiki-edit-page-included_by.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1c15e8_37446688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-included_by.tpl" */?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A contribution is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['summary_needed']->value)&&$_smarty_tpl->tpl_vars['summary_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>An edit summary is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['likepages']->value) {?>
		<div>
			Perhaps you are looking for:
			<?php if (count($_smarty_tpl->tpl_vars['likepages']->value)<0) {?>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			<?php } else { ?>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
								<td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a></td>
								<?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

							<?php endfor; endif; ?>
						</tr>
					</table>
				</div>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<?php /*  Call merged included template "tiki-preview.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1e4874_65150018($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-preview.tpl" */?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
		<div id="diff_outer">
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
				<div class="translation_message">
					<h2><?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate from: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
</h2>
					Changes that need to be translated are highlighted below.
				</div>
			<?php }?>
			<div id="diff_history">
				<?php /*  Call merged included template "pagehistory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cant'=>0), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1ffdf2_51400139($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pagehistory.tpl" */?>
				<?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value) {?>
					<div class="wikitext" id="diff_versions">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['diff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diff']->key => $_smarty_tpl->tpl_vars['diff']->value) {
$_smarty_tpl->tpl_vars['diff']->_loop = true;
?>
								<li>
									Version: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['version']);?>
 - <?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['comment']))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

									<?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value)>1) {?>
										<?php $_smarty_tpl->tpl_vars['diff_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value['version'], null, 0);?>
										<?php echo smarty_function_icon(array('name'=>"next",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'title'=>":View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

									<?php }?>
								</li>
							<?php } ?>
							<?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

						</ul>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value=='y') {?>
		<?php /*  Call merged included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d265719_41692242($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */?>
	<?php }?>
	<form enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
" class="form-horizontal" id='editpageform' name='editpageform'>
		<input type="hidden" name="no_bl" value="y">
		<?php if (!empty($_REQUEST['returnto'])) {?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
			<select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
				<option value="htmldiff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?> selected="selected"<?php }?>>html</option>
				<option value="inlinediff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff") {?> selected="selected"<?php }?> >text</option>
				<option value="inlinediff-full"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full") {?> selected="selected"<?php }?> >text full</option>
			</select>
			<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)) {?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cell']->value)) {?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['pos']->value)) {?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_page_id']->value) {?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['add_child']->value) {?><input type="hidden" name="add_child" value="true"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='both') {?>
			<div class='top_actions'>
				<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
			</div>
		<?php }?>
		<div class="form-group margin-side-0">
			<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
					<p>Page name: <input type="text" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="rename" value="Rename">
					</p>
			<?php } else { ?>
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
				
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
						<div class="translation_message">
							<h2>Translate to: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['target_page']->value);?>
</h2>
							Reproduce the changes highlighted on the left using the editor below.
						</div>
					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki')); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['pagedata']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='edit') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
								<fieldset>
									<legend>Tags</legend>
									<table>
										<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
									</table>
								</fieldset>
							<?php }?>
					<?php }?>
					<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
						<fieldset class="edit-zone-footer">
							<label for="comment">Describe the change you made <?php echo smarty_function_help(array('url'=>'Editing+Wiki+Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
							<input class="form-control wikiedit" type="text" id="comment" name="comment" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['commentdata']->value);?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['show_watch']->value)&&$_smarty_tpl->tpl_vars['show_watch']->value=='y') {?>
								<label for="watch">Monitor this page</label>
								<input type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value=='y') {?> checked="checked"<?php }?>>
							<?php }?>
						</fieldset>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<fieldset>
								<legend>Contributions</legend>
								<table>
									<?php /*  Call merged included template "contribution.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2c3320_43543456($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "contribution.tpl" */?>
								</table>
							</fieldset>
						<?php }?>
						<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager']!='y') {?>
							<fieldset>
								<legend>Upload picture</legend>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted" value="">
								<input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value) {
echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
								<input name="picfile1" type="file" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
								<div id="new_img_form"></div>
								<a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
							</fieldset>
						<?php }?>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['categIds']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<strong>Categorization has been preset for this edit</strong>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
								<input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
">
							<?php endfor; endif; ?>
							<input type="hidden" name="cat_categorize" value="on">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y') {?>
								Categories will be inherited from the structure top page
							<?php }?>
						<?php } else { ?>
							<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
								<?php /*  Call merged included template "categorize.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notable'=>'y'), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2ea435_23083985($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categorize.tpl" */?>
							<?php }?>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='freetagstab') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="t_navbar margin-bottom-md clearfix">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=="y") {?>
								<a href="tiki-admin.php?page=wiki" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Wiki Preferences
								</a>
								<?php echo smarty_function_permission_link(array('mode'=>'button_link','permType'=>'wiki'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=='y') {?>
								<a href="tiki-admin_content_templates.php" class="btn btn-link" onclick="needToConfirm = true;">
									<?php echo smarty_function_icon(array('name'=>"content-template"),$_smarty_tpl);?>
 Content Templates
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
								<a href="tiki-admin_structures.php" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Structures
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)) {?>
									<a href="copyrights.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"copyright"),$_smarty_tpl);?>
 Copyright notices</a>
								<?php }?>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"wiki"),$_smarty_tpl);?>
 Copyright page</a>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y') {?>
							<div class="form-group">
								<label for="templateId" class="col-md-4 control-label">Apply content template</label>
								<div class="col-md-8">
									<select class="form-control" id="templateId" name="templateId" onchange="needToConfirm=false;$('#editpageform').submit();">
										<option value="0">none</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']);?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
											<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
							<div class="form-group">
								<label for="lock_it" class="col-md-4 control-label">Lock this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='n') {?>
							<div class="form-group">
								<label for="comments_enabled" class="col-md-4 control-label">Allow comments on this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y'&&($_smarty_tpl->tpl_vars['wysiwyg']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y')) {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="allowhtml">Allow HTML</label>
								<div class="col-md-8">
									<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>checked="checked"<?php }?>>
									<span class="help-block">
										HTML tags are used to create elements of the wiki page, instead of being displayed as code.
									</span>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("input[name=allowhtml]").change(function() {
	auto_save( "editwiki", autoSaveId );
	});
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php } else { ?>
							<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html']=='y') {?>
							<div class="form-group">
								<label for="suck_url" class="col-md-4 control-label">Import HTML</label>
								<div class="col-md-8 form-inline">
									<input class="form-control wikiedit" type="text" id="suck_url" name="suck_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['suck_url']->value);?>
">
									<input type="submit" class="wikiaction btn btn-default" name="do_suck" value="Import" onclick="needToConfirm=false;">
									<label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value=='y') {?>checked="checked"<?php }?>>&nbsp;
									Try to convert HTML to wiki</label>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page']=='y') {?>
							<div class="form-group clearfix">
								<label for="userfile1" class="col-md-4 control-label">Import page</label>
								<div class="col-md-8 form-inline">
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input class="form-control" id="userfile1" name="userfile1" type="file">
									<input type="submit" class="wikiaction btn btn-default" name="attach" value="Import" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Export page</label>
								<div class="col-md-8">
									<a href="tiki-export_wiki_pages.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;all=1" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export all versions</a>
								</div>
							</div>
						<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')) {?>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted2" value="">
								<input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<div class="form-group clearfix">
									<label for="attach-upload" class="col-md-4 control-label">Attach file</label>
									<div class="col-md-8 form-inline">
										<input name="userfile2" type="file" id="attach-upload" class="form-control">
										<input type="text" name="attach_comment" class="form-control" maxlength="250" id="attach-comment" placeholder="Comment">
										<input type="submit" class="wikiaction btn btn-default" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
									</div>
								</div>
							<?php }?>
						<?php }?>
						
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Bibliography</label>
									<div class="col-md-8">
										<?php /*  Call merged included template "addreference.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d33c4c5_74793310($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "addreference.tpl" */?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='properties'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
									<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache']=='y') {?>
								<div class="form-group">
									<label for="wiki_cache" class="control-label col-md-4">Cache</label>
									<div class="col-md-8">
										<select id="wiki_cache" name="wiki_cache" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>selected="selected"<?php }?>>0 (no cache)</option>
											<option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==60) {?>selected="selected"<?php }?>>1 minute</option>
											<option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==300) {?>selected="selected"<?php }?>>5 minutes</option>
											<option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==600) {?>selected="selected"<?php }?>>10 minute</option>
											<option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==900) {?>selected="selected"<?php }?>>15 minutes</option>
											<option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==1800) {?>selected="selected"<?php }?>>30 minute</option>
											<option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==3600) {?>selected="selected"<?php }?>>1 hour</option>
											<option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==7200) {?>selected="selected"<?php }?>>2 hours</option>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y'&&count($_smarty_tpl->tpl_vars['showstructs']->value)>0) {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Structures</label>
									<div class="col-md-8" id="showstructs">
										<ul>
											<?php  $_smarty_tpl->tpl_vars['page_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showstructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->key => $_smarty_tpl->tpl_vars['page_info']->value) {
$_smarty_tpl->tpl_vars['page_info']->_loop = true;
?>
												<li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];
if (!empty($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['page_info']->value['outputType'])]->value['page_alias'])) {?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Copyright</label>
									<div class="col-md-8">
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightTitle">Title</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightTitle']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightYear">Year</label>
											<div class="col-md-8">
												<input size="4" class="form-control wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightYear']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightAuthors">Authors</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightAuthors']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightHolder">Copyright Holder</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightHolder']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice']!='') {?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Important:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page']=='y') {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Authors</label>
									<div class="col-md-8">
										<select name="wiki_authors_style" id="wiki_authors_style" class="form-control">
											<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style_site']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style_site']->value=='y') {?>
												<option value="" style="font-style:italic;border-bottom:1px dashed #666;"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='') {?> selected="selected"<?php }?>>Site default</option>
											<?php }?>
											<option value="classic"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='classic') {?> selected="selected"<?php }?>>as Creator &amp; Last Editor</option>
											<option value="business"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business') {?> selected="selected"<?php }?>>Business style</option>
											<option value="collaborative"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative') {?> selected="selected"<?php }?>>Collaborative style</option>
											<option value="lastmodif"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif') {?> selected="selected"<?php }?>>Page last modified on</option>
											<option value="none"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='none') {?> selected="selected"<?php }?>>no (disabled)</option>
										</select>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
							<div class="form-group">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
									<label for="" class="col-md-4 control-label">Description (used for metatags)</label>
								<?php } else { ?>
									<label for="" class="col-md-4 control-label">Description</label>
								<?php }?>
								<div class="col-md-8">
									<input class="form-control" type="text" id="description" name="description" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<div class="form-group">
									<label for="footnote" class="col-md-4 control-label">My Footnotes</label>
									<div class="col-md-8">
										<textarea id="footnote" name="footnote" class="form-control" rows="8"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['footnote']->value);?>
</textarea>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Rating</label>
								<div class="col-md-8">
									<?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_rated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
?>
										<div>
											<a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
											<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url"), null, 0);?>
											<?php $_smarty_tpl->tpl_vars['thispoll_rated'] = new Smarty_variable($_smarty_tpl->tpl_vars['rating']->value['info']['pollId'], null, 0);?>
											<?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

										</div>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value=='y') {?>
										<?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value)<=1||$_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object']=='y') {?>
										<div>
											<?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)) {?>
												Type
												<select name="poll_template">
													<option value="0">none</option>
													<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
														<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['pollId']);?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId']==$_smarty_tpl->tpl_vars['poll_template']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
													<?php } ?>
												</select>
												Title
												<input type="text" name="poll_title" size="22">
											<?php } else { ?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													There is no available poll template.
													<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value!='y') {?>
														Please ask an administrator to create one.
													<?php }?>
												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<fieldset>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Language</label>
									<div class="col-md-8">
										<select name="lang" id="lang" class="form-control margin-bottom-sm">
											<option value=""<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)) {?> selected="selected"<?php }?>>Unknown</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
											<?php endfor; endif; ?>
										</select>
										<span class="help-block">
											<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');
$_tmp8=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp8)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php if ($_smarty_tpl->tpl_vars['translationOf']->value) {?>
												<input type="hidden" name="translationOf" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translationOf']->value);?>
">
											<?php }?>
										</span>
									</div>
								</div>
							</fieldset>
							<?php if (count($_smarty_tpl->tpl_vars['trads']->value)>1&&$_smarty_tpl->tpl_vars['urgent_allowed']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Translation</label>
									<div class="col-md-8">
										<fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']!='y'||$_smarty_tpl->tpl_vars['diff_style']->value) {?> style="display:none;"<?php }?>>
											<legend>Translation request:</legend>
											<input type="hidden" name="lang" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lang']->value);?>
">
											<input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value) {?> checked="checked"<?php }?>>
											<label for="translation_critical">Send urgent translation request.</label>
											<?php if ($_smarty_tpl->tpl_vars['diff_style']->value) {?>
												<input type="hidden" name="oldver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_oldver']->value);?>
">
												<input type="hidden" name="newver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_newver']->value);?>
">
											<?php }?>
										</fieldset>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki']=='y') {?>
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

							<div class="form-group">
								<label for="" class="col-md-4 control-label">Geolocation</label>
								<div class="col-md-8">
									<div class="map-container form-control" data-geo-center="<?php echo $_smarty_tpl->tpl_vars['defaultmapcenter']->value;?>
" data-target-field="geolocation" style="height: 250px;"></div>
									<input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
								</div>
							</div>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_auto_toc']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y') {?>
							<div class="form-group clearfix">
								<label for="pageAutoToc" class="col-md-4 control-label">Automatic table of contents</label>
								<div class="col-md-8">
									<select name="pageAutoToc" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y')) {?>
							<div class="form-group clearfix">
								<label for="page_hide_title" class="col-md-4 control-label">Show page title</label>
								<div class="col-md-8">
									<select name="page_hide_title" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y') {?>
							<div class="form-group clearfix">
								<label for="explicit_namespace" class="col-md-4 control-label">Namespace</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="explicit_namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['explicit_namespace']->value);?>
" placeholder="Explicit Namespace">
									<span class="help-block">
										The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.
									</span>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout_per_object']=='y') {?>
							<fieldset>
								<div class="form-group">
									<label for="object_layout" class="col-md-4 control-label">Page layout</label>
									<div class="col-md-8">
										<select name="object_layout" class="form-control">
											<option value="">Site Default</option>
											<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['object_layout']->value['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['object_layout']->value['current']==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</fieldset>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value=='y') {?>
						<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
					<?php }?>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="form-group">
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&(isset($_smarty_tpl->tpl_vars['anon_user']->value)&&$_smarty_tpl->tpl_vars['anon_user']->value=='y')) {?>
					<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d3dc769_08705102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']!='top') {?>
				<div class="form-group">
					<div class="text-center">
						<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'page_info'=>$_smarty_tpl->tpl_vars['page_info']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
					</div>
				</div>
			<?php }?>
		</div>
	</form>
	<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d403875_87456794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3 col-md-pull-9" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-6 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-6 text-right side-col-toggle<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']!='user') {?> col-md-offset-6<?php }?>">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-8 col-md-push-2 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
		<h1 class="pagetitle">
			<?php $_smarty_tpl->_capture_stack[0][] = array("pageDescription", null, null); ob_start(); ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
if ($_smarty_tpl->tpl_vars['pageAlias']->value!='') {?> (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageAlias']->value);?>
)<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y') {?>
				Edit Section: <?php echo Smarty::$_smarty_vars['capture']['pageDescription'];?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>'))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(((('<a class="edit_pagetitle" href="').((smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value)))).('">')).(Smarty::$_smarty_vars['capture']['pageDescription'])).('</a>')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</h1>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

				
				
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['customTip']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTip']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<div class="pull-right">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"view",'_class'=>"previewBtn tips",'_ajax'=>"n",'_title'=>":Preview your changes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(".previewBtn").click(function(){
			auto_save('editwiki', autoSaveId);
			if ($('#autosave_preview:visible').length === 0) {
				if (!ajaxPreviewWindow) {
					setCookie("preview_diff_style", "", "preview", "session");
					$("#preview_diff_style").val("").trigger("chosen:updated");
					$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
				}
			} else {
				ajax_preview( 'editwiki', autoSaveId, true );
			}
			return false;
		});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['draft'])) {?>
		Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']<$_smarty_tpl->tpl_vars['data']->value['lastModif']) {?>
			<b>Warning: new versions of this page have been made after this draft</b>
		<?php }?>
	<?php }?>
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			The Sandbox is a page where you can practice editing, etc. and use the preview feature to check the appearance of the page. No versions are stored for this page.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['included_by']->value)) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        The following item(s) include this one with Plugin Include and might be affected by these changes. Renaming sections can break related item(s).
		        <?php /*  Call merged included template "tiki-edit-page-included_by.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1c15e8_37446688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-included_by.tpl" */?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>A contribution is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['summary_needed']->value)&&$_smarty_tpl->tpl_vars['summary_needed']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="highlight"><em class='mandatory_note'>An edit summary is mandatory</em></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['likepages']->value) {?>
		<div>
			Perhaps you are looking for:
			<?php if (count($_smarty_tpl->tpl_vars['likepages']->value)<0) {?>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			<?php } else { ?>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
								<td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a></td>
								<?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

							<?php endfor; endif; ?>
						</tr>
					</table>
				</div>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<?php /*  Call merged included template "tiki-preview.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1e4874_65150018($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-preview.tpl" */?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
		<div id="diff_outer">
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
				<div class="translation_message">
					<h2><?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate from: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
</h2>
					Changes that need to be translated are highlighted below.
				</div>
			<?php }?>
			<div id="diff_history">
				<?php /*  Call merged included template "pagehistory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cant'=>0), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d1ffdf2_51400139($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pagehistory.tpl" */?>
				<?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value) {?>
					<div class="wikitext" id="diff_versions">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['diff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diff']->key => $_smarty_tpl->tpl_vars['diff']->value) {
$_smarty_tpl->tpl_vars['diff']->_loop = true;
?>
								<li>
									Version: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['version']);?>
 - <?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['diff']->value['comment']))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

									<?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value)>1) {?>
										<?php $_smarty_tpl->tpl_vars['diff_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value['version'], null, 0);?>
										<?php echo smarty_function_icon(array('name'=>"next",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'title'=>":View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

									<?php }?>
								</li>
							<?php } ?>
							<?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

						</ul>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value=='y') {?>
		<?php /*  Call merged included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d265719_41692242($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */?>
	<?php }?>
	<form enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
" class="form-horizontal" id='editpageform' name='editpageform'>
		<input type="hidden" name="no_bl" value="y">
		<?php if (!empty($_REQUEST['returnto'])) {?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)) {?>
			<select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
				<option value="htmldiff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?> selected="selected"<?php }?>>html</option>
				<option value="inlinediff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff") {?> selected="selected"<?php }?> >text</option>
				<option value="inlinediff-full"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full") {?> selected="selected"<?php }?> >text full</option>
			</select>
			<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)) {?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cell']->value)) {?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['pos']->value)) {?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_page_id']->value) {?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['add_child']->value) {?><input type="hidden" name="add_child" value="true"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='both') {?>
			<div class='top_actions'>
				<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
			</div>
		<?php }?>
		<div class="form-group margin-side-0">
			<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
					<p>Page name: <input type="text" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="rename" value="Rename">
					</p>
			<?php } else { ?>
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
				
			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
						<div class="translation_message">
							<h2>Translate to: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['target_page']->value);?>
</h2>
							Reproduce the changes highlighted on the left using the editor below.
						</div>
					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki')); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['pagedata']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='edit') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
								<fieldset>
									<legend>Tags</legend>
									<table>
										<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
									</table>
								</fieldset>
							<?php }?>
					<?php }?>
					<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
						<fieldset class="edit-zone-footer">
							<label for="comment">Describe the change you made <?php echo smarty_function_help(array('url'=>'Editing+Wiki+Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
							<input class="form-control wikiedit" type="text" id="comment" name="comment" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['commentdata']->value);?>
" maxlength="255">
							<?php if (isset($_smarty_tpl->tpl_vars['show_watch']->value)&&$_smarty_tpl->tpl_vars['show_watch']->value=='y') {?>
								<label for="watch">Monitor this page</label>
								<input type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value=='y') {?> checked="checked"<?php }?>>
							<?php }?>
						</fieldset>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<fieldset>
								<legend>Contributions</legend>
								<table>
									<?php /*  Call merged included template "contribution.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2c3320_43543456($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "contribution.tpl" */?>
								</table>
							</fieldset>
						<?php }?>
						<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager']!='y') {?>
							<fieldset>
								<legend>Upload picture</legend>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted" value="">
								<input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value) {
echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
								<input name="picfile1" type="file" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
								<div id="new_img_form"></div>
								<a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
							</fieldset>
						<?php }?>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['categIds']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<strong>Categorization has been preset for this edit</strong>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
								<input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
">
							<?php endfor; endif; ?>
							<input type="hidden" name="cat_categorize" value="on">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y') {?>
								Categories will be inherited from the structure top page
							<?php }?>
						<?php } else { ?>
							<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
								<?php /*  Call merged included template "categorize.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('notable'=>'y'), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2ea435_23083985($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "categorize.tpl" */?>
							<?php }?>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='freetagstab') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="t_navbar margin-bottom-md clearfix">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=="y") {?>
								<a href="tiki-admin.php?page=wiki" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Wiki Preferences
								</a>
								<?php echo smarty_function_permission_link(array('mode'=>'button_link','permType'=>'wiki'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=='y') {?>
								<a href="tiki-admin_content_templates.php" class="btn btn-link" onclick="needToConfirm = true;">
									<?php echo smarty_function_icon(array('name'=>"content-template"),$_smarty_tpl);?>
 Content Templates
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
								<a href="tiki-admin_structures.php" class="btn btn-link">
									<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Structures
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)) {?>
									<a href="copyrights.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"copyright"),$_smarty_tpl);?>
 Copyright notices</a>
								<?php }?>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"wiki"),$_smarty_tpl);?>
 Copyright page</a>
							<?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y') {?>
							<div class="form-group">
								<label for="templateId" class="col-md-4 control-label">Apply content template</label>
								<div class="col-md-8">
									<select class="form-control" id="templateId" name="templateId" onchange="needToConfirm=false;$('#editpageform').submit();">
										<option value="0">none</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']);?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
											<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
							<div class="form-group">
								<label for="lock_it" class="col-md-4 control-label">Lock this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='n') {?>
							<div class="form-group">
								<label for="comments_enabled" class="col-md-4 control-label">Allow comments on this page</label>
								<div class="col-md-8">
									<input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value=='y') {?>checked="checked"<?php }?>>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y'&&($_smarty_tpl->tpl_vars['wysiwyg']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y')) {?>
							<div class="form-group">
								<label class="col-md-4 control-label" for="allowhtml">Allow HTML</label>
								<div class="col-md-8">
									<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>checked="checked"<?php }?>>
									<span class="help-block">
										HTML tags are used to create elements of the wiki page, instead of being displayed as code.
									</span>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("input[name=allowhtml]").change(function() {
	auto_save( "editwiki", autoSaveId );
	});
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php } else { ?>
							<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html']=='y') {?>
							<div class="form-group">
								<label for="suck_url" class="col-md-4 control-label">Import HTML</label>
								<div class="col-md-8 form-inline">
									<input class="form-control wikiedit" type="text" id="suck_url" name="suck_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['suck_url']->value);?>
">
									<input type="submit" class="wikiaction btn btn-default" name="do_suck" value="Import" onclick="needToConfirm=false;">
									<label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value=='y') {?>checked="checked"<?php }?>>&nbsp;
									Try to convert HTML to wiki</label>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page']=='y') {?>
							<div class="form-group clearfix">
								<label for="userfile1" class="col-md-4 control-label">Import page</label>
								<div class="col-md-8 form-inline">
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input class="form-control" id="userfile1" name="userfile1" type="file">
									<input type="submit" class="wikiaction btn btn-default" name="attach" value="Import" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Export page</label>
								<div class="col-md-8">
									<a href="tiki-export_wiki_pages.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;all=1" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export all versions</a>
								</div>
							</div>
						<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')) {?>
								<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
								<input type="hidden" name="hasAlreadyInserted2" value="">
								<input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
								<div class="form-group clearfix">
									<label for="attach-upload" class="col-md-4 control-label">Attach file</label>
									<div class="col-md-8 form-inline">
										<input name="userfile2" type="file" id="attach-upload" class="form-control">
										<input type="text" name="attach_comment" class="form-control" maxlength="250" id="attach-comment" placeholder="Comment">
										<input type="submit" class="wikiaction btn btn-default" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
									</div>
								</div>
							<?php }?>
						<?php }?>
						
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Bibliography</label>
									<div class="col-md-8">
										<?php /*  Call merged included template "addreference.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d33c4c5_74793310($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "addreference.tpl" */?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='properties'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
									<?php /*  Call merged included template "freetag.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d2a7da8_55055746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag.tpl" */?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache']=='y') {?>
								<div class="form-group">
									<label for="wiki_cache" class="control-label col-md-4">Cache</label>
									<div class="col-md-8">
										<select id="wiki_cache" name="wiki_cache" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>selected="selected"<?php }?>>0 (no cache)</option>
											<option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==60) {?>selected="selected"<?php }?>>1 minute</option>
											<option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==300) {?>selected="selected"<?php }?>>5 minutes</option>
											<option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==600) {?>selected="selected"<?php }?>>10 minute</option>
											<option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==900) {?>selected="selected"<?php }?>>15 minutes</option>
											<option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==1800) {?>selected="selected"<?php }?>>30 minute</option>
											<option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==3600) {?>selected="selected"<?php }?>>1 hour</option>
											<option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==7200) {?>selected="selected"<?php }?>>2 hours</option>
										</select>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y'&&count($_smarty_tpl->tpl_vars['showstructs']->value)>0) {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Structures</label>
									<div class="col-md-8" id="showstructs">
										<ul>
											<?php  $_smarty_tpl->tpl_vars['page_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showstructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->key => $_smarty_tpl->tpl_vars['page_info']->value) {
$_smarty_tpl->tpl_vars['page_info']->_loop = true;
?>
												<li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];
if (!empty($_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['page_info']->value['outputType'])]->value['page_alias'])) {?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y') {?>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Copyright</label>
									<div class="col-md-8">
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightTitle">Title</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightTitle']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightYear">Year</label>
											<div class="col-md-8">
												<input size="4" class="form-control wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightYear']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightAuthors">Authors</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightAuthors']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label" for="copyrightHolder">Copyright Holder</label>
											<div class="col-md-8">
												<input class="form-control wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['copyrightHolder']->value);?>
">
											</div>
										</div>
										<div class="form-group">
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice']!='') {?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Important:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page']=='y') {?>
								<div class="form-group">
									<label class="col-md-4 control-label">Authors</label>
									<div class="col-md-8">
										<select name="wiki_authors_style" id="wiki_authors_style" class="form-control">
											<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style_site']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style_site']->value=='y') {?>
												<option value="" style="font-style:italic;border-bottom:1px dashed #666;"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='') {?> selected="selected"<?php }?>>Site default</option>
											<?php }?>
											<option value="classic"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='classic') {?> selected="selected"<?php }?>>as Creator &amp; Last Editor</option>
											<option value="business"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business') {?> selected="selected"<?php }?>>Business style</option>
											<option value="collaborative"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative') {?> selected="selected"<?php }?>>Collaborative style</option>
											<option value="lastmodif"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif') {?> selected="selected"<?php }?>>Page last modified on</option>
											<option value="none"<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='none') {?> selected="selected"<?php }?>>no (disabled)</option>
										</select>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
							<div class="form-group">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y') {?>
									<label for="" class="col-md-4 control-label">Description (used for metatags)</label>
								<?php } else { ?>
									<label for="" class="col-md-4 control-label">Description</label>
								<?php }?>
								<div class="col-md-8">
									<input class="form-control" type="text" id="description" name="description" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
">
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
								<div class="form-group">
									<label for="footnote" class="col-md-4 control-label">My Footnotes</label>
									<div class="col-md-8">
										<textarea id="footnote" name="footnote" class="form-control" rows="8"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['footnote']->value);?>
</textarea>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value=='y') {?>
							<div class="form-group">
								<label for="" class="col-md-4 control-label">Rating</label>
								<div class="col-md-8">
									<?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_rated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
?>
										<div>
											<a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
											<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url"), null, 0);?>
											<?php $_smarty_tpl->tpl_vars['thispoll_rated'] = new Smarty_variable($_smarty_tpl->tpl_vars['rating']->value['info']['pollId'], null, 0);?>
											<?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

										</div>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value=='y') {?>
										<?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value)<=1||$_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object']=='y') {?>
										<div>
											<?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)) {?>
												Type
												<select name="poll_template">
													<option value="0">none</option>
													<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
														<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['pollId']);?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId']==$_smarty_tpl->tpl_vars['poll_template']->value) {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
													<?php } ?>
												</select>
												Title
												<input type="text" name="poll_title" size="22">
											<?php } else { ?>
												<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

													There is no available poll template.
													<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value!='y') {?>
														Please ask an administrator to create one.
													<?php }?>
												<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<fieldset>
								<div class="form-group clearfix">
									<label for="" class="col-md-4 control-label">Language</label>
									<div class="col-md-8">
										<select name="lang" id="lang" class="form-control margin-bottom-sm">
											<option value=""<?php if (empty($_smarty_tpl->tpl_vars['lang']->value)) {?> selected="selected"<?php }?>>Unknown</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
											<?php endfor; endif; ?>
										</select>
										<span class="help-block">
											<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');
$_tmp9=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp9)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											<?php if ($_smarty_tpl->tpl_vars['translationOf']->value) {?>
												<input type="hidden" name="translationOf" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translationOf']->value);?>
">
											<?php }?>
										</span>
									</div>
								</div>
							</fieldset>
							<?php if (count($_smarty_tpl->tpl_vars['trads']->value)>1&&$_smarty_tpl->tpl_vars['urgent_allowed']->value) {?>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Translation</label>
									<div class="col-md-8">
										<fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']!='y'||$_smarty_tpl->tpl_vars['diff_style']->value) {?> style="display:none;"<?php }?>>
											<legend>Translation request:</legend>
											<input type="hidden" name="lang" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lang']->value);?>
">
											<input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value) {?> checked="checked"<?php }?>>
											<label for="translation_critical">Send urgent translation request.</label>
											<?php if ($_smarty_tpl->tpl_vars['diff_style']->value) {?>
												<input type="hidden" name="oldver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_oldver']->value);?>
">
												<input type="hidden" name="newver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_newver']->value);?>
">
											<?php }?>
										</fieldset>
									</div>
								</div>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki']=='y') {?>
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

							<div class="form-group">
								<label for="" class="col-md-4 control-label">Geolocation</label>
								<div class="col-md-8">
									<div class="map-container form-control" data-geo-center="<?php echo $_smarty_tpl->tpl_vars['defaultmapcenter']->value;?>
" data-target-field="geolocation" style="height: 250px;"></div>
									<input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
								</div>
							</div>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_auto_toc']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y') {?>
							<div class="form-group clearfix">
								<label for="pageAutoToc" class="col-md-4 control-label">Automatic table of contents</label>
								<div class="col-md-8">
									<select name="pageAutoToc" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['pageAutoToc']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_hide_title']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y')) {?>
							<div class="form-group clearfix">
								<label for="page_hide_title" class="col-md-4 control-label">Show page title</label>
								<div class="col-md-8">
									<select name="page_hide_title" class="form-control">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==0) {?>selected<?php }?>>Default</option>
										
										<option value="-1" <?php if ($_smarty_tpl->tpl_vars['page_hide_title']->value==-1) {?>selected<?php }?>>Off</option>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y') {?>
							<div class="form-group clearfix">
								<label for="explicit_namespace" class="col-md-4 control-label">Namespace</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="explicit_namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['explicit_namespace']->value);?>
" placeholder="Explicit Namespace">
									<span class="help-block">
										The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.
									</span>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout_per_object']=='y') {?>
							<fieldset>
								<div class="form-group">
									<label for="object_layout" class="col-md-4 control-label">Page layout</label>
									<div class="col-md-8">
										<select name="object_layout" class="form-control">
											<option value="">Site Default</option>
											<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['object_layout']->value['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['object_layout']->value['current']==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</fieldset>
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value=='y') {?>
						<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
					<?php }?>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="form-group">
			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&(isset($_smarty_tpl->tpl_vars['anon_user']->value)&&$_smarty_tpl->tpl_vars['anon_user']->value=='y')) {?>
					<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d3dc769_08705102($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']!='top') {?>
				<div class="form-group">
					<div class="text-center">
						<?php /*  Call merged included template "wiki_edit_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wysiwyg'=>$_smarty_tpl->tpl_vars['wysiwyg']->value,'page_info'=>$_smarty_tpl->tpl_vars['page_info']->value), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d27ce17_30300021($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_edit_actions.tpl" */?>
					</div>
				</div>
			<?php }?>
		</div>
	</form>
	<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d403875_87456794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-2 col-md-pull-8" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
			<div class="col-md-2" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>

<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<footer class="footer" id="footer">
		<div class="footer_liner">
			<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

		</div>
	</footer>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit-page-included_by.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d1c15e8_37446688')) {function content_5b63b81d1c15e8_37446688($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_type')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_type.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
?><ul>
  <?php  $_smarty_tpl->tpl_vars['include'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['include']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['included_by']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['include']->key => $_smarty_tpl->tpl_vars['include']->value) {
$_smarty_tpl->tpl_vars['include']->_loop = true;
?>
  <li>
    <?php echo smarty_function_object_type(array('type'=>$_smarty_tpl->tpl_vars['include']->value['type']),$_smarty_tpl);?>
:
    <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['include']->value['type'],'objectId'=>$_smarty_tpl->tpl_vars['include']->value['itemId']),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['include']->value['start']||$_smarty_tpl->tpl_vars['include']->value['end']) {?> - <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include']->value['start']) {?>
    from "<?php echo $_smarty_tpl->tpl_vars['include']->value['start'];?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include']->value['end']) {?>
    to "<?php echo $_smarty_tpl->tpl_vars['include']->value['end'];?>
"
    <?php }?>

  </li>
  <?php } ?>
</ul>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-preview.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d1e4874_65150018')) {function content_5b63b81d1e4874_65150018($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><!-- templates/tiki-preview.tpl start -->
<div class="wikipreview" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>style="display:none;" id="autosave_preview"><div<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		<div class="form-group pull-right">
			<div class="pull-right" style="display:inline;margin-left: 10px;margin-top: 5px">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"back",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Popup preview",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"remove",'_ajax'=>"n",'_class'=>"tips",'_title'=>":Close preview",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="pull-right" style="display:inline">
				<select name="diff_style" id="preview_diff_style" class="form-control">
					<option value="" <?php if (empty($_smarty_tpl->tpl_vars['diff_style']->value)) {?>selected="selected"<?php }?>>Preview</option>
					<option value="htmldiff" <?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?>selected="selected"<?php }?>>HTML diff</option>
					<option value="sidediff" <?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="sidediff") {?>selected="selected"<?php }?>>Side-by-side diff</option>
				</select>
			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$("#preview_diff_style").change(function(){
					ajaxLoadingShow($("#autosave_preview .wikitext"));
					setCookie("preview_diff_style", $(this).val(), "preview", "session");
					$.get($.service("edit", "preview"), {
						editor_id: 'editwiki',
						autoSaveId: autoSaveId,
						inPage: 1,
						<?php if (isset($_REQUEST['hdr'])) {?>hdr: <?php echo $_REQUEST['hdr'];?>
,<?php }?>
						diff_style: $(this).val()
					}, function(data) {
						$("#autosave_preview .wikitext").html(data);
						ajaxLoadingHide();
					});
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y") {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('#autosave_preview').resizable({
				handles:{'s':'#autosave_preview_grippy'},
				alsoResize:'#autosave_preview>div',
				resize: function(event, ui) {
					setCookie("wiki", $('#autosave_preview').height(), "preview", "session");
				}
			}).height(getCookie("wiki", "preview", ""));
			$("#autosave_preview>div").height(getCookie("wiki", "preview", ""));
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<h2>Preview: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y') {?>
		<small><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</small>
	<?php }?>
	<div align="center" class="attention" style="font-weight:bold">
		Note: Remember that this is only a preview, and has not yet been saved!
	</div>
	<div class="preview_contents">
		<article class="wikitext">
			<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

		</article>
		<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value&&isset($_smarty_tpl->tpl_vars['parsed_footnote']->value)) {?>
			<div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y") {?>
		</div>
		<span id="autosave_preview_grippy" class="ui-resizable-handle ui-resizable-s"> </span>
	<?php }?>
</div>
<hr style="clear:both; height:0px;"/> 
<!-- templates/tiki-preview.tpl end -->
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\pagehistory.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d1ffdf2_51400139')) {function content_5b63b81d1ffdf2_51400139($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['diff_style']->value)&&(($_smarty_tpl->tpl_vars['old']->value&&$_smarty_tpl->tpl_vars['new']->value&&$_smarty_tpl->tpl_vars['old']->value['version']!==$_smarty_tpl->tpl_vars['new']->value['version'])||!empty($_smarty_tpl->tpl_vars['diffdata']->value))) {?>
	<?php if ((!isset($_smarty_tpl->tpl_vars['translation_mode']->value)||$_smarty_tpl->tpl_vars['translation_mode']->value!='y')&&empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>
		<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comparing version <?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
 with version <?php echo $_smarty_tpl->tpl_vars['new']->value['version'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php }?>
	<div class="table-responsive">
		<table class="table diff">
			<?php if (isset($_smarty_tpl->tpl_vars['translation_mode']->value)&&$_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
				<tr>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
				</tr>
				<tr>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['old']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['old']->value['lastModif']);?>
</td>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['new']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['new']->value['lastModif']);?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['comment']||$_smarty_tpl->tpl_vars['new']->value['comment']) {?>
					<tr>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['old']->value['comment']) {
echo $_smarty_tpl->tpl_vars['old']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['new']->value['comment']) {
echo $_smarty_tpl->tpl_vars['new']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['description']!=$_smarty_tpl->tpl_vars['new']->value['description']) {?>
					<tr>
						<td colspan="2" class="diffdeleted"><?php if ($_smarty_tpl->tpl_vars['old']->value['description']) {
echo $_smarty_tpl->tpl_vars['old']->value['description'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="diffadded"><?php if ($_smarty_tpl->tpl_vars['new']->value['description']) {
echo $_smarty_tpl->tpl_vars['new']->value['description'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sideview") {?>
				<tr>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['old']->value['data'];?>
</div></td>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['new']->value['data'];?>
</div></td>
				</tr>
			<?php }?>
			<tr>
				<?php if ($_REQUEST['oldver_idx']+1==$_REQUEST['newver_idx']||$_REQUEST['oldver_idx']==$_REQUEST['newver_idx']) {?>
					<td colspan="4">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
				<?php } else { ?>
					<td colspan="2">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
					<td colspan="2">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
				<?php }?>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=='unidiff') {?>
				<tr>
					<td colspan="4">
						<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffheader") {?>
									<?php $_smarty_tpl->tpl_vars["oldd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['old'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars["newd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['new'], null, 0);?>
									<br><div class="diffheader">@@ <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-Lines: <?php echo $_smarty_tpl->tpl_vars['oldd']->value;?>
 changed to +Lines: <?php echo $_smarty_tpl->tpl_vars['newd']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 @@</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffdeleted") {?>
									<div class="diffdeleted">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
										- <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

									<?php endfor; endif; ?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffadded") {?>
									<div class="diffadded">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
											<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
											+ <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

										<?php endfor; endif; ?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffbody") {?>
									<div class="diffbody">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

									<?php endfor; endif; ?>
								</div>
								<?php }?>
							<?php endfor; endif; ?>
						<?php } else { ?>
							<div class="diffheader">Versions are identical</div>
						<?php }?>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value!='unidiff'&&$_smarty_tpl->tpl_vars['diff_style']->value!='sideview') {?>
				<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {
echo $_smarty_tpl->tpl_vars['diffdata']->value;
} else { ?><tr><td colspan="4">Versions are identical</td></tr><?php }?>
			<?php }?>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_wikidiff']=='y'&&$_smarty_tpl->tpl_vars['old']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>'Example wikidiff plugin syntax')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<code>{wikidiff object_id="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" oldver="<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" newver="<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" diff_style="<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
" show_version_info="<?php if (empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>y<?php } else { ?>n<?php }?>"}</code>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit-page-include-prompt_for_edit_or_translate.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d265719_41692242')) {function content_5b63b81d265719_41692242($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Translation of this page is incomplete.")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Translation of this page is incomplete."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['content_of_update_translation_section']->value;?>

	<p>To add <strong>new content</strong> to the page <strong><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</strong>, use the editor.</p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Translation of this page is incomplete."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki_edit_actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d27ce17_30300021')) {function content_5b63b81d27ce17_30300021($_smarty_tpl) {?>
<div class="actions">
	<input type="hidden" name="no_bl" value="y">
	<input type="submit" class="wikiaction btn btn-default previewBtn" title="Preview your changes." name="preview" value="Preview" onclick="needToConfirm=false;">
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
		<?php if (!isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)||$_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']!='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y') {?>
				<input type="hidden" name="source_page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
">
				<input type="hidden" name="target_page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['target_page']->value);?>
">
				<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Save the page as a partial translation." name="partial_save" value="Partial Translation" onclick="needToConfirm=false">
				<input type="submit" class="wikiaction tips btn btn-default" title="Edit wiki page|Save the page as a completed translation." name="save" value="Complete Translation" onclick="needToConfirm=false">
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_minor']->value=='y'&&mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_minor']!='n') {?>
					<input type="submit" class="wikiaction tips btn btn-default" name="minor" title="Edit wiki page|<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_watch_minor']) {?>Save the page, but do not count it as new content to be translated.<?php } else { ?>Save the page, but do not send notifications and do not count it as new content to be translated.<?php }?>" value="Save Minor Edit" onclick="needToConfirm=false;">
				<?php }?>
				<input type="submit" class="wikiaction btn btn-primary" title="Save the page." name="save" value="Save" onclick="needToConfirm=false;">
			<?php }?>
		<?php }?>
		<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
			<input type="submit" class="wikiaction btn btn-default" title="Cancel the edit (changes will be lost)." name="cancel_edit" value="Cancel Edit" onclick="needToConfirm=false;">
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\freetag.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d2a7da8_55055746')) {function content_5b63b81d2a7da8_55055746($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y') {?>
	<div class="form-group">
		<label class="col-md-4 control-label" for="tagBox">Tags</label>
		<div class="col-md-8">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function addTag(tag) {
		document.getElementById('tagBox').value = document.getElementById('tagBox').value + ' ' + tag;
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div id="freetager">
				<input type="text" id="tagBox" class="form-control" name="freetag_string" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taglist']->value);?>
">
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_suggestion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('tagurl', null, null); ob_start();
if ((strstr($_smarty_tpl->tpl_vars['t']->value,' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<a href="javascript:addTag('<?php echo smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['tagurl'],'javascript'));?>
');" onclick="javascript:needToConfirm=false"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
</a>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y') {?>
					<div class="help-block">
						Put tags separated by spaces. For tags with more than one word, use no spaces and put words together or enclose them with double quotes.
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_multilingual']=='y'&&$_smarty_tpl->tpl_vars['blog']->value=='y') {?>
		<div class="form-group">
			<label for="" class="col-md-4 control-label">Language</label>
			<div class="col-md-8">
				<select name="lang" class="form-control">
					<option value="">All</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
						<?php endfor; endif; ?>
				</select>
			</div>
		</div>
	<?php }?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\contribution.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d2c3320_43543456')) {function content_5b63b81d2c3320_43543456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
	<?php if (count($_smarty_tpl->tpl_vars['contributions']->value)>0) {?>
		<tr>
			<td>
			<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?><span class="mandatory_note highlight"><?php }?><label for="contributions">Type of contribution:</label><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?> <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?></span><?php }?></td>
				<td>
					<select id="contributions" name="contributions[]" multiple="multiple" size="5">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contributionId']);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['selected']=='y') {?> selected="selected"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contributionId']>0) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
}?></option>
							<?php $_smarty_tpl->tpl_vars["help"] = new Smarty_variable((((($_smarty_tpl->tpl_vars['help']->value).($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'])).(": ")).($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description'])).("<br>"), null, 0);?>
						<?php endfor; endif; ?>
					</select>
					<a title="Help" <?php echo smarty_function_popup(array('text'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['help']->value,'"',"'"),'width'=>500),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y'&&$_smarty_tpl->tpl_vars['section']->value=='wiki page'&&empty($_smarty_tpl->tpl_vars['in_comment']->value)) {?>
			<tr>
				<td><label for='contributors'>Contributors</label></td>
				<td>
					<select id="contributors" name="contributors[]" multiple="multiple" size="5">
						<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['userId']->value = $_smarty_tpl->tpl_vars['u']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['u']->value!=$_smarty_tpl->tpl_vars['user']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['contributors']->value)&&in_array($_smarty_tpl->tpl_vars['userId']->value,$_smarty_tpl->tpl_vars['contributors']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['u']->value;?>
</option><?php }?>
						<?php } ?>
					</select>
				</td>
			</tr>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
		No records found
	<?php } else { ?>
		<tr><td>&nbsp;</td></tr>
	<?php }?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\categorize.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d2ea435_23083985')) {function content_5b63b81d2ea435_23083985($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&(count($_smarty_tpl->tpl_vars['categories']->value)>0||$_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y')) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['labelcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['labelcol'] = new Smarty_variable('4', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['inputcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['inputcol'] = new Smarty_variable('8', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		<!-- div class="form-horizontal" -->
			<div class="form-group">
				<label class="col-sm-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
 control-label<?php if (!empty($_smarty_tpl->tpl_vars['labelclass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;
}?>">
					Categorize
				</label>
				<div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['colsCategorize']->value)) {?> colspan="<?php echo $_smarty_tpl->tpl_vars['colsCategorize']->value;?>
"<?php }?>
				</div>

		<!--/div-->
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mandatory_category']->value>=0||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'||(isset($_smarty_tpl->tpl_vars['auto']->value)&&$_smarty_tpl->tpl_vars['auto']->value=='y')) {?>
		<div id="categorizator"><div>
	<?php } else { ?>
		<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?> <div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;
if (isset($_smarty_tpl->tpl_vars['inputgroup']->value)&&$_smarty_tpl->tpl_vars['inputgroup']->value==='y') {?> input-group<?php }?>"><?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'categorizator','_class'=>'btn btn-default btn-sm tips','_text'=>"Select Categories",'_flip_default_open'=>'n'),$_smarty_tpl);?>
</div><?php }?>
		<div class="clearfix"><div id="categorizator" class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
 col-sm-offset-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
" style="display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_categorizator'])&&$_SESSION['tiki_cookie_jar']['show_categorizator']=='y'||(isset($_smarty_tpl->tpl_vars['notable']->value)&&$_smarty_tpl->tpl_vars['notable']->value=='y')) {?>block<?php } else { ?>none<?php }?>;">
	<?php }?>
	<div class="multiselect">
		<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
			<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

			<input type="hidden" name="cat_categorize" value="on">
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link btn-sm tips" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

			</div> 
		<?php } else { ?>
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
			</div> 
			No categories defined
		<?php }?>
	</div> 
		</div>
	</div>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		</div> 
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_autocategorize']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		if ('<?php echo $_SESSION['tc_theme_cat'];?>
') {
			if ($('.tree ul[data-id="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_parentcategory'];?>
"] input[type=checkbox]:checked').length == 0) {
				$('#categ-<?php echo $_SESSION['tc_theme_cat'];?>
').prop("checked", true);
			}
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\addreference.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d33c4c5_74793310')) {function content_5b63b81d33c4c5_74793310($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value=='1') {?>


<?php echo '<script'; ?>
 type="text/javascript">
var ajaxURL = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ajaxURL']->value);?>
';
var dataMain = 'page='+encodeURIComponent('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
');

var edit_references = '<?php echo $_smarty_tpl->tpl_vars['edit_references']->value;?>
';
var use_references = '<?php echo $_smarty_tpl->tpl_vars['use_references']->value;?>
';

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){

	jQuery('#e_submit').click(function(e){
		e.preventDefault();

		var dataString = dataMain+'&action=e_ref';
		dataString += '&editreference=editreference';
		dataString += '&ref_id='+encodeURIComponent(jQuery('#e_ref_id').val());
		dataString += '&ref_biblio_code='+encodeURIComponent(jQuery('#e_ref_biblio_code').val());
		dataString += '&ref_author='+encodeURIComponent(jQuery('#e_ref_author').val());
		dataString += '&ref_title='+encodeURIComponent(jQuery('#e_ref_title').val());
		dataString += '&ref_year='+encodeURIComponent(jQuery('#e_ref_year').val());
		dataString += '&ref_part='+encodeURIComponent(jQuery('#e_ref_part').val());
		dataString += '&ref_uri='+encodeURIComponent(jQuery('#e_ref_uri').val());
		dataString += '&ref_code='+encodeURIComponent(jQuery('#e_ref_code').val());
		dataString += '&ref_style='+encodeURIComponent(jQuery('#e_ref_style').val());
		dataString += '&ref_template='+encodeURIComponent(jQuery('#e_ref_template').val());
		dataString += '&ref_publisher='+encodeURIComponent(jQuery('#e_ref_publisher').val());
		dataString += '&ref_location='+encodeURIComponent(jQuery('#e_ref_location').val());

		jQuery.ajax({
			url: ajaxURL+'references.php',
			type: 'POST',
			data: dataString,
			dataType: 'json',
			beforeSend: function( xhr ) {
				jQuery('#e_status').html('Saving...');
			},
			success: function( data ) {
				if('success'==data['result']){
					jQuery('#ref_list').find('li').css('font-weight','normal');
					var ref_id = jQuery('#e_ref_id').val();
					var ref_biblio_code = jQuery('#e_ref_biblio_code').val();
					var ref_author = jQuery('#e_ref_author').val();
					var ref_title = jQuery('#e_ref_title').val();
					var ref_year = jQuery('#e_ref_year').val();
					var ref_part = jQuery('#e_ref_part').val();
					var ref_uri = jQuery('#e_ref_uri').val();
					var ref_code = jQuery('#e_ref_code').val();
					var ref_style = jQuery('#e_ref_style').val();
					var ref_template = jQuery('#e_ref_template').val();
					var ref_publisher = jQuery('#e_ref_publisher').val();
					var ref_location = jQuery('#e_ref_location').val();

					jQuery('#ref_list').find('li#'+ref_id).remove();
					var htm = '<li id="'+ref_id+'" style="border-bottom: 1px dotted #161C17;font-weight:bold;">';
					htm += ref_biblio_code + '&nbsp;&nbsp;';
					htm += '<a class="edit_ref" onclick="edit_ref('+ref_id+',\''+ref_biblio_code+'\', \''+ref_author+'\', \''+ref_title+'\', \''+ref_year+'\', \''+ref_part+'\', \''+ref_uri+'\', \''+ref_code+'\', \''+ref_style+'\', \''+ref_template+'\', \''+ref_publisher+'\', \''+ref_location+'\')" href="javascript:;" title="Edit" alt="Edit">' + '<img width="16" height="16" class="icon" title="Edit" alt="Edit" src="img/icons/pencil.png"></a>';
					htm += '<a onclick="delete_ref('+ref_id+')" title="Delete"><img width="16" height="16" class="icon" title="Remove" alt="Remove" src="img/icons/cross.png"></a>';
					if(data['is_library'] < 1 && use_references == '1' && edit_references == '1'){
						htm += '<a class="add_lib_btn" onclick="add_lib('+ref_id+',\''+ref_biblio_code+'\', \''+ref_author+'\', \''+ref_title+'\', \''+ref_year+'\', \''+ref_part+'\', \''+ref_uri+'\', \''+ref_code+'\', \''+ref_style+'\', \''+ref_template+'\', \''+ref_publisher+'\', \''+ref_location+'\')" href="javascript:;" title="Add to library" alt="Add to library">' + '<img width="16" height="16" class="icon" title="Add to library" alt="Add to library" src="img/icons/world_add.png"></a>';
					}
					htm += '</li>';
					jQuery('#e_status').html(data['message']);
					jQuery('#ref_list').find('ul').append(htm);
				}else if('failure'==data['result']){
					jQuery('#e_status').html(data['message']);
				}
			}
		});
	});

	jQuery('#a_submit').click(function(e){
		e.preventDefault();

		var ref_biblio_code = jQuery('#e_ref_biblio_code').val();
		var ref_author = jQuery('#e_ref_author').val();
		var ref_title = jQuery('#e_ref_title').val();
		var ref_year = jQuery('#e_ref_year').val();
		var ref_part = jQuery('#e_ref_part').val();
		var ref_uri = jQuery('#e_ref_uri').val();
		var ref_code = jQuery('#e_ref_code').val();
		var ref_style = jQuery('#e_ref_style').val();
		var ref_template = jQuery('#e_ref_template').val();
		var ref_publisher = jQuery('#e_ref_publisher').val();
		var ref_location = jQuery('#e_ref_location').val();

		var dataString = dataMain+'&action=a_ref';
		dataString += '&addreference=addreference';
		dataString += '&ref_biblio_code='+encodeURIComponent(ref_biblio_code);
		dataString += '&ref_author='+encodeURIComponent(ref_author);
		dataString += '&ref_title='+encodeURIComponent(ref_title);
		dataString += '&ref_year='+encodeURIComponent(ref_year);
		dataString += '&ref_part='+encodeURIComponent(ref_part);
		dataString += '&ref_uri='+encodeURIComponent(ref_uri);
		dataString += '&ref_code='+encodeURIComponent(ref_code);
		dataString += '&ref_style='+encodeURIComponent(ref_style);
		dataString += '&ref_template='+encodeURIComponent(ref_template);
		dataString += '&ref_publisher='+encodeURIComponent(ref_publisher);
		dataString += '&ref_location='+encodeURIComponent(ref_location);

		jQuery.ajax({
			url: ajaxURL+'references.php',
			type: 'GET',
			data: dataString,
			dataType: 'json',
			beforeSend: function( xhr ) {
				jQuery('#a_status').html('Saving...');
			},
			success: function( data ) {
				if('success'==data['result']){
					jQuery('#e_ref_id').val('');
					jQuery('#e_ref_biblio_code').val('');
					jQuery('#e_ref_author').val('');
					jQuery('#e_ref_title').val('');
					jQuery('#e_ref_year').val('');
					jQuery('#e_ref_part').val('');
					jQuery('#e_ref_uri').val('');
					jQuery('#e_ref_code').val('');
					jQuery('#e_ref_style').val('');
					jQuery('#e_ref_template').val('');
					jQuery('#e_ref_publisher').val('');
					jQuery('#e_ref_location').val('');
					jQuery('#a_status').html('Bibliography saved.');

					jQuery('#ref_list').show();

					var ref_id = data["id"];
					var htm = '<li id="'+ref_id+'" style="border-bottom: 1px dotted #161C17;">';
					htm += ref_biblio_code + '&nbsp;&nbsp;';
					htm += '<a class="edit_ref" onclick="edit_ref('+ref_id+',\''+ref_biblio_code+'\', \''+ref_author+'\', \''+ref_title+'\', \''+ref_year+'\', \''+ref_part+'\', \''+ref_uri+'\', \''+ref_code+'\', \''+ref_style+'\', \''+ref_template+'\', \''+ref_publisher+'\', \''+ref_location+'\')" href="javascript:;" title="Edit" alt="Edit">' + '<img width="16" height="16" class="icon" title="Edit" alt="Edit" src="img/icons/pencil.png"></a>';
					htm += '<a onclick="delete_ref('+ref_id+')" title="Delete"><img width="16" height="16" class="icon" title="Remove" alt="Remove" src="img/icons/cross.png"></a>';
					if(data['is_library'] < 1 && use_references == '1' && edit_references == '1'){
						htm += '<a class="add_lib_btn" onclick="add_lib('+ref_id+',\''+ref_biblio_code+'\', \''+ref_author+'\', \''+ref_title+'\', \''+ref_year+'\', \''+ref_part+'\', \''+ref_uri+'\', \''+ref_code+'\', \''+ref_style+'\', \''+ref_template+'\', \''+ref_publisher+'\', \''+ref_location+'\')" href="javascript:;" title="Add to library" alt="Add to library">' + '<img width="16" height="16" class="icon" title="Add to library" alt="Add to library" src="img/icons/world_add.png"></a>';
					}
					htm += '</li>';
					jQuery('#ref_list').find('ul').append(htm);
				}else{
					jQuery('#a_status').html(data['result']);
				}
				if('failure'==data['result'] && data["id"] == '-1'){
					jQuery('#a_status').html('This biblio code already exists.');
				}
			}
		});
	});

	jQuery('#e_cancel, #a_cancel').click(function(){
		jQuery('#ref_edit_block').hide();
		jQuery('#ref_list').find('li').css('font-weight','normal');
	});

	jQuery('a.edit_ref').on('click', function(){
		jQuery('#ref_list').find('li').css('font-weight','normal');
		jQuery(this).parent().css('font-weight','bold');
	});

	jQuery('#u_lib').click(function(e){
		e.preventDefault();

		var ref_id = jQuery('#lib_ref').val();
		var dataString = dataMain+'&action=u_lib';
		dataString += '&ref_id='+encodeURIComponent(ref_id);

		jQuery.ajax({
			url: ajaxURL+'references.php',
			type: 'GET',
			data: dataString,
			dataType: 'json',
			beforeSend: function( xhr ) {
				jQuery('#u_lib_status').html('Adding...');
			},
			success: function( data ) {
				if('success'==data['result']){
					jQuery('#u_lib_status').html(data['message']);

					var ref_id = data['id'];
					var ref_biblio_code = escape(data['ref_biblio_code']);
					var ref_author = escape(data['ref_author']);
					var ref_title = escape(data['ref_title']);
					var ref_year = escape(data['ref_year']);
					var ref_part = escape(data['ref_part']);
					var ref_uri = escape(data['ref_uri']);
					var ref_code = escape(data['ref_code']);
					var ref_style = escape(data['ref_style']);
					var ref_template = escape(data['ref_template']);
					var ref_publisher = escape(data['ref_publisher']);
					var ref_location = escape(data['ref_location']);

					var htm = '<li id="'+ref_id+'" style="border-bottom: 1px dotted #161C17;">';
					htm += ref_biblio_code + '&nbsp;&nbsp;';
					htm += '<a class="edit_ref" onclick="edit_ref('+ref_id+',\''+ref_biblio_code+'\', \''+ref_author+'\', \''+ref_title+'\', \''+ref_year+'\', \''+ref_part+'\', \''+ref_uri+'\', \''+ref_code+'\', \''+ref_style+'\', \''+ref_template+'\', \''+ref_publisher+'\', \''+ref_location+'\')" href="javascript:;" title="Edit" alt="Edit">' + '<img width="16" height="16" class="icon" title="Edit" alt="Edit" src="img/icons/pencil.png"></a>';
					htm += '<a onclick="delete_ref('+ref_id+')" title="Delete"><img width="16" height="16" class="icon" title="Remove" alt="Remove" src="img/icons/cross.png"></a>';
					htm += '</li>';
					jQuery('#ref_list').find('ul').append(htm);
				}else if('failure'==data['result']){
					jQuery('#u_lib_status').html(data['message']);
				}else{
					jQuery('#u_lib_status').html(data['message']);
				}
			}
		});
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo '<script'; ?>
 type="text/javascript">
function add_ref(){
	jQuery('#ref_list').find('li').css('font-weight','normal');
	jQuery('#ref_edit_block').show();
	jQuery('#a_btns').show();
	jQuery('#e_btns').hide();
	jQuery('#a_status').html('');

	jQuery('#e_ref_id').val('');
	jQuery('#e_ref_biblio_code').val('');
	jQuery('#e_ref_author').val('');
	jQuery('#e_ref_title').val('');
	jQuery('#e_ref_year').val('');
	jQuery('#e_ref_part').val('');
	jQuery('#e_ref_uri').val('');
	jQuery('#e_ref_code').val('');
	jQuery('#e_ref_style').val('');
	jQuery('#e_ref_template').val('');
	jQuery('#e_ref_publisher').val('');
	jQuery('#e_ref_location').val('');
}

function add_lib(ref_id, biblio_code, ref_author, ref_title, ref_year, ref_part, ref_uri, ref_code, ref_style, ref_template, ref_publisher, ref_location){
	jQuery('#ref_list').find('li').css('font-weight','normal');

	var c = confirm('Are you sure you want to add this reference to library?');
	if(!c){
		return false;
	}

	var dataString = dataMain+'&action=a_lib';
	dataString += '&addlibreference=addlibreference';
	dataString += '&ref_id='+encodeURIComponent(ref_id);
	dataString += '&ref_biblio_code='+encodeURIComponent(biblio_code);
	dataString += '&ref_author='+encodeURIComponent(ref_author);
	dataString += '&ref_title='+encodeURIComponent(ref_title);
	dataString += '&ref_year='+encodeURIComponent(ref_year);
	dataString += '&ref_part='+encodeURIComponent(ref_part);
	dataString += '&ref_uri='+encodeURIComponent(ref_uri);
	dataString += '&ref_code='+encodeURIComponent(ref_code);
	dataString += '&ref_style='+encodeURIComponent(ref_style);
	dataString += '&ref_template='+encodeURIComponent(ref_template);
	dataString += '&ref_publisher='+encodeURIComponent(ref_publisher);
	dataString += '&ref_location='+encodeURIComponent(ref_location);

	jQuery.ajax({
		url: ajaxURL+'references.php',
		type: 'GET',
		data: dataString,
		dataType: 'json',
		beforeSend: function( xhr ) {
			jQuery('#'+ref_id).css('background-color', 'yellow');
		},
		success: function( data ) {
			if('success'==data['result']){
				alert(data['message']);
				jQuery('#'+ref_id).find('a.add_lib_btn').remove();
				jQuery('#'+ref_id).css('background-color', '');
				jQuery('#lib_ref').append('<option value="'+data['id']+'">'+biblio_code+'</option>')
			}else if('failure'==data['result']){
				alert(data['message']);
				jQuery('#'+ref_id).css('background-color', '');
			}
		}
	});
}

function edit_ref(ref_id, biblio_code, ref_author, ref_title, ref_year, ref_part, ref_uri, ref_code, ref_style, ref_template, ref_publisher, ref_location){
	jQuery('#ref_list').find('li').css('font-weight','normal');
	jQuery('#ref_edit_block').show();
	jQuery('#e_btns').show();
	jQuery('#a_btns').hide();
	jQuery('#e_status').html('');

	jQuery('#e_ref_id').val(ref_id);
	jQuery('#e_ref_biblio_code').val(unescape(biblio_code));
	jQuery('#e_ref_author').val(unescape(ref_author));
	jQuery('#e_ref_title').val(unescape(ref_title));
	jQuery('#e_ref_year').val(unescape(ref_year));
	jQuery('#e_ref_part').val(unescape(ref_part));
	jQuery('#e_ref_uri').val(unescape(ref_uri));
	jQuery('#e_ref_code').val(unescape(ref_code));
	jQuery('#e_ref_style').val(unescape(ref_style));
	jQuery('#e_ref_template').val(unescape(ref_template));
	jQuery('#e_ref_publisher').val(unescape(ref_publisher));
	jQuery('#e_ref_location').val(unescape(ref_location));

	return false;
}
function delete_ref(ref_id){

	var c = confirm('Are you sure you want to delete this bibliography?');

	if(c){
		var dataString = dataMain+'&action=e_del';
		dataString += '&ref_id='+encodeURIComponent(ref_id);

		jQuery.ajax({
			url: ajaxURL+'references.php',
			type: 'POST',
			data: dataString,
			beforeSend: function( xhr ) {
				//jQuery('#e_status').html('Saving...');
			},
			success: function( data ) {
				jQuery('#'+ref_id).remove();
				jQuery('#ref_edit_block').hide();
			}
		});
	}
	return false;
}
<?php echo '</script'; ?>
>

		<div class="form-group">
				<div class="col-sm-12">
						<a href="javascript:;" id="add_ref" class="btn btn-link" onclick="add_ref()">Add Reference</a>
				</div>
		</div>
		<div class="form-group">
		<div id="ref_list" style="display:<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
">
			References Available:
			<ul style="list-style-type:none; padding-left: 0;">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['references']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
				<?php if ($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['is_present']==1) {?>
					<li id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
" style='background-color:#D3FDDA;border-bottom: 1px dotted #161C17;'>
				<?php } else { ?>
					<li id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
" style='border-bottom: 1px dotted #161C17;'>
				<?php }?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['biblio_code']);?>
&nbsp;&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_library_references']=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['is_library']<1&&$_smarty_tpl->tpl_vars['use_references']->value==1&&$_smarty_tpl->tpl_vars['edit_references']->value==1) {?>
							<a class="edit_ref" title="Edit" href="javascript:;" onclick="edit_ref('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['biblio_code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['author']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['year']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['part']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['uri']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['style']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['template']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['publisher']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['location']);?>
')"><?php echo smarty_function_icon(array('name'=>'edit','alt'=>"Edit"),$_smarty_tpl);?>
</a>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_library_references']!='y') {?>
						<a class="edit_ref" title="Edit" href="javascript:;" onclick="edit_ref('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['biblio_code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['author']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['year']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['part']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['uri']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['style']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['template']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['publisher']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['location']);?>
')"><?php echo smarty_function_icon(array('name'=>'edit','alt'=>"Edit"),$_smarty_tpl);?>
</a>
					<?php }?>
					<a title="Delete" onclick="delete_ref('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
')" ><?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Remove"),$_smarty_tpl);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['is_library']<1&&$_smarty_tpl->tpl_vars['use_references']->value==1&&$_smarty_tpl->tpl_vars['edit_references']->value==1) {?>
						<a class="add_lib_btn" title="Add to library" onclick="add_lib('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['biblio_code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['author']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['year']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['part']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['uri']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['code']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['style']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['template']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['publisher']);?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['references']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['location']);?>
')" ><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Add to library"),$_smarty_tpl);?>
</a>
					<?php }?>
				</li>
			<?php endfor; endif; ?>
			</ul>

			<?php if ($_smarty_tpl->tpl_vars['use_references']->value==1) {?>
				<?php if ($_smarty_tpl->tpl_vars['libReferencesCant']->value>0) {?>
					Library References:<br>
					<select name="lib_ref" id="lib_ref">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['libReferences']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['libReferences']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ref_id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['libReferences']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['biblio_code']);?>
</option>
						<?php endfor; endif; ?>
					</select>
					<br>
					<input class="wikiaction btn btn-default" type="submit" value="Use" id="u_lib" name="u_lib">
					<br><span id="u_lib_status"></span>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['edit_references']->value==1&&$_smarty_tpl->tpl_vars['libReferencesCant']->value>0) {?>
				<br><a href="tiki-references.php" target="_blank">Edit Library References</a>
			<?php }?>

		</div>

		<div id="ref_edit_block" style="display:none;">
			<div>
				<input type="hidden" name="e_ref_id" id="e_ref_id" value="">
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_biblio_code">Biblio Code:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_biblio_code" id="e_ref_biblio_code" maxlength="50" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_author">Author:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_author" id="e_ref_author" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_title">Title:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_title" id="e_ref_title" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_year">Year:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_year" id="e_ref_year" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_part">Part:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="e_ref_part" id="e_ref_part" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_uri">URI:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_uri" id="e_ref_uri" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_biblio_code">Code:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_code" id="e_ref_code" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_publisher">Publisher:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_publisher" id="e_ref_publisher" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_location">Location:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="e_ref_location" id="e_ref_location" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_style">Style:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_style" id="e_ref_style" value="">
						<span class="help-block">Enter the CSS class name to be added in the 'li' tag for listing this reference.</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="e_ref_template">Template:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control wikiedit" name="e_ref_template" id="e_ref_template" value="">
						<span class="help-block">
							Enter template format in which you want to display the reference details in the bibliography listing. For example: ~title~ (~year~) ~author~
						</span>
						<span class="help-block">
							All the codes must be in lower case letters separated with spaces.
						</span>
					</div>
				</div>
				<div class="form-group">
					<div id="e_btns">
						<input class="wikiaction btn btn-default" type="submit" value="Save" id="e_submit" name="e_submit">
						<input class="wikiaction btn btn-warning" type="reset" value="Cancel" id="e_cancel" name="e_cancel">
						<span id="e_status" style="margin: 0 0 0 10px;"></span>
					</div>
					<div id="a_btns">
						<input class="wikiaction btn btn-default" type="submit" value="Add" id="a_submit" name="a_submit">
						<input class="wikiaction btn btn-warning" type="reset" value="Cancel" id="a_cancel" name="a_cancel">
						<span id="a_status" style="margin: 0 0 0 10px;"></span>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php } else { ?>
	Please save the page before creating the bibliography.
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\antibot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d3dc769_08705102')) {function content_5b63b81d3dc769_08705102($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value=='anonymous'||!empty($_smarty_tpl->tpl_vars['showantibot']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-3', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-sm-11 col-md-8', null, 0);?> 
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-9', null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-sm-4 col-sm-offset-3 margin-bottom-sm', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value==='register') {?>
		<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-4 col-sm-3', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-4 col-sm-6', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-md-5 col-sm-6 col-md-offset-4 col-sm-offset-3', null, 0);?>
	<?php }?>
	<div class="antibot">
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha'||$_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
			<div class="form-group clearfix">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='questions') {?>
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="col-md-4 col-sm-3 control-label">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</label>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-7 col-sm-8 col-xs-11<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php } else { ?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9 col-xs-12<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
				<?php }?>
			</div>
		<?php } else { ?>
			
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="control-label <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
" for="antibotcode">Enter the code below<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y'&&$_smarty_tpl->tpl_vars['form']->value!='register') {?><strong class="mandatory_star"> *</strong><?php }?></label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php }?>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="form-group">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
						<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->getPath();?>
" alt="Anti-Bot verification code image" height="50">
					<?php } else { ?>
						
						<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
					<div class="col-sm-3">
						<?php echo smarty_function_button(array('_id'=>'captchaRegenerate','_class'=>'','href'=>'#antibot','_text'=>"Try another code",'_icon_name'=>"refresh",'_onclick'=>"generateCaptcha();return false;"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		function antibotVerification(element, rule) {
			if (!jqueryTiki.validate) return;

			var form = $(".antibot").parents('form');
			if (!form.data("validator")) {
				form.validate({});
			}
			element.rules( "add", rule);
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#recaptcha_response_field').length) {
					clearInterval(existCondition);
					antibotVerification($("#recaptcha_response_field"), {required: true});
				}
			}, 100); // wait for captcha to load

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#g-recaptcha-response').length) {
					clearInterval(existCondition);
					antibotVerification($("#g-recaptcha-response"), {required: true});
				}
			}, 100); // wait for captcha to load
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			antibotVerification($("#antibotcode"), {
				required: true,
				remote: {
					url: "validate-ajax.php",
					type: "post",
					data: {
						validator: "captcha",
						parameter: function() {
							return $("#captchaId").val();
						},
						input: function() {
							return $("#antibotcode").val();
						}
					}
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-page_bar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d403875_87456794')) {function content_5b63b81d403875_87456794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_attachments')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.attachments.php';
?>
<?php if (!isset($_smarty_tpl->tpl_vars['versioned']->value)||!$_smarty_tpl->tpl_vars['versioned']->value) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'more_section', null); ob_start(); ?>
		<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'&&(isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)) {?>
				<li>
					<a class="btn btn-link" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'remove_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>'last'),$_smarty_tpl);?>
">
						Remove
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_wiki_page']->value=='y') {?>
				<li><?php echo smarty_function_permission_link(array('mode'=>'button','type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page']->value,'permType'=>'wiki','title'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_contribution']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_page_contribution_view']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-page_contribution.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Contributions by author"),$_smarty_tpl);?>
</li>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_similar']->value=='y') {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-likepages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Similar"),$_smarty_tpl);?>
</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_undo']=='y'&&$_smarty_tpl->tpl_vars['canundo']->value=='y') {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'undo'=>"1",'_type'=>"link",'_text'=>"Undo"),$_smarty_tpl);?>
</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_make_structure']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y'&&(isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['structure']->value=='n'&&count($_smarty_tpl->tpl_vars['showstructs']->value)==0) {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'convertstructure'=>"1",'_type'=>"link",'_text'=>"Make Structure"),$_smarty_tpl);?>
</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_slideshow']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_uses_slides']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['show_slideshow']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"./tiki-slideshow.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Slideshow"),$_smarty_tpl);?>
</li>
			<?php } elseif ($_smarty_tpl->tpl_vars['structure']->value=='y') {?>
				<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-slideshow2.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'],'_type'=>"link",'_text'=>"Slideshow"),$_smarty_tpl);?>
</li>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y')) {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-export_wiki_pages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Export"),$_smarty_tpl);?>
</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss']=='y'&&$_smarty_tpl->tpl_vars['show_page']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y'&&(empty($_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility'])||$_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility']=='button')) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'wiki_discussion_string', null); ob_start(); ?>
				<?php /*  Call merged included template "wiki-discussion.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d43a388_99275192($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki-discussion.tpl" */?> [tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
|<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_type'=>"link",'_text'=>"Discuss"),$_smarty_tpl);?>
</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||(!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution']=='y'))&&!$_smarty_tpl->tpl_vars['lock']->value) {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-edit_translation.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Translate"),$_smarty_tpl);?>
</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_keywords']=='y') {?>
			<li><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-admin_keywords.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>"link",'_text'=>"Keywords"),$_smarty_tpl);?>
</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value&&(isset($_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value)&&$_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_bookmarks']=='y') {?>
			<li><?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
$_tmp2=ob_get_clean();?><?php ob_start();
echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_SERVER['REQUEST_URI'],'/^[^\?\&]*/',''),'/(\?page=[^\&]+)/','');
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['urlurl'] = new Smarty_variable($_tmp2.$_tmp3, null, 0);
echo smarty_function_button(array('_script'=>"tiki-user_bookmarks.php",'urlname'=>$_smarty_tpl->tpl_vars['page']->value,'urlurl'=>$_smarty_tpl->tpl_vars['urlurl']->value,'addurl'=>"Add",'_type'=>"link",'_text'=>"Bookmark",'_auto_args'=>"urlname,urlurl,addurl"),$_smarty_tpl);?>
</li>
		<?php }?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_bar', null); ob_start(); ?>
		<?php if ($_smarty_tpl->tpl_vars['edit_page']->value!='y') {?>
			
			<?php if (((isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')||(!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution']=='y'))||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y') {?>
				<?php if (isset($_smarty_tpl->tpl_vars['beingEdited']->value)&&$_smarty_tpl->tpl_vars['beingEdited']->value=='y') {?>
					<?php $_smarty_tpl->tpl_vars['thisPageClass'] = new Smarty_variable('+highlight', null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['thisPageClass'] = new Smarty_variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']!='y'||!$_smarty_tpl->tpl_vars['revision_approval']->value||$_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['page_ref_id']->value)) {?>
						<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-editpage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'_class'=>$_smarty_tpl->tpl_vars['thisPageClass']->value,'_text'=>"Edit",'_title'=>"Edit this page"),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-editpage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>$_smarty_tpl->tpl_vars['thisPageClass']->value,'_text'=>"Edit",'_title'=>"Edit this page"),$_smarty_tpl);?>

					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1,'_class'=>"btn btn-warning")); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1,'_class'=>"btn btn-warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						View latest version before editing
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1,'_class'=>"btn btn-warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_source']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=='y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>"0",'_text'=>"Source"),$_smarty_tpl);?>

			<?php }?>

			<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox') {?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_rename']->value=='y'&&(isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)) {?>
					<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-rename_page.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Rename"),$_smarty_tpl);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y') {?>
					<?php if (!$_smarty_tpl->tpl_vars['lock']->value) {?>
						<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'lock_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
							Lock
						</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['page_user']->value) {?>
						<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'unlock_pages','checked'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
							Unlock
						</a>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value=='y') {?>
					<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"History"),$_smarty_tpl);?>

				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']=='n'||$_smarty_tpl->tpl_vars['info']->value['comments_enabled']=='y')&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y') {?>

						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_displayed_default']=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							var id = '#comment-container';
							$(id).comment_load('tiki-ajax_services.php?controller=comment&action=list&type=wiki+page&objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
#comment-container');
							$(document).ajaxComplete(function(){$(id).tiki_popover();});
							
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>

						<a class="btn btn-default" id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"wiki page",'objectId'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
#comment-container">
							Comments
							<?php if ($_smarty_tpl->tpl_vars['count_comments']->value) {?>
								&nbsp;<span class="count_comments badge"><?php echo $_smarty_tpl->tpl_vars['count_comments']->value;?>
</span>
							<?php }?>
						</a>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							$('#comment-toggle').comment_toggle();
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>


			<?php if (isset($_smarty_tpl->tpl_vars['show_page']->value)&&$_smarty_tpl->tpl_vars['show_page']->value=='y') {?>
				

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y'&&(isset($_smarty_tpl->tpl_vars['atts']->value)&&count($_smarty_tpl->tpl_vars['atts']->value)>0)||$_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['atts']->value)&&count($_smarty_tpl->tpl_vars['atts']->value)>0) {?>
						<?php $_smarty_tpl->tpl_vars['thisbuttonclass'] = new Smarty_variable('highlight', null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['thisbuttonclass'] = new Smarty_variable('', null, 0);?>
					<?php }?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'thistext', null); ob_start(); ?>
						<?php if ((!isset($_smarty_tpl->tpl_vars['atts']->value)||count($_smarty_tpl->tpl_vars['atts']->value)==0)||$_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='n'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='n') {?>Files<?php } else { ?>Files&nbsp;<span class="atts_count badge"><?php echo count($_smarty_tpl->tpl_vars['atts']->value);?>
</span><?php }?>
					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ((isset($_smarty_tpl->tpl_vars['atts']->value)&&count($_smarty_tpl->tpl_vars['atts']->value)>0)||$_smarty_tpl->tpl_vars['editable']->value) {?>
						<?php ob_start();
if (isset($_smarty_tpl->tpl_vars['pagemd5']->value)) {?><?php echo (string)$_smarty_tpl->tpl_vars['pagemd5']->value;?><?php }
$_tmp4=ob_get_clean();?><?php echo smarty_function_button(array('href'=>"#attachments",'_flip_id'=>"attzone".$_tmp4,'_class'=>$_smarty_tpl->tpl_vars['thisbuttonclass']->value,'_text'=>$_smarty_tpl->tpl_vars['thistext']->value,'_flip_default_open'=>$_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default'],'_flip_hide_text'=>"n"),$_smarty_tpl);?>

					<?php }?>
				<?php }?>

			<?php }?>
			<?php if (trim($_smarty_tpl->tpl_vars['more_section']->value)!='') {?>
				<div class="btn-group dropup">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						More <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<?php echo $_smarty_tpl->tpl_vars['more_section']->value;?>

					</ul>
				</div>
			<?php }?>
		<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss']=='y'&&$_smarty_tpl->tpl_vars['show_page']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_discuss_visibility']=='above') {?>
			<?php /*  Call merged included template "discussinforum.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('discussinforum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d488599_81987351($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "discussinforum.tpl" */?>
	<?php }?>

	<?php if (trim($_smarty_tpl->tpl_vars['page_bar']->value)!='') {?>
		<div class="form-group" id="page-bar">
			<div class="btn-bar">
				<?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>

			</div>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['wiki_extras']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y') {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_use_fgal_for_wiki_attachments']=='y') {
echo smarty_function_attachments(array('_id'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>'wiki page'),$_smarty_tpl);
} else {
/*  Call merged included template "attachments.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('attachments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d4a3b17_95838441($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "attachments.tpl" */
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value=='y'&&$_smarty_tpl->tpl_vars['edit_page']->value!='y') {?><div id="comment-container"></div><?php }?>
<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-discussion.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d43a388_99275192')) {function content_5b63b81d43a388_99275192($_smarty_tpl) {?>Use this thread to discuss the page:<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\discussinforum.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d488599_81987351')) {function content_5b63b81d488599_81987351($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><div id="discuss-forum">
	<h1 >Page discussion</h1>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'wiki_discussion_string', null); ob_start();
/*  Call merged included template "wiki-discussion.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6684134105b63b81d10dac6-02995058');
content_5b63b81d43a388_99275192($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki-discussion.tpl" */?> [tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
|<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars['discuss_replies_cant']->value)&&$_smarty_tpl->tpl_vars['discuss_replies_cant']->value==1) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This page has been discussed once<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Access discussion";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp5=ob_get_clean();?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>$_tmp5),$_smarty_tpl);?>

	<?php } elseif (isset($_smarty_tpl->tpl_vars['discuss_replies_cant']->value)&&$_smarty_tpl->tpl_vars['discuss_replies_cant']->value>1) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This page has been discussed %0 times<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Access discussion (%0 replies)";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp6=ob_get_clean();?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>$_tmp6),$_smarty_tpl);?>

	<?php } else { ?>
		There are no discussions currently on this page
		<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>"Start discussion"),$_smarty_tpl);?>

	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\attachments.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b63b81d4a3b17_95838441')) {function content_5b63b81d4a3b17_95838441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
?>

<a id="attachments"></a>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y') {?>

	<div
		<?php if (isset($_smarty_tpl->tpl_vars['pagemd5']->value)&&$_smarty_tpl->tpl_vars['pagemd5']->value) {?>
			<?php $_smarty_tpl->tpl_vars['cookie_key'] = new Smarty_variable("show_attzone".((string)$_smarty_tpl->tpl_vars['pagemd5']->value), null, 0);?>
			id="attzone<?php echo $_smarty_tpl->tpl_vars['pagemd5']->value;?>
"
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['cookie_key'] = new Smarty_variable("show_attzone", null, 0);?>
			id="attzone"
		<?php }?>
		<?php if ((isset($_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value])&&$_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value]=='y')||(!isset($_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value])&&$_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default']=='y')) {?>
			style="display:block;"
		<?php } else { ?>
			style="display:none;"
		<?php }?>
	>

	

	<?php if (($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')&&count($_smarty_tpl->tpl_vars['atts']->value)>0) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['offset']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['offsetparam'] = new Smarty_variable("offset=".((string)$_smarty_tpl->tpl_vars['offset']->value)."&amp;", null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['offsetparam'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>

		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
			<table class="table table-striped table-hover">
				<h3>Attached files</h3>
				<tr>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='attId_desc') {?>attId_asc<?php } else { ?>attId_desc<?php }?>&amp;atts_show=y#attachments">ID</a>
					</th>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filename_desc') {?>filename_asc<?php } else { ?>filename_desc<?php }?>&amp;atts_show=y#attachments">Name</a>
					</th>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='comment_desc') {?>comment_asc<?php } else { ?>comment_desc<?php }?>&amp;atts_show=y#attachments">Comment</a>
					</th>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>&amp;atts_show=y#attachments">Uploaded</a>
					</th>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='size_desc') {?>size_asc<?php } else { ?>size_desc<?php }?>&amp;atts_show=y#attachments">Size</a>
					</th>
					<th>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;?>
sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>&amp;atts_show=y#attachments">Downloads</a>
					</th>
					<th></th>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false,'advance'=>false),$_smarty_tpl);?>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['atts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
					<tr>
						<td class="id"><?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
</td>
						<td class="text">
							<?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename']);?>

							<a class="tablename" href="tiki-download_wiki_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
&amp;page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;download=y"><?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
</a>
						</td>
						<td class="text"><small><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['comment']);?>
</small></td>
						<td class="date">
							<small><?php if ($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']) {
echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);
}?> <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['created']);?>
</small>
						</td>
						<td class="integer"><small><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filesize']);?>
</small></td>
						<td class="integer"><small><?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['hits'];?>
</small></td>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('att_actions', null, null); ob_start(); ?>
								<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-download_wiki_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
" target="_blank"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-download_wiki_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
&amp;download=y"><?php echo smarty_function_icon(array('name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Download"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if (($_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)))&&$_smarty_tpl->tpl_vars['editable']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;removeattach=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['offsetparam']->value;
if (!empty($_smarty_tpl->tpl_vars['sort_mode']->value)) {?>sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['target']->value)) {?> target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
"<?php }?>><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
							<a
								class="tips"
								title="Actions"
								href="#"
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['att_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['att_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
				<?php endfor; endif; ?>
			</table>
		</div>
	<?php }?>

	

	<?php if (($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')&&(!isset($_smarty_tpl->tpl_vars['attach_box']->value)||$_smarty_tpl->tpl_vars['attach_box']->value!='n')&&$_smarty_tpl->tpl_vars['editable']->value) {?>
		<div class="file-upload well well-sm">
			<form class="form-horizontal" enctype="multipart/form-data" action="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
" method="post">
				<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?>
					<input type="hidden" name="page_ref_id" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_ref_id']->value);?>
">
				<?php }?>
				<?php if (!empty($_REQUEST['no_bl'])) {?>
					<input type="hidden" name="no_bl" value="<?php echo smarty_modifier_escape($_REQUEST['no_bl']);?>
">
				<?php }?>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="attach-upload">Upload file</label><input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
					<div class="col-sm-10">
						<input class="form-control" name="userfile1" type="file" id="attach-upload">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="attach-comment">Comment</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="attach_comment" maxlength="250" id="attach-comment" placeholder="File upload comment...">
					</div>
					<div class="col-sm-2">
						<input type="submit" class="btn btn-primary" name="attach" value="Attach">
					</div>
				</div>
			</form>
		</div>
	<?php }?>
</div>
<?php }?>
<?php }} ?>
