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


if(isset($_POST["secretKey"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	/*Query string*/


	/*Prep variables*/
	$dbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$suffixes_Resp = new stdClass();
	$suffixes_Resp->validAccess = true;
	$suffixes_Resp->serverConnection = $dbConnection->serverConnection;
	$suffixes_Resp->validToken = null;
	$suffixes_Resp->execution = null;	
	$suffixes_Resp->suffixDetails_Array = array();

	$validToken = null;
	$execution = null;		
	$suffixDetails_Array = array();	
	/*Prep response*/


	/*Check connection*/
	if($dbConnection->serverConnection != null){

		echo json_encode($suffixes_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($dbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$suffixes_Resp->validToken = $validToken;

		echo json_encode($suffixes_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$suffixes_Resp->validToken = $validToken;

		echo json_encode($suffixes_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){		
				
		/*Get Suffixes Details*/
		/*_Prep query*/
		$suffixes_Query = "SELECT * FROM suffixes_tab ORDER BY suffix_text;";				
		/*_Prep query*/

		/*_Execute query*/
		$suffixes_QueryObj = $dbConnection->selectedPdoConn->prepare($suffixes_Query);
		$execution = $suffixes_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/
		
		if($execution){
			while($suffix_Assoc = $suffixes_QueryObj->fetch(PDO::FETCH_ASSOC)){
				$suffixDetails_Array[] = $suffix_Assoc;
			}
		}		
		/*_Fetching*/
		/*Get Suffixes Details*/		
	}
	

	/*Disconnect*/
	$dbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$suffixes_Resp->execution = $execution;
	$suffixes_Resp->suffixDetails_Array = $suffixDetails_Array;

	echo json_encode($suffixes_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else if(!isset($_POST["secretKey"])){
	
	$suffixes_Resp = new stdClass();
	$suffixes_Resp->validAccess = false;
	$suffixes_Resp->serverConnection = null;
	$suffixes_Resp->validToken = null;
	$suffixes_Resp->execution = null;	
	$suffixes_Resp->suffixDetails_Array = null;

	echo json_encode($suffixes_Resp, JSON_NUMERIC_CHECK);
}
?>