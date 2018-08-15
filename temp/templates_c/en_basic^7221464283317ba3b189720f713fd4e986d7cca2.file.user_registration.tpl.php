<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:51:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\user_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8014136615b6d19b8ee7b96-10952495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7221464283317ba3b189720f713fd4e986d7cca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\user_registration.tpl',
      1 => 1516603114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8014136615b6d19b8ee7b96-10952495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'openid_associate' => 0,
    'allowRegister' => 0,
    'userTrackerData' => 0,
    'prefs' => 0,
    'merged_prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d19b90515c2_10318664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d19b90515c2_10318664')) {function content_5b6d19b90515c2_10318664($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>

	<?php echo $_smarty_tpl->getSubTemplate ('password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['openid_associate']->value!='n') {?>
		<h1>Your OpenID identity is valid</h1>
		<p>However, no account is associated to the OpenID identifier.</p>
	<?php }?>
	<div class="alert alert-warning" id="divRegCapson" style="display: none;"><?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock is on.</div>
	<?php if ($_smarty_tpl->tpl_vars['allowRegister']->value=='y') {?>
		<div class="row">
			<div class="col-sm-12">
				<?php if ($_smarty_tpl->tpl_vars['userTrackerData']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['userTrackerData']->value;?>

				<?php } else { ?>
					<form action="tiki-register.php<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?>?key=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['registerKey'],'url');
}?>" class="form-horizontal" method="post" name="RegForm">
						<?php if ($_REQUEST['invite']) {?><input type='hidden' name='invite' value='<?php echo smarty_modifier_escape($_REQUEST['invite']);?>
'><?php }?>
						<?php echo $_smarty_tpl->getSubTemplate ("register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php if ($_smarty_tpl->tpl_vars['merged_prefs']->value['feature_antibot']=='y') {
echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>'register'), 0);
}?>
						<div class="row margin-bottom-md">
							<div class="col-sm-8 col-sm-offset-4">
							  <input type="hidden" name="register" value="1">
							  <button class="btn btn-primary registerSubmit submit" name="register" type="submit">Register <!--i class="fa fa-check"></i--></button>
							</div>
						</div>
					</form>
				<?php }?>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-4">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_protect_email']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['sender_email'] = new Smarty_variable(smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['prefs']->value['sender_email'])===null||$tmp==='' ? "this domain" : $tmp),'hexentity'), null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['sender_email'] = new Smarty_variable(smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['prefs']->value['sender_email'])===null||$tmp==='' ? "this domain" : $tmp)), null, 0);?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If you use an email filter, be sure to add %0 to your accepted list<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['openid_associate']->value=='y') {?>
		<p>
			Associate OpenID with an existing Tiki account
		</p>
		<?php echo $_smarty_tpl->getSubTemplate ("modules/mod-login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ('modules/mod-login_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nobox'=>'y'), 0);?>

<?php }?>

<?php }} ?>
