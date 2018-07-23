<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:28:35
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20540579635b5156e3658160-69528379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad43870c2b31e9e57ac03eb0074175b3cc7357b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_language.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20540579635b5156e3658160-69528379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5156e36b5d75_81084997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5156e36b5d75_81084997')) {function content_5b5156e36b5d75_81084997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Select the site language.</br></br></br>
	<div class="media-content">
		<?php echo smarty_function_icon(array('name'=>"admin_i18n",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Language</legend>

			<?php echo smarty_function_preference(array('name'=>'language'),$_smarty_tpl);?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_multilingual','visible'=>"always"),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'lang_use_db'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
