<?php
	// Make sure that we are executed only in TYPO3 context
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");


	// ext:sr_feuser_register
$TYPO3_CONF_VARS['FE']['XCLASS']['ext/sr_feuser_register/model/class.tx_srfeuserregister_data.php'] = t3lib_extMgm::extPath($_EXTKEY, 'ux/class.ux_tx_srfeuserregister_data.php');
?>