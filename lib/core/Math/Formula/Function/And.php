<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: And.php 64622 2017-11-18 19:34:07Z rjsmelo $

class Math_Formula_Function_And extends Math_Formula_Function
{
	function evaluate($element)
	{
		$out = 0;

		foreach ($element as $child) {
			$out = 1;
			if (! $this->evaluateChild($child)) {
				return 0;
			}
		}

		return $out;
	}
}
