<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:37:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\register-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21231841985b51590828c353-36737726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f1bffbaa268b5a671682809e06bfff1a13fa6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\register-login.tpl',
      1 => 1495481106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21231841985b51590828c353-36737726',
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
  'unifunc' => 'content_5b51590829fbd4_98838033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51590829fbd4_98838033')) {function content_5b51590829fbd4_98838033($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate']=='y') {?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']&&$_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin']!='y') {?>
	<input type="text" name="name" id="name" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory']!='y') {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
<?php } else { ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="name"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>Email<?php } else { ?>Username<?php }?> <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
		<div class="col-sm-8">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>
			<input type="email" name="name" id="name" value="<?php if (!empty($_POST['name'])) {
echo $_POST['name'];
}?>" class="form-control" >
			<div class="help-block">Use your email address as your log-in name</div>
		<?php } else { ?>
			<input type="text" name="name" id="name" value="<?php if (!empty($_POST['name'])) {
echo $_POST['name'];
}?>" class="form-control" >
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']=='n') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_username_length']>1) {?>
					<div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lowercase_username']=='y') {?>
					<div class="highlight"><em>Lowercase only</em></div>
				<?php }?>
			<?php }?>
		<?php }?>
		</div>
	</div>
<?php }?>
<?php }} ?>
