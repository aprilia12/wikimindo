<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:54:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18553410395b695049726b04-67445949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '676f0eac1bbd7194aab64e96fe4198a78ac24ce0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_files.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18553410395b695049726b04-67445949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69504975d612_43944225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69504975d612_43944225')) {function content_5b69504975d612_43944225($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

	Set up the file gallery and attachments. Choose to store them either in the database or in files on disk, among other options.<br/><br/>
	<div class="media-body">
		<div class="row">
			<div class="col-lg-6">
				<fieldset>
					<legend>File Gallery</legend>
					<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						This setting makes the feature available, go to next wizard page to apply elFinder to File Galleries.
						This setting also activates jQuery, which is required for elFinder.
						See also <a href="http://doc.tiki.org/elFinder" target="_blank">elFinder @ doc.tiki.org</a>
					</div>
					<br>
					<?php echo smarty_function_preference(array('name'=>'fgal_use_db'),$_smarty_tpl);?>
<br>
					<em>See also <a href="tiki-admin.php?page=fgal#content1" target="_blank">File Gallery admin panel</a></em>
				</fieldset>
			</div>
			<div class="col-lg-6">
				<fieldset>
					<legend>Wiki Attachments</legend>
					<?php echo smarty_function_icon(array('name'=>"admin_wiki",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_wiki_attachments'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

					<br>
					<em>See also <a href="tiki-admin.php?page=wiki&amp;alt=Wiki#content2" target="_blank">Wiki admin panel</a></em>
				</fieldset>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
