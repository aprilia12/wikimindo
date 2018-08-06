<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 03:36:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_trackers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8958888745b67a603aaac18-58073505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1413db2017b9abfc37a4389d79bf34470e25f71e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_trackers.tpl',
      1 => 1509276118,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
    '4fe346e44c652d8a38209ba1bf4fcddec68bd1dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\find.tpl',
      1 => 1519706322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8958888745b67a603aaac18-58073505',
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
  'unifunc' => 'content_5b67a603e38f64_13300205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67a603e38f64_13300205')) {function content_5b67a603e38f64_13300205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Trackers",'admpage'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Trackers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
		<div class="form-group">
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create
			</a>
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'duplicate'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate
			</a>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import'),$_smarty_tpl);?>
">
							Import Structure
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_profile'),$_smarty_tpl);?>
">
							Import From Profile/YAML
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
						<li>
							<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
								Manage Tabular Formats
							</a>
						</li>
					<?php }?>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Manage Tabular Formats
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_remote_sync']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'clone_remote'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Clone remote
				</a>
			<?php }?>
		</div>
	<?php }?>

				
	<a id="view"></a>
	<?php if (($_smarty_tpl->tpl_vars['trackers']->value)||($_smarty_tpl->tpl_vars['find']->value)) {?>
		<?php /*  Call merged included template "find.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'trackername','filters'=>''), 0, '8958888745b67a603aaac18-58073505');
content_5b67a603be72d1_54597729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "find.tpl" */?>
		<?php if (($_smarty_tpl->tpl_vars['find']->value)&&($_smarty_tpl->tpl_vars['trackers']->value)) {?>
			<h4 class="find-results">Results <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['trackers']->value);?>
</span></h4>
		<?php }?>
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
		<table class="table table-condensed table-hover table-striped">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'items')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th></th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
?>
				<tr>
					<td class="id">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>

					</td>
					<td class="text">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"
						>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>

						</a>
						<div class="description help-block">
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['descriptionIsParsed']=='y') {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } else { ?>
								<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['description']));?>

							<?php }?>
						</div>
					</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker']->value['created']);?>
</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['tracker']->value['lastModif']);?>
</td>
					<td class="integer">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"
						>

								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['items']);?>


						</a>
					</td>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('tracker_actions', null, null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_tracker_fields.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'th-list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Fields"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>true),$_smarty_tpl);?>
"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'settings','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Properties"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->export_tracker) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Export"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Import"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'view','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'calendar','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Events"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch_event=tracker_modified&amp;objectType=tracker&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_tracker.php?trackerId=').($_smarty_tpl->tpl_vars['tracker']->value['trackerId']),"url");?>
"><?php echo smarty_function_icon(array('name'=>'watch-group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tracker']->value['permissions']->watch_trackers&&$_smarty_tpl->tpl_vars['user']->value) {
if ($_smarty_tpl->tpl_vars['tracker']->value['watched']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=stop"><?php echo smarty_function_icon(array('name'=>'stop-watching','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Stop monitoring"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=add"><?php echo smarty_function_icon(array('name'=>'watch','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'rss','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Feed"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-searchindex.php?filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'search','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Search"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'tracker','permType'=>'trackers','id'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tracker']->value['items']>0) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'clear','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
" class="clear confirm-prompt"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'remove','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
"class="remove confirm-prompt"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['tracker_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['tracker_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['tracker']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value) {?>
					<?php echo smarty_function_norecords(array('_colspan'=>6,'_text'=>"No records found with: ".((string)$_smarty_tpl->tpl_vars['find']->value)),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

				<?php }?>
			<?php } ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(document).on('click', '.remove.confirm-prompt', $.clickModal({
		message: "Do you really remove this tracker?",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
$(document).on('click', '.clear.confirm-prompt', $.clickModal({
		message: "Do you really want to clear all the items from this tracker? (N.B. there is no undo and notifications will not be sent)",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Trackers",'admpage'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Trackers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
		<div class="form-group">
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create
			</a>
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'duplicate'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate
			</a>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import'),$_smarty_tpl);?>
">
							Import Structure
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_profile'),$_smarty_tpl);?>
">
							Import From Profile/YAML
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
						<li>
							<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
								Manage Tabular Formats
							</a>
						</li>
					<?php }?>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Manage Tabular Formats
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_remote_sync']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'clone_remote'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Clone remote
				</a>
			<?php }?>
		</div>
	<?php }?>

				
	<a id="view"></a>
	<?php if (($_smarty_tpl->tpl_vars['trackers']->value)||($_smarty_tpl->tpl_vars['find']->value)) {?>
		<?php /*  Call merged included template "find.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'trackername','filters'=>''), 0, '8958888745b67a603aaac18-58073505');
content_5b67a603be72d1_54597729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "find.tpl" */?>
		<?php if (($_smarty_tpl->tpl_vars['find']->value)&&($_smarty_tpl->tpl_vars['trackers']->value)) {?>
			<h4 class="find-results">Results <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['trackers']->value);?>
</span></h4>
		<?php }?>
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
		<table class="table table-condensed table-hover table-striped">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'items')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th></th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
?>
				<tr>
					<td class="id">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>

					</td>
					<td class="text">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"
						>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>

						</a>
						<div class="description help-block">
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['descriptionIsParsed']=='y') {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } else { ?>
								<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['description']));?>

							<?php }?>
						</div>
					</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker']->value['created']);?>
</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['tracker']->value['lastModif']);?>
</td>
					<td class="integer">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"
						>

								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['items']);?>


						</a>
					</td>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('tracker_actions', null, null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_tracker_fields.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'th-list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Fields"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>true),$_smarty_tpl);?>
"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'settings','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Properties"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->export_tracker) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Export"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Import"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'view','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'calendar','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Events"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch_event=tracker_modified&amp;objectType=tracker&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_tracker.php?trackerId=').($_smarty_tpl->tpl_vars['tracker']->value['trackerId']),"url");?>
"><?php echo smarty_function_icon(array('name'=>'watch-group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tracker']->value['permissions']->watch_trackers&&$_smarty_tpl->tpl_vars['user']->value) {
if ($_smarty_tpl->tpl_vars['tracker']->value['watched']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=stop"><?php echo smarty_function_icon(array('name'=>'stop-watching','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Stop monitoring"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=add"><?php echo smarty_function_icon(array('name'=>'watch','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'rss','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Feed"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-searchindex.php?filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'search','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Search"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'tracker','permType'=>'trackers','id'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tracker']->value['items']>0) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'clear','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
" class="clear confirm-prompt"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'remove','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
"class="remove confirm-prompt"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['tracker_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['tracker_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['tracker']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value) {?>
					<?php echo smarty_function_norecords(array('_colspan'=>6,'_text'=>"No records found with: ".((string)$_smarty_tpl->tpl_vars['find']->value)),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

				<?php }?>
			<?php } ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(document).on('click', '.remove.confirm-prompt', $.clickModal({
		message: "Do you really remove this tracker?",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
$(document).on('click', '.clear.confirm-prompt', $.clickModal({
		message: "Do you really want to clear all the items from this tracker? (N.B. there is no undo and notifications will not be sent)",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Trackers",'admpage'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Trackers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
		<div class="form-group">
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create
			</a>
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'duplicate'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate
			</a>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import'),$_smarty_tpl);?>
">
							Import Structure
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_profile'),$_smarty_tpl);?>
">
							Import From Profile/YAML
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
						<li>
							<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
								Manage Tabular Formats
							</a>
						</li>
					<?php }?>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Manage Tabular Formats
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_remote_sync']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'clone_remote'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Clone remote
				</a>
			<?php }?>
		</div>
	<?php }?>

				
	<a id="view"></a>
	<?php if (($_smarty_tpl->tpl_vars['trackers']->value)||($_smarty_tpl->tpl_vars['find']->value)) {?>
		<?php /*  Call merged included template "find.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'trackername','filters'=>''), 0, '8958888745b67a603aaac18-58073505');
content_5b67a603be72d1_54597729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "find.tpl" */?>
		<?php if (($_smarty_tpl->tpl_vars['find']->value)&&($_smarty_tpl->tpl_vars['trackers']->value)) {?>
			<h4 class="find-results">Results <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['trackers']->value);?>
</span></h4>
		<?php }?>
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
		<table class="table table-condensed table-hover table-striped">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'items')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th></th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
?>
				<tr>
					<td class="id">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>

					</td>
					<td class="text">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"
						>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>

						</a>
						<div class="description help-block">
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['descriptionIsParsed']=='y') {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } else { ?>
								<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['description']));?>

							<?php }?>
						</div>
					</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker']->value['created']);?>
</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['tracker']->value['lastModif']);?>
</td>
					<td class="integer">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"
						>

								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['items']);?>


						</a>
					</td>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('tracker_actions', null, null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_tracker_fields.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'th-list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Fields"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>true),$_smarty_tpl);?>
"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'settings','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Properties"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->export_tracker) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Export"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Import"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'view','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'calendar','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Events"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch_event=tracker_modified&amp;objectType=tracker&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_tracker.php?trackerId=').($_smarty_tpl->tpl_vars['tracker']->value['trackerId']),"url");?>
"><?php echo smarty_function_icon(array('name'=>'watch-group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tracker']->value['permissions']->watch_trackers&&$_smarty_tpl->tpl_vars['user']->value) {
if ($_smarty_tpl->tpl_vars['tracker']->value['watched']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=stop"><?php echo smarty_function_icon(array('name'=>'stop-watching','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Stop monitoring"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=add"><?php echo smarty_function_icon(array('name'=>'watch','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'rss','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Feed"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-searchindex.php?filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'search','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Search"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'tracker','permType'=>'trackers','id'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tracker']->value['items']>0) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'clear','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
" class="clear confirm-prompt"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'remove','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
"class="remove confirm-prompt"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['tracker_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['tracker_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['tracker']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value) {?>
					<?php echo smarty_function_norecords(array('_colspan'=>6,'_text'=>"No records found with: ".((string)$_smarty_tpl->tpl_vars['find']->value)),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

				<?php }?>
			<?php } ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(document).on('click', '.remove.confirm-prompt', $.clickModal({
		message: "Do you really remove this tracker?",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
$(document).on('click', '.clear.confirm-prompt', $.clickModal({
		message: "Do you really want to clear all the items from this tracker? (N.B. there is no undo and notifications will not be sent)",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Trackers",'admpage'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Trackers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Trackers",'admpage'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
		<div class="form-group">
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create
			</a>
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'duplicate'),$_smarty_tpl);?>
">
				<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate
			</a>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import'),$_smarty_tpl);?>
">
							Import Structure
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_profile'),$_smarty_tpl);?>
">
							Import From Profile/YAML
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
						<li>
							<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
								Manage Tabular Formats
							</a>
						</li>
					<?php }?>
				</ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Manage Tabular Formats
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_remote_sync']=='y') {?>
				<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'clone_remote'),$_smarty_tpl);?>
">
					<?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Clone remote
				</a>
			<?php }?>
		</div>
	<?php }?>

				
	<a id="view"></a>
	<?php if (($_smarty_tpl->tpl_vars['trackers']->value)||($_smarty_tpl->tpl_vars['find']->value)) {?>
		<?php /*  Call merged included template "find.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'trackername','filters'=>''), 0, '8958888745b67a603aaac18-58073505');
content_5b67a603be72d1_54597729($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "find.tpl" */?>
		<?php if (($_smarty_tpl->tpl_vars['find']->value)&&($_smarty_tpl->tpl_vars['trackers']->value)) {?>
			<h4 class="find-results">Results <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['trackers']->value);?>
</span></h4>
		<?php }?>
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
		<table class="table table-condensed table-hover table-striped">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'trackerId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'items')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'items'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th></th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
?>
				<tr>
					<td class="id">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>

					</td>
					<td class="text">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"
						>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>

						</a>
						<div class="description help-block">
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['descriptionIsParsed']=='y') {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } else { ?>
								<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['description']));?>

							<?php }?>
						</div>
					</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker']->value['created']);?>
</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['tracker']->value['lastModif']);?>
</td>
					<td class="integer">
						<a
							class="tips"
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
:View"
							href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"
						>

								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['items']);?>


						</a>
					</td>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('tracker_actions', null, null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_tracker_fields.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'th-list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Fields"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>true),$_smarty_tpl);?>
"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'settings','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Properties"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->export_tracker) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'export','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Export"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'import','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Import"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a onclick="$('[data-toggle=popover]').popover('hide');"data-toggle="modal"data-backdrop="static"data-target="#bootstrap-modal"href="<?php echo smarty_function_service(array('controller'=>'tracker_todo','action'=>'view','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'modal'=>1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'calendar','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Events"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['tracker']->value['trackerId'],'tracker');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch_event=tracker_modified&amp;objectType=tracker&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_tracker.php?trackerId=').($_smarty_tpl->tpl_vars['tracker']->value['trackerId']),"url");?>
"><?php echo smarty_function_icon(array('name'=>'watch-group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tracker']->value['permissions']->watch_trackers&&$_smarty_tpl->tpl_vars['user']->value) {
if ($_smarty_tpl->tpl_vars['tracker']->value['watched']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=stop"><?php echo smarty_function_icon(array('name'=>'stop-watching','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Stop monitoring"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
&amp;watch=add"><?php echo smarty_function_icon(array('name'=>'watch','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_function_icon(array('name'=>'rss','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Feed"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-searchindex.php?filter~tracker_id=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['trackerId']);?>
"><?php echo smarty_function_icon(array('name'=>'search','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Search"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tracker']->value['permissions']->admin_trackers) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'tracker','permType'=>'trackers','id'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tracker']->value['items']>0) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'clear','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
" class="clear confirm-prompt"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'remove','trackerId'=>$_smarty_tpl->tpl_vars['tracker']->value['trackerId']),$_smarty_tpl);?>
"class="remove confirm-prompt"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['tracker_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['tracker_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['tracker']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value) {?>
					<?php echo smarty_function_norecords(array('_colspan'=>6,'_text'=>"No records found with: ".((string)$_smarty_tpl->tpl_vars['find']->value)),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

				<?php }?>
			<?php } ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(document).on('click', '.remove.confirm-prompt', $.clickModal({
		message: "Do you really remove this tracker?",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
$(document).on('click', '.clear.confirm-prompt', $.clickModal({
		message: "Do you really want to clear all the items from this tracker? (N.B. there is no undo and notifications will not be sent)",
		success: function (data) {
			history.go(0);	// reload
		}
	}));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 03:36:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\find.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67a603be72d1_54597729')) {function content_5b67a603be72d1_54597729($_smarty_tpl) {?><?php if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_function_html_select_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_date.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_function_html_select_duration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_duration.php';
?>



<div class="find clearfix margin-bottom-md">
	<form method="post" class="form form-horizontal" role="form">
	<?php if (!isset($_smarty_tpl->tpl_vars['map_only']->value)||$_smarty_tpl->tpl_vars['map_only']->value!='y') {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?><input type="hidden" name="filegals_manager" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);?>
"><?php }?>
		<?php echo smarty_function_query(array('_type'=>'form_input','maxRecords'=>'NULL','type'=>'NULL','types'=>'NULL','find'=>'NULL','topic'=>'NULL','lang'=>'NULL','exact_match'=>'NULL','categId'=>'NULL','cat_categories'=>'NULL','filegals_manager'=>'NULL','save'=>'NULL','offset'=>0,'searchlist'=>'NULL','searchmap'=>'NULL'),$_smarty_tpl);?>

		<div class="find-text form-group">
			<div class="col-xs-12">
				<div class="input-group">
					<span class="input-group-addon">
						
						<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

					</span>
					<input class="form-control" type="text" name="find" id="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
" placeholder="<?php if (empty($_smarty_tpl->tpl_vars['whatlabel']->value)) {?>Find...<?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['whatlabel']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_in']->value);?>
" data-html="true" data-toggle="focus">
					<?php if (isset($_smarty_tpl->tpl_vars['autocomplete']->value)) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#find").tiki("autocomplete", "<?php echo $_smarty_tpl->tpl_vars['autocomplete']->value;?>
");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						jQuery("#find").tooltip();
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['find']->value)||!empty($_smarty_tpl->tpl_vars['find_type']->value)||!empty($_smarty_tpl->tpl_vars['find_topic']->value)||!empty($_smarty_tpl->tpl_vars['find_lang']->value)||!empty($_smarty_tpl->tpl_vars['find_langOrphan']->value)||!empty($_smarty_tpl->tpl_vars['find_categId']->value)||!empty($_smarty_tpl->tpl_vars['find_orphans']->value)||!empty($_smarty_tpl->tpl_vars['find_other_val']->value)||$_smarty_tpl->tpl_vars['maxRecords']->value!=$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']) {?>
					<div class="find-clear-filter text-center">
						<a href="<?php echo smarty_modifier_escape($_SERVER['PHP_SELF']);?>
?<?php echo smarty_function_query(array('find'=>'','type'=>'','types'=>'','topic'=>'','lang'=>'','langOrphan'=>'','categId'=>'','maxRecords'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'find_from_Month'=>'','find_from_Day'=>'','find_from_Year'=>'','find_to_Month'=>'','find_to_Day'=>'','find_to_Year'=>''),$_smarty_tpl);?>
" title="Clear Filter" class="btn btn-link">Clear Filter</a>
					</div>
				<?php }?>
			</div>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&(!isset($_smarty_tpl->tpl_vars['types_tag']->value)||$_smarty_tpl->tpl_vars['types_tag']->value=='select')) {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Article Type
				</label>
				<div class="col-sm-8">
					<select name="type" class="findtypes form-control input-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_type']->value=='') {?>selected="selected"<?php }?>>any type</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_type']->value==$_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']) {?>selected="selected"<?php }?>>
								<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']));?>

							</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['topics']->value)) {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Article Topic
				</label>
				<div class="col-sm-8">
					<select name="topic" class="findtopics form-control input-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_topic']->value=='') {?>selected="selected"<?php }?>>any topic</option>
						<?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topic']->value['topicId']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_topic']->value==$_smarty_tpl->tpl_vars['topic']->value['topicId']) {?>selected="selected"<?php }?>>
								<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['topic']->value['name']));?>

							</option>
						<?php } ?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['find_show_languages']->value)&&$_smarty_tpl->tpl_vars['find_show_languages']->value=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Language
				</label>
				<div class="col-sm-8">
					<span class="findlang">
						<select name="lang" class="in form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['find_lang']->value=='') {?>selected="selected"<?php }?>>any language</option>
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
" <?php if ($_smarty_tpl->tpl_vars['find_lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</option>
							<?php endfor; endif; ?>
						</select>
						<?php if (isset($_smarty_tpl->tpl_vars['find_show_languages_excluded']->value)&&$_smarty_tpl->tpl_vars['find_show_languages_excluded']->value=='y') {?>
							<span>
								<label class="control-label">
									not in
								</label>
							</span>
							<span>
								<select name="langOrphan" class="notin form-control input-sm">
									<option value='' <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value=='') {?>selected="selected"<?php }?>></option>
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
" <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
											<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

										</option>
									<?php endfor; endif; ?>
								</select>
							</span>
						<?php }?>
					</span>
				</div>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['find_show_date_range']->value)&&$_smarty_tpl->tpl_vars['find_show_date_range']->value=='y') {?>
			<div class="form-group findDateFrom">
				<label class="text-right col-sm-4">
					Date From
				</label>
				<div class="col-sm-8">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_from']->value,'prefix'=>"find_from_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group findDateTo">
				<label class="text-right col-sm-4">
					Date To
				</label>
				<div class="col-sm-8">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_to']->value,'prefix'=>"find_to_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<?php if (((isset($_smarty_tpl->tpl_vars['find_show_categories']->value)&&$_smarty_tpl->tpl_vars['find_show_categories']->value=='y')||(isset($_smarty_tpl->tpl_vars['find_show_categories_multi']->value)&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'))&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>
			<div class="form-group category_find">
				<?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='n'||$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value<=1) {?>
					<label class="col-sm-4 control-label">
						Category
					</label>
					<div id="category_singleselect_find" class="col-sm-8">
						<select name="categId" class="findcateg form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['find_categId']->value=='') {?>selected="selected"<?php }?>>any category</option>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['identifier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['identifier']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['find_categId']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?>selected="selected"<?php }?>>
									<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['category']->value['categpath']));?>

								</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y') {?>
							<a href="#category_select_find_type" onclick="show('category_multiselect_find');hide('category_singleselect_find');javascript:document.getElementById('category_select_find_type').value='y';">
								Multiple select
							</a>
						<?php }?>
						<input id="category_select_find_type" name="find_show_categories_multi" value="n" type="hidden">
					</div>
				<?php }?>
				<div id="category_multiselect_find" class="col-sm-8 col-sm-offset-4" style="display: <?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'&&$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value>1) {?>block<?php } else { ?>none<?php }?>;">
					<div class="multiselect">
						<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
							<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

							<div class="clearfix">
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
									<div class="pull-right">
										<a href="tiki-admin_categories.php" class="link">
											Admin Categories <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
									</div>
								<?php }?>
								<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

						<?php } else { ?>
							<div class="clearfix">
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
									<div class="pull-right">
										<a href="tiki-admin_categories.php" class="link">
											Admin Categories <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
									</div>
								<?php }?>
								No categories defined
						<?php }?>
							</div> 
					</div> 
				</div> 
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&isset($_smarty_tpl->tpl_vars['types_tag']->value)&&$_smarty_tpl->tpl_vars['types_tag']->value=='checkbox') {?>
			<div class="form-group findtypes text-center">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<label class="checkbox-inline">
						<input type="checkbox" name="types[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if (is_array($_smarty_tpl->tpl_vars['find_type']->value)&&in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['find_type']->value)) {?>checked="checked"<?php }?>> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</label>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)) {?>
			<div class="form-group findfilter">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<label class="control-label col-sm-4">
						<?php echo $_smarty_tpl->tpl_vars['filter_names']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					</label>
					<div class="col-sm-8">
						<select name="findfilter_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]=='') {?>selected="selected"<?php }?>>--</option>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['key2']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_durations']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['duration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duration']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['find_durations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duration']->key => $_smarty_tpl->tpl_vars['duration']->value) {
$_smarty_tpl->tpl_vars['duration']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['duration']->key;
?>
				<div class="form-group">
				<label class="find_duration control-label col-sm-6">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['duration']->value['label'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<div class="col-sm-6">
					<?php echo smarty_function_html_select_duration(array('prefix'=>$_smarty_tpl->tpl_vars['duration']->value['prefix'],'default'=>$_smarty_tpl->tpl_vars['duration']->value['default'],'default_unit'=>$_smarty_tpl->tpl_vars['duration']->value['default_unit']),$_smarty_tpl);?>

				</div>
				</div>
			<?php } ?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['show_find_orphans']->value)&&$_smarty_tpl->tpl_vars['show_find_orphans']->value=='y') {?>
			<div class="form-group find-orphans" style="margin-top: -15px;">
				<div class="checkbox col-sm-push-4">
					<label class="find_orphans control-label" style="padding-left: 0; font-weight: bold;" for="find_orphans">
						Orphans
						<input type="checkbox" style="margin-left: 30px;" name="find_orphans" id="find_orphans" <?php if (isset($_smarty_tpl->tpl_vars['find_orphans']->value)&&$_smarty_tpl->tpl_vars['find_orphans']->value=='y') {?>checked="checked"<?php }?>>
					</label>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_other']->value)) {?>
			<div class="form-group find-other">
				<label class="find_other control-label col-sm-6" for="find_other">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['find_other']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<div class="col-sm-6">
					<input type="text" name="find_other" id="find_other" value="<?php if (!empty($_smarty_tpl->tpl_vars['find_other_val']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_other_val']->value);
}?>" class="form-control input-sm">
				</div>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['find_show_num_rows']->value)&&$_smarty_tpl->tpl_vars['find_show_num_rows']->value=='y') {?>
			<div class="form-group findnumrows">
				<label class="control-label col-sm-6" for="findnumrows">
					Displayed rows
				</label>
				<div class="col-sm-6">
					<input type="text" name="maxRecords" id="findnumrows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRecords']->value);?>
" size="3" class="form-control input-sm">
				</div>
			</div>
		<?php }?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)&&$_smarty_tpl->tpl_vars['gmapbuttons']->value) {?>
	<div class="find-map form-group">
		<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?>
			<input class="btn btn-default btn-sm" type="submit" name="searchlist" value="Hide Map">
			<input type="hidden" name="mapview" value="y">
		<?php } else { ?>
			<input type="submit" class="btn btn-default btn-sm" name="searchmap" value="Show Map">
			<input type="hidden" name="mapview" value="n">
		<?php }?>
	</div>
	<?php }?>
		<button type="submit" class="btn btn-default" style="text-align: right" name="search">Find</button>
	</form>
</div>
<!-- End of find -->
<?php }} ?>
