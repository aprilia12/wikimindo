<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:23:01
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_trackerlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3647965875b691095ac19a7-45759330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb512adca7255d5e7a08ba81e563c4e0e8703ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_trackerlist.tpl',
      1 => 1505814998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3647965875b691095ac19a7-45759330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tdinstyle' => 0,
    'showlinks' => 0,
    'url' => 0,
    'showtitle' => 0,
    'tracker_info' => 0,
    'showdesc' => 0,
    'nonPublicFieldsWarning' => 0,
    'allowtableexpansion' => 0,
    'user_watching_tracker' => 0,
    'listTrackerId' => 0,
    'showrss' => 0,
    'sortchoice' => 0,
    'tsOn' => 0,
    'shownbitems' => 0,
    'count_item' => 0,
    'cant_pages' => 0,
    'tr_initial' => 0,
    'showinitials' => 0,
    'checkbox' => 0,
    'items' => 0,
    'tpl' => 0,
    'trackerlistmapview' => 0,
    'trackerlistmapname' => 0,
    'displaysheet' => 0,
    'iTRACKERLIST' => 0,
    'prefs' => 0,
    'tableassheet' => 0,
    'showfieldname' => 0,
    'precols' => 0,
    'showstatus' => 0,
    'perms' => 0,
    'showitemrank' => 0,
    'fields' => 0,
    'ix' => 0,
    'listfields' => 0,
    'default_group' => 0,
    'fieldcount' => 0,
    'showcreated' => 0,
    'postcols' => 0,
    'showlastmodif' => 0,
    'showlastmodifby' => 0,
    'showcomments' => 0,
    'showdelete' => 0,
    'showpenditem' => 0,
    'showopenitem' => 0,
    'showcloseitem' => 0,
    'computedFields' => 0,
    'tstotals' => 0,
    'computedField' => 0,
    'texturl' => 0,
    'txturl' => 0,
    'list_mode' => 0,
    'more' => 0,
    'moreurl' => 0,
    'tr_sort_mode' => 0,
    'showpagination' => 0,
    'max' => 0,
    'offset_arg' => 0,
    '($_smarty_tpl->tpl_vars[\'offset_arg\']->value)' => 0,
    'export' => 0,
    'exportUrl' => 0,
    'popupfields' => 0,
    'f' => 0,
    'cbvalue' => 0,
    'ustatus' => 0,
    'status_types' => 0,
    'tr_offset' => 0,
    'field' => 0,
    'tdstyle' => 0,
    'rowurl' => 0,
    'tdastyle' => 0,
    'fieldr' => 0,
    'showpopup' => 0,
    'itemoff' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691095c195f5_65975572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691095c195f5_65975572')) {function content_5b691095c195f5_65975572($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_replacei')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.replacei.php';
if (!is_callable('smarty_function_trackeroutput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_trackerheader')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerheader.php';
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tdinstyle', null); ob_start(); ?>overflow:hidden<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'tdstyle', null); ob_start(); ?>style="<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'tdastyle', null); ob_start(); ?>style="margin:-10em;padding:10em;display:block"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'txturl', null); ob_start();
if (isset($_smarty_tpl->tpl_vars['showlinks']->value)&&$_smarty_tpl->tpl_vars['showlinks']->value=='y') {
echo $_smarty_tpl->tpl_vars['url']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'rowurl', null); ob_start();
if (isset($_smarty_tpl->tpl_vars['showlinks']->value)&&$_smarty_tpl->tpl_vars['showlinks']->value=='r') {
echo $_smarty_tpl->tpl_vars['url']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'showlinks', null); ob_start();
if (isset($_smarty_tpl->tpl_vars['showlinks']->value)&&$_smarty_tpl->tpl_vars['showlinks']->value=='r') {?>n<?php } else {
echo $_smarty_tpl->tpl_vars['showlinks']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if ($_smarty_tpl->tpl_vars['showtitle']->value=='y') {?><div class="pagetitle"><?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['showdesc']->value=='y') {?><div class="wikitext"><?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['descriptionIsParsed']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker_info']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
echo $_smarty_tpl->tpl_vars['tracker_info']->value['description'];
}?></div><?php }
if ($_smarty_tpl->tpl_vars['nonPublicFieldsWarning']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Field error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Field error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['nonPublicFieldsWarning']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Field error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['allowtableexpansion']->value=='y') {?><button title="Expand table" class="btn btn-default btn-sm table-expand-toggle" type="button" ><span class="icon fa fa-caret-square-o-right fa-fw "></span></button><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$(".table-expand-toggle").click(function(){
				var $this = $(this);
				if ( $this.data('expandStatus') != 'expanded' ) {
					$this.data('expandStatus','expanded');
					var $parentdiv = $(this).parent('div');
					$parentdiv.find('div.table-responsive').each(function () {
						$(this).removeClass('table-responsive').addClass('table');
					}); // end each
					$this.attr('title','Restore layout');
					$this.children('span').removeClass('fa-caret-square-o-right').addClass('fa-caret-square-o-left');
				}else{
					$this.data('expandStatus','responsive');
					var $parentdiv = $(this).parent('div');
					$parentdiv.find('div.table').each(function () {
						$(this).addClass('table-responsive').removeClass('table');
					}); // end each
					$this.attr('title','Expand table');
					$this.children('span').removeClass('fa-caret-square-o-left').addClass('fa-caret-square-o-right');
				}
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if (isset($_smarty_tpl->tpl_vars['user_watching_tracker']->value)) {
if ($_smarty_tpl->tpl_vars['user_watching_tracker']->value=='n') {?><a href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;watch=add" title="Monitor" class="trackerlistwatch"><?php echo smarty_function_icon(array('name'=>'watch','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":Monitor"),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['user_watching_tracker']->value=='y') {?><a href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;watch=stop" title="Stop Monitor" class="trackerlistwatch"><?php echo smarty_function_icon(array('name'=>'stop-watching','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":Stop monitoring"),$_smarty_tpl);?>
</a><?php }
}
if ($_smarty_tpl->tpl_vars['showrss']->value=='y') {?><a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
"><?php echo smarty_function_icon(array('name'=>'rss','align'=>"right",'hspace'=>"1",'class'=>'tips','title'=>":RSS feed"),$_smarty_tpl);?>
</a><?php }
if (!empty($_smarty_tpl->tpl_vars['sortchoice']->value)) {?><div class="trackerlistsort"><form method="post"><?php echo $_smarty_tpl->getSubTemplate ('tracker_sort_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<input type="submit" class="btn btn-default btn-sm" name="sort" value="Sort"></form></div><?php }
if (!$_smarty_tpl->tpl_vars['tsOn']->value) {
if ($_smarty_tpl->tpl_vars['shownbitems']->value=='y') {?><div class="nbitems">Items found: <span class='badge'><?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
</span></div><?php }
}
if ((isset($_smarty_tpl->tpl_vars['cant_pages']->value)&&$_smarty_tpl->tpl_vars['cant_pages']->value>1&&!'tsOn')||$_smarty_tpl->tpl_vars['tr_initial']->value||$_smarty_tpl->tpl_vars['showinitials']->value=='y') {
echo smarty_function_initials_filter_links(array('_initial'=>'tr_initial'),$_smarty_tpl);
}
if (isset($_smarty_tpl->tpl_vars['checkbox']->value)&&$_smarty_tpl->tpl_vars['checkbox']->value&&count($_smarty_tpl->tpl_vars['items']->value)>0&&empty($_smarty_tpl->tpl_vars['tpl']->value)&&!$_smarty_tpl->tpl_vars['checkbox']->value['embed']) {?><form method="post" action="<?php if (empty($_smarty_tpl->tpl_vars['checkbox']->value['action'])) {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['checkbox']->value['action'];
}?>"><?php }
if ($_smarty_tpl->tpl_vars['trackerlistmapview']->value) {
ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerlistmapname']->value);
$_tmp12=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"map",'scope'=>".trackerlist_".$_tmp12."_geo .geolocated",'width'=>"400",'height'=>"400")); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".trackerlist_".$_tmp12."_geo .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".trackerlist_".$_tmp12."_geo .geolocated",'width'=>"400",'height'=>"400"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {
if (isset($_smarty_tpl->tpl_vars['displaysheet']->value)&&$_smarty_tpl->tpl_vars['displaysheet']->value=='true') {?><div class='trackercontainer' style='height: 250px ! important;'><?php }?><div id="wptrackerlist<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iTRACKERLIST']->value;?>
-div" <?php if ($_smarty_tpl->tpl_vars['tsOn']->value) {?>style="visibility:hidden"<?php }?> class="ts-wrapperdiv"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_report_resize_button']=='y') {?><p class="tracker-resize" style="display:none;text-align:right"><button class="tracker-resize-expand btn btn-default" title="Resize"><?php echo smarty_function_icon(array('name'=>'expand'),$_smarty_tpl);?>
</button><button class="tracker-resize-compress btn btn-default" title="Resize" style="display:none"><?php echo smarty_function_icon(array('name'=>'compress'),$_smarty_tpl);?>
</button></p><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$('[id^="wptrackerlist"].ts-wrapperdiv').each(function() {
						if ($(this).width() < $(this).find('.table').width()) {
							$(this).find('.tracker-resize').show();
						}
					});
					$('.tracker-resize-expand').click(function() {
						var selector = $(this).closest('.ts-wrapperdiv').find('.table-responsive');
						selector.addClass('enlarge');
						$(this).parent().find('.tracker-resize-compress').show();
						$(this).hide();
					});
					$('.tracker-resize-compress').click(function() {
						var selector = $(this).closest('.ts-wrapperdiv').find('.table-responsive');
						selector.removeClass('enlarge');
						$(this).parent().find('.tracker-resize-expand').show();
						$(this).hide();
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><div class="table-responsive"><table class="table table-striped table-hover normal wikiplugin_trackerlist" id="wptrackerlist<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iTRACKERLIST']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['displaysheet']->value)&&$_smarty_tpl->tpl_vars['displaysheet']->value=='true') {?>title="<?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
" readonly="true"<?php }
if (isset($_smarty_tpl->tpl_vars['tableassheet']->value)&&$_smarty_tpl->tpl_vars['tableassheet']->value=='true') {?>title="Tracker - <?php echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];?>
" readonly="true"<?php }?>data-count="<?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['showfieldname']->value!='n'&&empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><thead><tr><?php $_smarty_tpl->tpl_vars['precols'] = new Smarty_variable(0, null, 0);
$_smarty_tpl->tpl_vars['fieldcount'] = new Smarty_variable(0, null, 0);
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable(0, null, 0);
if (isset($_smarty_tpl->tpl_vars['checkbox']->value)&&$_smarty_tpl->tpl_vars['checkbox']->value) {
$_smarty_tpl->tpl_vars['precols'] = new Smarty_variable($_smarty_tpl->tpl_vars['precols']->value+1, null, 0);?><th><?php echo $_smarty_tpl->tpl_vars['checkbox']->value['title'];?>
</th><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value!='n')&&($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'))) {
$_smarty_tpl->tpl_vars['precols'] = new Smarty_variable($_smarty_tpl->tpl_vars['precols']->value+1, null, 0);?><th class="auto" style="width:20px;">&nbsp;</th><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value=='y') {
$_smarty_tpl->tpl_vars['precols'] = new Smarty_variable($_smarty_tpl->tpl_vars['precols']->value+1, null, 0);?><th>Rank</th><?php }
$_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ix']->_loop = false;
 $_smarty_tpl->tpl_vars['jx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ix']->key => $_smarty_tpl->tpl_vars['ix']->value) {
$_smarty_tpl->tpl_vars['ix']->_loop = true;
 $_smarty_tpl->tpl_vars['jx']->value = $_smarty_tpl->tpl_vars['ix']->key;
if ($_smarty_tpl->tpl_vars['ix']->value['isPublic']=='y'&&($_smarty_tpl->tpl_vars['ix']->value['isHidden']=='n'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='c'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='p'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='a'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')&&$_smarty_tpl->tpl_vars['ix']->value['type']!='x'&&$_smarty_tpl->tpl_vars['ix']->value['type']!='h'&&in_array($_smarty_tpl->tpl_vars['ix']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value)&&($_smarty_tpl->tpl_vars['ix']->value['type']!='p'||$_smarty_tpl->tpl_vars['ix']->value['options_array'][0]!='password')&&(empty($_smarty_tpl->tpl_vars['ix']->value['visibleBy'])||in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['ix']->value['visibleBy'])||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')) {
$_smarty_tpl->tpl_vars['fieldcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['fieldcount']->value+1, null, 0);
if ($_smarty_tpl->tpl_vars['ix']->value['type']=='l') {?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</th><?php } elseif ($_smarty_tpl->tpl_vars['ix']->value['type']=='s'&&$_smarty_tpl->tpl_vars['ix']->value['name']=="Rating") {
if ($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_ratings']=='y') {?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']))); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php }
} else { ?><th class="auto field<?php echo $_smarty_tpl->tpl_vars['ix']->value['fieldId'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['ix']->value['name'])===null||$tmp==='' ? "&nbsp;" : $tmp);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>('f_').($_smarty_tpl->tpl_vars['ix']->value['fieldId']),'session_filters'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php }
}
}
if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'created','session_filters'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value=='y') {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
LastModif<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModif','session_filters'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value=='y') {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last modified by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>('tr_sort_mode').($_smarty_tpl->tpl_vars['iTRACKERLIST']->value),'_sort_field'=>'lastModifBy','session_filters'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value!='n'&&$_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y')&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments']!='n') {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']!='y') {?> style="width:5%"<?php }?>>Comments</th><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments']=='y') {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th style="width:5%">atts</th><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value=='y'||$_smarty_tpl->tpl_vars['showpenditem']->value=='y'||$_smarty_tpl->tpl_vars['showopenitem']->value=='y'||$_smarty_tpl->tpl_vars['showcloseitem']->value=='y')&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed']=='y')) {
$_smarty_tpl->tpl_vars['postcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['postcols']->value+1, null, 0);?><th>Action</th><?php }?></tr></thead><?php }
}
$_smarty_tpl->_capture_stack[0][] = array("trackerlist_bottomstuff", null, null); ob_start();
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?></tbody><?php if ((!empty($_smarty_tpl->tpl_vars['computedFields']->value)||isset($_smarty_tpl->tpl_vars['tstotals']->value))&&count($_smarty_tpl->tpl_vars['items']->value)>0) {
$_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable(0, null, 0);?><tfoot><?php if (($_smarty_tpl->tpl_vars['tstotals']->value)&&$_smarty_tpl->tpl_vars['tsOn']->value) {
echo $_smarty_tpl->getSubTemplate ("tablesorter/totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofoot'=>"y",'fieldcount'=>((string)$_smarty_tpl->tpl_vars['fieldcount']->value),'precols'=>((string)$_smarty_tpl->tpl_vars['precols']->value),'postcols'=>((string)$_smarty_tpl->tpl_vars['postcols']->value)), 0);
}
if (!empty($_smarty_tpl->tpl_vars['computedFields']->value)) {?><tr class='compute'><?php if (isset($_smarty_tpl->tpl_vars['checkbox']->value)&&$_smarty_tpl->tpl_vars['checkbox']->value) {?><td></td><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value!='n')&&($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'))) {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value=='y') {?><td></td><?php }
$_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ix']->_loop = false;
 $_smarty_tpl->tpl_vars['jx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ix']->key => $_smarty_tpl->tpl_vars['ix']->value) {
$_smarty_tpl->tpl_vars['ix']->_loop = true;
 $_smarty_tpl->tpl_vars['jx']->value = $_smarty_tpl->tpl_vars['ix']->key;
if ($_smarty_tpl->tpl_vars['ix']->value['isPublic']=='y'&&($_smarty_tpl->tpl_vars['ix']->value['isHidden']=='n'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='c'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='p'||$_smarty_tpl->tpl_vars['ix']->value['isHidden']=='a'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')&&$_smarty_tpl->tpl_vars['ix']->value['type']!='x'&&$_smarty_tpl->tpl_vars['ix']->value['type']!='h'&&in_array($_smarty_tpl->tpl_vars['ix']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value)&&($_smarty_tpl->tpl_vars['ix']->value['type']!='p'||$_smarty_tpl->tpl_vars['ix']->value['options_array'][0]!='password')&&(empty($_smarty_tpl->tpl_vars['ix']->value['visibleBy'])||in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['ix']->value['visibleBy'])||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')) {
if (isset($_smarty_tpl->tpl_vars['computedFields']->value[$_smarty_tpl->tpl_vars['ix']->value['fieldId']])) {?><td class="numeric" style="padding-right:2px"><?php  $_smarty_tpl->tpl_vars['computedField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['computedField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['computedFields']->value[$_smarty_tpl->tpl_vars['ix']->value['fieldId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['computedField']->key => $_smarty_tpl->tpl_vars['computedField']->value) {
$_smarty_tpl->tpl_vars['computedField']->_loop = true;
?><label><?php if (isset($_smarty_tpl->tpl_vars['computedField']->value['operator'])&&$_smarty_tpl->tpl_vars['computedField']->value['operator']=='avg') {?>Average<?php } else { ?>Total</label><?php }?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['texturl']->value)&&isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['itemId'])) {
$_smarty_tpl->tpl_vars['url'] = new Smarty_variable(smarty_modifier_replacei($_smarty_tpl->tpl_vars['txturl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']), null, 0);
} elseif (isset($_smarty_tpl->tpl_vars['texturl']->value)) {
$_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['txturl']->value), null, 0);
}
ob_start();
if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']])) {?><?php echo (string)$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']];?><?php }
$_tmp13=ob_get_clean();?><?php ob_start();
if (isset($_smarty_tpl->tpl_vars['list_mode']->value)) {?><?php echo (string)$_smarty_tpl->tpl_vars['list_mode']->value;?><?php }
$_tmp14=ob_get_clean();?><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['computedField']->value,'item'=>$_tmp13,'list_mode'=>$_tmp14,'url'=>((string)$_smarty_tpl->tpl_vars['url']->value)),$_smarty_tpl);?>
<br/><?php } ?></td><?php } else { ?><td></td><?php }
}
}
if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value=='y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value=='y') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value!='n'&&$_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y')&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments']!='n') {?><td></td><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments']=='y') {?><td></td><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value=='y'||$_smarty_tpl->tpl_vars['showpenditem']->value=='y'||$_smarty_tpl->tpl_vars['showopenitem']->value=='y'||$_smarty_tpl->tpl_vars['showcloseitem']->value=='y')&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed']=='y')) {?><td></td><?php }?></tr><?php }?></tfoot><?php }?></table></div></div><?php if (isset($_smarty_tpl->tpl_vars['displaysheet']->value)&&$_smarty_tpl->tpl_vars['displaysheet']->value=='true') {?></div><?php }
if (count($_smarty_tpl->tpl_vars['items']->value)==0&&!$_smarty_tpl->tpl_vars['tsOn']->value) {?><div class="tracker_error">No records found</div><?php } elseif (isset($_smarty_tpl->tpl_vars['checkbox']->value)&&$_smarty_tpl->tpl_vars['checkbox']->value) {
if ($_smarty_tpl->tpl_vars['checkbox']->value['tpl']) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['checkbox']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}
if (!empty($_smarty_tpl->tpl_vars['checkbox']->value['submit'])&&!empty($_smarty_tpl->tpl_vars['checkbox']->value['title'])) {?><br><input type="submit" class="btn btn-default btn-sm" name="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['submit'];?>
" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['checkbox']->value['title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php }
if (!$_smarty_tpl->tpl_vars['checkbox']->value['embed']) {?></form><?php }
}
}
if ($_smarty_tpl->tpl_vars['more']->value=='y') {?><div class="more"><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'moreUrl', null); ob_start();
if ($_smarty_tpl->tpl_vars['moreurl']->value) {
echo $_smarty_tpl->tpl_vars['moreurl']->value;
} else { ?>tiki-view_tracker.php<?php }?>?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;
if (isset($_smarty_tpl->tpl_vars['tr_sort_mode']->value)) {?>&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['tr_sort_mode']->value;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_function_button(array('class'=>'more','href'=>((string)$_smarty_tpl->tpl_vars['moreUrl']->value),'_text'=>"More..."),$_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['showpagination']->value!='n') {
$_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['count_item']->value,'step'=>$_smarty_tpl->tpl_vars['max']->value,'offset'=>$_smarty_tpl->tpl_vars[($_smarty_tpl->tpl_vars['offset_arg']->value)]->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['export']->value=='y'&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_export_tracker']=='y')) {
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['exportUrl']->value,'_text'=>"Export",'_class'=>'exportButton'),$_smarty_tpl);
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('.exportButton a').click(function() {
				$(this).serviceDialog({
					title: 'Export Tracker'
				});
				return false;
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable(0, null, 0);
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><tbody><?php }
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
if ($_smarty_tpl->tpl_vars['trackerlistmapview']->value) {?><div class="trackerlist_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerlistmapname']->value);?>
_geo" style="display:none;"><?php echo smarty_function_object_link(array('type'=>"trackeritem",'id'=>((string)smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']))),$_smarty_tpl);?>
</div><?php }
if (!empty($_smarty_tpl->tpl_vars['popupfields']->value)) {
$_smarty_tpl->_capture_stack[0][] = array('popup', null, null); ob_start(); ?><div class="panel panel-default"><table style="width:100%"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['field_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
if (in_array($_smarty_tpl->tpl_vars['f']->value['fieldId'],$_smarty_tpl->tpl_vars['popupfields']->value)) {
$_smarty_tpl->_capture_stack[0][] = array('popupl', null, null); ob_start();
echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['f']->value,'item'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']],'url'=>smarty_modifier_replacei($_smarty_tpl->tpl_vars['txturl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']),'editable'=>in_array($_smarty_tpl->tpl_vars['f']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editableFields'])),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (!empty(Smarty::$_smarty_vars['capture']['popupl'])) {?><tr><?php if (count($_smarty_tpl->tpl_vars['popupfields']->value)>1) {?><th class="<?php echo smarty_function_cycle(array('advance'=>false),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</th><?php }?><td><?php echo Smarty::$_smarty_vars['capture']['popupl'];?>
</td></tr><?php }
}
} ?></table></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->tpl_vars['showpopup'] = new Smarty_variable('y', null, 0);
} else {
$_smarty_tpl->tpl_vars['showpopup'] = new Smarty_variable('n', null, 0);
}
if (empty($_smarty_tpl->tpl_vars['tpl']->value)) {?><tr><?php if (!empty($_smarty_tpl->tpl_vars['checkbox']->value)) {
$_smarty_tpl->_capture_stack[0][] = array('default', 'cbvalue', null); ob_start();
if ($_smarty_tpl->tpl_vars['checkbox']->value['ix']>-1) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['field_values'][$_smarty_tpl->tpl_vars['checkbox']->value['ix']]['value']);
} else {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><td><input type="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['name'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['cbvalue']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['cbvalue']->value,$_smarty_tpl->tpl_vars['checkbox']->value['checked'])) {?>checked<?php }?>></td><?php }
if (($_smarty_tpl->tpl_vars['showstatus']->value!='n')&&($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'))) {?><td class="auto" style="width:20px;"><?php $_smarty_tpl->tpl_vars['ustatus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status'])===null||$tmp==='' ? "c" : $tmp), null, 0);
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['iconname'],'iclass'=>'tips','ititle'=>":".((string)$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['label'])),$_smarty_tpl);?>
</td><?php }
if ($_smarty_tpl->tpl_vars['showitemrank']->value=='y') {?><td><?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->getVariable('smarty')->value['section']['user']['rownum'],'y'=>$_smarty_tpl->tpl_vars['tr_offset']->value),$_smarty_tpl);?>
</td><?php }
if (!isset($_smarty_tpl->tpl_vars['list_mode']->value)) {
$_smarty_tpl->tpl_vars['list_mode'] = new Smarty_variable("y", null, 0);
}
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['field_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
if ($_smarty_tpl->tpl_vars['field']->value['isPublic']=='y'&&($_smarty_tpl->tpl_vars['field']->value['isHidden']=='n'||$_smarty_tpl->tpl_vars['field']->value['isHidden']=='c'||$_smarty_tpl->tpl_vars['field']->value['isHidden']=='p'||$_smarty_tpl->tpl_vars['field']->value['isHidden']=='a'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')&&$_smarty_tpl->tpl_vars['field']->value['type']!='x'&&$_smarty_tpl->tpl_vars['field']->value['type']!='h'&&in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value)&&($_smarty_tpl->tpl_vars['field']->value['type']!='p'||$_smarty_tpl->tpl_vars['field']->value['options_array'][0]!='password')&&(empty($_smarty_tpl->tpl_vars['field']->value['visibleBy'])||in_array($_smarty_tpl->tpl_vars['default_group']->value,$_smarty_tpl->tpl_vars['field']->value['visibleBy'])||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y')) {?><td class=<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='n'||$_smarty_tpl->tpl_vars['field']->value['type']=='q'||$_smarty_tpl->tpl_vars['field']->value['type']=='b') {?>"numeric"<?php } else { ?>"auto"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='b') {?> style="padding-right:5px;<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['tdstyle']->value;
}?>><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['field']->value['isHidden']=='c'&&$_smarty_tpl->tpl_vars['fieldr']->value&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']!='y') {
} elseif (isset($_smarty_tpl->tpl_vars['perms']->value)) {
echo smarty_function_trackeroutput(array('item'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']],'field'=>$_smarty_tpl->tpl_vars['field']->value,'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'showlinks'=>$_smarty_tpl->tpl_vars['showlinks']->value,'showpopup'=>$_smarty_tpl->tpl_vars['showpopup']->value,'popupfields'=>$_smarty_tpl->tpl_vars['popupfields']->value,'url'=>$_smarty_tpl->tpl_vars['txturl']->value,'editable'=>in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editableFields']),'tiki_p_view_trackers'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_view_trackers'],'tiki_p_modify_tracker_items'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items'],'tiki_p_modify_tracker_items_pending'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending'],'tiki_p_modify_tracker_items_closed'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed'],'tiki_p_comment_tracker_items'=>$_smarty_tpl->tpl_vars['perms']->value['tiki_p_comment_tracker_items'],'reloff'=>$_smarty_tpl->tpl_vars['itemoff']->value),$_smarty_tpl);
} else {
echo smarty_function_trackeroutput(array('item'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']],'field'=>$_smarty_tpl->tpl_vars['field']->value,'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'reloff'=>$_smarty_tpl->tpl_vars['itemoff']->value,'showlinks'=>$_smarty_tpl->tpl_vars['showlinks']->value,'showpopup'=>$_smarty_tpl->tpl_vars['showpopup']->value,'popupfields'=>$_smarty_tpl->tpl_vars['popupfields']->value,'url'=>$_smarty_tpl->tpl_vars['txturl']->value,'editable'=>in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editableFields'])),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?>&nbsp;</a><?php }?></td><?php }
}
if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['created'],$_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['created']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodif']->value=='y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastModif'],$_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastModif']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showlastmodifby']->value=='y') {?><td <?php echo $_smarty_tpl->tpl_vars['tdstyle']->value;?>
><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastModifBy'];
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['showcomments']->value!='n'&&$_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y')&&$_smarty_tpl->tpl_vars['perms']->value['tiki_p_tracker_view_comments']!='n') {?><td style="text-align:center;<?php echo $_smarty_tpl->tpl_vars['tdinstyle']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['rowurl']->value) {?><a href="<?php echo smarty_modifier_replacei($_smarty_tpl->tpl_vars['rowurl']->value,'#itemId',$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']);?>
" <?php echo $_smarty_tpl->tpl_vars['tdastyle']->value;?>
><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y') {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comments'];
}
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y') {?><br><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y'&&!empty($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['lastComment'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastComment']['userName']);?>
-<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastComment']['commentDate']);
}
if ($_smarty_tpl->tpl_vars['rowurl']->value) {?></a><?php }?></td><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments']=='y') {?><td style="text-align:center;"><a href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['listTrackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
&amp;show=att"link="List Attachments"><?php echo smarty_function_icon(array('name'=>"attach"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['attachments'];?>
</td><?php }
if (($_smarty_tpl->tpl_vars['showdelete']->value=='y'||$_smarty_tpl->tpl_vars['showpenditem']->value=='y'||$_smarty_tpl->tpl_vars['showopenitem']->value=='y'||$_smarty_tpl->tpl_vars['showcloseitem']->value=='y')&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending']=='y'||$_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed']=='y')) {?><td><?php if ($_smarty_tpl->tpl_vars['showdelete']->value=='y'&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_pending']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_remove_tracker_items_closed']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c'))) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('delete'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_class'=>'tips','_title'=>":Remove")); $_block_repeat=true; echo smarty_block_self_link(array('delete'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_class'=>'tips','_title'=>":Remove"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('delete'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_class'=>'tips','_title'=>":Remove"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['showcloseitem']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c'&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c'))) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-danger')); $_block_repeat=true; echo smarty_block_self_link(array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-danger'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('closeitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-danger'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['showopenitem']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='o'&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c'))) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-success')); $_block_repeat=true; echo smarty_block_self_link(array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-success'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('openitem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-success'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['showpenditem']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&($_smarty_tpl->tpl_vars['perms']->value['tiki_p_admin_trackers']=='y'||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_pending']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['perms']->value['tiki_p_modify_tracker_items_closed']=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c'))) {
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-warning')); $_block_repeat=true; echo smarty_block_self_link(array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-warning'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pend item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('penditem'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'],'_style'=>'display:inline-block;','_class'=>'text-nowrap btn-xs btn-warning'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></td><?php }?></tr><?php $_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemoff']->value+1, null, 0);
} else {
$_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemoff']->value+1, null, 0);
echo $_smarty_tpl->getSubTemplate ('tracker_pretty_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['field_values'],'item'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']],'wiki'=>$_smarty_tpl->tpl_vars['tpl']->value), 0);
echo smarty_function_trackerheader(array('level'=>-1,'title'=>'','inTable'=>''),$_smarty_tpl);
}
endfor; endif;
echo Smarty::$_smarty_vars['capture']['trackerlist_bottomstuff'];?>

<?php }} ?>
