<?php /* Smarty version Smarty-3.1.21, created on 2018-08-06 04:53:47
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tracker_validator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7012589745b67b83bd89727-28798795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49170663fe15924642924cae2d02f17aa11de44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tracker_validator.tpl',
      1 => 1475598600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7012589745b67b83bd89727-28798795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validationjs' => 0,
    'trackerEditFormId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b67b83bd91428_56046706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b67b83bd91428_56046706')) {function content_5b67b83bd91428_56046706($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['validationjs']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#editItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
").validate({
	<?php echo $_smarty_tpl->tpl_vars['validationjs']->value;?>
,
	submitHandler: function(){
		if( typeof nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 !== "undefined" && nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 == true ) {
			return false;
		} else {
			return process_submit(this.currentForm);
		}
	}
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
<?php }} ?>
