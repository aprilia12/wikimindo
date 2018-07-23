<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:51:55
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_calendars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19296866865b51a2abaeb438-81147542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9ffe85424299ef3de5291332b8186485be1a92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_calendars.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19296866865b51a2abaeb438-81147542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calendarId' => 0,
    'tiki_p_admin_calendar' => 0,
    'prefs' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'calendars' => 0,
    'id' => 0,
    'cal' => 0,
    'libeg' => 0,
    'liend' => 0,
    'js' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'edtab' => 0,
    'tiki_p_modify_object_categories' => 0,
    'name' => 0,
    'show_calname' => 0,
    'description' => 0,
    'show_description' => 0,
    'customlocations' => 0,
    'show_location' => 0,
    'customparticipants' => 0,
    'show_participants' => 0,
    'customcategories' => 0,
    'show_category' => 0,
    'customlanguages' => 0,
    'show_language' => 0,
    'customurl' => 0,
    'show_url' => 0,
    'customsubscription' => 0,
    'custompriorities' => 0,
    'personal' => 0,
    'info' => 0,
    'use_24hr_clock' => 0,
    'days_names' => 0,
    'customColors' => 0,
    'customfgcolor' => 0,
    'custombgcolor' => 0,
    'eventstatus' => 0,
    'defaulteventstatus' => 0,
    'groupforAlertList' => 0,
    'k' => 0,
    'i' => 0,
    'showeachuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a2abc75d00_80827753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a2abc75d00_80827753')) {function content_5b51a2abc75d00_80827753($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_modifier_yesno')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.yesno.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_html_select_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_time.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['calendarId']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>'Calendar','url'=>"tiki-admin_calendars.php?calendarId=".((string)$_smarty_tpl->tpl_vars['calendarId']->value),'admpage'=>"calendar")); $_block_repeat=true; echo smarty_block_title(array('help'=>'Calendar','url'=>"tiki-admin_calendars.php?calendarId=".((string)$_smarty_tpl->tpl_vars['calendarId']->value),'admpage'=>"calendar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Calendars<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>'Calendar','url'=>"tiki-admin_calendars.php?calendarId=".((string)$_smarty_tpl->tpl_vars['calendarId']->value),'admpage'=>"calendar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>'Calendar','url'=>"tiki-admin_calendars.php",'admpage'=>"calendar")); $_block_repeat=true; echo smarty_block_title(array('help'=>'Calendar','url'=>"tiki-admin_calendars.php",'admpage'=>"calendar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Calendars<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>'Calendar','url'=>"tiki-admin_calendars.php",'admpage'=>"calendar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="t_navbar margin-bottom-md">
	<?php if (!empty($_smarty_tpl->tpl_vars['calendarId']->value)&&$_smarty_tpl->tpl_vars['tiki_p_admin_calendar']->value=='y') {?>
		<a role="link" href="tiki-admin_calendars.php?cookietab=2" class="btn btn-link">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create Calendar
		</a>
	<?php }?>
	<a role="link" href="tiki-calendar.php" class="btn btn-link">
		<?php echo smarty_function_icon(array('name'=>"view"),$_smarty_tpl);?>
 View Calendars
	</a>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_calendar']->value=='y') {?>
		<a role="link" href="tiki-calendar_import.php" class="btn btn-link">
			<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
		</a>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admin_calendars')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admin_calendars'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Calendars")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Calendars"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Calendars</h2>

		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_in'=>"<ul><li>Calendar name</li></ul>"), 0);?>

		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='calendarId_desc') {?>calendarId_asc<?php } else { ?>calendarId_desc<?php }?>">
						ID
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">
						Name
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='customlocations_desc') {?>customlocations_asc<?php } else { ?>customlocations_desc<?php }?>">
						Location
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='customparticipants_desc') {?>customparticipants_asc<?php } else { ?>customparticipants_desc<?php }?>">
						Participants
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='customcategories_desc') {?>customcategories_asc<?php } else { ?>customcategories_desc<?php }?>">
						Classification
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='customlanguages_desc') {?>customlanguages_asc<?php } else { ?>customlanguages_desc<?php }?>">
						Language
					</a>
				</th>
				<th>URL</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='custompriorities_desc') {?>custompriorities_asc<?php } else { ?>custompriorities_desc<?php }?>">
						Priority
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='customsubscription_desc') {?>customsubscription_asc<?php } else { ?>customsubscription_desc<?php }?>">
						Subscription
					</a>
				</th>
				<th>
					<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='personal_desc') {?>personal_asc<?php } else { ?>personal_desc<?php }?>">
						Personal
					</a>
				</th>
				<th></th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['cal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cal']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calendars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cal']->key => $_smarty_tpl->tpl_vars['cal']->value) {
$_smarty_tpl->tpl_vars['cal']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['cal']->key;
?>
				<tr>
					<td class="id"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
					<td class="text">
						<a class="tablename" href="tiki-admin_calendars.php?calendarId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&cookietab=2" title="Edit"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cal']->value['name']);?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['cal']->value['show_calname']=='y') {?> <?php echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Name:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text">
						<?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customlocations']);
if ($_smarty_tpl->tpl_vars['cal']->value['show_location']=='y') {
echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Custom location:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text">
						<?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customparticipants']);
if ($_smarty_tpl->tpl_vars['cal']->value['show_participants']=='y') {
echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Custom participants:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text">
						<?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customcategories']);
if ($_smarty_tpl->tpl_vars['cal']->value['show_category']=='y') {
echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Custom categories:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text">
						<?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customlanguages']);
if ($_smarty_tpl->tpl_vars['cal']->value['show_language']=='y') {
echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Custom languages:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text">
						<?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customurl']);
if ($_smarty_tpl->tpl_vars['cal']->value['show_url']=='y') {
echo smarty_function_icon(array('name'=>"list-alt",'class'=>"tips",'title'=>"Custom URL:Field will show in popup"),$_smarty_tpl);
}?>
					</td>
					<td class="text"><?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['custompriorities']);?>
</td>
					<td class="text"><?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['customsubscription']);?>
</td>
					<td class="text"><?php echo smarty_modifier_yesno($_smarty_tpl->tpl_vars['cal']->value['personal']);?>
</td>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('admin_calendar_actions', null, null); ob_start(); ?>
							<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;calendarId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&cookietab=2"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-calendar.php?calIds[]=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-calendar_edit_item.php?calendarId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_function_icon(array('name'=>'create','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Add event"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'calendar','id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['cal']->value['name']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_calendars.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;drop=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;calendarId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['admin_calendar_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['admin_calendar_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['cal']->_loop) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>12),$_smarty_tpl);?>

			<?php } ?>
		</table>
		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Calendars"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['calendarId']->value>0) {?>
		<?php $_smarty_tpl->tpl_vars["edtab"] = new Smarty_variable("Edit Calendar", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars["edtab"] = new Smarty_variable("Create Calendar", null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['edtab']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['edtab']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2><?php echo $_smarty_tpl->tpl_vars['edtab']->value;?>
</h2>

		<form action="tiki-admin_calendars.php" method="post" class="form-horizontal" role="form">
			<fieldset>
			<input type="hidden" name="calendarId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['calendarId']->value);?>
">
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y') {?>
				<div class="form-group">
					<div class="col-sm-12">
						<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="calendarName">
					Name
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="name" id="calendarName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
				</div>
				<div class="checkbox col-sm-3">
					<label for="showCalnamePopup">
						<input type="checkbox" name="show[calname]" id="showCalnamePopup" value="on"<?php if ($_smarty_tpl->tpl_vars['show_calname']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="calendarDescription">
					Description
				</label>
				<div class="col-sm-6">
					<textarea name="description" rows="5" wrap="virtual" class="form-control" id="calendarDescription">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>

					</textarea>
				</div>
				<div class="checkbox col-sm-3">
					<label for="showCalDescriptionPopup" class="control-label">
						<input type="checkbox" id="showCalDescriptionPopup" name="show[description]" value="on"<?php if ($_smarty_tpl->tpl_vars['show_description']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customlocations">
					Custom location
				</label>
				<div class="col-sm-2">
					<select name="customlocations" id="customlocations" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['customlocations']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['customlocations']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
				<div class="checkbox col-sm-3">
					<label>
						<input type="checkbox" name="show[location]" id="showCustomLocationsPopup" value="on"<?php if ($_smarty_tpl->tpl_vars['show_location']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customparticipants">
					Custom participants
				</label>
				<div class="col-sm-2">
					<select name="customparticipants" id="customparticipants" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['customparticipants']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['customparticipants']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
				<div class="checkbox col-sm-3">
					<label>
						<input type="checkbox" name="show[participants]" value="on"<?php if ($_smarty_tpl->tpl_vars['show_participants']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customcategories">
					Custom classification
				</label>
				<div class="col-sm-2">
					<select name="customcategories" id="customcategories" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['customcategories']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['customcategories']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
				<div class="checkbox col-sm-3">
					<label>
						<input type="checkbox" name="show[category]" value="on"<?php if ($_smarty_tpl->tpl_vars['show_category']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customlanguages">
					Custom language
				</label>
				<div class="col-sm-2">
					<select name="customlanguages" id="customlanguages" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['customlanguages']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['customlanguages']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
				<div class="checkbox col-sm-3">
					<label for="showlanguagepopup">
						<input type="checkbox" name="show[language]" id="showlanguagepopup" value="on"<?php if ($_smarty_tpl->tpl_vars['show_language']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customurl">
					Custom URL
				</label>
				<div class="col-sm-2">
					<select name="options[customurl]" id="customurl" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['customurl']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['customurl']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
				<div class="checkbox col-sm-3">
					<label for="showurlpopup" class="control-label">
						<input type="checkbox" id="showurlpopup" name="show[url]" value="on"<?php if ($_smarty_tpl->tpl_vars['show_url']->value=='y') {?> checked="checked"<?php }?>>
						Show in popup box
					</label>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_newsletters']=='y') {?>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="customsubscription">
						Custom subscription list
					</label>
					<div class="col-sm-2">
						<select name="customsubscription" id="customsubscription" class="form-control">
							<option value='y' <?php if ($_smarty_tpl->tpl_vars['customsubscription']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
							<option value='n' <?php if ($_smarty_tpl->tpl_vars['customsubscription']->value=='n') {?>selected="selected"<?php }?>>No</option>
						</select>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="custompriorities">
					Custom priority
				</label>
				<div class="col-sm-2">
					<select name="custompriorities" id="custompriorities" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['custompriorities']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['custompriorities']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="personal">
					Personal Calendar
				</label>
				<div class="col-sm-2">
					<select name="personal" id="personal" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['personal']->value=='y') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['personal']->value=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customcategories">
					Start of day
				</label>
				<div class="col-sm-2">
					<?php echo smarty_function_html_select_time(array('prefix'=>"startday_",'time'=>$_smarty_tpl->tpl_vars['info']->value['startday'],'display_minutes'=>false,'display_seconds'=>false,'use_24_hours'=>$_smarty_tpl->tpl_vars['use_24hr_clock']->value),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customcategories">
					End of day
				</label>
				<div class="col-sm-9">
					<?php echo smarty_function_html_select_time(array('prefix'=>"endday_",'time'=>$_smarty_tpl->tpl_vars['info']->value['endday'],'display_minutes'=>false,'display_seconds'=>false,'use_24_hours'=>$_smarty_tpl->tpl_vars['use_24hr_clock']->value),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customcategories">
					Days to display
				</label>
				<div class="col-sm-9">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['name'] = "viewdays";
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["viewdays"]['total']);
?>
					<div class="checkbox-inline">
						<label class="control-label"><input type="checkbox" name="viewdays[]" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['viewdays']['index'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['viewdays'])&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['viewdays']['index'],$_smarty_tpl->tpl_vars['info']->value['viewdays'])) {?> checked="checked" <?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['days_names']->value[$_smarty_tpl->getVariable('smarty')->value['section']['viewdays']['index']];?>

						</label>
					</div>
					<?php endfor; endif; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customcategories">
					Standard color
				</label>
				<div class="col-sm-2">
					<select class="form-control" id="customcategories" name="options[customcolors]" onChange="javascript:document.getElementById('fgColorField').disabled=(this.options[this.selectedIndex].value != 0);document.getElementById('bgColorField').disabled=(this.options[this.selectedIndex].value != 0);">
						<option value="" />
						<option value="008400-99fa99" style="background-color:#99fa99;color:#008400" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='008400-99fa99') {?>selected<?php }?>>Green</option>
						<option value="3333ff-aaccff" style="background-color:#aaccff;color:#3333ff" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='3333ff-aaccff') {?>selected<?php }?>>Blue</option>
						<option value="996699-c2a6d2" style="background-color:#e0cae5;color:#996699" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='996699-c2a6d2') {?>selected<?php }?>>Purple</option>
						<option value="cc0000-ff9966" style="background-color:#ff9966;color:#cc0000" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='cc0000-ff9966') {?>selected<?php }?>>Red</option>
						<option value="996600-ffcc66" style="background-color:#ffcc66;color:#996600" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='996600-ffcc66') {?>selected<?php }?>>Orange</option>
						<option value="666600-ffff00" style="background-color:#ffff00;color:#666600" <?php if (($_smarty_tpl->tpl_vars['customColors']->value)=='666600-ffff00') {?>selected<?php }?>>Yellow</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="fgColorField">
					Custom foreground color
				</label>
				<div class="col-sm-9">
					<input id="fgColorField" type="text" name="options[customfgcolor]" value="<?php echo $_smarty_tpl->tpl_vars['customfgcolor']->value;?>
" size="6"> <i>Example: FFFFFF</i>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="bgColorField">
					Custom background color
				</label>
				<div class="col-sm-9">
					<input id="bgColorField" type="text" name="options[custombgcolor]" value="<?php echo $_smarty_tpl->tpl_vars['custombgcolor']->value;?>
" size="6"> <i>Example: 000000</i>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="customstatus">
					Status
				</label>
				<div class="col-sm-2">
					<select name="customstatus" id="customstatus" class="form-control">
						<option value='y' <?php if ($_smarty_tpl->tpl_vars['info']->value['customstatus']!='n') {?>selected="selected"<?php }?>>Yes</option>
						<option value='n' <?php if ($_smarty_tpl->tpl_vars['info']->value['customstatus']=='n') {?>selected="selected"<?php }?>>No</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">
					Default event status:
				</label>
				<div class="col-sm-3">
					<?php echo smarty_function_html_options(array('class'=>"form-control",'name'=>'options[defaulteventstatus]','options'=>$_smarty_tpl->tpl_vars['eventstatus']->value,'selected'=>$_smarty_tpl->tpl_vars['defaulteventstatus']->value),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-sm-4 col-sm-offset-3">
					<label class="control-label">
						<input type="checkbox" name="show[status]" value="on"<?php if ($_smarty_tpl->tpl_vars['info']->value['show_status']=='y') {?> checked="checked"<?php }?>>
						Show in popup view
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox col-sm-4 col-sm-offset-3">
					<label class="control-label">
						<input type="checkbox" name="show[status_calview]" value="on"<?php if ($_smarty_tpl->tpl_vars['info']->value['show_status_calview']!='n') {?> checked="checked"<?php }?>>
						Show in calendar view
					</label>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_groupalert']=='y') {?>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="groupforAlert">
						Group of users alerted when calendar event is modified
					</label>
					<div class="col-sm-2">
						<select id="groupforAlert" name="groupforAlert" class="form-control">
							<option value="">&nbsp;</option>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupforAlertList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="showeachuser">
						Allows each user to be selected for small groups
					</label>
					<div class="col-sm-2">
						<input type="checkbox" name="showeachuser" id="showeachuser" <?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y') {?>checked="checked"<?php }?>>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="allday">
					Default length of events is all day
				</label>
				<div class="col-sm-9">
					<input type="checkbox" id="allday" name="allday"<?php if ($_smarty_tpl->tpl_vars['info']->value['allday']=='y') {?> checked="checked"<?php }?>>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="nameoneachday">
					Event name on each day in calendar view
				</label>
				<div class="col-sm-9">
					<input type="checkbox" name="nameoneachday"<?php if ($_smarty_tpl->tpl_vars['info']->value['nameoneachday']=='y') {?> checked="checked"<?php }?>>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary col-sm-offset-3" name="save" value="Save">
			</div>
			</fieldset>
			<fieldset>
				<legend>Delete old events</legend>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="days">
						Delete events older than:
					</label>
					<div class="col-sm-2 input-group">
						<input type="text" name="days" id="days" value="0" class="form-control">
						<span class="input-group-addon">
							days
						</span>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-warning col-sm-offset-3" name="clean" value="Delete">				</div>
			</fieldset>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['edtab']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admin_calendars'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
