<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:36:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\file_properties_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5200643245b63bfc137d8c0-27669955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb9c287ee657729d5576a229c3a09d14f7999a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\file_properties_table.tpl',
      1 => 1504891780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5200643245b63bfc137d8c0-27669955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fgal_listing_conf' => 0,
    'item' => 0,
    'propname' => 0,
    'file' => 0,
    'tmp_prop' => 0,
    'email' => 0,
    'propval' => 0,
    'propkey' => 0,
    'gal_info' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bfc13a0b56_86965930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bfc13a0b56_86965930')) {function content_5b63bfc13a0b56_86965930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_long_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
?>
<table><?php  $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_smarty_tpl->tpl_vars['propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
 $_smarty_tpl->tpl_vars['propname']->value = $_smarty_tpl->tpl_vars['prop']->key;
if (isset($_smarty_tpl->tpl_vars['item']->value['key'])) {
$_smarty_tpl->tpl_vars['propkey'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['key'], null, 0);
} else {
$_smarty_tpl->tpl_vars['propkey'] = new Smarty_variable("show_".((string)$_smarty_tpl->tpl_vars['propname']->value), null, 0);
}
if (isset($_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->tpl_vars['propname']->value])) {
if ($_smarty_tpl->tpl_vars['propname']->value=='share'&&isset($_smarty_tpl->tpl_vars['file']->value['share']['data'])) {
$_smarty_tpl->tpl_vars['email'] = new Smarty_variable(array(), null, 0);
$_smarty_tpl->tpl_vars['tmp_prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tmp_prop']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp_propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file']->value['share']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tmp_prop']->key => $_smarty_tpl->tpl_vars['tmp_prop']->value) {
$_smarty_tpl->tpl_vars['tmp_prop']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp_propname']->value = $_smarty_tpl->tpl_vars['tmp_prop']->key;
$_smarty_tpl->createLocalArrayVariable('email', null, 0);
$_smarty_tpl->tpl_vars['email']->value[] = $_smarty_tpl->tpl_vars['tmp_prop']->value['email'];
}
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['email']->value,','), null, 0);
} else {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['file']->value[$_smarty_tpl->tpl_vars['propname']->value], null, 0);
}
}
if ($_smarty_tpl->tpl_vars['propname']->value=='created'||$_smarty_tpl->tpl_vars['propname']->value=='lastModif'||$_smarty_tpl->tpl_vars['propname']->value=='lastDownload') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['propval']->value), null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='last_user'||$_smarty_tpl->tpl_vars['propname']->value=='author'||$_smarty_tpl->tpl_vars['propname']->value=='creator') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_username($_smarty_tpl->tpl_vars['propval']->value), null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='size') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_kbsize($_smarty_tpl->tpl_vars['propval']->value,true), null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='description') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(nl2br($_smarty_tpl->tpl_vars['propval']->value), null, 0);
}
if (isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value])&&$_smarty_tpl->tpl_vars['propval']->value!=''&&($_smarty_tpl->tpl_vars['propname']->value!='name'||$_smarty_tpl->tpl_vars['view']->value=='page')&&($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value]=='a'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value]=='o'||($_smarty_tpl->tpl_vars['view']->value=='page'&&($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value]!='n'||$_smarty_tpl->tpl_vars['propname']->value=='name')))) {?><tr><td class="pull-right"><b><?php echo $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['propname']->value]['name'];?>
</b></td><td style="padding-left:5px"><span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['propval']->value;?>
</span></td></tr><?php }
} ?></table><?php }} ?>
