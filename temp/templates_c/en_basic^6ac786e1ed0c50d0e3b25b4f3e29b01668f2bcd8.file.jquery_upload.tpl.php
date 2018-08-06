<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:57:36
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\file\jquery_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21183625615b63c4a047f2f6-74867433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac786e1ed0c50d0e3b25b4f3e29b01668f2bcd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\file\\jquery_upload.tpl',
      1 => 1501514956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21183625615b63c4a047f2f6-74867433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c4a04b5df4_32248563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c4a04b5df4_32248563')) {function content_5b63c4a04b5df4_32248563($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>


<div class="form-group">
	<div class="col-md-12">
		<div class="well fileupload margin-bottom-none">
			<h3 class="text-center"><?php echo smarty_function_icon(array('name'=>"cloud-upload"),$_smarty_tpl);?>
 Drop files or 
				<div class="btn btn-primary fileinput-button">
					<span>Choose files</span>
					
					<input id="fileupload" type="file" name="files[]" multiple>
				</div>
			</h3>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="files" class="files text-center col-md-12"></div>
</div>
<div class="form-group">
	<label for="autoupload" class="col-md-8 col-md-offset-4">
		<input type="checkbox" id="autoupload" name="autoupload"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['filegals_autoupload']=='y') {?> checked="checked"<?php }?>>
		Automatic upload
	</label>
</div>
<div class="hidden">
	<?php echo smarty_function_icon(array('name'=>'file','id'=>'file_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'pdf','id'=>'pdf_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'video','id'=>'video_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'audio','id'=>'audio_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'zip','id'=>'zip_icon'),$_smarty_tpl);?>

</div>
<?php }} ?>
