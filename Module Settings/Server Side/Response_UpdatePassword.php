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
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["newPassword"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$newPassword = $_POST["newPassword"];	
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");
	$account_id = $_SESSION["account_id"];	
	$account_identifier = $_SESSION["account_identifier"];
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$accountUpdated = null;	
	$accountNewPassword = null;
	$accountCorrectPassword = null;
	
	$updatePassword_Resp = new stdClass();	
	$updatePassword_Resp->validAccess = true;
	$updatePassword_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$updatePassword_Resp->validToken = $validToken;
	$updatePassword_Resp->execution = $execution;	
	$updatePassword_Resp->accountUpdated = $accountUpdated;
	$updatePassword_Resp->accountNewPassword = $accountNewPassword;
	$updatePassword_Resp->accountCorrectPassword = $accountCorrectPassword;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);

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
		$updatePassword_Resp->validToken = $validToken;

		echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$updatePassword_Resp->validToken = $validToken;

		echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
				
		/*Update Account Password*/		
		/*_Prep query*/
		$updatePassword_Query = "
			UPDATE accounts_tab 
			SET account_password = :newPassword 
			WHERE account_id = :account_id;
		";				
		/*_Prep query*/

		/*_Execute query*/
		$updatePassword_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($updatePassword_Query);
		$updatePassword_QueryObj->bindValue(':newPassword', md5($newPassword.$account_identifier), PDO::PARAM_STR);
		$updatePassword_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);		
		$execution = $updatePassword_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){

			$accountUpdated = $updatePassword_QueryObj->rowCount();

			if($accountUpdated !== 0){
				$accountNewPassword = $_SESSION["account_password"] = md5($newPassword.$account_identifier);
				$accountCorrectPassword = $_SESSION["correctPassword"] = $newPassword;
			}			
		}		
		/*_Fetching*/	
		/*Update Account Password*/						
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$updatePassword_Resp->execution = $execution;
	$updatePassword_Resp->accountUpdated = $accountUpdated;
	$updatePassword_Resp->accountNewPassword = $accountNewPassword;
	$updatePassword_Resp->accountCorrectPassword = $accountCorrectPassword;

	echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$updatePassword_Resp = new stdClass();
	$updatePassword_Resp->validAccess = false;

	echo json_encode($updatePassword_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>