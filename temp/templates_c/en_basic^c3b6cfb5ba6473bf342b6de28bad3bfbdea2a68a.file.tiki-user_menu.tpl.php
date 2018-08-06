<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 10:14:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-user_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2180531055b640ecd2de426-47952256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b6cfb5ba6473bf342b6de28bad3bfbdea2a68a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-user_menu.tpl',
      1 => 1496581878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180531055b640ecd2de426-47952256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_info' => 0,
    'menu_channels' => 0,
    'chdata' => 0,
    'opensec' => 0,
    'sectionType' => 0,
    'm' => 0,
    'sep' => 0,
    'prefs' => 0,
    'cname' => 0,
    'link_on_section' => 0,
    'open' => 0,
    'closed' => 0,
    'translate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b640ecd372b40_28535057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b640ecd372b40_28535057')) {function content_5b640ecd372b40_28535057($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<div class="tikimenu<?php if (isset($_smarty_tpl->tpl_vars['menu_info']->value['structure'])&&$_smarty_tpl->tpl_vars['menu_info']->value['structure']=='y') {?> structuremenu<?php }?>">
	<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable('0', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['chdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chdata']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chdata']->key => $_smarty_tpl->tpl_vars['chdata']->value) {
$_smarty_tpl->tpl_vars['chdata']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['chdata']->key;
?>
		<?php $_smarty_tpl->tpl_vars['cname'] = new Smarty_variable((($_smarty_tpl->tpl_vars['menu_info']->value['menuId']).('__')).($_smarty_tpl->tpl_vars['chdata']->value['position']), null, 0);?>
		
		<?php if ($_smarty_tpl->tpl_vars['chdata']->value['type']!='o'&&$_smarty_tpl->tpl_vars['chdata']->value['type']!='-') {?>

			<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0) {?>
				<?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable($_smarty_tpl->tpl_vars['chdata']->value['type'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['sectionType']->value=='s'||$_smarty_tpl->tpl_vars['sectionType']->value=='r') {?>
					<?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable(0, null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['opensec']->value>$_smarty_tpl->tpl_vars['sectionType']->value) {?>
					<?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-$_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['close'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['close']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['name'] = 'close';
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = (int) $_smarty_tpl->tpl_vars['m']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total']);
?>
						</div>
					<?php endfor; endif; ?>
					<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?>
				<?php }?>
			<?php }?>

			<div class="separator<?php echo $_smarty_tpl->tpl_vars['sep']->value;
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']) {?> selectedAscendant<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['sep']->value=='line') {?>
					<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['expanded'] = new Smarty_variable('file-archive-open', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['collapsed'] = new Smarty_variable('file-archive', null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['expanded'] = new Smarty_variable('expanded', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['collapsed'] = new Smarty_variable('collapsed', null, 0);?>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['chdata']->value['open'])&&$_smarty_tpl->tpl_vars['chdata']->value['open'])||(!isset($_smarty_tpl->tpl_vars['chdata']->value['open'])&&$_smarty_tpl->tpl_vars['menu_info']->value['type']!=='d')) {?>
					<?php $_smarty_tpl->tpl_vars['open'] = new Smarty_variable('inline', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['closed'] = new Smarty_variable('none', null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['open'] = new Smarty_variable('none', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['closed'] = new Smarty_variable('inline', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['type']=='e'||$_smarty_tpl->tpl_vars['menu_info']->value['type']=='d') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y') {?>
						<span class="separatoricon-toggle" style="display:inline">
							<a class='separator' href="javascript:toggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">
								<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>"Toggle",'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

							</a>
						</span>
						<?php if ($_smarty_tpl->tpl_vars['chdata']->value['url']&&$_smarty_tpl->tpl_vars['link_on_section']->value=='y') {?>
							<span class="separatoricon-url" style="display:none">
								<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['sefurl']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['url']);
}?>">
									<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>"Toggle",'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

								</a>
							</span>
						<?php }?>
					<?php } else { ?>
						<a class='separator' href="#" onclick="icontoggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
', this); return false;" title="Toggle options" id="sep<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
"><?php if (empty($_smarty_tpl->tpl_vars['menu_info']->value['icon'])) {?><span class="toggle-open" style="display:<?php echo $_smarty_tpl->tpl_vars['open']->value;?>
"><?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['expanded']->value),'alt'=>'Toggle'),$_smarty_tpl);?>
</span><span class="toggle-closed" style="display:<?php echo $_smarty_tpl->tpl_vars['closed']->value;?>
"><?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['collapsed']->value),'alt'=>'Toggle'),$_smarty_tpl);?>
</span><?php } else { ?><span class="toggle-open" style="display:<?php echo $_smarty_tpl->tpl_vars['open']->value;?>
"><img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menu_info']->value['oicon']);?>
" alt="Toggle"></span><span class="toggle-closed" style="display:<?php echo $_smarty_tpl->tpl_vars['closed']->value;?>
"><img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menu_info']->value['icon']);?>
" alt="Toggle"></span><?php }?></a>
					<?php }?>
				<?php } else { ?>
					<?php if (empty($_smarty_tpl->tpl_vars['menu_info']->value['icon'])) {?>
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['expanded']->value),'alt'=>'Toggle'),$_smarty_tpl);?>

					<?php } else { ?>
						<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menu_info']->value['oicon']);?>
" alt="Toggle">
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['chdata']->value['url']&&$_smarty_tpl->tpl_vars['link_on_section']->value=='y') {?>
					<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['sefurl']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['url']);
}?>" class="separator">
				<?php } else { ?>
					<a href="#" onclick="icontoggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
', this); return false;" class="separator" id="sep<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
">
				<?php }?>
					<span class="menuText">
						<?php if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
					</span>
				</a>
			</div> 

			<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value+1, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['type']=='e'||$_smarty_tpl->tpl_vars['menu_info']->value['type']=='d') {?>
				<div class="menuSection" style="display:<?php if ($_smarty_tpl->tpl_vars['open']->value==='inline') {?>block<?php } else { ?>none<?php }?>" id='menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
'>
			<?php } else { ?>
				<div class="menuSection">
			<?php }?>
		
		<?php } elseif ($_smarty_tpl->tpl_vars['chdata']->value['type']=='o') {?>
			<div class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 option<?php echo $_smarty_tpl->tpl_vars['sep']->value;
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }?>">
				<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['sefurl']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['url']);
}?>" class="linkmenu">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&($_smarty_tpl->tpl_vars['opensec']->value==0||$_smarty_tpl->tpl_vars['chdata']->value['icon']!='')) {?>
						<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

					<?php }?>
					<span class="menuText">
						<?php if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
					</span>
				</a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['sep']->value=='line') {?>
				<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
			<?php }?>

		
		<?php } elseif ($_smarty_tpl->tpl_vars['chdata']->value['type']=='-') {?>
			<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0) {?>
				</div><?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-1, null, 0);?>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable("line", null, 0);?>
		<?php }?>
	<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['close'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['close']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['name'] = 'close';
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = (int) $_smarty_tpl->tpl_vars['opensec']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total']);
?>
			</div>
		<?php endfor; endif; ?>
		<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable(0, null, 0);?>
	<?php }?>
</div>
<?php }} ?>
