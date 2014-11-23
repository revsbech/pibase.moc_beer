<?php

class tx_mocbeer_pi1 extends tslib_pibase {
	var $prefixId = "tx_moccontacts_pi1";           // Same as class name
	var $scriptRelPath = "pi1/class.tx_mocbeer_pi1.php"; // Path to this script relative to the extension dir.
	var $extKey = "moc_beer"; // The extension key.

	/**
	 * @param string $content
	 * @param array $conf
	 */
	public function main($content, $conf) {
		return '<pre>' . print_r($conf, TRUE)  . '</pre>';
		return 'I\'m rendered as a plugin!';
	}

}