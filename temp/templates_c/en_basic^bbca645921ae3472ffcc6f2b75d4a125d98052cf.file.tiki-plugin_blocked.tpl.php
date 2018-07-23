<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 03:42:41
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-plugin_blocked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374679245b55329143e4c2-30215531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbca645921ae3472ffcc6f2b75d4a125d98052cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-plugin_blocked.tpl',
      1 => 1427637138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374679245b55329143e4c2-30215531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_fingerprint' => 0,
    'plugin_status' => 0,
    'plugin_details' => 0,
    'plugin_preview' => 0,
    'plugin_approve' => 0,
    'plugin_name' => 0,
    'plugin_index' => 0,
    'plugin_args' => 0,
    'arg' => 0,
    'val' => 0,
    'plugin_body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5532915113f7_24863679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5532915113f7_24863679')) {function content_5b5532915113f7_24863679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><div class="panel panel-danger" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_fingerprint']->value);?>
">
	<div class="panel-heading">
		<?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['plugin_status']->value=='rejected') {?>
			Plugin execution was denied
		<?php } else { ?>
			Plugin execution pending approval
		<?php }?>
	</div>
	<div class="panel-body">
		<?php if ($_smarty_tpl->tpl_vars['plugin_status']->value=='rejected') {?>
			<p>After argument validation by an editor, the execution of this plugin was denied. This plugin will eventually be removed or corrected.</p>
		<?php } else { ?>
			<p>This plugin was recently added or modified. Until an editor of the site validates the parameters, execution will not be possible. <?php if ($_smarty_tpl->tpl_vars['plugin_details']->value) {?>You are allowed to:<?php }?></p>
			<?php if ($_smarty_tpl->tpl_vars['plugin_details']->value) {?>
				<ul>
					<li>View arguments</li>
					<?php if ($_smarty_tpl->tpl_vars['plugin_preview']->value) {?><li>Execute the plugin in preview mode (may be dangerous)</li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['plugin_approve']->value) {?><li>Approve the plugin for public execution</li><?php }?>
				</ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['plugin_details']->value) {?>
				<?php $_smarty_tpl->tpl_vars['thisplugin_name'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_name']->value), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['thisplugin_index'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_index']->value), null, 0);?>
				<?php echo smarty_function_button(array('href'=>"javascript:void(0)",'_onclick'=>"toggle('sec-".((string)$_smarty_tpl->tpl_vars['thisplugin_name']->value)."-".((string)$_smarty_tpl->tpl_vars['thisplugin_index']->value)."')",'_class'=>"text-right",'_text'=>"View Details"),$_smarty_tpl);?>

				<div id="sec-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_name']->value);?>
-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_index']->value);?>
" style="display:none">
					<div><h3>Details: <?php echo smarty_modifier_escape(mb_strtoupper($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8'));?>
</h3></div>
					<?php if (count($_smarty_tpl->tpl_vars['plugin_args']->value)>0) {?>
						<table>
							<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin_args']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['arg']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
							<tr>
								<th><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['arg']->value);?>
</th>
								<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
</td>
							</tr>
							<?php } ?>
						</table>
					<?php } else { ?>
						<p>This plugin does not contain any arguments.</p>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['plugin_body']->value) {?>
						<div class="panel panel-warning">
							<div class="panel-heading">
								Body
							</div>
							<div class="panel-body">
								<textarea rows="10" style="width: 99%"><?php echo $_smarty_tpl->tpl_vars['plugin_body']->value;?>
</textarea>
							</div>
						</div>
					<?php } else { ?>
						<p>This plugin's body is empty.</p>
					<?php }?>
					<form method="post" action="<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI']);?>
">
						<p>
							<input type="hidden" name="plugin_fingerprint" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin_fingerprint']->value);?>
">
							<?php if ($_smarty_tpl->tpl_vars['plugin_preview']->value) {?>
								<input type="submit" class="btn btn-default btn-sm" name="plugin_preview" value="Preview">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['plugin_approve']->value) {?>
								<input type="submit" class="btn btn-default btn-sm" name="plugin_accept" value="Approve">
								<input type="submit" class="btn btn-warning btn-sm" name="plugin_reject" value="Reject">
							<?php }?>
						</p>
					</form>
				</div>
			<?php }?>
		<?php }?>
	</div>
</div>
<?php }} ?>
