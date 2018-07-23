<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:46:44
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16941522435b513f0495b773-75605250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56bc8ab7fb9ad3af25b47d94e92807d6f9ccce64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\confirm.tpl',
      1 => 1505905794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16941522435b513f0495b773-75605250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation_text' => 0,
    'confirm_detail' => 0,
    'confirmaction' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b513f049c4f14_62308589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b513f049c4f14_62308589')) {function content_5b513f049c4f14_62308589($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_query')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>
<div class="panel panel-default">
	<?php if (!empty($_smarty_tpl->tpl_vars['confirmation_text']->value)) {?>
		<div class="panel-heading">
			<?php echo smarty_function_icon(array('name'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmation_text']->value);?>

		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['confirm_detail']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['confirm_detail']->value;?>

	<?php }?>
	<div class="panel-body">
		<form id='confirm' action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmaction']->value);?>
" method="post">
			<div>
				<?php echo smarty_function_query(array('_type'=>'form_input','_keepall'=>'y'),$_smarty_tpl);?>

				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:document.forms['confirm'].submit();return false;",'_text'=>"Confirm action",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:history.back(); return false;",'_text'=>"Go back",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_text'=>"Return to home page"),$_smarty_tpl);?>

			</div>
		</form>
	</div>
</div>
<?php }} ?>
