<?php /* Smarty version Smarty-3.1.21, created on 2018-08-20 03:16:52
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\bootstrap_menu_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3824302935b7a168445d744-68907700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62de864f89203e5d08fe9d4ab7de6c10f2bf4d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\bootstrap_menu_navbar.tpl',
      1 => 1519808476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3824302935b7a168445d744-68907700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bs_menu_class' => 0,
    'list' => 0,
    'item' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7a168457e880_70451871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7a168457e880_70451871')) {function content_5b7a168457e880_70451871($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><ul class="<?php if ($_smarty_tpl->tpl_vars['bs_menu_class']->value) {
echo $_smarty_tpl->tpl_vars['bs_menu_class']->value;
} else { ?>nav navbar-nav<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
			<li class="dropdown<?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['class']);?>
">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
						<li class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sub']->value['class']);
if ((($tmp = @$_smarty_tpl->tpl_vars['sub']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?>"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sub']->value['sefurl']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['sub']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<?php } ?>
				</ul>
			</li>
		<?php } else { ?>
			<li class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['class']);
if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?>"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['sefurl']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
		<?php }?>
	<?php } ?>
</ul>
<?php }} ?>
