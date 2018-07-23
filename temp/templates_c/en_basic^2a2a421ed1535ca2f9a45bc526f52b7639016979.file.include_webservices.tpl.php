<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:11:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_webservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16009236955b553939816e20-27266635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2a421ed1535ca2f9a45bc526f52b7639016979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_webservices.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16009236955b553939816e20-27266635',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5539398788b8_95456938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5539398788b8_95456938')) {function content_5b5539398788b8_95456938($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<form method="post" action="tiki-admin.php?page=webservices" class="form-horizontal">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link" href="tiki-admin_webservices.php" title="List">
				<?php echo smarty_function_icon(array('name'=>"admin"),$_smarty_tpl);?>
 Webservices
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_webservices','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Options</legend>
		<?php echo smarty_function_preference(array('name'=>'webservice_consume_defaultcache'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
