<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:02:01
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\profiles_demo_more_advanced_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4937786445b5150a90ebd02-87712430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ef00f217310e1753c977e6e0d1dca7adde7d59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\profiles_demo_more_advanced_confs.tpl',
      1 => 1501950002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4937786445b5150a90ebd02-87712430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5150a9145a96_38375455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5150a9145a96_38375455')) {function content_5b5150a9145a96_38375455($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Check out these more advanced configurations that demonstrate some other Tiki Features that you might be interested in for your site. </br></br>
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

	<div class="media">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>Shopping Cart</h4>
					(<a href="tiki-admin.php?profile=Shopping_Cart&show_details_for=Shopping_Cart&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile provides a Shopping Cart and the corresponding basic payment system.
					It currently uses the PayPal shopping cart rather than the built in Tiki.
					<br/>
					<a href="https://doc.tiki.org/Shopping+Cart" target="tikihelp" class="tikihelp" title="Shopping Cart:
						It creates:
						<ul>
							<li>A tracker for products including price, weight, image and stock quantity</li>
							<li>Some sample items which are open, pending and closed items, with different permissions to view or edit them for different groups of users</li>
							<li>A small category subtree to classify products</li>
							<li>Wiki pages to display the available products list, one product details page and a search form</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display544" class="thumbnail internal" data-box="box" title="Click to expand">
							<img src="img/profiles/profile_thumb_shopping_cart.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Easy GeoBlog</h4>
					(<a href="tiki-admin.php?profile=Easy+GeoBlog&show_details_for=Easy+GeoBlog&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile demonstrates the geolocation of Blog posts, in conjunction with other associated features
					<br/>
					<a href="https://doc.tiki.org/Geolocation" target="tikihelp" class="tikihelp" title="Easy GeoBlog:
						More details:
						<ul>
							<li>Single map with all geolocated blog posts</li>
							<li>Different home page once the user logs in</li>
							<li>Random header image from files included in a file gallery</li>
							<li>WYSIWYG Editor (compatible mode with wiki syntax)</li>
							<li>Wiki, Search, Menu & Tags</li>
							<li>Comments moderation & Banning (for anonymous comments to your site)</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display512" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_easy_geoblog.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
							<h4>Profile Conditional_Display_in_Forms</h4>
							(<a href="tiki-admin.php?profile=Conditional_Display_in_Forms_14&show_details_for=Conditional_Display_in_Forms_14&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
							<br>
							This profile demonstrates the setup to conditionally hide or display some fields in a form.
					<br/>
					<a href="https://doc.tiki.org/PluginJQ" target="tikihelp" class="tikihelp" title="Conditional_Display_in_Forms:
							Main features used:
							<ul>
								<li>Trackers</li>
								<li>Plugin JQ (jQuery)</li>
								<li>Plugin TrackerIf</li>
								<br/>
							</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display988" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_conditional_display_in_forms.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Profile Execute_on_list</h4>
					(<a href="tiki-admin.php?profile=Execute+on+list&show_details_for=Execute+on+list&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					This profile demonstrates how to perform actions on several items from a list using Plugin ListExecute.
					<br/>
					<a href="https://doc.tiki.org/PluginListExecute" target="tikihelp" class="tikihelp" title="Execute on list:
							Main features used:
							<ul>
								<li>Trackers</li>
								<li>Plugin ListExecute</li>
								<br/>
							</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display1228" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_execute_on_list.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
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
