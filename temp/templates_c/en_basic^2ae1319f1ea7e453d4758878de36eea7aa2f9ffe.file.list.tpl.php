<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 08:28:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tabular\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20924212095b73c809c021e9-01744675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae1319f1ea7e453d4758878de36eea7aa2f9ffe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tabular\\list.tpl',
      1 => 1519811578,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20924212095b73c809c021e9-01744675',
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
  'unifunc' => 'content_5b73c809e482f2_67048375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73c809e482f2_67048375')) {function content_5b73c809e482f2_67048375($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
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
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'filter'),$_smarty_tpl);?>
Filter</a>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'export','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Export</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

				
<?php if ($_smarty_tpl->tpl_vars['filters']->value['primary']['usable']) {?>
	<form class="form-horizontal" method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
				<div class="col-sm-9">
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				</div>
			</div>
		<?php } ?>
		<div class="submit form-group">
			<div class="hidden">
				<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">
				
				
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				<?php } ?>
			</div>
			<div class="col-sm-9 col-sm-push-3">
				<input class="btn btn-primary" type="submit" value="Search">
			</div>
		</div>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['default']['selected']) {?>
	<h4>Applied filters</h4>
	<dl class="dl-horizontal">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected']) {?>
				<dt><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</dt>
				<dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['description']);?>
</dd>
			<?php }?>
		<?php } ?>
	</dl>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['side']['usable']) {?>
	<div class="row">
		<div class="col-md-9">
			<table class="table">
				<tr>
					<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
						<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<tr>
						<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
							<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
						<?php } ?>
					</td>
				<?php } ?>
			</table>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="col-md-3">
			<form method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['side']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<div class="form-group">
						<label class="control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
						<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

					</div>
				<?php } ?>
				<div class="form-group submit">
					<div class="hidden">
						<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">

						
						
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
					</div>
					<input class="btn btn-default" type="submit" value="Filter">
				</div>
			</form>
		</div>
	</div>
<?php } else { ?>
	<table class="table">
		<tr>
			<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
				<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
			<?php } ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
					<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
				<?php } ?>
			</td>
		<?php } ?>
	</table>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

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
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'filter'),$_smarty_tpl);?>
Filter</a>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'export','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Export</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

				
<?php if ($_smarty_tpl->tpl_vars['filters']->value['primary']['usable']) {?>
	<form class="form-horizontal" method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
				<div class="col-sm-9">
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				</div>
			</div>
		<?php } ?>
		<div class="submit form-group">
			<div class="hidden">
				<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">
				
				
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				<?php } ?>
			</div>
			<div class="col-sm-9 col-sm-push-3">
				<input class="btn btn-primary" type="submit" value="Search">
			</div>
		</div>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['default']['selected']) {?>
	<h4>Applied filters</h4>
	<dl class="dl-horizontal">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected']) {?>
				<dt><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</dt>
				<dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['description']);?>
</dd>
			<?php }?>
		<?php } ?>
	</dl>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['side']['usable']) {?>
	<div class="row">
		<div class="col-md-9">
			<table class="table">
				<tr>
					<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
						<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<tr>
						<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
							<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
						<?php } ?>
					</td>
				<?php } ?>
			</table>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="col-md-3">
			<form method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['side']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<div class="form-group">
						<label class="control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
						<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

					</div>
				<?php } ?>
				<div class="form-group submit">
					<div class="hidden">
						<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">

						
						
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
					</div>
					<input class="btn btn-default" type="submit" value="Filter">
				</div>
			</form>
		</div>
	</div>
<?php } else { ?>
	<table class="table">
		<tr>
			<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
				<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
			<?php } ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
					<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
				<?php } ?>
			</td>
		<?php } ?>
	</table>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

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
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'filter'),$_smarty_tpl);?>
Filter</a>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'export','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Export</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

				
<?php if ($_smarty_tpl->tpl_vars['filters']->value['primary']['usable']) {?>
	<form class="form-horizontal" method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
				<div class="col-sm-9">
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				</div>
			</div>
		<?php } ?>
		<div class="submit form-group">
			<div class="hidden">
				<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">
				
				
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				<?php } ?>
			</div>
			<div class="col-sm-9 col-sm-push-3">
				<input class="btn btn-primary" type="submit" value="Search">
			</div>
		</div>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['default']['selected']) {?>
	<h4>Applied filters</h4>
	<dl class="dl-horizontal">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected']) {?>
				<dt><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</dt>
				<dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['description']);?>
</dd>
			<?php }?>
		<?php } ?>
	</dl>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['side']['usable']) {?>
	<div class="row">
		<div class="col-md-9">
			<table class="table">
				<tr>
					<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
						<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<tr>
						<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
							<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
						<?php } ?>
					</td>
				<?php } ?>
			</table>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="col-md-3">
			<form method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['side']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<div class="form-group">
						<label class="control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
						<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

					</div>
				<?php } ?>
				<div class="form-group submit">
					<div class="hidden">
						<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">

						
						
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
					</div>
					<input class="btn btn-default" type="submit" value="Filter">
				</div>
			</form>
		</div>
	</div>
<?php } else { ?>
	<table class="table">
		<tr>
			<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
				<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
			<?php } ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
					<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
				<?php } ?>
			</td>
		<?php } ?>
	</table>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

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
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'filter'),$_smarty_tpl);?>
Filter</a>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_edit','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'export','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Export</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_export','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value)); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'target'=>'list','_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tabular_import','type'=>'tabular','object'=>$_smarty_tpl->tpl_vars['tabularId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

				
<?php if ($_smarty_tpl->tpl_vars['filters']->value['primary']['usable']) {?>
	<form class="form-horizontal" method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
				<div class="col-sm-9">
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				</div>
			</div>
		<?php } ?>
		<div class="submit form-group">
			<div class="hidden">
				<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">
				
				
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

				<?php } ?>
			</div>
			<div class="col-sm-9 col-sm-push-3">
				<input class="btn btn-primary" type="submit" value="Search">
			</div>
		</div>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['default']['selected']) {?>
	<h4>Applied filters</h4>
	<dl class="dl-horizontal">
		<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected']) {?>
				<dt><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</dt>
				<dd><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['description']);?>
</dd>
			<?php }?>
		<?php } ?>
	</dl>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['filters']->value['side']['usable']) {?>
	<div class="row">
		<div class="col-md-9">
			<table class="table">
				<tr>
					<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
						<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
					<tr>
						<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
							<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
						<?php } ?>
					</td>
				<?php } ?>
			</table>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="col-md-3">
			<form method="get" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list'),$_smarty_tpl);?>
">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['side']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<div class="form-group">
						<label class="control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value['label']);?>
</label>
						<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

					</div>
				<?php } ?>
				<div class="form-group submit">
					<div class="hidden">
						<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tabularId']->value);?>
">

						
						
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['default']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
						<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value['primary']['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['control'];?>

						<?php } ?>
					</div>
					<input class="btn btn-default" type="submit" value="Filter">
				</div>
			</form>
		</div>
	</div>
<?php } else { ?>
	<table class="table">
		<tr>
			<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
				<th class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['column']->value->getLabel();?>
</th>
			<?php } ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
					<td class="text-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->tpl_vars['i']->value]->getDisplayAlign());?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
				<?php } ?>
			</td>
		<?php } ?>
	</table>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value,'_params'=>$_smarty_tpl->tpl_vars['baseArguments']->value),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['resultset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

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
