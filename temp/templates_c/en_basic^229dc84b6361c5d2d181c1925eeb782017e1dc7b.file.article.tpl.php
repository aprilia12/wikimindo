<?php /* Smarty version Smarty-3.1.21, created on 2018-07-23 05:47:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19706120805b554fcdb23140-46906298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '229dc84b6361c5d2d181c1925eeb782017e1dc7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\article.tpl',
      1 => 1497148350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19706120805b554fcdb23140-46906298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'show_topline' => 0,
    'topline' => 0,
    'articleId' => 0,
    'arttitle' => 0,
    'show_subtitle' => 0,
    'subtitle' => 0,
    'show_author' => 0,
    'authorName' => 0,
    'author' => 0,
    'show_pubdate' => 0,
    'show_expdate' => 0,
    'show_reads' => 0,
    'publishDate' => 0,
    'expireDate' => 0,
    'reads' => 0,
    'comment_can_rate_article' => 0,
    'tiki_p_ratings_view_results' => 0,
    'tiki_p_admin' => 0,
    'use_ratings' => 0,
    'rating' => 0,
    'entrating' => 0,
    'user' => 0,
    'preview' => 0,
    'tiki_p_rate_article' => 0,
    'tiki_p_admin_cms' => 0,
    'show_image_caption' => 0,
    'image_caption' => 0,
    'topicName' => 0,
    'list_image_x' => 0,
    'topicId' => 0,
    'useImage' => 0,
    'hasImage' => 0,
    'big_image' => 0,
    'imageIsChanged' => 0,
    'previewId' => 0,
    'subId' => 0,
    'image_x' => 0,
    'image_y' => 0,
    'style' => 0,
    'topics' => 0,
    'isfloat' => 0,
    'article_attributes' => 0,
    'attname' => 0,
    'attvalue' => 0,
    'parsed_heading' => 0,
    'tiki_p_read_article' => 0,
    'parsed_body' => 0,
    'pages' => 0,
    'first_page' => 0,
    'prev_page' => 0,
    'pagenum' => 0,
    'next_page' => 0,
    'last_page' => 0,
    'show_linkto' => 0,
    'linkto' => 0,
    'related_articles' => 0,
    'related' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b554fcdbcef69_60381515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b554fcdbcef69_60381515')) {function content_5b554fcdbcef69_60381515($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_modifier_username')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_rating_result_avg')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result_avg.php';
if (!is_callable('smarty_block_repeat')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.repeat.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_rating')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating.php';
if (!is_callable('smarty_function_rating_result')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.rating_result.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_sefurl')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_block_self_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.self_link.php';
?><article class="article">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_trailer_pos']!='between') {
echo $_smarty_tpl->getSubTemplate ('article_trailer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
	<?php if ($_smarty_tpl->tpl_vars['show_topline']->value=='y'&&$_smarty_tpl->tpl_vars['topline']->value) {?>
		<div class="articletopline"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topline']->value);?>
</div>
	<?php }?>
	<header class="articletitle">
		<h1>
			<?php echo smarty_function_object_link(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['articleId']->value,'title'=>$_smarty_tpl->tpl_vars['arttitle']->value),$_smarty_tpl);?>

		</h1>
		<?php if ($_smarty_tpl->tpl_vars['show_subtitle']->value=='y'&&$_smarty_tpl->tpl_vars['subtitle']->value) {?>
			<div class="articlesubtitle"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subtitle']->value);?>
</div>
		<?php }?>

		<span class="titleb">
			<?php if ($_smarty_tpl->tpl_vars['show_author']->value=='y'&&($_smarty_tpl->tpl_vars['authorName']->value||$_smarty_tpl->tpl_vars['author']->value)) {?>Author: <?php if ($_smarty_tpl->tpl_vars['authorName']->value) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['authorName']->value);
} else {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['author']->value);
}?>
				<?php if ($_smarty_tpl->tpl_vars['show_pubdate']->value=='y'||$_smarty_tpl->tpl_vars['show_expdate']->value=='y'||$_smarty_tpl->tpl_vars['show_reads']->value=='y') {?> - <?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['show_pubdate']->value=='y'&&$_smarty_tpl->tpl_vars['publishDate']->value) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['publishDate']->value,'Published');?>

				<?php if ($_smarty_tpl->tpl_vars['show_expdate']->value=='y'||$_smarty_tpl->tpl_vars['show_reads']->value=='y') {?> - <?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['show_expdate']->value=='y'&&$_smarty_tpl->tpl_vars['expireDate']->value) {?>Expires <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['expireDate']->value);?>

				<?php if ($_smarty_tpl->tpl_vars['show_reads']->value=='y') {?> - <?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['show_reads']->value=='y') {?>(<?php echo $_smarty_tpl->tpl_vars['reads']->value;?>
 Reads)<?php }?>
		</span>
		<?php if ($_smarty_tpl->tpl_vars['comment_can_rate_article']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
			- <span class="ratingResultAvg">Users rating: </span><?php echo smarty_function_rating_result_avg(array('id'=>$_smarty_tpl->tpl_vars['articleId']->value,'type'=>'article'),$_smarty_tpl);?>

		<?php }?>
	</header>

	<?php if ($_smarty_tpl->tpl_vars['use_ratings']->value=='y') {?>
		<div class="articlerating">
			Rating:
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['rating']->value)); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['rating']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php echo smarty_function_icon(array('name'=>'star'),$_smarty_tpl);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['rating']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php if ($_smarty_tpl->tpl_vars['rating']->value>$_smarty_tpl->tpl_vars['entrating']->value) {?>
				<?php echo smarty_function_icon(array('name'=>'star-half'),$_smarty_tpl);?>

			<?php }?>
			(<?php echo $_smarty_tpl->tpl_vars['rating']->value;?>
/10)
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['author']->value!=$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['comment_can_rate_article']->value=='y'&&!isset($_smarty_tpl->tpl_vars['preview']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_rate_article']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y')) {?>
		<form method="post" action="">
			<?php echo smarty_function_rating(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['articleId']->value),$_smarty_tpl);?>

		</form>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['comment_can_rate_article']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['article_user_rating']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
		<?php echo smarty_function_rating_result(array('id'=>$_smarty_tpl->tpl_vars['articleId']->value,'type'=>'article'),$_smarty_tpl);?>

	<?php }?>



	<div class="articleheading media clearfix">

		<div class="pull-left">
			<?php $_smarty_tpl->_capture_stack[0][] = array('imgTitle', null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_image_caption']->value=='y'&&$_smarty_tpl->tpl_vars['image_caption']->value) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_caption']->value);
} elseif (isset($_smarty_tpl->tpl_vars['topicName']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['topicName']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php $_smarty_tpl->tpl_vars["big_image"] = new Smarty_variable($_smarty_tpl->tpl_vars['prefs']->value['art_header_text_pos']=='below'&&$_smarty_tpl->tpl_vars['list_image_x']->value>0, null, 0);?>
		

			
			<?php if ($_smarty_tpl->tpl_vars['topicId']->value) {?>
				<a href="tiki-view_articles.php?topic=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['useImage']->value=='y'&&$_smarty_tpl->tpl_vars['hasImage']->value!='y') {
} else { ?>thumbnail<?php }
if ($_smarty_tpl->tpl_vars['big_image']->value) {?> cboxElement<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['show_image_caption']->value&&$_smarty_tpl->tpl_vars['image_caption']->value) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_caption']->value);
} else { ?>List all articles of the same topic<?php if ($_smarty_tpl->tpl_vars['topicName']->value!='') {?> (<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topicName']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)<?php }
}?>"
			><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['useImage']->value=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['hasImage']->value=='y') {?>
				
				<img
					alt="<?php echo Smarty::$_smarty_vars['capture']['imgTitle'];?>
"
					class="article-image custom-image"
					src="article_image.php?image_type=<?php if (isset($_smarty_tpl->tpl_vars['preview']->value)&&$_smarty_tpl->tpl_vars['imageIsChanged']->value=='y') {?>preview&amp;id=<?php echo $_smarty_tpl->tpl_vars['previewId']->value;
} elseif (isset($_smarty_tpl->tpl_vars['preview']->value)&&$_smarty_tpl->tpl_vars['subId']->value) {?>submission&amp;id=<?php echo $_smarty_tpl->tpl_vars['subId']->value;
} else { ?>article&amp;id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;
if ($_smarty_tpl->tpl_vars['image_x']->value>0) {?>&width=<?php echo $_smarty_tpl->tpl_vars['image_x']->value;
}
}?>"
					<?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable('', null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['image_y']->value>0) {
$_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((($_smarty_tpl->tpl_vars['style']->value).("max-height:")).($_smarty_tpl->tpl_vars['image_y']->value)).("px;"), null, 0);
}?> style="max-width: 100%; height: auto; <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"
				>
				<?php } else { ?>
				
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topicName']->value);?>

				<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['topicId']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['topicId']->value]['image_size']>0) {?>
				<img
					
					alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['topicName']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
					class="article-image topic-image"
					src="article_image.php?image_type=topic&amp;id=<?php echo $_smarty_tpl->tpl_vars['topicId']->value;?>
"
				>
				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['topicId']->value]['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['topicId']->value) {?></a><?php }?>

		
		
		</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_header_text_pos']=='below'&&$_smarty_tpl->tpl_vars['list_image_x']->value>0) {?>
		<div style="width: 100%; float: left;">
			<?php } elseif ($_smarty_tpl->tpl_vars['isfloat']->value=='n'&&$_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['topicId']->value]['image_size']>0) {?>
		<div class="media-body">
			<?php } else { ?>
		<div class="articleheadingtext media-body" <?php if ($_smarty_tpl->tpl_vars['isfloat']->value=='y') {?>style="display: inline;"<?php }?>>
			<?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['article_attributes']->value) {?>
					<div class="articleattributes">
						<?php  $_smarty_tpl->tpl_vars['attvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['attname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attvalue']->key => $_smarty_tpl->tpl_vars['attvalue']->value) {
$_smarty_tpl->tpl_vars['attvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['attname']->value = $_smarty_tpl->tpl_vars['attvalue']->key;
?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attname']->value);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attvalue']->value);?>
<br>
						<?php } ?>
					</div>
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['parsed_heading']->value;?>

			
		</div>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_trailer_pos']=='between') {
echo $_smarty_tpl->getSubTemplate ('article_trailer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
	<div class="articlebody clearfix">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y') {?>
			<?php echo $_smarty_tpl->tpl_vars['parsed_body']->value;?>

		<?php } else { ?>
			<div class="alert alert-danger">
				You do not have permission to read complete articles.
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['article_paginate']=='y'&&$_smarty_tpl->tpl_vars['pages']->value>1) {?>
			<div align="center">
				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article','with_next');?>
page=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
" class="tips" title=":First page">
					<?php echo smarty_function_icon(array('name'=>"backward_step"),$_smarty_tpl);?>

				</a>

				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article','with_next');?>
page=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
" class="tips" title=":Previous page">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>

				<small>page:<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</small>

				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article','with_next');?>
page=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
" class="tips" title=":Next page">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>

				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article','with_next');?>
page=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
" class="tips" title=":Last page">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['show_linkto']->value=='y'&&$_smarty_tpl->tpl_vars['linkto']->value) {?>
		<div class="articlesource">
			Source: <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkto']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['popupLinks']=='y') {?> target="_blank"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkto']->value);?>
</a>
		</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['related_articles']->value)) {?>
		<div class="related_articles">
			<h4>Related content:</h4>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['related'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related']->key => $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->_loop = true;
?>
					<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('articleId'=>$_smarty_tpl->tpl_vars['related']->value['articleId'])); $_block_repeat=true; echo smarty_block_self_link(array('articleId'=>$_smarty_tpl->tpl_vars['related']->value['articleId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['related']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('articleId'=>$_smarty_tpl->tpl_vars['related']->value['articleId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
				<?php } ?>
			</ul>
		</div>
	<?php }?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('copyright_section', null, null); ob_start(); ?>
		<?php echo $_smarty_tpl->getSubTemplate ('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('copyright_context'=>"article"), 0);?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	
	<?php if (Smarty::$_smarty_vars['capture']['copyright_section']!='') {?>
		<footer class="help-block">
			<?php echo Smarty::$_smarty_vars['capture']['copyright_section'];?>

		</footer>
	<?php }?>
</article>
<?php }} ?>
