<?php /* Smarty version Smarty-3.1.21, created on 2018-07-26 10:37:08
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_quote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9597708225b598834e919a6-30313226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632f49ff59f8057e655df271d25526daec6f5b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_quote.tpl',
      1 => 1510633158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9597708225b598834e919a6-30313226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'replyto' => 0,
    'date' => 0,
    'data' => 0,
    'source_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b598834ecc323_01376153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b598834ecc323_01376153')) {function content_5b598834ecc323_01376153($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><div class='quote'>
	<div class='quoteheader'>
		<?php if ($_smarty_tpl->tpl_vars['replyto']->value) {?>
			<cite><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['replyto']->value);?>
</cite> wrote<?php if ($_smarty_tpl->tpl_vars['date']->value) {?> on <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['date']->value);
}?>:
		<?php } else { ?>
			<i class="fa fa-quote-left" aria-hidden="true"></i>
		<?php }?>
	</div>
	<div class='quotebody'>
		<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['source_url']->value) {?>
			<div class='quoteurl'>
				Source: <a target="_blank" class="wiki external" href="<?php echo $_smarty_tpl->tpl_vars['source_url']->value;?>
"><cite><?php echo $_smarty_tpl->tpl_vars['source_url']->value;?>
</cite></a><?php echo smarty_function_icon(array('name'=>'link-external'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>
</div>
<?php }} ?>
