<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:38:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_socialnetworks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4590975685b553fa1393087-36021120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4c03dc187f9ad4e8f796b6a4a5ac69e7c07d91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_socialnetworks.tpl',
      1 => 1504689824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4590975685b553fa1393087-36021120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553fa140c227_44277616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553fa140c227_44277616')) {function content_5b553fa140c227_44277616($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?><form class="form-horizontal" action="tiki-admin.php?page=socialnetworks" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<legend>Social network integration</legend>
			<?php echo smarty_function_preference(array('name'=>'feature_socialnetworks','visible'=>"always"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Twitter")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Twitter"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_twitter_site_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_twitter_site_image'),$_smarty_tpl);?>

			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					To use Twitter integration, you must register this site as an application at
					<a class="alert-link" href="http://twitter.com/oauth_clients/" target="_blank">http://twitter.com/oauth_clients/</a>
					and allow write access for the application.<br>
					Enter &lt;your site URL&gt;tiki-socialnetworks.php as callback URL.
				</p>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_twitter_consumer_key'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_twitter_consumer_secret'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Twitter"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Facebook")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Facebook"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_site_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_site_image'),$_smarty_tpl);?>

			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					To use Facebook integration, you must register this site as an application at
					<a class="alert-link" href="http://developers.facebook.com/setup/" target="_blank">http://developers.facebook.com/setup/</a>
					and allow extended access for the application.<br>
					Enter &lt;your site URL&gt;tiki-socialnetworks.php?request_facebook as Site URL and &lt;your site&gt; as Site Domain.
				</p>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_application_id'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_application_secr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_autocreateuser'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="socialnetworks_facebook_autocreateuser_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_firstloginpopup'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_create_user_trackeritem'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_names'),$_smarty_tpl);?>

				</div>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					The following preferences affect what permissions the user is asked to allow Tiki to do by Facebook when authorizing it.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_publish_stream'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_manage_events'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_manage_pages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_facebook_sms'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Facebook"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"bit.ly")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"bit.ly"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					There is no need to set up a site-wide bit.ly account; every user can have his or her own, but this allows for site-wide statistics<br>
					Go to <a class="alert-link" href="http://bit.ly/a/sign_up">http://bit.ly/a/sign_up</a> to sign up for an account.<br>
					Go to <a class="alert-link" href="http://bit.ly/a/your_api_key">http://bit.ly/a/your_api_key</a> to retrieve the API key.
				</p>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_bitly_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_bitly_key'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_bitly_sitewide'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"bit.ly"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"LinkedIn")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"LinkedIn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p>
			To use LinkedIn integration, you must register this site as an application at
			<a class="alert-link" href="https://www.linkedin.com/developer/apps" target="_blank">https://www.linkedin.com/developer/apps</a>
			and allow necessary permissions for the application.<br>
			Enter &lt;your site URL&gt;tiki-socialnetworks_linkedin.php as Authorized OAuth Redirect URLs.
		</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<div class="adminoptionbox">
			<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_client_id'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_client_secr'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_login'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_autocreateuser'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="socialnetworks_linkedin_autocreateuser_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_create_user_trackeritem'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'socialnetworks_linkedin_names'),$_smarty_tpl);?>

			</div>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"LinkedIn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
