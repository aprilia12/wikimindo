<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\prefs\shared-flags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6948216915b69105acb1ff7-28574633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5478c561d7e9ebe25015ab508f4a2a5c036a8200' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\prefs\\shared-flags.tpl',
      1 => 1515423018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6948216915b69105acb1ff7-28574633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'icon' => 0,
    'pref_filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105acd5285_00692025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105acd5285_00692025')) {function content_5b69105acd5285_00692025($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.simplewiki.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
?><?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']) {?>
	<?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable("help", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['description']) {?>
	<?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable("information", null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['icon']->value)) {?>
	<a <?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']) {?> href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['helpurl']);?>
" target="tikihelp"<?php }?>
	 	class="tikihelp" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['description']);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']&&$_smarty_tpl->tpl_vars['p']->value['type']!='multiselector') {?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['warning']) {?>
	<a href="#" target="tikihelp" class="tikihelp text-warning" title="Warning: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['warning']);?>
">
		<?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['modified']&&$_smarty_tpl->tpl_vars['p']->value['available']) {?>
	<span class="pref-reset-wrapper">
		<input class="pref-reset system" type="checkbox" name="lm_reset[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" style="display:none" data-preference-default="<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['default'])) {
echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['p']->value['default'],$_smarty_tpl->tpl_vars['p']->value['separator']));
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['default']);
}?>">
		<a href="#" class="pref-reset-undo tips" title="Reset|Reset to default value"><?php echo smarty_function_icon(array('name'=>"undo"),$_smarty_tpl);?>
</a>
		<a href="#" class="pref-reset-redo tips" title="Restore|Restore current value" style="display:none"><?php echo smarty_function_icon(array('name'=>"repeat"),$_smarty_tpl);?>
</a>
	</span>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['popup_html'])) {?>
	<a class="tips" title="Actions" href="#" style="padding:0; margin:0; border:0" <?php echo smarty_function_popup(array('fullhtml'=>1,'center'=>"true",'text'=>$_smarty_tpl->tpl_vars['p']->value['popup_html']),$_smarty_tpl);?>
>
		<?php echo smarty_function_icon(array('name'=>"actions"),$_smarty_tpl);?>

	</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['voting_html'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['p']->value['voting_html'];?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['p']->value['pages'];?>


<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']&&in_array('advanced',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
	<label class="label label-warning tips" title=":Change your preference filter settings in order to view advanced preferences by default">
		advanced
	</label>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['experimental']['selected']&&in_array('experimental',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
	<label class="label label-danger tips" title=":Change your preference filter settings in order to view experimental preferences by default">
		experimental
	</label>
<?php }?>
<?php }} ?>
