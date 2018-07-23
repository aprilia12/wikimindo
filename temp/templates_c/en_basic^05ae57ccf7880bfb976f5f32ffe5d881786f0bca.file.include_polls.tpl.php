<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:13:01
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_polls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2514986065b51998d6159c9-60261640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ae57ccf7880bfb976f5f32ffe5d881786f0bca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_polls.tpl',
      1 => 1492545646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2514986065b51998d6159c9-60261640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_admin_polls' => 0,
    'tiki_p_admin_surveys' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51998d658059_89243451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51998d658059_89243451')) {function content_5b51998d658059_89243451($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.help.php';
?><form class="form-horizontal" method="post" action="tiki-admin.php?page=polls">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value=="y") {?>
				<a role="link" class="btn btn-link" href="tiki-admin_polls.php" title="List">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Polls
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_surveys']->value=="y") {?>
				<a role="link" class="btn btn-link" href="tiki-admin_surveys.php" title="List">
					<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Surveys
				</a>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_polls_and_surveys")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_polls_and_surveys"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Polls")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Polls"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<br>
				<fieldset>
					<legend>Activate the feature</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_polls','visible'=>"always"),$_smarty_tpl);?>

				</fieldset>

				<fieldset class="table">
					<legend>Plugins</legend>
					<?php echo smarty_function_preference(array('name'=>'wikiplugin_poll'),$_smarty_tpl);?>

				</fieldset>

				<fieldset>
					<legend>Settings<?php echo smarty_function_help(array('url'=>"Polls"),$_smarty_tpl);?>
</legend>
					<input type="hidden" name="pollprefs" />
					<?php echo smarty_function_preference(array('name'=>'feature_poll_anonymous'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_poll_revote'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_poll_comments'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_poll_comments_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'poll_comments_per_page'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'poll_comments_default_ordering'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'poll_list_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'poll_list_objects'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'poll_multiple_per_object'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'poll_percent_decimals'),$_smarty_tpl);?>

				</fieldset>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Polls"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys']=="y") {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Surveys")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Surveys"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<br>
				<fieldset class="table">
					<legend>Activate the feature</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_surveys','visible'=>"always"),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<?php echo smarty_function_preference(array('name'=>'poll_surveys_textarea_hidetoolbar'),$_smarty_tpl);?>

				</fieldset>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Surveys"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_polls_and_surveys"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
