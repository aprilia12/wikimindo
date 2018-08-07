<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:46:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_wysiwyg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12573394445b694e61bdfb18-21929218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c912ee083c4ced35b6f65424a8d416dfe013ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_wysiwyg.tpl',
      1 => 1510228648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12573394445b694e61bdfb18-21929218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b694e61c7bf30_28338800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b694e61c7bf30_28338800')) {function content_5b694e61c7bf30_28338800($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
WYSIWYG means What You See Is What You Get, and is handled in Tiki by <a class="alert-link" href="http://ckeditor.com/">CKEditor</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form class="form-horizontal" action="tiki-admin.php?page=wysiwyg" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md">
		<a role="button" class="btn btn-link" href="tiki-admin_toolbars.php" title="Toolbars">
			<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Toolbars
		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']!='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Page links")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Note that if the SEFURL feature is on, page links created using wysiwyg might not be automatically updated when pages are renamed. This is addressed through the "Use Wiki syntax in WYSIWYG" feature.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg','visible'=>"always"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_wysiwyg'),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>WYSIWYG editor features</legend>
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_optional'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wysiwyg_optional_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_default'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wysiwyg_memo'),$_smarty_tpl);?>

		</div>
		
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_wiki_parsed'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wysiwyg_wiki_parsed_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_wiki_semi_parsed'),$_smarty_tpl);?>

		</div>
		
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_htmltowiki'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_inline_editing'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_toolbar_skin'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>"wysiwyg_fonts"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>"wysiwyg_extra_plugins"),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend class="heading">Related features</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_paragraph_formatting_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting_add_br'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_ajax_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

		</div>
	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form><?php }} ?>
