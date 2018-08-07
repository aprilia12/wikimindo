<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13477189095b69104be3f0c0-63177548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '13477189095b69104be3f0c0-63177548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69104be46dc2_64536582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69104be46dc2_64536582')) {function content_5b69104be46dc2_64536582($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
