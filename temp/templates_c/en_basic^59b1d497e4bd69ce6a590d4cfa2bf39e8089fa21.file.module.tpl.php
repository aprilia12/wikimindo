<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:44:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16258016825b513e89e7f2f3-54586825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b1d497e4bd69ce6a590d4cfa2bf39e8089fa21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\module.tpl',
      1 => 1490329620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16258016825b513e89e7f2f3-54586825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_position' => 0,
    'module_ord' => 0,
    'module_name' => 0,
    'module_params' => 0,
    'module_nobox' => 0,
    'moduleId' => 0,
    'module_type' => 0,
    'tpl_module_style' => 0,
    'module_decorations' => 0,
    'module_notitle' => 0,
    'module_title' => 0,
    'module_flip' => 0,
    'prefs' => 0,
    'module_display' => 0,
    'module_content' => 0,
    'module_error' => 0,
    'user' => 0,
    'current_location' => 0,
    'mpchar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513e89ec1988_89144565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513e89ec1988_89144565')) {function content_5b513e89ec1988_89144565($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>

<?php if (!isset($_smarty_tpl->tpl_vars['module_position']->value)) {
$_smarty_tpl->tpl_vars['module_position'] = new Smarty_variable('', null, 0);
}?>
<?php if (!isset($_smarty_tpl->tpl_vars['module_ord']->value)) {
$_smarty_tpl->tpl_vars['module_ord'] = new Smarty_variable('', null, 0);
}?>
<?php $_smarty_tpl->_capture_stack[0][] = array('name', null, null); ob_start();
echo smarty_modifier_escape(((smarty_modifier_replace($_smarty_tpl->tpl_vars['module_name']->value,"+","_")).($_smarty_tpl->tpl_vars['module_position']->value)).($_smarty_tpl->tpl_vars['module_ord']->value));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])) {?><div class="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['topclass'];?>
"><?php }?>

<?php if ($_smarty_tpl->tpl_vars['module_nobox']->value!='y') {?>
<?php if (!isset($_smarty_tpl->tpl_vars['moduleId']->value)) {
$_smarty_tpl->tpl_vars['moduleId'] = new Smarty_variable(' ', null, 0);
}?>
<div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
"
	class="panel panel-default box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;
if ($_smarty_tpl->tpl_vars['module_type']->value=='cssmenu') {?> cssmenubox<?php }?> module"<?php if (!empty($_smarty_tpl->tpl_vars['tpl_module_style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['module_decorations']->value!='n') {?>
		<div class="panel-heading">
			<?php if (($_smarty_tpl->tpl_vars['module_notitle']->value!='y'&&!empty($_smarty_tpl->tpl_vars['module_title']->value))||($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n')||$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y') {?>
				<h3 class="panel-title clearfix" <?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['bgcolor'])) {?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['bgcolor'];?>
;"<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['module_notitle']->value!='y'&&!empty($_smarty_tpl->tpl_vars['module_title']->value)) {?>
						<span class="moduletitle"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n') {?>
						<span class="moduleflip" id="moduleflip-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
">
							<a title="Toggle module contents" class="flipmodtitle close"
								 href="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');">
								<?php echo smarty_function_icon(array('id'=>("icnmod-").(Smarty::$_smarty_vars['capture']['name']),'class'=>"flipmodimage",'name'=>"bars",'alt'=>"[Toggle]"),$_smarty_tpl);?>

							</a>
						</span>
					<?php }?>
				</h3>
			<?php }?>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['module_notitle']->value!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n') {?>
	<h3 class="panel-title"
		 ondblclick="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])) {?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
		<?php } else { ?>
		<h3 class="panel-title"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])) {?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n') {?>
				<span class="moduleflip" id="moduleflip-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
">
				<a title="Toggle module contents" class="flipmodtitle"
					 href="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');">
					<?php echo smarty_function_icon(array('id'=>("icnmod-").(Smarty::$_smarty_vars['capture']['name']),'class'=>"flipmodimage",'name'=>"module",'alt'=>"[Toggle]"),$_smarty_tpl);?>

				</a>
			</span>
			<?php }?>
		</h3>
		<?php }?>
		<div id="mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
"
			 style="display: <?php if (!isset($_smarty_tpl->tpl_vars['module_display']->value)||$_smarty_tpl->tpl_vars['module_display']->value) {?>block<?php } else { ?>none<?php }?>;<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];?>
"
			 class="clearfix panel-body<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];
}?>">
			<?php } else { ?>
			<div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];
echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
"
				 class="module<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];
}?> box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
				<div id="mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
" class="">
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['module_error']->value) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo $_smarty_tpl->tpl_vars['module_error']->value;?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['module_nobox']->value!='y') {?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_modulecontrols']=='y') {?>
					<div class="panel-footer">
						<span class="modcontrols">
							<a class="tips" title=":Move module up"
								 href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['current_location']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mpchar']->value);?>
mc_up=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>"up",'alt'=>"Up"),$_smarty_tpl);?>

							</a>
							<a class="tips" title=":Move module down"
								 href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['current_location']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mpchar']->value);?>
mc_down=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>"down",'alt'=>"Down"),$_smarty_tpl);?>

							</a>
							<a class="tips" title=":Move module to opposite side"
								 href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['current_location']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mpchar']->value);?>
mc_move=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>"move",'alt'=>"Move to opposite side"),$_smarty_tpl);?>

							</a>
							<a class="tips" title=":Unassign this module"
								 href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['current_location']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mpchar']->value);?>
mc_unassign=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"
								 onclick='return confirmTheLink(this,"Are you sure you want to unassign this module?")'>
								<?php echo smarty_function_icon(array('name'=>"remove",'alt'=>"Unassign"),$_smarty_tpl);?>

							</a>
						</span>
					</div>
				<?php }?>
			</div>
			<?php } else { ?>
		</div>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])) {?></div><?php }?>
<?php }} ?>
