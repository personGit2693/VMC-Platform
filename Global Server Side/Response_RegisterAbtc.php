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
	$abtcDbConnection = connectToDb("ABTC");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$abtcAccountRegistered = null;
	$abtcAccountRequested = null;
	
	$registerAbtc_Resp = new stdClass();	
	$registerAbtc_Resp->validAccess = true;
	$registerAbtc_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$registerAbtc_Resp->abtcDbConnection = $abtcDbConnection;	
	$registerAbtc_Resp->validToken = $validToken;
	$registerAbtc_Resp->execution = $execution;
	$registerAbtc_Resp->abtcAccountRegistered = $abtcAccountRegistered;
	$registerAbtc_Resp->abtcAccountRequested = $abtcAccountRequested;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**VMC Platform DB Connection*/


	/**ABTC DB Connection*/
	if($abtcDbConnection->serverConnection != null){
		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($abtcDbConnection->selectedPdoConn == null){
		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**ABTC DB Connection*/
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($vmcplatDbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$registerAbtc_Resp->validToken = $validToken;

		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$registerAbtc_Resp->validToken = $validToken;

		echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$abtcDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Check username exist*/
		/*_Prep query*/
		$checkRegistration_Query = "SELECT account_empid 
		FROM accounts_tab 
		WHERE account_empid = :account_id";
		/*_Prep query*/

		/*_Execute query*/
		$checkRegistration_QueryObj = $abtcDbConnection->selectedPdoConn->prepare($checkRegistration_Query);
		$checkRegistration_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
		$execution = $checkRegistration_QueryObj->execute();
		/*_Execute query*/

		/*_Fetching*/
		if($execution){
			
			if($checkRegistration_QueryObj->rowCount() !== 0){
				$abtcAccountRequested = true;
			}else if($checkRegistration_QueryObj->rowCount() === 0){
				$abtcAccountRequested = false;
			}
		}
		/*_Fetching*/
		/*Check username exist*/

		if(!$abtcAccountRequested){
		
			/*Register ABTC new account*/
			/*_Prep query*/
			$registerAbtc_Query = "
				INSERT INTO accounts_tab (
					account_empid, 				
					account_fname, 
					account_mname, 
					account_lname,
					account_suffix,
					account_password,  								
					account_identifier,
					account_sectionname
				) 
				VALUES (
					:account_id, 				
					:account_fname,
					:account_mname,
					:account_lname,
					:account_suffix,
					:account_password,
					:account_identifier,
					:account_section				
				);
			";		
			/*_Prep query*/

			/*_Execute query*/
			$registerAbtc_QueryObj = $abtcDbConnection->selectedPdoConn->prepare($registerAbtc_Query);
			$registerAbtc_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
			$registerAbtc_QueryObj->bindValue(':account_password', md5($account_password.$account_identifier), PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_fname', $account_fname, PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_mname', $account_mname, PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_lname', $account_lname, PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_suffix', $account_suffix, PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_identifier', $account_identifier, PDO::PARAM_STR);		
			$registerAbtc_QueryObj->bindValue(':account_section', $account_section, PDO::PARAM_STR);
			$execution = $registerAbtc_QueryObj->execute();		
			/*_Execute query*/

			/*_Fetching*/		
			if($execution){

				if($registerAbtc_QueryObj->rowCount() != 0){	
					$abtcAccountRegistered = true;				
				}
			}		
			/*_Fetching*/
			/*Register ABTC new account*/	
		}	
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;
	$abtcDbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$registerAbtc_Resp->execution = $execution;
	$registerAbtc_Resp->abtcAccountRegistered = $abtcAccountRegistered;
	$registerAbtc_Resp->abtcAccountRequested = $abtcAccountRequested;

	echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$registerAbtc_Resp = new stdClass();
	$registerAbtc_Resp->validAccess = false;

	echo json_encode($registerAbtc_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>