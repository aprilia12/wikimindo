<?php /* Smarty version Smarty-3.1.21, created on 2018-08-10 10:15:50
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9874033365b6d49b6edb797-79049949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f624a23ddfa4f431dc32c8b81364643f5068d9e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_rating.tpl',
      1 => 1507985038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9874033365b6d49b6edb797-79049949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configurations' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b6d49b7002b36_44403877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6d49b7002b36_44403877')) {function content_5b6d49b7002b36_44403877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_function_preference')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?>

<form class="admin form-horizontal" id="performance" name="performance" action="tiki-admin.php?page=rating" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<fieldset>
		<legend>Global configuration</legend>
		<?php echo smarty_function_preference(array('name'=>'rating_recalculation'),$_smarty_tpl);?>

		<div class="rating_recalculation_childcontainer randomvote randomload">
			<?php echo smarty_function_preference(array('name'=>'rating_recalculation_odd'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'rating_recalculation_count'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'ip_can_be_checked'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'rating_allow_multi_votes'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Wiki</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wiki_ratings'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wiki_simple_ratings_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings_options'),$_smarty_tpl);?>

		</div>
	</fieldset>

	<fieldset>
		<legend>Articles</legend>
		<?php echo smarty_function_preference(array('name'=>'article_user_rating'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="article_user_rating_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'article_user_rating_options'),$_smarty_tpl);?>

		</div>
	</fieldset>

	<fieldset>
		<legend>Comments</legend>
		<?php echo smarty_function_preference(array('name'=>'comments_vote'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wiki_comments_simple_ratings'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wiki_comments_simple_ratings_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_comments_simple_ratings_options'),$_smarty_tpl);?>

			This preference needs to be disabled:<?php echo smarty_function_preference(array('name'=>'wiki_comments_form_displayed_default'),$_smarty_tpl);?>

		</div>
	</fieldset>

	<fieldset>
		<legend>Forums</legend>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Enabling ratings for forums")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Enabling ratings for forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			You need to:
			<ul>
				<li>Create or edit a forum and enable: "<strong>Posts can be rated</strong>"</li>
				<li>While editing the forum, choose whether to show the "User information display > <strong>Topic Rating</strong>" by each user</li>
				<li>Set the rating options at "Control Panels" > Ratings" > "Comments" > "Simple wiki comment ratings" > "<strong>Wiki rating options:</strong>" (see above)</li>
			</ul>
		Permissions involved: forum_vote (forums), ratings_view_results (tiki)
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Enabling ratings for forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</fieldset>

	<fieldset>
		<legend>Trackers</legend>
		<?php echo smarty_function_preference(array('name'=>'trackerfield_rating'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>User Interface</legend>
		<?php echo smarty_function_preference(array('name'=>'rating_results_detailed'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="rating_results_detailed_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'rating_results_detailed_percent'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'rating_smileys'),$_smarty_tpl);?>

		
	</fieldset>

	<fieldset>
		<legend>Advanced</legend>
		<?php echo smarty_function_preference(array('name'=>'rating_advanced'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<div id="rating_advanced_childcontainer">
	<?php  $_smarty_tpl->tpl_vars['config'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['config']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['configurations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['config']->key => $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->_loop = true;
?>
		<form class="config" method="post" action="">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<fieldset>
				<legend><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['name']);?>
 <small>(ID: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
, Search Field: <em>adv_rating_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
</em>)</small></legend>
				<input type="hidden" name="config" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
">
				<div class="form-group">
					<label class="control-label col-sm-4" for="rating_name_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
">
						Name
					</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['name']);?>
" id="rating_name_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="rating_expiry_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
">
						Cache duration
					</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control" name="expiry" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['expiry']);?>
" id="rating_expiry_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['ratingConfigId']);?>
">
							<span class="input-group-addon">seconds</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="formula">
						Formula
					</label>
					<div class="col-sm-8">
						<textarea name="formula" class="form-control" rows="5" style="width: 100%;">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['formula']);?>

						</textarea>
					</div>
				</div>
				<div class="form-group text-center">
					<div class="col-sm-12"><br>
						<input type="submit" class="btn btn-default btn-sm timeout" name="edit" value="Save">
					</div>
				</div>
			</fieldset>
		</form><br>
	<?php } ?>
	<form method="post" action="">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<fieldset>
			<legend>Create new</legend>
			<label class="control-label col-sm-4" for="rating_config_new">
				Name
			</label>
			<div class="col-sm-8">
				<div class="input-group">
					<input type="text" class="form-control" name="name" id="rating_config_new">
					<span class="input-group-btn">
			<input type="submit" class="btn btn-default timeout" name="create" value="Create">
				</span>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$('form.config').submit( function( e ) {
		return ! $(this).find('input[type=submit]').attr('disabled');
	} );
	$('form.config .error').hide();
	$('form.config textarea').change( function( e ) {
		var text = this;
		e.preventDefault();
		var submit = $(this).closest('form').find('input[type=submit]').attr('disabled', true);
		$.getJSON( window.location.href, { test: $(this).val() }, function( data ) {
			submit.attr( 'disabled', ! data.valid );
			if( data.valid ) {
				$(text).closest('form').find('.error').hide();
			} else {
				$(text).closest('form').find('.error').show().text( data.message );
			}
		} );
	} );
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
