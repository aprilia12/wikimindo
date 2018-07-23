<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:44:42
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2480971455b513e8a2232a2-17285512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fcb27332621fc2069e38405a9de7195ebb99647' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\footer.tpl',
      1 => 1505284664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2480971455b513e8a2232a2-17285512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_fill_action' => 0,
    'module_pref_errors' => 0,
    'pref_error' => 0,
    'display' => 0,
    'phpErrors' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'err' => 0,
    'headerlib' => 0,
    'print_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513e8a255f27_98936592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513e8a255f27_98936592')) {function content_5b513e8a255f27_98936592($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_listfilter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.listfilter.php';
if (!is_callable('smarty_function_debugger')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.debugger.php';
if (!is_callable('smarty_block_wikiplugin')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_function_interactivetranslation')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.interactivetranslation.php';
?>

<div id="bootstrap-modal" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
		</div>
	</div>
</div>
<div id="bootstrap-modal-2" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</div>
	</div>
</div>
<div id="bootstrap-modal-3" class="modal fade footer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</div>
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['force_fill_action']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("tiki-tracker_force_fill.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_pref_errors']->value)===null||$tmp==='' ? null : $tmp)) {?>
	<div class="container<?php if (isset($_SESSION['fullscreen'])&&$_SESSION['fullscreen']=='y') {?>-fluid<?php }?> modules">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Module errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Module errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			The following modules could not be loaded
			<form method="post" action="tiki-admin.php">
				<?php  $_smarty_tpl->tpl_vars['pref_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pref_error']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_pref_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pref_error']->key => $_smarty_tpl->tpl_vars['pref_error']->value) {
$_smarty_tpl->tpl_vars['pref_error']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['pref_error']->key;
?>
					<p><?php echo $_smarty_tpl->tpl_vars['pref_error']->value['mod_name'];?>
:</p>
					<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref_error']->value['pref_name']),$_smarty_tpl);?>

				<?php } ?>
				<div class="submit">
					<input type="submit" class="btn btn-default" value="Change"/>
				</div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Module errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
<?php }?>
<?php if ((!isset($_smarty_tpl->tpl_vars['display']->value)||$_smarty_tpl->tpl_vars['display']->value=='')) {?>
	<?php if (count($_smarty_tpl->tpl_vars['phpErrors']->value)) {?>
		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||$_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']=='n') {?>
	<div class="container<?php if (isset($_SESSION['fullscreen'])&&$_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
		<?php echo smarty_function_button(array('_ajax'=>"n",'_id'=>"show-errors-button",'_onclick'=>"flip('errors');return false;",'_text'=>"Show php error messages"),$_smarty_tpl);?>

		<div id="errors" class="alert alert-warning" style="display:<?php if ((isset($_SESSION['tiki_cookie_jar']['show_errors'])&&$_SESSION['tiki_cookie_jar']['show_errors']=='y')||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>block<?php } else { ?>none<?php }?>;">
			&nbsp;<?php echo smarty_function_listfilter(array('selectors'=>'#errors>div.rbox-data'),$_smarty_tpl);?>

			<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phpErrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['err']->value;?>

			<?php } ?>
		</div>
	</div>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y') {?>
		
		<?php echo smarty_function_debugger(array(),$_smarty_tpl);?>

	<?php }?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'])&&$_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin']=='y') {?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-socialnetworks_firstlogin_launcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account']) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account'])); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>'googleanalytics','account'=>$_smarty_tpl->tpl_vars['prefs']->value['site_google_analytics_account']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php echo smarty_function_interactivetranslation(array(),$_smarty_tpl);?>

<!-- Put JS at the end -->
<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='n'&&$_smarty_tpl->tpl_vars['prefs']->value['disableJavascript']=='n'&&strpos($_SERVER['PHP_SELF'],'tiki-install.php')===false) {?>
<?php echo '<script'; ?>
 type="text/javascript">
<!--//--><![CDATA[//><!--
if (confirm("A problem occurred while detecting JavaScript on this page, click ok to retry.")) {
	document.cookie = "javascript_enabled_detect=";
	location = location.href;
}
//--><!]]>
<?php echo '</script'; ?>
>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_endbody_code']) {?>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['feature_endbody_code'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code']) {?>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['site_piwik_code'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_scheduler']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['webcron_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['webcron_type']!='url') {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(window).on('load', function () {
			function cron() {
				$.get("cron.php?token=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['webcron_token'],'url');?>
");
			}
			setTimeout(cron, 500);
			setInterval(cron, 60000);
		});
	<?php echo '</script'; ?>
>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['print_page']->value)&&$_smarty_tpl->tpl_vars['print_page']->value=="y") {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			print();
		});
	<?php echo '</script'; ?>
>
<?php }?>
<?php }} ?>
