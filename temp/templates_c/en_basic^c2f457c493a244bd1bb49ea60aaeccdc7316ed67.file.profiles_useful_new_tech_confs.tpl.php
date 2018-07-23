<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:03:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_useful_new_tech_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9620110215b5150e646c2f7-03063841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2f457c493a244bd1bb49ea60aaeccdc7316ed67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_useful_new_tech_confs.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9620110215b5150e646c2f7-03063841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150e64b2809_95664957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150e64b2809_95664957')) {function content_5b5150e64b2809_95664957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Check out this set of useful configurations that involve using some new technology for your site. </br></br></br>
	<div class="media-body">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>Write Together</h4>
					(<a href="tiki-admin.php?profile=Together_15&show_details_for=Together_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br/>
					This profile adds a simple wiki page on a side module (using the Module menupage), showing the button to start co-writing with TogetherJS.
					<br/>
					<a href="https://doc.tiki.org/PluginTogether" target="tikihelp" class="tikihelp" title="Write Together:
						More details:
						<ul>
							<li>Allows cowriting documents in real time</li>
							<li>Allows voice communication in real time while editing</li>
							<li>Uses the TogetherJS Mozilla widget</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://doc.tiki.org/display842" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_write_together.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="text-center">
								<div class="small">Click to expand</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Post-it Sticky Note</h4>
					(<a href="tiki-admin.php?profile=Post-it_Sticky_Note_15&show_details_for=Post-it_Sticky_Note_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile allows to display a sticky note (a "post-it") in your tiki site.
					<br/>
					<a href="http://doc.tiki.org/Custom+Code+HowTo+-+Post-It+Notes" target="tikihelp" class="tikihelp" title="Post-it Sticky Note:
						More details:
						<ul>
							<li>You can move it to another location</li>
							<li>You can customize the contents and which groups of users will see it (by default, only to Admins)</li>
							<li>It will be shown for each user of that group until manually closed.</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display515" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_post_it_sticky_note.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="text-center small">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!--	<b>Profile X</b> (<a href="tiki-admin.php?profile=Profile_X&show_details_for=Profile_X&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)<br/>
					<br>
					This profile allows to 
					<ul>
						<li>...</li>
						<li>...</li>
						<li>...</li>
						<br/><em>See also <a href="https://doc.tiki.org/Feature_X" target="_blank">Feature_X in doc.tiki.org</a></em>
					</ul>
					-->
				</div>
				<div class="col-md-6">
					<!--	<b>Profile X</b> (<a href="tiki-admin.php?profile=Profile_X&show_details_for=Profile_X&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)<br/>
					<br>
					This profile allows to 
					<ul>
						<li>...</li>
						<li>...</li>
						<li>...</li>
						<br/><em>See also <a href="https://doc.tiki.org/Feature_X" target="_blank">Feature_X in doc.tiki.org</a></em>
					</ul>
					-->
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
