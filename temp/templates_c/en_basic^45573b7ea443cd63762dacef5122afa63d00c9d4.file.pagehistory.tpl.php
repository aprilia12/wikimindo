<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 04:21:21
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\pagehistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18606837435b57dea13e26e7-09424680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45573b7ea443cd63762dacef5122afa63d00c9d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\pagehistory.tpl',
      1 => 1484602210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18606837435b57dea13e26e7-09424680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'diff_style' => 0,
    'old' => 0,
    'new' => 0,
    'diffdata' => 0,
    'translation_mode' => 0,
    'hide_version_info' => 0,
    'page' => 0,
    'info' => 0,
    'show_all_versions' => 0,
    'ver_cant' => 0,
    'oldd' => 0,
    'newd' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57dea14b4961_96720425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57dea14b4961_96720425')) {function content_5b57dea14b4961_96720425($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['diff_style']->value)&&(($_smarty_tpl->tpl_vars['old']->value&&$_smarty_tpl->tpl_vars['new']->value&&$_smarty_tpl->tpl_vars['old']->value['version']!==$_smarty_tpl->tpl_vars['new']->value['version'])||!empty($_smarty_tpl->tpl_vars['diffdata']->value))) {?>
	<?php if ((!isset($_smarty_tpl->tpl_vars['translation_mode']->value)||$_smarty_tpl->tpl_vars['translation_mode']->value!='y')&&empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>
		<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comparing version <?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
 with version <?php echo $_smarty_tpl->tpl_vars['new']->value['version'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php }?>
	<div class="table-responsive">
		<table class="table diff">
			<?php if (isset($_smarty_tpl->tpl_vars['translation_mode']->value)&&$_smarty_tpl->tpl_vars['translation_mode']->value=='n') {?>
				<tr>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,"url");?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
				</tr>
				<tr>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['old']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['old']->value['lastModif']);?>
</td>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['new']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['new']->value['lastModif']);?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['comment']||$_smarty_tpl->tpl_vars['new']->value['comment']) {?>
					<tr>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['old']->value['comment']) {
echo $_smarty_tpl->tpl_vars['old']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['new']->value['comment']) {
echo $_smarty_tpl->tpl_vars['new']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['description']!=$_smarty_tpl->tpl_vars['new']->value['description']) {?>
					<tr>
						<td colspan="2" class="diffdeleted"><?php if ($_smarty_tpl->tpl_vars['old']->value['description']) {
echo $_smarty_tpl->tpl_vars['old']->value['description'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="diffadded"><?php if ($_smarty_tpl->tpl_vars['new']->value['description']) {
echo $_smarty_tpl->tpl_vars['new']->value['description'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sideview") {?>
				<tr>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['old']->value['data'];?>
</div></td>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['new']->value['data'];?>
</div></td>
				</tr>
			<?php }?>
			<tr>
				<?php if ($_REQUEST['oldver_idx']+1==$_REQUEST['newver_idx']||$_REQUEST['oldver_idx']==$_REQUEST['newver_idx']) {?>
					<td colspan="4">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
				<?php } else { ?>
					<td colspan="2">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
					<td colspan="2">
						<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
				<?php }?>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=='unidiff') {?>
				<tr>
					<td colspan="4">
						<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<?php if ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffheader") {?>
									<?php $_smarty_tpl->tpl_vars["oldd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['old'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars["newd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['new'], null, 0);?>
									<br><div class="diffheader">@@ <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-Lines: <?php echo $_smarty_tpl->tpl_vars['oldd']->value;?>
 changed to +Lines: <?php echo $_smarty_tpl->tpl_vars['newd']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 @@</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffdeleted") {?>
									<div class="diffdeleted">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
										- <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

									<?php endfor; endif; ?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffadded") {?>
									<div class="diffadded">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
											<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
											+ <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

										<?php endfor; endif; ?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffbody") {?>
									<div class="diffbody">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']) {?><br><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

									<?php endfor; endif; ?>
								</div>
								<?php }?>
							<?php endfor; endif; ?>
						<?php } else { ?>
							<div class="diffheader">Versions are identical</div>
						<?php }?>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value!='unidiff'&&$_smarty_tpl->tpl_vars['diff_style']->value!='sideview') {?>
				<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {
echo $_smarty_tpl->tpl_vars['diffdata']->value;
} else { ?><tr><td colspan="4">Versions are identical</td></tr><?php }?>
			<?php }?>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_wikidiff']=='y'&&$_smarty_tpl->tpl_vars['old']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>'Example wikidiff plugin syntax')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<code>{wikidiff object_id="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" oldver="<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" newver="<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" diff_style="<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
" show_version_info="<?php if (empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>y<?php } else { ?>n<?php }?>"}</code>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>
