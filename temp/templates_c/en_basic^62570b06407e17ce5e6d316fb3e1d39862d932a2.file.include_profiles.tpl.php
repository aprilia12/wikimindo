<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 03:53:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5227668235b5140816974e8-16469327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62570b06407e17ce5e6d316fb3e1d39862d932a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_profiles.tpl',
      1 => 1509681234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5227668235b5140816974e8-16469327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
    'headerlib' => 0,
    'profilefeedback' => 0,
    'prefs' => 0,
    'openSources' => 0,
    'profile' => 0,
    'category_list' => 0,
    'cat' => 0,
    'categories' => 0,
    'sources' => 0,
    'source' => 0,
    'repository' => 0,
    'profilesFilterUrlStart' => 0,
    'tikiMajorVersion' => 0,
    'profilesFilterUrlMid' => 0,
    'profilesFilterUrlFeaturedProfiles' => 0,
    'profilesFilterUrlEnd' => 0,
    'profilesFilterUrlFullProfiles' => 0,
    'profilesFilterUrlMiniProfiles' => 0,
    'profilesFilterUrlLearningProfiles' => 0,
    'result' => 0,
    'k' => 0,
    'show_details_for' => 0,
    'baseURI' => 0,
    'show_details_for_profile_num' => 0,
    'show_details_for_domain' => 0,
    'show_details_for_fullname' => 0,
    'export_yaml' => 0,
    'export_type' => 0,
    'modified_list' => 0,
    'data' => 0,
    'name' => 0,
    'current' => 0,
    'prefs_to_export' => 0,
    'default' => 0,
    'modules_for_export' => 0,
    'modules_to_export' => 0,
    'entry' => 0,
    'profile_tester_name' => 0,
    'empty_cache' => 0,
    'test_source' => 0,
    'oldSources' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51408176a410_29094283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51408176a410_29094283')) {function content_5b51408176a410_29094283($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_listfilter')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.listfilter.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
?>
<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value,'url');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();
echo $_tmp2;
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["baseURI"] = new Smarty_variable(((string)$_SERVER['REQUEST_URI'])."&ticket=".$_tmp3."&daconfirm=y", null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-profile.js");?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<a class="alert-link" href="http://profiles.tiki.org">Tiki Configuration Profiles</a>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['profilefeedback']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		The following list of changes has been applied:
		<ul>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['profilefeedback']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<li>
				<p><?php echo $_smarty_tpl->tpl_vars['profilefeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];?>
</p>
			</li>
		<?php endfor; endif; ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admin-profiles')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Apply")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Apply"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
			<?php if ($_smarty_tpl->tpl_vars['openSources']->value=='some') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Some of your Profiles Repositories are not connecting. This may prevent you from applying certain profiles
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<form method="get" action="tiki-admin.php?page=profiles">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<h4>Find profiles <small>Search by name, types and repository</small></h4>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label" for="profile">Profile name </label>
							<input type="text" class="form-control" name="profile" placeholder="Find..." id="profile" value="<?php if (isset($_smarty_tpl->tpl_vars['profile']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value);
}?>" />
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['category_list']->value)&&count($_smarty_tpl->tpl_vars['category_list']->value)>0) {?>
							<div class="form-group">
								<label class="control-label" for="categories">Profile types</label>
									<select multiple="multiple" name="categories[]" id="categories" class="form-control" style="min-height: 8em; max-height: 15em">
										<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cat']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)&&in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value)) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cat']->value);?>
</option>
										<?php } ?>
									</select>
							</div>
						<?php }?>
						<div class="form-group">
							<label class="control-label" for="repository">Profile repository</label>
							<select name="repository" id="repository" class="form-control">
								<option value="">All</option>
								<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['url']);?>
"<?php if (isset($_smarty_tpl->tpl_vars['repository']->value)&&$_smarty_tpl->tpl_vars['repository']->value==$_smarty_tpl->tpl_vars['source']->value['url']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source']->value['short']);?>
</option>
								<?php } ?>
							</select>
						</div>
						<input type="hidden" name="page" value="profiles">
						<input type="hidden" name="redirect" value=0>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-primary timeout" name="list" value="Find" />
						</div>
					</div>
					<div class="col-sm-6">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<?php $_smarty_tpl->tpl_vars['profilesFilterUrlStart'] = new Smarty_variable('tiki-admin.php?profile=&categories%5B%5D=', null, 0);?>
								<?php $_smarty_tpl->tpl_vars['profilesFilterUrlMid'] = new Smarty_variable('.x&categories%5B%5D=', null, 0);?>
								<?php $_smarty_tpl->tpl_vars['profilesFilterUrlEnd'] = new Smarty_variable('&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2', null, 0);?>

								<p>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlFeaturedProfiles'] = new Smarty_variable('Featured+profiles', null, 0);?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlFeaturedProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Featured Site Profiles</a>
									<br>Featured Site Profiles is a list of applications that are maintained by the Tiki community and are a great way to get started.
								</p>

								<p>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlFullProfiles'] = new Smarty_variable('Full+profile+(out+of+the+box+%26+ready+to+go)', null, 0);?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlFullProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Full Profiles</a>
									<br>Full Profiles are full featured out of the box solutions.
								</p>

								<p>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlMiniProfiles'] = new Smarty_variable('Mini-profile+(can+be+included+in+other)', null, 0);?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMiniProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Mini Profiles</a>
									<br>Mini Profiles will configure specific features and are a great way to add more functionality to an existing configuration.
								</p>

								<p>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlLearningProfiles'] = new Smarty_variable('Learning+profile+(just+to+show+off+feature)', null, 0);?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;
echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlLearningProfiles']->value;
echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
" class="alert-link">Learning Profiles</a>
									<br>Learning Profiles will allow you to quickly evaluate specific features in Tiki.
								</p>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Suggested Profiles",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>

				</div>
			</form>
			<a id="step2"></a>
			<?php if (isset($_smarty_tpl->tpl_vars['result']->value)&&count($_smarty_tpl->tpl_vars['result']->value)!='0') {?>
				<h4>Select and apply profile <small>Click on a configuration profile name below to review it and apply it on your site</small></h4>
				<div class="table-responsive">
					<table class="table table-condensed table-hover table-striped">
						<tr>
							<th>Profile name</th>
							<th>Repository</th>
							<th>Profile type</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['profile']->key;
?>
							<tr id="profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
								<?php if ($_smarty_tpl->tpl_vars['profile']->value['name']==$_smarty_tpl->tpl_vars['show_details_for']->value) {?>
									<?php $_smarty_tpl->tpl_vars["show_details_for_profile_num"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['k']->value), null, 0);?>
									<?php $_smarty_tpl->tpl_vars["show_details_for_fullname"] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['name']), null, 0);?>
									<?php $_smarty_tpl->tpl_vars["show_details_for_domain"] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['domain']), null, 0);?>
									<td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['name']);?>
: See profile info below (may take a few seconds to load).</td>
								<?php } else { ?>
									<td><a href="javascript:$.profilesShowDetails( '<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
', 'profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['domain']);?>
', '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['name']);?>
' )"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['profile']->value['name']);?>
</a><?php if ($_smarty_tpl->tpl_vars['profile']->value['installed']) {?> <em>applied</em><?php }?></td>
								<?php }?>

								<td><?php echo $_smarty_tpl->tpl_vars['profile']->value['domain'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['profile']->value['categoriesString'];?>
</td>
							</tr>
						<?php } ?>
						<?php if (count($_smarty_tpl->tpl_vars['result']->value)=='0') {?>
							<tr><td colspan="3" class="odd">None</td></tr>
						<?php }?>
					</table>
					<?php if (isset($_smarty_tpl->tpl_vars['show_details_for_profile_num']->value)&&$_smarty_tpl->tpl_vars['show_details_for_profile_num']->value!='') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$.profilesShowDetails('profile-<?php echo $_smarty_tpl->tpl_vars['show_details_for_profile_num']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show_details_for_domain']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['show_details_for_fullname']->value;?>
');<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			<?php }?>
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				JavaScript must be turned <strong>ON</strong> in order to apply Profiles. Please enable your JavaScript and try again.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Apply"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Export")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Export"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form class="form-horizontal" action="tiki-admin.php?page=profiles" method="post" role="form">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="redirect" value=0>
			<fieldset id="export_to_yaml">
				<legend>Export YAML</legend>
				<?php if (!empty($_smarty_tpl->tpl_vars['export_yaml']->value)) {?>
					<div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['export_yaml']->value;?>
</div>
				<?php }?>
				<div class="form-group">
					<label class="control-label col-sm-2" for="export_type">Object type</label>
					<div class="col-sm-5">
					<select name="export_type" id="export_type" class="form-control">
						<option value="prefs"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value)&&$_smarty_tpl->tpl_vars['export_type']->value=="prefs") {?> selected="selected"<?php }?>>
							Preferences
						</option>
						<option value="modules"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value)&&$_smarty_tpl->tpl_vars['export_type']->value=="modules") {?> selected="selected"<?php }?>>
							Modules
						</option>
					</select>
					</div>
				</div>
				<fieldset>
					<legend>Export modified preferences as YAML</legend>
					<div class="t_navbar">
						<?php echo smarty_function_listfilter(array('selectors'=>".profile_export_list > li"),$_smarty_tpl);?>

						<label for="select_all_prefs_to_export">Toggle Visible</label>
						<input type="checkbox" id="select_all_prefs_to_export" />
						<label for="export_show_added">Show added preferences</label>
						<input type="checkbox" name="export_show_added" id="export_show_added" <?php if (!empty($_REQUEST['export_show_added'])) {?> checked="checked"<?php }?> >
					</div>
					<ul id="prefs_to_export_list" class="profile_export_list"<?php if (!empty($_smarty_tpl->tpl_vars['export_type']->value)&&$_smarty_tpl->tpl_vars['export_type']->value!="prefs") {?> style=display:none;"<?php }?>>

						<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modified_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
							<li class="checkbox">
								<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['current']['expanded'])) {?>
									<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['data']->value['current']['expanded'],", "), null, 0);?>
									<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable("[".((string)$_smarty_tpl->tpl_vars['current']->value)."]", null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['current']['expanded'], null, 0);?>
								<?php }?>
								<input type="checkbox" name="prefs_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['current']->value);?>
"
									id="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['prefs_to_export']->value[$_smarty_tpl->tpl_vars['name']->value])) {?> checked="checked"<?php }?>
								>
								<label for="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
									<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 = '<strong><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['current']->value,40,"...",true));?>
</strong>'
									<em>
										&nbsp;&nbsp;
										<?php if (isset($_smarty_tpl->tpl_vars['data']->value['default'])) {?>
											<?php if (empty($_smarty_tpl->tpl_vars['data']->value['default'])) {?>
												('')
											<?php } else { ?>
												<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['default'])) {
$_smarty_tpl->tpl_vars['default'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['data']->value['default'],", "), null, 0);
} else {
$_smarty_tpl->tpl_vars['default'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['default'], null, 0);
}?>
												('<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['default']->value,20,"...",true));?>
')
											<?php }?>
										<?php } else { ?>
											(no default)
										<?php }?>
									</em>
								</label>
							</li>
						<?php } ?>
					</ul>
					<ul id="modules_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value!="modules") {?> style=display:none;"<?php }?>>

						<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules_for_export']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
							<li class="checkbox">
								<input type="checkbox" name="modules_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['name']);?>
"
									id="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['modules_to_export']->value[$_smarty_tpl->tpl_vars['name']->value])) {?> checked="checked"<?php }?> />
								<label for="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['data']['name']);?>
 :
									<em>
										&nbsp;&nbsp;
										<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['position'];?>

										<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['order'];?>

									</em>
								</label>
							</li>
						<?php } ?>
					</ul>
					<div class="text-center submit input_submit_container">
						<input type="submit" class="btn btn-primary timeout" name="export" value="Export" />
					</div>
				</fieldset>
			</fieldset>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Export"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Advanced")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Advanced"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<br>
		<fieldset>
			<h4>Repository status <small>status of the registered profile repositories</small></h4>
			<table class="table">
				<tr>
					<th>Profile repository</th>
					<th>Status</th>
					<th>Last update</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['entry']->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['entry']->value['short'];?>
</td>
						<td id="profile-status-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							<?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='open') {?>
								<?php echo smarty_function_icon(array('name'=>'status-open','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-pending','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-closed','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='closed') {?>
								<?php echo smarty_function_icon(array('name'=>'status-open','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-pending','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-closed','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_icon(array('name'=>'status-open','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Open"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-pending','iclass'=>'tips','ititle'=>"Status:Pending"),$_smarty_tpl);?>

								<?php echo smarty_function_icon(array('name'=>'status-closed','istyle'=>'display:none','iclass'=>'tips','ititle'=>"Status:Closed"),$_smarty_tpl);?>

							<?php }?>
						</td>
						<td><span id="profile-date-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['formatted'];?>
</span> <a href='javascript:$.profilesRefreshCache("<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
")' title="Refresh"><?php echo smarty_function_icon(array('name'=>"refresh",'iclass'=>'tips','ititle'=>":Refresh"),$_smarty_tpl);?>
</a></td>
					</tr>
				<?php } ?>
			</table>
			<form class="form-horizontal" action="tiki-admin.php?page=profiles" method="post">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'profile_unapproved'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'profile_sources'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'profile_channels'),$_smarty_tpl);?>

				<div class="text-center submit">
					<input type="submit" class="btn btn-primary timeout" name="config" value="Save" />
				</div>
			</form>
		</fieldset>
		<fieldset><legend>Profile tester</legend>
			<form class="form-horizontal" action="tiki-admin.php?page=profiles" method="post">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input type="hidden" name="redirect" value=0>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Paste or type wiki markup and YAML (with or without the {CODE} tags) into the text area below<br>
					<em><strong>This will run the profile and make potentially unrecoverable changes in your database!</strong></em>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="adminoptionbox">
					<div class="adminoptionlabel form-group">
						<label for="profile_tester_name" class="control-label col-sm-4">Test profile name </label>
						<div class="col-sm-4 margin-bottom-sm">
						<input class="form-control" type="text" name="profile_tester_name" id="profile_tester_name" value="<?php if (isset($_smarty_tpl->tpl_vars['profile_tester_name']->value)) {
echo $_smarty_tpl->tpl_vars['profile_tester_name']->value;
} else { ?>Test<?php }?>" />
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="empty_cache" class="form-control">
							<option value=""<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='') {?> checked="checked"<?php }?>>None</option>
							<option value="all"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='all') {?> checked="checked"<?php }?>>All</option>
							<option value="templates_c"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='templates_c') {?> checked="checked"<?php }?>>templates_c</option>
							<option value="temp_cache"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='temp_cache') {?> checked="checked"<?php }?>>temp_cache</option>
							<option value="temp_public"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='temp_public') {?> checked="checked"<?php }?>>temp_public</option>
							<option value="modules_cache"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='modules_cache') {?> checked="checked"<?php }?>>modules_cache</option>
							<option value="prefs"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='prefs') {?> checked="checked"<?php }?>>prefs</option>
						</select><?php echo $_smarty_tpl->tpl_vars['empty_cache']->value;?>

							</div>
					</div>
					<div>
						<textarea data-codemirror="true" data-syntax="yaml" id="profile_tester" name="profile_tester" class="form-control"><?php if (isset($_smarty_tpl->tpl_vars['test_source']->value)) {
echo $_smarty_tpl->tpl_vars['test_source']->value;
}?></textarea>
					</div>
				</div>
				<div align="center" style="padding:1em;"><input type="submit" class="btn btn-default timeout" name="test" value="Test"></div>
			</form>
		</fieldset>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Advanced"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oldSources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                $.profilesRefreshCache("<?php echo $_smarty_tpl->tpl_vars['baseURI']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
");
	<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
