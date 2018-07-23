<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\comment\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3603777635b554fd6206881-20258026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0357e10518d8f935b9a1ededa886f512e7e023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\comment\\post.tpl',
      1 => 1480651702,
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
  'nocache_hash' => '3603777635b554fd6206881-20258026',
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
  'unifunc' => 'content_5b554fd62d97b8_62917977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554fd62d97b8_62917977')) {function content_5b554fd62d97b8_62917977($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_textarea')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['threadId']->value) {?>
		<div class="alert alert-success">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation']=='y') {?>
				<p>Your message has been queued for approval and will be posted after a moderator approves it.</p>
			<?php } else { ?>
				<p>Your comment was posted.</p>
			<?php }?>
			<p>Go back to: <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
</p>
		</div>
	<?php } else { ?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post'),$_smarty_tpl);?>
" role="form">
			<div class="panel panel-default">
				<?php if (!$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['prefs']->value['feature_comments_post_as_anonymous']=='y') {?>
					<div class="panel-heading">
						<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Anonymous posting")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Anonymous posting"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								You are currently registered on this site. This section is optional. By filling it, you will not link this post to your account and preserve your anonymity.
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Anonymous posting"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<div class="form-inline">
							<div class="form-group">
								<label class="clearfix" for="comment-anonymous_name">Name</label>
								<input type="text" name="anonymous_name" id="comment-anonymous_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['anonymous_name']->value);?>
"/>
							</div>
							<div class="form-group">
								<label class="clearfix" for="comment-anonymous_email">Email</label>
								<input type="email" id="comment-anonymous_email" name="anonymous_email" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['anonymous_email']->value);?>
"/>
							</div>
							<div class="form-group">
								<label class="clearfix" for="comment-anonymous_website">Website</label>
								<input type="url" id="comment-anonymous_website" name="anonymous_website" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['anonymous_website']->value);?>
"/>
							</div>
						</div>
					</div>
				<?php }?>
				<div class="panel-body">
					<input type="hidden" name="type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
"/>
					<input type="hidden" name="objectId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectId']->value);?>
"/>
					<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
"/>
					<input type="hidden" name="post" value="1"/>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['comments_notitle']!='y') {?>
						<div class="form-group">
							<label for="comment-title" class="clearfix comment-title">Title</label>
							<input type="text" id="comment-title" name="title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
" class="form-control" placeholder="Comment title"/>
						</div>
					<?php }?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('rows', null, null); ob_start();
if ($_smarty_tpl->tpl_vars['type']->value=='forum') {
echo $_smarty_tpl->tpl_vars['prefs']->value['default_rows_textarea_forum'];
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['default_rows_textarea_comment'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>Smarty::$_smarty_vars['capture']['rows'],'class'=>"form-control wikiedit",'placeholder'=>"Post new comment...")); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>Smarty::$_smarty_vars['capture']['rows'],'class'=>"form-control wikiedit",'placeholder'=>"Post new comment..."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>Smarty::$_smarty_vars['capture']['rows'],'class'=>"form-control wikiedit",'placeholder'=>"Post new comment..."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y') {?>
						<div id="watch_thread_on_reply">
							<input id="watch_thread" type="checkbox" name="watch" value="y"<?php if ($_REQUEST['watch']=='y') {?> checked="checked"<?php }?>> <label for="watch_thread">Send me an email when someone replies</label>
						</div>
					<?php }?>
				</div>
				<div class="panel-footer">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
						<?php $_smarty_tpl->tpl_vars['showmandatory'] = new Smarty_variable('y', null, 0);?>
						<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3603777635b554fd6206881-20258026');
content_5b554fd626c198_09525642($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
					<?php }?>
					<input type="hidden" name="return_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['return_url']->value);?>
">
					<div class="form-group comment-post">
						<input type="submit" class="comment-post btn btn-primary btn-sm" value="Post"/>
						<div class="btn btn-link">
							<a href="#" onclick="$(this).closest('.comment-container').reload(); $(this).closest('.ui-dialog').remove(); return false;">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_syntax_highlighter']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			//Synchronize textarea and codemirror before comment is posted
			$(".comment-form>form, .add-comment-zone>form").submit(function(event){
				var $textarea = $(event.target).find("textarea.wikiedit"); //retrieve the text area from the form that is submitted
				if (typeof syntaxHighlighter.sync === 'function') {
					syntaxHighlighter.sync($textarea);
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\antibot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b554fd626c198_09525642')) {function content_5b554fd626c198_09525642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
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
