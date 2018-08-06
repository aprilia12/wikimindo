<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\freetag_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2951307055b67ef3be992d7-47012470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b539b8ad23e0d1d0c8c72c33d11ea127cd9da17b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\freetag_list.tpl',
      1 => 1427025242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2951307055b67ef3be992d7-47012470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_view_freetags' => 0,
    'freetags' => 0,
    'taginfo' => 0,
    'links_inactive' => 0,
    'deleteTag' => 0,
    'tiki_p_admin' => 0,
    'freetags_mixed_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3bedf7e6_47140667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3bedf7e6_47140667')) {function content_5b67ef3bedf7e6_47140667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])) {?>
	<div class="freetaglist"><?php echo smarty_function_icon(array('name'=>"tags",'class'=>"tips btn btn-link btn-sm",'title'=>":Browse Tags",'href'=>"tiki-browse_freetags.php"),$_smarty_tpl);?>

		<?php  $_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('tagurl', null, null); ob_start();
if ((strstr($_smarty_tpl->tpl_vars['taginfo']->value['tag'],' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if (isset($_smarty_tpl->tpl_vars['links_inactive']->value)&&$_smarty_tpl->tpl_vars['links_inactive']->value=='y') {?>
				<a class="btn-default btn-sm" href="#"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
</a>
			<?php } else { ?>
				<a class="label label-default" href="tiki-browse_freetags.php?tag=<?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['tagurl'],'url');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
</a>
				<?php if (isset($_smarty_tpl->tpl_vars['deleteTag']->value)&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<a class="tips" title=":Untag <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag']);?>
" href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>delTag=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['taginfo']->value['tag'],'url');?>
">
						<?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Untag"),$_smarty_tpl);?>

					</a>&nbsp;
				<?php }?>
			<?php }?>
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['freetags_mixed_lang']->value)&&$_smarty_tpl->tpl_vars['freetags_mixed_lang']->value) {?>
			(<a href="<?php echo $_smarty_tpl->tpl_vars['freetags_mixed_lang']->value;?>
">Translate tags</a>)
		<?php }?>
	</div>
<?php }?><?php }} ?>
