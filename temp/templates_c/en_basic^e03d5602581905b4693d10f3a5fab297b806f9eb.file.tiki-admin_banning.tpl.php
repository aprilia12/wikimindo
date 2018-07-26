<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 06:18:17
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_banning.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454652795b57fa09a460b6-76932832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03d5602581905b4693d10f3a5fab297b806f9eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_banning.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454652795b57fa09a460b6-76932832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'updated' => 0,
    'banId' => 0,
    'info' => 0,
    'mass_ban_ip' => 0,
    'ban_comments_list' => 0,
    'comment' => 0,
    'ip' => 0,
    'user' => 0,
    'sections' => 0,
    'sec' => 0,
    'prefs' => 0,
    'items' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'find' => 0,
    'js' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57fa09b1ce68_14996044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57fa09b1ce68_14996044')) {function content_5b57fa09b1ce68_14996044($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_html_select_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_select_date.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function CheckAll() {
		for (var i = 0; i < document.banningform.elements.length; i++) {
			var e = document.banningform.elements[i];
			if (e.type == 'checkbox' && e.id == 'banning-section' && e.name != 'checkall') {
				e.checked = document.banningform.checkall.checked;
			}
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function CheckMultiIP() {
		for (var i = 0; i < document.banningform.elements.length; i++) {
			var e = document.banningform.elements[i];
			if (e.type == 'checkbox' && e.id == 'multi-banning-section' && e.name != 'checkall') {
				e.checked = document.banningform.checkmultiip.checked;
			}
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	function CheckUseDates() {
		var e = document.getElementById('usedates_date');
		var e_from = document.getElementById('usedates_date_from');
		var e_to = document.getElementById('usedates_date_to');
		var check = document.getElementById('banning-actdates');
		if ( check.checked == true ) {
			e.style.display = 'block' ;
		}else{
			e.style.display = 'none' ;
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Banning")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Banning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Banning system<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Banning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar">
	<form action="tiki-admin_banning.php" method="post">
	<input type="hidden" name="export" value="y">
		<button name="csv" type="submit" class="btn btn-default">
			<?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export as CSV
		</button>
		<?php echo smarty_function_button(array('_text'=>"Import as CSV",'_icon_name'=>"import",'href'=>"#Import_rules_as_CSV",'class'=>"btn btn-default"),$_smarty_tpl);?>

	</form>
</div>

<?php if ($_smarty_tpl->tpl_vars['updated']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<strong>Banning rules have been updated</strong>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>Add or edit rules</h2>
<form action="tiki-admin_banning.php" name="banningform" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="banId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['banId']->value);?>
">
	<div class="form-group">
		<label class="col-sm-4 control-label" for="banning-title">Rule title</label>
		<div class="col-sm-8">
			<input type="text" name="title" id="banning-title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['title']);?>
" maxlength="200">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="banning-userregex">Username regex matching</label>
		<div class="col-sm-8">
			<input type="radio" name="mode" value="user" <?php if ($_smarty_tpl->tpl_vars['info']->value['mode']=='user') {?>checked="checked"<?php }?>>
			<input type="text" name="userreg" id="banning-userregex" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['user']);?>
" onfocus="$('input[name=mode]').val(['user']);">
		</div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['mass_ban_ip']->value)) {?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="banning-ipregex">Multiple IP regex matching</label>
			<div class="col-sm-8 alert-warning">
				<input type="radio" name="mode" value="mass_ban_ip" <?php if ($_smarty_tpl->tpl_vars['info']->value['mode']=='mass_ban_ip') {?>checked="checked"<?php }?>>
				<br>
				<input type="checkbox" name="checkmultiip" checked="checked" onclick="CheckMultiIP();">
				<label for="sectionswitch">Check / Uncheck All</label><br>
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ban_comments_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['ip']->value = $_smarty_tpl->tpl_vars['comment']->key;
?>
					<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
						<input type="checkbox" name="multi_banned_ip[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ip']->value);?>
]" id="multi-banning-section" checked="checked">
						<label><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user']->value['userName']);?>
</label>
						<label for="multi-banning-section"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ip']->value);?>
</label>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	<?php } else { ?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="banning-ipregex">IP regex matching</label></label>
			<div class="col-sm-8">
				<input type="radio" name="mode" value="ip" <?php if ($_smarty_tpl->tpl_vars['info']->value['mode']=='ip') {?>checked="checked"<?php }?>>
				<input type="text" name="ip1" id="banning-ipregex" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['ip1']);?>
" size="3" onfocus="$('input[name=mode]').val(['ip']);">.
				<input type="text" name="ip2" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['ip2']);?>
" size="3">.
				<input type="text" name="ip3" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['ip3']);?>
" size="3">.
				<input type="text" name="ip4" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['ip4']);?>
" size="3">
			</div>
		</div>
	<?php }?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="banning-section">Banned from sections</label>
		<div class="col-sm-8">
			<input type="checkbox" name="checkall" <?php if ((!$_smarty_tpl->tpl_vars['banId']->value)) {?>checked="checked"<?php }?> onclick="CheckAll();">
			<label for="sectionswitch">Check / Uncheck All</label><br>
			<?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_smarty_tpl->tpl_vars['sec'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ix']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
 $_smarty_tpl->tpl_vars['sec']->value = $_smarty_tpl->tpl_vars['it']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ix']['index']++;
?>
				<label class="control-label" for="banning-section"><input type="checkbox" name="section[<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
]" id="banning-section" <?php if (((!$_smarty_tpl->tpl_vars['banId']->value)||in_array($_smarty_tpl->tpl_vars['sec']->value,$_smarty_tpl->tpl_vars['info']->value['sections']))) {?>checked="checked"<?php }?>>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['sec']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ix']['index']%2) {?>
				<?php }?>
			<?php } ?>
		</div>
		<div class="col-sm-8">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="banning-actdates">Rule activated by dates</label>
		<div class="col-sm-8">
			<input type="checkbox" name="use_dates" id="banning-actdates" <?php if ($_smarty_tpl->tpl_vars['info']->value['use_dates']=='y') {?>checked="checked"<?php }?> onclick="CheckUseDates();">
		</div>
	</div>
	<div class="form-group" id="usedates_date" style="display: <?php if ($_smarty_tpl->tpl_vars['info']->value['use_dates']=='y') {?>block<?php } else { ?>none<?php }?>;" >
		<label class="col-sm-4 control-label" for="">Rule active from</label>
		<div class="col-sm-8">
			<?php echo smarty_function_html_select_date(array('prefix'=>"date_from",'time'=>$_smarty_tpl->tpl_vars['info']->value['date_from'],'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="">Rule active until</label>
		<div class="col-sm-8">
			<?php echo smarty_function_html_select_date(array('prefix'=>"date_to",'time'=>$_smarty_tpl->tpl_vars['info']->value['date_to'],'end_year'=>"+10",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="banning-mess">Custom message to the user</label>
		<div class="col-sm-8">
				<textarea rows="4" class="form-control" name="message"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['message']);?>
</textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-4">
			<input type="submit" class="btn btn-primary btn-sm" name="save" value="Save">
		</div>
	</div>
</form>

<h2 id="Import_rules_as_CSV">Import rules as CSV</h2>

<form method="post" action="tiki-admin_banning.php" enctype="multipart/form-data" class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-4 control-label" for="csv">CSV File
			<?php $_smarty_tpl->_capture_stack[0][] = array('help', null, null); ob_start(); ?>Column names on the first line:<br>banId,mode,title,ip1,ip2,ip3,ip4,user,date_from,date_to,use_dates,created,created_readable,message,sections<br>Sections format: section names are splitted by pipes (vertical bars). To see an example and use it as template, add one rule by hand, and export it as csv<br>Date format: See: http://php.net/strtotime<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<a title="Help" <?php echo smarty_function_popup(array('text'=>smarty_modifier_escape(Smarty::$_smarty_vars['capture']['help'])),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
		</label>
		<div class="col-sm-8">
			<input type="file" name="fileCSV" class="form-control">
			<label class="control-label" for="import_as_new">
				<input type="checkbox" name="import_as_new" id="import_as_new">
				Import as new rules
			</label>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-4">
			<input type="submit" class="btn btn-default btn-sm" name="import" value="Import">
		</div>
	</div>
 </form>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
	<h2>Find</h2>
	<form method="post" action="tiki-admin_banning.php">
		<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
		<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
		<label for="banning-find">Find:</label><input type="text" name="find" id="banning-find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
	</form>
<?php }?>
<h2>Current rules</h2>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<form method="post" action="tiki-admin_banning.php">
	<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
	<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
	<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
		<table class="table table-striped table-hover">
			<tr>
				<th>
					<?php if (count($_smarty_tpl->tpl_vars['items']->value)>0) {?>
						<input type="submit" class="btn btn-warning btn-sm tips" name="del" value="x" title=":Remove">
					<?php }?>
				</th>
				<th>Title</th>
				<th>User/IP</th>
				<th>Sections</th>
				<th></th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
				<tr>
					<td>
						<input type="checkbox" name="delsec[<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['banId'];?>
]">
					</td>
					<td class="text">
						<a href="tiki-admin_banning.php?banId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['banId'];?>
" class="link"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['title']);?>
</a>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['mode']=='user') {?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ip1'];?>
.<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ip2'];?>
.<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ip3'];?>
.<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['ip4'];?>

						<?php }?>
					</td>
					<td>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['sections']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['sections'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['section'];
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['last']) {?>,<?php }?>
						<?php endfor; endif; ?>
					</td>
					<td>
						<?php $_smarty_tpl->_capture_stack[0][] = array('banning_actions', null, null); ob_start(); ?>
							<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_banning.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;banId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['banId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_banning.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['banId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
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
							title="Actions"
							href="#"
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['banning_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['banning_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>5,'_text'=>"No rules found"),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
