<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 04:21:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-pagehistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6070411965b57deb8491395-86437442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a87282af856f49df2221d1cb94593290fb7a92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-pagehistory.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6070411965b57deb8491395-86437442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'editable' => 0,
    'noHistory' => 0,
    'show_all_versions' => 0,
    'preview' => 0,
    'info' => 0,
    'tiki_p_rollback' => 0,
    'ver_cant' => 0,
    'flaggedrev_approval' => 0,
    'tiki_p_wiki_approve' => 0,
    'flaggedrev_preview_approved' => 0,
    'previewd' => 0,
    'source' => 0,
    'sourced' => 0,
    'prefs' => 0,
    'flaggedrev_compare_approve' => 0,
    'new' => 0,
    'diff_style' => 0,
    'history_offset' => 0,
    'paginate' => 0,
    'history_pagesize' => 0,
    'tiki_p_edit' => 0,
    'languages' => 0,
    'lang' => 0,
    'show_translation_history' => 0,
    'history' => 0,
    'js' => 0,
    'tiki_p_remove' => 0,
    'tiki_p_wiki_view_latest' => 0,
    'translation_sources' => 0,
    'translation_targets' => 0,
    'target' => 0,
    'contributions' => 0,
    'contributors' => 0,
    'current' => 0,
    'libeg' => 0,
    'liend' => 0,
    'tiki_p_wiki_view_source' => 0,
    'old' => 0,
    'element' => 0,
    'lock' => 0,
    'history_cant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57deb861bc74_35209851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57deb861bc74_35209851')) {function content_5b57deb861bc74_35209851($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki",'url'=>smarty_modifier_escape(('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value)))); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki",'url'=>smarty_modifier_escape(('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value))), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
History: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki",'url'=>smarty_modifier_escape(('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value))), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url'), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'class'=>"btn btn-default",'_text'=>"View page",'_icon_name'=>"view"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>
		<?php echo smarty_function_button(array('href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'class'=>"btn btn-default",'_text'=>"Edit page",'_icon_name'=>"edit"),$_smarty_tpl);?>

	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=="y") {?>
			<?php echo smarty_function_button(array('_text'=>"Collapse Into Edit Sessions",'href'=>"?clear_versions=1&show_all_versions=n",'_auto_args'=>"*",'class'=>"btn btn-default",'_icon_name'=>"expanded"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_button(array('_text'=>"Show All Versions",'href'=>"?clear_versions=1&show_all_versions=y",'_auto_args'=>"*",'class'=>"btn btn-default",'_icon_name'=>"collapsed"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
	<h2>Preview of version: <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version']==$_smarty_tpl->tpl_vars['preview']->value) {?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version']!=$_smarty_tpl->tpl_vars['preview']->value&&$_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y') {?>
		<div class="navbar">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Roll back to this version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>
	<div>
		<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<form method="post" action="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;preview=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['preview']->value,'url');?>
">
				<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_approved']->value) {?>
					<p>This revision is currently marked as approved.<p>
					<div class="submit">
						<input type="hidden" name="unapprove" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['preview']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="flaggedrev" value="Remove Approval">
					</div>
				<?php } else { ?>
					<p>This revision has not been approved.<p>
					<div class="submit">
						<input type="hidden" name="approve" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['preview']->value);?>
">
						<input type="submit" class="btn btn-default btn-sm" name="flaggedrev" value="Approve Revision">
					</div>
				<?php }?>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"History view")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"History view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>
				<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_approved']->value) {?>
						This revision may not be the latest approved revision!
				<?php } else { ?>
						This revision has not been approved.
				<?php }?>
			</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"History view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<div class="wikitext" id="page-data">
		<?php echo $_smarty_tpl->tpl_vars['previewd']->value;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['source']->value) {?>
	<h2>
		Source of version: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version']==$_smarty_tpl->tpl_vars['source']->value) {?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version']!=$_smarty_tpl->tpl_vars['source']->value&&$_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y') {?>
		<div class="navbar"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Roll back to this version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php }?>
	<div>
		<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n") {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
	</div>
	<textarea data-codemirror="true" data-syntax='tiki' class="wikiedit readonly" style="width:100%;height:400px" readonly="readonly" id="page_source"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sourced']->value);?>
</textarea>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_syntax_highlighter']!="y") {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#page_source").resizable();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y'&&$_smarty_tpl->tpl_vars['flaggedrev_compare_approve']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url');?>
&amp;preview=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new']->value['version'],'url');?>
">
			<p>This revision has not been approved.<p>
			<div class="submit">
				<input type="hidden" name="approve" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['new']->value['version']);?>
">
				<input type="submit" class="btn btn-default btn-sm" name="flaggedrev" value="Approve Revision">
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<hr style="clear: both;"/>

<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['source']->value||$_smarty_tpl->tpl_vars['diff_style']->value) {?>
		<h2>
			History
		</h2>
	<?php }?>
	<form id="pagehistory" class="form-horizontal" action="tiki-pagehistory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
		<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
		<input type="hidden" name="history_offset" value="<?php echo $_smarty_tpl->tpl_vars['history_offset']->value;?>
">
		<div class="clearfix">
			<div class="pull-left col-sm-9" style="margin-bottom: 10px">
				<input type="checkbox" name="paginate" id="paginate"<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?> checked="checked"<?php }?>>
				<label for="paginate">Enable pagination</label>
				<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?>
					<input type="text" name="history_pagesize" id="history_pagesize" value="<?php echo $_smarty_tpl->tpl_vars['history_pagesize']->value;?>
" class="form-control" style="width: 5em; display: inline-block">
					<label for="history_pagesize">per page</label>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y') {?>
				<div class="col-sm-6 pull-left margin-bottom-sm">
					<div class="input-group input-group-sm">
						<span class="input-group-addon">
							<?php echo smarty_function_icon(array('name'=>'admin_i18n','class'=>'tips','title'=>":Translation"),$_smarty_tpl);?>

						</span>
						<select name="tra_lang" class="form-control">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
							<?php endfor; endif; ?>
						</select>
						<div class="input-group-btn">
							<input type="submit" class="btn btn-primary btn-sm" name="update_translation" value="Update Translation"/>
							<?php if ($_smarty_tpl->tpl_vars['show_translation_history']->value) {?>
								<input type="hidden" name="show_translation_history" value="1">
								<?php echo smarty_function_button(array('show_translation_history'=>0,'_text'=>"Hide translation history",'_auto_args'=>"*",'_class'=>"btn btn-default btn-sm"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_button(array('show_translation_history'=>1,'_text'=>"Show translation history",'_auto_args'=>"*",'_class'=>"btn btn-default btn-sm"),$_smarty_tpl);?>

							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old")&&$_smarty_tpl->tpl_vars['history']->value) {?>
				<div class="input-group input-group-sm col-sm-4 pull-right" style="margin-bottom: 10px">
					<select class="form-control" name="diff_style" id="diff_style_all"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y") {?> style="display: none"<?php }?>>
						<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?>selected="selected"<?php }?>>
							HTML diff
						</option>
						<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff") {?>selected="selected"<?php }?>>
							Side-by-side diff
						</option>
						<option value="sidediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-char") {?>selected="selected"<?php }?>>
							Side-by-side diff by characters
						</option>
						<option value="inlinediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff") {?>selected="selected"<?php }?>>
							Inline diff
						</option>
						<option value="inlinediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-char") {?>selected="selected"<?php }?>>
							Inline diff by characters
						</option>
						<option value="sidediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-full") {?>selected="selected"<?php }?>>
							Full side-by-side diff
						</option>
						<option value="sidediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-full-char") {?>selected="selected"<?php }?>>
							Full side-by-side diff by characters
						</option>
						<option value="inlinediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full") {?>selected="selected"<?php }?>>
							Full inline diff
						</option>
						<option value="inlinediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full-char") {?>selected="selected"<?php }?>>
							Full inline diff by characters
						</option>
						<option value="unidiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="unidiff") {?>selected="selected"<?php }?>>
							Unified diff
						</option>
						<option value="sideview" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sideview") {?>selected="selected"<?php }?>>
							Side-by-side view
						</option>
					</select>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y") {?>
						<select class="form-control" name="diff_style" id="diff_style_simple">
							<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff") {?>selected="selected"<?php }?>>
								HTML diff
							</option>
							<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff") {?>selected="selected"<?php }?>>
								Side-by-side diff
							</option>
						</select>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y") {?>
						<span class="input-group-btn">
							<?php echo smarty_function_button(array('_text'=>"Advanced",'_id'=>"toggle_diffs",'_ajax'=>"n",'_class'=>"btn btn-default btn-sm"),$_smarty_tpl);?>

						</span>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$("form#pagehistory")
		.each(function store_original_values(i, form){
			form.originals = {};

			$(form).find(':input').each(function(i, input){
				var name = $(input).attr('name');
				var value = $(input).val();
				form.originals[name] = value;
			});
		})
		.submit(function submit_changed_values(evt){
			var always = ['page', 'oldver'];
			var originals = this.originals || {};

			$(this).find(':input:enabled').each(function(i, input){
				var name = $(input).attr('name');
				var value = $(input).val();

				if(always.indexOf(name) === -1 && originals[name] === value) {
					$(input).attr('disabled', 'disabled')
							.prop('disabled', 'disabled');
				}
			});
		});

	$("a#toggle_diffs").click(function(e){
		if ($(this).text() == "Advanced") {
			$(this).text("Simple");
			if (jqueryTiki.chosen) {
				$("#diff_style_all").next(".chosen-container").show();
				$("#diff_style_simple").next(".chosen-container").hide();
				$("#diff_style_all").attr("name", "diff_style");
				$("#diff_style_simple").attr("name", "");
			} else {
				$("#diff_style_all").show().attr("name", "diff_style");
				$("#diff_style_simple").hide().attr("name", "");
			}
		} else {
			$(this).text("Advanced");
			if (jqueryTiki.chosen) {
				$("#diff_style_all").next(".chosen-container").hide();
				$("#diff_style_simple").next(".chosen-container").show();
				$("#diff_style_all").attr("name", "");
				$("#diff_style_simple").attr("name", "diff_style");
			} else {
				$("#diff_style_all").hide().attr("name", "");
				$("#diff_style_simple").show().attr("name", "diff_style");
			}
		}
		return false;
	});
	if (jqueryTiki.chosen) {
		if ($("#diff_style_simple").html().indexOf("<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
") > -1) {
			$("#diff_style_all").next(".chosen-container").hide().attr("name", "");
		} else {
			$("#diff_style_simple").next(".chosen-container").hide();
		}
	}
	<?php if ($_smarty_tpl->tpl_vars['diff_style']->value!="htmldiff"&&$_smarty_tpl->tpl_vars['diff_style']->value!="sidediff") {?>$("#toggle_diffs a").click();<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
				<input type="hidden" name="show_all_versions" value="<?php echo $_smarty_tpl->tpl_vars['show_all_versions']->value;?>
">
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
				<table class="table table-condensed table-hover table-striped">
					<tr>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y') {?>
							<th>
								<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

							</th>
						<?php }?>
						<th>
							Information
						</th>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
							<th>
								Contribution
							</th>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y') {?>
							<th>
								Contributors
							</th>
						<?php }?>
						<th>
							Version
						</th>
						<th>
							<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>'HTML allowed:HTML syntax is allowed either by page setting or use of the WYSIWIG editor'),$_smarty_tpl);?>

						</th>
						<th></th>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old"&&$_smarty_tpl->tpl_vars['history']->value) {?>
							<th colspan="2">
								<input type="submit" class="btn btn-default btn-sm" name="compare" value="Compare">
							</th>
						<?php }?>
					</tr>
					<tr class="active">
						<?php if ($_smarty_tpl->tpl_vars['history_offset']->value==1) {?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y') {?>
								<td>&nbsp;</td>
							<?php }?>
							<td class="text-left">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['info']->value['lastModif']);?>

								<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);
echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['info']->value['user']);?>

								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n') {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>

								<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'&&$_smarty_tpl->tpl_vars['info']->value['approved']) {?><strong>(approved)</strong><?php }?>

								<?php if ($_smarty_tpl->tpl_vars['info']->value['comment']) {?><div><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['comment']);?>
</div><?php }?>

								<?php if (isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']])&&$_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']]) {?>
									<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
										<div>
											Updated from: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page']))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['source']->value['page'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

										</div>
									<?php } ?>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']])&&$_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']]) {?>
									<?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
									<div>
										Used to update: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page']))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['target']->value['page'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

									</div>
									<?php } ?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
								<td><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']) {?>,<?php }
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
endfor; endif; ?></td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y') {?>
								<td>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']) {?>,<?php }
echo smarty_modifier_username($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['login']);
endfor; endif; ?>
								</td>
							<?php }?>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['info']->value['version']) {?>
									<strong><?php }
echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
<br>Current<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['info']->value['version']) {?></strong>
								<?php }?>
							</td>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['info']->value['is_html']||$_smarty_tpl->tpl_vars['info']->value['wysiwyg']=="y") {?>
									<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>':HTML allowed'),$_smarty_tpl);?>

								<?php }?>
							</td>
							<td class="button_container" style="white-space: nowrap">
								<?php $_smarty_tpl->_capture_stack[0][] = array('current_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_source']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Source<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['current_actions']),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['current_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old"&&$_smarty_tpl->tpl_vars['history']->value) {?>
								<td class="button_container">
									<input type="radio" name="oldver" value="0" title="Compare" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['version'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']) {?>checked="checked"<?php }?>>
								</td>
								<td class="button_container">
									<input type="radio" name="newver" value="0" title="Compare" <?php if ((isset($_smarty_tpl->tpl_vars['new']->value['version'])&&$_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version'])||(!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])) {?>checked="checked"<?php }?>>
								</td>
							<?php }?>
						<?php }?>
					</tr>

					<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['element']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['element']->index++;
 $_smarty_tpl->tpl_vars['element']->first = $_smarty_tpl->tpl_vars['element']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hist']['first'] = $_smarty_tpl->tpl_vars['element']->first;
?>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y') {?>
								<td>
									<input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
">
								</td>
							<?php }?>
							<td class="text-left">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['element']->value['lastModif']);?>

								<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);
echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['element']->value['user']);?>

								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n') {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>

								<?php if ($_smarty_tpl->tpl_vars['element']->value['comment']) {?><span class="help-block"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['element']->value['comment']);?>
</span><?php }?>

								<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'&&$_smarty_tpl->tpl_vars['element']->value['approved']) {?><strong>(approved)</strong><?php }?>

								<?php if (isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']])&&$_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']]) {?>
									<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
									<div>
										Updated from: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page']))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['source']->value['page'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['page'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

									</div>
									<?php } ?>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']])&&$_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']]) {?>
									<?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
									<div>
										Used to update: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page']))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['target']->value['page'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['target']->value['page'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

									</div>
									<?php } ?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y') {?>
								<td>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['element']->value['contributions']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']) {?>&nbsp;<?php }
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['element']->value['contributions'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);
endfor; endif; ?>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y') {?>
								<td>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['element']->value['contributors']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']) {?>,<?php }
echo smarty_modifier_username($_smarty_tpl->tpl_vars['element']->value['contributors'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['login']);
endfor; endif; ?>
								</td>
							<?php }?>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['element']->value['version']) {?><strong><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=="n"&&!empty($_smarty_tpl->tpl_vars['element']->value['session'])) {?>
									<em><?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
 - <?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
</em>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['element']->value['version']) {?></strong><?php }?>
							</td>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['element']->value['is_html']=="1") {?>
									<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>':HTML allowed'),$_smarty_tpl);?>

								<?php }?>
							</td>
							<td class="button_container" style="white-space: nowrap">
								<?php $_smarty_tpl->_capture_stack[0][] = array('history_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_source']=="y") {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Source<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']=="old") {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Difference<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y'&&$_smarty_tpl->tpl_vars['lock']->value!=true) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Roll back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['history_actions']),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'settings'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['history_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old") {?>
								<td class="button_container">
									<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=='n'&&!empty($_smarty_tpl->tpl_vars['element']->value['session'])) {?>
										<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
"
											title="Older Version" <?php if ((isset($_smarty_tpl->tpl_vars['old']->value['version'])&&isset($_smarty_tpl->tpl_vars['element']->value['session'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['element']->value['session'])||((!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])&&$_smarty_tpl->getVariable('smarty')->value['foreach']['hist']['first'])) {?>checked="checked"<?php }?>>
									<?php } else { ?>
										<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
"
											title="Older Version" <?php if ((isset($_smarty_tpl->tpl_vars['old']->value['version'])&&isset($_smarty_tpl->tpl_vars['element']->value['version'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['element']->value['version'])||((!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])&&$_smarty_tpl->getVariable('smarty')->value['foreach']['hist']['first'])) {?>checked="checked"<?php }?>>
									<?php }?>
								</td>
								<td class="button_container">
									
									<input type="radio" name="newver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
" title="Select a newer version for comparison"
										<?php if (isset($_smarty_tpl->tpl_vars['new']->value['version'])&&$_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['element']->value['version']) {?>checked="checked"<?php }?> >
								</td>
							<?php }?>
						</tr>
					<?php } ?>
				</table>
			</div>
			<div class="input-group col-sm-6">
				<select class="form-control" name="action">
					<option value="no_action" selected="selected">
						Select action to perform with checked...
					</option>
					<option value="remove_page_versions">
						Remove
					</option>
				</select>
				<span class="input-group-btn">
					<button
						type="submit"
						form="pagehistory"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki'),$_smarty_tpl);?>
"
						class="btn btn-primary confirm-submit">
						OK
					</button>
				</span>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?>
				<?php if (isset($_REQUEST['history_offset'])) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>
		</div>
	</form>
<?php }?>
<?php }} ?>
