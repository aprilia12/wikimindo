<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 06:21:51
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8724782025b63d85f44a8b0-67757703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94466fcd1d0205e7164b9fbe96c669260ee73e1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_calendar.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8724782025b63d85f44a8b0-67757703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63d85f4eab65_37691000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63d85f4eab65_37691000')) {function content_5b63d85f4eab65_37691000($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?><form class="form-horizontal" action="tiki-admin.php?page=calendar" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<a role="link" class="btn btn-link tips" href="tiki-admin_calendars.php" title=":Calendars listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Calendars
		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_calendar','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>Plugins</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_calendar'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_events'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_mcalendar'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_addtogooglecal'),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>General settings<?php echo smarty_function_help(array('url'=>"Calendar+Admin"),$_smarty_tpl);?>
</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_default_calendars'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_default_calendars_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'default_calendars'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'calendar_view_mode'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_list_begins_focus'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_firstDayofWeek'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_timespan'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_cal_manual_time'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_export'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_export_item'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_addtogooglecal'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_fullcalendar'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_jscalendar','mode'=>'invert'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_jscalendar_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'calendar_start_year'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'calendar_end_year'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'calendar_sticky_popup'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_action_calendar'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_view_tab'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_view_days'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_description_is_html'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'calendar_watch_editor'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
