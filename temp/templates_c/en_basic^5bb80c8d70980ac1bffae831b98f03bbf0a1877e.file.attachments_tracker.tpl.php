<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 05:06:29
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\attachments_tracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19675484095b67bb350101a5-02911123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb80c8d70980ac1bffae831b98f03bbf0a1877e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\attachments_tracker.tpl',
      1 => 1459935982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19675484095b67bb350101a5-02911123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'print_page' => 0,
    'tiki_p_attach_trackers' => 0,
    'trackerId' => 0,
    'itemId' => 0,
    'attId' => 0,
    'attach_file' => 0,
    'attach_comment' => 0,
    'attach_version' => 0,
    'attach_longdesc' => 0,
    'attfields' => 0,
    'nbcols' => 0,
    'atts' => 0,
    'attextra' => 0,
    'link' => 0,
    'x' => 0,
    'tiki_p_admin_trackers' => 0,
    'user' => 0,
    'offset' => 0,
    'sort_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67bb3507d7b2_94145219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67bb3507d7b2_94145219')) {function content_5b67bb3507d7b2_94145219($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_modifier_iconify')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.iconify.php';
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['print_page']->value)===null||$tmp==='' ? null : $tmp)!='y'&&$_smarty_tpl->tpl_vars['tiki_p_attach_trackers']->value=='y') {?><h3>Attach a file to this item</h3><form enctype="multipart/form-data" action="tiki-view_tracker_item.php" method="post" class="form-horizontal" role="form"><input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
"><input type="hidden" name="itemId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['itemId']->value);?>
"><input type="hidden" name="attId" value="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['attId']->value))===null||$tmp==='' ? null : $tmp);?>
"><div class="form-group"><label for="MAX_FILE_SIZE" class="col-md-4 control-label">Upload file</label><div class="col-md-8"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['attach_file']->value)===null||$tmp==='' ? null : $tmp)) {?>Edit: <?php }?><input type="hidden" name="MAX_FILE_SIZE" value="1000000000"><input name="userfile1" type="file"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['attach_file']->value)===null||$tmp==='' ? null : $tmp)) {?><br><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attach_file']->value);
}?></div></div><div class="form-group"><label for="attach_comment" class="col-md-4 control-label">Comment</label><div class="col-md-8"><input type="text" name="attach_comment" maxlength="250" value="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['attach_comment']->value))===null||$tmp==='' ? null : $tmp);?>
" class="form-control"></div></div><div class="form-group clearfix"><label for="attach_version" class="col-md-4 control-label">Version</label><div class="col-md-1"><input type="text" name="attach_version" size="5" maxlength="10" value="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['attach_version']->value))===null||$tmp==='' ? null : $tmp);?>
" class="form-control"></div></div><div class="form-group"><label for="attach_longdesc" class="col-md-4 control-label">Description</label><div class="col-md-8"><textarea name="attach_longdesc" rows="3" class="form-control"><?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['attach_longdesc']->value))===null||$tmp==='' ? null : $tmp);?>
</textarea></div></div><div class="form-group clearfix"><div class="text-center"><input type="submit" class="btn btn-default btn-sm" name="attach" value=<?php if ((($tmp = @$_smarty_tpl->tpl_vars['attach_file']->value)===null||$tmp==='' ? null : $tmp)) {?>"Edit"<?php } else { ?>"Attach"<?php }?>></div></div></form><?php }?><h3>Attachments</h3><div class="table-responsive"><table class="table"><tr><?php $_smarty_tpl->tpl_vars['nbcols'] = new Smarty_variable(2, null, 0);?><th class="auto">&nbsp;</th><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['attfields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
$_smarty_tpl->tpl_vars['nbcols'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbcols']->value+1, null, 0);?><th class="auto"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['attfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th><?php endfor; endif; ?><th>&nbsp;</th></tr><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['atts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><tr><td nowrap="nowrap" class="auto"><?php if ($_smarty_tpl->tpl_vars['attextra']->value=='y') {
$_smarty_tpl->tpl_vars['link'] = new Smarty_variable(('tiki-view_tracker_more_info.php?attId=').($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId']), null, 0);?><a class="tablename tips" href="#" title=":more info" onclick="javascript:window.open('<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
','','menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=yes,width=450,height=600');"><?php echo smarty_function_icon(array('name'=>"information",'alt'=>"more info"),$_smarty_tpl);?>
</a><?php }?><a class="tablename tips" href="tiki-download_item_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
" title=":Download"><?php echo smarty_function_icon(array('name'=>"download",'alt'=>"Download"),$_smarty_tpl);?>
</a></td><?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['x']->key;
if ($_smarty_tpl->tpl_vars['x']->value=='created') {?><td><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']][$_smarty_tpl->tpl_vars['x']->value]);?>
</td><?php } elseif ($_smarty_tpl->tpl_vars['x']->value=='filesize') {?><td nowrap="nowrap"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']][$_smarty_tpl->tpl_vars['x']->value]);?>
</td><?php } elseif ($_smarty_tpl->tpl_vars['x']->value=='filetype') {?><td><?php echo smarty_modifier_iconify($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['filename']);?>
</td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']][$_smarty_tpl->tpl_vars['x']->value];?>
</td><?php }
} ?><td><?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'||($_smarty_tpl->tpl_vars['user']->value&&($_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value))) {?><a class="tips" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
&amp;removeattach=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
" title=":Delete"><?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Delete"),$_smarty_tpl);?>
</a><a class="tips" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
&amp;editattach=<?php echo $_smarty_tpl->tpl_vars['atts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['attId'];?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
" title=":Edit"><?php echo smarty_function_icon(array('name'=>'edit','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php }?></td></tr><?php endfor; else: ?><tr><td colspan="<?php echo $_smarty_tpl->tpl_vars['nbcols']->value;?>
" class="formcontent">No attachments for this item</td></tr><?php endif; ?></table></div>
<?php }} ?>
