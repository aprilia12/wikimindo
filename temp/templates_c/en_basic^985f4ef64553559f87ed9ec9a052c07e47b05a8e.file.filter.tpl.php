<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:43:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15442881385b63c1562c5c95-49319793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985f4ef64553559f87ed9ec9a052c07e47b05a8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\filter.tpl',
      1 => 1478580516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15442881385b63c1562c5c95-49319793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_action' => 0,
    'filter_content' => 0,
    'prefs' => 0,
    'sort_modes' => 0,
    'k' => 0,
    'sort_mode' => 0,
    't' => 0,
    'filter_types' => 0,
    'filter_type' => 0,
    'tiki_p_view_category' => 0,
    'filter_categories' => 0,
    'filter_deep' => 0,
    'filter_category_picker' => 0,
    'tiki_p_view_freetags' => 0,
    'filter_tags' => 0,
    'filter_tags_picker' => 0,
    'filter' => 0,
    'filter_languages' => 0,
    'l' => 0,
    'filter_language' => 0,
    'filter_language_unspecified' => 0,
    'user' => 0,
    'filter_categmap' => 0,
    'filter_tagmap' => 0,
    'sort_found' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c156310029_06937937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c156310029_06937937')) {function content_5b63c156310029_06937937($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_object_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_selector.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
?>
<form method="get" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter_action']->value);?>
" class="filter form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">Content</label>
		<div class="col-sm-4">
			<input type="search" name="filter~content" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter_content']->value);?>
">
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order']=='y') {?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Sort By</label>
			<div class="col-sm-3">
				<select name="sort_mode" class="sort_mode form-control">
					<?php $_smarty_tpl->tpl_vars['sort_found'] = new Smarty_variable(false, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_modes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['sort_mode']->value) {?> selected="selected"<?php $_smarty_tpl->tpl_vars['sort_found'] = new Smarty_variable(true, null, 0);
}?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
</option>
					<?php } ?>
				</select>
			</div>
			<?php if (preg_match('/desc$/',$_smarty_tpl->tpl_vars['sort_mode']->value)) {?>
				<?php echo smarty_function_icon(array('name'=>'sort-down','class'=>'sort_invert','title'=>"Sort direction",'href'=>'#'),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_icon(array('name'=>'sort-up','class'=>'sort_invert','title'=>"Sort direction",'href'=>'#'),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php } else { ?>
		<input type="hidden" name="sort_mode" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_filter']=='y') {?>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="filter-type">Type</label>
				<div class="col-sm-4">
					<select name="filter~type" id="filter-type" class="form-control">
						<option value="">Any</option>
						<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['filter_type']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
		<?php } else { ?>
			<?php if (is_array($_smarty_tpl->tpl_vars['filter_type']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<input type="hidden" name="filter~type[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
">
				<?php } ?>
			<?php } else { ?>
				<input type="hidden" name="filter~type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter_type']->value);?>
">
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_category']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['search_show_category_filter']=='y') {?>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="filter-categories">Categories</label>
				<div class="col-sm-4">
					<a class="category-lookup btn btn-default margin-bottom-sm" href="#">Lookup</a>
					<input type="text" name="filter~categories" id="filter-categories" class="category-wizard form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter_categories']->value);?>
">
				</div>
				<div class="col-sm-5 checkbox">
					<label for="filter-deep">
						<input type="checkbox" name="filter~deep" id="filter-deep" <?php if ($_smarty_tpl->tpl_vars['filter_deep']->value) {?> checked="checked"<?php }?>> Deep search
					</label>
				</div>
			</div>

			<div class="category-picker" title="Select Categories" style="display:none;">
				<?php echo $_smarty_tpl->tpl_vars['filter_category_picker']->value;?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['search_show_tag_filter']=='y') {?>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="filter-tags">Tags</label>
				<div class="col-sm-4">
					<a class="tag-lookup btn btn-default" href="#">Lookup</a>
					<input type="text" name="filter~tags" class="tag-wizard" id="filter-tags" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter_tags']->value);?>
">
				</div>
				<div class="tag-picker" title="Select Tags" style="display:none;">
					<?php echo $_smarty_tpl->tpl_vars['filter_tags_picker']->value;?>

				</div>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['tracker_id'])) {?>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="filter-tracker_id">Tracker</label>
				<div class="col-sm-4">
					<?php echo smarty_function_object_selector(array('type'=>'tracker','_simplevalue'=>$_smarty_tpl->tpl_vars['filter']->value['tracker_id'],'_simplename'=>"filter~tracker_id",'_simpleid'=>"filter-tracker_id"),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_default_interface_language']!='y') {?>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="filter-language">Language</label>
					<div class="col-sm-4">
						<select name="filter~language" class="form-control" id="filter-language">
							<option value="">Any</option>
							<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['l']->value['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['filter_language']->value==$_smarty_tpl->tpl_vars['l']->value['value']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['l']->value['name']);?>
</option>
							<?php } ?>
						</select>
					</div>
					<div class="col-sm-5">
						<label for="filter-language-unspecified-checkbox" class="checkbox-inline">
							<input type="checkbox" id="filter-language-unspecified-checkbox" name="filter~language_unspecified"<?php if ($_smarty_tpl->tpl_vars['filter_language_unspecified']->value) {?> checked="checked"<?php }?>>
							Include objects without a specified language
						</label>
					</div>
				</div>
			<?php } else { ?>
				<input type="hidden" name="filter~language" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['language'];?>
">
				<input type="hidden" name="filter~language_unspecified" value="1">
			<?php }?>
		<?php }?>

	<div class="text-center">
		<input type="submit" class="btn btn-primary" value="Search">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&!empty($_GET['tabularId'])) {?>
			<input type="hidden" name="tabularId" value="<?php echo smarty_modifier_escape($_GET['tabularId']);?>
">
			<button class="tabular-export btn btn-default">
				<?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
 Export
			</button>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$(document).on('click', '.tabular-export', function (e) {
					var href = $.service('tabular', 'export_search_csv', {
						tabularId: "<?php echo $_GET['tabularId'];?>
"
					});
					e.preventDefault();
					document.location.href = href + '&' + $(this).closest('form').serialize();
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled']=='y'&&!empty($_smarty_tpl->tpl_vars['filter']->value['tracker_id'])) {?>
			<button class="tabular-export btn btn-default">
				<?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
 Export
			</button>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$(document).on('click', '.tabular-export', function (e) {
					var href = $.service('tabular', 'export_search_csv', {
						trackerId: "<?php echo $_smarty_tpl->tpl_vars['filter']->value['tracker_id'];?>
"
					});
					e.preventDefault();
					$.openModal({
						remote: href + '&' + $(this).closest('form').serialize()
					});
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['storedsearch_enabled']=='y'&&$_smarty_tpl->tpl_vars['user']->value) {?>
			<input type="hidden" name="storeAs" value=""/>
			<a href="<?php echo smarty_function_service(array('controller'=>'search_stored','action'=>'select','modal'=>true),$_smarty_tpl);?>
" id="store-query" class="btn btn-default">Save Search</a>
			<a href="<?php echo smarty_function_service(array('controller'=>'search_stored','action'=>'list'),$_smarty_tpl);?>
" class="btn btn-link">View Saved Searches</a>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('#store-query').clickModal({
					success: function (data) {
						var form = $(this).closest('form')[0];

						$(form.storeAs).val(data.queryId);
						$(form).attr('method', 'post');
						$(form).submit();
					}
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
">Search Help <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
	</div>
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$('.filter:not(.init)').addClass('init').each(function () {

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
		var categoryInput = $('.category-wizard', this).fancy_filter('init', {
			map: <?php echo json_encode($_smarty_tpl->tpl_vars['filter_categmap']->value);?>

		});

		var categoryPicker = $('.category-picker', this).dialog({
			maxHeight: $(window).height()-50,
			width: 'auto',
			autoOpen: false,
			modal: true,
			buttons: {
				"Add to filter": function () {
					$(':checked', this).each(function () {
						categoryInput.fancy_filter('add', {
							token: $(this).val(),
							label: $(this).parent().text(),
							join: ' or '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.category-lookup', this).click(function () {
			categoryPicker.dialog('open');
			return false;
		});
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y') {?>
		var tagInput = $('.tag-wizard', this).fancy_filter('init', {
			map: <?php echo $_smarty_tpl->tpl_vars['filter_tagmap']->value;?>

		});

		$('.tag-picker a', this).click(function () {
			$(this).toggleClass('highlight');

			return false;
		});
		var tagPicker = $('.tag-picker', this).dialog({
			autoOpen: false,
			modal: true,
			maxHeight: $window.height() - 50,
			buttons: {
				"Add to filter": function () {
					$('.highlight', this).each(function () {
						tagInput.fancy_filter('add', {
							token: $(this).attr('href'),
							label: $(this).text(),
							join: ' and '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.tag-lookup', this).click(function () {
			tagPicker.dialog('open');
			return false;
		});
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order']=='y') {?>
		var $invert = $(".sort_invert", this);
		var $sort_mode = $(".sort_mode", this);
<?php if (!$_smarty_tpl->tpl_vars['sort_found']->value) {?>
		var opts = $sort_mode.prop("options");
		for (var o = 0; o < opts.length; o++) {	// sort_mode not in intially rendered list, so try and find the opposite direction
			var tofind = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
			tofind = tofind.replace(/(:?asc|desc)$/, "");
			if (opts[o].value.search(tofind) === 0) {
				opts[o].value = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
				$sort_mode.prop("selectedIndex", o).trigger("chosen:updated");
				break;
			}
		}
<?php }?>

		$sort_mode.change(function () {	// update direction arrow
			$(".icon", $invert).setIcon($(this).val().search(/desc$/) > -1 ? "sort-down" : "sort-up");
		});

		$invert.click(function () {	// change the value of the option to opposite direction
			var v = $sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value;
			if (v.search(/desc$/) > -1) {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/desc$/, "asc");
				$(".icon", $invert).setIcon("sort-up");
			} else {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/asc$/, "desc");
				$(".icon", $invert).setIcon("sort-down");
			}
			$(this).parents("form").submit();
			return false;
		});
<?php }?>

	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
