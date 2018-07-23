<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8313583585b5159082ab759-88312233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b25ad189caa16bbaf506f42c85f9f596be5f515' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-email.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8313583585b5159082ab759-88312233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'trackerEditFormId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5159082befd5_00465353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5159082befd5_00465353')) {function content_5b5159082befd5_00465353($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']&&$_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin']!='y') {?>
	<input type="text" id="email" name="email" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory']!='y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
		<div class="form-group">
			<label class="col-sm-4 control-label" for="email">Email <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input class="form-control" type="text" id="email" name="email" value="<?php if (!empty($_POST['email'])) {
echo $_POST['email'];
}?>">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['validateUsers']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['validateEmail']!='y') {?>
					<p class="help-block">
						<em>A valid email is mandatory to register</em>
					</p>
				<?php }?>
			</div>
		</div>
	<?php }?>
<?php }?>
<?php }} ?>
