<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:27
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11552024055b6910376765b1-30220313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd971ea23acca8fa227baf864b10693f6a4dc014' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki.tpl',
      1 => 1418749346,
      2 => 'file',
    ),
    'bf6b7e5565f30cd8c0785824c9987a2e8afacfce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\fixed_top_modules\\layout_view.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11552024055b6910376765b1-30220313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
    'icon_name' => 0,
    'module_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6910377129e3_74702008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6910377129e3_74702008')) {function content_5b6910377129e3_74702008($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array('class'=>"navbar-padding"),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<div class="middle_outer" id="middle_outer">
<?php if ($_SESSION['fullscreen']!='y') {?>
	<div class="fixed-topbar"></div>
<?php }?>
	<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?> clearfix middle" id="middle">
<?php if ($_SESSION['fullscreen']!='y') {?>
		<div class="topbar_wrapper">
			<div class="topbar row" id="topbar">
				<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

			</div>
		</div>
<?php }?>

		<div class="row" id="row-middle">
			<?php if ((zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n')&&(zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n')) {?>
				<div class="col-md-12 col1" id="col1">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

					<?php }?>
					<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

					
					
	<!-- Legacy template, no support for title block -->

					
					
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

					<?php }?>
				</div>
			<?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
				<div class="col-md-12 text-right side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
				<div class="col-md-9 col1" id="col1">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

					<?php }?>
					<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

					
					
	<!-- Legacy template, no support for title block -->

					
					
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<div class="col-md-3" id="col3">
					<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

				</div>
			<?php } elseif (zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
				<div class="col-md-12 text-left side-col-toggle">
					<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
				<div class="col-md-9 col-md-push-3 col1" id="col1">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

					<?php }?>
					<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

					
					
	<!-- Legacy template, no support for title block -->

					
					
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<div class="col-md-3 col-md-pull-9" id="col2">
					<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

				</div>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
					<div class="col-md-6 text-left side-col-toggle">
						<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
						<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
					<div class="col-md-6 text-right side-col-toggle">
						<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
						<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

					</div>
				<?php }?>
				<div class="col-md-8 col-md-push-2 col1" id="col1">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

					<?php }?>
					<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

					
					
	<!-- Legacy template, no support for title block -->

					
					
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
						<?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<div class="col-md-2 col-md-pull-8" id="col2">
					<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

				</div>
				<div class="col-md-2" id="col3">
					<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

				</div>
			<?php }?>
		</div>
	</div>
</div>

<?php if ($_SESSION['fullscreen']!='y') {?>
	<footer class="footer" id="footer">
		<div class="footer_liner">
			<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
				<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

			</div>
		</div>
	</footer>
<?php }?>

<?php if ($_SESSION['fullscreen']!='y') {?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar-fixed-top">
	<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
		<div class="navbar-header">
			<?php if ($_smarty_tpl->tpl_vars['module_params']->value['navbar_toggle']!='n') {?>
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#navbar-collapse-social-modules">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<?php }?>
			<a class="navbar-brand" href="./"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon'];?>
"><?php }?> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['sitetitle']);?>
</a>
		</div>
		<div class="collapse navbar-collapse fixed-topbar" id="navbar-collapse-social-modules">
			<?php echo smarty_function_modulelist(array('zone'=>"top",'nobox'=>"y",'navbar'=>"y",'menuclass'=>"navbar-inverse collapse navbar-collapse noclearfix",'class'=>"top_modules modules row context modules noclearfix"),$_smarty_tpl);?>

		</div>
	</div>
</nav>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		$('.tooltips').tooltip({
			'container': 'body'
		});
	});
<?php echo '</script'; ?>
>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
