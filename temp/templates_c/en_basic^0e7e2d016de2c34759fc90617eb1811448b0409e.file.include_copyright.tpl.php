<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:40:09
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20003000405b55400960cf46-47015513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e7e2d016de2c34759fc90617eb1811448b0409e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_copyright.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20003000405b55400960cf46-47015513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55400966ab56_11094955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55400966ab56_11094955')) {function content_5b55400966ab56_11094955($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allows a copyright to be determined for various objects.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form role="form" class="form-horizontal" action="tiki-admin.php?page=copyright" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_copyright','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>
	<div class="adminoptionboxchild" id="feature_copyright_childcontainer">
		<fieldset>
			<legend>Features</legend>
			<?php echo smarty_function_preference(array('name'=>'wikiLicensePage'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiSubmitNotice'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_feature_copyrights'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'article_feature_copyrights'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'blog_feature_copyrights'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'faq_feature_copyrights'),$_smarty_tpl);?>

		</fieldset>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
