<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:20:09
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_score.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8775765975b519b39abc267-03621131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379d6328aab8e369380a01a46de06ad3952a8713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_score.tpl',
      1 => 1492634472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8775765975b519b39abc267-03621131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'eventTypes' => 0,
    'eventName' => 0,
    'score' => 0,
    'key' => 0,
    'hide_advanced' => 0,
    'rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b519b39b19e87_94370925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b519b39b19e87_94370925')) {function content_5b519b39b19e87_94370925($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can see users rank by score in the module users_rank, for that go to "<a class="rbox-link" href="tiki-admin_modules.php">Admin modules</a>".<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="tiki-admin.php?page=score" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<fieldset class="table">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_score','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="table">
		<legend>Cause scores older than a certain number of days to expire</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_score_expday','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="table">
		<legend>Scoring rules</legend>
		<table id="score-table" class="table">
			<tr>
				<td><b>Unique rule ID</b>
					<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="Rule" data-content="A label or ID to help identify which event was triggered to get points.">
						<span class="icon icon-help fa fa-question-circle fa-fw "></span>
					</a>
				</td>
				<td><b>Pts recipient type</b>
					<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="Recipient Type" data-content="The object type of the point recipient. Usually 'user' but can also be article, trackeritem, etc. Can also use '(eval type)' to get the type of the object being triggered by the event.">
						<span class="icon icon-help fa fa-question-circle fa-fw "></span>
					</a>
				</td>
				<td><b>Pts recipient</b>
					<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="The ID of the points recipient" data-content="This is the value for the ID of the recipient. It is retrieved by evaluating the event parameters. Using 'user' for example, would retrieve the user triggering the event. 'object' would retrieve the ID of the object on which the event is being triggered.">
						<span class="icon icon-help fa fa-question-circle fa-fw "></span>
					</a>
				</td>
				<td><b>Points</b>
					<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="Points Given" data-content="This is the numerical value of the points being given.">
						<span class="icon icon-help fa fa-question-circle fa-fw "></span>
					</a>
				</td>
				<td class="text-right"><b>Actions</b></td>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
				<tbody class="event-section" data-section="<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
">
				<tr>
					<td colspan="2"><b>Triggering event</b>: <?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
</td>
					<td colspan="3" class="text-right"><b>Reversal event</b>:
						<select class="reverse-event-select" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][reversalEvent]" class="form-control">
							<option value="">None</option>
							<?php  $_smarty_tpl->tpl_vars['eventName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eventName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eventName']->key => $_smarty_tpl->tpl_vars['eventName']->value) {
$_smarty_tpl->tpl_vars['eventName']->_loop = true;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['eventName']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['event']->value['reversalEvent']==$_smarty_tpl->tpl_vars['eventName']->value) {?> selected<?php }?>>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['eventName']->value);?>

								</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['score'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['score']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event']->value['scores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['score']->key => $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['score']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['score']->value->expiration||$_smarty_tpl->tpl_vars['score']->value->validObjectIds) {?>
						<?php $_smarty_tpl->tpl_vars['hide_advanced'] = new Smarty_variable(0, null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['hide_advanced'] = new Smarty_variable(1, null, 0);?>
					<?php }?>
					<tr class="condition-row">
						<td>
							<input type="text" size="30" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][ruleId]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->ruleId;?>
">
						</td>
						<td>
							<input type="text" size="20" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][recipientType]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->recipientType;?>
">
						</td>
						<td>
							<input type="text" size="30" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][recipient]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->recipient;?>
">
						</td>
						<td>
							<input type="text" size="10" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][score]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->score;?>
">
						</td>
						<td class="text-right">
							<?php if ($_smarty_tpl->tpl_vars['hide_advanced']->value) {?><a class="advanced" href="#"><?php echo smarty_function_icon(array('name'=>'ellipsis-h'),$_smarty_tpl);?>
</a><?php }?>
							<a class="delete-row timeout" href="#"><?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>
</a>
						</td>
					</tr>
					<tr class="advanced-row <?php if ($_smarty_tpl->tpl_vars['hide_advanced']->value==1) {?>hide<?php }?>">
						<td class="text-right">Valid Triggering Object IDs
							<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="Valid Object Ids" data-content="This is a comma-separated list of object ids for which the event is valid">
								<span class="icon icon-help fa fa-question-circle fa-fw "></span>
							</a>
						</td>
						<td>
							<input type="text" size="20" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][validObjectIds]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->validObjectIds;?>
">
						</td>
						<td class="text-right">Min. Time Between Scoring
							<a href="http://doc.tiki.org/Score" target="_blank" data-toggle="popover" data-trigger="hover" title="Time between scoring" data-content="This is the amount of time in seconds that a user must wait before again being able to get points for this event">
								<span class="icon icon-help fa fa-question-circle fa-fw "></span>
							</a>
						</td>
						<td>
							<input type="text" size="10" name="events[<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][expiration]" value="<?php echo $_smarty_tpl->tpl_vars['score']->value->expiration;?>
">
						</td>
					</tr>
				<?php } ?>
				</tbody>
			<?php } ?>
		</table>
		<hr>
		<div class="form-group clearfix">
			<div class="col-lg-4 col-sm-6">
				<select id="eventSelect" name="event" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['eventName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eventName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eventName']->key => $_smarty_tpl->tpl_vars['eventName']->value) {
$_smarty_tpl->tpl_vars['eventName']->_loop = true;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['eventName']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['rule']->value['eventType']==$_smarty_tpl->tpl_vars['eventName']->value) {?> selected<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['eventName']->value);?>

						</option>
					<?php } ?>
				</select>
			</div>
			<a id="addEventBtn" href="#" class="btn btn-primary timeout">Add a Scoring Event</a>
		</div>
	</fieldset>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('[data-toggle="popover"]').popover();

$('#addEventBtn').click(function(ev) {
	ev.preventDefault();
	var timeClicked = new Date();
	if (timeClicked - now > 1000 * 60 * 15) {
		return false;
	}
	var evType = $('#eventSelect').val();

	//if section already exists
	if ($('[data-section="'+evType+'"]').length > 0) {
		var appendElement = $('[data-section="'+evType+'"]');
		var rowOnly = 'y';
		var rowCount = $('[data-section="'+evType+'"] .condition-row').length;
	} else {
		var appendElement = $("#score-table");
	}

	$.ajax(
		$.service(
			'score',
			'create_score_event',
			{
				eventType: evType,
				rowOnly: rowOnly,
				rowCount: rowCount
			}
		)
	).done(function(data) {
		appendElement.append(data);
	});
});
$('.delete-row').click(function(ev) {
	ev.preventDefault();
	var timeClicked = new Date();
	if (timeClicked - now > 1000 * 60 * 15) {
		return false;
	}
	var currentRow = $(this).closest('.condition-row');
	if ($(currentRow).siblings('.condition-row').length > 0) {
		$(currentRow).next('.advanced-row').remove();
		$(currentRow).remove();
	} else {
		$(currentRow).closest('tbody').remove();
	}
});
$('a.advanced').click(function(ev) {
	ev.preventDefault();
	var timeClicked = new Date();
	if (timeClicked - now > 1000 * 60 * 15) {
		return false;
	}
	$(this).closest('.condition-row').next('.advanced-row').removeClass('hide');
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
