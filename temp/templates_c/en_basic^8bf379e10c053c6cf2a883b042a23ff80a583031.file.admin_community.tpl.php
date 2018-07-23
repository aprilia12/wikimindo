<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 03:59:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4744244035b55366c5791a9-03712060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf379e10c053c6cf2a883b042a23ff80a583031' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_community.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4744244035b55366c5791a9-03712060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepageUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55366c5fa046_28915309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55366c5fa046_28915309')) {function content_5b55366c5fa046_28915309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Configure general user & community features and settings related to sharing and social networks.
	</br></br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"user",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>User Features</legend>
			<div class="row">
				<div class="col-lg-6">
					<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

				</div>
				<div class="col-lg-6">
					<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

				</div>
			</div>
			<br>
			<em>
				Add a <b>User and Registration tracker</b>
				<a href="http://doc.tiki.org/User+Tracker" target="tikihelp" class="tikihelp" title="User and Registration tracker: You can use trackers to collect additional information for users during registration or even later once they are registered users.
					Some uses of this type of tracker could be
					<ul>
						<li>To collect user information (such as mailing address or phone number)</li>
						<li>To require the user to acknowledge a user agreement</li>
						<li>To prevent spammer registration, by asking new users to provide a reason why they want to join (the prompt should tell the user that his answer should indicate that he or she clearly understands what the site is about).</li>
					</ul>
					The profile will enable the feature 'Trackers' for you and a few other settings required. Once the profile is applied, you will be provided with instructions about further steps that you need to perform manually."
				>
					<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

				</a> :
				<a href="tiki-admin.php?profile=User_Trackers&show_details_for=User_Trackers&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a> (new window)
			</em>
			<br/><br/>
			<em>To set up the <strong>User Watches</strong> and their associated settings, visit the page to  <a href="tiki-wizard_admin.php?&stepNr=15&url=<?php echo $_smarty_tpl->tpl_vars['homepageUrl']->value;?>
">Set up Main features</a></em>
			</br></br>
		</fieldset>
		<?php echo smarty_function_icon(array('name'=>"users",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Community General Settings</legend>
			<div class="row">
				<div class="col-lg-6">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_community_mouseover_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_name'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_gender'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_picture'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_score'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_country'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_email'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_lastlogin'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_distance'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contact'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_contact_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'contact_anon'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'contact_priority_onoff'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="col-lg-6">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

					<div class="adminoptionbox preference clearfix all"></div>
					<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="user_show_realnames_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'user_selector_realnames_messu'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'user_selector_realnames_tracker'),$_smarty_tpl);?>

					</div>
				</div>
				<br>
				<em>See also Community <a href="tiki-admin.php?page=community&amp;cookietab=1" target="_blank">admin panel</a> &amp; <a href="https://doc.tiki.org/Community" target="_blank">in doc.tiki.org</a></em>
			</div>
		</fieldset>
		<?php echo smarty_function_icon(array('name'=>"admin_share",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Sharing & Networking</legend>
			<div class="row">
				<div class="col-lg-3">
					<?php echo smarty_function_preference(array('name'=>'feature_share'),$_smarty_tpl);?>

					<br>
					<em>See also Share <a href="tiki-admin.php?page=share" target="_blank">admin panel</a> &amp; <a href="https://doc.tiki.org/Share" target="_blank">in doc.tiki.org</a></em>.
				</div>
				<div class="col-lg-6">
					<?php echo smarty_function_preference(array('name'=>'feature_friends'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_friends_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'social_network_type'),$_smarty_tpl);?>

					</div>
					<br>
					<em>See also "Community <a href="tiki-admin.php?page=community&cookietab=2" target="_blank">admin panel</a> > Social Network > Friendship and Followers" &amp; <a href="https://doc.tiki.org/Friendship+Network" target="_blank">in doc.tiki.org</a></em>.
				</div>
				<div class="col-lg-3">
					<?php echo smarty_function_preference(array('name'=>'feature_socialnetworks'),$_smarty_tpl);?>

					<br>
					<em>See also Social networks <a href="tiki-admin.php?page=socialnetworks&amp;cookietab=1" target="_blank">admin panel</a> &amp; <a href="https://doc.tiki.org/Social+Networks" target="_blank">in doc.tiki.org</a></em>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
