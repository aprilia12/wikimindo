<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:58:07
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-last_actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8138231335b5141afcb4738-80299947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df25376001f9ca9f244680933e8b43fe0ba83307' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-last_actions.tpl',
      1 => 1491652436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8138231335b5141afcb4738-80299947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'modLastActions' => 0,
    'nonums' => 0,
    'showuser' => 0,
    'showdate' => 0,
    'maxlen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5141afcfac48_64914470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5141afcfac48_64914470')) {function content_5b5141afcfac48_64914470($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"last_actions",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"last_actions",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['modLastActions']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value)); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modLastActions']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modLastActions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
?>
		<li>
			<?php $_smarty_tpl->_capture_stack[0][] = array('label', null, null); ob_start();
if ($_smarty_tpl->tpl_vars['showuser']->value=='y') {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);?>
: <?php }
echo $_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['action'];?>
 <?php echo $_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['objectType'];?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object']);
if ($_smarty_tpl->tpl_vars['showdate']->value=='y') {?> at <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastModif']);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if ($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object']!='') {?>
				<a class="linkmodule" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'],"url");?>
" title="
				<?php if ((strlen(Smarty::$_smarty_vars['capture']['label'])>$_smarty_tpl->tpl_vars['maxlen']->value)&&($_smarty_tpl->tpl_vars['maxlen']->value>0)) {?>
					<?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);?>
: <?php echo $_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['action'];?>
 <?php echo $_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['objectType'];?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object']);?>
 at <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastModif'],'','n');?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['showdate']->value=='n') {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastModif'],'','n');
}
if ($_smarty_tpl->tpl_vars['showuser']->value=='n') {
if ($_smarty_tpl->tpl_vars['showdate']->value=='n') {?>, by <?php }
echo smarty_modifier_username($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']);
}?>
				<?php }?>
			">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['maxlen']->value>0) {?>
				<?php echo smarty_modifier_truncate(Smarty::$_smarty_vars['capture']['label'],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true);?>

			<?php } else { ?>
				<?php echo Smarty::$_smarty_vars['capture']['label'];?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['modLastActions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object']!='') {?></a><?php }?>
		</li>
	<?php endfor; endif; ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modLastActions']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"last_actions",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
