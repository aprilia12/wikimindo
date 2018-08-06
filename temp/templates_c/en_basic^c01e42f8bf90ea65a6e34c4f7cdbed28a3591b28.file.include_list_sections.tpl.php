<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:08:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_list_sections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1794977885b63b90845f025-39366926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01e42f8bf90ea65a6e34c4f7cdbed28a3591b28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_list_sections.tpl',
      1 => 1498711290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1794977885b63b90845f025-39366926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'admin_icons' => 0,
    'info' => 0,
    'page' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b908495b37_41043604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b908495b37_41043604')) {function content_5b63b908495b37_41043604($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Enable/disable Tiki features in <a class="alert-link" href="tiki-admin.php?page=features">Control Panels&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;Features</a>, but configure them elsewhere.
	<br/>
	See <strong>more options</strong> after you enable more <a class='alert-link' target='tikihelp' href='https://doc.tiki.org/Preference+Filters'>Preference Filters</a> above (<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
).
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix">
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox advanced btn btn-primary disabled", null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox basic btn btn-primary", null, 0);?>
			<?php }?>
				
				<a href="tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 tips bottom slow <?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>disabled-clickable<?php }?>" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['title']);
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> (Disabled)<?php }?>|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
					<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

					<span class="title"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['title']);?>
</span>
				</a>
	<?php } ?>
</div>
<?php }} ?>
