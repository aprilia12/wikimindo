<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-pass2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7154365835b515908309369-69983523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fed413a73fb441799efb9000d7c499b5d6aea4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-pass2.tpl',
      1 => 1502206330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7154365835b515908309369-69983523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'openid_associate' => 0,
    'trackerEditFormId' => 0,
    'userTrackerData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51590831cbf4_14088773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51590831cbf4_14088773')) {function content_5b51590831cbf4_14088773($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input id='pass2' type="password" name="passAgain" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory']!='y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
<?php } else { ?>
	<?php if (!isset($_smarty_tpl->tpl_vars['openid_associate']->value)||$_smarty_tpl->tpl_vars['openid_associate']->value!='y') {?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="pass2">Confirm password <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input
					class="form-control"
					id='pass2'
					type="password"
					name="passAgain"
					value="<?php if (!empty($_POST['passAgain'])) {
echo $_POST['passAgain'];
}?>"
				>
				<div id="mypassword2_text">
					<div id="match" style="display:none">
						<?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'color:#0ca908'),$_smarty_tpl);?>
 Passwords match
					</div>
					<div id="nomatch" style="display:none">
						<?php echo smarty_function_icon(array('name'=>'error','istyle'=>'color:#ff0000'),$_smarty_tpl);?>
 Passwords do not match
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']!='y'&&!$_smarty_tpl->tpl_vars['userTrackerData']->value) {?><span id="checkpass"></span><?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password']=='y') {?>
			
			<div class="form-group">
				<div class="col-sm-3 col-sm-offset-4">
					<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
				</div>
				<div class="col-sm-3">
					<input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
				</div>
			</div>
		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>
