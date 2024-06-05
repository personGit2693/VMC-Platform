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


if(isset($_POST["secretKey"]) && isset($_POST["searchSection"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$searchSection = $_POST["searchSection"];	
	/*Query string*/


	/*Prep variables*/
	$dbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$sections_Resp = new stdClass();
	$sections_Resp->validAccess = true;	
	$sections_Resp->serverConnection = $dbConnection->serverConnection;	
	$sections_Resp->validToken = null;
	$sections_Resp->execution = null;	
	$sections_Resp->sections_Array = array();

	$validToken = null;
	$execution = null;		
	$sections_Array = array();	
	/*Prep response*/


	/*Check connection*/
	if($dbConnection->serverConnection != null){
		echo json_encode($sections_Resp, JSON_NUMERIC_CHECK);

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
		$sections_Resp->validToken = $validToken;

		echo json_encode($sections_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$sections_Resp->validToken = $validToken;

		echo json_encode($sections_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){		
				
		/*Get Job Titles Details*/
		/*_Prep query*/
		$sections_Query = "SELECT * FROM sections_tab;";

		if(!empty($searchSection)){
			$sections_Query .= "WHERE section_name LIKE :searchSection ";
		}

		$sections_Query .= "ORDER BY section_name;";
		/*_Prep query*/

		/*_Execute query*/
		$sections_QueryObj = $dbConnection->selectedPdoConn->prepare($sections_Query);

		if(!empty($searchSection)){
			$sections_QueryObj->bindValue(':searchSection', '%'.$searchSection.'%', PDO::PARAM_STR);
		}		

		$execution = $sections_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			while($sections_Assoc = $sections_QueryObj->fetch(PDO::FETCH_ASSOC)){
				$sections_Array[] = $sections_Assoc;
			}
		}		
		/*_Fetching*/
		/*Get Job Titles Details*/		
	}
	

	/*Disconnect*/
	$dbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$sections_Resp->execution = $execution;
	$sections_Resp->sections_Array = $sections_Array;

	echo json_encode($sections_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else if(!isset($_POST["secretKey"]) || !isset($_POST["searchSection"])){
	
	$sections_Resp = new stdClass();
	$sections_Resp->validAccess = false;
	$sections_Resp->dbConnection = null;	
	$sections_Resp->validToken = null;
	$sections_Resp->execution = null;	
	$sections_Resp->sections_Array = null;

	echo json_encode($sections_Resp, JSON_NUMERIC_CHECK);
}
?>