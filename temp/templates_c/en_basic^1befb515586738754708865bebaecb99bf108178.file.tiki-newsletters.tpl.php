<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 05:18:56
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-newsletters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8569010295b739ba0dafec7-94504648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1befb515586738754708865bebaecb99bf108178' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-newsletters.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8569010295b739ba0dafec7-94504648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_newsletters' => 0,
    'subscribed' => 0,
    'unsub' => 0,
    'confirm' => 0,
    'nl_info' => 0,
    'subscribe' => 0,
    'nlId' => 0,
    'tiki_p_subscribe_email' => 0,
    'user' => 0,
    'email' => 0,
    'prefs' => 0,
    'showlist' => 0,
    'channels' => 0,
    'find' => 0,
    'js' => 0,
    'libeg' => 0,
    'liend' => 0,
    'tiki_p_view_newsletter' => 0,
    'cant' => 0,
    'offset' => 0,
    'maxRecords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b739ba0e445e0_99729463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b739ba0e445e0_99729463')) {function content_5b739ba0e445e0_99729463($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Newsletters")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Newsletters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Newsletters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Newsletters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_newsletters']->value=="y") {?>
	<div class="t_navbar">
		<a role="link" href="tiki-admin_newsletters.php" class="btn btn-link" title="Admin Newsletters">
			<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Admin Newsletters
		</a>

	</div>
<?php }?>
<br>
<?php if ($_smarty_tpl->tpl_vars['subscribed']->value=='y') {?>
	<div class="alert alert-warning">
		Thanks for your subscription. You will receive an email soon to confirm your subscription. No newsletters will be sent to you until the subscription is confirmed.
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['unsub']->value=='y') {?>
	<div class="alert alert-warning">
		Your email address was removed from the list of subscriptors.
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['unsub']->value=='f') {?>
	<div class="alert alert-danger">Removal of your email address failed.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['confirm']->value=='y') {?>
	<table class="formcolor">
		<tr>
			<th colspan="2" class="highlight">Subscription confirmed!</th>
		</tr>
		<tr>
			<td>Name:</td>
			<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nl_info']->value['name']);?>
</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['nl_info']->value['description']));?>
</td>
		</tr>
	</table>
	<br>
<?php } elseif ($_smarty_tpl->tpl_vars['confirm']->value=='f') {?>
	<div class="simplebox error">Subscription failed.</div>
	<br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['subscribe']->value=='y') {?>
	<h2>
		Subscribe to Newsletter
	</h2>
	<br>
	<form method="post" action="tiki-newsletters.php" class="form-horizontal">
		<input type="hidden" name="nlId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nlId']->value);?>
">
		<div class="form-group">
			<label class="col-sm-3 control-label">Name</label>
			<div class="col-sm-7">
				<p class="form-control-static"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nl_info']->value['name']);?>
</p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Description</label>
			<div class="col-sm-7">
				<p class="form-control-static"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['nl_info']->value['description']));?>
</p>
			</div>
		</div>
		<?php if (($_smarty_tpl->tpl_vars['nl_info']->value['allowUserSub']=='y')||($_smarty_tpl->tpl_vars['tiki_p_admin_newsletters']->value=='y')) {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_subscribe_email']->value=='y'&&(($_smarty_tpl->tpl_vars['nl_info']->value['allowAnySub']=='y'&&$_smarty_tpl->tpl_vars['user']->value)||!$_smarty_tpl->tpl_vars['user']->value)) {?>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="email">Email</label>
					<div class="col-sm-7">
						<input type="text" name="email" id="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value);?>
" class="form-control">
					</div>
				</div>
			<?php } else { ?>
				<input type="hidden" name="email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value);?>
">
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor"), 0);?>

			<?php }?>
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-7">
					<input type="submit" class="btn btn-primary btn-sm" name="subscribe" value="Subscribe to this Newsletter">
				</div>
			</div>
		<?php }?>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['showlist']->value=='y') {?>
	<h2>Available Newsletters</h2>

	<?php if ($_smarty_tpl->tpl_vars['channels']->value||$_smarty_tpl->tpl_vars['find']->value!='') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>

	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
		<table class="table table-striped table-hover">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Newsletter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th style="width:100px"></th>
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
				<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['tiki_p_subscribe_newsletters']=='y'||$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['tiki_p_list_newsletters']=='y') {?>
					<tr>
						<td class="text">
							<a class="tablename" href="tiki-newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
&amp;info=1" title="Subscribe to Newsletter"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
</a>
							<div class="subcomment"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description']));?>
</div>
						</td>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('newsletter_actions', null, null); ob_start(); ?>
								<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['tiki_p_subscribe_newsletters']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
&amp;info=1"><?php echo smarty_function_icon(array('name'=>'add','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Subscribe"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['tiki_p_send_newsletters']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-send_newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'envelope','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Send"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_view_newsletter']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-newsletter_archives.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'file-archive','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Archives"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['tiki_p_admin_newsletters']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
&amp;cookietab=2#anchor2"><?php echo smarty_function_icon(array('name'=>'cog','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Admin"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['newsletter_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['newsletter_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
				<?php }?>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
