<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 06:30:46
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-calendar_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20878260345b67cef6a8ce93-43022770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1558c7a045269185fd1ab182d93fbe08e5249d15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-calendar_new.tpl',
      1 => 1515462800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20878260345b67cef6a8ce93-43022770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_calendar_module' => 0,
    'module_params' => 0,
    'tpl_module_title' => 0,
    'name' => 0,
    'viewlist' => 0,
    'daysnames_abr' => 0,
    'cell' => 0,
    'date' => 0,
    'viewmode' => 0,
    'prefs' => 0,
    'today' => 0,
    'calendar_popup' => 0,
    'myurl' => 0,
    'viewmodelink' => 0,
    'sticky_popup' => 0,
    'over' => 0,
    'day_cursor' => 0,
    'linkall' => 0,
    'tiki_p_add_events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67cef6b34e34_80614548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67cef6b34e34_80614548')) {function content_5b67cef6b34e34_80614548($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['show_calendar_module']->value)&&$_smarty_tpl->tpl_vars['show_calendar_module']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_listmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ajax'=>'n','module'=>'y'), 0);?>


			<table class="caltable" style="text-align:center;">
				<tr>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['name'] = 'dn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['daysnames_abr']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<th class="days" style="width:14%"><?php echo ucfirst($_smarty_tpl->tpl_vars['daysnames_abr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']]);?>
</th>
					<?php endfor; endif; ?>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['w'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['w']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['name'] = 'w';
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cell']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total']);
?>
					<tr>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['daysnames_abr']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['date'])) {?>
								<?php $_smarty_tpl->tpl_vars['date'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['date'], null, 0);?>
							<?php } elseif (!empty($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['day'])) {?>
								<?php $_smarty_tpl->tpl_vars['date'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'], null, 0);?>
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['date']->value)) {?>
								<?php if (in_array($_smarty_tpl->tpl_vars['viewmode']->value,array('bimester','trimester','quarter','semester','year'))) {?>
									<?php if (in_array($_smarty_tpl->tpl_vars['prefs']->value['display_field_order'],array('DMY','DYM','YDM'))) {?>
										<?php $_smarty_tpl->tpl_vars['day_cursor'] = new Smarty_variable(smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['date']->value,"%d-%m"), null, 0);?>
									<?php } else { ?>
										<?php $_smarty_tpl->tpl_vars['day_cursor'] = new Smarty_variable(smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['date']->value,"%m-%d"), null, 0);?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['viewmode']->value=='day'&&(!$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['focus'])) {?>
									<?php $_smarty_tpl->tpl_vars['day_cursor'] = new Smarty_variable('', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['day_cursor'] = new Smarty_variable(smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['date']->value,"%d"), null, 0);?>
								<?php }?>
								<?php $_smarty_tpl->tpl_vars['month_cursor'] = new Smarty_variable(smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['date']->value,"%m"), null, 0);?>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars['day_today'] = new Smarty_variable(smarty_modifier_tiki_date_format(time(),"%d"), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['month_today'] = new Smarty_variable(smarty_modifier_tiki_date_format(time(),"%m"), null, 0);?>

							<?php if (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['focus'])&&$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['focus']) {?>
								<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_cycle(array('values'=>"text-muted",'print'=>false),$_smarty_tpl);?>

							<?php }?>
							<td class="<?php if (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['day'])&&$_smarty_tpl->tpl_vars['date']->value==$_smarty_tpl->tpl_vars['today']->value) {?>calhighlight calborder<?php } else {
echo smarty_function_cycle(array('advance'=>false),$_smarty_tpl);
}
if (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['items'][0])&&((isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['items'][0]['modifiable'])&&$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['modifiable']=="y")||$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['visible']=='y')) {?> calmodfocus<?php }?>" style="font-size:0.8em; width=14%">
								<?php if (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['over'])) {?>
									<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['over'], null, 0);?>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['items'][0])) {?>
									<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['over'], null, 0);
} else {
$_smarty_tpl->tpl_vars['over'] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['items'][0])&&((isset($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['d']['index']]['items'][0]['modifiable'])&&$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['modifiable']=="y")||$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['visible']=='y')) {?>
									<?php if (empty($_smarty_tpl->tpl_vars['calendar_popup']->value)||$_smarty_tpl->tpl_vars['calendar_popup']->value=="y") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?todate=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
&amp;viewmode=<?php echo $_smarty_tpl->tpl_vars['viewmodelink']->value;?>
" title="View"
											<?php if ((isset($_smarty_tpl->tpl_vars['sticky_popup']->value)&&$_smarty_tpl->tpl_vars['sticky_popup']->value=='y')||($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=="y"&&$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][0]['calitemId'])) {?>
												<?php echo smarty_function_popup(array('sticky'=>true,'fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);
} else {
echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over']->value),$_smarty_tpl);?>

											<?php }?>
										>
											<?php if (isset($_smarty_tpl->tpl_vars['day_cursor']->value)) {?>
												<?php echo $_smarty_tpl->tpl_vars['day_cursor']->value;?>

											<?php }?>
										</a>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['day_cursor']->value)) {?>
											<?php echo $_smarty_tpl->tpl_vars['day_cursor']->value;?>

										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['over']->value;?>

									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['linkall']->value=='y') {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?todate=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'];?>
&amp;viewmode=<?php echo $_smarty_tpl->tpl_vars['viewmodelink']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['day_cursor']->value;?>

									</a>
								<?php } else { ?>
									<?php if (isset($_smarty_tpl->tpl_vars['day_cursor']->value)) {?>
										<?php echo $_smarty_tpl->tpl_vars['day_cursor']->value;?>

									<?php }?>
								<?php }?>
							</td>
						<?php endfor; endif; ?>
					</tr>
				<?php endfor; endif; ?>
			</table>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value=='y'&&(empty($_smarty_tpl->tpl_vars['module_params']->value['showaction'])||$_smarty_tpl->tpl_vars['module_params']->value['showaction']!='n')) {?>
			<br>
			<p>
				<a class="btn btn-link" href="tiki-calendar_edit_item.php">
					<?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>

					Add Event
				</a>
			</p>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
