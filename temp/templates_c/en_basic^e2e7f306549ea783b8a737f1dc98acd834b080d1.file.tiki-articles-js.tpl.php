<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:13:07
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-articles-js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6846686475b5539b35c0b81-16789566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e7f306549ea783b8a737f1dc98acd834b080d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-articles-js.tpl',
      1 => 1302740004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6846686475b5539b35c0b81-16789566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'properties' => 0,
    'prop' => 0,
    'value' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5539b35c8883_15602584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5539b35c8883_15602584')) {function content_5b5539b35c8883_15602584($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var articleTypes = new Array();
<?php  $_smarty_tpl->tpl_vars['properties'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['properties']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['properties']->key => $_smarty_tpl->tpl_vars['properties']->value) {
$_smarty_tpl->tpl_vars['properties']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['properties']->key;
?>
	typeProp = new Array();
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['prop']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		typeProp['<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prop']->value);?>
'] = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
';
	<?php } ?>
	articleTypes['<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
'] = typeProp;
<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
