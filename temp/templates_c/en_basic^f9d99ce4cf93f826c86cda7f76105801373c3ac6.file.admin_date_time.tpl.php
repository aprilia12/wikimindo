<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:30:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_date_time.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10281874535b5157653b9912-06381795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d99ce4cf93f826c86cda7f76105801373c3ac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_date_time.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10281874535b5157653b9912-06381795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5157653e48a6_67092685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5157653e48a6_67092685')) {function content_5b5157653e48a6_67092685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
	<i class="fa fa-gear fa-stack-2x"></i>
	<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
</span>
Set the site time zone and format for displaying dates and times.</br></br>
<div class="media">
	<?php echo smarty_function_icon(array('name'=>"admin_general",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

	<div class="media-content">
		<fieldset>
			<legend>Date and Time setup</legend>
			<?php echo smarty_function_icon(array('name'=>"clock-o",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

			</div>
			<br>
			<em>See also <a href="tiki-admin.php?page=general&amp;alt=General#content4" target="_blank">Date and Time admin panel</a></em>
		</fieldset>
		<br>
	</div>
</div>
<?php }} ?>
