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
require_once "../../Global PHP/CreateSessions.php";
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["empId"]) && isset($_POST["password"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$empId = $_POST["empId"];	
	$password = $_POST["password"];	
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;		
	$validEmpId = false;
	$validAccount = false;
	$accountDetails = new stdClass();
	$correctPassword = null;

	$login_Resp = new stdClass();
	$login_Resp->validAccess = true;	
	$login_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$login_Resp->validToken = $validToken;
	$login_Resp->execution = $execution;	
	$login_Resp->validEmpId = $validEmpId;
	$login_Resp->validAccount = $validAccount;
	$login_Resp->accountDetails = $accountDetails;	
	$login_Resp->correctPassword = $correctPassword;
	$login_Resp->endpoint = "../../index.php";	
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($login_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($login_Resp, JSON_NUMERIC_CHECK);

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
		$login_Resp->validToken = $validToken;

		echo json_encode($login_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$login_Resp->validToken = $validToken;

		echo json_encode($login_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Check Identifier*/
		$getIdentifier_Obj = getIdentifier($vmcplatDbConnection->selectedPdoConn, $empId);

		if($getIdentifier_Obj->identifierFound == 0){
			echo json_encode($login_Resp, JSON_NUMERIC_CHECK);

			/*_Disconnect*/
			$vmcplatDbConnection = null;
			/*_Disconnect*/

			return;
		}else if($getIdentifier_Obj->identifierFound != 0){
			$validEmpId = true;
		}
		/*Check Identifier*/

		/*Login*/
		/*_Prep query*/
		$loginAccount_Query = "
			SELECT * 
			FROM accounts_tab 
			WHERE account_id = :empId 
			AND account_password = :password
			AND account_status = 1;
		";		
		/*_Prep query*/

		/*_Execute query*/
		$loginAccount_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($loginAccount_Query);
		$loginAccount_QueryObj->bindValue(':empId', $empId, PDO::PARAM_STR);
		$loginAccount_QueryObj->bindValue(':password', md5($password.$getIdentifier_Obj->identifier), PDO::PARAM_STR);		
		$execution = $loginAccount_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			if($loginAccount_QueryObj->rowCount() != 0){
				$validAccount = true;

				if($loginAccount_Assoc = $loginAccount_QueryObj->fetch(PDO::FETCH_ASSOC)){
					$accountDetails = $loginAccount_Assoc;
					$correctPassword = $password;

					createSessions($accountDetails, $correctPassword);
				}
			}
		}		
		/*_Fetching*/
		/*Login*/		
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$login_Resp->execution = $execution;
	$login_Resp->validEmpId = $validEmpId;
	$login_Resp->validAccount = $validAccount;	
	$login_Resp->accountDetails = $accountDetails;
	$login_Resp->correctPassword = $correctPassword;

	echo json_encode($login_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else if(!isset($_POST["secretKey"]) || !isset($_POST["empId"]) || !isset($_POST["password"])){
	
	$login_Resp = new stdClass();
	$login_Resp->validAccess = false;
	

	echo json_encode($login_Resp, JSON_NUMERIC_CHECK);
}
?>