<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:39:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-view_tracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11980185935b67b4e60febd5-02191793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e957a4c9d6173afd62980cbc9277a0aca31fda87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-view_tracker.tpl',
      1 => 1505814998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11980185935b67b4e60febd5-02191793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trackerId' => 0,
    'tracker_info' => 0,
    'tiki_p_create_tracker_items' => 0,
    'prefs' => 0,
    'js' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_watch_trackers' => 0,
    'user' => 0,
    'user_watching_tracker' => 0,
    'tiki_p_admin_trackers' => 0,
    'tiki_p_export_tracker' => 0,
    'filterfield' => 0,
    'filtervalue' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'mail_msg' => 0,
    'tiki_p_view_trackers' => 0,
    'item_count' => 0,
    'show_filters' => 0,
    'cant_pages' => 0,
    'initial' => 0,
    'items' => 0,
    'listfields' => 0,
    'field_value' => 0,
    'status' => 0,
    'find' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tiki_p_tracker_view_comments' => 0,
    'tiki_p_tracker_view_attachments' => 0,
    'tiki_p_remove_tracker_items' => 0,
    'tiki_p_remove_tracker_items_pending' => 0,
    'tiki_p_remove_tracker_items_closed' => 0,
    'ustatus' => 0,
    'status_types' => 0,
    'tiki_p_modify_tracker_items' => 0,
    'tiki_p_modify_tracker_items_pending' => 0,
    'tiki_p_modify_tracker_items_closed' => 0,
    'itemoff' => 0,
    'ajaxedit' => 0,
    'urlquery' => 0,
    'urlval' => 0,
    'urlkey' => 0,
    'libeg' => 0,
    'liend' => 0,
    'maxRecords' => 0,
    'validationjs' => 0,
    'ins_fields' => 0,
    'tiki_p_attach_trackers' => 0,
    'groupforalert' => 0,
    'showeachuser' => 0,
    'listusertoalert' => 0,
    'tracker_sync' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b4e6302650_52065271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b4e6302650_52065271')) {function content_5b67b4e6302650_52065271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_wiki')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_trackeroutput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_date_format.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_trackerinput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerinput.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,'tracker'),'adm'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,'tracker'),'adm'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,'tracker'),'adm'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!empty($_smarty_tpl->tpl_vars['tracker_info']->value['description'])) {?>
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['descriptionIsParsed']=='y') {?>
		<div class="description help-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker_info']->value['description'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php } else { ?>
		<div class="description help-block"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_info']->value['description']));?>
</div>
	<?php }?>
<?php }?>
<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_tracker_items']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_legacy_insert']!='y') {?>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create Item
		</a>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('showitems'=>"n"), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
	<div class="btn-group pull-right">
		<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
		<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
			<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

		</a>
		<ul class="dropdown-menu dropdown-menu-right">
			<li class="dropdown-title">
				Tracker actions
			</li>
			<li class="divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
				<li>
					<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value,"url");?>
&amp;watch_event=tracker_modified&amp;objectType=tracker&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_info']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(('tiki-view_tracker.php?trackerId=').($_smarty_tpl->tpl_vars['trackerId']->value),"url");?>
">
						<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group Monitoring
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_watch_trackers']->value=='y'&&$_smarty_tpl->tpl_vars['user']->value) {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['user_watching_tracker']->value!='y') {?>
						<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;watch=add">
							<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor
						</a>
					<?php } else { ?>
						<a href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;watch=stop">
							<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop Watching
						</a>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=="y") {?>
				<li>
					<a href="tiki-tracker_rss.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
">
						<?php echo smarty_function_icon(array('name'=>"rss"),$_smarty_tpl);?>
 RSS
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=="y") {?>
				<li>
					<a class="import dialog" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'import_items','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
						<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
					</a>
				</li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$('.import.dialog').click(function () {
						var link = this;
						$(this).serviceDialog({
							title: 'Import',
							data: {
								controller: 'tracker',
								action: 'import_items',
								trackerId: <?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>

							}
						});
						return false;
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_export_tracker']->value=="y") {?>
				<li>
					<a class="export dialog" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'export','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'filterfield'=>$_smarty_tpl->tpl_vars['filterfield']->value,'filtervalue'=>$_smarty_tpl->tpl_vars['filtervalue']->value),$_smarty_tpl);?>
">
						<?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export
					</a>
				</li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$('.export.dialog').click(function () {
						var link = this;
						$(this).serviceDialog({
							title: 'Export',
							data: {
								controller: 'tracker',
								action: 'export',
								trackerId: <?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
,
								filterfield: '<?php echo $_smarty_tpl->tpl_vars['filterfield']->value;?>
',
								filtervalue: <?php echo json_encode($_smarty_tpl->tpl_vars['filtervalue']->value);?>

							}
						});
						return false;
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=="y") {?>
				<li>
					<?php echo smarty_function_permission_link(array('mode'=>'text','type'=>'tracker','id'=>$_smarty_tpl->tpl_vars['trackerId']->value,'permType'=>'trackers'),$_smarty_tpl);?>

				</li>
			<?php }?>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['category_watched']->value=='y') {?>
	<div class="categbar">
		Watched by categories:
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a>&nbsp;
		<?php endfor; endif; ?>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['mail_msg']->value)) {?>
	<div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['mail_msg']->value;?>
</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('tracker_error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_view_tracker','skipsingle'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_view_tracker','skipsingle'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y'||(($_smarty_tpl->tpl_vars['tracker_info']->value['writerCanModify']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['userCanSeeOwn']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['writerGroupCanModify']=='y')&&$_smarty_tpl->tpl_vars['user']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tracker Items")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tracker Items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Items <span class="badge" style="vertical-align: middle"><?php echo $_smarty_tpl->tpl_vars['item_count']->value;?>
</span></h2>
			

			<?php if ((($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']!='y')||$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')||$_smarty_tpl->tpl_vars['show_filters']->value=='y') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('tracker_filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['cant_pages']->value)&&$_smarty_tpl->tpl_vars['cant_pages']->value>1)||$_smarty_tpl->tpl_vars['initial']->value) {
echo smarty_function_initials_filter_links(array(),$_smarty_tpl);
}?>

			<?php if (count($_smarty_tpl->tpl_vars['items']->value)>='1') {?>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
					<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
				<?php }?>
				
				<form name="checkform" method="post">
					<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
						<table class="table table-striped table-hover">
							<tr>
								<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
									<th class="auto" style="width:20px;"></th>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
									<th width="15">
										<?php echo smarty_function_select_all(array('checkbox_names'=>'action[]'),$_smarty_tpl);?>

									</th>
								<?php }?>

								<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['field_value']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['field_value']->value['isTblVisible']=='y'&&($_smarty_tpl->tpl_vars['field_value']->value['type']!='x'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='h')&&($_smarty_tpl->tpl_vars['field_value']->value['type']!='p'||$_smarty_tpl->tpl_vars['field_value']->value['options_array'][0]!='password')) {?>
										<th class="auto">
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>('f_').($_smarty_tpl->tpl_vars['field_value']->value['fieldId']))); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>('f_').($_smarty_tpl->tpl_vars['field_value']->value['fieldId'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo (($tmp = @smarty_modifier_escape(smarty_modifier_truncate(tra($_smarty_tpl->tpl_vars['field_value']->value['name']),255,"...")))===null||$tmp==='' ? "&nbsp;" : $tmp);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>('f_').($_smarty_tpl->tpl_vars['field_value']->value['fieldId'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										</th>
									<?php }?>
								<?php } ?>

								<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreated']=='y') {?>
									<th><a href="tiki-view_tracker.php?<?php if ($_smarty_tpl->tpl_vars['status']->value) {?>status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&amp;<?php }
if ($_smarty_tpl->tpl_vars['initial']->value) {?>initial=<?php echo $_smarty_tpl->tpl_vars['initial']->value;?>
&amp;<?php }
if ((($tmp = @$_smarty_tpl->tpl_vars['find']->value)===null||$tmp==='' ? null : $tmp)) {?>find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;<?php }?>trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;
if ($_smarty_tpl->tpl_vars['offset']->value) {?>&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;
}?>&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Created</a></th>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModif']=='y') {?>
									<th><a href="tiki-view_tracker.php?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&amp;<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>initial=<?php echo $_smarty_tpl->tpl_vars['initial']->value;?>
&amp;<?php }?>find=<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
&amp;trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;
if ($_smarty_tpl->tpl_vars['offset']->value) {?>&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;
}?>&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='lastModif_desc') {?>lastModif_asc<?php } else { ?>lastModif_desc<?php }?>">Last modified</a></th>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y')&&$_smarty_tpl->tpl_vars['tiki_p_tracker_view_comments']->value!='n') {?>
									<th<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']!='y') {?> style="width:5%"<?php }?>>Comments</th>
								<?php }?>
								<?php if (($_smarty_tpl->tpl_vars['tiki_p_tracker_view_attachments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')&&$_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments']=='y') {?>
									<th style="width:5%">atts</th>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?><th style="width:5%">dls</th><?php }?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items_pending']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items_closed']->value=='y') {?>
									<th style="width:20px"></th>
								<?php }?>
							</tr>

							
							<?php $_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable(0, null, 0);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
										<td class="icon">
											<?php $_smarty_tpl->tpl_vars['ustatus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status'])===null||$tmp==='' ? "c" : $tmp), null, 0);?>
											<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['iconname'],'iclass'=>'tips','ititle'=>":".((string)$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['label'])),$_smarty_tpl);?>

										</td>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
										<td class="checkbox-cell">
											<input type="checkbox" name="action[]" value='<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
' style="border:1px;font-size:80%;">
										</td>
									<?php }?>

									
									<?php $_smarty_tpl->tpl_vars['ajaxedit'] = new Smarty_variable($_smarty_tpl->tpl_vars['prefs']->value['ajax_inline_edit_trackerlist']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_modify_tracker_items']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['tiki_p_modify_tracker_items_pending']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['tiki_p_modify_tracker_items_closed']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c'), null, 0);?>
									<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['field_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['field_value']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['field_value']->value['isTblVisible']=='y'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='x'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='h'&&($_smarty_tpl->tpl_vars['field_value']->value['type']!='p'||$_smarty_tpl->tpl_vars['field_value']->value['options_array'][0]!='password')) {?>
											<td class=<?php if ($_smarty_tpl->tpl_vars['field_value']->value['type']=='n'||$_smarty_tpl->tpl_vars['field_value']->value['type']=='q'||$_smarty_tpl->tpl_vars['field_value']->value['type']=='b') {?>"numeric"<?php } else { ?>"auto"<?php }?>>
												<?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['field_value']->value,'showlinks'=>'y','showpopup'=>"y",'item'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']],'list_mode'=>'y','inTable'=>'formcolor','reloff'=>$_smarty_tpl->tpl_vars['itemoff']->value,'editable'=>$_smarty_tpl->tpl_vars['ajaxedit']->value&&$_smarty_tpl->tpl_vars['listfields']->value[$_smarty_tpl->tpl_vars['field_value']->value['fieldId']]['editable'] ? 'block' : ''),$_smarty_tpl);?>

											</td>
										<?php }?>
									<?php } ?>

									<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreated']=='y') {?>
										<td class="date"><?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['created'],$_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['created']);
}?></td>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModif']=='y') {?>
										<td class="date"><?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastModif'],$_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifFormat']);
} else {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastModif']);
}?></td>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'||$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y')&&$_smarty_tpl->tpl_vars['tiki_p_tracker_view_comments']->value!='n') {?>
										<td style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y') {
echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comments'];
}
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showComments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y') {?><br><?php }
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastComment']=='y'&&!empty($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['lastComment'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastComment']['userName']);?>
-<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastComment']['commentDate']);
}?></td>
									<?php }?>
									<?php if (($_smarty_tpl->tpl_vars['tiki_p_tracker_view_attachments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')&&$_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tracker_info']->value['showAttachments']=='y') {?>
										<td class="icon"><a href="tiki-view_tracker_item.php?itemId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
&amp;show=att<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;
}
$_smarty_tpl->tpl_vars['urlval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urlval']->_loop = false;
 $_smarty_tpl->tpl_vars['urlkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['urlquery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['urlval']->key => $_smarty_tpl->tpl_vars['urlval']->value) {
$_smarty_tpl->tpl_vars['urlval']->_loop = true;
 $_smarty_tpl->tpl_vars['urlkey']->value = $_smarty_tpl->tpl_vars['urlval']->key;
if ($_smarty_tpl->tpl_vars['urlval']->value) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['urlkey']->value;?>
=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['urlval']->value,"url");
}
} ?>"
										link="List Attachments"><?php echo smarty_function_icon(array('name'=>"attach"),$_smarty_tpl);?>
</a> <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['attachments'];?>
</td>
										<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?><td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hits'];?>
</td><?php }?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'||($_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='p'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']!='c')||($_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items_pending']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='p')||($_smarty_tpl->tpl_vars['tiki_p_remove_tracker_items_closed']->value=='y'&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['status']=='c')) {?>
										<td class="action">
											<?php $_smarty_tpl->_capture_stack[0][] = array('view_tracker_actions', null, null); ob_start(); ?>
												<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_legacy_insert']!='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'update_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-view_tracker_item.php?itemId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
&amp;show=mod"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>"post",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View/Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_create_tracker_items']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_clone_item']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'clone_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Duplicate"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'remove_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId']),$_smarty_tpl);?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>"delete",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-tracker_view_history.php?itemId=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['itemId'];?>
"onclick="$('[data-toggle=popover]').popover('hide');"><?php echo smarty_function_icon(array('name'=>"history",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"History"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['view_tracker_actions']),$_smarty_tpl);
}?>
												style="padding:0; margin:0; border:0"
												onclick="return false;"
											>
												<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

											</a>
											<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
												<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['view_tracker_actions'];?>
</ul></li></ul>
											<?php }?>
										</td>
									<?php }?>
								</tr>
								<?php $_smarty_tpl->tpl_vars['itemoff'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemoff']->value+1, null, 0);?>
							<?php endfor; endif; ?>
						</table>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y') {?>
						<div class="form-group">
							<div class="input-group col-sm-6">
								<select name="batchaction" class="form-control">
									<option value="delete">Delete Selected</option>
									<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
										<option value="c">Close</option>
										<option value="o">Open</option>
										<option value="p">Pending</option>
									<?php }?>
								</select>
								<span class="input-group-btn">
									<input type="hidden" name="trackerId" value="<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
">
									<input type="submit" class="btn btn-primary" name="act" value="OK">
								</span>
							</div>
						</div>
					<?php }?>
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['item_count']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['item_count']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['item_count']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tracker Items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_tracker_items']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_legacy_insert']=='y') {?>
		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Insert New Item")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Insert New Item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Insert New Item</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['validationjs']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$("#newItemForm").validate({
						<?php echo $_smarty_tpl->tpl_vars['validationjs']->value;?>
,
						ignore: '.ignore',
						submitHandler: function(){return process_submit(this.currentForm);}
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<form enctype="multipart/form-data" action="tiki-view_tracker.php" id="newItemForm" method="post">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="form-horizontal">

					<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'&&($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']!='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-8">
								<?php echo $_smarty_tpl->getSubTemplate ('tracker_status_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tracker'=>$_smarty_tpl->tpl_vars['tracker_info']->value,'form_status'=>'status'), 0);?>

							</div>
						</div>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ins_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['field_value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['field_value']->value['type']!='x'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='l'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='q'&&($_smarty_tpl->tpl_vars['field_value']->value['type']!='A'||$_smarty_tpl->tpl_vars['tiki_p_attach_trackers']->value=='y')&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='N'&&$_smarty_tpl->tpl_vars['field_value']->value['type']!='*'&&!($_smarty_tpl->tpl_vars['field_value']->value['type']=='s'&&$_smarty_tpl->tpl_vars['field_value']->value['name']=='Rating')) {?>
							<div class="form-group">
								<label class="col-sm-3 control-label">
										<?php if ($_smarty_tpl->tpl_vars['field_value']->value['isMandatory']=='y') {?>
											<?php echo tra($_smarty_tpl->tpl_vars['field_value']->value['name']);?>
 <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
										<?php } else { ?>
											<?php echo tra($_smarty_tpl->tpl_vars['field_value']->value['name']);?>

										<?php }?>
								</label>
								<div class="col-sm-8">
									<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['field_value']->value,'inTable'=>'formcolor','showDescription'=>'y'),$_smarty_tpl);?>

								</div>
							</div>
						<?php }?>
					<?php } ?>

					
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
						<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tr_style'=>"formcolor",'showmandatory'=>'y'), 0);?>

					<?php }?>

					<?php if (!isset($_smarty_tpl->tpl_vars['groupforalert']->value)||$_smarty_tpl->tpl_vars['groupforalert']->value!='') {?>
						<div class="form-group">
							<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y') {?>

								<label class="col-sm-3 control-label">Choose users to alert</label>

							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
								<div class="col-sm-8 checkbox-inline">
									<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='n') {?>
										<input type="hidden" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
">
									<?php } else { ?>
										<input type="checkbox" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
"> <?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>

									<?php }?>
								</div>
							<?php endfor; endif; ?>

						</div>
					<?php }?>

					<div class="form-group">
						<label class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-8 checkbox-inline">
						<input type="submit" class="btn btn-default btn-sm" name="save" value="Save" onclick="needToConfirm = false;">
						<input type="radio" name="viewitem" value="view" /> View inserted item
						
						<input type="radio" name="viewitem" value="new" checked="checked"> Insert new item
						</div>
					</div>
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Insert New Item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tracker_sync']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Synchronization")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Synchronization"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Synchronization</h2>
			<p>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(($_smarty_tpl->tpl_vars['tracker_sync']->value['provider']).('/tracker')).($_smarty_tpl->tpl_vars['tracker_sync']->value['source']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(($_smarty_tpl->tpl_vars['tracker_sync']->value['provider']).('/tracker')).($_smarty_tpl->tpl_vars['tracker_sync']->value['source'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This tracker is a remote copy of <a href="%0">%0</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(($_smarty_tpl->tpl_vars['tracker_sync']->value['provider']).('/tracker')).($_smarty_tpl->tpl_vars['tracker_sync']->value['source'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['tracker_sync']->value['last']) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker_sync']->value['last']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker_sync']->value['last'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
It was last updated on %0.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['tracker_sync']->value['last'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</p>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'tiki_p_admin_trackers')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'tiki_p_admin_trackers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<form class="sync-refresh" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'sync_meta','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
					<p><input type="submit" class="btn btn-default btn-sm" value="Reload field definitions"></p>
				</form>
				<form class="sync-refresh" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'sync_new','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
					<p>Items added locally</p>
					<ul class="load-items items">
					</ul>
					<p><input type="submit" class="btn btn-default btn-sm" value="Push new items"></p>
				</form>
				<form class="sync-refresh" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'sync_edit','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
					<div class="item-block">
						<p>Safe modifications (no remote conflict)</p>
						<ul class="load-items automatic">
						</ul>
					</div>
					<div class="item-block">
						<p>Dangerous modifications (remote conflict)</p>
						<ul class="load-items manual">
						</ul>
					</div>
					<p>On push, local items will be removed until data reload.</p>
					<p><input type="submit" class="btn btn-default btn-sm" value="Push local changes"></p>
				</form>
				<form class="sync-refresh" method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker_sync','action'=>'sync_refresh','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
					<?php if ($_smarty_tpl->tpl_vars['tracker_sync']->value['modified']) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Local changes will be lost")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Local changes will be lost"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<p>When reloading the data from the source, all local changes will be lost.</p>
							<ul>
								<li>New items that must be preserved should be pushed using the above controls.</li>
								<li>
									Modifications that must be preserved should be replicated.
									<ul>
										<li>Without conflicts: Using the above controls</li>
										<li>With conflicts: Manually on the source. <em>Using the above controls will cause information loss.</em></li>
									</ul>
								</li>
							</ul>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Local changes will be lost"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<div class="submit">
						<input type="hidden" name="confirm" value="1">
						<input type="submit" class="btn btn-default btn-sm" name="submit" value="Reload data from source">
					</div>
				</form>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$('.sync-refresh').submit(function () {
						var form = this;
						$.ajax({
							type: 'post',
							url: $(form).attr('action'),
							dataType: 'json',
							data: $(form).serialize(),
							error: function (jqxhr) {
								$(':submit', form).showError(jqxhr);
							},
							success: function () {
								document.location.reload();
							}
						});
						return false;
					});
					$('.load-items').closest('form').each(function () {
						var form = this;
						$(form).hide();
						$.getJSON($(this).attr('action'), function (data) {
							$.each(data.sets, function (k, name) {
								var list = $(form).find('.load-items.' + name)[0];

								$.each(data[name], function (k, info) {
									var li = $('<li/>');
									li.append($('<label/>')
										.text(info.title)
										.prepend($('<input type="checkbox" name="' + name + '[]">').attr('value', info.itemId))
									);

									$.each({localUrl: "Local", remoteUrl: "Remote"}, function (key, label) {
										if (info[key]) {
											li
												.append(' ')
												.append($('<a/>')
													.attr('href', info[key])
													.text(label));
										}
									});

									$(list).append(li);
								});

								if (data[name].length === 0) {
									$(list).closest('.item-block').hide();
								} else {
									$(form).show();
								}
							});
						});
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'tiki_p_admin_trackers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Synchronization"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_view_tracker','skipsingle'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
