<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:32:22
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\update_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13895036905b6912c61136e4-04792620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1dbfb4db98e60e4add8309b82e401bc002f3981' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\update_item.tpl',
      1 => 1469714756,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13895036905b6912c61136e4-04792620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6912c62115a6_12239495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6912c62115a6_12239495')) {function content_5b6912c62115a6_12239495($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_trackerfields')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerfields.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['skip_form']->value=='y') {?>
		<form method="post" class="confirm-action" action="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_service(array('controller'=>'tracker','action'=>'update_item','trackerId'=>$_tmp1,'itemId'=>$_tmp2),$_smarty_tpl);?>
">
			<p>
				<?php echo $_smarty_tpl->tpl_vars['skip_form_message']->value;?>

			</p>
			<div class="submit">
				<input type="hidden" name="status" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['status']->value);?>
">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
				<input type="hidden" name="redirect" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['redirect']->value);?>
">
				<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="needToConfirm=false;">
			</div>
		</form>
	<?php } else { ?>
		<form method="post" class="confirm-action" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'update_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="updateItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<div class="submit">
				<input type="hidden" name="itemId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['itemId']->value);?>
">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
				<input type="hidden" name="redirect" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['redirect']->value);?>
">
				<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="needToConfirm=false;">
			</div>
		</form>
		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(".modal.fade.in").one("hide.bs.modal", function () {window.needToConfirm=false;});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
