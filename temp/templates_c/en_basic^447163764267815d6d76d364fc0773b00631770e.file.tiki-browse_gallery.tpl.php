<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:34:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-browse_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8631478355b63bf474f1613-86258873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447163764267815d6d76d364fc0773b00631770e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-browse_gallery.tpl',
      1 => 1502453510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8631478355b63bf474f1613-86258873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'prefs' => 0,
    'js' => 0,
    'user' => 0,
    'user_watching_gal' => 0,
    'galleryId' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_list_image_galleries' => 0,
    'system' => 0,
    'tiki_p_admin_galleries' => 0,
    'owner' => 0,
    'tiki_p_upload_images' => 0,
    'public' => 0,
    'tiki_p_batch_upload_image_dir' => 0,
    'tiki_p_assign_perm_image_gallery' => 0,
    'thisname' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'advice' => 0,
    'description' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'num_objects' => 0,
    'subgals' => 0,
    'item' => 0,
    'showname' => 0,
    'showfilename' => 0,
    'showimageid' => 0,
    'showcategories' => 0,
    'showdescription' => 0,
    'showcreated' => 0,
    'showuser' => 0,
    'showxysize' => 0,
    'showfilesize' => 0,
    'showhits' => 0,
    'images' => 0,
    'defaultscale' => 0,
    'key' => 0,
    'over_info' => 0,
    'libeg' => 0,
    'liend' => 0,
    'nextx' => 0,
    'imagerotate' => 0,
    'num_subgals' => 0,
    'rowImages' => 0,
    'rowImages2' => 0,
    'cant' => 0,
    'maxImages' => 0,
    'tiki_p_read_comments' => 0,
    'comments_cant' => 0,
    'tiki_p_post_comments' => 0,
    'tiki_p_edit_comments' => 0,
    'base_url' => 0,
    'resultscale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bf475e77c3_34912475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bf475e77c3_34912475')) {function content_5b63bf475e77c3_34912475($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_jspopup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.jspopup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Browsing Gallery: <?php echo $_smarty_tpl->tpl_vars['name']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
<?php }?>

<div class="t_navbar margin-bottom-md">
	<div class="btn-group pull-right">
		<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
		<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
			<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

		</a>
		<ul class="dropdown-menu dropdown-menu-right">
			<li class="dropdown-title">
				Gallery actions
			</li>
			<li class="divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['user_watching_gal']->value=='n') {?>
						<a href="tiki-browse_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;watch_event=image_gallery_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;watch_action=add">
							<?php echo smarty_function_icon(array('name'=>'watch'),$_smarty_tpl);?>
 Monitor
						</a>
					<?php } else { ?>
						<a href="tiki-browse_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;watch_event=image_gallery_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;watch_action=remove">
							<?php echo smarty_function_icon(array('name'=>'stop-watching'),$_smarty_tpl);?>
 Stop monitoring
						</a>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
				<li>
					<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value,"url");?>
&amp;watch_event=image_gallery_changed&amp;objectType=image+gallery&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value,"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-browse_gallery.php?galleryId=').($_smarty_tpl->tpl_vars['galleryId']->value),"url");?>
">
						<?php echo smarty_function_icon(array('name'=>'group'),$_smarty_tpl);?>
 Group Monitor
					</a>
				</li>
			<?php }?>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_image_galleries']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-galleries.php",'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'list','_text'=>"List Galleries"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['system']->value=='n') {?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {?>
			<?php echo smarty_function_button(array('href'=>"tiki-galleries.php?edit_mode=1&amp;galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'edit','_text'=>"Edit Gallery"),$_smarty_tpl);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_images']->value=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)||$_smarty_tpl->tpl_vars['public']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-upload_image.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'upload','_text'=>"Upload Image"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gal_batch']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_image_dir']->value=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)||$_smarty_tpl->tpl_vars['public']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-batch_upload.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'file-archive','_text'=>"Directory Batch"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_image_gallery']->value=='y') {?>
			<?php $_smarty_tpl->tpl_vars['thisname'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value,"url"), null, 0);?>
			<?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"image gallery",'permType'=>"image galleries",'addclass'=>"btn btn-link",'_type'=>"text",'id'=>$_smarty_tpl->tpl_vars['galleryId']->value,'title'=>$_smarty_tpl->tpl_vars['thisname']->value),$_smarty_tpl);?>

		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'list','_text'=>"List Gallery"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-show_all_images.php?id=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'image','_text'=>"All Images"),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_image_gallery']=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-image_gallery_rss.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-link",'_type'=>"text",'_icon_name'=>'rss','_text'=>"RSS"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['system']->value=='n') {?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {?>
			<?php echo smarty_function_button(array('href'=>"tiki-browse_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&amp;rebuild=".((string)$_smarty_tpl->tpl_vars['galleryId']->value),'class'=>"btn btn-default",'_icon_name'=>'cog','_text'=>"Rebuild Thumbnails"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['category_watched']->value=='y') {?>
<div class="categbar">
	Watched by categories:
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
	<?php endfor; endif; ?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['advice']->value) {?>
	<div class="highlight simplebox"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['advice']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php }?>

<?php if (strlen($_smarty_tpl->tpl_vars['description']->value)>0) {?>
	<div class="description help-block">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>

	</div>
<?php }?>

<div class="margin-bottom-md">
<span class="sorttitle">Sort Images by</span>
[ <span class="sortoption"><a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Name</a></span>
| <span class="sortoption"><a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Date</a></span>
| <span class="sortoption"><a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Hits</a></span>
| <span class="sortoption"><a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user_desc') {?>user_asc<?php } else { ?>user_desc<?php }?>">User</a></span>
| <span class="sortoption"><a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filesize_desc') {?>filesize_asc<?php } else { ?>filesize_desc<?php }?>">Size</a></span> ]

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
</div>

<div class="thumbnails">
	<div class="row">

			<?php if ($_smarty_tpl->tpl_vars['num_objects']->value>0) {?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subgals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<div class="col-xs-6 col-md-3" >
						<div class="thumbnail text-center">
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['item']->value['galleryId'],'gallery');?>
"><img alt="subgallery <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="" src="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;thumb=1"></a>
						<br>
						<div class="caption">
							Subgallery:
							<?php if ($_smarty_tpl->tpl_vars['showname']->value=='y'||$_smarty_tpl->tpl_vars['showfilename']->value=='y') {
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showimageid']->value=='y') {?>ID: <?php echo $_smarty_tpl->tpl_vars['item']->value['galleryId'];?>
<br><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showcategories']->value=='y') {?>
								Categories:
									<ul>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['name'] = 'categ';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['categories']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total']);
?>
										<li><?php echo $_smarty_tpl->tpl_vars['item']->value['categories'][$_smarty_tpl->getVariable('smarty')->value['section']['categ']['index']];?>
</li>
									<?php endfor; endif; ?>
									</ul><br>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showdescription']->value=='y') {
echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
<br><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?>Created: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['created']);?>
<br><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showuser']->value=='y') {?>User: <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['item']->value['user']);?>
<br><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showxysize']->value=='y'||$_smarty_tpl->tpl_vars['showfilesize']->value=='y') {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value['images'];?>
 Images)<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['showhits']->value=='y') {?>[<?php echo $_smarty_tpl->tpl_vars['item']->value['hits'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['hits']==1) {?>Hit<?php } else { ?>Hits<?php }?>]<br><?php }?>
						</div>

					</div></div>
				

				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail text-center">

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y') {?>
							<a href="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;scalesize=<?php echo $_smarty_tpl->tpl_vars['defaultscale']->value;?>
" data-box="lightbox[gallery];type=img" title="<?php if ($_smarty_tpl->tpl_vars['item']->value['description']!='') {
echo $_smarty_tpl->tpl_vars['item']->value['description'];
} elseif ($_smarty_tpl->tpl_vars['item']->value['name']!='') {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['filename'];
}?>" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']!='n') {
echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over_info']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl);
}?> class="linkmenu tips">
								<img class="athumb" src="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;thumb=1">
							</a>
						<?php } else { ?>
							<a href="tiki-browse_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;imageId=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;scalesize=<?php echo $_smarty_tpl->tpl_vars['defaultscale']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']!='n') {
echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over_info']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl);
}?> class="linkmenu tips">
								<img class="athumb" src="show_image.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;thumb=1">
							</a>
						<?php }?>

						<div class="caption">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']!='only') {?>
								<?php if ($_smarty_tpl->tpl_vars['showname']->value=='y') {
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showfilename']->value=='y') {?>Filename: <?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showimageid']->value=='y') {?>ID: <?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showcategories']->value=='y') {?>
									Categories:
									<ul class='categories'>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['name'] = 'categ';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['categories']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total']);
?>
											<li><?php echo $_smarty_tpl->tpl_vars['item']->value['categories'][$_smarty_tpl->getVariable('smarty')->value['section']['categ']['index']];?>
</li>
										<?php endfor; endif; ?>
									</ul><br>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showdescription']->value=='y') {
echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?>Created: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['created']);?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showuser']->value=='y') {?>User: <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['item']->value['user']);?>
<br><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showxysize']->value=='y') {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value['xsize'];?>
x<?php echo $_smarty_tpl->tpl_vars['item']->value['ysize'];?>
)<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showfilesize']->value=='y') {?>(<?php echo $_smarty_tpl->tpl_vars['item']->value['filesize'];?>
 Bytes)<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['showhits']->value=='y') {?>[<?php echo $_smarty_tpl->tpl_vars['item']->value['hits'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['hits']==1) {?>Hit<?php } else { ?>Hits<?php }?>]<?php }?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['showname']->value=='y'&&$_smarty_tpl->tpl_vars['item']->value['name']!='') {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['filename'];
}?>
							<?php }?>
							<br>
							<?php $_smarty_tpl->_capture_stack[0][] = array('image_actions', null, null); ob_start(); ?>
								<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a <?php echo smarty_function_jspopup(array('href'=>(("tiki-browse_image.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&amp;sort_mode=".((string)$_smarty_tpl->tpl_vars['sort_mode']->value)."&amp;imageId=").($_smarty_tpl->tpl_vars['item']->value['imageId'])).("&amp;scalesize=".((string)$_smarty_tpl->tpl_vars['defaultscale']->value)."&amp;popup=1")),$_smarty_tpl);?>
 class="gallink"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Popup"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="gallink tips" href="tiki-browse_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;imageId=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;scalesize=<?php echo $_smarty_tpl->tpl_vars['defaultscale']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']!='n') {
echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->tpl_vars['over_info']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl);
}?>><?php echo smarty_function_icon(array('name'=>'list','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Details"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tiki_p_admin_galleries']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['owner']->value)) {
if ($_smarty_tpl->tpl_vars['nextx']->value!=0) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="gallink" href="tiki-browse_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;imageId=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
&amp;scalesize=0"><?php echo smarty_function_icon(array('name'=>'image','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Original size"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['imagerotate']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
&amp;rotateright=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
" title="rotate right"><?php echo smarty_function_icon(array('name'=>'repeat','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Rotate"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="gallink" href="tiki-edit_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;edit=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a class="gallink" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['galleryId']->value,'gallery','with_next');?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['item']->value['imageId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['image_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['image_actions'];?>
</ul></li></ul>
							<?php }?>
							<br>
						</div>
					</div>
				</div>
					<?php if (($_smarty_tpl->tpl_vars['key']->value+$_smarty_tpl->tpl_vars['num_subgals']->value)%$_smarty_tpl->tpl_vars['rowImages']->value==$_smarty_tpl->tpl_vars['rowImages2']->value) {?>
						</div><div>
					<?php }?>
				<?php } ?>
			<?php } else { ?>
				<?php echo smarty_function_norecords(array('_colspan'=>6),$_smarty_tpl);?>

			<?php }?>
		</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxImages']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxImages']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxImages']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_image_galleries_comments']=='y'&&(($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'&&$_smarty_tpl->tpl_vars['comments_cant']->value!=0)||$_smarty_tpl->tpl_vars['tiki_p_post_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value=='y')) {?>
	<div id="page-bar" class="btn-group">
		<span class="button btn-default"><a id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"image gallery",'objectId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>
#comment-container">Comments</a></span>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('#comment-toggle').comment_toggle();
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
	<div id="comment-container"></div>
<?php }?>

<div class="alert alert-info">

				You can view this gallery's configured image (first, random, etc.) in your browser using:<br><br>


				<a class="gallink" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
show_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
show_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>

				</a><br><br>

				You can include the gallery's image in an HTML page using:<br><br>

				<code>&lt;img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
show_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
" /&gt;</code><br><br>

				You can include the image in a tiki page using:<br><br>


					<?php if ($_smarty_tpl->tpl_vars['resultscale']->value==$_smarty_tpl->tpl_vars['defaultscale']->value||!$_smarty_tpl->tpl_vars['resultscale']->value) {?>
						<code>{img src=show_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
 }</code><br>
					<?php } else { ?>
						<code>{img src=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
show_image.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
}</code>
					<?php }?>

</div>
<?php }} ?>
