<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:20:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_directory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6122131545b519b47584374-88946837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154e670f3682466d00b13b1559c4283930a9715b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_directory.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6122131545b519b47584374-88946837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519b475af2f7_64975547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519b475af2f7_64975547')) {function content_5b519b475af2f7_64975547($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><form class="form-horizontal" action="tiki-admin.php?page=directory" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-directory_admin.php" title=":Directories listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Directory
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>


	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_directory','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Directory</legend>
		<?php echo smarty_function_preference(array('name'=>'directory_columns'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_links_per_page'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_validate_urls'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_cool_sites'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_country_flag'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_open_links'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
