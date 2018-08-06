<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:35:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\list_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19894222665b63bf58d4ef43-22755780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a57eb84d4d209d8fecae76ba2e00570fa502ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\list_file_gallery.tpl',
      1 => 1505204980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19894222665b63bf58d4ef43-22755780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'tiki_p_list_file_galleries' => 0,
    'fgal_options' => 0,
    'tiki_p_view_fgal_explorer' => 0,
    'gallery_path' => 0,
    'tiki_p_view_fgal_path' => 0,
    'prefs' => 0,
    'view' => 0,
    'maxRecords' => 0,
    'cant' => 0,
    'offset' => 0,
    'filegals_manager' => 0,
    'gal_info' => 0,
    'find' => 0,
    'show_details' => 0,
    'sort_mode' => 0,
    'file_info' => 0,
    'page' => 0,
    'files' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'tiki_p_upload_files' => 0,
    'tiki_p_assign_perm_file_gallery' => 0,
    'tiki_p_remove_files' => 0,
    'movesel_x' => 0,
    'all_galleries' => 0,
    'galleryId' => 0,
    'user' => 0,
    'perms' => 0,
    'perm' => 0,
    'groups' => 0,
    'groupName' => 0,
    'reindex_file_id' => 0,
    'maxWidth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bf58ddb960_40288785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bf58ddb960_40288785')) {function content_5b63bf58ddb960_40288785($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_reindex_file_pixel')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.reindex_file_pixel.php';
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y')||(!empty($_smarty_tpl->tpl_vars['gallery_path']->value)&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value=='y')) {?>
	<div class="fgal_top_bar form-group">
		<?php if (isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
				<div id="fgalexplorer_close" style="float:left; vertical-align:middle; display:<?php if (!isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])||$_SESSION['tiki_cookie_jar']['show_fgalexplorer']=='y') {?>none<?php } else { ?>inline<?php }?>;">
					<a href="#"
						class="tips"
						title=":Show Tree"
						onclick="flip('fgalexplorer','');hide('fgalexplorer_close',false);show('fgalexplorer_open',false);return false;">
						<?php echo smarty_function_icon(array('name'=>'file-archive'),$_smarty_tpl);?>

					</a>
				</div>
				<div id="fgalexplorer_open" style="float:left; vertical-align:middle; display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])&&$_SESSION['tiki_cookie_jar']['show_fgalexplorer']!='y') {?>none<?php } else { ?>inline<?php }?>;">
					<a href="#"
						class="tips"
						title=":Hide Tree"
						onclick="flip('fgalexplorer','');hide('fgalexplorer_open',false);show('fgalexplorer_close',false);return false;">
						<?php echo smarty_function_icon(array('name'=>'file-archive-open'),$_smarty_tpl);?>

					</a>
				</div>
			<?php } else { ?>
				<div style="float:left; vertical-align:middle">
					<?php if (isset($_REQUEST['show_fgalexplorer'])&&$_REQUEST['show_fgalexplorer']=='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n')); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gallery_path']->value!=''&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value=='y') {?>
			<div class="gallerypath" style="vertical-align:middle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['gallery_path']->value;?>
</div>
		<?php }?>
	</div>
<?php }?>
<div class="row">
	<?php if (isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y'&&$_smarty_tpl->tpl_vars['view']->value!='page') {?>
		<div class="col-sm-3 fgalexplorer" id="fgalexplorer" style="<?php if ((isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])&&$_SESSION['tiki_cookie_jar']['show_fgalexplorer']!='y')&&(!isset($_REQUEST['show_fgalexplorer'])||$_REQUEST['show_fgalexplorer']!='y')) {?>display:none;<?php }?>">
			<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

		</div>
		<div class="col-sm-9 fgallisting explorerHidden">
	<?php } else { ?>
		<div class="col-sm-12 fgallisting explorerDisplayed">
	<?php }?>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['maxRecords']->value>20&&$_smarty_tpl->tpl_vars['cant']->value>$_smarty_tpl->tpl_vars['maxRecords']->value) {?>
			<div class="clearboth" style="margin-bottom: 3px;">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		<?php }?>
		<form name="fgalformid" id="fgalform" method="post" action="<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {
echo smarty_function_query(array('_type'=>'relative','filegals_manager'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value)),$_smarty_tpl);
} else {
echo smarty_function_query(array('_type'=>'relative'),$_smarty_tpl);
}?>" enctype="multipart/form-data">
			<input type="hidden" name="galleryId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['galleryId']);?>
">
			<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<?php if (!empty($_smarty_tpl->tpl_vars['show_details']->value)) {?><input type="hidden" name="show_details" value="<?php echo $_smarty_tpl->tpl_vars['show_details']->value;?>
"><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_asynchronous_indexing']=='y') {?><input type="hidden" name="fast" value="y"><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['sort_mode']->value)) {?><input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
"><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['file_info']->value)) {?><input type="hidden" name="fileId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['file_info']->value['fileId']);?>
"><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?><input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
"><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?><input type="hidden" name="view" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['view']->value);?>
"><?php }?>
			<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable(0, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['other_columns'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['other_columns_selected'] = new Smarty_variable('', null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value=='browse'||$_smarty_tpl->tpl_vars['view']->value=='page') {?>
				<?php $_smarty_tpl->tpl_vars['show_infos'] = new Smarty_variable('y', null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value=='page') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('fgal_view_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate ('browse_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['show_infos'] = new Smarty_variable('n', null, 0);?>
				<?php echo $_smarty_tpl->getSubTemplate ('list_file_gallery_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value&&$_smarty_tpl->tpl_vars['gal_info']->value['show_checked']!='n'&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_checked']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y')&&($_smarty_tpl->tpl_vars['prefs']->value['fgal_show_thumbactions']=='y'||$_smarty_tpl->tpl_vars['show_details']->value=='y'||$_smarty_tpl->tpl_vars['view']->value!='browse')&&$_smarty_tpl->tpl_vars['view']->value!='page')) {?>
				<div id="sel">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_files']->value=='y'||!isset($_smarty_tpl->tpl_vars['file_info']->value)||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option']=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y') {?>
						<div class="input-group col-sm-10">
							<select name="fgal_actions" class="form-control">
								<option value="" selected="selected">
									Select action to perform with checked...
								</option>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y') {?>
									<option value="permsel_x">
										Assign permissions to file galleries
									</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_files']->value=='y') {?>
									<option value="delsel_x">
										Delete
									</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option']=='y') {?>
									<option value="zipsel_x">
										Download zip version
									</option>
								<?php }?>
								<?php if (!isset($_smarty_tpl->tpl_vars['file_info']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_files']->value=='y') {?>
										<option value="movesel_x">
											Move
										</option>
									<?php }?>
									<option value="refresh_metadata_x">
										Refresh metadata
									</option>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y') {?>
										<option value="defaultsel_x">
											Reset to default list view settings
										</option>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>
										<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
									<?php }?>
								<?php }?>
							</select>
							<span class="input-group-btn">
								<button class="btn btn-primary" form="fgalform" type="submit">
									OK
								</button>
							</span>
						</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['movesel_x']->value)&&!isset($_smarty_tpl->tpl_vars['file_info']->value)) {?>
						<div class="panel panel-primary">
							<div class="panel-heading">
								Move selected file or gallery
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="moveto" class="col-sm-2">
										Move to:
									</label>
									<div class="col-sm-8">
										<select name="moveto" class="form-control">
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
												<?php if ($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id']!=$_smarty_tpl->tpl_vars['galleryId']->value&&$_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['perms']['tiki_p_upload_files']=='y'&&($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['public']=='y'||$_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['perms']['tiki_p_admin_file_galleries']=='y')) {?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
">
														<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['label']);?>

													</option>
												<?php }?>
											<?php endfor; endif; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<input type='submit' class="btn btn-primary" form="fgalform" name='movesel' value="Move">
							</div>
						</div>
					<?php }?>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['perms']->value)) {?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							Assign file gallery permissions to groups
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-6">
									<span class="help-block">
										Permissions
									</span>
									<select name="perms[]" multiple="multiple" size="12" class="form-control">
										<?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['perm']->value['permName']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['perm']->value['permName']);?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-6">
									<span class="help-block">
										Groups
									</span>
									<select name="groups[]" multiple="multiple" size="12" class="form-control">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['name'] = 'grp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total']);
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']);?>
" <?php if ($_smarty_tpl->tpl_vars['groupName']->value==$_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']) {?>selected="selected"<?php }?>>
												<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']);?>

											</option>
										<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<input class="btn btn-primary" type="submit" name="permsel" value="Assign">
						</div>
					</div>
				<?php }?>
				<br style="clear:both"/>
			<?php }?>
		</form>
		<?php echo smarty_function_reindex_file_pixel(array('id'=>$_smarty_tpl->tpl_vars['reindex_file_id']->value),$_smarty_tpl);?>
<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['view']->value=='page') {?>
				tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</div>
</div>
<?php }} ?>
