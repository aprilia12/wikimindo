<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:51:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7994565835b6d19b8e82285-60602348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20971c4da97a0d334ae07db2d63fad1589321f5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-register.tpl',
      1 => 1445722236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7994565835b6d19b8e82285-60602348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showmsg' => 0,
    'msg' => 0,
    'user_exists' => 0,
    'userTrackerHasDescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d19b8ec4915_77883102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d19b8ec4915_77883102')) {function content_5b6d19b8ec4915_77883102($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_user_registration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.user_registration.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('adminpage'=>'login')); $_block_repeat=true; echo smarty_block_title(array('adminpage'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('adminpage'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!empty($_smarty_tpl->tpl_vars['showmsg']->value)&&$_smarty_tpl->tpl_vars['showmsg']->value=='y') {?>
	<div class="simplebox highlight">
		<?php echo nl2br($_smarty_tpl->tpl_vars['msg']->value);?>

	</div>
<?php }?>
<fieldset>
	<?php if ($_smarty_tpl->tpl_vars['user_exists']->value!=true) {?>
		<?php if (!isset($_smarty_tpl->tpl_vars['userTrackerHasDescription']->value)) {?>
			<legend>Register as a new user</legend>
		<?php }?>
	<?php }?>
	<?php echo smarty_function_user_registration(array(),$_smarty_tpl);?>

</fieldset><?php }} ?>
