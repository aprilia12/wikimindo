<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:22:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-who_is_there.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9175498465b69105b924031-15200384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b174b5fe7e00466ab6e8318f05c77c9a395cd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-who_is_there.tpl',
      1 => 1439191084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9175498465b69105b924031-15200384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'count' => 0,
    'cluster' => 0,
    'logged_cluster_users' => 0,
    'cant' => 0,
    'tikihost' => 0,
    'logged_users' => 0,
    'list' => 0,
    'online_users' => 0,
    'user' => 0,
    'prefs' => 0,
    'tiki_p_messages' => 0,
    'online_user' => 0,
    'idle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69105b943446_57283459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69105b943446_57283459')) {function content_5b69105b943446_57283459($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['silent'])) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"who_is_there",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"who_is_there",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['count']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['cluster']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['cant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cant']->_loop = false;
 $_smarty_tpl->tpl_vars['tikihost'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logged_cluster_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cant']->key => $_smarty_tpl->tpl_vars['cant']->value) {
$_smarty_tpl->tpl_vars['cant']->_loop = true;
 $_smarty_tpl->tpl_vars['tikihost']->value = $_smarty_tpl->tpl_vars['cant']->key;
?>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['cant']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['cant']->value>1) {?>
						online users
					<?php } elseif ($_smarty_tpl->tpl_vars['cant']->value>0) {?>
						online user
					<?php }?>
					on host <?php echo $_smarty_tpl->tpl_vars['tikihost']->value;?>

				</div>
			<?php } ?>
		<?php } else { ?>
			<div>
				<?php echo $_smarty_tpl->tpl_vars['logged_users']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['logged_users']->value>1) {?>
					online users
				<?php } elseif ($_smarty_tpl->tpl_vars['logged_users']->value>0) {?>
					online user
				<?php }?>
			</div>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['online_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['online_user']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['online_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['online_user']->key => $_smarty_tpl->tpl_vars['online_user']->value) {
$_smarty_tpl->tpl_vars['online_user']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['online_user']->key;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['online_user']->value['allowMsgs']=='n') {?>
							<?php echo smarty_function_icon(array('name'=>'envelope','title'=>"User does not accept messages",'class'=>'icon'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_icon(array('name'=>'envelope','title'=>"Send a message to",'href'=>('messu-compose.php?to=').($_smarty_tpl->tpl_vars['online_user']->value['user']),'class'=>'icon'),$_smarty_tpl);?>

						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['online_user']->value['user_information']=='public') {?>
						<?php echo smarty_function_math(array('equation'=>"x - y",'x'=>time(),'y'=>$_smarty_tpl->tpl_vars['online_user']->value['timestamp'],'assign'=>'idle'),$_smarty_tpl);?>

						<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['online_user']->value['user'],"linkmodule",$_smarty_tpl->tpl_vars['idle']->value);?>

					<?php } else { ?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['online_user']->value['user']);?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['cluster']->value) {?><br>(<?php echo $_smarty_tpl->tpl_vars['online_user']->value['tikihost'];?>
)<?php }?>
				</li>
			<?php } ?>
		</ul>
	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"who_is_there",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
