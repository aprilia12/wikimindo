<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 10:51:10
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20980151865b64177e3b4e55-50994835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3954aca7138996fa2b2bddc1bc556ca512ca802f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-plugins.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20980151865b64177e3b4e55-50994835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_list' => 0,
    'prefs' => 0,
    'js' => 0,
    'plugin' => 0,
    'libeg' => 0,
    'liend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b64177e493905_57214964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b64177e493905_57214964')) {function content_5b64177e493905_57214964($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_listfilter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.listfilter.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_modifier_substring')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.substring.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins")); $_block_repeat=true; echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	For security, grant the <strong>tiki_p_plugin_approve</strong> permission only to trusted user groups. Use the <a href="tiki-admin.php?page=textarea">Admin: Text Area page</a> to deactivate potentially risky plugins.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<p>
This page lists the plugins that require validation, the first time they are encountered. Each plugin contains a unique <em>signature</em> that is preserved.</p>
<p>When you upgrade from an old version, you may need to reparse all the pages. <?php echo smarty_function_button(array('href'=>"tiki-plugins.php?refresh=y",'_text'=>"Refresh"),$_smarty_tpl);?>
</p>

<?php if ($_smarty_tpl->tpl_vars['plugin_list']->value) {?>
	<p>If a plugin is no longer in use (for example, it has been removed from the wiki page), use <strong>Clear</strong> to remove it from this list. The plugin will automatically be added if it is encountered.</p>
	<p>Plugins can be individually previewed, approved, or rejected from the particular location that contains the plugin. For security, you should review each plugin to ensure it is safe to approve.</p>

	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<form method="post" action="#">

		<?php echo smarty_function_listfilter(array('selectors'=>'#plugins_list tr.odd,#plugins_list tr.even'),$_smarty_tpl);?>

		<div <?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>class="table-responsive"<?php }?>>
			<table class="table table-hover table-striped" id="plugins_list">
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>'clear[]'),$_smarty_tpl);?>
</th>
					<th>Plugin </th>
					<th>Location </th>
					<th>Added By </th>
					<th></th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
					<tr>
						<td class="checkbox-cell"><input type="checkbox" name="clear[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['fingerprint']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['fingerprint']);?>
"></td>
						<td class="text"><label for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['fingerprint']);?>
"><strong><?php echo smarty_modifier_replace(smarty_modifier_escape(smarty_modifier_substring($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'],0,20)),"-","</strong> <br>Signature: ");?>
...</label></td>
						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType']=='wiki page') {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['last_objectId']),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['last_objectId']),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wiki page: <a href="%0#%2" title="View this page.">%1</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['last_objectId']),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php } else { ?>
								Unknown
							<?php }?>
						</td>
						<td class="text"><?php if ($_smarty_tpl->tpl_vars['plugin']->value['added_by']) {
echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['plugin']->value['added_by']);
} else { ?>Unknown<?php }?></td>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('plugin_actions', null, null); ob_start(); ?>
								<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-plugins.php?approveone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="Approve"><?php echo smarty_function_icon(array('name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Approve"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-plugins.php?clearone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="Clear"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType']=='wiki page') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page');?>
#<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="View this page"><?php echo smarty_function_icon(array('name'=>'textfile','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View this page"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
								<a
									class="tips"
									title="Actions" href="#"
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['plugin_actions']),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['plugin_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>

		<p>
			<label for="submit_mult">Perform action with checked:</label>
			<select name="submit_mult" id="submit_mult" onchange="this.form.submit();">
				<option value="" selected="selected">...</option>
				<option value="clear" >Clear</option>
				<option value="approve">Approve</option>
			</select>
			or
			<input type="submit" class="btn btn-default btn-sm" name="approveall" value="Approve all pending plugins">
		</p>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Using <strong>Approve</strong> or <strong>Approve All</strong> will approve and activate the pending plugins. Use this feature <strong>only</strong> if you have verified that all the pending plugins are safe.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php echo '<script'; ?>
 type='text/javascript'>
			<!--
			// Fake js to allow the use of the <noscript> tag (so non-js-users can still submit)
			//-->
		<?php echo '</script'; ?>
>
		<noscript>
			<input type="submit" class="btn btn-default btn-sm" value="OK">
		</noscript>
	</form>
<?php } else { ?>
	<p>No plugins pending approval.</p>
<?php }?>
<?php }} ?>
