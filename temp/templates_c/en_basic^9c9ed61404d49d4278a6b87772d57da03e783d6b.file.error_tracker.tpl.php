<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:38:18
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\error_tracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9453953865b67b49a7b79a0-37918369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9ed61404d49d4278a6b87772d57da03e783d6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\error_tracker.tpl',
      1 => 1390195294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9453953865b67b49a7b79a0-37918369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_view_trackers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b49a7f2333_49397224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b49a7f2333_49397224')) {function content_5b67b49a7f2333_49397224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']!='y') {?>
	<span class="alert-warning">This feature is disabled</span>
<?php } else { ?>
	<span class="alert-warning">Missing or incorrect trackerId parameter for the plugin.</span>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y') {
echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"List Trackers"),$_smarty_tpl);
}?>
<?php }?>
<?php }} ?>
