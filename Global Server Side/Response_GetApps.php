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


if(isset($_POST["secretKey"]) && isset($_POST["searchApp"]) && isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$searchApp = $_POST["searchApp"];	
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$apps = array();
	
	$getApps = new stdClass();	
	$getApps->validAccess = true;
	$getApps->vmcplatDbConnection = $vmcplatDbConnection;		
	$getApps->validToken = $validToken;
	$getApps->execution = $execution;
	$getApps->apps = $apps;	
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($getApps, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($getApps, JSON_NUMERIC_CHECK);

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
		$getApps->validToken = $validToken;

		echo json_encode($getApps, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$getApps->validToken = $validToken;

		echo json_encode($getApps, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
				
		/*Get apps details*/
		/*_Prep query*/
		$getAppsDetails_Query = "SELECT * FROM apps_tab ";

		if(!empty($searchApp)){
			$getAppsDetails_Query .= "
				WHERE app_nameid LIKE :searchApp 
				OR app_abbre LIKE :searchApp 
			";
		}

		$getAppsDetails_Query .= "ORDER BY app_nameid ASC;";		
		/*_Prep query*/

		/*_Execute query*/
		$getAppsDetails_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($getAppsDetails_Query);

		if(!empty($searchApp)){
			$getAppsDetails_QueryObj->bindValue(':searchApp', '%'.$searchApp.'%', PDO::PARAM_STR);	
		}

		$execution = $getAppsDetails_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){

			while($appsDetails_Assoc = $getAppsDetails_QueryObj->fetch(PDO::FETCH_ASSOC)){
				$apps[] = $appsDetails_Assoc;
			}			
		}		
		/*_Fetching*/
		/*Get apps details*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$getApps->execution = $execution;
	$getApps->apps = $apps;	

	echo json_encode($getApps, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$getApps = new stdClass();
	$getApps->validAccess = false;

	echo json_encode($getApps, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>