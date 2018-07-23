<?php
// (c) Copyright 2002-2017 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: preset.php 62177 2017-04-10 06:06:43Z drsassafras $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER['SCRIPT_NAME'], basename(__FILE__)) !== false) {
	header('location: index.php');
	exit;
}

function prefs_preset_list()
{
	return [
		'preset_galleries_info' => [
			'name' => tra('Set display settings for all galleries'),
			'type' => 'flag',
			'default' => 'n',
		],
	];
}
