<?php

########################################################################
# Extension Manager/Repository config file for ext: "srfeuserregister_t3secsaltedpw"
#
# Auto generated 20-01-2009 15:43
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Salted Password Hashes for sr_feuser_register',
	'description' => 'Modifies sr_feuser_register to work together with the extension t3sec_saltedpw. This is done by xclassing tx_srfeuserregister_data and extending the methods parseIncomingData and parseOutgoingData.',
	'category' => 'misc',
	'author' => 'Peter Schuster',
	'author_email' => 'typo3@peschuster.de',
	'shy' => '',
	'dependencies' => 't3sec_saltedpw,sr_feuser_register',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			't3sec_saltedpw' => '',
			'sr_feuser_register' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"122c";s:11:"LICENSE.txt";s:4:"0933";s:12:"ext_icon.gif";s:4:"4324";s:17:"ext_localconf.php";s:4:"f6b4";s:40:"ux/class.ux_tx_srfeuserregister_data.php";s:4:"e301";s:14:"doc/manual.sxw";s:4:"55fb";}',
	'suggests' => array(
	),
);

?>