<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:17:36
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\list_file_gallery_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8456791105b51626016b833-31566867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96cb0d737aba119f2dc7b383393bae97d0ad6b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\list_file_gallery_content.tpl',
      1 => 1504891780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8456791105b51626016b833-31566867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort_arg' => 0,
    'gal_info' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'tiki_p_upload_files' => 0,
    'nbCols' => 0,
    'prefs' => 0,
    'show_thumb' => 0,
    'fgal_listing_conf' => 0,
    'item' => 0,
    'key_name' => 0,
    'sort_mode' => 0,
    'propname' => 0,
    'other_columns' => 0,
    'td_args' => 0,
    'galleryId' => 0,
    'propicon' => 0,
    'link_title' => 0,
    'propval' => 0,
    'other_columns_selected' => 0,
    'files' => 0,
    'fileId' => 0,
    'tmp_prop' => 0,
    'email' => 0,
    'propkey' => 0,
    'nb_over_infos' => 0,
    'prop' => 0,
    'nb_over_share' => 0,
    'checkname' => 0,
    'show_parentName' => 0,
    'absurl' => 0,
    'base_url' => 0,
    'filegals_manager' => 0,
    'insertion_syntax' => 0,
    'query' => 0,
    'desc' => 0,
    'limitdate' => 0,
    'over_share' => 0,
    'share_nb' => 0,
    'share_string' => 0,
    'share_capture' => 0,
    'maxhits' => 0,
    'hits' => 0,
    'link' => 0,
    'other_columns_selected_val' => 0,
    'show_infos' => 0,
    'over_infos' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5162602a4085_47517526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5162602a4085_47517526')) {function content_5b5162602a4085_47517526($_smarty_tpl) {?><?php if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_modifier_tiki_long_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
if (!is_callable('smarty_modifier_tiki_remaining_days_from_now')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_remaining_days_from_now.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['sort_arg']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['sort_arg'] = new Smarty_variable('sort_mode', null, 0);?>
<?php }?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked']!='n'&&($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y')) {?>
				<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
				<th class="checkbox-cell">
					<?php echo smarty_function_select_all(array('checkbox_names'=>'file[],subgal[]'),$_smarty_tpl);?>

				</th>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']=='y')&&(!isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])||$_smarty_tpl->tpl_vars['gal_info']->value['show_action']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
				<?php if (isset($_smarty_tpl->tpl_vars['nbCols']->value)) {?>
					<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable(1, null, 0);?>
				<?php }?>
				<th style="width:1%">&nbsp;

				</th>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['show_parentName'])&&$_smarty_tpl->tpl_vars['gal_info']->value['show_parentName']=='y') {?>
				<th>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gallery<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</th>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['show_thumb']->value)&&$_smarty_tpl->tpl_vars['show_thumb']->value=='y') {?>
				<th>
				</th>
			<?php }?>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['propname']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['item']->value['key'])) {?>
					<?php $_smarty_tpl->tpl_vars['key_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['key'], null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['key_name'] = new Smarty_variable("show_".((string)$_smarty_tpl->tpl_vars['propname']->value), null, 0);?>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])&&$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='o') {?>
					<?php $_smarty_tpl->tpl_vars['show_infos'] = new Smarty_variable('y', null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value==($_smarty_tpl->tpl_vars['propname']->value).('_asc')||$_smarty_tpl->tpl_vars['sort_mode']->value==($_smarty_tpl->tpl_vars['propname']->value).('_desc')) {?>
						<?php $_smarty_tpl->tpl_vars['other_columns_selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['propname']->value, null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'other_columns', null); ob_start(); ?>
							<?php if (isset($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
								<?php echo $_smarty_tpl->tpl_vars['other_columns']->value;?>

							<?php }?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc'))); $_block_repeat=true; echo smarty_block_self_link(array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['propname']->value]['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php }?>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])&&($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='y'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='i'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='a'||$_smarty_tpl->tpl_vars['propname']->value=='name')) {?>
					<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['name'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['link_title'] = new Smarty_variable('', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['td_args'] = new Smarty_variable('', null, 0);?>

					<?php if ($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='i'||$_smarty_tpl->tpl_vars['propname']->value=='type'||($_smarty_tpl->tpl_vars['propname']->value=='lockedby'&&$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='a')) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['item']->value['icon'])) {?>
							<?php $_smarty_tpl->tpl_vars['propicon'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['icon'], null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['name'][0], null, 0);?>
							<?php }?>
						<?php $_smarty_tpl->tpl_vars['link_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['name'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['td_args'] = new Smarty_variable(($_smarty_tpl->tpl_vars['td_args']->value).(' style="width:1%;text-align:center"'), null, 0);?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['propname']->value=='name'&&($_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='a'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='f')) {?>
						<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
						<th<?php echo $_smarty_tpl->tpl_vars['td_args']->value;?>
>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Filename
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</th>
					<?php }?>

					<?php if (!(empty($_smarty_tpl->tpl_vars['galleryId']->value)&&$_smarty_tpl->tpl_vars['propname']->value=='lockedby')&&($_smarty_tpl->tpl_vars['propname']->value!='name'||($_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='a'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='n'))&&($_smarty_tpl->tpl_vars['propname']->value!='description'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']!='n')) {?>
						<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
						<th<?php echo $_smarty_tpl->tpl_vars['td_args']->value;?>
>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php if (!empty($_smarty_tpl->tpl_vars['propicon']->value)) {?>
									<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['propicon']->value,'alt'=>$_smarty_tpl->tpl_vars['link_title']->value),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['propval']->value;?>

								<?php }?>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</th>
					<?php }?>
				<?php }?>
			<?php } ?>

			<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('over_other_columns', null, null); ob_start(); ?>
					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('sort_mode'=>'NULL')); $_block_repeat=true; echo smarty_block_self_link(array('sort_mode'=>'NULL'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No Additional Sort<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('sort_mode'=>'NULL'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<hr><?php }
echo $_smarty_tpl->tpl_vars['other_columns']->value;?>

				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
				<th>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name'])); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name'];?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</th>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']!='y'&&$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']!='y')||(isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])&&$_smarty_tpl->tpl_vars['gal_info']->value['show_action']=='y')||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
				<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
				<th>
					Actions
				</th>
			<?php }?>

			<?php if ((!empty($_smarty_tpl->tpl_vars['other_columns']->value)||!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value))&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
				<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbCols']->value+1, null, 0);?>
				<th style="width:1%">
					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
						<a href='#' <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>Smarty::$_smarty_vars['capture']['over_other_columns']),$_smarty_tpl);?>
 title="Other Sorts">
					<?php }?>
					<?php echo smarty_function_icon(array('name'=>'ranking','alt'=>"Other Sorts",'title'=>''),$_smarty_tpl);?>

					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
						</a>
					<?php }?>
				</th>
			<?php }?>
		</tr>


		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total']);
?>

			<?php if (((!isset($_smarty_tpl->tpl_vars['fileId']->value))||$_smarty_tpl->tpl_vars['fileId']->value==0)||($_smarty_tpl->tpl_vars['fileId']->value==$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'])) {?>
				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']=='y')&&(!isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])||$_smarty_tpl->tpl_vars['gal_info']->value['show_action']=='y')) {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('over_actions', null, null); ob_start(); ?>
						<?php $_smarty_tpl->tpl_vars['file'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']], null, 0);
echo $_smarty_tpl->getSubTemplate ('fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_icon'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'],'menu_text'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']), 0);?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }?>

				<?php $_smarty_tpl->_capture_stack[0][] = array('over_preview', null, null); ob_start();
if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['type'],6,'',true)=='image/') {?><div class='opaque'><img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'],'thumbnail');?>
"></div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->tpl_vars['nb_over_infos'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('over_infos', null, null); ob_start(); ?>
					<table class="table table-condensed"><?php  $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_smarty_tpl->tpl_vars['propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
 $_smarty_tpl->tpl_vars['propname']->value = $_smarty_tpl->tpl_vars['prop']->key;
if (isset($_smarty_tpl->tpl_vars['item']->value['key'])) {
$_smarty_tpl->tpl_vars['propkey'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['key'], null, 0);
} else {
$_smarty_tpl->tpl_vars['propkey'] = new Smarty_variable("show_".((string)$_smarty_tpl->tpl_vars['propname']->value), null, 0);
}
if (!empty($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']][$_smarty_tpl->tpl_vars['propname']->value])) {
if ($_smarty_tpl->tpl_vars['propname']->value=='share'&&isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['share']['data'])) {
$_smarty_tpl->tpl_vars['tmp_prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tmp_prop']->_loop = false;
 $_smarty_tpl->tpl_vars['tmp_propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['share']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tmp_prop']->key => $_smarty_tpl->tpl_vars['tmp_prop']->value) {
$_smarty_tpl->tpl_vars['tmp_prop']->_loop = true;
 $_smarty_tpl->tpl_vars['tmp_propname']->value = $_smarty_tpl->tpl_vars['tmp_prop']->key;
$_smarty_tpl->createLocalArrayVariable('email', null, 0);
$_smarty_tpl->tpl_vars['email']->value[] = $_smarty_tpl->tpl_vars['tmp_prop']->value['email'];
}
if ($_smarty_tpl->tpl_vars['email']->value&&is_array($_smarty_tpl->tpl_vars['email']->value)) {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['email']->value,','), null, 0);
}
} else {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']][$_smarty_tpl->tpl_vars['propname']->value], null, 0);
}
} else {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable('', null, 0);
}
if (isset($_smarty_tpl->tpl_vars['propname']->value)&&($_smarty_tpl->tpl_vars['propname']->value=='created'||$_smarty_tpl->tpl_vars['propname']->value=='lastModif'||$_smarty_tpl->tpl_vars['propname']->value=='lastDownload')) {
if (empty($_smarty_tpl->tpl_vars['propval']->value)) {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable('', null, 0);
} else {
if ($_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate']=='y') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['propval']->value), null, 0);
} else {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['propval']->value), null, 0);
}
}
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='last_user'||$_smarty_tpl->tpl_vars['propname']->value=='author'||$_smarty_tpl->tpl_vars['propname']->value=='creator') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_username($_smarty_tpl->tpl_vars['propval']->value), null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='size') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_kbsize($_smarty_tpl->tpl_vars['propval']->value,true), null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='backlinks'&&isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['nbBacklinks'])) {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['nbBacklinks'], null, 0);
} elseif ($_smarty_tpl->tpl_vars['propname']->value=='description') {
$_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(nl2br($_smarty_tpl->tpl_vars['propval']->value), null, 0);
}
if (isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value])&&($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value]=='a'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value]=='o')) {?><tr><th class="text-right"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['propname']->value]['name']);?>
</th><td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['propval']->value);?>
</td></tr><?php $_smarty_tpl->tpl_vars['nb_over_infos'] = new Smarty_variable($_smarty_tpl->tpl_vars['nb_over_infos']->value+1, null, 0);
}
} ?></table>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php if ($_smarty_tpl->tpl_vars['nb_over_infos']->value>0) {?>
					<?php $_smarty_tpl->tpl_vars['over_infos'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['over_infos'], null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['over_infos'] = new Smarty_variable('', null, 0);?>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['nb_over_share'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('over_share', null, null); ob_start(); ?>
					<?php if (isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['share']['data'])) {
$_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_smarty_tpl->tpl_vars['propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['share']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
 $_smarty_tpl->tpl_vars['propname']->value = $_smarty_tpl->tpl_vars['prop']->key;
?><b><?php echo $_smarty_tpl->tpl_vars['prop']->value['email'];?>
</b>: <?php echo $_smarty_tpl->tpl_vars['prop']->value['visit'];?>
 / <?php echo $_smarty_tpl->tpl_vars['prop']->value['maxhits'];?>
<br><?php $_smarty_tpl->tpl_vars['nb_over_share'] = new Smarty_variable($_smarty_tpl->tpl_vars['nb_over_share']->value+1, null, 0);
}
}?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php if ($_smarty_tpl->tpl_vars['nb_over_share']->value>0) {?>
					<?php $_smarty_tpl->tpl_vars['over_share'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['over_share'], null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['over_share'] = new Smarty_variable('', null, 0);?>
				<?php }?>


			<tr>

				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked']!='n'&&($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y')) {?>
					<td class="checkbox-cell">
						<?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['isgal']==1) {?>
							<?php $_smarty_tpl->tpl_vars['checkname'] = new Smarty_variable('subgal', null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['checkname'] = new Smarty_variable('file', null, 0);?>
						<?php }?>
						<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['checkname']->value;?>
[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id']);?>
"
							<?php if (isset($_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value])&&$_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value]&&in_array($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'],$_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value])) {?>checked="checked"<?php }?>>
					</td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']=='y')&&(!isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])||$_smarty_tpl->tpl_vars['gal_info']->value['show_action']!='n')&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
					<td style="white-space: nowrap">
						<a class="fgalname tips" title="Actions" href="#" onclick="return false;" <?php echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['over_actions']),$_smarty_tpl);?>
 style="padding:0; margin:0; border:0">
							<?php echo smarty_function_icon(array('name'=>'wrench','alt'=>"Actions"),$_smarty_tpl);?>

						</a>
					</td>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['show_parentName']->value)&&$_smarty_tpl->tpl_vars['show_parentName']->value=='y') {?>
					<td>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'],'filegallery');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentName']);?>
</a>
					</td>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['show_thumb']->value)&&$_smarty_tpl->tpl_vars['show_thumb']->value=='y') {?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['isgal']==0) {?>
							<a href="<?php if ($_smarty_tpl->tpl_vars['absurl']->value=='y') {
echo $_smarty_tpl->tpl_vars['base_url']->value;
}?>tiki-download_file.php?fileId=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['fileId'];?>
&display"><img src="<?php if ($_smarty_tpl->tpl_vars['absurl']->value=='y') {
echo $_smarty_tpl->tpl_vars['base_url']->value;
}?>tiki-download_file.php?fileId=<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['fileId'];?>
&thumbnail"></a>
						<?php }?>
					</td>
				<?php }?>

				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['propname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['propname']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<?php if (isset($_smarty_tpl->tpl_vars['item']->value['key'])) {?>
						<?php $_smarty_tpl->tpl_vars['key_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['key'], null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['key_name'] = new Smarty_variable("show_".((string)$_smarty_tpl->tpl_vars['propname']->value), null, 0);?>
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])&&($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='y'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='a'||$_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value]=='i'||$_smarty_tpl->tpl_vars['propname']->value=='name'||(!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)&&$_smarty_tpl->tpl_vars['propname']->value==$_smarty_tpl->tpl_vars['other_columns_selected']->value))) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']][$_smarty_tpl->tpl_vars['propname']->value])) {?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']][$_smarty_tpl->tpl_vars['propname']->value]), null, 0);?>
						<?php }?>
						
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'link', null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['isgal']==1) {
if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {
$_smarty_tpl->tpl_vars['query'] = new Smarty_variable('', null, 0);
} else {
$_smarty_tpl->tpl_vars['query'] = new Smarty_variable(('filegals_manager=').($_smarty_tpl->tpl_vars['filegals_manager']->value), null, 0);
}
if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)) {
if ($_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query'] = new Smarty_variable(($_smarty_tpl->tpl_vars['query']->value).('&'), null, 0);
}
$_smarty_tpl->tpl_vars['query'] = new Smarty_variable(($_smarty_tpl->tpl_vars['query']->value).('insertion_syntax=').('cat').($_smarty_tpl->tpl_vars['insertion_syntax']->value), null, 0);
}?>href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'],'filegallery');
if ($_smarty_tpl->tpl_vars['query']->value) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>?<?php } else { ?>&amp;<?php }
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['query']->value);
}?>"<?php } else {
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['wiki_syntax']);?>
');checkClose();return false;" title="Click here to use the file"<?php } elseif ((isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['p_download_files'])&&$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['p_download_files']=='y')||(!isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['p_download_files'])&&$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_download_files']=='y')) {
if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='podcast'||$_smarty_tpl->tpl_vars['gal_info']->value['type']=='vidcast') {?>href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['fgal_podcast_dir'];
echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['path'];?>
" title="Download"<?php } else { ?>href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'],'file');?>
" title="Download"<?php }
}
if (Smarty::$_smarty_vars['capture']['over_preview']!=''&&(((isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['p_download_files'])&&$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['p_download_files']=='y')||(!isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['p_download_files'])&&$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_download_files']=='y')))) {?> <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>Smarty::$_smarty_vars['capture']['over_preview']),$_smarty_tpl);
}
}?>
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

						
						<?php if ($_smarty_tpl->tpl_vars['propname']->value=='id'||$_smarty_tpl->tpl_vars['propname']->value=='name') {?>
							<?php if ($_smarty_tpl->tpl_vars['propname']->value=='name'&&$_smarty_tpl->tpl_vars['propval']->value==''&&$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='n') {?>
								
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['filename'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable("<a class='fgalname namealias' ".((string)$_smarty_tpl->tpl_vars['link']->value).">".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>", null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable("<a class='fgalname' ".((string)$_smarty_tpl->tpl_vars['link']->value).">".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>", null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['propname']->value=='name'&&$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='n'&&$_smarty_tpl->tpl_vars['gal_info']->value['show_description']!='n') {?>
								<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['max_desc']>0) {?>
									<?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description'],$_smarty_tpl->tpl_vars['gal_info']->value['max_desc'],"...",false)), null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(nl2br($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description']), null, 0);?>
								<?php }?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['propval']->value)."<br><span class=\"description\">".((string)$_smarty_tpl->tpl_vars['desc']->value)."</span>", null, 0);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='created'||$_smarty_tpl->tpl_vars['propname']->value=='lastModif'||$_smarty_tpl->tpl_vars['propname']->value=='lastDownload') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['propval']->value)) {?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable('', null, 0);?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate']=='y') {?>
									<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
								<?php }?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='last_user'||$_smarty_tpl->tpl_vars['propname']->value=='author'||$_smarty_tpl->tpl_vars['propname']->value=='creator') {?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_userlink($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='size') {?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_kbsize($_smarty_tpl->tpl_vars['propval']->value,true), null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='type') {?>
							<?php if ($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['isgal']==1) {?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'propval', null); ob_start();
echo smarty_function_icon(array('name'=>'file-archive-open','class'=>''),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_iconify($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['filename'],$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['type']), null, 0);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='description'&&$_smarty_tpl->tpl_vars['gal_info']->value['max_desc']>0) {?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['propval']->value,$_smarty_tpl->tpl_vars['gal_info']->value['max_desc'],"...",false)), null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='description') {?>
							<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(nl2br($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='lockedby'&&$_smarty_tpl->tpl_vars['propval']->value!='') {?>
							<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_lockedby']=='i'||$_smarty_tpl->tpl_vars['gal_info']->value['show_lockedby']=='a') {?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_username($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'propval', null); ob_start();
echo smarty_function_icon(array('name'=>'lock','class'=>'tips','title'=>(":Locked by- ").($_smarty_tpl->tpl_vars['propval']->value)),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_userlink($_smarty_tpl->tpl_vars['propval']->value), null, 0);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='backlinks') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['nbBacklinks'])) {?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable('', null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['nbBacklinks'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['fid'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable("<a class='ajaxtips' href='list-file_backlinks_ajax.php?fileId=".((string)$_smarty_tpl->tpl_vars['fid']->value)."' data-ajaxtips='list-file_backlinks_ajax.php?fileId=".((string)$_smarty_tpl->tpl_vars['fid']->value)."'>".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>", null, 0);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='deleteAfter') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['deleteAfter'])) {?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable("-", null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['limitdate'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['deleteAfter']+$_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(smarty_modifier_tiki_remaining_days_from_now($_smarty_tpl->tpl_vars['limitdate']->value,$_smarty_tpl->tpl_vars['prefs']->value['short_date_format']), null, 0);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='share') {?>
							<?php if (isset($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['share'])) {?>
								<?php $_smarty_tpl->tpl_vars['share_string'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['share']['string'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['share_nb'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['share']['nb'], null, 0);?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'share_capture', null); ob_start(); ?>
									<a class='fgalname tips' title="Share" href='#' onclick="return false;" <?php echo smarty_function_popup(array('fullhtml'=>1,'text'=>$_smarty_tpl->tpl_vars['over_share']->value,'left'=>true),$_smarty_tpl);?>
 style='cursor:help'><?php echo smarty_function_icon(array('name'=>'group','alt'=>''),$_smarty_tpl);?>
</a> (<?php echo $_smarty_tpl->tpl_vars['share_nb']->value;?>
) <?php echo $_smarty_tpl->tpl_vars['share_string']->value;?>

								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['share_capture']->value, null, 0);?>
							<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value=='hits') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_list_hits']=='y') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_list_ratio_hits']=='y') {?>
									<?php $_smarty_tpl->tpl_vars['hits'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars['maxhits'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['maxhits'], null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['maxhits']->value<=0) {?>
										<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['hits']->value, null, 0);?>
									<?php } else { ?>
										<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['hits']->value)." / <b>".((string)$_smarty_tpl->tpl_vars['maxhits']->value)."</b>", null, 0);?>
									<?php }?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'], null, 0);?>
								<?php }?>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['propname']->value=='name'&&($_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='a'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='f')) {?>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['link']->value!='') {?><a class='fgalname fileLink' fileId='<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['id'];?>
' type='<?php echo $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['type'];?>
' <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php }
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['filename']);
if ($_smarty_tpl->tpl_vars['link']->value!='') {?></a><?php }?>
							</td>
						<?php }?>

						<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)&&$_smarty_tpl->tpl_vars['propname']->value==$_smarty_tpl->tpl_vars['other_columns_selected']->value) {?>
							<?php $_smarty_tpl->tpl_vars['other_columns_selected_val'] = new Smarty_variable($_smarty_tpl->tpl_vars['propval']->value, null, 0);?>
						<?php } else { ?>
							<?php if (!(empty($_smarty_tpl->tpl_vars['galleryId']->value)&&$_smarty_tpl->tpl_vars['propname']->value=='lockedby')&&($_smarty_tpl->tpl_vars['propname']->value!='name'||($_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='a'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']=='n'))&&($_smarty_tpl->tpl_vars['propname']->value!='description'||$_smarty_tpl->tpl_vars['gal_info']->value['show_name']!='n')) {?>
								<td><?php echo $_smarty_tpl->tpl_vars['propval']->value;?>
</td>
							<?php }?>
						<?php }?>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['propval'] = new Smarty_variable(null, null, 0);?>
				<?php } ?>

				<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected_val']->value)) {?>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['other_columns_selected_val']->value;?>

					</td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon']!='y'&&$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']!='y')||(isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])&&$_smarty_tpl->tpl_vars['gal_info']->value['show_action']=='y')||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
					<?php $_smarty_tpl->tpl_vars['file'] = new Smarty_variable($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']], null, 0);?>
					<td><?php echo $_smarty_tpl->getSubTemplate ('fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['other_columns']->value!=''||$_smarty_tpl->tpl_vars['other_columns_selected']->value!='')&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['show_infos']->value=='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['over_infos']->value=='') {?>
								<?php echo smarty_function_icon(array('name'=>'minus','class'=>'tips','title'=>":No information"),$_smarty_tpl);?>

							<?php } else { ?>
								<a class="fgalname tips left" href="#" onclick="return false;" title="Information" <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over_infos']->value,'left'=>true),$_smarty_tpl);?>
 style="cursor:help">
									<?php echo smarty_function_icon(array('name'=>'information','class'=>'','title'=>''),$_smarty_tpl);?>

								</a>
							<?php }?>
						<?php }?>
					</td>
				<?php }?>
			</tr>
		<?php }?>
		<?php endfor; else: ?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['nbCols']->value),$_smarty_tpl);?>

		<?php endif; ?>
		<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked']!='n'&&$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['view']->value!='page') {?>
			<tr>
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['nbCols']->value;?>
">
					<?php echo smarty_function_select_all(array('checkbox_names'=>'file[],subgal[]','label'=>"Select All"),$_smarty_tpl);?>

				</td>
			</tr>
		<?php }?>


	</table>
</div>
<?php }} ?>
