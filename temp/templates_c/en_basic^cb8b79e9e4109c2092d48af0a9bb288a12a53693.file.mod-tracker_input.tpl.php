<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 10:40:36
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-tracker_input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19775123765b7144044bf862-09622096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb8b79e9e4109c2092d48af0a9bb288a12a53693' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-tracker_input.tpl',
      1 => 1388868710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19775123765b7144044bf862-09622096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tracker_input' => 0,
    'module_params' => 0,
    'tpl_module_title' => 0,
    'label' => 0,
    'token' => 0,
    'f' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b714404550104_34429968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b714404550104_34429968')) {function content_5b714404550104_34429968($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['tracker_input']->value['trackerId']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"tracker_input",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"tracker_input",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form class="mod-tracker-input simple" method="get" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item'),$_smarty_tpl);?>
" data-location="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['location']);?>
" data-location-mode="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['locationMode']);?>
" data-streetview="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['streetview']);?>
" data-success="<?php echo smarty_modifier_escape(json_encode($_smarty_tpl->tpl_vars['tracker_input']->value['success']));?>
">
		<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tracker_input']->value['textInput']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
			<label>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

				<input type="text" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
"/>
			</label>
		<?php } ?>
		<div class="submit">
			<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['trackerId']);?>
"/>
			<input type="hidden" name="controller" value="tracker"/>
			<input type="hidden" name="action" value="insert_item"/>
			<input type="submit" name="create" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['submit']);?>
" class="btn btn-default btn-sm" />
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tracker_input']->value['hiddenInput']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<input id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['f']->value);?>
" type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['f']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value);?>
"/>
			<?php } ?>
		</div>
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function hasEmptyField(form, scope) {
		var hasEmpty = false;
		$(scope, form).each(function () {
			if ($(this).val() === '') {
				hasEmpty = true;
			}
		});

		return hasEmpty;
	}
	$('.mod-tracker-input').removeClass('mod-tracker-input').submit(function () {
		var form = this;
		if (hasEmptyField(form, ':input:not(:submit)')) {
			$(':submit', form).showError("Missing values");
			return false;
		}

		$(this).serviceDialog({
			title: $(':submit', form).val(),
			data: $(form).serialize(),
			success: function (data) {
				$(form).trigger('insert', [ data ]);
				<?php if ($_smarty_tpl->tpl_vars['tracker_input']->value['insertMode']) {?>
					$(form).closest('.tab, #appframe, body').find('.map-container')[0].modeManager.switchTo("<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['insertMode']);?>
");
				<?php }?>
			},
			close: function () {
				$(form).trigger('cancel');
				<?php if ($_smarty_tpl->tpl_vars['tracker_input']->value['insertMode']) {?>
					$(form).closest('.tab, #appframe, body').find('.map-container')[0].modeManager.switchTo("<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['insertMode']);?>
");
				<?php }?>
			}
		});
		return false;
	}).each(function () {
		var form = this
			, location = $(this).data('location')
			, locationMode = $(this).data('location-mode')
			, streetview = $(this).data('streetview')
			, success = $(this).data('success')
			;

		if (success.operation === 'redirect') {
			$(form).bind('insert', function (e, data) {
				var url = success.argument;

				data.fields.itemId = data.itemId;
				data.fields.status = data.status;
				$.each(data.fields, function (k, v) {
					url = url.replace('@' + k + '@', encodeURIComponent(v));
				});

				document.location.href = url;
			});
		}

		if (location ) {
			var map = $(form).closest('.tab, #appframe, body').find('.map-container')[0];
			$(':submit', form).hide();
			$(map).one('initialized', function () {
				var control, button, modeManager, newMode;
				modeManager = map.modeManager;

				if (locationMode === 'marker') {
					control = $(map).setupMapSelection({
						field: $('#' + location),
						click: function () {
							$(form).submit();
						}
					});
					control.deactivate();

					modeManager.addMode({name: newMode = "<?php echo $_smarty_tpl->tpl_vars['tpl_module_title']->value;?>
", controls: [control, new OpenLayers.Control.NavToolbar()]});
				}

				button = $('<input type="submit" class="btn btn-default btn-sm" />')
					.val($(':submit', form).val())
					.button()
					.click(function () {
						if (newMode) {
							modeManager.switchTo(newMode);
							return false;
						}

						$('#' + location).val($(map).getMapCenter())
					})
					.appendTo(form);

				$(':text', form).keyup(function (e) {
					button.button(hasEmptyField(form, ':text') ? 'disable' : 'enable');

					if (e.which === 13) {
						button.click();
					}
				}).keyup();

				$(form).bind('insert', function () {
					$(map).removeMapSelection();
					$(map).trigger('changed');
				});
				$(form).bind('cancel', function () {
					$(map).removeMapSelection();
				});

				if (streetview) {
					map.streetview.addButton('Add Marker', function (canvas) {
						var url = canvas.getImageUrl(), position = canvas.getPosition();
						$.ajax({
							type: 'POST',
							url: $.service('file', 'remote'),
							dataType: 'json',
							data: {
								galleryId: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_input']->value['galleryId']);?>
",
								url: url,
								reference: 1
							},
							success: function (data) {
								var input = $('<input type="hidden" name="forced~' + streetview + '"/>')
									.val(data.fileId)
									.appendTo(form);
								$('#' + location).val(position);

								$(form).submit();
								input.remove();
							},
							complete: function () {
								$(canvas).dialog('close');
							}
						});
					});
				}
			});
		}
	});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"tracker_input",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
Permission denied
<?php }?>
<?php }} ?>
