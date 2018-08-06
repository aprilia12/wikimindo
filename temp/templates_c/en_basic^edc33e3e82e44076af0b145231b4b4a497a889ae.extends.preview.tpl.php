<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:04:51
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\edit\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21303889165b63b8430e8c59-52019868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5d3eaf88674ca2c257ab2ebbca3f0ae570cabad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\edit\\preview.tpl',
      1 => 1419109546,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21303889165b63b8430e8c59-52019868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b84313ace2_87740146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b84313ace2_87740146')) {function content_5b63b84313ace2_87740146($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['inPage']->value) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['parsed_footnote']->value)) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div><?php }
} else {
echo $_smarty_tpl->tpl_vars['parsed']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
