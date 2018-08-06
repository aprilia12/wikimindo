<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:23:56
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\password_jq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14910114865b63bcbcbb1a68-35795545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9122211c0eaf16f7ffa7f3c90faef74519e35cf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\password_jq.tpl',
      1 => 1454649030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14910114865b63bcbcbb1a68-35795545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ignorejq' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63bcbcbc9161_11963111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63bcbcbc9161_11963111')) {function content_5b63bcbcbc9161_11963111($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	var divRegCapson = $('#divRegCapson');
	function regCapsLock(e){
		kc = e.keyCode?e.keyCode:e.which;
		sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
		if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
			divRegCapson.show();
		} else {
			divRegCapson.hide();
		}
	}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	$('#oldpass, #pass1, #pass2').on('keypress', function () {
		regCapsLock(event);
	});
	
	$('#pass1').on('keyup', function () {
		runPassword(this.value, 'mypassword');
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ((isset($_smarty_tpl->tpl_vars['ignorejq']->value)&&$_smarty_tpl->tpl_vars['ignorejq']->value==='y')||$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']!='y') {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	$('#pass1, #pass2').on('keyup', function () {
		checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text')
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password']=='y') {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	$('#genPass').click(function () {
		genPass('genepass');
		$('#genepass').show().select();
		return false;
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
