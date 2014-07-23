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


if ($input->p['do'] == "update") {
	verifyajax();
	verifydemo();
	$data = array("googleanalytics" => $input->pc['googleanalytics'], "googleanalyticsid" => $input->pc['googleanalyticsid']);
	foreach ($data as $field => $value) {
		$db->query("UPDATE settings SET value='" . $value . "' WHERE field='" . $field . "'");
	}

	$cache->delete("settings");
	serveranswer(1, "تنظیمات بروز شد");
}

include SOURCES . "header.php";
echo "<div class=\"site_title\">Google Analytics</div>
<div class=\"site_content\">
<div class=\"info_box\">شما نیاز به یک حساب Google Analytics دارید که با عضویت در گوگل وبمستر میتوانید آن را ایجاد کنید
</div>
<form method=\"post\" id=\"frm1\" onsubmit=\"return submitform(this.id);\">
<input type=\"hidden\" name=\"do\" value=\"update\" />
<table class=\"widget-tbl\" width=\"100%\">
  <tr>
    <td align=\"right\">فعال سازی Google Analytics : </td>
    <td><input type=\"checkbox\" name=\"googleanalytics\" value=\"yes\" ";

if ($settings['googleanalytics'] == "yes") {
	echo "checked";
}

echo " />
برای فعال سازی تیک بزنید</td>
  </tr>
  <tr>
    <td align=\"right\">ID آنالیزگر گوگل</td>
    <td><input type=\"text\" name=\"googleanalyticsid\" id=\"googleanalyticsid\" value=\"";
echo $settings['googleanalyticsid'];
echo "\" style=\"width:200px\" />
      مانند : UA-13583232</td>
  </tr>
  <tr>
  	<td></td>
  	<td>
    <input type=\"submit\" name=\"save\" value=\"ذخیره\" class=\"orange\" />
    </td>
  </tr>
</table>
</form>


</div>


        ";
include SOURCES . "footer.php";
echo " ";
?>