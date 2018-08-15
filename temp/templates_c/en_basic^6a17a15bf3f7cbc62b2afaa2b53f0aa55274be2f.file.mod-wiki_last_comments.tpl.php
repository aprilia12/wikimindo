<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 03:41:18
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-wiki_last_comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17755130655b6ced3e722481-83029361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a17a15bf3f7cbc62b2afaa2b53f0aa55274be2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-wiki_last_comments.tpl',
      1 => 1491652436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17755130655b6ced3e722481-83029361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'prefs' => 0,
    'module_params' => 0,
    'tpl_module_title' => 0,
    'comments' => 0,
    'nonums' => 0,
    'moretooltips' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6ced3e7e9839_05538838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6ced3e7e9839_05538838')) {function content_5b6ced3e7e9839_05538838($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
if (!is_callable('smarty_modifier_avatarize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
?>

<?php if (($_smarty_tpl->tpl_vars['type']->value=='wiki page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y')||($_smarty_tpl->tpl_vars['type']->value=='article'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y')) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"wiki_last_comments",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"wiki_last_comments",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['module_params']->value['avatars']=='y') {
$_smarty_tpl->tpl_vars['nonums'] = new Smarty_variable('y', null, 0);
}?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['comments']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value)); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['comments']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
?>
			<li<?php if ($_smarty_tpl->tpl_vars['module_params']->value['avatars']=='y') {?> style="list-style-type: none;"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['module_params']->value['avatars']=='y') {?>
					<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName'],'right');?>

				<?php }?>
				<a class="linkmodule tips" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'],$_smarty_tpl->tpl_vars['type']->value,'with_next');?>
comzone=show#threadId=<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
" title="<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['commentDate'],'','n');?>
| by <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['userName']);
if ($_smarty_tpl->tpl_vars['moretooltips']->value=='y') {?> on <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
}?>">
					<?php if ($_smarty_tpl->tpl_vars['moretooltips']->value!='y') {?>
						<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</strong>:
					<?php }?>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>

				</a>
			</li>
		<?php endfor; endif; ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['comments']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"wiki_last_comments",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
