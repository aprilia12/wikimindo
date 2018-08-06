<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:40:55
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\trackerinput\layout_flat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20583810375b67b5377a5070-33334357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'facfb473616e2562437bcfa4883b74a1f1c129f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\trackerinput\\layout_flat.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20583810375b67b5377a5070-33334357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'status_types' => 0,
    'fields' => 0,
    'field' => 0,
    'item' => 0,
    'jscal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b5377bc773_71499834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b5377bc773_71499834')) {function content_5b67b5377bc773_71499834($_smarty_tpl) {?><?php if (!is_callable('smarty_function_trackerinput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerinput.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_js_insert_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.js_insert_icon.php';
?><?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
	<div class="form-group">
		<label for="trackerinput_status" class="control-label">Status</label>
		<div id="trackerinput_status">
			<?php echo $_smarty_tpl->getSubTemplate ('trackerinput/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status_types'=>$_smarty_tpl->tpl_vars['status_types']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value), 0);?>

		</div>
	</div>
<?php }?>
<?php $_smarty_tpl->tpl_vars['jscal'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
	<div class="form-group">
		<label for="trackerinput_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['fieldId']);?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='h') {?> h<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['level'];
}?>">
			<?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['field']->value['name']));?>

			<?php if ($_smarty_tpl->tpl_vars['field']->value['isMandatory']=='y') {?>
				<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
			<?php }?>
		</label>
		<div id="trackerinput_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['fieldId']);?>
">
			<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['field']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

			<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['description'])&&$_smarty_tpl->tpl_vars['field']->value['type']!='S') {?>
				<?php if ($_smarty_tpl->tpl_vars['field']->value['descriptionIsParsed']=='y') {?>
					<div class="description help-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<?php } else { ?>
					<div class="description help-block"><?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['field']->value['description']));?>
</div>
				<?php }?>
			<?php }?>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='j') {
$_smarty_tpl->tpl_vars['jscal'] = new Smarty_variable(1, null, 0);
}?>
<?php } ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('label').click(function() {$('input, select, textarea', '#'+$(this).attr('for')).focus();});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['jscal']->value) {?>
	<?php echo smarty_function_js_insert_icon(array('type'=>"jscalendar"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
