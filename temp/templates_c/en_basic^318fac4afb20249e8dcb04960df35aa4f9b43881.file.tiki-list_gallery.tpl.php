<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 06:19:09
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4704514975b57fa3da4c313-18086167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318fac4afb20249e8dcb04960df35aa4f9b43881' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_gallery.tpl',
      1 => 1458718110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4704514975b57fa3da4c313-18086167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'description' => 0,
    'system' => 0,
    'tiki_p_admin_galleries' => 0,
    'user' => 0,
    'owner' => 0,
    'tiki_p_upload_images' => 0,
    'public' => 0,
    'galleryId' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'images' => 0,
    'cant' => 0,
    'maxRecords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57fa3dae8730_37717968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57fa3dae8730_37717968')) {function content_5b57fa3dae8730_37717968($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Image Galleries")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Image Galleries"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Browsing Gallery: <?php echo $_smarty_tpl->tpl_vars['name']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Image Galleries"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="galdesc">
	<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

</div>

<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['system']->value=='n') {?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {?>
			<?php echo smarty_function_button(array('href'=>"tiki-galleries.php?edit_mode=1&galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>"edit",'_text'=>"Edit Gallery"),$_smarty_tpl);?>


		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_images']->value=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)||$_smarty_tpl->tpl_vars['public']->value=='y') {?>
					<?php echo smarty_function_button(array('href'=>"tiki-upload_image.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>"import",'_text'=>"Upload Image"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	<?php }?>
	<?php echo smarty_function_button(array('href'=>"tiki-browse_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>"view",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['system']->value=='n') {?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {?>
	<?php echo smarty_function_button(array('href'=>"tiki-list_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&rebuild=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-default",'_icon_name'=>"cog",'_text'=>"Rebuild Thumbnails"),$_smarty_tpl);?>

	<?php }?>
	<?php }?>
</div>

<h2>Gallery Images</h2>
<div class="text-center">
	<div class="table-responsive">
		<table class="table table-striped normal table-hover">
			<tr>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='imageId_desc') {?>imageId_asc<?php } else { ?>imageId_desc<?php }?>">ID</a></th>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Name</a></th>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Created</a></th>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Hits</a></th>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user_desc') {?>user_asc<?php } else { ?>user_desc<?php }?>">User</a></th>
				<th><a href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filesize_desc') {?>filesize_asc<?php } else { ?>filesize_desc<?php }?>">Filesize</a></th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['imageId'];?>
&nbsp;</td>
					<td><a class="imagename" href="tiki-browse_image.php?<?php if ($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId']) {?>galleryId=<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['galleryId'];?>
&amp;<?php }?>imageId=<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['imageId'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['name'],22,"...");?>
</a>&nbsp;
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {?>
							<a class="tips" title=":Delete" href="tiki-list_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['imageId'];?>
">
								<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

							</a>
						<?php }?>
					</td>
					<td><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['created']);?>
&nbsp;</td>
					<td><span class="badge"><?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'];?>
</span>&nbsp;</td>
					<td><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>
&nbsp;</td>
					<td><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['filesize']);?>
&nbsp;</td>
				</tr>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div>
<?php }} ?>
