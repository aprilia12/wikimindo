<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:09:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\duplicate_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11114961805b67ade9450921-75330972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f744c77855514ba894a3e7d017c109cf2728b70d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\duplicate_file_gallery.tpl',
      1 => 1426688494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11114961805b67ade9450921-75330972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_create_file_galleries' => 0,
    'gal_info' => 0,
    'filegals_manager' => 0,
    'description' => 0,
    'all_galleries' => 0,
    'galleryId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ade94bdf47_28333961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ade94bdf47_28333961')) {function content_5b67ade94bdf47_28333961($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['type']!='user') {?>
	<h2>Duplicate File Gallery</h2>
	<form class="form-horizontal" role="form" action="tiki-list_file_gallery.php<?php if (isset($_smarty_tpl->tpl_vars['filegals_manager']->value)&&$_smarty_tpl->tpl_vars['filegals_manager']->value!='') {?>?filegals_manager=<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;
}?>" method="post">
		<div class="form-group">
			<label for="name" class="col-sm-4 control-label">Name</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" size="50" id="name" name="name" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-4 control-label">Description</label>
			<div class="col-sm-8">
				<textarea id="description" name="description" rows="4" class="form-control"><?php if (isset($_smarty_tpl->tpl_vars['description']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);
}?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="galleryId" class="col-sm-4 control-label">File gallery</label>
			<div class="col-sm-8">
				<select id="galleryId" class="form-control" name="galleryId"<?php if (count($_smarty_tpl->tpl_vars['all_galleries']->value)=='0') {?> disabled="disabled"<?php }?>>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<option value="<?php echo $_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==$_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id']) {?>
							selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['label']);?>

						</option>
					<?php endfor; else: ?>
						<option value="">None</option>
					<?php endif; ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="checkbox col-sm-offset-4 col-sm-8">
				<label for="dupCateg">
					<input type="checkbox" id="dupCateg" name="dupCateg">Duplicate categories
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="checkbox col-sm-offset-4 col-sm-8">
				<label for="dupPerms">
					<input type="checkbox" id="dupPerms" name="dupPerms">Duplicate permissions
				</label>
			</div>
		</div>
		<div class="submit text-center">
			<input type="submit" class="btn btn-primary btn-sm" name="duplicate" value="Duplicate">
		</div>
	</form>
<?php }?>
<?php }} ?>
