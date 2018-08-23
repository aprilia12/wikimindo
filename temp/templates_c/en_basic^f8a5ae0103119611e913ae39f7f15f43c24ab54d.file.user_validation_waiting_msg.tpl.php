<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 04:30:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\user_validation_waiting_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10719300885b7b793f7ac668-36949237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a5ae0103119611e913ae39f7f15f43c24ab54d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\user_validation_waiting_msg.tpl',
      1 => 1463558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10719300885b7b793f7ac668-36949237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b793f7b4361_47367561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b793f7b4361_47367561')) {function content_5b7b793f7b4361_47367561($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate']=='y') {?>
	<strong>Your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account ID <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 has been generated.</strong>
<?php }?>
Your account request has been stored and will be activated by the admin as soon as possible.
You'll receive email notification once your account is activated.
Please do not attempt to login until you receive the email notification.
<?php }} ?>
