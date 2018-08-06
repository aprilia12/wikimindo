<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 05:59:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\trackeroutput\popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15830635285b67c78cb23264-53253512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9004ac45cc526761823f11363f08b569a9a4e7af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\trackeroutput\\popup.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15830635285b67c78cb23264-53253512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popupFields' => 0,
    'field' => 0,
    'popupItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67c78cb55ef6_43878363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67c78cb55ef6_43878363')) {function content_5b67c78cb55ef6_43878363($_smarty_tpl) {?><?php if (!is_callable('smarty_function_trackeroutput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('popup', null, null); ob_start(); ?>
	<div class="panel panel-default">
		<table class="table table-bordered item">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['popupFields']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				<tr><th><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['name']);?>
</th><td><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['field']->value,'item'=>$_smarty_tpl->tpl_vars['popupItem']->value,'showpopup'=>'n','showlinks'=>'n'),$_smarty_tpl);?>
</td></tr>
			<?php } ?>
		</table>
	</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo smarty_function_popup(array('text'=>Smarty::$_smarty_vars['capture']['popup'],'fullhtml'=>"1",'hauto'=>true,'vauto'=>true,'trigger'=>"hover"),$_smarty_tpl);?>

<?php }} ?>
