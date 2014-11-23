<?php

class tx_mocbeer_pi1 extends tslib_pibase {
	var $prefixId = "tx_mocbeer_pi1";           // Same as class name
	var $scriptRelPath = "pi1/class.tx_mocbeer_pi1.php"; // Path to this script relative to the extension dir.
	var $extKey = "moc_beer"; // The extension key.

	public $pi_checkCHash = FALSE;

	/**
	 * @param string $content
	 * @param array $conf
	 */
	public function main($content, $conf) {
		if (intval($this->piVars['beer']) == 0) {
			return $this->listBeers();
		}
		return $this->showBeer(intval($this->piVars['beer']));
	}

	/**
	 * @return string
	 */
	protected function listBeers() {
		/** @var \TYPO3\CMS\Core\Database\DatabaseConnection $db */
		$db = $GLOBALS['TYPO3_DB'];
		$content = '<ul>';
		foreach ($db->exec_SELECTgetRows('*', 'tx_mocbeer_beer', 'NOT deleted') as $row) {
			$content .= '<li> ' . $this->pi_linkTP($row['name'], array($this->prefixId . '[beer]' => $row['uid'])) . '</li>';
		}
		$content .= '</ul>';
		return $content;
	}

	/**
	 * @param integer $uid
	 * @return string
	 */
	protected function showBeer($uid) {
		/** @var \TYPO3\CMS\Core\Database\DatabaseConnection $db */
		$db = $GLOBALS['TYPO3_DB'];
		$row = $db->exec_SELECTgetSingleRow('*', 'tx_mocbeer_beer', 'uid=' . intval($uid));
		$content = '<h1>' . $row['name'] . '</h1>';
		$content .= '<p>ABV: ' . $row['alcohol_by_volume'] . '%</p>';
		return $content;
	}

}