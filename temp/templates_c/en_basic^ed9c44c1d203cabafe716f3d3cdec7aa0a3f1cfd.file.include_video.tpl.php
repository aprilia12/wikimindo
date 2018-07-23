<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:37:49
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10099856245b553f7d89ee00-39140488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9c44c1d203cabafe716f3d3cdec7aa0a3f1cfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_video.tpl',
      1 => 1518037526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10099856245b553f7d89ee00-39140488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kaltura_legacyremix' => 0,
    'kplayerlist' => 0,
    'kcwText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b553f7d904724_93501533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b553f7d904724_93501533')) {function content_5b553f7d904724_93501533($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?><form class="form-horizontal" action="tiki-admin.php?page=video" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_video")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_video"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Kaltura")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Kaltura"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Kaltura Registration")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Kaltura Registration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				To get a Kaltura Partner ID: Setup your own instance of Kaltura Community Edition (CE) or <a href="http://corp.kaltura.com/about/signup">get an account via Kaltura.com</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Kaltura Registration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<?php echo smarty_function_button(array('_text'=>"List Media",'href'=>"tiki-list_kaltura_entries.php"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['kaltura_legacyremix']->value=='y') {
echo smarty_function_button(array('_text'=>"List Remix Entries",'href'=>"tiki-list_kaltura_entries.php?list=mix"),$_smarty_tpl);
}?>
			<?php echo smarty_function_button(array('_text'=>"Add New Media",'href'=>"tiki-kaltura_upload.php"),$_smarty_tpl);?>


			<div class="row">
				<div class="form-group col-lg-12 clearfix">
					<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>

			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_kaltura','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Plugin to embed in pages</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_kaltura'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Enable related tracker field types</legend>
				<?php echo smarty_function_preference(array('name'=>'trackerfield_kaltura'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Kaltura / Tiki config</legend>
				<?php echo smarty_function_preference(array('name'=>'kaltura_kServiceUrl'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Kaltura partner settings</legend>
				<?php echo smarty_function_preference(array('name'=>'kaltura_partnerId'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'kaltura_adminSecret'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'kaltura_secret'),$_smarty_tpl);?>

			</fieldset>

			<br>

			<fieldset>
				<legend>Kaltura dynamic player</legend>
				<?php echo smarty_function_preference(array('name'=>'kaltura_kdpUIConf'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'kaltura_kdpEditUIConf'),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->tpl_vars['kplayerlist']->value;?>

			</fieldset>

			<br>

			<fieldset>
				<legend>Kaltura contribution wizard</legend>
				<?php echo $_smarty_tpl->tpl_vars['kcwText']->value;?>

				<div class="adminoptionbox">
					You can manually edit these values in lib/videogals/standardTikiKcw.xml<br>
					Recreate KCW "uiConf" <?php echo smarty_function_button(array('_class'=>"timeout",'_text'=>"Update",'kcw_rebuild'=>1,'_keepall'=>'y','_auto_args'=>'*'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>Legacy support</legend>
				<?php echo smarty_function_preference(array('name'=>'kaltura_legacyremix'),$_smarty_tpl);?>

			</fieldset>

			<br>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Kaltura"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Media Alchemyst",'key'=>'alchemy')); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Media Alchemyst",'key'=>'alchemy'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table clearfix featurelist">
				<legend> Settings for Alchemy </legend>
				<?php echo smarty_function_preference(array('name'=>'alchemy_ffmpeg_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_ffprobe_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_imagine_driver'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Media Alchemyst",'key'=>'alchemy'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_video"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
