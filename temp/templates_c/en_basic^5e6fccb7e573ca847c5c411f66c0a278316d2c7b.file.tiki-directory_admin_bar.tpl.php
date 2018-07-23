<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:15:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-directory_admin_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15157044305b553a446e5f81-22430731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6fccb7e573ca847c5c411f66c0a278316d2c7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-directory_admin_bar.tpl',
      1 => 1458113028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15157044305b553a446e5f81-22430731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_directory_cats' => 0,
    'tiki_p_admin_directory_sites' => 0,
    'tiki_p_validate_links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553a44705388_07082092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553a44705388_07082092')) {function content_5b553a44705388_07082092($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-directory_browse.php",'_icon_name'=>"binoculars",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Browse"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-directory_admin.php",'_icon_name'=>"gear",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Admin"),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_directory_cats']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-directory_admin_categories.php",'_icon_name'=>"sitemap",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Directory Categories"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_directory_cats']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-directory_admin_related.php",'_icon_name'=>"chain",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Related"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_directory_sites']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-directory_admin_sites.php",'_icon_name'=>"list",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Sites"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_validate_links']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-directory_validate_sites.php",'_icon_name'=>"check",'class'=>"btn btn-link",'_type'=>"link",'_text'=>"Validate"),$_smarty_tpl);?>

	<?php }?>
</div>
<?php }} ?>
