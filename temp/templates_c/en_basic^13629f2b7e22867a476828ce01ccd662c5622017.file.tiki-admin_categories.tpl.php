<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:22:54
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6867894015b63bc7ed6c6c0-59348611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13629f2b7e22867a476828ce01ccd662c5622017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_categories.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6867894015b63bc7ed6c6c0-59348611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentId' => 0,
    'path' => 0,
    'id' => 0,
    'name' => 0,
    'tree' => 0,
    'categId' => 0,
    'categoryName' => 0,
    'tiki_p_admin_categories' => 0,
    'categories' => 0,
    'category' => 0,
    'description' => 0,
    'categ_name' => 0,
    'objects' => 0,
    'sort_mode' => 0,
    'find_objects' => 0,
    'offset' => 0,
    'cant_objects' => 0,
    'prefs' => 0,
    'types' => 0,
    'type' => 0,
    'title' => 0,
    'find' => 0,
    'maximum' => 0,
    'maxRecords' => 0,
    'pages' => 0,
    'articles' => 0,
    'blogs' => 0,
    'directories' => 0,
    'galleries' => 0,
    'file_galleries' => 0,
    'forums' => 0,
    'polls' => 0,
    'faqs' => 0,
    'trackers' => 0,
    'quizzes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bc7ee4eff4_38056588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bc7ee4eff4_38056588')) {function content_5b63bc7ee4eff4_38056588($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Categories",'admpage'=>"category")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Categories",'admpage'=>"category"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Categories",'admpage'=>"category"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-browse_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value),'_type'=>"link",'_icon_name'=>"view",'_text'=>"Browse Categories",'_title'=>"Browse the category system"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-edit_categories.php",'_type'=>"link",'_text'=>"Organize Objects",'_icon_name'=>"structure",'_title'=>"Organize Objects"),$_smarty_tpl);?>

</div>

<div class="tree breadcrumb" id="top">
	<div class="treetitle">
		<a href="tiki-admin_categories.php?parentId=0" class="categpath">Top</a>
		<?php if ($_smarty_tpl->tpl_vars['parentId']->value!=0) {?>
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['path']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
			&nbsp;::&nbsp;
			<a class="categpath" href="tiki-admin_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</a>
		<?php } ?>
		(ID: <?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
)
		<?php }?>
	</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Create/Edit category")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Create/Edit category"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['categId']->value>0) {?>
			<h2>Edit this category: <b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categoryName']->value);?>
</b> </h2>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value)."#editcreate",'_text'=>"Create New",'_title'=>"Create New"),$_smarty_tpl);?>

		<?php } else { ?>
			<h2>Add new category</h2>
		<?php }?>
		<form action="tiki-admin_categories.php" method="post" class="form-horizontal" role="form">
			<input type="hidden" name="categId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categId']->value);?>
">
			<div class="form-group">
				<label class="col-sm-3 control-label" for="parentId">Parent</label>
				<div class="col-sm-9">
					<select name="parentId" id="parentId" class="form-control">
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?><option value="0">Top</option><?php }?>
						<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['categId'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['categId']==$_smarty_tpl->tpl_vars['parentId']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value['categpath']);?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="name">Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="name" id="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categoryName']->value);?>
">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="description">Description</label>
				<div class="col-sm-9">
					<textarea rows="2" class="form-control" name="description" id="description" maxlength=500><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
				<div class="form-group">
					<div class="col-sm-9 col-sm-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="parentPerms" <?php if (empty($_smarty_tpl->tpl_vars['categId']->value)) {?>checked="checked"<?php }?>>
								Apply parent category permissions
							</label>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
					<input type="submit" class="btn btn-primary" name="save" value="Save">
				</div>
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Create/Edit category"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['categId']->value<=0) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Batch upload")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Batch upload"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Batch upload</h2>
			<form action="tiki-admin_categories.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="control-label col-sm-3">CSV File</label>
					<div class="col-sm-9">
						<input type="file" class="form-control" name="csvlist">
						<div class="help-block">
							Sample file content
<pre>
category,description,parent
vegetable,vegetable
potato,,vegetable
</pre>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3 col-sm-offset-3">
						<input type="submit" class="btn btn-primary" name="import" value="Upload">
					</div>
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Batch upload"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['parentId']->value!=0) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Objects in category")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Objects in category"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Objects in category: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categ_name']->value);?>
</h2>
			<?php if ($_smarty_tpl->tpl_vars['objects']->value) {?>
				<form method="get" action="tiki-admin_categories.php">
					<label>Find:<input type="text" name="find"></label>
					<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
					<input type="submit" class="btn btn-default btn-sm" value="Filter" name="search">
					<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
					<input type="hidden" name="find_objects" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find_objects']->value);?>
">
				</form>
			<?php }?>
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>&nbsp;</th>
						<th>
							<a href="tiki-admin_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>#objects">
								Name
							</a>
						</th>
						<th>
							<a href="tiki-admin_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='type_desc') {?>type_asc<?php } else { ?>type_desc<?php }?>#objects">
								Type
							</a>
						</th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objects']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<td class="icon">
								<a href="tiki-admin_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
&amp;removeObject=<?php echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['catObjectId'];?>
&amp;fromCateg=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
" class="tips" title=":Remove from this category">
									<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

								</a>
							</td>
							<td class="text">
								<a href="<?php echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
">
									<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

								</a>
							</td>
							<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						</tr>
					<?php endfor; else: ?>
						<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

					<?php endif; ?>
				</table>
			</div>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_objects']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_objects']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_objects']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Objects in category"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Moving objects between categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Moving objects between categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Moving objects between categories</h2>
			<h4>Current category: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categ_name']->value);?>
</h4><br>
			<form method="get" action="tiki-admin_categories.php" name="move" class="form-horizontal" role="form">
				<fieldset>
					<legend>Perform an action on all objects in the current category:</legend>
					<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="unassign">
							Unassign
						</label>
						<div class="col-sm-6 input-group">
							<input type="submit" class="btn btn-default btn-sm" name="unassign" value="OK">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="toId">
							Move to selected category
						</label>
						<div class="col-sm-6 input-group">
							<select name="toId" id="toId" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['category']->value['name']!==$_smarty_tpl->tpl_vars['categ_name']->value) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['categId'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['categId']==$_smarty_tpl->tpl_vars['parentId']->value) {?>selected="selected"<?php }?>>
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value['categpath']);?>

										</option>
									<?php }?>
								<?php } ?>
							</select>
							<span class="input-group-btn">
								<input type="submit" class="btn btn-default" name="move_to" value="OK">
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="to">
							Copy to selected category
						</label>
						<div class="col-sm-6 input-group">
							<select name="to" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['category']->value['name']!==$_smarty_tpl->tpl_vars['categ_name']->value) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['categId'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['categId']==$_smarty_tpl->tpl_vars['parentId']->value) {?>selected="selected"<?php }?>>
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value['categpath']);?>

										</option>
									<?php }?>
								<?php } ?>
							</select>
							<span class="input-group-btn">
								<input type="submit" class="btn btn-default" name="copy_from" value="OK">
							</span>
						</div>
					</div>
				</fieldset>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Moving objects between categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Add objects to category")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Add objects to category"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Add objects to category: <b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categ_name']->value);?>
</b></h2>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['unified_add_to_categ_search']=='y') {?>
				<form id="add_object_form" method="post" action="<?php echo smarty_function_service(array('controller'=>'category','action'=>'categorize'),$_smarty_tpl);?>
" class="form-horizontal" role="form">
					<label>Types of object
						<select id="add_object_type">
							<option value="">All</option>
							<?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>

								</option>
							<?php } ?>
						</select>
					</label>
					<label>
						Objects
						<input type="text" id="add_object_selector" name="objects">
					</label>
					<div>
						<input type="hidden" name="categId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
						<input type="hidden" name="confirm" value="1">
						<input type="submit" class="btn btn-default btn-sm" value="Add">
						<span id="add_object_message" style="display: none;"></span>
					</div>
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#add_object_form").unbind("submit").submit(function (e) {
	var form = this;
	$.ajax($(form).attr('action'), {
		type: 'POST',
		dataType: 'json',
		data: $(form).serialize(),
		success: function (data) {
			data = (data ? data : {});
			$("option:selected", "#add_object_selector ~ select").remove();
			var $table = $("input[name=sort_mode]").parents("form").next("table");
			oddeven = $("tr:last", $table).hasClass("odd") ? "even" : "odd";
			var $row = $("<tr />").addClass(oddeven);
			$row.append("<td class=\"icon\">" +
						"<a href=\"tiki-admin_categories.php?parentId=" + data.categId +
								"&amp;removeObject=" + data.objects[0].catObjectId + "&amp;fromCateg=" + data.categId + "\">"+
							'<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
'+
						"</a></td>" +
						"<td class=\"text\">"+
							"<a href=\"#\">" + data.objects[0].id + "</a></td>" +
						"<td class=\"text\">" + data.objects[0].type + "</a></td>");
			$table.append($row);
			$("#add_object_message")
				.text(tr("Categorized..."))
				.fadeIn("fast", function () {
					setTimeout(function() {$("#add_object_message").fadeOut("slow");}, 3000);
				});
		},
		error: function (jqxhr) {
			$(form).showError(jqxhr);
		}
	});
	return false;
});
$("#add_object_type").change(function () {
	$("#add_object_selector")
		.object_selector(
			{
				type: $("#add_object_type").val(),
				categories: "not " + $("input[name=categId]", "#add_object_form").val()
			},
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['maxRecords']);?>

		);
}).change();
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>

				<form method="get" action="tiki-admin_categories.php" class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="find_objects">
							Find
						</label>
						<div class="col-sm-6 input-group">
							<input type="text" name="find_objects" id="find_objects" class="form-control">
							<span class="input-group-btn">
								<input type="submit" class="btn btn-default" value="Filter" name="search_objects">
							</span>
						</div>
					</div>
					<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
					<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
					<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
					<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<form action="tiki-admin_categories.php" method="post" class="form-horizontal" role="form">
					<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
					<fieldset>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['pages']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="pageName">
									Page
								</label>
								<div class="col-sm-6 input-group">
									<select name="pageName[]" id="pageName" class="form-control" multiple="multiple" size="5">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<div>
										<input type="submit" class="btn btn-default" name="addpage" value="Add">
									</div>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['articles']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="articleId">
									Article
								</label>
								<div class="col-lg-6 input-group">
									<select name="articleId" id="articleId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['articles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addarticle" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['blogs']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="blogId">
									Blog
								</label>
								<div class="col-sm-6 input-group">
									<select name="blogId" id="blogId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['blogs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['blogId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addblog" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'&&$_smarty_tpl->tpl_vars['directories']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="directoryId">
									Directory
								</label>
								<div class="col-sm-6 input-group">
									<select name="directoryId" id="directoryId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['directories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['directories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['directories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],40,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="adddirectory" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['galleries']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="galleryId">
									Image gallery
								</label>
								<div class="col-sm-6 input-group">
									<select name="galleryId" id="galleryId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addgallery" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['file_galleries']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="file_galleryId">
									File gallery
								</label>
								<div class="col-sm-6 input-group">
									<select name="file_galleryId" id="file_galleryId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['file_galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['file_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['file_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addfilegallery" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['forums']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="forumId">
									Forum
								</label>
								<div class="col-sm-6 input-group">
									<select name="forumId" id="forumId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['forums']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['forumId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['forums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addforum" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=='y'&&$_smarty_tpl->tpl_vars['polls']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="pollId">
									Poll
								</label>
								<div class="col-sm-6 input-group">
									<select name="pollId" id="pollId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['polls']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pollId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addpoll" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y'&&$_smarty_tpl->tpl_vars['faqs']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="faqId">
									FAQ
								</label>
								<div class="col-sm-6 input-group">
									<select name="faqId" id="faqId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['faqs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['faqs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['faqId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['faqs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addfaq" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['trackers']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="trackerId">
									Tracker
								</label>
								<div class="col-sm-6 input-group">
									<select name="trackerId" id="trackerId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trackers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['trackerId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['trackers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addtracker" value="Add">
									</span>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=='y'&&$_smarty_tpl->tpl_vars['quizzes']->value) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="quizId">
									Quiz
								</label>
								<div class="col-sm-6 input-group">
									<select name="quizId" id="quizId" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['quizzes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['quizzes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['quizId']);?>
">
												<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['quizzes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],80,"(...)",true));?>

											</option>
										<?php endfor; endif; ?>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default" name="addquiz" value="Add">
									</span>
								</div>
							</div>
						<?php }?>
					</fieldset>
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Add objects to category"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
