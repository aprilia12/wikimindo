<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 10:23:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:414179675b6bfa00d49a92-66434452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b08c6247d2ec3685fb7e68b78ed2b605286ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_mail.tpl',
      1 => 1465117168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '414179675b6bfa00d49a92-66434452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sents' => 0,
    'nbSentTo' => 0,
    'sent' => 0,
    'preview' => 0,
    'nbTo' => 0,
    'mail_subject' => 0,
    'mail_mess' => 0,
    'ipluginmail' => 0,
    'mail_popup' => 0,
    'mail_label_name' => 0,
    'params' => 0,
    'users' => 0,
    'muser' => 0,
    'mail_user_dd' => 0,
    'names' => 0,
    'mail_user' => 0,
    'groups' => 0,
    'groupname' => 0,
    'gps' => 0,
    'mgroup' => 0,
    'mail_group_dd' => 0,
    'bypass_preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6bfa00df9736_91439446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6bfa00df9736_91439446')) {function content_5b6bfa00df9736_91439446($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['sents']->value)||!empty($_smarty_tpl->tpl_vars['nbSentTo']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>"Message sent to")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Message sent to"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Email sent to:
		<p><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nbSentTo']->value);?>
 recipients</p>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['sent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sent']->key => $_smarty_tpl->tpl_vars['sent']->value) {
$_smarty_tpl->tpl_vars['sent']->_loop = true;
?>
				<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sent']->value);?>
</li>
			<?php } ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Message sent to"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
	<form method="post" class="margin-bottom-md">
		<h3>Message preview:</h3>
		<ul>
			<li>Number of Recipients: <?php echo $_smarty_tpl->tpl_vars['nbTo']->value;?>
</li>
			<li>Subject: <?php echo $_smarty_tpl->tpl_vars['mail_subject']->value;?>
</li>
			<li>Message: <?php echo $_smarty_tpl->tpl_vars['mail_mess']->value;?>
</li>
		</ul>
		<input type="hidden" name="mail_subject" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_subject']->value);?>
">
		<input type="hidden" name="mail_mess" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_mess']->value);?>
">
		<input type="submit" class="btn btn-primary" name="mail_send<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" value="Send Mail">
	</form>
	<form method="post">
		<input type="submit" class="btn btn-default" name="mail_cancel<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" value="Cancel">
	</form>
<?php } else { ?>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['mail_popup']->value=='y') {?>
			<p><input name="sendmailload<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
" type="submit" class="btn btn-default" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_label_name']->value);?>
" /></p>
			<div style="display: none;">
		<?php }?>
		<div id="wikiplugin_mail" class="">
			<form method="post" class="form-horizontal">
				<?php if ($_smarty_tpl->tpl_vars['params']->value['showuserdd']=='y'||$_smarty_tpl->tpl_vars['params']->value['showrealnamedd']=='y') {?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="mail_user_dd<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
">Send to users:</label>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['params']->value['showuserdd']=='y') {?>
						<div class="col-sm-8 margin-bottom-sm">
							<select class="form-control" name="mail_user_dd[]" id="mail_user_dd<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" multiple="multiple">
								<option value="" />
								<?php  $_smarty_tpl->tpl_vars['muser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['muser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['muser']->key => $_smarty_tpl->tpl_vars['muser']->value) {
$_smarty_tpl->tpl_vars['muser']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['muser']->value['userId'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['muser']->value['userId'],$_smarty_tpl->tpl_vars['mail_user_dd']->value)) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['muser']->value['login']);?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['params']->value['showrealnamedd']=='y') {?>
						<div class="col-sm-8">
							<select name="mail_user_dd[]" id="mail_user_dd<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" multiple="multiple" class="form-control">
								<option value="" />
								<?php  $_smarty_tpl->tpl_vars['muser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['muser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['muser']->key => $_smarty_tpl->tpl_vars['muser']->value) {
$_smarty_tpl->tpl_vars['muser']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['muser']->value['userId'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['muser']->value['userId'],$_smarty_tpl->tpl_vars['mail_user_dd']->value)) {?> selected="selected"<?php }?>><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['muser']->value['login'],true,false);?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['params']->value['showuser']=='y') {?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="mail_user<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
">Send to:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control margin-bottom-sm" id="mail_user" name="mail_user" value="<?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email address (if more than one, separated by ",")<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['params']->value['showgroupdd']=='y') {?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="mail_group_dd<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
">Send to groups:</label>
						<?php  $_smarty_tpl->tpl_vars['gps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gps']->_loop = false;
 $_smarty_tpl->tpl_vars['groupname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mailgroups']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['gps']->key => $_smarty_tpl->tpl_vars['gps']->value) {
$_smarty_tpl->tpl_vars['gps']->_loop = true;
 $_smarty_tpl->tpl_vars['groupname']->value = $_smarty_tpl->tpl_vars['gps']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mailgroups']['index']++;
?>
							<div class="wpmailgroup col-sm-8 margin-bottom-sm">
								<?php if (!empty($_smarty_tpl->tpl_vars['groupname']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);
}?>
								<select name="mail_group_dd[][]" class="form-control" id="mail_group_dd<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" multiple="multiple">
									<option value="" />
									<?php  $_smarty_tpl->tpl_vars['mgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mgroup']->key => $_smarty_tpl->tpl_vars['mgroup']->value) {
$_smarty_tpl->tpl_vars['mgroup']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['mgroup']->value=='Anonymous') {?>
										<?php } elseif ($_smarty_tpl->tpl_vars['mgroup']->value=='Registered') {?>
											
										<?php } else { ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['mgroup']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['mgroup']->value,$_smarty_tpl->tpl_vars['mail_group_dd']->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['mailgroups']['index']])) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mgroup']->value);?>
</option>
										<?php }?>
									<?php } ?>
								</select>
							</div>
						<?php } ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				<?php }?>

				<div class="form-group">
					<label class="col-sm-4 control-label" for="mail_subject<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
">Subject:</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" id="mail_subject<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" name="mail_subject" value="<?php echo $_smarty_tpl->tpl_vars['mail_subject']->value;?>
">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label" for="mail_mess<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
">Message:</label>
					<div class="col-sm-8">
						<textarea class="form-control" id="mail_mess<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" name="mail_mess" value="<?php echo $_smarty_tpl->tpl_vars['mail_mess']->value;?>
"></textarea>
					</div>
				</div>

				<div class="form-group text-center margin-bottom-sm">
					<?php if ($_smarty_tpl->tpl_vars['bypass_preview']->value!='y') {?>
						<input type="submit" class="btn btn-default" name="mail_preview<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" value="Preview Mail">
					<?php } else { ?>
						<input type="submit" class="btn btn-default" value="Send Mail">
						<input type="hidden" name="mail_send<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
" value="Send Mail">
					<?php }?>
				</div>
				<div class="col-sm-8 col-sm-push-2">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You will receive a copy of the email yourself. Please give it a few minutes.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</form>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['mail_popup']->value=='y') {?>
			</div>
		<?php }?>
	</div>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("input[name='sendmailload<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
']").click(function() {
		$.colorbox({overlayClose: true, width:"620px", inline:true, href:"#wikiplugin_mail"});
		return false;
	});

	<?php if ($_smarty_tpl->tpl_vars['bypass_preview']->value=='y'&&$_smarty_tpl->tpl_vars['mail_popup']->value=='y') {?>
	$("input[name='mail_send<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
']").click(function() {
		if ($("textarea#mail_mess<?php echo $_smarty_tpl->tpl_vars['ipluginmail']->value;?>
").val()) {
			var mailform = $(this).closest('form');
			mailform.tikiModal("Please wait while your email is being sent...");
			var postData = mailform.serializeArray();
			var formURL = "<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('_urlencode'=>'n'),$_smarty_tpl);?>
";
			$.ajax({
				url : formURL,
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) {
					mailform.tikiModal('');
					$.colorbox.close();
				}
			});
		}
		return false;
	});
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
