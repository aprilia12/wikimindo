<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:01:55
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_demo_highly_specialized_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21312198135b5150a38bb366-51868598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86004a352955e50646078764db7e4c36552d9e70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_demo_highly_specialized_confs.tpl',
      1 => 1490990668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21312198135b5150a38bb366-51868598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150a3911270_74811199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150a3911270_74811199')) {function content_5b5150a3911270_74811199($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Some profiles are highly customized for very specialized use cases, and they are listed in this special category. </br></br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a target="tikihelp" class="tikihelp" style="float:right" title="Demo Profiles:
			They are initially intended for testing environments, so that, after you have played with the feature, you don't have to deal with removing the created objects, nor with restoring the potentially changed settings in your site.
			<br/><br/>
			Once you know what they do, you can also apply them in your production site, in order to have working templates of the underlying features, that you can further adapt to your site later on."
		>
			<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

		</a>
		These configuration profiles <strong>require extra software</strong> to be installed in your server to function as expected.
		See details in the instructions page shown in your site once each profile is applied.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="media-body">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>CartoGraf</h4>
					(<a href="tiki-admin.php?profile=CartoGraf_15&show_details_for=CartoGraf_15&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					CartoGraf is an interactive web-based mapping application to enhance learning in history and geography classes in high schools.
					CartoGraf is a great example of how to use profiles in a general purpose app (Tiki) to make a very specific application.
					<br/>
					<a href="https://tv.tiki.org/CartoGraf" target="tikihelp" class="tikihelp" title="CartoGraf:
						This profile is using Tiki as Framework, with these details:
						<ul>
							<li>It is mainly based on Maps, Drawings, PluginAppFrame and Trackers</li>
							<li>It uses its own Cartograf style (downloaded aside)</li>
							<li>It allows custom markers for maps (placed in a file gallery)</li>
							<li>It is used in production at http://cartograf.recitus.qc.ca (in French)</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display545" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_cartograf.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>R demo</h4> (<a href="tiki-admin.php?profile=R_demo&show_details_for=R_demo&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br/>
					This profile demonstrates common uses of R language for statistics to produce advanced and/or interactive graphs and reports in web 2.0 pages.
					<br/>
					<a href="https://doc.tiki.org/PluginR" target="tikihelp" class="tikihelp" title="R demo:
						It uses the R Project for Statistical Computing software & PluginR in Tiki (both of which are not bundled within a default Tiki installation and they need to be installed in the same server as Tiki).
						<br/><br/>
						The profile creates many demo pages, which comprise:
						<ul>
							<li>Simple R syntax in wiki pages to produce interactive charts</li>
							<li>Advanced usage to create full GUI for an R application</li>
							<li>Many other examples of nice charts and reports that you can produce with this system</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<a href="http://r.tiki.org" target="tikihelp" class="tikihelp" title="r.tiki.org site:
						<em>See also r.tiki.org live site</em>
						<br/><br/>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://r.tiki.org/tiki-download_file.php?fileId=23&display&max=800" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_r_demo.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h4>R Heatmaps</h4>
					(<a href="tiki-admin.php?profile=R_Heatmaps&show_details_for=R_Heatmaps&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br/>
					This profile adds a web interface for an R package called EasyHeatMap (link to package provided in the instructions page once the profile is applied).
					This R package allows the creation and edition of HeatMap graphics (as used in Bioinformatics).
					<br/>
					<a href="http://ueb.vhir.org/tools/Heatmaps" target="tikihelp" class="tikihelp" title="R Heatmaps:
						This profile creates:
						<ul>
							<li>A single wiki page where the whole heatmap generation can be run, to allow debugging your server installation of the required system and R packages if anything fails for you</li>
							<li>A few wiki pages to list, view and edit analysis in R to produce HeatMaps for differential expression of gene sets</li>
							<li>Example input files and default values provided as a happy path to produce your first Heatmaps</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<a href="https://doc.tiki.org/PluginR" target="tikihelp" class="tikihelp" title="Plugin R:
						<em>See also Plugin R in doc.tiki.org</em>
						<br/><br/>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display546" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_r_heatmaps.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
