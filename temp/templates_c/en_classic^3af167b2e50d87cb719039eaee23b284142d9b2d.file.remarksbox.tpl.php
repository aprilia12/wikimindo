<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\remarksbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15727393645b51656ebe2130-40005304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af167b2e50d87cb719039eaee23b284142d9b2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\remarksbox.tpl',
      1 => 1497181186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15727393645b51656ebe2130-40005304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'remarksbox_id' => 0,
    'remarksbox_class' => 0,
    'remarksbox_close' => 0,
    'remarksbox_highlight' => 0,
    'remarksbox_hidden' => 0,
    'remarksbox_title' => 0,
    'remarksbox_content' => 0,
    'remarksbox_cookie' => 0,
    'remarksbox_cookiehash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51656ebe9e33_28594694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51656ebe9e33_28594694')) {function content_5b51656ebe9e33_28594694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<div <?php if ($_smarty_tpl->tpl_vars['remarksbox_id']->value) {?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
"<?php }?> class="alert <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_class']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?>alert-dismissable<?php }?> <?php if ($_smarty_tpl->tpl_vars['remarksbox_highlight']->value) {
echo $_smarty_tpl->tpl_vars['remarksbox_highlight']->value;
}
if ($_smarty_tpl->tpl_vars['remarksbox_hidden']->value) {?> hide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php }?><h4><?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['remarksbox_icon']->value)),$_smarty_tpl);?>
&nbsp;<span class="rboxtitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_title']->value);?>
</span></h4><div class="rboxcontent" style="display: inline"><?php echo $_smarty_tpl->tpl_vars['remarksbox_content']->value;?>
</div></div>

<?php if ($_smarty_tpl->tpl_vars['remarksbox_cookie']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("button.close", "#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
").click(function() {
	setCookie("<?php echo $_smarty_tpl->tpl_vars['remarksbox_cookiehash']->value;?>
", "1", "rbox");
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
