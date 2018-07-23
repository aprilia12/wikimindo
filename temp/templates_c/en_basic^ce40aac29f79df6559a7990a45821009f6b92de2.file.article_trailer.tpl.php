<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\article_trailer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18258922005b554fcdbde966-69514143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce40aac29f79df6559a7990a45821009f6b92de2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\article_trailer.tpl',
      1 => 1453785664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18258922005b554fcdbde966-69514143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
    'prefs' => 0,
    'show_size' => 0,
    'size' => 0,
    'lang' => 0,
    'js' => 0,
    'tiki_p_edit_article' => 0,
    'articleId' => 0,
    'tiki_p_tell_a_friend' => 0,
    'tiki_p_share' => 0,
    'tiki_p_remove_article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b554fcdc01bf9_35065526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554fcdc01bf9_35065526')) {function content_5b554fcdc01bf9_35065526($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_favorite')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.favorite.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['preview']->value)) {?>
	
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y') {?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
	<div class="clearfix articletrailer">
		<span>
			<?php if ($_smarty_tpl->tpl_vars['show_size']->value=='y') {?>
				(<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 bytes)
			<?php }?>
		</span>
		<div class="actions hidden-print pull-right">
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['lang']->value&&$_smarty_tpl->tpl_vars['prefs']->value['show_available_translations']=='y') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>'article'), 0);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
				<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
					<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li class="dropdown-title">
						Article actions
					</li>
					<li class="divider"></li>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value=='y') {?>
						<li>
							<a href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
 Edit
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_print']=='y') {?>
						<li>
							<a href="tiki-print_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>'print'),$_smarty_tpl);?>
 Print
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_favorites']=='y') {?>
						<li>
							<?php echo smarty_function_favorite(array('type'=>"article",'object'=>$_smarty_tpl->tpl_vars['articleId']->value,'button_classes'=>"icon"),$_smarty_tpl);?>

						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tell_a_friend']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tell_a_friend']->value=='y') {?>
						<li>
							<a href="tiki-tell_a_friend.php?url=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],'url');?>
">
								<?php echo smarty_function_icon(array('name'=>'envelope'),$_smarty_tpl);?>
 Send a link
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_share']->value=='y') {?>
						<li>
							<a class="tips" href="tiki-share.php?url=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],'url');?>
">
								<?php echo smarty_function_icon(array('name'=>'share'),$_smarty_tpl);?>
 Share
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_sharethis']=="y") {?>
						<li>
							<?php $_smarty_tpl->_capture_stack[0][] = array('shared_title', null, null); ob_start(); ?>
								ShareThis
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo '<script'; ?>
 type="text/javascript">
								//Create your sharelet with desired properties and set button element to false
								var object<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
 = SHARETHIS.addEntry({},
										{button:false});
								//Output your customized button
								document.write('<a id="share<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
" href="javascript:void(0);"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
 ShareThis</a>');
								//Tie customized button to ShareThis button functionality.
								var element<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
 = document.getElementById("share<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
"); object<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
.attachButton(element<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
); <?php echo '</script'; ?>
>
						</li>
					<?php }?>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove_article']->value=='y') {?>
							<a href="tiki-list_articles.php?remove=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
								<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
 Remove
							</a>
						<?php }?>
					</li>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?></li></ul><?php }?>
			</div>
		</div>
	</div>
<?php }?>
<?php }} ?>
