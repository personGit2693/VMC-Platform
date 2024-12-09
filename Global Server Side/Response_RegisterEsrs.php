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
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["account_section"]) && isset($_POST["account_id"]) && isset($_POST["account_fname"]) && isset($_POST["account_mname"]) && isset($_POST["account_lname"]) && isset($_POST["account_suffix"]) && isset($_POST["account_password"]) && isset($_POST["account_identifier"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$account_id = mb_strtoupper(trim($_POST["account_id"]));
	$account_fname = mb_strtoupper(trim($_POST["account_fname"]));
	$account_mname = mb_strtoupper(trim($_POST["account_mname"]));
	$account_lname = mb_strtoupper(trim($_POST["account_lname"]));
	$account_suffix = $_POST["account_suffix"];			
	$account_password = $_POST["account_password"];
	$account_identifier = $_POST["account_identifier"];	
	$account_section = $_POST["account_section"];
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	$esrsDbConnection = connectToDb("service_request");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$esrsAccountRegistered = null;
	$esrsAccountRequested = null;
	
	$registerEsrs_Resp = new stdClass();	
	$registerEsrs_Resp->validAccess = true;
	$registerEsrs_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$registerEsrs_Resp->esrsDbConnection = $esrsDbConnection;	
	$registerEsrs_Resp->validToken = $validToken;
	$registerEsrs_Resp->execution = $execution;
	$registerEsrs_Resp->esrsAccountRegistered = $esrsAccountRegistered;
	$registerEsrs_Resp->esrsAccountRequested = $esrsAccountRequested;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**VMC Platform DB Connection*/


	/**ESRS DB Connection*/
	if($esrsDbConnection->serverConnection != null){
		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($esrsDbConnection->selectedPdoConn == null){
		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**ESRS DB Connection*/
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($vmcplatDbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$registerEsrs_Resp->validToken = $validToken;

		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$registerEsrs_Resp->validToken = $validToken;

		echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$esrsDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
				
		/*Register ESRS new account*/
		/*_Prep query*/
		$registerEsrs_Query = "
			INSERT INTO accounts_tab (
				account_empid, 
				account_password, 
				account_fname, 
				account_mname, 
				account_lname,
				account_suffix, 								
				account_identifier,
				account_sectionname
			) 
			VALUES (
				:account_id, 
				CONVERT(:account_password, binary(255)),
				:account_fname,
				:account_mname,
				:account_lname,
				:account_suffix,
				:account_identifier,
				:account_section				
			);
		";		
		/*_Prep query*/

		/*_Execute query*/
		$registerEsrs_QueryObj = $esrsDbConnection->selectedPdoConn->prepare($registerEsrs_Query);
		$registerEsrs_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
		$registerEsrs_QueryObj->bindValue(':account_password', $account_password, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_fname', $account_fname, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_mname', $account_mname, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_lname', $account_lname, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_suffix', $account_suffix, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_identifier', $account_identifier, PDO::PARAM_STR);		
		$registerEsrs_QueryObj->bindValue(':account_section', $account_section, PDO::PARAM_STR);
		$execution = $registerEsrs_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){

			if($registerEsrs_QueryObj->rowCount() != 0){	
				$esrsAccountRegistered = true;				
			}
		}		
		/*_Fetching*/
		/*Register ESRS new account*/


		/*Check username exist*/
		/*_Prep query*/
		$checkRegistration_Query = "SELECT account_empid 
		FROM accounts_tab 
		WHERE account_empid = :account_id";
		/*_Prep query*/

		/*_Execute query*/
		$checkRegistration_QueryObj = $esrsDbConnection->selectedPdoConn->prepare($checkRegistration_Query);
		$checkRegistration_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
		$execution = $checkRegistration_QueryObj->execute();
		/*_Execute query*/

		/*_Fetching*/
		if($execution){
			if($checkRegistration_QueryObj->rowCount() !== 0){
				$esrsAccountRequested = true;
			}else if($checkRegistration_QueryObj->rowCount() === 0){
				$esrsAccountRequested = false;
			}
		}
		/*_Fetching*/
		/*Check username exist*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;
	$esrsDbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$registerEsrs_Resp->execution = $execution;
	$registerEsrs_Resp->esrsAccountRegistered = $esrsAccountRegistered;
	$registerEsrs_Resp->esrsAccountRequested = $esrsAccountRequested;

	echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$registerEsrs_Resp = new stdClass();
	$registerEsrs_Resp->validAccess = false;

	echo json_encode($registerEsrs_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>