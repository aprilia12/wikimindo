<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Generator.php 65406 2018-02-01 12:29:14Z jonnybradley $

namespace Tiki\Wiki\SlugManager;

interface Generator
{
	function getName();
	function getLabel();
	function generate($pageName, $suffix = null);
	function degenerate($slug);
}
