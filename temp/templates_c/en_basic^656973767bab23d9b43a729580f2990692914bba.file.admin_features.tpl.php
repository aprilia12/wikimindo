<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:55:24
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4340842915b69506cf33ad2-28615408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656973767bab23d9b43a729580f2990692914bba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_features.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4340842915b69506cf33ad2-28615408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isMultiLanguage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69506d0669f6_80083600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69506d0669f6_80083600')) {function content_5b69506d0669f6_80083600($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Set up the main Tiki features. The wiki and file gallery features are always enabled.</br></br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"admin_features",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Main Tiki features</legend>
			
			
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_blogs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_articles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_polls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sheet'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_calendar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_newsletters'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_banners'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_freetags'),$_smarty_tpl);?>

			</div>
			<br>
			<em>Tiki has many more features.
			See also <a href="http://doc.tiki.org/Global+Features" target="_blank">Global Features @ doc.tiki.org</a></em>
		</fieldset>
		<fieldset>
			<legend>Watches</legend>
			<?php echo smarty_function_icon(array('name'=>"envelope-o",'size'=>2,'iclass'=>"pull-right"),$_smarty_tpl);?>

			Enable email notifications to users when changes in the content of specific items (pages, posts, trackers, etc.) are made.
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['isMultiLanguage']->value==true) {?>
					<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_user_watches_languages'),$_smarty_tpl);?>

				<?php }?>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
