<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:57:36
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-upload_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19238324715b63c4a03370a1-24932732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5909b9106cc7a2099c0fbd15187f3a4b34518a10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-upload_file.tpl',
      1 => 1499855984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19238324715b63c4a03370a1-24932732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filegals_manager' => 0,
    'editFileId' => 0,
    'fileInfo' => 0,
    'galleryId' => 0,
    'galleries' => 0,
    'tiki_p_list_file_galleries' => 0,
    'uploads' => 0,
    'simpleMode' => 0,
    'errors' => 0,
    'prefs' => 0,
    'files' => 0,
    'name' => 0,
    'fileChangedMessage' => 0,
    'user' => 0,
    'gal_info' => 0,
    'tiki_p_batch_upload_files' => 0,
    'treeRootId' => 0,
    'groupforalert' => 0,
    'tiki_p_userfiles' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'showeachuser' => 0,
    'listusertoalert' => 0,
    'mimetypes' => 0,
    'type' => 0,
    'hit_limit' => 0,
    'insertion_syntax' => 0,
    'token_id' => 0,
    'upload_str' => 0,
    'tiki_p_admin' => 0,
    'max_upload_size_comment' => 0,
    'max_upload_size' => 0,
    'is_iis' => 0,
    'metarray' => 0,
    'tiki_p_upload_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c4a045c064_48281233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c4a045c064_48281233')) {function content_5b63c4a045c064_48281233($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_filegal_uploader')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.filegal_uploader.php';
if (!is_callable('smarty_function_html_select_duration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_duration.php';
if (!is_callable('smarty_function_user_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.user_selector.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
?>
<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&!isset($_REQUEST['simpleMode'])) {?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('y', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('n', null, 0);?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"File Galleries",'admpage'=>"fgal")); $_block_repeat=true; echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>Edit File: <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['filename'];
} else { ?>Upload File<?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)||(isset($_smarty_tpl->tpl_vars['galleries']->value)&&count($_smarty_tpl->tpl_vars['galleries']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value=='y')||(isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0)) {?>
	<div class="t_navbar margin-bottom-md">
		<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)) {?>
			<?php echo smarty_function_button(array('galleryId'=>((string)$_smarty_tpl->tpl_vars['galleryId']->value),'href'=>"tiki-list_file_gallery.php",'class'=>"btn btn-default",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['galleries']->value)&&count($_smarty_tpl->tpl_vars['galleries']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value=='y') {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['fgmanager'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value), null, 0);?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php?filegals_manager=".((string)$_smarty_tpl->tpl_vars['fgmanager']->value),'class'=>"btn btn-default",'_text'=>"List Galleries"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php",'class'=>"btn btn-default",'_text'=>"List Galleries"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0) {?>
			<?php echo smarty_function_button(array('href'=>"#upload",'class'=>"btn btn-default",'_text'=>"Upload File"),$_smarty_tpl);?>

		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value=='y') {
echo smarty_function_button(array('simpleMode'=>'n','galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','class'=>"btn btn-default",'_text'=>"Advanced mode",'_ajax'=>"n"),$_smarty_tpl);
} else {
echo smarty_function_button(array('galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','_text'=>"Simple mode",'_ajax'=>"n"),$_smarty_tpl);
}?>
			<span<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value=='y') {?> style="display:none;"<?php }?>>
				<label for="keepOpenCbx">Keep gallery window open</label>
				<input type="checkbox" id="keepOpenCbx" checked="checked">
			</span>
		<?php }?>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&count($_smarty_tpl->tpl_vars['errors']->value)>0) {?>
	<div class="alert alert-danger">
		<h2>Errors detected</h2>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
			<?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
<br>
		<?php endfor; endif; ?>
		<?php echo smarty_function_button(array('href'=>"#upload",'_text'=>"Retry"),$_smarty_tpl);?>

	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
	<div id='progress'>
		<div id='progress_0'></div>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0) {?>
	<h2>
	<?php if (count($_smarty_tpl->tpl_vars['uploads']->value)==1) {?>
		The following file was successfully uploaded:
	<?php } else { ?>
		The following files have been successfully uploaded:
	<?php }?>
	</h2>
	<table class="table">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uploads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
			<tr>
				<td class="text-center">
					<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'thumbnail');?>
">
				</td>
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
						<a href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['wiki_syntax']);?>
');checkClose();return false;" title="Click here to use the file"><?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)</a>
					<?php } else { ?>
						<b><?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)</b>
					<?php }?>
					<?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>("uploadinfos").($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId']),'_text'=>"Additional Info"),$_smarty_tpl);?>

					<div style="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>display:none;<?php }?>" id="uploadinfos<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'];?>
">
						You can download this file using: <div class="code"><a class="link" href="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['dllink'];?>
"><?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
</a></div>
						You can link to the file from a Wiki page using: <div class="code">[<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
|<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)]</div>
						You can display an image in a Wiki page using: <div class="code">&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'preview');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)"}</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y') {?>
							Or using as a thumbnail with ShadowBox: <div class="code">&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'thumbnail');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'preview');?>
" rel="shadowbox[gallery];type=img" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)"}</div>
						<?php }?>
						You can link to the file from an HTML page using: <div class="code">&lt;a href="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['dllink'];?>
"&gt;<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)&lt;/a&gt;</div>
					</div>
				</td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	<h2>Upload File</h2>
<?php } elseif (isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value)) {?>
	<div align="center">
		<div class="wikitext">
			<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		</div>
	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['editFileId']->value&&isset($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'])&&$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']!='') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Info",'icon'=>"lock")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']) {?>
			You locked the file
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The file has been locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<div>
	<?php $_smarty_tpl->_capture_stack[0][] = array('upload_file', 'upload_str', null); ob_start(); ?>
		<div class="fgal_file">
			<div class="fgal_file_c1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload']!='y'||$_smarty_tpl->tpl_vars['editFileId']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value!='y') {?>
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">File title</label>
							<div class="col-md-8">
								<input class="form-control" type="text" id="name" name="name[]"
									<?php if (isset($_smarty_tpl->tpl_vars['fileInfo']->value)&&$_smarty_tpl->tpl_vars['fileInfo']->value['name']) {?>
										value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['name']);?>
"
									<?php }?>
									size="40"
								>
								<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])&&($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast")) {?>
									(required field for podcasts)
								<?php }?>
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-md-4 control-label">File description</label>
							<div class="col-md-8">
								<textarea class="form-control" id="description" name="description[]"><?php if (isset($_smarty_tpl->tpl_vars['fileInfo']->value['description'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['description']);
}?></textarea>
								<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])&&($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast")) {?>
									<br><em>Required for podcasts.</em>
								<?php }?>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload']!='y'||$_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group">
							<label for="userfile" class="col-md-4 control-label"><?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>Re-upload from disk<?php } else { ?>Upload from disk<?php }?></label>
							<div class="col-md-8">
								<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['filename']);?>

								<?php }?>
								<input id="userfile" name="userfile[]" type="file" size="40">
							</div>
						</div>
					<?php }?>
				<?php } else { ?>
					<?php echo smarty_function_filegal_uploader(array(),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="form-group">
				<label for="imagesize" class="col-md-8 col-md-offset-4">
				<input type="checkbox" id="imagesize" name="imagesize" checked="checked" value="yes" /><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Gallery default resize settings for images <span id="imageResizeInfo"><?php if ($_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"]) {?>(<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"];?>
px X <?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_y"];?>
 px)<?php } else { ?>(No resize)<?php }?></span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
			</div>
			<div id="customsize" style="display:none"><div class="form-group">
					<label for="image_max_size_x" class="col-sm-4 text-right">Maximum width of images</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_x" id="image_max_size_x" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"];?>
" class="form-control text-right">
							<span class="input-group-addon"> px</span>
						</div>
						<span class="help-block">If an image is wider than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
				<div class="form-group">
					<label for="image_max_size_y" class="col-sm-4 text-right">Maximum height of images in gallery</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_y" id="image_max_size_y" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_y"];?>
" class="form-control text-right">
							<span class="input-group-addon"> px</span>
						</div>
						<span class="help-block">If an image is higher than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value!='y') {?>
				<div class="fgal_file_c2">
					<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_files']->value=='y') {?>
						<div class="form-group">
							<label for="isbatch" class="col-md-8 col-md-offset-4">
								<input type="checkbox" id="isbatch" name="isbatch[]">
								Unzip zip files
							</label>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_delete_after']=='y') {?>
						<div class="form-group">
							<label for="deleteAfter" class="col-md-4 control-label">File can be deleted after</label>
							<div class="col-md-8">
								<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
									<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter','id'=>"deleteAfter",'default_value'=>$_smarty_tpl->tpl_vars['fileInfo']->value['deleteAfter']),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter[]','id'=>"deleteAfter",'default_unit'=>'week'),$_smarty_tpl);?>

								<?php }?>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
						<input type="hidden" name="fileId" value="<?php echo $_smarty_tpl->tpl_vars['editFileId']->value;?>
">
						<input type="hidden" name="lockedby" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']);?>
">
					<?php } else { ?>
						<?php if (count($_smarty_tpl->tpl_vars['galleries']->value)==0) {?>
							<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)) {?>
								<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
							<?php } else { ?>
								<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
">
							<?php }?>
						<?php } elseif (empty($_smarty_tpl->tpl_vars['groupforalert']->value)) {?>
							<div class="form-group">
								<label for="galleryId" class="col-md-4 control-label">File gallery</label>
								<div class="col-md-8">
									<select id="galleryId" name="galleryId[]" class="form-control">
										<option value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['treeRootId']->value==$_smarty_tpl->tpl_vars['galleryId']->value) {?>selected="selected"<?php }?> style="font-style:italic; border-bottom:1px dashed #666;">Root</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
											<?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id']!=$_smarty_tpl->tpl_vars['treeRootId']->value&&($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['perms']['tiki_p_upload_files']=='y'||$_smarty_tpl->tpl_vars['tiki_p_userfiles']->value=='y')) {?>
												<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id']==$_smarty_tpl->tpl_vars['galleryId']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['name']);?>
</option>
											<?php }?>
										<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php } else { ?>
							<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
						<?php }?>
					<?php }?>
					<div class="form-group">
						<label for="user" class="col-md-4 control-label">Uploaded by</label>
						<div class="col-md-8">
							<?php echo smarty_function_user_selector(array('id'=>'user','name'=>'user[]','select'=>$_smarty_tpl->tpl_vars['fileInfo']->value['user'],'editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value),$_smarty_tpl);?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_author']=='y') {?>
						<div class="form-group">
							<label for="author" class="col-md-4 control-label">Creator</label>
							<div class="col-md-8">
								<input type="text" id="author"name="author[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['author']);?>
"><br>
								<span class="description">Creator of file, if different from the 'Uploaded by' user</span>
							</div>
						</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['groupforalert']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y') {?>
							<div class="form-group">
								<label class="col-md-4 control-label">Choose users to alert</label>
								<div class="col-md-8">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
										<label>
											<input type="checkbox" name="listtoalert[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user']);?>
"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user']);?>

										</label>
									<?php endfor; endif; ?>
								</div>
							</div>
						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
								<input type="hidden" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
">
							<?php endfor; endif; ?>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group">
							<label for="filetype" class="col-md-4 control-label">File Type</label>
							<div class="col-md-8">
								<select id="filetype" class="form-control" name="filetype[]">
									<?php if ($_smarty_tpl->tpl_vars['fileInfo']->value['filetype']!='') {?>
										<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileInfo']->value['filetype']);?>
" selected="selected"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['fileInfo']->value['filetype'],60));?>
</option>
									<?php }?>
									<option value="" > No type </option>
									<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mimetypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['type']->value,60);?>
 (*.<?php echo $_smarty_tpl->tpl_vars['type']->key;?>
)</option>
									<?php } ?>
								</select>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="fgal_file_c3">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_limit_hits_per_file']=='y') {?>
						<div class="form-group">
							<label for="hit_limit" class="col-md-4 form-label">Maximum number of downloads</label>
							<div class="col-md-8">
								<input type="text" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
								<br><em>Use -1 for no limit.</em>
							</div>
						</div>
					<?php } else { ?>
						<input type="hidden" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? -1 : $tmp);?>
">
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'&&$_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group">
							<label for="comment" class="col-md-4 form-label">Comment</label>
							<div class="col-md-8">
								<input type="text" id="comment" name="comment[]" value="" size="40">
							</div>
						</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&!$_smarty_tpl->tpl_vars['editFileId']->value) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<br/>
				<?php }?>
			<?php } else { ?>
				<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&!$_smarty_tpl->tpl_vars['editFileId']->value) {?>
				<input type="hidden" name="upload">
			<?php }?>
		</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<div id="form">
		<form method="post"
			action='tiki-upload_file.php'
			enctype='multipart/form-data'
			class="form-horizontal"
			id="file_0"
		>
			<input type="hidden" name="simpleMode" value="<?php echo $_smarty_tpl->tpl_vars['simpleMode']->value;?>
">
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				<input type="hidden" name="filegals_manager" value="<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
">
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)) {?>
				<input type="hidden" name="insertion_syntax" value="<?php echo $_smarty_tpl->tpl_vars['insertion_syntax']->value;?>
">
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['token_id']->value)&&$_smarty_tpl->tpl_vars['token_id']->value!='') {?>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token_id']->value;?>
" name="TOKEN">
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<br>
				<div id="page_bar" class="form-group">
					<div class="col-md-8 col-md-push-4">
						<input name="upload" type="submit" class="btn btn-default" value="Save">
					</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload']!='y') {?>
					<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

					<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

					<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<br>
					<div id="page_bar" class="form-group">
						<div class="col-md-8 col-md-offset-4">
							<input type="submit" class="btn btn-default btn-sm" name="upload" value="Upload">
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload']!='y') {?>
				<div id="page_bar" class="form-group">
					<div class="col-md-8 col-md-offset-4">
						<input type="submit" class="btn btn-primary btn-sm"
							onClick="upload_files(); return false"
							id="btnUpload"
							name="upload"
							value="Upload File(s)"
						>
						<input type="submit" class="btn btn-default btn-sm" onclick="javascript:add_upload_file('multiple_upload'); return false" value="Add Another File">
					</div>
				</div>
			<?php }?>
		</form>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'])&&$_smarty_tpl->tpl_vars['user']->value!=$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']) {?>
		<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>

		<span class="attention"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The file has been locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
	<?php }?>
	<br>
	<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value) {?>
		<div class="col-md-8 col-md-offset-4">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Maximum file size is around:
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?><a title="|<?php echo $_smarty_tpl->tpl_vars['max_upload_size_comment']->value;?>
" class="btn btn-info tips"><?php }?>
					<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_upload_size']->value,true,0);?>

				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?></a>
					<?php if ($_smarty_tpl->tpl_vars['is_iis']->value) {?><br>Note: You are running IIS. maxAllowedContentLength also limits upload size. Please check web.config in the Tiki root folder<?php }?>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['metarray']->value)&&count($_smarty_tpl->tpl_vars['metarray']->value)>0) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('metadata/meta_view_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload']!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('.datePicker').datepicker({minDate: 0, maxDate: '+1m', dateFormat: 'dd/mm/yy'});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('#file_0').ajaxForm({target: '#progress_0', forceSync: true});
		var nb_upload = 1;
		function add_upload_file() {
			var clone = $('#form form').eq(0).clone().resetForm().attr('id', 'file_' + nb_upload).ajaxForm({target: '#progress_' + nb_upload, forceSync: true});
			clone.insertAfter($('#form form').eq(-1));
			document.getElementById('progress').innerHTML += "<div id='progress_"+nb_upload+"'></div>";
			nb_upload += 1;
		}
		function upload_files(){
			$("#form form").each(function(n) {
				if ($(this).find('input[name="userfile\\[\\]"]').val() != '') {
					var $progress = $('#progress_'+n).html("<img src='img/spinner.gif'>Uploading file...");
					$( document ).ajaxError(function(event, jqxhr, ajaxSettings, thrownError ) {
						$progress.hide();
						show('form');
						$("#form").showError(tr("File upload error:") + " " + thrownError)
					});
					$(this).submit();
					this.reset();
				} else {
					$('#progress_'+n).html("No File to Upload... <span class='button'><a href='#' onclick='location.replace(location.href);return false;'>Retry</a></span>");
				}
			});
			hide('form');
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_from_source']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y') {?>
	<form class="remote-upload form-horizontal" method="post" action="<?php echo smarty_function_service(array('controller'=>'file','action'=>'remote'),$_smarty_tpl);?>
">
		<h3>Upload from URL</h3>
		<div class="form-group">
			<input type="hidden" name="galleryId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value);?>
">
			<label class="col-md-4 control-label">URL:</label>
			<div class="col-md-8">
				<input type="url" name="url" placeholder="http://" class="form-control">
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['vimeo_upload']=='y') {?>
				<label class="col-md-8 col-md-offset-4">
					<input type="checkbox" name="reference" value="1" class="tips" title="Upload from URL|Keeps a reference to the remote file">
					Reference
				</label>
			<?php }?>
			<div class="col-md-8 col-md-offset-4">
				<input type="submit" class="btn btn-default btn-sm" value="Add">
			</div>
			<div class="result col-md-8 col-md-offset-4"></div>
		</div>
	</form>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('.remote-upload').submit(function () {
			var form = this;
			// use the current value of the galleryId selector
			$('input[name=galleryId]', form).val($('#galleryId').val());
			$.ajax({
				method: 'POST',
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType: 'html',
				success: function (data) {
					$('.result', form).html(data);
					$(form.url).val('');
				},
				complete: function () {
					$('input', form).prop('disabled', false);
				},
				error: function (e) {
					alert(tr("A remote file upload error occurred:") + "\n\"" + e.statusText + "\" (" + e.status + ")");
				}
			});
			$('input', this).prop('disabled', true);
			return false;
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['vimeo_upload']=='y') {?>
		<fieldset>
			<h3>Upload Video</h3>
			<div class="col-md-8 col-md-offset-4">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>'vimeo')); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>'vimeo'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>'vimeo'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</fieldset>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var handleVimeoFile = function (link, data) {
				if (data != undefined) {
				$("#form").hide();
				$("#progress").append(
					$("<p> Video file uploaded: " + data.file + "</p>")
						.prepend($("<img src='img/icons/vimeo.png' width='16' height='16'>"))
					);
				}
			}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var defaultx= $("#image_max_size_x").attr('value');
var defaulty= $("#image_max_size_y").attr('value');

$("#imagesize").click(function () {
	if ($(this).prop("checked")) {
		$("#customsize").css("display", "none");
		//resetting size to default
		$("#image_max_size_x").attr('value',defaultx);
		$("#image_max_size_y").attr('value',defaulty);
	} else {
		$("#customsize").css("display", "");
	}
});

$("#galleryId").change(function(){
	$("#image_max_size_x").attr('value','');
	$("#image_max_size_y").attr('value',"");
	$("#imageResizeInfo").html('');
	defaultx='';
	defaulty='';
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
