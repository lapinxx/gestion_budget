<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=compta',
			'username'   => 'root',
			'password'   => 'itm',
                        'port'   => '3307',
		),
	),
);
