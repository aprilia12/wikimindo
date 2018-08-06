<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_addfreetag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7612570375b67ef46629bc2-15374986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72fbd3fc65364f7fc594c1939d597542670c514' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_addfreetag.tpl',
      1 => 1419756588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7612570375b67ef46629bc2-15374986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wp_addfreetag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef466683d7_36955890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef466683d7_36955890')) {function content_5b67ef466683d7_36955890($_smarty_tpl) {?><?php if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
?><form action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
" method="post" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['wp_addfreetag']->value);?>
">
		<input type="submit" class="btn btn-default btn-sm" value="Add Tag">
	</div>
</form>
<?php }} ?>
