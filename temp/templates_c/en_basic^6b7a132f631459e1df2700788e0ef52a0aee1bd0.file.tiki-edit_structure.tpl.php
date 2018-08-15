<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:42:57
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit_structure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7148919135b6d501152f003-22948233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7a132f631459e1df2700788e0ef52a0aee1bd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit_structure.tpl',
      1 => 1505910326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7148919135b6d501152f003-22948233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'structure_name' => 0,
    'remove' => 0,
    'removePageName' => 0,
    'page_removable' => 0,
    'structure_id' => 0,
    'removepage' => 0,
    'alert_exists' => 0,
    'alert_in_st' => 0,
    'thest' => 0,
    'alert_categorized' => 0,
    'thecat' => 0,
    'alert_to_remove_cats' => 0,
    'alert_to_remove_extra_cats' => 0,
    'theextracat' => 0,
    'page_ref_id' => 0,
    'editable' => 0,
    'topPageAlias' => 0,
    'prefs' => 0,
    'tiki_p_admin_structures' => 0,
    'pageName' => 0,
    'tiki_p_watch_structure' => 0,
    'page_info' => 0,
    'title' => 0,
    'page' => 0,
    'nodelist' => 0,
    'find_objects' => 0,
    'find_categId' => 0,
    'categories' => 0,
    'catix' => 0,
    'listpages' => 0,
    'all_editable' => 0,
    'structures' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d50115d6fb2_06565318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d50115d6fb2_06565318')) {function content_5b6d50115d6fb2_06565318($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_lock')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.lock.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('url'=>"tiki-edit_structure.php?page_ref_id=".((string)$_smarty_tpl->tpl_vars['page_ref_id']->value))); $_block_repeat=true; echo smarty_block_title(array('url'=>"tiki-edit_structure.php?page_ref_id=".((string)$_smarty_tpl->tpl_vars['page_ref_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Structure: <?php echo $_smarty_tpl->tpl_vars['structure_name']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('url'=>"tiki-edit_structure.php?page_ref_id=".((string)$_smarty_tpl->tpl_vars['page_ref_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-admin_structures.php",'_text'=>"Structures"),$_smarty_tpl);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['remove']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		You will remove '<?php echo $_smarty_tpl->tpl_vars['removePageName']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['page_removable']->value=='y') {?>and its subpages from the structure, now you have two options:<?php } else { ?>and its subpages from the structure<?php }?>
		<div class="text-center">
			<a class="btn btn-warning btn-sm" href="tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['structure_id']->value;?>
&amp;rremove=<?php echo $_smarty_tpl->tpl_vars['removepage']->value;?>
&amp;page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['removePageName']->value,"url");?>
"><?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
 Remove from structure</a>
			<?php if ($_smarty_tpl->tpl_vars['page_removable']->value=='y') {?>
				<a class="btn btn-warning btn-sm" href="tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['structure_id']->value;?>
&amp;sremove=<?php echo $_smarty_tpl->tpl_vars['removepage']->value;?>
&amp;page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['removePageName']->value,"url");?>
"><?php echo smarty_function_icon(array('name'=>"delete"),$_smarty_tpl);?>
 Remove from structure and remove page too</a>
			<?php }?>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['alert_exists']->value=='y') {?>
	<strong>The page already exists. The page that has been added to the structure is the existing one.</strong>
	<br/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_in_st']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_categorized']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The following pages added have automatically been categorized with the same categories as the structure:
		<?php  $_smarty_tpl->tpl_vars['thecat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thecat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_categorized']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thecat']->key => $_smarty_tpl->tpl_vars['thecat']->value) {
$_smarty_tpl->tpl_vars['thecat']->_loop = true;
?>
			&nbsp;&nbsp;<a class='tablename' href='tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thecat']->value,"url");?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['thecat']->value;?>
</a>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_to_remove_cats']->value)>0) {?>
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
	<br/>
	<br/>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['alert_to_remove_extra_cats']->value)>0) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="admintoclevel" id="topnode_<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
	<h2>Structure Layout</h2>
	<?php if ($_smarty_tpl->tpl_vars['editable']->value=='y') {?>
		<form action="tiki-edit_structure.php?page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
" method="post" class="form-inline" role="form" style="display: inline-block">
			<div class="form-group">
				<label for="pageAlias" class="control-label">Alias:</label>
				<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['structure_id']->value;?>
">
				<div class="input-group">
					<input type="text" class="form-control input-sm" name="pageAlias" id="pageAlias" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topPageAlias']->value);?>
">
					<div class="input-group-btn">
						<input type="submit" class="btn btn-primary btn-sm" name="create" value="Update">
					</div>
				</div>
			</div>
		</form>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lock_wiki_structures']=='y') {?>
			<?php echo smarty_function_lock(array('type'=>'wiki structure','object'=>$_smarty_tpl->tpl_vars['structure_name']->value),$_smarty_tpl);?>

		<?php }?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>'tiki-index.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'structure'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":View",'_noauto'=>"y")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>'tiki-index.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'structure'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":View",'_noauto'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_icon(array('name'=>"view"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>'tiki-index.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'structure'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":View",'_noauto'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_structures']->value=='y') {?>
			<?php echo smarty_function_permission_link(array('mode'=>'icon','objectType'=>'wiki page','type'=>'wiki structure','id'=>$_smarty_tpl->tpl_vars['pageName']->value,'title'=>$_smarty_tpl->tpl_vars['pageName']->value),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_watch_structure']->value=='y') {?>
			<?php if (!$_smarty_tpl->tpl_vars['page_info']->value['watching']) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'add','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":Monitor the structure")); $_block_repeat=true; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'add','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":Monitor the structure"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'add','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>"tips",'_title'=>":Monitor the structure"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'remove','_class'=>"tips",'_title'=>":Stop Monitoring the structure")); $_block_repeat=true; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'remove','_class'=>"tips",'_title'=>":Stop Monitoring the structure"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_object'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'watch_action'=>'remove','_class'=>"tips",'_title'=>":Stop Monitoring the structure"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['editable']->value=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['page_info']->value['flag']=='L') {?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'title', null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['page_info']->value['user'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['page_info']->value['user']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
locked by %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['page_info']->value['user']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo smarty_function_icon(array('name'=>'lock','alt'=>"Locked",'title'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>'tiki-editpage.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>'tips','_title'=>':Edit page')); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>'tiki-editpage.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>'tips','_title'=>':Edit page'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>'tiki-editpage.php','page'=>$_smarty_tpl->tpl_vars['structure_name']->value,'_class'=>'tips','_title'=>':Edit page'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if (empty($_smarty_tpl->tpl_vars['page']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_onclick'=>"addNewPage(this);return false;",'_class'=>"tips",'_title'=>":Add new child page")); $_block_repeat=true; echo smarty_block_self_link(array('_onclick'=>"addNewPage(this);return false;",'_class'=>"tips",'_title'=>":Add new child page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_onclick'=>"addNewPage(this);return false;",'_class'=>"tips",'_title'=>":Add new child page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
	<?php }?>
</div>
<div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page_ref_id'=>$_smarty_tpl->tpl_vars['structure_id']->value)); $_block_repeat=true; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['structure_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['structure_id']->value==$_smarty_tpl->tpl_vars['page_ref_id']->value) {?><strong><?php }?>
		<span class="lead">Top</span>
		<?php if ($_smarty_tpl->tpl_vars['structure_id']->value==$_smarty_tpl->tpl_vars['page_ref_id']->value) {?></strong><?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page_ref_id'=>$_smarty_tpl->tpl_vars['structure_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php echo smarty_function_button(array('_text'=>"Save",'_style'=>"display:none;",'_class'=>"save_structure",'_type'=>"primary",'_ajax'=>"n",'_auto_args'=>"save_structure,page_ref_id"),$_smarty_tpl);?>

<div class="structure-container">
	<?php echo $_smarty_tpl->tpl_vars['nodelist']->value;?>

</div>
<?php echo smarty_function_button(array('_text'=>"Save",'_style'=>"display:none;",'_class'=>"save_structure",'_type'=>"primary",'_ajax'=>"n",'_auto_args'=>"save_structure,page_ref_id"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['editable']->value=='y') {?>
	<form action="tiki-edit_structure.php" method="post" class="form-inline" role="form">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Add pages</strong> <small>Use an existing page by dragging it into the structure above</small>
			</div>
			<div class="panel-body">
				<div>
					<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
					<div class="form-group">
						<label class="sr-only" for="find_objects">Find</label>
						<div class="input-group">
							<input type="text" name="find_objects" id="find_objects" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_objects']->value);?>
" class="form-control input-sm" placeholder="Find...">
							<div class="input-group-btn">
								<input type="submit" class="btn btn-default btn-sm" value="Filter" name="search_objects">
							</div>
							<?php echo smarty_function_autocomplete(array('element'=>'#find_objects','type'=>'pagename'),$_smarty_tpl);?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
						<div class="form-group">
							<select name="categId" class="form-control input-sm">
								<option value='' <?php if ($_smarty_tpl->tpl_vars['find_categId']->value=='') {?>selected="selected"<?php }?>>any category</option>
								<?php  $_smarty_tpl->tpl_vars['catix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catix']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catix']->key => $_smarty_tpl->tpl_vars['catix']->value) {
$_smarty_tpl->tpl_vars['catix']->_loop = true;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['catix']->value['categId']);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['find_categId']->value)&&$_smarty_tpl->tpl_vars['find_categId']->value==$_smarty_tpl->tpl_vars['catix']->value['categId']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['catix']->value['categpath'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<?php } ?>
							</select>
						</div>
					<?php }?>
				</div>
				<ul id="page_list_container">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
						<li class="ui-state-default">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['pageName']);?>

						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		</div>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y'&&$_smarty_tpl->tpl_vars['all_editable']->value=='y') {?>
		<form action="tiki-edit_structure.php" method="post">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Categorize all pages in structure together</strong>
				</div>
				<div class="panel-body">
					<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
					<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<div class="panel-footer text-center">
					<input type="submit" class="btn btn-primary btn-sm" name="recategorize" value="Update">
					<input type="checkbox" name="cat_override" >Remove existing categories from ALL pages before recategorizing
				</div>
			</div>
		</form>
	<?php }?>
	<div id="move_dialog" style="display: none;">
		<form action="tiki-edit_structure.php" method="post">
			<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
			<div class="clearfix" style="margin-bottom: 1em;">
				<label for="structure_id">Move to another structure:</label>
				<select name="structure_id" id="structure_id"<?php if (count($_smarty_tpl->tpl_vars['structures']->value)=='1') {?> disabled="disabled"<?php }?>>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['structures']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<?php if ($_smarty_tpl->tpl_vars['structures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id']!=$_smarty_tpl->tpl_vars['structure_id']->value) {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['structures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['structures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'];?>
</option>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['structures']->value)=='1') {?>
							<option value="">None</option>
						<?php }?>
					<?php endfor; endif; ?>
				</select>
			</div>
			<label class="pull-left" for="begin1">at the beginning</label>
			<div class="pull-left"><input type="radio" id="begin1" name="begin" value="1" checked="checked" <?php if (count($_smarty_tpl->tpl_vars['structures']->value)=='1') {?> disabled="disabled"<?php }?>></div>
			<label class="pull-left" for="begin2">at the end</label>
			<div class="pull-left"><input type="radio" id="begin2" name="begin" value="0" <?php if (count($_smarty_tpl->tpl_vars['structures']->value)=='1') {?>disabled="disabled"<?php }?>></div>
			<hr>
			<div class="pull-left input_submit_container">
				<input type="submit" class="btn btn-primary btn-sm" name="move_to" value="Move" <?php if (count($_smarty_tpl->tpl_vars['structures']->value)=='1') {?> disabled="disabled"<?php }?>>
			</div>
		</form>
	</div>
	<div id="newpage_dialog" style="display: none;">
		<form action="tiki-edit_structure.php" method="post" class="form-horizontal">
			<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
			<div class="form-group">
				<label class="col-sm-3 control-label">Create Page</label>
				<div class="col-sm-7">
					<input type="text" name="name" id="name" class="form-control">
					<?php echo smarty_function_autocomplete(array('element'=>'#name','type'=>'pagename'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-7">
					<input type="submit" class="btn btn-primary btn-sm" name="create" value="Update">
				</div>
			</div>
		</form>
	</div>
<?php }?>
<?php }} ?>
