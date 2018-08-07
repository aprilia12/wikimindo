<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18261311285b69108701ad80-27198675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62400eb19e0b29a8b253c900e68fa4a4e5199fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-search.tpl',
      1 => 1494155268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18261311285b69108701ad80-27198675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_search' => 0,
    'module_error' => 0,
    'smod_params' => 0,
    'search_mod_usage_counter' => 0,
    'prefs' => 0,
    't' => 0,
    'key' => 0,
    'filter' => 0,
    'tiki_p_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69108708c211_73566274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69108708c211_73566274')) {function content_5b69108708c211_73566274($_smarty_tpl) {?><?php if (!is_callable('smarty_block_compact')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.compact.php';
if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('compact', array()); $_block_repeat=true; echo smarty_block_compact(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_search']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['smod_params']->value['title'],'name'=>"search",'flip'=>$_smarty_tpl->tpl_vars['smod_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['smod_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['smod_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['smod_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['smod_params']->value['title'],'name'=>"search",'flip'=>$_smarty_tpl->tpl_vars['smod_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['smod_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['smod_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['smod_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['tiki_search']!='none') {?>
				<form class="form-inline" id="search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
" method="get" action="<?php echo $_smarty_tpl->tpl_vars['smod_params']->value['search_action'];?>
"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['use_autocomplete']=='y') {?> onsubmit="return submitSearch<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
()"<?php }?>>
					<div class="form-group" style="position: relative;">
						<div class="<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>btn-group<?php } else { ?>input-group input-group-sm<?php }?>" style="margin-left:-7px;margin-right:-7px;">
							<input style="float:left;<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>width:72%;border-bottom-right-radius:0;border-top-right-radius: 0;<?php }?>" placeholder="Find" class="form-control" id="search_mod_input_<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
" name="<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>filter~content<?php } else { ?>find<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['smod_params']->value['input_size'])) {?>size="<?php echo $_smarty_tpl->tpl_vars['smod_params']->value['input_size'];?>
" style="width: auto"<?php }?> type="text" accesskey="s" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['input_value']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['show_object_filter']=='y') {?>
								<label class="control-label" for="filterType">
									in&nbsp;
								</label>
								<div class="form-group">
									<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>
										<select id="filterType" name="filter~type" class="form-control" >
											<option value="">Entire Site</option>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?><option value="wiki page"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="wiki page") {?> selected="selected"<?php }?>>Wiki Pages</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?><option value="blog post"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="blog post") {?> selected="selected"<?php }?>>Blog Posts</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?><option value="article"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="article") {?> selected="selected"<?php }?>>Articles</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?><option value="file"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="file") {?> selected="selected"<?php }?>>Files</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?><option value="forum post"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="forum post") {?> selected="selected"<?php }?>>Forums</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y') {?><option value="trackeritem"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="trackeritem") {?> selected="selected"<?php }?>>Trackers</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=='y') {?><option value="sheet"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="sheet") {?> selected="selected"<?php }?>>Spreadsheets</option><?php }?>
										</select>
									<?php } else { ?>
										<select class="form-control" name="where" >
											<option value="pages">Entire Site</option>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?><option value="wikis"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="wikis") {?> selected="selected"<?php }?>>Wiki Pages</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y') {?><option value="directory"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="directory") {?> selected="selected"<?php }?>>Directory</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
												<option value="galleries"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="galleries") {?> selected="selected"<?php }?>>Image Gals</option>
												<option value="images"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="images") {?> selected="selected"<?php }?>>Images</option>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?><option value="files"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="files") {?> selected="selected"<?php }?>>Files</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?><option value="articles"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="articles") {?> selected="selected"<?php }?>>Articles</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?><option value="forums"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="forums") {?> selected="selected"<?php }?>>Forums</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
												<option value="blogs"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="blogs") {?> selected="selected"<?php }?>>Blogs</option>
												<option value="posts"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="posts") {?> selected="selected"<?php }?>>Blog Posts</option>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y') {?><option value="faqs"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="faqs") {?> selected="selected"<?php }?>>FAQs</option><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y') {?><option value="trackers"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['where']=="trackers") {?> selected="selected"<?php }?>>Trackers</option><?php }?>
										</select>
									<?php }?>

								</div>
							<?php } elseif (!empty($_smarty_tpl->tpl_vars['prefs']->value['search_default_where'])) {?>
								<?php if (is_array($_smarty_tpl->tpl_vars['prefs']->value['search_default_where'])) {?>
									<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['search_default_where']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
										<input type="hidden" name="<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>filter~type[]<?php } else { ?>where[]<?php }?>" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t']->value);?>
" />
									<?php } ?>
								<?php } else { ?>
									<input type="hidden" name="<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>filter~type<?php } else { ?>where<?php }?>" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['search_default_where']);?>
" />
								<?php }?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>

								<button type="submit" class="btn btn-default search_mod_magnifier">
									<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

								</button>
							</div>

							<div class="btn-group search_mod_buttons box" style="display:none;position:absolute;left:2.5em;top:2.5em;z-index:2;white-space:nowrap;">
							<?php } else { ?>
								<div class="input-group-btn btn-group">
							<?php }?>
							<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['smod_params']->value['additional_filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['filter']->key;
?>
								<input type="hidden" name="filter~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filter']->value);?>
"/>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['show_search_button']=='y') {?>
								<input type = "submit" class="btn btn-default btn-sm tips<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['default_button']=='search') {?> btn-primary button_default<?php }
if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?> bottom<?php } else { ?> btn-xs<?php }?>"
									name = "search" value = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['search_submit']);?>
"
									title="Search|Search for text throughout the site."
									<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>data-placement="bottom"<?php }?>
									onclick = "$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
').attr('action', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['search_action'],'javascript');?>
').attr('page_selected','');"
								/>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['show_go_button']=='y') {?>
								<input type="hidden" name="exact_match" value="" />
								<input type = "submit" class="btn btn-default btn-sm tips<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?> bottom<?php } else { ?> btn-xs<?php }
if ($_smarty_tpl->tpl_vars['smod_params']->value['default_button']=='go') {?> btn-primary button_default<?php }?>"
									name = "go" value = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['go_submit']);?>
"
									title="Go|Go directly to a page, or search in page titles if exact match is not found."
									<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>data-placement="bottom"<?php }?>
									onclick = "$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
').attr('action', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['go_action'],'javascript');?>
').attr('page_selected','');
										<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>
											$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
 input[name=\'filter~content\']').attr('name', 'find');
										<?php }?>
									"
								>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['show_edit_button']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y') {?>
								<input type = "submit" class = "btn btn-default btn-sm tips<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?> bottom<?php } else { ?> btn-xs<?php }
if ($_smarty_tpl->tpl_vars['smod_params']->value['default_button']=='edit') {?> btn-primary button_default<?php }?>"
									name = "edit" value = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['edit_submit']);?>
"
									title="Edit|Edit existing page or create a new one."
									<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>data-placement="bottom"<?php }?>
									onclick = "$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
 input[name!=<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>\'filter~content\'<?php } else { ?>\'find\'<?php }?>]').attr('name', '');
											$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
 input[name=<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['search_action']=='tiki-searchindex.php') {?>\'filter~content\'<?php } else { ?>\'find\'<?php }?>]').attr('name', 'page');
											$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
').attr('action', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['edit_action'],'javascript');?>
').attr('page_selected','');
									"
								>
							<?php }?>
						</div>
					</div>


					<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['tiki_search']!='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['advanced_search_option']=='y') {?>
							<div class="checkbox" style="padding-left: 6px; padding-right: 6px; display: inline-block;">
								<label for="boolean"><input type="checkbox" name="boolean" id="boolean"<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['advanced_search']=="y") {?> checked="checked"<?php }?> /> Advanced
									<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['advanced_search_help']=='y') {?>
										<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
 Search Help</a>
									<?php }?>

								</label>
							</div>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['advanced_search']=="y") {?><input type="hidden" name="boolean" value="on" /><?php }?>
						<?php }?>
						<input type="hidden" name="boolean_last" value="<?php echo $_smarty_tpl->tpl_vars['smod_params']->value['advanced_search'];?>
" />

					<?php }?>




					<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['compact']=="y") {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(".search_mod_magnifier").mouseover( function () {
	$(".search_mod_buttons", $(this).parent().parent())
	.show('fast')
	.mouseleave( function () {
		$(this).hide('fast');
	});
}).click( function () {
	$(this).parents("form").submit();
});
$("#search_mod_input_<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
")
.keydown( function () {
	$(".search_mod_magnifier", $(this).parent()).mouseover();}
);
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } else { ?>
						</div>
					<?php }?>
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					function submitSearch<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
() {
						var $f = $('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
');
						if ($f.attr('action') !== "tiki-editpage.php" && $f.data('page_selected') === $("#search_mod_input_<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
").val()) {
							if ($f.find('input[name="find"]').length) {
								$f.find('input[name="find"]').val($f.data('page_selected'));
							} else {
								$f.append($('<input name="find">').val($f.data('page_selected')));
							}
							$f.attr('action', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['go_action'],'javascript');?>
');
						} else if ($f.attr('action') == "#") {
							$f.attr('action', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['smod_params']->value['search_action'],'javascript');?>
');
						}
						$exact = $f.find("input[name=exact_match]");
						if ($exact.val() != "y") {
							$exact.remove(); // seems exact_match is true even if empty
						}
						return true;
					}
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['smod_params']->value['use_autocomplete']=='y') {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("selectFn", null, null); ob_start(); ?>select: function(event, item) {
						$('#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
').data('page_selected', item.item.value).find("input[name=exact_match]").val("y");
						}, open: function(event, item) {
						$(".search_mod_buttons", "#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
").hide();
						}, close: function(event, item) {
						$(".search_mod_buttons", "#search-module-form<?php echo $_smarty_tpl->tpl_vars['search_mod_usage_counter']->value;?>
").show();
						}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo smarty_function_autocomplete(array('element'=>("#search_mod_input_").($_smarty_tpl->tpl_vars['search_mod_usage_counter']->value),'type'=>"pagename",'options'=>Smarty::$_smarty_vars['capture']['selectFn']),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['smod_params']->value['title'],'name'=>"search",'flip'=>$_smarty_tpl->tpl_vars['smod_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['smod_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['smod_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['smod_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_compact(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
