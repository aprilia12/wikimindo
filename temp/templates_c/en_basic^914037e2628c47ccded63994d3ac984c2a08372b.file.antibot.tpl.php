<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:48:11
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\antibot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1374422875b67ef2be45685-55632026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '914037e2628c47ccded63994d3ac984c2a08372b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\antibot.tpl',
      1 => 1516528532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374422875b67ef2be45685-55632026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'showantibot' => 0,
    'showmandatory' => 0,
    'form' => 0,
    'captchalib' => 0,
    'captchaclass' => 0,
    'inputclass' => 0,
    'labelclass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67ef2be68918_16701392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67ef2be68918_16701392')) {function content_5b67ef2be68918_16701392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value=='anonymous'||!empty($_smarty_tpl->tpl_vars['showantibot']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-3', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-sm-11 col-md-8', null, 0);?> 
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-9', null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-sm-4 col-sm-offset-3 margin-bottom-sm', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value==='register') {?>
		<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-4 col-sm-3', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-4 col-sm-6', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-md-5 col-sm-6 col-md-offset-4 col-sm-offset-3', null, 0);?>
	<?php }?>
	<div class="antibot">
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha'||$_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
			<div class="form-group clearfix">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='questions') {?>
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="col-md-4 col-sm-3 control-label">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</label>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-7 col-sm-8 col-xs-11<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php } else { ?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9 col-xs-12<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
				<?php }?>
			</div>
		<?php } else { ?>
			
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="control-label <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
" for="antibotcode">Enter the code below<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y'&&$_smarty_tpl->tpl_vars['form']->value!='register') {?><strong class="mandatory_star"> *</strong><?php }?></label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="col-md-1 col-sm-1">
						<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
					</div>
				<?php }?>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="form-group">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
						<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->getPath();?>
" alt="Anti-Bot verification code image" height="50">
					<?php } else { ?>
						
						<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
					<div class="col-sm-3">
						<?php echo smarty_function_button(array('_id'=>'captchaRegenerate','_class'=>'','href'=>'#antibot','_text'=>"Try another code",'_icon_name'=>"refresh",'_onclick'=>"generateCaptcha();return false;"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		function antibotVerification(element, rule) {
			if (!jqueryTiki.validate) return;

			var form = $(".antibot").parents('form');
			if (!form.data("validator")) {
				form.validate({});
			}
			element.rules( "add", rule);
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#recaptcha_response_field').length) {
					clearInterval(existCondition);
					antibotVerification($("#recaptcha_response_field"), {required: true});
				}
			}, 100); // wait for captcha to load

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			var existCondition = setInterval(function() {
				if ($('#g-recaptcha-response').length) {
					clearInterval(existCondition);
					antibotVerification($("#g-recaptcha-response"), {required: true});
				}
			}, 100); // wait for captcha to load
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			antibotVerification($("#antibotcode"), {
				required: true,
				remote: {
					url: "validate-ajax.php",
					type: "post",
					data: {
						validator: "captcha",
						parameter: function() {
							return $("#captchaId").val();
						},
						input: function() {
							return $("#antibotcode").val();
						}
					}
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php }?>
<?php }} ?>
