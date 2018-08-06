<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:36:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\fgal_view_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10553147835b63bfc12a2c91-79970925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cda66edd75ed3a8b1e51c5eb60c2727b2c7ee16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\fgal_view_page.tpl',
      1 => 1505204980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10553147835b63bfc12a2c91-79970925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbnail_size' => 0,
    'prefs' => 0,
    'show_details' => 0,
    'gal_info' => 0,
    'show_infos' => 0,
    'file' => 0,
    'metarray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bfc1314139_98596119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bfc1314139_98596119')) {function content_5b63bfc1314139_98596119($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'link', null); ob_start(); ?>
	<?php echo $_smarty_tpl->getSubTemplate ('fgal_file_link_attributes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('log_tpl'=>false), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_math(array('equation'=>"x + 6",'x'=>$_smarty_tpl->tpl_vars['thumbnail_size']->value,'assign'=>'thumbnailcontener_size'),$_smarty_tpl);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("thumbactions", null, null); ob_start(); ?>
	<?php if (($_smarty_tpl->tpl_vars['prefs']->value['fgal_show_thumbactions']=='y'||$_smarty_tpl->tpl_vars['show_details']->value=='y')) {?>
	<div class="thumbactions">
		<?php if (!isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])||$_smarty_tpl->tpl_vars['gal_info']->value['show_action']!='n') {?>
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
				<a class="fgalname tips" title="Actions" href="#" <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_icon'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'],'menu_text'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'],'changes'=>$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_tmp1),$_smarty_tpl);?>
>
					<?php echo smarty_function_icon(array('name'=>'wrench','alt'=>"Actions"),$_smarty_tpl);?>

				</a>
			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php }?>
	</div> 
	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix thumbnailcontener-heightauto">
	<div class="thumbnail" style="float:left;">
		<?php echo $_smarty_tpl->getSubTemplate ('fgal_thumbnailframe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['show_infos']->value=='y') {?>
			<div class="thumbinfos">
				<?php echo Smarty::$_smarty_vars['capture']['thumbactions'];?>

			</div>
		<?php }?>
	</div> 
	<div style="float:left">
		<div class='box-data'>
			<?php echo $_smarty_tpl->getSubTemplate ('file_properties_table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<br clear="all">
	<div>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-upload_file_progress.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fileId'=>$_smarty_tpl->tpl_vars['file']->value['id'],'name'=>$_smarty_tpl->tpl_vars['file']->value['filename']), 0);?>

	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['metarray']->value)&&count($_smarty_tpl->tpl_vars['metarray']->value)>0) {?>
		<br>
		<div class="text-left">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Metadata")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Metadata"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php echo $_smarty_tpl->getSubTemplate ('metadata/meta_view_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Metadata"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>
</div> 
<?php }} ?>
