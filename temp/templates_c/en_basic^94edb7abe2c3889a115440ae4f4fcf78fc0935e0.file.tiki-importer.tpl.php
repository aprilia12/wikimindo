<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 09:48:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-importer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20850098455b5193b5467964-71351016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94edb7abe2c3889a115440ae4f4fcf78fc0935e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-importer.tpl',
      1 => 1458281034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20850098455b5193b5467964-71351016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chooseSoftware' => 0,
    'prefs' => 0,
    'safe_mode' => 0,
    'availableSoftwares' => 0,
    'softwareClassName' => 0,
    'softwareName' => 0,
    'softwareSpecificOptions' => 0,
    'importerClassName' => 0,
    'importerOptions' => 0,
    'option' => 0,
    'selectOption' => 0,
    'importFeedback' => 0,
    'importErrors' => 0,
    'importLog' => 0,
    'wordpressUrls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5193b54c16f8_72622872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5193b54c16f8_72622872')) {function content_5b5193b54c16f8_72622872($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Tiki Importer")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Tiki Importer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tiki Importer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Tiki Importer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<br>

<?php if (isset($_smarty_tpl->tpl_vars['chooseSoftware']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		If you are NOT running a new Tiki installation, make a backup of your database before using this importer!
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_purifier']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			If your pages contain XML code, the HTML purifier will delete it. Deactivate this feature.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['safe_mode']->value!='') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Your PHP is running with safe mode enabled. This might cause problems to the import process as safe mode limits the possibility to change in run time some PHP settings (like max_execution_time). It is recommended to run this script without safe mode.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Depending on the size of the file from the source software, the import process may take a while to complete. This might be a problem according to your PHP and web server settings. This script tries to change the relevant settings but there are some settings that the script cannot change. So, if you are having problems with the script, please try to increase the value of the following PHP settings: max_input_time, max_execution_time (this setting is limited by the web server setting, if you are running Apache also change its Timeout setting), post_max_size, upload_max_filesize, memory_limit. It is recommended that you run this script on a server where you can change the values of those settings (if needed).
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<br>
	<label for="importerClassName">Select the software to import from:</label>
	<form method="post" name="chooseSoftware" action="tiki-importer.php">
		<select name="importerClassName" id="importerClassName">
			<option value="">Select...</option>
			<?php  $_smarty_tpl->tpl_vars['softwareName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['softwareName']->_loop = false;
 $_smarty_tpl->tpl_vars['softwareClassName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['availableSoftwares']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['softwareName']->key => $_smarty_tpl->tpl_vars['softwareName']->value) {
$_smarty_tpl->tpl_vars['softwareName']->_loop = true;
 $_smarty_tpl->tpl_vars['softwareClassName']->value = $_smarty_tpl->tpl_vars['softwareName']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['softwareClassName']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['softwareName']->value;?>
</option>
			<?php } ?>
		</select>
		<input type="submit" class="btn btn-default btn-sm" value="OK">
	</form>
	<br>
	<a href="tiki-import_xml_zip.php">Import wiki pages in an XML Zip file from another Tiki</a>

<?php } elseif (isset($_smarty_tpl->tpl_vars['softwareSpecificOptions']->value)) {?>
	<h2>Options:</h2>
	<form method="post" enctype="multipart/form-data" action="tiki-importer.php" onsubmit="return confirm('WARNING: make sure to have a backup before running the script. If you do not have a backup this is the last chance to cancel the importer by clicking on the cancel button.');";>
		<input type="hidden" name="importerClassName" value="<?php echo $_smarty_tpl->tpl_vars['importerClassName']->value;?>
">
		<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['importerOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='checkbox') {?>
				<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"><label for="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</label><br>
			<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=='text') {?>
				<label><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['option']->value['value'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
"<?php }?>></label><br>
			<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=='select') {?>
				<label for="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</label><br>
				<select id="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
">
				<?php  $_smarty_tpl->tpl_vars['selectOption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['selectOption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['selectOption']->key => $_smarty_tpl->tpl_vars['selectOption']->value) {
$_smarty_tpl->tpl_vars['selectOption']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['selectOption']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['selectOption']->value['label'];?>
</option>
				<?php } ?>
				</select>
			<?php }?>
		<?php } ?>
		<br><br>
		<input type="file" name="importFile"><br>
		<input type="submit" class="btn btn-default btn-sm" value="Import">
	</form>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['importFeedback']->value)) {?>
	<h4>Congratulations! You have successful imported your data to Tiki.</h4>

	<?php if (isset($_smarty_tpl->tpl_vars['importFeedback']->value['importedPages'])) {?>
		<p>
			<?php if (isset($_smarty_tpl->tpl_vars['importFeedback']->value['totalPages'])) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages'],'_1'=>$_smarty_tpl->tpl_vars['importFeedback']->value['totalPages'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages'],'_1'=>$_smarty_tpl->tpl_vars['importFeedback']->value['totalPages']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 pages imported from a total of %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages'],'_1'=>$_smarty_tpl->tpl_vars['importFeedback']->value['totalPages']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 pages imported<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPages']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			&nbsp;(you can see the list of wiki pages in your site <a href="tiki-listpages.php">here</a>).
		</p>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['importFeedback']->value['importedPosts'])) {?>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPosts'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPosts']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 posts imported.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedPosts']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['importFeedback']->value['importedTags'])) {?>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedTags'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedTags']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 tags imported.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedTags']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['importFeedback']->value['importedCategories'])) {?>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedCategories'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedCategories']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 categories imported.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importFeedback']->value['importedCategories']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['importErrors']->value)) {?>
		<br>
		<p><b>Errors:</b></p>
		<textarea rows="15" cols="100" codemirror="false"><?php echo $_smarty_tpl->tpl_vars['importErrors']->value;?>
</textarea>
	<?php }?>
	<br><br>
	<p><b>Importer log:</b></p>
	<textarea rows="15" cols="100" codemirror="false"><?php echo $_smarty_tpl->tpl_vars['importLog']->value;?>
</textarea>

	<?php if (isset($_smarty_tpl->tpl_vars['wordpressUrls']->value)) {?>
		<br><br>
		<p><b>Suggested .htaccess rules:</b></p>
		<textarea rows="15" cols="100" codemirror="false"><?php echo $_smarty_tpl->tpl_vars['wordpressUrls']->value;?>
</textarea>
	<?php }?>
<?php }?>
<?php }} ?>
