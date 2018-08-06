<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 06:18:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-action_calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9440270025b63d7a5e44162-06061285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '755f02e852495a7ed621981db065dd343f00077b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-action_calendar.tpl',
      1 => 1385240828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9440270025b63d7a5e44162-06061285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewlist' => 0,
    'group_by_item' => 0,
    'myurl' => 0,
    'tikiItems' => 0,
    'vi' => 0,
    'ki' => 0,
    'tikicals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63d7a5e63560_62577144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63d7a5e63560_62577144')) {function content_5b63d7a5e63560_62577144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
?><div id="calscreen">

<div style="float:right;margin:5px;">
	<?php if ($_smarty_tpl->tpl_vars['viewlist']->value!='list') {?>
		<?php if ($_smarty_tpl->tpl_vars['group_by_item']->value!='n') {?>
			<?php echo smarty_function_button(array('href'=>"?gbi=n",'_text'=>" Do not group by item"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_button(array('href'=>"?gbi=y",'_text'=>" Group by item"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>

	<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"toggle('filtercal');",'_text'=>"Filter"),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
		<?php echo smarty_function_button(array('href'=>"?viewlist=table",'_text'=>"Calendar View"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_button(array('href'=>"?viewlist=list",'_text'=>"List View"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tiki Action Calendar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form id="filtercal" method="get" action="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
" name="f" style="display:none;">
<div class="caltitle">Tools Calendars</div>
	<div class="caltoggle">
		<?php echo smarty_function_select_all(array('checkbox_names'=>'tikicals[]','label'=>"Check / Uncheck All"),$_smarty_tpl);?>

	</div>
<?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['ki'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tikiItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['ki']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['vi']->value['feature']=='y'&&$_smarty_tpl->tpl_vars['vi']->value['right']=='y') {?>
<div class="calcheckbox"><input type="checkbox" name="tikicals[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ki']->value);?>
" id="tikical_<?php echo $_smarty_tpl->tpl_vars['ki']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ki']->value,$_smarty_tpl->tpl_vars['tikicals']->value)) {?>checked="checked"<?php }?>>
<label for="tikical_<?php echo $_smarty_tpl->tpl_vars['ki']->value;?>
" class="Cal<?php echo $_smarty_tpl->tpl_vars['ki']->value;?>
"> = <?php echo $_smarty_tpl->tpl_vars['vi']->value['label'];?>
</label></div>
<?php }?>
<?php } ?>
<div class="calinput"><input type="submit" class="btn btn-default btn-sm" name="refresh" value="Refresh"></div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['viewlist']->value=='list') {?>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_listmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-calendar_calmode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

</div>

<?php }} ?>
