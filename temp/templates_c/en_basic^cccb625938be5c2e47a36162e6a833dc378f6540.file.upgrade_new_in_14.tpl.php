<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 10:47:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\upgrade_new_in_14.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6329084835b583924116174-37511015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cccb625938be5c2e47a36162e6a833dc378f6540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\upgrade_new_in_14.tpl',
      1 => 1470388416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6329084835b583924116174-37511015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addonprefs' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b583924193192_17027308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b583924193192_17027308')) {function content_5b583924193192_17027308($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
		<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Main new features and settings in Tiki 14.
	<a href="http://doc.tiki.org/Tiki14" target="tikihelp" class="tikihelp" title="Tiki14:
			Tiki14 is a standard non-LTS version.
			It will be supported until 15.1 is released.
			The requirements are the same as in the previous version (IE9, PHP 5.5).
			Minor changes have happened, compared to post-LTS versions such as Tiki13.
			<br/><br/>
			Click to read more
		">
		<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

	</a>
	<br/><br/><br/>
	<div class="media-body">
		<fieldset class="table clearfix featurelist">
			<legend>New modules</legend>
			A new module called <strong>Module zone</strong> was added
			<a href="http://doc.tiki.org/Module+zone" target="tikihelp" class="tikihelp" title="Module zone:
				New module meant to provide a horizontal 'navigation bar' for the website.
				<br/><br/>
				Click to read more
			">
				<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

			</a>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Tiki Addons</legend>
			Addons allow a way for developers to add an even broader range of functionality
			<a href="http://doc.tiki.org/Addons" target="tikihelp" class="tikihelp" title="Addons:
				Tiki is already one of the most feature-rich social business/web content management platforms that exist today, where hundreds of developers have contributed directly to its codebase.
				<br/><br/>
				Nevertheless, in Tiki 14, the Tiki Addons feature was added to allow a way for developers to add an even broader range of functionality that can be used with Tiki.
				<br/><br/>
				Click to read more
			">
				<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

			</a>
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
		<fieldset class="table clearfix featurelist">
			<legend>Look & Feel options</legend>
			<?php echo smarty_function_preference(array('name'=>'theme_iconset'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Other new features</legend>
				<?php echo smarty_function_preference(array('name'=>'tracker_tabular_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mustread_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="mustread_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'mustread_tracker'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'federated_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="federated_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'federated_elastic_url'),$_smarty_tpl);?>

				</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend>Improved and extended features</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>

		</fieldset>
		<i>See the full list of changes.</i>
		<a href="http://doc.tiki.org/Tiki14" target="tikihelp" class="tikihelp" title="Tiki14:
			Click to read more
		">
			<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

		</a>
	</div>
</div>
<?php }} ?>
