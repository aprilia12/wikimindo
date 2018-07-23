<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: WordTest.php 64624 2017-11-19 11:24:47Z rjsmelo $

/**
 * @group unit
 *
 */

class TikiFilter_WordTest extends TikiTestCase
{
	function testFilter()
	{
		$filter = TikiFilter::get('word');

		$this->assertEquals('123ab_c', $filter->filter('-123 ab_c'));
	}
}
