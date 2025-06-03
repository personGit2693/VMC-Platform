<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
/*Dependency PHP Codes*/


/*Global Required Files*/
require_once "./../Global PHP/Connection.php";
require_once "./../Global PHP/CheckAppKey.php";
require_once "./../Global PHP/GetAllAccessLevels.php";
require_once "./../Global PHP/GetAccountAccess.php";
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");

	$endpoint = null;
	if(isset($_SESSION["endpoint"])){
		$endpoint = $_SESSION["endpoint"];
	}	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$validAccount = null;
	$globalKey = null;
	$accesslevels = array();
	$accountAccess = array();

	
	$getLoginDetails_Resp = new stdClass();	
	$getLoginDetails_Resp->validAccess = true;
	$getLoginDetails_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$getLoginDetails_Resp->validToken = $validToken;
	$getLoginDetails_Resp->execution = $execution;
	$getLoginDetails_Resp->validAccount = $validAccount;
	$getLoginDetails_Resp->globalKey = $globalKey;		
	$getLoginDetails_Resp->endpoint = $endpoint;
	$getLoginDetails_Resp->accesslevels = $accesslevels;
	$getLoginDetails_Resp->accountAccess = $accountAccess;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);

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
		$getLoginDetails_Resp->validToken = $validToken;

		echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$getLoginDetails_Resp->validToken = $validToken;

		echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Get all access levels*/
		$getAllAccessLevels_Obj = GetAllAccessLevels($vmcplatDbConnection->selectedPdoConn);
		$accesslevels = $getAllAccessLevels_Obj->accesslevels;
		$execution = $getAllAccessLevels_Obj->execution;
		/*Get all access levels*/


		/*Get Account access*/
		if($execution){
			$getAccountAccess_Obj = GetAccountAccess($vmcplatDbConnection->selectedPdoConn, $_SESSION["account_id"]);
			$accountAccess = $getAccountAccess_Obj->accountAccess;
			$execution = $getAccountAccess_Obj->execution;
		}
		/*Get Account access*/


		/*Check Account Session Details*/
		if($execution){
			/*_Prep query*/
			$checkAccountSession_Query = "
				SELECT * 
				FROM accounts_tab 
				WHERE account_id = :account_id 
				AND account_password = :account_password
				AND account_status = 1;
			";		
			/*_Prep query*/

			/*_Execute query*/
			$checkAccountSession_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($checkAccountSession_Query);
			$checkAccountSession_QueryObj->bindValue(':account_id', $_SESSION["account_id"], PDO::PARAM_STR);
			$checkAccountSession_QueryObj->bindValue(':account_password', $_SESSION["account_password"], PDO::PARAM_STR);		
			$execution = $checkAccountSession_QueryObj->execute();		
			/*_Execute query*/

			/*_Fetching*/		
			if($execution){
				if($checkAccountSession_QueryObj->rowCount() != 0){	
					$validAccount = true;

					$accountSession_Obj = new stdClass();
					$accountSession_Obj->account_id = $_SESSION["account_id"];
					$accountSession_Obj->account_fname = $_SESSION["account_fname"];
					$accountSession_Obj->account_mname = $_SESSION["account_mname"];
					$accountSession_Obj->account_lname = $_SESSION["account_lname"];
					$accountSession_Obj->account_suffix = $_SESSION["account_suffix"];
					$accountSession_Obj->account_password = $_SESSION["account_password"];				
					$accountSession_Obj->account_identifier = $_SESSION["account_identifier"];				
					$accountSession_Obj->account_picture = $_SESSION["account_picture"];
					$accountSession_Obj->account_status = $_SESSION["account_status"];				
					$accountSession_Obj->account_section = $_SESSION["account_section"];				
					$accountSession_Obj->correctPassword = $_SESSION["correctPassword"];

					$globalKey = base64_encode(json_encode($accountSession_Obj, JSON_NUMERIC_CHECK));
				}
			}		
			/*_Fetching*/
		}
		/*Check Account Session Details*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$getLoginDetails_Resp->execution = $execution;
	$getLoginDetails_Resp->validAccount = $validAccount;	
	$getLoginDetails_Resp->globalKey = $globalKey;
	$getLoginDetails_Resp->accesslevels = $accesslevels;
	$getLoginDetails_Resp->accountAccess = $accountAccess;	

	echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$getLoginDetails_Resp = new stdClass();
	$getLoginDetails_Resp->validAccess = false;

	echo json_encode($getLoginDetails_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>