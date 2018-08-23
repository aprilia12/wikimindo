<?php /* Smarty version Smarty-3.1.21, created on 2018-08-20 09:35:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354168475b7a6f44436bf0-28444326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48213192b444f988de006bf7246d85710d22ca22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-check.tpl',
      1 => 1518370936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354168475b7a6f44436bf0-28444326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mysql_properties' => 0,
    'key' => 0,
    'item' => 0,
    'fmap' => 0,
    'engineTypeNote' => 0,
    'mysql_crashed_tables' => 0,
    'server_information' => 0,
    'server_properties' => 0,
    'dirs' => 0,
    'd' => 0,
    'k' => 0,
    'dirsWritable' => 0,
    'apache_properties' => 0,
    'no_apache_properties' => 0,
    'iis_properties' => 0,
    'no_iis_properties' => 0,
    'php_properties' => 0,
    'php_sapi_info' => 0,
    'security' => 0,
    'sensitive_data_detected_files' => 0,
    'sensitive_data_box_title' => 0,
    'file' => 0,
    'prefs' => 0,
    'mPDFClassMissing' => 0,
    'file_handlers' => 0,
    'mysql_variables' => 0,
    'benchmark' => 0,
    'bom_total_files_scanned' => 0,
    'bom_detected_files' => 0,
    'trim_server_requirements' => 0,
    'trim_client_requirements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7a6f44557d43_33530847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7a6f44557d43_33530847')) {function content_5b7a6f44557d43_33530847($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Server Check")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Server Check"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Server Check<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Server Check"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h2>MySQL or MariaDB Database Properties</h2>
<form method="post" action="tiki-check.php">
<input class="registerSubmit" type="submit" class="btn btn-default" name="acknowledge" value="Acknowledge">
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th>Acknowledge</th>
			<th>Explanation</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mysql_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="text"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<?php if ($_smarty_tpl->tpl_vars['engineTypeNote']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"New database engine")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"New database engine"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your website is using a 18.x or higher version of tiki wiki and your database tables are not using the InnoDB database engine, you should consider migrate to InnoDB, that is now the default database engine for Tiki<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"New database engine"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>MySQL crashed Tables</h2>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Be careful")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Be careful"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following list is just a very quick look at SHOW TABLE STATUS that tells you, if tables have been marked as crashed. If you are experiencing database problems you should still run CHECK TABLE or myisamchk to make sure.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Be careful"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Table</th>
			<th>Comment</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mysql_crashed_tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['Comment'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<h2>Test sending emails</h2>
To test if your installation is capable of sending emails please visit the <a href="tiki-install.php">Tiki Installer</a>.

<h2>Server Information</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['server_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<h2>Server Properties</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th>Acknowledge</th>
			<th>Explanation</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['server_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<h2>Special directories</h2>
To backup these directories go to <a href="tiki-admin_system.php">Admin->Tiki Cache/SysAdmin</a>.
<?php if (count($_smarty_tpl->tpl_vars['dirs']->value)) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Directory</th>
				<th>Fitness</th>
				<th>Explanation</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
				<tr>
					<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['d']->value);?>
</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['dirsWritable']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
							<?php echo smarty_function_icon(array('name'=>'ok','iclass'=>'text-success'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_icon(array('name'=>'remove','iclass'=>'text-danger'),$_smarty_tpl);?>

						<?php }?>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['dirsWritable']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
							Directory is writeable.
						<?php } else { ?>
							Directory is not writeable!
						<?php }?>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
<?php }?>


<h2>Apache properties</h2>
<?php if ($_smarty_tpl->tpl_vars['apache_properties']->value) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Property</th>
				<th>Value</th>
				<th>Tiki Fitness</th>
				<th>Acknowledge</th>
				<th>Explanation</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apache_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

			<?php } ?>
		</table>
	</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['no_apache_properties']->value;?>

<?php }?>

<h2>IIS properties</h2>
<?php if ($_smarty_tpl->tpl_vars['iis_properties']->value) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Property</th>
				<th>Value</th>
				<th>Tiki Fitness</th>
				<th>Acknowledge</th>
				<th>Explanation</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['iis_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

			<?php } ?>
		</table>
	</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['no_iis_properties']->value;?>

<?php }?>

<h2>PHP scripting language properties</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th>Acknowledge</th>
			<th>Explanation</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['php_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value) {?>
		<p>
		<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value['message']) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['message'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value['link']) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['link'];?>
</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		</p>
	<?php }?>

	<p>
		You can check the full documentation on how to change the configurations values in <a href="http://www.php.net/manual/en/configuration.php">http://www.php.net/manual/en/configuration.php</a>
	</p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h2>PHP Security properties</h2>
To check the file integrity of your Tiki installation, go to <a href="tiki-admin_security.php">Admin->Security</a>.
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th>Acknowledge</th>
			<th>Explanation</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['security']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness']=='safe') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>
</form>

<h2>Tiki Security</h2>
<?php $_smarty_tpl->tpl_vars['sensitive_data_box_title'] = new Smarty_variable("Sensitive Data Exposure", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['sensitive_data_detected_files']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<p>Tiki detected that there are temporary files in the db folder which may expose credentials or other sensitive information.</p>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sensitive_data_detected_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
			<li>
				<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

			</li>
		<?php } ?>
	</ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<p>Tiki did not detect temporary files in the db folder which may expose credentials or other sensitive information.</p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['print_pdf_from_url']==="mpdf"&&!empty($_smarty_tpl->tpl_vars['mPDFClassMissing']->value)) {?>
	<h2>Print configurations</h2>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'error','title'=>"mPDF Information",'close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'error','title'=>"mPDF Information",'close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p>mPDF is selected as Print option, however the class can't be loaded, please check "Print Settings" in /tiki-admin.php?page=print</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'error','title'=>"mPDF Information",'close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>File Gallery Search Indexing</h2>
<?php echo smarty_function_icon(array('name'=>'help','href'=>'https://doc.tiki.org/Search+within+files'),$_smarty_tpl);?>
 <em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>')); $_block_repeat=true; echo smarty_block_tr(array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
More information %0 here %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_enable_auto_indexing']=='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['security']->value['shell_exec']['setting']=='Disabled') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'error','title'=>'Command Missing','close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'error','title'=>'Command Missing','close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>The command "shell_exec" is required for file gallery search indexing</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'error','title'=>'Command Missing','close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Mimetype</th>
				<th>Tiki Fitness</th>
				<th>Explanation</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file_handlers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
						<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
							<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

						</span>
					</td>
					<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['message']);?>
</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

			<?php } ?>
		</table>
	</div>
<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>'Feature disabled','close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>'Feature disabled','close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>'<a href="tiki-admin.php?page=fgal">','_1'=>'</a>')); $_block_repeat=true; echo smarty_block_tr(array('_0'=>'<a href="tiki-admin.php?page=fgal">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Go to the %0 File Gallery Control Panel %1 (with advanced preferences showing) to enable<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>'<a href="tiki-admin.php?page=fgal">','_1'=>'</a>'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>'Feature disabled','close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<h2>MySQL Variable Information</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mysql_variables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['value']);?>
</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php } ?>
	</table>
</div>

<h2>PHP Info</h2>
For more detailed information about your PHP installation see <a href="tiki-phpinfo.php">Admin->phpinfo</a>.

<a name="benchmark"></a>
<h2>Benchmark PHP/MySQL</h2>
<a href="tiki-check.php?benchmark=run&ts=<?php echo time();?>
#benchmark" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Check</a>
<?php if (!empty($_smarty_tpl->tpl_vars['benchmark']->value)) {?>
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>Property</th>
				<th>Value</th>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['benchmark']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
				</tr>
			<?php } ?>
		</table>
	</div>
<?php }?>

<h2>BOM Detected Files</h2>
<p>Scanned files: <?php echo $_smarty_tpl->tpl_vars['bom_total_files_scanned']->value;?>
</p>
<p>BOM files detected:</p>
<ul>
	<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bom_detected_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
		<li>
			<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

		</li>
	<?php } ?>
</ul>

<h2>TRIM</h2>
For more detailed information about Tiki Remote Instance Manager please check <a href="https://doc.tiki.org/TRIM">doc.tiki.org</a>.

<?php if ('trim_capable') {?>
	<h3>Server Instance</h3>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Requirements</th>
				<th>Status</th>
				<th>Message</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trim_server_requirements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php } ?>
		</table>
	</div>

	<h3>Client Instance</h3>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Requirements</th>
				<th>Status</th>
				<th>Message</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trim_client_requirements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php } ?>
		</table>
	</div>
<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'error','title'=>'OS not supported','close'=>'n')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'error','title'=>'OS not supported','close'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<p>Apparently tiki is running on a Windows based server. This feature is not supported natively.</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'error','title'=>'OS not supported','close'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
