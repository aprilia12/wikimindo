<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19268233405b67ef3c4218f0-23015914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8706dca0cf11eb5bdbdc9069ced5688fd6845361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment.tpl',
      1 => 1416486688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19268233405b67ef3c4218f0-23015914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'thread_style' => 0,
    'prefs' => 0,
    'first' => 0,
    'subcomment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3c49aa93_40147073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3c49aa93_40147073')) {function content_5b67ef3c49aa93_40147073($_smarty_tpl) {?>
<?php if (empty($_smarty_tpl->tpl_vars['comment']->value['doNotShow'])||$_smarty_tpl->tpl_vars['comment']->value['doNotShow']!=1) {?>
	<article class="post <?php echo $_smarty_tpl->tpl_vars['thread_style']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation']=='y') {?> post-approved-<?php echo $_smarty_tpl->tpl_vars['comment']->value['approved'];
}?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['comments_archive']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?>archived_comment<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])) {?>id="threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
" <?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['comments_archive']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?>style="display: none;"<?php }?>>
		<div class="panel panel-default <!-- clearfix postbody-->">
			<?php echo $_smarty_tpl->getSubTemplate ('comment-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ('comment-body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('comment-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		</div>
	</article>
<?php }?>

<?php if ((!isset($_smarty_tpl->tpl_vars['first']->value)||$_smarty_tpl->tpl_vars['first']->value!='y')&&isset($_smarty_tpl->tpl_vars['comment']->value['replies_info'])&&$_smarty_tpl->tpl_vars['comment']->value['replies_info']['numReplies']>0&&$_smarty_tpl->tpl_vars['comment']->value['replies_info']['numReplies']!='') {?>
	<?php  $_smarty_tpl->tpl_vars["subcomment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subcomment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['replies_info']['replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subcomment"]->key => $_smarty_tpl->tpl_vars["subcomment"]->value) {
$_smarty_tpl->tpl_vars["subcomment"]->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['subcomment']->value['doNotShow']!=1&&$_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_plain') {?>
			<div class="sub_comment_area">
				<div class="sub_comment">
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['subcomment']->value), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['subcomment']->value['doNotShow']!=1&&$_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_plain') {?>
				</div>
			</div>
		<?php }?>
	<?php } ?>
<?php }?>
<?php }} ?>
