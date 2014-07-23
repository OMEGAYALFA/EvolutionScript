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

$productprice = $item * 2;
addpurchasebalance($user_info['id'], $productprice);
$db->query("UPDATE members SET money=money-" . $item . " WHERE id=" . $user_info['id']);
?>