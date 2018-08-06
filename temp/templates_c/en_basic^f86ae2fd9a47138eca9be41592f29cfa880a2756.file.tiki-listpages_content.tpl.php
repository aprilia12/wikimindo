<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 08:50:54
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-listpages_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16413457775b67efce776054-21718467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f86ae2fd9a47138eca9be41592f29cfa880a2756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-listpages_content.tpl',
      1 => 1513163812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16413457775b67efce776054-21718467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'ts' => 0,
    'cant_pages' => 0,
    'initial' => 0,
    'find' => 0,
    'tiki_p_remove' => 0,
    'checkboxes_on' => 0,
    'listpages' => 0,
    'js' => 0,
    'cant' => 0,
    'cntcol' => 0,
    'wplp_used' => 0,
    'ln' => 0,
    'lastmod_sortfield' => 0,
    'lastmod_title' => 0,
    'lastmod_shorttitle' => 0,
    'show_actions' => 0,
    'mapview' => 0,
    'lc' => 0,
    'tiki_p_wiki_view_history' => 0,
    'categ' => 0,
    'categpath' => 0,
    'libeg' => 0,
    'liend' => 0,
    'exact_match' => 0,
    'aliases_were_found' => 0,
    'tiki_p_lock' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_edit' => 0,
    'pagefound' => 0,
    'alias_found' => 0,
    'pluginlistpages' => 0,
    'pagination' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'offset_arg' => 0,
    'clean' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67efce87fa99_86513431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67efce87fa99_86513431')) {function content_5b67efce87fa99_86513431($_smarty_tpl) {?><?php if (!is_callable('smarty_function_initials_filter_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']&&($_smarty_tpl->tpl_vars['cant_pages']->value>1||$_smarty_tpl->tpl_vars['initial']->value||$_smarty_tpl->tpl_vars['find']->value)) {?>
	<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint']=='y') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='n') {?>
		<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('n', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['find']->value!=''&&count($_smarty_tpl->tpl_vars['listpages']->value)!='0') {?>
	<p>Found &quot;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
&quot; in <?php echo count($_smarty_tpl->tpl_vars['listpages']->value);?>
 pages.</p>
<?php }?>

	
<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='y') {?>
	<form name="checkboxes_on" id="checkboxes_on" method="post" action="tiki-listpages.php">
<?php }?>

<?php $_smarty_tpl->tpl_vars['pagefound'] = new Smarty_variable('n', null, 0);?>
<div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?> ts-wrapperdiv" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>> 
	<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant']->value);?>
">
		<thead>
			<tr>
				<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='y') {?>
					<th id="checkbox">
						<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

					</th>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable('1', null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable('0', null, 0);?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="pageid">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="pagename">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['wplp_used']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wplp_used']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
 $_smarty_tpl->tpl_vars['lc']->value = $_smarty_tpl->tpl_vars['ln']->key;
?>
						<th><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ln']->value);?>
</th>
					<?php } ?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="hits"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="lastmodif">
						<?php $_smarty_tpl->tpl_vars['lastmod_sortfield'] = new Smarty_variable('lastModif', null, 0);?>
						<?php $_smarty_tpl->tpl_vars['lastmod_shorttitle'] = new Smarty_variable("Last modification", null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y') {?>
							<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Last modification / Comment", null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y') {?>
							<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Last modification", null, 0);?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Comment", null, 0);?>
							<?php $_smarty_tpl->tpl_vars['lastmod_sortfield'] = new Smarty_variable('comment', null, 0);?>
							<?php $_smarty_tpl->tpl_vars['lastmod_shorttitle'] = new Smarty_variable("Comment", null, 0);?>
						<?php }?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['lastmod_shorttitle']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="creator">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Creator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="lastauthor">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="version">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="status" style="text-align:center;">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Status of the page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="versions">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="links">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Links<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="backlinks">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Backl.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="size">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Size<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="language">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lang.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="categories">Categories</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="catpaths">Categories</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="rating">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ratings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['show_actions']->value=='y') {?>
					<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
					<th id="actions"></th>
				<?php }?>
			</tr>
		</thead>

		<tbody>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total']);
?>

				<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?>
					<div class="listpagesmap" style="display:none;"><?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>((string)smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']))),$_smarty_tpl);?>
</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['find']->value==$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']) {?>
					<?php $_smarty_tpl->tpl_vars['pagefound'] = new Smarty_variable('y', null, 0);?>
				<?php }?>

				<tr>

					<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y') {?>
						<td class="checkbox-cell">
							<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
">
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id']=='y') {?>
						<td class="integer">
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
" class="link tips" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
:View page">
								<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['page_id'];?>

							</a>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name']=='y') {?>
						<td class="text">
							
							
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
" class="link tips" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
:View page">
								<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name_len'],"...",true));?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description']!='') {?>
								<div class="subcomment">
									<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description_len'],"...",true);?>

								</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['snippet'])) {?>
								<div class="subcomment"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['snippet'];?>
</div>
							<?php }?>
						</td>
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['wplp_used']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wplp_used']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
 $_smarty_tpl->tpl_vars['lc']->value = $_smarty_tpl->tpl_vars['ln']->key;
?>
							<td class="text">
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]) {?>
									<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]);?>
" class="link" title="View page&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]);?>
">
										<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]);?>

									</a>
								<?php }?>
							</td>
						<?php } ?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits']=='y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y') {?>
						<td class="date">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y') {?>
								<div><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif']);?>
</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['comment']!='') {?>
								<div>
									<i><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['comment'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment_len'],"...",true));?>
</i>
								</div>
							<?php }?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator']=='y') {?>
						<td class="username">
							<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['creator']);?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user']=='y') {?>
						<td class="username">
							<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver']=='y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status']=='y') {?>
						<td class="icon">
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['flag']=='locked') {?>
								<?php echo smarty_function_icon(array('name'=>'lock','alt'=>"Locked"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_icon(array('name'=>'unlock','alt'=>"unlocked"),$_smarty_tpl);?>

							<?php }?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions']=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value=='y') {?>
							<td class="integer">
								<a class="link" href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
">
									<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'];?>

								</a>
							</td>
						<?php } else { ?>
							<td class="integer">
								<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'];?>

							</td>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links']=='y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['links'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks']=='y') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks']=='y') {?>
							<td class="integer">
								<a class="link" href="tiki-backlinks.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
">
									<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['backlinks'];?>

								</a>
							</td>
						<?php } else { ?>
							<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['backlinks'];?>
</td>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size']=='y') {?>
						<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['len']);?>
</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language']=='y') {?>
						<td class="text">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lang'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories']=='y') {?>
						<td class="text">
							<?php  $_smarty_tpl->tpl_vars['categ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['categname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['categ']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['categ']->key => $_smarty_tpl->tpl_vars['categ']->value) {
$_smarty_tpl->tpl_vars['categ']->_loop = true;
 $_smarty_tpl->tpl_vars['categ']->index++;
 $_smarty_tpl->tpl_vars['categ']->first = $_smarty_tpl->tpl_vars['categ']->index === 0;
?>
								<?php if (!$_smarty_tpl->tpl_vars['categ']->first) {?><br><?php }?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categ']->value);?>

							<?php } ?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path']=='y') {?>
						<td class="text">
							<?php  $_smarty_tpl->tpl_vars['categpath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categpath']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['categpath']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['categpath']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['categpath']->key => $_smarty_tpl->tpl_vars['categpath']->value) {
$_smarty_tpl->tpl_vars['categpath']->_loop = true;
 $_smarty_tpl->tpl_vars['categpath']->index++;
 $_smarty_tpl->tpl_vars['categpath']->first = $_smarty_tpl->tpl_vars['categpath']->index === 0;
?>
								<?php if (!$_smarty_tpl->tpl_vars['categpath']->first) {?><br><?php }?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['categpath']->value);?>

							<?php } ?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=='y') {?>
						<td class="integer">
							<?php if (isset($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['rating'])) {
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['rating'];
}?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['show_actions']->value=='y') {?>
						<td class="action">
							<?php $_smarty_tpl->_capture_stack[0][] = array('page_actions', null, null); ob_start(); ?>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_edit']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-copypage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
&amp;version=last"><?php echo smarty_function_icon(array('name'=>'copy','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Copy"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_wiki_view_history']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-pagehistory.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],"url");?>
"><?php echo smarty_function_icon(array('name'=>'history','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"History"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_assign_perm_wiki_page']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>"wiki page",'permType'=>'wiki','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_remove']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'remove_pages','checked'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],'version'=>'last'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['page_actions']),$_smarty_tpl);
}?>
								style="padding:0; margin:0; border:0"
							>
								<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
								<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['page_actions'];?>
</ul></li></ul>
							<?php }?>
						</td>
					<?php }?>
				</tr>
			<?php endfor; else: ?>
				<?php $_smarty_tpl->tpl_vars['find_htmlescaped'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['initial_htmlescaped'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['initial']->value), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['exact_match']->value!='n') {
$_smarty_tpl->tpl_vars['intro'] = new Smarty_variable("No page:", null, 0);
} else {
$_smarty_tpl->tpl_vars['intro'] = new Smarty_variable("No pages found with:", null, 0);
}?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['aliases_were_found']->value=='y') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['initial']->value!=''&&$_smarty_tpl->tpl_vars['aliases_were_found']->value=='y') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial_htmlescaped']->value)." &quote;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['initial']->value!='') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot; and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial_htmlescaped']->value)." &quot;."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value!='') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;."),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>"No pages found."),$_smarty_tpl);?>

				<?php }?>

			<?php endif; ?>
		</tbody>
	</table>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['ts']->value['enabled'])) {?>
	<?php echo '<script'; ?>
>
		// Otherwise, All pages are displayed, whatever was searched for
		var myfilter='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,'javascript');?>
';
	<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		(function(window,undefined){
			window.setTimeout( function(){ $('input[data-column=2]').val(myfilter).trigger('change'); } , 1000 );
		})(window)
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'&&count($_smarty_tpl->tpl_vars['listpages']->value)>0) {?> 
		<div class="input-group col-sm-6">
			<select name="action" class="form-control" id="submit_mult">
				<option value="no_action" selected="selected">
					Select action to perform with checked...
				</option>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y') {?>
					<option value="remove_pages" >Remove</option>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint']=='y') {?>
					<option value="print_pages" >Print</option>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['print_pdf_from_url']!='none') {?>
						<option value="export_pdf" >Download PDF</option>
					<?php }?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')) {?>
					<option value="lock_pages" >Lock</option>
					<option value="unlock_pages" >Unlock</option>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<option value="zip">Download zipped file</option>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
					<option value="title">Add page name as page header</option>
				<?php }?>

				
			</select>
			<span class="input-group-btn">
				<button
					type="submit"
					form="checkboxes_on"
					formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','version'=>'all'),$_smarty_tpl);?>
"
					class="btn btn-primary confirm-submit"
				>
					OK
				</button>
			</span>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['find']->value&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'&&$_smarty_tpl->tpl_vars['pagefound']->value=='n'&&$_smarty_tpl->tpl_vars['alias_found']->value=='n') {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'find_htmlescaped', null); ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'find_urlescaped', null); ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,'url');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="t_navbar">
			<?php echo smarty_function_button(array('_text'=>"Create Page: ".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value),'href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['find_urlescaped']->value)."&lang=".((string)$_smarty_tpl->tpl_vars['find_lang']->value)."&templateId=".((string)$_smarty_tpl->tpl_vars['template_id']->value)."&template_name=".((string)$_smarty_tpl->tpl_vars['template_name']->value)."&categId=".((string)$_smarty_tpl->tpl_vars['create_page_with_categId']->value),'class'=>"btn btn-default",'_title'=>"Create"),$_smarty_tpl);?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y') {?>
		</form>
	<?php }?>

	<?php if (!isset($_smarty_tpl->tpl_vars['ts']->value['enabled'])||!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
		<?php if ($_smarty_tpl->tpl_vars['pluginlistpages']->value=='y'&&$_smarty_tpl->tpl_vars['pagination']->value=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['pluginlistpages']->value=='y'&&$_smarty_tpl->tpl_vars['pagination']->value!='y') {?>
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>
