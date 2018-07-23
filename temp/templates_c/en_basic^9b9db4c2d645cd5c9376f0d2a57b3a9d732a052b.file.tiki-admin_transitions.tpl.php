<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 04:28:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_transitions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15473187915b5148b43c7887-47717716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9db4c2d645cd5c9376f0d2a57b3a9d732a052b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_transitions.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15473187915b5148b43c7887-47717716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'transition_mode' => 0,
    'cat_tree' => 0,
    'available_states' => 0,
    'state' => 0,
    'headerlib' => 0,
    'graph_nodes' => 0,
    'graph_edges' => 0,
    'js' => 0,
    'transitions' => 0,
    'trans' => 0,
    'libeg' => 0,
    'liend' => 0,
    'selected_transition' => 0,
    'value' => 0,
    'label' => 0,
    'guards' => 0,
    'guard' => 0,
    'name' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5148b447b3a3_56833338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5148b447b3a3_56833338')) {function content_5b5148b447b3a3_56833338($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Transitions")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Transitions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Transitions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Transitions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Subset Selection")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Subset Selection"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Subset Selection</h2>
		<form method="post" action="tiki-admin_transitions.php?action=subset" style="text-align: left;">

			<fieldset>
				<legend>Type</legend>
				<p>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
						<label class="checkbox-inline">
							<input type="radio" name="transition_mode" value="category" id="transition-mode-category"<?php if ($_smarty_tpl->tpl_vars['transition_mode']->value=='category') {?> checked="checked"<?php }?>>
							Category
						</label>
					<?php }?>
					<label class="checkbox-inline">
						<input type="radio" name="transition_mode" value="group" id="transition-mode-group"<?php if ($_smarty_tpl->tpl_vars['transition_mode']->value=='group'||$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']!='y') {?> checked="checked"<?php }?>>
						Group
					</label>
				</p>
			</fieldset>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
				<fieldset id="transition-category-selection">
					<legend>Category Selection</legend>
					<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

				</fieldset>
			<?php }?>

			<fieldset id="transition-group-selection">
				<legend>Group Selection</legend>
				<ul id="transition-group-list">
					<?php if ($_smarty_tpl->tpl_vars['transition_mode']->value=='group') {?>
						<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
							<li>
								<input type="hidden" name="groups[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value);?>
">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value);?>

								<?php echo smarty_function_icon(array('name'=>'remove','class'=>"removeitem"),$_smarty_tpl);?>

							</li>
						<?php } ?>
					<?php }?>
				</ul>
				<div class="form-group">
					<label for="transition-group-auto">Add Group</label>
					<input type="text" id="transition-group-auto">
					<div class="help-block">
						Press Enter for each group
					</div>
				</div>
			</fieldset>

			<p>
				<input type="submit" class="btn btn-primary" value="Select">
				<div class="help-block">
					At least two elements are required to create transitions. Additional tabs appear once the selection is completed.
				</div>
			</p>
		</form>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var blocks = $('#transition-group-selection, #transition-category-selection');
			$(':radio[name=transition_mode]').change( function( e ) {
				if( $(this).prop('checked') ) {
					blocks.hide();
					blocks.filter( '#transition-' + $(this).val() + '-selection' ).show();
				}
			} ).change();

			$('#transition-group-auto')
				.tiki('autocomplete','groupname')
				.keypress( function( e ) {
					if( e.which !== 13 ) {
						return;
					}
					e.preventDefault();
					if( $(this).val() === '' ) {
						return;
					}
					$('#transition-group-list').append(
						$('<li/>').text( $(this).val() )
							.append( $('<input type="hidden" name="groups[]">').val( $(this).val() ) )
							.append( $('<?php echo smarty_function_icon(array('name'=>'remove','class'=>'removeitem'),$_smarty_tpl);?>
') )
					);
					$(this).val('');
				} );
			$('#transition-group-list .removeitem').on( 'click', function( e ) {
				$(this).parent().remove();
			} );
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Subset Selection"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if (count($_smarty_tpl->tpl_vars['available_states']->value)>0) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Transitions")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Transitions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Transitions</h2>
			
			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/raphael-min.js',true);?>

			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/graffle.js',true);?>

			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/graph.js',true);?>

			<div id="graph-canvas" class="graph-canvas" data-graph-nodes="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['graph_nodes']->value);?>
" data-graph-edges="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['graph_edges']->value);?>
"></div>
			<a href="#" id="graph-draw" class="button">Draw Transition Diagram</a>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('#graph-draw').click( function( e ) {
				$(this).hide();
				$('#graph-canvas').drawGraph();
				return false;
			} );
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
			<?php }?>
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Label</th>
							<th>From</th>
							<th>To</th>
							<th>Guards</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['trans'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trans']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transitions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trans']->key => $_smarty_tpl->tpl_vars['trans']->value) {
$_smarty_tpl->tpl_vars['trans']->_loop = true;
?>
							<tr>
								<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trans']->value['name']);?>
</td>
								<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trans']->value['from_label']);?>
 <?php if ($_smarty_tpl->tpl_vars['trans']->value['preserve']) {?><span class="label label-info">preserved</span><?php }?></td>
								<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trans']->value['to_label']);?>
</td>
								<td class="integer"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>4)); $_block_repeat=true; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape(count($_smarty_tpl->tpl_vars['trans']->value['guards']));
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
								<td class="action">
									<?php $_smarty_tpl->_capture_stack[0][] = array('transition_actions', null, null); ob_start(); ?>
										<?php echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'transition','id'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'title'=>$_smarty_tpl->tpl_vars['trans']->value['name']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>3,'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'edit')); $_block_repeat=true; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>3,'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'edit','cookietab'=>3,'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'edit'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'remove','_icon_name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'remove','_icon_name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['trans']->value['transitionId'],'action'=>'remove','_icon_name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;?>

									<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
									<a
										class="tips"
										title="Actions"
										href="#"
										<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['transition_actions']),$_smarty_tpl);
}?>
										style="padding:0; margin:0; border:0"
									>
										<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

									</a>
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
										<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['transition_actions'];?>
</ul></li></ul>
									<?php }?>
								</td>
							</tr>
						<?php }
if (!$_smarty_tpl->tpl_vars['trans']->_loop) {
?>
							<tr>
								<td colspan="4">No transitions</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Transitions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"New / Edit")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"New / Edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<form method="post" action="tiki-admin_transitions.php?action=<?php if ($_smarty_tpl->tpl_vars['selected_transition']->value) {?>edit<?php } else { ?>new<?php }?>&amp;cookietab=2" style="text-align: left;">
				<?php if ($_smarty_tpl->tpl_vars['selected_transition']->value) {?>
					<h2>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['selected_transition']->value['name'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['selected_transition']->value['name']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <em>%0</em><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['selected_transition']->value['name']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<input type="hidden" name="transitionId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_transition']->value['transitionId']);?>
">
						(<a href="tiki-admin_transitions.php">Create new</a>)
					</h2>
				<?php } else { ?>
					<h2>New transition</h2>
				<?php }?>
				<fieldset>
					<legend>General</legend>
					<div class="form-group">
						<label class="control-label" for="new-transition-name">Label</label>
						<input type="text" name="label" <?php if ($_smarty_tpl->tpl_vars['selected_transition']->value) {?>value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_transition']->value['name']);?>
"<?php }?> class="form-control">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="preserve" value="y" id="new-transition-preserve" <?php if ($_smarty_tpl->tpl_vars['selected_transition']->value&&$_smarty_tpl->tpl_vars['selected_transition']->value['preserve']) {?>checked="checked"<?php }?>>
							Upon trigger, preserve the initial state
						</label>
					</div>
				</fieldset>
				<div class="row">
					<div class="col-md-6">
						<fieldset>
							<legend>From</legend>
							<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
								<div class="checkbox">
									<label for="state-from-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
										<input type="radio" name="from" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" id="state-from-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_transition']->value&&$_smarty_tpl->tpl_vars['selected_transition']->value['from']==$_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?>>
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

									</label>
								</div>
							<?php } ?>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset>
							<legend>To</legend>
							<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
								<div class="checkbox">
									<label for="state-to-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
										<input type="radio" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" id="state-to-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_transition']->value&&$_smarty_tpl->tpl_vars['selected_transition']->value['to']==$_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?>>
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

									</label>
								</div>
							<?php } ?>
						</fieldset>
					</div>
				</div>
				<div class="submit">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"New / Edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if ($_smarty_tpl->tpl_vars['selected_transition']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Guards")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Guards"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<h2>Guards</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Type</th>
								<th>Count</th>
								<th>Members</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['guard'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guard']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['guards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guard']->key => $_smarty_tpl->tpl_vars['guard']->value) {
$_smarty_tpl->tpl_vars['guard']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['guard']->key;
?>
								<tr>
									<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['guard']->value['type']);?>
</td>
									<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['guard']->value['count']);?>
</td>
									<td>
										<ul>
											<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guard']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
												<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</li>
											<?php } ?>
										</ul>
									</td>
									<td>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('transitionId'=>$_smarty_tpl->tpl_vars['selected_transition']->value['transitionId'],'action'=>'removeguard','guard'=>$_smarty_tpl->tpl_vars['key']->value,'cookietab'=>4)); $_block_repeat=true; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['selected_transition']->value['transitionId'],'action'=>'removeguard','guard'=>$_smarty_tpl->tpl_vars['key']->value,'cookietab'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('transitionId'=>$_smarty_tpl->tpl_vars['selected_transition']->value['transitionId'],'action'=>'removeguard','guard'=>$_smarty_tpl->tpl_vars['key']->value,'cookietab'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</td>
								</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['guard']->_loop) {
?>
								<tr>
									<td colspan="4">No guards on this transition.</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<form method="post" action="tiki-admin_transitions.php?action=addguard&amp;transitionId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_transition']->value['transitionId']);?>
&amp;cookietab=4" style="text-align: left;">
					<h2>New Guard</h2>
					<fieldset>
						<legend>General</legend>
						<div class="form-group">
							<label class="control-label" for="guard-type">Type</label>
							<select id="guard-type" name="type" class="form-control">
								<option value="exactly">Exactly</option>
								<option value="atLeast">At Least</option>
								<option value="atMost">At Most</option>
							</select>
						</div>
						<div class="form-group">
							<label for="guard-count" class="control-label">Count</label>
							<input type="text" name="count" class="form-control">
						</div>
					</fieldset>
					<fieldset>
						<legend>States</legend>
						<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
							<div class="checkbox">
								<label for="guard-state-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
									<input type="checkbox" name="states[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" id="guard-state-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

								</label>
							</div>
						<?php } ?>
					</fieldset>
					<div class="submit">
						<input type="submit" class="btn btn-primary" value="Add">
					</div>
				</form>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Guards"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
