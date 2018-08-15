<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 10:36:42
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-webmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13284531855b6bfd1a329612-89453605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dfd0cf9f4805149c4817576d6bf0cac600c0a41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-webmail.tpl',
      1 => 1508750022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13284531855b6bfd1a329612-89453605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'locSection' => 0,
    'accounts' => 0,
    'js' => 0,
    'user' => 0,
    'mailCurrentAccount' => 0,
    'active' => 0,
    'libeg' => 0,
    'liend' => 0,
    'tiki_p_use_group_webmail' => 0,
    'pubAccounts' => 0,
    'tiki_p_admin_group_webmail' => 0,
    'tiki_p_admin' => 0,
    'accountId' => 0,
    'tablab' => 0,
    'tiki_p_admin_personal_webmail' => 0,
    'info' => 0,
    'userEmail' => 0,
    'filter' => 0,
    'autoRefresh' => 0,
    'tip' => 0,
    'flagsPublic' => 0,
    'showstart' => 0,
    'showend' => 0,
    'total' => 0,
    'first' => 0,
    'prevstart' => 0,
    'nextstart' => 0,
    'last' => 0,
    'start' => 0,
    'list' => 0,
    'class' => 0,
    'prev' => 0,
    'next' => 0,
    'fullheaders' => 0,
    'msgid' => 0,
    'realmsgid' => 0,
    'headers' => 0,
    'plainbody' => 0,
    'key' => 0,
    'item' => 0,
    'part' => 0,
    'bodies' => 0,
    'wmid' => 0,
    'wmopen' => 0,
    'wmclass' => 0,
    'allbodies' => 0,
    'attachs' => 0,
    'attaching' => 0,
    'sent' => 0,
    'curacctId' => 0,
    'attach1' => 0,
    'attach2' => 0,
    'attach3' => 0,
    'attach1file' => 0,
    'attach2file' => 0,
    'attach3file' => 0,
    'attach1type' => 0,
    'attach2type' => 0,
    'attach3type' => 0,
    'fattId' => 0,
    'sendFrom' => 0,
    'pageaftersend' => 0,
    'to' => 0,
    'cc' => 0,
    'bcc' => 0,
    'subject' => 0,
    'body' => 0,
    'useHTML' => 0,
    'msg' => 0,
    'notcon' => 0,
    'not_contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6bfd1a4e6b82_37707650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6bfd1a4e6b82_37707650')) {function content_5b6bfd1a4e6b82_37707650($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webmail",'admpage'=>"webmail")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webmail",'admpage'=>"webmail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Webmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webmail",'admpage'=>"webmail"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table class="table">
	<tr>
		<td>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'mailbox','_icon_size'=>'3','locSection'=>'mailbox')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'mailbox','_icon_size'=>'3','locSection'=>'mailbox'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mailbox<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'mailbox','_icon_size'=>'3','locSection'=>'mailbox'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('locSection'=>'mailbox')); $_block_repeat=true; echo smarty_block_self_link(array('locSection'=>'mailbox'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mailbox<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('locSection'=>'mailbox'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</td>
		<td>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'compose','_icon_size'=>'3','locSection'=>'compose','_width'=>'48','_height'=>'48')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'compose','_icon_size'=>'3','locSection'=>'compose','_width'=>'48','_height'=>'48'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compose<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'compose','_icon_size'=>'3','locSection'=>'compose','_width'=>'48','_height'=>'48'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('locSection'=>'compose')); $_block_repeat=true; echo smarty_block_self_link(array('locSection'=>'compose'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compose<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('locSection'=>'compose'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</td>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contacts']=='y') {?>
			<td>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'contacts','_icon_size'=>'3','_script'=>'tiki-contacts.php','_width'=>'48','_height'=>'48')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'contacts','_icon_size'=>'3','_script'=>'tiki-contacts.php','_width'=>'48','_height'=>'48'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contacts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'contacts','_icon_size'=>'3','_script'=>'tiki-contacts.php','_width'=>'48','_height'=>'48'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<br>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>'tiki-contacts.php')); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>'tiki-contacts.php'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contacts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>'tiki-contacts.php'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</td>
		<?php }?>
		<td width="50%"></td>
		<td>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'settings','_icon_size'=>'3','locSection'=>'settings','_width'=>'48','_height'=>'48')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'settings','_icon_size'=>'3','locSection'=>'settings','_width'=>'48','_height'=>'48'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'settings','_icon_size'=>'3','locSection'=>'settings','_width'=>'48','_height'=>'48'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('locSection'=>'settings')); $_block_repeat=true; echo smarty_block_self_link(array('locSection'=>'settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('locSection'=>'settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</td>
	</tr>
</table>

<hr/>

<?php if ($_smarty_tpl->tpl_vars['locSection']->value=='settings') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_webmail_settings')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_webmail_settings'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"List")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"List"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
			<?php }?>
			<?php if (count($_smarty_tpl->tpl_vars['accounts']->value)!=0) {?>
				<h2>Personal email accounts</h2>
				<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
					<table class="table table-striped table-hover">
						<tr>
							<th>Active</th>
							<th>Account</th>
							<th>Server</th>
							<th>Username</th>
							<th></th>
						</tr>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['accounts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<?php if ($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['current']=='y'&&$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId']==$_smarty_tpl->tpl_vars['mailCurrentAccount']->value) {
$_smarty_tpl->tpl_vars['active'] = new Smarty_variable(true, null, 0);
} else {
$_smarty_tpl->tpl_vars['active'] = new Smarty_variable(false, null, 0);
}?>
							<tr>
								<td class="icon">
									<?php if (!$_smarty_tpl->tpl_vars['active']->value) {?>
										<span style="color:gray">
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'star','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'star','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

												Activate
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'star','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										</span>
									<?php } else { ?>
										<?php echo smarty_function_icon(array('name'=>'star'),$_smarty_tpl);?>

									<?php }?>
								</td>
								<td class="username">
									<?php if (!$_smarty_tpl->tpl_vars['active']->value) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_title'=>"Activate")); $_block_repeat=true; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_title'=>"Activate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['account'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_title'=>"Activate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php } else { ?>
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['account']);?>

									<?php }?>
								</td>
								<td class="text">
									<?php if (!empty($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['imap'])) {?>IMAP: <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['imap'];?>
 (<?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['port'];?>
)
									<?php } elseif (!empty($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['mbox'])) {?>Mbox: <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['mbox'];?>

									<?php } elseif (!empty($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['maildir'])) {?>Maildir: <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['maildir'];?>

									<?php } elseif (!empty($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['pop'])) {?>POP3: <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pop'];?>
 (<?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['port'];?>
)<?php }?>
								</td>
								<td class="username">
									<?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['username'];?>

								</td>
								<td class="action">
									<?php $_smarty_tpl->_capture_stack[0][] = array('webmail_actions', null, null); ob_start(); ?>
										<?php echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('accountId'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('accountId'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('accountId'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('remove'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
if (!$_smarty_tpl->tpl_vars['active']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['accountId'],'_icon_name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['webmail_actions']),$_smarty_tpl);
}?>
											style="padding:0; margin:0; border:0"
										>
											<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
											<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['webmail_actions'];?>
</ul></li></ul>
										<?php }?>
								</td>
							</tr>
						<?php endfor; else: ?>
							<?php echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);?>

						<?php endif; ?>
					</table>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['tiki_p_use_group_webmail']->value=='y') {?>
				<?php if (count($_smarty_tpl->tpl_vars['pubAccounts']->value)!=0) {?>
					<h2>Group email accounts</h2>
					<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
						<table class="table table-striped table-hover">
							<tr>
								<th>Active</th>
								<th>Account</th>
								<th>Server</th>
								<th>Username</th>
								<th></th>
							</tr>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['name'] = 'ixp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pubAccounts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ixp']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['current']=='y'&&$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId']==$_smarty_tpl->tpl_vars['mailCurrentAccount']->value) {
$_smarty_tpl->tpl_vars['active'] = new Smarty_variable(true, null, 0);
} else {
$_smarty_tpl->tpl_vars['active'] = new Smarty_variable(false, null, 0);
}?>
								<tr>
									<td class="icon">
										<?php if (!$_smarty_tpl->tpl_vars['active']->value) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'star-half','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'star-half','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'star-half','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php } else { ?>
											<?php echo smarty_function_icon(array('name'=>'star','iclass'=>'tips','ititle'=>':This is the active account.'),$_smarty_tpl);?>

										<?php }?>
									</td>
									<td class="username">
										<?php if (!$_smarty_tpl->tpl_vars['active']->value) {?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_title'=>"Activate")); $_block_repeat=true; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_title'=>"Activate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['account'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_title'=>"Activate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php } else { ?>
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['account']);?>

										<?php }?>
									</td>
									<td class="text">
										<?php if (!empty($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ixp']['index']]['imap'])) {?>
											IMAP: <?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['imap'];?>
 (<?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['port'];?>
)
										<?php } elseif (!empty($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ixp']['index']]['mbox'])) {?>
											Mbox: <?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['mbox'];?>

										<?php } elseif (!empty($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ixp']['index']]['maildir'])) {?>
											Maildir: <?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['maildir'];?>

										<?php } elseif (!empty($_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ixp']['index']]['pop'])) {?>
											POP3: <?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['pop'];?>
 (<?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['port'];?>
)
										<?php }?>
									</td>
									<td class="username"><?php echo $_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['username'];?>
</td>
									<td class="action">
										<?php $_smarty_tpl->_capture_stack[0][] = array('webmail_group_actions', null, null); ob_start(); ?>
											<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'edit','accountId'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'edit','accountId'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'edit','accountId'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'delete','remove'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'delete','remove'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'delete','remove'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (!$_smarty_tpl->tpl_vars['active']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'ok','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'ok','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'ok','current'=>$_smarty_tpl->tpl_vars['pubAccounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ixp']['index']]['accountId'],'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['webmail_group_actions']),$_smarty_tpl);
}?>
											style="padding:0; margin:0; border:0"
										>
											<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
											<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['webmail_group_actions'];?>
</ul></li></ul>
										<?php }?>
									</td>
								</tr>
							<?php endfor; else: ?>
								<?php echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);?>

							<?php endif; ?>
						</table>
					</div>
				<?php }?>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"List"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if ($_smarty_tpl->tpl_vars['accountId']->value==0) {
$_smarty_tpl->tpl_vars["tablab"] = new Smarty_variable("Create", null, 0);
} else {
$_smarty_tpl->tpl_vars["tablab"] = new Smarty_variable("Edit", null, 0);
}?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['tablab']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tablab']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2><?php echo $_smarty_tpl->tpl_vars['tablab']->value;?>
</h2>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_personal_webmail']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y'||!isset($_smarty_tpl->tpl_vars['info']->value['user'])||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['info']->value['user']) {?>
				<div id="settingsFormDiv">
					<form action="tiki-webmail.php" method="post" name="settings">
						<input type="hidden" name="accountId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accountId']->value);?>
">
						<input type="hidden" name="locSection" value="settings">
						<table class="formcolor">
							<tr>
								<td>Account name</td>
								<td>
									<input type="text" name="account" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['account']);?>
">
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr><td colspan="4">
								<hr>
								<h3>Incoming servers (used in this order)</h3>
							</td></tr>
							<tr>
								<td>IMAP server</td>
								<td>
									<input type="text" name="imap" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['imap']);?>
">
								</td>
								<td rowspan="2" valign="middle">Port</td>
								<td rowspan="2" valign="middle">
									<input type="text" name="port" size="7" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['port'];?>
">
								</td>
							</tr>
							<tr>
								<td>Mbox filepath</td>
								<td>
									<input type="text" name="mbox" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['mbox']);?>
">
								</td>
							</tr>
							<tr>
								<td>Maildir mail directory</td>
								<td>
									<input type="text" name="maildir" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['maildir']);?>
">
								</td>
								<td rowspan="2" valign="middle">Use SSL</td>
								<td rowspan="2" valign="middle">
									<input type="checkbox" name="useSSL" value="y" <?php if ($_smarty_tpl->tpl_vars['info']->value['useSSL']=='y') {?>checked="checked"<?php }?>>
								</td>
							</tr>
							<tr>
								<td>POP server</td>
								<td>
									<input type="text" name="pop" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['pop']);?>
">
								</td>
							</tr>
							<tr><td colspan="4">
								<hr>
								<h3>Outgoing server</h3>
							</td></tr>
							<tr>
								<td>SMTP server</td>
								<td>
									<input type="text" name="smtp" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['smtp']);?>
">
								</td>
								<td>Port</td>
								<td>
									<input type="text" name="smtpPort" size="7" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['smtpPort'];?>
">
								</td>
							</tr>
							<tr>
								<td>SMTP requires authentication</td>
								<td colspan="3">
									Yes<input type="radio" name="useAuth" value="y" <?php if ($_smarty_tpl->tpl_vars['info']->value['useAuth']=='y') {?>checked="checked"<?php }?>>
									No<input type="radio" name="useAuth" value="n" <?php if ($_smarty_tpl->tpl_vars['info']->value['useAuth']=='n') {?>checked="checked"<?php }?>>
								</td>
							</tr>
							<tr>
								<td>From email</td>
								<td colspan="2">
									<input type="text" name="fromEmail" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fromEmail'];?>
">
								</td>
								<td>
									<em>Uses the user's login email address if empty (<?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value)) {
echo $_smarty_tpl->tpl_vars['userEmail']->value;
} else { ?><strong>No email set:</strong> <?php echo smarty_function_icon(array('name'=>"next",'href'=>"tiki-user_preferences.php?cookietab=2"),$_smarty_tpl);
}?>)</em>
								</td>
							</tr>
							<tr><td colspan="4">
								<hr>
								<h3>Account details</h3>
							</td></tr>
							<tr>
								<td>Username</td>
								<td colspan="3">
									<input type="text" name="username" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['username']);?>
">
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td colspan="3">
									<input type="password" name="pass" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['pass']);?>
">
								</td>
							</tr>
							<tr>
								<td>Messages per page</td>
								<td colspan="3">
									<input type="text" name="msgs" size="4" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['msgs']);?>
">
								</td>
							</tr>

							<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_personal_webmail']->value=='y')||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
								<tr>
									<td>Group (shared mail inbox) or private</td>
									<td colspan="3">
										Group<input type="radio" name="flagsPublic" value="y" <?php if ($_smarty_tpl->tpl_vars['info']->value['flagsPublic']=='y') {?>checked="checked"<?php }?>> Private<input type="radio" name="flagsPublic" value="n" <?php if ($_smarty_tpl->tpl_vars['info']->value['flagsPublic']=='n') {?>checked="checked"<?php }?>>
									</td>
								</tr>
							<?php } else { ?>
								<tr>
									<td></td>
									<td>
										<input type="hidden" name="flagsPublic" <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y') {?>value="y"<?php } else { ?> value="n"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y') {?>
											This will be a group mail account.<?php } else { ?>This will be a personal mail account.
										<?php }?>
									</td>
								</tr>
							<?php }?>
							<tr>
								<td>Auto-refresh page time</td>
								<td colspan="3">
									<input type="text" name="autoRefresh" size="4" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['autoRefresh']);?>
"> seconds (0 = no auto refresh)
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan="3">
									<input type="submit" class="btn btn-primary btn-sm" name="new_acc" value="<?php if ($_smarty_tpl->tpl_vars['accountId']->value=='') {?>Add<?php } else { ?>Update<?php }?>">
									<input type="submit" class="btn btn-default btn-sm" name="cancel_acc" value="Cancel">
								</td>
							</tr>
						</table>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_group_webmail']->value=='y') {?>
								<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php }?>
					</form>
				</div>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Permissions")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					You do not have the correct permissions to Add or Edit a webmail account. <br>Please contact your administrator and ask for "admin_personal_webmail" or "admin_group_webmail" permission.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tablab']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_webmail_settings'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['locSection']->value=='mailbox') {?>
	<table width="100%">
		<tr>
			<td>
				<?php if (empty($_smarty_tpl->tpl_vars['filter']->value)) {?><strong>Show All</strong><?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('filter'=>'')); $_block_repeat=true; echo smarty_block_self_link(array('filter'=>''), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show All<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('filter'=>''), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?> |
				<?php if ($_smarty_tpl->tpl_vars['filter']->value=='unread') {?><strong>Show Unread</strong><?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('filter'=>'unread')); $_block_repeat=true; echo smarty_block_self_link(array('filter'=>'unread'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Unread<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('filter'=>'unread'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?> |
				<?php if ($_smarty_tpl->tpl_vars['filter']->value=='flagged') {?><strong>Show Flagged</strong><?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('filter'=>'flagged')); $_block_repeat=true; echo smarty_block_self_link(array('filter'=>'flagged'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Flagged<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('filter'=>'flagged'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?> |
				<?php if ($_smarty_tpl->tpl_vars['autoRefresh']->value!=0) {?>
					<?php $_smarty_tpl->tpl_vars['tip'] = new Smarty_variable("Auto refresh set for every ".((string)$_smarty_tpl->tpl_vars['autoRefresh']->value)." seconds.", null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('refresh_mail'=>1,'_title'=>$_smarty_tpl->tpl_vars['tip']->value)); $_block_repeat=true; echo smarty_block_self_link(array('refresh_mail'=>1,'_title'=>$_smarty_tpl->tpl_vars['tip']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refresh now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('refresh_mail'=>1,'_title'=>$_smarty_tpl->tpl_vars['tip']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<em></em>
				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('refresh_mail'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('refresh_mail'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refresh<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('refresh_mail'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</td>
			<td align="right" style="text-align:right">
				<?php if ($_smarty_tpl->tpl_vars['flagsPublic']->value=='y') {?>
					Group messages
				<?php } else { ?>
					Messages
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['showstart']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['showend']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

				&nbsp;
				| <?php if ($_smarty_tpl->tpl_vars['first']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('start'=>$_smarty_tpl->tpl_vars['first']->value)); $_block_repeat=true; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['first']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
First<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['first']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>First<?php }?>
				| <?php if ($_smarty_tpl->tpl_vars['prevstart']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('start'=>$_smarty_tpl->tpl_vars['prevstart']->value)); $_block_repeat=true; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['prevstart']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Prev<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['prevstart']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>Prev<?php }?>
				| <?php if ($_smarty_tpl->tpl_vars['nextstart']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('start'=>$_smarty_tpl->tpl_vars['nextstart']->value)); $_block_repeat=true; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['nextstart']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['nextstart']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>Next<?php }?>
				| <?php if ($_smarty_tpl->tpl_vars['last']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('start'=>$_smarty_tpl->tpl_vars['last']->value)); $_block_repeat=true; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['last']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('start'=>$_smarty_tpl->tpl_vars['last']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>Last<?php }?>
			</td>
		</tr>
	</table>
	<br>
	<form action="tiki-webmail.php" method="post" name="mailb">
		<input type="hidden" name="quickFlag" value="">
		<input type="hidden" name="quickFlagMsg" value="">
		<input type="hidden" name="locSection" value="mailbox">
		<input type="submit" class="btn btn-warning btn-sm" name="delete" value="Delete">
		<input type="hidden" name="start" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['start']->value);?>
">
		<select name="action">
			<option value="flag">Mark as flagged</option>
			<option value="unflag">Mark as unflagged</option>
			<option value="read">Mark as read</option>
			<option value="unread">Mark as unread</option>
		</select>
		<input type="submit" class="btn btn-default btn-sm" name="operate" value="Mark">
		<br>
		<br>
		<div class="table-responsive">
			<table class="table webmail_list">
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>'msg[]'),$_smarty_tpl);?>
</th>
					<th>&nbsp;</th>
					<th>Sender</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Size</th>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isRead']=='y') {?>
						<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("webmail_read", null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
					<?php }?>
					<tr class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
						<td class="checkbox-cell">
							<input type="checkbox" name="msg[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgid'];?>
">
							<input type="hidden" name="realmsg[<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgid'];?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['realmsgid']);?>
">
						</td>
						<td class="icon">
							<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isFlagged']=='y') {?>
								<a href="javascript: submit_form('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['realmsgid']);?>
','n')"><img src="img/webmail/flagged.gif" alt="Flagged"></a>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['webmail_quick_flags']=='y') {?>
									<a href="javascript: submit_form('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['realmsgid']);?>
','y')"><img src="img/webmail/unflagged.gif" alt="unFlagged"></a>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['isReplied']=='y') {?>
								<img src="img/webmail/replied.gif" alt="Replied">
							<?php }?>
						</td>
						<td class="email"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['sender']['name'];?>
</td>
						<td class="text">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('msgid'=>$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgid'],'locSection'=>'read')); $_block_repeat=true; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgid'],'locSection'=>'read'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['subject'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgid'],'locSection'=>'read'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['has_attachment']) {?><img src="img/webmail/clip.gif" alt="Clip"><?php }?>
						</td>
						<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['timestamp']);?>
</td>
						<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
</td>
					</tr>
				<?php endfor; endif; ?>
			</table>
		</div>
	</form>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['locSection']->value=='read') {?>
	<?php if ($_smarty_tpl->tpl_vars['prev']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('msgid'=>$_smarty_tpl->tpl_vars['prev']->value)); $_block_repeat=true; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['prev']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Prev<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['prev']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 |<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['next']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('msgid'=>$_smarty_tpl->tpl_vars['next']->value)); $_block_repeat=true; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 |<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('locSection'=>'mailbox')); $_block_repeat=true; echo smarty_block_self_link(array('locSection'=>'mailbox'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back To Mailbox<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('locSection'=>'mailbox'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 |
	<?php if ($_smarty_tpl->tpl_vars['fullheaders']->value=='n') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('msgid'=>$_smarty_tpl->tpl_vars['next']->value,'fullheaders'=>'1')); $_block_repeat=true; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value,'fullheaders'=>'1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Full Headers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value,'fullheaders'=>'1'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('msgid'=>$_smarty_tpl->tpl_vars['next']->value)); $_block_repeat=true; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Normal Headers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('msgid'=>$_smarty_tpl->tpl_vars['next']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<table>
		<tr>
			<td>
				<form method="post" action="tiki-webmail.php">
					<input type="submit" class="btn btn-warning btn-sm" name="delete_one" value="Delete">
					<?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
						<input type="hidden" name="locSection" value="read">
						<input type="hidden" name="msgid" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['next']->value);?>
">
					<?php } else { ?>
						<input type="hidden" name="locSection" value="mailbox">
					<?php }?>
					<input type="hidden" name="msgdel" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['msgid']->value);?>
">
				</form>
			</td>
			<td>
				<form method="post" action="tiki-webmail.php">
					<input type="hidden" name="locSection" value="compose">
					<input type="submit" class="btn btn-default btn-sm" name="reply" value="Reply">
					<input type="hidden" name="realmsgid" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['realmsgid']->value);?>
">
					<input type="hidden" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['replyto']);?>
">
					<input type="hidden" name="subject" value="Re:<?php echo $_smarty_tpl->tpl_vars['headers']->value['subject'];?>
">
					<input type="hidden" name="body" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plainbody']->value);?>
">
				</form>
			</td>
			<td>
				<form method="post" action="tiki-webmail.php">
					<input type="hidden" name="locSection" value="compose">
					<input type="submit" class="btn btn-default btn-sm" name="replyall" value="Reply To All">
					<input type="hidden" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['replyto']);?>
">
					<input type="hidden" name="realmsgid" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['realmsgid']->value);?>
">
					<input type="hidden" name="cc" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['replycc']);?>
">
					<input type="hidden" name="subject" value="Re:<?php echo $_smarty_tpl->tpl_vars['headers']->value['subject'];?>
">
					<input type="hidden" name="body" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plainbody']->value);?>
">
				</form>
			</td>
			<td>
				<form method="post" action="tiki-webmail.php">
					<input type="submit" class="btn btn-default btn-sm" name="reply" value="Forward">
					<input type="hidden" name="locSection" value="compose">
					<input type="hidden" name="to" value="">
					<input type="hidden" name="cc" value="">
					<input type="hidden" name="subject" value="Fw:<?php echo $_smarty_tpl->tpl_vars['headers']->value['subject'];?>
">
					<input type="hidden" name="body" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plainbody']->value);?>
">
				</form>
			</td>
		</tr>
	</table>

	<table class="webmail_message_headers table">
		<?php if ($_smarty_tpl->tpl_vars['fullheaders']->value=='n') {?>
			<tr>
				<th><strong>Subject</strong></th>
				<td><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['subject']);?>
</strong></td>
			</tr>
			<tr>
				<th>From</th>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['from']);?>
</td>
			</tr>
			<tr>
				<th>To</th>
				<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['to']);?>
</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['headers']->value['cc']) {?>
				<tr>
					<th>Cc</th>
					<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headers']->value['cc']);?>
</td>
				</tr>
			<?php }?>
			<tr>
				<th>Date</th>
				<td><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['headers']->value['timestamp'],'','n');?>
</td>
			</tr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fullheaders']->value=='y') {?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
					<td>
						<?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['part'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['part']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['part']->key => $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->_loop = true;
?>
								<?php echo $_smarty_tpl->tpl_vars['part']->value;?>

								<br>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

						<?php }?>
					</td>
				</tr>
			<?php } ?>
		<?php }?>
	</table>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bodies']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<?php $_smarty_tpl->tpl_vars['wmid'] = new Smarty_variable(((('webmail_message_').($_smarty_tpl->tpl_vars['msgid']->value)).('_')).($_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['wmopen'] = new Smarty_variable('y', null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['bodies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contentType']=='text/plain') {?>
			<?php if (count($_smarty_tpl->tpl_vars['bodies']->value)>1) {?>
				<?php $_smarty_tpl->tpl_vars['wmopen'] = new Smarty_variable('n', null, 0);?>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['wmclass'] = new Smarty_variable('webmail_message webmail_mono', null, 0);?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['bodies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contentType']!='text/html') {?>
				<?php $_smarty_tpl->tpl_vars['wmopen'] = new Smarty_variable('n', null, 0);?>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['wmclass'] = new Smarty_variable('webmail_message', null, 0);?>
		<?php }?>
		<div>
			<?php echo smarty_function_button(array('_flip_id'=>$_smarty_tpl->tpl_vars['wmid']->value,'_text'=>("Part: ").($_smarty_tpl->tpl_vars['bodies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contentType']),'_flip_default_open'=>$_smarty_tpl->tpl_vars['wmopen']->value),$_smarty_tpl);?>

		</div>
		<div id="<?php echo $_smarty_tpl->tpl_vars['wmid']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['wmclass']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['wmopen']->value=='n') {?>style="display:none"<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['bodies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['body'];?>

		</div>
	<?php endfor; endif; ?>
	<div>
		<?php echo smarty_function_button(array('_flip_id'=>('webmail_message_source_').($_smarty_tpl->tpl_vars['msgid']->value),'_text'=>"Source: ",'_flip_default_open'=>'n'),$_smarty_tpl);?>

	</div>
	<div id="webmail_message_source_<?php echo $_smarty_tpl->tpl_vars['msgid']->value;?>
" class="webmail_message webmail_mono" style="display:none">
		<?php echo nl2br($_smarty_tpl->tpl_vars['allbodies']->value);?>

	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['attachs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<div class="panel panel-default">
			<div class="panel-body">
				<a class="link" href="tiki-webmail_download_attachment.php?locSection=read&amp;msgid=<?php echo $_smarty_tpl->tpl_vars['msgid']->value;?>
&amp;getpart=<?php echo $_smarty_tpl->tpl_vars['attachs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['part'];?>
"><?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['attachs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
echo $_smarty_tpl->tpl_vars['attachs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</a>
			</div>
		</div>
	<?php endfor; endif; ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['locSection']->value=='compose') {?>
	<?php if ($_smarty_tpl->tpl_vars['attaching']->value=='n') {?>
		<?php if ($_smarty_tpl->tpl_vars['sent']->value=='n') {?>
			<form action="tiki-webmail.php" method="post">
				<input type="hidden" name="locSection" value="compose">
				<input type="hidden" name="current" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['curacctId']->value);?>
">
				<input type="hidden" name="attach1" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1']->value);?>
">
				<input type="hidden" name="attach2" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2']->value);?>
">
				<input type="hidden" name="attach3" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3']->value);?>
">
				<input type="hidden" name="attach1file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1file']->value);?>
">
				<input type="hidden" name="attach2file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2file']->value);?>
">
				<input type="hidden" name="attach3file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3file']->value);?>
">
				<input type="hidden" name="attach1type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1type']->value);?>
">
				<input type="hidden" name="attach2type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2type']->value);?>
">
				<input type="hidden" name="attach3type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3type']->value);?>
">
				<input type="hidden" name="fattId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fattId']->value);?>
">
				<input type="submit" class="btn btn-primary btn-sm" name="send" value="Send">
				<table class="formcolor">
					<tr>
						<td colspan="4">
							Sending from webmail account: <?php echo $_smarty_tpl->tpl_vars['sendFrom']->value;?>

						</td>
					</tr>
					<tr>
						<td>Wiki page after send</td>
						<td colspan="3">
							<input size="69" type="text" name="pageaftersend" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageaftersend']->value);?>
">
						</td>
					</tr>
					<tr>
						<td>
							<a title="Select from address book" class="link" href="#" onclick="javascript:window.open('tiki-webmail_contacts.php?element=to','','menubar=no,width=452,height=550');">To</a>:
						</td>
						<td colspan="3">
							<input size="69" type="text" id="to" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['to']->value);?>
">
						</td>
					</tr>
					<tr>
						<td>
							<a title="Select from address book" class="link" href="#" onclick="javascript:window.open('tiki-webmail_contacts.php?element=cc','','menubar=no,width=452,height=550');">CC</a>:
						</td>
						<td>
							<input id="cc" type="text" name="cc" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cc']->value);?>
"></td>
						<td>
							<a title="Select from address book" class="link" href="#" onclick="javascript:window.open('tiki-webmail_contacts.php?element=bcc','','menubar=no,width=452,height=550');">BCC</a>:
						</td>
						<td>
							<input type="text" name="bcc" value="<?php echo $_smarty_tpl->tpl_vars['bcc']->value;?>
" id="bcc">
						</td>
					</tr>
					<tr>
						<td>Subject</td>
						<td colspan="3">
							<input size="69" type="text" name="subject" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subject']->value);?>
">
						</td>
					</tr>
					<tr>
						<td>Attachments</td>
						<td colspan="3">
							<?php if ($_smarty_tpl->tpl_vars['attach1']->value) {?>
								(<?php echo $_smarty_tpl->tpl_vars['attach1']->value;?>
)
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['attach2']->value) {?>
								(<?php echo $_smarty_tpl->tpl_vars['attach2']->value;?>
)
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['attach3']->value) {?>
								(<?php echo $_smarty_tpl->tpl_vars['attach3']->value;?>
)
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['fattId']->value) {?>
								(File Gallery file: <?php echo $_smarty_tpl->tpl_vars['fattId']->value;?>
)
							<?php }?>
							<input type="submit" class="btn btn-primary btn-sm" name="attach" value="Add">
						</td>
					</tr>
					<tr>
					<tr>
						<td>&nbsp;</td>
						<td colspan="3">
							<!--textarea name="body" cols="60" rows="30"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea-->
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>'body')); $_block_repeat=true; echo smarty_block_textarea(array('name'=>'body'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>'body'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</td>
					</tr>
					<tr>
						<td>Use HTML mail</td>
						<td colspan="3">
							<input type="checkbox" name="useHTML"<?php if ($_smarty_tpl->tpl_vars['useHTML']->value=="y"||$_SESSION['wysiwyg']=="y") {?> checked="checked"<?php }?>>
						</td>
					</tr>
				</table>
			</form>
		<?php } elseif ($_smarty_tpl->tpl_vars['pageaftersend']->value!='') {?>
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

			<br><br>
			<form action="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageaftersend']->value;?>
" method="post">
			Click to go to: <?php echo $_smarty_tpl->tpl_vars['pageaftersend']->value;?>
 <input type="submit" class="btn btn-default btn-sm" name="pageafter" value="Go to page">
			</form>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

			<br><br>
			<?php if ($_smarty_tpl->tpl_vars['notcon']->value=='y') {?>
				The following addresses are not in your address book
				<br><br>
				<form action="tiki-webmail.php" method="post">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>&nbsp;</th>
								<th>Email</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Nickname</th>
							</tr>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['not_contacts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<td class="checkbox-cell">
										<input type="checkbox" name="add[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
]">
										<input type="hidden" name="addemail[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['not_contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
">
									</td>
									<td class="email"><?php echo $_smarty_tpl->tpl_vars['not_contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
</td>
									<td class="text">
										<input type="text" name="addFirstName[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
]">
									</td>
									<td class="text">
										<input type="text" name="addLastName[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
]">
									</td>
									<td class="text">
										<input type="text" name="addNickname[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
]">
									</td>
								</tr>
							<?php endfor; endif; ?>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="submit" class="btn btn-default btn-sm" name="add_contacts" value="Add Contacts">
								</td>
							</tr>
						</table>
					</div>
				</form>
			<?php }?>
		<?php }?>
	<?php } else { ?>
		<form enctype="multipart/form-data" action="tiki-webmail.php" method="post">
			<input type="hidden" name="locSection" value="compose">
			<input type="hidden" name="current" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['curacctId']->value);?>
">
			<input type="hidden" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['to']->value);?>
">
			<input type="hidden" name="cc" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cc']->value);?>
">
			<input type="hidden" name="bcc" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bcc']->value);?>
">
			<input type="hidden" name="subject" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subject']->value);?>
">
			<input type="hidden" name="body" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['body']->value);?>
">
			<input type="hidden" name="attach1" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1']->value);?>
">
			<input type="hidden" name="attach2" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2']->value);?>
">
			<input type="hidden" name="attach3" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3']->value);?>
">
			<input type="hidden" name="attach1file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1file']->value);?>
">
			<input type="hidden" name="attach2file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2file']->value);?>
">
			<input type="hidden" name="attach3file" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3file']->value);?>
">
			<input type="hidden" name="attach1type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach1type']->value);?>
">
			<input type="hidden" name="attach2type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach2type']->value);?>
">
			<input type="hidden" name="attach3type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach3type']->value);?>
">
			<input type="hidden" name="fattId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fattId']->value);?>
">
			<input type="hidden" name="pageaftersend" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageaftersend']->value);?>
">
			<table class="formcolor">
				<?php if ($_smarty_tpl->tpl_vars['attach1']->value) {?>
					<tr>
						<td>Attachment 1</td>
						<td><?php echo $_smarty_tpl->tpl_vars['attach1']->value;?>
 <input type="submit" class="btn btn-default btn-sm" name="remove_attach1" value="Remove"></td>
					</tr>
				<?php } else { ?>
					<tr>
						<td>Attachment 1</td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="1500000">
							<input name="userfile1" type="file">
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['attach2']->value) {?>
					<tr>
						<td>Attachment 2</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['attach2']->value;?>
 <input type="submit" class="btn btn-warning btn-sm" name="remove_attach2" value="Remove">
						</td>
					</tr>
				<?php } else { ?>
					<tr>
						<td>
							Attachment 2
						</td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="1500000"><input name="userfile2" type="file" />
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['attach3']->value) {?>
					<tr>
						<td>Attachment 3</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['attach3']->value;?>
 <input type="submit" class="btn btn-warning btn-sm"name="remove_attach3" value="Remove">
						</td>
					</tr>
				<?php } else { ?>
					<tr>
						<td>Attachment 3</td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="1500000" /><input name="userfile3" type="file">
						</td>
					</tr>
				<?php }?>
				<tr>
					<td>Attach a File Gallery file</td>
					<td>
						<input size="10" type="text" id="fattId" name="fattId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fattId']->value);?>
"> :FileId
					</td>
				</tr>
				<tr>
					<td>Attach a File Gallery file</td>
					<td>
						<input size="10" type="text" id="fattId" name="fattId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fattId']->value);?>
"> :FileId
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" class="btn btn-default btn-sm" name="attached" value="Done">
					</td>
				</tr>
			</table>
		</form>
	<?php }?>
<?php }?>
<?php }} ?>
