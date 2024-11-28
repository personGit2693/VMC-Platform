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


if(isset($_POST["secretKey"]) && isset($_POST["empId"]) && isset($_POST["empFname"]) && isset($_POST["empMname"]) && isset($_POST["empLname"]) && isset($_POST["empSuffix"]) && isset($_POST["empSection"]) && isset($_POST["empPassword"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$empId = $_POST["empId"];	
	$empFname = $_POST["empFname"];
	$empMname = $_POST["empMname"];
	$empLname = $_POST["empLname"];
	$empSuffix = $_POST["empSuffix"];
	$empSection = $_POST["empSection"];
	$empPassword = $_POST["empPassword"];
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	

	/**Generate Unique Identifier*/
	$alphanumeric = "abcdefghijklmnopqrstuvwxyz1234567890!@";
	$shuffled_AlphaNum = str_shuffle($alphanumeric);
	$getHalfShuffled_Value = substr($shuffled_AlphaNum, 0, strlen($alphanumeric)/2);
	$uniqueIdentifier =  rand(1000,9999).$getHalfShuffled_Value.rand(1000,9999);
	/**Generate Unique Identifier*/
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;		
	$addedAccount = 0;

	$registration_Resp = new stdClass();
	$registration_Resp->validAccess = true;	
	$registration_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$registration_Resp->validToken = $validToken;
	$registration_Resp->execution = $execution;	
	$registration_Resp->addedAccount = $addedAccount;
	$registration_Resp->endpoint = "./Page_RegistrationSuccess.php";
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);

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
		$registration_Resp->validToken = $validToken;

		echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$registration_Resp->validToken = $validToken;

		echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){		
				
		/*Register*/
		/*_Prep query*/
		$register_Query = "
			INSERT INTO accounts_tab(account_id,
				account_fname,
				account_mname,
				account_lname,
				account_suffix,
				account_password,
				account_identifier,
				account_section
			) VALUES(:empId,
				:empFname,
				:empMname,
				:empLname,
				:empSuffix,			
				:empPassword,
				:uniqueIdentifier,
				:empSection
			);
		";		
		/*_Prep query*/

		/*_Execute query*/
		$register_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($register_Query);
		$register_QueryObj->bindValue(':empId', $empId, PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empFname', trim(ucfirst($empFname)), PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empMname', trim(ucfirst($empMname)), PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empLname', trim(ucfirst($empLname)), PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empSuffix', $empSuffix, PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empPassword', md5($empPassword.$uniqueIdentifier), PDO::PARAM_STR);
		$register_QueryObj->bindValue(':uniqueIdentifier', $uniqueIdentifier, PDO::PARAM_STR);
		$register_QueryObj->bindValue(':empSection', $empSection, PDO::PARAM_STR);

		$execution = $register_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			$addedAccount = $register_QueryObj->rowCount();
		}		
		/*_Fetching*/
		/*Register*/		
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$registration_Resp->execution = $execution;
	$registration_Resp->addedAccount = $addedAccount;

	echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else if(!isset($_POST["secretKey"]) || !isset($_POST["empId"]) || !isset($_POST["empFname"]) || !isset($_POST["empMname"]) || !isset($_POST["empLname"]) || !isset($_POST["empSuffix"]) || !isset($_POST["empSection"]) || !isset($_POST["empPassword"])){
	
	$registration_Resp = new stdClass();
	$registration_Resp->validAccess = false;
	

	echo json_encode($registration_Resp, JSON_NUMERIC_CHECK);
}
?>