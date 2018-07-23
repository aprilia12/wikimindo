<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: 20120429_fix_collation_tiki.php 64614 2017-11-17 23:30:13Z rjsmelo $

if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
	header("location: index.php");
	exit;
}

/**
 * @param $installer
 */
function upgrade_20120429_fix_collation_tiki($installer)
{
	global $dbs_tiki;
	require(TikiInit::getCredentialsFile());
	$installer->query("ALTER DATABASE `" . $dbs_tiki . "` CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci'");
	unset($dbs_tiki);
	$results = $installer->fetchAll('SHOW TABLES');
	foreach ($results as $table) {
		$installer->query('ALTER TABLE ' . reset($table) . ' convert to character set DEFAULT COLLATE DEFAULT');
	}
}
