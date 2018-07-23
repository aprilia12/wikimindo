<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 11:01:33
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-calendar_daymode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14084399135b51a4ed660863-65048763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07668f61dec8b1822de5d8e4719cb63c9c6ad8f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-calendar_daymode.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14084399135b51a4ed660863-65048763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'day' => 0,
    'today' => 0,
    'focusdate' => 0,
    'hr_display' => 0,
    'h' => 0,
    'hours' => 0,
    'hrows' => 0,
    'event' => 0,
    'calendarId' => 0,
    'infocals' => 0,
    'prefs' => 0,
    'over' => 0,
    'myurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a4ed6aea79_13808797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a4ed6aea79_13808797')) {function content_5b51a4ed6aea79_13808797($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_long_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><div style="position:relative">
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
		<tr valign="middle" style="height:36px">
			<td id="month_title" <?php if ($_smarty_tpl->tpl_vars['day']->value==$_smarty_tpl->tpl_vars['today']->value) {?>class="calheadhighlight"<?php }?> style="text-align:center; border:none; padding-top:4px"><strong><?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['focusdate']->value);?>
</strong></td>
		</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:collapse;border:1px solid #ccc">
		<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hr_display']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
?>
			<tr valign="middle" style="height:24px">
				<td id="rowLeft_<?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
" class="calHours" style="width:10%"><?php echo $_smarty_tpl->tpl_vars['h']->value[1];?>
</td>
				<td id="row_<?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
" class="calWeek" style="background:none">&nbsp;</td>
			</tr>
		<?php } ?>
	</table>


	<?php  $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['h']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hours']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['h']->key => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['h']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->tpl_vars['h']->value])) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['name'] = 'hr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->tpl_vars['h']->value]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<?php $_smarty_tpl->tpl_vars['event'] = new Smarty_variable($_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->tpl_vars['h']->value][$_smarty_tpl->getVariable('smarty')->value['section']['hr']['index']], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['calendarId'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value['calendarId'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value['over'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['event']->value['calitemId']!='') {?>
					<div id="event_<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
" title="Details" <?php if ($_smarty_tpl->tpl_vars['hrows']->value[$_smarty_tpl->tpl_vars['h']->value][$_smarty_tpl->getVariable('smarty')->value['section']['hr']['index']]['calname']!='') {?>class="tips Cal<?php echo $_smarty_tpl->tpl_vars['event']->value['type'];?>
 vevent"<?php }?> style="position:absolute;z-index:100;top:<?php echo $_smarty_tpl->tpl_vars['event']->value['top'];?>
px;left:<?php echo $_smarty_tpl->tpl_vars['event']->value['left'];?>
%;width:<?php echo $_smarty_tpl->tpl_vars['event']->value['width'];?>
%;height:<?php echo $_smarty_tpl->tpl_vars['event']->value['duree'];?>
px;background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
;border-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
;opacity:<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='0') {?>0.8<?php } else { ?>1<?php }?>;filter:alpha(opacity=<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='0') {?>80<?php } else { ?>100<?php }?>);text-align:center;overflow:hidden;cursor:pointer"
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=="y") {?>
							<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>true,'trigger'=>"onClick",'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_popup(array('vauto'=>true,'hauto'=>true,'sticky'=>false,'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);?>

						<?php }?>>
						<span style="padding-top:4px;padding-right:4px;float:right">
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
						<?php if ($_smarty_tpl->tpl_vars['myurl']->value=="tiki-action_calendar.php") {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="url" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['event']->value['web']);?>
" class="linkmenu summary" style="color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
;<?php if ($_smarty_tpl->tpl_vars['event']->value['status']=='2') {?>text-decoration:line-through<?php }?>"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</a>
						<?php } else { ?>
							<a href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
" class="linkmenu summary" style="color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</a>
						<?php }?>
					</div>
				<?php }?>
			<?php endfor; endif; ?>
		<?php }?>
	<?php } ?>

</div>
<?php }} ?>
