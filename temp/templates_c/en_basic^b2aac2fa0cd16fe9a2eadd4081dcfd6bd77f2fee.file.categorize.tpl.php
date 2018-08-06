<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:57:36
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\categorize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9898799125b63c4a04c9689-86598092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2aac2fa0cd16fe9a2eadd4081dcfd6bd77f2fee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\categorize.tpl',
      1 => 1469963576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9898799125b63c4a04c9689-86598092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_modify_object_categories' => 0,
    'categories' => 0,
    'tiki_p_admin_categories' => 0,
    'labelcol' => 0,
    'inputcol' => 0,
    'notable' => 0,
    'labelclass' => 0,
    'colsCategorize' => 0,
    'mandatory_category' => 0,
    'auto' => 0,
    'inputgroup' => 0,
    'cat_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63c4a04f0786_23648679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63c4a04f0786_23648679')) {function content_5b63c4a04f0786_23648679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&(count($_smarty_tpl->tpl_vars['categories']->value)>0||$_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y')) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['labelcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['labelcol'] = new Smarty_variable('4', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['inputcol']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['inputcol'] = new Smarty_variable('8', null, 0);?>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		<!-- div class="form-horizontal" -->
			<div class="form-group">
				<label class="col-sm-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
 control-label<?php if (!empty($_smarty_tpl->tpl_vars['labelclass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;
}?>">
					Categorize
				</label>
				<div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
">
					<?php if (isset($_smarty_tpl->tpl_vars['colsCategorize']->value)) {?> colspan="<?php echo $_smarty_tpl->tpl_vars['colsCategorize']->value;?>
"<?php }?>
				</div>

		<!--/div-->
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mandatory_category']->value>=0||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'||(isset($_smarty_tpl->tpl_vars['auto']->value)&&$_smarty_tpl->tpl_vars['auto']->value=='y')) {?>
		<div id="categorizator"><div>
	<?php } else { ?>
		<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?> <div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;
if (isset($_smarty_tpl->tpl_vars['inputgroup']->value)&&$_smarty_tpl->tpl_vars['inputgroup']->value==='y') {?> input-group<?php }?>"><?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'categorizator','_class'=>'btn btn-default btn-sm tips','_text'=>"Select Categories",'_flip_default_open'=>'n'),$_smarty_tpl);?>
</div><?php }?>
		<div class="clearfix"><div id="categorizator" class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
 col-sm-offset-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
" style="display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_categorizator'])&&$_SESSION['tiki_cookie_jar']['show_categorizator']=='y'||(isset($_smarty_tpl->tpl_vars['notable']->value)&&$_smarty_tpl->tpl_vars['notable']->value=='y')) {?>block<?php } else { ?>none<?php }?>;">
	<?php }?>
	<div class="multiselect">
		<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
			<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

			<input type="hidden" name="cat_categorize" value="on">
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link btn-sm tips" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

			</div> 
		<?php } else { ?>
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
					<div class="pull-right">
						<a class="btn btn-link" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
			</div> 
			No categories defined
		<?php }?>
	</div> 
		</div>
	</div>
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y') {?>
		</div> 
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_autocategorize']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		if ('<?php echo $_SESSION['tc_theme_cat'];?>
') {
			if ($('.tree ul[data-id="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_parentcategory'];?>
"] input[type=checkbox]:checked').length == 0) {
				$('#categ-<?php echo $_SESSION['tc_theme_cat'];?>
').prop("checked", true);
			}
		}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
