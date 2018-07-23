<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 05:30:30
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_wiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17501134985b515756300ab7-65354434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d9937e0e43928003e145f0cdc0ecd75c76b678e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_wiki.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17501134985b515756300ab7-65354434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51575633b442_93438706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51575633b442_93438706')) {function content_5b51575633b442_93438706($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	<div class="media-content">
		Set up the Wiki environment</br></br></br>
		<?php echo smarty_function_icon(array('name'=>"file-text-o",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Wiki environment</legend>

			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_auto_toc'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					See also <a href="https://doc.tiki.org/Category" target="_blank">Category @ doc.tiki.org</a>
				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					Look for the <img src="img/icons/camera.png" /> icon in the editor toolbar. Requires Java.<br/><a href="https://www.java.com/verify/" target="_blank">Verify your Java installation</a>.<br>
				</div>
				<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval'),$_smarty_tpl);?>

				<div id="flaggedrev_approval_childcontainer">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
						<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval_categories'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Info")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Once you have the feature '<strong>Categories</strong>' enabled, you will need to define some content categories, and indicate which ones require revision approval for their wiki pages.
							<br><br/>
							You will be able to set the category ids here when you come back with Categories enabled, or at the corresponding <a href="tiki-admin.php?page=wiki&cookietab=3" target="_blank">Control Panel</a> with the '<em>Advanced</em>' features shown in the <a class='alert-link' target='tikihelp' href='https://doc.tiki.org/Preference+Filters'>Preference Filters</a>.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			</div>
			<br><br>
			<em>See also <a href="tiki-admin.php?page=wiki&amp;alt=Wiki#content1" target="_blank">Wiki admin panel</a></em>

		</fieldset>
	</div>
</div>
<?php }} ?>
