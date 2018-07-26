<?php /* Smarty version Smarty-3.1.21, created on 2018-07-25 06:19:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\tiki-admin_webservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8871332115b57fa4b78f171-70744938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01d62b92a50e9b5922f1fd888bbb02f2bd6a990d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\tiki-admin_webservices.tpl',
      1 => 1491307198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8871332115b57fa4b78f171-70744938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webservices' => 0,
    'name' => 0,
    'storedName' => 0,
    'edit' => 0,
    'url' => 0,
    'postbody' => 0,
    'webservicesTypes' => 0,
    '_type' => 0,
    'wstype' => 0,
    'operation' => 0,
    'params' => 0,
    'value' => 0,
    'data' => 0,
    'response' => 0,
    'templates' => 0,
    'template' => 0,
    'number' => 0,
    'storedTemplates' => 0,
    'preview' => 0,
    'preview_output' => 0,
    'nt_name' => 0,
    'nt_engine' => 0,
    'nt_output' => 0,
    'nt_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b57fa4b81fa14_43766751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b57fa4b81fa14_43766751')) {function content_5b57fa4b81fa14_43766751($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Webservices",'admpage'=>"webservices")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Webservices",'admpage'=>"webservices"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Webservices<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Webservices",'admpage'=>"webservices"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="tiki-admin_webservices.php" method="post">
	<div class="t_navbar margin-bottom-md">
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['webservices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_webservices.php?name=".((string)$_smarty_tpl->tpl_vars['name']->value),'class'=>"btn btn-default",'_text'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>

		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['storedName']->value) {?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_webservices.php",'class'=>"btn btn-default",'_text'=>"Create New"),$_smarty_tpl);?>

		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['storedName']->value&&!$_smarty_tpl->tpl_vars['edit']->value) {?>
		<h2><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value);?>
:</h2>
		<div class="row">
			<div class="form-group clearfix">
				<label class="col-sm-4"> URL:</label>
				<div class="col-sm-8">
					<code><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value);?>
</code>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['postbody']->value) {?>
				<div class="form-group clearfix">
					<label class="col-sm-4"> Body of POST request:</label>
					<div class="col-sm-8">
						<pre style="max-height: 40em; overflow: auto; white-space: pre-wrap"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['postbody']->value);?>
</pre>
					</div>
				</div>
			<?php }?>
			<div class="col-sm-8 col-sm-offset-4 clearfix">
				<input type="hidden" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value);?>
">
				<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value);
$_tmp1=ob_get_clean();?><?php echo smarty_function_button(array('_icon_name'=>'edit','_text'=>"Edit",'_script'=>"tiki-admin_webservices.php?name=".$_tmp1."&edit",'_class'=>'btn btn-primary btn-sm'),$_smarty_tpl);?>

				<?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value);
$_tmp2=ob_get_clean();?><?php echo smarty_function_button(array('_icon_name'=>'delete','_text'=>"Delete",'_script'=>"tiki-admin_webservices.php?name=".$_tmp2."&delete",'_class'=>'btn btn-danger btn-sm'),$_smarty_tpl);?>

			</div>
		</div>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Enter the URL of a web services returning either JSON or YAML. Parameters can be specified by enclosing a name between percentage signs. For example: %name%. %service% and %template% are reserved keywords and cannot be used.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<p>URL:<input type="text" name="url" size="75" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value);?>
" class="form-control"/></p>
		<p>
			Type:
			<select name="wstype">
				<?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['webservicesTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value) {
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['_type']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['wstype']->value==$_smarty_tpl->tpl_vars['_type']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_type']->value;?>
</option>
				<?php } ?>
			</select>
		</p>
		<div id="ws_postbody" class="row">
			<label class="col-sm-4"> Body of POST request</label>
			<div class="col-sm-8">
				<textarea name="postbody" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['postbody']->value);?>
</textarea><br>
				Parameters (%name%):
			</div>
			<div class="col-sm-8 col-sm-offset-4">
				<p id="ws_operation" style="display: none;">Operation:
					<input type="text" name="operation" size="30" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['operation']->value);?>
" class="form-control"/>
				</p>
				<p><input type="submit" class="btn btn-default btn-sm" name="parse" value="Lookup"/></p>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
			<input type="hidden" name="edit" value="1">
			<input type="hidden" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value);?>
">
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
		<div class="row">
			<h3>Parameters</h3>
			<?php if (count($_smarty_tpl->tpl_vars['params']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</label>
						<div class="col-sm-8">
							<input type="text" name="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" id="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" class="form-control">
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="col-sm-8 col-sm-offset-4"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 requires no parameter.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>
			<div class="col-sm-8 col-sm-offset-4">
				<div class="form-group">
					<input type="submit" class="btn btn-default btn-sm col-sm-2" name="test" value="Test Input">
					<label class="col-sm-10"> <input type="checkbox" checked="checked" name="nocache">
						Bypass cache
					</label>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
		<div class="row">
			<div class="col-sm-12">
				<h3>Response Information</h3>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>OIntegrate Version</th>
							<td><?php if ($_smarty_tpl->tpl_vars['response']->value->version) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->version);
} else { ?><em>Not supported</em><?php }?>
						</tr>
						<tr>
							<th>Schema Version</th>
							<td><?php if ($_smarty_tpl->tpl_vars['response']->value->schemaVersion) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->schemaVersion);
} else { ?>
									<em>Not supported</em><?php }?>
						</tr>
						<tr>
							<th>Schema Documentation</th>
							<td><?php if ($_smarty_tpl->tpl_vars['response']->value->schemaDocumentation) {?>
									<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->schemaDocumentation);?>
">Available</a><?php } else { ?>
									<em>Not supported</em><?php }?>
						</tr>
						<tr>
							<th>Cache</th>
							<td><?php if ($_smarty_tpl->tpl_vars['response']->value->cacheControl) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->cacheControl->getFieldValue());
} else { ?>
									<em>Not specified, default used</em><?php }?>
						</tr>
						<tr>
							<th>Content Type</th>
							<td><?php if ($_smarty_tpl->tpl_vars['response']->value->contentType) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->contentType->getMediaType());?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['response']->value->contentType->getCharset());?>
)<?php } else { ?>
									<strong>Not specified</strong><?php }?>
						</tr>
						<tr>
							<th colspan="2">Returned Data</th>
						</tr>
						<tr>
							<td colspan="2">
								<pre style="max-height: 40em; overflow: auto; white-space: pre-wrap"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value,100000,"\n[tuncated at approx. 1MB]"));?>
</pre>
							</td>
						</tr>
						<tr>
							<th colspan="2">Proposed Templates</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['number']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
							<tr>
								<th>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['engine']);?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['output']);?>

									<input type="submit" class="btn btn-default btn-sm" name="add[<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
]" value="Add"/>
								</th>
								<td>
									<pre><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['content']);?>
</pre>
								</td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['template']->_loop) {
?>
							<tr>
								<th>None</th>
							</tr>
						<?php } ?>
					</table>
				</div>
				<?php if (empty($_smarty_tpl->tpl_vars['storedName']->value)||$_smarty_tpl->tpl_vars['edit']->value) {?>
					<p>Register this web service. It will be possible to register the templates afterwards. Service name must only contain letters.</p>
					<p>
						<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
							<input type="hidden" name="old_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['storedName']->value;?>
">
							<input type="text" name="new_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['storedName']->value;?>
">
						<?php } else { ?>
							<input type="text" name="new_name" class="form-control">
						<?php }?>
						<input type="submit" class="btn btn-default btn-sm" name="register" value="Register Service"/>
					</p>
				<?php } else { ?>
					<h3>Registered Templates</h3>
					<div class="table-responsive">
						<table>
							<tr>
								<th style="width: 25%">Name</th>
								<th style="width: 25%">Engine</th>
								<th style="width: 25%">Output</th>
								<th style="width: 25%">Preview</th>
							</tr>
							<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storedTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
								<tr>
									<td>
										<input type="submit" class="btn btn-default btn-sm" name="loadtemplate" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name);?>
" title="Edit">
										<?php echo smarty_function_icon(array('name'=>'delete','title'=>'Delete','href'=>((('tiki-admin_webservices.php?name=').((smarty_modifier_escape($_smarty_tpl->tpl_vars['storedName']->value)))).('&deletetemplate=')).((smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name)))),$_smarty_tpl);?>

									</td>
									<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->engine);?>
</td>
									<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->output);?>
</td>
									<td>
										<input type="submit" class="btn btn-default btn-sm" name="preview" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name);?>
"/>
									</td>
									<td>
										<a class="btn btn-link" role="button" data-toggle="collapse" href="#template_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name);?>
"
												aria-expanded="false" aria-controls="template_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name);?>
" title="Toggle template source">
											<?php echo smarty_function_icon(array('name'=>'caret-down'),$_smarty_tpl);?>

										</a>
									</td>
								</tr>
								<tr>
									<td colspan="5">
										<pre style="max-height: 30em; overflow: auto; white-space: pre-wrap" id="template_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->name);?>
" class="collapse">
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value->content);?>
</pre>
									</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['preview']->value==$_smarty_tpl->tpl_vars['template']->value->name) {?>
									<tr>
										<td colspan="5"><?php echo $_smarty_tpl->tpl_vars['preview_output']->value;?>
</td>
									</tr>
								<?php }?>
							<?php } ?>
							<tr>
								<td colspan="5">
									<hr>
								</td>
							</tr>
							<tr>
								<td style="padding: 0 .5em">
									<input type="text" name="nt_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nt_name']->value);?>
" class="form-control"/></td>
								<td style="padding: 0 .5em">
									<select id="nt_engine" name="nt_engine" class="form-control">
										<option value=""></option>
										<option value="javascript" <?php if ($_smarty_tpl->tpl_vars['nt_engine']->value=='javascript') {?> selected="selected"<?php }?>>
											JavaScript
										</option>
										<option value="smarty"<?php if ($_smarty_tpl->tpl_vars['nt_engine']->value=='smarty') {?> selected="selected"<?php }?>>Smarty
										</option>
										<option value="index"<?php if ($_smarty_tpl->tpl_vars['nt_engine']->value=='index') {?> selected="selected"<?php }?>>Index</option>
									</select>
								</td>
								<td style="padding: 0 .5em">
									<select id="nt_output" name="nt_output" class="form-control">
										<option value=""></option>
										<option value="html" <?php if ($_smarty_tpl->tpl_vars['nt_output']->value=='html') {?> selected="selected"<?php }?>>HTML</option>
										<option value="tikiwiki"<?php if ($_smarty_tpl->tpl_vars['nt_output']->value=='tikiwiki') {?> selected="selected"<?php }?>>Wiki
										</option>
										<option value="index"<?php if ($_smarty_tpl->tpl_vars['nt_output']->value=='index') {?> selected="selected"<?php }?>>Index</option>
										<option value="mindex"<?php if ($_smarty_tpl->tpl_vars['nt_output']->value=='mindex') {?> selected="selected"<?php }?>>Multi-Index
										</option>
									</select>
								</td>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td colspan="4">
									<textarea name="nt_content" rows="10" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nt_content']->value);?>
</textarea>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<input type="submit" class="btn btn-default btn-sm" name="create_template" value="Register Template"/>
								</td>
							</tr>
						</table>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
</form><?php }} ?>
