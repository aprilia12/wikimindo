<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:46:29
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_text_area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595470195b694e5526a320-47088767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1efc65dc78407f90488f702063d08a785ee390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_text_area.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595470195b694e5526a320-47088767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isRTL' => 0,
    'isHtmlMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b694e553aa873_08452321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b694e553aa873_08452321')) {function content_5b694e553aa873_08452321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Set up the text area environment (Editing and Plugins).</br></br>
	<div class="media">
		<?php echo smarty_function_icon(array('name'=>"admin_textarea",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>General settings</legend>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_fullscreen'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikipluginprefs_pending_notification'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['isRTL']->value==false&&$_smarty_tpl->tpl_vars['isHtmlMode']->value!=true) {?>		
					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter_theme'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<br>
			<em>See also <a href="tiki-admin.php?page=textarea&amp;alt=Editing+and+Plugins#content1" target="_blank">Editing and plugins admin panel</a></em>
		</fieldset>
	</div>
</div>
<?php }} ?>
