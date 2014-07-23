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

define("EvolutionScript", 1);
require_once "includes/global.php";
$query = $db->query("SELECT * FROM settings");

while ($result = $db->fetch_array($query)) {
	$settings[$result['field']] = $result['value'];
}

$gateway = $db->fetchRow("SELECT * FROM gateways WHERE id=6");

if ($input->p['status'] == "ACCEPTED") {
	$amount = $input->pc['amount'];
	$db->query("UPDATE withdraw_history SET status='Completed', date='" . TIMENOW . ("' WHERE id=" . $input->pc['udf1']));
	$upd = $db->query("UPDATE gateways SET total_withdraw=total_withdraw+" . $amount . " WHERE id=" . $gateway['id']);
	$db->query("UPDATE members SET pending_withdraw=pending_withdraw-" . $amount . ", withdraw=withdraw+" . $amount . " WHERE id=" . $input->pc['udf2']);
}

?>