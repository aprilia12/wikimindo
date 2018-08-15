<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:18:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_mailin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14014012905b6d12004a4354-46674293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a158749c97ad7ad5c96730db533fe19cf6772a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_mailin.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
    '04eb080dfba4c157d660c6666afcd65186aec485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1517200330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14014012905b6d12004a4354-46674293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
    'icon_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d12005b9915_83437295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d12005b9915_83437295')) {function content_5b6d12005b9915_83437295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container<?php if (isset($_SESSION['fullscreen'])&&$_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<div class="page-header" id="page-header">
		<?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

		<div class="topbar row" id="topbar">
			<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

		</div>
	</div>
<?php }?>

	<div class="row row-middle" id="row-middle">
		<?php if ((zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n')&&(zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n')) {?>
			<div class="col-md-12 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webmail")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webmail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail-in accounts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webmail"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
				
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<table class="table table-striped table-hover">
		<tr>
			<th>Account</th>
			<th>Allow</th>
			<th>Attach</th>
			<th>HTML</th>
			<th>Leave</th>
			<th></th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
			<tr>
				<td>
					<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['account']->value['account']);?>
</strong>
					<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailin_types']->value[$_smarty_tpl->tpl_vars['account']->value['type']]['name']);?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['active']!='y') {?>
						<span class="label label-warning">Disabled</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['categoryId']) {?>
						<div class="text-muted">
							Auto-category:
							<?php echo smarty_function_object_link(array('type'=>'category','id'=>$_smarty_tpl->tpl_vars['account']->value['categoryId']),$_smarty_tpl);?>

						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['namespace']) {?>
						<div class="text-muted">
							Auto-namespace:
							<?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['account']->value['namespace']),$_smarty_tpl);?>

						</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['anonymous']=='y') {?><span class="label label-info">Anonymous</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['admin']=='y') {?><span class="label label-warning">Administrator</span><?php }?>
				</td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['attachments']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['save_html']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['leave_email']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>

				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('mailin_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'remove_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['mailin_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['mailin_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account'),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Account</a>
	<?php echo smarty_function_button(array('_icon_name'=>"cog",'_text'=>"Admin Mail-in Routes",'_type'=>"link",'href'=>"tiki-admin_mailin_routes.php"),$_smarty_tpl);?>


	<h2>Check Mail-in accounts</h2>
	<form class="form-horizontal" action="tiki-admin_mailin.php" method="post">
		<div class="form-group">
			<div class="col-md-offset-3 col-md-9">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="mailin_autocheck" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheck']=='y') {?>checked<?php }?>>
						Check automatically
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="mailin_autocheckFreq" class="control-label col-md-3">Frequency</label>
			<div class="col-md-3">
				<input type="text" name="mailin_autocheckFreq" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheckFreq']);?>
" class="form-control">
				<div class="help-block">
					minutes
				</div>
			</div>
		</div>
		<div class="submit col-md-offset-3 col-md-9">
			<input type="submit" name="set_auto" value="Set" class="btn btn-primary">
			<a class="btn btn-link" href="tiki-mailin.php">Check Manually Now</a>
		</div>
	</form>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-12 text-right side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>

			<div class="col-md-9 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webmail")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webmail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail-in accounts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webmail"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
				
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<table class="table table-striped table-hover">
		<tr>
			<th>Account</th>
			<th>Allow</th>
			<th>Attach</th>
			<th>HTML</th>
			<th>Leave</th>
			<th></th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
			<tr>
				<td>
					<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['account']->value['account']);?>
</strong>
					<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailin_types']->value[$_smarty_tpl->tpl_vars['account']->value['type']]['name']);?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['active']!='y') {?>
						<span class="label label-warning">Disabled</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['categoryId']) {?>
						<div class="text-muted">
							Auto-category:
							<?php echo smarty_function_object_link(array('type'=>'category','id'=>$_smarty_tpl->tpl_vars['account']->value['categoryId']),$_smarty_tpl);?>

						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['namespace']) {?>
						<div class="text-muted">
							Auto-namespace:
							<?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['account']->value['namespace']),$_smarty_tpl);?>

						</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['anonymous']=='y') {?><span class="label label-info">Anonymous</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['admin']=='y') {?><span class="label label-warning">Administrator</span><?php }?>
				</td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['attachments']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['save_html']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['leave_email']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>

				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('mailin_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'remove_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['mailin_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['mailin_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account'),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Account</a>
	<?php echo smarty_function_button(array('_icon_name'=>"cog",'_text'=>"Admin Mail-in Routes",'_type'=>"link",'href'=>"tiki-admin_mailin_routes.php"),$_smarty_tpl);?>


	<h2>Check Mail-in accounts</h2>
	<form class="form-horizontal" action="tiki-admin_mailin.php" method="post">
		<div class="form-group">
			<div class="col-md-offset-3 col-md-9">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="mailin_autocheck" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheck']=='y') {?>checked<?php }?>>
						Check automatically
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="mailin_autocheckFreq" class="control-label col-md-3">Frequency</label>
			<div class="col-md-3">
				<input type="text" name="mailin_autocheckFreq" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheckFreq']);?>
" class="form-control">
				<div class="help-block">
					minutes
				</div>
			</div>
		</div>
		<div class="submit col-md-offset-3 col-md-9">
			<input type="submit" name="set_auto" value="Set" class="btn btn-primary">
			<a class="btn btn-link" href="tiki-mailin.php">Check Manually Now</a>
		</div>
	</form>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php } elseif (zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-12 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-9 col-md-push-3 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webmail")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webmail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail-in accounts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webmail"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
				
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<table class="table table-striped table-hover">
		<tr>
			<th>Account</th>
			<th>Allow</th>
			<th>Attach</th>
			<th>HTML</th>
			<th>Leave</th>
			<th></th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
			<tr>
				<td>
					<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['account']->value['account']);?>
</strong>
					<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailin_types']->value[$_smarty_tpl->tpl_vars['account']->value['type']]['name']);?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['active']!='y') {?>
						<span class="label label-warning">Disabled</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['categoryId']) {?>
						<div class="text-muted">
							Auto-category:
							<?php echo smarty_function_object_link(array('type'=>'category','id'=>$_smarty_tpl->tpl_vars['account']->value['categoryId']),$_smarty_tpl);?>

						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['namespace']) {?>
						<div class="text-muted">
							Auto-namespace:
							<?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['account']->value['namespace']),$_smarty_tpl);?>

						</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['anonymous']=='y') {?><span class="label label-info">Anonymous</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['admin']=='y') {?><span class="label label-warning">Administrator</span><?php }?>
				</td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['attachments']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['save_html']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['leave_email']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>

				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('mailin_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'remove_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['mailin_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['mailin_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account'),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Account</a>
	<?php echo smarty_function_button(array('_icon_name'=>"cog",'_text'=>"Admin Mail-in Routes",'_type'=>"link",'href'=>"tiki-admin_mailin_routes.php"),$_smarty_tpl);?>


	<h2>Check Mail-in accounts</h2>
	<form class="form-horizontal" action="tiki-admin_mailin.php" method="post">
		<div class="form-group">
			<div class="col-md-offset-3 col-md-9">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="mailin_autocheck" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheck']=='y') {?>checked<?php }?>>
						Check automatically
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="mailin_autocheckFreq" class="control-label col-md-3">Frequency</label>
			<div class="col-md-3">
				<input type="text" name="mailin_autocheckFreq" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheckFreq']);?>
" class="form-control">
				<div class="help-block">
					minutes
				</div>
			</div>
		</div>
		<div class="submit col-md-offset-3 col-md-9">
			<input type="submit" name="set_auto" value="Set" class="btn btn-primary">
			<a class="btn btn-link" href="tiki-mailin.php">Check Manually Now</a>
		</div>
	</form>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-3 col-md-pull-9" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-6 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-6 text-right side-col-toggle<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']!='user') {?> col-md-offset-6<?php }?>">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col-md-8 col-md-push-2 col1" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				
				
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webmail")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webmail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail-in accounts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webmail"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
				
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<table class="table table-striped table-hover">
		<tr>
			<th>Account</th>
			<th>Allow</th>
			<th>Attach</th>
			<th>HTML</th>
			<th>Leave</th>
			<th></th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
			<tr>
				<td>
					<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['account']->value['account']);?>
</strong>
					<div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailin_types']->value[$_smarty_tpl->tpl_vars['account']->value['type']]['name']);?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['active']!='y') {?>
						<span class="label label-warning">Disabled</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['categoryId']) {?>
						<div class="text-muted">
							Auto-category:
							<?php echo smarty_function_object_link(array('type'=>'category','id'=>$_smarty_tpl->tpl_vars['account']->value['categoryId']),$_smarty_tpl);?>

						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['namespace']) {?>
						<div class="text-muted">
							Auto-namespace:
							<?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['account']->value['namespace']),$_smarty_tpl);?>

						</div>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['anonymous']=='y') {?><span class="label label-info">Anonymous</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account']->value['admin']=='y') {?><span class="label label-warning">Administrator</span><?php }?>
				</td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['attachments']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['save_html']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['account']->value['leave_email']=='y') {
echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);
}?></td>

				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('mailin_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'remove_account','accountId'=>$_smarty_tpl->tpl_vars['account']->value['accountId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['mailin_actions']),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['mailin_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'mailin','action'=>'replace_account'),$_smarty_tpl);?>
" class="btn btn-default"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Account</a>
	<?php echo smarty_function_button(array('_icon_name'=>"cog",'_text'=>"Admin Mail-in Routes",'_type'=>"link",'href'=>"tiki-admin_mailin_routes.php"),$_smarty_tpl);?>


	<h2>Check Mail-in accounts</h2>
	<form class="form-horizontal" action="tiki-admin_mailin.php" method="post">
		<div class="form-group">
			<div class="col-md-offset-3 col-md-9">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="mailin_autocheck" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheck']=='y') {?>checked<?php }?>>
						Check automatically
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="mailin_autocheckFreq" class="control-label col-md-3">Frequency</label>
			<div class="col-md-3">
				<input type="text" name="mailin_autocheckFreq" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['mailin_autocheckFreq']);?>
" class="form-control">
				<div class="help-block">
					minutes
				</div>
			</div>
		</div>
		<div class="submit col-md-offset-3 col-md-9">
			<input type="submit" name="set_auto" value="Set" class="btn btn-primary">
			<a class="btn btn-link" href="tiki-mailin.php">Check Manually Now</a>
		</div>
	</form>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-md-2 col-md-pull-8" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
			<div class="col-md-2" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>

<?php if (!isset($_SESSION['fullscreen'])||$_SESSION['fullscreen']!='y') {?>
	<footer class="footer" id="footer">
		<div class="footer_liner">
			<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

		</div>
	</footer>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
