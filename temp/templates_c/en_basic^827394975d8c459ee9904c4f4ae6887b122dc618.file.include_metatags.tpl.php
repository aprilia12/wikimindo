<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:14:06
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_metatags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7658167425b5547fe4c9902-98404703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827394975d8c459ee9904c4f4ae6887b122dc618' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_metatags.tpl',
      1 => 1492634472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7658167425b5547fe4c9902-98404703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5547fe56da24_57468806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5547fe56da24_57468806')) {function content_5b5547fe56da24_57468806($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	See also <a class="alert-link" href="tiki-admin.php?page=sefurl">Search Engine Friendly URLs</a>. Also <a target="_blank" href="http://en.wikipedia.org/wiki/Geotagging#HTML_pages">here</a> for more information on geo tagging.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="form-horizontal" action="tiki-admin.php?page=metatags" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_metatags")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_metatags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Meta tags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Meta tags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'metatag_keywords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_freetags'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_threadtitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_imagetitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_description'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_pagedesc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'metatag_author'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Meta tags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Geo Metatags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Geo Metatags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<?php echo smarty_function_preference(array('name'=>'metatag_geoposition'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'metatag_georegion'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'metatag_geoplacename'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Geo Metatags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Robots")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Robots"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			

			<?php echo smarty_function_preference(array('name'=>'metatag_robots'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'metatag_revisitafter'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Robots"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_metatags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
