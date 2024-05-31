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


if(isset($_POST["secretKey"]) && isset($_POST["searchJobTitle"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$searchJobTitle = $_POST["searchJobTitle"];	
	/*Query string*/


	/*Prep variables*/
	$mms_Connection = connectToDb("MMSdb");	
	$platform_Connection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$jobTitles_Resp = new stdClass();
	$jobTitles_Resp->validAccess = true;
	$jobTitles_Resp->mms_Connection = $mms_Connection->serverConnection;
	$jobTitles_Resp->platform_Connection = $platform_Connection->serverConnection;	
	$jobTitles_Resp->validToken = null;
	$jobTitles_Resp->execution = null;	
	$jobTitles_Resp->jobTitleDetails_Array = array();

	$validToken = null;
	$execution = null;		
	$jobTitleDetails_Array = array();	
	/*Prep response*/


	/*Check connection*/
	if($mms_Connection->serverConnection != null || $platform_Connection->serverConnection != null){
		echo json_encode($jobTitles_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($platform_Connection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$jobTitles_Resp->validToken = $validToken;

		echo json_encode($jobTitles_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$jobTitles_Resp->validToken = $validToken;

		echo json_encode($jobTitles_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$dbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){		
				
		/*Get Job Titles Details*/
		/*_Prep query*/
		$jobTitles_Query = "
			SELECT * FROM setting_job_titles 
			WHERE code IS NOT NULL 
		";

		if(!empty($searchJobTitle)){
			$jobTitles_Query .= "AND name LIKE :searchJobTitle ";
		}

		$jobTitles_Query .= "ORDER BY name;";
		/*_Prep query*/

		/*_Execute query*/
		$jobTitles_QueryObj = $mms_Connection->selectedPdoConn->prepare($jobTitles_Query);

		if(!empty($searchJobTitle)){
			$jobTitles_QueryObj->bindValue(':searchJobTitle', '%'.$searchJobTitle.'%', PDO::PARAM_STR);
		}		

		$execution = $jobTitles_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){
			while($jobTitle_Assoc = $jobTitles_QueryObj->fetch(PDO::FETCH_ASSOC)){
				$jobTitleDetails_Array[] = $jobTitle_Assoc;
			}
		}		
		/*_Fetching*/
		/*Get Job Titles Details*/		
	}
	

	/*Disconnect*/
	$dbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$jobTitles_Resp->execution = $execution;
	$jobTitles_Resp->jobTitleDetails_Array = $jobTitleDetails_Array;

	echo json_encode($jobTitles_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else if(!isset($_POST["secretKey"]) || !isset($_POST["searchJobTitle"])){
	
	$jobTitles_Resp = new stdClass();
	$jobTitles_Resp->validAccess = false;
	$jobTitles_Resp->mms_Connection = null;
	$jobTitles_Resp->platform_Connection = null;
	$jobTitles_Resp->validToken = null;
	$jobTitles_Resp->execution = null;	
	$jobTitles_Resp->jobTitleDetails_Array = null;

	echo json_encode($jobTitles_Resp, JSON_NUMERIC_CHECK);
}
?>