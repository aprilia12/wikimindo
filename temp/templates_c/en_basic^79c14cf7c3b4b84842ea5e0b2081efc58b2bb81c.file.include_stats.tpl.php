<?php /* Smarty version Smarty-3.1.21, created on 2018-07-30 05:16:02
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18765884915b5e82f23d3b16-01448824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c14cf7c3b4b84842ea5e0b2081efc58b2bb81c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_stats.tpl',
      1 => 1510659666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18765884915b5e82f23d3b16-01448824',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5e82f24549b9_79936061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5e82f24549b9_79936061')) {function content_5b5e82f24549b9_79936061($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Notice")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Notice"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	This is a new control panel on Tiki and work is still in progress.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Notice"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="admin form-horizontal" action="tiki-admin.php?page=stats" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tiki Statistics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tiki Statistics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tiki Statistics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Google Analytics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Google Analytics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<?php echo smarty_function_preference(array('name'=>'site_google_analytics_account'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_google_analytics_gtag'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_google_credentials'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Google Analytics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Piwik Analytics")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Piwik Analytics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<?php echo smarty_function_preference(array('name'=>'site_piwik_analytics_server_url'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_piwik_site_id'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_piwik_code','syntax'=>"javascript"),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Piwik Analytics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
