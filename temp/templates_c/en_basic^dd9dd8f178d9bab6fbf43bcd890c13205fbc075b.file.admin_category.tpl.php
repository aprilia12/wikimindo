<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 09:54:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5291566075b695047530cc8-03548711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd9dd8f178d9bab6fbf43bcd890c13205fbc075b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_category.tpl',
      1 => 1426754726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5291566075b695047530cc8-03548711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6950475b1b67_22004496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6950475b1b67_22004496')) {function content_5b6950475b1b67_22004496($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Global content category system. Items of different types (wiki pages, articles, tracker items, etc) can be added to one or more categories. Permissions set for a category will apply to all items in that category, allowing access to be restricted to certain groups, users, etc.</br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"admin_category",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Categories</legend>
			<br>
			Categories are set up in the admin categories panel. Please see the Categories item in the Admin menu.<br>
			<br>
			.. or .. <a href="tiki-admin_categories.php" target="_blank">Set up categories here</a><br>
			<br>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']=='y'&&empty($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval_categories'])) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Info")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					You have the feature '<strong>Revision Approval</strong>' enabled, but you haven't defined yet which content categories require revision approval for their wiki pages.
					Once you have <a href="tiki-admin_categories.php" target="_blank">some categories defined</a>, go back to the Configuration Wizard step '<strong>Set up Wiki environment</strong>' and define them there.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<br>
			<br>
			<em>See also <a href="http://doc.tiki.org/category" target="_blank">Categories @ doc.tiki.org</a></em>
		</fieldset>
		<br>
	</div>
</div>
<?php }} ?>
