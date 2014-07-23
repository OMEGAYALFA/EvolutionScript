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

include SMARTYLOADER;
$terms_content = $cache->get("terms_content");

if ($terms_content == null) {
	$terms_content = $db->fetchOne("SELECT content FROM site_content WHERE id='terms'");
	$cache->set("terms_content", $terms_content, 604800);
}

$smarty->assign("terms_content", $terms_content);
$smarty->display("terms.tpl");
$db->close();
exit();
?>