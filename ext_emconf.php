<?php

########################################################################
# Extension Manager/Repository config file for ext "srfeuserregister_t3secsaltedpw".
#
# Auto generated 27-12-2009 01:19
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Salted Password Hashes for sr_feuser_register',
	'description' => 'Modifies sr_feuser_register to work together with the extension saltedpasswords. This is done by xclassing tx_srfeuserregister_data and extending the methods parseIncomingData and parseOutgoingData.',
	'category' => 'misc',
	'author' => 'Peter Schuster',
	'author_email' => 'typo3@peschuster.de',
	'shy' => '',
	'dependencies' => 'saltedpasswords,sr_feuser_register',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.2.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-0.0.0',
			'saltedpasswords' => '',
			'sr_feuser_register' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"faf9";s:11:"LICENSE.txt";s:4:"0933";s:12:"ext_icon.gif";s:4:"4324";s:17:"ext_localconf.php";s:4:"f6b4";s:14:"doc/manual.sxw";s:4:"3aac";s:40:"ux/class.ux_tx_srfeuserregister_data.php";s:4:"dd44";}',
	'suggests' => array(
	),
);

?>