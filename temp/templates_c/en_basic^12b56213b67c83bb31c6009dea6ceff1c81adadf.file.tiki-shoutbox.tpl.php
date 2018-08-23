<?php /* Smarty version Smarty-3.1.21, created on 2018-08-20 09:40:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-shoutbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4570962455b7a7072223311-55904850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b56213b67c83bb31c6009dea6ceff1c81adadf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-shoutbox.tpl',
      1 => 1490329620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4570962455b7a7072223311-55904850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_shoutbox' => 0,
    'prefs' => 0,
    'tiki_p_post_shoutbox' => 0,
    'msg' => 0,
    'msgId' => 0,
    'message' => 0,
    'user' => 0,
    'channels' => 0,
    'find' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7a707228cab6_79317503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7a707228cab6_79317503')) {function content_5b7a707228cab6_79317503($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_js_maxlength')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.js_maxlength.php';
if (!is_callable('smarty_modifier_tiki_long_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_time.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Shoutbox")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Shoutbox"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shoutbox<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Shoutbox"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value=='y') {?>
	<div class="t_navbar">
		<a href="tiki-admin_shoutbox_words.php" class="btn btn-link" title="List">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Banned Words
		</a>
	
	</div>

	<h2>Change shoutbox general settings</h2>
	<form action="tiki-shoutbox.php" method="post" class="form-horizontal">
		<div class="checkbox">
			<label class="control-label col-md-offset-3">
				<input type="checkbox" name="shoutbox_autolink" value="on"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['shoutbox_autolink']=='y') {?> checked="checked"<?php }?>>
				auto-link urls
			</label>
		</div>
		<div class="text-center">
			<input type="submit" class="btn btn-default btn-sm" name="shoutbox_admin" value="Save">
		</div>
	</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_post_shoutbox']->value=='y') {?>
	<h2>Post or edit a message</h2>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
		<div class="simplebox highlight"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
	<?php }?>
	<?php echo smarty_function_js_maxlength(array('textarea'=>'message','maxlength'=>255),$_smarty_tpl);?>

	<form class="form-horizontal" action="tiki-shoutbox.php" method="post" onsubmit="return verifyForm(this);">
		<input type="hidden" name="msgId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['msgId']->value);?>
">
		<div class="form-group">
			<label class="control-label col-md-3" for="message">Message:</label>
			<div class="col-md-9">
				<textarea class="form-control" name="message" id="message"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['message']->value);?>
</textarea>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_socialnetworks']=='y'&&$_smarty_tpl->tpl_vars['user']->value!='') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_consumer_key']!='') {?>
						<div class="checkbox">
							<input type="checkbox" name="tweet" id="tweet" value='1'>
							Tweet with Twitter
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id']!='') {?>
						<div class="checkbox">
							<input type="checkbox" name="facebook" id="facebook" value='1'>
							Post on my Facebook wall
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
		<div class="text-center">
			<input type="submit" class="btn btn-primary btn-sm" name="save" value="Save">
		</div>
	</form>
<?php }?>

<h2>Messages</h2>

<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
	<div class="shoutboxmsg">
		<b><a href="tiki-user_information.php?view_user=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'];?>
</a></b>, <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['timestamp']);?>
, <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['timestamp']);?>


		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value=='y'||$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value) {?>
			<a href="tiki-shoutbox.php?find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;msgId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['msgId'];?>
" class="tips" title=":Edit">
				<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

			</a>
			<a href="tiki-shoutbox.php?find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['msgId'];?>
" class="tips" title=":Remove">
				<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

			</a>
		<?php }?>
		<br>
		<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['message'];?>

	</div>
<?php endfor; endif; ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
