<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: FilterInterface.php 64291 2017-10-16 22:22:03Z rjsmelo $

namespace Tiki\Yaml\Filter;

interface FilterInterface
{
	public function filter(&$value);
}
