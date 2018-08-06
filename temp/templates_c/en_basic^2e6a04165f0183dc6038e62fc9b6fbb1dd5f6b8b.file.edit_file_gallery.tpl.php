<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 05:01:35
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\edit_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5781220665b63c58fb9dca5-84162292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6a04165f0183dc6038e62fc9b6fbb1dd5f6b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\edit_file_gallery.tpl',
      1 => 1504779870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5781220665b63c58fb9dca5-84162292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_create_file_galleries' => 0,
    'user' => 0,
    'gal_info' => 0,
    'tiki_p_userfiles' => 0,
    'individual' => 0,
    'galleryId' => 0,
    'name' => 0,
    'filegals_manager' => 0,
    'treeRootId' => 0,
    'prefs' => 0,
    'templateId' => 0,
    'all_templates' => 0,
    'item' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'parentId' => 0,
    'all_galleries' => 0,
    'tiki_p_admin' => 0,
    'creator' => 0,
    'groupforAlertList' => 0,
    'k' => 0,
    'i' => 0,
    'showeachuser' => 0,
    'options_sortorder' => 0,
    'sortorder' => 0,
    'key' => 0,
    'sortdirection' => 0,
    'max_desc' => 0,
    'maxRows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c58fca76e0_16574130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c58fca76e0_16574130')) {function content_5b63c58fca76e0_16574130($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_user_selector')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.user_selector.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_quotabar')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.quotabar.php';
?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'||(!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']&&$_smarty_tpl->tpl_vars['gal_info']->value['type']=='user'&&$_smarty_tpl->tpl_vars['tiki_p_userfiles']->value=='y')) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['individual']->value)&&$_smarty_tpl->tpl_vars['individual']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Permissions")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			There are individual permissions set for this file gallery. <?php echo smarty_function_permission_link(array('mode'=>'icon','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['galleryId']->value,'title'=>$_smarty_tpl->tpl_vars['name']->value,'label'=>"Manage Permissions"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
" method="post">
		<input type="hidden" name="galleryId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value);?>
">
		<input type="hidden" name="filegals_manager" <?php if (isset($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
"<?php }?>>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"list_file_gallery")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"list_file_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<h2>Properties</h2><br>
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label">Name</label>
					<div class="col-sm-8">
						<p class="form-control-static">
							<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value||$_smarty_tpl->tpl_vars['gal_info']->value['type']=='user') {?>
								<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['gal_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b>
								<input type="hidden" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['name']);?>
" class="form-control">
							<?php } else { ?>
								<input type="text" id="name" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['name']);?>
" class="form-control">
								<span class="help-block">Required for podcasts.</span>
							<?php }?>
						</p>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_templates']=='y') {?>
					<div class="form-group">
						<label for="fgal_template" class="col-sm-4 control-label">Template</label>
						<div class="col-sm-8">
							<select name="fgal_template" id="fgal_template" class="form-control">
								<option value=""<?php if (!isset($_smarty_tpl->tpl_vars['templateId']->value)||$_smarty_tpl->tpl_vars['templateId']->value=='') {?> selected="selected"<?php }?>>None</option>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['template']==$_smarty_tpl->tpl_vars['item']->value['id']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['label']);?>
</option>
								<?php } ?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#fgal_template').change( function() {
var otherTabs = $('ul.nav-tabs li:not(.active)');
var otherParams = $('#description').parents('div.form-group').nextAll('div.form-group');

if ($(this).val() != '') {
	// Select template, hide parameters
	otherTabs.hide();
	otherParams.hide();
} else {
	// No template, show parameters
	otherTabs.show();
	otherParams.show();
}
}).change();
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</select>
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label for="fgal_type" class="col-sm-4 control-label">Type</label>
					<div class="col-sm-8">
						<p class="form-control-static">
							<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value||$_smarty_tpl->tpl_vars['gal_info']->value['type']=='user') {?>
								<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='system') {?>
									System
								<?php } elseif ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='user') {?>
									User
								<?php } else { ?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Other (%0)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php }?>
								<input type="hidden" name="fgal_type" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['type'];?>
">
							<?php } else { ?>
								<select name="fgal_type" id="fgal_type" class="form-control">
									<option value="default" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='default') {?>selected="selected"<?php }?>>Any file</option>
									<option value="podcast" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='podcast') {?>selected="selected"<?php }?>>Podcast (audio)</option>
									<option value="vidcast" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='vidcast') {?>selected="selected"<?php }?>>Podcast (video)</option>
								</select>
							<?php }?>
						</p>
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-sm-4 control-label">Description</label>
					<div class="col-sm-8">
						<textarea rows="3" id="description" name="description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['description']);?>
</textarea>
						<span class="help-block">Required for podcasts.</span>
					</div>
				</div>
				<div class="form-group">
					<label for="visible" class="col-sm-4 control-label">Gallery is visible to non-admin users</label>
					<div class="col-sm-8">
						<input type="checkbox" id="visible" name="visible" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['visible']=='y') {?>checked="checked"<?php }?>>
					</div>
				</div>
				<div class="form-group">
					<label for="public" class="col-sm-4 control-label">Gallery is unlocked</label>
					<div class="col-sm-8">
						<input type="checkbox" id="public" name="public" <?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['public'])&&$_smarty_tpl->tpl_vars['gal_info']->value['public']=='y') {?>checked="checked"<?php }?>>
						<span class="help-block">Users with upload permission can add files to the gallery (not just the gallery owner)</span>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['gal_info']->value['type']!='user') {?>
					<div class="form-group">
						<label for="backlinkPerms" class="col-sm-4 control-label">Respect permissions for backlinks to view a file</label>
						<div class="col-sm-8">
							<input type="checkbox" id="backlinkPerms" name="backlinkPerms" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['backlinkPerms']=='y') {?>checked="checked"<?php }?>>
						</div>
					</div>
					<div class="form-group">
						<label for="lockable" class="col-sm-4 control-label">Files can be locked at download.</label>
						<div class="col-sm-8">
							<input type="checkbox" id="lockable" name="lockable" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['lockable']=='y') {?>checked="checked"<?php }?>>
						</div>
					</div>
					<div class="form-group">
						<label for="archives" class="col-sm-4 text-right">Maximum number of archives for each file</label>
						<div class="col-sm-8">
							<input type="text" id="archives" name="archives" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['archives']);?>
" class="form-control">
							<span class="help-block">Use: 0=unlimited, -1=none.</span>

							<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!=$_smarty_tpl->tpl_vars['treeRootId']->value) {?>
						</div>
					</div>
					<div class="form-group">
						<label for="parentId" class="col-sm-4 control-label">Parent gallery</label>
						<div class="col-sm-8">
							<select name="parentId" id="parentId" class="form-control">
								<option value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['parentId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value) {?> selected="selected"<?php }?>>none</option>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!=$_smarty_tpl->tpl_vars['item']->value['id']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['parentId']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['label']);?>
</option>
									<?php }?>
								<?php } ?>
							</select>
							<?php } else { ?>
								<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
							<?php }?>

						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y') {?>
					<div class="form-group">
						<label for="user" class="col-sm-4 text-right">Owner of the gallery</label>
						<div class="col-sm-8">
							<?php echo smarty_function_user_selector(array('user'=>$_smarty_tpl->tpl_vars['creator']->value,'id'=>'user'),$_smarty_tpl);?>

						</div>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_per_fgal']=='y') {?>
						<div class="form-group">
							<label for="quota" class="col-sm-4 control-label">Quota</label>
							<div class="col-sm-8">
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" id="quota" name="quota" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['quota'];?>
" size="5">
									<span class="input-group-addon"> Mb</span>
								</div>
								<span class="help-block">0 for unlimited</span>
								<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']) {?><br>Used: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']);
}?>
								<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['quota'])) {?>
									<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start(); ?>
										<?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y))",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

									<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
									<?php echo smarty_function_quotabar(array('length'=>'100','value'=>Smarty::$_smarty_vars['capture']['use']),$_smarty_tpl);?>

								<?php }?>
								<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['maxQuota'])) {?><br>Max: <?php echo $_smarty_tpl->tpl_vars['gal_info']->value['maxQuota'];?>
 Mb<?php }?>
								<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['minQuota'])) {?><br>Min: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['gal_info']->value['minQuota']);?>
 Mb<?php }?>
							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_groupalert']=='y') {?>
						<div class="form-group">
							<label for="groupforAlert" class="col-sm-4 control-label">Group of users alerted when file gallery is modified</label>
							<div class="col-sm-8">
								<select id="groupforAlert" name="groupforAlert" class="form-control">
									<option value="">&nbsp;</option>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupforAlertList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="showeachuser" class="col-sm-4 control-label">Allows each user to be selected for small groups</label>
							<div class="col-sm-8">
								<input type="checkbox" name="showeachuser" id="showeachuser" <?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
					<?php }?>
				<?php }?>
				<div class="form-group">
					<label for="image_max_size_x" class="col-sm-4 text-right">Maximum width of images in gallery</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_x" id="image_max_size_x" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['image_max_size_x']);?>
" class="form-control text-right">
							<span class="input-group-addon"> px</span>
						</div>
						<span class="help-block">If an image is wider than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
				<div class="form-group">
					<label for="image_max_size_y" class="col-sm-4 text-right">Maximum height of images in gallery</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_y" id="image_max_size_y" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['image_max_size_y']);?>
" class="form-control text-right">
							<span class="input-group-addon"> px</span>
						</div>
						<span class="help-block">If an image is higher than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
				<div class="form-group">
					<label for="wiki_syntax" class="col-sm-4 text-right">Wiki markup to enter when image selected from "file gallery manager"</label>
					<div class="col-sm-8">
						<input size="80" type="text" name="wiki_syntax" id="wiki_syntax" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['wiki_syntax']);?>
" class="form-control">
						<span class="help-block">The default is "{img fileId="%fileId%" thumb="box"}")</span>
						<span class="help-block">Field names will be replaced when enclosed in % chars. e.g. %fileId%, %name%, %filename%, %description%</span>
						<span class="help-block">Attributes will be replaced when enclosed in % chars. e.g. %tiki.content.url% for remote file URLs</span>
					</div>
				</div>

				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('labelcol'=>'4','inputcol'=>'8'), 0);?>


			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!-- display properties -->
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Display Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Display Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<h2>Display Settings</h2><br>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="fgal_default_view">
						Default View
					</label>
					<div class="col-sm-8">
						<select id="fgal_default_view" name="fgal_default_view" class="form-control">
							<option value="list"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['default_view']=='list') {?> selected="selected"<?php }?>>
								List
							</option>
							<option value="browse"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['default_view']=='browse') {?> selected="selected"<?php }?>>
								Browse
							</option>
							<option value="page"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['default_view']=='page') {?> selected="selected"<?php }?>>
								Page
							</option>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature']=='y') {?>
								<option value="finder"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['default_view']=='finder') {?> selected="selected"<?php }?>>
									Finder View
								</option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="sortorder" class="col-sm-4 text-right">Default sort order</label>
					<div class="col-sm-8">
						<select name="sortorder" id="sortorder" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_sortorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['sortorder']->value==$_smarty_tpl->tpl_vars['item']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
							<?php } ?>
						</select>
						<span class="help-block">
							<label class="radio-inline" for="fgal_sortdirection1">
								<input type="radio" id="fgal_sortdirection1" name="sortdirection" value="desc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='desc') {?>checked="checked"<?php }?> />
								Descending
							</label>
							<label class="radio-inline" for="fgal_sortdirection2">
								<input type="radio" id="fgal_sortdirection2" name="sortdirection" value="asc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='asc') {?>checked="checked"<?php }?> />
								Ascending
							</label>
						</span>
					</div>
				</div>
				<hr>
				<div class="">
					<label for="" class="control-label">Select which items to display when listing galleries</label>
					<?php echo $_smarty_tpl->getSubTemplate ('fgal_listing_conf.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<hr>
				<div class="form-group">
					<label for="max_desc" class="col-sm-4 text-right">Max description display size</label>
					<div class="col-sm-8">
						<input type="text" id="max_desc" name="max_desc" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['max_desc']->value);?>
" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="maxRows" class="col-sm-4 text-right">Max rows per page</label>
					<div class="col-sm-8">
						<input type="text" id="maxRows" name="maxRows" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRows']->value);?>
" class="form-control">
					</div>
				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Display Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"list_file_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="form-group">
			<label for="viewitem" class="col-sm-4 control-label">
				View inserted gallery after save
			</label>
			<div class="col-sm-8">
				<input type="checkbox" name="viewitem" id="viewitem" checked="checked">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<input type="submit" class="btn btn-primary" value="Save" name="edit">
			</div>
		</div>
	</form>
<?php }?>
<?php }} ?>
