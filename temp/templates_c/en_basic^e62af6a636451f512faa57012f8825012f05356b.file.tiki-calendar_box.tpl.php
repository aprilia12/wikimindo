<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:48:12
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-calendar_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6214043215b51a1cc039860-18006225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62af6a636451f512faa57012f8825012f05356b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-calendar_box.tpl',
      1 => 1515973908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6214043215b51a1cc039860-18006225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calendar_type' => 0,
    'item_url' => 0,
    'cellhead' => 0,
    'cellcalendarId' => 0,
    'infocals' => 0,
    'cellprio' => 0,
    'group_by_item' => 0,
    'cellstatus' => 0,
    'allday' => 0,
    'cellstart' => 0,
    'cellend' => 0,
    'cellid' => 0,
    'cellname' => 0,
    'celluser' => 0,
    'show_description' => 0,
    'celldescription' => 0,
    'show_participants' => 0,
    'cellparticipants' => 0,
    'cellorganizers' => 0,
    'show_category' => 0,
    'cellcategory' => 0,
    'show_location' => 0,
    'celllocation' => 0,
    'show_url' => 0,
    'cellurl' => 0,
    'show_calname' => 0,
    'cellcalname' => 0,
    'show_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a1cc0bb376_26309086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a1cc0bb376_26309086')) {function content_5b51a1cc0bb376_26309086($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_time.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
?><div class='opaque calBox' style="width:200px">
	<?php if ($_smarty_tpl->tpl_vars['calendar_type']->value=="tiki_actions") {?>
		<div class='box-title'>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item_url']->value;?>
">
				<?php echo $_smarty_tpl->tpl_vars['cellhead']->value;?>

			</a>
			<?php if (isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custompriorities'])&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custompriorities']=='y'&&$_smarty_tpl->tpl_vars['cellprio']->value) {?>
				<span class='calprio<?php echo $_smarty_tpl->tpl_vars['cellprio']->value;?>
' id='calprio'>
					<?php echo $_smarty_tpl->tpl_vars['cellprio']->value;?>

				</span>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['group_by_item']->value!='y') {?>
		<strong<?php if (isset($_smarty_tpl->tpl_vars['cellstatus']->value)&&$_smarty_tpl->tpl_vars['cellstatus']->value=='2') {?> style="text-decoration:line-through"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['allday']->value) {?>
				<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['cellstart']->value);?>

				<?php if ($_smarty_tpl->tpl_vars['cellend']->value-$_smarty_tpl->tpl_vars['cellstart']->value>=86400) {?>&ndash; <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['cellend']->value);?>

					<br>
				<?php }?>
				(All day)
			<?php } else { ?>
				<?php if (($_smarty_tpl->tpl_vars['cellend']->value-$_smarty_tpl->tpl_vars['cellstart']->value<86400)) {?>
					<?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['cellstart']->value);?>
 &ndash; <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['cellend']->value);?>

				<?php } else { ?>
					<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['cellstart']->value);?>
&nbsp;(<?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['cellstart']->value);?>
) &ndash; <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['cellend']->value);?>
&nbsp;(<?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['cellend']->value);?>
)
				<?php }?>
			<?php }?>
		</strong>
		<br>
	<?php }?>
	<a href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['cellid']->value;?>
" title="Details"<?php if (isset($_smarty_tpl->tpl_vars['cellstatus']->value)&&$_smarty_tpl->tpl_vars['cellstatus']->value=='2') {?> style="text-decoration:line-through"<?php }?>>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellname']->value);?>

	</a>
	<p class="text-muted"><strong>Created by:<?php echo $_smarty_tpl->tpl_vars['celluser']->value;?>
</strong></p>
	<?php if ($_smarty_tpl->tpl_vars['show_description']->value=='y') {?>
		<div class="panel-body">
			<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['celldescription']->value,250,'...');?>
<br/><br/>
			<strong>Created by:<?php echo $_smarty_tpl->tpl_vars['celluser']->value;?>
</strong>
		</div>
		<br>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['show_participants']->value)&&$_smarty_tpl->tpl_vars['show_participants']->value=='y'&&isset($_smarty_tpl->tpl_vars['cellparticipants']->value)&&$_smarty_tpl->tpl_vars['cellparticipants']->value) {?>
		<span class="box-title">
			Organized by:
		</span>
		<?php echo $_smarty_tpl->tpl_vars['cellorganizers']->value;?>

		<br>
		<span class="box-title">
			Participants:
		</span>
		<?php echo $_smarty_tpl->tpl_vars['cellparticipants']->value;?>

		<br>
		<br>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['cellcalendarId']->value)&&isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custompriorities'])&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custompriorities']=='y'&&$_smarty_tpl->tpl_vars['cellprio']->value) {?>
		<span class='box-title'>
			Priority:
		</span>
		<?php echo $_smarty_tpl->tpl_vars['cellprio']->value;?>

		<br>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['show_category']->value)&&$_smarty_tpl->tpl_vars['show_category']->value=='y'&&isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customcategories'])&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customcategories']=='y'&&$_smarty_tpl->tpl_vars['cellcategory']->value) {?>
		<span class='box-title'>
			Classification:
		</span>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellcategory']->value);?>

		<br>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['show_location']->value)&&$_smarty_tpl->tpl_vars['show_location']->value=='y'&&isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customlocations'])&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customlocations']=='y'&&$_smarty_tpl->tpl_vars['celllocation']->value) {?>
		<span class='box-title'>
			Location:
		</span>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['celllocation']->value);?>

		<br>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['show_url']->value)&&$_smarty_tpl->tpl_vars['show_url']->value=='y'&&isset($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customurl'])&&$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customurl']=='y'&&$_smarty_tpl->tpl_vars['cellurl']->value) {?>
		<span class='box-title'>
			Website:
		</span>
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellurl']->value,'url');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellurl']->value,'url');?>
">
			<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cellurl']->value,32,'...');?>

		</a>
		<br>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['show_calname']->value)&&$_smarty_tpl->tpl_vars['show_calname']->value=='y'&&$_smarty_tpl->tpl_vars['cellcalname']->value) {?>
		<span class='box-title'>
			Calendar:
		</span>
		<span style="height:12px;width:12px;color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'];?>
;<?php if (!empty($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custombgcolor'])) {?>background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['custombgcolor'];?>
;<?php }
if (!empty($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'])) {?>border-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cellcalendarId']->value]['customfgcolor'];?>
;<?php }?>border-width:1px;border-style:solid;">
			&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cellcalname']->value);?>
&nbsp;
		</span>
		<br>
	<?php }?>
	<br>
	<?php if (isset($_smarty_tpl->tpl_vars['show_status']->value)&&$_smarty_tpl->tpl_vars['show_status']->value=='y') {?>
		<div class="statusbox status<?php echo $_smarty_tpl->tpl_vars['cellstatus']->value;?>
">
			<?php if ($_smarty_tpl->tpl_vars['cellstatus']->value==0) {?>
				Tentative
			<?php } elseif ($_smarty_tpl->tpl_vars['cellstatus']->value==1) {?>
				Confirmed
			<?php } elseif ($_smarty_tpl->tpl_vars['cellstatus']->value==2) {?>
				Cancelled
			<?php }?>
		</div>
	<?php }?>
</div>
<?php }} ?>
