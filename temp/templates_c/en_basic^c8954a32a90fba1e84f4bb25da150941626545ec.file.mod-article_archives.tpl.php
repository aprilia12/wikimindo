<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 03:49:20
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-article_archives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2409564185b55342057a280-80550371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8954a32a90fba1e84f4bb25da150941626545ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-article_archives.tpl',
      1 => 1302740004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409564185b55342057a280-80550371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'modArticleArchives' => 0,
    'nonums' => 0,
    'maa_value' => 0,
    'maa_key' => 0,
    'arch_count' => 0,
    'more' => 0,
    'urlParams' => 0,
    'urlParam' => 0,
    'urlParamKey' => 0,
    'queryArgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5534205d7e91_59229787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5534205d7e91_59229787')) {function content_5b5534205d7e91_59229787($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"article_archives",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"article_archives",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['modArticleArchives']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value)); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modArticleArchives']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php  $_smarty_tpl->tpl_vars['maa_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maa_value']->_loop = false;
 $_smarty_tpl->tpl_vars['maa_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modArticleArchives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maa_value']->key => $_smarty_tpl->tpl_vars['maa_value']->value) {
$_smarty_tpl->tpl_vars['maa_value']->_loop = true;
 $_smarty_tpl->tpl_vars['maa_key']->value = $_smarty_tpl->tpl_vars['maa_value']->key;
?>
		<li>
			<a class="linkmodule" href="tiki-view_articles.php?date_min=<?php echo $_smarty_tpl->tpl_vars['maa_value']->value['start_month'];?>
&amp;date_max=<?php echo $_smarty_tpl->tpl_vars['maa_value']->value['end_month'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['maa_key']->value;
if ($_smarty_tpl->tpl_vars['arch_count']->value=='y') {?> [<?php echo $_smarty_tpl->tpl_vars['maa_value']->value['item_count'];?>
]<?php }?></a>
		</li>
	<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modArticleArchives']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['more']->value=='y') {?>
	<div class="more">
		<?php $_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable('', null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['urlParam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urlParam']->_loop = false;
 $_smarty_tpl->tpl_vars['urlParamKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['urlParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['urlParam']->key => $_smarty_tpl->tpl_vars['urlParam']->value) {
$_smarty_tpl->tpl_vars['urlParam']->_loop = true;
 $_smarty_tpl->tpl_vars['urlParamKey']->value = $_smarty_tpl->tpl_vars['urlParam']->key;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['urlParam']->value)&&!empty($_smarty_tpl->tpl_vars['module_params']->value[$_smarty_tpl->tpl_vars['urlParamKey']->value])) {?>
				<?php if (empty($_smarty_tpl->tpl_vars['queryArgs']->value)) {
$_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable('?', null, 0);
} else {
$_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['queryArgs']->value)."&amp;", null, 0);
}?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'queryArgs', null); ob_start();
echo $_smarty_tpl->tpl_vars['queryArgs']->value;
echo $_smarty_tpl->tpl_vars['urlParam']->value;?>
=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value[$_smarty_tpl->tpl_vars['urlParamKey']->value],"url");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>
		<?php } ?>
		<?php echo smarty_function_button(array('class'=>'more','href'=>"tiki-view_articles.php".((string)$_smarty_tpl->tpl_vars['queryArgs']->value),'_text'=>"More..."),$_smarty_tpl);?>

	</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"article_archives",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
