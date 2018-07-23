<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 08:57:20
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3769352555b5187d0626b40-62208175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12670bcf784cfc7b8ad151b62df887002ffd3bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_advanced.tpl',
      1 => 1426754726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3769352555b5187d0626b40-62208175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5187d06885e7_47676656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5187d06885e7_47676656')) {function content_5b5187d06885e7_47676656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	<?php echo smarty_function_icon(array('name'=>"wrench",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

	If you are an experienced Tiki site administrator, consider whether the advanced features below would be useful for your use case. They are useful for creating a similar set of Tiki objects for different groups of users with like permissions.
	</br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"admin_workspace",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Workspaces</legend>
			<?php echo smarty_function_preference(array('name'=>'workspace_ui'),$_smarty_tpl);?>

			<em>See also <a href="https://doc.tiki.org/Workspaces UI" target="_blank">Workspaces UI in doc.tiki.org</a></em>
		</fieldset>
		<fieldset>
			<legend>Dependencies</legend>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					Enable using the same wiki page name in different contexts. E.g. ns1:_:MyPage and ns2:_:MyPage.
				</div>
			</div>
			<br>
			<em>See also <a href="tiki-admin.php?page=workspace" target="_blank">Workspaces & Areas admin panel</a></em>
		</fieldset>
	</div>
</div>
<?php }} ?>
