<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: function.feedback.php 64630 2017-11-19 12:11:11Z rjsmelo $

function smarty_function_feedback($params, $smarty)
{
	$result = Feedback::get();
	if (is_array($result)) {
		$smarty->assign('tikifeedback', $result);
	}
	$ret = $smarty->fetch('feedback/default.tpl');
	return $ret;
}
