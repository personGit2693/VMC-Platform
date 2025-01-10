<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
/*Dependency PHP Codes*/


/*Global Required Files*/
require_once "../../Global PHP/Connection.php";
require_once "../../Global PHP/CheckAppKey.php";
require_once "../../Global PHP/GetIdentifier.php";
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["account_id"]) && isset($_POST["account_status"]) && isset($_POST["accountActivated"]) && isset($_POST["accountDeactivated"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$account_id = $_POST["account_id"];
	$account_status = $_POST["account_status"];
	$accountActivated = $_POST["accountActivated"];
	$accountDeactivated = $_POST["accountDeactivated"];
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");

	$newAccountStatusResult = null;
	if($account_status === $accountActivated){
		$newAccountStatusResult = $accountDeactivated;
	}else if($account_status === $accountDeactivated){
		$newAccountStatusResult = $accountActivated;
	}
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$accountUpdated = null;
	$accountNewStatus = null;
	
	$activateAccount_Resp = new stdClass();	
	$activateAccount_Resp->validAccess = true;
	$activateAccount_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$activateAccount_Resp->validToken = $validToken;
	$activateAccount_Resp->execution = $execution;
	$activateAccount_Resp->accountUpdated = $accountUpdated;
	$activateAccount_Resp->accountNewStatus = $accountNewStatus;	
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**VMC Platform DB Connection*/
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($vmcplatDbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$activateAccount_Resp->validToken = $validToken;

		echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$activateAccount_Resp->validToken = $validToken;

		echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){			

		/*Update Account Status*/
		/*_Prep query*/
		$activateAccount_Query = "
			UPDATE accounts_tab 
			SET account_status = :newAccountStatusResult 
			WHERE account_id = :account_id;
		";				
		/*_Prep query*/

		/*_Execute query*/
		$activateAccount_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($activateAccount_Query);
		$activateAccount_QueryObj->bindValue(':newAccountStatusResult', intval($newAccountStatusResult), PDO::PARAM_INT);
		$activateAccount_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);		
		$execution = $activateAccount_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			$accountUpdated = $activateAccount_QueryObj->rowCount();
			$accountNewStatus = $newAccountStatusResult;
		}		
		/*_Fetching*/
		/*Update Account Status*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$activateAccount_Resp->execution = $execution;	
	$activateAccount_Resp->accountUpdated = $accountUpdated;	
	$activateAccount_Resp->accountNewStatus = $accountNewStatus;

	echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}else{

	/*Return response*/
	$activateAccount_Resp = new stdClass();
	$activateAccount_Resp->validAccess = false;

	echo json_encode($activateAccount_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>