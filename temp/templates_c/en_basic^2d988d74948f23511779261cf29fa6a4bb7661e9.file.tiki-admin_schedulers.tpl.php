<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 10:49:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_schedulers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3874676415b695d044c1fc5-89826098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d988d74948f23511779261cf29fa6a4bb7661e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_schedulers.tpl',
      1 => 1519613412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3874676415b695d044c1fc5-89826098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'schedulerinfo' => 0,
    'schedulers' => 0,
    'js' => 0,
    'scheduler_name' => 0,
    'libeg' => 0,
    'liend' => 0,
    'add_edit_scheduler_tablabel' => 0,
    'schedulename' => 0,
    'schedulerTasks' => 0,
    'commandName' => 0,
    'schedulerStatus' => 0,
    'schedulerruns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b695d0460e099_89965122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b695d0460e099_89965122')) {function content_5b695d0460e099_89965122($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_scheduler_params')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.scheduler_params.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Scheduler",'admpage'=>"general",'url'=>"tiki-admin_schedulers.php")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Scheduler",'admpage'=>"general",'url'=>"tiki-admin_schedulers.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Scheduler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Scheduler",'admpage'=>"general",'url'=>"tiki-admin_schedulers.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="t_navbar margin-bottom-md">
	<?php if (isset($_smarty_tpl->tpl_vars['schedulerinfo']->value['id'])) {?>
		<?php echo smarty_function_button(array('href'=>"?add=1",'class'=>"btn btn-default",'_text'=>"Add a new Scheduler"),$_smarty_tpl);?>

	<?php }?>

</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admin_schedulers')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admin_schedulers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	
<?php if (count($_smarty_tpl->tpl_vars['schedulers']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Schedulers")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Schedulers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div id="admin_schedulers-div">
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive <?php }?>ts-wrapperdiv">
				
				<table id="admin_schedulers" class="table normal table-striped table-hover" data-count="<?php echo count($_smarty_tpl->tpl_vars['schedulers']->value);?>
">
					<thead>
					<tr>

						<th>
							Name
						</th>
						<th>
							Description
						</th>
						<th>
							Task
						</th>
						<th>
							Run Time
						</th>
						<th>
							Status
						</th>
						<th>
							Re-Run
						</th>
						<th id="actions"></th>
					</tr>
					</thead>

					<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['name'] = 'scheduler';
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['schedulers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['scheduler']['total']);
?>
						<?php $_smarty_tpl->tpl_vars['scheduler_name'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['name']), null, 0);?>
						<tr>
							<td class="scheduler_name">
								<a class="link tips"
									href="tiki-admin_schedulers.php?scheduler=<?php echo $_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['id'];
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#2<?php }?>"
									title="<?php echo $_smarty_tpl->tpl_vars['scheduler_name']->value;?>
:Edit scheduler settings"
								>
									<?php echo $_smarty_tpl->tpl_vars['scheduler_name']->value;?>

								</a>
							</td>
							<td class="scheduler_description">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['description']);?>

							</td>
							<td class="scheduler_task">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['task']);?>

							</td>
							<td class="scheduler_run_time">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['run_time']);?>

							</td>
							<td class="scheduler_status">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['status']);?>

							</td>
							<td class="scheduler_re_run">
								<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['re_run']) {?>checked<?php }?> disabled>
							</td>
							<td class="action">
								<?php $_smarty_tpl->_capture_stack[0][] = array('scheduler_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'scheduler','action'=>'run','schedulerId'=>$_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['id']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"gear",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Run now"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_query(array('_type'=>'relative','scheduler'=>$_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['id']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_query(array('_type'=>'relative','scheduler'=>$_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['id'],'logs'=>'1'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"log",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Logs"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'scheduler','action'=>'remove','schedulerId'=>$_smarty_tpl->tpl_vars['schedulers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scheduler']['index']]['id']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
										<a
												class="tips"
												title="Actions" href="#"
												<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['scheduler_actions']),$_smarty_tpl);
}?>
												style="padding:0; margin:0; border:0"
										>
											<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
										<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['scheduler_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
						</tr>
					<?php endfor; endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Schedulers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
	
	<a id="tab2"></a>
<?php if (isset($_smarty_tpl->tpl_vars['schedulerinfo']->value['id'])&&$_smarty_tpl->tpl_vars['schedulerinfo']->value['id']) {?>
	<?php $_smarty_tpl->tpl_vars['add_edit_scheduler_tablabel'] = new Smarty_variable("Edit scheduler", null, 0);?>
	<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['name']);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['schedulename'] = new Smarty_variable("<i>".$_tmp1."</i>", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['add_edit_scheduler_tablabel'] = new Smarty_variable("Add a new scheduler", null, 0);?>
	<?php $_smarty_tpl->tpl_vars['schedulename'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_scheduler_tablabel']->value)." ".((string)$_smarty_tpl->tpl_vars['schedulename']->value))); $_block_repeat=true; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_scheduler_tablabel']->value)." ".((string)$_smarty_tpl->tpl_vars['schedulename']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<br><br>
	<div class="row">
		<div class="col-md-offset-2 col-md-6">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Use CRON format to enter the values in "Run Time":
				<br>
				Minute, Hour, Day of Month, Month, Day of Week
				<br>
				Eg. every 5 minutes: */5 * * * *
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</div>
	<form class="form form-horizontal" action="tiki-admin_schedulers.php" method="post"
			enctype="multipart/form-data" name="RegForm" autocomplete="off">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_name">Name *</label>
			<div class="col-sm-7 col-md-6">
				<input type="text" id='scheduler_name' class="form-control" name='scheduler_name'
					value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['name']);?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_description">Description</label>
			<div class="col-sm-7 col-md-6">
				<input type="text" id='scheduler_description' class="form-control" name='scheduler_description'
					value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['description']);?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_task">Task *</label>
			<div class="col-sm-7 col-md-6">
				<select id="scheduler_task" name="scheduler_task" class="form-control">
					<option value=''></option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['schedulerTasks']->value,'selected'=>$_smarty_tpl->tpl_vars['schedulerinfo']->value['task']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<?php  $_smarty_tpl->tpl_vars['taskName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taskName']->_loop = false;
 $_smarty_tpl->tpl_vars['commandName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schedulerTasks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taskName']->key => $_smarty_tpl->tpl_vars['taskName']->value) {
$_smarty_tpl->tpl_vars['taskName']->_loop = true;
 $_smarty_tpl->tpl_vars['commandName']->value = $_smarty_tpl->tpl_vars['taskName']->key;
?>
			<?php echo smarty_function_scheduler_params(array('name'=>$_smarty_tpl->tpl_vars['commandName']->value,'params'=>$_smarty_tpl->tpl_vars['schedulerinfo']->value['params']),$_smarty_tpl);?>

		<?php } ?>

		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_time">Run Time *</label>
			<div class="col-sm-7 col-md-6">
				<input type="text" id='scheduler_time' class="form-control" name='scheduler_time'
					value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['run_time']);?>
">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_status">Status</label>
			<div class="col-sm-7 col-md-6">
				<select id="scheduler_status" name="scheduler_status" class="form-control">
					schedulerStatus
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['schedulerStatus']->value,'selected'=>$_smarty_tpl->tpl_vars['schedulerinfo']->value['status']),$_smarty_tpl);?>

				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="scheduler_catch">Run if missed</label>
			<div class="col-sm-7 col-md-6">
				<input type="checkbox" id="scheduler_rerun" name="scheduler_rerun"
					<?php if ($_smarty_tpl->tpl_vars['schedulerinfo']->value['re_run']) {?>checked<?php }?>>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-7 col-md-6 col-sm-offset-3 col-md-offset-2">
				<?php if (isset($_smarty_tpl->tpl_vars['schedulerinfo']->value['id'])&&$_smarty_tpl->tpl_vars['schedulerinfo']->value['id']) {?>
					<input type="hidden" name="scheduler" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['id']);?>
">
					<input type="hidden" name="editscheduler" value="1">
					<input type="submit" class="btn btn-primary" name="save" value="Save">
				<?php } else { ?>
					<input type="submit" class="btn btn-primary" name="new_scheduler" value="Add">
				<?php }?>
			</div>
		</div>

	</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['add_edit_scheduler_tablabel']->value)." ".((string)$_smarty_tpl->tpl_vars['schedulename']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<a id="tab3"></a>
	<?php if (isset($_smarty_tpl->tpl_vars['schedulerinfo']->value['id'])&&$_smarty_tpl->tpl_vars['schedulerinfo']->value['id']) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Scheduler logs")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Scheduler logs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Scheduler <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['schedulerinfo']->value['name']);?>
 Logs</h2>
			<table class="table normal table-striped table-hover">
				<thead>
				<tr>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Status</th>
					<th>Output</th>
				</tr>
				</thead>
				<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['run'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['run']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['name'] = 'run';
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['schedulerruns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['run']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['run']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['run']['total']);
?>
					<tr>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['start_time'],"%b %e, %Y %H:%M:%S");?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['end_time'],"%b %e, %Y %H:%M:%S");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['status'];?>
</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['can_stop']) {?>
								<a class="btn btn-primary btn-sm" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'scheduler','action'=>'reset','schedulerId'=>$_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['scheduler_id'],'startTime'=>$_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['start_time']),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Reset"),$_smarty_tpl);?>

								</a>
							<?php } else { ?>
								<?php echo nl2br($_smarty_tpl->tpl_vars['schedulerruns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['run']['index']]['output']);?>

							<?php }?>
						</td>
					</tr>
				<?php endfor; endif; ?>
				</tbody>
			</table>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Scheduler logs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admin_schedulers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var selectedSchedulerTask = $('select[name="scheduler_task"]').val();
	$('div [data-task-name="'+selectedSchedulerTask+'"]').show();

	$('select[name="scheduler_task"]').on('change', function() {
		var taskName = this.value;
		$('div [data-task-name]:not([data-task-name="'+taskName+'"])').hide();
		$('div [data-task-name="'+taskName+'"]').show();
	});

	$('form[name="RegForm"]').validate({
		rules: {
			scheduler_time: {
				validate_cron_runtime: true
			}
		}
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
