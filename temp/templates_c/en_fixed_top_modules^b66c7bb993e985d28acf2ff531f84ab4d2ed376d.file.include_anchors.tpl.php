<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:26
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_anchors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4560144855b691036e42575-72653401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66c7bb993e985d28acf2ff531f84ab4d2ed376d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_anchors.tpl',
      1 => 1515405762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4560144855b691036e42575-72653401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_icons' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691036e463f3_12444142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691036e463f3_12444142')) {function content_5b691036e463f3_12444142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
	<?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
		<li><a href="tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="tips bottom slow icon" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
			<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

		</a></li>
	<?php }?>
<?php } ?><?php }} ?>
