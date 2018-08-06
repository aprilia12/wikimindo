<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:36:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\fgal_file_link_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14081482765b63bfc131fcb2-21043354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a352e483f6c72ac4aee94508dfe1b404d0eddff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\fgal_file_link_attributes.tpl',
      1 => 1504894426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14081482765b63bfc131fcb2-21043354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'filegals_manager' => 0,
    'tiki_p_download_files' => 0,
    'gal_info' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bfc1333530_71989392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bfc1333530_71989392')) {function content_5b63bfc1333530_71989392($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?><?php if ($_smarty_tpl->tpl_vars['file']->value['isgal']==1) {?>href="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filegals_manager']->value);
}?>&amp;view=browse"<?php } else {
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['file']->value['wiki_syntax']);?>
');checkClose();return false;" title="Click here to use the file"<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_download_files']->value=='y') {
if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='podcast'||$_smarty_tpl->tpl_vars['gal_info']->value['type']=='vidcast') {?>href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['fgal_podcast_dir'];
echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
"<?php } else { ?>href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['type'],5,'',true)=='image') {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'preview');
} elseif ($_smarty_tpl->tpl_vars['file']->value['type']!='application/x-shockwave-flash') {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file');
} else {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');
}?>"<?php }
}
}?><?php }} ?>
