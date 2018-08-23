<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 04:30:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\confirm_user_email_after_approval_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13508201975b7b7962682821-04897120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad8d4f3bc0baca5941b80b849ef5c0c1f05e66a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\confirm_user_email_after_approval_subject.tpl',
      1 => 1463558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13508201975b7b7962682821-04897120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b79626866a9_67060543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b79626866a9_67060543')) {function content_5b7b79626866a9_67060543($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
email at %s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
