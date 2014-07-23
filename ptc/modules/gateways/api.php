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

class EgoPayAuth {
	protected $sAccountName;
	protected $sApiId;
	protected $sApiPass;

	function __construct($sAccountName, $sApiId, $sApiPass) {
		$this->sAccountName = $sAccountName;
		$this->sApiId = $sApiId;
		$this->sApiPass = $sApiPass;
	}

	function getAccountName() {
		return $this->sAccountName;
	}

	function getApiId() {
		return $this->sApiId;
	}

	function getApiPass() {
		return $this->sApiPass;
	}
}

class EgoPayApiException extends Exception {
}

class TransactionDetails {
	var $sId;
	var $sDate;
	var $fAmount;
	var $fFee;
	var $sEmail;
	var $sType;
	var $sDetails;
	var $sStatus;
}

include_once "EgoPayJsonApiAgent.php";
?>