<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:02:31
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_demo_common_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175407765b5150c7ec8ab1-56796935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8761f85ed9220303e2ab7d00acc5875e041f21d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_demo_common_confs.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175407765b5150c7ec8ab1-56796935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150c7f16cc8_73269301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150c7f16cc8_73269301')) {function content_5b5150c7f16cc8_73269301($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Check out some commonly used configurations in Tiki sites. </br></br></br>
	<div class="media-body">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>User & Registration Tracker</h4>
					(<a href="tiki-admin.php?profile=User_Trackers&show_details_for=User_Trackers&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile allows you to request more details in the registration process or in the User Wizard, as well as to provide more custom information to your users.
					<br/>
					<a href="https://doc.tiki.org/User+Tracker" target="tikihelp" class="tikihelp" title="User & Registration Tracker:
						It includes:
						<ul>
							<li>A long list of predefined usual fields, to choose from</li>
							<li>Some fields already prepared to display custom information from your specific site</li>
							<li>The chance to easily customize it with the power of Trackers</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display542" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_user_and_registration_tracker.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Custom Contact Form</h4>
					(<a href="tiki-admin.php?profile=Custom_Contact_Form_12x&show_details_for=Custom_Contact_Form_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile eases the task to create a custom contact form adapted to the specific case of that site.
					<br/>
					<a href="https://doc.tiki.org/Trackers" target="tikihelp" class="tikihelp" title="Custom Contact Form:
						More details:
						<ul>
							<li>Enables Trackers and sets up a few fields to create a basic 'contact us' form as a starting point</li>
							<li>New fields can be added asking questions specific for the site</li>
							<li>You decide where and when to display the link to the contact us form in your Tiki menus and pages</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display543" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_custom_contact_form.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4>Dynamic Items List</h4>
					(<a href="tiki-admin.php?profile=Dynamic_items_list_demo&show_details_for=Dynamic_items_list_demo&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile creates two linked trackers. One that allow pre-selecting the items in a drop down list based on the items in a previous drop down field. And a second tracker that holds the options displayed in the drop down fields.
					<br/>
					<a href="https://doc.tiki.org/Dynamic+items+list" target="tikihelp" class="tikihelp" title="Dynamic Items List:
						More details:
						<ul>
							<li>Useful for Geographic data (State, Country/Province, ...)</li>
							<li>Useful for Types and Subtypes</li>
							<li>Useful for Program Names and Versions</li>
							<li>Easily manage the options in the second tracker without editing the dropdown in the first tracker </li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display521" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_dynamic_items_list.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Sortable Tables</h4>
					(<a href="tiki-admin.php?profile=Sortable+Tables&show_details_for=Sortable+Tables&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br/>
					This profile creates a few examples of tables with data that can be sorted and filtered interactively in real time, using the JQuery Sortable Tables feature.
					<br/>
					<a href="https://doc.tiki.org/PluginFancyTable" target="tikihelp" class="tikihelp" title="Sortable Tables:
						More details:
						<ul>
							<li>Useful to sort and filter data in real time</li>
							<li>Same approach for FancyTable and TrackerList Plugins</li>
							<li>Sorting can be server-side or client-side based </li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display548" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_sortable_tables.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
