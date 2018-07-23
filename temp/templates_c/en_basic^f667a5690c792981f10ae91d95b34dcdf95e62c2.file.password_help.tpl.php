<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:13:50
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12727394105b51455ed2c465-32364916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f667a5690c792981f10ae91d95b34dcdf95e62c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\password_help.tpl',
      1 => 1494482378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12727394105b51455ed2c465-32364916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51455ed37fe3_58691250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51455ed37fe3_58691250')) {function content_5b51455ed37fe3_58691250($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']=='n') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1) {?>
		<div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y') {?>
		<div class="highlight"><em>Password must contain both letters and numbers</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y') {?>
		<div class="highlight"><em>Password must contain at least one lowercase alphabetical character like "a" and one uppercase character like "A".</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y') {?>
		<div class="highlight"><em>Password must contain at least one special character like " / $ % ? & * ( ) _ + ...</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_blacklist']=='y') {?>
		<div class="highlight"><em>Password is too common.</em></div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y') {?>
		<div class="highlight"><em>Password must not contain a consecutive repetition of the same character such as "111" or "aab"</em></div>
	<?php }?>
<?php }?>
<?php }} ?>
