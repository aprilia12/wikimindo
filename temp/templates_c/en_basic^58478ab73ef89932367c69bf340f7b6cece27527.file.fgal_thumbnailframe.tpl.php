<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:36:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\fgal_thumbnailframe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12688675425b63bfc134eab7-43124066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58478ab73ef89932367c69bf340f7b6cece27527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\fgal_thumbnailframe.tpl',
      1 => 1504892980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12688675425b63bfc134eab7-43124066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'thumbnailcontener_size' => 0,
    'show_infos' => 0,
    'file' => 0,
    'link' => 0,
    'key_type' => 0,
    'prefs' => 0,
    'filegals_manager' => 0,
    'imagetypes' => 0,
    'popupContents' => 0,
    'maxWidth' => 0,
    'thumbnail_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bfc1371d46_59018513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bfc1371d46_59018513')) {function content_5b63bfc1371d46_59018513($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
?>
<div class="thumbnailframe" style="width:100%;height:<?php if ($_smarty_tpl->tpl_vars['view']->value!='page') {
echo $_smarty_tpl->tpl_vars['thumbnailcontener_size']->value;?>
px<?php } else { ?>100%<?php }
if ($_smarty_tpl->tpl_vars['show_infos']->value!='y') {?>;margin-bottom:4px<?php }?>">
	<div class="thumbimage">
		<div class="thumbimagesub"><?php $_smarty_tpl->tpl_vars['key_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['file']->value['type'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['imagetypes'] = new Smarty_variable('n', null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['file']->value['isgal']==1) {?>
				<a <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
>
					<?php if (empty($_smarty_tpl->tpl_vars['file']->value['icon_fileId'])) {?>
						<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>3),$_smarty_tpl);?>

					<?php } else { ?>
						<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['icon_fileId'],'thumbnail');?>
">
					<?php }?>
				</a>
			<?php } else { ?>
				<?php if (in_array($_smarty_tpl->tpl_vars['key_type']->value,array('image/png','image/jpeg','image/jpg','image/gif','image/x-ms-bmp'))) {?>
					<?php $_smarty_tpl->tpl_vars['imagetypes'] = new Smarty_variable('y', null, 0);?>
				<?php }?>
				<a <?php echo $_smarty_tpl->tpl_vars['link']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y'&&empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['imagetypes']->value=='y') {?>
								data-box="box[g]"
						<?php } elseif ($_smarty_tpl->tpl_vars['key_type']->value=='text/html') {?>
								data-box="shadowbox[gallery];type=iframe"
						<?php } elseif ($_smarty_tpl->tpl_vars['key_type']->value=='application/x-shockwave-flash') {?>
								data-box="shadowbox[gallery];type=flash"
						<?php }?>
					<?php }?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'popupContents', null); ob_start(); ?>
						<div class='opaque'>
							<div class='box-title'>
								Properties
							</div>
							<div class='box-data'>
								<?php echo $_smarty_tpl->getSubTemplate ('file_properties_table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</div>
						</div>
					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['popupContents']->value!='') {?>
						<?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['popupContents']->value),$_smarty_tpl);?>

					<?php } else { ?>
						title="<?php if ($_smarty_tpl->tpl_vars['file']->value['name']!='') {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['file']->value['name']);
}
if ($_smarty_tpl->tpl_vars['file']->value['description']!='') {?> - <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['file']->value['description']);
}?>"
					<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['key_type']->value!='image/svg'&&$_smarty_tpl->tpl_vars['key_type']->value!='image/svg+xml') {?>
						<?php if ($_smarty_tpl->tpl_vars['imagetypes']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['theme_iconset']=='legacy') {?>
							<?php if ($_smarty_tpl->tpl_vars['view']->value=='page') {?>
								<img src="tiki-download_file.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&preview" style="width:<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
;max-width: 100%;">
							<?php } else { ?>
								<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'thumbnail');?>
" style="max-height:<?php echo $_smarty_tpl->tpl_vars['thumbnailcontener_size']->value;?>
px">
							<?php }?>
						<?php } else { ?>
							<?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['file']->value['filename'],$_smarty_tpl->tpl_vars['key_type']->value,null,3);?>

						<?php }?>
					<?php } else { ?>
						<object data="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'thumbnail');?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['thumbnail_size']->value;?>
px;height:<?php echo $_smarty_tpl->tpl_vars['thumbnailcontener_size']->value;?>
px;" type="<?php echo $_smarty_tpl->tpl_vars['key_type']->value;?>
"></object>
					<?php }?>
				</a>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
