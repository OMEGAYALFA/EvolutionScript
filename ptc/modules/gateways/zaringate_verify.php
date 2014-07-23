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
$gateway = $db->fetchRow("SELECT * FROM gateways WHERE id=501");



//marboot be dargah
$m_api = $gateway['account'];
$id = $_SESSION["ids"];
$amount = $_SESSION["amounts"]; 
$au = $_SESSION["aus"];
//marboot be dargah


$order_id = $_SESSION["user_ids"];
$upgrade = $_SESSION["$upgrades"];
$upgrade_id = $_SESSION["upgrade_ids"];
$today = TIMENOW;



$Authority = $_GET['Authority'];
$batch = $Authority;



if($_GET['Status'] == 'OK'){

// URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
$client = new SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8')); 
$result = $client->PaymentVerification(
						  	array(
									'MerchantID'	 => $m_api,
									'Authority' 	 => $Authority,
									'Amount'	 => $amount
								)
		);



if($result->Status == 100){


		$customer = $result->RefID;


		if (is_numeric($upgrade_id)) {
	        include GATEWAYS . "process_upgrade.php";
	        header("location:" . $settings['site_url'] . "index.php?view=account&page=thankyou&type=upgrade");
                exit();
		}
		
                else {		
		include GATEWAYS . "process_deposit.php";
	        header("location:" . $settings['site_url'] . "index.php?view=account&page=thankyou&type=funds");
                exit();
                }


}

else {

if (is_numeric($upgrade_id)) {
header("location:" . $settings['site_url'] . "index.php?view=account&page=upgrade");
exit();} 

else  {
header("location: " . $settings['site_url'] . "index.php?view=account&page=addfunds");
exit();}


}

}




else {

if (is_numeric($upgrade_id)) {
header("location:" . $settings['site_url'] . "index.php?view=account&page=upgrade");
exit();} 

else  {
header("location: " . $settings['site_url'] . "index.php?view=account&page=addfunds");
exit();}


}








?>