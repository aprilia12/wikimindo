<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:54:53
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_files_storage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11817075835b69504d939a13-35641019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afe1299462ae862516dfd915c4a554ca5dd80dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_files_storage.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11817075835b69504d939a13-35641019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promptElFinder' => 0,
    'useElFinderAsDefault' => 0,
    'promptFileGalleryStorage' => 0,
    'promptAttachmentStorage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69504d970527_09993197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69504d970527_09993197')) {function content_5b69504d970527_09993197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Choose your desired settings below</br></br>
	<div class="media-body">
		<p>
			<?php if (isset($_smarty_tpl->tpl_vars['promptElFinder']->value)&&$_smarty_tpl->tpl_vars['promptElFinder']->value=='y') {?>
				<div>
					<fieldset>
						<legend>elFinder</legend>
						<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>2,'iclass'=>"pull-right"),$_smarty_tpl);?>

						<input type="checkbox" name="useElFinderAsDefault" <?php if (!isset($_smarty_tpl->tpl_vars['useElFinderAsDefault']->value)||$_smarty_tpl->tpl_vars['useElFinderAsDefault']->value==true) {?>checked='checked'<?php }?> /> Set elFinder as the default file gallery viewer.
						<div class="adminoptionboxchild">
							See also <a href="http://doc.tiki.org/elFinder" target="_blank">elFinder @ doc.tiki.org</a>
						</div>
						<br>
					</fieldset>
				</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['promptFileGalleryStorage']->value)&&$_smarty_tpl->tpl_vars['promptFileGalleryStorage']->value=='y') {?>
				<div>
					<fieldset>
						<img src="img/icons/large/file-manager.png" class="adminWizardIconright" />
						<legend>File Gallery storage</legend>
						<?php echo smarty_function_preference(array('name'=>'fgal_use_dir'),$_smarty_tpl);?>

					</fieldset>
				</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['promptAttachmentStorage']->value)&&$_smarty_tpl->tpl_vars['promptAttachmentStorage']->value=='y') {?>
				<div>
					<fieldset>
						<legend>Attachment storage</legend>
						<img src="img/icons/large/wikipages.png" class="adminWizardIconright" />
						<?php echo smarty_function_preference(array('name'=>'w_use_db'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'w_use_dir'),$_smarty_tpl);?>

					</fieldset>
				</div>
			<?php }?>
		</p>
	</div>
</div>
<?php }} ?>
