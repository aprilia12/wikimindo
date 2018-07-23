<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:48:52
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\feedback\perm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13514510915b515ba4ac0fb6-27768263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7d8e396b11f8e1898220e84161a86bddf435d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\feedback\\perm.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13514510915b515ba4ac0fb6-27768263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb' => 0,
    'info' => 0,
    'header' => 0,
    'direction' => 0,
    'directionPermissionsChanged' => 0,
    'groupPermissionsChanged' => 0,
    'group' => 0,
    'groupPermissionChanged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b515ba4b5d3d5_76846709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b515ba4b5d3d5_76846709')) {function content_5b515ba4b5d3d5_76846709($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['count']>0) {?>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['count']==1) {?>
			<?php $_smarty_tpl->tpl_vars['poptitle'] = new Smarty_variable("Permission successfully changed", null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['type']==='global') {?>
				<?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable("Global permission", null, 0);?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['objid']!==$_smarty_tpl->tpl_vars['info']->value['objname']) {?>
					<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Object permission for the %0 %1 (ID %2)";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable($_tmp1, null, 0);?>
				<?php } else { ?>
					<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Object permission for the %0 %1";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable($_tmp2, null, 0);?>
				<?php }?>
			<?php }?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['poptitle'] = new Smarty_variable("Permissions successfully changed", null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['type']==='global') {?>
				<?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable("Global permissions", null, 0);?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['objid']!==$_smarty_tpl->tpl_vars['info']->value['objname']) {?>
					<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Object permissions for the %0 %1 (ID %2)";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable($_tmp3, null, 0);?>
				<?php } else { ?>
					<?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Object permissions for the %0 %1";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable($_tmp4, null, 0);?>
				<?php }?>
			<?php }?>
		<?php }?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value))); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h5><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
:</h5>
			<?php  $_smarty_tpl->tpl_vars['directionPermissionsChanged'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['directionPermissionsChanged']->_loop = false;
 $_smarty_tpl->tpl_vars['direction'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['mes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['directionPermissionsChanged']->key => $_smarty_tpl->tpl_vars['directionPermissionsChanged']->value) {
$_smarty_tpl->tpl_vars['directionPermissionsChanged']->_loop = true;
 $_smarty_tpl->tpl_vars['direction']->value = $_smarty_tpl->tpl_vars['directionPermissionsChanged']->key;
?>
				<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['direction']->value);?>

				<ul>
					<?php  $_smarty_tpl->tpl_vars['groupPermissionsChanged'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupPermissionsChanged']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['directionPermissionsChanged']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['groupPermissionsChanged']->key => $_smarty_tpl->tpl_vars['groupPermissionsChanged']->value) {
$_smarty_tpl->tpl_vars['groupPermissionsChanged']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['groupPermissionsChanged']->key;
?>
						<?php  $_smarty_tpl->tpl_vars['groupPermissionChanged'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupPermissionChanged']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupPermissionsChanged']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['groupPermissionChanged']->key => $_smarty_tpl->tpl_vars['groupPermissionChanged']->value) {
$_smarty_tpl->tpl_vars['groupPermissionChanged']->_loop = true;
?>
							<li>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['groupPermissionChanged']->value;?>

							</li>
						<?php } ?>
					<?php } ?>
				</ul>
			<?php } ?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'note','title'=>"No permissions were changed")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'note','title'=>"No permissions were changed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'note','title'=>"No permissions were changed"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php } ?>
<?php }} ?>
