<?php /* Smarty version Smarty-3.1.21, created on 2018-08-09 03:30:29
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-list_faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15546872865b6b99352e4442-41363236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2728fbf6accbb1332523c90bc1a9ac889e76581b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-list_faqs.tpl',
      1 => 1495035066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15546872865b6b99352e4442-41363236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channels' => 0,
    'find' => 0,
    'prefs' => 0,
    'js' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tiki_p_admin_faqs' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'faqId' => 0,
    'title' => 0,
    'description' => 0,
    'canSuggest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6b993537c9f8_18004040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6b993537c9f8_18004040')) {function content_5b6b993537c9f8_18004040($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_popup')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"FAQs",'admpage'=>"faqs")); $_block_repeat=true; echo smarty_block_title(array('help'=>"FAQs",'admpage'=>"faqs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
FAQs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"FAQs",'admpage'=>"faqs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_list_faqs')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_list_faqs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Available FAQs")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Available FAQs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Available FAQs</h2>

		<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

			
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>

		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
			<table class="table table-striped table-hover">
				<tr>
					<th>
						<a href="tiki-list_faqs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='title_desc') {?>title_asc<?php } else { ?>title_desc<?php }?>">Title</a>
					</th>
					<th style="text-align:right;">
						<a href="tiki-list_faqs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Visits</a>
					</th>
					<th style="text-align:right;">
						<a href="tiki-list_faqs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='questions_desc') {?>questions_asc<?php } else { ?>questions_desc<?php }?>">Questions / Suggested</a>
					</th>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_faqs']->value=='y') {?>
						<th></th>
					<?php }?>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr>
						<td class="text">
							<a class="tablename" href="tiki-view_faq.php?faqId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['faqId'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['title']);?>
</a>
							<div class="subcomment">
								<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description']));?>

							</div>
						</td>
						<td class="integer">
							<span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hits'];?>
</span>
						</td>
						<td class="integer">
							<span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['questions'];?>
</span> / <span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['suggested'];?>
</span>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_faqs']->value=='y') {?>
							<td class="action">
								<?php $_smarty_tpl->_capture_stack[0][] = array('faq_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-list_faqs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;faqId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['faqId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-faq_questions.php?faqId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['faqId'];?>
"><?php echo smarty_function_icon(array('name'=>'help','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Questions"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-list_faqs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['faqId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
								<a
									class="tips"
									title="Actions"
									href="#"
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>Smarty::$_smarty_vars['capture']['faq_actions']),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['faq_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
						<?php }?>
					</tr>
				<?php endfor; else: ?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_faqs']->value=='y') {
echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);
} else {
echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);
}?>
				<?php endif; ?>
			</table>
		</div>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Available FAQs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_faqs']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit/Create")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit/Create"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['faqId']->value>0) {?>
				<h2>Edit this FAQ: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
				<div class="t_navbar">
					<?php echo smarty_function_button(array('href'=>"tiki-list_faqs.php",'class'=>"btn btn-default",'_text'=>"Create new FAQ"),$_smarty_tpl);?>

				</div>
			<?php } else { ?>
				<h2>Create New FAQ:</h2>
			<?php }?>

			<form action="tiki-list_faqs.php" method="post" class="form-horizontal">
				<input type="hidden" name="faqId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['faqId']->value);?>
">
				<div class="form-group">
					<label class="control-label col-md-3">
						Title:
					</label>
					<div class="col-md-9">
							<input type="text" class="form-control" name="title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">
						Description:
					</label>
					<div class="col-md-9">
						<textarea name="description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
					</div>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<div class="checkbox">
					<label class="control-label col-md-offset-3">
						<input type="checkbox" name="canSuggest" <?php if ($_smarty_tpl->tpl_vars['canSuggest']->value=='y') {?>checked="checked"<?php }?>>
						Users can suggest questions:
					</label>
				</div>
						<td>&nbsp;

						</td>
						<td>
							<input type="submit" class="btn btn-primary btn-sm" name="save" value="Save">
						</td>
					</tr>
				</table>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit/Create"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_list_faqs'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
