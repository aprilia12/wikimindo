<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9212158475b67ef3c6214f7-54658195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047bf56258ad49d2f9bbfa600aa107f49a731b7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-footer.tpl',
      1 => 1488539920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9212158475b67ef3c6214f7-54658195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'comment' => 0,
    'forum_info' => 0,
    'tiki_p_ratings_view_results' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_forum_vote' => 0,
    'user' => 0,
    'tiki_p_admin_forum' => 0,
    'first' => 0,
    'thread_style' => 0,
    'comments_parentId' => 0,
    'forumId' => 0,
    'thread_is_locked' => 0,
    'tiki_p_forum_post' => 0,
    'forum_is_locked' => 0,
    'postclass' => 0,
    'comments_grandParentId' => 0,
    'comments_threshold' => 0,
    'comments_offset' => 0,
    'thread_sort_mode' => 0,
    'comments_per_page' => 0,
    'comment_grandParentId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3c654179_88234945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3c654179_88234945')) {function content_5b67ef3c654179_88234945($_smarty_tpl) {?><?php if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
if (!is_callable('smarty_function_rating')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating.php';
if (!is_callable('smarty_function_rating_result')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>
<div class="postfooter panel-footer clearfix">
	<div class="status pull-right">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_display_in_comment']=='y') {?>
		<span class="contributions">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment']->value['contributions']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<span class="contribution"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['contributions'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</span>
		<?php endfor; endif; ?>
		</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
		<span class="ratingResultAvg">Users rating: </span><?php echo smarty_function_rating_result_avg(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_vote']->value=='y') {?>
		<span class="score">
		<b>Score</b>: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['comment']->value['average']);?>

		<?php if ($_smarty_tpl->tpl_vars['comment']->value['userName']!=$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['comment']->value['approved']=='y'&&$_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_forum_vote']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y')) {?>
		<b>Vote</b>:

		<?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?>
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'changemandated'=>'y'),$_smarty_tpl);?>

			</form>
		<?php } else { ?>
			<?php echo smarty_function_rating(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'changemandated'=>'y'),$_smarty_tpl);?>

		<?php }?>

		<?php }?>
		</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
		<?php echo smarty_function_rating_result(array('type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['first']->value)&&$_smarty_tpl->tpl_vars['first']->value=='y') {?>
		<span class="post_reads">
			<b>Reads</b>: <?php echo $_smarty_tpl->tpl_vars['comment']->value['hits'];?>

		</span>
	<?php } else { ?>
		<span class="back_to_top">
			<a href="#top" class="tips" title=":top of page">
				<?php echo smarty_function_icon(array('name'=>'arrow-up'),$_smarty_tpl);?>

			</a>
		</span>
	<?php }?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers'&&isset($_smarty_tpl->tpl_vars['comment']->value['approved'])&&$_smarty_tpl->tpl_vars['comment']->value['approved']=='y') {?>
	<div class="actions">
		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y')) {?>
			<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forum post');
if (($_smarty_tpl->tpl_vars['comment']->value['threadId']!=$_smarty_tpl->tpl_vars['comments_parentId']->value)) {?>#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];
}?>">Link</a>
		<?php } else { ?>
			<a href="?tiki-view_forum_thread.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
">Link</a>
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_locking']!='y'||$_smarty_tpl->tpl_vars['thread_is_locked']->value!='y')&&($_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y'&&($_smarty_tpl->tpl_vars['forum_is_locked']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_comments_locking']!='y'))) {?>
			<?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?>
				<?php echo smarty_function_button(array('href'=>"#form",'_onclick'=>"show('".((string)$_smarty_tpl->tpl_vars['postclass']->value)."open');",'_text'=>"Reply"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['comments_grandParentId']->value) {?>
				<?php echo smarty_function_button(array('href'=>"?post_reply=1&comments_threshold=".((string)$_smarty_tpl->tpl_vars['comments_threshold']->value)."&comments_reply_threadId=".((string)$_smarty_tpl->tpl_vars['comment']->value['threadId'])."&comments_offset=".((string)$_smarty_tpl->tpl_vars['comments_offset']->value)."&thread_sort_mode=".((string)$_smarty_tpl->tpl_vars['thread_sort_mode']->value)."&comments_per_page=".((string)$_smarty_tpl->tpl_vars['comments_per_page']->value)."&comments_grandParentId=".((string)$_smarty_tpl->tpl_vars['comment_grandParentId']->value)."&comments_parentId=".((string)$_smarty_tpl->tpl_vars['comments_grandParentId']->value)."&thread_style=".((string)$_smarty_tpl->tpl_vars['thread_style']->value)."#form",'_auto_args'=>'*','_text'=>"Reply"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['forum_info']->value['is_flat']!='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_allow_flat_forum_quotes']=='y') {?>
				<?php echo smarty_function_button(array('href'=>"?post_reply=1&comments_threshold=".((string)$_smarty_tpl->tpl_vars['comments_threshold']->value)."&comments_reply_threadId=".((string)$_smarty_tpl->tpl_vars['comment']->value['threadId'])."&comments_offset=".((string)$_smarty_tpl->tpl_vars['comments_offset']->value)."&thread_sort_mode=".((string)$_smarty_tpl->tpl_vars['thread_sort_mode']->value)."&comments_per_page=".((string)$_smarty_tpl->tpl_vars['comments_per_page']->value)."&comments_grandParentId=".((string)$_smarty_tpl->tpl_vars['comment']->value['parentId'])."&comments_parentId=".((string)$_smarty_tpl->tpl_vars['comment']->value['parentId'])."&thread_style=".((string)$_smarty_tpl->tpl_vars['thread_style']->value)."#form",'_auto_args'=>'*','_text'=>"Reply"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	</div>
	<?php }?>

</div>
<?php }} ?>
