<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5833207625b6910871f3870-90955571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc99787ef57e3de099c10fb6a708e58a467cf8e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\credits.tpl',
      1 => 1421663942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5833207625b6910871f3870-90955571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6910871f76f3_03670077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6910871f76f3_03670077')) {function content_5b6910871f76f3_03670077($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
