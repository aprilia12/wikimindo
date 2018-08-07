<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:21:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109452625b69104ba010c7-63619713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd971ea23acca8fa227baf864b10693f6a4dc014' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki.tpl',
      1 => 1418749346,
      2 => 'file',
    ),
    'a61af2ede6b97f0a307dfee6a2a22d42d3cb957f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\social\\layout_view.tpl',
      1 => 1513207682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109452625b69104ba010c7-63619713',
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
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69104baa51e8_09193818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69104baa51e8_09193818')) {function content_5b69104baa51e8_09193818($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_module')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.module.php';
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

		<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">

			<div class="row row-middle" id="row-middle">
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
					<div class="col-md-6 text-right side-col-toggle">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
							<?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
							<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

						<?php }?>
					</div>
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

<?php if ($_SESSION['fullscreen']!='y') {?>
		<footer class="footer main-footer" id="footer">
			<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
				<div class="footer_liner">
<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row'),$_smarty_tpl);?>
 <!-- div.modules -->
				</div>
			</div>
		</footer>

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar-fixed-top">
			<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#navbar-collapse-social">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_icon'];?>
"><?php }?> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['sitetitle']);?>
</a>
				</div> 

				<div class="collapse navbar-collapse" id="navbar-collapse-social">

						<ul class="nav navbar-nav navbar-right">
	<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
							<li>
								<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>logout<?php } else { ?>tiki-logout.php<?php }?>">Log out</a>
							</li>
	<?php } else { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in <span
								class="caret"></span></a>
								<ul class="dropdown-menu dropdown-login panel-body">
									<li>
										<div>
		<?php echo smarty_function_module(array('module'=>'login_box','mode'=>"module",'show_register'=>'','show_forgot'=>'','error'=>'','flip'=>'','decorations'=>"n",'nobox'=>"y",'notitle'=>"y"),$_smarty_tpl);?>

										</div>
									</li>
								</ul>
							</li>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['allowRegister']=='y') {?>
							<li>
								<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>register<?php } else { ?>tiki-register.php<?php }?>">Register</a>
							</li>
		<?php }?>
	<?php }?>
						</ul>
					<?php echo smarty_function_modulelist(array('zone'=>"topbar",'id'=>"topbar_modules_social",'style'=>"float:left"),$_smarty_tpl);?>

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
