<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: shell.php 64614 2017-11-17 23:30:13Z rjsmelo $

die('Deprecated: use console.php instead

To update the database:
php installer/shell.php 

has become:
php console.php -n database:update


To re-install the database and erase all data:
php installer/shell.php install

has become:
php console.php database:install --force

');
