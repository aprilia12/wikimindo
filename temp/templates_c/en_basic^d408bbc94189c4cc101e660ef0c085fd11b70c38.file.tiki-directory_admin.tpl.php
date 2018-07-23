<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:15:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-directory_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17488558405b553a446650e9-08481043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd408bbc94189c4cc101e660ef0c085fd11b70c38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-directory_admin.tpl',
      1 => 1458113028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17488558405b553a446650e9-08481043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553a446c2cf5_88543188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553a446c2cf5_88543188')) {function content_5b553a446c2cf5_88543188($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Directory",'admpage'=>"directory")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Directory",'admpage'=>"directory"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Directory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Directory",'admpage'=>"directory"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('tiki-directory_admin_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <br>
<h2>Statistics</h2>
There are <?php echo $_smarty_tpl->tpl_vars['stats']->value['invalid'];?>
 invalid sites<br>
There are <?php echo $_smarty_tpl->tpl_vars['stats']->value['valid'];?>
 valid sites<br>
There are <?php echo $_smarty_tpl->tpl_vars['stats']->value['categs'];?>
 <a class="link" href="tiki-directory_admin_categories.php">Directory Categories</a><br>
Users have visited <?php echo $_smarty_tpl->tpl_vars['stats']->value['visits'];?>
 sites from the directory<br>
Users have searched <?php echo $_smarty_tpl->tpl_vars['stats']->value['searches'];?>
 times from the directory<br>
<?php }} ?>
