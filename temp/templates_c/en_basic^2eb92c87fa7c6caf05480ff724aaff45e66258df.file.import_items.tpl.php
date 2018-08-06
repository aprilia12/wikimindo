<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\import_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105511835b67b4f5ed5156-13871773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb92c87fa7c6caf05480ff724aaff45e66258df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\import_items.tpl',
      1 => 1423631694,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
    '58dd8da8a23e9b08360d0affe31a4527f40ce6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_actions.tpl',
      1 => 1480844428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105511835b67b4f5ed5156-13871773',
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
  'unifunc' => 'content_5b67b4f6079509_39431829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4f6079509_39431829')) {function content_5b67b4f6079509_39431829($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '105511835b67b4f5ed5156-13871773');
content_5b67b4f6000365_45991990($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
<?php if ($_smarty_tpl->tpl_vars['return']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Confirmation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Imported file '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['return']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import completed with '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<form class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
			<li>The order of the fields does not matter, but you need to add a header with the field names</li>
			<li>Add " -- " (with the spaces before and after) to the end of the fields in the header that you would like to import!</li>
			<li>Auto-incremented itemid fields shall be included with no matter what values</li>
			<li>If you are having problems, try a different line ending for your csv file that matches the server operating system</li>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="importfile">File</label>
		<input type="file" name="importfile" class="form-control">
	</div>
	<div class="form-group">
		<label for="dataFormat">Date format</label>
		<select name="dateFormat" class="form-control">
			<option value="yyyy-mm-dd">year-month-day(2008-01-31)</option>
			<option value="mm/dd/yyyy">month/day/year(01/31/2008)</option>
			<option value="dd/mm/yyyy">day/month/year(31/01/2008)</option>
			<option value="">UNIX Timestamp</option>
		</select>
	</div>
	<div class="form-group">
		<label for=encoding">Character encoding</label>
		<select name="encoding" class="form-control">
			<option value="UTF-8" selected="selected">UTF-8</option>
			<option value="ISO-8859-1">ISO-8859-1</option>
		</select>
	</div>
	<div class="form-group">
		<label for="separator">Separator</label>
		<input type="text" name="separator" value="," size="2" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="add_items" value="1">
			Create as new items
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="updateLastModif" checked="checked" value="1">
			Update lastModif date if updating items (status and created are updated only if the fields are specified in the csv)
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="convertItemLinkValues" value="1">
			Convert values of ItemLink and Relation type fields from the value in the CSV file to the itemId of the linked item. Requires the linked or related item to be correctly set up in advance.
		</label>
	</div>
	<div class="submit">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Import">
	</div>
</form>

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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '105511835b67b4f5ed5156-13871773');
content_5b67b4f6000365_45991990($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
<?php if ($_smarty_tpl->tpl_vars['return']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Confirmation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Imported file '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['return']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import completed with '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<form class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
			<li>The order of the fields does not matter, but you need to add a header with the field names</li>
			<li>Add " -- " (with the spaces before and after) to the end of the fields in the header that you would like to import!</li>
			<li>Auto-incremented itemid fields shall be included with no matter what values</li>
			<li>If you are having problems, try a different line ending for your csv file that matches the server operating system</li>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="importfile">File</label>
		<input type="file" name="importfile" class="form-control">
	</div>
	<div class="form-group">
		<label for="dataFormat">Date format</label>
		<select name="dateFormat" class="form-control">
			<option value="yyyy-mm-dd">year-month-day(2008-01-31)</option>
			<option value="mm/dd/yyyy">month/day/year(01/31/2008)</option>
			<option value="dd/mm/yyyy">day/month/year(31/01/2008)</option>
			<option value="">UNIX Timestamp</option>
		</select>
	</div>
	<div class="form-group">
		<label for=encoding">Character encoding</label>
		<select name="encoding" class="form-control">
			<option value="UTF-8" selected="selected">UTF-8</option>
			<option value="ISO-8859-1">ISO-8859-1</option>
		</select>
	</div>
	<div class="form-group">
		<label for="separator">Separator</label>
		<input type="text" name="separator" value="," size="2" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="add_items" value="1">
			Create as new items
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="updateLastModif" checked="checked" value="1">
			Update lastModif date if updating items (status and created are updated only if the fields are specified in the csv)
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="convertItemLinkValues" value="1">
			Convert values of ItemLink and Relation type fields from the value in the CSV file to the itemId of the linked item. Requires the linked or related item to be correctly set up in advance.
		</label>
	</div>
	<div class="submit">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Import">
	</div>
</form>

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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '105511835b67b4f5ed5156-13871773');
content_5b67b4f6000365_45991990($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
<?php if ($_smarty_tpl->tpl_vars['return']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Confirmation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Imported file '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['return']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import completed with '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<form class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
			<li>The order of the fields does not matter, but you need to add a header with the field names</li>
			<li>Add " -- " (with the spaces before and after) to the end of the fields in the header that you would like to import!</li>
			<li>Auto-incremented itemid fields shall be included with no matter what values</li>
			<li>If you are having problems, try a different line ending for your csv file that matches the server operating system</li>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="importfile">File</label>
		<input type="file" name="importfile" class="form-control">
	</div>
	<div class="form-group">
		<label for="dataFormat">Date format</label>
		<select name="dateFormat" class="form-control">
			<option value="yyyy-mm-dd">year-month-day(2008-01-31)</option>
			<option value="mm/dd/yyyy">month/day/year(01/31/2008)</option>
			<option value="dd/mm/yyyy">day/month/year(31/01/2008)</option>
			<option value="">UNIX Timestamp</option>
		</select>
	</div>
	<div class="form-group">
		<label for=encoding">Character encoding</label>
		<select name="encoding" class="form-control">
			<option value="UTF-8" selected="selected">UTF-8</option>
			<option value="ISO-8859-1">ISO-8859-1</option>
		</select>
	</div>
	<div class="form-group">
		<label for="separator">Separator</label>
		<input type="text" name="separator" value="," size="2" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="add_items" value="1">
			Create as new items
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="updateLastModif" checked="checked" value="1">
			Update lastModif date if updating items (status and created are updated only if the fields are specified in the csv)
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="convertItemLinkValues" value="1">
			Convert values of ItemLink and Relation type fields from the value in the CSV file to the itemId of the linked item. Requires the linked or related item to be correctly set up in advance.
		</label>
	</div>
	<div class="submit">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Import">
	</div>
</form>

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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '105511835b67b4f5ed5156-13871773');
content_5b67b4f6000365_45991990($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
<?php if ($_smarty_tpl->tpl_vars['return']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Confirmation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Imported file '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['return']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import completed with '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<form class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
			<li>The order of the fields does not matter, but you need to add a header with the field names</li>
			<li>Add " -- " (with the spaces before and after) to the end of the fields in the header that you would like to import!</li>
			<li>Auto-incremented itemid fields shall be included with no matter what values</li>
			<li>If you are having problems, try a different line ending for your csv file that matches the server operating system</li>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="importfile">File</label>
		<input type="file" name="importfile" class="form-control">
	</div>
	<div class="form-group">
		<label for="dataFormat">Date format</label>
		<select name="dateFormat" class="form-control">
			<option value="yyyy-mm-dd">year-month-day(2008-01-31)</option>
			<option value="mm/dd/yyyy">month/day/year(01/31/2008)</option>
			<option value="dd/mm/yyyy">day/month/year(31/01/2008)</option>
			<option value="">UNIX Timestamp</option>
		</select>
	</div>
	<div class="form-group">
		<label for=encoding">Character encoding</label>
		<select name="encoding" class="form-control">
			<option value="UTF-8" selected="selected">UTF-8</option>
			<option value="ISO-8859-1">ISO-8859-1</option>
		</select>
	</div>
	<div class="form-group">
		<label for="separator">Separator</label>
		<input type="text" name="separator" value="," size="2" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="add_items" value="1">
			Create as new items
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="updateLastModif" checked="checked" value="1">
			Update lastModif date if updating items (status and created are updated only if the fields are specified in the csv)
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="convertItemLinkValues" value="1">
			Convert values of ItemLink and Relation type fields from the value in the CSV file to the itemId of the linked item. Requires the linked or related item to be correctly set up in advance.
		</label>
	</div>
	<div class="submit">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Import">
	</div>
</form>

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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:50
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67b4f6000365_45991990')) {function content_5b67b4f6000365_45991990($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>

<div class="btn-group">

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&!empty($_smarty_tpl->tpl_vars['trackerId']->value)) {?>
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Properties
	</a>
	<a class="btn btn-default" href="tiki-admin_tracker_fields.php?trackerId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<?php echo smarty_function_icon(array('name'=>"th-list"),$_smarty_tpl);?>
 Fields
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value=='y') {?>
	<a class="btn btn-default" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>trackers<?php } else { ?>tiki-list_trackers.php<?php }?>">
		<?php echo smarty_function_icon(array('name'=>"trackers"),$_smarty_tpl);?>
 Trackers
	</a>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['trackerId']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y'&&(empty($_smarty_tpl->tpl_vars['showitems']->value)||$_smarty_tpl->tpl_vars['showitems']->value!=='n')) {?>
	<a class="btn btn-default" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,"tracker");?>
">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Items
	</a>
<?php }?>

</div>
<?php }} ?>
