<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:22:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_workspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18435997205b519babe12622-24268798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbea0dd3e131f708909f7b145493efb8424508f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_workspace.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18435997205b519babe12622-24268798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'areas' => 0,
    'area' => 0,
    'persp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519babe68530_01863885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519babe68530_01863885')) {function content_5b519babe68530_01863885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=workspace" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="clearfix margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['workspace_ui']=="y") {?>
			<a class="btn btn-default btn-sm" href="<?php echo smarty_function_service(array('controller'=>'workspace','action'=>'list_templates'),$_smarty_tpl);?>
" title="List">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Workspace Templates
			</a>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_workspaces_areas")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_workspaces_areas"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Workspaces")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Workspaces"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'workspace_ui','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Dependencies</legend>
				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'namespace_force_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Advanced</legend>
				<?php echo smarty_function_preference(array('name'=>'workspace_root_category'),$_smarty_tpl);?>

			</fieldset>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('#tiki-center').on('click', '.service-dialog', function () {
					$(this).serviceDialog({
						title: $(this).text(),
						success: function () {
							if ($(this).is('.reload')) {
								$('#template-list').load($.service('workspace', 'list_templates'));
							}
						}
					});

					return false;
				});
				$('#template-list').load($.service('workspace', 'list_templates'));
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Workspaces"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Areas")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Areas"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Areas</legend>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>On</th>
							<th colspan="2">Category</th>
							<th>Perspectives</th>
							<th>Exclusive</th>
							<th>Share Common</th>
							<th>Description</th>
						</tr>
						<?php if (count($_smarty_tpl->tpl_vars['areas']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
								<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y') {?> disabled<?php }?>">
									<td><input type="checkbox" name="enabled[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['enabled']=='y') {?> checked="checked"<?php }?> class="enabledChecks"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['area']->value['categName'];?>
</td>
									<td>
										<?php  $_smarty_tpl->tpl_vars['persp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area']->value['perspectives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['persp']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['persp']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['persp']->key => $_smarty_tpl->tpl_vars['persp']->value) {
$_smarty_tpl->tpl_vars['persp']->_loop = true;
 $_smarty_tpl->tpl_vars['persp']->iteration++;
 $_smarty_tpl->tpl_vars['persp']->last = $_smarty_tpl->tpl_vars['persp']->iteration === $_smarty_tpl->tpl_vars['persp']->total;
?>
											<a href="tiki-edit_perspective.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['persp']->value['perspectiveId'];?>
" title="Edit perspective <?php echo $_smarty_tpl->tpl_vars['persp']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['persp']->value['name'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['persp']->last) {?>,<?php }?>
										<?php } ?>
									</td>
									<td><input type="checkbox" name="exclusive[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['exclusive']=='y') {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y') {?> disabled="disabled"<?php }?> class="otherChecks"></td>
									<td><input type="checkbox" name="share_common[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['share_common']=='y') {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y') {?> disabled="disabled"<?php }?> class="otherChecks"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['area']->value['description'];?>
</td>
								</tr>
							<?php } ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								$(".enabledChecks").click(function() {
									var checked = ! $(this).prop("checked");
									$(".otherChecks", $(this).parents("tr:first")).each(function() {
										$(this).prop("disabled", checked);
									});
								});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<td colspan="7">No areas found. Click "Update Areas" to populate this list</td>
						<?php }?>
					</table>
				</div>
			</fieldset>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Hint")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Hint"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This tab shows you an overview of categories affected by the areas feature. <br> More help here: <a href="http://doc.tiki.org/Areas" target="tikihelp">doc.tiki.org/Areas</a> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Hint"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="form-group heading input_submit_container" style="text-align: center">
				<input type="submit" class="btn btn-primary btn-sm timeout" name="update_areas" value="Update areas">
			</div>
			<div class="adminoptionboxchild" id="feature_areas_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'areas_root'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Areas"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_workspaces_areas"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
