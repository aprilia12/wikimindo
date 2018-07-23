<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:47:54
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\messu-archive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8058838985b5541da10b110-20686390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ff86338c1e476a12a5653d829f7cda1f06dc2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\messu-archive.tpl',
      1 => 1494109176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8058838985b5541da10b110-20686390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'cellsize' => 0,
    'percentage' => 0,
    'messu_archive_number' => 0,
    'flag' => 0,
    'flagval' => 0,
    'priority' => 0,
    'find' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'items' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5541da18fe38_51221108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5541da18fe38_51221108')) {function content_5b5541da18fe38_51221108($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Inter-User Messages",'admpage'=>"messages")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Inter-User Messages",'admpage'=>"messages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Message Archive<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Inter-User Messages",'admpage'=>"messages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('messu-nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['messu_archive_size']>'0') {?>

<div class="progress">
	<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellsize']->value,"attr");?>
" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
		<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
%
	</div>
</div>
<div class="margin-bottom-md">
[<?php echo $_smarty_tpl->tpl_vars['messu_archive_number']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['prefs']->value['messu_archive_size'];?>
] messages. <?php if ($_smarty_tpl->tpl_vars['messu_archive_number']->value==$_smarty_tpl->tpl_vars['prefs']->value['messu_archive_size']) {?>Archive is full!<?php }?>
</div>
	<?php }?>

<form action="messu-archive.php" method="get" class="form-inline margin-bottom-md">
	<div class="form-group">
	<label for="mess-mailmessages">Messages:</label>
	<select name="flags" id="mess-mailmessages" class="form-control">
		<option value="isRead_y" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='isRead'&&$_smarty_tpl->tpl_vars['flagval']->value=='y') {?>selected="selected"<?php }?>>Read</option>
		<option value="isRead_n" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='isRead'&&$_smarty_tpl->tpl_vars['flagval']->value=='n') {?>selected="selected"<?php }?>>Unread</option>
		<option value="isFlagged_y" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='isFlagged'&&$_smarty_tpl->tpl_vars['flagval']->value=='y') {?>selected="selected"<?php }?>>Flagged</option>
		<option value="isFlagged_y" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='isflagged'&&$_smarty_tpl->tpl_vars['flagval']->value=='n') {?>selected="selected"<?php }?>>Unflagged</option>
		<option value="" <?php if ($_smarty_tpl->tpl_vars['flag']->value=='') {?>selected="selected"<?php }?>>All</option>
	</select>
	</div>
	<div class="form-group">
	<label for="mess-mailprio">Priority:</label>
	<select name="priority" id="mess-mailprio" class="form-control">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['priority']->value=='') {?>selected="selected"<?php }?>>All</option>
		<option value="1" <?php if ($_smarty_tpl->tpl_vars['priority']->value==1) {?>selected="selected"<?php }?>>1</option>
		<option value="2" <?php if ($_smarty_tpl->tpl_vars['priority']->value==2) {?>selected="selected"<?php }?>>2</option>
		<option value="3" <?php if ($_smarty_tpl->tpl_vars['priority']->value==3) {?>selected="selected"<?php }?>>3</option>
		<option value="4" <?php if ($_smarty_tpl->tpl_vars['priority']->value==4) {?>selected="selected"<?php }?>>4</option>
		<option value="5" <?php if ($_smarty_tpl->tpl_vars['priority']->value==5) {?>selected="selected"<?php }?>>5</option>
	</select>
		</div>
	<div class="form-group">
	<label for="mess-mailcont">Containing:</label>
	<input type="text" name="find" id="mess-mailcont" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"attr");?>
" class="form-control">
		</div>
	<input type="submit" class="btn btn-default btn-sm" name="filter" value="Filter">
</form>


<form action="messu-archive.php" method="post" name="form_messu_archive">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="form-group">
	<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value,"attr");?>
">
	<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"attr");?>
">
	<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"attr");?>
">
	<input type="hidden" name="flag" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flag']->value,"attr");?>
">
	<input type="hidden" name="flagval" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flagval']->value,"attr");?>
">
	<input type="hidden" name="priority" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['priority']->value,"attr");?>
">
	<input type="submit" class="btn btn-warning btn-sm timeout" name="delete" value="Delete">
	<input type="submit" class="btn btn-default btn-sm timeout" name="download" value="Download">
		</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var CHECKBOX_LIST = [<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>'msg[<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['msgId'];?>
]'<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['user']['last']) {?>,<?php }
endfor; endif; ?>];
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="table-responsive">
		<table class="table">
			<tr>
				<th><input type="checkbox" name="checkall" onclick="checkbox_list_check_all('form_messu_archive',CHECKBOX_LIST,this.checked);"></th>
				<th style="width:18px">&nbsp;</th>
				<th><a href="messu-archive.php?flag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flag']->value,"url");?>
&amp;priority=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['priority']->value,"url");?>
&amp;flagval=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flagval']->value,"url");?>
&amp;find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;offset=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value,"url");?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user_from_desc') {?>user_from_asc<?php } else { ?>user_from_desc<?php }?>">Sender</a></th>
				<th><a href="messu-archive.php?flag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flag']->value,"url");?>
&amp;priority=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['priority']->value,"url");?>
&amp;flagval=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flagval']->value,"url");?>
&amp;find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;offset=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value,"url");?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='subject_desc') {?>subject_asc<?php } else { ?>subject_desc<?php }?>">Subject</a></th>
				<th><a href="messu-archive.php?flag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flag']->value,"url");?>
&amp;priority=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['priority']->value,"url");?>
&amp;flagval=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flagval']->value,"url");?>
&amp;find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;offset=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value,"url");?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='date_desc') {?>date_asc<?php } else { ?>date_desc<?php }?>">Date</a></th>
				<th style="text-align:right">Size</th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
				<tr>
					<td class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><input type="checkbox" name="msg[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['msgId'],"attr");?>
]"></td>
					<td class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['isFlagged']=='y') {
echo smarty_function_icon(array('name'=>'flag','alt'=>"Flagged"),$_smarty_tpl);
}?></td>
					<td <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['isRead']=='n') {?>style="font-weight:bold"<?php }?> class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_from']);?>
</td>
					<td <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['isRead']=='n') {?>style="font-weight:bold"<?php }?> class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><a class="readlink" href="messu-read_archive.php?offset=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value,"url");?>
&amp;flag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flag']->value,"url");?>
&amp;priority=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"url");?>
&amp;flagval=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['flagval']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
&amp;find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;msgId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['msgId'],"url");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['subject']);?>
</a></td>
					<td <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['isRead']=='n') {?>style="font-weight:bold"<?php }?> class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['date']);?>
</td><!--date_format:"%d %b %Y [%H:%I]"-->
					<td style="text-align:right;<?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['isRead']=='n') {?>font-weight:bold;<?php }?>" class="prio<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['priority'],"attr");?>
"><?php echo smarty_modifier_escape(smarty_modifier_kbsize($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['len']));?>
</td>
				</tr>
			<?php endfor; else: ?>
				<tr><td colspan="6">No messages to display<td></tr>
			<?php endif; ?>
		</table>
	</div>
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
