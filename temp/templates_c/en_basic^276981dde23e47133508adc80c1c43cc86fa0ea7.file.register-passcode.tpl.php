<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-passcode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17968162825b5159082cab63-45540889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '276981dde23e47133508adc80c1c43cc86fa0ea7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-passcode.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17968162825b5159082cab63-45540889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5159082e60e2_92343211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5159082e60e2_92343211')) {function content_5b5159082e60e2_92343211($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input type="password" name="passcode" id="passcode" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory']!='y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useRegisterPasscode']=='y') {?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="passcode">Passcode to register <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
			</label>
			<div class="col-sm-8">
				<input class="form-control" required="" type="password" name="passcode" id="passcode" onkeypress="regCapsLock(event)" value="<?php if (!empty($_POST['passcode'])) {
echo $_POST['passcode'];
}?>">
				<em class="help-block">Not your password. <span id="passcode-help" style="display:none">To request a passcode, <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contact']=='y') {?><a href="tiki-contact.php"><?php }?>
					contact the system administrator<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contact']=='y') {?></a><?php }?>.</span>
				</em>
			</div>
		</div>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useRegisterPasscode']=='y'&&!empty($_smarty_tpl->tpl_vars['prefs']->value['registerPasscode'])&&$_smarty_tpl->tpl_vars['prefs']->value['showRegisterPasscode']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('span#passcode-help')
		.html("The passcode (to block robots from registration) is: <b><?php echo $_smarty_tpl->tpl_vars['prefs']->value['registerPasscode'];?>
</b>").css('display', 'inline');
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('span#passcode-help').css('display', 'inline');
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
