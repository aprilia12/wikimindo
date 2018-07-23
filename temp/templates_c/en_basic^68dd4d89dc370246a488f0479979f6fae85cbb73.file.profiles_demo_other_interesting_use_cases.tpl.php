<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:02:15
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_demo_other_interesting_use_cases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2835464715b5150b7c4b3d6-81940153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68dd4d89dc370246a488f0479979f6fae85cbb73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_demo_other_interesting_use_cases.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2835464715b5150b7c4b3d6-81940153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150b7ca12e7_99828908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150b7ca12e7_99828908')) {function content_5b5150b7ca12e7_99828908($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Each of these profiles create a working instance of some features, such as wiki structures, forums, trackers and wiki pages, customized for specific purposes. <br><br>
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
					<h4>Structured Master Documents</h4>
					(<a href="tiki-admin.php?profile=Structured+Master+Documents&show_details_for=Structured+Master+Documents&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile will get you started with Wiki Structures, containing multiple wiki pages with a hierarchical order, like master documents from office suites, and more.
					<br/>
					<a href="https://doc.tiki.org/Structures" target="tikihelp" class="tikihelp" title="Structured Master Documents:
						More details:
						<ul>
							<li>Many pages are pre-created to let you easily set up several wiki structures</li>
							<li>A common navigation menu is created and shown at the top of pages in the structure</li>
							<li>You can easily print (export) them all together in a single html</li>
							<li>Permissions or Monitoring can be applied in bulk to the whole structure or substructures</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display588" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_structured_master_documents.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="mini text-center">
								<div class="thumbcaption text-center">Click to expand</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Consensus Forums</h4>
					(<a href="tiki-admin.php?profile=Consensus+Forums&show_details_for=Consensus+Forums&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile sets up the configuration needed to facilitate forums that help their users to seek consensus on the discussion topics held.
					<br/>
					<a href="https://doc.tiki.org/Rating#Users_ratings_in_Forums" target="tikihelp" class="tikihelp" title="Users ratings in Forums:
						More details:
						<ul>
							<li>Topics with less agreement can be easily identified from the topic list</li>
							<li>The current rating of each user to the thread topic is shown each time, so that further attention and explanations can be given where needed to help reaching a higher degree of consensus</li>
							<li>Replies can also be rated, but without affecting the topic rating average</li>
							<li>Profile instructions are translated to several languages. Therefore, some settings related to internationalization of wiki pages are enabled by the profile</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display587" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_consensus_forums.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
					<h4>Barter Market</h4>
					(<a href="tiki-admin.php?profile=Barter_Market&show_details_for=Barter_Market&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile creates three trackers with some demo data to showcase a basic setup for a barter market of linked offers and wants of goods, services and knowledge.
					<br/>
					<a href="http://profiles.tiki.org/Barter_Market" target="tikihelp" class="tikihelp" title="Barter Market:
						More details:
						<ul>
								<li>minimal number of fields in these trackers, which can be extended</li>
								<li>tracker items are categorized</li>
								<li>a few modules added, including a wiki page menu</li>
								<li>best display if using just one column (right, for instance)</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display586" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_barter_market.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Revision Approval (ISO9001)</h4>
					(<a href="tiki-admin.php?profile=Revision+Approval+%28ISO9001%29&show_details_for=Revision+Approval+%28ISO9001%29&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile sets up the configuration needed to facilitate the handling of document revision approval for quality certification systems (such as ISO9001).
					<br/>
					<a href="https://doc.tiki.org/Flagged+Revisions" target="tikihelp" class="tikihelp" title="Revision Approval (ISO9001):
						More details:
						<ul>
							<li>Additions: 1 group, 2 users, 2 wiki pages, 3 categories</li>
							<li>Revision approval is set for homepage and 'official document'</li>
							<li>Wiki Argument Variables are used in the 'official document'</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display615" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_revision_approval_iso9001.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
