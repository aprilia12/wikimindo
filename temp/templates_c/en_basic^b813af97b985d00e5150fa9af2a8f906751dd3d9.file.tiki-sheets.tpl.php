<?php /* Smarty version Smarty-3.1.21, created on 2018-08-02 03:38:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-sheets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19774209815b6260a3b4b092-48887894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b813af97b985d00e5150fa9af2a8f906751dd3d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-sheets.tpl',
      1 => 1458196852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19774209815b6260a3b4b092-48887894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sheets' => 0,
    'find' => 0,
    'prefs' => 0,
    'sheet' => 0,
    'childSheet' => 0,
    'cant_pages' => 0,
    'offset' => 0,
    'tiki_p_edit_sheet' => 0,
    'sheetId' => 0,
    'title' => 0,
    'individual' => 0,
    'name' => 0,
    'description' => 0,
    'className' => 0,
    'headerRow' => 0,
    'footerRow' => 0,
    'parseValues' => 0,
    'tiki_p_admin_sheet' => 0,
    'creator' => 0,
    'parentSheetId' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6260a3c7bbd4_84125480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6260a3c7bbd4_84125480')) {function content_5b6260a3c7bbd4_84125480($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_user_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.user_selector.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Spreadsheet")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Spreadsheet"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Spreadsheets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Spreadsheet"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"List")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"List"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Spreadsheets</h2>
		<?php if ($_smarty_tpl->tpl_vars['sheets']->value||$_smarty_tpl->tpl_vars['find']->value!='') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<div class="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']==='y') {?>table-responsive<?php }?> sheet-table">
			<table class="table table-striped table-hover">
				<tr>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'title')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'description')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'description'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'description'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastModif'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'user')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th></th>
				</tr>

				<?php  $_smarty_tpl->tpl_vars['sheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sheet']->key => $_smarty_tpl->tpl_vars['sheet']->value) {
$_smarty_tpl->tpl_vars['sheet']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ('tiki-sheets_listing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>'base','sheet'=>$_smarty_tpl->tpl_vars['sheet']->value), 0);?>

					<?php  $_smarty_tpl->tpl_vars['childSheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childSheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheet']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childSheet']->key => $_smarty_tpl->tpl_vars['childSheet']->value) {
$_smarty_tpl->tpl_vars['childSheet']->_loop = true;
?>
						<?php echo $_smarty_tpl->getSubTemplate ('tiki-sheets_listing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>'child','sheet'=>$_smarty_tpl->tpl_vars['childSheet']->value), 0);?>

					<?php } ?>
				<?php }
if (!$_smarty_tpl->tpl_vars['sheet']->_loop) {
?>
					<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

				<?php } ?>
			</table>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"List"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_sheet']->value=='y') {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('title', null, null); ob_start();
if ($_smarty_tpl->tpl_vars['sheetId']->value==0) {?>Create<?php } else { ?>Configure<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>Smarty::$_smarty_vars['capture']['title'])); $_block_repeat=true; echo smarty_block_tab(array('name'=>Smarty::$_smarty_vars['capture']['title']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['sheetId']->value==0) {?>
				<h2>Create sheet</h2>
			<?php } else { ?>
				<h2>Configure sheet: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h2>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['individual']->value=='y') {?>
				<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>'sheet','id'=>$_smarty_tpl->tpl_vars['sheetId']->value,'title'=>$_smarty_tpl->tpl_vars['name']->value,'label'=>"There are individual permissions set for this sheet"),$_smarty_tpl);?>

			<?php }?>
			<form action="tiki-sheets.php" method="post" class="form-horizontal" role="form">
				<input type="hidden" name="sheetId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sheetId']->value);?>
">
				<div class="form-group">
					<label for="title" class="control-label col-sm-3">
						Title
					</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
">
					</div>
				</div>
				<div class="form-group">				
					<label for="description" class="control-label col-sm-3">
						Description
					</label>
					<div class="col-sm-9">
						<textarea rows="5" class="form-control" name="description"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
					</div>
				</div>
				<!--<tr><td>Class Name:</td><td><input type="text" name="className" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['className']->value);?>
"></td></tr>
				<tr><td>Header Rows:</td><td><input type="text" name="headerRow" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['headerRow']->value);?>
"></td></tr>
				<tr><td>Footer Rows:</td><td><input type="text" name="footerRow" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['footerRow']->value);?>
"></td></tr>-->
				<div class="checkbox col-sm-push-3">
					<label for="parseValues">
						<input type="checkbox" name="parseValues"<?php if ($_smarty_tpl->tpl_vars['parseValues']->value=='y') {?> checked="checked"<?php }?>>
						Wiki Parse Values
					</label>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_sheet']->value=="y") {?>
					<div class="form-group">
						<label for="creator" class="control-label col-sm-3">
							Creator
						</label>
						<div class="col-sm-9">
							<?php echo smarty_function_user_selector(array('name'=>"creator",'editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin_sheet']->value,'user'=>$_smarty_tpl->tpl_vars['creator']->value),$_smarty_tpl);?>

						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label for="parentSheetId" class="control-label col-sm-3">
						Parent Spreadsheet
					</label>
					<div class="col-sm-9">
						<select name="parentSheetId" class="form-control">
							<option value="0">None</option>
							<?php  $_smarty_tpl->tpl_vars['sheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sheet']->key => $_smarty_tpl->tpl_vars['sheet']->value) {
$_smarty_tpl->tpl_vars['sheet']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['sheet']->value['sheetId'];?>
"<?php if ($_smarty_tpl->tpl_vars['parentSheetId']->value==$_smarty_tpl->tpl_vars['sheet']->value['sheetId']) {?> selected="selected"<?php }?>>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sheet']->value['title']);?>
 - (<?php echo $_smarty_tpl->tpl_vars['sheet']->value['sheetId'];?>
)
								</option>
							<?php } ?>
						</select>
						<span class="help-block">
							Makes this sheet a "child" sheet of a multi-sheet set
						</span>
					</div>
				</div>
				<div class="form-group">
					<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-primary btn-sm" value="Save" name="edit">
				</div>
			</form>
			<?php if ($_smarty_tpl->tpl_vars['sheetId']->value>0) {?>
				<div class="wikitext col-sm-push-3 col-sm-9">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						You can access the sheet using the following URL: <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?sheetId=<?php echo $_smarty_tpl->tpl_vars['sheetId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?sheetId=<?php echo $_smarty_tpl->tpl_vars['sheetId']->value;?>
</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>Smarty::$_smarty_vars['capture']['title']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
