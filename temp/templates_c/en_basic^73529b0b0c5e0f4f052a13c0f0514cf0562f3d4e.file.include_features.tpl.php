<?php /* Smarty version Smarty-3.1.21, created on 2018-08-13 09:12:14
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19453705265b712f4eb1b853-73939554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73529b0b0c5e0f4f052a13c0f0514cf0562f3d4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_features.tpl',
      1 => 1519129194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19453705265b712f4eb1b853-73939554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'addonprefs' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b712f4ebbbaf8_26404454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b712f4ebbbaf8_26404454')) {function content_5b712f4ebbbaf8_26404454($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Please see the <a class='alert-link' target='tikihelp' href='http://doc.tiki.org/Features'>evaluation of each feature</a> on Tiki's developer site.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="admin form-horizontal" id="features" name="features" action="tiki-admin.php?page=features" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_features")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Global features",'key'=>'global')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<fieldset>
				<legend>Main features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_file_galleries'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_blogs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_articles'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forums'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_calendar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_search'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Secondary features</legend>

				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_freetags'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_polls'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_quizzes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_surveys'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_newsletters'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_shoutbox'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_minichat'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_live_support'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Administrative features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_actionlog'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_scheduler'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<fieldset>
							<legend>Watches</legend>
							<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

							<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
								<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

							</div>
							<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_user_watches_languages'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_banners'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contribution'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_copyright'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_comm'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_dynamic_content'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sefurl'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_html_pages'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_htmlfeed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Additional features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_sheet'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_directory'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_draw_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_draw_separate_base_image'),$_smarty_tpl);?>

						<div class="adminoptionboxchild" id="feature_draw_separate_base_image_childcontainer">
							<?php echo smarty_function_preference(array('name'=>'feature_draw_in_userfiles'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="adminoptionboxchild">
						<fieldset>
							<legend>Payment and Accounting</legend>
							<?php echo smarty_function_preference(array('name'=>'feature_credits'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_accounting'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_feature'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_invoice'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<div class="adminoptionboxchild">
						<fieldset>
							<legend>Mail and Sharing</legend>
							<?php echo smarty_function_preference(array('name'=>'feature_socialnetworks'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_tell_a_friend'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_share'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_mailin'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_slideshow'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_slideshow_pdfexport'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_time_sheet'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_faqs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_galleries'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_futurelinkprotocol'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_reports'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Interaction with online services or other software</legend>
				<div class="admin clearfix featurelist">
					<?php echo smarty_function_preference(array('name'=>'connect_feature'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_kaltura'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zotero_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="zotero_enabled_childcontainer">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['zotero_client_key']&&$_smarty_tpl->tpl_vars['prefs']->value['zotero_client_secret']&&$_smarty_tpl->tpl_vars['prefs']->value['zotero_group_id']) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>"Configuration completed")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a class="timeout" href="<?php echo smarty_function_service(array('controller'=>'oauth','action'=>'request','provider'=>'zotero'),$_smarty_tpl);?>
">Authenticate with Zotero</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php echo smarty_function_preference(array('name'=>'zotero_client_key'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_client_secret'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_group_id'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_style'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Interface",'key'=>'interface')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table clearfix featurelist">
				<legend> Ajax </legend>
				<?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_ajax_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset class="table clearfix featurelist">
				<legend> jQuery plugins and add-ons </legend>
				<?php echo smarty_function_preference(array('name'=>'feature_jquery_autocomplete'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_media'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_reflection'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_superfish'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tooltips'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tagcanvas'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_validation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_zoom'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_ui_chosen'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="jquery_ui_chosen_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'jquery_ui_chosen_sortable'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'jquery_fitvidjs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<fieldset>
						<legend>Experimental</legend>
						<?php echo smarty_function_preference(array('name'=>'feature_jquery_carousel'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>

					</fieldset>
				</div>
			</fieldset>

			<fieldset class="table clearfix featurelist">
				<legend> Mobile </legend>
					<?php echo smarty_function_preference(array('name'=>'mobile_feature'),$_smarty_tpl);?>


					<div class="adminoptionboxchild" id="mobile_feature_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'mobile_perspectives'),$_smarty_tpl);?>

					</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Programmer",'key'=>'programmer')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_integrator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_xmlrpc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_debug_console'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_tikitests'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'javascript_assume_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webservices'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_dummy'),$_smarty_tpl);?>

			</div>

			<div class="admin clearfix featurelist">
				<fieldset>
					<legend>Logging and Reporting</legend>
					<div class="adminoptionbox">
						<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

						<div class="adminoptionboxchild">
							<?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

						</div>
					</div>

					<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="log_sql_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<div class="table">
				<fieldset>
					<legend>Custom Code</legend>
					<?php echo smarty_function_preference(array('name'=>"header_custom_js"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'smarty_security'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Addons",'key'=>'addons')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Addons",'key'=>'addons'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate Addons</legend>
				<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addonprefs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
?>
					<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['addon']->value);
$_tmp1=ob_get_clean();?><?php echo smarty_function_preference(array('name'=>$_tmp1),$_smarty_tpl);?>

				<?php } ?>
			</fieldset>
			<fieldset>
				<legend>Addon Groups API</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_community_send_mail_join'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_send_mail_leave'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Addons",'key'=>'addons'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
