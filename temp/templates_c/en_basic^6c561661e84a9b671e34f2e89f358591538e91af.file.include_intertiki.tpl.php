<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:20:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_intertiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17608575105b519b5094cce5-27733901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c561661e84a9b671e34f2e89f358591538e91af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_intertiki.tpl',
      1 => 1498638758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17608575105b519b5094cce5-27733901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serverFields' => 0,
    'field' => 0,
    'prefs' => 0,
    'k' => 0,
    'i' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519b509aa906_20044480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519b509aa906_20044480')) {function content_5b519b509aa906_20044480($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<form action="tiki-admin.php?page=intertiki" method="post" name="intertiki" class="form-horizontal">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_interwiki")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_interwiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Intertiki Client")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Intertiki Client"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<em>Set up this Tiki site as the Intertiki client</em><br><br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_intertiki'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Client server settings</legend>
				<?php echo smarty_function_preference(array('name'=>'tiki_key'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_intertiki_sharedcookie'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Currently linked master server</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_intertiki_mymaster','mode'=>'notempty'),$_smarty_tpl);?>

				<div class="adminoptionboxchild feature_intertiki_mymaster_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_intertiki_import_preferences'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_intertiki_import_groups'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_intertiki_imported_groups'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Add an available master server</legend>
				<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serverFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
					<div class="form-group">
						<label class="col-sm-4 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Server <?php echo $_smarty_tpl->tpl_vars['field']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-sm-8">
							<input type="text" name="new[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
]" value="" class="form-control">
						</div>
					</div>
				<?php } ?>
			</fieldset>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['interlist']) {?>
				<fieldset>
					<legend>Available master Tiki servers</legend>
					<div class="form-group">
						<div class="col-sm-12">
							<table class="table">
								<thead>
								<tr>
									<td>Name</td>
									<td>Host</td>
									<td>Port</td>
									<td>Path</td>
									<td>Group</td>
									<td></td>
								</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['interlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<tr>
										<td><input type="text" class="form-control" name="interlist[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"></td>
										<td><input type="text" class="form-control" name="interlist[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][host]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['host'];?>
"></td>
										<td><input type="text" class="form-control" name="interlist[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][port]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['port'];?>
"></td>
										<td><input type="text" class="form-control" name="interlist[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][path]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['path'];?>
"></td>
										<td><input type="text" class="form-control" name="interlist[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][groups]" value="<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['g']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->iteration++;
 $_smarty_tpl->tpl_vars['g']->last = $_smarty_tpl->tpl_vars['g']->iteration === $_smarty_tpl->tpl_vars['g']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['last'] = $_smarty_tpl->tpl_vars['g']->last;
echo $_smarty_tpl->tpl_vars['g']->value;
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f']['last']) {?>,<?php }
} ?>"></td>
										<td>
											<button type="submit" name="del" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="btn btn-link tips timeout" title="Delete master server:<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
</button>
										</td>
									</tr>
								<?php } ?>
								<tbody>
							</table>
						</div>
					</div>
				</fieldset>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Intertiki Client"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_mymaster']=='') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Intertiki Master Server")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Intertiki Master Server"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<em>Set up this Tiki site as the InterTiki master server</em><br><br>
				<fieldset>
					<legend>Activate the feature</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_intertiki_server'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Master server settings</legend>
					<?php echo smarty_function_preference(array('name'=>'intertiki_logfile'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Allowed client servers</legend>
					<div class="form-group">
						<div class="col-sm-12">
							<table class="table">
								<thead>
								<tr>
									<td>&nbsp;</td>
									<td><label for="known_hosts_name">Name</label></td>
									<td><label for="known_hosts_key">Key</label></td>
									<td><label for="known_hosts_ip">IP</label></td>
									<td><label for="known_hosts_contact">Contact</label></td>
									<td><label for="known_hosts_can_register">Can register</label></td>
								</tr>
								</thead>
								<tbody>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['known_hosts']) {?>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['known_hosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
										<tr>
											<td>
												<button type="submit" name="delk" class="btn btn-link" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" class="tips timeout" title=":Delete"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
</button>
											</td>
											<td>
												<input type="text" class="form-control" id="known_hosts_name" name="known_hosts[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
">
											</td>
											<td>
												<input type="text" class="form-control tips" id="known_hosts_key" name="known_hosts[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][key]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['key'];?>
"
													readonly="readonly" title="|To change the host key you need to remove and add it as a new one">
											</td>
											<td>
												<input type="text" class="form-control" id="known_hosts_ip" name="known_hosts[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][ip]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
">
											</td>
											<td>
												<input type="text" class="form-control" id="known_hosts_contact" name="known_hosts[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][contact]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['contact'];?>
">
											</td>
											<td>
												<input type="checkbox" class="form-control" id="known_hosts_can_register" name="known_hosts[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][allowusersregister]" <?php if (isset($_smarty_tpl->tpl_vars['i']->value['allowusersregister'])&&$_smarty_tpl->tpl_vars['i']->value['allowusersregister']=='y') {?>checked="checked"<?php }?> />
											</td>
										</tr>
									<?php } ?>
								<?php }?>
								<tr>
									<td>New:</td>
									<td><label class="sr-only" for="new_host_name">New</label><input type="text" class="form-control" id="new_host_name" name="newhost[name]" value=""/></td>
									<td><label class="sr-only" for="new_host_key">Key</label><input type="text" class="form-control" id="new_host_key" name="newhost[key]" value=""/></td>
									<td><label class="sr-only" for="new_host_ip">IP</label><input type="text" class="form-control" id="new_host_ip" name="newhost[ip]" value=""/></td>
									<td><label class="sr-only" for="new_host_contact">Contact</label><input type="text" class="form-control" id="new_host_contact" name="newhost[contact]" value=""/></td>
									<td><label class="sr-only" for="new_host_can_register">Can register</label><input type="checkbox" id="new_host_can_register" name="newhost[allowusersregister]"/></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</fieldset>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Intertiki Master Server"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_interwiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php }} ?>
