<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 04:30:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\confirm_user_email_after_approval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10486370535b7b7962628a89-26070576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe0117060b777c986f9ce49a4d5eda5ca869937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\confirm_user_email_after_approval.tpl',
      1 => 1463558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10486370535b7b7962628a89-26070576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'validation_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b796265b713_44660385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b796265b713_44660385')) {function content_5b7b796265b713_44660385($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
The administrator approved your account.
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To validate your account and login to the <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
site, please click on the following link:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['validation_url']->value;?>

<?php }} ?>
