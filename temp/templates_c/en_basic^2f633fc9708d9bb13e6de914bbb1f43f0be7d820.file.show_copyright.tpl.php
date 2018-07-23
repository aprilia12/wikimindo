<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\show_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15897306455b554fcdc24e70-77865114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f633fc9708d9bb13e6de914bbb1f43f0be7d820' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\show_copyright.tpl',
      1 => 1458729188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15897306455b554fcdc24e70-77865114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'page' => 0,
    'copyright_context' => 0,
    'tiki_p_edit_copyrights' => 0,
    'copyrightpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b554fcdc63681_29784104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554fcdc63681_29784104')) {function content_5b554fcdc63681_29784104($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_copyright']=='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']) {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('copyright_content', null, null); ob_start(); ?>
			<div class="copyright">This content is licensed under the terms of the <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'],'wiki','with_next');?>
copyrightpage=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
</a>.</div>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='wiki') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']==$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['tiki_p_edit_copyrights']->value=='y') {?>
				<div class="help-block">To edit the copyright notices <a href="copyrights.php?page=<?php echo $_smarty_tpl->tpl_vars['copyrightpage']->value;?>
">Click Here</a>.</div>
			<?php } else { ?>
				<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='blogpost') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['article_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='article') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['faq_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['copyright_context']->value=='faq') {?>
			<?php echo Smarty::$_smarty_vars['capture']['copyright_content'];?>

		<?php }?>
	<?php }?>
<?php }?><?php }} ?>
