<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:46
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2862229985b691086c28bc1-77890423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c2a53032111f9d5b8b4ba953ba2ddc18a1a980e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-ajax_header.tpl',
      1 => 1302740004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2862229985b691086c28bc1-77890423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691086c2ca43_83610368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691086c2ca43_83610368')) {function content_5b691086c2ca43_83610368($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>
