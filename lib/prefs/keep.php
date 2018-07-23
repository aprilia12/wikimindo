<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: keep.php 64628 2017-11-19 12:03:08Z rjsmelo $

function prefs_keep_list()
{
	return [
		'keep_versions' => [
			'name' => tra('Keep versions for'),
			'description' => tra('Never delete versions younger than (? days).'),
			'type' => 'text',
			'size' => '5',
			'units' => tra('days'),
			'default' => 1,
		],
	];
}
