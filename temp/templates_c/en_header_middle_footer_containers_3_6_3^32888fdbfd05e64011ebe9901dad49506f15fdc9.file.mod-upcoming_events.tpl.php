<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-upcoming_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9310814375b69105b7958d5-65162567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32888fdbfd05e64011ebe9901dad49506f15fdc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-upcoming_events.tpl',
      1 => 1491652436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9310814375b69105b7958d5-65162567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'modUpcomingEvents' => 0,
    'prefs' => 0,
    'date_format' => 0,
    'nonums' => 0,
    'showColor' => 0,
    'calendarId' => 0,
    'infocals' => 0,
    'showEnd' => 0,
    'tooltip_infos' => 0,
    'maxlen' => 0,
    'showDescription' => 0,
    'tiki_p_add_events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105b7d40e4_84562148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105b7d40e4_84562148')) {function content_5b69105b7d40e4_84562148($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
if (!is_callable('smarty_modifier_isodate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.isodate.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_time.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if (count($_smarty_tpl->tpl_vars['modUpcomingEvents']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['date_format'])) {?>
		<?php $_smarty_tpl->tpl_vars['date_format'] = new Smarty_variable($_smarty_tpl->tpl_vars['module_params']->value['date_format'], null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['date_format'] = new Smarty_variable((($_smarty_tpl->tpl_vars['prefs']->value['short_date_format']).(' ')).($_smarty_tpl->tpl_vars['prefs']->value['short_time_format']), null, 0);?>
	<?php }?>
<table border="0" cellpadding="<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['cellpadding'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['cellpadding'];
} else { ?>0<?php }?>" cellspacing="<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['cellspacing'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['cellspacing'];
} else { ?>0<?php }?>">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modUpcomingEvents']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<?php $_smarty_tpl->tpl_vars['date_value'] = new Smarty_variable(smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start'],$_smarty_tpl->tpl_vars['date_format']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['calendarId'] = new Smarty_variable($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['calendarId'], null, 0);?>

			<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']) {?>
		</td>
	</tr>
			<?php }?>

	<tr>

			<?php if ($_smarty_tpl->tpl_vars['nonums']->value!='y') {?>
		<td class="module"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index_next'];?>
)&nbsp;</td>
			<?php }?>

		<td class="module vevent"<?php if ($_smarty_tpl->tpl_vars['showColor']->value=='y'&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor']!='') {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
"<?php }?>>

			<?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['allday']) {?>
			<abbr class="dtstart" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start']);?>
"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start']);?>
</abbr>
			<?php } else { ?>
			<abbr class="dtstart" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start']);?>
"><?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start'],$_smarty_tpl->tpl_vars['date_format']->value);?>
</abbr>
				<?php if ($_smarty_tpl->tpl_vars['showEnd']->value=='y') {?>
				-
				<abbr class="dtend" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['end']);?>
"><?php if ($_smarty_tpl->tpl_vars['module_params']->value['date_format']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['end'],$_smarty_tpl->tpl_vars['date_format']->value);
} elseif (smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['start'])!=smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['end'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['end']);
} else {
echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['end']);
}?></abbr>
				<?php }?>
			<?php }?>
			<br>

			<a class="linkmodule summary"
				href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>event<?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['calitemId'];
} else { ?>tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['calitemId'];
}?>"
				title="<?php if ($_smarty_tpl->tpl_vars['tooltip_infos']->value!='n') {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastModif'],'','n');?>
, by <?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']!='') {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);
} else { ?>Anonymous<?php }
} else { ?>click to view<?php }?>"
				<?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['status']=='2') {?>style="text-decoration: line-through;"<?php }?>
			>
				<?php if ($_smarty_tpl->tpl_vars['maxlen']->value>0) {?>
					<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true));?>

				<?php } else { ?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>

				<?php }?>
			</a>

			<?php if ($_smarty_tpl->tpl_vars['showDescription']->value=='y') {?>
			<div class="description help-block"><?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['parsed'];?>
</div>
			<?php }?>

			<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['ix']['last']) {?>
		</td>
	</tr>
			<?php }?>

		<?php endfor; endif; ?>
</table>
<?php } else { ?>
<em>No records to display</em>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value=='y'&&(empty($_smarty_tpl->tpl_vars['module_params']->value['showaction'])||$_smarty_tpl->tpl_vars['module_params']->value['showaction']!='n')) {?>
	<p><a href="tiki-calendar_edit_item.php"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Event</a></p>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
