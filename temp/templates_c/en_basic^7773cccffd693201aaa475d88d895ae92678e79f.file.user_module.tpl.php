<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:07:48
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\user_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3698348805b5143f492b819-38405230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7773cccffd693201aaa475d88d895ae92678e79f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\user_module.tpl',
      1 => 1302740004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3698348805b5143f492b819-38405230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'user_title' => 0,
    'user_module_name' => 0,
    'module_type' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5143f49ac6b0_83469857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5143f49ac6b0_83469857')) {function content_5b5143f49ac6b0_83469857($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_modifier_stringfix')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.stringfix.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['user_title']->value,'name'=>$_smarty_tpl->tpl_vars['user_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'overflow'=>$_smarty_tpl->tpl_vars['module_params']->value['overflow'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value)); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['user_title']->value,'name'=>$_smarty_tpl->tpl_vars['user_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'overflow'=>$_smarty_tpl->tpl_vars['module_params']->value['overflow'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div id="<?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['user_module_name']->value,' ','_');?>
" <?php if ((isset($_COOKIE[$_smarty_tpl->tpl_vars['user_module_name']->value])&&$_COOKIE[$_smarty_tpl->tpl_vars['user_module_name']->value]!='c')||!isset($_COOKIE[$_smarty_tpl->tpl_vars['user_module_name']->value])) {?>style="display:block;"<?php } else { ?>style="display:none;"<?php }?>>
<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['user_data']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['user_title']->value,'name'=>$_smarty_tpl->tpl_vars['user_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'overflow'=>$_smarty_tpl->tpl_vars['module_params']->value['overflow'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
