<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 10:57:32
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\modules\mod-articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10272234175b51a3fc3c56d0-07725907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c33acd24d00e4d326f50a539054758df62e9f7ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\modules\\mod-articles.tpl',
      1 => 1491652436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10272234175b51a3fc3c56d0-07725907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'show_rating_selector' => 0,
    'min_rating' => 0,
    'max_rating' => 0,
    'modArticles' => 0,
    'nonums' => 0,
    'absurl' => 0,
    'base_url' => 0,
    'showcreated' => 0,
    'showpubl' => 0,
    'more' => 0,
    'urlParams' => 0,
    'urlParam' => 0,
    'urlParamKey' => 0,
    'queryArgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51a3fc45dc82_55889823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51a3fc45dc82_55889823')) {function content_5b51a3fc45dc82_55889823($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tikimodule.php';
if (!is_callable('smarty_block_modules_list')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.modules_list.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"articles",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"articles",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['show_rating_selector']->value=='y') {?>
		<form action="tiki-view_articles.php" style="padding: 5px;">
			<select name="min_rating">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['name'] = 'rt_val';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total']);
?>
					<option <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['rt_val']['index']==$_smarty_tpl->tpl_vars['min_rating']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rt_val']['index'];?>
</option>
				<?php endfor; endif; ?>
			</select>
			to
			<select name="max_rating">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['name'] = 'rt_val';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rt_val']['total']);
?>
					<option <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['rt_val']['index']==$_smarty_tpl->tpl_vars['max_rating']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rt_val']['index'];?>
</option>
				<?php endfor; endif; ?>
			</select>
			<input type="submit" class="btn btn-default btn-sm" value="Go">
		</form>
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('modules_list', array('list'=>$_smarty_tpl->tpl_vars['modArticles']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value)); $_block_repeat=true; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modArticles']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modArticles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
			<li>
				<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['img'])) {?>
					<div class="image">
						<img src="article_image.php?<?php if ($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['hasImage']=='y') {?>id=<?php echo $_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];
} elseif ($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId']) {?>image_type=topic&amp;id=<?php echo $_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId'];
}?>" width="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['img'];?>
">
					</div>
				<?php }?>
				<a class="linkmodule" href="<?php if ($_smarty_tpl->tpl_vars['absurl']->value=='y') {
echo $_smarty_tpl->tpl_vars['base_url']->value;
}
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article');?>
" title="<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['created'],'n');?>
, by <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['author']);?>
">
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);
if ($_smarty_tpl->tpl_vars['showcreated']->value=='y') {?> <span class="date">(<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['created'],'n');?>
)</span><?php }
if ($_smarty_tpl->tpl_vars['showpubl']->value=='y') {?> <span class="date">(<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modArticles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['publishDate']);?>
)</span><?php }?>
				</a>
			</li>
		<?php endfor; endif; ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_modules_list(array('list'=>$_smarty_tpl->tpl_vars['modArticles']->value,'nonums'=>$_smarty_tpl->tpl_vars['nonums']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['more']->value=='y') {?>
		<div class="more">
			<?php $_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable('', null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['urlParam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urlParam']->_loop = false;
 $_smarty_tpl->tpl_vars['urlParamKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['urlParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['urlParam']->key => $_smarty_tpl->tpl_vars['urlParam']->value) {
$_smarty_tpl->tpl_vars['urlParam']->_loop = true;
 $_smarty_tpl->tpl_vars['urlParamKey']->value = $_smarty_tpl->tpl_vars['urlParam']->key;
?>
				<?php if (!empty($_smarty_tpl->tpl_vars['urlParam']->value)&&!empty($_smarty_tpl->tpl_vars['module_params']->value[$_smarty_tpl->tpl_vars['urlParamKey']->value])) {?>
					<?php if (empty($_smarty_tpl->tpl_vars['queryArgs']->value)) {?>
						<?php $_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable('?', null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['queryArgs'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['queryArgs']->value)."&amp;", null, 0);?>
					<?php }?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'queryArgs', null); ob_start();
echo $_smarty_tpl->tpl_vars['queryArgs']->value;
echo $_smarty_tpl->tpl_vars['urlParam']->value;?>
=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value[$_smarty_tpl->tpl_vars['urlParamKey']->value],"url");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }?>
			<?php } ?>
			<?php echo smarty_function_button(array('href'=>"tiki-view_articles.php".((string)$_smarty_tpl->tpl_vars['queryArgs']->value),'_text'=>"More..."),$_smarty_tpl);?>

		</div>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"articles",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
