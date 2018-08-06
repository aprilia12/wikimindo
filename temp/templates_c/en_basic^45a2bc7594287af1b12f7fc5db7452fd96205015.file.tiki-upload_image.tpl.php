<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 06:24:48
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-upload_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45309265b63d9107f5e57-12551926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a2bc7594287af1b12f7fc5db7452fd96205015' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-upload_image.tpl',
      1 => 1458281034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45309265b63d9107f5e57-12551926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'galleryId' => 0,
    'prefs' => 0,
    'tiki_p_batch_upload_image_dir' => 0,
    'tiki_p_admin_galleries' => 0,
    'user' => 0,
    'owner' => 0,
    'public' => 0,
    'batchRes' => 0,
    'url_show' => 0,
    'show' => 0,
    'imageId' => 0,
    'url_browse' => 0,
    'galleries' => 0,
    'tiki_p_list_image_galleries' => 0,
    'tiki_p_admin' => 0,
    'max_upload_size_comment' => 0,
    'max_upload_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63d91086efe4_56358711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63d91086efe4_56358711')) {function content_5b63d91086efe4_56358711($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Image Galleries")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Image Galleries"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload Image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Image Galleries"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar btn-group">
	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!='') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-browse_gallery.php",'_auto_args'=>"galleryId",'class'=>"btn btn-default",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_button(array('href'=>"tiki-galleries.php",'class'=>"btn btn-default",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gal_batch']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_image_dir']->value=='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)||$_smarty_tpl->tpl_vars['public']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-batch_upload.php",'_auto_args'=>"galleryId",'class'=>"btn btn-default",'_text'=>"Directory Batch"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['batchRes']->value) {?>
	<h2>Batch Upload Results</h2>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Filename</th>
				<th>Status</th>
				<th>ID</th>
				<th>Image</th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['batchRes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<td><?php echo $_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msg']) {?>
						<td colspan="3">
							<?php echo smarty_function_icon(array('name'=>'error','alt'=>"Errors detected",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msg'];?>

						</td>
					<?php } else { ?>
						<td>
							<?php echo smarty_function_icon(array('name'=>'ok','alt'=>"Upload successful!",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
Upload successful!</td><td><?php echo $_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['imageId'];?>
</td><td><img src="<?php echo $_smarty_tpl->tpl_vars['url_show']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['imageId'];?>
&amp;thumb=1" alt="<?php echo $_smarty_tpl->tpl_vars['batchRes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
">
						</td>
					<?php }?>
				</tr>
			<?php endfor; endif; ?>
		</table>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show']->value=='y') {?>
	<h2>Upload successful!</h2>
	<h3>The following image was successfully uploaded:</h3>
	<div align="center">
		<img src="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['imageId']->value;?>
" alt="Image ID">
		<br>
		<b>Thumbnail:</b>
		<br>
		<img src="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['imageId']->value;?>
&amp;thumb=1" alt="Image ID thumb">
		<br><br>
		<div class="wikitext">
			You can view this image in your browser using:&nbsp;
			<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['url_browse']->value;?>
?imageId=<?php echo $_smarty_tpl->tpl_vars['imageId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url_browse']->value;?>
?imageId=<?php echo $_smarty_tpl->tpl_vars['imageId']->value;?>
</a>
			<br><br>
			You can include the image in an Wiki page using:&nbsp;
			<code>{img id=<?php echo $_smarty_tpl->tpl_vars['imageId']->value;?>
}</code>
		</div>
	</div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['galleries']->value)>0) {?>
	<div align="center">
		<?php if ($_smarty_tpl->tpl_vars['batchRes']->value||$_smarty_tpl->tpl_vars['show']->value=='y') {?>
			<h2>Upload File</h2>
		<?php }?>
		<form enctype="multipart/form-data" action="tiki-upload_image.php" method="post">
			<table class="formcolor">
				<tr>
					<td>Image Name:</td>
					<td>
						<input type="text" size ="50" name="name">
						<br>
						or use filename: <input type="checkbox" name="use_filename">
					</td>
				</tr>
				<tr>
					<td>Image Description:</td>
					<td>
						<textarea rows="5" cols="50" name="description"></textarea>
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_image_galleries']->value=='y') {?>
					<tr>
						<td>Gallery:</td>
						<td>
							<select name="galleryId">
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
									<?php if (($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['individual_tiki_p_upload_images']=='y')) {?>
										<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['galleryId']);?>
" <?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['galleryId']==$_smarty_tpl->tpl_vars['galleryId']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['name'];?>
</option>
									<?php }?>
								<?php endfor; endif; ?>
							</select>
						</td>
					</tr>
				<?php } else { ?>
					<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
				<?php }?>
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<tr>
					<td colspan="2">
						<b>Now enter the image URL or upload a local image from your disk</b>
					</td>
				</tr>
				<tr>
					<td>URL:</td>
					<td>
						<input size="50" type="text" name="url">
					</td>
				</tr>
				<tr>
					<td>Upload From Disk / Batch Upload:</td>
					<td>
						<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
						<input size="50" name="userfile1" type="file">
					</td>
				</tr>
				<tr>
					<td>Thumbnail (optional, overrides automatic thumbnail generation):</td>
					<td>
						<input name="userfile2" size ="50" type="file">
					</td>
				</tr>
				<tr>
					<td>Upload From Disk:</td>
					<td>
						<input name="userfile3" type="file">
						<input name="userfile4" type="file">
						<br>
						<input name="userfile5" type="file">
						<input name="userfile6" type="file">
						<br>
						<input name="userfile7" type="file">
						<input name="userfile8" type="file">
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('td_style'=>"formcolor"), 0);?>

				<?php }?>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" class="btn btn-default btn-sm" name="upload" value="Upload">
					</td>
				</tr>
			</table>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Maximum file size is around: <?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?><a title="<?php echo $_smarty_tpl->tpl_vars['max_upload_size_comment']->value;?>
"><?php }
echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_upload_size']->value,true,0);
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?></a><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</form>
	</div>
<?php } else { ?>
	<?php echo smarty_function_icon(array('name'=>'error','alt'=>"Error",'style'=>"vertical-align:middle;"),$_smarty_tpl);?>
 No gallery available. You have to create a gallery first!
	<p><a href="tiki-galleries.php?edit_mode=1&galleryId=0">Create New Gallery</a></p>
<?php }?>


<?php }} ?>
