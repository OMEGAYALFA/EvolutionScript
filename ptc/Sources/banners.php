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

require SMARTYLOADER;
$bannersql = $db->query("SELECT * FROM site_banners ORDER BY ID ASC");
$banners = array();

while ($row = $db->fetch_array($bannersql)) {
	$row['url'] = str_replace("%username%", encrypt($user_info['username']), $row['url']);
	$banners[] = $row;
}

$smarty->assign("total_banners", count($banners));
$smarty->assign("banner", $banners);
$smarty->assign("file_name", "banners.tpl");
$smarty->display("account.tpl");
$db->close();
exit();
?>