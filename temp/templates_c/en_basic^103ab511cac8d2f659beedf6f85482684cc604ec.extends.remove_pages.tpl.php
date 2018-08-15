<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:59:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki\remove_pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18891657415b6d53faae5036-44032741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61d03ed5bb8946bdbb30092b2991ad1aaa655e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki\\remove_pages.tpl',
      1 => 1519728594,
      2 => 'file',
    ),
    'a600b93e2fb9e9f18c9e349f37e6a8351c12d0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\layouts\\internal\\modal.tpl',
      1 => 1495960002,
      2 => 'file',
    ),
    '4721eeec16c12bb40240c0bccf389166d1a6a0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_items.tpl',
      1 => 1494583678,
      2 => 'file',
    ),
    '1fb04cb7d224494031e39d1fa23bb68e3d4b83cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-edit-page-included_by.tpl',
      1 => 1510984094,
      2 => 'file',
    ),
    'f952e6101b9645932ee3f9d06c6e81b383dc92d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_hidden.tpl',
      1 => 1492547310,
      2 => 'file',
    ),
    'b2ee660cc89f40e2b7f35d9ac29536868597c2e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\access\\include_footer.tpl',
      1 => 1466361260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18891657415b6d53faae5036-44032741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d53fab8cfe8_49139125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d53fab8cfe8_49139125')) {function content_5b6d53fab8cfe8_49139125($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_service')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<?php /*  Call merged included template "access/include_items.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18891657415b6d53faae5036-44032741');
content_5b6d53fab33256_45243958($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_items.tpl" */?>
	<?php $_smarty_tpl->tpl_vars['iname'] = new Smarty_variable('', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['extra']->value['version']==='last') {?>
		<?php $_smarty_tpl->tpl_vars['iname'] = new Smarty_variable('all', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['idesc'] = new Smarty_variable('all versions', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['extra']->value['version']==='all') {?>
		<?php $_smarty_tpl->tpl_vars['iname'] = new Smarty_variable('last', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['idesc'] = new Smarty_variable('last version only', null, 0);?>
	<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['included_by']->value)) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        The following item(s) include page(s) being deleted and will break.
		        <?php /*  Call merged included template "tiki-edit-page-included_by.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-edit-page-included_by.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18891657415b6d53faae5036-44032741');
content_5b6d53fab4e7d8_68324748($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-edit-page-included_by.tpl" */?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
	<form id='confirm-action' class='confirm-action' action="<?php echo smarty_function_service(array('controller'=>((string)$_smarty_tpl->tpl_vars['confirmController']->value),'action'=>((string)$_smarty_tpl->tpl_vars['confirmAction']->value)),$_smarty_tpl);?>
" method="post">
		<?php $_smarty_tpl->tpl_vars['div_checkbox_redirect_display'] = new Smarty_variable('block', null, 0);?>
		<?php if (!empty($_smarty_tpl->tpl_vars['iname']->value)&&!$_smarty_tpl->tpl_vars['extra']->value['one']) {?>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['iname']->value;?>
" onclick="$('#div_checkbox_redirect').toggle(); if (!this.checked) $('#div_redirect').hide(); return true;"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove <?php echo $_smarty_tpl->tpl_vars['idesc']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
			</div>
			<?php $_smarty_tpl->tpl_vars['div_checkbox_redirect_display'] = new Smarty_variable('none', null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['extra']->value['version']==='all') {?>
			<?php $_smarty_tpl->tpl_vars['div_checkbox_redirect_display'] = new Smarty_variable('block', null, 0);?>
		<?php }?>
		<?php /*  Call merged included template "access/include_hidden.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18891657415b6d53faae5036-44032741');
content_5b6d53fab65ed8_78959326($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_hidden.tpl" */?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pagealias']=='y') {?>
			<div class="checkbox" id="div_checkbox_redirect" style="display:<?php echo $_smarty_tpl->tpl_vars['div_checkbox_redirect_display']->value;?>
;">
					<label>
						<input type='checkbox' id='create_redirect' name='create_redirect' value='y' onclick="$('#div_redirect').toggle();return true;" > Create redirect
						<a tabindex="0" target="_blank" data-toggle="popover" data-trigger="hover" title="Create a 301 Redirect (\"moved permanently\") to specified page. An SEO-friendly, automatic redirect from the page being deleted to the designated new page (ex.: for search engines or users that may have bookmarked the page being deleted)">
							<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

						</a>
					</label>
			</div>
			<div id="div_redirect" class="form-group" style="display:none;">
				<div class="col-sm-2">
					<label for="destpage" class="col-sm-2">Redirect to:</label>
				</div>
				<div class="col-sm-10">
					<input type='text' id='destpage' name='destpage' class="form-control" value=''>
				</div>
			</div>
		<?php }?>
	</form><br><br>
	<?php /*  Call merged included template "access/include_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '18891657415b6d53faae5036-44032741');
content_5b6d53fab758e7_54714901($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_footer.tpl" */?>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:59:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_items.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6d53fab33256_45243958')) {function content_5b6d53fab33256_45243958($_smarty_tpl) {?><div class="form-group">
	<h5><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customMsg']->value);?>
</h5>
	<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&count($_smarty_tpl->tpl_vars['items']->value)>0) {?>
		<?php if (count($_smarty_tpl->tpl_vars['items']->value)<16) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
					<li>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>

					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
			<?php } ?>
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:59:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-edit-page-included_by.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6d53fab4e7d8_68324748')) {function content_5b6d53fab4e7d8_68324748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_type')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_type.php';
if (!is_callable('smarty_function_object_link')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.object_link.php';
?><ul>
  <?php  $_smarty_tpl->tpl_vars['include'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['include']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['included_by']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['include']->key => $_smarty_tpl->tpl_vars['include']->value) {
$_smarty_tpl->tpl_vars['include']->_loop = true;
?>
  <li>
    <?php echo smarty_function_object_type(array('type'=>$_smarty_tpl->tpl_vars['include']->value['type']),$_smarty_tpl);?>
:
    <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['include']->value['type'],'objectId'=>$_smarty_tpl->tpl_vars['include']->value['itemId']),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['include']->value['start']||$_smarty_tpl->tpl_vars['include']->value['end']) {?> - <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include']->value['start']) {?>
    from "<?php echo $_smarty_tpl->tpl_vars['include']->value['start'];?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include']->value['end']) {?>
    to "<?php echo $_smarty_tpl->tpl_vars['include']->value['end'];?>
"
    <?php }?>

  </li>
  <?php } ?>
</ul>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:59:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_hidden.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6d53fab65ed8_78959326')) {function content_5b6d53fab65ed8_78959326($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
?><?php if (isset($_smarty_tpl->tpl_vars['items']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedItems'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
	<input type='hidden' name='items' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedItems']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['extra']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedExtra'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['extra']->value), null, 0);?>
	<input type='hidden' name='extra' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedExtra']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['toList']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedToList'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['toList']->value), null, 0);?>
	<input type='hidden' name='toList' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedToList']->value);?>
">
<?php }?>
<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:59:38
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\access\include_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b6d53fab758e7_54714901')) {function content_5b6d53fab758e7_54714901($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<div class="modal-footer">
		<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['extra']->value['referer'];?>
">
			Back
		</a>
		<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
				<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

			<?php } else { ?>
				OK
			<?php }?>
		</button>
	</div>
<?php }?>

<?php }} ?>
