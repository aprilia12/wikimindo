<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: wikiplugin_sup.php 64629 2017-11-19 12:06:52Z rjsmelo $

function wikiplugin_sup_info()
{
	return [
		'name' => tra('Superscript'),
		'documentation' => 'PluginSup',
		'description' => tra('Apply superscript font to text'),
		'prefs' => [ 'wikiplugin_sup' ],
		'body' => tra('text'),
		'iconname' => 'superscript',
		'introduced' => 2,
		'filter' => 'wikicontent',
		'tags' => [ 'basic' ],
		'params' => [
		],
	];
}

function wikiplugin_sup($data, $params)
{
	return "<sup>$data</sup>";
}
