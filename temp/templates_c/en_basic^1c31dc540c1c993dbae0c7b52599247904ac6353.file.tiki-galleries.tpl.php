<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:21:55
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-galleries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16180166275b63bc433a0b86-44015827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c31dc540c1c993dbae0c7b52599247904ac6353' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-galleries.tpl',
      1 => 1504548050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16180166275b63bc433a0b86-44015827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_create_galleries' => 0,
    'edit_mode' => 0,
    'galleryId' => 0,
    'display_migrate_filegal' => 0,
    'name' => 0,
    'category_needed' => 0,
    'individual' => 0,
    'description' => 0,
    'tiki_p_admin_galleries' => 0,
    'visible' => 0,
    'prefs' => 0,
    'maxRows' => 0,
    'rowImages' => 0,
    'thumbSizeX' => 0,
    'thumbSizeY' => 0,
    'options_sortorder' => 0,
    'item' => 0,
    'sortorder' => 0,
    'key' => 0,
    'sortdirection' => 0,
    'showname' => 0,
    'showimageid' => 0,
    'showdescription' => 0,
    'showcreated' => 0,
    'showuser' => 0,
    'showhits' => 0,
    'showxysize' => 0,
    'showfilesize' => 0,
    'showfilename' => 0,
    'showcategories' => 0,
    'options_galleryimage' => 0,
    'galleryimage' => 0,
    'parentgallery' => 0,
    'galleries_list' => 0,
    'defaultscale' => 0,
    'scaleinfo' => 0,
    'owner' => 0,
    'public' => 0,
    'edited' => 0,
    'url' => 0,
    'galleries' => 0,
    'find' => 0,
    'filter' => 0,
    'js' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tiki_p_admin' => 0,
    'libeg' => 0,
    'liend' => 0,
    'user' => 0,
    'cant' => 0,
    'maxRecords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bc434aa5c9_04038082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bc434aa5c9_04038082')) {function content_5b63bc434aa5c9_04038082($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Image Galleries",'admpage'=>"gal")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Image Galleries",'admpage'=>"gal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Galleries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Image Galleries",'admpage'=>"gal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_galleries']->value=='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'||$_smarty_tpl->tpl_vars['galleryId']->value!=0) {?>
		<div class="t_navbar">
			<?php echo smarty_function_button(array('href'=>"?edit_mode=1&amp;galleryId=0",'class'=>"btn btn-default",'_icon_name'=>"create",'_text'=>"Create New Gallery"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!=0) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-browse_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-default",'_icon_name'=>"view",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['display_migrate_filegal']->value) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-galleries.php?migrate_images_to_fgal=1",'class'=>"btn btn-default",'_icon_name'=>"file",'_text'=>"Migrate Images to File Gallery"),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y') {?>
		<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==0) {?>
			<h2>Create a gallery</h2>
		<?php } else { ?>
			<h2>Edit this gallery: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<div class="margin-bottom-md">
			<?php if ($_smarty_tpl->tpl_vars['individual']->value=='y') {?>
				<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>"image gallery",'permType'=>"image galleries",'id'=>$_smarty_tpl->tpl_vars['galleryId']->value,'title'=>$_smarty_tpl->tpl_vars['name']->value,'label'=>"There are individual permissions set for this gallery"),$_smarty_tpl);?>

			<?php }?>
			<form action="tiki-galleries.php" method="post" id="gal-edit-form" class="form-horizontal">
				<input type="hidden" name="galleryId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value);?>
">
				<div class="form-group">
					<label class="col-sm-4 control-label" for="name">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="name" id="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="gal-desc">Description:</label>
					<div class="col-sm-8">
						<textarea rows="10" class="form-control" name="description"
							id="gal-desc"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y') {?>
					<div class="form-group">
						<div class="checkbox col-sm-push-4">
							<input type="checkbox" name="visible" <?php if ($_smarty_tpl->tpl_vars['visible']->value=='y') {?>checked="checked"<?php }?>>
							Gallery is visible to non-admin users?
						</div>
					</div>
					
				<?php } else { ?>
					<input type="hidden" name="visible" value="on">
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['preset_galleries_info']!='y') {?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="maxRows">Max Rows per page:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="maxRows" name="maxRows"<?php if (!empty($_smarty_tpl->tpl_vars['maxRows']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRows']->value);?>
"<?php }?>>
						</div>
						<div class="col-sm-4 help-block">
							Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['maxRowsGalleries'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['maxRowsGalleries'];
} else { ?>10<?php }?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="rowImages">Images per row:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="rowImages" id="rowImages" <?php if (!empty($_smarty_tpl->tpl_vars['rowImages']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rowImages']->value);?>
"<?php }?>>
						</div>
						<div class="col-sm-4 help-block">
							Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['rowImagesGalleries'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['rowImagesGalleries'];
} else { ?>6<?php }?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="thumbSizeX">Thumbnails size X:</label>
						<div class="col-sm-4">
							<input type="text" id="thumbSizeX" name="thumbSizeX" class="form-control" <?php if (!empty($_smarty_tpl->tpl_vars['thumbSizeX']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thumbSizeX']->value);?>
"<?php }?>>
						</div>
						<div class="col-sm-4 help-block">
							Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['thumbSizeXGalleries'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['thumbSizeXGalleries'];
} else { ?>80<?php }?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="thumbSizeY">Thumbnails size Y:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="thumbSizeY" name="thumbSizeY" <?php if (!empty($_smarty_tpl->tpl_vars['thumbSizeY']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thumbSizeY']->value);?>
"<?php }?>>
						</div>
						<div class="col-sm-4 help-block">
							Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['thumbSizeYGalleries'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['thumbSizeYGalleries'];
} else { ?>80<?php }?>
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="sortorder">Default sort order:</label>
					<div class="col-sm-4">
						<select name="sortorder" id="sortorder" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_sortorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sortorder']->value==$_smarty_tpl->tpl_vars['item']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
							<?php } ?>
						</select>
						<div class="radio">
							<input type="radio" name="sortdirection" value="desc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='desc') {?>checked="checked"<?php }?>>
							descending
						</div>
						<div class="radio">
							<input type="radio" name="sortdirection" value="asc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='asc') {?>checked="checked"<?php }?>>
							ascending
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Fields to show during browsing the gallery:</label>
					<div class="col-sm-4">

						<div class="checkbox">
							<input type="checkbox" name="showname" value="y" <?php if ($_smarty_tpl->tpl_vars['showname']->value=='y') {?>checked="checked"<?php }?>>
							Name
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showimageid" value="y" <?php if ($_smarty_tpl->tpl_vars['showimageid']->value=='y') {?>checked="checked"<?php }?>>
							Image ID
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showdescription" value="y" <?php if ($_smarty_tpl->tpl_vars['showdescription']->value=='y') {?>checked="checked"<?php }?>>
							Description
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showcreated" value="y" <?php if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?>checked="checked"<?php }?>>
							Creation Date
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showuser" value="y" <?php if ($_smarty_tpl->tpl_vars['showuser']->value=='y') {?>checked="checked"<?php }?>>
							User
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showhits" value="y" <?php if ($_smarty_tpl->tpl_vars['showhits']->value=='y') {?>checked="checked"<?php }?>>
							Hits
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showxysize" value="y" <?php if ($_smarty_tpl->tpl_vars['showxysize']->value=='y') {?>checked="checked"<?php }?>>
							XY-Size
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showfilesize" value="y" <?php if ($_smarty_tpl->tpl_vars['showfilesize']->value=='y') {?>checked="checked"<?php }?>>
							Filesize
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showfilename" value="y" <?php if ($_smarty_tpl->tpl_vars['showfilename']->value=='y') {?>checked="checked"<?php }?>>
							Filename
						</div>
						<div class="checkbox">
							<input type="checkbox" name="showcategories" value="y" <?php if ($_smarty_tpl->tpl_vars['showcategories']->value=='y') {?>checked="checked"<?php }?>>
							Categories
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label" for="galleryimage">Gallery Image:</label>
					<div class="col-sm-4">
						<select id="galleryimage" class="form-control" name="galleryimage">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_galleryimage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['galleryimage']->value==$_smarty_tpl->tpl_vars['item']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="parentgallery">Parent gallery</label>
					<div class="col-sm-4">
						<select id="parentgallery" class="form-control" name="parentgallery">
							<option value="-1" <?php if ($_smarty_tpl->tpl_vars['parentgallery']->value==-1) {?> selected="selected"<?php }?>>none</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['galleries_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['galleryId'];?>
" <?php if ($_smarty_tpl->tpl_vars['parentgallery']->value==$_smarty_tpl->tpl_vars['item']->value['galleryId']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['preset_galleries_info']!='y') {?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="parentgallery">Available scales:</label>
						<div class="col-sm-4">
							<div class="radio">
								<label>
									<input type="radio" name="defaultscale" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['scaleSizeGalleries'];?>
" <?php if ($_smarty_tpl->tpl_vars['defaultscale']->value==$_smarty_tpl->tpl_vars['prefs']->value['scaleSizeGalleries']) {?>checked="checked"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['prefs']->value['scaleSizeGalleries'];?>
x<?php echo $_smarty_tpl->tpl_vars['prefs']->value['scaleSizeGalleries'];?>
 Global default (Bounding box)
								</label>
							</div>
							<label for="scales">default scale</label>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['scales'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['name'] = 'scales';
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['scaleinfo']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['scales']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale']!=$_smarty_tpl->tpl_vars['prefs']->value['scaleSizeGalleries']) {?>
									Remove:
									<input type="checkbox" name="removescale_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale']);?>
">
									<?php echo $_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale'];?>
x<?php echo $_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale'];?>
 (Bounding box)
									<div class="radio">
									<label>
										<input type="radio" name="defaultscale" value="<?php echo $_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale'];?>
" <?php if ($_smarty_tpl->tpl_vars['defaultscale']->value==$_smarty_tpl->tpl_vars['scaleinfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['scales']['index']]['scale']) {?>checked="checked"<?php }?>>
										Default scale
									</label>
								<?php }?>
								</div>
								<?php endfor; else: ?>
								No scales available
							<?php endif; ?>
							<div class="radio">
								<label>
									<input type="radio" name="defaultscale" value="o" <?php if ($_smarty_tpl->tpl_vars['defaultscale']->value=='o') {?>checked="checked"<?php }?>>
									Original image is default scale
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="scaleSize" class="col-sm-4 control-label">
							Add scaled images with bounding box of square size:</label>
						<div class="col-sm-4">
							<input type="text" id="scaleSize" class="form-control" name="scaleSize">
						</div>
						<div class="col-sm-4 help-block">
							pixels
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="owner">Owner of the gallery</label>
					<div class="col-sm-4">
						<input type="text" id="owner" class="form-control" name="owner" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['owner']->value);?>
">
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox col-sm-push-4">
						<label>
							<input type="checkbox" name="public" <?php if ($_smarty_tpl->tpl_vars['public']->value=='y') {?>checked="checked"<?php }?>>
							Other users can upload images to this gallery
						</label>
					</div>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<div class="text-center">
					<input type="submit" class="btn btn-default" value="Save" name="edit">
				</div>

			</form>
		</div>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0) {?>
	<?php if ($_smarty_tpl->tpl_vars['edited']->value=='y') {?>
		<div class="alert alert-info">
			You can access the gallery using the following URL:
			<a class="gallink" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
</a>
		</div>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['galleryId']->value!=0) {?>
	<div class="t_navbar">
		<a href="tiki-galleries.php?edit_mode=1&amp;galleryId=0" class="btn btn-default">Create New Gallery</a>
	</div>
<?php }?>
<h2>Available Galleries</h2>
<div align="center">
	<?php if ($_smarty_tpl->tpl_vars['galleries']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="form-group">
			<form action="tiki-galleries.php" method="get">
				<div class="input-group col-sm-4">
					<select name="filter" class="form-control">
						<option value="">Choose a filter</option>
						<option value="topgal"<?php if ($_smarty_tpl->tpl_vars['filter']->value=='topgal') {?> selected="selected"<?php }?>>Top</option>
						<option value="parentgal"<?php if ($_smarty_tpl->tpl_vars['filter']->value=='parentgal') {?> selected="selected"<?php }?>>Parent gallery</option>
						
					</select>
					<span class="input-group-btn">
						<input type="submit" class="btn btn-default" value="Filter">
					</span>
				</div>
			</form>
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

	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
		<table class="table table-hover table-striped">
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_name']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Name</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_parent']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='parentgallery_desc') {?>parentgallery_asc<?php } else { ?>parentgallery_desc<?php }?>">
							Parent
						</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_description']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='description_desc') {?>description_asc<?php } else { ?>description_desc<?php }?>">
							Description
						</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_created']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Created</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_lastmodif']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='lastModif_desc') {?>lastModif_asc<?php } else { ?>lastModif_desc<?php }?>">
							Last modified
						</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_user']=='y') {?>
					<th>
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user_desc') {?>user_asc<?php } else { ?>user_desc<?php }?>">User</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_imgs']=='y') {?>
					<th style="text-align:right">
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='images_desc') {?>images_asc<?php } else { ?>images_desc<?php }?>">Imgs</a>
					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_visits']=='y') {?>
					<th style="text-align:right">
						<a href="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Visits</a>
					</th>
				<?php }?>
				<th></th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<?php if (($_smarty_tpl->tpl_vars['filter']->value=='topgal'&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgallery']==-1)||($_smarty_tpl->tpl_vars['filter']->value=='parentgal'&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgal']=='y')||($_smarty_tpl->tpl_vars['filter']->value=='')) {?>
					<?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['visible']=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y') {?>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_name']=='y') {?>
								<td>
									<a class="galname" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'],'gallery');?>
"><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['name'];?>
</a>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_parent']=='y') {?>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgallery']!=-1) {?>
										<a class="galname" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgallery'],'gallery');?>
"><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgalleryName'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['parentgal']=='y') {?><i>Parent</i><?php }?>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_description']=='y') {?>
								<td><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description'];?>
</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_created']=='y') {?>
								<td><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['created']);?>
</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_lastmodif']=='y') {?>
								<td><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif']);?>
</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_user']=='y') {?>
								<td><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_imgs']=='y') {?>
								<td style="text-align:right"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['images'];?>
</span>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_visits']=='y') {?>
								<td style="text-align:right;"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'];?>
</span></td>
							<?php }?>
							<td nowrap="nowrap">
								<?php $_smarty_tpl->_capture_stack[0][] = array('gallery_actions', null, null); ob_start(); ?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_view_image_gallery']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<ahref="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
"><?php echo smarty_function_icon(array('name'=>'list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"List"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_assign_perm_image_gallery']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>"image gallery",'permType'=>"image galleries",'id'=>$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'],'title'=>$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['name']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)) {
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_create_galleries']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<ahref="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;edit_mode=1&amp;galleryId=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_upload_images']=='y') {
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_upload_images']=='y') {
if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['public']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<ahref="tiki-upload_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
"><?php echo smarty_function_icon(array('name'=>'export','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Upload"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if (($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['geographic']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<ahref="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;make_map=1&amp;galleryId=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
"><?php echo smarty_function_icon(array('name'=>'wrench','alt'=>"Make map",'_menu_text'=>'y','_menu_icon'=>'y'),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
}
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value)) {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['has_special_perms']=='n')||($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_create_galleries']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<ahref="tiki-galleries.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;removegal=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}?>
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="cssmenu_horiz">
									<li><?php }?>
										<a
												class="tips"
												title="Actions"
												href="#"
												<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['gallery_actions']),$_smarty_tpl);
}?>
												style="padding:0; margin:0; border:0"
										>
											<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
										<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['gallery_actions'];?>
</ul>
									</li>
								</ul>
								<?php }?>
							</td>
						</tr>
					<?php }?>
				<?php }?>
				<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>9),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
