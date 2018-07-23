<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-show_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21217420065b516573533483-67930411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f6d8f75835b15e1a3dcd8067acb6eff76f985a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-show_page.tpl',
      1 => 1483831436,
      2 => 'file',
    ),
    'ba7dc68c7aabee25961ce6e1f2cc9cee9a410fc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\classic\\layout_view.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    'e7a8cd512ae016ed33d4e4e3ea195b61faf3dada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\translated-lang.tpl',
      1 => 1505903440,
      2 => 'file',
    ),
    'f8846d186b91d19d7bb879fadf06dc560449c6ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-wiki_topline.tpl',
      1 => 1519902202,
      2 => 'file',
    ),
    'e181257fc9494f9c21da9bc2c423556ae6fbbf26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-flaggedrev_approval_header.tpl',
      1 => 1496314360,
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
    'b539b8ad23e0d1d0c8c72c33d11ea127cd9da17b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\freetag_list.tpl',
      1 => 1427025242,
      2 => 'file',
    ),
    '408f444f8ba91eb26ce081987b8b00aaa84de12d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-wiki_structure_bar.tpl',
      1 => 1505910642,
      2 => 'file',
    ),
    '3fda5d5b4819a5f0c4e4df233fbc9a2a219f6190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\poll.tpl',
      1 => 1519808476,
      2 => 'file',
    ),
    'a8df3f7c948fa3e732c4a1f134eeed22dd05942a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki_authors.tpl',
      1 => 1416589936,
      2 => 'file',
    ),
    '2f633fc9708d9bb13e6de914bbb1f43f0be7d820' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\show_copyright.tpl',
      1 => 1458729188,
      2 => 'file',
    ),
    '3159768f8ff1d5a0c8c9311e4b7aaed06701395b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\category_related_objects.tpl',
      1 => 1316178542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21217420065b516573533483-67930411',
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
  'unifunc' => 'content_5b516573a28e29_68307685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b516573a28e29_68307685')) {function content_5b516573a28e29_68307685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_function_breadcrumbs')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.breadcrumbs.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_rating')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?> dir="rtl"<?php }
if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
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

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
<div id="main-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['main_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>

<?php if ($_SESSION['fullscreen']!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
	<div id="header-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['header_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
		<div class="header_outer" id="header_outer">
			<div class="header_container">
				<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
					<header class="header page-header" id="page-header">
						<?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

					</header>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['header_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>
<?php }?>

	<div class="middle_outer" id="middle_outer" >
		<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?> clearfix middle" id="middle">
			<div class="row topbar" id="topbar">
				<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

			</div>
			<div class="row" id="row-middle">
				<?php if ((zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n')&&(zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n')) {?>
					<div class="col-md-12 col1" id="col1">

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
						<div id="tiki-center-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

							<?php }?>
							<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

							
	<?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

							
	<?php if (!isset($_smarty_tpl->tpl_vars['pageLang']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value['lang'])) {?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['lang'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable('', null, 0);?>
		<?php }?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc']=='page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel']=='y') {?>Location : <?php }?>
			<?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
				<?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
			<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
		<?php }?>

	<?php }?>

							
							
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php /*  Call merged included template "tiki-flaggedrev_approval_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657369e950_37267518($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-flaggedrev_approval_header.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='top') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&(isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y')) {?>
		<div class="categbar" style="clear: both; text-align: right">
			Watched by categories:
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
			<?php endfor; endif; ?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']=='y') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<div class="panel panel-warning">
				<div class="panel-heading">
					Content may be out of date
				</div>
				<div class="panel-body">
					An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
							<li>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'wiki','with_next');?>
no_bl=y">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page']);?>

								</a>
								(<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['lang'];?>
)
								<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y') {?>
									<a href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;source_page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'url');?>
&amp;oldver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['last_update'],'url');?>
&amp;newver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current_version'],'url');?>
&amp;diff_style=htmldiff" class="tips" title=":Update from it">
										<?php echo smarty_function_icon(array('name'=>'refresh','style'=>"vertical-align:middle"),$_smarty_tpl);?>

									</a>
								<?php }?>
							</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		<?php endfor; endif; ?>
	<?php }?>

	<article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']!='y') {?> nopagetitle<?php }?>">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y') {?>
				<?php /*  Call merged included template "freetag_list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737cf4a6_17960638($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag_list.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='bottom') {?>
				<div class="text-center navigation_bar pagination position_top">
					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
						<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
						<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

					</a>

					<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
						<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
						<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

					</a>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='bottom')&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='none'))) {?>
				<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y') {?>
				<?php /*  Call merged included template "poll.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657382d0b4_18076162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "poll.tpl" */?>
			<?php }?>
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value!='') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<div id="page-data" class="clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y') {?>
				<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['pageLang']->value)&&($_smarty_tpl->tpl_vars['pageLang']->value=='ar'||$_smarty_tpl->tpl_vars['pageLang']->value=='he')) {?>
				<div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value=='ar') {?>font-size: large;<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='bottom')||($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='both'))) {?>
			<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='top') {?>
			<br>
			<div class="text-center navigation_bar pagination position_bottom">
				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
					<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>

				<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</article> 

	<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value=='y') {?>
		<div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
	<?php }?>

	<footer class="help-block">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value=='y') {?>
			Rate this page:
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

			</form>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style']->value!='none') {?>
			<?php /*  Call merged included template "wiki_authors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657386b8c9_09475029($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_authors.tpl" */?>
		<?php }?>

		<?php /*  Call merged included template "show_copyright.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('copyright_context'=>"wiki"), 0, '21217420065b516573533483-67930411');
content_5b5165738929d0_22034621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "show_copyright.tpl" */?>

		<?php if ($_smarty_tpl->tpl_vars['print_page']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['print_original_url_wiki']=='y') {?>
			<br>
			The original document is available at <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
</a>
		<?php }?>
	</footer>

	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y') {?>
		<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!='') {?>
		<?php /*  Call merged included template "category_related_objects.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165738adf59_01869358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "category_related_objects.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='both')&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>

					</div>
				<?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
					<div class="col-md-12 text-right side-col-toggle">
						<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
						<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

					</div>
				<?php }?>
					<div class="col-md-9 col1" id="col1">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
						<div id="tiki-center-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

							<?php }?>
							<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

							
	<?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

							
	<?php if (!isset($_smarty_tpl->tpl_vars['pageLang']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value['lang'])) {?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['lang'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable('', null, 0);?>
		<?php }?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc']=='page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel']=='y') {?>Location : <?php }?>
			<?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
				<?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
			<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
		<?php }?>

	<?php }?>

							
							
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php /*  Call merged included template "tiki-flaggedrev_approval_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657369e950_37267518($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-flaggedrev_approval_header.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='top') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&(isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y')) {?>
		<div class="categbar" style="clear: both; text-align: right">
			Watched by categories:
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
			<?php endfor; endif; ?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']=='y') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<div class="panel panel-warning">
				<div class="panel-heading">
					Content may be out of date
				</div>
				<div class="panel-body">
					An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
							<li>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'wiki','with_next');?>
no_bl=y">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page']);?>

								</a>
								(<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['lang'];?>
)
								<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y') {?>
									<a href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;source_page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'url');?>
&amp;oldver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['last_update'],'url');?>
&amp;newver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current_version'],'url');?>
&amp;diff_style=htmldiff" class="tips" title=":Update from it">
										<?php echo smarty_function_icon(array('name'=>'refresh','style'=>"vertical-align:middle"),$_smarty_tpl);?>

									</a>
								<?php }?>
							</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		<?php endfor; endif; ?>
	<?php }?>

	<article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']!='y') {?> nopagetitle<?php }?>">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y') {?>
				<?php /*  Call merged included template "freetag_list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737cf4a6_17960638($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag_list.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='bottom') {?>
				<div class="text-center navigation_bar pagination position_top">
					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
						<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
						<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

					</a>

					<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
						<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
						<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

					</a>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='bottom')&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='none'))) {?>
				<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y') {?>
				<?php /*  Call merged included template "poll.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657382d0b4_18076162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "poll.tpl" */?>
			<?php }?>
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value!='') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<div id="page-data" class="clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y') {?>
				<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['pageLang']->value)&&($_smarty_tpl->tpl_vars['pageLang']->value=='ar'||$_smarty_tpl->tpl_vars['pageLang']->value=='he')) {?>
				<div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value=='ar') {?>font-size: large;<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='bottom')||($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='both'))) {?>
			<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='top') {?>
			<br>
			<div class="text-center navigation_bar pagination position_bottom">
				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
					<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>

				<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</article> 

	<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value=='y') {?>
		<div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
	<?php }?>

	<footer class="help-block">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value=='y') {?>
			Rate this page:
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

			</form>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style']->value!='none') {?>
			<?php /*  Call merged included template "wiki_authors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657386b8c9_09475029($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_authors.tpl" */?>
		<?php }?>

		<?php /*  Call merged included template "show_copyright.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('copyright_context'=>"wiki"), 0, '21217420065b516573533483-67930411');
content_5b5165738929d0_22034621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "show_copyright.tpl" */?>

		<?php if ($_smarty_tpl->tpl_vars['print_page']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['print_original_url_wiki']=='y') {?>
			<br>
			The original document is available at <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
</a>
		<?php }?>
	</footer>

	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y') {?>
		<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!='') {?>
		<?php /*  Call merged included template "category_related_objects.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165738adf59_01869358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "category_related_objects.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='both')&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>
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
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
						<div id="tiki-center-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

							<?php }?>
							<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

							
	<?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

							
	<?php if (!isset($_smarty_tpl->tpl_vars['pageLang']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value['lang'])) {?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['lang'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable('', null, 0);?>
		<?php }?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc']=='page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel']=='y') {?>Location : <?php }?>
			<?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
				<?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
			<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
		<?php }?>

	<?php }?>

							
							
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php /*  Call merged included template "tiki-flaggedrev_approval_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657369e950_37267518($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-flaggedrev_approval_header.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='top') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&(isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y')) {?>
		<div class="categbar" style="clear: both; text-align: right">
			Watched by categories:
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
			<?php endfor; endif; ?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']=='y') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<div class="panel panel-warning">
				<div class="panel-heading">
					Content may be out of date
				</div>
				<div class="panel-body">
					An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
							<li>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'wiki','with_next');?>
no_bl=y">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page']);?>

								</a>
								(<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['lang'];?>
)
								<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y') {?>
									<a href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;source_page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'url');?>
&amp;oldver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['last_update'],'url');?>
&amp;newver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current_version'],'url');?>
&amp;diff_style=htmldiff" class="tips" title=":Update from it">
										<?php echo smarty_function_icon(array('name'=>'refresh','style'=>"vertical-align:middle"),$_smarty_tpl);?>

									</a>
								<?php }?>
							</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		<?php endfor; endif; ?>
	<?php }?>

	<article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']!='y') {?> nopagetitle<?php }?>">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y') {?>
				<?php /*  Call merged included template "freetag_list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737cf4a6_17960638($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag_list.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='bottom') {?>
				<div class="text-center navigation_bar pagination position_top">
					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
						<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
						<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

					</a>

					<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
						<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
						<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

					</a>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='bottom')&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='none'))) {?>
				<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y') {?>
				<?php /*  Call merged included template "poll.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657382d0b4_18076162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "poll.tpl" */?>
			<?php }?>
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value!='') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<div id="page-data" class="clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y') {?>
				<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['pageLang']->value)&&($_smarty_tpl->tpl_vars['pageLang']->value=='ar'||$_smarty_tpl->tpl_vars['pageLang']->value=='he')) {?>
				<div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value=='ar') {?>font-size: large;<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='bottom')||($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='both'))) {?>
			<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='top') {?>
			<br>
			<div class="text-center navigation_bar pagination position_bottom">
				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
					<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>

				<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</article> 

	<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value=='y') {?>
		<div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
	<?php }?>

	<footer class="help-block">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value=='y') {?>
			Rate this page:
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

			</form>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style']->value!='none') {?>
			<?php /*  Call merged included template "wiki_authors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657386b8c9_09475029($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_authors.tpl" */?>
		<?php }?>

		<?php /*  Call merged included template "show_copyright.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('copyright_context'=>"wiki"), 0, '21217420065b516573533483-67930411');
content_5b5165738929d0_22034621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "show_copyright.tpl" */?>

		<?php if ($_smarty_tpl->tpl_vars['print_page']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['print_original_url_wiki']=='y') {?>
			<br>
			The original document is available at <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
</a>
		<?php }?>
	</footer>

	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y') {?>
		<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!='') {?>
		<?php /*  Call merged included template "category_related_objects.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165738adf59_01869358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "category_related_objects.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='both')&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>
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
						<div class="col-md-6 text-right side-col-toggle">
							<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
							<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

						</div>
					<?php }?>
					<div class="col-md-8 col-md-push-2 col1" id="col1">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
						<div id="tiki-center-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

							<?php }?>
							<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

							
	<?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

							
	<?php if (!isset($_smarty_tpl->tpl_vars['pageLang']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['info']->value['lang'])) {?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['lang'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable('', null, 0);?>
		<?php }?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc']=='page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel']=='y') {?>Location : <?php }?>
			<?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
				<?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y') {?>
			<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
		<?php }?>

	<?php }?>

							
							
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
		<?php /*  Call merged included template "tiki-flaggedrev_approval_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657369e950_37267518($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-flaggedrev_approval_header.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='top') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&(isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y')) {?>
		<div class="categbar" style="clear: both; text-align: right">
			Watched by categories:
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
			<?php endfor; endif; ?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']=='y') {?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<div class="panel panel-warning">
				<div class="panel-heading">
					Content may be out of date
				</div>
				<div class="panel-body">
					An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
							<li>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'wiki','with_next');?>
no_bl=y">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page']);?>

								</a>
								(<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['lang'];?>
)
								<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y') {?>
									<a href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;source_page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'url');?>
&amp;oldver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['last_update'],'url');?>
&amp;newver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current_version'],'url');?>
&amp;diff_style=htmldiff" class="tips" title=":Update from it">
										<?php echo smarty_function_icon(array('name'=>'refresh','style'=>"vertical-align:middle"),$_smarty_tpl);?>

									</a>
								<?php }?>
							</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
			</div>
		<?php endfor; endif; ?>
	<?php }?>

	<article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']!='y') {?> nopagetitle<?php }?>">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y') {?>
				<?php /*  Call merged included template "freetag_list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737cf4a6_17960638($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "freetag_list.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='bottom') {?>
				<div class="text-center navigation_bar pagination position_top">
					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
						<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
						<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

					</a>

					<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
						<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

					</a>

					<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
						<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

					</a>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='bottom')&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='none'))) {?>
				<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y') {?>
				<?php /*  Call merged included template "poll.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657382d0b4_18076162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "poll.tpl" */?>
			<?php }?>
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value!='') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<div id="page-data" class="clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_inside']=='y') {?>
				<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['pageLang']->value)&&($_smarty_tpl->tpl_vars['pageLang']->value=='ar'||$_smarty_tpl->tpl_vars['pageLang']->value=='he')) {?>
				<div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value=='ar') {?>font-size: large;<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='bottom')||($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='both'))) {?>
			<?php /*  Call merged included template "tiki-wiki_structure_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165737f2728_84113768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_structure_bar.tpl" */?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='top') {?>
			<br>
			<div class="text-center navigation_bar pagination position_bottom">
				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First">
					<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>

				<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];
} else { ?>page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
}?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</article> 

	<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value=='y') {?>
		<div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
	<?php }?>

	<footer class="help-block">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value=='y') {?>
			Rate this page:
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

			</form>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style']->value!='none') {?>
			<?php /*  Call merged included template "wiki_authors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b51657386b8c9_09475029($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wiki_authors.tpl" */?>
		<?php }?>

		<?php /*  Call merged included template "show_copyright.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('copyright_context'=>"wiki"), 0, '21217420065b516573533483-67930411');
content_5b5165738929d0_22034621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "show_copyright.tpl" */?>

		<?php if ($_smarty_tpl->tpl_vars['print_page']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['print_original_url_wiki']=='y') {?>
			<br>
			The original document is available at <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
</a>
		<?php }?>
	</footer>

	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y') {?>
		<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!='') {?>
		<?php /*  Call merged included template "category_related_objects.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165738adf59_01869358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "category_related_objects.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both') {?>
		<?php /*  Call merged included template "tiki-wiki_topline.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573591099_65065696($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-wiki_topline.tpl" */?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
		<?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='both')&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
			<?php /*  Call merged included template "tiki-page_bar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736c1be4_29428280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-page_bar.tpl" */?>
		<?php }?>
	<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
								<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['center_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>
					</div>
					<div class="col-md-2 col-md-pull-8" id="col2">
						<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

					</div>
					<div class="col-md-2" id="col3">
						<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		</div>
	</div>

<?php if ($_SESSION['fullscreen']!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {?>
	<div id="footer-shadow"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['footer_shadow_start'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
}?>
		<footer class="footer" id="footer">
			<div class="footer_liner">
				<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>" style="padding-left: 0; padding-right: 0;">
					<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row-sidemargins-zero'),$_smarty_tpl);?>

				</div>
			</div>
		</footer>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['footer_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>
<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y') {
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['main_shadow_end'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></div><?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-wiki_topline.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b516573591099_65065696')) {function content_5b516573591099_65065696($_smarty_tpl) {?><?php if (!is_callable('smarty_function_breadcrumbs')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.breadcrumbs.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_object_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_title.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_ajax_href')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.ajax_href.php';
if (!is_callable('smarty_function_monitor_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.monitor_link.php';
if (!is_callable('smarty_function_favorite')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.favorite.php';
?>
<div class="wikitopline clearfix" style="clear: both;">
	<div class="content">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value) {?>
			<div class="wikiinfo pull-left">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'&&$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
					<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
" class="titletop" title="refresh"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pageid']=='y'&&$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
					<small><a class="link" href="tiki-index.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
">page id: <?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
</a></small>
				<?php }?>

				<?php echo smarty_function_breadcrumbs(array('type'=>"desc",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>


				<?php if ($_smarty_tpl->tpl_vars['cached_page']->value=='y') {?><span class="cachedStatus">(Cached)</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categorypath']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_category']->value=='y') {?>
					<?php echo $_smarty_tpl->tpl_vars['display_catpath']->value;?>

				<?php }?>
			</div>
		<?php }?> 
	</div> 
</div> 

<?php if (!isset($_smarty_tpl->tpl_vars['versioned']->value)&&$_smarty_tpl->tpl_vars['print_page']->value!='y'&&(!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
	<div class="wikiactions_wrapper">
		<div class="wikiactions icons btn-group pull-right">
			<div class="btn-group">
				
				<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_inline']->value=='y')||$_smarty_tpl->tpl_vars['translationsCount']->value>1) {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['show_available_translations']=='y'&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
						<!--span class="btn-i18n" -->
						<?php /*  Call merged included template "translated-lang.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>'wiki page'), 0, '21217420065b516573533483-67930411');
content_5b5165735bfea5_74894921($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "translated-lang.tpl" */?>
						<!--/span -->
					<?php }?>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_sharethis_encourage']=="y") {?>
					
					<div class="btn-group">
						
						<?php echo '<script'; ?>
 type="text/javascript">
							//Create your sharelet with desired properties and set button element to false
							var object = SHARETHIS.addEntry({ title:'<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
'}, {button:false});
							//Output your customized button
							document.write('<a class="btn btn-link tips" id="share" href="#" title="ShareThis"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
</a>');
							//Tie customized button to ShareThis button functionality.
							var element = document.getElementById("share");
							object.attachButton(element);
						<?php echo '</script'; ?>
>
						
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks']=='y'&&(($tmp = @$_smarty_tpl->tpl_vars['backlinks']->value)===null||$tmp==='' ? null : $tmp)&&$_smarty_tpl->tpl_vars['tiki_p_view_backlink']->value=='y') {?>
					<div class="btn-group backlinks">
						<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
						<a role="button" data-toggle="dropdown" data-hover="dropdown" class="btn btn-link dropdown-toggle">
							<?php echo smarty_function_icon(array('name'=>"backlink"),$_smarty_tpl);?>

						</a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li class="dropdown-title">
								Backlinks
							</li>
							<li class="divider"></li>
							<li role="presentation">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['backlinks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<a role="menuitem" tabindex="-1" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['objectId'],$_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['type']);?>
" title="<?php echo smarty_function_object_title(array('id'=>$_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['objectId'],'type'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['type'])),$_smarty_tpl);?>
">
									  <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len']>='1') {
echo smarty_function_object_title(array('id'=>$_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['objectId'],'type'=>smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['type'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len'],"...",true))),$_smarty_tpl);
} else {
echo smarty_function_object_title(array('id'=>$_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['objectId'],'type'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['type'])),$_smarty_tpl);
}?>
									</a>
								<?php endfor; endif; ?>
							</li>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'||($_smarty_tpl->tpl_vars['structure']->value=='n'&&count($_smarty_tpl->tpl_vars['showstructs']->value)!=0)) {?>
					<div class="btn-group structures">
						<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
						<a class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
							<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>

						</a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li class="dropdown-title">
								Structures
							</li>
							<li class="divider"></li>
							<li role="presentation">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['struct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['name'] = 'struct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['showstructs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total']);
?>
									<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;structure=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName'],'url');?>
" <?php if (isset($_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName'])&&$_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']==$_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName']) {?> title="Current structure: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']);?>
" class="selected tips" <?php } else { ?> class="tips" title="Show structure: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']);?>
"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['page_alias']) {?>
											<?php echo $_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['page_alias'];?>

										<?php } else { ?>
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']);?>

										<?php }?>
									</a>
								<?php endfor; endif; ?>
							</li>
							<?php if (isset($_smarty_tpl->tpl_vars['structure_path']->value)&&$_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']!=$_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName']&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_open_as_structure']!='y') {?>
								<li role="presentation" class="divider"></li>
								<li role="presentation">
									<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
" class="tips" title=":Hide structure bar and any toc">
										Hide structure
									</a>
								</li>
							<?php }?>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
					</div>
				<?php }?>

				
				<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("0", null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("pageActions", null, null); ob_start(); ?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
						<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li class="dropdown-title">
							Page actions
						</li>
						<li class="divider"></li>
						<li>
							<?php if ($_smarty_tpl->tpl_vars['pdf_export']->value=='y') {?>
								<a href="tiki-print.php?<?php echo smarty_function_query(array('_keepall'=>'y','display'=>"pdf",'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
									<?php echo smarty_function_icon(array('name'=>"pdf"),$_smarty_tpl);?>
 PDF
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							<?php }?>
						</li>
						<?php if (!($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']!='y'||!$_smarty_tpl->tpl_vars['revision_approval']->value||$_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value)) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								$(".editplugin, .icon_edit_section").hide();
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']!='y'||!$_smarty_tpl->tpl_vars['revision_approval']->value||$_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y'&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
								<li>
									<a <?php $_smarty_tpl->smarty->_tag_stack[] = array('ajax_href', array('template'=>"tiki-editpage.tpl")); $_block_repeat=true; echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");
if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)&&(empty($_smarty_tpl->tpl_vars['needsStaging']->value)||$_smarty_tpl->tpl_vars['needsStaging']->value!='y')) {?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
>
										<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit
										<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
									</a>
								</li>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_icons_toggle']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_plugin']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y')) {?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										$("#wiki_plugin_edit_view").click( function () {
										var $icon = $("#wiki_plugin_edit_view span");
										if (! $icon.hasClass("highlight")) {
											$(".editplugin, .icon_edit_section").show();
											$icon.addClass("highlight");
											setCookieBrowser("wiki_plugin_edit_view", true);
										} else {
											$(".editplugin, .icon_edit_section").hide();
											$icon.removeClass("highlight");
											deleteCookie("wiki_plugin_edit_view");
										}
										return false;
										});
										if (!getCookie("wiki_plugin_edit_view")) {$(".editplugin, .icon_edit_section").hide(); } else { $("#wiki_plugin_edit_view").click(); }
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<li>
										<a href="#" id="wiki_plugin_edit_view">
											<?php echo smarty_function_icon(array('name'=>'plugin'),$_smarty_tpl);?>
 Edit icons
											<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
										</a>
									</li>
								<?php }?>
							<?php }?>
							<?php if (($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_inline']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y'&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value=='') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_inline_editing']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y') {?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										$("#wysiwyg_inline_edit").click( function () {
										var $icon = $("#wysiwyg_inline_edit span");
										if (! $icon.hasClass("highlight")) {
											if (enableWysiwygInlineEditing()) {
												$icon.addClass("highlight");
											}
										} else {
											if (disableWYSIWYGInlineEditing()) {
												$icon.removeClass("highlight");
											}
										}
										return false;
										});
										if (getCookie("wysiwyg_inline_edit", "preview")) { $("#wysiwyg_inline_edit").click(); }
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<li>
										<a href="#" id="wysiwyg_inline_edit">
											<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
 Inline edit
											<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
										</a>
									</li>
								<?php }?>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['cached_page']->value=='y') {?>
							<li>
								<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value,'wiki','with_next');?>
refresh=1">
									<?php echo smarty_function_icon(array('name'=>"refresh"),$_smarty_tpl);?>
 Refresh
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_print']=='y') {?>
							<li>
								<a href="tiki-print.php?<?php echo smarty_function_query(array('_keepall'=>'y','page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
									<?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_share']->value=='y') {?>
							<li>
								<a href="tiki-share.php?url=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],'url');?>
">
									<?php echo smarty_function_icon(array('name'=>"share"),$_smarty_tpl);?>
 Share
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tell_a_friend']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tell_a_friend']->value=='y') {?>
							<li>
								<a href="tiki-tell_a_friend.php?url=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],'url');?>
">
									<?php echo smarty_function_icon(array('name'=>"envelope"),$_smarty_tpl);?>
 Send link
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_sharethis']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_sharethis_encourage']!="y") {?>
							
							<li>
								
								<?php echo '<script'; ?>
 type="text/javascript">
									//Create your sharelet with desired properties and set button element to false
									var object = SHARETHIS.addEntry({ title:'<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
'}, {button:false});
									//Output your customized button
									document.write('<a id="share" href="#" title="ShareThis"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
 ShareThis</a>');
									//Tie customized button to ShareThis button functionality.
									var element = document.getElementById("share");
									object.attachButton(element);
								<?php echo '</script'; ?>
>
								
							</li>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_notepad']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_notepad']->value=='y') {?>
							<li>
								<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;savenotepad=1<?php if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)) {?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;
}?>">
									<?php echo smarty_function_icon(array('name'=>"notepad"),$_smarty_tpl);?>
 Save to notepad
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
						<?php }?>
						<?php echo smarty_function_monitor_link(array('type'=>"wiki page",'object'=>$_smarty_tpl->tpl_vars['page']->value,'class'=>'','linktext'=>"Notification",'tag'=>"li"),$_smarty_tpl);?>

						<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['user_watching_page']->value=='n') {?>
								<li>
									<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_action=add<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y') {?>&amp;structure=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url');
}?>" class="icon">
										<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor page
										<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
									</a>
								</li>
							<?php } else { ?>
								<li>
									<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_action=remove<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y') {?>&amp;structure=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url');
}?>" class="icon">
										<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring page
										<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
									</a>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_watch_structure']->value=='y') {?>
								<?php if ($_smarty_tpl->tpl_vars['user_watching_structure']->value!='y') {?>
									<li>
										<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=add_desc&amp;structure=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url');?>
">
											<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor sub-structure
											<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
										</a>
									</li>
								<?php } else { ?>
									<li>
										<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=remove_desc&amp;structure=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['home_info']->value['pageName'],'url');?>
">
											<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring sub-structure
											<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
										</a>
									</li>
								<?php }?>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
							<li>
								<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;watch_event=wiki_page_changed&amp;objectType=wiki+page&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-index.php?page=').($_smarty_tpl->tpl_vars['page']->value),"url");?>
" class="icon">
									<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor
									<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
								</a>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y') {?>
								<li>
									<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'],"url");?>
&amp;watch_event=structure_changed&amp;objectType=structure&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-index.php?page_ref_id=').($_smarty_tpl->tpl_vars['page_ref_id']->value),"url");?>
" class="icon">
										<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor structure
										<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
									</a>
								</li>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['user_favorites']=='y') {?>
							<li>
								<?php echo smarty_function_favorite(array('type'=>"wiki page",'object'=>$_smarty_tpl->tpl_vars['page']->value,'button_classes'=>"icon"),$_smarty_tpl);?>

								<?php $_smarty_tpl->tpl_vars["hasPageAction"] = new Smarty_variable("1", null, 0);?>
							</li>
						<?php }?>
					</ul>
					<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if ($_smarty_tpl->tpl_vars['hasPageAction']->value=='1') {?>
					<div class="btn-group page_actions">
						<?php echo Smarty::$_smarty_vars['capture']['pageActions'];?>

					</div>
				<?php }?>
			</div>
		</div> 
	</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\translated-lang.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165735bfea5_74894921')) {function content_5b5165735bfea5_74894921($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['submenu']->value)||$_smarty_tpl->tpl_vars['submenu']->value!='y') {?>
	<div class="btn-group">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_available_translations_dropdown']!='y') {?>
			
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
				<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>

			</a>
		<?php } else { ?>
			<div class="dropdown">
				
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
				<button class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
					<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['lang']);?>
) <span class="caret"></span>
				</button>
		<?php }?>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
	<a tabindex="-1" href="#">
		<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 Translation...
	</a>
<?php }?>
	
	<?php if (empty($_smarty_tpl->tpl_vars['trads']->value[0]['lang'])) {?>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-header">
				No language assigned
			</li>
			<li role="separator" class="divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page'&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||(!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution']=='y'))&&!$_smarty_tpl->tpl_vars['lock']->value) {?>
				<li>
					<a href="tiki-edit_translation.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						Set page language
					</a>
				</li>
			<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value=='article'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
				<li>
					<a href="tiki-edit_article.php?articleId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['articleId']->value);?>
">
						Set article language
					</a>
				</li>
				<li role="separator" class="divider"></li>
			<?php }?>
		</ul>
	<?php } else { ?>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			
			<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page') {?>
				<li>
					<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['objName'],'url');?>
&amp;no_bl=y" class="tips selected" title="Current language: <?php echo $_smarty_tpl->tpl_vars['trads']->value[0]['objName'];?>
">
						<em><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['lang']);?>
)</em>
					</a>
				</li>
			<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value=='article') {?>
				<li>
					<a href="tiki-read_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['trads']->value[0]['objId'];?>
" title="Current language: <?php echo $_smarty_tpl->tpl_vars['trads']->value[0]['objName'];?>
" class="tips selected">
						<em><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['lang']);?>
)</em>
					</a>
				</li>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				
				<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page'&&$_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]!=$_smarty_tpl->tpl_vars['trads']->value[0]) {?>
					<li>
						<a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['objName']);?>
&no_bl=y" title="View: <?php echo $_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['objName'];?>
" class="tips <?php echo $_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lang']);?>
)
						</a>
					</li>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='article'&&$_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]!=$_smarty_tpl->tpl_vars['trads']->value[0]) {?>
					<li>
						<a href="tiki-read_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['objId'];?>
" title="View: <?php echo $_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['objName'];?>
" class="tips <?php echo $_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['lang']);?>
)
						</a>
					</li>
				<?php }?>
			<?php endfor; endif; ?>
			
			<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual_one_page']=='y'&&$_smarty_tpl->tpl_vars['translationsCount']->value>1) {?>
				<li role="separator" class="divider"></li>
				<li>
					<a href="tiki-all_languages.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['objName'],'url');?>
&no_bl=y" title=":Show all translations of this page on a single page" class="tips">
						All languages
					</a>
				</li>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_machine_translation']=='y') {?>
				<li role="separator" class="divider"></li>
				<li class="dropdown-header">
					Machine translations
				</li>
			
				<?php  $_smarty_tpl->tpl_vars['mtl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mtl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langsCandidatesForMachineTranslation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mtl']->key => $_smarty_tpl->tpl_vars['mtl']->value) {
$_smarty_tpl->tpl_vars['mtl']->_loop = true;
?>
					<li>
						<a href="tiki-index.php?machine_translate_to_lang=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mtl']->value['lang']);?>
&page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"quotes");?>
&no_bl=y" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mtl']->value['langName']);?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mtl']->value['lang']);?>
)" class="tips">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mtl']->value['langName']);?>
 *
						</a>
					</li>
				<?php } ?>
			<?php }?>
			
			<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>
				<?php if ($_smarty_tpl->tpl_vars['object_type']->value=='wiki page'&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y') {?>
					<li role="separator" class="divider"></li>
					<li>
						<a class="tips" href="tiki-edit_translation.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trads']->value[0]['objName'],'url');?>
&amp;no_bl=y" title=":Translate page">
							Translate
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'translation','action'=>'manage','type'=>'wiki page','source'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" class="attach_detach_translation tips" data-object_type="wiki page" data-object_id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'quotes');?>
" title=":Manage page translations">
							Manage translations
						</a>
					</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value=='article'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
					<li role="separator" class="divider"></li>
					<li>
						<a href="tiki-edit_article.php?translationOf=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
" title="Translate article">
						Translate
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'translation','action'=>'manage','type'=>'article','source'=>$_smarty_tpl->tpl_vars['articleId']->value),$_smarty_tpl);?>
" class="attach_detach_translation tips" data-object_id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['articleId']->value,'quotes');?>
" data-object_type="article" title="Manage article translations">
							Manage translations
						</a>
					</li>
				<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (!empty(Smarty::$_smarty_vars['capture']['default'])) {?>
				<?php echo Smarty::$_smarty_vars['capture']['default'];?>

			<?php }?>
		</ul>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['submenu']->value)||$_smarty_tpl->tpl_vars['submenu']->value!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_available_translations_dropdown']=='y') {?>
		</div>
	<?php }?>
	</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-flaggedrev_approval_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b51657369e950_37267518')) {function content_5b51657369e950_37267518($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']=='y'&&$_smarty_tpl->tpl_vars['revision_approval']->value) {?>
	<?php if (($_smarty_tpl->tpl_vars['revision_approved']->value||$_smarty_tpl->tpl_vars['revision_displayed']->value)&&$_smarty_tpl->tpl_vars['revision_approved']->value!=$_smarty_tpl->tpl_vars['lastVersion']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					You are currently viewing the latest version of the page.
					<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value) {?>
						You can also view the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array()); $_block_repeat=true; echo smarty_block_self_link(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest approved version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y') {?>
						You can approve this revision and make it available to a wider audience. Make sure you review all the changes before approving.
					<?php }?>
				</p>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y') {?>
					<form method="post" action="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
">
						<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value) {?>
							<p><a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&compare&oldver=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['revision_approved']->value,'url');?>
&diff_style=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'],'url');?>
">Show changes since last approved revision</a></p>
						<?php } else { ?>
							<p>This page has no prior approved revision. <strong>All of the content must be reviewed.</strong></p>
						<?php }?>
						<div class="submit">
							<input type="hidden" name="revision" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['revision_displayed']->value);?>
">
							<input type="submit" class="btn btn-default btn-sm" name="approve" value="Approve current revision">
						</div>
					</form>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					You are currently viewing the approved version of the page.
					<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y') {?>
						You can also view the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
					<?php }?>
				</p>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php } elseif (!$_smarty_tpl->tpl_vars['revision_approved']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>
				View the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
			</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-page_bar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165736c1be4_29428280')) {function content_5b5165736c1be4_29428280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736f4860_16247385($_smarty_tpl);
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
$_tmp1=ob_get_clean();?><?php ob_start();
echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_SERVER['REQUEST_URI'],'/^[^\?\&]*/',''),'/(\?page=[^\&]+)/','');
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['urlurl'] = new Smarty_variable($_tmp1.$_tmp2, null, 0);
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
$_tmp3=ob_get_clean();?><?php echo smarty_function_button(array('href'=>"#attachments",'_flip_id'=>"attzone".$_tmp3,'_class'=>$_smarty_tpl->tpl_vars['thisbuttonclass']->value,'_text'=>$_smarty_tpl->tpl_vars['thistext']->value,'_flip_default_open'=>$_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default'],'_flip_hide_text'=>"n"),$_smarty_tpl);?>

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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('discussinforum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573746900_53512411($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('attachments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b516573761e83_78488891($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "attachments.tpl" */
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value=='y'&&$_smarty_tpl->tpl_vars['edit_page']->value!='y') {?><div id="comment-container"></div><?php }?>
<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-discussion.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165736f4860_16247385')) {function content_5b5165736f4860_16247385($_smarty_tpl) {?>Use this thread to discuss the page:<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\discussinforum.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b516573746900_53512411')) {function content_5b516573746900_53512411($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><div id="discuss-forum">
	<h1 >Page discussion</h1>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'wiki_discussion_string', null); ob_start();
/*  Call merged included template "wiki-discussion.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21217420065b516573533483-67930411');
content_5b5165736f4860_16247385($_smarty_tpl);
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
$_tmp4=ob_get_clean();?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>$_tmp4),$_smarty_tpl);?>

	<?php } elseif (isset($_smarty_tpl->tpl_vars['discuss_replies_cant']->value)&&$_smarty_tpl->tpl_vars['discuss_replies_cant']->value>1) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This page has been discussed %0 times<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Access discussion (%0 replies)";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['discuss_replies_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp5=ob_get_clean();?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>$_tmp5),$_smarty_tpl);?>

	<?php } else { ?>
		There are no discussions currently on this page
		<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>"Start discussion"),$_smarty_tpl);?>

	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\attachments.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b516573761e83_78488891')) {function content_5b516573761e83_78488891($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\freetag_list.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165737cf4a6_17960638')) {function content_5b5165737cf4a6_17960638($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])) {?>
	<div class="freetaglist"><?php echo smarty_function_icon(array('name'=>"tags",'class'=>"tips btn btn-link btn-sm",'title'=>":Browse Tags",'href'=>"tiki-browse_freetags.php"),$_smarty_tpl);?>

		<?php  $_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('tagurl', null, null); ob_start();
if ((strstr($_smarty_tpl->tpl_vars['taginfo']->value['tag'],' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['links_inactive']->value)&&$_smarty_tpl->tpl_vars['links_inactive']->value=='y') {?>
				<a class="btn-default btn-sm" href="#"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
</a>
			<?php } else { ?>
				<a class="label label-default" href="tiki-browse_freetags.php?tag=<?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['tagurl'],'url');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
</a>
				<?php if (isset($_smarty_tpl->tpl_vars['deleteTag']->value)&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<a class="tips" title=":Untag <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
" href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>delTag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag'],'url');?>
">
						<?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Untag"),$_smarty_tpl);?>

					</a>&nbsp;
				<?php }?>
			<?php }?>
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['freetags_mixed_lang']->value)&&$_smarty_tpl->tpl_vars['freetags_mixed_lang']->value) {?>
			(<a href="<?php echo $_smarty_tpl->tpl_vars['freetags_mixed_lang']->value;?>
">Translate tags</a>)
		<?php }?>
	</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-wiki_structure_bar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165737f2728_84113768')) {function content_5b5165737f2728_84113768($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_menu')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.menu.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.sefurl.php';
if (!is_callable('smarty_modifier_pagename')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.pagename.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
?><div class="tocnav">
	<div class="clearfix">
		<div class="pull-left breadcrumb">
			<?php if ($_smarty_tpl->tpl_vars['home_info']->value) {
if ($_smarty_tpl->tpl_vars['home_info']->value['page_alias']) {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['home_info']->value['page_alias'], null, 0);
} else {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['home_info']->value['pageName'], null, 0);
}?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure_drilldownmenu']=='y') {?>
					<span class="dropdown">
						<a class="btn dropdown-toggle structure-home" role="button" id="dropdownStructure" data-toggle="dropdown" data-hover="dropdown">
							<?php echo smarty_function_icon(array('name'=>"home"),$_smarty_tpl);?>

						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownStructure">
							<?php echo smarty_function_menu(array('structureId'=>$_smarty_tpl->tpl_vars['page_info']->value['structure_id'],'page_id'=>$_smarty_tpl->tpl_vars['page_info']->value['page_id'],'page_name'=>$_smarty_tpl->tpl_vars['page_info']->value['pageName'],'drilldown'=>"y",'bootstrap'=>"n",'css'=>"y"),$_smarty_tpl);?>

						</ul>
					</span>
				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_title'=>"Structure:".((string)$_smarty_tpl->tpl_vars['icon_title']->value),'_class'=>"tips")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_title'=>"Structure:".((string)$_smarty_tpl->tpl_vars['icon_title']->value),'_class'=>"tips"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_icon(array('name'=>"home"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_title'=>"Structure:".((string)$_smarty_tpl->tpl_vars['icon_title']->value),'_class'=>"tips"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prev_info']->value&&$_smarty_tpl->tpl_vars['prev_info']->value['page_ref_id']) {
if ($_smarty_tpl->tpl_vars['prev_info']->value['page_alias']) {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['prev_info']->value['page_alias'], null, 0);
} else {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['prev_info']->value['pageName'], null, 0);
}?>
				<a href="<?php echo smarty_function_sefurl(array('page'=>$_smarty_tpl->tpl_vars['prev_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['prev_info']->value['page_ref_id']),$_smarty_tpl);?>
" class="tips" title="Previous page:<?php echo $_smarty_tpl->tpl_vars['icon_title']->value;?>
">
					<?php echo smarty_function_icon(array('name'=>"caret-left"),$_smarty_tpl);?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['parent_info']->value) {
if ($_smarty_tpl->tpl_vars['parent_info']->value['page_alias']) {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['parent_info']->value['page_alias'], null, 0);
} else {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['parent_info']->value['pageName'], null, 0);
}?>
				<a href="<?php echo smarty_function_sefurl(array('page'=>$_smarty_tpl->tpl_vars['parent_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['parent_info']->value['page_ref_id']),$_smarty_tpl);?>
" class="tips" title="Parent page:<?php echo $_smarty_tpl->tpl_vars['icon_title']->value;?>
">
					<?php echo smarty_function_icon(array('name'=>"up"),$_smarty_tpl);?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['next_info']->value&&$_smarty_tpl->tpl_vars['next_info']->value['page_ref_id']) {
if ($_smarty_tpl->tpl_vars['next_info']->value['page_alias']) {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['next_info']->value['page_alias'], null, 0);
} else {
$_smarty_tpl->tpl_vars['icon_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['next_info']->value['pageName'], null, 0);
}?>
				<a href="<?php echo smarty_function_sefurl(array('page'=>$_smarty_tpl->tpl_vars['next_info']->value['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['next_info']->value['page_ref_id']),$_smarty_tpl);?>
" class="tips" title="Next page:<?php echo $_smarty_tpl->tpl_vars['icon_title']->value;?>
">
					<?php echo smarty_function_icon(array('name'=>"caret-right"),$_smarty_tpl);?>

				</a>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['structure_path']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
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
				<?php if ($_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parent_id']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;<?php }?>
				<a href="<?php echo smarty_function_sefurl(array('page'=>$_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],'structure'=>$_smarty_tpl->tpl_vars['home_info']->value['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id']),$_smarty_tpl);?>
">
					<?php if ($_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias']) {?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias']);?>

					<?php } else { ?>
						<?php echo smarty_modifier_pagename($_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['stripped_pageName']);?>

					<?php }?>
				</a>
			<?php endfor; endif; ?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['struct_editable']->value=='a') {?>
			<div class="pull-right">
				<form action="tiki-editpage.php" method="post" role="form" class="form-inline">
					<div class="form-group">
						<input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
">
						<div class="input-group">
							<span class="input-group-addon"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<input type="text" id="structure_add_page" name="page" class="form-control input-sm">
							<?php echo smarty_function_autocomplete(array('element'=>'#structure_add_page','type'=>'pagename'),$_smarty_tpl);?>

							<div class="input-group-btn">
								<input type="submit" class="btn btn-default btn-sm" name="insert_into_struct" value="Add Page">
							</div>
						</div>
					</div>
					<div class="form-group">
						
						<?php if ($_smarty_tpl->tpl_vars['page_info']->value&&!$_smarty_tpl->tpl_vars['parent_info']->value) {?>
							<input type="hidden" name="add_child" value="checked">
						<?php } else { ?>
							<input type="checkbox" name="add_child"> Child
						<?php }?>
					</div>
				</form>
			</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['struct_editable']->value=='y') {?>
							<span class="pull-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-edit_structure.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'],'_class'=>"tips",'_title'=>"Manage Stucture:".((string)$_smarty_tpl->tpl_vars['home_info']->value['pageName'])." (".((string)$_smarty_tpl->tpl_vars['cur_pos']->value).")"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
			<?php }?>
		<?php }?>
	</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\poll.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b51657382d0b4_18076162')) {function content_5b51657382d0b4_18076162($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['ratings']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_ratings']->value=='y') {?>
	<div style="display:inline;float:right;padding: 1px 3px; border:1px solid #666666; -moz-border-radius : 10px;font-size:.8em;">
		<div id="pollopen">
			<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"show('pollzone');hide('polledit');hide('pollopen');return false;",'class'=>"link",'_text'=>"Rating"),$_smarty_tpl);?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_vote_ratings']->value=='y') {?>
			<div id="polledit">
				<div class="pollnav">
					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"hide('pollzone');hide('polledit');show('pollopen');return false;",'_text'=>"[-]"),$_smarty_tpl);?>

					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"show('pollzone');hide('polledit');hide('pollopen');return false;",'class'=>"link",'_text'=>"View"),$_smarty_tpl);?>

				</div>

				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ratings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['r']->value['title']) {?>
						<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['title']);?>
</div>
					<?php }?>
					<form method="post" action="tiki-index.php">
						<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
							<input type="hidden" name="wikipoll" value="1">
							<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<?php }?>
						<input type="hidden" name="polls_pollId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['info']['pollId']);?>
">
						<table>
							<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['r']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
								<tr>
									<td valign="top" <?php if ($_smarty_tpl->tpl_vars['r']->value['vote']==$_smarty_tpl->tpl_vars['option']->value['optionId']) {?>class="highlight"<?php }?>>
										<input type="radio" name="polls_optionId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['optionId']);?>
" id="poll<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['info']['pollId']);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['optionId']);?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['vote']==$_smarty_tpl->tpl_vars['option']->value['optionId']) {?> checked="checked"<?php }?>>
									</td>
									<td valign="top" <?php if ($_smarty_tpl->tpl_vars['r']->value['vote']==$_smarty_tpl->tpl_vars['option']->value['optionId']) {?>class="highlight"<?php }?>>
										<label for="poll<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['info']['pollId']);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['optionId']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['title']);?>
</label>
									</td>
									<td valign="top" <?php if ($_smarty_tpl->tpl_vars['r']->value['vote']==$_smarty_tpl->tpl_vars['option']->value['optionId']) {?>class="highlight"<?php }?>>
										(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['votes']);?>
)
									</td>
								</tr>
							<?php } ?>
						</table>
						<div align="center">
							<input type="submit" class="btn btn-default btn-sm" name="pollVote" value="vote" style="border:1px solid #666666;font-size:.8em;">
						</div>
					</form>
				<?php } ?>
			</div>
			<div id="pollzone">
				<div class="pollnav">
					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"hide('pollzone');hide('polledit');show('pollopen');return false;",'_text'=>"[-]"),$_smarty_tpl);?>

					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"hide('pollzone');show('polledit');hide('pollopen');return false;",'_text'=>"Vote"),$_smarty_tpl);?>

				</div>
				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ratings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<div>
						<?php if ($_smarty_tpl->tpl_vars['r']->value['title']) {?>
							<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['title']);?>
</div>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['r']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
							<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['votes']);?>
 : <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['title']);?>
</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div id="pollzone">
				<div class="pollnav">
					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"hide('pollzone');hide('polledit');show('pollopen');return false;",'_text'=>"[-]"),$_smarty_tpl);?>

				</div>
				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ratings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<div>
						<?php if ($_smarty_tpl->tpl_vars['r']->value['title']) {?>
							<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['r']->value['title']);?>
</div>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['r']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
							<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['votes']);?>
 : <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['title']);?>
</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		<?php }?>
	</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki_authors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b51657386b8c9_09475029')) {function content_5b51657386b8c9_09475029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><em><?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business') {?>
	Last edited by <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['author'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['author']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['name'] = 'author';
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total']);
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['author']['first']) {?>
			, based on work by
		<?php } else { ?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['author']['last']) {?>
				,
			<?php } else { ?>
				and
			<?php }?>
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['author']['index']]);?>

	<?php endfor; endif; ?>.
	<br>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>
. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y') {?>(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative') {?>
	Contributors to this page: <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['author'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['author']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['name'] = 'author';
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total']);
?>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['author']['last']) {?>
			,
		<?php } else { ?>
			and
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['author']['index']]);?>

	<?php endfor; endif; ?>.
	<br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page last modified on %0 by %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y') {?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif') {?>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created by %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Modification: %0 by %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y') {?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
</em><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\show_copyright.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165738929d0_22034621')) {function content_5b5165738929d0_22034621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']) {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('copyright_content', null, null); ob_start(); ?>
			<div class="copyright">This content is licensed under the terms of the <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'],'wiki','with_next');?>
copyrightpage=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
</a>.</div>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='wiki') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']==$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['tiki_p_edit_copyrights']->value=='y') {?>
				<div class="help-block">To edit the copyright notices <a href="copyrights.php?page=<?php echo $_smarty_tpl->tpl_vars['copyrightpage']->value;?>
">Click Here</a>.</div>
			<?php } else { ?>
				<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='blogpost') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['article_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='article') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['faq_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='faq') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php }?>
	<?php }?>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\category_related_objects.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b5165738adf59_01869358')) {function content_5b5165738adf59_01869358($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['category_related_objects']->value)) {?>
<div class="related">
	<h4>Related content</h4>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_related_objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
		<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['href']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['name']);?>
</a></li>
	<?php } ?>
	</ul>
</div>
<?php }?>
<?php }} ?>
