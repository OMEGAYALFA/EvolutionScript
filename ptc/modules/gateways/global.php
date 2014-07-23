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

define("INCLUDESPATH", dirname(dirname(dirname(__FILE__))) . "/includes/");
define("GATEWAYS", dirname(__FILE__) . "/");
require_once INCLUDESPATH . "global.php";
$query = $db->query("SELECT * FROM settings");

while ($result = $db->fetch_array($query)) {
	$settings[$result['field']] = $result['value'];
}

?>