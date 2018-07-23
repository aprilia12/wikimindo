<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:06:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_trackers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4597791305b553828188da5-95954987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa63d7d0f2e85766826992ecda8eb03378d7d2b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_trackers.tpl',
      1 => 1511373226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4597791305b553828188da5-95954987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fieldPreferences' => 0,
    'name' => 0,
    'attachements' => 0,
    'find' => 0,
    'sort_mode' => 0,
    'cant_pages' => 0,
    'prefs' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553828230d41_73097226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553828230d41_73097226')) {function content_5b553828230d41_73097226($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?><form class="form-horizontal" action="tiki-admin.php?page=trackers" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="button" class="btn btn-link" href="tiki-list_trackers.php" title="List">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Trackers
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_trackers','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset class="table">
				<legend>Tracker settings</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_reports'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"tracker_remote_sync"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"tracker_tabular_enabled"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"tracker_clone_item"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'allocate_memory_tracker_export_items'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_export_items'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_clear_items'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'ajax_inline_edit'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="ajax_inline_edit_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'ajax_inline_edit_trackerlist'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'tracker_report_resize_button'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_show_comments_below'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_legacy_insert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_status_in_objectlink'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_always_notify'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_tracker_prefixalias'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_prefixalias_on_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_trackeritem'),$_smarty_tpl);?>

			</fieldset>
			<fieldset class="table">
				<legend>Field settings</legend>
				<?php echo smarty_function_preference(array('name'=>'user_selector_threshold'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_selector_realnames_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_object_selector_threshold'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"tracker_refresh_itemlink_detail"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_tracker_existing_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unified_trackerfield_keys'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_change_field_type'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="admin">
				<legend>Linked wiki pages</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Wiki pages are linked to tracker items, and their page names to tracker fields, via the tiki.wiki.linkeditem and tiki.wiki.linkedfield relations. You need to be familiar with the Relations tracker field or use the outputwiki option in the TRACKER plugin to make use of these features.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_wikirelation_synctitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_wikirelation_redirectpage'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="table">
				<legend>Tracker attachment preferences</legend>
				<?php echo smarty_function_preference(array('name'=>'t_use_db'),$_smarty_tpl);?>

				<div class="adminoptionboxchild t_use_db_childcontainer n">
					<?php echo smarty_function_preference(array('name'=>'t_use_dir'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset class="admin">
				<legend>Tracker force-fill feature</legend>
				<?php echo smarty_function_preference(array('name'=>'tracker_force_fill'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_force_tracker_id'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_force_mandatory_field'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tracker_force_tracker_fields'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_force_avatar_upload'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table">
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_insert'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wikiplugin_insert_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'tracker_insert_allowed'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerlist'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerfilter'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerif'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerstat'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_miniquiz'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_vote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackercomments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackeritemfield'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerprefill'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackertimeline'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackertoggle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_prettytrackerviews'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerpasscode'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackeritemcopy'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerquerytemplate'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Field Types")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Field Types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table">
				<legend>Field types</legend>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fieldPreferences']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
					<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>

				<?php } ?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Field Types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<div class="text-center">
				<input type="submit" class="btn btn-primary btn-sm tips timeout" name="trkset" title=":Apply changes" value="Apply">
			</div>
		</div>
	</div>
</form>


<fieldset>
	<legend>Tracker attachments</legend>
	<div class="table">
		<?php if ($_smarty_tpl->tpl_vars['attachements']->value) {?>
			<form action="tiki-admin.php?page=trackers" method="post">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input type="text" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
				<input type="submit" class="btn btn-default btn-sm timeout" name="action" value="Find">
			</form>
		<?php }?>

		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=user_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='attId') {?>asc<?php } else { ?>desc<?php }?>">ID</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=user_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='user') {?>asc<?php } else { ?>desc<?php }?>">User</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=filename_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filename') {?>asc<?php } else { ?>desc<?php }?>">Name</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=filesize_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filesize') {?>asc<?php } else { ?>desc<?php }?>">Size</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=filetype_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='filetype') {?>asc<?php } else { ?>desc<?php }?>">Type</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=hits_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits') {?>asc<?php } else { ?>desc<?php }?>">dls</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=itemId_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='itemId') {?>asc<?php } else { ?>desc<?php }?>">Item</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=path_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='path') {?>asc<?php } else { ?>desc<?php }?>">Storage</a>
					</th>
					<th>
						<a href="tiki-admin.php?page=trackers&amp;sort_mode=created_<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='created') {?>asc<?php } else { ?>desc<?php }?>">Created</a>
					</th>
					<th>Switch storage</th>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['attachements']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
					<tr class=<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
>
						<td class="id"><a href="tiki-download_item_attachment.php?attId=<?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['attId'];?>
" title="Download"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['attId'];?>
</a></td>
						<td class="username"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['user'];?>
</td>
						<td class="text"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['filename'];?>
</td>
						<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['filesize']);?>
</td>
						<td class="text"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['filetype'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['hits'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['itemId'];?>
</td>
						<td class="text"><?php if ($_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['path']) {?>file<?php } else { ?>db<?php }?></td>
						<td class="date"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['created']);?>
</td>
						<td class="action">
							<a href="tiki-admin.php?page=trackers&amp;attId=<?php echo $_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['attId'];?>
&amp;action=<?php if ($_smarty_tpl->tpl_vars['attachements']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['path']) {?>move2db<?php } else { ?>move2file<?php }?>">
								<?php echo smarty_function_icon(array('name'=>'refresh','iclass'=>'tips','title'=>":Switch storage"),$_smarty_tpl);?>

							</a>
						</td>
					</tr>
				<?php endfor; else: ?>
					<?php echo smarty_function_norecords(array('_colspan'=>10),$_smarty_tpl);?>

				<?php endif; ?>
			</table>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['attachements']->value) {?>
		<table>
			<tr>
				<td>
					<form action="tiki-admin.php?page=trackers" method="post">
						<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

						<input type="hidden" name="all2db" value="1">
						<input type="submit" class="btn btn-default btn-sm timeout" name="action" value="Change all to db">
					</form>
				</td>
				<td>
					<form action="tiki-admin.php?page=trackers" method="post">
						<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

						<input type="hidden" name="all2file" value="1">
						<input type="submit" class="btn btn-default btn-sm timeout" name="action" value="Change all to file">
					</form>
				</td>
			</tr>
		</table>
	<?php }?>
</fieldset>
<?php }} ?>
