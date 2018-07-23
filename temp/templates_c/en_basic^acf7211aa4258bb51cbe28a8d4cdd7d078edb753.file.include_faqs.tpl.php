<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:37:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10128870515b553f866d8f59-80445556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf7211aa4258bb51cbe28a8d4cdd7d078edb753' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_faqs.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10128870515b553f866d8f59-80445556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553f8674e260_24758072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553f8674e260_24758072')) {function content_5b553f8674e260_24758072($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<form role="form" class="form-horizontal" action="tiki-admin.php?page=faqs" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<a role="link" class="btn btn-link tips" href="tiki-list_faqs.php" title=":FAQ listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 FAQs
		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_faqs','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>
	<fieldset class="table">
		<legend>Settings</legend>
		<?php echo smarty_function_preference(array('name'=>'faq_prefix'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_faq_comments'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_faq_comments_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'faq_comments_per_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'faq_comments_default_ordering'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'faq_feature_copyrights'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
