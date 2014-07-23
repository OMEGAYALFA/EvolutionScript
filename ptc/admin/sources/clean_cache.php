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


if (!$admin->permissions['utilities']) {
	header("location: ./");
	exit();
}


if ($input->p['do'] == "cleancache") {
	verifyajax();
	verifydemo();
	$cache->clean();
	serveranswer(1, "کش ها پاک شدند");
}

include SOURCES . "header.php";
echo "<div class=\"site_title\">پاک کردن کش ها</div>
<div class=\"site_content\">
<form method=\"post\" id=\"repairstatistics\" onsubmit=\"return submitform(this.id);\">
<input type=\"hidden\" name=\"do\" value=\"cleancache\" />
<div class=\"info_box\">این عملیات ، کش سایت شما را پاک خواهد کرد</div>
    <input type=\"submit\" name=\"btn\" value=\"پاک کردن کش ها\" />
</form>
</div>

";
include SOURCES . "footer.php";
echo " ";
?>