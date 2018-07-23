
<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: 20150508_perspectives_style_to_theme_tiki.php 64614 2017-11-17 23:30:13Z rjsmelo $

if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
	header("location: index.php");
	exit;
}

/**
 * @param $installer
 */
function upgrade_20150508_perspectives_style_to_theme_tiki($installer)
{
	// rename style to theme, style_option to theme_option and remove .css from values

	$perspectivePrefs = TikiDb::get()->table('tiki_perspective_preferences');

	$result = $perspectivePrefs->fetchAll(
		['perspectiveId' , 'pref' , 'value'],
		['pref' => $perspectivePrefs->like('style%')]
	);

	foreach ($result as $row) {
		$val = unserialize($row['value']);
		$perspectivePrefs->update(
			[
				'value' => serialize(str_replace('.css', '', $val)),
				'perspectiveId' => $row['perspectiveId'],
				'pref' => str_replace('style', 'theme', $row['pref'])],
			[
				'perspectiveId' => $row['perspectiveId'],
				'pref' => $row['pref']
			]
		);
	}
}
