<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10055634965b67ef3c663b81-83588756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3adbb490ef8ef9f5f7094dd07c687ab5ee4cc98d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comments.tpl',
      1 => 1467769358,
      2 => 'file',
    ),
    '047bf56258ad49d2f9bbfa600aa107f49a731b7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-footer.tpl',
      1 => 1488539920,
      2 => 'file',
    ),
    '92e59df577548fb9d0df668e22058f7bb1f2eb19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-header.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
    '978ba5a698ed78a4a1621f6c4bcd87b210a36ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-body.tpl',
      1 => 1468898376,
      2 => 'file',
    ),
    '8706dca0cf11eb5bdbdc9069ced5688fd6845361' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment.tpl',
      1 => 1416486688,
      2 => 'file',
    ),
    '7340ab8c9937e56da31853e8601b383501c7054b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\contribution.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
    '914037e2628c47ccded63994d3ac984c2a08372b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\antibot.tpl',
      1 => 1516528532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10055634965b67ef3c663b81-83588756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_forum_read' => 0,
    'comments_cant' => 0,
    'comments_request_data' => 0,
    'comments_parentId' => 0,
    'comments_grandParentId' => 0,
    'comments_reply_threadId' => 0,
    'comments_objectId' => 0,
    'topics_encoded' => 0,
    'forumId' => 0,
    'tiki_p_admin_forum' => 0,
    'reported' => 0,
    'queued' => 0,
    'topics' => 0,
    'prefs' => 0,
    'section' => 0,
    'comments_per_page' => 0,
    'forum_info' => 0,
    'thread_style' => 0,
    'thread_sort_mode' => 0,
    'comments_threshold' => 0,
    'comments_commentFind' => 0,
    'comments_coms' => 0,
    'comments_below' => 0,
    'comments_cant_pages' => 0,
    'comments_prev_offset' => 0,
    'display' => 0,
    'comments_complete_father' => 0,
    'thread_sort_mode_param' => 0,
    'comments_actual_page' => 0,
    'comments_next_offset' => 0,
    'selector_offset' => 0,
    'tiki_p_forum_post' => 0,
    'thread_is_locked' => 0,
    'lock_text' => 0,
    'post_reply' => 0,
    'edit_reply' => 0,
    'comment_preview' => 0,
    'postclass' => 0,
    'comments_threadId' => 0,
    'parent_com' => 0,
    'comment_preview_data' => 0,
    'comments_offset' => 0,
    'page' => 0,
    'user' => 0,
    'comment_title' => 0,
    'tikifeedback' => 0,
    'comment_data' => 0,
    'user_watching_topic' => 0,
    'tiki_p_forum_attach' => 0,
    'parent_coms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3c82cc63_65645561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3c82cc63_65645561')) {function content_5b67ef3c82cc63_65645561($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_times')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.times.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>

<div>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y') {?>

	
	
	
	

	<?php if ($_smarty_tpl->tpl_vars['comments_cant']->value>0) {?>
		<form method="get" id="comment-form" class="comments">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments_request_data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<input type="hidden" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_request_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_request_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']);?>
">
			<?php endfor; endif; ?>
			
			<input type="hidden" name="controller" value="forum">
			<input type="hidden" name="comments_parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_parentId']->value);?>
">
			<input type="hidden" name="comments_grandParentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_grandParentId']->value);?>
">
			<input type="hidden" name="comments_reply_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_reply_threadId']->value);?>
">
			<input type="hidden" name="comments_objectId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_objectId']->value);?>
">
			<input type="hidden" name="comments_offset" value="0">
			<input type="hidden" name="comments_coms" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topics_encoded']->value);?>
">
			<?php if ($_REQUEST['topics_offset']) {?><input type="hidden" name="topics_offset" value="<?php echo smarty_modifier_escape($_REQUEST['topics_offset']);?>
"><?php }?>
			<?php if ($_REQUEST['topics_find']) {?><input type="hidden" name="topics_find" value="<?php echo smarty_modifier_escape($_REQUEST['topics_find']);?>
"><?php }?>
			<?php if ($_REQUEST['topics_sort_mode']) {?><input type="hidden" name="topics_sort_mode" value="<?php echo smarty_modifier_escape($_REQUEST['topics_sort_mode']);?>
"><?php }?>
			<?php if ($_REQUEST['topics_threshold']) {?><input type="hidden" name="topics_threshold" value="<?php echo smarty_modifier_escape($_REQUEST['topics_threshold']);?>
"><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['forumId']->value) {?><input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
"><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
				<div class="panel panel-primary form-group">
					<div class="panel-heading">
						Moderator actions for selected topics
					</div>
					<div class="panel-body form-inline">
						<span class="infos pull-right">
							<?php if ($_smarty_tpl->tpl_vars['reported']->value>0) {?>
								<a class="btn btn-default btn-sm tips" href="tiki-forums_reported.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
" title=":Reported messages">Reported <span class="badge"><?php echo $_smarty_tpl->tpl_vars['reported']->value;?>
</span></a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['queued']->value>0) {?>
								<a class="btn btn-default btn-sm tips" href="tiki-forum_queue.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
" title=":Queued messages">Queued <span class="badge"><?php echo $_smarty_tpl->tpl_vars['queued']->value;?>
</span></a>
							<?php }?>
						</span>
						<?php if (count($_smarty_tpl->tpl_vars['topics']->value)>1) {?>
							<button
								type="submit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'merge_topic'),$_smarty_tpl);?>
" title=":Merge"
								form="comment-form"
								class="btn btn-default btn-sm tips confirm-submit"
							>
								<?php echo smarty_function_icon(array('name'=>"merge"),$_smarty_tpl);?>

							</button>
						<?php }?>
						<button
							type="submit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic'),$_smarty_tpl);?>
" title=":Delete"
							form="comment-form"
							class="btn btn-default btn-sm tips confirm-submit"
						>
							<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

						</button>
					</div>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_thread_user_settings']=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['comments_cant']->value>0&&$_smarty_tpl->tpl_vars['section']->value=='blogs') {?>
					
					<?php $_smarty_tpl->_capture_stack[0][] = array('comments_cant_title', null, null); ob_start();
if ($_smarty_tpl->tpl_vars['comments_cant']->value==1) {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 comments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['comments_cant']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<h3><?php echo Smarty::$_smarty_vars['capture']['comments_cant_title'];?>
</h3>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['comments_cant']->value>$_smarty_tpl->tpl_vars['prefs']->value['forum_thread_user_settings_threshold']) {?>
					<div class="forum_actions">
						<div class="actions">
							<span class="action">
								<label for="comments-maxcomm">Messages:</label>
								<select name="comments_per_page" id="comments-maxcomm">
									<option value="10" <?php if ($_smarty_tpl->tpl_vars['comments_per_page']->value==10) {?>selected="selected"<?php }?>>10</option>
									<option value="20" <?php if ($_smarty_tpl->tpl_vars['comments_per_page']->value==20) {?>selected="selected"<?php }?>>20</option>
									<option value="30" <?php if ($_smarty_tpl->tpl_vars['comments_per_page']->value==30) {?>selected="selected"<?php }?>>30</option>
									<option value="999999" <?php if ($_smarty_tpl->tpl_vars['comments_per_page']->value==999999) {?>selected="selected"<?php }?>>All</option>
								</select>

								<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['is_flat']!='y') {?>
									<label for="comments-style">Style:</label>
									<select name="thread_style" id="comments-style">
										<option value="commentStyle_plain" <?php if ($_smarty_tpl->tpl_vars['thread_style']->value=='commentStyle_plain') {?>selected="selected"<?php }?>>Plain</option>
										<option value="commentStyle_threaded" <?php if ($_smarty_tpl->tpl_vars['thread_style']->value=='commentStyle_threaded') {?>selected="selected"<?php }?>>Threaded</option>
										<option value="commentStyle_headers" <?php if ($_smarty_tpl->tpl_vars['thread_style']->value=='commentStyle_headers') {?>selected="selected"<?php }?>>Headers only</option>
									</select>
								<?php }?>

								<label for="comments-sort">Sort:</label>
								<select name="thread_sort_mode" id="comments-sort">
									<option value="commentDate_desc" <?php if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value=='commentDate_desc') {?>selected="selected"<?php }?>>Newest first</option>
									<option value="commentDate_asc" <?php if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value=='commentDate_asc') {?>selected="selected"<?php }?>>Oldest first</option>
									<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y') {?>
										<option value="points_desc" <?php if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value=='points_desc') {?>selected="selected"<?php }?>>Score</option>
									<?php }?>
									<option value="title_desc" <?php if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value=='title_desc') {?>selected="selected"<?php }?>>Title (desc)</option>
									<option value="title_asc" <?php if ($_smarty_tpl->tpl_vars['thread_sort_mode']->value=='title_asc') {?>selected="selected"<?php }?>>Title (asc)</option>
								</select>

								<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['vote_threads']=='y') {?>
									<label for="comments-thresh">Threshold:</label>
									<select name="comments_threshold" id="comments-thresh">
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value==0) {?>selected="selected"<?php }?>>All</option>
										<option value="0.01" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value=='0.01') {?>selected="selected"<?php }?>>0</option>
										<option value="1" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value==1) {?>selected="selected"<?php }?>>1</option>
										<option value="2" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value==2) {?>selected="selected"<?php }?>>2</option>
										<option value="3" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value==3) {?>selected="selected"<?php }?>>3</option>
										<option value="4" <?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value==4) {?>selected="selected"<?php }?>>4</option>
									</select>
								<?php }?>

								<label for="comments-search">Search:</label>
								<input type="text" size="7" name="comments_commentFind" id="comments-search" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_commentFind']->value);?>
">

								<input type="submit" class="btn btn-default btn-sm" name="comments_setOptions" value="Set">
							</span>
						</div>
					</div>
				<?php }?>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rep'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['name'] = 'rep';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments_coms']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total']);
?>
				<?php echo $_smarty_tpl->getSubTemplate ('comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]), 0);?>

				<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_plain') {?><br><?php }?>
			<?php endfor; endif; ?>
		</form>

		<div class="thread_pagination">
			<?php if ($_smarty_tpl->tpl_vars['comments_threshold']->value!=0) {?>
				<div class="nb_replies">
					<?php echo $_smarty_tpl->tpl_vars['comments_below']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['comments_below']->value==1) {?>Reply<?php } else { ?>Replies<?php }?> below your current threshold
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['comments_cant_pages']->value>1) {?>
				<div class="center-block">
					<?php if ($_smarty_tpl->tpl_vars['comments_prev_offset']->value>=0&&!$_smarty_tpl->tpl_vars['display']->value=='') {?>
						[<a class="prevnext" href="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_prev_offset']->value;
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
&amp;thread_style=<?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
">Prev</a>]&nbsp;
					<?php }?>

					Page: <?php echo $_smarty_tpl->tpl_vars['comments_actual_page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['comments_cant_pages']->value;?>


					<?php if ($_smarty_tpl->tpl_vars['comments_next_offset']->value>=0&&$_smarty_tpl->tpl_vars['display']->value=='') {?>
						&nbsp;[<a class="prevnext" href="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_next_offset']->value;
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
&amp;thread_style=<?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
">Next</a>]
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['direct_pagination']=='y'&&$_smarty_tpl->tpl_vars['display']->value=='') {?>
						<br>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments_cant_pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
							<?php $_smarty_tpl->tpl_vars['selector_offset'] = new Smarty_variable(smarty_modifier_times($_smarty_tpl->getVariable('smarty')->value['section']['foo']['index'],$_smarty_tpl->tpl_vars['comments_per_page']->value), null, 0);?>
							<a class="prevnext" href="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['selector_offset']->value;
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
&amp;thread_style=<?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
">
							<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['index_next'];?>
</a>&nbsp;
						<?php endfor; endif; ?>
					<?php }?>
				</div>
			<?php }?>
		</div>
	<?php }?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['section']->value=='forums') {?><a id="comments"></a><?php }?>



<?php if ($_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['thread_is_locked']->value=='y') {?>
		<?php $_smarty_tpl->tpl_vars['lock_text'] = new Smarty_variable("This thread is locked", null, 0);?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note",'icon'=>"lock")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note",'icon'=>"lock"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['lock_text']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note",'icon'=>"lock"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<div id="form">
			<?php if ($_smarty_tpl->tpl_vars['post_reply']->value>0||$_smarty_tpl->tpl_vars['edit_reply']->value>0||$_smarty_tpl->tpl_vars['comment_preview']->value) {?>
				
				<div id='<?php echo $_smarty_tpl->tpl_vars['postclass']->value;?>
open' class="threadpost">
			<?php } else { ?>
				<input type="button" name="comments_postComment" value="New Reply" onclick="flip('<?php echo $_smarty_tpl->tpl_vars['postclass']->value;?>
');">
				<div id='<?php echo $_smarty_tpl->tpl_vars['postclass']->value;?>
' class="threadpost">
			<?php }?>

					<div>
						<h3>
							<?php if ($_smarty_tpl->tpl_vars['comments_threadId']->value>0) {?>Editing reply<?php } elseif ($_smarty_tpl->tpl_vars['comment_preview']->value=='y') {?>Preview<?php } elseif ($_smarty_tpl->tpl_vars['parent_com']->value) {?>Reply to the selected post<?php } else { ?>Post new message<?php }?>
						</h3>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['comment_preview']->value=='y') {?>
						<?php /*  Call merged included template "comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comment_preview_data']->value), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c6d5017_47519649($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment.tpl" */?>
					<?php }?>

					<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
#comments" id='editpostform'>
						<input type="hidden" name="comments_reply_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_reply_threadId']->value);?>
">
						<input type="hidden" name="comments_grandParentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_grandParentId']->value);?>
">
						<input type="hidden" name="comments_parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_parentId']->value);?>
">
						<input type="hidden" name="comments_offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_offset']->value);?>
">
						<input type="hidden" name="comments_threadId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threadId']->value);?>
">
						<input type="hidden" name="comments_threshold" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_threshold']->value);?>
">
						<input type="hidden" name="thread_sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['thread_sort_mode']->value);?>
">
						<input type="hidden" name="comments_objectId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_objectId']->value);?>
">
						<input type="hidden" name="comments_title" value="<?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['page']->value) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
}?>">

						
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments_request_data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<input type="hidden" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_request_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_request_data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value']);?>
">
						<?php endfor; endif; ?>

						<?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="anonymous_name">Name</label>
								<div class="col-sm-10">
									<input type="text" maxlength="50" size="30" id="anonymous_name" name="anonymous_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_preview_data']->value['name']);?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="anonymous_email">If you would like to be notified when someone replies to this topic<br>please tell us your e-mail address</label>
								<div class="col-sm-10">
									<input type="text" size="30" id="anonymous_email" name="anonymous_email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_preview_data']->value['email']);?>
">
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_reply_notitle']!='y') {?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="comments-title">Title <span class="text-danger">*</span> </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="comments_title" id="comments-title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment_title']->value);?>
">
								</div>
							</div>
						<?php }?>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="editpost2">Reply</label>
							<div class="col-sm-10">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_forum_parse']=='y') {?>
									<?php $_smarty_tpl->tpl_vars['forum_wysiwyg'] = new Smarty_variable('y', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['forum_wysiwyg'] = new Smarty_variable('n', null, 0);?>
								<?php }?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('rows'=>"10",'codemirror'=>'true','syntax'=>'tiki','id'=>"editpost2",'class'=>"form-control",'name'=>"comments_data",'_wysiwyg'=>'n')); $_block_repeat=true; echo smarty_block_textarea(array('rows'=>"10",'codemirror'=>'true','syntax'=>'tiki','id'=>"editpost2",'class'=>"form-control",'name'=>"comments_data",'_wysiwyg'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_replyempty']!='y')||$_smarty_tpl->tpl_vars['edit_reply']->value>0||$_smarty_tpl->tpl_vars['comment_preview']->value=='y'||!empty($_smarty_tpl->tpl_vars['tikifeedback']->value)) {
echo $_smarty_tpl->tpl_vars['comment_data']->value;
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('rows'=>"10",'codemirror'=>'true','syntax'=>'tiki','id'=>"editpost2",'class'=>"form-control",'name'=>"comments_data",'_wysiwyg'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
									<div id="watch_thread_on_reply">
										<input id="watch_thread" type="checkbox" name="watch" value="y"<?php if ($_smarty_tpl->tpl_vars['user_watching_topic']->value=='y'||$_REQUEST['watch']=='y') {?> checked="checked"<?php }?>> <label for="watch_thread">Send me an email when someone replies</label>
									</div>
								<?php }?>
							</div>
						</div>

						<?php if (($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_all')||($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_admin'&&($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||$_smarty_tpl->tpl_vars['forum_info']->value['moderator']==$_smarty_tpl->tpl_vars['user']->value))||($_smarty_tpl->tpl_vars['forum_info']->value['att']=='att_perm'&&$_smarty_tpl->tpl_vars['tiki_p_forum_attach']->value=='y')) {?>
							<?php $_smarty_tpl->tpl_vars['can_attach_file'] = new Smarty_variable('y', null, 0);?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="userfile1">
									Attach a file
								</label>
								<div class="col-sm-10">
									<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_info']->value['att_max_size']);?>
"><input class="form-control" id="userfile1" name="userfile1" type="file">Maximum size: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['forum_info']->value['att_max_size']);?>

								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<?php /*  Call merged included template "contribution.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('in_comment'=>"y"), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c7e28d1_04135109($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "contribution.tpl" */?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
							<?php $_smarty_tpl->tpl_vars['showmandatory'] = new Smarty_variable('y', null, 0);?>
							<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('td_style'=>"formcolor"), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c801ce2_99200187($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
						<?php }?>

						<div class="form-group">
							<?php if (isset($_smarty_tpl->tpl_vars['parent_coms']->value)&&$_smarty_tpl->tpl_vars['parent_coms']->value) {?>
								<label class="col-sm-2 control-label" for="comments_postComment">
									Reply to parent post
								</label>
							<?php } else { ?>
								<label class="col-sm-2 control-label" for="comments_postComment">
									Post new reply
								</label>
							<?php }?>
							<div class="col-sm-10">
								<input type="submit" class="btn btn-default btn-sm" id="comments_postComment" name="comments_postComment" value="Post" onclick="needToConfirm=false;">
								<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_comments_post_as_anonymous']=='y') {?>
									<input type="submit" class="btn btn-default btn-sm" name="comments_postComment_anonymous" value="Post as Anonymous" onclick="needToConfirm=false;">
								<?php }?>
								<input type="submit" class="btn btn-default btn-sm" name="comments_previewComment" id="comments_previewComment" value="Preview">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#comments_previewComment").click(function () {
									if ($("#userfile1").val()) {
									alert("Please note that the preview does not keep the attached file which you will have to choose before posting.");
									}
									needToConfirm=false;
									});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<input type="submit" class="btn btn-default btn-sm" name="comments_cancelComment" value="Cancel" onclick="hide('<?php echo $_smarty_tpl->tpl_vars['postclass']->value;?>
open'); return false">
							</div>
						</div>
					</form>
					<?php $_smarty_tpl->tpl_vars['tips_title'] = new Smarty_variable("Posting replies", null, 0);?>

			</div>
		</div>
	<?php }?>
<?php }?>


</div>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_reply_forcetitle']=='y') {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#editpostform').submit( function() {
	if (!$('#comments-title').val()) {
		alert('Please enter a title');
		return false;
	}
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var $forum = $("#editpostform");
	$forum.submit(function() {
		// prevent double submission
		if (!$forum.data("sub")) {
			$forum.tikiModal('Save in Progress...');
			$forum.data("sub", true);
			$forum.submit();
		}
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c6d5017_47519649')) {function content_5b67ef3c6d5017_47519649($_smarty_tpl) {?>
<?php if (empty($_smarty_tpl->tpl_vars['comment']->value['doNotShow'])||$_smarty_tpl->tpl_vars['comment']->value['doNotShow']!=1) {?>
	<article class="post <?php echo $_smarty_tpl->tpl_vars['thread_style']->value;
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation']=='y') {?> post-approved-<?php echo $_smarty_tpl->tpl_vars['comment']->value['approved'];
}?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['comments_archive']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?>archived_comment<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])) {?>id="threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
" <?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['comments_archive']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?>style="display: none;"<?php }?>>
		<div class="panel panel-default <!-- clearfix postbody-->">
			<?php /*  Call merged included template "comment-header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c6dcd15_29586438($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment-header.tpl" */?>
			<?php /*  Call merged included template "comment-body.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment-body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c769730_46311081($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment-body.tpl" */?>
			<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers') {?>
					<?php /*  Call merged included template "comment-footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c732c38_80743295($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment-footer.tpl" */?>
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
		<?php /*  Call merged included template "comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['subcomment']->value), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c6d5017_47519649($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment.tpl" */?>
		<?php if ($_smarty_tpl->tpl_vars['subcomment']->value['doNotShow']!=1&&$_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_plain') {?>
				</div>
			</div>
		<?php }?>
	<?php } ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c6dcd15_29586438')) {function content_5b67ef3c6dcd15_29586438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_monitor_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.monitor_link.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>
<header class="panel-heading clearfix postbody-title media-overflow-visible"> 
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_locking']!='y'||($_smarty_tpl->tpl_vars['comment']->value['locked']!='y'&&$_smarty_tpl->tpl_vars['thread_is_locked']->value!='y')) {?>
		<?php $_smarty_tpl->tpl_vars['this_is_locked'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['this_is_locked'] = new Smarty_variable('y', null, 0);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers'&&$_smarty_tpl->tpl_vars['this_is_locked']->value=='n'&&isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])&&$_smarty_tpl->tpl_vars['comment']->value['threadId']>0) {?>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>

		<div class="actions pull-right btn-group">
			<?php $_smarty_tpl->_capture_stack[0][] = array('comment_actions', null, null); ob_start(); ?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['threadId']==$_smarty_tpl->tpl_vars['comments_parentId']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<div><?php echo smarty_function_monitor_link(array('type'=>"forum post",'object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'class'=>'tips','linktext'=>"Notification"),$_smarty_tpl);?>
</div><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'||($_smarty_tpl->tpl_vars['comment']->value['userName']==$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_forum_edit_own_posts']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a <?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?> href="tiki-view_forum.php?comments_offset=<?php echo $_REQUEST['topics_offset'];
if (isset($_smarty_tpl->tpl_vars['thread_sort_mode_param']->value)) {
echo $_smarty_tpl->tpl_vars['thread_sort_mode_param']->value;
}?>&amp;comments_threshold=<?php echo $_REQUEST['topics_threshold'];
if (isset($_smarty_tpl->tpl_vars['comments_find_param']->value)) {
echo $_smarty_tpl->tpl_vars['comments_find_param']->value;
}?>&amp;comments_threadId=<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
&amp;openpost=1&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];
if (isset($_smarty_tpl->tpl_vars['comments_per_page_param']->value)) {
echo $_smarty_tpl->tpl_vars['comments_per_page_param']->value;
}?>"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['comments_complete_father']->value;?>
comments_threadId=<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
&amp;comments_threshold=<?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
&amp;comments_offset=<?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
&amp;thread_sort_mode=<?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
&amp;comments_per_page=<?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
&amp;comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
&amp;thread_style=<?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
&amp;edit_reply=1#form"<?php }?>><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?><a <?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp40=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
<?php $_tmp41=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
<?php $_tmp42=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp43=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp44=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp45=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp46=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic','forumId'=>$_tmp40,'comments_threshold'=>$_tmp41,'forumtopic'=>$_tmp42,'comments_offset'=>$_tmp43,'thread_sort_mode'=>$_tmp44,'comments_find'=>$_tmp45,'comments_per_page'=>$_tmp46),$_smarty_tpl);?>
"<?php } else { ?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp47=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_threshold']->value;?>
<?php $_tmp48=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
<?php $_tmp49=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_offset']->value;?>
<?php $_tmp50=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp52=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_style']->value;?>
<?php $_tmp54=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_topic','forumId'=>$_tmp47,'comments_threshold'=>$_tmp48,'forumtopic'=>$_tmp49,'comments_offset'=>$_tmp50,'thread_sort_mode'=>$_tmp51,'comments_per_page'=>$_tmp52,'comments_parentId'=>$_tmp53,'thread_style'=>$_tmp54),$_smarty_tpl);?>
"<?php }?>><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete post"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_forums_report']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report this post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('report'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'error','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_notepad']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_notepad']->value=='y'&&$_smarty_tpl->tpl_vars['forumId']->value) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save to notepad<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('savenotepad'=>$_smarty_tpl->tpl_vars['comment']->value['threadId'],'_icon_name'=>'floppy','_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['display']->value=='') {
if ($_smarty_tpl->tpl_vars['first']->value=='y') {
if ($_smarty_tpl->tpl_vars['user_watching_topic']->value=='n') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch')); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Monitor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'add','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'watch'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching')); $_block_repeat=true; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stop monitoring<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch_event'=>'forum_post_thread','watch_object'=>$_smarty_tpl->tpl_vars['comments_parentId']->value,'watch_action'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>'stop-watching'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments_parentId']->value,"url");?>
&amp;watch_event=forum_post_thread&amp;objectType=forum&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['title'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(((('tiki-view_forum_thread.php?comments_parentId=').($_smarty_tpl->tpl_vars['comments_parentId']->value)).('&forumId=')).($_smarty_tpl->tpl_vars['forumId']->value),"url");?>
"><?php echo smarty_function_icon(array('name'=>"watch-group",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Group monitor"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
}?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a
				class="tips pull-right"
				title="Actions"
				href="#"
				<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['comment_actions']),$_smarty_tpl);
}?>
				style="padding:0; margin:0; border:0"
			>
				<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
				<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['comment_actions'];?>
</ul></li></ul>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['category_watched']->value=='y') {?><br>
				<div class="categbar pull-right">
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
		</div>
	<?php }?>

	<?php if (!isset($_smarty_tpl->tpl_vars['first']->value)||$_smarty_tpl->tpl_vars['first']->value!='y') {?>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'&&isset($_smarty_tpl->tpl_vars['comment']->value['threadId'])&&$_smarty_tpl->tpl_vars['comment']->value['threadId']>0) {?>
		<input type="checkbox" name="forumtopic[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['threadId']);?>
" <?php if ($_REQUEST['forumthread']&&in_array($_smarty_tpl->tpl_vars['comment']->value['threadId'],$_REQUEST['forumthread'])) {?>checked="checked"<?php }?>>
		<?php }?>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['comment']->value['title']!=''&&$_smarty_tpl->tpl_vars['comment']->value['title']!='Untitled'&&(!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['comment']->value['title']!=$_smarty_tpl->tpl_vars['page']->value)) {?>
	<!-- <div class="title"> -->
	<?php if (isset($_smarty_tpl->tpl_vars['first']->value)&&$_smarty_tpl->tpl_vars['first']->value=='y') {?>
	<h2 class=" panel-title">
		<span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['title']);?>
</span>
		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y')) {?>
		<a class="heading-link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forum post');
if (($_smarty_tpl->tpl_vars['comment']->value['threadId']!=$_smarty_tpl->tpl_vars['comments_parentId']->value)) {?>#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];
}?>"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
</a>
		<?php } else { ?>
		<a class="heading-link" href="?tiki-view_forum_thread.php?forumId=<?php echo $_smarty_tpl->tpl_vars['forumId']->value;?>
&comments_parentId=<?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
#threadId<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
</a>
		<?php }?>
	</h2>
	<?php }?>

	<!-- </div> -->
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value=='commentStyle_headers') {?>
		<?php /*  Call merged included template "comment-footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comments_coms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]), 0, '10055634965b67ef3c663b81-83588756');
content_5b67ef3c732c38_80743295($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment-footer.tpl" */?>
	<?php }?>
</header>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c732c38_80743295')) {function content_5b67ef3c732c38_80743295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
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
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-body.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c769730_46311081')) {function content_5b67ef3c769730_46311081($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_function_rating_choice')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_choice.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_countryflag')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.countryflag.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_rating')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating.php';
if (!is_callable('smarty_function_rating_result')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<div class="postbody-content panel-body">

	<div class="clearfix author">

	<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers') {?>
		<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_avatar']=='y'&&isset($_smarty_tpl->tpl_vars['comment']->value['userName'])&&smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comment']->value['userName'])) {?>
			<span class="avatar">
				<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comment']->value['userName']);?>

			</span>
		<?php }?>
	<?php }?>

		<span class="author_info">

			<span class="author_post_info">
				<?php if ($_smarty_tpl->tpl_vars['first']->value!='y'&&$_smarty_tpl->tpl_vars['forum_info']->value['ui_rating_choice_topic']=='y') {?>
					<?php echo smarty_function_rating_choice(array('comment_author'=>$_smarty_tpl->tpl_vars['comment']->value['userName'],'type'=>'comment','id'=>$_smarty_tpl->tpl_vars['comments_parentId']->value),$_smarty_tpl);?>

				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['anonymous_name'])&&$_smarty_tpl->tpl_vars['comment']->value['anonymous_name']) {?>
					Posted by <span class="author_post_info_by"><?php if ($_smarty_tpl->tpl_vars['comment']->value['website']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['website'];?>
" target="_blank"><?php }
echo $_smarty_tpl->tpl_vars['comment']->value['anonymous_name'];
if ($_smarty_tpl->tpl_vars['comment']->value['website']) {?></a><?php }?></span>
				<?php } elseif (isset($_smarty_tpl->tpl_vars['comment']->value['userName'])) {?>
					Posted by <span class="author_post_info_by"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName']);?>
</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['commentDate']>0) {?>
					<span class="author_post_info_on"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate'],'on');?>
</span>
				<?php }?>
			</span>
		<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers') {?>
			<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_posts']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['user_posts']) {?>
			<span class="author_posts">
				posts: <?php echo $_smarty_tpl->tpl_vars['comment']->value['user_posts'];?>

			</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_level']=='y'&&$_smarty_tpl->tpl_vars['comment']->value['user_level']) {?>
			<span class="author_stars">
				<?php $_smarty_tpl->tpl_vars['levelstars'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['levelstars']->step = 1;$_smarty_tpl->tpl_vars['levelstars']->total = (int) ceil(($_smarty_tpl->tpl_vars['levelstars']->step > 0 ? $_smarty_tpl->tpl_vars['comment']->value['user_level']+1 - (1) : 1-($_smarty_tpl->tpl_vars['comment']->value['user_level'])+1)/abs($_smarty_tpl->tpl_vars['levelstars']->step));
if ($_smarty_tpl->tpl_vars['levelstars']->total > 0) {
for ($_smarty_tpl->tpl_vars['levelstars']->value = 1, $_smarty_tpl->tpl_vars['levelstars']->iteration = 1;$_smarty_tpl->tpl_vars['levelstars']->iteration <= $_smarty_tpl->tpl_vars['levelstars']->total;$_smarty_tpl->tpl_vars['levelstars']->value += $_smarty_tpl->tpl_vars['levelstars']->step, $_smarty_tpl->tpl_vars['levelstars']->iteration++) {
$_smarty_tpl->tpl_vars['levelstars']->first = $_smarty_tpl->tpl_vars['levelstars']->iteration == 1;$_smarty_tpl->tpl_vars['levelstars']->last = $_smarty_tpl->tpl_vars['levelstars']->iteration == $_smarty_tpl->tpl_vars['levelstars']->total;?>
					<span>☆</span>
				<?php }} ?>
			</span>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['userName'])&&!empty($_smarty_tpl->tpl_vars['comment']->value['user_exists'])) {?>
			<span class="icons">
				<span class="actions">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y') {?>
						<a class="tips" title=":Private message" href="messu-compose.php?to=<?php echo $_smarty_tpl->tpl_vars['comment']->value['userName'];?>
&amp;subject=Re:%20<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['title'],"htmlall");?>
">
							<?php echo smarty_function_icon(array('name'=>'user','alt'=>"private message"),$_smarty_tpl);?>

						</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_email']=='y'&&strlen($_smarty_tpl->tpl_vars['comment']->value['user_email'])>0&&$_smarty_tpl->tpl_vars['display']->value=='') {?>
						<a class="tips" title=":Send eMail to user" href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['user_email'],'hex');?>
">
							<?php echo smarty_function_icon(array('name'=>'envelope'),$_smarty_tpl);?>

						</a>
					<?php }?>
				</span>
				<span class="infos">
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_online']=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['comment']->value['user_online']=='y') {?>
							<?php echo smarty_function_icon(array('name'=>'ok','class'=>"tips",'title'=>":User online"),$_smarty_tpl);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['user_online']=='n') {?>
							<?php echo smarty_function_icon(array('name'=>'ban','class'=>"tips",'title'=>":User offline"),$_smarty_tpl);?>

						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['forum_info']->value['ui_flag']=='y'&&smarty_modifier_countryflag($_smarty_tpl->tpl_vars['comment']->value['userName'])) {?>
						<?php echo smarty_modifier_countryflag($_smarty_tpl->tpl_vars['comment']->value['userName']);?>

					<?php }?>
				</span>
			</span>
			<?php }?>
		<?php }?>
		</span>
	</div>

<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers') {?>

	<?php echo $_smarty_tpl->tpl_vars['comment']->value['parsed'];?>

	

<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['thread_style']->value!='commentStyle_headers'&&isset($_smarty_tpl->tpl_vars['comment']->value['attachments'])&&count($_smarty_tpl->tpl_vars['comment']->value['attachments'])>0) {?>
<div class="attachments<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment']->value['attachments']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<a class="tips" href="tiki-download_forum_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
" title=":Download attachment">
	<?php echo smarty_function_icon(array('name'=>'attach','alt'=>"Attachment"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filesize']);?>
)</a>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
		<a
			<?php if ($_smarty_tpl->tpl_vars['first']->value=='y') {?>
				href="<?php ob_start();?><?php echo $_REQUEST['topics_offset'];?>
<?php $_tmp55=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_sort_mode'];?>
<?php $_tmp56=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp57=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp58=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp59=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp60=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp61=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp62=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp63=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
<?php $_tmp64=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
<?php $_tmp65=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_attachment','topics_offset'=>$_tmp55,'topics_sort_mode'=>$_tmp56,'topics_find'=>$_tmp57,'topics_threshold'=>$_tmp58,'comments_threshold'=>$_tmp59,'comments_find'=>$_tmp60,'forumId'=>$_tmp61,'comments_per_page'=>$_tmp62,'comments_parentId'=>$_tmp63,'remove_attachment'=>$_tmp64,'filename'=>$_tmp65),$_smarty_tpl);?>
"
			<?php } else { ?>
				href="<?php ob_start();?><?php echo $_REQUEST['topics_offset'];?>
<?php $_tmp66=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_sort_mode'];?>
<?php $_tmp67=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp68=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp69=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp70=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp71=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp72=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp73=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp74=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
<?php $_tmp75=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
<?php $_tmp76=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_offset'];?>
<?php $_tmp77=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp78=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_attachment','topics_offset'=>$_tmp66,'topics_sort_mode'=>$_tmp67,'topics_find'=>$_tmp68,'topics_threshold'=>$_tmp69,'comments_threshold'=>$_tmp70,'comments_find'=>$_tmp71,'forumId'=>$_tmp72,'comments_per_page'=>$_tmp73,'comments_parentId'=>$_tmp74,'remove_attachment'=>$_tmp75,'filename'=>$_tmp76,'comments_offset'=>$_tmp77,'thread_sort_mode'=>$_tmp78),$_smarty_tpl);?>
"
			<?php }?>
			class="btn-link tips"
			title=":Remove attachment"
		>
				<?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Remove attachment"),$_smarty_tpl);?>

		</a>
	<?php }?>
	<br>
	<?php endfor; endif; ?>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['deliberations'])&&$_smarty_tpl->tpl_vars['tiki_p_forum_vote']->value=='y'&&$_smarty_tpl->tpl_vars['comment']->value['type']=='d') {?>
	<div>
		<div class="ui-widget-header">Deliberation Items</div>
		<?php  $_smarty_tpl->tpl_vars['deliberation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['deliberation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['deliberations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['deliberation']->key => $_smarty_tpl->tpl_vars['deliberation']->value) {
$_smarty_tpl->tpl_vars['deliberation']->_loop = true;
?>
			<div class="ui-widget-content">
				<?php echo $_smarty_tpl->tpl_vars['deliberation']->value['data'];?>

				<form class="forumDeliberationRatingForm" method="post" action="" style="float: right;">
					<?php echo smarty_function_rating(array('type'=>"comment",'id'=>$_smarty_tpl->tpl_vars['deliberation']->value['threadId']),$_smarty_tpl);?>

					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['deliberation']->value['threadId'];?>
">
					<input type="hidden" name="type" value="comment">
				</form>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<?php echo smarty_function_rating_result(array('type'=>"comment",'id'=>$_smarty_tpl->tpl_vars['deliberation']->value['threadId']),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php } ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var crf = $('form.forumDeliberationRatingForm').submit(function() {
				var vals = $(this).serialize();
				$.tikiModal(tr('Loading...'));
				$.get('tiki-ajax_services.php?controller=rating&action=vote&' + vals, function() {
					$.tikiModal();
					$.notify(tr('Thanks for deliberating!'));
					if ($('div.ratingDeliberationResultTable').length) document.location = document.location + '';
				});
				return false;
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\contribution.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c7e28d1_04135109')) {function content_5b67ef3c7e28d1_04135109($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
	<?php if (count($_smarty_tpl->tpl_vars['contributions']->value)>0) {?>
		<tr>
			<td>
			<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?><span class="mandatory_note highlight"><?php }?><label for="contributions">Type of contribution:</label><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y') {?> <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y') {?></span><?php }?></td>
				<td>
					<select id="contributions" name="contributions[]" multiple="multiple" size="5">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contributionId']);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['selected']=='y') {?> selected="selected"<?php }?> ><?php if ($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contributionId']>0) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
}?></option>
							<?php $_smarty_tpl->tpl_vars["help"] = new Smarty_variable((((($_smarty_tpl->tpl_vars['help']->value).($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'])).(": ")).($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description'])).("<br>"), null, 0);?>
						<?php endfor; endif; ?>
					</select>
					<a title="Help" <?php echo smarty_function_popup(array('text'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['help']->value,'"',"'"),'width'=>500),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y'&&$_smarty_tpl->tpl_vars['section']->value=='wiki page'&&empty($_smarty_tpl->tpl_vars['in_comment']->value)) {?>
			<tr>
				<td><label for='contributors'>Contributors</label></td>
				<td>
					<select id="contributors" name="contributors[]" multiple="multiple" size="5">
						<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['userId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['userId']->value = $_smarty_tpl->tpl_vars['u']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['u']->value!=$_smarty_tpl->tpl_vars['user']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['contributors']->value)&&in_array($_smarty_tpl->tpl_vars['userId']->value,$_smarty_tpl->tpl_vars['contributors']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['u']->value;?>
</option><?php }?>
						<?php } ?>
					</select>
				</td>
			</tr>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
		No records found
	<?php } else { ?>
		<tr><td>&nbsp;</td></tr>
	<?php }?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\antibot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67ef3c801ce2_99200187')) {function content_5b67ef3c801ce2_99200187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value=='anonymous'||!empty($_smarty_tpl->tpl_vars['showantibot']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-3', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-sm-11 col-md-8', null, 0);?> 
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-9', null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-sm-4 col-sm-offset-3 margin-bottom-sm', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value==='register') {?>
		<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-4 col-sm-3', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-4 col-sm-6', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-md-5 col-sm-6 col-md-offset-4 col-sm-offset-3', null, 0);?>
	<?php }?>
	<div class="antibot">
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha'||$_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
			<div class="form-group clearfix">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='questions') {?>
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="col-md-4 col-sm-3 control-label">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</label>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-7 col-sm-8 col-xs-11<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php } else { ?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9 col-xs-12<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
				<?php }?>
			</div>
		<?php } else { ?>
			
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="control-label <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
" for="antibotcode">Enter the code below<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y'&&$_smarty_tpl->tpl_vars['form']->value!='register') {?><strong class="mandatory_star"> *</strong><?php }?></label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php }?>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="form-group">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
						<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->getPath();?>
" alt="Anti-Bot verification code image" height="50">
					<?php } else { ?>
						
						<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
					<div class="col-sm-3">
						<?php echo smarty_function_button(array('_id'=>'captchaRegenerate','_class'=>'','href'=>'#antibot','_text'=>"Try another code",'_icon_name'=>"refresh",'_onclick'=>"generateCaptcha();return false;"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		function antibotVerification(element, rule) {
			if (!jqueryTiki.validate) return;

			var form = $(".antibot").parents('form');
			if (!form.data("validator")) {
				form.validate({});
			}
			element.rules( "add", rule);
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#recaptcha_response_field').length) {
					clearInterval(existCondition);
					antibotVerification($("#recaptcha_response_field"), {required: true});
				}
			}, 100); // wait for captcha to load

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#g-recaptcha-response').length) {
					clearInterval(existCondition);
					antibotVerification($("#g-recaptcha-response"), {required: true});
				}
			}, 100); // wait for captcha to load
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			antibotVerification($("#antibotcode"), {
				required: true,
				remote: {
					url: "validate-ajax.php",
					type: "post",
					data: {
						validator: "captcha",
						parameter: function() {
							return $("#captchaId").val();
						},
						input: function() {
							return $("#antibotcode").val();
						}
					}
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php }?>
<?php }} ?>
