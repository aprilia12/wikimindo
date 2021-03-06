<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Plain.php 64622 2017-11-18 19:34:07Z rjsmelo $

class Search_Formatter_ValueFormatter_Plain extends Search_Formatter_ValueFormatter_Abstract
{
	private $separator = ', ';

	function __construct($arguments)
	{
		if (isset($arguments['separator'])) {
			$this->separator = $arguments['separator'];
		}
	}

	function render($name, $value, array $entry)
	{
		if (is_array($value)) {
			return implode($this->separator, $value);
		} else {
			return $value;
		}
	}
}
