<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 06:52:12
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki_full.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7150055865b555efca9ef74-09856359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fb0b72c1ca88908afbf86b6755559a7285a43c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki_full.tpl',
      1 => 1416589936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7150055865b555efca9ef74-09856359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'mid_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b555efcad1bf3_43482888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b555efcad1bf3_43482888')) {function content_5b555efcad1bf3_43482888($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>">
	<head>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
<div dir="rtl">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<div id="main">
	<div id="tiki-center">
		<div id="role_main">
			<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

		</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>
<?php }} ?>
