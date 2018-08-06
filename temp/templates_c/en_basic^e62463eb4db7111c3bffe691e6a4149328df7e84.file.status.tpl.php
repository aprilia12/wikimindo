<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 06:26:37
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\trackerinput\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19148896505b67cdfda6e004-53596012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62463eb4db7111c3bffe691e6a4149328df7e84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\trackerinput\\status.tpl',
      1 => 1469656324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19148896505b67cdfda6e004-53596012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_types' => 0,
    'st' => 0,
    'stinfo' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67cdfda71e80_00296373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67cdfda71e80_00296373')) {function content_5b67cdfda71e80_00296373($_smarty_tpl) {?><select name="status" class="form-control">
	<?php  $_smarty_tpl->tpl_vars['stinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stinfo']->key => $_smarty_tpl->tpl_vars['stinfo']->value) {
$_smarty_tpl->tpl_vars['stinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stinfo']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['st']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['stinfo']->value['name']==$_smarty_tpl->tpl_vars['status']->value) {?> selected="selected"<?php }?>
			class="tracker-<?php echo $_smarty_tpl->tpl_vars['stinfo']->value['iconname'];?>
">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stinfo']->value['label']);?>

		</option>
	<?php } ?>
</select>
<?php }} ?>
