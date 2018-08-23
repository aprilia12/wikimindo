<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 04:30:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\moderate_validation_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12893960475b7b793f6c2022-86684602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27e87ef9e61421f57a641f135ce38774c48f11ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\moderate_validation_mail.tpl',
      1 => 1463558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12893960475b7b793f6c2022-86684602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mail_again' => 0,
    'mail_user' => 0,
    'mail_email' => 0,
    'mail_site' => 0,
    'prefs' => 0,
    'chosenGroup' => 0,
    'item' => 0,
    'field_value' => 0,
    'validation_url' => 0,
    'assignuser_url' => 0,
    'userpref_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b793f727946_01494514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b793f727946_01494514')) {function content_5b7b793f727946_01494514($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_trackeroutput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackeroutput.php';
?>Hi,

<?php if ($_smarty_tpl->tpl_vars['mail_again']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
 <<?php echo $_smarty_tpl->tpl_vars['mail_email']->value;?>
> has requested a new password on <?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>
, but you need to validate his <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account first<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
 <<?php echo $_smarty_tpl->tpl_vars['mail_email']->value;?>
> has requested an account on <?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['chosenGroup']->value)) {?>
Group: <?php echo $_smarty_tpl->tpl_vars['chosenGroup']->value;
}?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['item']->value)) {?>

User Tracker
<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['field_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['field_value']->value['name'];?>
: <?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['field_value']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'list_mode'=>'csv','showlinks'=>'n'),$_smarty_tpl);?>

<?php } ?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To validate that <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account, please follow the link:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['validation_url']->value;?>


Assign to a group: <?php echo $_smarty_tpl->tpl_vars['assignuser_url']->value;?>

View user's data: <?php echo $_smarty_tpl->tpl_vars['userpref_url']->value;?>



Best regards

<?php }} ?>
