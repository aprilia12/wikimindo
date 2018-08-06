<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 09:14:43
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\mail\plugin_pending_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3625532215b67f563362489-65871770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8552cb61dd19d6ccd889a7cf642c6f2c1391bcd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\mail\\plugin_pending_notification.tpl',
      1 => 1491786404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3625532215b67f563362489-65871770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_name' => 0,
    'type' => 0,
    'objectId' => 0,
    'base_url' => 0,
    'prefs' => 0,
    'arguments' => 0,
    'key' => 0,
    'value' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67f5633c00a5_74192237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67f5633c00a5_74192237')) {function content_5b67f5633c00a5_74192237($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><?php ob_start();?><?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'id'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['plugin_name']->value,'_1'=>$_tmp1)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['plugin_name']->value,'_1'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin %0 is pending approval on %1.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['plugin_name']->value,'_1'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['base_url']->value)."tiki-plugins.php")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['base_url']->value)."tiki-plugins.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
See all the <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
pending plugins in the <a href='%0'>plugin approval page</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['base_url']->value)."tiki-plugins.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['arguments']->value)) {?>
	<b>Plugin arguments:</b>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arguments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		* <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['body']->value)) {?>
	<b>Plugin body:</b>
	<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

<?php }?><?php }} ?>
