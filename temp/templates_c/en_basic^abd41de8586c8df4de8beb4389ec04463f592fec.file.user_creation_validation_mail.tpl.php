<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:19:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\user_creation_validation_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15709937465b5146b61b7758-15514882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd41de8586c8df4de8beb4389ec04463f592fec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\user_creation_validation_mail.tpl',
      1 => 1465879118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15709937465b5146b61b7758-15514882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
    'mail_machine' => 0,
    'mail_user' => 0,
    'mail_apass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5146b61ea3e5_69535830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5146b61ea3e5_69535830')) {function content_5b5146b61ea3e5_69535830($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>Hi,

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An administrator of the <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
site below has added you as a new user:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['mail_site']->value;?>


If you want to confirm your membership in this site, click on the following link to login for the first time:
	<?php echo $_smarty_tpl->tpl_vars['mail_machine']->value;?>
?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_user']->value,'url');?>
&pass=<?php echo $_smarty_tpl->tpl_vars['mail_apass']->value;?>


Welcome to the site!

<?php }} ?>
