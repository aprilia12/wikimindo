<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:02:24
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\menu\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957623275b51971043f7d9-76873157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc494514aaa4b4db3c122c895d254107725511b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\menu\\preview.tpl',
      1 => 1511273570,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957623275b51971043f7d9-76873157',
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
  'unifunc' => 'content_5b5197104e7784_03030006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5197104e7784_03030006')) {function content_5b5197104e7784_03030006($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_menu')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.menu.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuInfo']->value['title']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<h2>Smarty Code</h2>
	<pre id="preview_code">
	{menu id=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
 type=<?php echo $_smarty_tpl->tpl_vars['preview_type']->value;?>
 css=<?php echo $_smarty_tpl->tpl_vars['preview_css']->value;?>
 bootstrap=<?php echo $_smarty_tpl->tpl_vars['preview_bootstrap']->value;?>
}</pre>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuInfo']->value['name']);?>
</h3>
		</div>
		<div class="panel-body clearfix">
			<?php echo smarty_function_menu(array('id'=>$_smarty_tpl->tpl_vars['menuId']->value,'type'=>$_smarty_tpl->tpl_vars['preview_type']->value,'css'=>$_smarty_tpl->tpl_vars['preview_css']->value,'bootstrap'=>$_smarty_tpl->tpl_vars['preview_bootstrap']->value),$_smarty_tpl);?>

		</div>
	</div>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
