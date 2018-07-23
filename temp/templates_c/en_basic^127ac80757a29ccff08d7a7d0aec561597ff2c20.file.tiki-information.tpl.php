<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:40:40
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14599745655b5159b8c51c86-15282750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127ac80757a29ccff08d7a7d0aec561597ff2c20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-information.tpl',
      1 => 1419149192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14599745655b5159b8c51c86-15282750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'line' => 0,
    'show_history_back_link' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5159b8c98199_96361638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5159b8c98199_96361638')) {function content_5b5159b8c98199_96361638($_smarty_tpl) {?>
<div id="tiki-center">
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			Information
		</div>

		<div class="alert alert-warning">
			<?php if (is_array($_smarty_tpl->tpl_vars['msg']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['line']->value);?>
<br>
				<?php } ?>
			<?php } else { ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value);?>

			<?php }?>
		</div>

		<p>
			<?php if ($_smarty_tpl->tpl_vars['show_history_back_link']->value=='y') {?>
				<a href="javascript:history.back()" class="linkmenu">Go back</a><br><br>
			<?php }?>
			&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'];?>
" class="linkmenu">Return to home page</a>
		</p>
	</div>
</div>
<?php }} ?>
