<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 06:30:39
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-user_cssmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7212500745b51656f70bf20-15893177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f4f9a0e6491b0d5847c84779d736e8664141da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-user_cssmenu.tpl',
      1 => 1496835478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7212500745b51656f70bf20-15893177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_channels' => 0,
    'drilldownmenu' => 0,
    'idCssmenu' => 0,
    'menu_type' => 0,
    'menu_info' => 0,
    'menuId' => 0,
    'menuClass' => 0,
    'home_info' => 0,
    'chdata' => 0,
    'opensec' => 0,
    'sectionType' => 0,
    'nb_opensec' => 0,
    'prefs' => 0,
    'icon' => 0,
    'translate' => 0,
    'link_on_section' => 0,
    'sep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51656f752435_27506792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51656f752435_27506792')) {function content_5b51656f752435_27506792($_smarty_tpl) {?><?php if (!is_callable('smarty_block_repeat')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.repeat.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['menu_channels']->value)>0) {?>
	<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable('0', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
	<?php if (!isset($_smarty_tpl->tpl_vars['drilldownmenu']->value)||$_smarty_tpl->tpl_vars['drilldownmenu']->value!='y') {
$_smarty_tpl->tpl_vars["menuId"] = new Smarty_variable("cssmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value), null, 0);
ob_start();
if ($_smarty_tpl->tpl_vars['menu_type']->value) {?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;?><?php }
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["menuClass"] = new Smarty_variable("nav cssmenu".$_tmp3." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']), null, 0);
} else {
$_smarty_tpl->tpl_vars["menuId"] = new Smarty_variable("drilldownmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value), null, 0);
ob_start();
if ($_smarty_tpl->tpl_vars['menu_type']->value) {?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;?><?php }
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["menuClass"] = new Smarty_variable("nav drilldownmenu cssmenu".$_tmp4." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']), null, 0);
}?><ul id="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['menuClass']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['drilldownmenu']->value)&&$_smarty_tpl->tpl_vars['drilldownmenu']->value=='y') {?><li><a href="tiki-index.php?page=<?php echo urlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
&structure=<?php echo urlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
&page_ref_id=<?php echo $_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['home_info']->value['page_alias']) {
echo $_smarty_tpl->tpl_vars['home_info']->value['page_alias'];
} else {
echo $_smarty_tpl->tpl_vars['home_info']->value['pageName'];
}?></a></li><li class="divider"></li><?php }
$_smarty_tpl->tpl_vars['chdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chdata']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chdata']->key => $_smarty_tpl->tpl_vars['chdata']->value) {
$_smarty_tpl->tpl_vars['chdata']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['chdata']->key;
if ($_smarty_tpl->tpl_vars['chdata']->value['type']!='o'&&$_smarty_tpl->tpl_vars['chdata']->value['type']!='-') {
if ($_smarty_tpl->tpl_vars['opensec']->value>0) {
if ($_smarty_tpl->tpl_vars['chdata']->value['type']=='s'||$_smarty_tpl->tpl_vars['chdata']->value['type']=='r') {
$_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable(0, null, 0);
} else {
$_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable($_smarty_tpl->tpl_vars['chdata']->value['type'], null, 0);
}
if ($_smarty_tpl->tpl_vars['opensec']->value>$_smarty_tpl->tpl_vars['sectionType']->value) {
$_smarty_tpl->tpl_vars['nb_opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-$_smarty_tpl->tpl_vars['sectionType']->value, null, 0);
$_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value)); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
</ul></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['sectionType']->value, null, 0);
}
}?><li class="dropdown option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuSection menuSection<?php echo $_smarty_tpl->tpl_vars['opensec']->value;?>
 menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']) {?> selectedAscendant<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['chdata']->value['block'])) {?><a <?php if (!empty($_smarty_tpl->tpl_vars['chdata']->value['url'])) {?>href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&$_smarty_tpl->tpl_vars['chdata']->value['sefurl']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['sefurl']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['url']);
}?>"<?php } else { ?>tabindex=0<?php }?>><?php if ($_smarty_tpl->tpl_vars['menu_type']->value=='vert'&&$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&$_smarty_tpl->tpl_vars['opensec']->value==0) {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
} elseif (isset($_smarty_tpl->tpl_vars['icon']->value)&&$_smarty_tpl->tpl_vars['icon']->value) {
echo smarty_function_icon(array('name'=>'file-archive','align'=>"left"),$_smarty_tpl);
}?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></span><?php if ($_smarty_tpl->tpl_vars['link_on_section']->value!='n') {?></a><?php }
} else {
if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
$_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value+1, null, 0);?><ul><?php } elseif ($_smarty_tpl->tpl_vars['chdata']->value['type']=='o') {?><li class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuOption menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }
if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']) {?> selectedAscendant<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['chdata']->value['block'])) {?><a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&$_smarty_tpl->tpl_vars['chdata']->value['sefurl']) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['sefurl']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['chdata']->value['url']);
}?>"><?php if ($_smarty_tpl->tpl_vars['menu_type']->value=='vert'&&$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&$_smarty_tpl->tpl_vars['opensec']->value==0) {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
}?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></span></a><?php } else {
if ($_smarty_tpl->tpl_vars['translate']->value=='n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}?></li><?php if ($_smarty_tpl->tpl_vars['sep']->value=='line') {
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);
}
} elseif ($_smarty_tpl->tpl_vars['chdata']->value['type']=='-') {
if ($_smarty_tpl->tpl_vars['opensec']->value>0) {?></ul></li><?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-1, null, 0);
}
$_smarty_tpl->tpl_vars['sep'] = new Smarty_variable("line", null, 0);
}
}
if ($_smarty_tpl->tpl_vars['opensec']->value>0) {
$_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['opensec']->value)); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
</ul></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable(0, null, 0);
}?></ul>
<?php }?>
<?php }} ?>
