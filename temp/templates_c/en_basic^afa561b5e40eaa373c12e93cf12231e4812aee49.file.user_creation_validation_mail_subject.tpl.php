<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:19:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\user_creation_validation_mail_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3994382995b5146b63ede50-29476011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa561b5e40eaa373c12e93cf12231e4812aee49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\user_creation_validation_mail_subject.tpl',
      1 => 1463558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3994382995b5146b63ede50-29476011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5146b63f99e9_18239984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5146b63f99e9_18239984')) {function content_5b5146b63f99e9_18239984($_smarty_tpl) {?>Your personal access to <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php }} ?>
