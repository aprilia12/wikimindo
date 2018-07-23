<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: MissingValue.php 64622 2017-11-18 19:34:07Z rjsmelo $

class Services_Exception_MissingValue extends Services_Exception_FieldError
{
	function __construct($field)
	{
		parent::__construct($field, tr('Field Required'));
	}
}
