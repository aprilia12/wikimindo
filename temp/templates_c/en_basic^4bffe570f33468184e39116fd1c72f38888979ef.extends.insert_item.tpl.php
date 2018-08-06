<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 06:26:37
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker\insert_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3506158205b67cdfd98f548-61439655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e922d92e50b60cb2f457c41c308aa68d0951bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker\\insert_item.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
    '401402c1db72c440c41a04682eb9b4a17a3f577f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    '914037e2628c47ccded63994d3ac984c2a08372b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\antibot.tpl',
      1 => 1516528532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3506158205b67cdfd98f548-61439655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67cdfda3b373_26886336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67cdfda3b373_26886336')) {function content_5b67cdfda3b373_26886336($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_trackerfields')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerfields.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['itemId']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['trackerLogo']->value) {?>
			<div class="page_header media">
				<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerLogo']->value);?>
" class="pull-left img-responsive img-rounded" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerName']->value);?>
" height="64px" width="64px">
			</div>
		<?php }?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="insertItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
" <?php if (!$_smarty_tpl->tpl_vars['trackerId']->value) {?>display="hidden"<?php }?>>
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
				<div class="checkbox">
					<label>
						<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
						<input type="checkbox" name="next" value="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'next'=>$_smarty_tpl->tpl_vars['next']->value),$_smarty_tpl);?>
">
						Create another
					</label>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3506158205b67cdfd98f548-61439655');
content_5b67cdfd9ed166_18652838($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
			<?php }?>
			<div class="submit">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Create" onclick="needToConfirm=false;">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
			</div>
		</form>
	<?php } else { ?>
		<?php echo smarty_function_object_link(array('type'=>'trackeritem','id'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>

	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 06:26:37
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\antibot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b67cdfd9ed166_18652838')) {function content_5b67cdfd9ed166_18652838($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
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
