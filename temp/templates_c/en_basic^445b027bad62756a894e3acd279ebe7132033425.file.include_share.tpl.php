<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:11:24
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20272127365b55394c878358-83077672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445b027bad62756a894e3acd279ebe7132033425' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_share.tpl',
      1 => 1492634472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20272127365b55394c878358-83077672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55394c8a7153_49649714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55394c8a7153_49649714')) {function content_5b55394c8a7153_49649714($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>

<form class="form-horizontal" action="tiki-admin.php?page=share" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_share','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Site-wide features</legend>

		<div class="admin featurelist">
			<?php echo smarty_function_preference(array('name'=>'share_display_links'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'share_token_notification'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'share_contact_add_non_existant_contact'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'share_display_name_and_email'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'share_can_choose_how_much_time_access'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="share_can_choose_how_much_time_access_childcontainer">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"remark",'title'=>"Default")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"remark",'title'=>"Default"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					If you don't want to limit it, an input box will be displayed; otherwise, it will be checkbox
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"remark",'title'=>"Default"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'share_max_access_time'),$_smarty_tpl);?>

			</div>
		</div>
	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
