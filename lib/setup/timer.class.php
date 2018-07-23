<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: timer.class.php 64633 2017-11-19 12:25:47Z rjsmelo $

class timer
{
	function parseMicro($micro)
	{
		list($micro, $sec) = explode(' ', microtime());

		return $sec + $micro;
	}

	function start($timer = 'default', $restart = false)
	{
		//if (isset($this->timer[$timer]) && !$restart) {
			// report error - timer already exists
		//}
		$this->timer[$timer] = $this->parseMicro(microtime());
	}

	function stop($timer = 'default')
	{
		$result = $this->elapsed($timer);
		unset($this->timer[$timer]);
		return $result;
	}

	function elapsed($timer = 'default')
	{
		return $this->parseMicro(microtime()) - $this->timer[$timer];
	}
}
