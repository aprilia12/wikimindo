<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:13:17
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19883360515b51999d48ba68-66150787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d49cc9195bd9878e1f615773d42b80b0297f330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_forums.tpl',
      1 => 1518366040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19883360515b51999d48ba68-66150787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51999d4d9c74_18875709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51999d4d9c74_18875709')) {function content_5b51999d4d9c74_18875709($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<form class="form-horizontal" method="post" action="tiki-admin.php?page=forums">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md clearfix">
		<a role="button" class="btn btn-link tips" href="tiki-admin_forums.php" title=":Forums listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Forums
		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_forums")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums','visible'=>"always"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_image_file_gallery'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Features
				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forum_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_parse'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_forum_parse_childcontainer">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wysiwyg']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_default']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']!='y') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							WYSIWYG is enabled but needs to be in "wiki syntax" mode to work correctly in forums
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php echo smarty_function_preference(array('name'=>'forum_strip_wiki_syntax_outgoing'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_forum_topics_archiving'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_quickjump'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_replyempty'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_allow_flat_forum_quotes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_reply_notitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_comments_no_title_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_reply_forcetitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_allow_thread_titles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_quote_prevent_nesting'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_inbound_mail_ignores_perms'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_inbound_mail_parse_html'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_match_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_moderator_notification'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_moderator_email_approve'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Threads</legend>
				<?php echo smarty_function_preference(array('name'=>'forum_thread_defaults_by_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="forum_thread_user_settings_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings_keep'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings_threshold'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'forum_comments_per_page'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_style'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_sort_mode'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_forumthread'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Searches</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums_name_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_content_search'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_forum_content_search_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_tiki_search'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_search'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_forum_post_index'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Forum Listing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Forum Listing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'forums_ordering'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_topics'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_posts'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_ppd'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_lastpost'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_visits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_desc'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="forum_list_desc_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'forum_list_description_len'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'forum_category_selector_in_list'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="forum_category_selector_in_list_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'forum_available_categories'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Forum Listing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
