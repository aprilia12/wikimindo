<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:20:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11274989045b519b6ac33251-44422806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2ee284883d2df5ebbb75ce468252301a5d8f83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_ads.tpl',
      1 => 1517974544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11274989045b519b6ac33251-44422806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519b6ac5e1e4_84159738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519b6ac5e1e4_84159738')) {function content_5b519b6ac5e1e4_84159738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?>
<form action="tiki-admin.php?page=ads" onreset="return(confirm("Cancel Edit"))" class="admin form-horizontal" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-list_banners.php" title=":Banners listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Banners
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_banners','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="table">
		<legend>Plugins</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_banner'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Site ads and banners<?php echo smarty_function_help(array('url'=>"Banners"),$_smarty_tpl);?>
</legend>

		<?php echo smarty_function_preference(array('name'=>'sitead_publish'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_sitead'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
