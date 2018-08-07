<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\prefs\text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8163912395b69105ad2f014-39349873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b720e501cd955382c1659433ca62f812c6a017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\prefs\\text.tpl',
      1 => 1491073136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8163912395b69105ad2f014-39349873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105ad42893_55397654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105ad42893_55397654')) {function content_5b69105ad42893_55397654($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.simplewiki.php';
?><div class="form-group adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<div class="col-sm-8">
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
			<div class="input-group">
		<?php }?>
		<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['value'])) {?>
			<input name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" value="<?php echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['p']->value['value'],$_smarty_tpl->tpl_vars['p']->value['separator']));?>
" class="form-control" size="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp));?>
"
				type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php } else { ?>
			<input name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
" class="form-control" size="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp));?>
"
				type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['p']->value['units'];?>
</span></div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
