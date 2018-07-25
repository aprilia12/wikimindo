<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 10:40:34
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-article_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497636065b559482c1d032-43136190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a926a4d764fb8de675e7cb3ea8f9283af003b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-article_types.tpl',
      1 => 1444474882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497636065b559482c1d032-43136190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'tiki_p_admin_cms' => 0,
    'types' => 0,
    'prefs' => 0,
    'attname' => 0,
    'att' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b559482c92343_68618196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b559482c92343_68618196')) {function content_5b559482c92343_68618196($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"articles",'url'=>"tiki-article_types.php",'help'=>'Articles')); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"articles",'url'=>"tiki-article_types.php",'help'=>'Articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Article Types<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"articles",'url'=>"tiki-article_types.php",'help'=>'Articles'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="t_navbar margin-bottom-md">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_articles.php",'_type'=>"link",'_icon_name'=>"list",'_text'=>"List Articles"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-admin_topics.php",'_type'=>"link",'_icon_name'=>"flag",'_text'=>"Article Topics"),$_smarty_tpl);?>

	<?php }?>
</div>
<form enctype="multipart/form-data" action="tiki-article_types.php" method="post" role="form" class="form">
	<h2>Add Type</h2>
		<div class="form-group">
			<div class="input-group">
				<input type="text" name="new_type" class="form-control" placeholder="Add article type...">
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary" name="add_type">Add</button>
				</div>
			</div>
		</div>
	<h2>Types</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
		<a class="link" href="tiki-view_articles.php?type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type'],'url');?>
">View articles with this type</a>
			<div class="table-responsive article-types">
				<table class="table table-striped table-hover">
				<tr>
					<th>Articles</th>
					<th>Author rating</th>
					<th>Show before publish date</th>
					<th>Show after expire date</th>
					<th>Heading only</th>
					<th>Comments</th>
					<th>Comment can rate article</th>
					<th>Show image</th>
					<th>Show profile picture</th>
					<th>Show author</th>
					<th>Show publish date</th>
				</tr>
				<input type="hidden" name="type_array[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]">
				<tr>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['article_cnt'];?>
</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="use_ratings[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['use_ratings']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_pre_publ[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_pre_publ']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_post_expire[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_post_expire']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="heading_only[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['heading_only']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="allow_comments[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['allow_comments']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="comment_can_rate_article[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comment_can_rate_article']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_image[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_image']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_avatar[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_avatar']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_author[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_author']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_pubdate[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_pubdate']=='y') {?>checked="checked"<?php }?>>
					</td>
				</tr>
				<tr>
					<th>Show expire date</th>
					<th>Show reads</th>
					<th>Show size</th>
					<th>Show topline</th>
					<th>Show subtitle</th>
					<th>Show source</th>
					<th>Show image caption</th>
					<th>Creator can edit</th>
					<th colspan="2"></th>
				</tr>
				<tr>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_expdate[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_expdate']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_reads[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_reads']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_size[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_size']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_topline[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_topline']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_subtitle[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_subtitle']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_linkto[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_linkto']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="show_image_caption[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['show_image_caption']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="checkbox-cell">
						<input type="checkbox" name="creator_edit[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['creator_edit']=='y') {?>checked="checked"<?php }?>>
					</td>
					<td class="action" colspan="2">
						<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['article_cnt']==0) {?>
							<a class="tips" title=":Remove" href="tiki-article_types.php?remove_type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type'],'url');?>
">
								<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>

							</a>
						<?php } else { ?>
							&nbsp;
						<?php }?>
					</td>
				</tr>
			</table>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['article_custom_attributes']=='y') {?>
			<div class="table-responsive article-types">
				<table class="table table-striped table-hover">
					<tr>
						<th>Custom attribute</th>
						<th></th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_smarty_tpl->tpl_vars['attname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
 $_smarty_tpl->tpl_vars['attname']->value = $_smarty_tpl->tpl_vars['att']->key;
?>
						<tr>
							<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attname']->value);?>
</td>
							<td class="action">
								<a class="tips" title=":Remove" href="tiki-article_types.php?att_type=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type'],'url');?>
&att_remove=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att']->value['relationId'],'url');?>
">
									<?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Remove"),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php } ?>
					<tr>
						<td><input type="text" name="new_attribute[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type']);?>
]" value="" maxlength="56"></td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		<?php }?>
		<input type="submit" class="btn btn-primary btn-sm" name="update_type" value="Save"><br>
		<hr>
		<br>
	<?php endfor; endif; ?>
</form>
<?php }} ?>
