<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\import_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20082436065b67b4eda9a664-10414944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb92c87fa7c6caf05480ff724aaff45e66258df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\import_items.tpl',
      1 => 1423631694,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20082436065b67b4eda9a664-10414944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b4edb4e191_18773541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4edb4e191_18773541')) {function content_5b67b4edb4e191_18773541($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

<?php if ($_smarty_tpl->tpl_vars['return']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Confirmation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Imported file '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['importfile']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['return']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import completed with '%0'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['return']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Confirmation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<form class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
			<li>The order of the fields does not matter, but you need to add a header with the field names</li>
			<li>Add " -- " (with the spaces before and after) to the end of the fields in the header that you would like to import!</li>
			<li>Auto-incremented itemid fields shall be included with no matter what values</li>
			<li>If you are having problems, try a different line ending for your csv file that matches the server operating system</li>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group">
		<label for="importfile">File</label>
		<input type="file" name="importfile" class="form-control">
	</div>
	<div class="form-group">
		<label for="dataFormat">Date format</label>
		<select name="dateFormat" class="form-control">
			<option value="yyyy-mm-dd">year-month-day(2008-01-31)</option>
			<option value="mm/dd/yyyy">month/day/year(01/31/2008)</option>
			<option value="dd/mm/yyyy">day/month/year(31/01/2008)</option>
			<option value="">UNIX Timestamp</option>
		</select>
	</div>
	<div class="form-group">
		<label for=encoding">Character encoding</label>
		<select name="encoding" class="form-control">
			<option value="UTF-8" selected="selected">UTF-8</option>
			<option value="ISO-8859-1">ISO-8859-1</option>
		</select>
	</div>
	<div class="form-group">
		<label for="separator">Separator</label>
		<input type="text" name="separator" value="," size="2" class="form-control">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="add_items" value="1">
			Create as new items
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="updateLastModif" checked="checked" value="1">
			Update lastModif date if updating items (status and created are updated only if the fields are specified in the csv)
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="convertItemLinkValues" value="1">
			Convert values of ItemLink and Relation type fields from the value in the CSV file to the itemId of the linked item. Requires the linked or related item to be correctly set up in advance.
		</label>
	</div>
	<div class="submit">
		<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<input type="submit" class="btn btn-primary" value="Import">
	</div>
</form>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
