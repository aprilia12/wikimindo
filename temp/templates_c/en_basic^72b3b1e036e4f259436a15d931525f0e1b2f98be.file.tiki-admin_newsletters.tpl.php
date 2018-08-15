<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 05:18:52
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_newsletters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10990458345b739b9c8551a4-22021112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b3b1e036e4f259436a15d931525f0e1b2f98be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_newsletters.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10990458345b739b9c8551a4-22021112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channels' => 0,
    'find' => 0,
    'prefs' => 0,
    'js' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant_pages' => 0,
    'offset' => 0,
    'individual' => 0,
    'info' => 0,
    'user' => 0,
    'articleTypes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b739b9c972465_23741620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b739b9c972465_23741620')) {function content_5b739b9c972465_23741620($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Newsletters")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Newsletters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin newsletters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Newsletters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar btn-group form-group">
	<?php echo smarty_function_button(array('href'=>"tiki-admin_newsletters.php?cookietab=2",'_icon_name'=>"create",'_text'=>"Create"),$_smarty_tpl);?>

	<a role="link" href="tiki-newsletters.php" class="btn btn-link" title="List"><?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 List</a>
	<a role="link" href="tiki-send_newsletters.php" class="btn btn-link" title="Send"><?php echo smarty_function_icon(array('name'=>"envelope"),$_smarty_tpl);?>
 Send</a>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Newsletters")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Newsletters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Newsletters</h2>

		<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
			<table class="table table-striped table-hover">
				<tr>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Newsletter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'author')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'users')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'users'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'users'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'editions')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'editions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Editions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'editions'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th>Drafts</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Sent<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th></th>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
					<tr>
						<td class="id"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit")); $_block_repeat=true; echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td class="text">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit")); $_block_repeat=true; echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'_title'=>"Edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<div class="subcomment"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description']));?>
</div>
						</td>
						<td class="username"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['author'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['users'];?>
 (<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['confirmed'];?>
)</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editions'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['drafts'];?>
</td>
						<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastSent']);?>
</td>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('newsletters_actions', null, null); ob_start(); ?>
								<?php echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'newsletter','permType'=>'newsletters','id'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'],'title'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_newsletter_subscriptions.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Subscriptions"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-send_newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'envelope','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Send newsletter"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-newsletter_archives.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'file-archive','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Archives"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nlId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;?>

							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
							<a
								class="tips"
								title="Actions"
								href="#"
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['newsletters_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['newsletters_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					</tr>
				<?php endfor; else: ?>
					<?php echo smarty_function_norecords(array('_colspan'=>8),$_smarty_tpl);?>

				<?php endif; ?>
			</table>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Newsletters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Create/Edit Newsletters")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Create/Edit Newsletters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Create/Edit Newsletters</h2>
		<?php if (isset($_smarty_tpl->tpl_vars['individual']->value)&&$_smarty_tpl->tpl_vars['individual']->value=='y') {?>
			<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>'newsletter','permType'=>'newsletters','id'=>$_smarty_tpl->tpl_vars['info']->value['nlId'],'title'=>$_smarty_tpl->tpl_vars['info']->value['name'],'label'=>"There are individual permissions set for this newsletter"),$_smarty_tpl);?>

		<?php }?>

		<form action="tiki-admin_newsletters.php" method="post" class="form-horizontal">
			<input type="hidden" name="nlId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['nlId']);?>
">
			<input type="hidden" name="author" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user']->value);?>
">
			<div class="form-group">
				<label class="col-md-2 control-label"> Name: </label>
				<div class="col-md-10">
						<input class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" for="description">Description:</label>
				<div class="col-md-10">
					<textarea class="form-control" name="description" id="description"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</textarea>
				</div>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="allowUserSub" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowUserSub']=='y') {?>checked="checked"<?php }?>>
						Users can subscribe/unsubscribe to this list
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="allowAnySub" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowAnySub']=='y') {?>checked="checked"<?php }?>>
					Users can subscribe any email address
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="unsubMsg" <?php if ($_smarty_tpl->tpl_vars['info']->value['unsubMsg']=='y') {?>checked="checked"<?php }?>>
					Add unsubscribe instructions to each newsletter
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="validateAddr" <?php if ($_smarty_tpl->tpl_vars['info']->value['validateAddr']=='y') {?>checked="checked"<?php }?>>
					Validate email addresses
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="allowTxt" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowTxt']=='y') {?>checked="checked"<?php }?>>
					Allow customized text message to be sent with the HTML version
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="allowArticleClip" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowArticleClip']=='y') {?>checked="checked"<?php }?>>
					Allow clipping of articles into newsletter
				</label>
			</div>
			<div class="checkbox col-md-offset-2">
				<label>
					<input type="checkbox" name="autoArticleClip" <?php if ($_smarty_tpl->tpl_vars['info']->value['autoArticleClip']=='y') {?>checked="checked"<?php }?>>
					Automatically clip articles into newsletter
				</label>
			</div>
			<div class="checkbox col-md-offset-2" style="margin-bottom: 15px;">
				<label>
					<input type="checkbox" name="emptyClipBlocksSend" <?php if ($_smarty_tpl->tpl_vars['info']->value['emptyClipBlocksSend']=='y') {?>checked="checked"<?php }?>>
					Do not send newsletter if clip is empty
				</label>
			</div>
			<div class="form-group">
				<label class="col-md-5 control-label" for="articleClipRangeDays">
					Clip articles published in the past number of days</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="articleClipRangeDays" id="articleClipRangeDays" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['articleClipRangeDays']);?>
">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-5 control-label" for="articleClipTypes">
					Article types to clip</label>
				<div class="col-md-4">
					<select id="articleClipTypes" name="articleClipTypes[]" class="form-control" multiple="multiple">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['type'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['type']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['name'] = 'type';
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['articleTypes']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['type']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['type']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['type']['total']);
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['articleTypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['type']['index']];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['articleTypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['type']['index']],$_smarty_tpl->tpl_vars['info']->value['articleClipTypes'])) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['articleTypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['type']['index']]);?>
</option>
						<?php endfor; endif; ?>
					</select>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary btn-sm" name="save" value="Save">
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Create/Edit Newsletters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
