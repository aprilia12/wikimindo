<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16387790205b691037be8f86-86433305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '16387790205b691037be8f86-86433305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691037bf0c88_33553717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691037bf0c88_33553717')) {function content_5b691037bf0c88_33553717($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
