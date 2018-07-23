<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:07:58
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_freetags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8765565875b55387e879f63-91336905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad5fd23949fb801561c7966f92a6713e0ee53ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_freetags.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8765565875b55387e879f63-91336905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55387e8eb404_86143489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55387e8eb404_86143489')) {function content_5b55387e8eb404_86143489($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?><form class="form-horizontal" action="tiki-admin.php?page=freetags" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar margin-bottom-md">
		<a role="link" class="btn btn-link tips" href="tiki-browse_freetags.php" title="Tags listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Browse Tags
		</a>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['freetags_multilingual']=='y') {?>
			<a role="button" class="btn btn-link tips" href="tiki-freetag_translate.php" title=":Translate tags">
				<?php echo smarty_function_icon(array('name'=>"language"),$_smarty_tpl);?>
 Translate Tags
			</a>
		<?php }?>
		<button role="button" type="submit" class="btn btn-default timeout" name="cleanup">
			<?php echo smarty_function_icon(array('name'=>"trash"),$_smarty_tpl);?>
 Cleanup unused tags
		</button>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_freetags','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="table">
		<legend>Plugins</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_freetagged'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_addfreetag'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Tags<?php echo smarty_function_help(array('url'=>"Tags"),$_smarty_tpl);?>
</legend>
		<?php echo smarty_function_preference(array('name'=>'freetags_browse_show_cloud'),$_smarty_tpl);?>


		<div class="adminoptionboxchild" id="freetags_browse_show_cloud_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'freetags_browse_amount_tags_in_cloud'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'freetags_show_middle'),$_smarty_tpl);?>


		<div class="adminoptionbox">
			<label for="freetags_cloud_colors" class="control-label col-md-4">Random tag cloud colors:</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="freetags_cloud_colors" id="freetags_cloud_colors" value="<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['freetags_cloud_colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['color']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['color']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
 $_smarty_tpl->tpl_vars['color']->iteration++;
 $_smarty_tpl->tpl_vars['color']->last = $_smarty_tpl->tpl_vars['color']->iteration === $_smarty_tpl->tpl_vars['color']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['colors']['last'] = $_smarty_tpl->tpl_vars['color']->last;
echo $_smarty_tpl->tpl_vars['color']->value;
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['colors']['last']) {?>,<?php }
} ?>" />
				<span class="help-block">Separate colors with a comma (,)</span>
			</div>
		</div>

		<?php echo smarty_function_preference(array('name'=>'freetags_browse_amount_tags_suggestion'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'freetags_normalized_valid_chars'),$_smarty_tpl);?>

		<div class="clearfix">
			<span class="adminoptionbox help-block col-md-8 col-md-push-4">
				<a class="button" href='#Browsing' onclick="$('input[name=freetags_normalized_valid_chars]').val('a-zA-Z0-9');return false;">
					Alphanumeric ASCII characters only
				</a>
				(No accents or special characters.)
				<a class="button" href='#Browsing' onclick="$('input[name=freetags_normalized_valid_chars]').val('');return false;">
					Accept all characters
				</a>
			</span>
		</div>
		<?php echo smarty_function_preference(array('name'=>'freetags_lowercase_only'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'freetags_multilingual'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'morelikethis_algorithm'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'morelikethis_basic_mincommon'),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="admin">
		<legend>Tag search page</legend>
		<?php echo smarty_function_preference(array('name'=>'freetags_sort_mode'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'freetags_preload_random_search'),$_smarty_tpl);?>

		<span class="help-block col-md-8 col-md-push-4">When arriving on <a href="tiki-browse_freetags.php">tag search page</a>.</span>
	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
