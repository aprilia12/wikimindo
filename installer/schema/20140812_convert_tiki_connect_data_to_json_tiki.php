<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: 20140812_convert_tiki_connect_data_to_json_tiki.php 64614 2017-11-17 23:30:13Z rjsmelo $

if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
	header("location: index.php");
	exit;
}

function upgrade_20140812_convert_tiki_connect_data_to_json_tiki($installer)
{
	$tiki_connect = TikiDb::get()->table('tiki_connect');

	$rows = $tiki_connect->fetchAll(['id', 'created', 'type', 'data', 'guid', 'server']);

	foreach ($rows as $row) {
		if (! empty($row['data'])) {
			$data = unserialize($row['data']);
			if ($data) {
				$tiki_connect->update(
					['data' => json_encode($data)],
					['id' => $row['id']]
				);
			}
		}
	}
}
