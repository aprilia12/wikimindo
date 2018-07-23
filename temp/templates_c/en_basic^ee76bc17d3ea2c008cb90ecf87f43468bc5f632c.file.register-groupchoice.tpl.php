<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-groupchoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4318700585b515908328772-80611421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee76bc17d3ea2c008cb90ecf87f43468bc5f632c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-groupchoice.tpl',
      1 => 1516453174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4318700585b515908328772-80611421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'theChoiceGroup' => 0,
    'listgroups' => 0,
    'gr' => 0,
    'trackerEditFormId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51590834b9f9_25831425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51590834b9f9_25831425')) {function content_5b51590834b9f9_25831425($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']&&$_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin']!='y') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['theChoiceGroup']->value)) {?>
		<input type="hidden" name="chosenGroup" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theChoiceGroup']->value);?>
">
	<?php } elseif (isset($_smarty_tpl->tpl_vars['listgroups']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice']=='y') {?>
				<div class="registergroup">
					<input type="radio" name="chosenGroup" id="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName']);?>
">
					<label for="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupDesc']) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupDesc']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName']);?>

						<?php }?>
					</label>
				</div>
			<?php }?>
		<?php } ?>
	<?php }?>
<?php } else { ?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['theChoiceGroup']->value)) {?>
		<input type="hidden" name="chosenGroup" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theChoiceGroup']->value);?>
">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$.getJSON('group_tracker_ajax.php', {chosenGroup:'<?php echo $_smarty_tpl->tpl_vars['theChoiceGroup']->value;?>
'}, function(data) {
	$("#registerTracker").html(data['res']).tikiModal();
});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div id="registerTracker"></div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['listgroups']->value)) {?>
		<div class="form-group">
			<label class="col-sm-4 control-label">
				Group<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_must_choose_group']=='y') {?> <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
}?>
			</label>
			<div class="col-sm-8">
				<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice']=='y') {?>
						<div class="registergroup">
							<input type="radio" name="chosenGroup" id="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName']);?>
"
									<?php if (!empty($_POST['chosenGroup'])&&$_POST['chosenGroup']==smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName'])) {?>checked="checked"<?php }?>>
							<label for="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupDesc']) {?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupDesc']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php } else { ?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value['groupName']);?>

								<?php }?>
							</label>
						</div>
					<?php }?>
				<?php } ?>
			</div>
		</div>
		<div id="registerTracker" class="col-sm-8 col-sm-offset-4">
			<?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?>
				<div class="col-sm-9 col-sm-offset-3">
					<div class="text-center alert alert-danger">
						<em class='mandatory_note'>Fields marked with an * are mandatory.</em>
					</div>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("input[name='chosenGroup']").change(function() {
	$("#registerTracker").tikiModal("Loading...");
	var gr = $("input[name='chosenGroup']:checked").val();
	$.getJSON('group_tracker_ajax.php',{chosenGroup:gr}, function(data) {
		if ($("#registerTracker").children().length === 0) {
			$(".trackerplugindesc").parents("tr").remove();
		}
		$("#registerTracker").html(data['res']).tikiModal();
		$("input[name^=captcha]").parents("tr").show();
		$("input[name=register]").prop("disabled", false);
		$("#registerTracker").parents("table:first").css({borderSpacing:"0 !important",borderCollapse:"collapse !important"});
		$("tr td:first", "#registerTracker").width($("#registerTracker").parents('table:first').find("td:first").width());
	});
})<?php if (!empty($_POST['chosenGroup'])) {?>.change()<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_must_choose_group']=='y') {?>
$("input[name^=captcha]").parents("tr").hide();
$("input[name=register]").prop("disabled", true);
<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y') {?>
		<input type="hidden" name="chosenGroup" value="Registered">
	<?php }?>
<?php }?>
<?php }} ?>
