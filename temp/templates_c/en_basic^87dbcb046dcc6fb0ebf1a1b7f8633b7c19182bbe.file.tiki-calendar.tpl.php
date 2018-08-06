<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 06:18:52
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19917041655b63d7ac94acf2-15452895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87dbcb046dcc6fb0ebf1a1b7f8633b7c19182bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-calendar.tpl',
      1 => 1506406930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19917041655b63d7ac94acf2-15452895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayedcals' => 0,
    'x' => 0,
    'infocals' => 0,
    'prefs' => 0,
    'js' => 0,
    'user' => 0,
    'user_watching' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_calendar' => 0,
    'tiki_p_add_events' => 0,
    'tiki_p_view_events' => 0,
    'viewlist' => 0,
    'listcals' => 0,
    'thiscal' => 0,
    'checkedCals' => 0,
    'maxCalsForButton' => 0,
    'k' => 0,
    'thiscustombgcolor' => 0,
    'thiscustomfgcolor' => 0,
    'thisinfocalsname' => 0,
    'myurl' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'focusdate' => 0,
    'exportUrl' => 0,
    'iCalAdvParamsUrl' => 0,
    'viewmode' => 0,
    'timeFormat' => 0,
    'viewyear' => 0,
    'viewmonth' => 0,
    'viewday' => 0,
    'minHourOfDay' => 0,
    'maxHourOfDay' => 0,
    'firstDayofWeek' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63d7aca391a3_18725009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63d7aca391a3_18725009')) {function content_5b63d7aca391a3_18725009($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_jscalendar')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.jscalendar.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_js_insert_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.js_insert_icon.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"calendar")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"calendar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1) {?>
		Calendar: <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_variable($_smarty_tpl->tpl_vars['displayedcals']->value[0], null, 0);
echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['x']->value]['name'];?>

	<?php } else { ?>
		Calendar
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"calendar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
<?php }?>

<div id="calscreen">
	<div class="t_navbar margin-bottom-md">
		<div class="btn-group pull-right">
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
				<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li class="dropdown-title">
					Monitoring
				</li>
				<li class="divider"></li>
				<?php if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1&&$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['user_watching']->value=='y') {?>
							<a href="tiki-calendar.php?watch_event=calendar_changed&amp;watch_action=remove" hspace="1">
								<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring
							</a>
						<?php } else { ?>
							<a href="tiki-calendar.php?watch_event=calendar_changed&amp;watch_action=add" hspace="1">
								<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor
							</a>
						<?php }?>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1&&$_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
					<li>
						<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['displayedcals']->value[0],"url");?>
&amp;watch_event=calendar_changed&amp;objectType=calendar&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['x']->value]['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-calendar.php?calIds[]=').($_smarty_tpl->tpl_vars['displayedcals']->value[0]),"url");?>
" hspace="1">
							<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group Monitor
						</a>
					</li>
				<?php }?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_calendar']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
			<?php if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-admin_calendars.php?calendarId=".((string)$_smarty_tpl->tpl_vars['displayedcals']->value[0]),'_type'=>"link",'_text'=>"Edit",'_icon_name'=>"edit"),$_smarty_tpl);?>

			<?php }?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_calendars.php?cookietab=1",'_type'=>"link",'_text'=>"Admin",'_icon_name'=>"admin"),$_smarty_tpl);?>

		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-calendar_edit_item.php",'_type'=>"link",'_text'=>"Add Event",'_icon_name'=>"create"),$_smarty_tpl);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_events']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['calendar_export']=='y') {?>
			<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"toggle('exportcal');return false;",'_text'=>"Export",'_icon_name'=>"import"),$_smarty_tpl);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('href', null, null); ob_start(); ?>?viewlist=table<?php if ($_REQUEST['todate']) {?>&amp;todate=<?php echo $_REQUEST['todate'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php echo smarty_function_button(array('href'=>Smarty::$_smarty_vars['capture']['href'],'_text'=>"Calendar View",'_icon_name'=>"calendar"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('href', null, null); ob_start(); ?>?viewlist=list<?php if ($_REQUEST['todate']) {?>&amp;todate=<?php echo $_REQUEST['todate'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php echo smarty_function_button(array('href'=>Smarty::$_smarty_vars['capture']['href'],'_text'=>"List View",'_icon_name'=>"list"),$_smarty_tpl);?>

		<?php }?>

		<?php if (count($_smarty_tpl->tpl_vars['listcals']->value)>=1) {?>
			<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"toggle('filtercal');return false;",'_text'=>"Visible Calendars",'_icon_name'=>"eye"),$_smarty_tpl);?>


			<?php if (count($_smarty_tpl->tpl_vars['thiscal']->value)) {?>
				<div id="configlinks" class="form-group text-right">
					<?php $_smarty_tpl->tpl_vars['maxCalsForButton'] = new Smarty_variable(20, null, 0);?>
					<?php if (count($_smarty_tpl->tpl_vars['checkedCals']->value)>$_smarty_tpl->tpl_vars['maxCalsForButton']->value) {?><select size="5"><?php }?>
					<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listcals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['thiscal']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
							<?php $_smarty_tpl->tpl_vars['thiscustombgcolor'] = new Smarty_variable($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['k']->value]['custombgcolor'], null, 0);?>
							<?php $_smarty_tpl->tpl_vars['thiscustomfgcolor'] = new Smarty_variable($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['k']->value]['customfgcolor'], null, 0);?>
							<?php $_smarty_tpl->tpl_vars['thisinfocalsname'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['k']->value]['name']), null, 0);?>
							<?php if (count($_smarty_tpl->tpl_vars['checkedCals']->value)>$_smarty_tpl->tpl_vars['maxCalsForButton']->value) {?>
								<option style="background:#<?php echo $_smarty_tpl->tpl_vars['thiscustombgcolor']->value;?>
;color:#<?php echo $_smarty_tpl->tpl_vars['thiscustomfgcolor']->value;?>
;" onclick="toggle('filtercal')"><?php echo $_smarty_tpl->tpl_vars['thisinfocalsname']->value;?>
</option>
							<?php } else { ?>
								<?php echo smarty_function_button(array('href'=>"#",'_style'=>"background:#".((string)$_smarty_tpl->tpl_vars['thiscustombgcolor']->value).";color:#".((string)$_smarty_tpl->tpl_vars['thiscustomfgcolor']->value).";border:1px solid #".((string)$_smarty_tpl->tpl_vars['thiscustomfgcolor']->value).";",'_onclick'=>"toggle('filtercal');return false;",'_text'=>((string)$_smarty_tpl->tpl_vars['thisinfocalsname']->value)),$_smarty_tpl);?>

							<?php }?>
						<?php }?>
					<?php } ?>
					<?php if (count($_smarty_tpl->tpl_vars['checkedCals']->value)>$_smarty_tpl->tpl_vars['maxCalsForButton']->value) {?></select><?php }?>
				</div>
			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>'','_style'=>"background-color:#fff;padding:0 4px;",'_text'=>"None"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jscalendar']=='y') {?>
			<div class="jscalrow" style="display: inline-block">
				<form action="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
" method="post" name="f">
					<?php echo smarty_function_jscalendar(array('date'=>((string)$_smarty_tpl->tpl_vars['focusdate']->value),'id'=>"trig",'goto'=>((string)$_smarty_tpl->tpl_vars['jscal_url']->value),'align'=>"Bc"),$_smarty_tpl);?>

				</form>
			</div>
		<?php }?>




	<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y') {?>
	<div class="categbar">
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
			<?php $_smarty_tpl->tpl_vars['thiswatchingcateg'] = new Smarty_variable($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'], null, 0);?>
			<?php echo smarty_function_button(array('href'=>"tiki-browse_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['thiswatchingcateg']->value),'_text'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'])),$_smarty_tpl);?>

			&nbsp;
		<?php endfor; endif; ?>
	</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['listcals']->value)>=1) {?>
		<form class="modal-content" id="filtercal" method="get" action="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
" name="f" style="display:none;">
			<div class="modal-header caltitle">Group Calendars</div>
			<div class="modal-body">
				<div class="caltoggle">
					<?php echo smarty_function_select_all(array('checkbox_names'=>'calIds[]','label'=>"Check / Uncheck All"),$_smarty_tpl);?>

				</div>
				<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listcals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
					<div class="calcheckbox">
						<input type="checkbox" name="calIds[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" id="groupcal_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['thiscal']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>checked="checked"<?php }?>>
						<label for="groupcal_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="calId<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['k']->value]['name']);?>
 (id #<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)</label>
					</div>
				<?php } ?>
				<div class="calinput">
					<input type="hidden" name="todate" value="<?php echo $_smarty_tpl->tpl_vars['focusdate']->value;?>
">
					<input type="submit" class="btn btn-default btn-sm" name="refresh" value="Refresh">
				</div>
			</div>
		</form>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_events']->value=='y') {?>
		<form id="exportcal" class="modal-content" method="post" action="<?php echo $_smarty_tpl->tpl_vars['exportUrl']->value;?>
" name="f" style="display:none;">
			<input type="hidden" name="export" value="y">
			<div class="caltitle">Export calendars</div>
			<div class="caltoggle">
				<?php echo smarty_function_select_all(array('checkbox_names'=>'calendarIds[]','label'=>"Check / Uncheck All"),$_smarty_tpl);?>

			</div>
			<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listcals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
				<div class="calcheckbox">
					<input type="checkbox" name="calendarIds[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" id="groupcal_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['thiscal']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>checked="checked"<?php }?>>
					<label for="groupcal_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="calId<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['k']->value]['name']);?>
</label>
				</div>
			<?php } ?>
			<div class="calcheckbox">
				<a href="<?php echo $_smarty_tpl->tpl_vars['iCalAdvParamsUrl']->value;?>
">advanced parameters</a>
			</div>
			<div class="calinput">
				<input type="submit" class="btn btn-default btn-sm" name="ical" value="Export as iCal">
				<input type="submit" class="btn btn-default btn-sm" name="csv" value="Export as CSV">
			</div>
		</form>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['display_12hr_clock']=='y') {?>
		<?php $_smarty_tpl->tpl_vars["timeFormat"] = new Smarty_variable("h(:mm)TT", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars["timeFormat"] = new Smarty_variable("HH:mm", null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_fullcalendar']!='y'||$_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_listmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['viewmode']->value=='day') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_daymode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['viewmode']->value=='week') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_weekmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_calmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('#calendar').fullCalendar({
				timeFormat: {
					'': '<?php echo $_smarty_tpl->tpl_vars['timeFormat']->value;?>
'
				},
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: true,
				events: 'tiki-calendar_json.php',
				year: <?php echo $_smarty_tpl->tpl_vars['viewyear']->value;?>
,
				month: <?php echo $_smarty_tpl->tpl_vars['viewmonth']->value;?>
-1,
				day: <?php echo $_smarty_tpl->tpl_vars['viewday']->value;?>
,
				minTime: <?php echo $_smarty_tpl->tpl_vars['minHourOfDay']->value;?>
,
				maxTime: <?php echo $_smarty_tpl->tpl_vars['maxHourOfDay']->value;?>
,
				monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				monthNamesShort: [ "Jan.", "Feb.", "Mar.", "Apr.", "May", "June", "July", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."],
				dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
				dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
				buttonText: {
					today: "today",
					month: "month",
					week: "week",
					day: "day"
				},
				allDayText: "all-day",
				firstDay: <?php echo $_smarty_tpl->tpl_vars['firstDayofWeek']->value;?>
,
				slotMinutes: <?php echo $_smarty_tpl->tpl_vars['prefs']->value['calendar_timespan'];?>
,
				defaultView: <?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_view_mode']==='week') {?>'agendaWeek'<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['calendar_view_mode']==='day') {?>'agendaDay'<?php } else { ?>'month'<?php }?>,
				eventAfterRender : function( event, element, view ) {
					element.attr('title',event.title);
					element.data('content', event.description);
					element.popover({ trigger: 'hover', html: true, 'container': 'body' });
				},
				eventClick: function(event) {
					if (event.url && event.editable) {
						var $this = $(this).tikiModal(" ");
						$.ajax({
							dataType: 'html',
							url: event.url + '&isModal=1',
							success: function(data){
								var $dialog = $( "#calendar_dialog" ).remove()
								$( "#calendar_dialog_content", $dialog ).html(data);
								$( "#calendar_dialog h1, #calendar_dialog .navbar", $dialog ).remove();
								$( "#calendar_dialog .modal-title", $dialog ).html(event.title);
								$dialog.appendTo("body").modal({backdrop:"static"});
								$this.tikiModal();
							}
						});
			//						$('#calendar_dialog').load(event.url + ' .wikitext');
			//						$( "#calendar_dialog" ).dialog({ modal: true, title: event.title, width: 'auto', height: 'auto', position: 'center' });
						return false;
					}
				},
				dayClick: function(date, allDay, jsEvent, view) {
					$.ajax({
						dataType: 'html',
						url: 'tiki-calendar_edit_item.php?fullcalendar=y&todate=' + date.getTime()/1000 + '&tzoffset=' + (new Date()).getTimezoneOffset() + '&isModal=1',
						success: function(data){
							var $dialog = $( "#calendar_dialog" ).remove()
							$( "#calendar_dialog_content", $dialog ).html(data);
							$( "#calendar_dialog h1, #calendar_dialog .navbar", $dialog ).remove();
							$( "#calendar_dialog .modal-title", $dialog ).html(event.title);
							$dialog.appendTo("body").modal({backdrop:"static"});
						}
					});
					return false;
				},
				eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
					$.post($.service('calendar', 'resize'), {
						calitemId: event.id,
						delta: (dayDelta*86400+minuteDelta*60)
					});
				},
				eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
					$.post($.service('calendar', 'move'), {
						calitemId: event.id,
						delta: (dayDelta*86400+minuteDelta*60)
					});
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<style type='text/css'>
			#calendar {
				width: 90%;
				margin: 0 auto;
			}
			/* Fix pb with DatePicker */
			.ui-datepicker {
				z-index:9999 !important;
			}
		</style>
		<div id='calendar'></div>

		<!--<div id='calendar_dialog'></div>-->

		<div id="calendar_dialog" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content" id="calendar_dialog_content">
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	<?php }?>
	<p>&nbsp;</p>
</div>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jscalendar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
	<?php echo smarty_function_js_insert_icon(array('type'=>"jscalendar"),$_smarty_tpl);?>

<?php }?><?php }} ?>
