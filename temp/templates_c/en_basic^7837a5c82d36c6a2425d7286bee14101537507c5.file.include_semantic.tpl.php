<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:03:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_semantic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7569926825b553783f20b39-17084499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7837a5c82d36c6a2425d7286bee14101537507c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_semantic.tpl',
      1 => 1499855984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7569926825b553783f20b39-17084499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tokens' => 0,
    'token' => 0,
    'selected_token' => 0,
    'save_message' => 0,
    'selected_detail' => 0,
    'element' => 0,
    'new_tokens' => 0,
    'rename' => 0,
    'link_lists' => 0,
    'links' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55378408a561_07183790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55378408a561_07183790')) {function content_5b55378408a561_07183790($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><form class="form-horizontal" action="tiki-admin.php?page=semantic" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_semantic','visible'=>"always"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_backlinks'),$_smarty_tpl);?>

	</fieldset>
</form>
<div class="row">
	<div class="col-sm-6">
		<h3>Known types</h3>
		<form method="post" action="<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI']);?>
">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


			<table class="table">
				<tr>
					<th></th>
					<th>Token</th>
					<th>Label</th>
					<th>Invert</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['token']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['token']->key => $_smarty_tpl->tpl_vars['token']->value) {
$_smarty_tpl->tpl_vars['token']->_loop = true;
?>
				<tr>
					<td><input type="checkbox" name="select[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value['token']);?>
"/></td>
					<td><a class="timeout" href="<?php echo $_SERVER['PHP_SELF'];?>
?page=semantic&token=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value['token']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value['token']);?>
</a></td>
					<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value['label']);?>
</td>
					<td><a class="timeout" href="<?php echo $_SERVER['PHP_SELF'];?>
?page=semantic&token=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value['invert_token']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value['invert_token']]['label']);?>
</a></td>
				</tr>
				<?php } ?>
			</table>
			<p>
				<input type="submit" class="btn btn-default btn-sm timeout" name="list" value="Show Usage">
				<input type="submit" class="btn btn-warning btn-sm timeout" name="remove" value="Delete">
				<input type="submit" class="btn btn-warning btn-sm timeout" name="removeclean" value="Delete &amp; Unreference">
			</p>
		</form>

		<?php if ($_smarty_tpl->tpl_vars['selected_token']->value) {?>
			<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['save_message']->value);?>
</div>
				<div>
					<label for="token">Token :</label>
					<input id="token" type="text" name="newName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_token']->value);?>
">
				</div>
				<div>
					<label for="label">Label :</label>
					<input id="label" type="text" name="label" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_detail']->value['label']);?>
">
				</div>
				<div>
					<label for="invert">Invert Relation :</label>
					<select id="invert" name="invert">
						<option value="">--Self--</option>
						<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['element']->value['token']);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_detail']->value['invert_token']==$_smarty_tpl->tpl_vars['element']->value['token']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['element']->value['label']);?>
</option>
						<?php } ?>
					</select>
				</div>
				<div>
					<input type="hidden" name="token" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['selected_token']->value);?>
">
					<input type="submit" class="btn btn-default btn-sm timeout" name="save" value="Save">
				</div>
			</form>
		<?php }?>
	</div>
	<div class="col-sm-6">
		<legend>New types</legend>
		<table class="table">
			<tr>
				<th>Token</th>
				<th>Actions</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['token']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['token']->key => $_smarty_tpl->tpl_vars['token']->value) {
$_smarty_tpl->tpl_vars['token']->_loop = true;
?>
				<tr>
					<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
</td>
					<td>
						<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
							<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

							<div>
								<input type="hidden" name="select[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
">
								<input type="hidden" name="token" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);?>
">
								<input type="submit" name="list" value="Show Usage" class="btn btn-default timeout">
								<input type="submit" name="create" value="Create" class="btn btn-default timeout">
								<input type="submit" name="rename" value="Fix" class="btn btn-default timeout">
								<input type="submit" name="clean" value="Remove" class="btn btn-default timeout">
							</div>
						</form>
					</td>
				</tr>
			<?php } ?>
		</table>
		<?php if ($_smarty_tpl->tpl_vars['rename']->value) {?>
			<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<div>
					<label for="token">Token :</label>
					<input id="token" type="text" name="token" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rename']->value);?>
">
				</div>
				<div>
					<input type="hidden" name="oldName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rename']->value);?>
">
					<input type="submit" class="btn btn-default btn-sm timeout" name="save" value="Fix">
				</div>
			</form>
		<?php }?>
	</div>
</div>

<?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['link_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['links']->key;
?>
	<h2><?php if ($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value]) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value]['label']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value);
}?></h2>
	<?php if (count($_smarty_tpl->tpl_vars['links']->value)>0) {?>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<li><a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value['fromPage']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value['fromPage']);?>
</a> (link to <a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value['toPage']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value['toPage']);?>
</a>)</li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<p>No occurences found.</p>
	<?php }?>
<?php } ?>
<?php }} ?>
