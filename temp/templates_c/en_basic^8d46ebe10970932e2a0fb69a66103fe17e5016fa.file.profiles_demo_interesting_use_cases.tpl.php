<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:02:20
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_demo_interesting_use_cases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14204982295b5150bcd73353-79737251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d46ebe10970932e2a0fb69a66103fe17e5016fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_demo_interesting_use_cases.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14204982295b5150bcd73353-79737251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150bcdcd0f4_89735485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150bcdcd0f4_89735485')) {function content_5b5150bcdcd0f4_89735485($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Each of these profiles create a working instance of some features, such as trackers and wiki pages customized for specific purposes, for example. <br><br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a target="tikihelp" class="tikihelp" style="float:right" title="Demo Profiles:
				They are initially intended for testing environments, so that, after you have played with the feature, you don't have to deal with removing the created objects, nor with restoring the potentially changed settings in your site.
				<br/><br/>
				Once you know what they do, you can also apply them in your production site, in order to have working templates of the underlying features, that you can further adapt to your site later on."
				>
			<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

		</a>
	They are not to be initially applied in production environments since they cannot be easily reverted and changes and new objects in your site are created for real
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="media-box">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>Bug Tracker</h4>
					(<a href="tiki-admin.php?profile=Bug_Tracker_16&show_details_for=Bug_Tracker_16&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile allows you to see a tracker in action with some demo data, and a custom interface in a wiki page to add new items, as well as having them listed for you below.
					<br/>
					<a href="https://doc.tiki.org/Trackers" target="tikihelp" class="tikihelp" title="Bug Tracker:
						More details:
						<ul>
							<li>Uses PluginTracker in a wiki page to add items</li>
							<li>Create some custom feedback for message to the user after item insertion</li>
							<li>Uses PluginTrackerList to display inserted items</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display520" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_bug_tracker.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="mini text-center">
								<div class="thumbcaption text-center">Click to expand</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Timesheet</h4>
					(<a href="tiki-admin.php?profile=Time_Sheet&show_details_for=Time_Sheet&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile allows recording time spent on projects. It creates two trackers: one to hold the time spent, and the other with the project names.
					<br/>
					<a href="https://doc.tiki.org/Timesheet" target="tikihelp" class="tikihelp" title="Timesheet:
							More details:
						<ul>
							<li>Allows to track your time spent on projects</li>
							<li>Customize your project categories</li>
							<li>Add or edit your timesheet fields as desired </li>
							<li>Both trackers are linked, so that project names can be chosen when entering items to the timesheet tracker</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<a href="https://doc.tiki.org/PluginTimesheet" target="tikihelp" class="tikihelp" title="Plugin Timesheet:
						<em>See also Plugin Timesheet in doc.tiki.org</em>"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display523" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_timesheet.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
				<h4>Tracker as Calendar</h4>
				(<a href="tiki-admin.php?profile=Tracker_as_Calendar_12&show_details_for=Tracker_as_Calendar_12&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
				<br>
				This profile creates a tracker with some demo data and wiki interface that will be used to display and manage a Calendar of events in a fancy visual way.
				<br/>
				<a href="http://doc.tiki.org/PluginTrackerCalendar" target="tikihelp" class="tikihelp" title="Tracker as Calendar:
					More details:
					<ul>
						<li>Advanced use of Plugin TrackerList</li>
						<li>Working example of Plugin TrackerCalendar</li>
						<li>Drag & Drop to resize or move events</li>
						<li>Several display modes, useful for Project & Resource Management</li>
					</ul>
					Click to read more"
				>
					<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

				</a>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<a href="http://doc.tiki.org/display722" class="thumbnail internal" data-box="box" title="Click to expand">
							<img src="img/profiles/profile_thumb_tracker_as_calendar.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
						</a>
						<div class="small text-center">
							Click to expand
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h4>Voting System</h4>
				(<a href="tiki-admin.php?profile=Voting_System&show_details_for=Voting_System&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
				<br>
				This profile sets up a Voting system in which only members of a group will be able to vote. It creates a tracker, 2 groups of users, one user in each group and a custom wiki page as interface to vote.
				<br/>
				<a href="http://doc.tiki.org/E-Democracy+system" target="tikihelp" class="tikihelp" title="Voting System:
					More details:
					<ul>
						<li>Group homepage set for the voting group</li>
						<li>Only one vote per member is allowed</li>
						<li>Results shown in real time (Plugin TrackerStat)</li>
						<li>Other candidates can be voted beyond the proposed</li>
					</ul>
					Click to read more"
				>
					<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

				</a>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<a href="http://tiki.org/display522" class="thumbnail internal" data-box="box" title="Click to expand">
							<img src="img/profiles/profile_thumb_voting_system.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
						</a>
						<div class="small text-center">
							Click to expand
						</div>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
