<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 03:38:18
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18558028025b6cec8a1c3210-37589452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a3e9b2921be38f069e1f2a8db7b4d4b8c026485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_events.tpl',
      1 => 1438938572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18558028025b6cec8a1c3210-37589452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'datetime' => 0,
    'event' => 0,
    'desc' => 0,
    'usePagination' => 0,
    'cant' => 0,
    'maxEvents' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6cec8a25b7b6_82785183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6cec8a25b7b6_82785183')) {function content_5b6cec8a25b7b6_82785183($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<div class="table-responsive">
<table class="table table-condensed table-bordered">
<tr><th colspan="2">Upcoming Events</th></tr>

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
	<tr class="<?php echo smarty_function_cycle(array('advance'=>false),$_smarty_tpl);?>
">
		<td>
			<?php if ($_smarty_tpl->tpl_vars['datetime']->value==1) {?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("start", null, null); ob_start();
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['event']->value['start']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("end", null, null); ob_start();
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['event']->value['end']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo Smarty::$_smarty_vars['capture']['start'];
if (Smarty::$_smarty_vars['capture']['start']!=Smarty::$_smarty_vars['capture']['end']) {?><br><?php echo Smarty::$_smarty_vars['capture']['end'];
}?>
			<?php } else { ?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("start", null, null); ob_start();
echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['start']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("end", null, null); ob_start();
echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['end']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo Smarty::$_smarty_vars['capture']['start'];
if (Smarty::$_smarty_vars['capture']['start']!=Smarty::$_smarty_vars['capture']['end']) {?><br><?php echo Smarty::$_smarty_vars['capture']['end'];
}?>
			<?php }?>
		</td>
		<td style=white-space:normal;">
			<a class="linkmodule" href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['event']->value['name']);?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['desc']->value) {?><br><?php echo $_smarty_tpl->tpl_vars['event']->value['parsed'];
}?>
		</td>
	</tr><!-- <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 -->
<?php } ?>
</table>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['events']->value)&&$_smarty_tpl->tpl_vars['usePagination']->value!='n') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxEvents']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxEvents']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxEvents']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php }} ?>
