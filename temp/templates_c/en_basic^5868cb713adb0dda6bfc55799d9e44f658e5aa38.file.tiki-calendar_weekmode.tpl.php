<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 11:01:31
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-calendar_weekmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19653101715b51a4eb6a80b4-43313658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5868cb713adb0dda6bfc55799d9e44f658e5aa38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-calendar_weekmode.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19653101715b51a4eb6a80b4-43313658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewstart' => 0,
    'daysnames' => 0,
    'viewdays' => 0,
    'today' => 0,
    'viewWeekDays' => 0,
    'myurl' => 0,
    'prefs' => 0,
    'tiki_p_add_events' => 0,
    'listcals' => 0,
    'displayedcals' => 0,
    'hr_display' => 0,
    'h' => 0,
    'weekdays' => 0,
    'hours' => 0,
    'manyEvents' => 0,
    'hrows' => 0,
    'event' => 0,
    'calendarId' => 0,
    'infocals' => 0,
    'cellcalendarId' => 0,
    'over' => 0,
    'overMany' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a4eb730c56_89934811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a4eb730c56_89934811')) {function content_5b51a4eb730c56_89934811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_modifier_isodate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.isodate.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<div style="position:relative;padding:0px">
	<table class="calendarweek">
		<tr valign="middle" style="height:36px">
			<td id="topLeft" class="calHeading heading" width="9%">
				<strong>
					<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['viewstart']->value,"%Y");?>

				</strong>
			</td>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['name'] = 'dn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['daysnames']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total']);
?>
				<?php if (in_array($_smarty_tpl->getVariable('smarty')->value['section']['dn']['index'],$_smarty_tpl->tpl_vars['viewdays']->value)) {?>
					<td id="top_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['dn']['index'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['today']->value==$_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']]) {?>calheadhighlight<?php } else { ?>heading<?php }?> calHeading" width="13%">
						<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?viewmode=day&amp;todate=<?php echo $_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];?>
" title="View this Day">
							<?php echo $_smarty_tpl->tpl_vars['daysnames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];?>

						</a><br>
						
						<?php if (($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DMY')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DYM')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='YDM')) {?>
							<strong>
								<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?focus=<?php echo $_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];?>
&amp;viewmode=week" title="Change Focus">
									<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']],"%d/%m");?>

								</a>
							</strong>
						<?php } else { ?>
							<strong>
								<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?focus=<?php echo $_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];?>
&amp;viewmode=week" title="Change Focus">
									<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']],"%m/%d");?>

								</a>
							</strong>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value=='y'&&count($_smarty_tpl->tpl_vars['listcals']->value)>0&&count($_smarty_tpl->tpl_vars['displayedcals']->value)>0) {?>
							<a class="tips" title=":Add Event" href="tiki-calendar_edit_item.php?todate=<?php echo $_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];
if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1) {?>&amp;calendarId=<?php echo $_smarty_tpl->tpl_vars['displayedcals']->value[0];
}?>">
								<?php echo smarty_function_icon(array('name'=>'add'),$_smarty_tpl);?>

							</a>
						<?php }?>
					</td>
				<?php }?>
			<?php endfor; endif; ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hr_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
?>
			<tr valign="middle" style="height:24px">
				<td id="rowLeft_<?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
" class="calHours">
					<?php echo $_smarty_tpl->tpl_vars['h']->value[1];?>

				</td>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['name'] = 'weekday';
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weekdays']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total']);
?>
					<?php if (isset($_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index'])&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'],$_smarty_tpl->tpl_vars['viewdays']->value)) {?>
						<td id="row_<?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'];?>
" class="calWeek">&nbsp;

						</td>
					<?php }?>
				<?php endfor; endif; ?>
			</tr>
		<?php } ?>
	</table>
	<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['h']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
 $_smarty_tpl->tpl_vars['h']->index++;
 $_smarty_tpl->tpl_vars['h']->first = $_smarty_tpl->tpl_vars['h']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hours']['first'] = $_smarty_tpl->tpl_vars['h']->first;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['name'] = 'weekday';
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weekdays']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['weekday']['total']);
?>
			<?php if (isset($_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index'])&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'],$_smarty_tpl->tpl_vars['viewdays']->value)) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['tooMany'])&&$_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['tooMany']==false&&isset($_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']][$_smarty_tpl->tpl_vars['h']->value])) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['name'] = 'hr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']][$_smarty_tpl->tpl_vars['h']->value]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['total']);
?>
						<?php $_smarty_tpl->tpl_vars['event'] = new Smarty_variable($_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']][$_smarty_tpl->tpl_vars['h']->value][$_smarty_tpl->getVariable('smarty')->value['section']['hr']['index']], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['calendarId'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value['calendarId'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['event']->value['over'],"javascript"),"html"), null, 0);?>
						<?php if (!empty($_smarty_tpl->tpl_vars['event']->value['calitemId'])) {?>
							<div id="event_<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
" <?php if ($_smarty_tpl->tpl_vars['event']->value['calname']!='') {?>class="Cal<?php echo $_smarty_tpl->tpl_vars['event']->value['type'];?>
 vevent tips"<?php }?> style="overflow:visible;position:absolute;top:<?php echo $_smarty_tpl->tpl_vars['event']->value['top'];?>
px;height:<?php echo $_smarty_tpl->tpl_vars['event']->value['duree']-1;?>
px;left:<?php echo $_smarty_tpl->tpl_vars['event']->value['left'];?>
%;width:<?php echo $_smarty_tpl->tpl_vars['event']->value['width'];?>
%;background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
;border-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
;color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'];?>
;opacity:<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='0') {?>0.8<?php } else { ?>1<?php }?>;filter:alpha(opacity=<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='0') {?>80<?php } else { ?>100<?php }?>);text-align:center;overflow:hidden;cursor:pointer;<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>display:none;<?php }?>"
								title="Details"
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=="y") {?>
									<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>true,'fullhtml'=>"1",'trigger'=>"onClick",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>false,'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);?>

								<?php }?>>
								<span style="padding-top:4px;float:right">
									<a style="padding:0 3px;"
										<?php if ($_smarty_tpl->tpl_vars['event']->value['modifiable']=="y"||$_smarty_tpl->tpl_vars['event']->value['visible']=='y') {?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=="y") {?>
												href="#"
											<?php } else { ?>
												href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
"
											<?php }?>
										<?php }?>
										title="Details"
									>
										<?php echo smarty_function_icon(array('name'=>'info'),$_smarty_tpl);?>

									</a>
								</span>
								<abbr class="dtstart" title="<?php if ($_smarty_tpl->tpl_vars['event']->value['result']['allday']=='1') {?>All day<?php } else {
echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['event']->value['startTimeStamp']);
}?>" style="<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='2') {?>text-decoration:line-through;<?php }
if (isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'])) {?>color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'];?>
;<?php }?>">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['event']->value['name']);?>

								</abbr>
							</div>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								var id = '#event_<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
';
								var cell = '#row_<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'];?>
';
								var pos = $(cell).position();
								var eventwidth = ($(cell).width() + parseInt($(cell).css('padding-left'))
									+ parseInt($(cell).css('padding-right'))) / <?php echo $_smarty_tpl->tpl_vars['event']->value['concurrences'];?>

								var leftadd = <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['hr']['index'];?>
 * eventwidth;
								var mins = parseInt(<?php echo $_smarty_tpl->tpl_vars['event']->value['mins'];?>
);
								if (parseInt(mins) > 0) {
									var topadd = $(id).height() / (60 / mins);
								} else {
									var topadd = 0;
								}
								$(id).css('top', pos.top + topadd);
								$(id).css('left', pos.left + leftadd);
								$(id).css('width', eventwidth);
								$(id).css('display', 'inline');
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php endfor; endif; ?>
				<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['hours']['first']) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['overMany'])) {?>
						<?php $_smarty_tpl->tpl_vars['overMany'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['overMany'],"javascript"),"html"), null, 0);?>
						<div id="many_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index'];?>
" style="position:absolute;<?php if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['top'])) {?>top:<?php echo $_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['top'];?>
px;<?php }
if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['left'])) {?>left:<?php echo $_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['left'];?>
%;<?php }
if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['width'])) {?>width:<?php echo $_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['width'];?>
%;<?php }
if (isset($_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['weekday']['index']]['duree'])) {?>height:<?php echo $_smarty_tpl->tpl_vars['manyEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']]['duree']-1;?>
px;<?php }?>border:2px dotted #000"
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=="y") {?>
								<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>true,'trigger'=>"onClick",'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['overMany']->value),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>false,'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['overMany']->value),$_smarty_tpl);?>

							<?php }?>
							title="Details"
						>
							<div style="position:absolute;top:50%;left:50%;margin-left:-40px;margin-top:-30px">
								<a style="padding:0 3px;" href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?viewmode=day&todate=<?php echo $_smarty_tpl->tpl_vars['viewWeekDays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['weekday']['index']];?>
">
									<img src="img/icons/multiple_cal.png" alt="Details">
								</a>
							</div>
						</div>
					<?php }?>
				<?php }?>
			<?php }?>
		<?php endfor; endif; ?>
	<?php } ?>
</div>
<?php }} ?>
