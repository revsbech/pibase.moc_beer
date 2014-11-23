<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * Registration of the list plugin
 */
t3lib_div::loadTCA("tt_content");
$TCA["tt_content"]["types"]["list"]["subtypes_excludelist"][$_EXTKEY."_pi1"]="layout,select_key";
t3lib_extMgm::addPlugin(Array("List beers", $_EXTKEY."_pi1"),"list_type");

/****
 * Registration of the beer table
 */
$TCA['tx_mocbeer_beer'] = array(
	'ctrl' => array(
		'title'	=> 'Beer',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'beer.gif'
	),
);

