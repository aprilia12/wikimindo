<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:21
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-calendar_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11289860525b69106d578321-03432768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d68874ea3ddb4262c877e9275dbce72ed4c65ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-calendar_nav.tpl',
      1 => 1515462800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11289860525b69106d578321-03432768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'module' => 0,
    'module_params' => 0,
    'calendar_type' => 0,
    'now' => 0,
    'focus_prev' => 0,
    'viewmode' => 0,
    'focus_next' => 0,
    'viewlist' => 0,
    'prefs' => 0,
    'calendarViewMode' => 0,
    'daystart' => 0,
    'dayend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69106d5ddc33_24244377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69106d5ddc33_24244377')) {function content_5b69106d5ddc33_24244377($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['ajax']->value)) {
$_smarty_tpl->tpl_vars['ajax'] = new Smarty_variable('y', null, 0);
}
if (!isset($_smarty_tpl->tpl_vars['module']->value)) {
$_smarty_tpl->tpl_vars['module'] = new Smarty_variable('n', null, 0);
}
if (empty($_smarty_tpl->tpl_vars['module_params']->value['viewnavbar'])||$_smarty_tpl->tpl_vars['module_params']->value['viewnavbar']=='y') {?><div class="clearfix tabrow" <?php if ($_smarty_tpl->tpl_vars['module']->value=='y') {?>style="padding: 0"<?php }?>><div class="viewmode clearfix"><?php if (!isset($_smarty_tpl->tpl_vars['calendar_type']->value)||$_smarty_tpl->tpl_vars['calendar_type']->value!="tiki_actions") {
if ($_smarty_tpl->tpl_vars['module']->value!='y') {
echo smarty_function_button(array('_auto_args'=>"viewmode,focus",'_text'=>"Today",'_class'=>"calbuttonoff margin-bottom-sm",'_type'=>"xs btn-default",'viewmode'=>'day','focus'=>$_smarty_tpl->tpl_vars['now']->value,'todate'=>$_smarty_tpl->tpl_vars['now']->value),$_smarty_tpl);?>
<br><?php } else {
if (empty($_smarty_tpl->tpl_vars['module_params']->value['viewmode'])) {
echo smarty_function_button(array('_auto_args'=>"viewmode,focus",'_keepall'=>'y','_text'=>"Today",'_class'=>"calbuttonoff margin-bottom-sm",'_type'=>"xs btn-default",'viewmode'=>'day','focus'=>$_smarty_tpl->tpl_vars['now']->value,'todate'=>$_smarty_tpl->tpl_vars['now']->value),$_smarty_tpl);?>
<br><?php } else {
echo smarty_function_button(array('_auto_args'=>"focus",'_keepall'=>'y','_text'=>"Today",'_class'=>"calbuttonoff margin-bottom-sm",'_type'=>"xs btn-default",'focus'=>$_smarty_tpl->tpl_vars['now']->value,'todate'=>$_smarty_tpl->tpl_vars['now']->value),$_smarty_tpl);?>
<br><?php }
}
}?><div><div style="display:inline-block; padding-right: 6px; position: relative; bottom: 20px; right: 100px"><a class="tips" href="<?php echo smarty_function_query(array('_type'=>'relative','_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>'prev','todate'=>$_smarty_tpl->tpl_vars['focus_prev']->value),$_smarty_tpl);?>
" title=":<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Previous <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewmode']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_function_icon(array('name'=>"previous"),$_smarty_tpl);?>
</a></div><div class="btn-toolbar" style="display:inline-block;" role="toolbar" aria-label="..."><?php if (!isset($_smarty_tpl->tpl_vars['calendar_type']->value)||$_smarty_tpl->tpl_vars['calendar_type']->value!="tiki_actions") {
if ($_smarty_tpl->tpl_vars['module']->value!='y') {
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='day') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp1=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'href'=>"?viewmode=day",'_title'=>":Day",'_text'=>"Day",'_selected_class'=>"buttonon tips",'_type'=>"xs btn-default tips",'_selected'=>$_tmp1),$_smarty_tpl);
} elseif (empty($_smarty_tpl->tpl_vars['module_params']->value['viewmode'])) {
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='day') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp2=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'viewmode'=>'day','_auto_args'=>"viewmode",'_keepall'=>'y','_title'=>":Day",'_text'=>"D",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp2),$_smarty_tpl);
}
}
if ($_smarty_tpl->tpl_vars['module']->value!='y') {
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='week') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp3=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'href'=>"?viewmode=week",'_title'=>":Week",'_text'=>"Week",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp3),$_smarty_tpl);
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='month') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp4=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'href'=>"?viewmode=month",'_title'=>":Month",'_text'=>"Month",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp4),$_smarty_tpl);
} elseif (empty($_smarty_tpl->tpl_vars['module_params']->value['viewmode'])) {
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='week') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp5=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'viewmode'=>'week','_auto_args'=>"viewmode",'_keepall'=>'y','_title'=>":Week",'_text'=>"W",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp5),$_smarty_tpl);
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='month') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp6=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'viewmode'=>'month','_auto_args'=>"viewmode",'_keepall'=>'y','_title'=>":Month",'_text'=>"M",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp6),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['module']->value!='y') {
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='quarter') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp7=ob_get_clean();?><?php echo smarty_function_button(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'href'=>"?viewmode=quarter",'_title'=>":Quarter",'_text'=>"Quarter",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp7),$_smarty_tpl);
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='semester') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp8=ob_get_clean();?><?php echo smarty_function_button(array('href'=>"?viewmode=semester",'_title'=>":Semester",'_text'=>"Semester",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp8),$_smarty_tpl);
ob_start();
if ($_smarty_tpl->tpl_vars['viewmode']->value=='year') {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp9=ob_get_clean();?><?php echo smarty_function_button(array('href'=>"?viewmode=year",'_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'viewmode'=>'year','_title'=>":Year",'_text'=>"Year",'_selected_class'=>"buttonon",'_type'=>"xs btn-default tips",'_selected'=>$_tmp9),$_smarty_tpl);
}?></div><div style="display:inline-block; padding-left: 6px; position: relative; bottom: 20px; left: 100px"><a class="tips" href="<?php echo smarty_function_query(array('_type'=>'relative','_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>'next','todate'=>$_smarty_tpl->tpl_vars['focus_next']->value),$_smarty_tpl);?>
" title=":<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewmode']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_function_icon(array('name'=>"next"),$_smarty_tpl);?>
</a></div></div>
		</div>
	</div>
	
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['viewmode']->value!='day') {?>
	<div class="calnavigation">

		<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['viewnavbar'])&&$_smarty_tpl->tpl_vars['module_params']->value['viewnavbar']=='partial') {?>
			<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Previous ";?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewmode']->value);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp10=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"prev tips",'todate'=>$_smarty_tpl->tpl_vars['focus_prev']->value,'_title'=>":".$_tmp10,'_icon_name'=>"previous")); $_block_repeat=true; echo smarty_block_self_link(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"prev tips",'todate'=>$_smarty_tpl->tpl_vars['focus_prev']->value,'_title'=>":".$_tmp10,'_icon_name'=>"previous"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"prev tips",'todate'=>$_smarty_tpl->tpl_vars['focus_prev']->value,'_title'=>":".$_tmp10,'_icon_name'=>"previous"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['viewlist']->value!='list'||$_smarty_tpl->tpl_vars['prefs']->value['calendar_list_begins_focus']!='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['calendarViewMode']->value=='month') {?>
				<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['daystart']->value,"%B %Y");?>

			<?php } elseif ($_smarty_tpl->tpl_vars['calendarViewMode']->value=='week') {?>
				
				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DMY')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DYM')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='YDM')) {?>
					<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['daystart']->value,"%d/%m/%Y");?>
 - <?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['dayend']->value,"%d/%m/%Y");?>

				<?php } else { ?>
					<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['daystart']->value,"%m/%d/%Y");?>
 - <?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['dayend']->value,"%m/%d/%Y");?>

				<?php }?>
			<?php } else { ?>
				<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['daystart']->value,"%B %Y");?>
 - <?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['dayend']->value,"%B %Y");?>

			<?php }?>
		<?php } else { ?>
			<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['daystart']->value,"%m/%d/%Y");?>
 - <?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['dayend']->value,"%m/%d/%Y");?>

		<?php }?>


		<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['viewnavbar'])&&$_smarty_tpl->tpl_vars['module_params']->value['viewnavbar']=='partial') {?>
			<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Next ";?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewmode']->value);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp11=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"next tips",'todate'=>$_smarty_tpl->tpl_vars['focus_next']->value,'_title'=>":".$_tmp11,'_icon_name'=>"next")); $_block_repeat=true; echo smarty_block_self_link(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"next tips",'todate'=>$_smarty_tpl->tpl_vars['focus_next']->value,'_title'=>":".$_tmp11,'_icon_name'=>"next"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_ajax'=>$_smarty_tpl->tpl_vars['ajax']->value,'_class'=>"next tips",'todate'=>$_smarty_tpl->tpl_vars['focus_next']->value,'_title'=>":".$_tmp11,'_icon_name'=>"next"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</div>
<?php }?>

<?php }} ?>
