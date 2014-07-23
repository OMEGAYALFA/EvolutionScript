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

$package = $db->fetchOne("SELECT refs FROM referral_price WHERE id=" . $order['item_id']);
$countrefs = referralsleft($order['user_id']);

if ($package <= $countrefs) {
	addboughtmembers($order['user_id'], $package);
	return 1;
}

$error_msg = "There is not enough referrals to add.";
?>