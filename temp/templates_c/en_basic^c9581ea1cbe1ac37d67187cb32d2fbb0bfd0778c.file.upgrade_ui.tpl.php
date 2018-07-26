<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 10:47:00
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\upgrade_ui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3956816595b58390448c829-75975263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9581ea1cbe1ac37d67187cb32d2fbb0bfd0778c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\upgrade_ui.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3956816595b58390448c829-75975263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'useElFinderAsDefault' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5839044e65c8_12549384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5839044e65c8_12549384')) {function content_5b5839044e65c8_12549384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
		<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	<?php echo smarty_function_icon(array('name'=>"desktop",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

	Some User Interface (UI) improvements which usually come disabled in new Tiki installations.
	<a href="http://doc.tiki.org/Interface" target="tikihelp" class="tikihelp" title="User Interface:
					They are proven to be useful enhancements in some production environments.
			<br/><br/>
			The ones still tagged as <em>experimental</em> <img src=img/icons/error.png> might have failed to work under some environments, but they are very likely to work as-is in your environment also, so you might like to give them a try.
		">
		<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

	</a>
	</br></br>
	<div class="media-body">
		<fieldset class="table clearfix featurelist">
			<legend> Icons and Profile Pictures </legend>
			<?php echo smarty_function_preference(array('name'=>'menus_items_icons'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend> File Galleries </legend>
			<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="fgal_elfinder_feature_childcontainer">
				<input type="checkbox" name="useElFinderAsDefault" <?php if (!isset($_smarty_tpl->tpl_vars['useElFinderAsDefault']->value)||$_smarty_tpl->tpl_vars['useElFinderAsDefault']->value==true) {?>checked='checked'<?php }?> /> Set elFinder as the default file gallery viewer.
				<div class="adminoptionboxchild">
					See also <a href="http://doc.tiki.org/elFinder" target="_blank">elFinder @ doc.tiki.org</a>
				</div>
			</div>
		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend> Text Areas </legend>
			<?php echo smarty_function_preference(array('name'=>'wiki_auto_toc'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="wiki_auto_toc_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_inline_auto_toc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_toc_pos'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_toc_offset'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_inline_editing'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="table clearfix featurelist">
			<legend> jQuery plugins and add-ons </legend>
			<?php echo smarty_function_preference(array('name'=>'feature_jquery_media'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_jquery_reflection'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_jquery_zoom'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_jquery_carousel'),$_smarty_tpl);?>
 <img src="img/icons/bug_error.png" alt="Experimental" title="Experimental">
			<?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>
 <img src="img/icons/bug_error.png" alt="Experimental" title="Experimental">
			<?php echo smarty_function_preference(array('name'=>'jquery_ui_chosen'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'jquery_fitvidjs'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
