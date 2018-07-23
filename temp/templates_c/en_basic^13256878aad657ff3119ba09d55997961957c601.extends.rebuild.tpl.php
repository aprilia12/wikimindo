<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:59:13
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\search\rebuild.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16284749145b5141f1d5ab46-63410572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0f91c1e41c5384ea1e4235fbea6928247bc42f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\search\\rebuild.tpl',
      1 => 1506923768,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16284749145b5141f1d5ab46-63410572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5141f2075f48_88552557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5141f2075f48_88552557')) {function content_5b5141f2075f48_88552557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild']) {?>
		<div class="alert alert-warning">
			<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your index was last fully rebuilt on %0.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		</div>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['search_engine']->value)) {?>
		<div class="alert alert-info">
			<p>Unified search engine: <b><?php echo $_smarty_tpl->tpl_vars['search_engine']->value;?>
</b><?php if (!empty($_smarty_tpl->tpl_vars['search_version']->value)) {?>, version <b><?php echo $_smarty_tpl->tpl_vars['search_version']->value;?>
</b><?php }?></p>
		</div>
	<?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['stat']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>"Indexed")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Indexed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<ul>
				<?php  $_smarty_tpl->tpl_vars['nb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nb']->_loop = false;
 $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->key => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->_loop = true;
 $_smarty_tpl->tpl_vars['what']->value = $_smarty_tpl->tpl_vars['nb']->key;
?>
					<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['what']->value);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nb']->value);?>
</li>
				<?php } ?>
			</ul>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Indexed"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>"Execution Statistics")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Execution Statistics"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<ul>
				<li>Execution time: <?php echo $_smarty_tpl->tpl_vars['execution_time']->value;?>
</li>
				<li>Current Memory usage: <?php echo $_smarty_tpl->tpl_vars['memory_usage']->value;?>
</li>
				<li>Memory peak usage before indexing: <?php echo $_smarty_tpl->tpl_vars['memory_peak_usage_before']->value;?>
</li>
				<li>Memory peak usage after indexing: <?php echo $_smarty_tpl->tpl_vars['memory_peak_usage_after']->value;?>
</li>
				<li>Number of queries: <?php echo $_smarty_tpl->tpl_vars['num_queries']->value;?>
</li>
			</ul>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Execution Statistics"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<form method="post" class="no-ajax" action="<?php echo smarty_function_service(array('controller'=>'search','action'=>'rebuild'),$_smarty_tpl);?>
" onsubmit="$(this).parent().tikiModal('Rebuilding index...')">
			<div class="form-group">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="loggit" value="1">
						Enable logging
					</label>
					<div class="help-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log file is saved as <?php echo $_smarty_tpl->tpl_vars['prefs']->value['tmpDir'];?>
/Search_Indexer.log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				</div>
			</div>
			<div class="form-group submit">
				<input type="submit" class="btn btn-primary" value="Rebuild">
				<?php if ($_smarty_tpl->tpl_vars['queue_count']->value>0) {?>
					<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'search','action'=>'process_queue'),$_smarty_tpl);?>
">Process Queue <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['queue_count']->value);?>
</span></a>
				<?php }?>
			</div>
		</form>

		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Indexing Problems?")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Indexing Problems?"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>If the indexing does not complete, check the log file to see where it ended.</p>
			<p>Last line of log file (web): <strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastLogItemWeb']->value);?>
</strong></p>
			<p>Last line of log file (console): <strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lastLogItemConsole']->value);?>
</strong></p>

			<p>Common failures include:</p>
			<ul>
				<li><strong>Not enough memory.</strong> Larger sites require more memory to re-index.</li>
				<li><strong>Time limit too short.</strong> It may be required to run the rebuild through the command line.</li>
				<li><strong>High resource usage.</strong> Some plugins in your pages may cause excessive load. Blacklisting some plugins during indexing can help.</li>
			</ul>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Indexing Problems?"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Command Line Utilities")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Command Line Utilities"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> index:optimize</kbd><br>
		<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> index:rebuild</kbd><br>
		<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> index:rebuild --log</kbd><br>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log file is saved as <?php echo $_smarty_tpl->tpl_vars['prefs']->value['tmpDir'];?>
/Search_Indexer_console.log<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Command Line Utilities"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
