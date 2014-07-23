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


if ($input->p['a'] == "create") {
	verifyajax();
	verifydemo();
	$required_fields = array("title", "ad", "credits");
	foreach ($required_fields as $k) {

		if (!$input->p[$k]) {
			serveranswer(0, "پرکردن همه فیلدها ضروری است");
			continue;
		}
	}

	$data = array("title" => $input->pc['title'], "url" => $input->p['url'], "ad" => $input->pc['ad'], "credits" => $input->pc['credits'], "status" => "Active");
	$insert = $db->insert("featured_ads", $data);
	serveranswer(2, "آگهی جدید ایجاد شد . برای مدیریت آن <a href='./?view=managefad'>کلیک کنید</a>");
}

include SOURCES . "header.php";
echo "<div class=\"site_title\">افزودن آگهی ویژه جدید</div>
<div class=\"site_content\">
<form method=\"post\" id=\"fadsform\" onsubmit=\"return submitform(this.id);\">
<input type=\"hidden\" name=\"a\" value=\"create\" />
<table width=\"100%\" class=\"widget-tbl\">
  <tr>
    <td width=\"100\">عنوان</td>
    <td><input name=\"title\" type=\"text\" id=\"title\" /></td>
    </tr>
  <tr>
    <td>آدرس مقصد</td>
    <td><input name=\"url\"  style=\"direction:ltr !important;\" type=\"text\" id=\"url\" value=\"http://\" /></td>
  </tr>
  <tr>
    <td>تبلیغ</td>
    <td><textarea name=\"ad\" id=\"textarea\" style=\"width:90%; height:100px;\"></textarea></td>
  </tr>
  <tr>
    <td>اعتبار</td>
    <td><input name=\"credits\" type=\"text\" id=\"credits\" value=\"0\" /></td>
  </tr>
  <tr>
  	<td></td>
    <td>
		<input type=\"submit\" name=\"create\" value=\"ایجاد\" />
    </td>
  </tr>
</table>
</form>
</div>
        ";
include SOURCES . "footer.php";
echo " ";
?>