<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:45:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tabular\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4650649315b67b63f4092d6-20116297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8868e9d50ed4e27631f2cd4b78eb49a18e3fa7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tabular\\manage.tpl',
      1 => 1509276118,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4650649315b67b63f4092d6-20116297',
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
  'unifunc' => 'content_5b67b63f539e27_99277441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b63f539e27_99277441')) {function content_5b67b63f539e27_99277441($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_object_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_title.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
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
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="form-group">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a class="btn btn-default" href=<?php echo smarty_modifier_sefurl('','tracker');?>
><?php echo smarty_function_icon(array('name'=>'trackers'),$_smarty_tpl);?>
 Trackers</a>
	</div>

				
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Tracker</th>
			<th>Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
				<td><?php echo smarty_function_object_title(array('type'=>'tracker','id'=>$_smarty_tpl->tpl_vars['row']->value['trackerId']),$_smarty_tpl);?>
</td>
				<td>
					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
					<?php echo smarty_function_permission_link(array('type'=>'tabular','id'=>$_smarty_tpl->tpl_vars['row']->value['tabularId'],'title'=>$_smarty_tpl->tpl_vars['row']->value['name'],'mode'=>'text'),$_smarty_tpl);?>

					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'export_full_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Full</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','target'=>'export','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Partial</a>
					<a href="tiki-searchindex.php?tabularId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['tabularId']);?>
&amp;filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Custom</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
					<a class="text-danger" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'delete','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
<span class="sr-only">Delete</span></a>
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
			<tr>
				<td colspan="3">No tabular formats defined.</td>
			</tr>
		<?php } ?>
	</table>

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
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="form-group">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a class="btn btn-default" href=<?php echo smarty_modifier_sefurl('','tracker');?>
><?php echo smarty_function_icon(array('name'=>'trackers'),$_smarty_tpl);?>
 Trackers</a>
	</div>

				
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Tracker</th>
			<th>Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
				<td><?php echo smarty_function_object_title(array('type'=>'tracker','id'=>$_smarty_tpl->tpl_vars['row']->value['trackerId']),$_smarty_tpl);?>
</td>
				<td>
					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
					<?php echo smarty_function_permission_link(array('type'=>'tabular','id'=>$_smarty_tpl->tpl_vars['row']->value['tabularId'],'title'=>$_smarty_tpl->tpl_vars['row']->value['name'],'mode'=>'text'),$_smarty_tpl);?>

					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'export_full_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Full</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','target'=>'export','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Partial</a>
					<a href="tiki-searchindex.php?tabularId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['tabularId']);?>
&amp;filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Custom</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
					<a class="text-danger" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'delete','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
<span class="sr-only">Delete</span></a>
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
			<tr>
				<td colspan="3">No tabular formats defined.</td>
			</tr>
		<?php } ?>
	</table>

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
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="form-group">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a class="btn btn-default" href=<?php echo smarty_modifier_sefurl('','tracker');?>
><?php echo smarty_function_icon(array('name'=>'trackers'),$_smarty_tpl);?>
 Trackers</a>
	</div>

				
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Tracker</th>
			<th>Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
				<td><?php echo smarty_function_object_title(array('type'=>'tracker','id'=>$_smarty_tpl->tpl_vars['row']->value['trackerId']),$_smarty_tpl);?>
</td>
				<td>
					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
					<?php echo smarty_function_permission_link(array('type'=>'tabular','id'=>$_smarty_tpl->tpl_vars['row']->value['tabularId'],'title'=>$_smarty_tpl->tpl_vars['row']->value['name'],'mode'=>'text'),$_smarty_tpl);?>

					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'export_full_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Full</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','target'=>'export','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Partial</a>
					<a href="tiki-searchindex.php?tabularId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['tabularId']);?>
&amp;filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Custom</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
					<a class="text-danger" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'delete','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
<span class="sr-only">Delete</span></a>
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
			<tr>
				<td colspan="3">No tabular formats defined.</td>
			</tr>
		<?php } ?>
	</table>

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
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="form-group">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a class="btn btn-default" href=<?php echo smarty_modifier_sefurl('','tracker');?>
><?php echo smarty_function_icon(array('name'=>'trackers'),$_smarty_tpl);?>
 Trackers</a>
	</div>

				
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Tracker</th>
			<th>Actions</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'list','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
				<td><?php echo smarty_function_object_title(array('type'=>'tracker','id'=>$_smarty_tpl->tpl_vars['row']->value['trackerId']),$_smarty_tpl);?>
</td>
				<td>
					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
Edit</a>
					<?php echo smarty_function_permission_link(array('type'=>'tabular','id'=>$_smarty_tpl->tpl_vars['row']->value['tabularId'],'title'=>$_smarty_tpl->tpl_vars['row']->value['name'],'mode'=>'text'),$_smarty_tpl);?>

					<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'export_full_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Full</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'filter','target'=>'export','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Partial</a>
					<a href="tiki-searchindex.php?tabularId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['tabularId']);?>
&amp;filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['row']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
Custom</a>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'import_csv','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import'),$_smarty_tpl);?>
Import</a>
					<a class="text-danger" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tabular','action'=>'delete','tabularId'=>$_smarty_tpl->tpl_vars['row']->value['tabularId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
<span class="sr-only">Delete</span></a>
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
			<tr>
				<td colspan="3">No tabular formats defined.</td>
			</tr>
		<?php } ?>
	</table>

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
