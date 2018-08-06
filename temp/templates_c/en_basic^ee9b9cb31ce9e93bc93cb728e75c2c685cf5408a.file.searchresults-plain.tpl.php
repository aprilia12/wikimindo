<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 10:56:25
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\searchresults-plain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957818435b6418b9607443-43600070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9b9cb31ce9e93bc93cb728e75c2c685cf5408a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\searchresults-plain.tpl',
      1 => 1464946548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957818435b6418b9607443-43600070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facets' => 0,
    'facet' => 0,
    'value' => 0,
    'label' => 0,
    'results' => 0,
    'result' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6418b96af3e4_18367235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6418b96af3e4_18367235')) {function content_5b6418b96af3e4_18367235($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.pagination_links.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['facets']->value)) {?>
	<div class="facets" style="width: 25%; float: right;">
		<?php  $_smarty_tpl->tpl_vars['facet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->key => $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->_loop = true;
?>
			<div class="form-group facet-hide-group">
				<label for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facet']->value['name']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facet']->value['label']);?>
</label>
				<select id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facet']->value['name']);?>
" class="form-control" multiple data-for="#search-form input[name$='filter~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facet']->value['name']);?>
']" data-join="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facet']->value['operator']);?>
">
					<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
					<?php } ?>
				</select>
			</div>
		<?php } ?>
		<div class="form-group">
			<button class="btn btn-default">Filter</button>
		</div>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$('.facets select').registerFacet();
		$('.facets button').click(function () {
			$('#search-form').submit();
		});

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<div>
<ul class="searchresults">
	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
	<li>
		<strong>
		<?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['result']->value['object_type'],'id'=>$_smarty_tpl->tpl_vars['result']->value['object_id'],'title'=>$_smarty_tpl->tpl_vars['result']->value['title'],'url'=>$_smarty_tpl->tpl_vars['result']->value['url']),$_smarty_tpl);?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_type']=='y') {?>
			(<span class="objecttype"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['object_type']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>)
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_pertinence']=='y'&&!empty($_smarty_tpl->tpl_vars['result']->value['score'])) {?>
			<span class="itemrelevance">(Relevance: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['score']);?>
)</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_visit_count']=='y'&&$_smarty_tpl->tpl_vars['result']->value['visits']!=null) {?>
			<span class="itemhits">(Visits: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['visits']);?>
)</span>
		<?php }?>

		<?php if (!empty($_smarty_tpl->tpl_vars['result']->value['parent_object_id'])) {?> in <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['result']->value['parent_object_type'],'id'=>$_smarty_tpl->tpl_vars['result']->value['parent_object_id']),$_smarty_tpl);
}?>

		<?php if ($_smarty_tpl->tpl_vars['result']->value['_external']) {?><span class="label label-info">External</span><?php }?>
		</strong>

		<blockquote>
			<p><?php echo $_smarty_tpl->tpl_vars['result']->value['highlight'];?>
</p>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_last_modification']=='y') {?>
				<div class="searchdate small">Last modification: <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['result']->value['modification_date']);?>
</div>
			<?php }?>
		</blockquote>
	</li>
	<?php }
if (!$_smarty_tpl->tpl_vars['result']->_loop) {
?>
			<li>No pages matched the search criteria test </li>
	<?php } ?>
</ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['results']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['results']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['results']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
