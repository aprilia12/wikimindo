<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:24:39
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admingroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10396313835b63bce78f7438-66982226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234dca84c4f736d35f7b734563c219fe7ad4919d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admingroups.tpl',
      1 => 1504528334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10396313835b63bce78f7438-66982226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ts' => 0,
    'groupname' => 0,
    'prefs' => 0,
    'tiki_p_invite' => 0,
    'cant_pages' => 0,
    'maxRecords' => 0,
    'initial' => 0,
    'find' => 0,
    'js' => 0,
    'users' => 0,
    'href' => 0,
    'onclick' => 0,
    'incl' => 0,
    'libeg' => 0,
    'liend' => 0,
    'offset' => 0,
    'tabaddeditgroup_admgrp' => 0,
    'gname' => 0,
    'user' => 0,
    'group_info' => 0,
    'groupdesc' => 0,
    'inc' => 0,
    'hasOneIncludedGroup' => 0,
    'yn' => 0,
    'gr' => 0,
    'indirectly_inherited_groups' => 0,
    'grouphome' => 0,
    'groupdefcat' => 0,
    'categories' => 0,
    'id' => 0,
    'category' => 0,
    'grouptheme' => 0,
    'group_themes' => 0,
    'theme' => 0,
    'theme_name' => 0,
    'groupcolor' => 0,
    'trackers' => 0,
    'tid' => 0,
    'grouptrackerid' => 0,
    'tit' => 0,
    'groupFields' => 0,
    'groupfieldid' => 0,
    'userstrackerid' => 0,
    'usersFields' => 0,
    'usersfieldid' => 0,
    'registrationUsersFieldIds' => 0,
    'userChoice' => 0,
    'group' => 0,
    'groupitemid' => 0,
    'membersCount' => 0,
    'memberslist' => 0,
    'member' => 0,
    'membersOffset' => 0,
    'userslist' => 0,
    'iuser' => 0,
    'bannedCount' => 0,
    'bannedlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bce7aa4f98_42642937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bce7aa4f98_42642937')) {function content_5b63bce7aa4f98_42642937($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_autocomplete')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Groups Management",'admpage'=>"login")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-default",'_type'=>"link",'_icon_name'=>"user",'_text'=>"Admin Users"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?clean=y",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"trash",'_text'=>"Clear cache"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2#tab2",'class'=>"btn btn-default",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2",'class'=>"btn btn-default",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Permissions"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_invite']->value=='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'class'=>"btn btn-default",'_type'=>"link",'_icon_name'=>"thumbs-up",'_text'=>"Invitation List"),$_smarty_tpl);?>

		<?php }?>
	</div>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admingroups')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"List")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"List"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
		<h2>List of existing groups</h2>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y'), 0);?>

			<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>$_smarty_tpl->tpl_vars['maxRecords']->value||!empty($_smarty_tpl->tpl_vars['initial']->value)||!empty($_smarty_tpl->tpl_vars['find']->value)) {?>
				<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<form id="checkform1" method="post">
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive <?php }?>ts-wrapperdiv"> 
	<?php }?>
				<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant_pages']->value);?>
">
						<thead>
							<tr>
								<th id="checkbox" style="width: 20px;"><?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>
</th>
								<th id="id"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'id')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
								<th id="group"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
								<th id="inherits">Inherits Permissions from</th>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
									<th id="home"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Homepage<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
								<?php }?>
								<th id="choice"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Choice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
								<th id="actions"></th>
							</tr>
						</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<?php if ($_smarty_tpl->tpl_vars['groupname']->value==$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']) {?>
								<?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable('#', null, 0);?>
								<?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("onclick='showTab(2); return false;'", null, 0);?>
							<?php } else { ?>
								<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],'url');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("tiki-admingroups.php?group=".$_tmp1, null, 0);?>
								<?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable('', null, 0);?>
							<?php }?>
							<tr>
								<td class="checkbox-cell">
									<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered') {?>
										<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
">
									<?php }?>
								</td>
								<td class="id"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id']);?>
</td>
								<td class="text">
									<a class="link tips" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
 title="Edit group:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
">
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>

									</a>
									<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupDesc']));
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
								</td>
								<td class="text">
									<?php  $_smarty_tpl->tpl_vars['incl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incl']->key => $_smarty_tpl->tpl_vars['incl']->value) {
$_smarty_tpl->tpl_vars['incl']->_loop = true;
?>
										<div>
											<?php if (in_array($_smarty_tpl->tpl_vars['incl']->value,$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included_direct'])) {?>
												<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['incl']->value);?>

											<?php } else { ?>
												<i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['incl']->value);?>
</i>
											<?php }?>
										</div>
									<?php } ?>
								</td>

								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
									<td class="text">
										<a class="link" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome'],"url");?>
" title="Group Homepage"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									</td>
								<?php }?>

								<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userChoice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
								<td class="action">
									<?php $_smarty_tpl->_capture_stack[0][] = array('group_actions', null, null); ob_start(); ?>
										<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admingroups.php?group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],"url");
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#tab2<?php }?>"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','group'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],'count'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['permcant']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'remove_groups','checked'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['group_actions']),$_smarty_tpl);
}?>
													style="padding:0; margin:0; border:0"
											>
												<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

											</a>
											<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
											<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['group_actions'];?>
</ul></li></ul>
									<?php }?>
								</td>
							</tr>
						<?php endfor; endif; ?>
					</tbody>
				</table>
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
			</div>
				<div class="input-group col-sm-6">
					<label for="submit_mult" class="control-label sr-only">Select action to perform with checked</label>
						<select name="action" class="form-control">
							<option value="no_action" selected="selected">Select action to perform with checked...</option>
							<option value="remove_groups" >Remove</option>
						</select>
					<div class="input-group-btn">
						<button
							type="submit"
							form="checkform1"
							formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group'),$_smarty_tpl);?>
"
							class="btn btn-primary confirm-submit"
						>
							OK
						</button>
					</div>
				</div>
		</form>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"List"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp'] = new Smarty_variable("Edit", null, 0);?>
		<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['gname'] = new Smarty_variable("<i>".$_tmp2."</i>", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp'] = new Smarty_variable("Create group", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['gname'] = new Smarty_variable('', null, 0);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value))); $_block_repeat=true; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&!empty($_smarty_tpl->tpl_vars['groupname']->value)) {?>
			<div class="pull-right">
				<?php if (!$_smarty_tpl->tpl_vars['group_info']->value['isWatching']) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring.")); $_block_repeat=true; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo smarty_function_icon(array('name'=>'watch','alt'=>"Group is NOT being monitored. Click icon to START monitoring."),$_smarty_tpl);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring.")); $_block_repeat=true; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo smarty_function_icon(array('name'=>'stop-watching','alt'=>"Group IS being monitored. Click icon to STOP monitoring."),$_smarty_tpl);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</div>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value;?>
</h2>

		<form class="form-horizontal" action="tiki-admingroups.php" id="groupEdit" method="post">
			<div class="form-group">
				<label for="groups_group" class="control-label col-md-3">Group</label>
				<div class="col-md-9">
					<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins') {?>
						<input type="text" name="name" id="groups_group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
" class="form-control">
					<?php } else { ?>
						<input type="hidden" name="name" id="groups_group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>

					<?php }?>
				</div>
			</div>
			<div class="form-group">
				<label for="groups_desc" class="control-label col-md-3">Description</label>
				<div class="col-md-9">
					<textarea rows="5" name="desc" id="groups_desc" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupdesc']->value);?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="groups_inc" class="control-label col-md-3">Inheritance</label>
				<div class="col-md-9">
					<?php if (count($_smarty_tpl->tpl_vars['inc']->value)>20&&$_smarty_tpl->tpl_vars['hasOneIncludedGroup']->value=="y") {?>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['yn']->value=='y') {?>
									<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
</li>
								<?php }?>
							<?php } ?>
						</ul>
					<?php }?>
					<select name="include_groups[]" id="groups_inc" multiple="multiple" size="8" class="form-control">
						<?php if (!empty($_smarty_tpl->tpl_vars['groupname']->value)) {?><option value="">None</option><?php }?>
						<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['yn']->value=='y') {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value,"52"));?>
</option>
						<?php } ?>
					</select>
					<div class="help-block">
						<p>Permissions will be inherited from these groups. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?>Use Ctrl+Click to select multiple options</p><?php }?>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value)>0) {?>
						<p>Indirectly included groups:</p>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
?>
								<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
</li>
							<?php } ?>
						</ul>
					<?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
				<div class="form-group">
					<label for="groups_home" class="control-label col-md-3">Group Home</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="home" id="groups_home" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grouphome']->value);?>
">
						<?php echo smarty_function_autocomplete(array('element'=>'#groups_home','type'=>'pagename'),$_smarty_tpl);?>

						<div class="help-block">
							Use wiki page name or full URL.
							For other Tiki features, use links relative to the Tiki root (such as <em>/tiki-forums.php</em>).
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
				<div class="form-group">
					<label for="groups_defcat" class="control-label col-md-3">Default Category</label>
					<div class="col-md-9">
						<select name="defcat" id="groups_defcat" class="form-control">
							<option value="" <?php if (($_smarty_tpl->tpl_vars['groupdefcat']->value=='')||($_smarty_tpl->tpl_vars['groupdefcat']->value==0)) {?> selected="selected"<?php }?>>none</option>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['groupdefcat']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value['categpath']);?>
</option>
							<?php } ?>
						</select>
						<div class="help-block">
							Default category assigned to uncategorized objects edited by a user with this default group.
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme']=='y') {?>
				<div class="form-group">
					<label for="groups_theme" class="control-label col-md-3">Group theme</label>
					<div class="col-md-9">
						<select name="theme" id="groups_theme" class="form-control">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value=='') {?> selected="selected"<?php }?>>none (Use site default)</option>
							<?php  $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme_name']->_loop = false;
 $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->key => $_smarty_tpl->tpl_vars['theme_name']->value) {
$_smarty_tpl->tpl_vars['theme_name']->_loop = true;
 $_smarty_tpl->tpl_vars['theme']->value = $_smarty_tpl->tpl_vars['theme_name']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theme']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value==$_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_conditional_formatting']=='y') {?>
				<div class="form-group">
					<label for="groups_color" class="control-label col-md-3">Group color</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="color" id="groups_color" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupcolor']->value);?>
">
						<div class="help-block">
							Default color to use when plotting values for this group in charts. Use HEX notation, e.g. #FF0000 for red color.
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y') {?>
				<div class="form-group">
					<label for="groupstracker" class="control-label col-md-3">Group Information Tracker</label>
					<div class="col-md-9">
						<select name="groupstracker" id="groupstracker" class="form-control">
							<option value="0">choose a group tracker ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['grouptrackerid']->value)&&$_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['grouptrackerid']->value) {?> <?php $_smarty_tpl->tpl_vars["ggr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tit']->value);?>
</option>
							<?php } ?>
						</select>
						<div class="help-block">
							Choose a group tracker which can be used to add user registration fields or allow group permissions on a tracker. The tracker must have one user selector field that is set to auto-assign.
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['grouptrackerid']->value)||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
						<div id="groupfielddiv"<?php if (empty($_smarty_tpl->tpl_vars['grouptrackerid']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?> style="display: none;"<?php }?>>
							<select name="groupfield" class="form-control">
								<option value="0">choose a field ...</option>
								<?php if (isset($_smarty_tpl->tpl_vars['groupFields']->value)) {?>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groupFields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo $_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['groupfieldid']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
									<?php endfor; endif; ?>
								<?php }?>
							</select>
							<div class="help-block">
								Select the user selector field from the above tracker.
							</div>
						</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['grouptrackerid']->value)) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Go to trackers list"),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y') {?>
				<div class="form-group">
					<label for="userstracker" class="control-label col-md-3">User Registration Tracker</label>
					<div class="col-md-9">
						<select name="userstracker" id="userstracker" class="form-control">
							<option value="0">choose a user tracker ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['userstrackerid']->value)&&$_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['userstrackerid']->value) {?> <?php $_smarty_tpl->tpl_vars["ugr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tit']->value);?>
</option>
							<?php } ?>
						</select>
						<div class="help-block">
							Choose a user tracker to provide fields for a new user to complete upon registration. The tracker must have one user selector field that is set to auto-assign.
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['userstrackerid']->value)||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y')) {?>
							<div id="usersfielddiv"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?> style="display: none;"<?php }?>>
								<label>Select user field</label>
								<select name="usersfield" class="form-control">
									<?php if (!empty($_smarty_tpl->tpl_vars['usersFields']->value)) {?>
										<option value="0">Choose a field ...</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usersFields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['usersfieldid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
 - <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
										<?php endfor; endif; ?>
									<?php } else { ?>
										<option value="0">No fields in tracker ...</option>
									<?php }?>
								</select>
								<div class="help-block">
									Select the user selector field from the above tracker to link a tracker item to the user upon registration.
								</div>
							</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("#userstracker, #groupstracker").change(function () {
		var $element = this.id,
			$fields = $element == 'userstracker' ? $('select[name=usersfield]') : $('select[name=groupfield]'),
			$showid = $element == 'userstracker' ? '#usersfielddiv' : '#groupfielddiv';
		if ($(this).val() > 0) {
			$.getJSON($.service('tracker', 'list_fields'), {trackerId: $(this).val()}, function (data) {
				if (data && data.fields) {
					if (data.fields.length > 0) {
						$fields.empty().append('<option value="0">choose a field ...</option>');
						var sel = '';
						$(data.fields).each(function () {
							if (this.type === 'u' && this.options_array[0] == 1) {
								sel = ' selected="selected"';
							} else {
								sel = '';
							}
							$fields.append('<option value="' + this.fieldId + '"' + sel + '>' + this.fieldId + ' - ' + this.name + '</option>');
						});
					} else {
						$fields.empty().append('<option value="0">No fields in this tracker</option>');
					}
					$($showid).show();
					$('#registerfields').show();
					if (jqueryTiki.chosen) {
						$fields.trigger("chosen:updated");
					}
				}
			});
		} else {
			$fields.empty();
			$($showid).hide();
		}
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['userstrackerid']->value)) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['userstrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Go to tracker list"),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user']=='y'&&$_smarty_tpl->tpl_vars['groupname']->value=='Registered') {?>
					<div class="form-group">
						<label class="control-label col-md-3">User Wizard Fields</label>
						<div class="col-md-9">
							By default, the same fields as in registration are used. <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-admin.php?page=login")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can choose in the <a href="%0">Login admin panel</a> to show different fields in User Wizard than the ones asked at Registration Time<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</td>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme']=='y') {?>
				<div id="registerfields" class="form-group"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value)&&empty($_smarty_tpl->tpl_vars['grouptrackerid']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?> style="display: none;"<?php }?>>
					<label for="registrationUserFieldIds" class="control-label col-md-3">Group or User Tracker Registration Fields</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="registrationUsersFieldIds" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['registrationUsersFieldIds']->value);?>
">
						<div class="help-block">
							<p>If either a group information tracker or user registration tracker has been selected above, enter colon-separated field ID numbers for the tracker fields in the above tracker to include on the registration form for a new user to complete.</p>
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins') {?>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="userChoice"<?php if ($_smarty_tpl->tpl_vars['userChoice']->value=='y') {?> checked="checked"<?php }?>>
								User can assign himself or herself to the group
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">Membership expiry</label>
					<div class="col-md-9">
						<label>Anniversary</label>
						<input type="text" name="anniversary" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['anniversary']);?>
">
						<div class="help-block">Use MMDD to specify an annual date as of which all users will be unassigned from the group, or DD to specify a monthly date.</div>
						<label>Or</label><br>
						<label>Number of Days</label>
						<input type="text" class="form-control" name="expireAfter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['expireAfter']);?>
">
						<div class="help-block">
							Number of days after which all users will be unassigned from the group.
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="prorateInterval" class="control-label col-md-3">Pro-Rate Membership</label>
					<div class="col-md-9">
						<select name="prorateInterval" class="form-control">
							<option value="day" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='day') {?>selected="selected"<?php }?>>Day</option>
							<option value="month" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='month') {?>selected="selected"<?php }?>>Month</option>
							<option value="year" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='year') {?>selected="selected"<?php }?>>Year</option>
						</select>
						<div class="help-block">
							Payment for membership extension is prorated at a minimum interval.
						</div>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<label class="control-label col-md-3">Group</label>
				<div class="col-md-9">
					<input class="form-control" type="text" size="40" name="emailPattern" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['emailPattern']);?>
">
					<div class="help-block">
						<p>Users are automatically assigned at registration in the group if their emails match the pattern.</p>
						<p>Example: /@(tw.org$)|(tw\.com$)/</p>
					</div>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['group']->value!=''&&$_smarty_tpl->tpl_vars['groupname']->value!='Anonymous') {?>
				<div class="form-group">
					<label class="control-label col-md-3">Assign group <em>management</em> permissions</label>
					<div class="col-md-9">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('_text'=>"Assign Permissions",'name'=>"key"),$_smarty_tpl);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
			<?php }?>

			<div class="submit form-group">
				<div class="col-md-9 col-md-offset-3">
					<?php if ($_smarty_tpl->tpl_vars['group']->value!='') {?>
						<input type="hidden" name="olgroup" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
">
						<button type="submit" class="btn btn-primary confirm-submit" form="groupEdit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'modify_group'),$_smarty_tpl);?>
">
							Save
						</button>
					<?php } else { ?>
						<button type="submit" class="btn btn-primary confirm-submit" form="groupEdit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'new_group'),$_smarty_tpl);?>
">
							Add
						</button>
					<?php }?>
				</div>
			</div>
			<br><br>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y') {?>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<?php if (!empty($_smarty_tpl->tpl_vars['grouptrackerid']->value)&&$_smarty_tpl->tpl_vars['groupitemid']->value) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Group tracker item : <?php echo $_smarty_tpl->tpl_vars['groupitemid']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php echo smarty_function_button(array('href'=>"tiki-view_tracker_item.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value)."&amp;itemId=".((string)$_smarty_tpl->tpl_vars['groupitemid']->value)."&amp;show=mod",'_text'=>"Edit Item"),$_smarty_tpl);?>

					<?php } elseif (!empty($_smarty_tpl->tpl_vars['grouptrackerid']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['groupfieldid']->value) {?>
							Group tracker item not found
							<?php echo smarty_function_button(array('href'=>"tiki-view_tracker.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Create Item"),$_smarty_tpl);?>

						<?php } else { ?>
							Choose a field ...
						<?php }?>
					<?php }?>
					<br><br>
				</div>
			</div>
			<?php }?>
		</form>
	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);
$_tmp3=ob_get_clean();?><?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<i>".$_tmp3."</i>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<i>".$_tmp3."</i>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "%0 members";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<i>".$_tmp3."</i>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_tmp4)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_tmp4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		<?php if ($_smarty_tpl->tpl_vars['membersCount']->value>0) {?>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
				<div class="form-group">
					<div class="col-sm-7">
						<h2>Members <span class="badge"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
</span></h2>
						<form id="checkform2" method="post">
							<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
">
							<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive <?php }?>ts-wrapperdiv">
		<?php }?>
								<table id="groupsMembers" class="table normal table-striped table-hover" data-count="<?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
">
									<thead>
										<tr>
											<th id="checkbox" class="auto"><?php if ($_smarty_tpl->tpl_vars['memberslist']->value) {
echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);
}?></th>
											<th id="user"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
											<th id="assigned"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
											<th id="expires"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expires<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
											<th id="actions"></th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
											<tr>
												<td class="checkbox-cell"><input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['login'];?>
"></td>
												<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value['login']);?>
</td>
												<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['created'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['created']);
}?></td>
												<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['expire'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['expire']);
}?></td>
												<td class="action">
													<?php $_smarty_tpl->_capture_stack[0][] = array('members_actions', null, null); ob_start(); ?>
														<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-adminusers.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value['userId'],"url");
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#tab2<?php }?>"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit user"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['member']->value['login'],'groupremove'=>$_smarty_tpl->tpl_vars['groupname']->value,'anchor'=>'#contenttabs_admingroups-3'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove from group"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
													<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
													<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
															<a
																	class="tips"
																	title="Actions" href="#"
																	<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['members_actions']),$_smarty_tpl);
}?>
																	style="padding:0; margin:0; border:0"
															>
																<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

															</a>
															<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
															<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['user_actions'];?>
</ul></li></ul>
													<?php }?>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
							</div>

							<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered') {?>
								<div class="input-group">
									<select class="form-control" name="action">
										<option value="no_action" selected="selected">
											Select action to perform with checked...
										</option>
										<option value="manage_groups">Unassign</option>
									</select>
									<span class="input-group-btn">
										<input type="submit" class="btn btn-default confirm-submit" form="checkform2" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','groupremove'=>((string)$_smarty_tpl->tpl_vars['groupname']->value),'anchor'=>'#contenttabs_admingroups-3'),$_smarty_tpl);?>
 "value="OK">
									</span>
								</div>
							<?php }?>
						</form>
					</div>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset')); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
		<?php }?>
			<?php } else { ?>
				<div class="col-sm-7">
					<h2>Members <span class="badge"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
</span></h2>
					<em>No members</em>
				</div>
			<?php }?>
			<div class="form-group">
				<div class="col-sm-5">
					<form id="addorban" method="post" action="tiki-admingroups.php">
						<h2>Add or ban users</h2>
						<div class="col-sm-8" style="display:block">
							<select name="user[]" multiple="multiple" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['iuser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iuser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iuser']->key => $_smarty_tpl->tpl_vars['iuser']->value) {
$_smarty_tpl->tpl_vars['iuser']->_loop = true;
?>
									<option><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iuser']->value);?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-8">
							<button type="submit" class="btn btn-link confirm-submit tips" form="addorban" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'add_user'),$_smarty_tpl);?>
" title=":Add to group"><?php echo smarty_function_icon(array('name'=>'add','size'=>2),$_smarty_tpl);?>
</button>
							<button type="submit" class="btn btn-link confirm-submit tips" form="addorban" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'ban_user'),$_smarty_tpl);?>
" title=":Ban from group"><?php echo smarty_function_icon(array('name'=>'ban','iclass'=>"alert-danger",'size'=>2),$_smarty_tpl);?>
</button>
						</div>
						<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">
						<input type="hidden" name="anchor" value="#contenttabs_admingroups-3">
					</form>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_tmp4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);
$_tmp5=ob_get_clean();?><?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<i>".$_tmp5."</i>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<i>".$_tmp5."</i>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Users banned from %0";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<i>".$_tmp5."</i>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp6=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_tmp6)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_tmp6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			
			<h2>Banned members <span class="badge"><?php echo $_smarty_tpl->tpl_vars['bannedCount']->value;?>
</span></h2>
			<?php if (count($_smarty_tpl->tpl_vars['bannedlist']->value)>0) {?>
				<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive <?php }?>ts-wrapperdiv"> 
					<form id="checkform3" method="post">
						<table id="bannedMembers" class="table normal table-striped table-hover" data-count="<?php echo $_smarty_tpl->tpl_vars['bannedCount']->value;?>
">
							<thead>
								<tr>
									<th id="checkbox" class="auto"><?php echo smarty_function_select_all(array('checkbox_names'=>'user[]'),$_smarty_tpl);?>
</th>
									<th id="user">User</th>
									<th id="unban">Unban user</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannedlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
									<tr>
										<td class="checkbox-cell"><input type="checkbox" name="user[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value;?>
"></td>
										<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value);?>
</td>
										<td class="action">
											<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'unban_user','user'=>$_smarty_tpl->tpl_vars['member']->value,'group'=>$_smarty_tpl->tpl_vars['groupname']->value),$_smarty_tpl);?>
" class="tips" title=":<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unban user %0 from group %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
												<?php echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);?>

											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<input type="hidden" name="group" value="<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
">
						<input type="hidden" name="anchor" value="#contenttabs_admingroups-4">
				</div>
			<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
				<div class="input-group col-sm-6">
					<select class="form-control" name="action">
						<option value="no_action" selected="selected">
							Select action to perform with checked...
						</option>
						<option value="unban_user">Unban</option>
					</select>
					<span class="input-group-btn">
						<input type="submit" class="btn btn-primary btn-sm confirm-submit" form="checkform3" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group'),$_smarty_tpl);?>
 "value="OK">
					</span>
				</div>
					</form><br>
			<?php }?>
		<?php } else { ?>
			<div class="col-sm-12">
				<em>No banned members</em>
			</div><br>
		<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_tmp6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);
$_tmp7=ob_get_clean();?><?php ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<i>".$_tmp7."</i>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<i>".$_tmp7."</i>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "%0 import/export";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<i>".$_tmp7."</i>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_tmp8=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_tmp8)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_tmp8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
			
			<form method="post" action="tiki-admingroups.php" enctype="multipart/form-data" class="form-horizontal">
				<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">

				<h2>Export group users (CSV file)</h2>
				<br>
				<div class="form-group">
					<label class="col-sm-3 control-label">Charset encoding</label>
					<div class="col-sm-7">
						<select name="encoding" class="form-control">
							<option value="UTF-8" selected="selected">UTF-8</option>
							<option value="ISO-8859-1">ISO-8859-1</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fields</label>
					<div class="col-sm-7">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="username" checked="checked"> Username
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="email"> Email
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="lastLogin"> Last login
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-7">
						<input type="submit" class="btn btn-default" name="export" value="Export">
					</div>
				</div>
				<br>
				<h2>Import users to group (CSV file)</h2>
				<br>
				<div class="form-group">
					<label class="col-sm-3 control-label">
						CSV File <a title="Help" <?php echo smarty_function_popup(array('text'=>'user<br>user1<br>user2'),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</label>
					<div class="col-sm-7">
						<input name="csvlist" type="file" class="form-control">
						<div class="help-block">
							Imported users must already exist. To create users and assign them to groups, go to <a href="tiki-adminusers.php">admin->users</a>.
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"></label>
					<div class="col-sm-7">
						<input type="submit" class="btn btn-default" name="import" value="Import">
					</div>
				</div>
			</form>
		<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_tmp8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
