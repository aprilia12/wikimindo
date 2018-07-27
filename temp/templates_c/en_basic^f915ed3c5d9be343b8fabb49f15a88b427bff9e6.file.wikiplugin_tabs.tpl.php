<?php /* Smarty version Smarty-3.1.21, created on 2018-07-26 10:37:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12794942565b598834eeb737-80004826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f915ed3c5d9be343b8fabb49f15a88b427bff9e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_tabs.tpl',
      1 => 1416589936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12794942565b598834eeb737-80004826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_slideshow' => 0,
    'tabs' => 0,
    'i' => 0,
    'tabcontent' => 0,
    'toggle' => 0,
    'tabsetname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b598834f02e32_66898077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b598834f02e32_66898077')) {function content_5b598834f02e32_66898077($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['is_slideshow']->value)&&$_smarty_tpl->tpl_vars['is_slideshow']->value=='y') {?>
	<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['tabcontent']->value[$_smarty_tpl->tpl_vars['i']->value];?>

	<?php } ?>
<?php } else { ?>
~np~<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value))); $_block_repeat=true; echo smarty_block_tabset(array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
$_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]))); $_block_repeat=true; echo smarty_block_tab(array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tabcontent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
endfor; endif; ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
~/np~
<?php }?>
<?php }} ?>
