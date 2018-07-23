<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17268866785b5159082f1c64-93879823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f9ef403d8261e0c1b8e3a456983abc3bd91946' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-pass.tpl',
      1 => 1519116108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17268866785b5159082f1c64-93879823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'openid_associate' => 0,
    'trackerEditFormId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5159082fd7e4_65995403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5159082fd7e4_65995403')) {function content_5b5159082fd7e4_65995403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input id='pass1' type="password" name="pass" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory']!='y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
<?php } else { ?>
	<?php if (!isset($_smarty_tpl->tpl_vars['openid_associate']->value)||$_smarty_tpl->tpl_vars['openid_associate']->value!='y') {?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="pass1">New Password <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input
					class="form-control"
					id='pass1'
					type="password"
					name="pass"
					value="<?php if (!empty($_POST['pass'])) {
echo $_POST['pass'];
}?>"
				>
				<div style="margin-left:5px;">
					<div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
					<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']!='y') {?>
					<div style="margin-top:5px">
						<?php echo $_smarty_tpl->getSubTemplate ('password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
<?php }?>
<?php }} ?>
