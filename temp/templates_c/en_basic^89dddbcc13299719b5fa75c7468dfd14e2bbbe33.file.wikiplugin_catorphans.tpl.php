<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 08:35:29
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\wikiplugin_catorphans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16583062185b6d3231130db3-12428286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89dddbcc13299719b5fa75c7468dfd14e2bbbe33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\wikiplugin_catorphans.tpl',
      1 => 1490329620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16583062185b6d3231130db3-12428286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'objecttype' => 0,
    'totalcount' => 0,
    'orphans' => 0,
    'orphan' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d32311a2256_97478311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d32311a2256_97478311')) {function content_5b6d32311a2256_97478311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?> 

<h5>Total number of uncategorised <?php echo $_smarty_tpl->tpl_vars['objecttype']->value;?>
 objects: <?php echo $_smarty_tpl->tpl_vars['totalcount']->value;?>
</h5>
<?php  $_smarty_tpl->tpl_vars['orphan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orphan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orphans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orphan']->key => $_smarty_tpl->tpl_vars['orphan']->value) {
$_smarty_tpl->tpl_vars['orphan']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['objecttype']->value=='wiki') {?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['orphan']->value['pageName']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['pageName']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='file gallery') {?><a href="/tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='article') {?><a href="/tiki-list_articles.php?articleId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='tracker') {?><a href="/tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='blog') {?><a href="/tiki-view_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='calendar') {?><a href="/tiki-calendar.php?calendarId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
	<?php } elseif ($_smarty_tpl->tpl_vars['objecttype']->value=='forum') {?><a href="/tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
">Id<?php echo $_smarty_tpl->tpl_vars['orphan']->value['dataId'];?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['orphan']->value['name']);?>
</a><br>
<br>
	<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['step']!=-1) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['pagination']->value['cant'],'step'=>$_smarty_tpl->tpl_vars['pagination']->value['step'],'offset'=>$_smarty_tpl->tpl_vars['pagination']->value['offset'])); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['pagination']->value['cant'],'step'=>$_smarty_tpl->tpl_vars['pagination']->value['step'],'offset'=>$_smarty_tpl->tpl_vars['pagination']->value['offset']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['pagination']->value['cant'],'step'=>$_smarty_tpl->tpl_vars['pagination']->value['step'],'offset'=>$_smarty_tpl->tpl_vars['pagination']->value['offset']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
