<?php /* Smarty version Smarty-3.1.21, created on 2018-07-30 06:17:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_auto_toc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16430237165b5e91449f8c35-51449045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c788bc68e40281f392fd1826350e305c21fef11e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_auto_toc.tpl',
      1 => 1469841540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16430237165b5e91449f8c35-51449045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5e9144a42fc3_00944832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5e9144a42fc3_00944832')) {function content_5b5e9144a42fc3_00944832($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Choose your desired settings below</br></br></br>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"file-text-o",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

		<fieldset>
			<legend>Auto TOC options</legend>
			<?php echo smarty_function_preference(array('name'=>'wiki_inline_auto_toc'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_toc_pos'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_toc_offset'),$_smarty_tpl);?>

			<br>
			<em>See also <a href="http://doc.tiki.org/tiki-index.php?page=Auto+TOC" target="_blank">Auto TOC @ doc.tiki.org</a></em>
		</fieldset>
	</div>
</div>
<?php }} ?>
