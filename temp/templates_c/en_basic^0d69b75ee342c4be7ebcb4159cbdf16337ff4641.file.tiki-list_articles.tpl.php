<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 03:36:40
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11261230135b6b9aa80b7a37-11380698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d69b75ee342c4be7ebcb4159cbdf16337ff4641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_articles.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11261230135b6b9aa80b7a37-11380698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_edit_article' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_cms' => 0,
    'prefs' => 0,
    'tiki_p_edit_submission' => 0,
    'tiki_p_read_article' => 0,
    'tiki_p_articles_read_heading' => 0,
    'tiki_p_approve_submission' => 0,
    'tiki_p_remove_submission' => 0,
    'listpages' => 0,
    'find' => 0,
    'types' => 0,
    'topics' => 0,
    'lang' => 0,
    'categId' => 0,
    'mapview' => 0,
    'maxRecords' => 0,
    'js' => 0,
    'tiki_p_remove_article' => 0,
    'numbercol' => 0,
    'oneEditPage' => 0,
    'libeg' => 0,
    'liend' => 0,
    'user' => 0,
    'tiki_p_assign_perm_cms' => 0,
    'cant' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6b9aa81dca06_93520606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b9aa81dca06_93520606')) {function content_5b6b9aa81dca06_93520606($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
if (!is_callable('smarty_modifier_kbsize')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_permission_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.permission_link.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Articles",'admpage'=>"articles")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Articles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-edit_article.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Article"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value!='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-edit_submission.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Submission"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_articles_read_heading']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-view_articles.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"articles",'_text'=>"View Articles"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_approve_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_remove_submission']->value=="y"||$_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value=="y")) {?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_submissions.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"view",'_text'=>"View Submissions"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_topics.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"flag",'_text'=>"Article Topics"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-article_types.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"structure",'_text'=>"Article Types"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['listpages']->value||($_smarty_tpl->tpl_vars['find']->value!='')||($_smarty_tpl->tpl_vars['types']->value!='')||($_smarty_tpl->tpl_vars['topics']->value!='')||($_smarty_tpl->tpl_vars['lang']->value!='')||($_smarty_tpl->tpl_vars['categId']->value!='')) {?>
	<div class="row row-sidemargins-zero">
		<div class="col-md-6">
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_languages'=>'y','find_show_categories_multi'=>'y','find_show_num_rows'=>'y','find_show_date_range'=>'y'), 0);?>

		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['mapview']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"map",'scope'=>".listarticlesmap .geolocated",'width'=>"400",'height'=>"400")); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listarticlesmap .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listarticlesmap .geolocated",'width'=>"400",'height'=>"400"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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

<form name="checkform" method="get">
	<input type="hidden" name="maxRecords" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRecords']->value);?>
">
	<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(1, null, 0);?>
	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
		<table class="table">
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value&&$_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {?>
					<th class="auto">
						<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_title']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'title')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'title'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_id']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'articleId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'articleId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'articleId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_type']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'type')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_topic']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'topicName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'topicName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topic<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'topicName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_date']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'publishDate')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'publishDate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Publish Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'publishDate'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_expire']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'expireDate')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'expireDate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expiry Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'expireDate'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_visible']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><span>Visible</span></th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_lang']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lang')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_author']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'author')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_authorName']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'authorName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'authorName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'authorName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_rating']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th class="text-right">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'rating')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rating<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_usersRating']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th class="text-right">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'usersRating')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'usersRating'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users rating<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'usersRating'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_reads']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th class="text-right">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'nbreads')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nbreads'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nbreads'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_size']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th class="text-right"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'size')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'size'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Size<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'size'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_img']=='y') {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th>Image</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_ispublished']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'ispublished')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'ispublished'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Published<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'ispublished'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y'||isset($_smarty_tpl->tpl_vars['oneEditPage']->value)||$_smarty_tpl->tpl_vars['tiki_p_read_article']->value) {?>
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
					<th></th>
				<?php }?>
			</tr>

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
					<div class="listarticlesmap" style="display:none;"><?php echo smarty_function_object_link(array('type'=>"article",'id'=>((string)smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId']))),$_smarty_tpl);?>
</div>
				<?php }?>

				<tr>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {?>
						<td class="checkbox-cell">
							<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId']);?>
" <?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['checked']=='y') {?>checked="checked" <?php }?>>
						</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_title']=='y') {?>
						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y') {?>
								<?php echo smarty_function_object_link(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'title'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['title'],$_smarty_tpl->tpl_vars['prefs']->value['art_list_title_len'],"...",true)),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['title'],$_smarty_tpl->tpl_vars['prefs']->value['art_list_title_len'],"...",true));?>

							<?php }?>
						</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_id']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'];?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_type']=='y') {?>
						<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['type']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_topic']=='y') {?>
						<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['topicName']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_date']=='y') {?>
						<td class="date" title="<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['publishDate'],'','n');?>
"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['publishDate']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_expire']=='y') {?>
						<td class="date" title="<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['expireDate'],'','n');?>
"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['expireDate']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_visible']=='y') {?>
						<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['disp_article'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_lang']=='y') {?>
						<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lang'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_author']=='y') {?>
						<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['author']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_authorName']=='y') {?>
						<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['authorName']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_rating']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['rating'];?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_usersRating']=='y') {?>
						<td class="integer"><?php echo smarty_function_rating_result_avg(array('id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'type'=>'article'),$_smarty_tpl);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_reads']=='y') {?>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['nbreads'];?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_size']=='y') {?>
						<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['size']);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_img']=='y') {?>
						<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hasImage'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
/<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['useImage'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_list_ispublished']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
						<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['ispublished'];?>
</td>
					<?php }?>
					<td class="action">
						<?php $_smarty_tpl->_capture_stack[0][] = array('articles_actions', null, null); ob_start(); ?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'article');?>
"><?php echo smarty_function_icon(array('name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y'||(!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['author']==$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['creator_edit']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'];?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_cms']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'article','permType'=>'articles','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'_icon_name'=>"remove")); $_block_repeat=true; echo smarty_block_self_link(array('_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'_icon_name'=>"remove"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['articleId'],'_icon_name'=>"remove"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['articles_actions']),$_smarty_tpl);
}?>
							style="padding:0; margin:0; border:0"
						>
							<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
							<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['articles_actions'];?>
</ul></li></ul>
						<?php }?>
					</td>
				</tr>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['listpages']->value&&$_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {?>
		<div>
			<?php echo smarty_function_button(array('_text'=>"Select Duplicates",'_onclick'=>"checkDuplicateRows(this,'td:not(:eq(2))'); return false;"),$_smarty_tpl);?>

			<br><br>
			<div class="col-lg-9 input-group">
				<label for="submit_mult" class="col-lg"></label>
					<select name="submit_mult" class="form-control">
						<option value="">Select action to perform with checked...</option>
						<option value="remove_articles">Remove</option>
					</select>
				</label>
				<span class="input-group-btn">
				<input type="submit" class="btn btn-primary" value="OK">
				</span>
			</div>
		</div>
	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</form>
<?php }} ?>
