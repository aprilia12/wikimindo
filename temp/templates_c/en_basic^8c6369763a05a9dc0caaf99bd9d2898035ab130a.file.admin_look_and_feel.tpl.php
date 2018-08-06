<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:09:12
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_look_and_feel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12822691275b63b948a50729-57221044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6369763a05a9dc0caaf99bd9d2898035ab130a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_look_and_feel.tpl',
      1 => 1479430498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12822691275b63b948a50729-57221044',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b948a833b8_31801260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b948a833b8_31801260')) {function content_5b63b948a833b8_31801260($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Configure the Tiki theme and other look & feel preferences.</br></br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"admin_look",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Look & Feel options</legend>
				<div class="row">
					<div class="col-md-3 col-md-push-9">

					</div>
					<div class="col-md-9 col-md-pull-3 adminoptionbox">
						<?php echo smarty_function_preference(array('name'=>'theme'),$_smarty_tpl);?>

						<div class="adminoptionbox theme_childcontainer custom_url">
							<?php echo smarty_function_preference(array('name'=>'theme_custom_url'),$_smarty_tpl);?>

						</div>
						<?php echo smarty_function_preference(array('name'=>'theme_option'),$_smarty_tpl);?>

						<div class="adminoptionbox theme_childcontainer legacy">
							<?php echo smarty_function_preference(array('name'=>'style'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'style_option'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'style_admin'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'style_admin_option'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'site_layout_admin'),$_smarty_tpl);?>

						</div>
						<?php echo smarty_function_preference(array('name'=>'site_layout'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'site_layout_per_object'),$_smarty_tpl);?>

					</div>
				</div>
<!--
			<div style="position:relative;">
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_fixed_width'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_fixed_width_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'layout_fixed_width'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
-->
			<br>
			<em>See also <a href="tiki-admin.php?page=look&amp;alt=Look+%26+Feel" target="_blank">Look & Feel admin panel</a></em>
			</br></br>
		</fieldset>

		<fieldset>
			<legend>Title</legend>
			<?php echo smarty_function_preference(array('name'=>'sitetitle'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'sitesubtitle'),$_smarty_tpl);?>

		</fieldset>
		<fieldset>
			<legend>Logo</legend>
			<?php echo smarty_function_preference(array('name'=>'sitelogo_src'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
