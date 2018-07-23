<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Transaction.php 64622 2017-11-18 19:34:07Z rjsmelo $

/**
 * The class does not actually handle transactions at this time, this requires InnoDB, which
 * is experimental as of writing this, but the transaction concept is still useful to limit
 * the amount of unified index commits on incremental update.
 */
class TikiDb_Transaction
{
	private $token;

	function __construct()
	{
		$this->token = TikiLib::lib('unifiedsearch')->startBatch();
	}

	function commit()
	{
		$done = TikiLib::lib('unifiedsearch')->endBatch($this->token);

		if ($done) {
			$events = TikiLib::events();
			$events->trigger('tiki.commit.after');
		}
	}
}
