<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 05:06:28
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-view_tracker_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12785735675b67bb34c21e61-14026434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562cf0734c77ba65dc28e45755167d4c5ae10626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-view_tracker_item.tpl',
      1 => 1519869866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12785735675b67bb34c21e61-14026434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewItemPretty' => 0,
    'tracker_item_main_value' => 0,
    'print_page' => 0,
    'prefs' => 0,
    'js' => 0,
    'pdf_export' => 0,
    'item_info' => 0,
    'itemId' => 0,
    'canRemove' => 0,
    'tiki_p_watch_trackers' => 0,
    'user_watching_tracker' => 0,
    'trackerId' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'tracker_info' => 0,
    'canModify' => 0,
    'from' => 0,
    'referer' => 0,
    'user' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'canView' => 0,
    'cant' => 0,
    'offset' => 0,
    'tracker_is_multilingual' => 0,
    'fields' => 0,
    'tiki_p_tracker_view_comments' => 0,
    'tiki_p_comment_tracker_items' => 0,
    'canViewCommentsAsItemOwner' => 0,
    'comCount' => 0,
    'tiki_p_tracker_view_attachments' => 0,
    'attCount' => 0,
    'editTitle' => 0,
    'tiki_p_admin_trackers' => 0,
    'trackers' => 0,
    'tracker' => 0,
    'formAction' => 0,
    'special' => 0,
    'editItemPretty' => 0,
    'ins_fields' => 0,
    'cur_field' => 0,
    'groupforalert' => 0,
    'listusertoalert' => 0,
    'showeachuser' => 0,
    'valvar' => 0,
    'info' => 0,
    'trkact' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67bb34e73af5_56508823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67bb34e73af5_56508823')) {function content_5b67bb34e73af5_56508823($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_monitor_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.monitor_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_trackerfields')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerfields.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_trackerinput')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.trackerinput.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['viewItemPretty']->value['override']) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"trackers")); $_block_repeat=true; echo smarty_block_title(array('help'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tracker_item_main_value']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if (!isset($_smarty_tpl->tpl_vars['print_page']->value)||$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>

	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
	<div class="t_navbar margin-bottom-md">
		<div class="pull-right btn-group">
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?><ul class="cssmenu_horiz"><li><?php }?>
			<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
				<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li class="dropdown-title">
					Tracker item actions
				</li>
				<li class="divider"></li>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['viewItemPretty']->value['override']) {?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['viewItemPretty']->value['value'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('print'=>'y','vi_tpl'=>$_tmp1)); $_block_repeat=true; echo smarty_block_self_link(array('print'=>'y','vi_tpl'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('print'=>'y','vi_tpl'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('print'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('print'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('name'=>"print"),$_smarty_tpl);?>
 Print
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('print'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</li>
                <li>
					<?php if ($_smarty_tpl->tpl_vars['pdf_export']->value=='y') {?>
						<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('pdf'=>'y'),$_smarty_tpl);?>
">
							<?php echo smarty_function_icon(array('name'=>"pdf"),$_smarty_tpl);?>
 PDF
						</a>
					<?php }?>
				</li>
                
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['item_info']->value['logs']['cant'])===null||$tmp==='' ? null : $tmp)) {?>
					<li>
						<a href="tiki-tracker_view_history.php?itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
">
							<?php echo smarty_function_icon(array('name'=>"history"),$_smarty_tpl);?>
 History
						</a>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canRemove']->value) {?>
					<li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('remove'=>$_smarty_tpl->tpl_vars['itemId']->value)); $_block_repeat=true; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['itemId']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('name'=>"delete"),$_smarty_tpl);?>
 Delete
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['itemId']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</li>
				<?php }?>
				<li>
					<?php echo smarty_function_monitor_link(array('type'=>'trackeritem','object'=>$_smarty_tpl->tpl_vars['itemId']->value,'linktext'=>"Notification",'class'=>"link",'title'=>''),$_smarty_tpl);?>

				</li>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_watch_trackers']->value=='y') {?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['user_watching_tracker']->value!='y') {?>
							<a href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
&amp;watch=add">
								<?php echo smarty_function_icon(array('name'=>"watch"),$_smarty_tpl);?>
 Monitor
							</a>
						<?php } else { ?>
							<a href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
&amp;watch=stop">
								<?php echo smarty_function_icon(array('name'=>"stop-watching"),$_smarty_tpl);?>
 Stop monitoring
							</a>
						<?php }?>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
						<li>
							<a href="tiki-object_watches.php?objectId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['itemId']->value,"url");?>
&amp;watch_event=tracker_item_modified&amp;objectType=tracker+<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker_info']->value['name'],"url");?>
&amp;objectHref=<?php echo smarty_modifier_escape(((('tiki-view_tracker_item.php?trackerId=').($_smarty_tpl->tpl_vars['trackerId']->value)).('&itemId=')).($_smarty_tpl->tpl_vars['itemId']->value),"url");?>
">
								<?php echo smarty_function_icon(array('name'=>"watch-group"),$_smarty_tpl);?>
 Group monitor
							</a>
						</li>
					<?php }?>
				<?php }?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['js']->value=='n') {?></li></ul><?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['canModify']->value&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_legacy_insert']!='y') {?>
			<?php if (!empty($_REQUEST['from'])) {
$_smarty_tpl->tpl_vars['from'] = new Smarty_variable($_REQUEST['from'], null, 0);
} else {
$_smarty_tpl->tpl_vars['from'] = new Smarty_variable('', null, 0);
}?>
			<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'update_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'redirect'=>$_smarty_tpl->tpl_vars['from']->value),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit</a>
		<?php }?>

		
		<?php if (!$_smarty_tpl->tpl_vars['viewItemPretty']->value['override']) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("tracker_actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['viewItemPretty']->value['override']&&!empty($_smarty_tpl->tpl_vars['referer']->value)) {?>
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
" title="Back"><?php echo smarty_function_icon(array('name'=>"arrow-circle-left"),$_smarty_tpl);?>
 Back</a>
		<?php }?>
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

	
	<?php if ($_smarty_tpl->tpl_vars['canView']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>(($tmp = @$_smarty_tpl->tpl_vars['cant']->value)===null||$tmp==='' ? null : $tmp),'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'reloff'=>(($tmp = @$_REQUEST['reloff'])===null||$tmp==='' ? null : $tmp),'itemname'=>"Item")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>(($tmp = @$_smarty_tpl->tpl_vars['cant']->value)===null||$tmp==='' ? null : $tmp),'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'reloff'=>(($tmp = @$_REQUEST['reloff'])===null||$tmp==='' ? null : $tmp),'itemname'=>"Item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			
			<?php echo (($tmp = @$_SERVER['php_self'])===null||$tmp==='' ? null : $tmp);?>
?<?php echo smarty_function_query(array('itemId'=>null,'trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>(($tmp = @$_smarty_tpl->tpl_vars['cant']->value)===null||$tmp==='' ? null : $tmp),'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'reloff'=>(($tmp = @$_REQUEST['reloff'])===null||$tmp==='' ? null : $tmp),'itemname'=>"Item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ('tracker_error.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<style>
	.tab-content .tab-pane {
    	display:block;
	}</style>
<?php }?> 




<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_view_tracker_item','skipsingle'=>1,'toggle'=>'n')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_view_tracker_item','skipsingle'=>1,'toggle'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"View",'print'=>'y')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"View",'print'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
		
		
		
		<?php if ($_smarty_tpl->tpl_vars['tracker_is_multilingual']->value) {?>
			<div class="translations">
				<a href="<?php echo smarty_function_service(array('controller'=>'translation','action'=>'manage','type'=>'trackeritem','source'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>
">Translations</a>
			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('.translations a').click(function () {
					var link = this;
					$(this).serviceDialog({
						title: $(link).text(),
						data: {
							controller: 'translation',
							action: 'manage',
							type: 'trackeritem',
							source: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['itemId']->value);?>
"
						}
					});
					return false;
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		
		<?php echo smarty_function_trackerfields(array('mode'=>'view','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'viewItemPretty'=>$_smarty_tpl->tpl_vars['viewItemPretty']->value['value']),$_smarty_tpl);?>


		
		<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_tracker_view_comments']->value!='n'||$_smarty_tpl->tpl_vars['tiki_p_comment_tracker_items']->value!='n'||$_smarty_tpl->tpl_vars['canViewCommentsAsItemOwner']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_show_comments_below']=='y') {?>
			<a id="Comments"></a>
			<div id="comment-container-below" class="well well-sm" data-target="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>'trackeritem','objectId'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>
"></div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				var id = '#comment-container-below';
				$(id).comment_load($(id).data('target'));
				$(document).ajaxComplete(function(){$(id).tiki_popover();});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php }?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"View",'print'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['useComments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_tracker_view_comments']->value!='n'||$_smarty_tpl->tpl_vars['tiki_p_comment_tracker_items']->value!='n'||$_smarty_tpl->tpl_vars['canViewCommentsAsItemOwner']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_show_comments_below']!='y') {?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Comments (".((string)$_smarty_tpl->tpl_vars['comCount']->value).")",'print'=>'n')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Comments (".((string)$_smarty_tpl->tpl_vars['comCount']->value).")",'print'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div id="comment-container" data-target="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>'trackeritem','objectId'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>
"></div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				var id = '#comment-container';
				$(id).comment_load($(id).data('target'));
				$(document).ajaxComplete(function(){$(id).tiki_popover();});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Comments (".((string)$_smarty_tpl->tpl_vars['comCount']->value).")",'print'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['useAttachments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tracker_view_attachments']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Attachments (".((string)$_smarty_tpl->tpl_vars['attCount']->value).")",'print'=>'n')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Attachments (".((string)$_smarty_tpl->tpl_vars['attCount']->value).")",'print'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->getSubTemplate ('attachments_tracker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Attachments (".((string)$_smarty_tpl->tpl_vars['attCount']->value).")",'print'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	
	<?php if ((!isset($_smarty_tpl->tpl_vars['print_page']->value)||$_smarty_tpl->tpl_vars['print_page']->value!='y')&&$_smarty_tpl->tpl_vars['canModify']->value&&$_smarty_tpl->tpl_vars['prefs']->value['tracker_legacy_insert']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['editTitle']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['editTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Edit Item</h2>

			<div class="nohighlight"><table style="width: 100%;"><tr><td> 
				<?php echo $_smarty_tpl->getSubTemplate ("tracker_validator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&!empty($_smarty_tpl->tpl_vars['trackers']->value)) {?>
					<form role="form">
						<input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
">
						<select name="moveto">
							<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['tracker']->value['trackerId']!=$_smarty_tpl->tpl_vars['trackerId']->value) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['name']);?>
</option>
								<?php }?>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-default btn-sm" name="go" value="Move to another tracker">
					</form>
				<?php }?>

				<form class="form form-horizontal" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
" method="post" id="editItemForm">
					<?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
						<input type="hidden" name="view" value=" <?php echo $_smarty_tpl->tpl_vars['special']->value;?>
">
					<?php } else { ?>
						<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
						<input type="hidden" name="itemId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['itemId']->value);?>
">
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['from']->value) {?>
						<input type="hidden" name="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
">
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['value'])) {?>
							<input type="hidden" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
">
						<?php }?>
					<?php endfor; endif; ?>
					<?php if ($_smarty_tpl->tpl_vars['cant']->value) {?>
						<input type="hidden" name="cant" value="<?php echo $_smarty_tpl->tpl_vars['cant']->value;?>
">
					<?php }?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<em class='mandatory_note'>Fields marked with an * are mandatory.</em><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<div class="form-group margin-side-0">
								<?php if (count($_smarty_tpl->tpl_vars['fields']->value)>=5) {?>
									<input type="submit" class="btn btn-default btn-sm" name="save" value="Save" onclick="needToConfirm=false">
									
									<?php if ($_smarty_tpl->tpl_vars['canView']->value) {?>
										<input type="submit" class="btn btn-default btn-sm" name="save_return" value="Save Returning to Item List" onclick="needToConfirm=false">
										<?php if ($_smarty_tpl->tpl_vars['canRemove']->value) {?>
											<a class="btn btn-default btn-sm" href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
" title="Delete"><?php echo smarty_function_icon(array('name'=>'delete','alt'=>"Delete"),$_smarty_tpl);?>
</a>
										<?php }?>
									<?php }?>
								<?php }?>
					</div>
																	
						<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
							<div class="form-group">
								<label class="form-label col-sm-3">Status</label>
								<div class="col-sm-9">
									<?php echo $_smarty_tpl->getSubTemplate ('tracker_status_input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item_info']->value,'form_status'=>'edstatus'), 0);?>

								</div>
							</div>
						<?php }?>

						
						<?php if (empty($_smarty_tpl->tpl_vars['editItemPretty']->value['value'])) {?>

							<?php  $_smarty_tpl->tpl_vars['cur_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_field']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ins_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_field']->key => $_smarty_tpl->tpl_vars['cur_field']->value) {
$_smarty_tpl->tpl_vars['cur_field']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['cur_field']->key;
?>
								<div class="form-group">
									<label class="control-label col-sm-3">
										<?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>

										<?php if ($_smarty_tpl->tpl_vars['cur_field']->value['isMandatory']=='y') {?>
											<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
										<?php }?>
									</label>
									<div class="col-sm-9">
										<?php echo smarty_function_trackerinput(array('field'=>$_smarty_tpl->tpl_vars['cur_field']->value,'item'=>$_smarty_tpl->tpl_vars['item_info']->value,'inTable'=>'formcolor','showDescription'=>'y'),$_smarty_tpl);?>

									</div>
								</div>
							<?php } ?>

						<?php } else { ?>
						
						
							<div class="form-group">

								<?php if ($_smarty_tpl->tpl_vars['editItemPretty']->value['type']=='wiki') {?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','wiki'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n')); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','wiki'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','wiki'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php } else { ?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','tpl'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n')); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','tpl'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>'tracker','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'itemId'=>$_smarty_tpl->tpl_vars['itemId']->value,'view'=>'page','tpl'=>$_smarty_tpl->tpl_vars['editItemPretty']->value['value'],'formtag'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php }?>

							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['groupforalert']->value!='') {?>

							<div class="form-group">
								<div class="col-sm-3">Choose users to alert</div>
								<div class="col-sm-9">
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
										<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='') {?>
											<input type="hidden" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
">
										<?php } else { ?>
											<input type="checkbox" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
"> <?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>

										<?php }?>
									<?php endfor; endif; ?>
								</div>

							</div>
						<?php }?>


						
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
							<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php }?>
						<div class="form-group margin-side-0">

								<input type="submit" class="btn btn-default btn-sm" name="save" value="Save" onclick="needToConfirm=false">
								
								<?php if ($_smarty_tpl->tpl_vars['canView']->value) {?>
									<input type="submit" class="btn btn-default btn-sm" name="save_return" value="Save Returning to Item List" onclick="needToConfirm=false">
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['canRemove']->value) {?>
									<a class="link tips" href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['trackerId']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
" title=":Delete">
										<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

									</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['item_info']->value['logs']['cant']) {?>
									<a class="link tips" href="tiki-tracker_view_history.php?itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
" title=":History">
										<?php echo smarty_function_icon(array('name'=>'history'),$_smarty_tpl);?>

									</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&empty($_smarty_tpl->tpl_vars['trackers']->value)) {?>
									<a class="link tips" href="tiki-view_tracker_item.php?itemId=<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
&moveto" title=":Move to another tracker">
										<?php echo smarty_function_icon(array('name'=>'next'),$_smarty_tpl);?>

									</a>
								<?php }?>

						</div>


					
				</form>

				<?php  $_smarty_tpl->tpl_vars['cur_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ins_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_field']->key => $_smarty_tpl->tpl_vars['cur_field']->value) {
$_smarty_tpl->tpl_vars['cur_field']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['cur_field']->value['type']=='x') {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('trkaction', null, null); ob_start(); ?>
							<form action="<?php echo $_smarty_tpl->tpl_vars['cur_field']->value['options_array'][2];?>
" <?php if ($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][1]=='post') {?>method="post"<?php } else { ?>method="get"<?php }?>>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['name'] = 'tl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cur_field']->value['options_array']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'] = (int) 3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tl']['total']);
?>
									<?php $_smarty_tpl->tpl_vars['valvar'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][$_smarty_tpl->getVariable('smarty')->value['section']['tl']['index']],"/^[^:]*:/",'')), null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->tpl_vars['valvar']->value]=='') {?>
										<?php $_smarty_tpl->tpl_vars['valvar'] = new Smarty_variable(smarty_modifier_escape(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][$_smarty_tpl->getVariable('smarty')->value['section']['tl']['index']],"/^[^\=]*\=/",'')), null, 0);?>
										<input type="hidden" name="<?php echo smarty_modifier_escape(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][$_smarty_tpl->getVariable('smarty')->value['section']['tl']['index']],"/\=.*"."$"."/",''));?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['valvar']->value);?>
">
									<?php } else { ?>
										<input type="hidden" name="<?php echo smarty_modifier_escape(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][$_smarty_tpl->getVariable('smarty')->value['section']['tl']['index']],"/:.*"."$"."/",''));?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->tpl_vars['valvar']->value]);?>
">
									<?php }?>
								<?php endfor; endif; ?>
								<div class="form-group">
										<div class="col-sm-6">
											<?php echo tra($_smarty_tpl->tpl_vars['cur_field']->value['name']);?>

										</div>
										<div class="col-sm-6">
											<input type="submit" class="btn btn-default btn-sm" name="trck_act" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][0]);?>
" >
										</div>
								</div>
							</form>
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php $_smarty_tpl->tpl_vars['trkact'] = new Smarty_variable(($_smarty_tpl->tpl_vars['trkact']->value).(Smarty::$_smarty_vars['capture']['trkaction']), null, 0);?>
					<?php }?>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['trkact']->value) {?>
					<h2>Special Operations</h2>
					<?php echo $_smarty_tpl->tpl_vars['trkact']->value;?>

				<?php }?>
			</td></tr></table></div><!--nohighlight-->
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['editTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_view_tracker_item','skipsingle'=>1,'toggle'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['print_page']->value)&&$_smarty_tpl->tpl_vars['print_page']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['print_original_url_tracker']=='y') {?>
	The original document is available at <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
</a>
<?php }?>
<?php }} ?>
