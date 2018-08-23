<?php /* Smarty version Smarty-3.1.21, created on 2018-08-21 05:50:14
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-my_tiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1578980175b7b8bf62006d1-84225246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d365d69ad99a198c2a05e791d95772b3043e78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-my_tiki.tpl',
      1 => 1438938572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578980175b7b8bf62006d1-84225246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mytiki_pages' => 0,
    'userwatch' => 0,
    'user' => 0,
    'sort_mode' => 0,
    'user_pages' => 0,
    'mytiki_gals' => 0,
    'user_galleries' => 0,
    'mytiki_articles' => 0,
    'user_articles' => 0,
    'mytiki_user_items' => 0,
    'user_items' => 0,
    'nb_item_comments' => 0,
    'mytiki_msgs' => 0,
    'msgs' => 0,
    'mytiki_tasks' => 0,
    'tasks' => 0,
    'mytiki_forum_topics' => 0,
    'user_forum_topics' => 0,
    'mytiki_forum_replies' => 0,
    'user_forum_replies' => 0,
    'mytiki_blogs' => 0,
    'user_blogs' => 0,
    'user_blog_posts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b7b8bf63350a9_50634822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7b8bf63350a9_50634822')) {function content_5b7b8bf63350a9_50634822($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"My Account")); $_block_repeat=true; echo smarty_block_title(array('help'=>"My Account"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"My Account"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<br>

<?php $_smarty_tpl->_capture_stack[0][] = array('my', null, null); ob_start(); ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['mytiki_pages']->value=='y') {?>
		<div id="content1" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My pages<?php } else { ?>User Pages<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>
							<a href="tiki-my_tiki.php?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='pageName_desc') {?>pageName_asc<?php } else { ?>pageName_desc<?php }?>">Page</a>
						</th>
						<th>Creator</th>
						<th>Last editor</th>
						<th>
							<a href="tiki-my_tiki.php?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='date_desc') {?>date_asc<?php } else { ?>date_desc<?php }?>">Last modification</a>
						</th>
						<th></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],"url");?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],40,"(...)");?>
</a>
							</td>
							<td class="username">
								<?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['creator']) {?>y<?php } else { ?>&nbsp;<?php }?>
							</td>
							<td class="username">
								<?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['lastEditor']) {?>y<?php } else { ?>&nbsp;<?php }?>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['date']);?>

							</td>
							<td class="action">
								<a class="tips" href="tiki-editpage.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'],"url");?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
				<ul class="nav nav-pills pull-right">
					<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_pages']->value);?>
</span></a></li>
				</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['mytiki_gals']->value=='y') {?>
		<div id="content2" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My galleries<?php } else { ?>User Galleries<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Gallery</th>
						<th style="width:50px"></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_galleries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'],'gallery');?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</a>
							</td>
							<td class="action">
								<a class="tips" href="tiki-galleries.php?editgal=<?php echo $_smarty_tpl->tpl_vars['user_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'];?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_galleries']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['mytiki_articles']->value=='y') {?>
		<div id="content3" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My Articles<?php } else { ?>User Articles<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Article</th>
						<th style="width:50px"></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_articles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":Edit" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'],'article');?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'];?>

								</a>
							</td>
							<td class="action">
								<a class="tips" href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['user_articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['articleId'];?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_articles']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['mytiki_user_items']->value=='y') {?>
		<div id="content4" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My User Items<?php } else { ?>User Items<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Item</th>
						<th>Tracker</th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['trackerId'];?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['itemId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'];?>

								</a>
							</td>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['trackerId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</a>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_items']->value);?>
</span></a></li>
				<li><a href="#">Comments <span class="badge"><?php echo $_smarty_tpl->tpl_vars['nb_item_comments']->value;?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['mytiki_msgs']->value=='y') {?>
		<div id="content5" class="content clearfix">
			<h4>Unread Messages</h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Subject</th>
						<th>From</th>
						<th>Date</th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['msgs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="messu-read.php?offset=0&amp;flag=&amp;flagval=&amp;find=&amp;sort_mode=date_desc&amp;priority=&amp;msgId=<?php echo $_smarty_tpl->tpl_vars['msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['msgId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['subject'];?>

								</a>
							</td>
							<td class="text">
								<?php echo $_smarty_tpl->tpl_vars['msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['user_from'];?>

							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['msgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['date']);?>

							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['msgs']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['mytiki_tasks']->value=='y') {?>
		<div id="content6" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My tasks<?php } else { ?>My Tasks<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
				<tr>
					<th>Tasks</th>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr>
						<td class="text">
							<a href="tiki-user_tasks.php?taskId=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['taskId'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'];?>

							</a>
						</td>
					</tr>
				<?php endfor; endif; ?>
			</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['tasks']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['mytiki_forum_topics']->value=='y') {?>
		<div id="content7" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My forum topics<?php } else { ?>User forum topics<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Forum topic</th>
						<th>Date of post</th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_forum_topics']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'];?>

								</a>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_forum_topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['commentDate']);?>

							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_forum_topics']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['mytiki_forum_replies']->value=='y') {?>
		<div id="content8" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My forum replies<?php } else { ?>User forum replies<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Forum reply</th>
						<th>Date of post</th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_forum_replies']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['object'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'];?>

								</a>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_forum_replies']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['commentDate']);?>

							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_forum_replies']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['mytiki_blogs']->value=='y') {?>
		<div id="content9" class="content clearfix">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My blogs<?php } else { ?>User Blogs<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Blog</th>
						<th style="width:50px"></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_blogs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['blogId'],'blog');?>
"><?php echo $_smarty_tpl->tpl_vars['user_blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'];?>
</a>
							</td>
							<td class="action">
								<a class="tips" href="tiki-edit_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['user_blogs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['blogId'];?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<ul class="nav nav-pills pull-right">
				<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_blogs']->value);?>
</span></a></li>
			</ul>
			<div class="clearfix">
				<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value) {?>My blog Posts<?php } else { ?>User Blog Posts<?php }?></h4>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>Blog post</th>
							<th style="width:50px"></th>
						</tr>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_blog_posts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<tr>
								<td class="text">
									<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blog_posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['postId'],'blogpost');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['user_blog_posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>
</a>
								</td>
								<td class="action">
									<a class="tips" href="tiki-blog_post.php?postId=<?php echo $_smarty_tpl->tpl_vars['user_blog_posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['postId'];?>
" title=":Edit">
										<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

									</a>
								</td>
							</tr>
						<?php endfor; endif; ?>
					</table>
				</div>
				<ul class="nav nav-pills pull-right">
					<li><a href="#">Records <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user_blog_posts']->value);?>
</span></a></li>
				</ul>
			</div>
		</div>
	<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo Smarty::$_smarty_vars['capture']['my'];?>

<?php if (preg_replace('!\s+!u', '',Smarty::$_smarty_vars['capture']['my'])=='') {?>
	To display the objects you created or contributed to: <a href="tiki-user_information.php#contentuser_information-2">My Items</a>
<?php }?><?php }} ?>
