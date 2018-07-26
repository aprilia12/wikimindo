<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 09:42:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-groups_emulation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2156207305b5829d2daf984-45593491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3427473baee731b167457400443a5b8d295e249c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-groups_emulation.tpl',
      1 => 1416589936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156207305b5829d2daf984-45593491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'allGroups' => 0,
    'showallgroups' => 0,
    'groupname' => 0,
    'showyourgroups' => 0,
    'userGroups' => 0,
    'inclusion' => 0,
    'groups_are_emulated' => 0,
    'groups_emulated' => 0,
    'module_rows' => 0,
    'chooseGroups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5829d2e28b21_45580054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5829d2e28b21_45580054')) {function content_5b5829d2e28b21_45580054($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"groups_emulation",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"groups_emulation",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (isset($_smarty_tpl->tpl_vars['allGroups']->value)&&$_smarty_tpl->tpl_vars['showallgroups']->value=='y') {?><fieldset><legend>All Groups</legend><ul ><?php  $_smarty_tpl->tpl_vars['inclusion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inclusion']->_loop = false;
 $_smarty_tpl->tpl_vars['groupname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inclusion']->key => $_smarty_tpl->tpl_vars['inclusion']->value) {
$_smarty_tpl->tpl_vars['inclusion']->_loop = true;
 $_smarty_tpl->tpl_vars['groupname']->value = $_smarty_tpl->tpl_vars['inclusion']->key;
?><li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</li><?php } ?></ul ></fieldset><?php }
if ($_smarty_tpl->tpl_vars['showyourgroups']->value=='y') {?><fieldset><legend>Your Groups</legend><ul ><?php  $_smarty_tpl->tpl_vars['inclusion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inclusion']->_loop = false;
 $_smarty_tpl->tpl_vars['groupname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inclusion']->key => $_smarty_tpl->tpl_vars['inclusion']->value) {
$_smarty_tpl->tpl_vars['inclusion']->_loop = true;
 $_smarty_tpl->tpl_vars['groupname']->value = $_smarty_tpl->tpl_vars['inclusion']->key;
if ($_smarty_tpl->tpl_vars['inclusion']->value=='included') {?><li><i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</i></li><?php } else { ?><li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</li><?php }
} ?></ul ></fieldset><?php }
if ($_smarty_tpl->tpl_vars['groups_are_emulated']->value=='y') {?><fieldset><legend>Emulated Groups</legend><ul><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups_emulated']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><li><?php echo $_smarty_tpl->tpl_vars['groups_emulated']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
</li><?php endfor; endif; ?></ul><form method="get" action="tiki-emulate_groups_switch.php" target="_self"><div style="text-align: center"><button type="submit" class="btn btn-default btn-sm" name="emulategroups" value="resetgroups">Reset</button></div></form></fieldset><?php }?><form method="get" action="tiki-emulate_groups_switch.php" target="_self"><fieldset><legend>Switch to Groups</legend><select name="switchgroups[]" size="<?php echo $_smarty_tpl->tpl_vars['module_rows']->value;?>
" multiple="multiple" class="form-control table"><?php  $_smarty_tpl->tpl_vars['inclusion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inclusion']->_loop = false;
 $_smarty_tpl->tpl_vars['groupname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chooseGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inclusion']->key => $_smarty_tpl->tpl_vars['inclusion']->value) {
$_smarty_tpl->tpl_vars['inclusion']->_loop = true;
 $_smarty_tpl->tpl_vars['groupname']->value = $_smarty_tpl->tpl_vars['inclusion']->key;
?><option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
" ><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</option><?php } ?></select><div class="text-center"><button type="submit" class="btn btn-default" name="emulategroups" value="setgroups" >Simulate</button></div></fieldset></form><br><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"groups_emulation",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
