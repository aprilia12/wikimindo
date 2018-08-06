<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:53:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_trackerfilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9220447035b67b83bc608e4-07781792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f138316a1e4b2b9b752256340864218d28a9df6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_trackerfilter.tpl',
      1 => 1510836040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9220447035b67b83bc608e4-07781792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgTrackerFilter' => 0,
    'line' => 0,
    'prefs' => 0,
    'noflipflop' => 0,
    'iTrackerFilter' => 0,
    'open' => 0,
    'inForm' => 0,
    'export_action' => 0,
    'export_fields' => 0,
    'export_itemid' => 0,
    'export_status' => 0,
    'export_created' => 0,
    'export_modif' => 0,
    'export_charset' => 0,
    'export_itemId' => 0,
    'f_fields' => 0,
    'f_k' => 0,
    'f_v' => 0,
    'mapview' => 0,
    'trackerId' => 0,
    'count_item' => 0,
    'filters' => 0,
    'indrop' => 0,
    'filter' => 0,
    'showFieldId' => 0,
    'last' => 0,
    'option' => 0,
    'action' => 0,
    'mapButtons' => 0,
    'sortchoice' => 0,
    'dataRes' => 0,
    'jscal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b83bd3b512_77056065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b83bd3b512_77056065')) {function content_5b67b83bd3b512_77056065($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_trackerinput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerinput.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_js_insert_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.js_insert_icon.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['msgTrackerFilter']->value)&&$_smarty_tpl->tpl_vars['msgTrackerFilter']->value) {?><div class="alert alert-danger"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['msgTrackerFilter']->value);?>
</div><?php }
if ((!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['noflipflop']->value!='y') {
echo smarty_function_button(array('_text'=>"Filters",'_flip_id'=>"trackerFilter".((string)$_smarty_tpl->tpl_vars['iTrackerFilter']->value)),$_smarty_tpl);
}?><div id="trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
" class="trackerfilter" style="display:<?php if (isset($_smarty_tpl->tpl_vars['open']->value)&&$_smarty_tpl->tpl_vars['open']->value=='y') {?>block<?php } else { ?>none<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['inForm']->value)) {
if (empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><form action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
#trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
-result" method="post"><?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					function tf_export_submit(fm) {
						$("input[name=export_filter]").attr("disabled", "disabled").css("opacity", 0.5);
						setTimeout(function(){
							$("input[name=export_filter]").attr("disabled", false).css("opacity", 1);
						}, 2000);
						return true;
					}
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<form action="tiki-export_tracker.php" method="post" onsubmit="tf_export_submit(this);"><?php echo smarty_function_query(array('_type'=>'form_input','listfields'=>$_smarty_tpl->tpl_vars['export_fields']->value,'showItemId'=>$_smarty_tpl->tpl_vars['export_itemid']->value,'showStatus'=>$_smarty_tpl->tpl_vars['export_status']->value,'showCreated'=>$_smarty_tpl->tpl_vars['export_created']->value,'showLastModif'=>$_smarty_tpl->tpl_vars['export_modif']->value,'encoding'=>$_smarty_tpl->tpl_vars['export_charset']->value),$_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['export_itemId']->value)) {?><input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['export_itemId']->value;?>
"><?php }
$_smarty_tpl->tpl_vars['f_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_v']->_loop = false;
 $_smarty_tpl->tpl_vars['f_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_v']->key => $_smarty_tpl->tpl_vars['f_v']->value) {
$_smarty_tpl->tpl_vars['f_v']->_loop = true;
 $_smarty_tpl->tpl_vars['f_k']->value = $_smarty_tpl->tpl_vars['f_v']->key;
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['f_k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['f_v']->value;?>
"><?php }
}
}
if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?><input type="hidden" name="mapview" value="y"><?php } else { ?><input type="hidden" name="mapview" value="n"><?php }?><input type="hidden" name="trackerId" value="<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
"><input type="hidden" name="iTrackerFilter" value="<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['count_item']->value)) {?><input type="hidden" name="count_item" value="<?php echo $_smarty_tpl->tpl_vars['count_item']->value;?>
"><?php }?><div class="table-responsive"><table class="table"><?php if (isset($_smarty_tpl->tpl_vars['line']->value)&&$_smarty_tpl->tpl_vars['line']->value=='y') {?><tr><?php }
$_smarty_tpl->tpl_vars['jscal'] = new Smarty_variable(0, null, 0);
$_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?><tr><?php }?><td class="tracker_filter_label"><?php if ($_smarty_tpl->tpl_vars['indrop']->value!='y'||($_smarty_tpl->tpl_vars['filter']->value['format']!='d'&&$_smarty_tpl->tpl_vars['filter']->value['format']!='m')) {?><label for="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"><?php echo smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['name']);?>
</label><?php }
if ($_smarty_tpl->tpl_vars['showFieldId']->value=='y') {?> -- <?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
}
if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?></td><td class="tracker_filter_input tracker_field<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"><?php } elseif ($_smarty_tpl->tpl_vars['indrop']->value!='y'||($_smarty_tpl->tpl_vars['filter']->value['format']!='d'&&$_smarty_tpl->tpl_vars['filter']->value['format']!='m')) {?>:<?php }
if ($_smarty_tpl->tpl_vars['filter']->value['format']=='d'||$_smarty_tpl->tpl_vars['filter']->value['format']=='m') {?><select id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format']=="m") {?>[]<?php }?>" <?php if ($_smarty_tpl->tpl_vars['filter']->value['format']=="m") {?> size="5" multiple="multiple"<?php }?>><?php if ($_smarty_tpl->tpl_vars['indrop']->value=='y') {?><option value="">--<?php echo smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['name']);?>
--</option><?php }?><option value="">Any</option><?php $_smarty_tpl->tpl_vars['last'] = new Smarty_variable('', null, 0);
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['io'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['io']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['name'] = 'io';
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filter']->value['opts']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total']);
if ($_smarty_tpl->tpl_vars['last']->value!=$_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['name']||$_smarty_tpl->tpl_vars['filter']->value['field']['type']!='d') {?><option value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['selected']=="y") {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['name']));?>
</option><?php }
$_smarty_tpl->tpl_vars['last'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['name'], null, 0);
endfor; endif; ?></select><?php if ($_smarty_tpl->tpl_vars['filter']->value['format']=='m'&&$_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='<'||$_smarty_tpl->tpl_vars['filter']->value['format']=='>'||$_smarty_tpl->tpl_vars['filter']->value['format']=='<='||$_smarty_tpl->tpl_vars['filter']->value['format']=='>='||$_smarty_tpl->tpl_vars['filter']->value['format']=='f'||$_smarty_tpl->tpl_vars['filter']->value['format']=='j') {
if ($_smarty_tpl->tpl_vars['filter']->value['field']['type']=='f'||$_smarty_tpl->tpl_vars['filter']->value['field']['type']=='j') {
if ($_smarty_tpl->tpl_vars['filter']->value['format']=='<'||$_smarty_tpl->tpl_vars['filter']->value['format']=='<=') {?>Before:&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='>'||$_smarty_tpl->tpl_vars['filter']->value['format']=='>=') {?>After:&nbsp;<?php }
}
echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['field'],'inForm'=>"y"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='range') {?>From:&nbsp;<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['from'],'inForm'=>"y"),$_smarty_tpl);?>
To:&nbsp;<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['filter']->value['opts']['to'],'inForm'=>"y"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='t'||$_smarty_tpl->tpl_vars['filter']->value['format']=='T'||$_smarty_tpl->tpl_vars['filter']->value['format']=='i') {
if ($_smarty_tpl->tpl_vars['filter']->value['format']=='i') {
$_smarty_tpl->_capture_stack[0][] = array('i_f', null, null); ob_start(); ?>f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_function_initials_filter_links(array('_initial'=>Smarty::$_smarty_vars['capture']['i_f']),$_smarty_tpl);
}?><input id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" type="text" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['selected'];?>
"><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='sqlsearch') {?><input id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" type="text" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['selected'];?>
"><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'search_help'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['format']=='*') {?><select id="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
" name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];?>
"><option value="">Any</option><?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['opts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?><option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['id']);?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value['selected']=='y') {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['name']);?>
</option><?php } ?></select><?php } else { ?><label><input <?php if ($_smarty_tpl->tpl_vars['filter']->value['format']=="c") {?>type="checkbox"<?php } else { ?>type="radio"<?php }?>name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format']=="c") {?>[]<?php }?>"value=""<?php if (!$_smarty_tpl->tpl_vars['filter']->value['selected']) {?> checked="checked"<?php }?>>Any</label><?php if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?><br><?php }
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['io'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['io']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['name'] = 'io';
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filter']->value['opts']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['io']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['io']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['io']['total']);
?><label><input <?php if ($_smarty_tpl->tpl_vars['filter']->value['format']=="c") {?>type="checkbox"<?php } else { ?>type="radio"<?php }?>name="f_<?php echo $_smarty_tpl->tpl_vars['filter']->value['fieldId'];
if ($_smarty_tpl->tpl_vars['filter']->value['format']=="c") {?>[]<?php }?>"value="<?php echo smarty_modifier_escape(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['id'],"/=.*/",''),'url');?>
"<?php if ($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['selected']=="y") {?> checked="checked"<?php }?>></label><?php echo smarty_modifier_tr_if(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['filter']->value['opts'][$_smarty_tpl->getVariable('smarty')->value['section']['io']['index']]['name'],"/^[^=]*=/",''));
if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?><br><?php }
endfor; endif;
}?></td><?php if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?></tr><?php } else { ?> <?php }
if ($_smarty_tpl->tpl_vars['filter']->value['format']=='j') {
$_smarty_tpl->tpl_vars['jscal'] = new Smarty_variable(1, null, 0);
}
}
if ((!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y')&&(!isset($_smarty_tpl->tpl_vars['action']->value)||$_smarty_tpl->tpl_vars['action']->value!=" ")) {?><tr><?php }
if ((!isset($_smarty_tpl->tpl_vars['action']->value)||$_smarty_tpl->tpl_vars['action']->value!=" ")||!empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><td>&nbsp;</td><td><div id="trackerFilter<?php echo $_smarty_tpl->tpl_vars['iTrackerFilter']->value;?>
-result"></div><?php if (!empty($_smarty_tpl->tpl_vars['export_action']->value)) {?><input class="button submit btn btn-default" type="submit" name="export_filter" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['export_action']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php } elseif ($_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['action']->value!=" ") {?><input class="button submit btn btn-default" type="submit" name="filter" value="<?php if (empty($_smarty_tpl->tpl_vars['action']->value)) {?>Filter<?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>"><input class="button submit btn btn-default" type="submit" name="reset_filter" value="Reset"><?php } else { ?>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['mapButtons']->value&&$_smarty_tpl->tpl_vars['mapButtons']->value=='y') {
if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?><br><input class="button submit btn btn-default" type="submit" name="searchlist" value="List View"><?php } else { ?><br><input class="button submit btn btn-default" type="submit" name="searchmap" value="Map View"><?php }
}?></td><?php }
if (!empty($_smarty_tpl->tpl_vars['sortchoice']->value)) {
if ($_smarty_tpl->tpl_vars['line']->value!='y') {?><tr><?php }?><td>Sort</td><td><?php echo $_smarty_tpl->getSubTemplate ('tracker_sort_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('iTRACKERLIST'=>$_smarty_tpl->tpl_vars['iTrackerFilter']->value), 0);
if (!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y') {?></tr><?php }
}
if ((!isset($_smarty_tpl->tpl_vars['line']->value)||$_smarty_tpl->tpl_vars['line']->value!='y')&&$_smarty_tpl->tpl_vars['action']->value) {?></tr><?php }?></table></div><?php if (empty($_smarty_tpl->tpl_vars['inForm']->value)) {?></form><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['dataRes']->value)) {?><div class="trackerfilter-result"><?php echo $_smarty_tpl->tpl_vars['dataRes']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['jscal']->value) {?>
	<?php echo smarty_function_js_insert_icon(array('type'=>"jscalendar"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
