<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:17:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4767876565b6d11e9430bf0-76915270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682e752dbf177ece2cb84fd5ce58690f150bd000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_notifications.tpl',
      1 => 1464717928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4767876565b6d11e9430bf0-76915270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'find' => 0,
    'sort_mode' => 0,
    'offset' => 0,
    'numrows' => 0,
    'watches' => 0,
    'key' => 0,
    'watch' => 0,
    'user' => 0,
    'channels' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'trackers' => 0,
    'forums' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d11e94b5911_11364510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d11e94b5911_11364510')) {function content_5b6d11e94b5911_11364510($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Mail Notifications")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Mail Notifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail notifications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Mail Notifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['sender_email'])) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		You need to set <a class="alert-link" href="tiki-admin.php?page=general">Sender Email</a> before creating email notifications.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>Add notification</h2>
<form action="tiki-admin_notifications.php" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
	<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
	<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?><input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['numrows']->value!=$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']&&$_smarty_tpl->tpl_vars['numrows']->value) {?><input type="hidden" name="numrows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['numrows']->value);?>
"><?php }?>
	<div class="form-group">
		<label for="event" class="control-label col-sm-3">
			Event
		</label>
		<div class="col-sm-9">
			<select id="event" name="event" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['watch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['watch']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['watches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['watch']->key => $_smarty_tpl->tpl_vars['watch']->value) {
$_smarty_tpl->tpl_vars['watch']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['watch']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watch']->value['label']);?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="destination" class="control-label col-sm-3">
			Destination
		</label>
		<div class="col-sm-9">
			<select id="destination" name="destination" class="form-control">
				<option value="login" selected="selected">User</option>
				<option value="email">Email</option>
			</select>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$("select[name='destination']").change(function () {
				$("#loginrow").hide();
				$("#emailrow").hide();
				$("input[name='login']").attr("disabled","disabled");
				$("input[name='email']").attr("disabled","disabled");
				$("#" + $("select[name='destination']").val() + "row").show();
				$("input[name='" + $("select[name='destination']").val() + "']").focus();
				$("input[name='" + $("select[name='destination']").val() + "']").removeAttr("disabled");
			}
			);
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</div>
	<div id="loginrow" class="form-group">
		<label for="flogin" class="control-label col-sm-3">
			User
		</label>
		<div class="col-sm-6">
			<input type="text" id="flogin" name="login" class="form-control" placeholder="Username...">
			<?php echo smarty_function_autocomplete(array('element'=>'#flogin','type'=>'username'),$_smarty_tpl);?>

		</div>
		<div class="col-sm-3">
			<a href="#" onclick="javascript:document.getElementById('flogin').value='<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
'" class="link">Myself</a>
		</div>
	</div>
	<div class="form-group" id="emailrow" style="display:none">
		<label for="femail" class="control-label col-sm-3">
			Email
		</label>
		<div class="col-sm-9">
			<input type="text" id="femail" name="email" class="form-control" placeholder="Email...">
			<div class="help-block">
				Note that a user is not notified for his or her own action
			</div>
		</div>
	</div>
	<div class="submit text-center">
		<input type="submit" class="btn btn-primary btn-sm" name="add" value="Add"></td>
	</div>
</form>
<br>
<h2>Mail notifications</h2>
<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y'), 0);?>

<?php }?>
<form method="get" action="tiki-admin_notifications.php">
	<div class="table-responsive notifications-table">
		<table class="table table-striped table-hover">
			<tr>
				<th>
					<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
						<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

					<?php }?>
				</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>"sort_mode",'_sort_field'=>"event")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"event"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Event<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"event"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>"sort_mode",'_sort_field'=>"object")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"object"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Object Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"object"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>"sort_mode",'_sort_field'=>"email")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"email"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>"sort_mode",'_sort_field'=>"user")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"user"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User / Group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>"sort_mode",'_sort_field'=>"user"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th></th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<td class="checkbox-cell">
						<input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchtype'];
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchId']);?>
" <?php if ($_REQUEST['checked']&&in_array($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchId'],$_REQUEST['checked'])) {?>checked="checked"<?php }?>>
					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['event'];?>
</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['url']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['url'];?>
" class="tips" title=":<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['title']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['object']);?>
</a>
						<?php } else { ?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['object']);?>

						<?php }?>
						</td>
					<td class="email">
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchtype']=='user') {?>
							<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'];?>

						<?php } else { ?>
							<em>Multiple</em>
						<?php }?>
					</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchtype']=='group') {?>
							<?php echo smarty_function_icon(array('name'=>"group"),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>

						<?php }?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>

					</td>
					<td class="action">
						<?php ob_start();
echo smarty_function_query(array('removeevent'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchId'],'removetype'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['watchtype']),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php echo smarty_function_icon(array('name'=>"delete",'class'=>"tips",'href'=>((string)$_SERVER['PHP_SELF'])."?".$_tmp1,'title'=>":Delete"),$_smarty_tpl);?>

					</td>
				</tr>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
		<br>
		Perform action with checked:
		<input type="image" name="delsel" src='img/icons/cross.png' alt="Delete" title="Delete">
	<?php }?>
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['trackers']->value)) {?>
	<h2>Trackers Outbound Emails</h2>
	<div class="table-responsive">
		<table class="table">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trackers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<tr>
					<td><a href="tiki-list_trackers.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['trackerId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
</a></td>
				</tr>
			<?php endfor; endif; ?>
		</table>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['forums']->value)) {?>
	<h2>Forums Outbound Emails</h2>
	<div class="table-responsive">
		<table class="table">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['forums']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<tr>
					<td><a href="tiki-admin_forums.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['forumId'];?>
&amp;cookietab=2"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['outbound_address']);?>
</a><br/></td>
				</tr>
			<?php endfor; endif; ?>
		</table>
	</div>
<?php }?>

<?php }} ?>
