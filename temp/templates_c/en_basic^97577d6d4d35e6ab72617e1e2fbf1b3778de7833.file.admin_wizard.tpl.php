<?php /* Smarty version Smarty-3.1.21, created on 2018-08-03 04:09:05
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wizard\admin_wizard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2116987575b63b941a409f0-95870934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97577d6d4d35e6ab72617e1e2fbf1b3778de7833' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wizard\\admin_wizard.tpl',
      1 => 1490243736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116987575b63b941a409f0-95870934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b63b941a8ec08_64285153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63b941a8ec08_64285153')) {function content_5b63b941a8ec08_64285153($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.button.php';
?>

<div class="col-lg-10 col-lg-offset-1">
	<fieldset>
		<legend>Get Started</legend>

		<p class="wizardCongrat text-success">
			<?php echo smarty_function_icon(array('name'=>"check",'size'=>1),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Congratulations! You now have a working instance of Tiki %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
			You may <a href="tiki-index.php">start using it right away</a>, or you may configure it to better meet your needs, using one of the configuration helpers below.
		</p>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Mouse over the icons to know more about the features and preferences that are new for you.
			<a href="http://doc.tiki.org/Wizards" target="tikihelp" class="tikihelp" style="float:right" title="Help icon:
				You will get more information about the features and preferences whenever this icon is available and you pass your mouse over it.
				<br/><br/>Moreover, if you click on it, you'll be directed in a new window to the corresponding documentation page for further information on that feature or topic."
			>
				<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

			</a>
			<a target="tikihelp" class="tikihelp" style="float:right" title="Information icon:
				You will get more information about the features and preferences whenever this icon is available and you pass your mouse over it.
			">
				<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

			</a>
			Example: 
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<div class="media margin-bottom-lg">
			<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
				<i class="fa fa-cubes fa-stack-2x"></i>
				<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
			</span>
			<div class="media-body">
				<p>You may start by applying some of our configuration templates through the <b>Configuration Profiles Wizard</b>. They are like the <b>Macros</b> from many computer languages.
					<a href="http://doc.tiki.org/Profiles+Wizard" target="tikihelp" class="tikihelp" title="Configuration Profiles:
						Each of these provides a shrink-wrapped solution that meets most of the needs of a particular kind of community or site (Personal Blog space, Company Intranet, ...) or that extends basic setup with extra features configured for you.</p>
						<p>If you are new to Tiki administration, we recommend that you start with this approach.</p>
						<p>If the profile you selected does not quite meet your needs, you will still have the option of customizing it further with one of the approaches below"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
				</p>

				<input type="submit" class="btn btn-primary" name="use-default-prefs" value="Start Configuration Profiles Wizard (Macros)" />
			</div>
		</div>
		<div class="media margin-bottom-lg">
			<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Walkthrough" title="Configuration Walkthrough">
				<i class="fa fa-gear fa-stack-2x"></i>
				<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
			</span>
			<div class="media-body">
				<p>
					Alternatively, you may use the <b>Configuration Wizard</b>.
					This will guide you through the most common preference settings in order to customize your site.
					<a href="http://doc.tiki.org/Admin+Wizard" target="tikihelp" class="tikihelp" title="Configuration Wizard:
						Use this wizard if none of the <b>Configuration Profiles</b> look like a good starting point, or if you need to customize your site further"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
				</p>
				<input type="submit" class="btn btn-primary" name="continue" value="Start Configuration Wizard" />
			</div>
		</div>
		<div class="media margin-bottom-lg">
			<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
				<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
				<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
			</span>
			<div class="media-body">
				<p>
					Or you may use the <b>Upgrade Wizard</b>.
					This will guide you through the most common new settings and informations in order to upgrade your site.
					<a href="http://doc.tiki.org/Upgrade+Wizard" target="tikihelp" class="tikihelp" title="Upgrade Wizard:
						Use this wizard if you are upgrading from previous versions of Tiki, specially if you come from the previous Long-Term Support (LTS) version.</p>

						<p>Some of these settings are also available through the Configuration Wizard, and all of them are available through Control Panels.
						But this wizard will let you learn about them as well as enable/disable them easily according to your needs and interests for your site."
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
				</p>

					<input type="submit" class="btn btn-primary" name="use-upgrade-wizard" value="Start Upgrade Wizard" />
			</div>
		</div>
		<div class="media margin-bottom-lg">
			<img class="pull-left" src="img/icons/large/controlpanels48x48.png" alt="Control Panels" />
			<div class="media-body">
				<p>Use the <b>Control Panels</b> to manually browse through the full list of preferences.</p>

				<?php echo smarty_function_button(array('href'=>"tiki-admin.php",'_text'=>"Go to the Control Panels"),$_smarty_tpl);?>

			</div>
		</div>
		<div class="media margin-bottom-lg">
			<div class="media-body">
		<legend>Server Fitness</legend>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To check if your server meets the requirements for running Tiki version %0, please visit <a href="tiki-check.php" target="_blank">Tiki Server Compatibility Check</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['tiki_version']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
			</div>
		</div>
	</fieldset>
</div>
<?php }} ?>
