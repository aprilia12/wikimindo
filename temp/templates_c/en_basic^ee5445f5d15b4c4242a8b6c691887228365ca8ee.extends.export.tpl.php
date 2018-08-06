<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:48:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21013055615b67b6e3900ec0-43079402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1fdb2688e3bcf1a17ee81f8fada55cd7d233db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\export.tpl',
      1 => 1465183410,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21013055615b67b6e3900ec0-43079402',
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
  'unifunc' => 'content_5b67b6e3989a68_54337291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b6e3989a68_54337291')) {function content_5b67b6e3989a68_54337291($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_accordion')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion.php';
if (!is_callable('smarty_block_accordion_group')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion_group.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion', array()); $_block_repeat=true; echo smarty_block_accordion(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Export Tracker Items")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Export Tracker Items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form class="simple no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'filterfield'=>$_smarty_tpl->tpl_vars['filterfield']->value,'filtervalue'=>$_smarty_tpl->tpl_vars['filtervalue']->value),$_smarty_tpl);?>
" method="post">
		<div class="form-group">
			<label>Filename</label>
			<input type="text" value="Tracker_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
.csv" disabled="disabled" class="form-control">
		</div>
		<div class="form-group">
			<label for="encoding">Charset encoding</label>
			<select name="encoding" class="form-control">
				<option value="UTF-8" selected="selected">UTF-8</option>
				<option value="ISO-8859-1">ISO-8859-1 Latin</option>
			</select>
		</div>
		<div class="form-group">
			<label for="separator">Separator</label>
			<input type="text" name="separator" value="," size="2" class="form-control">
		</div>
		<div class="form-group">
			<label for="delimitorL">Delimitor (left)</label>
			<input type="text" name="delimitorL" value="&quot;" size="2" class="form-control">
		</div>
		<div class="form-group">
			<label for="delimitorR">Delimitor (right)</label>
			<input type="text" name="delimitorR" value="&quot;" size="2" class="form-control">
		</div>
		<div class="form-group">
			<label for="CR">Carriage return inside field value</label>
			<input type="text" name="CR" value="%%%" size="4" class="form-control">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="dateFormatUnixTimestamp" value="1">
				Export dates as UNIX Timestamps to facilitate importing
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="keepItemlinkId" value="1">
				Export ItemLink type fields as the itemId of the linked item (to facilitate importing)
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="keepCountryId" value="1" >
				Export country type fields as the system name of the country (to facilitate importing)
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="parse" value="1">
				Parse as wiki text
			</label>
		</div>
		<fieldset>
			<legend>Generic information</legend>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showItemId" value="1" checked="checked">
					Item ID
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showStatus" value="1" checked="checked">
					Status
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showCreated" value="1" checked="checked">
					Creation date
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="showLastModif" value="1" checked="checked">
					Last modification date
				</label>
			</div>
		</fieldset>
		<fieldset>
			<legend>Fields</legend>
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="listfields[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['fieldId']);?>
" checked="checked">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['name']);?>

					</label>
				</div>
			<?php } ?>
		</fieldset>
		<div class="form-group">
			<label for="recordsMax">Number of records</label>
			<input type="number" name="recordsMax" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['recordsMax']->value);?>
" class="form-control">
		</div>
		<div class="form-group">
			<label for="recordsOffset">First record</label>
			<input type="number" name="recordsOffset" value="1" class="form-control">
		</div>
		<div>
			<input type="submit" class="btn btn-default" value="Export">
		</div>
	</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Export Tracker Items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Quick Export")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Quick Export"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form method="post" class="simple no-ajax form-horizontal" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'dump_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<p>Produce a CSV with basic formatting.</p>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Note",'icon'=>"bricks")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'icon'=>"bricks"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>If you use field types such as 'User Preference', 'Relations' or 'Items list/Item link', please export your items through the next section below 'Export Tracker Items'</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'icon'=>"bricks"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div>
			<input type="submit" class="btn btn-default" value="Export">
		</div>
	</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Quick Export"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (isset($_smarty_tpl->tpl_vars['export']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Structure")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Structure"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form class="simple" action="" method="post">
		<div class="form-group">
			<label for="export">Tracker Export</label>
			<textarea name="export" class="form-control" rows="20"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['export']->value);?>
</textarea>
		</div>
		<div class="description">
			Copy the definition text above and paste into the Import Structure box for a new tracker.
		</div>
	</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Structure"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Profile Export")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Profile Export"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form method="post" class="simple no-ajax" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export_profile','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<p>Produce YAML for a profile.</p>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p><em>Please note: Experimental - work in progress</em></p>
			<p>Linked tracker and field IDs (such as those referenced in ItemLink, ItemsList field options, for instance) are not currently converted to profile object references, so will need manual replacement.</p>
			<p>For example: $profileobject:field_ref$</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div>
			<input type="submit" class="btn btn-default" value="Export Profile">
		</div>
	</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Profile Export"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
