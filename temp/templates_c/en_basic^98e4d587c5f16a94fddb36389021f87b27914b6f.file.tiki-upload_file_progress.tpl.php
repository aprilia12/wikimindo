<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:36:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-upload_file_progress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14659750455b63bfc13b43d7-35465123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e4d587c5f16a94fddb36389021f87b27914b6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-upload_file_progress.tpl',
      1 => 1458209864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14659750455b63bfc13b43d7-35465123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filegals_manager' => 0,
    'fileId' => 0,
    'syntax' => 0,
    'view' => 0,
    'name' => 0,
    'type' => 0,
    'imagetypes' => 0,
    'prefs' => 0,
    'alink' => 0,
    'size' => 0,
    'feedback_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bfc13fe766_81672274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bfc13fe766_81672274')) {function content_5b63bfc13fe766_81672274($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&!isset($_REQUEST['simpleMode'])) {?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('y', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('n', null, 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['seturl'] = new Smarty_variable(smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'display'), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('alink', 'alink', null); ob_start(); ?>href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['syntax']->value);?>
');checkClose();return false;" title="Click here to use the file" class="tips"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['alink'] = new Smarty_variable('', null, 0);?>
<?php }?>
<div class="media">
	<?php if ($_smarty_tpl->tpl_vars['view']->value!='page') {?>
	<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(smarty_modifier_iconify($_smarty_tpl->tpl_vars['name']->value,null,null,null,'filetype'), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=='image/png'||$_smarty_tpl->tpl_vars['type']->value=='image/jpeg'||$_smarty_tpl->tpl_vars['type']->value=='image/jpg'||$_smarty_tpl->tpl_vars['type']->value=='image/gif'||$_smarty_tpl->tpl_vars['type']->value=='image/x-ms-bmp') {?>
		<?php $_smarty_tpl->tpl_vars['imagetypes'] = new Smarty_variable('y', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['imagetypes'] = new Smarty_variable('n', null, 0);?>
	<?php }?>
	<div class="media-left">
		<?php if ($_smarty_tpl->tpl_vars['imagetypes']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['theme_iconset']=='legacy') {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				<a <?php echo $_smarty_tpl->tpl_vars['alink']->value;?>
>
					<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'thumbnail');?>
"><br>
						<span class="thumbcaption">
							Click here to use the file
						</span>
				</a>
			<?php } else { ?>
				<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'thumbnail');?>
">
			<?php }?>
		<?php } else { ?>
			<?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['type']->value,null,3);?>

		<?php }?>
	</div>
	<div class="media-body">
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
			<a <?php echo $_smarty_tpl->tpl_vars['alink']->value;?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['size']->value);?>
)</a>
		<?php } else { ?>
			<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['size']->value);?>
)</b>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['feedback_message']->value!='') {?>
			<div class="upload_note">
				<?php echo $_smarty_tpl->tpl_vars['feedback_message']->value;?>

			</div>
		<?php }?>
		<?php } else { ?>
		<div>
		<?php }?>
			<div class="margin-bottom-sm" style="margin-top: 1em;">
			<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:flip('uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."');flip('close_uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."','inline');return false;",'_text'=>"Syntax Tips"),$_smarty_tpl);?>

			<span id="close_uploadinfos<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
" style="display:none">
				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:flip('uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."');flip('close_uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."','inline');return false;",'_text'=>"(Hide)"),$_smarty_tpl);?>

			</span>
		</div>
		<div style="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>display:none;<?php }?>" id="uploadinfos<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
">
			<div class="row">
				<div class="col-sm-6 text-right">
					Link to file from a Wiki page:
				</div>
				<div class="col-sm-6">
					<code>[<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'file');?>
|<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]</code>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 text-right">
					<strong><em>For image files:</em></strong>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 text-right">
					Display full size:
				</div>
				<div class="col-sm-6">
					<code>{img fileId="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
"}</code>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y') {?>
				<div class="row">
					<div class="col-sm-6 text-right">
						Display thumbnail that enlarges:
					</div>
					<div class="col-sm-6">
						<code>{img fileId="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
" thumb="box"}</code>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
