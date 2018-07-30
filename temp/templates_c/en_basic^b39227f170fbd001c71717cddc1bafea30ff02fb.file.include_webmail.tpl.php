<?php /* Smarty version Smarty-3.1.21, created on 2018-07-30 09:11:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_webmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17161500755b5eba1790bb94-67916230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b39227f170fbd001c71717cddc1bafea30ff02fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_webmail.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17161500755b5eba1790bb94-67916230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5eba17ae4684_99187390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5eba17ae4684_99187390')) {function content_5b5eba17ae4684_99187390($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><form class="form-horizontal" action="tiki-admin.php?page=webmail" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="button" class="btn btn-link" href="tiki-webmail.php" title="Webmail">
				<?php echo smarty_function_icon(array('name'=>"inbox"),$_smarty_tpl);?>
 Webmail
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_webmail','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>


	<fieldset>
		<legend>Settings</legend>
		<?php echo smarty_function_preference(array('name'=>'webmail_view_html'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'webmail_max_attachment'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'webmail_quick_flags'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
