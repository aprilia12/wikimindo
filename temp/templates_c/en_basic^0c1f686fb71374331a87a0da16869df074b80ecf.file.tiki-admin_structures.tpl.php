<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:43:15
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_structures.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5849117475b6d5023d49743-41049791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1f686fb71374331a87a0da16869df074b80ecf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_structures.tpl',
      1 => 1505910864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5849117475b6d5023d49743-41049791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'just_created' => 0,
    'tiki_p_edit_structures' => 0,
    'just_created_name' => 0,
    'askremove' => 0,
    'removename' => 0,
    'tiki_p_remove' => 0,
    'alert_in_st' => 0,
    'thest' => 0,
    'alert_categorized' => 0,
    'thecat' => 0,
    'alert_to_remove_cats' => 0,
    'alert_to_remove_extra_cats' => 0,
    'theextracat' => 0,
    'error' => 0,
    'channels' => 0,
    'find' => 0,
    'prefs' => 0,
    'js' => 0,
    'libeg' => 0,
    'liend' => 0,
    'pdf_export' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d5023e10af0_44735265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d5023e10af0_44735265')) {function content_5b6d5023e10af0_44735265($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_function_lock')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.lock.php';
if (!is_callable('smarty_function_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.sefurl.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Structures")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Structures"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Structures<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Structures"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
	<div class="t_navbar margin-bottom-md">
		<a role="link" href="tiki-import_xml_zip.php" class="btn btn-link" title="XML Zip Import">
			<?php echo smarty_function_icon(array('name'=>"zip"),$_smarty_tpl);?>
 XML Zip Import
		</a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['just_created']->value!='n'&&$_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"Feedback")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Structure created: <a class='alert-link' href='tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['just_created']->value;?>
'><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['just_created_name']->value);?>
</a> <a class='alert-link tips' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['just_created_name']->value,"url");?>
' title=":View Page"><?php echo smarty_function_icon(array('name'=>"view"),$_smarty_tpl);?>
</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['askremove']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'confirm','title'=>"Please Confirm")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'confirm','title'=>"Please Confirm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		You will remove structure: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['removename']->value);?>
<br>
		<?php echo smarty_function_button(array('href'=>"?rremove=".((string)$_smarty_tpl->tpl_vars['remove']->value)."&amp;page=".((string)$_smarty_tpl->tpl_vars['removename']->value),'_text'=>"Destroy the structure leaving the wiki pages"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"?rremovex=".((string)$_smarty_tpl->tpl_vars['remove']->value)."&amp;page=".((string)$_smarty_tpl->tpl_vars['removename']->value),'_text'=>"Destroy the structure and remove the pages"),$_smarty_tpl);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'confirm','title'=>"Please Confirm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_in_st']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Note that the following pages are also part of another structure. Make sure that access permissions (if any) do not conflict:
		<?php  $_smarty_tpl->tpl_vars['thest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_in_st']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thest']->key => $_smarty_tpl->tpl_vars['thest']->value) {
$_smarty_tpl->tpl_vars['thest']->_loop = true;
?>
			&nbsp;&nbsp;<a class='tablename' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thest']->value,"url");?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['thest']->value;?>
</a>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_categorized']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>"Feedback")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Feedback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The following pages have automatically been categorized with the same categories as the structure:
		<?php  $_smarty_tpl->tpl_vars['thecat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thecat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_categorized']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thecat']->key => $_smarty_tpl->tpl_vars['thecat']->value) {
$_smarty_tpl->tpl_vars['thecat']->_loop = true;
?>
			&nbsp;&nbsp;<a class='tablename' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thecat']->value,"url");?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['thecat']->value;?>
</a>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Feedback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_to_remove_cats']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The following pages have categories but the structure has none. You may wish to uncategorize them to be consistent:
		<?php  $_smarty_tpl->tpl_vars['thecat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thecat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_to_remove_cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thecat']->key => $_smarty_tpl->tpl_vars['thecat']->value) {
$_smarty_tpl->tpl_vars['thecat']->_loop = true;
?>
			&nbsp;&nbsp;<a class='tablename' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thecat']->value,"url");?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['thecat']->value;?>
</a>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_to_remove_extra_cats']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The following pages are in categories that the structure is not in. You may wish to recategorize them in order to be consistent:
		<?php  $_smarty_tpl->tpl_vars['theextracat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theextracat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_to_remove_extra_cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theextracat']->key => $_smarty_tpl->tpl_vars['theextracat']->value) {
$_smarty_tpl->tpl_vars['theextracat']->_loop = true;
?>
			&nbsp;&nbsp;<a class='tablename' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theextracat']->value,"url");?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['theextracat']->value;?>
</a>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['error']->value);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Existing Structures")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Existing Structures"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Existing Structures</h2>
		<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
			<div class="clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_languages'=>'y','find_show_categories'=>'y','find_show_num_rows'=>'y'), 0);?>

			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<form class="form" role="form">
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
				<table class="table table-striped table-hover">
					<tr>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?><th width="15"><?php echo smarty_function_select_all(array('checkbox_names'=>'action[]'),$_smarty_tpl);?>
</th><?php }?>
						<th>Structure</th>
						<th></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
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
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
								<td class="checkbox-cell">
									<input type="checkbox" name="action[]" value='<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
' style="border:1px;font-size:80%;">
								</td>
							<?php }?>
							<td class="text">
								<a class="tips" href="tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
" title=":View Structure">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']);?>

									<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias']) {?>
										(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias']);?>
)
									<?php }?>
								</a>
							</td>
							<td class="action">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lock_wiki_structures']=='y') {?>
									<?php echo smarty_function_lock(array('type'=>'wiki structure','object'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']),$_smarty_tpl);?>

								<?php }?>

								<?php $_smarty_tpl->_capture_stack[0][] = array('admin_structure_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
"><?php echo smarty_function_icon(array('name'=>"information",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View structure"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href='<?php echo smarty_function_sefurl(array('page'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],'structure'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],'page_ref_id'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id']),$_smarty_tpl);?>
'><?php echo smarty_function_icon(array('name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View page"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['admin_structure']=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','objectType'=>'wiki page','type'=>'wiki structure','id'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],'title'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['admin_structure']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_structures.php?export=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"export",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Export pages"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['pdf_export']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-print_multi_pages.php?printstructures=%255B%2522<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
%2522%255D&amp;display=pdf&amp;print=pdf"><?php echo smarty_function_icon(array('name'=>'pdf','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"PDF"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['edit_structure']=='y'||$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['admin_structure']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_structures.php?export_tree=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"structure",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Dump tree"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['admin_structure']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_structures.php?remove=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_create_webhelp']=='y'&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['edit_structure']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-create_webhelp.php?struct=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"help",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Create WebHelp"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_create_webhelp']=='y'&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['webhelp']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="whelp/<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'];?>
/index.html"><?php echo smarty_function_icon(array('name'=>"documentation",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View WebHelp"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['admin_structure']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_structures.php?zip=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"zip",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"XML Zip"),$_smarty_tpl);?>
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
									title="Actions"
									href="#"
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['admin_structure_actions']),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['admin_structure_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
						</tr>
					<?php endfor; else: ?>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);
} else {
echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);
}?>
					<?php endif; ?>
				</table>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
				<div class="form-group">
					<label for="batchaction" class="control-label">Perform action with selected</label>
					<div class="input-group col-sm-6">
						<select name="batchaction" class="form-control">
							<option value="">...</option>
							<option value="delete">Delete</option>
							<option value="delete_with_page">Delete with the pages</option>
						</select>
						<div class="input-group-btn">
							<input type="submit" class="btn btn-primary" name="act" value="Ok">
						</div>
					</div>
				</div>
			</form>
		<?php }?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Existing Structures"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Create Structure")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Create Structure"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Create Structure</h2>
			<form class="form-horizontal" action="tiki-admin_structures.php" method="post">
				<div class="form-group">
					<label class="control-label col-md-3" for="name">Structure</label>
					<div class="col-md-9">
						<input type="text" name="name" id="name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="alias">Alias</label>
					<div class="col-md-9">
						<input type="text" name="alias" id="alias" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="tree">Tree</label>
					<div class="col-md-9">
						<textarea rows="5" cols="60" id="tree" name="tree" class="form-control"></textarea>
						<div class="help-block">Use single spaces to indent structure levels</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lock_wiki_structures']=='y') {?>
					<div class="form-group">
						<label class="col-sm-3 control-label">Lock</label>
						<div class="col-sm-9">
							<?php echo smarty_function_lock(array('type'=>'wiki structure','object'=>0),$_smarty_tpl);?>

						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
				<div class="form-group">
					<div class="submit col-md-9 col-md-push-3">
						<input type="submit" class="btn btn-primary" value="Create New Structure" name="create">
					</div>
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Create Structure"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
