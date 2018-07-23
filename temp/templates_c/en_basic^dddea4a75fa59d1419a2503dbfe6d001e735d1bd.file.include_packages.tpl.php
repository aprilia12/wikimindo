<?php /* Smarty version Smarty-3.1.21, created on 2018-07-20 09:49:23
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\admin\include_packages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17174654515b51940327abc6-14311600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddea4a75fa59d1419a2503dbfe6d001e735d1bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\admin\\include_packages.tpl',
      1 => 1517889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17174654515b51940327abc6-14311600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'composer_output' => 0,
    'composer_installed_errors' => 0,
    'composer_environment_warning' => 0,
    'entry' => 0,
    'composer_available' => 0,
    'composer_packages_installed' => 0,
    'composer_packages_missing' => 0,
    'composer_packages_available' => 0,
    'composer_bundled_packages_installed' => 0,
    'diagnostic_composer_location' => 0,
    'diagnostic_composer_output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b51940330f2e9_42851607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51940330f2e9_42851607')) {function content_5b51940330f2e9_42851607($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_icon')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_ticket')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\function.ticket.php';
if (!is_callable('smarty_block_tr')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.tr.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['composer_output']->value)) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    Result of executing the changes to the packages:<br />
        <pre><?php echo $_smarty_tpl->tpl_vars['composer_output']->value;?>
</pre>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['composer_installed_errors']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Composer errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	Composer returned some errors:<br />
        <pre><?php echo $_smarty_tpl->tpl_vars['composer_installed_errors']->value;?>
</pre>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['composer_environment_warning']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Issues with composer environment")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Issues with composer environment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <p>Issues with composer environment:</p>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['composer_environment_warning']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
    <?php } ?>
    </ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Issues with composer environment"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admin-packages')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admin-packages'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Packages Installed")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Packages Installed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <br />
        <h4>Composer Packages <small>Status of the packages registered in the composer.json file</small></h4>
        <?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Composer not found")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                Composer could not be executed, so the automated check on the packages cannot be performed.
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version Required</th>
                <th>Status
                <th>Version Installed</th>
                <th>Action</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['composer_packages_installed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['required'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['upgradeVersion']) {?><span class="label label-warning">Update: <?php echo $_smarty_tpl->tpl_vars['entry']->value['requiredVersion'];?>
</span><?php }?></td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='installed') {?>
                            <?php echo smarty_function_icon(array('name'=>'success','iclass'=>'tips','ititle'=>"Status:Installed"),$_smarty_tpl);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='missing') {?>
                            <?php echo smarty_function_icon(array('name'=>'warning','iclass'=>'tips','ititle'=>"Status:Missing"),$_smarty_tpl);?>

                        <?php } else { ?>
                            &nbsp;
                        <?php }?>
                    </td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['installed'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['entry']->value['installed']&&$_smarty_tpl->tpl_vars['entry']->value['key']) {?>
                            <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                                <input type="hidden" name="redirect" value="0">
                                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                <?php if ($_smarty_tpl->tpl_vars['entry']->value['upgradeVersion']) {?>
                                <button name="auto-update-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Update</button>
                                <?php }?>
                                <button name="auto-remove-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Remove</button>
                            </form>
                        <?php } else { ?>
                            &nbsp;
                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['composer_packages_missing']->value) {?>
                <tr>
                    <td colspan="5">
                        <h4>One or more packages appear to be missing</h4>
                        In the list above, some packages could not be found. They are defined in the composer.json file, but do not seem to be installed.

                        <br><br>

                        <h4>Install packages from the administrator interface</h4>
                        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <p>
                            The administrator interface can be used to install the packages marked as missing in the list above.
                            Click the "Fix Missing Packages" button below, and Tiki will try to install them:
                            </p>
                            <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                                <input type="hidden" name="redirect" value="0">
                                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                <button name="auto-fix-missing-packages" value="auto-fix-missing-packages">Fix Missing Packages</button>
                            </form>
                            <br />
                            The results of the execution of the commands will be displayed after the process finishes.
                        <?php } else { ?>
                            Composer was not detected. Please follow the manual instructions.
                        <?php }?>

                        <br><br>

                        <h4>Install packages manually</h4>
                        <p><strong>Make sure <code>composer</code> is installed.</strong></p>
                        <p>
                            Composer can be installed manually, on the host machine, by following the instructions at the
                            <a href="https://doc.tiki.org/Composer">Composer</a> website.
                        </p>
                        <p>
                            The script <code>setup.sh</code> that is included in the Tiki distribution can be run to make sure composer is installed. In this case, composer will be installed as <code>temp/composer.phar</code>.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>bash ./setup.sh composer</code>
                        </p>

                        <p><strong>Install the missing packages.</strong></p>
                        <p>
                            After composer is installed, you can install the missing packages by issuing the command
                            <code>composer --no-dev --prefer-dist update nothing</code>.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>php temp/composer.phar --no-dev --prefer-dist update nothing</code>
                        </p>
                    </td>
                </tr>
            <?php }?>
        </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Packages Installed"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Install Other Packages")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Install Other Packages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <br />
        <h4>Composer Packages <small>These packages have been identified as required by one or more features.</small></h4>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version</th>
                <th>Licence</th>
                <th>Required by</th>
                <th>Install</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['composer_packages_available']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['requiredVersion'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['licenceUrl'];?>
"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['licence'])) {?>Not Available<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['licence'];
}?></a></td>
                    <td><?php echo implode(', ',$_smarty_tpl->tpl_vars['entry']->value['requiredBy']);?>
</td>
                    <td>
                        <form action="tiki-admin.php?page=packages&cookietab=2" method="post">
                            <input type="hidden" name="redirect" value="0">
                            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                            <button name="auto-install-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Install Package</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <?php if (count($_smarty_tpl->tpl_vars['composer_packages_available']->value)) {?>
                <tr>
                    <td colspan="5">
                        <h4>There appear to be some optional packages that can be installed</h4>
                        In the list above, there are optional packages that may be installed in order to use the Tiki features that require the package.

                        <br><br>

                        <h4>Install packages from the administrator interface</h4>
                        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            The administrator interface can be used to install the optional packages in the list above.
                            Click the "Install Package" button, and Tiki will try to install them.
                        <?php } else { ?>
                            Composer was not detected. Please follow the manual instructions.
                        <?php }?>

                        <br><br>

                        <h4>Install packages manually</h4>
                        <p><strong>Make sure <code>composer</code> is installed.</strong></p>
                        <p>
                            Composer can be installed manually, in the host machine, by following the instructions from the
                            <a href="https://doc.tiki.org/Composer">Composer</a> website.
                        </p>
                        <p>
                            The script <code>setup.sh</code> that is included in the Tiki distribution can be run to make sure composer is installed. In this case, composer will be installed as <code>temp/composer.phar</code>.
                            Below is an example of how to do this in a Linux-like operating system:<br>
                            <code>bash ./setup.sh composer</code>
                        </p><br>

                        <p><strong>Make sure there is a <code>composer.json</code> file in the root of the website.</strong></p>
                        <p>
                            If there is not already a <code>composer.json</code> file, then create one.
                            The sample <code>composer.json.dist</code> that comes with Tiki can be used as a starting point.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>cp composer.json.dist composer.json</code>
                        </p><br>

                        <p><strong>Install the package.</strong></p>
                        <p>
                            After all the steps above (that only need to be performed once), packages can be installed by issuing a command
                            <code>composer require package:version</code> for each package that is to be installed.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>php temp/composer.phar require --update-no-dev --prefer-dist psr/log:^1.0</code>
                        </p>
                    </td>
                </tr>
            <?php }?>
        </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Install Other Packages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Packages Bundled")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Packages Bundled"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <br>
        <h4>Composer Packages Bundled <small>status of the packages registered in the vendor_bundled/composer.json file</small></h4>
        <?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Composer not found")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            Composer could not be executed, so the automated check on the packages cannot be performed.
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"For information only")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            These packages are bundled with Tiki, and displayed here for informational purposes.
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version Required</th>
                <th>Status
                <th>Version Installed</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['composer_bundled_packages_installed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['required'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['status']=='installed') {?>
                            <?php echo smarty_function_icon(array('name'=>'success','iclass'=>'tips','ititle'=>"Status:Installed"),$_smarty_tpl);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status']=='missing') {?>
                            <?php echo smarty_function_icon(array('name'=>'warning','iclass'=>'tips','ititle'=>"Status:Missing"),$_smarty_tpl);?>

                        <?php } else { ?>
                            &nbsp;
                        <?php }?>
                    </td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['installed'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
                </tr>
            <?php } ?>
        </table>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Packages Bundled"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Diagnose")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Diagnose"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <br>
        <h4>Diagnose Composer Installation <small>Use the button below to test your composer installation.</small></h4>
        <form action="tiki-admin.php?page=packages&cookietab=4" method="post">
            <input type="hidden" name="redirect" value="0">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

            <button name="auto-run-diagnostics" value="run">Diagnose Composer</button>
        </form>
        <?php if (isset($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value)||$_smarty_tpl->tpl_vars['diagnostic_composer_output']->value) {?>
            <br />
            <h4>Results</h4>
            <?php if (isset($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value)) {?>
                <p><strong>Composer:</strong> <?php if ($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['diagnostic_composer_location']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else { ?>Composer not found<?php }?></p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['diagnostic_composer_output']->value) {?>
                <p><strong>Composer diagnose output</strong></p>
                <pre><?php echo $_smarty_tpl->tpl_vars['diagnostic_composer_output']->value;?>
</pre>
            <?php }?>
            <br>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Diagnose"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admin-packages'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
