<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 05:44:16
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-pick_avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21355844005b7b8a900d9945-47441985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3537a3adedba210b000542a4dabd487a024f16ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-pick_avatar.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21355844005b7b8a900d9945-47441985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userwatch' => 0,
    'avatar' => 0,
    'user_picture_id' => 0,
    'avatars' => 0,
    'showall' => 0,
    'numav' => 0,
    'yours' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b8a901bc286_34448024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b8a901bc286_34448024')) {function content_5b7b8a901bc286_34448024($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value!=$_smarty_tpl->tpl_vars['userwatch']->value) {?>
		Profile picture: <?php echo $_smarty_tpl->tpl_vars['userwatch']->value;?>

	<?php } else { ?>
		Pick your profile picture
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userwatch']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<div class="t_navbar">
		<?php $_smarty_tpl->tpl_vars['thisuserwatch'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value), null, 0);?>
		<?php echo smarty_function_button(array('href'=>"tiki-user_preferences.php?view_user=".((string)$_smarty_tpl->tpl_vars['thisuserwatch']->value),'class'=>"btn btn-default",'_text'=>"User Preferences"),$_smarty_tpl);?>

	</div>
<?php }?>

<h2><?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userwatch']->value) {?>Your current profile picture<?php } else { ?>Profile picture<?php }?></h2>
<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
	<div>
		<?php if (isset($_smarty_tpl->tpl_vars['user_picture_id']->value)) {?>Thumbnail<br><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['user_picture_id']->value)) {?>
		<div>Full size<br>
			<img src="tiki-download_file.php?fileId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_picture_id']->value);?>
&amp;display=y">
		</div>
	<?php }?>
<?php } else { ?>
	no profile picture
<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['avatars']->value)==0&&$_smarty_tpl->tpl_vars['avatar']->value) {?>
	<a class="link tips" href="tiki-pick_avatar.php?reset=y&amp;view_user<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
" title=":Reset">
		<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if (sizeof($_smarty_tpl->tpl_vars['avatars']->value)>0) {?>

	<?php if ($_smarty_tpl->tpl_vars['showall']->value=='y') {?>
		<h2><?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['userwatch']->value) {?>Pick user profile picture from the library<?php } else { ?>Pick user profile picture<?php }?> <a href="tiki-pick_avatar.php?showall=n">Hide all</a> <?php echo $_smarty_tpl->tpl_vars['numav']->value;?>
 icons</h2>
		<div class="table normal">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['im'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['im']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['name'] = 'im';
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['avatars']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['im']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['im']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['im']['total']);
?>
				<a href="tiki-pick_avatar.php?showall=n&amp;avatar=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['im']['index']],"url");?>
&amp;uselib=use"><img src="<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['im']['index']];?>
"></a>
			<?php endfor; endif; ?>
		</div>
	<?php } else { ?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var avatars = new Array();
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['avatars']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				avatars[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ix']['index'];?>
] = '<?php echo $_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
';
				<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']==$_smarty_tpl->tpl_vars['yours']->value) {?>
					<?php $_smarty_tpl->tpl_vars["yours"] = new Smarty_variable($_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], null, 0);?>
				<?php }?>
			<?php endfor; endif; ?>
			var pepe=1;
			function addavt() {
				pepe++;
				if(pepe > avatars.length-1) {
					pepe =0;
				}
				document.getElementById('avtimg').src=avatars[pepe];
				document.getElementById('avatar').value=avatars[pepe];
			}

			function subavt() {
				pepe--;
				if(pepe < 0 ) {
					pepe=avatars.length-1
				}
				document.getElementById('avtimg').src=avatars[pepe];
				document.getElementById('avatar').value=avatars[pepe];
			}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<h2>Pick user profile picture from the library <a href="tiki-pick_avatar.php?showall=y">Show all</a> <?php echo $_smarty_tpl->tpl_vars['numav']->value;?>
 Items</h2>
		<form action="tiki-pick_avatar.php" method="post">
			<input id="avatar" type="hidden" name="avatar" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['yours']->value);?>
">
			<?php if ($_smarty_tpl->tpl_vars['user']->value!=$_smarty_tpl->tpl_vars['userwatch']->value) {?><input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
"><?php }?>
			<table class="formcolor">
				<tr>
					<td>
						<div align="center">
							<a class="link" href="javascript:subavt();">Prev</a>
							<img id='avtimg' src="<?php echo $_smarty_tpl->tpl_vars['yours']->value;?>
" alt="Profile picture">
							<a class="link" href="javascript:addavt();">Next</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div align="center">
							<input type="submit" class="btn btn-default btn-sm" name="rand" value="random">
							<input type="submit" class="btn btn-default btn-sm" name="uselib" value="Use">
							<input type="submit" class="btn btn-default btn-sm" name="reset" value="no profile picture">
						</div>
					</td>
				</tr>
			</table>
		</form>
	<?php }?>
<?php }?>

<div class="table normal">
	<form enctype="multipart/form-data" action="tiki-pick_avatar.php" method="post" class="form-horizontal">
		<legend><strong>Upload your own profile picture</strong></legend>
		<?php if ($_smarty_tpl->tpl_vars['user']->value!=$_smarty_tpl->tpl_vars['userwatch']->value) {?><input type="hidden" name="view_user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userwatch']->value);?>
"><?php }?>
		<div class="form-group">
			<label class="col-sm-3 control-label">Select your profile picture</label>
			<div class="col-sm-7">
				<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
				<input id="userfile1" name="userfile1" type="file">
				<div class="help-block">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_store_file_gallery_picture']!='y') {?>File (only .gif, .jpg and .png images approximately 45px × 45px)<?php } else { ?>File (only .gif, .jpg and .png images)<?php }?>:
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label"></label>
			<div class="col-sm-7">
				<input type="submit" class="btn btn-primary btn-sm" name="upload" value="Upload">
			</div>
		</div>
	</form>
</div>
<?php }} ?>
