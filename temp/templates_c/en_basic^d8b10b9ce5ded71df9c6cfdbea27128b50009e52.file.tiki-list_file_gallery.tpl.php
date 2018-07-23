<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:17:35
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19123048795b51625fe63ca3-17905026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b10b9ce5ded71df9c6cfdbea27128b50009e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_file_gallery.tpl',
      1 => 1505292100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19123048795b51625fe63ca3-17905026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_mode' => 0,
    'galleryId' => 0,
    'name' => 0,
    'prefs' => 0,
    'js' => 0,
    'dup_mode' => 0,
    'view' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'filescount' => 0,
    'tiki_p_create_file_galleries' => 0,
    'user' => 0,
    'gal_info' => 0,
    'tiki_p_userfiles' => 0,
    'tiki_p_assign_perm_file_gallery' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'user_watching_file_gallery' => 0,
    'show_details' => 0,
    'tiki_p_upload_files' => 0,
    'tiki_p_batch_upload_file_dir' => 0,
    'treeRootId' => 0,
    'filegals_manager' => 0,
    'fileChangedMessage' => 0,
    'fileId' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'fgal_diff' => 0,
    'fgp_name' => 0,
    'find_durations' => 0,
    'offset' => 0,
    'maxWidth' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'tiki_p_read_comments' => 0,
    'tiki_p_post_comments' => 0,
    'tiki_p_edit_comments' => 0,
    'edited' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5162600794f3_48171347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5162600794f3_48171347')) {function content_5b5162600794f3_48171347($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"File Galleries",'admpage'=>"fgal")); $_block_repeat=true; echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['galleryId']->value==0) {?>
		Create a File Gallery
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y') {?>
			Edit Gallery:
		<?php }?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['dup_mode']->value!='y') {?>
				<li class="divider"></li>
				<li class="dropdown-title">
					Views
				</li>
				<li class="divider"></li>
				<?php if ($_smarty_tpl->tpl_vars['view']->value!='admin'&&$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y') {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value!='browse') {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value!='finder'&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature']=='y') {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value!='list') {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value!='page'&&$_smarty_tpl->tpl_vars['filescount']->value>0) {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
			<?php }?>
			<li class="divider"></li>
			<li class="dropdown-title">
				Gallery actions
			</li>
			<li class="divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'||$_smarty_tpl->tpl_vars['dup_mode']->value!='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'||(!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']&&$_smarty_tpl->tpl_vars['gal_info']->value['type']=='user'&&$_smarty_tpl->tpl_vars['tiki_p_userfiles']->value=='y')) {?>
					<li>
						<a href="tiki-list_file_gallery.php?edit_mode=1&galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit</a>
					</li>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['dup_mode']->value!='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['type']!='user') {?>
				<li>
					<a href="tiki-list_file_gallery.php?dup_mode=1&galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y') {?>
				<li>
					<?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
				<li>
					<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value,"url");?>
&amp;watch_event=file_gallery_changed&amp;objectType=File+Gallery&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-list_file_gallery.php?galleryId=').($_smarty_tpl->tpl_vars['galleryId']->value),"url");?>
" class="icon">
						<?php echo smarty_function_icon(array('name'=>'watch-group'),$_smarty_tpl);?>
 Group monitor
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
				<li>
					<?php if (!isset($_smarty_tpl->tpl_vars['user_watching_file_gallery']->value)||$_smarty_tpl->tpl_vars['user_watching_file_gallery']->value=='n') {?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'add'),$_smarty_tpl);?>
" title="Monitor this gallery">
							<?php echo smarty_function_icon(array('name'=>'watch'),$_smarty_tpl);?>
 Monitor
						</a>
					<?php } else { ?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'remove'),$_smarty_tpl);?>
" title="Stop monitoring this gallery">
							<?php echo smarty_function_icon(array('name'=>'stop-watching'),$_smarty_tpl);?>
 Stop monitoring
						</a>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_file_gallery']=='y') {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast") {?>
						<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;ver=PODCAST">
							<?php echo smarty_function_icon(array('name'=>'rss'),$_smarty_tpl);?>
 RSS feed
						</a>
					<?php } else { ?>
						<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
							<?php echo smarty_function_icon(array('name'=>'rss'),$_smarty_tpl);?>
 RSS feed
						</a>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value=='browse') {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['show_details']->value=='y') {?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','show_details'=>'n'),$_smarty_tpl);?>
" title="Hide file information from list view">
							<?php echo smarty_function_icon(array('name'=>'ban','align'=>'right','alt'=>"Hide file information from list view"),$_smarty_tpl);?>
 Hide list view information
						</a>
					<?php } else { ?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','show_details'=>'y'),$_smarty_tpl);?>
" title="Show file information from list view">
							<?php echo smarty_function_icon(array('name'=>'view','align'=>'right','alt'=>"Show file information from list view"),$_smarty_tpl);?>
 Show list view information
						</a>
					<?php }?>
				</li>
			<?php }?>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0) {?>
	
	
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['edit_mode']->value!='y') {?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"create",'_type'=>"link",'_text'=>"Create",'edit_mode'=>1,'parentId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'cookietab'=>1),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||(!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']&&$_smarty_tpl->tpl_vars['gal_info']->value['type']=='user'&&$_smarty_tpl->tpl_vars['tiki_p_userfiles']->value=='y')) {?>
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'||$_smarty_tpl->tpl_vars['dup_mode']->value=='y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"view",'_text'=>"Browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']||$_smarty_tpl->tpl_vars['gal_info']->value['public']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"upload",'_type'=>"link",'_text'=>"Upload",'href'=>"tiki-upload_file.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_draw']=='y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"post",'_type'=>"link",'_text'=>"Draw",'href'=>"tiki-edit_draw.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_batch']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_file_dir']->value=='y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"file-archive",'_type'=>"link",'_text'=>"Batch",'href'=>"tiki-batch_upload_files.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['treeRootId']->value==$_smarty_tpl->tpl_vars['prefs']->value['fgal_root_id']&&($_smarty_tpl->tpl_vars['edit_mode']->value=='y'||$_smarty_tpl->tpl_vars['dup_mode']->value=='y')) {?>
			<?php echo smarty_function_button(array('_icon_name'=>"list",'_text'=>"List",'href'=>'?'),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['edit_mode']->value!='y') {?>
			<?php echo smarty_function_button(array('_icon_name'=>"create",'_keepall'=>'y','_text'=>"Create",'edit_mode'=>"1",'parentId'=>"-1",'galleryId'=>"0"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y') {?>
			<?php echo smarty_function_button(array('_icon_name'=>"export",'_text'=>"Upload",'href'=>"tiki-upload_file.php"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_show_slideshow']=='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['show_slideshow']=='y') {?>
		<?php echo smarty_function_button(array('_icon_name'=>"chart",'_text'=>"SlideShow",'href'=>"#",'_onclick'=>"javascript:window.open('tiki-list_file_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&amp;slideshow','','menubar=no,width=600,height=500,resizable=yes');return false;"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['prefs']->value['h5p_enabled']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y') {?>
		<a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'edit','modal'=>1),$_smarty_tpl);?>
" class="btn btn-link create-h5p"><?php echo smarty_function_icon(array('name'=>'plus'),$_smarty_tpl);?>
Create H5P</a>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(".create-h5p").clickModal({title: "Create H5P"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['description']!='') {?>
	<div class="description help-block">
		<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['gal_info']->value['description']));?>

	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Be careful to set the right permissions on the files you link to.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<label for="keepOpenCbx">Keep gallery window open</label>
	<input type="checkbox" id="keepOpenCbx" checked="checked">
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value)&&$_smarty_tpl->tpl_vars['fileChangedMessage']->value!='') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		<form method="post"
				action="<?php echo $_SERVER['PHP_SELF'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&$_smarty_tpl->tpl_vars['filegals_manager']->value!='') {?>?filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>"
				class="form-inline">
			<input type="hidden" name="galleryId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['galleryId']->value);?>
">
			<input type="hidden" name="fileId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fileId']->value);?>
">
			<div class="form-group">
				<label for="comment">
					Comment (optional):
				</label>
					<input type="text" name="comment" id="comment" class="form-control">
			</div>
				<button type="submit" class="btn btn-default btn-sm"><?php echo smarty_function_icon(array('name'=>'ok'),$_smarty_tpl);?>
 Save</button>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y') {?>
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
			<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']),'href'=>"tiki-browse_categories.php",'parentId'=>$_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId']),$_smarty_tpl);?>

		<?php endfor; endif; ?>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['fgal_diff']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Modifications")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['fgp_prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fgp_prop']->_loop = false;
 $_smarty_tpl->tpl_vars['fgp_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_diff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fgp_prop']->key => $_smarty_tpl->tpl_vars['fgp_prop']->value) {
$_smarty_tpl->tpl_vars['fgp_prop']->_loop = true;
 $_smarty_tpl->tpl_vars['fgp_name']->value = $_smarty_tpl->tpl_vars['fgp_prop']->key;
?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Property <b><?php echo $_smarty_tpl->tpl_vars['fgp_name']->value;?>
</b> Changed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y') {?>
	<br><?php echo $_smarty_tpl->getSubTemplate ('edit_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['dup_mode']->value=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('duplicate_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['view']->value!='page') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature']!='y'||$_smarty_tpl->tpl_vars['view']->value!='finder') {?>
			<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search']=='y') {?>
				<div class="col-sm-6">
					<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y','find_show_categories_multi'=>'y','find_durations'=>$_smarty_tpl->tpl_vars['find_durations']->value,'find_show_sub'=>'y','find_in'=>"<ul><li>Name</li><li>Filename</li><li>Description</li></ul>"), 0);?>

					<form id="search-by-id" class="form" role="form" method="get" action="tiki-list_file_gallery.php">
						<div class="input-group" style="margin-top: 10px; margin-bottom: 10px">
							<span class="input-group-addon">
								<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

							</span>
							<input class="form-control" type="text" name="fileId" id="fileId" <?php if (isset($_smarty_tpl->tpl_vars['fileId']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
"<?php }?> placeholder="1234" title="Search for the file with this number, in all galleries">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								jQuery("#fileId").tooltip();
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default" style="text-align: right">Search by identifier</button>
							</div>
						</div>
					</form>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search_in_content']=='y'&&$_smarty_tpl->tpl_vars['galleryId']->value>0) {?>
				<div class="col-sm-6">
					<form id="search-form" class="form" role="form" method="get" action="tiki-search<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_local_tiki_search']=='y') {?>index<?php } else { ?>results<?php }?>.php">
						<input type="hidden" name="where" value="files">
						<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
						<label for="highlight" class="find_content sr-only">Search in content</label>
						<div class="input-group">
							<input name="highlight" size="30" type="text" placeholder="Search in content..." class="form-control">
							<div class="input-group-btn">
								<input type="submit" class="wikiaction btn btn-default" name="search" value="Go">
							</div>
						</div>
					</form>
				</div>
			<?php }?>
			</div>
		<?php }?>
	<?php } else { ?>
		<div class="pageview">
			<form id="size-form" class="form form-inline" role="form" action="tiki-list_file_gallery.php">
				<input type="hidden" name="view" value="page">
				<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
				<input type="hidden" name="maxRecords" value=1>
				<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
				<label for="maxWidth">
					Maximum width&nbsp;<input id="maxWidth" class="form-control" type="text" name="maxWidth" value="<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
">
				</label>
				<input type="submit" class="wikiaction btn btn-default" name="setSize" value="Submit">
			</form>
		</div><br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<br>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='n'&&$_smarty_tpl->tpl_vars['gal_info']->value['quota']) {?>
		<div style="float:right; width: 350px;">
			<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']!=null) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start(); ?>
				<?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y),0)",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('left_percent', null, null); ob_start(); ?>
				<?php echo smarty_function_math(array('equation'=>"round(100-(100*x)/(1024*1024*y),0)",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('left', null, null); ob_start(); ?>
				<?php echo smarty_function_math(array('equation'=>"round(y - x/(1024*1024),0)",'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota'],'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize']),$_smarty_tpl);?>

			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='text_only') {
if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']!=null) {?>
				<div class="progress" style="display:inline-block;float:right;width: 250px;">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
						aria-valuemin="0" aria-valuemax="100" style="width:<?php echo sprintf('%d',Smarty::$_smarty_vars['capture']['left_percent']);?>
%">
					</div>
					<div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php echo sprintf('%d',Smarty::$_smarty_vars['capture']['use']);?>
%">
					</div>
				</div>
			<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']==null) {?>
					<div class="progress" style="display:inline-block;float:right; width: 250px;">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
							aria-valuemin="0" aria-valuemax="100" style="width:100%">
						</div>
						<div class="progress-bar progress-bar-danger" role="progressbar" style="width:0%">
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']==null) {?>
					<div style="text-align:center;display:inline-block;float:right;padding-right: 10px;"><strong><?php echo $_smarty_tpl->tpl_vars['gal_info']->value['quota'];?>
 MB</strong> left</div>
				<?php } else { ?>
					<div style="text-align:center;display:inline-block;float:right;padding-right: 10px;"><strong><?php echo Smarty::$_smarty_vars['capture']['left'];?>
 MB</strong> left</div>
				<?php }?>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature']=='y'&&$_smarty_tpl->tpl_vars['view']->value=='finder') {?><br>
		<div class="elFinderDialog" style="height: 100%"></div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


var elfoptions = initElFinder({
	defaultGalleryId: <?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
,
	deepGallerySearch:1,
	getFileCallback: function(file,elfinder) { window.handleFinderFile(file,elfinder); },
	height: 600
});

var elFinderInstnce = $(".elFinderDialog").elfinder(elfoptions).elfinder('instance');
// when changing folders update the buttons in the navebar above
elFinderInstnce.bind("open", function (data) {
	$.getJSON($.service('file_finder', 'finder'), {
		cmd: "tikiFileFromHash",
		hash: data.data.cwd.hash
	}).done(function (data) {
		var href = '';
		$(".t_navbar a").each(function () {
			href = $(this).attr("href");
			if (href) {	// avoid chosen select replacements
				href = href.replace(/(galleryId|objectId|parentId|watch_object)=\d+/, '$1=' + data.galleryId);
				$(this).attr("href", href);
			}
		});
	});
});

window.handleFinderFile = function (file, elfinder) {
	var hash = "";
	if (typeof file === "string") {
		var m = file.match(/target=([^&]*)/);
		if (!m || m.length < 2) {
			return false;	// error?
		}
		hash = m[1];
	} else {
		hash = file.hash;
	}
	$.ajax({
		type: 'GET',
		url: $.service('file_finder', 'finder'),
		dataType: 'json',
		data: {
			cmd: "tikiFileFromHash",
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				filegals_manager: "<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
",
			<?php }?>
			hash: hash
		},
		success: function (data) {
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
', data.wiki_syntax);
				checkClose();
			<?php }?>
		}
	});
};
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('list_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0&&$_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_comments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_post_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value=='y')) {?>

		<div id="page-bar">
			<a id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"file gallery",'objectId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>
#comment-container" class="btn btn-default btn-sm">
				<?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 Comments
			</a>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('#comment-toggle').comment_toggle();
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>

		<div id="comment-container"></div>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0) {?>
	<?php if ($_smarty_tpl->tpl_vars['edited']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			You can access the file gallery using the following URL: <a class="fgallink alert-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>
