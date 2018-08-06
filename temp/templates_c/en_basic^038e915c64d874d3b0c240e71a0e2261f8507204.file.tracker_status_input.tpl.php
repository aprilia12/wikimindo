<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:59:16
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_status_input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2872587225b67b98445dca0-37230548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '038e915c64d874d3b0c240e71a0e2261f8507204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_status_input.tpl',
      1 => 1416589936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2872587225b67b98445dca0-37230548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_status' => 0,
    'status_types' => 0,
    'st' => 0,
    'item' => 0,
    'tracker' => 0,
    'stdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b9844a0334_53859663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b9844a0334_53859663')) {function content_5b67b9844a0334_53859663($_smarty_tpl) {?>
<select name="<?php echo $_smarty_tpl->tpl_vars['form_status']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['stdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stdata']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stdata']->key => $_smarty_tpl->tpl_vars['stdata']->value) {
$_smarty_tpl->tpl_vars['stdata']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stdata']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['st']->value;?>
"
			<?php if ((empty($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['tracker']->value['newItemStatus']==$_smarty_tpl->tpl_vars['st']->value)||(!empty($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value['status']==$_smarty_tpl->tpl_vars['st']->value)) {?> selected="selected"<?php }?>
			style="background: url('<?php echo $_smarty_tpl->tpl_vars['stdata']->value['image'];?>
') no-repeat;padding-left:17px;">
			<?php echo $_smarty_tpl->tpl_vars['stdata']->value['label'];?>

		</option>
	<?php } ?>
</select><?php }} ?>
