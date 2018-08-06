<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:47:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_tracker_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4143169605b67b6b78e6192-05694697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d1804a7d11eca8d4f3b0f656a3c34fa08c7536e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_tracker_fields.tpl',
      1 => 1441806082,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
    '58dd8da8a23e9b08360d0affe31a4527f40ce6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_actions.tpl',
      1 => 1480844428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4143169605b67b6b78e6192-05694697',
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
  'unifunc' => 'content_5b67b6b79e4052_26940066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b6b79e4052_26940066')) {function content_5b67b6b79e4052_26940066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value))); $_block_repeat=true; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tracker Fields: <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(smarty_modifier_escape(("Admin Tracker: ").($_smarty_tpl->tpl_vars['tracker_info']->value['name'])), null, 0);?>
	<div class="t_navbar margin-bottom-md">
		<div class="btn-group">
			<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'add_field','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field"><?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Add Field</a>
			<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_fields','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import Fields</a>
		</div>
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4143169605b67b6b78e6192-05694697');
content_5b67b6b7972bb5_97690051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
	<form class="form save-fields" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'save_fields'),$_smarty_tpl);?>
" role="form">
		<table id="fields" class="table table-condensed table-hover">
			<thead>
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>"fields[]"),$_smarty_tpl);?>
</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>List</th>
					<th>Title</th>
					<th>Search</th>
					<th>Public</th>
					<th>Mandatory</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div class="form-group">
			<div class="input-group col-sm-6">
				<select name="action" class="form-control">
					<option value="save_fields">Save All</option>
					<option value="remove_fields">Remove Selected</option>
					<option value="export_fields">Export Selected</option>
				</select>
				<span class="input-group-btn">
					<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
					<input type="hidden" name="confirm" value="0">
					<button type="submit" class="btn btn-primary" name="submit">Go</button>
				</span>
			</div>
		</div>
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var trackerId = <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
;
		$('.save-fields').submit(function () {
			var form = this, confirmed = false

			if ($(form.action).val() === 'remove_fields') {
				confirmed = confirm(tr('Do you really want to delete the selected fields?'));
				$(form.confirm).val(confirmed ? '1' : '0');

				if (! confirmed) {
					return false;
				}
			}

			if ($(form.action).val() === 'export_fields') {
				var url = $.serviceUrl({ controller: 'tracker', action: 'export_fields' });
				var target = $('.modal.fade:not(.in)').first();
				$.post(url, $(form).serialize() + '&modal=1', function (data) {
					$(".modal-content", target).html(data);
					target.modal();
				});
				return false;

			} else {
				$.ajax($(form).attr('action'), {
					type: 'POST',
					data: $(form).serialize(),
					dataType: 'json',
					success: function () {
						$container.tracker_load_fields(trackerId);
					}
				});
			}
			return false;
		});
		var $container = $('.save-fields tbody');
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
			$container.sortable({
					update: function () {
						$('td.id :hidden', this).each(function (k) {
							$(this).val(k * 10);
						});
					}
				})
				.disableSelection()
				.css('cursor', 'move');
		<?php }?>

		$container.tracker_load_fields(trackerId);

		$('.add-field').clickModal({
			open: function () {
				$(this).tracker_add_field({
					trackerId: trackerId
				});
			},
			success: function (data) {
				$container.tracker_load_fields(trackerId);

				$.closeModal({
					done: function () {
						if (! data.FORWARD) {
							return false;
						}

						setTimeout(function () {
							$.openModal({
								remote: $.service(data.FORWARD.controller, data.FORWARD.action, data.FORWARD)
							});
						}, 0);
					}
				});
			}
		});

		$('.import-fields').submit(function () {
			var form = this;
			$.ajax({
				url: $(form).attr('action'),
				type: 'POST',
				data: $(form).serialize(),
				success: function () {
					$container.tracker_load_fields(trackerId);
					$('textarea', form).val('');
					tikitabs(1);
				}
			});

			return false;
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value))); $_block_repeat=true; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tracker Fields: <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(smarty_modifier_escape(("Admin Tracker: ").($_smarty_tpl->tpl_vars['tracker_info']->value['name'])), null, 0);?>
	<div class="t_navbar margin-bottom-md">
		<div class="btn-group">
			<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'add_field','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field"><?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Add Field</a>
			<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_fields','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import Fields</a>
		</div>
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4143169605b67b6b78e6192-05694697');
content_5b67b6b7972bb5_97690051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
	<form class="form save-fields" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'save_fields'),$_smarty_tpl);?>
" role="form">
		<table id="fields" class="table table-condensed table-hover">
			<thead>
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>"fields[]"),$_smarty_tpl);?>
</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>List</th>
					<th>Title</th>
					<th>Search</th>
					<th>Public</th>
					<th>Mandatory</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div class="form-group">
			<div class="input-group col-sm-6">
				<select name="action" class="form-control">
					<option value="save_fields">Save All</option>
					<option value="remove_fields">Remove Selected</option>
					<option value="export_fields">Export Selected</option>
				</select>
				<span class="input-group-btn">
					<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
					<input type="hidden" name="confirm" value="0">
					<button type="submit" class="btn btn-primary" name="submit">Go</button>
				</span>
			</div>
		</div>
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var trackerId = <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
;
		$('.save-fields').submit(function () {
			var form = this, confirmed = false

			if ($(form.action).val() === 'remove_fields') {
				confirmed = confirm(tr('Do you really want to delete the selected fields?'));
				$(form.confirm).val(confirmed ? '1' : '0');

				if (! confirmed) {
					return false;
				}
			}

			if ($(form.action).val() === 'export_fields') {
				var url = $.serviceUrl({ controller: 'tracker', action: 'export_fields' });
				var target = $('.modal.fade:not(.in)').first();
				$.post(url, $(form).serialize() + '&modal=1', function (data) {
					$(".modal-content", target).html(data);
					target.modal();
				});
				return false;

			} else {
				$.ajax($(form).attr('action'), {
					type: 'POST',
					data: $(form).serialize(),
					dataType: 'json',
					success: function () {
						$container.tracker_load_fields(trackerId);
					}
				});
			}
			return false;
		});
		var $container = $('.save-fields tbody');
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
			$container.sortable({
					update: function () {
						$('td.id :hidden', this).each(function (k) {
							$(this).val(k * 10);
						});
					}
				})
				.disableSelection()
				.css('cursor', 'move');
		<?php }?>

		$container.tracker_load_fields(trackerId);

		$('.add-field').clickModal({
			open: function () {
				$(this).tracker_add_field({
					trackerId: trackerId
				});
			},
			success: function (data) {
				$container.tracker_load_fields(trackerId);

				$.closeModal({
					done: function () {
						if (! data.FORWARD) {
							return false;
						}

						setTimeout(function () {
							$.openModal({
								remote: $.service(data.FORWARD.controller, data.FORWARD.action, data.FORWARD)
							});
						}, 0);
					}
				});
			}
		});

		$('.import-fields').submit(function () {
			var form = this;
			$.ajax({
				url: $(form).attr('action'),
				type: 'POST',
				data: $(form).serialize(),
				success: function () {
					$container.tracker_load_fields(trackerId);
					$('textarea', form).val('');
					tikitabs(1);
				}
			});

			return false;
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value))); $_block_repeat=true; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tracker Fields: <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(smarty_modifier_escape(("Admin Tracker: ").($_smarty_tpl->tpl_vars['tracker_info']->value['name'])), null, 0);?>
	<div class="t_navbar margin-bottom-md">
		<div class="btn-group">
			<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'add_field','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field"><?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Add Field</a>
			<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_fields','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import Fields</a>
		</div>
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4143169605b67b6b78e6192-05694697');
content_5b67b6b7972bb5_97690051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
	<form class="form save-fields" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'save_fields'),$_smarty_tpl);?>
" role="form">
		<table id="fields" class="table table-condensed table-hover">
			<thead>
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>"fields[]"),$_smarty_tpl);?>
</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>List</th>
					<th>Title</th>
					<th>Search</th>
					<th>Public</th>
					<th>Mandatory</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div class="form-group">
			<div class="input-group col-sm-6">
				<select name="action" class="form-control">
					<option value="save_fields">Save All</option>
					<option value="remove_fields">Remove Selected</option>
					<option value="export_fields">Export Selected</option>
				</select>
				<span class="input-group-btn">
					<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
					<input type="hidden" name="confirm" value="0">
					<button type="submit" class="btn btn-primary" name="submit">Go</button>
				</span>
			</div>
		</div>
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var trackerId = <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
;
		$('.save-fields').submit(function () {
			var form = this, confirmed = false

			if ($(form.action).val() === 'remove_fields') {
				confirmed = confirm(tr('Do you really want to delete the selected fields?'));
				$(form.confirm).val(confirmed ? '1' : '0');

				if (! confirmed) {
					return false;
				}
			}

			if ($(form.action).val() === 'export_fields') {
				var url = $.serviceUrl({ controller: 'tracker', action: 'export_fields' });
				var target = $('.modal.fade:not(.in)').first();
				$.post(url, $(form).serialize() + '&modal=1', function (data) {
					$(".modal-content", target).html(data);
					target.modal();
				});
				return false;

			} else {
				$.ajax($(form).attr('action'), {
					type: 'POST',
					data: $(form).serialize(),
					dataType: 'json',
					success: function () {
						$container.tracker_load_fields(trackerId);
					}
				});
			}
			return false;
		});
		var $container = $('.save-fields tbody');
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
			$container.sortable({
					update: function () {
						$('td.id :hidden', this).each(function (k) {
							$(this).val(k * 10);
						});
					}
				})
				.disableSelection()
				.css('cursor', 'move');
		<?php }?>

		$container.tracker_load_fields(trackerId);

		$('.add-field').clickModal({
			open: function () {
				$(this).tracker_add_field({
					trackerId: trackerId
				});
			},
			success: function (data) {
				$container.tracker_load_fields(trackerId);

				$.closeModal({
					done: function () {
						if (! data.FORWARD) {
							return false;
						}

						setTimeout(function () {
							$.openModal({
								remote: $.service(data.FORWARD.controller, data.FORWARD.action, data.FORWARD)
							});
						}, 0);
					}
				});
			}
		});

		$('.import-fields').submit(function () {
			var form = this;
			$.ajax({
				url: $(form).attr('action'),
				type: 'POST',
				data: $(form).serialize(),
				success: function () {
					$container.tracker_load_fields(trackerId);
					$('textarea', form).val('');
					tikitabs(1);
				}
			});

			return false;
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value))); $_block_repeat=true; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tracker Fields: <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Adding fields to a tracker",'url'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['trackerId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(smarty_modifier_escape(("Admin Tracker: ").($_smarty_tpl->tpl_vars['tracker_info']->value['name'])), null, 0);?>
	<div class="t_navbar margin-bottom-md">
		<div class="btn-group">
			<a href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'add_field','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default add-field"><?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Add Field</a>
			<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'import_fields','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import Fields</a>
		</div>
		<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4143169605b67b6b78e6192-05694697');
content_5b67b6b7972bb5_97690051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	</div>

				
	<form class="form save-fields" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'save_fields'),$_smarty_tpl);?>
" role="form">
		<table id="fields" class="table table-condensed table-hover">
			<thead>
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>"fields[]"),$_smarty_tpl);?>
</th>
					<th>ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>List</th>
					<th>Title</th>
					<th>Search</th>
					<th>Public</th>
					<th>Mandatory</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div class="form-group">
			<div class="input-group col-sm-6">
				<select name="action" class="form-control">
					<option value="save_fields">Save All</option>
					<option value="remove_fields">Remove Selected</option>
					<option value="export_fields">Export Selected</option>
				</select>
				<span class="input-group-btn">
					<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
					<input type="hidden" name="confirm" value="0">
					<button type="submit" class="btn btn-primary" name="submit">Go</button>
				</span>
			</div>
		</div>
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var trackerId = <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
;
		$('.save-fields').submit(function () {
			var form = this, confirmed = false

			if ($(form.action).val() === 'remove_fields') {
				confirmed = confirm(tr('Do you really want to delete the selected fields?'));
				$(form.confirm).val(confirmed ? '1' : '0');

				if (! confirmed) {
					return false;
				}
			}

			if ($(form.action).val() === 'export_fields') {
				var url = $.serviceUrl({ controller: 'tracker', action: 'export_fields' });
				var target = $('.modal.fade:not(.in)').first();
				$.post(url, $(form).serialize() + '&modal=1', function (data) {
					$(".modal-content", target).html(data);
					target.modal();
				});
				return false;

			} else {
				$.ajax($(form).attr('action'), {
					type: 'POST',
					data: $(form).serialize(),
					dataType: 'json',
					success: function () {
						$container.tracker_load_fields(trackerId);
					}
				});
			}
			return false;
		});
		var $container = $('.save-fields tbody');
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
			$container.sortable({
					update: function () {
						$('td.id :hidden', this).each(function (k) {
							$(this).val(k * 10);
						});
					}
				})
				.disableSelection()
				.css('cursor', 'move');
		<?php }?>

		$container.tracker_load_fields(trackerId);

		$('.add-field').clickModal({
			open: function () {
				$(this).tracker_add_field({
					trackerId: trackerId
				});
			},
			success: function (data) {
				$container.tracker_load_fields(trackerId);

				$.closeModal({
					done: function () {
						if (! data.FORWARD) {
							return false;
						}

						setTimeout(function () {
							$.openModal({
								remote: $.service(data.FORWARD.controller, data.FORWARD.action, data.FORWARD)
							});
						}, 0);
					}
				});
			}
		});

		$('.import-fields').submit(function () {
			var form = this;
			$.ajax({
				url: $(form).attr('action'),
				type: 'POST',
				data: $(form).serialize(),
				success: function () {
					$container.tracker_load_fields(trackerId);
					$('textarea', form).val('');
					tikitabs(1);
				}
			});

			return false;
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:47:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67b6b7972bb5_97690051')) {function content_5b67b6b7972bb5_97690051($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>

<div class="btn-group">

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&!empty($_smarty_tpl->tpl_vars['trackerId']->value)) {?>
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Properties
	</a>
	<a class="btn btn-default" href="tiki-admin_tracker_fields.php?trackerId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<?php echo smarty_function_icon(array('name'=>"th-list"),$_smarty_tpl);?>
 Fields
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value=='y') {?>
	<a class="btn btn-default" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>trackers<?php } else { ?>tiki-list_trackers.php<?php }?>">
		<?php echo smarty_function_icon(array('name'=>"trackers"),$_smarty_tpl);?>
 Trackers
	</a>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['trackerId']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y'&&(empty($_smarty_tpl->tpl_vars['showitems']->value)||$_smarty_tpl->tpl_vars['showitems']->value!=='n')) {?>
	<a class="btn btn-default" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,"tracker");?>
">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Items
	</a>
<?php }?>

</div>
<?php }} ?>
