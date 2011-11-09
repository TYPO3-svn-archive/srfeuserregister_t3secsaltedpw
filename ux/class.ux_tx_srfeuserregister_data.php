<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Peter Schuster <typo3@peschuster.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * ux/class.ux_tx_srfeuserregister_data.php
 *
 * $Id$
 *
 * @author Peter Schuster <typo3@peschuster.de>
 */

	// Make sure that we are executed only in TYPO3 context
if (!defined ("TYPO3_MODE")) die ("Access denied.");

/**
 * This class extends the tx_srfeuserregister_data class so that
 * it works together with t3sec_saltedpw
 *
 * @author Peter Schuster <typo3@peschuster.de>
 * @package TYPO3
 * @subpackage srfeuserregister_t3secsaltedpw
 */
class ux_tx_srfeuserregister_data extends tx_srfeuserregister_data {

	/**
	 * Removes password value from data array
	 * extends tx_srfeuserregister_data->parseIncomingData
	 *
	 * @param	array		$origArray: array with user data from database
	 * @return	array		parsed array
	 */
	public function parseIncomingData($origArray = array(), $bUnsetZero = TRUE) {

		$parsedArr = parent::parseIncomingData($origArray, $bUnsetZero);
		if (isset($parsedArr['password']) && t3lib_extMgm::isLoaded('saltedpasswords') && tx_saltedpasswords_div::isUsageEnabled()) {
			$parsedArr['password'] = '';
		}
		return $parsedArr;
	}


	/**
	 * Replaces password with salted hash of passwort
	 * extends tx_srfeuserregister_data->parseOutgoingData
	 *
	 * @param	array		$dataArray: array with user data to be modified
	 * @param	array		$origArray
	 *
	 * @return	array		parsed array
	 */
	public function parseOutgoingData ($theTable, $cmdKey, $pid, $conf, $dataArray, $origArray) {

		$parsedArray = parent::parseOutgoingData($theTable, $cmdKey, $pid, $conf, $dataArray, $origArray);

		if (isset($parsedArray['password']) && t3lib_extMgm::isLoaded('saltedpasswords') && tx_saltedpasswords_div::isUsageEnabled()) {
			$objPHPass = t3lib_div::makeInstance(tx_saltedpasswords_div::getDefaultSaltingHashingMethod());
			$updatedPassword = $objPHPass->getHashedPassword($parsedArray['password']);
			$parsedArray['password'] = $parsedArray['password_again'] = $updatedPassword;
		}

		return $parsedArray;
	}

}

?>