<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:11:57
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_gal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17672909525b51994d559920-76188281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c47182a56d96f998117985be295991b302b68dd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_gal.tpl',
      1 => 1492634472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17672909525b51994d559920-76188281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'max_img_upload_size' => 0,
    'prefs' => 0,
    'value' => 0,
    'label' => 0,
    'galleries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51994d5b36b9_29616679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51994d5b36b9_29616679')) {function content_5b51994d5b36b9_29616679($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

To add/remove image galleries, go to "Image Galleries" on the application menu, or <a class="rbox-link" href="tiki-galleries.php">Click Here</a>.
<hr>
You can upload images of a size of <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_img_upload_size']->value);?>
. Alter the php.ini variables file_uploads, upload_max_filesize, post_max_size and database variables (max_allowed_packet for mysql) to change this value.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_gal")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_gal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<br>
		<form id="galfeatures" class="form-horizontal" action="tiki-admin.php?page=gal" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<br>
			<div class="form-group col-lg-12 clearfix">
				<div class="pull-right">
					<input type="submit" class="btn btn-primary btn-sm tips timeout" form="galfeatures" name="galfeatures" title=":Apply changes" value="Apply">
				</div>
			</div>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_galleries','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Galleries features</legend>
				<?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_gal_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_image_galleries_comments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_gal_slideshow'),$_smarty_tpl);?>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'gal_use_db'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="gal_use_db_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'gal_use_dir'),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'gal_use_lib'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_match_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_nmatch_regex'),$_smarty_tpl);?>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_gal_batch'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_gal_batch_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'gal_batch_dir'),$_smarty_tpl);?>

					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
					<?php echo smarty_function_preference(array('name'=>'feature_image_gallery_mandatory_category'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'gal_image_mouseover'),$_smarty_tpl);?>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'preset_galleries_info'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="preset_galleries_info_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'maxRowsGalleries'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'rowImagesGalleries'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'thumbSizeXGalleries'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'thumbSizeYGalleries'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'scaleSizeGalleries'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Gallery listing configuration</legend>
				<?php echo smarty_function_preference(array('name'=>'gal_list_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_parent'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_description'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_created'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_lastmodif'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_imgs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gal_list_visits'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Comments settings</legend>
				<?php echo smarty_function_preference(array('name'=>'image_galleries_comments_per_page'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'image_galleries_comments_default_order'),$_smarty_tpl);?>

			</fieldset>
			<br>
			<div class="form-group col-lg-12 text-center">
				<input type="submit" class="btn btn-primary btn-sm tips timeout" form="galfeatures" name="galfeatures" title=":Apply Changes" value="Apply">
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Manage images")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Manage images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<br>
		<form id="galremove" class="form-horizontal" action="tiki-admin.php?page=gal" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<br>
			<fieldset>
				<legend>Remove unused images</legend>
				<div class="form-group">
					<label class="control-label col-sm-4">
						Remove unused images in the system gallery
					</label>
					<div class="col-sm-8">
						<button type="submit" class="btn btn-default btn-sm timeout" form="galremove" name="rmvorphimg" value="1">
							Remove
						</button>
						<span class="help-block">
						Remove images not being used in wiki pages, articles or blog posts
						</span>
					</div>
				</div>
			</fieldset>
		</form>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_db']=='n') {?>
				<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable("Move images from database storage to filesystem storage", null, 0);?>
				<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable('to_fs', null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable("Move images from filesystem storage to database storage", null, 0);?>
				<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable('to_db', null, 0);?>
			<?php }?>
		<form id="galmove" class="form-horizontal" action="tiki-admin.php?page=gal" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="mvimg" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
			<fieldset>
				<legend>Move images</legend>
				<div class="form-group">
					<label class="control-label col-sm-4"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
					<div class="col-sm-8">
						<select name="move_gallery" class="form-control">
							<option value="-1">All galleries</option>
							<option value="0">System Gallery</option>
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],20,"...",true);?>
</option>
							<?php endfor; endif; ?>
						</select><br>
						<button type="submit" class="btn btn-default btn-sm timeout" form="galmove" name="mvimg" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
							Move
						</button>
					</div>
				</div>
			</fieldset>
		</form>
			
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Manage images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_gal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>







<?php }} ?>
