<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:35:04
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\fgal_context_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10771589845b63bf58f2f734-06589921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c42a8e691e0cee09f0532a78526682b4f8bd3e18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\fgal_context_menu.tpl',
      1 => 1505210608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10771589845b63bf58f2f734-06589921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'menu_text' => 0,
    'menu_icon' => 0,
    'user' => 0,
    'filegals_manager' => 0,
    'prefs' => 0,
    'virtual_path' => 0,
    'gal_info' => 0,
    'base_url' => 0,
    'download_path' => 0,
    'replace_action_title' => 0,
    'view' => 0,
    'tiki_p_share' => 0,
    'tikiroot' => 0,
    'tiki_p_tell_a_friend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bf59099166_90576099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bf59099166_90576099')) {function content_5b63bf59099166_90576099($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_modifier_virtual_path')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.virtual_path.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['isgal']==1) {
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_view_file_gallery']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Browse<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_create_file_galleries']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Properties<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files']=='y'&&($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries']=='y'||($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['file']->value['user']==$_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['file']->value['public']=='y')) {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>"><div class="iconmenu"><?php echo smarty_function_icon(array('name'=>'upload'),$_smarty_tpl);?>
 Upload</div></a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_assign_perm_file_gallery']=='y') {?><div class="iconmenu"><?php if ($_smarty_tpl->tpl_vars['file']->value['public']!='y') {
echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['file']->value['id'],'title'=>$_smarty_tpl->tpl_vars['file']->value['name']),$_smarty_tpl);
} else {
echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['file']->value['id'],'title'=>$_smarty_tpl->tpl_vars['file']->value['name']),$_smarty_tpl);
}?></div><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webdav']=='y') {
$_smarty_tpl->tpl_vars['virtual_path'] = new Smarty_variable(smarty_modifier_virtual_path($_smarty_tpl->tpl_vars['file']->value['id'],'filegal'), null, 0);?><a style="behavior: url(#default#AnchorClick);" href="<?php echo $_smarty_tpl->tpl_vars['virtual_path']->value;?>
" folder="<?php echo $_smarty_tpl->tpl_vars['virtual_path']->value;?>
"><?php echo smarty_function_icon(array('name'=>"file-archive-open"),$_smarty_tpl);?>
Open as WebFolder</a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_create_file_galleries']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
} else {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {
if ($_smarty_tpl->tpl_vars['menu_text']->value=='y'||$_smarty_tpl->tpl_vars['menu_icon']->value=='y') {?><form class="upform" name="form<?php echo $_smarty_tpl->tpl_vars['file']->value['fileId'];?>
" method="post" action="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['galleryId'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}
if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_asynchronous_indexing']=='y') {?>&amp;fast<?php }?>" enctype="multipart/form-data"><?php }
if ($_smarty_tpl->tpl_vars['menu_text']->value!='y') {?><div style="float:left"><?php }
}
if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['type'],6,'',true)=='image/'&&$_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files']=='y') {?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_draw']=='y') {
if ($_smarty_tpl->tpl_vars['file']->value['type']=='image/svg+xml'||$_smarty_tpl->tpl_vars['file']->value['type']=='image/jpeg'||$_smarty_tpl->tpl_vars['file']->value['type']=='image/gif'||$_smarty_tpl->tpl_vars['file']->value['type']=='image/png'||$_smarty_tpl->tpl_vars['file']->value['type']=='image/tiff') {?><a class="draw dialog" data-name="<?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" title="Edit: <?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" href="tiki-edit_draw.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
" data-fileid='<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
' data-galleryid='<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
' onclick='$(document).trigger("hideCluetip"); return $(this).ajaxEditDraw();'><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Edit"),$_smarty_tpl);?>
</a><?php }
}
} elseif ($_smarty_tpl->tpl_vars['file']->value['type']=='text/csv'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=='y') {?><a href="tiki-view_sheets.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['fgal_viewerjs_feature']=='y'&&($_smarty_tpl->tpl_vars['file']->value['type']=='application/pdf'||strpos($_smarty_tpl->tpl_vars['file']->value['type'],'application/vnd.oasis.opendocument.')!==false)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['fgal_viewerjs_uri'];?>
#<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php } elseif (($_smarty_tpl->tpl_vars['file']->value['type']=='application/vnd.oasis.opendocument.text'||$_smarty_tpl->tpl_vars['file']->value['type']=='application/octet-stream')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_docs']=='y') {?><a href="tiki-edit_docs.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files']=='y') {?><a href="tiki-edit_docs.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&edit"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Edit"),$_smarty_tpl);?>
</a><?php }
} elseif ($_smarty_tpl->tpl_vars['prefs']->value['h5p_enabled']=='y'&&$_smarty_tpl->tpl_vars['file']->value['type']=='application/zip'&&preg_match('/\.h5p$/i',$_smarty_tpl->tpl_vars['file']->value['filename'])) {?><a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'embed','fileId'=>$_smarty_tpl->tpl_vars['file']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php }
if ((isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])&&$_smarty_tpl->tpl_vars['file']->value['p_download_files']=='y')||(!isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])&&$_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files']=='y')) {
if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='podcast'||$_smarty_tpl->tpl_vars['gal_info']->value['type']=='vidcast') {?><a href="<?php echo $_smarty_tpl->tpl_vars['download_path']->value;
echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
"><?php } else { ?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file');?>
"><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft']=='y'&&$_smarty_tpl->tpl_vars['file']->value['nbDraft']>0) {
$_smarty_tpl->tpl_vars['download_action_title'] = new Smarty_variable("Download current version", null, 0);
} else {
$_smarty_tpl->tpl_vars['download_action_title'] = new Smarty_variable("Download", null, 0);
}
echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'floppy','alt'=>((string)$_smarty_tpl->tpl_vars['download_action_title']->value)),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['gal_info']->value['archives']>-1) {
if (isset($_smarty_tpl->tpl_vars['file']->value['nbArchives'])&&$_smarty_tpl->tpl_vars['file']->value['nbArchives']>0) {
$_smarty_tpl->tpl_vars['nb_archives'] = new Smarty_variable($_smarty_tpl->tpl_vars['file']->value['nbArchives'], null, 0);?><a href="tiki-file_archives.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['fileId'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'file-archive','alt'=>"Archives (".((string)$_smarty_tpl->tpl_vars['nb_archives']->value).")"),$_smarty_tpl);?>
</a><?php } else {
echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'file-archive','alt'=>"Archives"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars['replace_action_title'] = new Smarty_variable("Upload new version", null, 0);
} else {
$_smarty_tpl->tpl_vars['replace_action_title'] = new Smarty_variable("Replace", null, 0);
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft']=='y') {
if ($_smarty_tpl->tpl_vars['file']->value['nbDraft']>0) {
$_smarty_tpl->tpl_vars['replace_action_title'] = new Smarty_variable("Replace draft", null, 0);
} else {
$_smarty_tpl->tpl_vars['replace_action_title'] = new Smarty_variable("Upload draft", null, 0);
}
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries']=='y'||($_smarty_tpl->tpl_vars['file']->value['lockedby']&&$_smarty_tpl->tpl_vars['file']->value['lockedby']==$_smarty_tpl->tpl_vars['user']->value)||(!$_smarty_tpl->tpl_vars['file']->value['lockedby']&&(($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['file']->value['user'])||$_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_edit_gallery_file']=='y'))) {
if ($_smarty_tpl->tpl_vars['file']->value['archiveId']==0) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft']=='y'&&$_smarty_tpl->tpl_vars['file']->value['nbDraft']>0) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Validate your draft<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete your draft<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries']=='y'||empty($_smarty_tpl->tpl_vars['file']->value['locked'])||(isset($_smarty_tpl->tpl_vars['file']->value['locked'])&&$_smarty_tpl->tpl_vars['file']->value['locked']&&$_smarty_tpl->tpl_vars['file']->value['lockedby']==$_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['gal_info']->value['lockable']!='y') {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&amp;fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'export','alt'=>((string)$_smarty_tpl->tpl_vars['replace_action_title']->value)),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_display_properties']=='y') {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&amp;fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'edit','alt'=>"Edit properties"),$_smarty_tpl);?>
</a><a href="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&action=refresh_metadata<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'tag','alt'=>"Refresh metadata"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['view']->value!='page') {?><a href="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&view=page"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'textfile','alt'=>"Page view"),$_smarty_tpl);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['gal_info']->value['lockable']=='y'&&$_smarty_tpl->tpl_vars['file']->value['isgal']!=1) {
if ($_smarty_tpl->tpl_vars['file']->value['lockedby']) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unlock<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
if ((isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])&&$_smarty_tpl->tpl_vars['file']->value['p_download_files']=='y')||(!isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])&&$_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files']=='y')) {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?><a href="#" onclick="window.open('<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['fileId'],'file','with_next');?>
lock=y'); document.location.href = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_type'=>'absolute_uri','_tag'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'lock'=>'y','galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'])); $_block_repeat=true; echo smarty_block_self_link(array('_type'=>'absolute_uri','_tag'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'lock'=>'y','galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_type'=>'absolute_uri','_tag'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'lock'=>'y','galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'; return false;"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'import','alt'=>"Download and lock"),$_smarty_tpl);?>
</a><?php } else { ?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['fileId'],'file','with_next');?>
lock=y"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'import','alt'=>"Download and lock"),$_smarty_tpl);?>
</a><?php }
}
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'lock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'lock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lock<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'lock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webdav']=='y') {
$_smarty_tpl->tpl_vars['virtual_path'] = new Smarty_variable(smarty_modifier_virtual_path($_smarty_tpl->tpl_vars['file']->value['fileId']), null, 0);
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open your draft in WebDAV<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n")); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open in WebDAV<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_share']->value=='y') {?><a href="tiki-share.php?url=<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;
echo smarty_modifier_escape(smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file'),'url');?>
"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'share','alt'=>"Share a link to this file"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tell_a_friend']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tell_a_friend']->value=='y') {?><a href="tiki-tell_a_friend.php?url=<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;
echo smarty_modifier_escape(smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file'),'url');?>
"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'envelope','alt'=>"Email a link to this file"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries']=='y'||(!$_smarty_tpl->tpl_vars['file']->value['lockedby']&&(($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['file']->value['user'])||($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_edit_gallery_file']=='y'&&$_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_remove_files']=='y')))) {?><a href="tiki-list_file_gallery.php?remove=<?php echo $_smarty_tpl->tpl_vars['file']->value['fileId'];?>
&galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'remove','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {
if ($_smarty_tpl->tpl_vars['menu_text']->value=='y'||$_smarty_tpl->tpl_vars['menu_icon']->value=='y') {?></form><?php }
}
}?>
<?php }} ?>
