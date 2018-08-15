<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 06:24:20
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-shoutbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6154913695b6d1374999713-14188512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b72cad7a686c5f878f798eecf48ddeadc4afcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-shoutbox.tpl',
      1 => 1487242018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6154913695b6d1374999713-14188512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_view_shoutbox' => 0,
    'tpl_module_title' => 0,
    'module_params' => 0,
    'tiki_p_post_shoutbox' => 0,
    'shout_error' => 0,
    'prefs' => 0,
    'user' => 0,
    'tweet' => 0,
    'facebook' => 0,
    'buttontext' => 0,
    'shout_msgs' => 0,
    'tooltip' => 0,
    'userlink' => 0,
    'cdate' => 0,
    'tiki_p_admin_shoutbox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d1374a26138_59066541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d1374a26138_59066541')) {function content_5b6d1374a26138_59066541($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_js_maxlength')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.js_maxlength.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_time.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_shoutbox']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php if ($_smarty_tpl->tpl_vars['tiki_p_post_shoutbox']->value=='y') {?>
			<?php echo smarty_function_js_maxlength(array('textarea'=>'shout_msg','maxlength'=>255),$_smarty_tpl);?>

			<form action="#" method="post" onsubmit="return verifyForm(this);" id="shout_form">
				<?php if (!empty($_smarty_tpl->tpl_vars['shout_error']->value)) {?><div class="highlight"><?php echo $_smarty_tpl->tpl_vars['shout_error']->value;?>
</div><?php }?>
				<div class="text-center">
					<textarea rows="3" class="form-control form-group tshoutbox" id="shout_msg" name="shout_msg"></textarea>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
						<table><?php echo $_smarty_tpl->getSubTemplate ("antibot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</table>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_socialnetworks']=='y'&&$_smarty_tpl->tpl_vars['user']->value!='') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_consumer_key']!=''&&$_smarty_tpl->tpl_vars['tweet']->value) {?>
							<div><input type="hidden" name="tweet" value="-1" /><input type="checkbox" name="shout_tweet" value='1' /> Tweet with Twitter</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id']!=''&&$_smarty_tpl->tpl_vars['facebook']->value) {?>
							<div><input type="hidden" name="facebook" value="-1" /><input type="checkbox" name="shout_facebook" value='1' /> Post on my Facebook wall</div>
						<?php }?>
					<?php }?>
					<input type="submit" class="btn btn-default btn-sm" id="shout_send" name="shout_send" value="<?php echo $_smarty_tpl->tpl_vars['buttontext']->value;?>
" />
				</div>
			</form>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['shout_msgs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
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
			<div class="shoutboxmodmsg">
				<?php $_smarty_tpl->tpl_vars['userlink'] = new Smarty_variable(smarty_modifier_userlink($_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user'],"linkmodule"), null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('date', null, null); ob_start();
echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['timestamp']);?>
, <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['timestamp']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				
				<?php $_smarty_tpl->tpl_vars['cdate'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['date'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['tooltip']->value==1) {?>
					<b><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['userlink']->value,"\" href=","&lt;br /&gt;&lt;em&gt;Shout date: ".((string)$_smarty_tpl->tpl_vars['cdate']->value)."&lt;/em&gt;\" href=");?>
</b>:
				<?php } else { ?>
					<b><?php echo $_smarty_tpl->tpl_vars['userlink']->value;?>
</b>, <?php echo $_smarty_tpl->tpl_vars['cdate']->value;?>
:
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['message'];?>

				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']) {?>
					<?php if (0&&$_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
						[<a onclick="removeShout(<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgId'];?>
);return false" href="#" class="linkmodule tips" title="|Delete this shout">x</a>|<a href="tiki-shoutbox.php?msgId=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgId'];?>
" class="linkmodule tips" title="|Edit this shout">e</a>]
					<?php } else { ?>
						[<a href="tiki-shoutbox.php?remove=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgId'];?>
" class="linkmodule">x</a>|<a href="tiki-shoutbox.php?msgId=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgId'];?>
" class="linkmodule">e</a>]
					<?php }?>
				<?php }?>
			</div>
		<?php endfor; endif; ?>

		<div style="text-align: center">
			<a href="tiki-shoutbox.php" class="linkmodule more">Read More…</a>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
