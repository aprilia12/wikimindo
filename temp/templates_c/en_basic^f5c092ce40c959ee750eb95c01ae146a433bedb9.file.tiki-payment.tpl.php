<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 03:23:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21284007535b6b9787d68013-56136198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c092ce40c959ee750eb95c01ae146a433bedb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-payment.tpl',
      1 => 1519702366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21284007535b6b9787d68013-56136198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invoice' => 0,
    'user' => 0,
    'prefs' => 0,
    'overdue' => 0,
    'outstanding' => 0,
    'authorized' => 0,
    'past' => 0,
    'canceled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6b9787e90e55_15743566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b9787e90e55_15743566')) {function content_5b6b9787e90e55_15743566($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_payment')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.payment.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Payment",'admpage'=>"payment")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Payment",'admpage'=>"payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Payment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Payment",'admpage'=>"payment"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['invoice']->value)) {?>
	<div class="margin-bottom-md">
		<?php echo smarty_function_payment(array('id'=>$_smarty_tpl->tpl_vars['invoice']->value),$_smarty_tpl);?>

	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'payment_view')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'payment_view'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Outstanding")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Outstanding"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['overdue']->value['cant']>0||count($_smarty_tpl->tpl_vars['outstanding']->value['data'])>0||count($_smarty_tpl->tpl_vars['authorized']->value['data'])>0) {?>
					<?php if ($_smarty_tpl->tpl_vars['overdue']->value['cant']>0) {?>
						<h4>Overdue</h4>
						<?php echo $_smarty_tpl->getSubTemplate ('tiki-payment-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payments'=>$_smarty_tpl->tpl_vars['overdue']->value,'cancel'=>1,'table_id'=>'pmt_overdue'), 0);?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['outstanding']->value['cant']>0) {?>
						<h4>Outstanding</h4>
						<?php echo $_smarty_tpl->getSubTemplate ('tiki-payment-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payments'=>$_smarty_tpl->tpl_vars['outstanding']->value,'cancel'=>1,'table_id'=>'pmt_outstanding'), 0);?>

					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['authorized']->value['cant']>0) {?>
						<h4>Authorized</h4>
						<?php echo $_smarty_tpl->getSubTemplate ('tiki-payment-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payments'=>$_smarty_tpl->tpl_vars['authorized']->value,'cancel'=>1,'table_id'=>'pmt_authorized'), 0);?>

					<?php }?>
				<?php } else { ?>
					<br><em>No outstanding payments found</em>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Outstanding"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Past")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Past"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['past']->value['cant']>0) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('tiki-payment-list-past.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payments'=>$_smarty_tpl->tpl_vars['past']->value,'table_id'=>'pmt_past'), 0);?>

				<?php } else { ?>
					<br><em>No paid payments found</em>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Past"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Cancelled")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Cancelled"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['canceled']->value['cant']>0) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('tiki-payment-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payments'=>$_smarty_tpl->tpl_vars['canceled']->value,'table_id'=>'pmt_canceled'), 0);?>

				<?php } else { ?>
					<br><em>No cancelled payments found</em>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Cancelled"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'payment_view'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('name'=>'payment_request')); $_block_repeat=true; echo smarty_block_permission(array('name'=>'payment_request'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Request")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Request"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<form method="post" action=""><br>
					<div class="form-group">
						<label class="col-sm-3 control-label text-right" for="description">
							Description
						</label>
						<div class="col-sm-8 input-group">
							<input class="form-control" type="text" id="description" name="description">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label text-right" for="detail">
							Detail
						</label>
						<div class="col-sm-8 input-group">
							<textarea class="form-control" id="detail" name="detail" style="width: 100%;" rows="6"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label text-right" for="amount">
							Amount
						</label>
						<div class="col-sm-8 input-group">
							<input type="text" id="amount" name="amount" class="form-control text-right">
							<span class="input-group-addon">
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['payment_currency']);?>

							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label text-right" for="payable">
							Payable within
						</label>
					</div>
					<div class="col-sm-8 input-group">
						<input type="text" id="payable" class="text-right form-control" name="payable" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['payment_default_delay']);?>
">
						<span class="input-group-addon">
							days
						</span>
					</div><br>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
						<?php echo $_smarty_tpl->getSubTemplate ("categorize.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('labelcol'=>3,'labelclass'=>'text-right','inputcol'=>8,'inputgroup'=>'y'), 0);?>

					<?php }?>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-3 input-group">
							<input type="submit" class="btn btn-primary" name="request" value="Request">
						</div>
					</div>
				</form>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Request"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('name'=>'payment_request'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
