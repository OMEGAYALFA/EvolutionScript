<?php
/**
 *
 * @ EvolutionScript FULL DECODED & NULLED
 *
 * @ Version  : 5.0
 * @ Author   : MTIMER
 * @ Release on : 2014-03-10
 * @ Website  : http://www.mtimer.net
 *
 **/

if (!defined("EvolutionScript")) {
	exit("Hacking attempt...");
}

include INCLUDES . "plugins/phpmailer/class.phpmailer.php";
include INCLUDES . "classes/class_core.php";
include INCLUDES . "classes/class_mail.php";
include INCLUDES . "classes/class_mail_system.php";
include INCLUDES . "plugins/smarty/Smarty.class.php";
include INCLUDES . "plugins/phpfastcache/phpfastcache_registry.php";
include INCLUDES . "functions.php";
include INCLUDES . "adfunctions.php";
$ptcevolution = new Registry();
$input = new Input_Cleaner();
$db = new Database();
$db->connect($ptcevolution->config['Database']['dbname'], $ptcevolution->config['Database']['servername'], $ptcevolution->config['Database']['username'], $ptcevolution->config['Database']['password']);
$software['version'] = $ptcevolution->config['Misc']['version'];
?>