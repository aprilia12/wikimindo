<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:15:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_editor_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1050611975b63baaedca5b0-96723032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5344093d05e05970643310e4a36d1d470ae6263f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_editor_type.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050611975b63baaedca5b0-96723032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editorType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63baaedf5546_32014194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63baaedf5546_32014194')) {function content_5b63baaedf5546_32014194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
	<i class="fa fa-gear fa-stack-2x"></i>
	<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
</span>
Select editor type.</br></br></br>
<div class="adminWizardContent">
	<?php echo smarty_function_icon(array('name'=>"admin_textarea",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

	<fieldset>
		<legend>Editor</legend>
		<br>
		<table style="border:0px;padding-left:20px">
			<tr>
				<td>
					<input type="radio" name="editorType" value="text" <?php if (empty($_smarty_tpl->tpl_vars['editorType']->value)||$_smarty_tpl->tpl_vars['editorType']->value=='text') {?>checked="checked"<?php }?> /> Only Plain Text Editor (Disable Wysiwyg)
					<?php echo smarty_function_icon(array('name'=>"file-text-o",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<div style="display:block; margin-left:40px">
						Use only the plain text editor, which is the most stable editor mode and most compatible with Tiki functionality. The Full WYSIWYG Editor will be disabled, but you will still be able to insert wysiwyg sections through the Plain Text editor with <a href="https://doc.tiki.org/PluginWysiwyg" alt="Link to Plugin Wysiwyg doc. page" target="blank">Plugin Wysiwyg</a>.
					</div>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="editorType" value="wysiwyg" <?php if ($_smarty_tpl->tpl_vars['editorType']->value=='wysiwyg') {?>checked="checked"<?php }?> /> Wysiwyg
					<?php echo smarty_function_icon(array('name'=>"file-text-o",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<?php echo smarty_function_icon(array('name'=>"file-text",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<div style="display:block; margin-left:40px">
						Use a What You See Is What You Get (Wysiwyg) editor, by default in all new pages or only in some when selected. Provides a visual interface preferred by many. You will be able to configure the Full WYSIWYG Editor options in a next wizard page.
					</div>
				</td>
			</tr>
		</table>
		<br>
	</fieldset>
</div>
<?php }} ?>
