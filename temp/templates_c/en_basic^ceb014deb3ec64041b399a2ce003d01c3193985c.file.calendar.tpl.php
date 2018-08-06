<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:19:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444827605b67b02da54933-03376173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb014deb3ec64041b399a2ce003d01c3193985c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\calendar.tpl',
      1 => 1316159530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444827605b67b02da54933-03376173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b02daa8f35_58508872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b02daa8f35_58508872')) {function content_5b67b02daa8f35_58508872($_smarty_tpl) {?><body>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_edit_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
</body>
<?php }} ?>
