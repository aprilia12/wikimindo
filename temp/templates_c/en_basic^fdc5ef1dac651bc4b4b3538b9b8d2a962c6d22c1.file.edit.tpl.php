<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 04:20:14
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tabular\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:776422545b6cf65e2545e7-87671242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdc5ef1dac651bc4b4b3538b9b8d2a962c6d22c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tabular\\edit.tpl',
      1 => 1519813046,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776422545b6cf65e2545e7-87671242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
    'icon_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6cf65e3b00b1_55894362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6cf65e3b00b1_55894362')) {function content_5b6cf65e3b00b1_55894362($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container<?php if (isset($_SESSION['fullscreen'])&&$_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<div class="page-header" id="page-header">
		<?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

		<div class="topbar row" id="topbar">
			<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

		</div>
	</div>
<?php }?>

	<div class="row row-middle" id="row-middle">
		<?php if ((zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n')&&(zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n')) {?>
			<div class="col-md-12 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

				
	<div class="table-responsive">
		<form class="form-horizontal edit-tabular" method="post" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
">
			<div class="form-group">
				<label class="control-label col-sm-3">Name</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Fields</label>
				<div class="col-sm-9">
					<table class="table fields">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th><abbr title="Primary Key">PK</abbr></th>
								<th><abbr title="Unique Key">UK</abbr></th>
								<th><abbr title="Read-Only">RO</abbr></th>
								<th><abbr title="Export-Only">EO</abbr></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="field-label form-control" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="align">Left</span>
												<span class="caret"></span>
												<input class="display-align" type="hidden" value="left">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="align-option" href="#left">Left</a></li>
												<li><a class="align-option" href="#center">Center</a></li>
												<li><a class="align-option" href="#right">Right</a></li>
												<li><a class="align-option" href="#justify">Justify</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td><input class="primary" type="radio" name="pk" /></td>
								<td><input class="unique-key" type="checkbox" /></td>
								<td><input class="read-only" type="checkbox" /></td>
								<td><input class="export-only" type="checkbox" /></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getColumns(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['column']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->index++;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" style="width: auto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="align"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign()));?>
</span>
													<span class="caret"></span>
													<input class="display-align" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="align-option" href="#left">Left</a></li>
													<li><a class="align-option" href="#center">Center</a></li>
													<li><a class="align-option" href="#right">Right</a></li>
													<li><a class="align-option" href="#justify">Justify</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td>
										<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'permName'=>$_smarty_tpl->tpl_vars['column']->value->getField(),'columnIndex'=>$_smarty_tpl->tpl_vars['column']->index,'mode'=>$_smarty_tpl->tpl_vars['column']->value->getMode()),$_smarty_tpl);?>
" class="btn btn-link add-field">
											<span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getField());?>
</span>:
											<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getMode());?>
</span>
										</a>
									</td>
									<td><input class="primary" type="radio" name="pk" <?php if ($_smarty_tpl->tpl_vars['column']->value->isPrimaryKey()) {?> checked <?php }?> /></td>
									<td><input class="unique-key" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isUniqueKey()) {?> checked <?php }?> /></td>
									<td><input class="read-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isReadOnly()) {?> checked <?php }?> /></td>
									<td><input class="export-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isExportOnly()) {?> checked <?php }?> /></td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field">Select Mode</a>
									<textarea name="fields" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['schema']->value->getFormatDescriptor());?>
</textarea>
								</td>
								<td colspan="3">
									<div class="radio">
										<label>
											<input class="primary" type="radio" name="pk" <?php if (!$_smarty_tpl->tpl_vars['schema']->value->getPrimaryKey()) {?> checked <?php }?> />
											No primary key
										</label>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p><strong>Primary Key:</strong> Required to import data. Can be any field as long as it is unique.</p>
						<p><strong>Unique Key:</strong> Impose unique value requirement for the target column. This only works with Transactional Import feature.</p>
						<p><strong>Read-only:</strong> When importing a file, read-only fields will be skipped, preventing them from being modified, but also speeding-up the process.</p>
						<p>When two fields affecting the same value are included in the format, such as the ID and the text value for an Item Link field, one of the two fields must be marked as read-only to prevent a conflict.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Filters</label>
				<div class="col-sm-9">
					<table class="table filters">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="filter-label form-control" value="Label" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="position-label">Default</span>
												<span class="caret"></span>
												<input class="position" type="hidden" value="default">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="position-option" href="#default">Default</a></li>
												<li><a class="position-option" href="#primary">Primary</a></li>
												<li><a class="position-option" href="#side">Side</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="position-label"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['filter']->value->getPosition()));?>
</span>
													<span class="caret"></span>
													<input class="position" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getPosition());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="position-option" href="#default">Default</a></li>
													<li><a class="position-option" href="#primary">Primary</a></li>
													<li><a class="position-option" href="#side">Side</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td><span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getField());?>
</span>:<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getMode());?>
</td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select_filter','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-filter">Select Mode</a>
									<textarea name="filters" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['filterCollection']->value->getFilterDescriptor());?>
</textarea>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p>Filters will be available in partial export menus.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Simple headers</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[simple_headers]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['simple_headers']) {?> checked <?php }?>>
					<a class="tikihelp" title="Simple headers: Allow using field labels only as a header row when importing rather than the full &quot;Field [permName:type]&quot; format.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Import updates</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_update]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_update']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import update: Allow updating existing entries matched by PK when importing. If this is disabled, only new items will be imported.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Ignore blanks</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[ignore_blanks]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ignore_blanks']) {?> checked <?php }?>>
					<a class="tikihelp" title="Ignore blanks: Ignore blank values when import is updating existing items. Only non-blank values will be updated this way.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Transactional import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_transaction]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_transaction']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import transaction: Import in a single transaction. If any of the items fails validation, the whole import is rejected and nothing is saved.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Bulk import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[bulk_import]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['bulk_import']) {?> checked <?php }?>>
					<a class="tikihelp" title="Bulk Import: Import in 'bulk' mode so the search index is not updated for each item and no notifications should be sent.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group submit">
				<div class="col-sm-9 col-sm-push-3">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
		</form>
	</div>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-12 text-right side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>

			<div class="col-md-9 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

				
	<div class="table-responsive">
		<form class="form-horizontal edit-tabular" method="post" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
">
			<div class="form-group">
				<label class="control-label col-sm-3">Name</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Fields</label>
				<div class="col-sm-9">
					<table class="table fields">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th><abbr title="Primary Key">PK</abbr></th>
								<th><abbr title="Unique Key">UK</abbr></th>
								<th><abbr title="Read-Only">RO</abbr></th>
								<th><abbr title="Export-Only">EO</abbr></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="field-label form-control" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="align">Left</span>
												<span class="caret"></span>
												<input class="display-align" type="hidden" value="left">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="align-option" href="#left">Left</a></li>
												<li><a class="align-option" href="#center">Center</a></li>
												<li><a class="align-option" href="#right">Right</a></li>
												<li><a class="align-option" href="#justify">Justify</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td><input class="primary" type="radio" name="pk" /></td>
								<td><input class="unique-key" type="checkbox" /></td>
								<td><input class="read-only" type="checkbox" /></td>
								<td><input class="export-only" type="checkbox" /></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getColumns(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['column']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->index++;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" style="width: auto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="align"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign()));?>
</span>
													<span class="caret"></span>
													<input class="display-align" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="align-option" href="#left">Left</a></li>
													<li><a class="align-option" href="#center">Center</a></li>
													<li><a class="align-option" href="#right">Right</a></li>
													<li><a class="align-option" href="#justify">Justify</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td>
										<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'permName'=>$_smarty_tpl->tpl_vars['column']->value->getField(),'columnIndex'=>$_smarty_tpl->tpl_vars['column']->index,'mode'=>$_smarty_tpl->tpl_vars['column']->value->getMode()),$_smarty_tpl);?>
" class="btn btn-link add-field">
											<span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getField());?>
</span>:
											<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getMode());?>
</span>
										</a>
									</td>
									<td><input class="primary" type="radio" name="pk" <?php if ($_smarty_tpl->tpl_vars['column']->value->isPrimaryKey()) {?> checked <?php }?> /></td>
									<td><input class="unique-key" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isUniqueKey()) {?> checked <?php }?> /></td>
									<td><input class="read-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isReadOnly()) {?> checked <?php }?> /></td>
									<td><input class="export-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isExportOnly()) {?> checked <?php }?> /></td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field">Select Mode</a>
									<textarea name="fields" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['schema']->value->getFormatDescriptor());?>
</textarea>
								</td>
								<td colspan="3">
									<div class="radio">
										<label>
											<input class="primary" type="radio" name="pk" <?php if (!$_smarty_tpl->tpl_vars['schema']->value->getPrimaryKey()) {?> checked <?php }?> />
											No primary key
										</label>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p><strong>Primary Key:</strong> Required to import data. Can be any field as long as it is unique.</p>
						<p><strong>Unique Key:</strong> Impose unique value requirement for the target column. This only works with Transactional Import feature.</p>
						<p><strong>Read-only:</strong> When importing a file, read-only fields will be skipped, preventing them from being modified, but also speeding-up the process.</p>
						<p>When two fields affecting the same value are included in the format, such as the ID and the text value for an Item Link field, one of the two fields must be marked as read-only to prevent a conflict.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Filters</label>
				<div class="col-sm-9">
					<table class="table filters">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="filter-label form-control" value="Label" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="position-label">Default</span>
												<span class="caret"></span>
												<input class="position" type="hidden" value="default">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="position-option" href="#default">Default</a></li>
												<li><a class="position-option" href="#primary">Primary</a></li>
												<li><a class="position-option" href="#side">Side</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="position-label"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['filter']->value->getPosition()));?>
</span>
													<span class="caret"></span>
													<input class="position" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getPosition());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="position-option" href="#default">Default</a></li>
													<li><a class="position-option" href="#primary">Primary</a></li>
													<li><a class="position-option" href="#side">Side</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td><span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getField());?>
</span>:<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getMode());?>
</td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select_filter','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-filter">Select Mode</a>
									<textarea name="filters" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['filterCollection']->value->getFilterDescriptor());?>
</textarea>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p>Filters will be available in partial export menus.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Simple headers</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[simple_headers]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['simple_headers']) {?> checked <?php }?>>
					<a class="tikihelp" title="Simple headers: Allow using field labels only as a header row when importing rather than the full &quot;Field [permName:type]&quot; format.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Import updates</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_update]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_update']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import update: Allow updating existing entries matched by PK when importing. If this is disabled, only new items will be imported.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Ignore blanks</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[ignore_blanks]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ignore_blanks']) {?> checked <?php }?>>
					<a class="tikihelp" title="Ignore blanks: Ignore blank values when import is updating existing items. Only non-blank values will be updated this way.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Transactional import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_transaction]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_transaction']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import transaction: Import in a single transaction. If any of the items fails validation, the whole import is rejected and nothing is saved.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Bulk import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[bulk_import]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['bulk_import']) {?> checked <?php }?>>
					<a class="tikihelp" title="Bulk Import: Import in 'bulk' mode so the search index is not updated for each item and no notifications should be sent.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group submit">
				<div class="col-sm-9 col-sm-push-3">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
		</form>
	</div>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php } elseif (zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-12 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-9 col-md-push-3 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

				
	<div class="table-responsive">
		<form class="form-horizontal edit-tabular" method="post" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
">
			<div class="form-group">
				<label class="control-label col-sm-3">Name</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Fields</label>
				<div class="col-sm-9">
					<table class="table fields">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th><abbr title="Primary Key">PK</abbr></th>
								<th><abbr title="Unique Key">UK</abbr></th>
								<th><abbr title="Read-Only">RO</abbr></th>
								<th><abbr title="Export-Only">EO</abbr></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="field-label form-control" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="align">Left</span>
												<span class="caret"></span>
												<input class="display-align" type="hidden" value="left">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="align-option" href="#left">Left</a></li>
												<li><a class="align-option" href="#center">Center</a></li>
												<li><a class="align-option" href="#right">Right</a></li>
												<li><a class="align-option" href="#justify">Justify</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td><input class="primary" type="radio" name="pk" /></td>
								<td><input class="unique-key" type="checkbox" /></td>
								<td><input class="read-only" type="checkbox" /></td>
								<td><input class="export-only" type="checkbox" /></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getColumns(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['column']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->index++;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" style="width: auto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="align"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign()));?>
</span>
													<span class="caret"></span>
													<input class="display-align" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="align-option" href="#left">Left</a></li>
													<li><a class="align-option" href="#center">Center</a></li>
													<li><a class="align-option" href="#right">Right</a></li>
													<li><a class="align-option" href="#justify">Justify</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td>
										<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'permName'=>$_smarty_tpl->tpl_vars['column']->value->getField(),'columnIndex'=>$_smarty_tpl->tpl_vars['column']->index,'mode'=>$_smarty_tpl->tpl_vars['column']->value->getMode()),$_smarty_tpl);?>
" class="btn btn-link add-field">
											<span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getField());?>
</span>:
											<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getMode());?>
</span>
										</a>
									</td>
									<td><input class="primary" type="radio" name="pk" <?php if ($_smarty_tpl->tpl_vars['column']->value->isPrimaryKey()) {?> checked <?php }?> /></td>
									<td><input class="unique-key" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isUniqueKey()) {?> checked <?php }?> /></td>
									<td><input class="read-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isReadOnly()) {?> checked <?php }?> /></td>
									<td><input class="export-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isExportOnly()) {?> checked <?php }?> /></td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field">Select Mode</a>
									<textarea name="fields" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['schema']->value->getFormatDescriptor());?>
</textarea>
								</td>
								<td colspan="3">
									<div class="radio">
										<label>
											<input class="primary" type="radio" name="pk" <?php if (!$_smarty_tpl->tpl_vars['schema']->value->getPrimaryKey()) {?> checked <?php }?> />
											No primary key
										</label>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p><strong>Primary Key:</strong> Required to import data. Can be any field as long as it is unique.</p>
						<p><strong>Unique Key:</strong> Impose unique value requirement for the target column. This only works with Transactional Import feature.</p>
						<p><strong>Read-only:</strong> When importing a file, read-only fields will be skipped, preventing them from being modified, but also speeding-up the process.</p>
						<p>When two fields affecting the same value are included in the format, such as the ID and the text value for an Item Link field, one of the two fields must be marked as read-only to prevent a conflict.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Filters</label>
				<div class="col-sm-9">
					<table class="table filters">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="filter-label form-control" value="Label" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="position-label">Default</span>
												<span class="caret"></span>
												<input class="position" type="hidden" value="default">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="position-option" href="#default">Default</a></li>
												<li><a class="position-option" href="#primary">Primary</a></li>
												<li><a class="position-option" href="#side">Side</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="position-label"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['filter']->value->getPosition()));?>
</span>
													<span class="caret"></span>
													<input class="position" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getPosition());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="position-option" href="#default">Default</a></li>
													<li><a class="position-option" href="#primary">Primary</a></li>
													<li><a class="position-option" href="#side">Side</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td><span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getField());?>
</span>:<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getMode());?>
</td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select_filter','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-filter">Select Mode</a>
									<textarea name="filters" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['filterCollection']->value->getFilterDescriptor());?>
</textarea>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p>Filters will be available in partial export menus.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Simple headers</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[simple_headers]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['simple_headers']) {?> checked <?php }?>>
					<a class="tikihelp" title="Simple headers: Allow using field labels only as a header row when importing rather than the full &quot;Field [permName:type]&quot; format.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Import updates</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_update]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_update']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import update: Allow updating existing entries matched by PK when importing. If this is disabled, only new items will be imported.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Ignore blanks</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[ignore_blanks]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ignore_blanks']) {?> checked <?php }?>>
					<a class="tikihelp" title="Ignore blanks: Ignore blank values when import is updating existing items. Only non-blank values will be updated this way.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Transactional import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_transaction]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_transaction']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import transaction: Import in a single transaction. If any of the items fails validation, the whole import is rejected and nothing is saved.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Bulk import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[bulk_import]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['bulk_import']) {?> checked <?php }?>>
					<a class="tikihelp" title="Bulk Import: Import in 'bulk' mode so the search index is not updated for each item and no notifications should be sent.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group submit">
				<div class="col-sm-9 col-sm-push-3">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
		</form>
	</div>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3 col-md-pull-9" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-6 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-6 text-right side-col-toggle<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']!='user') {?> col-md-offset-6<?php }?>">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-8 col-md-push-2 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<div class="navbar">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'manage'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 Manage</a>
			<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'create'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>
 New</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

				
	<div class="table-responsive">
		<form class="form-horizontal edit-tabular" method="post" action="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'edit','tabularId'=>$_smarty_tpl->tpl_vars['tabularId']->value),$_smarty_tpl);?>
">
			<div class="form-group">
				<label class="control-label col-sm-3">Name</label>
				<div class="col-sm-9">
					<input class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Fields</label>
				<div class="col-sm-9">
					<table class="table fields">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th><abbr title="Primary Key">PK</abbr></th>
								<th><abbr title="Unique Key">UK</abbr></th>
								<th><abbr title="Read-Only">RO</abbr></th>
								<th><abbr title="Export-Only">EO</abbr></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="field-label form-control" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="align">Left</span>
												<span class="caret"></span>
												<input class="display-align" type="hidden" value="left">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="align-option" href="#left">Left</a></li>
												<li><a class="align-option" href="#center">Center</a></li>
												<li><a class="align-option" href="#right">Right</a></li>
												<li><a class="align-option" href="#justify">Justify</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td><input class="primary" type="radio" name="pk" /></td>
								<td><input class="unique-key" type="checkbox" /></td>
								<td><input class="read-only" type="checkbox" /></td>
								<td><input class="export-only" type="checkbox" /></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getColumns(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['column']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->index++;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" style="width: auto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="align"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign()));?>
</span>
													<span class="caret"></span>
													<input class="display-align" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getDisplayAlign());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="align-option" href="#left">Left</a></li>
													<li><a class="align-option" href="#center">Center</a></li>
													<li><a class="align-option" href="#right">Right</a></li>
													<li><a class="align-option" href="#justify">Justify</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td>
										<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'permName'=>$_smarty_tpl->tpl_vars['column']->value->getField(),'columnIndex'=>$_smarty_tpl->tpl_vars['column']->index,'mode'=>$_smarty_tpl->tpl_vars['column']->value->getMode()),$_smarty_tpl);?>
" class="btn btn-link add-field">
											<span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getField());?>
</span>:
											<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['column']->value->getMode());?>
</span>
										</a>
									</td>
									<td><input class="primary" type="radio" name="pk" <?php if ($_smarty_tpl->tpl_vars['column']->value->isPrimaryKey()) {?> checked <?php }?> /></td>
									<td><input class="unique-key" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isUniqueKey()) {?> checked <?php }?> /></td>
									<td><input class="read-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isReadOnly()) {?> checked <?php }?> /></td>
									<td><input class="export-only" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['column']->value->isExportOnly()) {?> checked <?php }?> /></td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field">Select Mode</a>
									<textarea name="fields" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['schema']->value->getFormatDescriptor());?>
</textarea>
								</td>
								<td colspan="3">
									<div class="radio">
										<label>
											<input class="primary" type="radio" name="pk" <?php if (!$_smarty_tpl->tpl_vars['schema']->value->getPrimaryKey()) {?> checked <?php }?> />
											No primary key
										</label>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p><strong>Primary Key:</strong> Required to import data. Can be any field as long as it is unique.</p>
						<p><strong>Unique Key:</strong> Impose unique value requirement for the target column. This only works with Transactional Import feature.</p>
						<p><strong>Read-only:</strong> When importing a file, read-only fields will be skipped, preventing them from being modified, but also speeding-up the process.</p>
						<p>When two fields affecting the same value are included in the format, such as the ID and the text value for an Item Link field, one of the two fields must be marked as read-only to prevent a conflict.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Filters</label>
				<div class="col-sm-9">
					<table class="table filters">
						<thead>
							<tr>
								<th>Field</th>
								<th>Mode</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hidden">
								<td>
									<div class="input-group input-group-sm">
										<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										<input type="text" class="filter-label form-control" value="Label" />
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<span class="position-label">Default</span>
												<span class="caret"></span>
												<input class="position" type="hidden" value="default">
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a class="position-option" href="#default">Default</a></li>
												<li><a class="position-option" href="#primary">Primary</a></li>
												<li><a class="position-option" href="#side">Side</a></li>
											</ul>
										</div>
									</div>
								</td>
								<td><span class="field">Field Name</span>:<span class="mode">Mode</span></td>
								<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
								<tr>
									<td>
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
											<input type="text" class="field-label form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getLabel());?>
" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<span class="position-label"><?php echo tra(ucfirst($_smarty_tpl->tpl_vars['filter']->value->getPosition()));?>
</span>
													<span class="caret"></span>
													<input class="position" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getPosition());?>
">
												</button>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a class="position-option" href="#default">Default</a></li>
													<li><a class="position-option" href="#primary">Primary</a></li>
													<li><a class="position-option" href="#side">Side</a></li>
												</ul>
											</div>
										</div>
									</td>
									<td><span class="field"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getField());?>
</span>:<span class="mode"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value->getMode());?>
</td>
									<td class="text-right"><button class="remove"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
</button></td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<select class="selection form-control">
										<option disabled="disabled" selected="selected">Select a field...</option>
										<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filterCollection']->value->getAvailableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td>
									<a href="<?php echo smarty_function_service(array('controller'=>'tabular','action'=>'select_filter','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-filter">Select Mode</a>
									<textarea name="filters" class="hidden"><?php echo json_encode($_smarty_tpl->tpl_vars['filterCollection']->value->getFilterDescriptor());?>
</textarea>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="help-block">
						<p>Filters will be available in partial export menus.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Simple headers</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[simple_headers]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['simple_headers']) {?> checked <?php }?>>
					<a class="tikihelp" title="Simple headers: Allow using field labels only as a header row when importing rather than the full &quot;Field [permName:type]&quot; format.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Import updates</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_update]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_update']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import update: Allow updating existing entries matched by PK when importing. If this is disabled, only new items will be imported.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Ignore blanks</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[ignore_blanks]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ignore_blanks']) {?> checked <?php }?>>
					<a class="tikihelp" title="Ignore blanks: Ignore blank values when import is updating existing items. Only non-blank values will be updated this way.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Transactional import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[import_transaction]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['import_transaction']) {?> checked <?php }?>>
					<a class="tikihelp" title="Import transaction: Import in a single transaction. If any of the items fails validation, the whole import is rejected and nothing is saved.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Bulk import</label>
				<div class="col-sm-9">
					<input type="checkbox" name="config[bulk_import]" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['bulk_import']) {?> checked <?php }?>>
					<a class="tikihelp" title="Bulk Import: Import in 'bulk' mode so the search index is not updated for each item and no notifications should be sent.">
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					</a>
				</div>
			</div>
			<div class="form-group submit">
				<div class="col-sm-9 col-sm-push-3">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
		</form>
	</div>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-2 col-md-pull-8" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
			<div class="col-md-2" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>

<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<footer class="footer" id="footer">
		<div class="footer_liner">
			<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

		</div>
	</footer>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
