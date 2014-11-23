<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'MOC Beer demo extensions',
	'description' => 'Old school pi_base plugins based Beer extension',
	'category' => 'plugin',
	'version' => '1.0',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Jan-Erik Revsbech',
	'author_email' => 'janerik@moc.net',
	'author_company' => 'MOC A/S',
	'constraints' =>
	array (
		'depends' =>
		array (
			'cms' => '',
			'php' => '5.2.0-5.5.99',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

