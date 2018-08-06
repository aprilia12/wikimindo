<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:02:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\find.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5443023065b63b79c6d8905-41676049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe346e44c652d8a38209ba1bf4fcddec68bd1dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\find.tpl',
      1 => 1519706322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5443023065b63b79c6d8905-41676049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map_only' => 0,
    'filegals_manager' => 0,
    'find' => 0,
    'whatlabel' => 0,
    'find_in' => 0,
    'autocomplete' => 0,
    'find_type' => 0,
    'find_topic' => 0,
    'find_lang' => 0,
    'find_langOrphan' => 0,
    'find_categId' => 0,
    'find_orphans' => 0,
    'find_other_val' => 0,
    'maxRecords' => 0,
    'prefs' => 0,
    'types' => 0,
    'types_tag' => 0,
    'topics' => 0,
    'topic' => 0,
    'find_show_languages' => 0,
    'languages' => 0,
    'find_show_languages_excluded' => 0,
    'find_show_date_range' => 0,
    'find_date_from' => 0,
    'find_date_to' => 0,
    'find_show_categories' => 0,
    'find_show_categories_multi' => 0,
    'categories' => 0,
    'findSelectedCategoriesNumber' => 0,
    'identifier' => 0,
    'category' => 0,
    'cat_tree' => 0,
    'tiki_p_admin_categories' => 0,
    'key' => 0,
    'value' => 0,
    'filters' => 0,
    'filter_names' => 0,
    'filter_values' => 0,
    'item' => 0,
    'key2' => 0,
    'find_durations' => 0,
    'duration' => 0,
    'show_find_orphans' => 0,
    'find_other' => 0,
    'find_show_num_rows' => 0,
    'gmapbuttons' => 0,
    'mapview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b79c77ca39_76693270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b79c77ca39_76693270')) {function content_5b63b79c77ca39_76693270($_smarty_tpl) {?><?php if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_function_html_select_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_date.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_function_html_select_duration')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_duration.php';
?>



<div class="find clearfix margin-bottom-md">
	<form method="post" class="form form-horizontal" role="form">
	<?php if (!isset($_smarty_tpl->tpl_vars['map_only']->value)||$_smarty_tpl->tpl_vars['map_only']->value!='y') {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?><input type="hidden" name="filegals_manager" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);?>
"><?php }?>
		<?php echo smarty_function_query(array('_type'=>'form_input','maxRecords'=>'NULL','type'=>'NULL','types'=>'NULL','find'=>'NULL','topic'=>'NULL','lang'=>'NULL','exact_match'=>'NULL','categId'=>'NULL','cat_categories'=>'NULL','filegals_manager'=>'NULL','save'=>'NULL','offset'=>0,'searchlist'=>'NULL','searchmap'=>'NULL'),$_smarty_tpl);?>

		<div class="find-text form-group">
			<div class="col-xs-12">
				<div class="input-group">
					<span class="input-group-addon">
						
						<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

					</span>
					<input class="form-control" type="text" name="find" id="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
" placeholder="<?php if (empty($_smarty_tpl->tpl_vars['whatlabel']->value)) {?>Find...<?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['whatlabel']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_in']->value);?>
" data-html="true" data-toggle="focus">
					<?php if (isset($_smarty_tpl->tpl_vars['autocomplete']->value)) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#find").tiki("autocomplete", "<?php echo $_smarty_tpl->tpl_vars['autocomplete']->value;?>
");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						jQuery("#find").tooltip();
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['find']->value)||!empty($_smarty_tpl->tpl_vars['find_type']->value)||!empty($_smarty_tpl->tpl_vars['find_topic']->value)||!empty($_smarty_tpl->tpl_vars['find_lang']->value)||!empty($_smarty_tpl->tpl_vars['find_langOrphan']->value)||!empty($_smarty_tpl->tpl_vars['find_categId']->value)||!empty($_smarty_tpl->tpl_vars['find_orphans']->value)||!empty($_smarty_tpl->tpl_vars['find_other_val']->value)||$_smarty_tpl->tpl_vars['maxRecords']->value!=$_smarty_tpl->tpl_vars['prefs']->value['maxRecords']) {?>
					<div class="find-clear-filter text-center">
						<a href="<?php echo smarty_modifier_escape($_SERVER['PHP_SELF']);?>
?<?php echo smarty_function_query(array('find'=>'','type'=>'','types'=>'','topic'=>'','lang'=>'','langOrphan'=>'','categId'=>'','maxRecords'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'find_from_Month'=>'','find_from_Day'=>'','find_from_Year'=>'','find_to_Month'=>'','find_to_Day'=>'','find_to_Year'=>''),$_smarty_tpl);?>
" title="Clear Filter" class="btn btn-link">Clear Filter</a>
					</div>
				<?php }?>
			</div>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&(!isset($_smarty_tpl->tpl_vars['types_tag']->value)||$_smarty_tpl->tpl_vars['types_tag']->value=='select')) {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Article Type
				</label>
				<div class="col-sm-8">
					<select name="type" class="findtypes form-control input-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_type']->value=='') {?>selected="selected"<?php }?>>any type</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_type']->value==$_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']) {?>selected="selected"<?php }?>>
								<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']));?>

							</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['topics']->value)) {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Article Topic
				</label>
				<div class="col-sm-8">
					<select name="topic" class="findtopics form-control input-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_topic']->value=='') {?>selected="selected"<?php }?>>any topic</option>
						<?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topic']->value['topicId']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_topic']->value==$_smarty_tpl->tpl_vars['topic']->value['topicId']) {?>selected="selected"<?php }?>>
								<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['topic']->value['name']));?>

							</option>
						<?php } ?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['find_show_languages']->value)&&$_smarty_tpl->tpl_vars['find_show_languages']->value=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
			<div class="form-group">
				<label class="control-label col-sm-4">
					Language
				</label>
				<div class="col-sm-8">
					<span class="findlang">
						<select name="lang" class="in form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['find_lang']->value=='') {?>selected="selected"<?php }?>>any language</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</option>
							<?php endfor; endif; ?>
						</select>
						<?php if (isset($_smarty_tpl->tpl_vars['find_show_languages_excluded']->value)&&$_smarty_tpl->tpl_vars['find_show_languages_excluded']->value=='y') {?>
							<span>
								<label class="control-label">
									not in
								</label>
							</span>
							<span>
								<select name="langOrphan" class="notin form-control input-sm">
									<option value='' <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value=='') {?>selected="selected"<?php }?>></option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
										<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
											<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

										</option>
									<?php endfor; endif; ?>
								</select>
							</span>
						<?php }?>
					</span>
				</div>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['find_show_date_range']->value)&&$_smarty_tpl->tpl_vars['find_show_date_range']->value=='y') {?>
			<div class="form-group findDateFrom">
				<label class="text-right col-sm-4">
					Date From
				</label>
				<div class="col-sm-8">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_from']->value,'prefix'=>"find_from_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group findDateTo">
				<label class="text-right col-sm-4">
					Date To
				</label>
				<div class="col-sm-8">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_to']->value,'prefix'=>"find_to_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<?php if (((isset($_smarty_tpl->tpl_vars['find_show_categories']->value)&&$_smarty_tpl->tpl_vars['find_show_categories']->value=='y')||(isset($_smarty_tpl->tpl_vars['find_show_categories_multi']->value)&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'))&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>
			<div class="form-group category_find">
				<?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='n'||$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value<=1) {?>
					<label class="col-sm-4 control-label">
						Category
					</label>
					<div id="category_singleselect_find" class="col-sm-8">
						<select name="categId" class="findcateg form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['find_categId']->value=='') {?>selected="selected"<?php }?>>any category</option>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['identifier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['identifier']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['find_categId']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?>selected="selected"<?php }?>>
									<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['category']->value['categpath']));?>

								</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y') {?>
							<a href="#category_select_find_type" onclick="show('category_multiselect_find');hide('category_singleselect_find');javascript:document.getElementById('category_select_find_type').value='y';">
								Multiple select
							</a>
						<?php }?>
						<input id="category_select_find_type" name="find_show_categories_multi" value="n" type="hidden">
					</div>
				<?php }?>
				<div id="category_multiselect_find" class="col-sm-8 col-sm-offset-4" style="display: <?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'&&$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value>1) {?>block<?php } else { ?>none<?php }?>;">
					<div class="multiselect">
						<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
							<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

							<div class="clearfix">
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
									<div class="pull-right">
										<a href="tiki-admin_categories.php" class="link">
											Admin Categories <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
									</div>
								<?php }?>
								<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

						<?php } else { ?>
							<div class="clearfix">
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
									<div class="pull-right">
										<a href="tiki-admin_categories.php" class="link">
											Admin Categories <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
									</div>
								<?php }?>
								No categories defined
						<?php }?>
							</div> 
					</div> 
				</div> 
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&isset($_smarty_tpl->tpl_vars['types_tag']->value)&&$_smarty_tpl->tpl_vars['types_tag']->value=='checkbox') {?>
			<div class="form-group findtypes text-center">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<label class="checkbox-inline">
						<input type="checkbox" name="types[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if (is_array($_smarty_tpl->tpl_vars['find_type']->value)&&in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['find_type']->value)) {?>checked="checked"<?php }?>> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</label>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)) {?>
			<div class="form-group findfilter">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<label class="control-label col-sm-4">
						<?php echo $_smarty_tpl->tpl_vars['filter_names']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					</label>
					<div class="col-sm-8">
						<select name="findfilter_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control input-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]=='') {?>selected="selected"<?php }?>>--</option>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['key2']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_durations']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['duration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duration']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['find_durations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duration']->key => $_smarty_tpl->tpl_vars['duration']->value) {
$_smarty_tpl->tpl_vars['duration']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['duration']->key;
?>
				<div class="form-group">
				<label class="find_duration control-label col-sm-6">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['duration']->value['label'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<div class="col-sm-6">
					<?php echo smarty_function_html_select_duration(array('prefix'=>$_smarty_tpl->tpl_vars['duration']->value['prefix'],'default'=>$_smarty_tpl->tpl_vars['duration']->value['default'],'default_unit'=>$_smarty_tpl->tpl_vars['duration']->value['default_unit']),$_smarty_tpl);?>

				</div>
				</div>
			<?php } ?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['show_find_orphans']->value)&&$_smarty_tpl->tpl_vars['show_find_orphans']->value=='y') {?>
			<div class="form-group find-orphans" style="margin-top: -15px;">
				<div class="checkbox col-sm-push-4">
					<label class="find_orphans control-label" style="padding-left: 0; font-weight: bold;" for="find_orphans">
						Orphans
						<input type="checkbox" style="margin-left: 30px;" name="find_orphans" id="find_orphans" <?php if (isset($_smarty_tpl->tpl_vars['find_orphans']->value)&&$_smarty_tpl->tpl_vars['find_orphans']->value=='y') {?>checked="checked"<?php }?>>
					</label>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_other']->value)) {?>
			<div class="form-group find-other">
				<label class="find_other control-label col-sm-6" for="find_other">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['find_other']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<div class="col-sm-6">
					<input type="text" name="find_other" id="find_other" value="<?php if (!empty($_smarty_tpl->tpl_vars['find_other_val']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_other_val']->value);
}?>" class="form-control input-sm">
				</div>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['find_show_num_rows']->value)&&$_smarty_tpl->tpl_vars['find_show_num_rows']->value=='y') {?>
			<div class="form-group findnumrows">
				<label class="control-label col-sm-6" for="findnumrows">
					Displayed rows
				</label>
				<div class="col-sm-6">
					<input type="text" name="maxRecords" id="findnumrows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRecords']->value);?>
" size="3" class="form-control input-sm">
				</div>
			</div>
		<?php }?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)&&$_smarty_tpl->tpl_vars['gmapbuttons']->value) {?>
	<div class="find-map form-group">
		<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?>
			<input class="btn btn-default btn-sm" type="submit" name="searchlist" value="Hide Map">
			<input type="hidden" name="mapview" value="y">
		<?php } else { ?>
			<input type="submit" class="btn btn-default btn-sm" name="searchmap" value="Show Map">
			<input type="hidden" name="mapview" value="n">
		<?php }?>
	</div>
	<?php }?>
		<button type="submit" class="btn btn-default" style="text-align: right" name="search">Find</button>
	</form>
</div>
<!-- End of find -->
<?php }} ?>
