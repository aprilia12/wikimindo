<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:21:06
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:676331135b5147121454c1-81936432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca4e5472814b094ad747b489fa51db1a0e54a0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-login.tpl',
      1 => 1456578812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676331135b5147121454c1-81936432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51471219f250_55263091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51471219f250_55263091')) {function content_5b51471219f250_55263091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.module.php';
?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<?php echo smarty_function_module(array('module'=>'login_box','mode'=>"module",'show_register'=>"y",'show_forgot'=>"y",'error'=>'','flip'=>'','decorations'=>'','nobox'=>'','notitle'=>''),$_smarty_tpl);?>

	</div>
</div>
<?php }} ?>
