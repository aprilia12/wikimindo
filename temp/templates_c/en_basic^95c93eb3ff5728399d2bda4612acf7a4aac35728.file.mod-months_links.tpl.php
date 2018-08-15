<?php /* Smarty version Smarty-3.1.21, created on 2018-08-15 05:22:15
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-months_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14059330805b739c67b44ed5-37243072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95c93eb3ff5728399d2bda4612acf7a4aac35728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-months_links.tpl',
      1 => 1417591060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14059330805b739c67b44ed5-37243072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'feature' => 0,
    'archives' => 0,
    'year_expanded' => 0,
    'year_number' => 0,
    'i' => 0,
    'module_id' => 0,
    'year_data' => 0,
    'month_name' => 0,
    'month_expanded' => 0,
    'month_data' => 0,
    'itemlink' => 0,
    'articleId' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b739c67bd95f4_04339579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b739c67bd95f4_04339579')) {function content_5b739c67bd95f4_04339579($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"months_links",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"months_links",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value=='cms') {?>
	<?php $_smarty_tpl->tpl_vars['itemlink'] = new Smarty_variable('tiki-read_article.php?articleId=', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['itemlink'] = new Smarty_variable('tiki-view_blog_post.php?postId=', null, 0);?>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript" >
<!--
	function mlchange(id) {
		var e = document.getElementById('ml-sub-' + id);
		var zip = document.getElementById('ml-icon-' + id);
		if(zip.innerHTML == '►' ) {
			e.style.display = 'block';
			zip.innerHTML = '▼'
		} else {
			e.style.display = 'none';
			zip.innerHTML = '►'
		}
}
//-->
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['archives']->value,'nonums'=>'y')); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['archives']->value,'nonums'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php  $_smarty_tpl->tpl_vars['year_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year_data']->_loop = false;
 $_smarty_tpl->tpl_vars['year_number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['archives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year_data']->key => $_smarty_tpl->tpl_vars['year_data']->value) {
$_smarty_tpl->tpl_vars['year_data']->_loop = true;
 $_smarty_tpl->tpl_vars['year_number']->value = $_smarty_tpl->tpl_vars['year_data']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['year_expanded']->value==0) {?>
			<?php $_smarty_tpl->tpl_vars['year_expanded'] = new Smarty_variable($_smarty_tpl->tpl_vars['year_number']->value, null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['year_number']->value==$_smarty_tpl->tpl_vars['year_expanded']->value) {?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li class='archivedate expanded' id='ml-li-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
				<a class="toggle" href="javascript:void();" >
					<span class="zippy " id='ml-icon-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >○</span>
				</a>
				<a class="linkmodule" href="javascript:void();"><?php echo $_smarty_tpl->tpl_vars['year_number']->value;?>
</a>
				<span class="post-count badge" dir="ltr"><?php echo $_smarty_tpl->tpl_vars['year_data']->value['cant'];?>
</span>
				<ul id='ml-sub-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
					<?php  $_smarty_tpl->tpl_vars['month_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month_data']->_loop = false;
 $_smarty_tpl->tpl_vars['month_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['year_data']->value['monthlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month_data']->key => $_smarty_tpl->tpl_vars['month_data']->value) {
$_smarty_tpl->tpl_vars['month_data']->_loop = true;
 $_smarty_tpl->tpl_vars['month_name']->value = $_smarty_tpl->tpl_vars['month_data']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['month_name']->value==$_smarty_tpl->tpl_vars['month_expanded']->value) {?>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
							<li class='archivedate expanded' id='ml-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
								<a class="toggle" href="javascript:mlchange('<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')" >
									<span class="zippy " id='ml-icon-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >▼</span>
								</a>
								<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['month_data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['month_name']->value;?>
</a>
								<span class="post-count badge" dir="ltr"><?php echo $_smarty_tpl->tpl_vars['month_data']->value['cant'];?>
</span>
								<ul id='ml-sub-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
									<?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['articleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['month_data']->value['postlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['articleId']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
										<li class='archivedate collapsed' >
											<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['itemlink']->value;
echo $_smarty_tpl->tpl_vars['articleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
										</li>
									<?php } ?>
								</ul>
							</li>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
							<li class='archivedate collapsed' id='ml-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
								<a class="toggle" href="javascript:mlchange('<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')" >
									<span class="zippy " id='ml-icon-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'>►</span>
								</a>
								<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['month_data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['month_name']->value;?>
</a>
								<span class="post-count badge" dir="ltr"><?php echo $_smarty_tpl->tpl_vars['month_data']->value['cant'];?>
</span>
								<ul id='ml-sub-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
									<?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['articleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['month_data']->value['postlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['articleId']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
										<li class='archivedate collapsed' >
											<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['itemlink']->value;
echo $_smarty_tpl->tpl_vars['articleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
										</li>
									<?php } ?>
								</ul>
							</li>
						<?php }?>
					<?php } ?>
				</ul>
			</li>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li class='archivedate collapsed' id='ml-li-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >
				<a class="toggle" href="<?php echo $_smarty_tpl->tpl_vars['year_data']->value['link'];?>
" >
					<span class="zippy " id='ml-icon-<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' >●</span>
				</a>
				<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['year_data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['year_number']->value;?>
</a>
				<span class="post-count badge" dir="ltr"><?php echo $_smarty_tpl->tpl_vars['year_data']->value['cant'];?>
</span>
			</li>
		<?php }?>
	<?php }
if (!$_smarty_tpl->tpl_vars['year_data']->_loop) {
?>
		<?php if ($_smarty_tpl->tpl_vars['feature']->value=='cms') {?>
			No article found
		<?php } else { ?>
			No blog post found
		<?php }?>
	<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['archives']->value,'nonums'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"months_links",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
