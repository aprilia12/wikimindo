<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: SourceInterface.php 65617 2018-02-28 16:17:25Z jonnybradley $

namespace Tracker\Tabular\Source;

interface SourceInterface
{
	/**
	 * Provides an iterable result
	 */
	function getEntries();

	/**
	 * @return \Tracker\Tabular\Schema
	 */
	function getSchema();
}
