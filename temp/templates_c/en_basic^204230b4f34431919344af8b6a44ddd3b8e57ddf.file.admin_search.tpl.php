<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 08:55:12
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6529456845b518750a810e7-82019394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204230b4f34431919344af8b6a44ddd3b8e57ddf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_search.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6529456845b518750a810e7-82019394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b518750b15804_74919460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b518750b15804_74919460')) {function content_5b518750b15804_74919460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	<?php echo smarty_function_icon(array('name'=>"admin_search",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

	There are two search systems in Tiki that use different search engines: <strong>Basic Search</strong> and <strong>Advanced Search</strong>.
	The Advanced Search generally provides better results, but is more demanding on the server (it creates a search index, updated either incrementally or based on a cron job configured elsewhere).
	<div class="media-body">
		<br/><br/>
		<div class="row">
			<div class="col-md-6">
				<fieldset>
					<legend>Basic Search <?php echo smarty_function_help(array('url'=>"Search"),$_smarty_tpl);?>
</legend>
					Uses MySQL full-text search.
					If enabled, the search module and search feature in the main application menu will use it by default, even if 'Advanced Search' is also enabled below.
					<?php echo smarty_function_preference(array('name'=>'feature_search_fulltext'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_search_fulltext_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_referer_highlight'),$_smarty_tpl);?>

					</div>
				</fieldset>
				<fieldset>
					<legend>Advanced Search</legend>
					Uses Unified Search Index with a specified search engine. If you have issues with Advanced Search, simply revert to Basic Search.
					Unified Search is required by a number of other features, e.g. the community friendship network
					<?php echo smarty_function_preference(array('name'=>'feature_search','visible'=>"always"),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_search_childcontainer">
						<?php echo smarty_function_preference(array('name'=>"unified_incremental_update"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_engine"),$_smarty_tpl);?>

						<div class="adminoptionboxchild unified_engine_childcontainer lucene">
							<?php echo smarty_function_preference(array('name'=>"unified_lucene_default_operator"),$_smarty_tpl);?>

						</div>
						<div class="adminoptionboxchild unified_engine_childcontainer elastic">
							<?php echo smarty_function_preference(array('name'=>"unified_elastic_url"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_elastic_index_prefix"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_elastic_index_current"),$_smarty_tpl);?>

						</div>
					</div>
				</fieldset>
			</div>
			<div class="col-md-6">
				<fieldset>
					<legend>Other settings</legend>
					<?php echo smarty_function_preference(array('name'=>'search_default_interface_language'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'search_default_where'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?><br>
						<em>Also see the Search Indexing tab here: <a class='rbox-link' target='tikihelp' href='tiki-admin.php?page=fgal'>File Gallery admin panel</a></em>
					<?php }?>
				</fieldset>
			</div>
		</div>
		<em>See also <a href="tiki-admin.php?page=search&amp;cookietab=1" target="_blank">Search admin panel</a> & <a href="https://doc.tiki.org/Search" target="_blank">Search in doc.tiki.org</a></em>
	</div>
</div>
<?php }} ?>
