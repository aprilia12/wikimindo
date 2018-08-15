<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 10:16:06
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-lastchanges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7946648915b73e14693e849-38788440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314d1ac65bc0aae3dc705a5d1a96289f25ac9397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-lastchanges.tpl',
      1 => 1458281034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7946648915b73e14693e849-38788440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days' => 0,
    'thisclass' => 0,
    'lastchanges' => 0,
    'find' => 0,
    'findwhat' => 0,
    'cant_records' => 0,
    'prefs' => 0,
    'tiki_p_wiki_view_history' => 0,
    'tiki_p_rollback' => 0,
    'tiki_p_wiki_view_source' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b73e1469f61f4_19123606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73e1469f61f4_19123606')) {function content_5b73e1469f61f4_19123606($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Last_Changes",'url'=>"tiki-lastchanges.php?days=".((string)$_smarty_tpl->tpl_vars['days']->value))); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Last_Changes",'url'=>"tiki-lastchanges.php?days=".((string)$_smarty_tpl->tpl_vars['days']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Changes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Last_Changes",'url'=>"tiki-lastchanges.php?days=".((string)$_smarty_tpl->tpl_vars['days']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar btn-group margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['days']->value=='1') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=1",'class'=>"btn btn-default",'_text'=>"Today",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='2') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=2",'class'=>"btn btn-default",'_text'=>"Last 2 days",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='3') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=3",'class'=>"btn btn-default",'_text'=>"Last 3 days",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='5') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=5",'class'=>"btn btn-default",'_text'=>"Last 5 days",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='7') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=7",'class'=>"btn btn-default",'_text'=>"Last week",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='14') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=14",'class'=>"btn btn-default",'_text'=>"Last 2 weeks",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='31') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=31",'class'=>"btn btn-default",'_text'=>"Last month",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['days']->value=='0') {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('active', null, 0);
} else {
$_smarty_tpl->tpl_vars['thisclass'] = new Smarty_variable('', null, 0);
}?>
	<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php?days=0",'class'=>"btn btn-default",'_text'=>"All",'_class'=>$_smarty_tpl->tpl_vars['thisclass']->value),$_smarty_tpl);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['lastchanges']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'pagename'), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['findwhat']->value!='') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-lastchanges.php",'_text'=>"Search by Date"),$_smarty_tpl);?>

	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['findwhat']->value!='') {?>
	Found "<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['findwhat']->value);?>
</b>" in <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant_records']->value);?>
 LastChanges
<?php }?>
<div class="table-responsive">
<table class="table">
	<tr>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'object')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'object'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'object'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'action')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'action'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'action'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'user')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n') {?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'ip')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'ip'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ip<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'ip'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'comment')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comment'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comment'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<th>Action</th>
	</tr>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lastchanges']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total']);
?>
		<tr>
			<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif']);?>
</td>
			<td class="text">
				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
" class="tablename" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
">
					<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name_len'],"...",true));?>

				</a>
			</td>
			<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['action']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n') {?>
				<td><?php echo $_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['ip'];?>
</td>
			<?php }?>
			<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['comment']);?>
</td>
			<td class="action">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value=='y') {?>
					<?php if (!$_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['current']) {?>
						<a class="tips" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
' title=":History"><?php echo smarty_function_icon(array('name'=>"history"),$_smarty_tpl);?>
</a>v<?php echo $_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'];?>

	&nbsp;<a class="link" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;preview=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'],"url");?>
' title="View">v</a>&nbsp;
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y') {?>
							<a class="link" href='tiki-rollback.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;version=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'],"url");?>
' title="Roll back">b</a>&nbsp;
						<?php }?>
						<a class="link" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;diff=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'],"url");?>
' title="Compare">c</a>&nbsp;
						<a class="link" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;diff2=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'],"url");?>
' title="Diff">d</a>&nbsp;
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=='y') {?>
							<a class="link" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;source=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'],"url");?>
' title="Source">s</a>
						<?php }?>
					<?php } else { ?>
						<a class="tips" href='tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastchanges']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
' title=":History"><?php echo smarty_function_icon(array('name'=>"history"),$_smarty_tpl);?>
</a>
					<?php }?>
				<?php }?>
			</td>
		</tr>
	<?php endfor; else: ?>
		<?php echo smarty_function_norecords(array('_colspan'=>7),$_smarty_tpl);?>

	<?php endif; ?>
</table>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_records']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_records']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_records']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
