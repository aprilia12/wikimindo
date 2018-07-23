<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 11:01:26
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-browse_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6246569745b51a4e6958491-97853460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '100b37dcab2b1fd4249d37dabbe3ec4e975109f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-browse_categories.tpl',
      1 => 1519696410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6246569745b51a4e6958491-97853460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentId' => 0,
    'p_info' => 0,
    'tiki_p_admin_categories' => 0,
    'type' => 0,
    'find' => 0,
    'deep' => 0,
    'sort_mode' => 0,
    'prefs' => 0,
    'id' => 0,
    'name' => 0,
    'eyes_curr' => 0,
    'father' => 0,
    'tree' => 0,
    'cant_pages' => 0,
    'objects' => 0,
    'maxRecords' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a4e6a56358_88842952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a4e6a56358_88842952')) {function content_5b51a4e6a56358_88842952($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_tr_if')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['parentId']->value!=0) {?>Category: <?php echo $_smarty_tpl->tpl_vars['p_info']->value['name'];
} else { ?>Categories<?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['parentId']->value&&$_smarty_tpl->tpl_vars['p_info']->value['description']) {?>
	<div class="description help-block"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['p_info']->value['description']));?>
</div>
<?php }?>
<div class="form-group categbar">
	<?php echo smarty_function_button(array('href'=>"tiki-edit_categories.php",'_type'=>"link",'_text'=>"Organize Objects",'_icon_name'=>"structure",'_title'=>"Organize Objects"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value),'_type'=>"link",'_icon_name'=>"settings",'_text'=>"Admin Categories",'_title'=>"Admin the Category System"),$_smarty_tpl);?>

	<?php }?>
</div>

<div class="t_navbar margin-bottom-md">
	Browse in:
	<div class="btn-group">
		<a class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['type']->value=='') {?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo $_smarty_tpl->tpl_vars['deep']->value;?>
&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">All</a>
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			or in
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='wiki page') {?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=wiki+page&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Wiki pages
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='image gallery') {?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=image+gallery&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Image galleries
					</a>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='image') {?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=image&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Images
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='file gallery') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=file+gallery&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						File Galleries
					</a>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='file') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=file&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Files
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='blog') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=blog&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Blogs
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='tracker') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=tracker&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Trackers
					</a>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='trackeritem') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=trackeritem&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Trackers Items
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='quiz') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=quiz&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Quizzes
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='poll') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=poll&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Polls
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='survey') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=survey&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Surveys
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='directory') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=directory&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Directory
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='faq') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=faq&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						FAQs
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='sheet') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=sheet&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Sheets
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='article') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=article&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Articles
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='forum') {?>id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=forum&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
						Forums
					</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div>

<form method="post" action="tiki-browse_categories.php" class="form-inline" role="form">
	<div class="form-group">
		<label class="control-label sr-only" for="find">Find</label>
		<div class="input-group">
			<span class="input-group-addon">
				<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['parentId']->value!=0) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p_info']->value['name']);?>
 <?php }?>
			</span>
			<input class="form-control input-sm" type="text" name="find" id="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<div class="input-group-btn">
				<input type="submit" class="btn btn-default btn-sm" value="Find" name="search">
			</div>
		</div>
		<span class="help-block" style="display:inline-block; margin: 0;"><?php echo smarty_function_help(array('url'=>"#",'desc'=>"Find in: <ul><li>Name</li><li>Description</li></ul>"),$_smarty_tpl);?>
</span>
	</div>
	<div class="form-group">
		<div class="checkbox">
			<label><input type="checkbox" name="deep" <?php if ($_smarty_tpl->tpl_vars['deep']->value=='on') {?>checked="checked"<?php }?>> in the current category and its subcategories</label>
		</div>
	</div>
	<input type="hidden" name="parentId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value);?>
">
	<input type="hidden" name="type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
">
	<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
</form>

<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on') {?>
	<a class="link" href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value,"url");?>
&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">
		Hide subcategories objects
	</a>
<?php } else { ?>
	<a class="link" href="tiki-browse_categories.php?find=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value,"url");?>
&amp;type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value,"url");?>
&amp;deep=on&amp;parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['parentId']->value,"url");?>
&amp;sort_mode=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value,"url");?>
">Show subcategories objects</a>
<?php }?>

<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['p_info']->value)) {?>
	<div class="breadcrumb treetitle">Current category:
		<a href="tiki-browse_categories.php?parentId=0&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value,"url");?>
" class="categpath">Top</a>
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p_info']->value['tepath']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
			&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;
			<a class="categpath" href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value,"url");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</a>
		<?php } ?>
		<?php echo $_smarty_tpl->tpl_vars['eyes_curr']->value;?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['parentId']->value!='0') {?>
		<div>
			<a class="catname tips" href="tiki-browse_categories.php?parentId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['father']->value,"url");?>
&amp;deep=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['deep']->value,"url");?>
&amp;type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value,"url");?>
" title=":Up one level">
				..
			</a>
		</div>
	<?php }?>
<?php }?>

<div class="cattree"><?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
</div>
<div class="catobj">
	<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>0) {?>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>
						Name
					</th>
					<th>
						Type
					</th>
					<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on') {?>
						<th>
							Category
						</th>
					<?php }?>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objects']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr>
						<td class="text">
							<a class="catname" href="<?php if (empty($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['sefurl'])) {
echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['href'];
} else {
echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['sefurl'];
}?>">
								<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']))===null||$tmp==='' ? '&nbsp;' : $tmp);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']!='blog post') {?><div class="subcomment"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description']));?>
</div><?php }?>
						</td>
						<td class="text">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type'],"wiki page","wiki"),"trackeritem","tracker item");
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</td>
						<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on') {?>
							<td class="text">
								<?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categName']));?>

							</td>
						<?php }?>
					</tr>
				<?php endfor; else: ?>
					<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on') {?>
						<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

					<?php }?>
				<?php endif; ?>
			</table>
		</div>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
