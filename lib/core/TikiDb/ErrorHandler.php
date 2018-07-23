<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ErrorHandler.php 64622 2017-11-18 19:34:07Z rjsmelo $

interface TikiDb_ErrorHandler
{
	function handle(TikiDb $db, $query, $values, $result);
}
