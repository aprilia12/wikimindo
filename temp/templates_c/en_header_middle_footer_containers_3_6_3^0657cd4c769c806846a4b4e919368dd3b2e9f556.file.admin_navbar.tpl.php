<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\admin_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20435453195b69105aad5689-77439264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0657cd4c769c806846a4b4e919368dd3b2e9f556' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\admin_navbar.tpl',
      1 => 1514271356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20435453195b69105aad5689-77439264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pref_filters' => 0,
    'info' => 0,
    'name' => 0,
    'prefs' => 0,
    'connect_feedback_showing' => 0,
    'headerlib' => 0,
    'lm_criteria' => 0,
    'indexNeedsRebuilding' => 0,
    'include' => 0,
    'lm_searchresults' => 0,
    'prefName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105ab04499_82734184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105ab04499_82734184')) {function content_5b69105ab04499_82734184($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?><nav class="navbar navbar-default admin-navbar" role="navigation">
	<div class="navbar-header">
		<form method="post" action="" class="form" role="form">
			<input type="checkbox" id="preffilter-toggle-1" class="preffilter-toggle preffilter-toggle-round <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['type']);?>
" value="advanced"<?php if ($_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']) {?> checked="checked"<?php }?>>
			<label for="preffilter-toggle-1"></label>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#admin-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav filter-menu col-xs-4 col-xs-push-1"<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']) {?> style="display: none;"<?php }?>>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Settings" style="width: 80px;">
						<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
 <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><span class="dropdown-title">Preference Filters</span></li>
							<input type="hidden" name="pref_filters[]" value="basic">
							<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pref_filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
								<li>
									<div class="checkbox">
										<label>
											<input type="checkbox" class="preffilter <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['type']);?>
" name="pref_filters[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['info']->value['selected']) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['name']->value=='basic') {?> disabled="disabled"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['label']);?>

										</label>
									</div>
								</li>
							<?php } ?>
							<div class="text-center">
								<input type="submit" value="Set as my default" class="btn btn-primary btn-sm">
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_feature']=="y") {?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('likeicon', null, null); ob_start();
echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<label>
									<input type="checkbox" id="connect_feedback_cbx" <?php if (!empty($_smarty_tpl->tpl_vars['connect_feedback_showing']->value)) {?>checked="checked"<?php }?>>
									Provide Feedback
									<a href="https://doc.tiki.org/Connect" target="tikihelp" class="tikihelp" title="Provide Feedback:
										Once selected, some icon/s will be shown next to all features so that you can provide some on-site feedback about them.
										<br/><br/>
										<ul>
											<li>Icon for 'Like' <?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['likeicon']);?>
</li>
	<!--											<li>Icon for 'Fix me' <img src=img/icons/connect_fix.png></li> -->
	<!--											<li>Icon for 'What is this for?' <img src=img/icons/connect_wtf.png></li> -->
										</ul>
										<br/>
										Your votes will be sent when you connect with mother.tiki.org (currently only by clicking the 'Connect > <strong>Send Info</strong>' button)
										<br/><br/>
										Click to read more
									">
										<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

									</a>
								</label>
								<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-connect.js");?>

							<?php }?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								var updateVisible = function() {
									var show = function (selector) {
										selector.show();
										selector.parents('fieldset:not(.tabcontent)').show();
										selector.closest('fieldset.tabcontent').addClass('filled');
									};
									var hide = function (selector) {
										selector.hide();
										/*selector.parents('fieldset:not(.tabcontent)').hide();*/
									};

									var filters = [];
									var prefs = $('.adminoptionbox.preference, .admbox').hide();
									prefs.parents('fieldset:not(.tabcontent)').hide();
									prefs.closest('fieldset.tabcontent').removeClass('filled');
									$('.preffilter').each(function () {
										var targets = $('.adminoptionbox.preference.' + $(this).val() + ',.admbox.' + $(this).val());
										if ($(this).is(':checked')) {
											filters.push($(this).val());
											show(targets);
										} else if ($(this).is('.negative:not(:checked)')) {
											hide(targets);
										}
									});

									show($('.adminoptionbox.preference.modified'));

									$('input[name="filters"]').val(filters.join(' '));
									$('.tabset .tabmark a').each(function () {
										var selector = 'fieldset.tabcontent.' + $(this).attr('href').substring(1);
										var content = $(this).closest('.tabset').find(selector);

										$(this).parent().toggle(content.is('.filled') || content.find('.preference').length === 0);
									});
								};

								updateVisible();
								$('.preffilter').change(updateVisible);
								$('.preffilter-toggle').change(function () {
									var checked = $(this).is(":checked");
									$("input.preffilter[value=advanced]").prop("checked", checked);
									$(".filter-menu.nav").css("display", checked ? "block" : "none");
									updateVisible();
								});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<li class="divider"></li>
						<li>
							<a href="tiki-admin.php?prefrebuild">
								Rebuild Admin Index
							</a>
						</li>
						<li>
							<a href="tiki-admin.php">
								Control Panels
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</form>
	</div>
	<div class="collapse navbar-collapse" id="admin-navbar-collapse-1">
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_navbar_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<ul class="nav navbar-nav navbar-right">
			<li>
				<form method="post" action="" class="navbar-form" role="form">
					<div class="form-group">
						<input type="hidden" name="filters">
						<input type="text" name="lm_criteria" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lm_criteria']->value);?>
" class="form-control" placeholder="Search preferences..." autofocus="autofocus">
					</div>
					<button type="submit" class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['indexNeedsRebuilding']->value) {?> class="tips" title="Configuration search|Note: The search index needs rebuilding, this will take a few minutes."<?php }?>><?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
</button>
				</form>
			</li>
		</ul>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['include']->value!="list_sections") {?>
		<div class="adminanchors panel-body clearfix"><ul class="nav navbar-nav"><?php echo $_smarty_tpl->getSubTemplate ('admin/include_anchors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</ul></div>
	<?php }?>
</nav>

<?php if ($_smarty_tpl->tpl_vars['lm_searchresults']->value) {?>
	<div class="panel panel-default" id="pref_searchresults">
		<div class="panel-heading">
			<h3 class="panel-title">Preference Search Results<button type="button" id="pref_searchresults-close" class="close" aria-hidden="true">&times;</button></h3>
		</div>
		<form method="post" action="" href="tiki-admin.php" class="table" role="form">
			<div class="pref_search_results panel-body">
				<?php  $_smarty_tpl->tpl_vars['prefName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prefName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lm_searchresults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prefName']->key => $_smarty_tpl->tpl_vars['prefName']->value) {
$_smarty_tpl->tpl_vars['prefName']->_loop = true;
?>
					<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['prefName']->value,'get_pages'=>'y','visible'=>'always'),$_smarty_tpl);?>

				<?php } ?>
			</div>
			<div class="panel-footer text-center">
				<input class="btn btn-primary" type="submit" title="Apply Changes" value="Apply">
			</div>
			<input type="hidden" name="lm_criteria" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lm_criteria']->value);?>
">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		</form>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$( "#pref_searchresults-close" ).click(function() {
			$( "#pref_searchresults" ).hide();
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } elseif ($_smarty_tpl->tpl_vars['lm_criteria']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"No results",'icon'=>"magnifier")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"No results",'icon'=>"magnifier"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		No preferences were found for your search query.<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>')); $_block_repeat=true; echo smarty_block_tr(array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not what you expected? Try %0rebuilding%1 the preferences search index.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>'<a class="alert-link" href="tiki-admin.php?prefrebuild">','_1'=>'</a>'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"No results",'icon'=>"magnifier"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
