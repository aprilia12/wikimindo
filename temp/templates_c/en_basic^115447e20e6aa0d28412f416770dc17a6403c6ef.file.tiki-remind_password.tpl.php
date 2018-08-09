<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 11:05:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-remind_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19114010465b6960d5320612-88429662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115447e20e6aa0d28412f416770dc17a6403c6ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-remind_password.tpl',
      1 => 1501561970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19114010465b6960d5320612-88429662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showmsg' => 0,
    'prefs' => 0,
    'msg' => 0,
    'showfrm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6960d53b8bb7_31345633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6960d53b8bb7_31345633')) {function content_5b6960d53b8bb7_31345633($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>'login')); $_block_repeat=true; echo smarty_block_title(array('admpage'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I forgot my password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['showmsg']->value!='n') {?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e') {?>
		<span class="warn tips" title=":Error"><?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_icon(array('name'=>'ok','alt'=>"OK",'style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
		<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value,'html'))===null||$tmp==='' ? "Enter your username or email." : $tmp);?>

	<?php } else { ?>
		<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value,'html'))===null||$tmp==='' ? "Enter your email." : $tmp);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e') {?>
		</span>
	<?php }?>
	<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['showfrm']->value=='y') {?>
<div class="row">
	<form class="form-horizontal col-md-10" action="tiki-remind_password.php" method="post">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
			<div class="form-group">
				<label class="col-sm-3 col-md-2 control-label" for="name">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Username" name="name" id="name">
				</div>
			</div>
			<div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
				<p><strong>OR</strong></p>
			</div>

		<?php }?>
		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="email">Email</label>
			<div class="col-sm-6">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
					<input type="email" class="form-control" placeholder="Email" name="email" id="email">
				<?php } else { ?>
					<input type="email" class="form-control" placeholder="Email" name="name" id="name">
				<?php }?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
				<input type="submit" class="btn btn-default" name="remind" value="Request Password Reset">
			</div>
		</div>
	</form>
</div>
<?php }?>
<?php }} ?>
