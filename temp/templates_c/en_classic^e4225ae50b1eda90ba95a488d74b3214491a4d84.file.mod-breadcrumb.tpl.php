<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:39
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12927335465b51656f7ea9d3-29529541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4225ae50b1eda90ba95a488d74b3214491a4d84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-breadcrumb.tpl',
      1 => 1360061690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12927335465b51656f7ea9d3-29529541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'breadCrumb' => 0,
    'nonums' => 0,
    'maxlen' => 0,
    'namespaceoption' => 0,
    'prefs' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51656f8020e6_54797099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51656f8020e6_54797099')) {function content_5b51656f8020e6_54797099($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"breadcrumb",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"breadcrumb",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['breadCrumb']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value)); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['breadCrumb']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['breadCrumb']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<a class="linkmodule" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
">
				<?php if (($_smarty_tpl->tpl_vars['maxlen']->value>0&&strlen($_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']])>$_smarty_tpl->tpl_vars['maxlen']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['namespaceoption']->value=='n') {?>
						<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable(explode($_smarty_tpl->tpl_vars['prefs']->value['namespace_separator'],$_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]), null, 0);?>
						<?php if (empty($_smarty_tpl->tpl_vars['data']->value['1'])) {?>
							<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['0'],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true));?>

						<?php } else { ?>
							<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['1'],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true));?>

						<?php }?>
					<?php } else { ?>
						<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true));?>

					<?php }?>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['namespaceoption']->value=='n') {?>
						<?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable(explode($_smarty_tpl->tpl_vars['prefs']->value['namespace_separator'],$_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]), null, 0);?>
						<?php if (empty($_smarty_tpl->tpl_vars['data']->value['1'])) {?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['0']);?>

						<?php } else { ?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['1']);?>

						<?php }?>
					<?php } else { ?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['breadCrumb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>

					<?php }?>
				<?php }?>
			</a>
		</li>
	<?php endfor; endif; ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['breadCrumb']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"breadcrumb",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
