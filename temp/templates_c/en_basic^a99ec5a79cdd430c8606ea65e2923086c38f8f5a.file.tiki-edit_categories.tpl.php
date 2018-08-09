<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 04:41:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8082539435b6ba9de7b27c5-62794542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99ec5a79cdd430c8606ea65e2923086c38f8f5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit_categories.tpl',
      1 => 1460285772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8082539435b6ba9de7b27c5-62794542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_categories' => 0,
    'tree' => 0,
    'filter' => 0,
    'result' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6ba9de843073_47926655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6ba9de843073_47926655')) {function content_5b6ba9de843073_47926655($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_filter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.filter.php';
if (!is_callable('smarty_block_permission')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.permission.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Organizer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="t_navbar margin-bottom-md clearfix">
	<?php echo smarty_function_button(array('href'=>"tiki-browse_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value),'_type'=>"link",'_icon_name'=>"view",'_text'=>"Browse Categories",'_title'=>"Browse the category system"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value),'_type'=>"link",'_icon_name'=>"settings",'_text'=>"Admin Categories",'_title'=>"Admin the Category System"),$_smarty_tpl);?>

	<?php }?>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Move objects between categories")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Move objects between categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<ol>
		<li>Click on the category name to display the list of objects in that category.</li>
		<li>Select the objects to affect. Controls will appear in the category browser.</li>
		<li>Use the plus and minus signs to add or remove the categories on selected objects.</li>
	</ol>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Move objects between categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="category-browser">
	<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('filter', array('action'=>"tiki-edit_categories.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value)); $_block_repeat=true; echo smarty_block_filter(array('action'=>"tiki-edit_categories.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_filter(array('action'=>"tiki-edit_categories.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="object-list">
	<?php if ($_smarty_tpl->tpl_vars['result']->value&&count($_smarty_tpl->tpl_vars['result']->value)) {?>
		<ol>
			<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
				<li<?php $_smarty_tpl->smarty->_tag_stack[] = array('permission', array('type'=>$_smarty_tpl->tpl_vars['object']->value['type'],'object'=>$_smarty_tpl->tpl_vars['object']->value['object_id'],'name'=>"modify_object_categories")); $_block_repeat=true; echo smarty_block_permission(array('type'=>$_smarty_tpl->tpl_vars['object']->value['type'],'object'=>$_smarty_tpl->tpl_vars['object']->value['object_id'],'name'=>"modify_object_categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 class="available"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_permission(array('type'=>$_smarty_tpl->tpl_vars['object']->value['type'],'object'=>$_smarty_tpl->tpl_vars['object']->value['object_id'],'name'=>"modify_object_categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
>
					<input type="checkbox" name="object[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['object_type']);?>
:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['object_id']);?>
">
					<?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['object']->value['object_type'],'id'=>$_smarty_tpl->tpl_vars['object']->value['object_id']),$_smarty_tpl);?>

				</li>
			<?php } ?>
		</ol>
		<?php if ($_smarty_tpl->tpl_vars['result']->value->hasMore()) {?>
			<p>More results are available. Please refine the search criteria.</p>
		<?php }?>
		<p>
			<a class="select-all" href="#selectall">Select all</a>
			<a class="unselect-all" href="#unselectall">Unselect all</a>
		</p>
	<?php }?>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function perform_selection_action(action, row) {
	var objects = [], categId = $(row).find('a').data('categ');

	$('.object-list :checked').each(function () {
		objects.push($(this).val());
	});

	$('.control', row).fadeTo(10, .20);

	$.ajax({
		type: 'POST',
		url: $.service('category', action),
		dataType: 'json',
		data: {
			categId: categId,
			objects: objects,
			confirm: 1
		},
		success: function (data) {
			$('.object-count', row).text(data.count);
		},
		complete: function () {
			$('.control', row).fadeTo(10, 1);
		}
	});
}

$('.categ-add')
	.click(function () {
		perform_selection_action('categorize', $(this).closest('li')[0]);
	})
	.addClass('ui-icon')
	.addClass('ui-icon-circle-plus');

$('.categ-remove')
	.click(function () {
		perform_selection_action('uncategorize', $(this).closest('li')[0]);
	})
	.addClass('ui-icon')
	.addClass('ui-icon-circle-minus');

$('.control')
	.css('float', 'right')
	.css('cursor', 'pointer')
	.hide();

$('.object-list :checkbox').change(function () {
	$('.control').toggle($('.object-list :checkbox:checked').length > 0);
});

$('.object-list li:not(.available) :checkbox').attr('disabled', true);

$('.select-all').click(function () {
	$('.object-list :unchecked').prop('checked', true).change();
	return false;
});
$('.unselect-all').click(function () {
	$('.object-list :checked').prop('checked', false).change();
	return false;
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
