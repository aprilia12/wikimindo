<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 10:47:03
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\upgrade_new_in_13.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629177105b5839073e2864-54653416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a5d24c6a7bc5078947cecaf85ec528d08392ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\upgrade_new_in_13.tpl',
      1 => 1427201668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629177105b5839073e2864-54653416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monitor_command' => 0,
    'jitsi_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b583907424ef4_91141925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b583907424ef4_91141925')) {function content_5b583907424ef4_91141925($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
		<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Main new features and settings in Tiki 13.
	<a href="http://doc.tiki.org/Tiki13" target="tikihelp" class="tikihelp" title="Tiki13:
			Tiki13 is a post-LTS version.
			It will be supported until 14.1 is released.
			The requirements increased (IE9, PHP 5.5).
			Major changes have happened, including moving to Bootstrap.
			<br/><br/>
			Click to read more
		">
		<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

	</a>
	<br/><br/><br/>
	<div class="media-body">
		<fieldset class="table clearfix featurelist">
			<legend>New Themes & Site layouts (based on 'Bootstrap')</legend>
			<em>The changes in this area were refactored in Tiki 14.</em>
			<em>See <a href="tiki-admin.php?page=look&amp;alt=Look+%26+Feel" target="_blank">Look & Feel admin panel</a></em>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Goal, Recognition and Rewards</legend>
			<?php echo smarty_function_preference(array('name'=>'goal_enabled'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="goal_enabled_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'goal_badge_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'goal_group_blacklist'),$_smarty_tpl);?>

			</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Notifications</legend>
			<?php echo smarty_function_preference(array('name'=>'monitor_enabled'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="monitor_enabled_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'monitor_individual_clear'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'monitor_count_refresh_interval'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'monitor_reply_email_pattern'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'monitor_digest'),$_smarty_tpl);?>

				<div class="alert alert-warning">
					<p>For the digest emails to be sent out, you will need to set-up a cron job.</p>
					<p>Adjust the command parameters for your digest frequency. Default frequency is 7 days.</p>
					<strong>Sample command:</strong>
					<code>/usr/bin/php <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['monitor_command']->value);?>
</code>
				</div>
			</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Jitsi</legend>
			<div class="form-row">
				<label for="jitsi-url">Provision URL</label>
				<input id="jitsi-url" readonly type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['jitsi_url']->value);?>
" class="form-control">
			</div>
			<?php echo smarty_function_preference(array('name'=>'suite_jitsi_provision'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'suite_jitsi_configuration'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
