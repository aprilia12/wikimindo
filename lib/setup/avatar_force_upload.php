<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: avatar_force_upload.php 64633 2017-11-19 12:25:47Z rjsmelo $
if (strpos($_SERVER['SCRIPT_NAME'], basename(__FILE__)) != false) {
		header('location: index.php');
		exit;
}
global $user;
if (empty($user)) {
		return;
}

$avatar = TikiLib::lib('tiki')->get_user_avatar($user);

if (! $avatar || is_array($avatar) || strpos($avatar, 'img/noavatar') !== false) {
		// Avatar if found should be HTML
		$action = 'avatar';
		$smarty->assign_by_ref("force_fill_action", $action);
}
