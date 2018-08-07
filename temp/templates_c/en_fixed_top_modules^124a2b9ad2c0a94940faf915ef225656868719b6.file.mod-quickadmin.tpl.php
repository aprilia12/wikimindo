<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-quickadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6983733175b691037d5c155-79209053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124a2b9ad2c0a94940faf915ef225656868719b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-quickadmin.tpl',
      1 => 1511371592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6983733175b691037d5c155-79209053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'js' => 0,
    'recent_prefs' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b691037d8af61_20411656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b691037d8af61_20411656')) {function content_5b691037d8af61_20411656($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_stringfix')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.stringfix.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
		<div id="quickadmin" class="btn-group">
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
				<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
					<?php echo smarty_function_icon(array('name'=>"history"),$_smarty_tpl);?>

				</a>
				<ul class="dropdown-menu" role="menu">
					<li class="dropdown-title">
						Recent Preferences
					</li>
					<li class="divider"></li>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_prefs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<li>
							<a href="tiki-admin.php?lm_criteria=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value);?>
&amp;exact"><?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['p']->value);?>
</a>
						</li>
						<?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
						<li>None</li>
					<?php } ?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
			</div>
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
				<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
					<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

				</a>
				<ul class="dropdown-menu">
					<li class="dropdown-title">
						Quick Administration
					</li>
					<li class="divider"></li>
					<li>
						<a href="tiki-wizard_admin.php?stepNr=0&amp;url=index.php">
							<?php echo smarty_function_icon(array('name'=>"wizard"),$_smarty_tpl);?>
 Wizards
						</a>
					</li>
					<li>
						<a href="tiki-admin.php">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Control panels
						</a>
					</li>
					<li>
						<a href="tiki-admin.php?page=look">
							<?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
 Themes
						</a>
					</li>
					<li>
						<a href="tiki-adminusers.php">
							<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 Users
						</a>
					</li>
					<li>
						<a href="tiki-admingroups.php">
							<?php echo smarty_function_icon(array('name'=>"group"),$_smarty_tpl);?>
 Groups
						</a>
					</li>
					<li>
						<?php echo smarty_function_permission_link(array('mode'=>'text'),$_smarty_tpl);?>

					</li>
					<li>
						<a href="tiki-admin_menus.php">
							<?php echo smarty_function_icon(array('name'=>"menu"),$_smarty_tpl);?>
 Menus
						</a>
					</li>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db']=="y") {?>
							<li>
								<?php if (isset($_SESSION['interactive_translation_mode'])&&$_SESSION['interactive_translation_mode']=="on") {?>
									<a href="tiki-interactive_trans.php?interactive_translation_mode=off">
										<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 Turn off interactive translation
									</a>
								<?php } else { ?>
									<a href="tiki-interactive_trans.php?interactive_translation_mode=on">
										<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 Turn on interactive translation
									</a>
								<?php }?>
							</li>
						<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation']=="y") {?>
						<li>
							<a href="tiki-list_comments.php">
								<?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 Comment moderation
							</a>
						</li>
					<?php }?>
					<li>
						<a href="tiki-admin_system.php?do=all">
							<?php echo smarty_function_icon(array('name'=>"trash"),$_smarty_tpl);?>
 Clear all caches
						</a>
					</li>
					<li>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'rebuild'),$_smarty_tpl);?>
">
							<?php echo smarty_function_icon(array('name'=>"index"),$_smarty_tpl);?>
 Rebuild search index
						</a>
					</li>
					<li>
						<a href="tiki-plugins.php">
							<?php echo smarty_function_icon(array('name'=>"plugin"),$_smarty_tpl);?>
 Plugin approval
						</a>
					</li>
					<li>
						<a href="tiki-syslog.php">
							<?php echo smarty_function_icon(array('name'=>"log"),$_smarty_tpl);?>
 Logs
						</a>
					</li>
					<li>
						<a href="tiki-admin_modules.php">
							<?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 Modules
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_scheduler']=="y") {?>
					<li>
						<a href="tiki-admin_schedulers.php">
							<?php echo smarty_function_icon(array('name'=>"calendar"),$_smarty_tpl);?>
 Scheduler
						</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl_routes']=="y") {?>
						<li>
							<a href="tiki-admin_routes.php">
								<?php echo smarty_function_icon(array('name'=>"random"),$_smarty_tpl);?>
 Custom Routes
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y') {?>
						<li>
							<a href="<?php echo smarty_function_query(array('_type'=>'relative','show_smarty_debug'=>1),$_smarty_tpl);?>
">
								<?php echo smarty_function_icon(array('name'=>"bug"),$_smarty_tpl);?>
 Smarty debug window
							</a>
						</li>
					<?php }?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
			</div>
		</div>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
