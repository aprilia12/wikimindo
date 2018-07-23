<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 04:47:45
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\messu-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2647180475b5541d11c57f7-36563508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840a1e2366308b8b0971643273fecb6b31ee332d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\messu-nav.tpl',
      1 => 1494109692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647180475b5541d11c57f7-36563508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_broadcast' => 0,
    'mess_archiveAfter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b5541d11d51f4_37077266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5541d11d51f4_37077266')) {function content_5b5541d11d51f4_37077266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>

<div class="t_navbar margin-bottom-md btn-group">
	<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"messu-mailbox.php",'_class'=>"btn btn-default",'_text'=>"Mailbox"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"messu-compose.php",'_class'=>"btn btn-default",'_text'=>"Compose"),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_broadcast']->value=='y') {?>
		<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"messu-broadcast.php",'_class'=>"btn btn-default",'_text'=>"Broadcast"),$_smarty_tpl);?>

	<?php }?>

	<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"messu-sent.php",'_class'=>"btn btn-default",'_text'=>"Sent"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"messu-archive.php",'_class'=>"btn btn-default",'_text'=>"Archive"),$_smarty_tpl);?>


	<?php if (isset($_smarty_tpl->tpl_vars['mess_archiveAfter']->value)&&$_smarty_tpl->tpl_vars['mess_archiveAfter']->value>0) {?>
		(Auto-archive age for read messages: <?php echo $_smarty_tpl->tpl_vars['mess_archiveAfter']->value;?>
 days)
	<?php }?>
</div>
<?php }} ?>
