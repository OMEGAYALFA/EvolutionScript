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
@session_start();
define("EvolutionScript", 1);
require_once "global.php";
$gateway = $db->fetchRow("SELECT * FROM gateways WHERE id=500");
$m_api = $gateway['account'];

if ($input->p['type'] == "deposit") {
	$upgrade = 0;
	$upgrade_id = 0;
}
else {
	$upgrade = 1;
	$upgrade_id = $db->real_escape_string($_POST['upgradeid']);
}


$_SESSION["upgrades"] = $upgrade;


$_SESSION["upgrade_ids"] = $upgrade_id;



$user_id = $db->real_escape_string($_POST['user']);
$user_info = $db->fetchRow("SELECT * FROM members WHERE id=" . $user_id);

$_SESSION["user_ids"]=$user_id;





//marboote be dargah
$id = $db->lastInsertId();
$_SESSION["ids"]=$id;


$amount = number_format($_POST['amount']);
$_SESSION["amounts"]=$amount;

$callback = "" . $settings['site_url'] . "modules/gateways/zarinpal_verify.php";
//marboote be dargah







$Mobile ='';

if (is_numeric($upgrade_id)) {
$Description = "پرداخت کاربر " . $user_info['username'] . " برای ارتقا حساب";
}
else {
$Description = "پرداخت کاربر " . $user_info['username'] . " برای شارژ حساب";
}
$Email= "" . $user_info['email'] . "";
$client = new SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8')); 
$result = $client->PaymentRequest(
						array(
								'MerchantID' 	=> $m_api,
								'Amount' 	=> $amount,
								'Description' 	=> $Description,
								'Email' 	=> $Email,
								'Mobile' 	=> $Mobile,
								'CallbackURL' 	=> $callback
							)
);


if($result->Status == 100)
{
Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
} else {
echo'ERR: '.$result->Status;
}

?>