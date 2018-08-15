<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 10:12:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\database-connection-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16440887415b73e08146e1f8-72257669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d38d1f36f8ea1735ea7e77eeb1e18b0b8866778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\database-connection-error.tpl',
      1 => 1489840138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16440887415b73e08146e1f8-72257669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'msg' => 0,
    'requires_update' => 0,
    'tikidomain' => 0,
    'base_query' => 0,
    'values' => 0,
    'value' => 0,
    'built_query' => 0,
    'stacktrace' => 0,
    'where' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b73e081512312_85739435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b73e081512312_85739435')) {function content_5b73e081512312_85739435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>System error.</title>
	<link rel="stylesheet" href="vendor_bundled/vendor/twitter/bootstrap/dist/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="vendor_bundled/vendor/fortawesome/font-awesome/css/font-awesome.min.css" type="text/css" />

	<style type="text/css" media="screen">
		html {
			background-color: #fff;
		}
		#centercolumn {
			padding: 4em 10em;
		}
	</style>
</head>
<body class="tiki_wiki db_error">
	<div id="fixedwidth"> 
		<div id="main">
		<div id="siteheader" style="margin: 1em auto; max-width: 800px">
				<div class="sitelogo">
					<img style="border: medium none ;" alt="Site Logo" src="img/tiki/Tiki_WCG.png">
				</div>
		</div>

		<div id="tiki-main">
			<div id="tiki-mid">
				<div style="margin:10px 30px;">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['error_reporting_level']&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']!='y')) {?>
						<h1>System error.</h1>
						<div class="text-left">
							<p>The following error message was returned:</p>
							<strong>
								<pre><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value));?>
</pre>
							</strong>

							<?php if ($_smarty_tpl->tpl_vars['requires_update']->value) {?>
								<p>
									Database is not currently up to date! Visit <a href="tiki-install.php">Tiki Installer</a> to resolve this issue.
									If you have shell (SSH) access, you can also use the following, on the command line, from the root of your Tiki installation:
									<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> database:update</kbd>
								</p>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['base_query']->value) {?>
								<p><strong>The query was:</strong></p>
								<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_query']->value);?>
</strong>
							<?php }?>
							<?php if (count($_smarty_tpl->tpl_vars['values']->value)>0) {?>
								<p><strong>Values:</strong></p>
								<ol>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
										<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
</li>
									<?php } ?>
								</ol>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['built_query']->value) {?>
								<p><strong>The built query was likely:</strong></p>
								<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['built_query']->value);?>
</strong>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['stacktrace']->value) {?>
								<p><strong>Stacktrace:</strong></p>
								<div>
									<?php echo $_smarty_tpl->tpl_vars['stacktrace']->value;?>

								</div>
							<?php }?>
						</div>

					</div>
					<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
						<p>Things to check:</p>
						<ol class="fancylist">
							<li><p>Is your database up and running?</p></li>
							<li><p>Is your database corrupt? Please see <a target="_blank" href="http://doc.tiki.org/Repair+Database">how to repair your database</a></p></li>
							<li><p>Are your database settings accurate? (username, schema name, etc in db/local.php)</p></li>
							<?php if ($_smarty_tpl->tpl_vars['where']->value!='connection') {?>
								<li><p>Did you complete the <a href="tiki-install.php">Tiki Installer?</a></p></li>
							<?php }?>
						</ol>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['where']->value=='connection') {?>
					<h1>Tiki is unable to connect to the database</h1>
					<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
						<p>Things to check:</p>
						<ol class="fancylist">
							<li><p>Is your database up and running?</p></li>
							<li><p>Are your database settings accurate? (username, schema name, etc in db/local.php)</p></li>
						</ol>
					</div>
				<?php } else { ?>
					<h1>An error occurred while performing the request.</h1>
					<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
						<p>Things to check:</p>
						<ol class="fancylist">
							<li><p>Did you complete the <a href="tiki-install.php">Tiki Installer?</a></p></li>
							<li><p>Is your database corrupt? Please see <a target="_blank" href="http://doc.tiki.org/Repair+Database">how to repair your database</a></p></li>
							<li><p>Are your database settings accurate? (username, schema name, etc in db/local.php)</p></li>
						</ol>
					</div>
				<?php }?>

				<p>Please see <a target="_blank" href="http://doc.tiki.org/">the documentation</a> for more information.</p>

				<hr/>

	
			</div>
		</div>
			</div>
		</div> 
	</body>
</html>
<?php }} ?>
