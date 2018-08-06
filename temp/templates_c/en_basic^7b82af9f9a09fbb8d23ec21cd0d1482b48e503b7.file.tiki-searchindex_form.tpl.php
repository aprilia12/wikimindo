<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:43:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-searchindex_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18228939625b63c15624caf0-80908324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b82af9f9a09fbb8d23ec21cd0d1482b48e503b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-searchindex_form.tpl',
      1 => 1426569024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18228939625b63c15624caf0-80908324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'filter' => 0,
    'results' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c1562547f5_37510530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c1562547f5_37510530')) {function content_5b63c1562547f5_37510530($_smarty_tpl) {?><?php if (!is_callable('smarty_block_filter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.filter.php';
?>
<div class="margin-bottom-md nohighlight">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_search_box']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('filter', array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value)); $_block_repeat=true; echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</div><!--nohighlight-->
	

<?php if (isset($_smarty_tpl->tpl_vars['results']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['results']->value;?>

<?php }?>
<?php }} ?>
