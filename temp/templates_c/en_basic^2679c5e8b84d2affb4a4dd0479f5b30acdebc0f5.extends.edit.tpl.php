<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 04:24:51
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\plugin\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2081361075b6ba5f3177e90-41815623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65cc8f08704b86465a3ee6b0dd62f4e13045f915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\plugin\\edit.tpl',
      1 => 1518844728,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    '291230d8bb26f72da2c7717ff01d4f5a83b39e42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\plugin\\quick_add_references.tpl',
      1 => 1519022266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081361075b6ba5f3177e90-41815623',
  'function' => 
  array (
    'plugin_edit_row' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6ba5f32faa75_88732900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6ba5f32faa75_88732900')) {function content_5b6ba5f32faa75_88732900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['info']->value['documentation']),$_smarty_tpl);?>

</h4>
</div>
<div class="modal-body">
	
	<?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\block.jq.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\function.service.php';
if (!is_callable('smarty_function_object_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\function.object_selector.php';
if (!is_callable('smarty_function_object_selector_multi')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\function.object_selector_multi.php';
?><?php if (!function_exists('smarty_template_function_plugin_edit_row')) {
    function smarty_template_function_plugin_edit_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['plugin_edit_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
		<?php if ($_smarty_tpl->tpl_vars['param']->value['area']) {
$_smarty_tpl->tpl_vars['inputId'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['area']), null, 0);
} else {
ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['inputId'] = new Smarty_variable("param_".$_tmp1."_input", null, 0);
}?>
		<div class="col-sm-3">
			<label for="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['name']);?>
</label>
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['type'])) {?>
				<?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'],'file gallery',true);
$_tmp2=ob_get_clean();?><?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['area']);
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("openFgalsWindow('".$_tmp2."filegals_manager=".$_tmp3."&id=1', true);return false;", null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['param']->value['type']=='image') {?>
					<br><?php echo smarty_function_icon(array('name'=>'image','title'=>'Select image','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']=='fileId') {?>
					<br><?php echo smarty_function_icon(array('name'=>'file','title'=>'Pick a file','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']=='kaltura') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#picker_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
").parent().click(function () {
	$(this).serviceDialog({
		title: tr("Upload or record media"),
		width: 710,
		height: 450,
		hideButtons: true,
		success: function (data) {
			if (data.entries) {
				input.value = data.entries[0];
			}
		}
	});
	return false;
});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<br><?php ob_start();?><?php echo smarty_function_service(array('controller'=>'kaltura','action'=>'upload'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_icon(array('name'=>'video','title'=>'Upload or record media','href'=>$_tmp4,'id'=>smarty_modifier_escape(('picker_').($_smarty_tpl->tpl_vars['name']->value)),'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
		</div>
		<div class="col-sm-9">
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
				<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable(" group-".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name']), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dataAttribute'] = new Smarty_variable(" data-parent_name='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])."' data-parent_value='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['value'])."'", null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dataAttribute'] = new Smarty_variable('', null, 0);?>
			<?php }?>
			<?php if (empty($_smarty_tpl->tpl_vars['param']->value['options'])) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value])) {
$_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value], null, 0);
} else {
$_smarty_tpl->tpl_vars['val'] = new Smarty_variable('', null, 0);
}?>
				<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['selector_type'])) {?>
					<?php if (empty($_smarty_tpl->tpl_vars['param']->value['separator'])) {?>
						<?php echo smarty_function_object_selector(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(smarty_modifier_escape(('params[').($_smarty_tpl->tpl_vars['name']->value))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_object_selector_multi(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(smarty_modifier_escape(('params[').($_smarty_tpl->tpl_vars['name']->value))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_separator'=>$_smarty_tpl->tpl_vars['param']->value['separator'],'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_sort'=>$_smarty_tpl->tpl_vars['param']->value['sort_order'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
").attr("data-parent_name", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['name'];?>
").attr("data-parent_value", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['value'];?>
");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php } else { ?>
					<input value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
" class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
" type="text" name="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['param']->value['filter']=="pagename") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "pagename");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="groupname") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "groupname", {multiple: true, multipleSeparator: "|"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="username") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "username", {multiple: true, multipleSeparator: "|"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['name']->value=="biblio_code") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "reference", {multiple: true, multipleSeparator: ":"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="date") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("datepicker");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php }?>
				<?php }?>
			<?php } else { ?>
				<select class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" type="text" name="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['param']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['value']);?>
" <?php if (isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value])&&$_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value]==$_smarty_tpl->tpl_vars['option']->value['value']) {?> selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['text']);?>

						</option>
					<?php } ?>
				</select>
			<?php }?>
			<div class="description"><?php echo $_smarty_tpl->tpl_vars['param']->value['description'];?>
</div>
		</div>
	<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

	<div class="form-horizontal" id="plugin_params">
		<form action="<?php echo smarty_function_service(array('controller'=>'plugin','action'=>'edit'),$_smarty_tpl);?>
" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
				<div class="form-group<?php if ($_smarty_tpl->tpl_vars['param']->value['advanced']) {?> advanced<?php }?>" id="param_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
					<?php smarty_template_function_plugin_edit_row($_smarty_tpl,array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value));?>

				</div>
			<?php } ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['advancedParams'])) {?>
				<?php echo smarty_function_button(array('_text'=>'Advanced','_onclick'=>"$"."('.form-group.advanced.default').toggle('fast'); return false;",'_class'=>'btn btn-xs margin-bottom-md'),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['advancedParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
					<div class="form-group advanced default" style="display: none;">
						<?php smarty_template_function_plugin_edit_row($_smarty_tpl,array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value));?>

					</div>
				<?php } ?>
			<?php }?>

			<div class="form-group"<?php if (empty($_smarty_tpl->tpl_vars['info']->value['body'])) {?> style="display:none"<?php }?>>
				<label for="content" class="col-sm-3">Body</label>
				<div class="col-sm-9">
					<textarea name="content" id="content" class="form-control" rows="12"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bodyContent']->value);?>
</textarea>
					<div class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['body'];?>
</div>
				</div>
			</div>

			<div class="submit">
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageName']->value);?>
">
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
				<input type="hidden" name="index" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>

			<?php if ($_smarty_tpl->tpl_vars['type']->value=='module') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$("#param_module_input").change(function () {
						$(this).parents(".modal-content").load(
							$.service("plugin", "edit", {
								area_id: "<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
",
								type: "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
",
								index: <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,
								page: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageName']->value,'javascript');?>
",
								pluginArgs: <?php echo $_smarty_tpl->tpl_vars['pluginArgsJSON']->value;?>
,
								bodyContent: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bodyContent']->value,'javascript');?>
",
								edit_icon: "<?php echo $_smarty_tpl->tpl_vars['edit_icon']->value;?>
",
								selectedMod: $(this).val(),
								modal: 1
							}),
							function () {
								$(this).tikiModal();
								if (jqueryTiki.chosen) {
									$(this).applyChosen();
								}
							}
						).tikiModal(tr("Loading..."));
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</form>
		<?php /*  Call merged included template "plugin/quick_add_references.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("plugin/quick_add_references.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2081361075b6ba5f3177e90-41815623');
content_5b6ba5f32d3962_55550573($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "plugin/quick_add_references.tpl" */?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 04:24:51
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\plugin\quick_add_references.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6ba5f32d3962_55550573')) {function content_5b6ba5f32d3962_55550573($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
?><?php if ($_smarty_tpl->tpl_vars['type']->value=='addreference'&&!empty($_smarty_tpl->tpl_vars['prefs']->value['feature_library_references'])&&$_smarty_tpl->tpl_vars['prefs']->value['feature_library_references']=='y') {?>
	
	<div><a class="btn btn-primary" id="plugin_addreference_button">Add Reference</a></div>
	<div id="add_reference_block" style="display:none;">
		<div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_auto_biblio_code">Auto generate Biblio Code:</label>
				<div class="col-sm-10">
					<input type="checkbox" class="form-check wikiedit" name="ref_auto_biblio_code" id="add_ref_auto_biblio_code" checked="checked" />
				</div>
			</div>
			<div class="form-group" id="add_biblio_form" style="display: none;">
				<label class="col-sm-2 control-label" for="add_ref_biblio_code">Biblio Code:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="ref_biblio_code" id="add_ref_biblio_code" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_author">Author:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_author" id="add_ref_author" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_title">Title:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_title" id="add_ref_title" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_year">Year:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_year" id="add_ref_year" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_part">Part:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_part" id="add_ref_part" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_uri">URI:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_uri" id="add_ref_uri" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_biblio_code">Code:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_code" id="add_ref_code" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_publisher">Publisher:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_publisher" id="add_ref_publisher" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_location">Location:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_location" id="add_ref_location" value="" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_style">Style:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_style" id="add_ref_style" value="" />
					<span class="help-block">Enter the CSS class name to be added in the 'li' tag for listing this reference.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="add_ref_template">Template:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_template" id="add_ref_template" value="" />
					<span class="help-block">
											Enter template format in which you want to display the reference details in the bibliography listing. For example: ~title~ (~year~) ~author~
										</span>
					<span class="help-block">
											All the codes must be in lower case letters separated with spaces.
										</span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a class="wikiaction btn btn-default" title="Add" id="add_reference_submit">Add</a>
					<a class="wikiaction btn btn-warning" title="Cancel" onclick="$('#add_reference_block').css('display','none'); return false;">Cancel</a>
					<span id="a_status" style="margin: 0 0 0 10px;"></span>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="application/javascript">
		$('#plugin_addreference_button').click(function(){
			var block = $('#add_reference_block');
			if (!block.is(':visible')){
				block.find('input').val('');
			}
			block.toggle();
		});
		$('#add_ref_auto_biblio_code').click(function(){
			if ($('#add_ref_auto_biblio_code').is(':checked')) {
				$('#add_biblio_form').hide();
			} else {
				$('#add_biblio_form').show();
			}
		});
		$('#add_reference_submit').click(function(e){
			e.preventDefault();

			var ticket = "<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
";
			var ck_code = /^[A-Za-z0-9]+$/;
			
			var ck_year = /^[1-2][0-9][0-9][0-9]$/;
			if (!$('#add_ref_auto_biblio_code').is(':checked') && $('#add_ref_biblio_code').val() == '') {
				alert('Please fill the biblio code field or enable biblio code auto generator');
				return false;
			}
			if(!$('#add_ref_auto_biblio_code').is(':checked') && !ck_code.test($('#add_ref_biblio_code').val())){
				alert('Biblio code is not valid');
				return false;
			}
			
			if(!$('#add_ref_author').val().trim()){
				alert('Author is not valid');
				return false;
			}
			if(!$('#add_ref_year').val() == '' && !ck_year.test($('#add_ref_year').val())){
				alert('Year is not valid');
				return false;
			}

			var data = {
				ref_auto_biblio_code: $('#add_ref_auto_biblio_code').is(':checked') ? 'on' : 'off',
				ref_biblio_code: $('#add_ref_auto_biblio_code').is(':checked') ? '' : $('#add_ref_biblio_code').val(),
				ref_author: $('#add_ref_author').val(),
				ref_title: $('#add_ref_title').val(),
				ref_part: $('#add_ref_part').val(),
				ref_uri: $('#add_ref_uri').val(),
				ref_code: $('#add_ref_code').val(),
				ref_publisher: $('#add_ref_publisher').val(),
				ref_location: $('#add_ref_location').val(),
				ref_year: $('#add_ref_year').val(),
				ref_style: $('#add_ref_style').val(),
				ref_template: $('#add_ref_template').val(),
			};
			$.post('tiki-references.php?addreference=1&response=json' + ticket, data, null, 'json')
				.done(function(result){
					if(result.success) {
						if ($('#param_biblio_code_input').val() == '') {
							$('#param_biblio_code_input').val(result.biblio_code);
						}
						var pageName = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageName']->value);?>
';
						if (!pageName) {
							pageName = $("#editpageform input[name='page']").val();
						}
						if (!!pageName && !!result.id) {
							$.get('references.php?page=' + pageName + '&action=u_lib&ref_id=' + result.id + ticket);
						}
						alert('New reference created');
						$('#add_reference_block').hide();
					} else {
						alert('Problems while creating the reference:' + "\n" + result.msg);
					}
				}).fail(function(){
				alert('Problems while creating the reference');
			});
			return false;
		});
	<?php echo '</script'; ?>
>
<?php }?>
<?php }} ?>
