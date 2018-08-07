<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:58:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\error_raw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2890571775b6918e4bbc3c1-48189835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2375d9cf274b406b811a52db9ffc03455795ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\error_raw.tpl',
      1 => 1432034694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2890571775b6918e4bbc3c1-48189835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6918e4bf6d50_41972551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6918e4bf6d50_41972551')) {function content_5b6918e4bf6d50_41972551($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
<table dir="rtl" ><tr><td>
<?php }?>

<div id="tiki-mid">
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php echo smarty_function_icon(array('name'=>'error','alt'=>"Error",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
 Error
		</div>
		<div class="panel-body">
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
</td></tr></table>
<?php }?>
<?php }} ?>
