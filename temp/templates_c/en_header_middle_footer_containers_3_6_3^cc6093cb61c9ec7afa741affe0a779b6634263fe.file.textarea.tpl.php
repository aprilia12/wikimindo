<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\prefs\textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5932822525b69105ae67862-50715255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc6093cb61c9ec7afa741affe0a779b6634263fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\prefs\\textarea.tpl',
      1 => 1424955470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5932822525b69105ae67862-50715255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'syntax' => 0,
    'codemirror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105ae733e7_12575756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105ae733e7_12575756')) {function content_5b69105ae733e7_12575756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.simplewiki.php';
?><div class="adminoptionbox preference form-group clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;"><label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label><div class="col-sm-8"><textarea name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['syntax']->value) {?> data-syntax="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['syntax']->value);?>
" data-codemirror="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['codemirror']->value);?>
" <?php }?> class="form-control" <?php if ($_smarty_tpl->tpl_vars['p']->value['size']) {?> rows="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['size']);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
</textarea><?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?><div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div><?php }
echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div>
<?php }} ?>
