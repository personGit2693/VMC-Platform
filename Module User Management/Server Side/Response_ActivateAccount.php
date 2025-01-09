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


if(isset($_POST["secretKey"]) && isset($_POST["account_id"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$account_id = $_POST["account_id"];		
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$resetPassword = null;
	$newPassword = null;
	
	$resetPassword_Resp = new stdClass();	
	$resetPassword_Resp->validAccess = true;
	$resetPassword_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$resetPassword_Resp->validToken = $validToken;
	$resetPassword_Resp->execution = $execution;
	$resetPassword_Resp->newPassword = $newPassword;	
	$resetPassword_Resp->resetPassword = $resetPassword;	
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);

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
		$resetPassword_Resp->validToken = $validToken;

		echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$resetPassword_Resp->validToken = $validToken;

		echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Random Password*/
		$alphanumeric = "abcdefghijklmnopqrstuvwxyz";
		$shuffled_AlphaNum = str_shuffle($alphanumeric);
		$getHalfShuffled_Value = substr($shuffled_AlphaNum, 0, 4);
		$newPassword =  $getHalfShuffled_Value;
		/*Random Password*/

		/*Get Identifier*/
		$getIdentifier_Obj = getIdentifier($vmcplatDbConnection->selectedPdoConn, $account_id);		
		/*Get Identifier*/

		/*Reset Password*/
		/*_Prep query*/
		$resetPassword_Resp_Query = "
			UPDATE accounts_tab 
			SET account_password = :newPassword 
			WHERE account_id = :account_id;
		";				
		/*_Prep query*/

		/*_Execute query*/
		$resetPassword_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($resetPassword_Resp_Query);
		$resetPassword_QueryObj->bindValue(':newPassword', md5($newPassword.$getIdentifier_Obj->identifier), PDO::PARAM_STR);
		$resetPassword_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);		
		$execution = $resetPassword_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			$resetPassword= $resetPassword_QueryObj->rowCount();
		}		
		/*_Fetching*/
		/*Reset Password*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$resetPassword_Resp->execution = $execution;
	$resetPassword_Resp->newPassword = $newPassword;
	$resetPassword_Resp->resetPassword = $resetPassword;	

	echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$resetPassword_Resp = new stdClass();
	$resetPassword_Resp->validAccess = false;

	echo json_encode($resetPassword_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>