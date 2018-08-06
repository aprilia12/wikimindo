<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment-body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2414473885b67ef3c51b933-61783510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978ba5a698ed78a4a1621f6c4bcd87b210a36ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment-body.tpl',
      1 => 1468898376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2414473885b67ef3c51b933-61783510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thread_style' => 0,
    'forum_info' => 0,
    'comment' => 0,
    'first' => 0,
    'comments_parentId' => 0,
    'prefs' => 0,
    'tiki_p_messages' => 0,
    'display' => 0,
    'tiki_p_admin_forum' => 0,
    'comments_per_page' => 0,
    'thread_sort_mode' => 0,
    'tiki_p_forum_vote' => 0,
    'deliberation' => 0,
    'tiki_p_ratings_view_results' => 0,
    'tiki_p_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef3c6020e4_21517937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef3c6020e4_21517937')) {function content_5b67ef3c6020e4_21517937($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
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
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_sort_mode'];?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp22=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp24=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
<?php $_tmp25=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
<?php $_tmp26=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_attachment','topics_offset'=>$_tmp16,'topics_sort_mode'=>$_tmp17,'topics_find'=>$_tmp18,'topics_threshold'=>$_tmp19,'comments_threshold'=>$_tmp20,'comments_find'=>$_tmp21,'forumId'=>$_tmp22,'comments_per_page'=>$_tmp23,'comments_parentId'=>$_tmp24,'remove_attachment'=>$_tmp25,'filename'=>$_tmp26),$_smarty_tpl);?>
"
			<?php } else { ?>
				href="<?php ob_start();?><?php echo $_REQUEST['topics_offset'];?>
<?php $_tmp27=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_sort_mode'];?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp29=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp30=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_threshold'];?>
<?php $_tmp31=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_find'];?>
<?php $_tmp32=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['forum_info']->value['forumId'];?>
<?php $_tmp33=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_per_page']->value;?>
<?php $_tmp34=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comments_parentId']->value;?>
<?php $_tmp35=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
<?php $_tmp36=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['attachments'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename'];?>
<?php $_tmp37=ob_get_clean();?><?php ob_start();?><?php echo $_REQUEST['topics_offset'];?>
<?php $_tmp38=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['thread_sort_mode']->value;?>
<?php $_tmp39=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_attachment','topics_offset'=>$_tmp27,'topics_sort_mode'=>$_tmp28,'topics_find'=>$_tmp29,'topics_threshold'=>$_tmp30,'comments_threshold'=>$_tmp31,'comments_find'=>$_tmp32,'forumId'=>$_tmp33,'comments_per_page'=>$_tmp34,'comments_parentId'=>$_tmp35,'remove_attachment'=>$_tmp36,'filename'=>$_tmp37,'comments_offset'=>$_tmp38,'thread_sort_mode'=>$_tmp39),$_smarty_tpl);?>
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
