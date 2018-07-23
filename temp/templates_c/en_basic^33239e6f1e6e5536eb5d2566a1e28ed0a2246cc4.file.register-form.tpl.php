<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14000004145b515908241fc8-64911990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33239e6f1e6e5536eb5d2566a1e28ed0a2246cc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-form.tpl',
      1 => 1459935982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14000004145b515908241fc8-64911990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customfields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5159082807c7_48966082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5159082807c7_48966082')) {function content_5b5159082807c7_48966082($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("register-login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("register-email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("register-passcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("register-pass.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("register-pass2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['customfields']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['name'] = 'ir';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total']);
?>
		<?php if ($_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['show']) {?>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['prefName'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['label'];?>
:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
				<div class="col-sm-8">
					<input type="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['prefName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['value'];?>
" size="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['size'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['prefName'];?>
" class="form-control" >
				</div>
			</div>
		<?php }?>
	<?php endfor; endif; ?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("register-groupchoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
