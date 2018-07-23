<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:10:19
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15388594865b55390bb5c862-86018799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5583192cace2f222276f017dcef86d291076e920' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_payment.tpl',
      1 => 1495891050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15388594865b55390bb5c862-86018799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b55390bc4eb98_07472157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b55390bc4eb98_07472157')) {function content_5b55390bc4eb98_07472157($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_accordion')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion.php';
if (!is_callable('smarty_block_accordion_group')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.accordion_group.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=payment" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link" href="tiki-payment.php" title="List">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Payments
			</a>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['payment_feature']!="y") {?>
		<fieldset class="table">
			<legend>Activate the feature</legend>
			<?php echo smarty_function_preference(array('name'=>'payment_feature','visible'=>"always"),$_smarty_tpl);?>

		</fieldset>
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Payment")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Choose payment system")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Choose payment system"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				You can use only one payment method: PayPal or Cclite or Tiki User Credits<br>
				PayPal is working at the moment. See PayPal.com<br>
				Cclite: Community currency accounting for local exchange trading systems (LETS). See <a class="alert-link" href="http://sourceforge.net/projects/cclite/">sourceforge.net</a><br>
				Tiki User Credits: Requires this other feature to be configured
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Choose payment system"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<div class="adminoptionboxchild" id="payment_feature_childcontainer">
				<fieldset class="table">
					<?php echo smarty_function_preference(array('name'=>'payment_system'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_currency'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_default_delay'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_manual'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_user_only_his_own'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_user_only_his_own_past'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_anonymous_allowed'),$_smarty_tpl);?>

				</fieldset>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion', array()); $_block_repeat=true; echo smarty_block_accordion(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"PayPal")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"PayPal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="admin payment">
							<?php echo smarty_function_preference(array('name'=>'payment_paypal_business'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_paypal_password'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_paypal_signature'),$_smarty_tpl);?>


							<div class="adminoptionboxchild">
								<?php echo smarty_function_preference(array('name'=>'payment_paypal_environment'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_paypal_ipn'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_paypal_pdt'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_paypal_pdt_token'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_paypal_pdt_redirect'),$_smarty_tpl);?>

							</div>
							<?php echo smarty_function_preference(array('name'=>'payment_invoice_prefix'),$_smarty_tpl);?>

						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"PayPal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Israel Post payment module")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Israel Post payment module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="admin payment">
							<?php echo smarty_function_preference(array('name'=>'payment_israelpost_environment'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_israelpost_business_id'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_israelpost_api_password'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_israelpost_request_preauth'),$_smarty_tpl);?>

						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Israel Post payment module"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Cclite")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Cclite"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="admin payment">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Experimental",'type'=>"warning",'icon'=>"bricks")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Experimental",'type'=>"warning",'icon'=>"bricks"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Cclite is for creating and managing alternative or complementary trading currencies and groups
								Work in progress since Tiki 6
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Experimental",'type'=>"warning",'icon'=>"bricks"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php echo smarty_function_preference(array('name'=>'payment_cclite_registries'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_cclite_currencies'),$_smarty_tpl);?>

							<div class="adminoptionboxchild">
								<?php echo smarty_function_preference(array('name'=>'payment_cclite_gateway'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_cclite_merchant_user'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_cclite_merchant_key'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_cclite_mode'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_cclite_hashing_algorithm'),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>'payment_cclite_notify'),$_smarty_tpl);?>

							</div>
						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Cclite"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('accordion_group', array('title'=>"Tiki user credits")); $_block_repeat=true; echo smarty_block_accordion_group(array('title'=>"Tiki user credits"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="admin payment">
							<?php echo smarty_function_preference(array('name'=>'payment_tikicredits_types'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_tikicredits_xcrates'),$_smarty_tpl);?>

						</div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion_group(array('title'=>"Tiki user credits"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_accordion(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Payment"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Advanced Shopping Cart")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Advanced Shopping Cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<label>Cart settings</label>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_heading'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Advanced cart tracker names setup</legend>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_product_tracker_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_orders_tracker_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_orderitems_tracker_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_productclasses_tracker_name'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Products tracker setup</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Choose payment system")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Choose payment system"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Depending on which feature you are using, you may need some or all of the following fields to be setup
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Choose payment system"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_product_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_inventory_type_field'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_inventory_total_field'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_inventory_lesshold_field'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_product_name_fieldname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_product_price_fieldname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_products_inbundle_fieldname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_associated_event_fieldname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_product_classid_fieldname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_giftcerttemplate_fieldname'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Features</legend>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_inventory'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_inventory_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_inventoryhold_expiry'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_bundles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'payment_cart_orders'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_orders_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_orders_profile'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_orderitems_profile'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_anonymous'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_anonymous_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_anonorders_profile'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_anonorderitems_profile'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_anonshopper_profile'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_anon_reviewpage'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_anon_group'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_associatedevent'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_associatedevent_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_event_tracker'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_event_tracker_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_eventstart_fieldname'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_eventend_fieldname'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_exchange'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_exchange_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_orderitems_tracker'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'payment_cart_giftcerts'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="payment_cart_giftcerts_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'payment_cart_giftcert_tracker'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'payment_cart_giftcert_tracker_name'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Advanced Shopping Cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<fieldset class="table">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_addtocart'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_adjustinventory'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_cartmissinguserinfo'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_extendcarthold'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_hasbought'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberpayment'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_payment'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_shopperinfo'),$_smarty_tpl);?>

			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Shipping")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'shipping_service'),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'shipping_fedex_enable'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="shipping_fedex_enable_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'shipping_fedex_key'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shipping_fedex_password'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shipping_fedex_account'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shipping_fedex_meter'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'shipping_ups_enable'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="shipping_ups_enable_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'shipping_ups_license'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shipping_ups_username'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shipping_ups_password'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'shipping_custom_provider'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
